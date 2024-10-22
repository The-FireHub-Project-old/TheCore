<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Kernel
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Kernel\HTTP;

use FireHub\Core\Kernel\Response as BaseResponse;
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Collection\Type\Indexed;
use FireHub\Core\Support\Enums\HTTP\ {
    CommonMimeType, ContentDisposition, ContentEncoding, SiteData, StatusCode,
    Authentication\Scheme, Contracts\StatusCode as StatusCodeContract, CSP\Directive, CSP\Value
};
use FireHub\Core\Support\Enums\ {
    Language, Hash\Algorithm, String\Encoding
};
use FireHub\Core\Support\LowLevel\ {
    Hash, HTTP
};

/**
 * ### HTTP Response
 *
 * Response holds all the information that needs to be sent back to the client from a given request.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Response extends BaseResponse {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Kernel\HTTP\Request $request <p>
     * Interact with the current HTTP request being handled by your application.
     * </p>
     * @param string $content [optional] <p>
     * Response content.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected readonly Request $request,
        protected string $content = ''
    ) {}

    /**
     * ### Advertises which the server accepts media types for HTTP post requests
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\CommonMimeType As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Str::fromList() To create string from array elements.
     * @uses \FireHub\Core\Support\Str::string() To get string as raw string.
     *
     * @param \FireHub\Core\Support\Enums\HTTP\CommonMimeType|string ...$types <p>
     * Media types.
     * </p>
     *
     * @return $this This response.
     */
    public function acceptPost (CommonMimeType|string ...$types):self {

        $values = [];
        foreach ($types as $type)
            $values[] = $type instanceOf CommonMimeType ? $type->value : $type;

        $this->replaceHeader('Accept-Post: '.Str::fromList($values, ', ')->string());

        return $this;

    }

    /**
     * ### Defines the HTTP authentication methods ("challenges") that might be used to gain access to a specific resource
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\Authentication\Scheme As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Response::setHeader() To send a raw HTTP header.
     *
     * @param \FireHub\Core\Support\Enums\HTTP\Authentication\Scheme $scheme <p>
     * The Authentication scheme that defines how the credentials are encoded.
     * </p>
     * @param string $parameters [optional] <p>
     * Optional parameters for a selected scheme.
     * </p>
     *
     * @return $this This response.
     *
     * @note Multiple authenticated headers can be sent.
     */
    public function authenticate (Scheme $scheme, string $parameters = ''):self {

        $this->setHeader($scheme->value.' '.$parameters);

        return $this;

    }

    /**
     * ### Control caching in browsers
     *
     * Field holds directives (instructions) – in both requests and responses – that control caching in browsers
     * and shared caches (for example, Proxies, CDNs).
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::map() To create a string from a list.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::any() To verify that any item of a collection passes a
     * given truth test.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from a list.
     * @uses \FireHub\Core\Support\Str::string() To get raw string.
     * @uses \FireHub\Core\Support\LowLevel\Hash::generate() To generate a hash value.
     * @uses \FireHub\Core\Kernel\HTTP\Response::content() To get response content.
     * @uses \FireHub\Core\Kernel\HTTP\Request::ifNoneMatch() To check if etag exists.
     * @uses \FireHub\Core\Support\Enums\Hash\Algorithm::MD5 As hash algorithm.
     * @uses \FireHub\Core\Support\Enums\HTTP\StatusCode::NOT_MODIFIED As status code.
     * @uses \FireHub\Core\Support\Enums\HTTP\StatusCode::codeStatus() To get status code with status.
     *
     * @param \FireHub\Core\Support\Collection\Type\Indexed<array{directive:\FireHub\Core\Support\Enums\HTTP\Cache\Response, argument: null|int|string}> $directives <p>
     * List of directives.
     * </p>
     *
     * @return $this This response.
     */
    public function cache (Indexed $directives):self {

        $directives = $directives->map(function ($value) {
            return $value['directive']->value.(isset($value['argument']) ? '='.$value['argument'] : '');
        });

        $this->replaceHeader('Cache-Control: '.Str::fromList($directives, ', ')); // @phpstan-ignore-line
        $this->replaceHeader('Etag: "'.Hash::generate($this->content(), Algorithm::MD5).'"');

        $e_tags = $this->request->ifNoneMatch();

        /** @phpstan-ignore-next-line */
        if ($e_tags && $e_tags->any(fn($value) => $value->string() === '"'.Hash::generate($this->content(), Algorithm::MD5).'"'))
            $this->replaceHeader('HTTP/1.1 '.StatusCode::NOT_MODIFIED->codeStatus());

        return $this;

    }

    /**
     * ### Clears browsing data (cookies, storage, cache) associated with the requesting website
     *
     * The Clear-Site-Data header accepts one or more directives.
     * If all types of data should be cleared, the wildcard directive (*) can be used.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\SiteData As parameter.
     * @uses \FireHub\Core\Support\Str::from() To create string from SiteData enum.
     * @uses \FireHub\Core\Support\Str::surround() To surround directives with double quotes.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     *
     * @param \FireHub\Core\Support\Enums\HTTP\SiteData ...$data <p>
     * HTTP site data.
     * </p>
     *
     * @return $this This response.
     *
     * @note This feature is available only in secure contexts (HTTPS).
     */
    public function clearData (SiteData ...$data):self {

        $data = $data ?: ['*'];

        $directives = [];
        foreach ($data as $directive)
            $directives[] = Str::from($directive instanceOf SiteData ? $directive->value : $directive)->surround('"');

        $directives = Str::fromList($directives, ', ');

        $this->replaceHeader('Clear-Site-Data: '.$directives);

        return $this;

    }

    /**
     * ### Indicate the original media type of the resource prior to any content encoding applied before transmission
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\CommonMimeType As parameter.
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     *
     * @param \FireHub\Core\Support\Enums\HTTP\CommonMimeType $type <p>
     * HTTP common content media type.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encodings enum.
     * </p>
     *
     * @return $this This response.
     */
    public function contentType (CommonMimeType $type, ?Encoding $encoding = null):self {

        $this->replaceHeader('Content-Type: '.$type->value.($encoding ? '; charset='.$encoding->value : ''));

        return $this;

    }

    /**
     * ### Indicate if the content is expected to be displayed inline or downloaded
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\ContentDisposition As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     *
     * @param \FireHub\Core\Support\Enums\HTTP\ContentDisposition $disposition <p>
     * HTTP content disposition.
     * </p>
     *
     * @return $this This response.
     */
    public function contentDisposition (ContentDisposition $disposition, ?string $filename = null):self {

        $this->replaceHeader('Content-Disposition: '.$disposition->value.($filename ? '; '.$filename : ''));

        return $this;

    }

    /**
     * ### Describes the language intended for the audience, so users can differentiate it according to their own preferred language
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Language::alpha2() To get alpha 2 language code.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from a list.
     * @uses \FireHub\Core\Support\Str::string() To get raw string from string.
     *
     * @param \FireHub\Core\Support\Enums\Language ...$language <p>
     * Language enum.
     * </p>
     *
     * @return $this This response.
     */
    public function contentLanguage (Language ...$language):self {

        $directives = [];
        foreach ($language as $directive) $directives[] = $directive->alpha2();

        $this->replaceHeader('Content-Language: '.Str::fromList($directives, ', ')->string());

        return $this;

    }

    /**
     * ### Lists any encodings that have been applied to a resource, and in what order
     *
     * This lets the recipient know how to decode the data to get the original content format described in the
     * Content-Type header. Content encoding is mainly used to compress content without losing information about
     * the original media type.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\ContentEncoding As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from a list.
     * @uses \FireHub\Core\Support\Str::string() To get raw string from string.
     *
     * @param \FireHub\Core\Support\Enums\HTTP\ContentEncoding ...$encoding <p>
     * HTTP content encoding.
     * </p>
     *
     * @return $this This response.
     */
    public function contentEncoding (ContentEncoding ...$encoding):self {

        $directives = [];
        foreach ($encoding as $directive) $directives[] = $directive->value;

        $this->replaceHeader('Content-Encoding: '.Str::fromList($directives, ', ')->string());

        return $this;

    }

    /**
     * ### Allows website administrators to control resources the user agent is allowed to load for a given page
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from a list.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::map() To create a string from a list.
     * @uses \FireHub\Core\Support\Enums\HTTP\CSP\Directive As list value.
     * @uses \FireHub\Core\Support\Enums\HTTP\CSP\Value As list value.
     *
     * @param \FireHub\Core\Support\Collection\Type\Indexed<array{directive:\FireHub\Core\Support\Enums\HTTP\CSP\Directive, value: \FireHub\Core\Support\Enums\HTTP\CSP\Value|string}> $directives <p>
     * List of directives.
     * </p>
     *
     * @return $this This response.
     */
    public function contentSecurityPolicy (Indexed $directives):self {

        $directives = $directives->map(
            fn($value) => $value['directive']->value.' '.($value['value'] instanceof Value ? $value['value']->value : $value['value'])
        );

        $this->replaceHeader('Content-Security-Policy: '.Str::fromList($directives, '; ')); // @phpstan-ignore-line

        return $this;

    }

    /**
     * ### Send a raw HTTP header
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode As parameter.
     * @uses \FireHub\Core\Support\LowLevel\HTTP::header() To send a raw HTTP header.
     *
     * @param non-empty-string $header <p>
     * The header string.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode $response_code [optional] <p>
     * Forces the HTTP response code to the specified value.
     * </p>
     *
     * @return void
     */
    protected function setHeader (string $header, ?StatusCodeContract $response_code = null):void {

        HTTP::header($header, false, $response_code);

    }

    /**
     * ### Send and replace a raw HTTP header
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode As parameter.
     * @uses \FireHub\Core\Support\LowLevel\HTTP::header() To send a raw HTTP header.
     *
     * @param non-empty-string $header <p>
     * The header string.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode $response_code [optional] <p>
     * Forces the HTTP response code to the specified value.
     * </p>
     *
     * @return void
     */
    protected function replaceHeader (string $header, ?StatusCodeContract $response_code = null):void {

        HTTP::header($header, true, $response_code);

    }

}