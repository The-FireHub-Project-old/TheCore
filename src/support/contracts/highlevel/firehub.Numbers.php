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

namespace FireHub\Core\Support\Contracts\HighLevel;

use FireHub\Core\Support\Contracts\Stringable;
use FireHub\Core\Support\Enums\Number\Round;

/**
 * ### Numbers contract
 * @since 1.0.0
 */
interface Numbers extends Stringable {

    /**
     * ### Check if number is positive
     * @since 1.0.0
     *
     * @return bool True if the number is positive, false otherwise.
     */
    public function isPositive ():bool;

    /**
     * ### Check if number is negative
     * @since 1.0.0
     *
     * @return bool True if the number is negative, false otherwise.
     */
    public function isNegative ():bool;

    /**
     * ### Finds whether a value is a legal finite number
     *
     * Checks whether $number is legally finite on this platform.
     * @since 1.0.0
     *
     * @return bool True if the number is a legal finite number, false otherwise.
     */
    public function isFinite ():bool;

    /**
     * ### Finds whether a value is infinite
     *
     * Returns true if num is infinite (positive or negative), like the result of log(0) or any value too big to fit
     * into a float on this platform.
     * @since 1.0.0
     *
     * @return bool True if the number is infinite, false otherwise.
     */
    public function isInfinite ():bool;

    /**
     * ### Finds whether a value is not a number
     *
     * Checks whether num is 'not a number', like the result of acos(1.01).
     * @since 1.0.0
     *
     * @return bool True if the number is not a number, false otherwise.
     */
    public function isNan ():bool;

    /**
     * ### Make sure the number is positive
     * @since 1.0.0
     *
     * @return $this This number.
     */
    public function toPositive ():self;

    /**
     * ### Make sure the number is negative
     * @since 1.0.0
     *
     * @return $this This number.
     */
    public function toNegative ():self;

    /**
     * ### Absolute value
     * @since 1.0.0
     *
     * @return $this This number.
     */
    public function absolute ():self;

    /**
     * ### Round fractions up
     *
     * Returns the next highest integer value by rounding up $number if necessary.
     * @since 1.0.0
     *
     * @return $this This number.
     */
    public function ceil ():self;

    /**
     * ### Round fractions down
     *
     * Returns the next lowest integer value (as float) by rounding down $number if necessary.
     * @since 1.0.0
     *
     * @return $this This number.
     */
    public function floor ():self;

    /**
     * ### Rounds number
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_UP As default rounding.
     *
     * @param int $precision [optional] <p>
     * Number of decimal digits to round to. If the precision is positive, num is rounded to precision significant
     * digits after the decimal point. If the precision is negative, num is rounded to precision significant digits
     * before the decimal point, i.e., to the nearest multiple of pow(10, -$precision), e.g. for a precision of -1
     * num is rounded to tens, for a precision of -2 to hundreds, etc.
     * </p>
     * @param \FireHub\Core\Support\Enums\Number\Round $round [optional] <p>
     * Specify the mode in which rounding occurs.
     * </p>
     *
     * @return $this This number.
     */
    public function round (int $precision = 0, Round $round = Round::HALF_UP):self;

    /**
     * ### Get number as raw integer
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_UP As default rounding.
     *
     * @param \FireHub\Core\Support\Enums\Number\Round $round [optional] <p>
     * Specify the mode in which rounding occurs.
     * </p>
     *
     * @return int Number as raw integer.
     */
    public function asInt (Round $round = Round::HALF_UP):int;

    /**
     * ### Get number as raw float
     * @since 1.0.0
     *
     * @return float Number as raw float.
     */
    public function asFloat ():float;

    /**
     * ### Parse number
     *
     * Parse a number with grouped thousands and optionally decimal digits using the rounding half up rule.
     * @since 1.0.0
     *
     * @param int $decimals <p>
     * <code>non-negative-int</code>
     * Sets the number of decimal digits.
     * If 0, the decimal_separator is omitted from the return value.
     * </p>
     * @param string $decimal_separator <p>
     * Sets the separator for the decimal point.
     * </p>
     * @param string $thousands_separator <p>
     * Sets the separator for thousands.
     * </p>
     * @phpstan-param non-negative-int $decimals
     *
     * @return string A formatted version of number.
     */
    public function parse (int $decimals = 0, string $decimal_separator = '.', string $thousands_separator = ','):string;

}