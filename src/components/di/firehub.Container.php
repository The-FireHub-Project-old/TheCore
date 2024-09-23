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
    InitInstance, Trait\ConcreteInstance
};
use FireHub\Core\Components\Registry;
use FireHub\Core\Components\Registry\Register;
use FireHub\Core\Support\Collection\Type\Indexed;
use FireHub\Core\Components\DI\Helpers\ {
    Autowire, ContextualBinding
};
use FireHub\Core\Components\DI\Enums\Type;
use FireHub\Core\Support\LowLevel\ {
    DataIs, Obj
};
use Closure, Error;

/**
 * ### Inversion of Control (IoC) / Dependency Injection (DI) Container
 *
 * This class is for managing class dependencies and performing dependency injection.
 * @since 1.0.0
 *
 * @api
 */
class Container implements InitInstance {

    /**
     * ### FireHub initial concrete instance trait
     * @since 1.0.0
     */
    use ConcreteInstance;

    /**
     * ### List of active container records
     * @since 1.0.0
     *
     * @var \FireHub\Core\Components\Registry\Register<non-empty-lowercase-string, array{
     *     concrete: Closure(self $container):object,
     *     type: \FireHub\Core\Components\DI\Enums\Type,
     *     instance: null|object,
     *     parameters: array<array-key, mixed>
     * }>
     */
    public Register $records;

    /**
     * ### List of container records bindings
     * @since 1.0.0
     *
     * @var \FireHub\Core\Components\Registry\Register<non-empty-lowercase-string, array<non-empty-string, Closure(self $container):object>>
     */
    public Register $bindings;

    /**
     * ### List of container record tags
     * @since 1.0.0
     *
     * @var \FireHub\Core\Components\Registry\Register<non-empty-lowercase-string,
     *     \FireHub\Core\Support\Collection\Type\Indexed<class-string>>
     *
     * @phpstan-ignore-next-line
     */
    public Register $tags;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry As registry list.
     */
    private function __construct () {

        $this->records = Registry::getInstance()->register('container'); // @phpstan-ignore-line
        $this->bindings = Registry::getInstance()->register('container_bindings'); // @phpstan-ignore-line
        $this->tags = Registry::getInstance()->register('container_tags'); // @phpstan-ignore-line

    }

    /**
     * ### Checks if binding exists in the container
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register::exist() Check if a record exists.
     *
     * @template TObject of object
     *
     * @example
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->bind(
     *  SomeClass::class,
     *  fn(Container $container, string $param, int $optional_param = 100):object => new SomeClass($param, $optional)
     * );
     *
     * $this->container->bound(SomeClass::class);
     *
     * // true
     * ```
     *
     * @param class-string<TObject> $abstract <p>
     * <code>Closure (self $container):object</code>
     * Instance name in container.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return bool True if binding exists in container, false otherwise.
     */
    public function bound (string $abstract):bool {

        return $this->records->exist($abstract);

    }

    /**
     * ### Register new binding with the container
     *
     * Binding creates new objects on every request from container.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::register() To register binding with the container.
     * @uses \FireHub\Core\Components\DI\Enums\Type::BIND As register type.
     *
     * @template TObject of object
     *
     * @example
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->bind(
     *  SomeClass::class,
     *  fn(Container $container, string $param, int $optional_param = 100):object => new SomeClass($param, $optional)
     * );
     * ```
     * @example Bind with unknown parameters.
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->bind(
     *  SomeClass::class,
     *  fn(Container $container, mixed ...$parameters):object => new SomeClass(new SomeOtherClass())
     * );
     * ```
     *
     * @param class-string<TObject> $abstract <p>
     * <code>Closure (self $container):object</code>
     * Instance name in container.
     * </p>
     * @param Closure(self $container):object $concrete <p>
     * Concrete class for container object instance.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return void
     */
    public function bind (string $abstract, Closure $concrete):void {

        $this->register($abstract, $concrete, Type::BIND);

    }

