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
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container As parameter.
     *
     * @param \FireHub\Core\Components\DI\Container $container <p>
     * Dependency injection container.
     * </p>
     *
     * @return void
     */
    final public function __construct (
        protected readonly Container $container
    ) {}

    /**
     * ### Handle client runtime
     * @since 1.0.0
     *
     * @return string Response from Kernel.
     */
    abstract public function handle ():string;

}