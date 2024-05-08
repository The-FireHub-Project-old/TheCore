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

use FireHub\Core\Support\Enums\Data\Type;
use Error, ValueError;

use function checkdate;
use function date;
use function date_parse;
use function date_parse_from_format;
use function date_sun_info;
use function getdate;
use function gmdate;
use function gmmktime;
use function idate;
use function localtime;
use function microtime;
use function mktime;
use function time;

/**
 * ### Date and time low-level proxy class
 *
 * Class allows you to represent date/time information.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class DateAndTime {

    /**
     * ### Check for valid date
     *
     * Checks the validity of the date formed by the arguments. A date is considered valid if each parameter is
     * properly defined.
     * @since 1.0.0
     *
     * @param int<1, 32767> $year <p>
     * The year is between 1 and 32767 inclusive
     * </p>
     * @param int<1, 12> $month <p>
     * The month is between 1 and 12 inclusive.
     * </p>
     * @param int<1, 31> $day <p>
     * The day is within the allowed number of days for the given month. Leap years are taken into consideration.
     * </p>
     *
     * @return bool True, if the date given is valid, otherwise returns false.
     */
    public static function check (int $year, int $month, int $day):bool {

        return checkdate($month, $day, $year);

    }

    /**
     * ### Returns associative array with detailed info about given date/time
     *
     * Method parses the given datetime string according to the same rules as [[DateAndTime#stringToTimestamp()]].
     * @since 1.0.0
     *
     * @param non-empty-string $datetime <p>
     * String representing the date/time.
     * </p>
     *
     * @return array<string, mixed> Associative array with detailed info about given date/time.
     *
     * @warning The number of array elements in the warnings and errors arrays might be less than warning_count or
     * error_count if they occurred at the same position.
     */
    public static function parse (string $datetime):array {

        return date_parse($datetime);

    }

    /**
     * ### Get info about given date formatted according to the specified format
     * @since 1.0.0
     *
     * @param non-empty-string $format <p>
     * Format accepted by date with some extras.
     * </p>
     * @param non-empty-string $datetime <p>
     * String representing the date/time.
     * </p>
     *
     * @throws ValueError If $datetime contains NULL-bytes.
     *
     * @return array<string, mixed> Associative array with detailed info about a given date/time.
     *
     * @warning The number of array elements in the warnings and errors arrays might be less than warning_count or
     * error_count if they occurred at the same position.
     */
    public static function parseFromFormat (string $format, string $datetime):array {

        return date_parse_from_format($format, $datetime);

    }

    /**
     * ### Format a Unix timestamp
     *
     * Returns a string formatted according to the given format string using the given integer timestamp (Unix
     * timestamp) or the current time if no timestamp is given. In other words, timestamp is optional and defaults
     * to the value of [[DateAndTime#time()]].
     * @since 1.0.0
     *
     * @param string $format [optional] <p>
     * The format of the outputted date string.
     * </p>
     * @param null|int $timestamp [optional] <p>
     * The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time
     * if a timestamp is not given.
     * </p>
     * @param bool $gmt [optional] <p>
     * Format a GMT/UTC date/time.
     * </p>
     *
     * @error\exeption E_WARNING If the time zone is not valid.
     *
     * @return string String formatted according to the given format string using the given integer timestamp.
     *
     * @link https://www.php.net/manual/en/datetime.format.php To check valid $format formats.
     */
    public static function format (string $format = 'Y-m-d H:i:s.u', int $timestamp = null, bool $gmt = false):string {

        return $gmt ? gmdate($format, $timestamp) : date($format, $timestamp);

    }

    /**
     * ### Format a Unix timestamp as integer
     *
     * Returns a formatted number, according to the given format string using the given integer timestamp or the current
     * local time, if no timestamp is given. In other words, timestamp is optional and defaults to the value of
     * [[DateAndTime#time()]].
     * @since 1.0.0
     *
     * @param string $format <p>
     * <code>'B'|'d'|'h'|'H'|'i'|'I'|'L'|'m'|'s'|'t'|'U'|'w'|'W'|'y'|'Y'|'z'|'Z'</code>
     * Single format character.
     * </p>
     * @param null|int $timestamp [optional] <p>
     * The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time
     * if a timestamp is not given.
     * </p>
     * @phpstan-param 'B'|'d'|'h'|'H'|'i'|'I'|'L'|'m'|'s'|'t'|'U'|'w'|'W'|'y'|'Y'|'z'|'Z' $format
     *
     * @throws Error If failed to format a Unix timestamp as integer.
     * @error\exeption E_WARNING If the time zone is not valid.
     *
     * @return int Formatted date as integer.
     *
     * @link https://www.php.net/manual/en/function.idate.phP
     */
    public static function formatInteger (string $format, int $timestamp = null):int {

        return ($format = idate($format, $timestamp)) !== false
            ? $format
            : throw new Error('Failed to format a Unix timestamp as integer.');

    }

    /**
     * ### Get date/time information
     * @since 1.0.0
     *
     * @param null|int $timestamp [optional] <p>
     * The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp
     * is omitted or null.
     * </p>
     *
     * @error\exeption E_WARNING if the time zone is not valid.
     *
     * @return array <code><![CDATA[ array<seconds: int<0, 59>, minutes: int<0, 59>, hours: int<0, 23>, mday: int<1,
     * 31>, wday: int<0, 6>, mon: int<1, 12>, year: int, yday: int<0, 365>, weekday:
     * 'Friday'|'Monday'|'Saturday'|'Sunday'|'Thursday'|'Tuesday'|'Wednesday', month:
     * 'April'|'August'|'December'|'February'|'January'|'July'|'June'|'March'|'May'|'November'|'October'|'September',
     * timestamp: int, dts: mixed> ]]></code>
     * Associative array of information related to the timestamp.
     * @phpstan-return array{
     *  seconds: int<0, 59>,
     *  minutes: int<0, 59>,
     *  hours: int<0, 23>,
     *  mday: int<1, 31>,
     *  wday: int<0, 6>,
     *  mon: int<1, 12>,
     *  year: int,
     *  yday: int<0, 365>,
     *  weekday: 'Friday'|'Monday'|'Saturday'|'Sunday'|'Thursday'|'Tuesday'|'Wednesday',
     *  month:  'April'|'August'|'December'|'February'|'January'|'July'|'June'|'March'|'May'|'November'|'October'|'September',
     *  timestamp: int,
     *  dts: mixed
     * }
     */
    public static function get (int $timestamp = null):array {

        $get_date = getdate($timestamp);
        $get_date['timestamp'] = $get_date[0];
        unset($get_date[0]);

        $get_date['dts'] = localtime($timestamp, true)['tm_isdst'];

        return $get_date;

    }

    /**
     * ### Gets information about sunset/sunrise and twilight begin/end
     * @since 1.0.0
     *
     * @param int $timestamp <p>
     * Unix timestamp.
     * </p>
     * @param float $latitude <p>
     * Latitude in degrees.
     * </p>
     * @param float $longitude <p>
     * Longitude in degrees.
     * </p>
     *
     * @throws Error If we could not get information about sunset and twilight.
     *
     * @return array <code><![CDATA[ array<sunrise: int|bool, sunset: int|bool, transit: int|bool,
     * civil_twilight_begin: int|bool, civil_twilight_end: int|bool, nautical_twilight_begin: int|bool,
     * nautical_twilight_end: int|bool, astronomical_twilight_begin: int|bool, astronomical_twilight_end: int|bool>
     * ]]></code> Array with sunset and twilight details.
     * @phpstan-return array{
     *  sunrise: int|bool,
     *  sunset: int|bool,
     *  transit: int|bool,
     *  civil_twilight_begin: int|bool,
     *  civil_twilight_end: int|bool,
     *  nautical_twilight_begin: int|bool,
     *  nautical_twilight_end: int|bool,
     *  astronomical_twilight_begin: int|bool,
     *  astronomical_twilight_end: int|bool
     * }
     */
    public static function sunInfo (int $timestamp, float $latitude, float $longitude):array {

        /**
         * PHPStan reports that date_sun_info returns array<string, bool|int>
         * @phpstan-ignore-next-line
         */
        return date_sun_info($timestamp, $latitude, $longitude)
            ?: throw new Error('Could not get information about sunset and twilight.');

    }

    /**
     * ### Parse about any English textual datetime description into a Unix timestamp
     *
     * The method expects to be given a string containing an English date format and will try to parse that format
     * into a Unix timestamp (the number of seconds since January 1, 1970 00:00:00 UTC), relative to the timestamp
     * given in baseTimestamp, or the current time if baseTimestamp is not supplied.
     * @since 1.0.0
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param null|int $timestamp [optional] <p>
     * The timestamp which is used as a base for the calculation of relative dates.
     * </p>
     *
     * @throws Error If we could not convert string to timestamp.
     * @error\exeption E_WARNING if the time zone is not valid.
     *
     * @return int A timestamp.
     *
     * @link https://www.php.net/manual/en/datetime.formats.php To check how to pass $datetime parameter.
     *
     * @note If the number of the year is specified in a two-digit format, the values between 00-69 are mapped to
     * 2000-2069 and 70-99 to 1970-1999. See the notes below for possible differences on 32bit systems (possible
     * dates might end on 2038-01-19 03:14:07).
     * @note The valid range of a timestamp is typically from Fri, 13 Dec 1901 20:45:54 UTC to Tue, 19 Jan 2038
     * 03:14:07 UTC. (These are the dates that correspond to the minimum and maximum values for a 32-bit signed
     * integer.). For 64-bit versions of PHP, the valid range of a timestamp is effectively infinite, as 64 bits can
     * represent approximately 293 billion years in either direction.
     */
    public static function stringToTimestamp (string $datetime, int $timestamp = null):int {

        return strtotime($datetime, $timestamp)
            ?: throw new Error('Could not convert string to timestamp.');

    }

    /**
     * ### Format a Unix timestamp
     *
     * Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing
     * the number of seconds between the Unix Epoch (January, 1 1970 00:00:00 GMT) and the time specified.
     * @since 1.0.0
     *
     * @param int $hour <p>
     * The number of hours relative to the start of the day is determined by month, day and year. Negative values
     * reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate
     * hour in the following day(s).
     * </p>
     * @param null|int $minute <p>
     * The number of the minute relative to the start of the hour. Negative values reference the minute in the
     * previous hour. Values greater than reference 59 the appropriate minute in the following hour(s).
     * </p>
     * @param null|int $second <p>
     * The number of seconds relative to the start of the minute. Negative values reference the second in the
     * previous minute. Values greater than 59 reference the appropriate second in the following minute(s).
     * </p>
     * @param null|int $year <p>
     * The year.
     * </p>
     * @param null|int $month <p>
     * The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar
     * months of the year in question. Values less than 1 (including negative values) reference the months in the
     * previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the
     * appropriate month in the following year(s).
     * </p>
     * @param null|int $day <p>
     * The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon
     * the month) reference the normal days in the relevant month. Values less than 1 (including negative values)
     * reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before
     * that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the
     * following month(s).
     * </p>
     * @param bool $gmt [optional] <p>
     * Get a GMT/UTC timestamp.
     * </p>
     *
     * @throws Error If timestamp doesn't fit in a PHP integer.
     *
     * @return int The Unix timestamp of the arguments given.
     */
    public static function toTimestamp (int $hour, int $minute = null, int $second = null, int $year = null, int $month = null, int $day = null, bool $gmt = false):int {

        return (
            $timestamp = $gmt
                ? gmmktime($hour, $minute, $second, $month, $day, $year)
                : mktime($hour, $minute, $second, $month, $day, $year)
        ) !== false ? $timestamp : throw new Error("Timestamp doesn't fit in a PHP integer.");

    }

    /**
     * ### Return current Unix timestamp
     *
     * Returns the current time measured in the number of seconds since the Unix Epoch (January, 1 1970 00:00:00 GMT).
     * @since 1.0.0
     *
     * @return int The current timestamp.
     *
     * @tip Timestamp of the start for the request is available in $_SERVER['REQUEST_TIME'].
     */
    public static function time ():int {

        return time();

    }

    /**
     * ### Get current Unix microseconds
     *
     * Method returns the current Unix timestamp with microseconds. This function is only available on operating
     * systems that support the gettimeofday() system call.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSB::explode() To split microtime function.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set microtime to another type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To set microtime as integer.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::part() To get part of microtime.
     *
     * @return int Current microseconds.
     *
     * @tip For performance measurements, using hrtime() is recommended.
     */
    public static function microtime ():int {

        $time_list = StrSB::explode(microtime(), ' ');

        if (!$time_list) throw new Error('Separator cannot be empty string.');

        return Data::setType(StrSB::part($time_list[0], 2, 6), Type::T_INT);

    }

}