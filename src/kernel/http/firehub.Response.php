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
    CommonMimeType, StatusCode,
    Authentication\Scheme, Cache\Response as CacheDirectives, Contracts\StatusCode as StatusCodeContract
};
use FireHub\Core\Support\Enums\Hash\Algorithm;
use FireHub\Core\Support\LowLevel\ {
    Hash, HTTP
};

/**
 * ### HTTP Response
 *
 * Response holds all the information that needs to be sent back to the client from a given request.
 * @since 1.0.0
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
     * @param \FireHub\Core\Support\Collection\Type\Indexed<array{directive:\FireHub\Core\Support\Enums\HTTP\Cache\Response, argument: null|int|string}> $directives
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