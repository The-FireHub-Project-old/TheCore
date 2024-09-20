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
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\Associative;
use FireHub\Core\Support\LowLevel\Cls;
use Closure, ReflectionClass, ReflectionException, ReflectionNamedType, ReflectionParameter;

/**
 * ### Autowire dependant objects for instance
 * @since 1.0.0
 */
final class Autowire implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### List of resolved arguments
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Associative<array-key, covariant mixed>
     */
    private Associative $arguments;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Helpers\Autowire::resolve() To resolve parameter.
     * @uses \FireHub\Core\Support\Collection::associative() To create an associative collection for arguments.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::mapKeys() To add a parameter name as a key.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::map() To resolve parameters.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::filter() To filter all valid arguments.
     *
     * @template TObject of object
     *
     * @param \FireHub\Core\Components\DI\Container $container <p>
     * Container instance.
     * </p>
     * @param class-string<TObject> $abstract <p>
     * Class name in container.
     * </p>
     * @param array<array-key, mixed> $parameters <p>
     * Passed parameters for resolving instance.
     * </p>
     * @param array<non-empty-string, Closure(\FireHub\Core\Components\DI\Container $container):object> $bindings <p>
     * Passed a list of container records bindings.
     * </p>
     *
     * @throws ReflectionException If the class doesn't exist.
     *
     * @return void
     */
    public function __construct (
        private readonly Container $container,
        private readonly string $abstract,
        private readonly array $parameters,
        private readonly array $bindings
    ) {

        $reflection = new ReflectionClass($this->abstract);

        $this->arguments = Collection::associative(fn() => $reflection->getConstructor()?->getParameters() ?? [])
            ->mapKeys(fn(ReflectionParameter $parameter):string => $parameter->getName())
            ->map(fn(ReflectionParameter $parameter, string $parameter_name):mixed // @phpstan-ignore-line
                => $this->resolve($parameter, $parameter_name))
            ->filter(fn(mixed $value):bool => !$value instanceof ReflectionParameter); // @phpstan-ignore-line

    }

    /**
     * ### Get a list of resolved arguments
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative::all() To get a list of resolved arguments as an array.
     *
     * @return array<array-key, mixed>
     */
    public function arguments ():array {

        return $this->arguments->all();

    }

    /**
     * ### Resolve parameter
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Cls::isClass() To check if an argument is a class.
     * @uses \FireHub\Core\Support\LowLevel\Cls::isInterface() To check if an argument is an interface.
     * @uses \FireHub\Core\Components\DI\Container::resolve() To resolve binding from the container if the argument is a
     * class.
     *
     * @param ReflectionParameter $parameter <p>
     * Reflection from parameter.
     * </p>
     * @param string $parameter_name <p>
     * Parameter name.
     * </p>
     *
     * @return mixed Resolved parameter.
     */
    private function resolve (ReflectionParameter $parameter, string $parameter_name):mixed {

        foreach ($this->parameters as $key => $value) // parameters from resolve method
            if ($key === $parameter_name) return $value;

        $parameter_type = $parameter->getType();

        if (!$parameter_type instanceof ReflectionNamedType)
            return $parameter;

        foreach ($this->bindings as $key => $value) // parameters from context builder
            if ($key === $parameter_type->getName()
            ) return $value($this->container);

        if ( // auto-resolve object parameters
            !$parameter->isOptional()
            && (Cls::isClass($parameter_type->getName()) || Cls::isInterface($parameter_type->getName()))
        ) return $this->container->resolve($parameter_type->getName()); // @phpstan-ignore-line

        return $parameter;

    }

}