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
    DateTime, TimeZone
};
use FireHub\Core\Support\Zwick\Traits\Check;
use FireHub\Core\Support\Enums\DateTime\ {
    Zone, Format\Predefined, Names\WeekDay
};
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test DateTime zwick support class
 * @since 1.0.0
 */
#[CoversClass(DateTime::class)]
#[CoversClass(TimeZone::class)]
#[CoversClass(Check::class)]
#[CoversClass(Zone::class)]
#[CoversClass(Predefined::class)]
#[CoversClass(WeekDay::class)]
final class DateTimeTest extends Base {

    public DateTime $datetime;
    public DateTime $future;

    public DateTime $now;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->datetime = DateTime::from('1970-01-01 13:11:30.123456', TimeZone::create(Zone::AMERICA_NEW_YORK));

        $this->future = DateTime::fromFormat(Predefined::DATETIME, '5555-12-31 23:59:59', TimeZone::create(Zone::AMERICA_NEW_YORK));

        $this->now = DateTime::from('2024-06-09 09:41:07.349993', TimeZone::create(Zone::AMERICA_NEW_YORK));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLeapYear ():void {

        $this->assertTrue($this->now->leapYear());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMillennium ():void {

        $this->assertSame(2, $this->datetime->millennium());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCentury ():void {

        $this->assertSame(20, $this->datetime->century());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDecade ():void {

        $this->assertSame(8, $this->datetime->decade());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testYear ():void {

        $this->assertSame(1970, $this->datetime->year());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testYearShort ():void {

        $this->assertSame(70, $this->datetime->yearShort());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQuarter ():void {

        $this->assertSame(1, $this->datetime->quarter());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMonth ():void {

        $this->assertSame(1, $this->datetime->month());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWeek ():void {

        $this->assertSame(1, $this->datetime->week());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDay ():void {

        $this->assertSame(1, $this->datetime->day());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDaySuffix ():void {

        $this->assertSame('st', $this->datetime->daySuffix());

    }


    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDayInYear ():void {

        $this->assertSame(1, $this->datetime->dayInYear());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWeekDay ():void {

        $this->assertSame(WeekDay::THURSDAY, $this->datetime->weekDay());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHour ():void {

        $this->assertSame(13, $this->datetime->hour());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHourShort ():void {

        $this->assertSame(1, $this->datetime->hourShort());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMerdiem ():void {

        $this->assertSame('pm', $this->datetime->merdiem());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMinute ():void {

        $this->assertSame(11, $this->datetime->minute());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSecond ():void {

        $this->assertSame(30, $this->datetime->second());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMilliSecond ():void {

        $this->assertSame(123, $this->datetime->milliSecond());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMicroSecond ():void {

        $this->assertSame(123456, $this->datetime->microSecond());

        $this->assertSame(0, $this->future->microSecond());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTimezone ():void {

        $this->assertEquals(TimeZone::create(Zone::AMERICA_NEW_YORK), $this->datetime->timezone());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetTimezone ():void {

        $this->datetime->setTimezone(Timezone::create(Zone::AUSTRALIA_MELBOURNE));

        $this->assertEquals(TimeZone::create(Zone::AUSTRALIA_MELBOURNE), $this->datetime->timezone());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParse ():void {

        $this->assertSame('1970-01-01 13:11:30.123456', $this->datetime->parse(Predefined::DATE_MICRO_TIME));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('1970-01-01 13:11:30.123456', $this->datetime->__toString());

        $this->assertSame('5555-12-31 23:59:59.000000', $this->future->__toString());

    }

}