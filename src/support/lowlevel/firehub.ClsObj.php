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

use Error, TypeError;

use function class_implements;
use function class_parents;
use function class_uses;
use function get_class_methods;
use function get_parent_class;
use function method_exists;
use function property_exists;
use function is_a;
use function is_subclass_of;

/**
 * ### Class and object low-level proxy class
 *
 * Class allows you to obtain information about classes and objects.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
abstract class ClsObj {

    /**
     * ### Checks if the class method exists
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * An object instance or a class name.
     * </p>
     * @param string $method <p>
     * <code>non-empty-string</code>
     * The method name.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     * @phpstan-param non-empty-string $method
     *
     * @return bool True if the method given by method has been defined for the given object_or_class, false otherwise.
     *
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    public static function methodExist (string|object $object_or_class, string $method):bool {

        return method_exists($object_or_class, $method);

    }

    /**
     * ### Checks if the object or class has a property
     *
     * This method checks if the given property exists in the specified class.
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * The class name or an object of the class to test for.
     * </p>
     * @param string $property <p>
     * <code>non-empty-string</code>
     * The name of the property.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     * @phpstan-param non-empty-string $property
     *
     * @throws Error If there was an error trying to get property.
     *
     * @return bool True if the property exists, false if it doesn't exist.
     *
     * @note As opposed with isset(), [[ClsObj#propertyExist()]] returns true even if the property has the value null.
     * @note This method cannot detect properties that are magically accessible using the __get magic method.
     * @note Using this function will use any registered autoloaders if the class is not already known.
     */
    final public static function propertyExist (string|object $object_or_class, string $property):bool {

        /**
         * PHPStan reports that property_exists could not return NULL, but it can if an error trying to get property.
         * @phpstan-ignore-next-line
         */
        return DataIs::null($property = property_exists($object_or_class, $property))
            ? $property
            : throw new Error("There was an error trying to get property: $property");

    }

    /**
     * ### Checks whether the object or class is of a given type or subtype
     *
     * Checks if the given $object_or_class is of this object type or has this object type as one of its supertypes.
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * A class name or an object instance.
     * </p>
     * @param string $class <p>
     * The class or interface name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     * class-string $class
     *
     * @return bool True if the object is of this object type or has this object type as one of its supertypes,
     * false otherwise.
     */
    public static function ofClass (string|object $object_or_class, string $class, bool $autoload = true):bool {

        return is_a($object_or_class, $class, $autoload);

    }

    /**
     * ### Checks if class has this class as one of its parents or implements it
     *
     * Checks if the given object_or_class has the class $class as one of its parents or implements it.
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * The tested class. No error is generated if the class does not exist.
     * </p>
     * @param string $class <p>
     * The class or interface name.
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     * @phpstan-param class-string $class
     *
     * @return bool True if the object is of this object or lass type or has this object type as one of its supertypes,
     * false otherwise.
     */
    public static function subClassOf (string|object $object_or_class, string $class, bool $autoload = true):bool {

        return is_subclass_of($object_or_class, $class, $autoload);

    }

    /**
     * ### Gets the class or object methods names
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Cls::isClass() To check if $object_or_class parameter is class.
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * The class name or an object instance.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     *
     * @throws TypeError If $object_or_class is not an object or a valid class name.
     *
     * @return array <code><![CDATA[ array<string> ]]></code> Returns an array of method names defined for the class.
     * @phpstan-return array<string>
     *
     * @note The result depends on the current scope.
     */
    final public static function methods (string|object $object_or_class):array {

        return get_class_methods($object_or_class);

    }

    /**
     * ### Retrieves the parent class name for an object or class
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * The tested object or class name. This parameter is optional if called from the object's method.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     *
     * @return string|false <code>class-string|false</code> The name of the parent class for the class that
     * $object_or_class is an instance or the name, or false if object_or_class doesn't have a parent.
     * @phpstan-return class-string|false
     */
    final public static function parentClass (string|object $object_or_class):string|false {

        return get_parent_class($object_or_class);

    }

    /**
     * ### Return the parent classes of the given class
     *
     * This function returns an array with the name of the parent classes of the given object_or_class.
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * An object (class instance) or a string (class or interface name).
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     *
     * @throws Error If $object_or_class does not exist and could not be loaded.
     * @error\exeption E_WARNING If $object_or_class does not exist and could not be loaded.
     *
     * @return array <code><![CDATA[ array<string, class-string> ]]></code> An array on success.
     * @phpstan-return array<string, class-string>
     */
    final public static function parents (object|string $object_or_class, bool $autoload = true):array {

        return class_parents($object_or_class, $autoload)
            ?: throw new Error('$object_or_class does not exist and could not be loaded.');

    }

    /**
     * ### Return the interfaces which are implemented by the given class or interface
     *
     * This function returns an array with the names of the interfaces that the given object_or_class
     * and its parents implement.
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * An object (class instance) or a string (class or interface name).
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     *
     * @throws Error If $object_or_class does not exist and could not be loaded.
     * @error\exeption E_WARNING If $object_or_class does not exist and could not be loaded.
     *
     * @return array <code><![CDATA[ array<string, class-string> ]]></code> An array.
     * @phpstan-return array<string, class-string>
     */
    final public static function implements (object|string $object_or_class, bool $autoload = true):array {

        return class_implements($object_or_class, $autoload)
            ?: throw new Error('$object_or_class does not exist and could not be loaded.');

    }

    /**
     * ### Return the traits used by the given class
     *
     * This function returns an array with the names of the traits that the given object_or_class uses.
     * This does, however, not include any traits used by a parent class.
     * @since 1.0.0
     *
     * @param string|object $object_or_class <p>
     * <code>class-string|object</code>
     * An object (class instance) or a string (class or interface name).
     * </p>
     * @param bool $autoload [optional] <p>
     * Whether to allow this function to load the class automatically through the __autoload magic method.
     * </p>
     * @phpstan-param class-string|object $object_or_class
     *
     * @throws Error If $object_or_class does not exist and could not be loaded.
     * @error\exeption E_WARNING If $object_or_class does not exist and could not be loaded.
     *
     * @return array <code><![CDATA[ array<string, class-string> ]]></code> An array.
     * @phpstan-return array<string, class-string>
     */
    final public static function uses (object|string $object_or_class, bool $autoload = true):array {

        return class_uses($object_or_class, $autoload)
            ?: throw new Error('$object_or_class does not exist and could not be loaded.');

    }

}