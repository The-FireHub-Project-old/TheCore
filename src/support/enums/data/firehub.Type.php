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

namespace FireHub\Core\Support\Enums\Data;

/**
 * ### Data type enum
 *
 * Data type defines the type of data a variable can store.
 * @since 1.0.0
 */
enum Type {

    /**
     * ### A bool expresses a truth value, it can be either true or false
     * @since 1.0.0
     */
    case T_BOOL;

    /**
     * ### An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}
     * @since 1.0.0
     */
    case T_INT;

    /**
     * ### A floating-point number is represented approximately with a fixed number of significant digits
     * @since 1.0.0
     */
    case T_FLOAT;

    /**
     * ### A string is a series of characters, where a character is the same as a byte
     * @since 1.0.0
     */
    case T_STRING;

    /**
     * ### An ordered map where map is a type that associates values to keys
     * @since 1.0.0
     */
    case T_ARRAY;

    /**
     * ### An object is an individual instance of the data structure defined by a class
     * @since 1.0.0
     */
    case T_OBJECT;

    /**
     * ### The special null value represents a variable with no value
     * @since 1.0.0
     */
    case T_NULL;

    /**
     * ### The special resource type is used to store references to some function call or to external PHP resources
     * @since 1.0.0
     */
    case T_RESOURCE;

    /**
     * ## Gets data type category
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Data\Category::SCALAR To check if this enum is a scalar type category.
     * @uses \FireHub\Core\Support\Enums\Data\Category::COMPOUND To check if this enum is a compound type category.
     * @uses \FireHub\Core\Support\Enums\Data\Category::SPECIAL To check if this enum is a special type category.
     *
     * @return \FireHub\Core\Support\Enums\Data\Category Data type category.
     */
    public function category ():Category {

        return match ($this) {
            self::T_BOOL, self::T_INT, self::T_FLOAT, self::T_STRING => Category::SCALAR,
            self::T_ARRAY, self::T_OBJECT => Category::COMPOUND,
            self::T_NULL, self::T_RESOURCE => Category::SPECIAL
        };

    }

}