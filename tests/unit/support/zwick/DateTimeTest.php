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
    DateTime, Timestamp, TimeZone, Timespan
};
use FireHub\Core\Support\Zwick\Traits\Check;
use FireHub\Core\Support\Zwick\Helpers\Parse;
use FireHub\Core\Support\Enums\DateTime\ {
    Epoch, Zone, Relative\Ordinal, Format\Predefined, Names\Month, Names\WeekDay
};
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test DateTime zwick support class
 * @since 1.0.0
 */
#[CoversClass(DateTime::class)]
#[CoversClass(TimeZone::class)]
#[CoversClass(Timestamp::class)]
#[CoversClass(Timespan::class)]
#[CoversClass(Check::class)]
#[CoversClass(Epoch::class)]
#[CoversClass(Zone::class)]
#[CoversClass(Predefined::class)]
#[CoversClass(WeekDay::class)]
#[CoversClass(Month::class)]
#[CoversClass(Ordinal::class)]
#[CoversClass(Parse::class)]
final class DateTimeTest extends Base {

    public DateTime $datetime;
    public DateTime $future;

    public DateTime $now;

    public DateTime $ordinal;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->datetime = DateTime::from('1970-01-01 13:11:30.123456', TimeZone::create(Zone::AMERICA_NEW_YORK));

        $this->future = DateTime::fromFormat(Predefined::DATETIME, '5555-12-31 23:59:59', TimeZone::create(Zone::AMERICA_NEW_YORK));

        $this->now = DateTime::fromTimestamp(Timestamp::from(1717940467, 349993), TimeZone::create(Zone::AMERICA_NEW_YORK));

        $this->ordinal = DateTime::ordinalWeekDay(Ordinal::FIRST, WeekDay::SUNDAY, Month::SEPTEMBER, 2024);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstDay ():void {

        $this->assertSame(1, DateTime::firstDay(Month::SEPTEMBER)->day());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastDay ():void {

        $this->assertSame(30, DateTime::lastDay(Month::SEPTEMBER)->day());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSet ():void {

        $this->datetime->setYear(2020);
        $this->datetime->setMonth(12);
        $this->datetime->setDay(11);
        $this->datetime->setHour(2);
        $this->datetime->setMinute(12);
        $this->datetime->setSecond(22);
        $this->datetime->setMicroSecond(123456);

        $this->assertSame('2020-12-11 02:12:22.123456', $this->datetime->parse('Y-m-d h:i:s.u'));

        $this->datetime->setMilliSecond(112);

        $this->assertSame('2020-12-11 02:12:22.112000', $this->datetime->parse('Y-m-d h:i:s.u'));

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
    public function testIsJanuary ():void {

        $this->assertFalse($this->now->isJanuary());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsFebruary ():void {

        $this->assertFalse($this->now->isFebruary());

    }
    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsMarch ():void {

        $this->assertFalse($this->now->isMarch());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsApril ():void {

        $this->assertFalse($this->now->isApril());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsMay ():void {

        $this->assertFalse($this->now->isMay());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsJune ():void {

        $this->assertTrue($this->now->isJune());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsJuly ():void {

        $this->assertFalse($this->now->isJuly());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsAugust ():void {

        $this->assertFalse($this->now->isAugust());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsSeptember ():void {

        $this->assertFalse($this->now->isSeptember());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsOctober ():void {

        $this->assertFalse($this->now->isOctober());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNovember ():void {

        $this->assertFalse($this->now->isNovember());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsDecember ():void {

        $this->assertFalse($this->now->isDecember());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsToday ():void {

        $this->assertFalse($this->now->isToday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsYesterday ():void {

        $this->assertFalse($this->now->isYesterday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsTomorrow ():void {

        $this->assertFalse($this->now->isTomorrow());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsFirstOfMonth ():void {

        $this->assertFalse($this->now->isFirstOfMonth());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsLastOfMonth ():void {

        $this->assertFalse($this->now->isLastOfMonth());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsFirstOfYear ():void {

        $this->assertFalse($this->now->isFirstOfYear());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsLastOfYear ():void {

        $this->assertFalse($this->now->isLastOfYear());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsMonday ():void {

        $this->assertFalse($this->now->isMonday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsTuesday ():void {

        $this->assertFalse($this->now->isTuesday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsWednesday ():void {

        $this->assertFalse($this->now->isWednesday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsThursday():void {

        $this->assertFalse($this->now->isThursday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsFriday ():void {

        $this->assertFalse($this->now->isFriday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsSaturday ():void {

        $this->assertFalse($this->now->isSaturday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsSunday ():void {

        $this->assertTrue($this->now->isSunday());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsWeekDay ():void {

        $this->assertFalse($this->now->isWeekDay());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsWeekend ():void {

        $this->assertTrue($this->now->isWeekend());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNoon ():void {

        $this->assertFalse($this->now->isNoon());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsMidnight ():void {

        $this->assertFalse($this->now->isMidnight());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDaylightSavingTime ():void {

        $this->assertTrue($this->now->daylightSavingTime());

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
    public function testMonthName ():void {

        $this->assertSame(Month::JANUARY, $this->datetime->monthName());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWeekInMonth ():void {

        $this->assertSame(1, $this->datetime->weekInMonth());

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
    public function testTimestamp ():void {

        $this->assertEquals(Timestamp::from(1717940467, 349993), $this->now->timestamp());

        $this->assertEquals(Timestamp::from(14400, 349993, '2024-06-09 09:41:07'), $this->now->timestamp('2024-06-09 09:41:07'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAdd ():void {

        $this->assertSame(3, $this->datetime->add(Timespan::days(2))->day());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSub ():void {

        $this->assertSame(5, $this->datetime->sub(Timespan::minutes(6))->minute());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifference ():void {

        $this->assertEquals(
            Timespan::years(54)
            ->addMonths(5)
            ->addDays(8)
            ->addHours(-4)
            ->addMinutes(30)
            ->addSeconds(-23)
            ->addMicroSeconds(226537),
            $this->now->difference($this->datetime)
        );

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