    /**
     * ### Register new binding with the container if one doesn't exist
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::bound() Check if binding exists in the container.
     * @uses \FireHub\Core\Components\DI\Container::bind() To register new binding with the container.
     *
     * @template TObject of objecT
     *
     * @param class-string<TObject> $abstract <p>
     * <code>Closure (self $container):object</code>
     * Instance name in container.
     * </p>
     * @param Closure(self $container):object $concrete <p>
     * Concrete class for container object instance.
     * </p>
     *
     * @return void
     */
    public function bindIfNeeds (string $abstract, Closure $concrete):void {

        if (!$this->bound($abstract)) $this->bind($abstract, $concrete);

    }

    /**
     * ### Register singleton binding with the container
     *
     * Singleton binding creates an object only on the first request from container.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::register() To register binding with the container.
     * @uses \FireHub\Core\Components\DI\Enums\Type::SHARED As register type.
     *
     * @template TObject of object
     *
     * @example
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->singleton(
     *  SomeClass::class,
     *  fn(Container $container, string $param, int $optional = 100):object => new SomeClass($param, $optional)
     * );
     * ```
     *
     * @param class-string<TObject> $abstract <p>
     * <code>Closure (self $container):object</code>
     * Instance name in container.
     * </p>
     * @param Closure(self $container):object $concrete <p>
     * Concrete class for container object instance.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return void
     */
    public function singleton (string $abstract, Closure $concrete):void {

        $this->register($abstract, $concrete, Type::SHARED);

    }

    /**
     * ### Register singleton binding with the container if one doesn't exist
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::bound() Check if binding exists in the container.
     * @uses \FireHub\Core\Components\DI\Container::singleton() To register a new singleton binding with the container.
     *
     * @template TObject of objecT
     *
     * @param class-string<TObject> $abstract <p>
     * <code>Closure (self $container):object</code>
     * Instance name in container.
     * </p>
     * @param Closure(self $container):object $concrete <p>
     * Concrete class for container object instance.
     * </p>
     *
     * @return void
     */
    public function singletonIfNeeds (string $abstract, Closure $concrete):void {

        if (!$this->bound($abstract)) $this->singleton($abstract, $concrete);

    }

    /**
     * ### Register scoped binding with the container
     *
     * Scoped binding creates an object on the first request from container and any time objects parameter has changed.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::register() To register binding with the container.
     * @uses \FireHub\Core\Components\DI\Enums\Type::SCOPED As register type.
     *
     * @template TObject of object
     *
     * @example
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->scoped(
     *  SomeClass::class,
     *  fn(Container $container, string $param, int $optional = 100):object => new SomeClass($param, $optional)
     * );
     * ```
     *
     * @param class-string<TObject> $abstract <p>
     * <code>Closure (self $container):object</code>
     * Instance name in container.
     * </p>
     * @param Closure(self $container):object $concrete <p>
     * Concrete class for container object instance.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return void
     */
    public function scoped (string $abstract, Closure $concrete):void {

        $this->register($abstract, $concrete, Type::SCOPED);

    }

    /**
     * ### Register scoped binding with the container if one doesn't exist
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::bound() Check if binding exists in the container.
     * @uses \FireHub\Core\Components\DI\Container::scoped() To register a new scoped binding with the container.
     *
     * @template TObject of objecT
     *
     * @param class-string<TObject> $abstract <p>
     * <code>Closure (self $container):object</code>
     * Instance name in container.
     * </p>
     * @param Closure(self $container):object $concrete <p>
     * Concrete class for container object instance.
     * </p>
     *
     * @return void
     */
    public function scopedIfNeeds (string $abstract, Closure $concrete):void {

        if (!$this->bound($abstract)) $this->scoped($abstract, $concrete);

    }

    /**
     * ### Register instance binding with the container
     *
     * Instance binding creates objects current instance.
     * @since 1.0.0
     *
     * @template TObject of object
     *
     * @uses \FireHub\Core\Components\DI\Container::register() To register binding with the container.
     * @uses \FireHub\Core\Components\DI\Enums\Type::SHARED As register type.
     *
     * @example
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->instance(SomeClass::class, new SomeClass());
     * ```
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     * @param object $instance $concrete <p>
     * Container object instance.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return void
     */
    public function instance (string $abstract, object $instance):void {

        $this->register($abstract, fn():object => $instance, Type::SHARED);

    }

