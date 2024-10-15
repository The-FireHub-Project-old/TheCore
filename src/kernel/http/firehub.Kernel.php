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
use FireHub\Core\Kernel\Request;

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
     * @uses \FireHub\Core\Components\DI\Container::resolve() To resolve response.
     * @uses \FireHub\Core\Kernel\HTTP\Response As return.
     */
    public function handle (Request $request):Response {

        return $this->container->resolve(Response::class);

    }

}