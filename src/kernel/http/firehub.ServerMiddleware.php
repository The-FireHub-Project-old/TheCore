<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Components
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Kernel\HTTP;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use Closure;

/**
 * ### Server Middleware
 *
 * Server Middleware provides a convenient mechanism for inspecting and filtering Server and execution environment
 * information entering your application.
 * @since 1.0.0
 */
abstract class ServerMiddleware implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Handle middleware
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Server As HTTP Server and execution environment information.
     *
     * @param \FireHub\Core\Kernel\HTTP\Server $server <p>
     * HTTP Server and execution environment information.
     * </p>
     * @param Closure(Server):Server $carry <p>
     * <code>Closure(Request):Response</code>
     * Next middleware.
     * </p>
     *
     * @return \FireHub\Core\Kernel\HTTP\Server Same object.
     */
    abstract public function handle (Server $server, Closure $carry):Server;

}