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
use FireHub\Core\Support\LowLevel\DateAndTime;
use PHPUnit\Framework\Attributes\ {
    CoversClass, DataProvider
};
use Error;

/**
 * ### Test date and time character low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(DateAndTime::class)]
final class DateAndTimeTest extends Base {

    /**
     * @since 1.0.0
     *
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return void
     */
    #[DataProvider('validDates')]
    public function testCheckValid (int $year, int $month, int $day):void {

        $this->assertTrue(DateAndTime::check($year, $month, $day));

    }

    /**
     * @since 1.0.0
     *
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return void
     */
    #[DataProvider('invalidDates')]
    public function testCheckInvalid (int $year, int $month, int $day):void {

        $this->assertFalse(DateAndTime::check($year, $month, $day));

    }

    /**
     * @since 1.0.0
     *
     * @param string $datetime
     *
     * @return void
     */
    #[DataProvider('stringToTime')]
    public function testParse (string $datetime):void {

        $this->assertEmpty(DateAndTime::parse($datetime)['errors']);

    }

    /**
     * @since 1.0.0
     *
     * @param string $format
     * @param string $datetime
     *
     * @return void
     */
    #[DataProvider('formatTime')]
    public function testParseFromFormat (string $format, string $datetime):void {

        $this->assertEmpty(DateAndTime::parseFromFormat($format, $datetime)['errors']);

    }

    /**
     * @since 1.0.0
     *
     * @param string $string
     * @param string $format
     * @param int|null $timestamp
     *
     * @return void
     */
    #[DataProvider('format')]
    public function testFormat (string $string, string $format, int $timestamp = null):void {

        $this->assertSame($string, DateAndTime::format($format, $timestamp));

    }

    /**
     * @since 1.0.0
     *
     * @param int $int
     * @param string $format
     * @param int|null $timestamp
     *
     * @return void
     */
    #[DataProvider('formatInteger')]
    public function testFormatInteger (int $int, string $format, int $timestamp = null):void {

        $this->assertSame($int, DateAndTime::formatInteger($format, $timestamp));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGet ():void {

        $get = DateAndTime::get(0);

        $this->assertSame(0, $get['seconds']);
        $this->assertSame(0, $get['minutes']);
        $this->assertSame(1, $get['hours']);
        $this->assertSame(1, $get['mday']);
        $this->assertSame(4, $get['wday']);
        $this->assertSame(1, $get['mon']);
        $this->assertSame(1970, $get['year']);
        $this->assertSame(0, $get['yday']);
        $this->assertSame('Thursday', $get['weekday']);
        $this->assertSame('January', $get['month']);
        $this->assertSame(0, $get['timestamp']);
        $this->assertSame(0, $get['dts']);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSunInfo ():void {

        $get = DateAndTime::sunInfo(0, 40.730610, -73.935242);

        $this->assertSame(44299, $get['sunrise']);
        $this->assertSame(78022, $get['sunset']);
        $this->assertSame(61160, $get['transit']);
        $this->assertSame(42549, $get['civil_twilight_begin']);
        $this->assertSame(79772, $get['civil_twilight_end']);
        $this->assertSame(40488, $get['nautical_twilight_begin']);
        $this->assertSame(81833, $get['nautical_twilight_end']);
        $this->assertSame(38493, $get['astronomical_twilight_begin']);
        $this->assertSame(83828, $get['astronomical_twilight_end']);

    }

    /**
     * @since 1.0.0
     *
     * @param string $datetime
     *
     * @return void
     */
    #[DataProvider('stringToTime')]
    public function testStringToTimestamp (string $datetime):void {

        $this->assertIsInt(DateAndTime::stringToTimestamp($datetime));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStringToTimestampNotTime ():void {

        $this->expectException(Error::class);

        DateAndTime::stringToTimestamp('NotATime');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToTimestamp ():void {

        $this->assertIsInt(DateAndTime::toTimestamp(0, 0, 0, 1970, 1, 1));
        $this->assertIsInt(DateAndTime::toTimestamp(0, 0, 0, 1970, 1, 1, true));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTime ():void {

        $this->assertIsInt(DateAndTime::time());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMicrotime ():void {

        $this->assertIsInt(DateAndTime::microtime());

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function validDates ():array {

        return [
            [1, 1, 1],
            [2024, 12, 31],
            [1000, 10, 6]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function invalidDates ():array {

        return [
            [0, -1, -1]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function stringToTime ():array {

        return [
            ['now'],
            ['10 September 2000'],
            ['+1 day'],
            ['+1 week'],
            ['+1 week 2 days 4 hours 2 seconds'],
            ['next Thursday'],
            ['last Monday']
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function formatTime ():array {

        return [
            ['j.n.Y H:iP', '6.1.2009 13:00+01:00'],
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function format ():array {

        return [
            ['1970-01-01T01:00:00+01:00', DATE_ATOM, 0],
            ['Thursday, 01-Jan-1970 01:00:00 CET', DATE_COOKIE, 0],
            ['Thu, 01 Jan 1970 01:00:00 +0100', DATE_RSS, 0]
        ];

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function formatInteger ():array {

        return [
            [70, 'y', 0],
            [1970, 'Y', 0],
            [1, 'd', 0],
            [0, 'z', 0],
            [1, 'W', 0],
            [4, 'w', 0],
            [0, 'U', 0],
            [31, 't', 0],
            [0, 's', 0],
            [1, 'm', 0],
            [0, 'i', 0],
            [1, 'H', 0],
            [1, 'h', 0],
            [1, 'd', 0]
        ];

    }

}