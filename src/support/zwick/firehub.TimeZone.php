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
use FireHub\Core\Support\Enums\Geo\Contracts\UNM49;
use FireHub\Core\Support\Enums\ {
    DateTime\Zone, Geo\Country
};
use FireHub\Core\Support\LowLevel\DateAndTimeZone;
use Error, DateTimeZone as BaseTimeZone, Exception;

/**
 * ### TimeZone support class
 * @since 1.0.0
 *
 * @api
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
     * @param BaseTimeZone $base_timezone <p>
     * Representation of timezone.
     * </p>
     *
     * @return void
     */
    final private function __construct (
        private readonly BaseTimeZone $base_timezone
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
     * @throws Exception Emits Exception in case of an error.
     *
     * @return self New timezone.
     */
    public static function create (Zone $timezone):self {

        return new self( new BaseTimeZone($timezone->value));

    }

    /**
     * ### Check is timezone from country or region
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Region As parameter.
     * @uses \FireHub\Core\Support\Enums\Geo\Country::is() To check if the country is a region.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     * use FireHub\Core\Support\Enums\Geo\Country;
     *
     * $timezone = TimeZone::create(Zone::AMERICA_NEW_YORK);
     *
     * $timezone->isFrom(Country::UNITED_STATES_OF_AMERICA);
     *
     * // true
     * ```
     *
     * @param \FireHub\Core\Support\Enums\Geo\Country|\FireHub\Core\Support\Enums\Geo\Contracts\UNM49 $country_or_region <p>
     * Country or region to check.
     * </p>
     *
     * @return bool True if the timezone is part of a country or region, false otherwise.
     */
    public function isFrom (Country|UNM49 $country_or_region):bool {

        return $country_or_region instanceof Country
            ? $this->country() === $country_or_region
            : $this->country()->is($country_or_region);

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

        return Zone::from($this->base_timezone->getName());

    }

    /**
     * ### Current offset in seconds between selected timezone and Coordinated Universal Time (UTC)
     * @since 1.0.0
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

        foreach ($this->base_timezone::listAbbreviations() as $zones)
            foreach ($zones as $zone)
                if ($zone['timezone_id'] === $this->base_timezone->getName() && $zone['dst'])
                    return $zone['offset'];

        throw new Error('Could not get timezone offset.');

    }

    /**
     * ### Timezone country
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Country::fromAlpha2() To get country from a provided alpha 2 code.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * $timezone = TimeZone::create(Zone::AMERICA_NEW_YORK);
     *
     * $timezone->country();
     *
     * // enum(FireHub\Core\Support\Enums\Geo\Country::UNITED_STATES_OF_AMERICA)
     * ```
     *
     * @return \FireHub\Core\Support\Enums\Geo\Country|false Timezone country or false if one is not found.
     */
    public function country ():Country|false {

        return Country::fromAlpha2($this->base_timezone->getLocation()['country_code'] ?? '');

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
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
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

        return $this->base_timezone->getName();

    }

}