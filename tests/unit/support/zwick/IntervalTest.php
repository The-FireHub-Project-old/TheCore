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
    DateTime, Interval, Period, Timespan
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, DependsOnClass
};

/**
 * ### Test Interval zwick support class
 * @since 1.0.0
 */
#[CoversClass(Interval::class)]
final class IntervalTest extends Base {

    public Interval $interval;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[DependsOnClass(DateTime::class)]
    #[DependsOnClass(Period::class)]
    #[DependsOnClass(Timespan::class)]
    public function setUp ():void {

        $this->interval = Interval::create(
            Period::between(
                DateTime::from('2020-01-01 12:00:00.100000'),
                DateTime::from('2021-01-01 12:00:00.100000')
            ),
            Timespan::months(4)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTicks ():void {

        $this->assertSame(2, $this->interval->excludeEnd()->ticks()->count());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLazyTicks ():void {

        $this->assertSame(3, $this->interval->lazyTicks()->count());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame(
            '2020-01-01 12:00:00.100000;2020-05-01 12:00:00.100000;2020-09-01 12:00:00.100000;2021-01-01 12:00:00.100000',
            $this->interval->includeStart()->__toString()
        );

    }

}