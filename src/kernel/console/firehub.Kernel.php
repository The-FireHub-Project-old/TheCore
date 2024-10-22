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

namespace FireHub\Core\Kernel\Console;

use FireHub\Core\Initializers\Kernel as BaseKernel;
use FireHub\Core\Kernel\Request as BaseRequest;
use FireHub\Core\Components\DI\Container;

/**
 * ### Console Kernel
 *
 * Process Console requests that come in through various sources and give a client the appropriate response.
 * @since 1.0.0
 */
class Kernel extends BaseKernel {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Server As parameter.
     *
     * @param \FireHub\Core\Components\DI\Container $container <p>
     * Dependency injection container.
     * </p>
     * @param \FireHub\Core\Kernel\Console\Server $server <p>
     * Server and execution environment information.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected Container $container,
        protected Server $server
    ) {

        parent::__construct($container);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\Console\Response As return.
     *
     * @param \FireHub\Core\Kernel\Console\Request $request <p>
     * Interact with the current request being handled by your application.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function handle (BaseRequest $request):Response {

        var_dump($request);

        return new Response(
            $this->server, $request, 'Console Torch'
        );

    }

}