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

        $this->assertIsString(DateAndTime::format($format, $timestamp));

    }

    /**
     * @since 1.0.0
     *
     * @param string $format
     * @param int|null $timestamp
     *
     * @return void
     */
    #[DataProvider('formatInteger')]
    public function testFormatInteger (string $format, int $timestamp = null):void {

        $this->assertIsInt(DateAndTime::formatInteger($format, $timestamp));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGet ():void {

        $get = DateAndTime::get(0);

        $this->assertIsInt($get['seconds']);
        $this->assertIsInt($get['minutes']);
        $this->assertIsInt($get['hours']);
        $this->assertIsInt($get['mday']);
        $this->assertIsInt($get['wday']);
        $this->assertIsInt($get['mon']);
        $this->assertIsInt($get['year']);
        $this->assertIsInt($get['yday']);
        $this->assertIsString('Thursday', $get['weekday']);
        $this->assertIsString($get['month']);
        $this->assertIsInt($get['timestamp']);
        $this->assertIsInt($get['dts']);

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
            ['y', 0],
            ['Y', 0],
            ['d', 0],
            ['z', 0],
            ['W', 0],
            ['w', 0],
            ['U', 0],
            ['t', 0],
            ['s', 0],
            ['m', 0],
            ['i', 0],
            ['H', 0],
            ['h', 0],
            ['d', 0]
        ];

    }

}