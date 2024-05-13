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

use function get_class;
use function get_mangled_object_vars;
use function get_object_vars;
use function spl_object_hash;
use function spl_object_id;

/**
 * ### Object low-level proxy class
 *
 * Class allows you to obtain information about objects.
 * @since 1.0.0
 */
final class Obj extends ClsObj {

    /**
     * ### Return the integer object handle for given object
     *
     * This function returns a unique identifier for the object. The object id is unique for the lifetime of the object.
     * Once the object is destroyed, its id may be reused for other objects. This behavior is similar to [[Obj#hash()]].
     * @since 1.0.0
     *
     * @param object $object <p>
     * Any object.
     * </p>
     *
     * @return int An integer identifier that is unique for each currently existing object and
     * is always the same for each object.
     *
     * @note When an object is destroyed, its id may be reused for other objects.
     */
    public static function id (object $object):int {

        return spl_object_id($object);

    }

    /**
     * ### Return hash id for a given object
     *
     * This function returns a unique identifier for the object. This id can be used as a hash key for storing objects,
     * or for identifying an object, as long as the object is not destroyed. Once the object is destroyed, its hash
     * may be reused for other objects.
     * @since 1.0.0
     *
     * @param object $object <p>
     * Any object.
     * </p>
     *
     * @return string A string that is unique for each currently existing object and is always the same for each object.
     *
     * @note When an object is destroyed, its hash may be reused for other objects.
     * @note Object hashes should be compared for identity with === and !==, because the returned hash could be a
     * numeric string. For example, 0000000000000e600000000000000000.
     */
    public static function hash (object $object):string {

        return spl_object_hash($object);

    }

    /**
     * ### Returns the name of the class of an object
     * @since 1.0.0
     *
     * @param object $object <p>
     * The tested object.
     * </p>
     *
     * @return class-string The name of the class of which object is an instance.
     */
    public static function className (object $object):string {

        return get_class($object);

    }

    /**
     * ### Gets the properties of the given object
     *
     * Gets the accessible non-static properties of the given object according to scope.
     * @since 1.0.0
     *
     * @param object $object <p>
     * An object instance.
     * </p>
     *
     * @return array<string, mixed> An associative array of defined object-accessible non-static properties for a specified object in scope.
     *
     * @note Uninitialized properties are considered inaccessible, and thus will not be included in the array.
     */
    public static function properties (object $object):array {

        return get_object_vars($object);

    }

    /**
     * ### Gets the mangled object properties
     *
     * Returns an array whose elements are the object's properties. The keys are the member variable names, with a
     * few notable exceptions: private variables have the class name prepended to the variable name, and protected
     * variables have a * prepended to the variable name. These prepended values have NUL bytes on either side.
     * Uninitialized typed properties are silently discarded.
     * @since 1.0.0
     *
     * @param object $object <p>
     * An object instance.
     * </p>
     *
     * @return array<array-key, mixed> An array containing all properties, regardless of visibility, of an object.
     */
    public static function mangledProperties (object $object):array {

        return get_mangled_object_vars($object);

    }

}