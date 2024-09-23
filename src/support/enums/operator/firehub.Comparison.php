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

namespace FireHub\Core\Support\Enums\Operator;

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};

/**
 * ### Comparison operator enum
 * @since 1.0.0
 *
 * @link https://www.php.net/manual/en/types.comparisons.php PHP type comparison tables.
 */
enum Comparison implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * ### True if $a is equal to $b after type juggling
     * @since 1.0.0
     */
    case EQUAL;

    /**
     * ### True if $a is equal to $b, and they're of the same type
     * @since 1.0.0
     */
    case IDENTICAL;

    /**
     * ### True if $a is not equal to $b after type juggling
     * @since 1.0.0
     */
    case NOT_EQUAL;

    /**
     * ### True if $a is not equal to $b, or they aren't of the same type
     * @since 1.0.0
     */
    case NOT_IDENTICAL;

    /**
     * ### True if $a is strictly less than $b
     * @since 1.0.0
     */
    case LESS;

    /**
     * ### True if $a is strictly greater than $b
     * @since 1.0.0
     */
    case GREATER;

    /**
     * ### True if $a is less than or equal to $b
     * @since 1.0.0
     */
    case LESS_OR_EQUAL;

    /**
     * ### True if $a is greater than or equal to $b
     * @since 1.0.0
     */
    case GREATER_OR_EQUAL;

    /**
     * ### An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively
     * @since 1.0.0
     */
    case SPACESHIP;

    /**
     * ### Compare current enum with provided values
     * @since 1.0.0
     *
     * @param mixed $value <p>
     * Value A to compare.
     * </p>
     * @param mixed $with <p>
     * Value B to with value A.
     * </p>
     *
     * @return bool|int Comparison result: true, false, -1, 0, or 1 if SPACESHIP is used.
     */
    public function compare (mixed $value, mixed $with):bool|int {

        return match ($this) {
            self::EQUAL => $value == $with,
            self::IDENTICAL => $value === $with,
            self::NOT_EQUAL => $value != $with,
            self::NOT_IDENTICAL => $value !== $with,
            self::LESS => $value < $with,
            self::GREATER => $value > $with,
            self::LESS_OR_EQUAL => $value <= $with,
            self::GREATER_OR_EQUAL => $value >= $with,
            self::SPACESHIP => $value <=> $with
        };

    }

}