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
 * ### Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application
 * @since 1.0.0
 */
abstract class Middleware implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Handle middleware
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Request To interact with the current request.
     * @uses \FireHub\Core\Kernel\HTTP\Response To send back to the client from a given request.
     *
     * @param \FireHub\Core\Kernel\HTTP\Request $request <p>
     * Interact with the current request.
     * </p>
     * @param Closure(Request):Response $carry <p>
     * <code>Closure(Request):Response</code>
     * Next middleware.
     * </p>
     *
     * @return \FireHub\Core\Kernel\HTTP\Response Response sent back to the client from a given request.
     */
    abstract public function handle (Request $request, Closure $carry):Response;

}