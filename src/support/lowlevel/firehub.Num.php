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
use function deg2rad;
use function exp;
use function hypot;
use function log;
use function log10;
use function log1p;
use function max;
use function min;
use function pow;
use function rad2deg;
use function round;
use function sqrt;

/**
 * ### Number low-level proxy class
 *
 * Class contains methods that are used on all number types.
 * @since 1.0.0
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
     * @return ($number is int ? int : float) The absolute value of number.
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
     * @return ($precision is positive-int ? float : int) Rounded number float.
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
     * @return TInt Value considered "highest" according to standard comparisons.
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
     * @return TInt Value considered "lowest" according to standard comparisons.
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
     * @param non-negative-int $decimals <p>
     * Sets the number of decimal digits. If 0, the decimal_separator is omitted from the return value.
     * </p>
     * @param string $decimal_separator <p>
     * Sets the separator for the decimal point.
     * </p>
     * @param string $thousands_separator <p>
     * Sets the separator for thousands.
     * </p>
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

    /**
     * ### Converts the number in degrees to the radian equivalent
     * @since 1.0.0
     *
     * @param int|float $number <p>
     * Angular value in degrees.
     * </p>
     *
     * @return float Radian equivalent of number.
     */
    public static function degreesToRadian (int|float $number):float {

        return deg2rad($number);

    }

    /**
     * ### Converts the radian number to the equivalent number in degrees
     * @since 1.0.0
     *
     * @param int|float $number <p>
     * Radian value.
     * </p>
     *
     * @return float Equivalent of number in degrees.
     */
    public static function radianToDegrees (int|float $number):float {

        return rad2deg($number);

    }

    /**
     * ### Calculates the exponent of e
     * @since 1.0.0
     *
     * @param int|float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float 'e' raised to the power of number.
     *
     * @note 'e' is the base of the natural system of logarithms, or approximately 2.718282.
     */
    public static function exponent (int|float $number):float {

        return exp($number);

    }

    /**
     * ### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero
     *
     * Method returns the equivalent to 'exp(num) - 1' computed in a way that is accurate even if the value of num is
     * near zero, a case where 'exp (num) - 1' would be inaccurate due to subtraction of two numbers that are nearly
     * equal.
     * @since 1.0.0
     *
     * @param int|float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float 'e' raised to the power of number.
     *
     * @note 'e' to the power of num minus one.
     */
    public static function exponent1 (int|float $number):float {

        return expm1($number);

    }

    /**
     * ### Calculate the length of the hypotenuse of a right-angle triangle
     *
     * Method returns the length of the hypotenuse of a right-angle triangle with sides of length x and y, or the
     * distance of the point (x, y) from the origin.
     * This is equivalent to sqrt($x*$x + $y*$y).
     * @since 1.0.0
     *
     * @param int|float $x <p>
     * Length of the first side.
     * </p>
     * @param int|float $y <p>
     * Length of the second side.
     * </p>
     *
     * @return float Calculated length of the hypotenuse.
     */
    public static function hypotenuseLength (int|float $x, int|float $y):float {

        return hypot($x, $y);

    }

    /**
     * ### Square root
     * @since 1.0.0
     *
     * @param int|float $number  <p>
     * The argument to process.
     * </p>
     *
     * @return float The square root of num or the special value NAN for negative numbers.
     */
    public static function squareRoot (int|float $number):float {

        return sqrt($number);

    }

}