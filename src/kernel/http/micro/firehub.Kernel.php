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

namespace FireHub\Core\Kernel\HTTP\Micro;

use FireHub\Core\Initializers\Kernel as BaseKernel;
use FireHub\Core\Kernel\ {
    Request as BaseRequest, Response as BaseResponse
};
use FireHub\Core\Kernel\HTTP\ {
    Response, Server
};
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Components\Pipeline;

/**
 * ### Micro HTTP Kernel
 *
 * Process Micro HTTP requests that come in through various sources and give a client an appropriate response.
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
     * @param \FireHub\Core\Kernel\HTTP\Server $server <p>
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
     * @uses \FireHub\Core\Kernel\HTTP\Request As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Response As return.
     * @uses \FireHub\Core\Components\Pipeline::send() To send a request through a pipeline.
     * @uses \FireHub\Core\Components\Pipeline::through() To set the array of pipes.
     * @uses \FireHub\Core\Components\Pipeline::then() To run the pipeline with a final destination callback.
     *
     * @param \FireHub\Core\Kernel\HTTP\Request $request <p>
     * Interact with the current request being handled by your application.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function handle (BaseRequest $request):BaseResponse {

        /** @phpstan-ignore-next-line */
        return (new Pipeline)
            ->send($request)
            ->through([])
            ->then(fn($request) => new Response(
                $this->server, $request, 'HTTP Micro Torch' // @phpstan-ignore-line
            ));

    }

}