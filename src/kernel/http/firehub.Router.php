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

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};

/**
 * ### Router
 * @since 1.0.0
 */
final class Router implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Dispatch the request to the application
     * @since 1.0.0
     *
     * @param \FireHub\Core\Kernel\HTTP\Server $server <p>
     * HTTP Server and execution environment information.
     * </p>
     * @param \FireHub\Core\Kernel\HTTP\Request $request <p>
     * HTTP Request.
     * </p>
     *
     * @return \FireHub\Core\Kernel\HTTP\Response Information that needs to be sent back to the client from a given request.
     */
    public function dispatch (Server $server, Request $request):Response {

        return new Response(
            $server, $request, 'HTTP Torch'
        );

    }

}