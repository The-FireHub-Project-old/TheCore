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

use function acos;
use function acosh;
use function asin;
use function asinh;
use function atan;
use function atan2;
use function atanh;
use function cos;
use function cosh;
use function fdiv;
use function fmod;
use function is_finite;
use function is_infinite;
use function is_nan;
use function sin;
use function sinh;
use function tan;
use function tanh;

/**
 * ### Float number low-level proxy class
 *
 * Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the
 * following syntax's: 1.234, 1.2e3, 7E-10, 1_234.567.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
final class NumFloat extends Num {

    /**
     * ### Finds whether a value is a legal finite number
     *
     * Checks whether $number is legally finite on this platform.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The value to check.
     * </p>
     *
     * @return bool True if number is a legal finite number within the allowed range for a PHP float on this platform,
     * false otherwise.
     */
    public static function isFinite (float $number):bool {

        return is_finite($number);

    }

    /**
     * ### Finds whether a value is infinite
     *
     * Returns true if num is infinite (positive or negative), like the result of log(0) or any value too big to fit
     * into a float on this platform.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The value to check.
     * </p>
     *
     * @return bool True if the number is infinite, false otherwise.
     */
    public static function isInfinite (float $number):bool {

        return is_infinite($number);

    }

    /**
     * ### Finds whether a value is not a number
     *
     * Checks whether num is 'not a number', like the result of acos(1.01).
     * @since 1.0.0
     *
     * @param float $number <p>
     * Value to check.
     * </p>
     *
     * @return bool True if number is 'not a number', false otherwise.
     */
    public static function isNan (float $number):bool {

        return is_nan($number);

    }

    /**
     * ### Divides two numbers, according to IEEE 754
     *
     * Returns the floating point result of dividing the num1 by the num2. If the num2 is zero, then one of INF,
     * -INF, or NAN will be returned.
     * @since 1.0.0
     *
     * @param float $dividend <p>
     * Number to be divided.
     * </p>
     * @param float $divisor <p>
     * Number which divides the $dividend.
     * </p>
     *
     * @return float The floating point result of the division of $dividend by $divisor.
     */
    public static function divide (float $dividend, float $divisor):float {

        return fdiv($dividend, $divisor);

    }

    /**
     * ### Get the floating point remainder (modulo) of the division of the arguments
     *
     * Returns the floating point remainder of dividing the dividend ($dividend) by the divisor ($divisor). The
     * remainder (r) is defined as: $dividend = i * $divisor + r, for some integer i. If $divisor is non-zero, r has
     * the same sign as $dividend and a magnitude less than the magnitude of $divisor.
     * @since 1.0.0
     *
     * @param float $dividend <p>
     * The dividend.
     * </p>
     * @param float $divisor <p>
     * The divisor.
     * </p>
     *
     * @return float The floating point remainder (modulo) of the division for the arguments.
     */
    public static function remainder (float $dividend, float $divisor):float {

        return fmod($dividend, $divisor);

    }

    /**
     * ### Cosine
     *
     * Method returns the cosine of the $number parameter. The $number parameter is in radians.
     * @since 1.0.0
     *
     * @param float $number <p>
     * An angle in radians.
     * </p>
     *
     * @return float The cosine of angle.
     */
    public static function cosine (float $number):float {

        return cos($number);

    }

    /**
     * ### Arc cosine
     *
     * Returns the arc cosine of num in radians. cosineArc() is the inverse function of cosine(), which means that
     * $number == cosine(cosineArc($number)) for every value of a that is within cosineArc() range.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float The arc cosine of number in radians.
     */
    public static function cosineArc (float $number):float {

        return acos($number);

    }

    /**
     * ### Hyperbolic cosine
     *
     * Returns the hyperbolic cosine of $number, defined as (exponent($number) + exponent(-$number))/2.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Hyperbolic cosine of number.
     */
    public static function cosineHyperbolic (float $number):float {

        return cosh($number);

    }

    /**
     * ### Inverse hyperbolic cosine
     *
     * Returns the inverse hyperbolic cosine of $number, i.e., the value whose hyperbolic cosine is $number.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Inverse hyperbolic cosine of number.
     */
    public static function cosineInverseHyperbolic (float $number):float {

        return acosh($number);

    }

    /**
     * ### Sine
     *
     * Method returns the sine of the num parameter. The num parameter is in radians.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Sine of number.
     */
    public static function sine (float $number):float {

        return sin($number);

    }

    /**
     * ### Arc sine
     *
     * Returns the arc sine of $number in radians. sineArc() is the inverse function of sine(), which means that
     * $num == sine(sineArc($number)) for every value of a that is within sineArc()'s range.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float The arc sine of number in radians.
     */
    public static function sineArc (float $number):float {

        return asin($number);

    }

    /**
     * ### Hyperbolic sine
     *
     * Returns the hyperbolic sine of num, defined as (exponent($number) - exponent(-$number))/2.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Hyperbolic sine of number.
     */
    public static function sineHyperbolic (float $number):float {

        return sinh($number);

    }

    /**
     * ### Inverse hyperbolic tangent
     *
     * Returns the inverse hyperbolic sine of $number, i.e., the value whose hyperbolic sine is $number.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float The inverse hyperbolic sine of number.
     */
    public static function sineHyperbolicInverse (float $number):float {

        return asinh($number);

    }

    /**
     * ### Tangent
     *
     * Returns the tangent of the num parameter. The num parameter is in radians.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process in radians.
     * </p>
     *
     * @return float Tangent of number.
     */
    public static function tangent (float $number):float {

        return tan($number);

    }

    /**
     * ### Arc tangent
     *
     * Returns the arc tangent of num in radians. tangentArc() is the inverse function of tangent(), which means that
     * $num == tangent(tangentArc($number)) for every value of a that is within tangentArc()'s range.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Arc tangent of num in radians.
     */
    public static function tangentArc (float $number):float {

        return atan($number);

    }

    /**
     * ### Arc tangent of two variables
     *
     * This method calculates the arc tangent of the two variables x and y. It is similar to calculating the arc
     * tangent of y / x, except that the signs of both arguments are used to determine the quadrant of the result.
     * The function returns the result in radians, which is between -PI and PI (inclusive).
     * @since 1.0.0
     *
     * @param float $x <p>
     * Divisor parameter.
     * </p>
     * @param float $y <p>
     * Dividend parameter.
     * </p>
     *
     * @return float Arc tangent of y/x in radians.
     */
    public static function tangentArc2 (float $x, float $y):float {

        return atan2($y, $x);

    }

    /**
     * ### Hyperbolic tangent
     *
     * Returns the hyperbolic tangent of $number, defined as sineHyperbolic($number)/cosineHyperbolic($number).
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Hyperbolic tangent of number.
     */
    public static function tangentHyperbolic (float $number):float {

        return tanh($number);

    }

    /**
     * ### Inverse hyperbolic tangent
     *
     * Returns the inverse hyperbolic tangent of $number, i.e., the value whose hyperbolic tangent is $number.
     * @since 1.0.0
     *
     * @param float $number <p>
     * The argument to process.
     * </p>
     *
     * @return float Inverse hyperbolic tangent of $number.
     */
    public static function tangentInverseHyperbolic (float $number):float {

        return atanh($number);

    }

}