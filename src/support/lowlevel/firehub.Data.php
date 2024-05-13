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

use FireHub\Core\Support\Enums\Data\Type;
use Error, Exception, Stringable;

use function gettype;
use function serialize;
use function settype;
use function unserialize;

/**
 * ### Data low-level proxy class
 *
 * Class contains variable handling methods.
 * @since 1.0.0
 *
 * @comment Temporary exclude on phpmd.md because match pattern is not read correctly on line 196.
 */
final class Data {

    /**
     * ### Gets data type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_BOOL As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_FLOAT As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_STRING As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_ARRAY As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_OBJECT As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_NULL As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_RESOURCE As data type.
     *
     * @param mixed $value <p>
     * The variable being type checked.
     * </p>
     *
     * @throws Error If a type of value is unknown.
     *
     * @return \FireHub\Core\Support\Enums\Data\Type Type of data.
     */
    public static function getType (mixed $value):Type {

        return match (gettype($value)) {
            'boolean' => Type::T_BOOL,
            'integer' => Type::T_INT,
            'double' => Type::T_FLOAT,
            'string' => Type::T_STRING,
            'array' => Type::T_ARRAY,
            'object' => Type::T_OBJECT,
            'NULL' => Type::T_NULL,
            'resource', 'resource (closed)' => Type::T_RESOURCE,
            default => throw new Error('Type of value is unknown.')
        };

    }

    /**
     * ### Sets data type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Data::getType() To get $value type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_BOOL As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_STRING As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_FLOAT As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_ARRAY As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_OBJECT As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_NULL As data type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_RESOURCE As data type.
     *
     * @param mixed $value <p>
     * The variable being converted to type.
     * </p>
     * @param \FireHub\Core\Support\Enums\Data\Type $type <p>
     * Type to convert variable to.
     * </p>
     *
     * @throws Error If a type cannot be set to resource or failed to set a type for value.
     *
     * @return mixed Converted value.
     * @phpstan-return (
     *  $type is Type::T_ARRAY
     *  ? array<array-key, mixed>
     *  : ($type is Type::T_STRING
     *      ? string
     *      : ($type is Type::T_INT
     *          ? int
     *          : ($type is Type::T_FLOAT
     *              ? float
     *              : ($type is Type::T_OBJECT
     *                  ? object
     *                  : ($type is Type::T_BOOL
     *                      ? bool
     *                      : ($type is Type::T_NULL
     *                          ? null
     *                          : ($type is Type::T_RESOURCE
     *                              ? false
     *                              : mixed)))))))
     * )
     */
    public static function setType (mixed $value, Type $type):mixed {

        // if value is array that is trying to convert to string
        if (self::getType($value) === Type::T_ARRAY && $type === Type::T_STRING)
            throw new Error('Cannot convert array to string.');

        // if value is array that is trying to convert to string
        if (
            self::getType($value) === Type::T_OBJECT && !$value instanceof Stringable
            && (
                $type === Type::T_STRING
                || $type === Type::T_INT
                || $type === Type::T_FLOAT
            )
        ) throw new Error('Cannot convert object to string, int or float.');

        // resource is not settable
        if ($type === Type::T_RESOURCE)
            throw new Error('Type cannot be set to resource');

        settype($value, match ($type) {
            Type::T_BOOL => 'boolean',
            Type::T_INT => 'integer',
            Type::T_FLOAT => 'double',
            Type::T_ARRAY => 'array',
            Type::T_OBJECT => 'object',
            Type::T_NULL => 'NULL',
            default => 'string'

        }) ?: throw new Error('Failed to set a type for value.');

        return $value;

    }

    /**
     * ### Generates storable representation of data
     *
     * Generates a storable representation of a value.
     * This is useful for storing or passing PHP values around without losing their type and structure.
     * To make the serialized string into a PHP value again, use unserialize().
     * @since 1.0.0
     *
     * @param scalar|array<array-key, mixed>|object|null $value <p>
     * The value to be serialized.
     * </p>
     *
     * @throws Error If try to serialize anonymous class, function or resource.
     *
     * @return string String containing a byte-stream representation of value that can be stored anywhere.
     *
     * @warning When serialize() serializes objects, the leading backslash is not included in the class name of
     * namespaced classes for maximum compatibility.
     * @note This is a binary string that may include null bytes and needs to be stored and handled as such. For
     * example, serialize() output should generally be stored in a BLOB field in a database, rather than a CHAR or
     * TEXT field.
     */
    public static function serialize (string|int|float|bool|array|object|null $value):string {

        try {

            return serialize($value);

        } catch (Exception) {

            throw new Error('Anonymous classes, functions and resources cannot be serialized.');

        }

    }

    /**
     * ### Creates a PHP value from a stored representation
     * @since 1.0.0
     *
     * @param non-empty-string $data <p>
     * The serialized string.
     * </p>
     * @param bool|array<class-string> $allowed_classes [optional] <p>
     * Either an array of class names which should be accepted, false to accept no classes,
     * or true to accept all classes.
     * </p>
     * @param int $max_depth [optional] <p>
     * The maximum depth of structures permitted during unserialization, and is intended to prevent stack overflows.
     * </p>
     *
     * @throws Error $data is already false already or $data is NULL, or could not unserialize data.
     * @error\exeption E_WARNING if could not unserialize data.
     *
     * @return mixed The converted value is returned.
     */
    public static function unserialize (string $data, bool|array $allowed_classes = false, int $max_depth = 4096):mixed {

        return match ($data) {
            'b:0;', 'N;' => throw new Error('$data is already false already or $data is NULL'),
            default => ($unserialized_data = unserialize(
                $data,
                ['allowed_classes' => $allowed_classes, 'max_depth' => $max_depth])
            ) ? $unserialized_data : throw new Error('Could not unserialize data.')
        };

    }

}