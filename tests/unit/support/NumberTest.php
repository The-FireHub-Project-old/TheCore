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

namespace support;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Number;
use FireHub\Core\Support\Enums\Number\Round;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends
};

/**
 * ### Test string high-level support class
 * @since 1.0.0
 */
#[CoversClass(Number::class)]
final class NumberTest extends Base {

    public Number $integer;
    public Number $negative_integer;
    public Number $zero;
    public Number $float;
    public Number $negative_float;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->integer = Number::from(12);
        $this->negative_integer = Number::from(-10);
        $this->zero = Number::from(0);
        $this->float = Number::from(0.981);
        $this->negative_float = Number::from(-23.4532);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsPositive ():void {

        $this->assertTrue($this->integer->isPositive());
        $this->assertFalse($this->negative_integer->isPositive());
        $this->assertFalse($this->zero->isPositive());
        $this->assertTrue($this->float->isPositive());
        $this->assertFalse($this->negative_float->isPositive());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNegative ():void {

        $this->assertFalse($this->integer->isNegative());
        $this->assertTrue($this->negative_integer->isNegative());
        $this->assertFalse($this->zero->isNegative());
        $this->assertFalse($this->float->isNegative());
        $this->assertTrue($this->negative_float->isNegative());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsFinite ():void {

        $this->assertTrue($this->integer->isFinite());
        $this->assertTrue($this->negative_integer->isFinite());
        $this->assertTrue($this->zero->isFinite());
        $this->assertTrue($this->float->isFinite());
        $this->assertTrue($this->negative_float->isFinite());
        $this->assertFalse(Number::from(1e308 * 2)->isFinite());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsInfinite ():void {

        $this->assertFalse($this->integer->isInfinite());
        $this->assertFalse($this->negative_integer->isInfinite());
        $this->assertFalse($this->zero->isInfinite());
        $this->assertFalse($this->float->isInfinite());
        $this->assertFalse($this->negative_float->isInfinite());
        $this->assertTrue(Number::from(1e308 * 2)->isInfinite());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNan ():void {

        $this->assertFalse($this->integer->isNan());
        $this->assertFalse($this->negative_integer->isNan());
        $this->assertFalse($this->zero->isNan());
        $this->assertFalse($this->float->isNan());
        $this->assertFalse($this->negative_float->isNan());
        $this->assertTrue(Number::from(sqrt(-1))->isNan());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToPositive ():void {

        $this->assertSame(12.0, $this->integer->toPositive()->asFloat());
        $this->assertSame(10.0, $this->negative_integer->toPositive()->asFloat());
        $this->assertSame(0.0, $this->zero->toPositive()->asFloat());
        $this->assertSame(0.981, $this->float->toPositive()->asFloat());
        $this->assertSame(23.4532, $this->negative_float->toPositive()->asFloat());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToNegative ():void {

        $this->assertSame(-12.0, $this->integer->toNegative()->asFloat());
        $this->assertSame(-10.0, $this->negative_integer->toNegative()->asFloat());
        $this->assertSame(0.0, $this->zero->toNegative()->asFloat());
        $this->assertSame(-0.981, $this->float->toNegative()->asFloat());
        $this->assertSame(-23.4532, $this->negative_float->toNegative()->asFloat());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAbsolute ():void {

        $this->assertSame(12.0, $this->integer->absolute()->asFloat());
        $this->assertSame(10.0, $this->negative_integer->absolute()->asFloat());
        $this->assertSame(0.0, $this->zero->absolute()->asFloat());
        $this->assertSame(0.981, $this->float->absolute()->asFloat());
        $this->assertSame(23.4532, $this->negative_float->absolute()->asFloat());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCeil ():void {

        $this->assertSame(12.0, $this->integer->ceil()->asFloat());
        $this->assertSame(-10.0, $this->negative_integer->ceil()->asFloat());
        $this->assertSame(0.0, $this->zero->ceil()->asFloat());
        $this->assertSame(1.0, $this->float->ceil()->asFloat());
        $this->assertSame(-23.0, $this->negative_float->ceil()->asFloat());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFloor ():void {

        $this->assertSame(12.0, $this->integer->floor()->asFloat());
        $this->assertSame(-10.0, $this->negative_integer->floor()->asFloat());
        $this->assertSame(0.0, $this->zero->floor()->asFloat());
        $this->assertSame(0.0, $this->float->floor()->asFloat());
        $this->assertSame(-24.0, $this->negative_float->floor()->asFloat());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRound ():void {

        $this->assertSame(0.34, Number::from(0.335)->round(2)->asFloat());
        $this->assertSame(0.33, Number::from(0.335)->round(2, Round::HALF_DOWN)->asFloat());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAsInt ():void {

        $this->assertSame(12, $this->integer->asInt());
        $this->assertSame(-10, $this->negative_integer->asInt());
        $this->assertSame(0, $this->zero->asInt());
        $this->assertSame(1, $this->float->asInt());
        $this->assertSame(0, Number::from(0.5)->asInt(Round::HALF_DOWN));
        $this->assertSame(-23, $this->negative_float->asInt());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAsFloat ():void {

        $this->assertSame(12.0, $this->integer->asFloat());
        $this->assertSame(-10.0, $this->negative_integer->asFloat());
        $this->assertSame(0.0, $this->zero->asFloat());
        $this->assertSame(0.981, $this->float->asFloat());
        $this->assertSame(-23.4532, $this->negative_float->asFloat());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParse ():void {

        $this->assertSame('12', $this->integer->parse());
        $this->assertSame('-10', $this->negative_integer->parse());
        $this->assertSame('0', $this->zero->parse());
        $this->assertSame('0.9810000000', $this->float->parse(10));
        $this->assertSame('-23.45', $this->negative_float->parse(2));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testAsFloat')]
    public function testPrint ():void {

        $this->assertSame('12', $this->integer->__toString());
        $this->assertSame('-10', $this->negative_integer->__toString());
        $this->assertSame('0', $this->zero->__toString());
        $this->assertSame('0.981', $this->float->__toString());
        $this->assertSame('-23.4532', $this->negative_float->__toString());

    }

}