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

use FireHub\Core\Kernel\Request as BaseRequest;
use FireHub\Core\Support\Bags\RequestHeaders;
use FireHub\Core\Kernel\Enums\Method;

/**
 * ### HTTP Request
 *
 * Interact with the current HTTP request being handled by your application
 * @since 1.0.0
 */
class Request extends BaseRequest {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Bags\RequestHeaders $headers <p>
     * Bag for HTTP request header variables.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly RequestHeaders $headers
    ) {}

    /**
     * ### Check if the current request is secured
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Request::schema() To get current schema.
     *
     * @return bool True if the request is secured, false otherwise.
     */
    public function isSecure ():bool {

        return $this->schema() === 'https';

    }

    /**
     * ### Get current schema
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$https
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$unlisted
     *
     * @return 'http'|'https' Current schema.
     */
    public function schema ():string {

        return (
            (isset($this->headers->unlisted['http_x_forwarded_proto']) && $this->headers->unlisted['http_x_forwarded_proto'] === 'https')
            || (isset($this->headers->unlisted['http_x_forwarded_ssl']) && $this->headers->unlisted['http_x_forwarded_ssl'] === 'on')
        ) || $this->headers->https !== 'off'
            ? 'https' : 'http';

    }

    /**
     * ### Get request method
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\Enums\Method::getConstantValue() To get enum from value.
     *
     * @return \FireHub\Core\Kernel\Enums\Method Method enum.
     */
    public function method ():Method {

        return Method::getConstantValue($this->headers->method); // @phpstan-ignore-line

    }

}