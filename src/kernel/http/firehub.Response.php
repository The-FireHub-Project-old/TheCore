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
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Associative
};
use FireHub\Core\Support\Zwick\ {
    DateTime, Timestamp
};
use FireHub\Core\Support\Enums\HTTP\ {
    CommonMimeType, ContentDisposition, ContentEncoding, SiteData, StatusCode,
    Authentication\Scheme, Contracts\StatusCode as StatusCodeContract, CSP\Value
};
use FireHub\Core\Support\Enums\ {
    Language, DateTime\Format\Predefined, Hash\Algorithm, String\Encoding
};
use FireHub\Core\Support\LowLevel\ {
    File, Hash, HTTP
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
     * @param \FireHub\Core\Kernel\HTTP\Server $server <p>
     * HTTP Server and execution environment information.
     * </p>
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
        protected readonly Server $server,
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
     * @uses \FireHub\Core\Kernel\HTTP\Response::eTag() To set identifier for a specific version of a resource.
     * @uses \FireHub\Core\Kernel\HTTP\Response::status() To set a response status code.
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
        $this->eTag(Hash::generate($this->content(), Algorithm::MD5));

        $e_tags = $this->request->ifNoneMatch();

        /** @phpstan-ignore-next-line */
        if ($e_tags && $e_tags->any(fn($value) => $value->string() === '"'.Hash::generate($this->content(), Algorithm::MD5).'"'))
            $this->status(StatusCode::NOT_MODIFIED);

        return $this;

    }

    /**
     * ### Describes the parts of the request message aside from the method
     *
     * Describes the parts of the request message aside from the method and URL that influenced the content of the
     * response it occurs in. Most often, this is used to create a cache key when content negotiation is in use.
     * The same header value should be used on all responses for a given URL, including 304 Not Modified responses and
     * the "default" response.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from a list.
     *
     * @param \FireHub\Core\Support\Collection\Type\Indexed<non-empty-string> $headers <p>
     * List of header names.
     * </p>
     *
     * @return $this This response.
     */
    public function vary (Indexed $headers):self {

        $this->replaceHeader('Vary: '.Str::fromList($headers, ', '));

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
     * @param \FireHub\Core\Support\Collection\Type\Indexed<array{directive: \FireHub\Core\Support\Enums\HTTP\CSP\Directive, value: \FireHub\Core\Support\Enums\HTTP\CSP\Value|string}> $directives <p>
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
     * ### Identifier for a specific version of a resource
     *
     * It lets caches be more efficient and save bandwidth, as a web server doesn't need to resend a full response if
     * the content wasn't changed. Additionally, e-tags help to prevent simultaneous updates of a resource from
     * overwriting each other ("midair collisions").
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Response::setHeader() To send a raw HTTP header.
     *
     * @param string $value <p>
     * Entity tag is a string of ASCII characters that uniquely represents the requested resource.
     * </p>
     *
     * @return $this This response.
     */
    public function eTag (string $value):self {

        $this->setHeader('Etag: "'.$value.'"');

        return $this;

    }

    /**
     * ### Identifier for a specific version of a resource
     *
     * It lets caches be more efficient and save bandwidth, as a web server doesn't need to resend a full response if
     * the content wasn't changed. Additionally, e-tags help to prevent simultaneous updates of a resource from
     * overwriting each other ("midair collisions").
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Zwick\DateTime::fromTimestamp() To create datetime from a script modified time.
     * @uses \FireHub\Core\Support\Zwick\DateTime::parse() To parse date according to the given format.
     * @uses \FireHub\Core\Support\Zwick\Timestamp::from() To create a timestamp from a script modified time.
     * @uses \FireHub\Core\Support\LowLevel\File::lastModified() To get the last modification time of a script.
     * @uses \FireHub\Core\Kernel\HTTP\Server::scriptFilename() To get the absolute pathname of the currently executing
     * script.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::RFC7231 As datetime format.
     *
     * @return $this This response.
     */
    public function lastModified ():self {

        $this->replaceHeader('Last-Modified: '.DateTime::fromTimestamp(
                Timestamp::from(File::lastModified($this->server->scriptFilename()))
            )->parse(Predefined::RFC7231));

        return $this;

    }

    /**
     * ### Provides a means for serializing one or more links in HTTP headers
     *
     * This header has the same semantics as the HTML <link> element. The benefit of using the Link header is that
     * the browser can start pre-connecting or preloading resources before the HTML itself is fetched and processed.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As parameter.
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from a list.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::map() To create a string from a list.
     * @uses \FireHub\Core\Kernel\HTTP\Response::status() To set a response status code.
     *
     * @param string $uri <p>
     * The URI reference.
     * </p>
     * @param \FireHub\Core\Support\Collection\Type\Associative<non-empty-string, non-empty-string> $parameters <p>
     * The link header contains parameters, equivalent to attributes of the <link> element.
     * </p>
     *
     * @return $this This response.
     */
    public function link (string $uri, Associative $parameters):self {

        $parameters = $parameters->map(fn($value, $key) => $key.'="'.$value.'"'); // @phpstan-ignore-line

        $this->setHeader('Link: <'.$uri.'>; '.Str::fromList($parameters, '; '));
        $this->status(StatusCode::EARLY_HINTS);

        return $this;

    }

    /**
     * ### Set response status code
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Enums\HTTP\StatusCode::codeStatus() To get status code with status.
     *
     * @param \FireHub\Core\Support\Enums\HTTP\StatusCode $status_code <p>
     * Response status code.
     * </p>
     *
     * @return $this This response.
     */
    public function status (StatusCode $status_code):self {

        $this->replaceHeader('HTTP/1.1 '.$status_code->codeStatus());

        return $this;

    }

    /**
     * ### Set response status code
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::map() To apply the callback to each collection item.
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from a list.
     *
     * @param \FireHub\Core\Support\Collection\Type\Associative<non-empty-string, int|float> $metrics <p>
     * List of metrics.
     * </p>
     *
     * @return $this This response.
     */
    public function serverTiming (Associative $metrics):self {

        $metrics = $metrics->map(fn($value, $key) => $key.';dur='.$value); // @phpstan-ignore-line

        $this->replaceHeader('Server-Timing: '.Str::fromList($metrics, ', '));

        return $this;

    }

    /**
     * ### Informs browsers that the site should only be accessed using HTTPS
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Response::replaceHeader() To send and replace a raw HTTP header.
     *
     * @return $this This response.
     */
    public function forceHTTPS ():self {

        $this->replaceHeader('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');

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