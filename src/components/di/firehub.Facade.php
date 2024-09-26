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
use FireHub\Core\Support\Collection\Type\Associative;

/**
 * ### Facades provide a "static" interface to classes that are available in the application's service container
 * @since 1.0.0
 */
abstract class Facade implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### List of active facade instances
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Associative<non-empty-lowercase-string, object>
     */
    private static Associative $instances;

    /**
     * ### Get container record name
     * @since 1.0.0
     *
     * @return class-string Container record name.
     */
    abstract protected static function record ():string;

    /**
     * ### Resolve instance from Facade
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Facade::record() To get a container record name.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::exist() To check if a record name exists.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::add() To add a record name.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::get() To get a record name.
     *
     * @return object Instance from Facade
     */
    private static function resolveInstance ():object {

        if (!isset(self::$instances)) self::$instances = new Associative([]);

        if (!self::$instances->exist(static::record()))
            self::$instances->add(static::record(), Container::getInstance()->resolve(static::record()));

        return self::$instances->get(static::record());

    }

    /**
     * ### Invoking container method
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Facade::resolveInstance() To resolve instance from Facade.
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     * @param array<array-key, mixed> $arguments <p>
     * List of arguments.
     * </p>
     *
     * @return mixed Method result.
     */
    final public static function __callStatic (string $method, array $arguments):mixed {

        return self::resolveInstance()->$method(...$arguments);

    }

}