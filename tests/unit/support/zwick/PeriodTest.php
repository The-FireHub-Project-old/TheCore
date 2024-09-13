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

namespace support\zwick;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Zwick\ {
    DateTime, Timespan, Period
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, DependsOnClass
};

/**
 * ### Test Period zwick support class
 * @since 1.0.0
 */
#[CoversClass(Period::class)]
final class PeriodTest extends Base {

    public Period $period;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[DependsOnClass(DateTime::class)]
    #[DependsOnClass(Timespan::class)]
    public function setUp ():void {

        $this->period = Period::between(
            DateTime::from('2020-01-01 12:00:00.100000'),
            DateTime::from('2021-01-01 12:00:00.100000')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetStart ():void {

        $this->assertEquals(
            DateTime::from('2020-01-01 12:00:00.100000'),
            $this->period->getStart()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetEnd ():void {

        $this->assertEquals(
            DateTime::from('2021-01-01 12:00:00.100000'),
            $this->period->getEnd()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSince ():void {

        $this->assertEquals(
            DateTime::from('2019-01-01 12:00:00.100000'),
            $this->period->since(DateTime::from('2019-01-01 12:00:00.100000'))->getStart()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUntil ():void {

        $this->assertEquals(
            DateTime::from('2022-01-01 12:00:00.100000'),
            $this->period->until(DateTime::from('2022-01-01 12:00:00.100000'))->getEnd()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReduceStart ():void {

        $this->assertEquals(
            DateTime::from('2019-11-01 12:00:00.100000'),
            $this->period->reduceStart(Timespan::months(2))->getStart()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExtendStart ():void {

        $this->assertEquals(
            DateTime::from('2020-03-01 12:00:00.100000'),
            $this->period->extendStart(Timespan::months(2))->getStart()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReduceEnd ():void {

        $this->assertEquals(
            DateTime::from('2020-11-01 12:00:00.100000'),
            $this->period->reduceEnd(Timespan::months(2))->getEnd()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExtendEnd ():void {

        $this->assertEquals(
            DateTime::from('2021-03-01 12:00:00.100000'),
            $this->period->extendEnd(Timespan::months(2))->getEnd()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDuration ():void {

        $this->assertEquals(
            Timespan::years(1),
            $this->period->duration()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('2020-01-01 12:00:00.100000 - 2021-01-01 12:00:00.100000', $this->period->__toString());

    }

}