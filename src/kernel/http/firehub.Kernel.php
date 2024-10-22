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

use FireHub\Core\Initializers\Kernel as BaseKernel;
use FireHub\Core\Kernel\Request as BaseRequest;
use FireHub\Core\Components\DI\Container;

/**
 * ### HTTP Kernel
 *
 * Process HTTP requests that come in through various sources and give a client the appropriate response.
 * @since 1.0.0
 */
class Kernel extends BaseKernel {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::resolve() To resolve binding from the container.
     * @uses \FireHub\Core\Kernel\HTTP\Server As HTTP Server and execution environment information.
     * @uses \FireHub\Core\Kernel\HTTP\Response As return.
     *
     * @param \FireHub\Core\Kernel\HTTP\Request $request <p>
     * Interact with the current request being handled by your application.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function handle (BaseRequest $request):Response {

        return new Response(
            Container::getInstance()->resolve(Server::class), $request, 'HTTP Torch'
        );

    }

}