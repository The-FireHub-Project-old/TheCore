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
use FireHub\Core\Support\Bags\ {
    Server, RequestHeaders
};

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
     * @param \FireHub\Core\Support\Bags\Server $server <p>
     * Bag for server and execution environment information.
     * </p>
     * @param \FireHub\Core\Support\Bags\RequestHeaders $request_headers <p>
     * Bag for HTTP request header variables.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Server $server,
        private readonly RequestHeaders $request_headers
    ) {}

}