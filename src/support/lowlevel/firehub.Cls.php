<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\LowLevel;

use Error;

use function class_alias;
use function class_exists;
use function enum_exists;
use function get_class_vars;
use function interface_exists;
use function trait_exists;

/**
 * ### Class low-level proxy class
 *
 * Class allows you to obtain information about classes.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class Cls extends ClsObj {

    /**
     * ### Checks if class name exists
     *
     * This method checks whether the given class has been defined.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Cls::isEnum() To check if $name is enum.
     *
     * @param string $name <p>
     * The class name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to autoload if not already loaded.
     * </p>
     *
     * @return bool True if class exist, false otherwise.
     */
    public static function isClass (string $name, bool $autoload = true):bool {

        return class_exists($name, $autoload) && !self::isEnum($name, $autoload);

    }

    /**
     * ### Checks if interface name exists
     *
     * Checks if the given interface has been defined.
     * @since 1.0.0
     *
     * @param string $name <p>
     * The interface name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to autoload if not already loaded.
     * </p>
     *
     * @return bool True if the interface exists, false otherwise.
     */
    public static function isInterface (string $name, bool $autoload = true):bool {

        return interface_exists($name, $autoload);

    }

    /**
     * ### Checks if enum name exists
     *
     * This method checks whether the given enum has been defined.
     * @since 1.0.0
     *
     * @param string $name <p>
     * The enum name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to autoload if not already loaded.
     * </p>
     *
     * @return bool True if enum exists, false otherwise.
     */
    public static function isEnum (string $name, bool $autoload = true):bool {

        return enum_exists($name, $autoload);

    }

    /**
     * ### Checks if trait name exist
     * @since 1.0.0
     *
     * @param string $name <p>
     * The trait name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to autoload if not already loaded.
     * </p>
     *
     * @return bool True if trait exists, false otherwise.
     */
    public static function isTrait (string $name, bool $autoload = true):bool {

        return trait_exists($name, $autoload);

    }

    /**
     * ### Creates an alias for a class
     *
     * Creates an alias named alias based on the user-defined class. The aliased class is exactly the same as the
     * original class.
     * @since 1.0.0
     *
     * @param string $class <p>
     * <code>class-string</code>
     * The original class.
     * </p>
     * @param string $alias <p>
     * <code>class-string</code>
     * The alias name for the class.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to autoload if the original class is not found.
     * </p>
     * @phpstan-param class-string $class
     * @phpstan-param class-string $alias
     *
     * @throws Error If failed to alias the class.
     *
     * @return true True on success.
     *
     * @note Class names are case-insensitive in PHP, and this is reflected in this function. Aliases created by
     * [[Cls#alias()]] are declared in lowercase. This means that for a class MyClass, the [[Cls#alias('MyClass',
     * 'MyClassAlias')]] call will declare a new class alias named myclassalias.
     */
    public static function alias (string $class, string $alias, bool $autoload = true):true {

        return class_alias($class, $alias, $autoload)
            ?: throw new Error('Failed to alias the class.');

    }

    /**
     * ### Gets the class public properties and their default values
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Cls::isClass() To check if $class is class.
     *
     * @param string $class <p>
     * <code>class-string</code>
     * The class name.
     * </p>
     * @phpstan-param class-string $class
     *
     * @throws Error If $class is not valid class name.
     *
     * @return array <code><![CDATA[ array<array-key, mixed> ]]></code> Returns an associative array of declared
     * properties visible from the current scope, with their default value.
     * @phpstan-return array<array-key, mixed>
     *
     * @note The result depends on the current scope.
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function properties (string $class):array {

        return get_class_vars($class);

    }

}