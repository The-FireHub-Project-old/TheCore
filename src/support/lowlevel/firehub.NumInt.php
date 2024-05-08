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

use ArithmeticError, DivisionByZeroError;

use function intdiv;

/**
 * ### Integer number low-level proxy class
 *
 * An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}.
 * Int can be specified in decimal (base 10), hexadecimal (base 16), octal (base 8) or binary (base 2) notation.
 * The negation operator can be used to denote a negative int.
 *
 * @since 1.0.0
 */
final class NumInt extends Num {

    /**
     * ### Integer division
     * @since 1.0.0
     *
     * @param int $dividend <p>
     * Number to be divided.
     * </p>
     * @param non-zero-int $divisor <p>
     * Number which divides the $dividend.
     * </p>
     *
     * @throws ArithmeticError If the $dividend is PHP_INT_MIN and the $divisor is -1.
     * @throws DivisionByZeroError If $divisor is 0.
     *
     * @return int The integer quotient of the division of $dividend by $divisor.
     */
    public static function divide (int $dividend, int $divisor):int {

        return intdiv($dividend, $divisor);

    }

}