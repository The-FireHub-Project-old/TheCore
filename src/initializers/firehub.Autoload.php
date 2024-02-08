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

use FireHub\Core\Initializers\Autoload\ {
    Callback, Loaders
};
use FireHub\Core\Support\LowLevel\SplAutoload;
use Closure, Error, Throwable;

/**
 * ### Automatically loads classes and interfaces
 *
 * Autoload registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they
 * are currently not defined. By registering autoloaders, FireHub is given a last chance to load the class or
 * interface before it fails with an error. Any class-like construct may be autoloaded the same way. That includes
 * classes, interfaces, traits, and enumerations.
 * @since 1.0.0
 *
 * @api
 */
final class Autoload {

    /**
     * ### List of active loader implementations for autoloader
     * @since 1.0.0
     *
     * @var \FireHub\Core\Initializers\Autoload\Loaders
     */
    private static Loaders $loaders;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload\Callback As autoload function being registered.
     * @uses \FireHub\Core\Support\LowLevel\SplAutoload::register() To register a callback function as an autoloader.
     * @uses \FireHub\Core\Initializers\Autoload\Loaders::add() To add new callback function as loader with alias.
     *
     * @param string $alias <p>
     * <code>non-empty-string</code>
     * Autoloader implementation name.
     * </p>
     * @param \FireHub\Core\Initializers\Autoload\Callback $callback <p>
     * The autoload function being registered.
     * </p>
     * @param bool $prepend <p>
     * If true, autoloader will be prepended queue instead of appending it.
     * </p>
     * @phpstan-param non-empty-string $alias
     *
     * @throws Error If failed to register autoloader.
     * @error\exeption E_WARNING if a system cannot preload class for autoloader.
     *
     * @return void
     */
    private function __construct (
        private readonly string $alias,
        private readonly Callback $callback,
        private readonly bool $prepend
    ) {

        if (!isset(self::$loaders)) self::$loaders = new Loaders();

        try {

            SplAutoload::register($this->callback, $this->prepend);

            self::$loaders->add($this->alias, $this->callback);

        } catch (Throwable) {

            throw new Error ('Could not register autoloader with alias: '.$alias);

        }

    }

    /**
     * ### Manually include a list of classes
     *
     * This list can be filled with classes that need to be loaded manually. This is useful if autoload itself has
     * classes that need to be loader fist.
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Initializers\Autoload;
     *
     * Autoload::load([
     *  \MyNamespace\MyClass::class,
     *  \MyNamespace\MyOtherClass::class
     * ]);
     * ```
     *
     * @param array $classes <p>
     * <code>class-string[]</code>
     * List of classes to be preloaders. These preloaders will be called in order as they are in the list.
     * </p>
     * @param callable(string $class):string $callback <p>
     * <code>callable(string $class):string</code>
     * Get a class path for including.
     * </p>
     * @phpstan-param class-string[] $classes
     *
     * @throws Error If a system cannot preload class.
     * @error\exeption E_WARNING if a system cannot preload class for autoloader.
     *
     * @return void
     */
    public static function include (array $classes, callable $callback):void {

        foreach ($classes as $class) if (!include($callback($class)))
            throw new Error("Cannot preload $class.");

    }

    /**
     * ### Register new autoload implementation at the end of the queue
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload::$callback To invoke autoload function being registered.
     *
     * @example Registering new autoload implementation.
     *
     * First parameter is autoloaded name that can be later used to unregistered same autoloader, while the second
     * parameter should be a root path where all your classes are stored.
     *
     * ```php
     * use FireHub\Core\Initializers\Autoload;
     *
     * Autoload::append('MyApp', 'path_to_my_app/');
     * ```
     * @example Registering new autoload implementation with function.
     *
     * Alternatively, you can use callback instead of writing a direct root path. Callback should still return a root
     * path for your classes, but this way you can manipulate a returning result like in example bellow.
     *
     * note: you can return false if you want to filter the same results.
     *
     * ```php
     * use FireHub\Core\Initializers\Autoload;
     *
     * Autoload::append('MyApp', function (string $namespace, string $classname):string|false {
     *  if ($classname === 'SomeClassName') {
     *      return false;
     *  }
     *
     * \\ return $namespace.'\\'.$classname.'.class.php';
     * });
     * ```
     *
     * @param string $alias <p>
     * <code>non-empty-string</code>
     * Autoloader implementation name.
     * </p>
     * @param Closure(string $namespace, string $classname):(string|false)|string $path <p>
     * <code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
     * Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
     * inside a root path.
     * </p>
     * @phpstan-param non-empty-string $alias
     * @phpstan-param Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string $path
     *
     * @throws Error If failed to register autoloader.
     * @error\exeption E_WARNING if a system cannot preload class for autoloader.
     *
     * @return self Autoload implementation.
     */
    public static function append (string $alias, Closure|string $path):self {

        return new self($alias, self::callback($path), false);

    }

