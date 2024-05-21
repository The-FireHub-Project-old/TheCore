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

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};

use function get_declared_classes;
use function get_declared_interfaces;
use function get_declared_traits;
use function get_defined_constants;
use function get_defined_functions;

/**
 * ### Declared low-level proxy class
 *
 * Class allows you to get information about declared classes and objects.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class Declared implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Gets the declared classes
     * @since 1.0.0
     *
     * @return array<class-string> Array of the names for the declared classes in the current script.
     *
     * @note Note that depending on what extensions you have compiled or loaded into PHP, additional classes could be
     * present. This means that you will not be able to define your own classes using these names.
     */
    public static function classes ():array {

        return get_declared_classes();

    }

    /**
     * ### Gets the declared interfaces
     * @since 1.0.0
     *
     * @return array<class-string> Array of the names for the declared interfaces in the current script.
     */
    public static function interfaces ():array {

        return get_declared_interfaces();

    }

    /**
     * ### Gets the declared traits
     * @since 1.0.0
     *
     * @return array<class-string> Array of the names for the declared traits in the current script.
     */
    public static function traits ():array {

        return get_declared_traits();

    }

    /**
     * ### Gets the declared constants
     *
     * Returns the names and values of all the constants currently defined. This includes those created by extensions
     * as well as those created with the define() function.
     * @since 1.0.0
     *
     * @param bool $categorize [optional] <p>
     * Causing this function to return a multidimensional array with categories in the keys of the first dimension
     * and constants and their values in the second dimension.
     * </p>
     *
     * @return ($categorize is true ? array<string, array<non-empty-string, mixed>> : array<mixed>) Array of constant name => constant value array,
     * optionally grouped by extension name registering the constant.
     */
    public static function constants (bool $categorize = false):array {

        return get_defined_constants($categorize);

    }

    /**
     * ### Gets the declared functions
     * @since 1.0.0
     *
     * @param bool $exclude_disabled [optional] <p>
     * Whether disabled functions should be excluded from the return value.
     * </p>
     *
     * @return array{internal: non-empty-array<int, callable-string>, user: array<int, callable-string>}
     * A multidimensional array containing a list of all defined functions, both built-in (internal) and user-defined.
     * The internal functions will be accessible via $arr["internal"], and the user defined ones using $arr["user"].
     */
    public static function functions (bool $exclude_disabled = true):array {

        return get_defined_functions($exclude_disabled);

    }

}