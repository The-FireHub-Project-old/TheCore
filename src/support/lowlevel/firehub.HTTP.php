<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\LowLevel;

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};
use FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode as StatusCodeContract;
use FireHub\Core\Support\Enums\HTTP\ {
    StatusCode, WebDavStatusCode
};

use function header;
use function http_response_code;

/**
 * ### HTTP low-level proxy class
 *
 * Class provides various HTTP methods.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 *
 * @todo There will be more methods.
 */
final class HTTP implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Send a raw HTTP header
     *
     * Remember that header() must be called before any actual output is sent, either by normal HTML tags, blank
     * lines in a file, or from PHP. It is a very common error to read code with include, or require, functions,
     * or another file access function, and have spaces or empty lines that are output before header() is called.
     * The same problem exists when using a single PHP/HTML file.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode::code() To get status code.
     *
     * @param non-empty-string $header <p>
     * The header string.
     * </p>
     * @param bool $replace [optional] <p>
     * The optional replace parameter indicates whether the header should replace a previous similar header or add a
     * second header of the same type.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode $response_code [optional] <p>
     * Forces the HTTP response code to the specified value.
     * </p>
     *
     * @return void
     */
    public static function header (string $header, bool $replace = true, ?StatusCodeContract $response_code = null):void {

        header($header, $replace, $response_code ? $response_code->code() : 0);

    }

    /**
     * ### Get or Set the HTTP response code
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode::code() To get status code.
     * @uses \FireHub\Core\Support\Enums\HTTP\StatusCode::fromCode() To get code from status.
     * @uses \FireHub\Core\Support\Enums\HTTP\WebDavStatusCode::fromCode() To get code from status.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::bool() To check if function returns boolean.
     *
     * @param null|\FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode $code [optional] <p>
     * The optional response_code will set the response code.
     * </p>
     *
     * @return \FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode|bool If $code is provided, then the previous status code will
     * be returned, else the current status code will be returned. False will be returned if response_code is not
     * provided, and it is not invoked in a web server environment (such as from a CLI application). True will be
     * returned if response_code is provided, and it is not invoked in a web server environment (but only when
     * no previous response status has been set).
     */
    public static function responseCode (?StatusCodeContract $code = null):StatusCodeContract|bool {

        $response = http_response_code($code ? $code->code() : 0);

        return DataIs::bool($response)
            ? $response
            : (StatusCode::fromCode($response) ?: WebDavStatusCode::fromCode($response));

    }

}