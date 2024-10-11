<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Initializers;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Kernel\Request;
use FireHub\Core\Kernel\Bootstraps\Bootstrap;

/**
 * ### Abstract Base Kernel
 *
 * Process requests that come in through various sources and give a client the appropriate response.
 * @since 1.0.0
 */
abstract class Kernel implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### List of bootstraps required for instantiating all Kernels
     * @since 1.0.0
     *
     * @var class-string[]
     */
    private array $bootstraps = [];

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container As parameter.
     * @uses \FireHub\Core\Initializers\Kernel::bootBootstraps() To boot all bootstraps required for instantiating all
     * Kernels.
     *
     * @param \FireHub\Core\Components\DI\Container $container <p>
     * Dependency injection container.
     * </p>
     *
     * @return void
     */
    final public function __construct (
        protected readonly Container $container
    ) {

        $this->bootBootstraps();

    }

    /**
     * ### Handle client request
     * @since 1.0.0
     *
     * @param \FireHub\Core\Kernel\Request $request <p>
     * Interact with the current request being handled by your application.
     * </p>
     *
     * @return string Response from Kernel.
     */
    abstract public function handle (Request $request):string;

    /**
     * ### Boot all bootstraps required for instantiating all Kernels
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\Bootstraps\Bootstrap::boot() To boot bootstraps.
     *
     * @return $this This object.
     */
    private function bootBootstraps ():self {

        foreach ($this->bootstraps as $bootstrap) {

            $bootstrap = new $bootstrap;

            if ($bootstrap instanceof Bootstrap) $bootstrap->boot();

        }

        return $this;

    }

}