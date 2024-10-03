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

namespace FireHub\Core\Components\DI\Helpers;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Support\LowLevel\DataIs;
use Closure, Error;

/**
 * ### Inject different implementations into each class
 * @since 1.0.0
 */
final class ContextualBinding implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Parameter for resolving instance
     * @since 1.0.0
     *
     * @var null|non-empty-string
     */
    private ?string $parameter = null;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container As parameter.
     *
     * @param Container $container <p>
     * Container instance.
     * </p>
     * @param non-empty-string $abstracts <p>
     * Instance name in container.
     * </p>
     */
    public function __construct (
        private readonly Container $container,
        private readonly string $abstracts
    ) {}

    /**
     * ### When implementations needs instance
     * @since 1.0.0
     *
     * @param non-empty-string $parameter <p>
     * Parameter for resolving instance.
     * </p>
     *
     * @return $this This object.
     *
     */
    public function needs (string $parameter):self {

        $this->parameter = $parameter;

        return $this;

    }

    /**
     * ### Give parameter
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register::exist() Check if a record exists.
     * @uses \FireHub\Core\Components\Registry\Register::update() To update item from container.
     * @uses \FireHub\Core\Components\Registry\Register::add() To add item to a container.
     *
     * @param Closure(\FireHub\Core\Components\DI\Container $container):object $concrete <p>
     * Concrete class for container object instance.
     * </p>
     *
     * @throws Error If method give is called before method needs.
     *
     * @return void
     */
    public function give (Closure $concrete):void {

        if (DataIs::null($this->parameter))
            throw new Error('Method needs must invoked before method give.');

        $this->container->bindings->exist($this->abstracts)
            ? $this->container->bindings->update($this->abstracts, [
                $this->parameter => $concrete
            ])
            : $this->container->bindings->add($this->abstracts, [
                $this->parameter => $concrete
            ]);

    }

}
           