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

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};
use FireHub\Core\Support\Enums\DateTime\Zone;
use Error;

use function date_default_timezone_get;
use function date_default_timezone_set;
use function timezone_abbreviations_list;

/**
 * ### Timezone low-level proxy class
 *
 * A time zone is an area that observes a uniform standard time for legal, commercial and social purposes.
 * @since 1.0.0
 */
final class DateAndTimeZone implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Gets the default timezone used by all date/time functions in a script
     *
     * In order of preference, this function returns the default timezone by:
     * - reading the timezone set using the setDefaultTimezone() method (if any).
     * - reading the value of the 'date.timezone' ini option (if set).
     * If none of the above succeed, [[DateAndTimeZone#getDefaultTimezone()]] will return a default timezone of UTC.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone To check for valid timezone.
     *
     * @throws Error If we cannot get the default timezone.
     *
     * @return \FireHub\Core\Support\Enums\DateTime\Zone Timezone enum.
     */
    public static function getDefaultTimezone ():Zone {

        return ($time_zone = Zone::tryFrom(date_default_timezone_get()))
            ? $time_zone
            : throw new Error('Cannot get default timezone.');

    }

    /**
     * ### Sets the default timezone used by all date/time functions in a script
     *
     * Method sets the default timezone used by all date/time functions. Instead of using this function to set the
     * default timezone in your script, you can also use the INI setting 'date.timezone' to set the default timezone.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Zone $time_zone <p>
     * The timezone identifier.
     * </p>
     *
     * @throws Error If failed to set the default timezone.
     *
     * @return bool Always true.
     *
     * @phpstan-ignore-next-line PHPStan reports that the method could still return bool.
     */
    public static function setDefaultTimezone (Zone $time_zone):true {

        return date_default_timezone_set($time_zone->value)
            ?: throw new Error('Failed to set the default timezone.');

    }

    /**
     * ### Get an associative array containing dst, offset and the timezone name alias
     * @since 1.0.0
     *
     * @return array <code><![CDATA[ array<string, array<int, array{dst: bool, offset: int, timezone_id: string|null}> ]]></code>
     * List of timezone abbreviations.
     * @phpstan-return array<string, array<int, array{
     *  dst: bool,
     *  offset: int,
     *  timezone_id: string|null
     * }>>
     */
    public static function abbreviationList ():array {

        return timezone_abbreviations_list();

    }

}