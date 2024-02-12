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

use FireHub\Core\Support\Enums\Number\ {
    LogBase, Round
};

use function abs;
use function ceil;
use function floor;
use function log;
use function log10;
use function log1p;
use function max;
use function min;
use function pow;
use function round;

/**
 * ### Number low-level proxy class
 *
 * Class contains methods that are used on all number types.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
abstract class Num {

    /**
     * ### Absolute value
     *
     * Returns the absolute value of $number.
     * @since 1.0.0
     *
     * @param float|int $number <p>
     * The numeric value to process.
     * </p>
     *
     * @return int|float <code>($number is int ? int : float)</code> The absolute value of number.
     * @phpstan-return ($number is int ? int : float)
     */
    final public static function absolute (float|int $number):float|int {

        return abs($number);

    }

    /**
     * ### Round fractions up
     *
     * Returns the next highest integer value by rounding up $number if necessary.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::round() To round $number parameter.
     *
     * @param float|int $number <p>
     * The value to round up.
     * </p>
     *
     * @return int Rounded number up to the next highest integer.
     */
    final public static function ceil (float|int $number):int {

        return self::round(ceil($number));

    }

    /**
     * ### Round fractions down
     *
     * Returns the next lowest integer value (as float) by rounding down $number if necessary.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::round() To round $number parameter.
     *
     * @param float|int $number <p>
     * The value to round down.
     * </p>
     *
     * @return int Rounded number up to the next lowest integer.
     */
    final public static function floor (float|int $number):int {

        return self::round(floor($number));

    }

    /**
     * ### Rounds a float
     *
     * Returns the rounded value of $number to specified $precision (number of digits after the decimal point).
     * $precision can also be negative or zero (default).
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_UP Round number enum.
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_DOWN Round number enum.
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_EVEN Round number enum.
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_ODD Round number enum.
     *
     * @param float|int $number <p>
     * The value to round.
     * </p>
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
     * @return float|int <code>($precision is positive-int ? float : int)</code> Rounded number float.
     * @phpstan-return ($precision is positive-int ? float : int)
     */
    final public static function round (float|int $number, int $precision = 0, Round $round = Round::HALF_UP):float|int {

        $round = round($number, $precision, match ($round) {
            Round::HALF_UP => 1,
            Round::HALF_DOWN => 2,
            Round::HALF_EVEN => 3,
            Round::HALF_ODD => 4,
        });

        return $precision > 0 ? $round : (int)$round;

    }

    /**
     * ### Natural logarithm
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Number\LogBase::E As default parameter.
     * @uses \FireHub\Core\Support\Enums\Number\LogBase::value() To get log value.
     *
     * @param float|int $number <p>
     * The value to calculate the logarithm for.
     * </p>
     * @param \FireHub\Core\Support\Enums\Number\LogBase|float $base [optional] <p>
     * The optional logarithmic base to use (defaults to 'e' and so to the natural logarithm).
     * </p>
     *
     * @return float The logarithm of $number to $base, if given, or the natural logarithm.
     */
    final public static function log (float|int $number, float|LogBase $base = LogBase::E):float {

        return log($number, $base instanceof LogBase ? $base->value() : $base);

    }

    /**
     * ### Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
     * @since 1.0.0
     *
     * @param float|int $number <p>
     * The argument to process.
     * </p>
     *
     * @return float log(1 + num).
     */
    final public static function log1p (float|int $number):float {

        return log1p($number);

    }

    /**
     * ### Base-10 logarithm
     * @since 1.0.0
     *
     * @param float|int $number <p>
     * The argument to process.
     * </p>
     *
     * @return float The base-10 logarithm of num.
     */
    final public static function log10 (float|int $number):float {

        return log10($number);

    }

    /**
     * ### Find highest value
     * @since 1.0.0
     *
     * @template TInt of int|float
     *
     * @param TInt $value <p>
     * <code>TInt</code>
     * Any comparable value.
     * </p>
     * @param TInt ...$values <p>
     * <code>TInt</code>
     * Any comparable values.
     * </p>
     *
     * @return int|float <code>TInt</code> Value considered "highest" according to standard comparisons.
     * @phpstan-return TInt
     */
    final public static function max (float|int $value, float|int ...$values):float|int {

        return max([$value, ...$values]);

    }

    /**
     * ### Find lowest value
     * @since 1.0.0
     *
     * @template TInt of int|float
     *
     * @param TInt $value <p>
     * <code>TInt</code>
     * Any comparable value.
     * </p>
     * @param TInt ...$values <p>
     * <code>TInt</code>
     * Any comparable values.
     * </p>
     *
     * @return int|float <code>TInt</code> Value considered "lowest" according to standard comparisons.
     * @phpstan-return TInt
     */
    final public static function min (float|int $value, float|int ...$values):float|int {

        return min([$value, ...$values]);

    }

    /**
     * ### Exponential expression
     * @since 1.0.0
     *
     * @param float|int $base <p>
     * The base to use.
     * </p>
     * @param float|int $exponent <p>
     * The exponent.
     * </p>
     *
     * @return float|int Base raised to the power of exponent. If both arguments are non-negative integers and the
     * result can be represented as an integer, the result will be returned with an int type, otherwise it will be
     * returned as a float.
     *
     * @note It is possible to use the ** operator instead.
     */
    final public static function power (float|int $base, float|int $exponent):float|int {

        return pow($base, $exponent);

    }

    /**
     * ### Format a number with grouped thousands
     *
     * Formats a number with grouped thousands and optionally decimal digits using the rounding half up rule.
     * @since 1.0.0
     *
     * @param int|float $number <p>
     * The number being formatted.
     * </p>
     * @param int $decimals <p>
     * <code>non-negative-int</code>
     * Sets the number of decimal digits. If 0, the decimal_separator is omitted from the return value.
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
    final public static function format (int|float $number, int $decimals, string $decimal_separator = '.', string $thousands_separator = ','):string {

        return number_format(
            $number,
            $decimals,
            $decimal_separator,
            $thousands_separator
        );

    }

}