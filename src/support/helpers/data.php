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

namespace FireHub\Core\Support\Helpers\Data;

use FireHub\Core\Support\Enums\ {
    Data\Category, Data\Type, Operator\Comparison
};
use FireHub\Core\Support\LowLevel\Data;

/**
 * ### Checks if the value is of a type
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
 * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
 * @uses \FireHub\Core\Support\Enums\Data\Type::category() To get a data type category.
 * @uses \FireHub\Core\Support\Enums\Operator\Comparison::IDENTICAL As a comparison type.
 * @uses \FireHub\Core\Support\Enums\Operator\Comparison::compare() To compare the current enum with provided values.
 * @uses \FireHub\Core\Support\LowLevel\Data::getType() To get a data type.
 *
 * @example
 * ```php
 * use \FireHub\Core\Support\Enums\Data\Type;
 * use function FireHub\Core\Support\Helpers\Data\isType;
 *
 * isType(10, Type::T_INT);
 *
 * // true
 * ```
 *
 * @param mixed $value <p>
 * The variable being type-checked.
 * </p>
 * @param \FireHub\Core\Support\Enums\Data\Category|\FireHub\Core\Support\Enums\Data\Type $type<p>
 * Type or type category to compare to.
 * </p>
 *
 * @return bool True if values is of a type, false otherwise.
 *
 * @api
 */
function isType (mixed $value, Category|Type $type):bool {

    /* @phpstan-ignore-next-line */
    return Comparison::IDENTICAL->compare(
        $type instanceof Category
            ? Data::getType($value)->category()
            : Data::getType($value),
        $type
    );

}