    /**
     * ### Tag binding
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::addTag() To add tag binding.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $abstract is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Components\Container\Container;
     *
     * $this->container>tag(SomeReportClass::class, 'reports');
     * ```
     * @example With multiple classes to tag.
     * ```php
     * use FireHub\Core\Components\Container\Container;
     *
     * $this->container>tag([SomeReportClass::class, SomeOtherReportClass:class], 'reports');
     * ```
     *
     * @param class-string|class-string[] $abstract <p>
     * Instance name in a container or list of instance names.
     * </p>
     * @param non-empty-lowercase-string $with <p>
     * Tag name.
     * </p>
     *
     * @return void
     */
    public function tag (string|array $abstract, string $with):void {

        if (DataIs::string($abstract)) $this->addTag($abstract, $with);
        else
            foreach ($abstract as $_abstract)
                $this->addTag($_abstract, $with);

    }

    /**
     * ### Inject different implementations into each class
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Helpers\ContextualBinding As return.
     *
     * @template TObject of object
     *
     * @example
     * ```php
     * use FireHub\Core\Components\Container\Container;
     *
     * $this->container->when(SomeClass::class)
     *  ->needs(SomeInterface::class)
     *  ->give(fn() => new SomeClassFromInterface::class));
     * ```
     * @example Contextual binding with variadic parameter.
     * ```php
     * use FireHub\Core\Components\Container\Container;
     *
     * $this->container->when(SomeClass::class)
     *  ->needs(SomeInterface::class)
     *  ->give(fn() => [new SomeClassFromInterface::class, new SomeClassFromInterface::class]));
     * ```
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return \FireHub\Core\Components\DI\Helpers\ContextualBinding ContextualBinding builder.
     */
    public function when (string $abstract):ContextualBinding {

        return new ContextualBinding($this, $abstract);

    }

    /**
     * ### Resolve binding from the container
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::setRecordInstance() To set an instance from abstract.
     * @uses \FireHub\Core\Components\DI\Container::getRecordInstance() To get an instance from abstract.
     *
     * @template TObject of object
     *
     * @example
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->resolve(SomeClass::class);
     * ```
     * @example Resolving with parameters.
     * ```php
     * use FireHub\Core\Components\DI\Container;
     *
     * $this->container->resolve(SomeClass::class, [
     *  'param' => 'Hi there!'
     *  ]);
     * ```
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     * @param array<array-key, mixed> $parameters [optional] <p>
     * Optional parameters for resolving instance.
     * </p>
     *
     * @throws Error If a container is implementing null for abstract, or abstract is binding to a different class.
     *
     * @return TObject Object from the container.
     */
    public function resolve (string $abstract, array $parameters = []):?object {

        $this->setRecordInstance($abstract, $parameters);

        return $this->getRecordInstance($abstract);

    }

    /**
     * ### Register binding with the container
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Enums\Type As parameter.
     * @uses \FireHub\Core\Components\Registry\Register::add() To add item to a container.
     *
     * @template TObject of object
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     * @param Closure(self $container):object $concrete <p>
     * <code>Closure (self $container):object</code>
     * Concrete class for container object instance.
     * </p>
     * @param \FireHub\Core\Components\DI\Enums\Type $type <p>
     * Container record type.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return void
     */
    private function register (string $abstract, Closure $concrete, Type $type):void {

        $this->records->add($abstract, [
            'concrete' => $concrete,
            'type' => $type,
            'instance' => null,
            'parameters' => []
        ]);

    }

    /**
     * ### Check instance from abstract
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Obj::ofClass() To check if the object is of this class or has this class as
     * one of its parents.
     *
     * @template TObject of object
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     * @param object $instance <p>
     * Instance name in container.
     * </p>
     *
     * @return bool True if abstract is of instance, false otherwise.
     */
    private function checkRecordInstance (string $abstract, object $instance):bool {

        return Obj::ofClass($instance, $abstract);

    }

    /**
     * ### Gets instance from abstract
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register::get() To get item from the container.
     *
     * @template TObject of object
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     *
     * @throws Error If the record doesn't exist in container.
     *
     * @return TObject Object from the container.
     */
    private function getRecordInstance (string $abstract):?object {

        return $this->records->get($abstract)['instance']; // @phpstan-ignore-line

    }

