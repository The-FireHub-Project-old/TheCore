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

namespace FireHub\Core\Support\Zwick;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Contracts\Magic\Stringable;
use FireHub\Core\Support\Enums\DateTime\Zone;
use FireHub\Core\Support\LowLevel\DateAndTimeZone;
use Error;

/**
 * ### TimeZone support class
 * @since 1.0.0
 */
class TimeZone implements Init, Stringable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone As parameter.
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Zone $timezone <p>
     * Select one of the provider TimeZone choices.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Zone $timezone
    ) {}

    /**
     * ### Create new timezone
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * TimeZone::create(Zone::AMERICA_NEW_YORK);
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Zone $timezone <p>
     * Select one of the provider TimeZone choices.
     * </p>
     *
     * @return self New timezone.
     */
    public static function create (Zone $timezone):self {

        return new self( $timezone);

    }

    /**
     * ### Get timezone
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * $timezone = TimeZone::create(Zone::AMERICA_NEW_YORK);
     *
     * $timezone->get();
     *
     * // enum(FireHub\Core\Support\Enums\DateTime\Zone::AMERICA_NEW_YORK) : string 'America/NewYork'
     * ```
     *
     * @return \FireHub\Core\Support\Enums\DateTime\Zone Timezone enum.
     */
    public function get ():Zone {

        return $this->timezone;

    }

    /**
     * ### Offset in seconds between selected timezone and Coordinated Universal Time (UTC)
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone::getOffset() To get offset in seconds between selected timezone and
     * Coordinated Universal Time (UTC).
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * $timezone = TimeZone::create(Zone::AMERICA_NEW_YORK);
     *
     * $timezone->offset();
     *
     * // -18000
     * ```
     *
     * @throws Error If a system couldn't get timezone offset.
     *
     * @return int Time zone offset in seconds between selected timezone and Coordinated Universal Time (UTC).
     */
    public function offset ():int {

        return $this->getOffset(false);

    }

    /**
     * ### Offset in seconds between selected timezone and Coordinated Universal Time (UTC) with daylight-saving time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone::getOffset() To get offset in seconds between selected timezone and
     * Coordinated Universal Time (UTC).
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * $timezone = TimeZone::create(Zone::AMERICA_NEW_YORK);
     *
     * $timezone->offsetDTS();
     *
     * // -14400
     * ```
     *
     * @throws Error If a system couldn't get timezone offset.
     *
     * @return int Time zone offset in seconds between selected timezone and Coordinated Universal Time (UTC).
     */
    public function offsetDTS ():int {

        return $this->getOffset(true);

    }

    /**
     * ### Gets default timezone
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone As return.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTimeZone::getDefaultTimezone() To get default timezone.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     *
     * $timezone = TimeZone::getDefaultTimeZone();
     *
     * // EUROPE_ZAGREB
     * ```
     *
     * @throws Error If we can't get the default timezone.
     *
     * @return \FireHub\Core\Support\Enums\DateTime\Zone Current timezone.
     *
     * @see \FireHub\Core\Support\Zwick\TimeZone::setDefaultTimeZone() Sets default timezone.
     */
    public static function getDefaultTimeZone ():Zone {

        return DateAndTimeZone::getDefaultTimezone();

    }

    /**
     * ### Sets default timezone
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone As parameter.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTimeZone::setDefaultTimezone() To set default timezone.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * TimeZone::setDefaultTimeZone(Zone::AMERICA_NEW_YORK);
     *
     * $timezone = TimeZone::getDefaultTimeZone();
     *
     * // America/New_York
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Zone $time_zone <p>
     * TimeZone enum.
     * </p>
     *
     * @throws Error If failed to set the default timezone.
     *
     * @return true Always true.
     *
     * @see \FireHub\Core\Support\Zwick\TimeZone::getDefaultTimeZone() Gets default timezone.
     */
    public static function setDefaultTimeZone (Zone $time_zone):true {

        return DateAndTimeZone::setDefaultTimezone($time_zone);

    }

    /**
     * ### Offset in seconds between selected timezone and Coordinated Universal Time (UTC)
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DateAndTimeZone::abbreviationList() To get an associative array containing
     * dst, offset and the timezone name alias.
     *
     * @param bool $dst [optional] <p>
     * Filter daylight-saving time abbreviations.
     * </p>
     *
     * @throws Error If a system couldn't get timezone offset.
     *
     * @return int Time zone offset in seconds between selected timezone and Coordinated Universal Time (UTC).
     */
    private function getOffset (bool $dst):int {

        foreach (DateAndTimeZone::abbreviationList() as $zones)
            foreach ($zones as $zone)
                if ($zone['timezone_id'] === $this->timezone->value && $zone['dst'] === $dst)
                    return $zone['offset'];

        throw new Error('Could not get timezone offset.');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * echo TimeZone::create(Zone::AMERICA_NEW_YORK);
     *
     * // America/New_York
     * ```
     */
    public function __toString ():string {

        return $this->timezone->value;

    }

}