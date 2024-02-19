<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Test
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace support\lowlevel;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\LowLevel\ {
    Num, NumFloat
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, DataProvider, Depends
};
use FireHub\Core\Support\Enums\Number\ {
    LogBase, Round
};

/**
 * ### Test float number low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Num::class)]
#[CoversClass(NumFloat::class)]
#[CoversClass(LogBase::class)]
final class NumFloatTest extends Base {

    /**
     * @since 1.0.0
     *
     * @param float $float
     *
     * @return void
     */
    #[DataProvider('positiveFloats')]
    #[DataProvider('negativeFloats')]
    #[DataProvider('nullFloats')]
    public function testAbsolute (float $float):void {

        $this->assertIsFloat(NumFloat::absolute($float));

    }

    /**
     * @since 1.0.0
     *
     * @param float $float
     *
     * @return void
     */
    #[DataProvider('positiveFloats')]
    #[DataProvider('negativeFloats')]
    #[DataProvider('nullFloats')]
    public function testRound (float $float):void {

        $this->assertIsInt(NumFloat::round($float, 0));
        $this->assertIsFloat(NumFloat::round($float, 1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRounding ():void {

        $this->assertSame(2, NumFloat::round(1.5, 0, Round::HALF_UP));
        $this->assertSame(1, NumFloat::round(0.5, 0, Round::HALF_UP));
        $this->assertSame(0, NumFloat::round(0.49, 0, Round::HALF_UP));
        $this->assertSame(-0.4, NumFloat::round(-0.35, 1, Round::HALF_UP));
        $this->assertSame(0.46, NumFloat::round(0.455, 2, Round::HALF_UP));

        $this->assertSame(1, NumFloat::round(1.5, 0, Round::HALF_DOWN));
        $this->assertSame(0, NumFloat::round(0.5, 0, Round::HALF_DOWN));
        $this->assertSame(0, NumFloat::round(0.49, 0, Round::HALF_DOWN));
        $this->assertSame(-0.3, NumFloat::round(-0.35, 1, Round::HALF_DOWN));
        $this->assertSame(0.45, NumFloat::round(0.455, 2, Round::HALF_DOWN));

        $this->assertSame(1, NumFloat::round(1.5, 0, Round::HALF_ODD));
        $this->assertSame(1, NumFloat::round(0.5, 0, Round::HALF_ODD));
        $this->assertSame(0, NumFloat::round(0.49, 0, Round::HALF_ODD));
        $this->assertSame(-0.3, NumFloat::round(-0.35, 1, Round::HALF_ODD));
        $this->assertSame(0.45, NumFloat::round(0.455, 2, Round::HALF_ODD));

        $this->assertSame(2, NumFloat::round(1.5, 0, Round::HALF_EVEN));
        $this->assertSame(0, NumFloat::round(0.5, 0, Round::HALF_EVEN));
        $this->assertSame(0, NumFloat::round(0.49, 0, Round::HALF_EVEN));
        $this->assertSame(-0.4, NumFloat::round(-0.35, 1, Round::HALF_EVEN));
        $this->assertSame(0.46, NumFloat::round(0.455, 2, Round::HALF_EVEN));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testRound')]
    public function testCeil ():void {

        $this->assertSame(5, NumFloat::ceil(4.3));
        $this->assertSame(10, NumFloat::ceil(9.999));
        $this->assertSame(-3, NumFloat::ceil(-3.14));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testRound')]
    public function testFloor ():void {

        $this->assertSame(4, NumFloat::floor(4.3));
        $this->assertSame(9, NumFloat::floor(9.999));
        $this->assertSame(-4, NumFloat::floor(-3.14));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLog ():void {

        $this->assertIsFloat(NumFloat::log(1.335, LogBase::E));
        $this->assertIsFloat(NumFloat::log(1.335, LogBase::LOG2E));
        $this->assertIsFloat(NumFloat::log(1.335, LogBase::LOG10E));
        $this->assertIsFloat(NumFloat::log(1.335, LogBase::LN2));
        $this->assertIsFloat(NumFloat::log(1.335, LogBase::LN10));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLog1P ():void {

        $this->assertIsFloat(NumFloat::log1p(1.335));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLog10 ():void {

        $this->assertIsFloat(NumFloat::log10(1.335));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMax ():void {

        $this->assertSame(4.23544, NumFloat::max(2.345, 4.23544, 4.1214));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMin ():void {

        $this->assertSame(2.345, NumFloat::min(2.345, 4.23544, 4.1214));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFormat ():void {

        $this->assertSame(
            '5.0000',
            NumFloat::format(5, 4, '.', ',')
        );
        $this->assertSame(
            '45656,560',
            NumFloat::format(45656.56, 3, ',', '')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsFinite ():void {

        $this->assertTrue(NumFloat::isFinite(10.5));
        $this->assertFalse(NumFloat::isFinite(INF));
        $this->assertFalse(NumFloat::isFinite(NAN));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsInfinite ():void {

        $this->assertTrue(NumFloat::isInfinite(INF));
        $this->assertFalse(NumFloat::isInfinite(10.5));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNan ():void {

        $this->assertTrue(NumFloat::isNan(NAN));
        $this->assertFalse(NumFloat::isNan(10.5));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDivide ():void {

        $this->assertSame(4.384615384615385, NumFloat::divide(5.7, 1.3));
        $this->assertSame(2.0, NumFloat::divide(4, 2));
        $this->assertInfinite(NumFloat::divide(1.0, 0.0));
        $this->assertInfinite(NumFloat::divide(-1.0, 0.0));
        $this->assertNan(NumFloat::divide(0.0, 0.0));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRemainder ():void {

        $this->assertSame(0.5, NumFloat::remainder(5.7, 1.3));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCosine ():void {

        $this->assertSame(-1.0, NumFloat::cosine(M_PI));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCosineArc ():void {

        $this->assertSame(1.0471975511965979, NumFloat::cosineArc(0.5));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCosineHyperbolic ():void {

        $this->assertSame(1.1276259652063807, NumFloat::cosineHyperbolic(0.5));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCosineInverseHyperbolic ():void {

        $this->assertSame(0.4435682543851153, NumFloat::cosineInverseHyperbolic(1.1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSine ():void {

        $this->assertSame(0.8414709848078965, NumFloat::sine(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSineArc ():void {

        $this->assertSame(1.5707963267948966, NumFloat::sineArc(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSineHyperbolic ():void {

        $this->assertSame(1.1752011936438014, NumFloat::sineHyperbolic(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSineHyperbolicInverse ():void {

        $this->assertSame(0.881373587019543, NumFloat::sineHyperbolicInverse(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTangent ():void {

        $this->assertSame(1.5574077246549023, NumFloat::tangent(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTangentArc ():void {

        $this->assertSame(0.7853981633974483, NumFloat::tangentArc(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTangentArc2 ():void {

        $this->assertSame(0.7853981633974483, NumFloat::tangentArc2(1, 1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTangentHyperbolic ():void {

        $this->assertSame(0.7615941559557649, NumFloat::tangentHyperbolic(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTangentInverseHyperbolic ():void {

        $this->assertSame(0.5493061443340549, NumFloat::tangentInverseHyperbolic(0.5));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDegreesToRadian ():void {

        $this->assertSame(0.4031710572106902, NumFloat::degreesToRadian( 23.100000000000005));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRadianToDegrees ():void {

        $this->assertSame( 23.100000000000005, NumFloat::radianToDegrees(0.4031710572106902));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExponent ():void {

        $this->assertSame(298.8674009670603, NumFloat::exponent(5.7));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExponent1 ():void {

        $this->assertSame(298.8674009670603, NumFloat::exponent(5.7));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHypotenuseLength ():void {

        $this->assertSame(12.280065146407, NumFloat::hypotenuseLength(1.4, 12.2));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSquareRoot ():void {

        $this->assertSame(3.492849839314596, NumFloat::squareRoot(12.2));

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function positiveFloats ():array {

        return [
            [0.435435], [45.223], [43253.43543]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function negativeFloats ():array {

        return [
            [-0.3532545], [-1.2], [-10.567]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function nullFloats ():array {

        return [
            [0], [-0], [0.0000], [-0.00]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function notRoundFloats ():array {

        return [
            [0.5], [0.9], [-0.49]
        ];

    }

}