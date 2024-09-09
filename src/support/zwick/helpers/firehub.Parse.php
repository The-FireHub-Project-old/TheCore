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

namespace FireHub\Core\Support\Zwick\Helpers;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Enums\DateTime\ {
    Names\Month, Names\WeekDay, Relative\Day, Relative\Ordinal, Relative\Time, Unit\Relative
};

use FireHub\Core\Support\LowLevel\ {
    DataIs, DateAndTime
};

/**
 * ### Parse about any English textual datetime description into a date/time
 * @since 1.0.0
 */
final class Parse implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Current date/time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::NOW As time name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now();
     *
     * // 2024-08-27 02:54:52.024551
     * ```
     *
     * @return non-empty-string
     */
    public static function now ():string {

        return Time::NOW->value;

    }

    /**
     * ### Today's date
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::MIDNIGHT As default parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Day::TODAY To get the current date.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::today();
     *
     * // 2024-08-27 00:00:00.000000
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Time|non-empty-string $at [optional] <p>
     * Sets time.
     * </p>
     *
     * @return non-empty-string
     */
    public static function today (Time|string $at = Time::MIDNIGHT):string {

        return Day::TODAY->value.' '.(DataIs::string($at) ? $at : $at->value);

    }

    /**
     * ### Yesterday's date
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::MIDNIGHT As default parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Day::YESTERDAY To get yesterday's date.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::yesterday();
     *
     * // 2024-08-26 00:00:00.000000
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Time|non-empty-string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return non-empty-string
     */
    public static function yesterday (Time|string $at = Time::MIDNIGHT):string {

        return Day::YESTERDAY->value.' '.(DataIs::string($at) ? $at : $at->value);

    }

    /**
     * ### Tomorrow's date
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::MIDNIGHT As default parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Day::TOMORROW To get tomorrow's date.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::tomorrow();
     *
     * // 2024-08-28 00:00:00.000000
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Time|non-empty-string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return non-empty-string
     */
    public static function tomorrow (Time|string $at = Time::MIDNIGHT):string {

        return Day::TOMORROW->value.' '.(DataIs::string($at) ? $at : $at->value);

    }

    /**
     * ### Relative date and time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Unit As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::NOW As default parameter.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Enums\DateTime\Unit\Days;
     *
     * DateTime::relative(2, Days::WEEK, '12:00');
     *
     * // 2024-09-23 12:00:00.000000
     * ```
     *
     * @param int $number <p>
     * Number, positive, or negative.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Unit\Relative $unit <p>
     * Relative unit to use.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Time|non-empty-string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return non-empty-string
     */
    public static function relative (int $number, Relative $unit, Time|string $at = Time::NOW):string {

        return $number.' '.$unit->plural().' '.(DataIs::string($at) ? $at : $at->value);

    }

    /**
     * ### First day of specified month
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Names\Month As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Names\Month::name() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::MIDNIGHT As default parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Ordinal::FIRST To get the first day of the first for
     * the selected month.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::formatInteger() To format a Unix timestamp as integer.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Enums\DateTime\Names\Month;
     *
     * DateTime::firstDay(Month::NOVEMBER, 2000);
     *
     * // 2000-11-01 00:00:00.000000
     * ```
     *
     * @param null|\FireHub\Core\Support\Enums\DateTime\Names\Month $month [optional] <p>
     * Sets month for datetime, or current month if null.
     * </p>
     * @param null|non-negative-int $year [optional] <p>
     * Sets year for datetime, or current year if null.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Time|non-empty-string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return non-empty-string
     */
    public static function firstDay (?Month $month = null, ?int $year = null, Time|string $at = Time::MIDNIGHT):string {

        return Ordinal::FIRST->value.
            ' day of '
            .($month ? $month->name() : Month::from(DateAndTime::formatInteger('m') ?: 1)->name())
            .' '
            .($year ?? '')
            .' '
            .(DataIs::string($at) ? $at : $at->value);

    }

    /**
     * ### Last day of specified month
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Month As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Month::name() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::MIDNIGHT As default parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Ordinal::LAST To get the last day of the first of the selected month.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::formatInteger() To format a Unix timestamp as integer.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Enums\DateTime\Names\Month;
     *
     * DateTime::lastDay(Month::NOVEMBER, 2000);
     *
     * // 2000-11-30 00:00:00.000000
     * ```
     *
     * @param null|\FireHub\Core\Support\Enums\DateTime\Names\Month $month [optional] <p>
     * Sets month for datetime, or current month if null.
     * </p>
     * @param null|non-negative-int $year [optional] <p>
     * Sets year for datetime, or current year if null.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Time|non-empty-string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return non-empty-string
     */
    public static function lastDay (?Month $month, ?int $year = null, Time|string $at = Time::MIDNIGHT):string {

        return Ordinal::LAST->value
            .' day of '
            .($month ? $month->name() : Month::from(DateAndTime::formatInteger('m') ?: 1)->name())
            .' '
            .($year ?? '')
            .' '
            .(DataIs::string($at) ? $at : $at->value);

    }

    /**
     * ### Specified weekday name and month
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Ordinal As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Names\WeekDay As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Month As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Month::name() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Names\WeekDay::name() To get a week day name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Relative\Time::MIDNIGHT As default parameter.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::formatInteger() To format a Unix timestamp as integer.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if $at is a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Enums\DateTime\Relative\Ordinal;
     * use FireHub\Core\Support\Enums\DateTime\Names\WeekDay;
     * use FireHub\Core\Support\Enums\DateTime\Names\Month;
     *
     * DateTime::ordinalWeekDay(Ordinal::FIRST, WeekDay::SUNDAY, Month::MAY, 2024);
     *
     * // 2024-05-05 00:00:00.000000
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Ordinal $ordinal <p>
     * Sets ordinal value for datetime.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Names\WeekDay $weekday <p>
     * Sets weekday name for datetime.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\DateTime\Names\Month $month [optional] <p>
     * Sets month for datetime, or current month if null.
     * </p>
     * @param null|non-negative-int $year [optional] <p>
     * Sets year for datetime, or current year if null.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Relative\Time|non-empty-string $at [optional] <p>
     * Sets time for datetime timestamp.
     * </p>
     *
     * @return non-empty-string
     */
    public static function ordinalWeekDay (Ordinal $ordinal, WeekDay $weekday, ?Month $month = null, ?int $year = null, Time|string $at = Time::MIDNIGHT):string {

        return $ordinal->value
            .' '.$weekday->name()
            .' of '
            .($month ? $month->name() : Month::from(DateAndTime::formatInteger('m') ?: 1)->name())
            .' '
            .($year ?? '')
            .' '
            .(DataIs::string($at) ? $at : $at->value);

    }

}