    /**
     * ### Set instance from abstract
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register::exist() Check if a record exists.
     * @uses \FireHub\Core\Components\Registry\Register::get() To get item from the container.
     * @uses \FireHub\Core\Components\Registry\Register::update() To update item from container.
     * @uses \FireHub\Core\Components\DI\Container::createRecord() To create a record for container.
     * @uses \FireHub\Core\Components\DI\Container::checkRecordInstance() To check if the instance is from abstract.
     * @uses \FireHub\Core\Components\DI\Enums\Type::BIND As register type.
     * @uses \FireHub\Core\Components\DI\Enums\Type::SCOPED As register type.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::null() To check if concrete is null.
     *
     * @template TObject of object
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     * @param array<array-key, mixed> $parameters <p>
     * Optional parameters for resolving instance.
     * </p>
     *
     * @throws Error If a container is implementing null for abstract, or abstract is binding to a different class.
     *
     * @return void
     */
    private function setRecordInstance (string $abstract, array $parameters):void {

        $record = $this->records->exist($abstract)
            ? $this->records->get($abstract)
            : $this->createRecord($abstract);

        if (!$record['instance']
            || $record['type'] === Type::BIND
            || ($record['type'] === Type::SCOPED && $record['parameters'] !== $parameters)
        ) $this->records->update($abstract ,[
            'instance' => $this->checkRecordInstance(
                $abstract,
                ($object = DataIs::null($object = $record['concrete']($this, ...$parameters))
                    ? throw new Error("Container is implementing null for $abstract!")
                    : $object)
            ) ? $object
                : throw new Error("Container cannot resolve: $abstract, because it is binding to a different class: ".$object::class),
            'parameters' => $parameters
        ]);

    }

    /**
     * ### Create record for container
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::register() To register binding with the container.
     * @uses \FireHub\Core\Components\Registry\Register::exist() Check if a record exists.
     * @uses \FireHub\Core\Components\Registry\Register::get() To get item from a container.
     * @uses \FireHub\Core\Components\DI\Helpers\Autowire::arguments() To get a list of resolved arguments.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::array() To check if the argument is an array.
     * @uses \FireHub\Core\Components\DI\Enums\Type::BIND As type.
     *
     * @template TObject of object
     *
     * @param class-string<TObject> $abstract <p>
     * Instance name in container.
     * </p>
     *
     * @throws Error If the record already exists in container.
     *
     * @return array{
     *     concrete: Closure(self $container):object,
     *     type: \FireHub\Core\Components\DI\Enums\Type,
     *     instance: null|object,
     *     parameters: array<array-key, mixed>
     * } Created record.
     */
    private function createRecord (string $abstract):array {

        $bindings = $this->bindings->exist($abstract)
            ? $this->bindings->get($abstract)
            : [];

        $this->register(
            $abstract,
            function (Container $container, mixed ...$parameters) use ($abstract, $bindings):object {

                $arguments = (new Autowire($container, $abstract, $parameters, $bindings))->arguments();

                $argument_list = [];
                foreach ($arguments as $argument)
                    if (DataIs::array($argument))
                        foreach ($argument as $argument_arr) $argument_list[] = $argument_arr;
                    else $argument_list[] = $argument;

                return new $abstract(...$argument_list);

            },
            Type::BIND
        );

        return $this->records->get($abstract);

    }

    /**
     * ### Add tag binding
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register::exist() Check if a record exists.
     * @uses \FireHub\Core\Components\Registry\Register::add() To add item to a container.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::contains() Determines whether a list contains a given item.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::push() To push items at the end of the tag list.
     *
     * @param class-string $abstract <p>
     * Instance name in a container or list of instance names.
     * </p>
     * @param non-empty-lowercase-string $with <p>
     * Tag name.
     * </p>
     *
     * @return void
     */
    private function addTag (string $abstract, string $with):void {

        $this->tags->exist($with)
            ? $this->tags[$with]->contains($abstract) ?: $this->tags[$with]->push($abstract) // @phpstan-ignore-line
            : $this->tags->add($with, new Indexed([$abstract]));

    }

}