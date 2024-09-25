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

namespace FireHub\Core\Components\DI;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Components\DI\Contracts\DeferredServiceProvider;

/**
 * ### Service providers give the benefit of organizing your container definitions
 * @since 1.0.0
 */
abstract class ServiceProvider implements Init {

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
     * ### Bind services into container
     * @since 1.0.0
     *
     * @return void
     */
    public function register () {}

    /**
     * ### Check if the service provider is deferred
     * @since 1.0.0
     *
     * @return bool True if service provider is deferred, false otherwise.
     */
    public function isDeferred ():bool {

        return $this instanceof DeferredServiceProvider;

    }

}