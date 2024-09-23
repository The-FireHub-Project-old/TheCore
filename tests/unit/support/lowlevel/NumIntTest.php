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
    Num, NumInt
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, DataProvider, Depends
};
use FireHub\Core\Support\Enums\Number\LogBase;
use ArithmeticError, DivisionByZeroError;

/**
 * ### Test integer number low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Num::class)]
#[CoversClass(NumInt::class)]
#[CoversClass(LogBase::class)]
final class NumIntTest extends Base {

    /**
     * @since 1.0.0
     *
     * @param int $integer
     *
     * @return void
     */
    #[DataProvider('positiveIntegers')]
    #[DataProvider('negativeIntegers')]
    #[DataProvider('nullIntegers')]
    public function testAbsolute (int $integer):void {

        $this->assertIsInt(NumInt::absolute($integer));

    }

    /**
     * @since 1.0.0
     *
     * @param int $integer
     *
     * @return void
     */
    #[DataProvider('positiveIntegers')]
    #[DataProvider('negativeIntegers')]
    #[DataProvider('nullIntegers')]
    public function testRound (int $integer):void {

        $this->assertIsInt(NumInt::round($integer));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testRound')]
    public function testCeil ():void {

        $this->assertIsInt(NumInt::ceil(10));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testRound')]
    public function testFloor ():void {

        $this->assertIsInt(NumInt::floor(10));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLog ():void {

        $this->assertIsFloat(NumInt::log(10, LogBase::E));
        $this->assertIsFloat(NumInt::log(10, LogBase::LOG2E));
        $this->assertIsFloat(NumInt::log(10, LogBase::LOG10E));
        $this->assertIsFloat(NumInt::log(10, LogBase::LN2));
        $this->assertIsFloat(NumInt::log(10, LogBase::LN10));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLog1P ():void {

        $this->assertIsFloat(NumInt::log1p(10));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLog10 ():void {

        $this->assertIsFloat(NumInt::log10(10));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMax ():void {

        $this->assertSame(7, NumInt::max(2, 3, 1, 6, 7));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMin ():void {

        $this->assertSame(1, NumInt::min(2, 3, 1, 6, 7));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPower ():void {

        $this->assertSame(256, NumInt::power(2, 8));
        $this->assertSame(1, NumInt::power(-1, 20));
        $this->assertSame(1, NumInt::power(0, 0));
        $this->assertSame(0.1, NumInt::power(10, -1));
        $this->assertNan(NumInt::power(-1, 5.5));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFormat ():void {

        $this->assertSame(
            '5,000',
            NumInt::format(5000, 0, '.', ',')
        );
        $this->assertSame(
            '456',
            NumInt::format(456, 0, ',', '.')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDivide ():void {

        $this->assertSame(1, NumInt::divide(3, 2));
        $this->assertSame(-1, NumInt::divide(-3, 2));
        $this->assertSame(-1, NumInt::divide(3, -2));
        $this->assertSame(1, NumInt::divide(-3, -2));
        $this->assertSame(0, NumInt::divide(PHP_INT_MAX, PHP_INT_MIN));
        $this->assertSame(-1, NumInt::divide(PHP_INT_MIN, PHP_INT_MAX));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDivideError ():void {

        $this->expectException(ArithmeticError::class);

        NumInt::divide(PHP_INT_MIN, -1);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDivideByZero ():void {

        $this->expectException(DivisionByZeroError::class);

        NumInt::divide(1, 0);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDegreesToRadian ():void {

        $this->assertSame(0.7853981633974483, NumInt::degreesToRadian(45));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRadianToDegrees ():void {

        $this->assertSame(45.0, NumInt::radianToDegrees(0.7853981633974483));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExponent ():void {

        $this->assertSame(9744803446.248903, NumInt::exponent(23));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExponent1 ():void {

        $this->assertSame(9744803445.248903, NumInt::exponent1(23));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHypotenuseLength ():void {

        $this->assertSame(2.23606797749979, NumInt::hypotenuseLength(1, 2));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSquareRoot ():void {

        $this->assertSame(3.0, NumInt::squareRoot(9));

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function positiveIntegers ():array {

        return [
            [1], [100], [657998]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function negativeIntegers ():array {

        return [
            [-1], [-5], [-13457674]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function nullIntegers ():array {

        return [
            [0], [-0]
        ];

    }

}