    /**
     * ### This method is alias for [[Autoload#append()]]
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload::append() To register new autoload implementation at the end of
     * the queue.
     *
     * @param string $alias <p>
     * <code>non-empty-string</code>
     * Autoloader implementation name.
     * </p>
     * @param Closure(string $namespace, string $classname):(string|false)|string $path <p>
     * <code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
     * Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
     * inside a root path.
     * </p>
     * @phpstan-param non-empty-string $alias
     * @phpstan-param Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string $path
     *
     * @throws Error If failed to register autoloader.
     * @error\exeption E_WARNING if a system cannot preload class for autoloader.
     *
     * @return self Autoload implementation.
     */
    public static function register (string $alias, Closure|string $path):self {

        return self::append($alias, $path);

    }

    /**
     * ### Register new autoload implementation at the beginning of the queue
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload::$callback To invoke autoload function being registered.
     *
     * @example
     * ```php
     * use FireHub\Core\Initializers\Autoload;
     *
     * Autoload::prepend('MyApp', 'path_to_my_app/');
     * ```
     *
     * @param string $alias <p>
     * <code>non-empty-string</code>
     * Autoloader implementation name.
     * </p>
     * @param Closure(string $namespace, string $classname):(string|false)|string $path <p>
     * <code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
     * Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
     * inside a root path.
     * </p>
     * @phpstan-param non-empty-string $alias
     * @phpstan-param Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string $path
     *
     * @throws Error If failed to register autoloader.
     *
     * @return self Autoload implementation.
     */
    public static function prepend (string $alias, Closure|string $path):self {

        return new self($alias, self::callback($path), true);

    }

    /**
     * ### Unregister autoload implementation
     *
     * Removes a function from the autoloaded queue. If the queue is activated and empty after removing the given
     * function, then it will be deactivated. When this function results in the queue being deactivated, any autoload
     * function that previously existed will not be reactivated.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\SPLAutoload::unregister() To unregister autoload implementation.
     * @uses \FireHub\Core\Initializers\Autoload\Loaders::get() To get loader callback.
     * @uses \FireHub\Core\Initializers\Autoload\Loaders::remove() To remove unregistered autoload implementation.
     *
     * @example
     * ```php
     * use FireHub\Core\Initializers\Autoload;
     *
     * Autoload::unregister('MyApp');
     * ```
     *
     * @param string $alias <p>
     * <code>non-empty-string</code>
     * Autoloader implementation name.
     * </p>
     * @phpstan-param non-empty-string $alias
     *
     * @throws Error If failed to unregister the autoloader.
     *
     * @return true Always true.
     */
    public static function unregister (string $alias):true {

        try {

            SPLAutoload::unregister(self::$loaders->get($alias));

            self::$loaders->remove($alias);

        } catch (Throwable) {

            throw new Error ('Could not unregister autoloader with alias: '.$alias);

        }

        return true;

    }

    /**
     * ### Get all registered autoloader implementations
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Initializers\Autoload;
     *
     * Autoload::implementations();
     *
     * // ['MyApp' => object, 'OtherImplementations' => object]
     * ```
     *
     * @return \FireHub\Core\Initializers\Autoload\Loaders List of autoloader implementations.
     */
    public static function implementations ():Loaders {

        return self::$loaders;

    }

    /**
     * ### Try all registered autoload functions to load the requested lass
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\SPLAutoload::load() To try all registered autoload functions to load
     * the requested class.
     *
     * @example
     * ```php
     * use FireHub\Core\Initializers\Autoload;
     *
     * Autoload::load('\MyApp\MyClass');
     * ```
     *
     * @param string $class <p>
     * <code>class-string</code>
     * Fully qualified class name that is being called.
     * </p>
     * @phpstan-param class-string $class
     *
     * @return void
     */
    public static function load (string $class):void {

        SPLAutoload::load($class);

    }

    /**
     * ### Invoke autoload function
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload\Callback As new autoload function.
     *
     * @param Closure(string $namespace, string $classname):(string|false)|string $path <p>
     * <code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
     * Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
     * inside a root path.
     * </p>
     * @phpstan-param Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string $path
     *
     * @return \FireHub\Core\Initializers\Autoload\Callback New autoload function.
     */
    private static function callback (Closure|string $path):Callback {

        return new Callback($path);

    }

}