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
use FireHub\Core\Components\Registry;
use FireHub\Core\Components\Registry\Register;
use FireHub\Core\Support\Collection\Type\Indexed;

/**
 * ### Service manager
 * @since 1.0.0
 */
final class ServiceManager implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### List of service providers
     * @since 1.0.0
     *
     * @var \FireHub\Core\Components\Registry\Register<non-empty-lowercase-string,
     *     \FireHub\Core\Support\Collection\Type\Indexed<class-string>>
     *
     * @phpstan-ignore-next-line
     */
    public Register $providers;

    /**
     * ### Predefined list of service providers
     * @since 1.0.0
     *
     * @var class-string[]
     */
    private array $predefined_providers = [];

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container Dependency injection container.
     * @uses \FireHub\Core\Components\Registry::registered To check if a register exists.
     * @uses \FireHub\Core\Components\Registry::get() To get register.
     * @uses \FireHub\Core\Components\Registry\Register::add() To add a new register.
     *
     * @param \FireHub\Core\Components\DI\Container $container <p>
     * Dependency injection container.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Container $container
    ) {

        if (!Registry::getInstance()->registered('providers')) {

            $this->providers = Registry::getInstance()->register('providers'); // @phpstan-ignore-line
            $this->providers->add('eager', new Indexed([])); // @phpstan-ignore-line
            $this->providers->add('deferred', new Indexed([])); // @phpstan-ignore-line

        } else $this->providers = Registry::getInstance()->get('providers'); // @phpstan-ignore-line

    }

    /**
     * ### Load deferred service providers
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Contracts\DeferredServiceProvider::provides() To check all deferred services.
     * @uses \FireHub\Core\Components\DI\ServiceProvider::register() To bind services into container.
     *
     * @param class-string $abstract <p>
     * Instance name in container.
     * </p>
     *
     * @return bool True if the deferred service provider is loaded, false otherwise.
     */
    public function loadDeferredProviders (string $abstract):bool {

        foreach ($this->providers['deferred'] as $provider) // @phpstan-ignore-line
            foreach ($provider->provides() as $service) // @phpstan-ignore-line
                if ($abstract === $service) {
                    (new $provider($this->container))->register(); // @phpstan-ignore-line
                    return true;
                }

        return false;

    }

    /**
     * ### Add service providers
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register::add() To add item to a container.
     * @uses \FireHub\Core\Components\DI\ServiceProvider::isDeferred() To check if the service provider is deferred.
     * @uses \FireHub\Core\Components\DI\ServiceProvider::register() To bind services into container.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::push() To push items at the end of the tag list.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::map() To apply the callback to each collection item.
     *
     * @return void
     */
    public function addServiceProviders ():void {

        foreach ($this->predefined_providers as $service_provider) {

            $service_provider = new $service_provider($this->container);

            $service_provider->isDeferred() // @phpstan-ignore-line
                ? $this->providers['deferred']->push($service_provider) // @phpstan-ignore-line
                : $this->providers['eager']->push($service_provider); // @phpstan-ignore-line

        }

        $this->providers['eager']->map(fn($value) => (new $value($this->container))->register()); // @phpstan-ignore-line

    }

}