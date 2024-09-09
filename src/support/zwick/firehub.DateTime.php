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

use FireHub\Core\Support\Enums\DateTime\Format\ {
    Format, Predefined
};
use FireHub\Core\Support\Zwick\Traits\ {
    Check, Get, Set
};
use FireHub\Core\Support\Zwick\Helpers\Parse;
use FireHub\Core\Support\Enums\DateTime\ {
    Epoch, Zone, Names\Month, Names\WeekDay, Relative\Ordinal, Relative\Time, Unit\Unit
};
use FireHub\Core\Support\LowLevel\ {
    DataIs, DateAndTime
};
use DateTime as BaseDateTime, DateTimeZone as BaseTimeZone, Error, Exception;

/**
 * ### Date and time manipulation support library
 *
 * This class allows you to represent date/time information with a rich set of methods that are supplied to modify
 * and format this information as well.
 * @since 1.0.0
 *
 * @method static self now (TimeZone $timezone = null) ### Create datetime with the current date and time
 * @method static self today (Time|string $at = Time::MIDNIGHT, TimeZone $timezone = null) ### Create datetime with today's date
 * @method static self yesterday (Time|string $at = Time::MIDNIGHT, TimeZone $timezone = null) ### Create datetime with yesterday's date
 * @method static self tomorrow (Time|string $at = Time::MIDNIGHT, TimeZone $timezone = null) ### Create datetime with tomorrow's date
 * @method static self relative (int $number, Unit $unit, Time|string $at = Time::NOW, TimeZone $timezone = null) ### Create datetime with relative date and time
 * @method static self firstDay (?Month $month = null, ?int $year = null, Time|string $at = Time::MIDNIGHT, TimeZone $timezone = null) ### Create datetime with first day of specified month
 * @method static self lastDay (?Month $month = null, ?int $year = null, Time|string $at = Time::MIDNIGHT, TimeZone $timezone = null) ### Create datetime with last day of specified month
 * @method static self ordinalWeekDay (?Ordinal $ordinal, WeekDay $weekday, ?Month $month = null, ?int $year = null, Time|string $at = Time::MIDNIGHT, TimeZone $timezone = null) ### Create datetime with a specified weekday name and month
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class DateTime extends Zwick {

    /**
     * ### Check information about the current date\time
     * @since 1.0.0
     */
    use Check;

    /**
     * ### Get information about the current date\time
     * @since 1.0.0
     */
    use Get;

    /**
     * ### Sets information about the current date\time
     * @since 1.0.0
     */
    use Set;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     *
     * @param BaseDateTime $datetime <p>
     * Representation of date and time.
     * </p>
     * @param \FireHub\Core\Support\Zwick\TimeZone $timezone <p>
     * TimeZone support class.
     * </p>
     *
     * @return void
     */
    private function __construct (
        private readonly BaseDateTime $datetime,
        private TimeZone $timezone
    ) {}

    /**
     * ### Create datetime from string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::create() To create a default timezone if one wasn't provided.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::get() To get timezone.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::getDefaultTimeZone() To get default timezone if one wasn't provided.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::from('now');
     *
     * // 2024-08-27 02:54:52.024551
     * ```
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone [optional] <p>
     * TimeZone support class.
     * </p>
     *
     * @throws Exception Emits Exception in case of an error.
     *
     * @return self New datetime from string.
     */
    public static function from (string $datetime, ?TimeZone $timezone = null):self {

        $timezone = $timezone ?? TimeZone::create(TimeZone::getDefaultTimeZone());

        return new self(
            new BaseDateTime(
                $datetime,
                new BaseTimeZone($timezone->get()->value)
            ),
            $timezone
        );

    }

    /**
     * ### Create datetime according to a specified format
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::create() To create a default timezone if one wasn't provided.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::get() To get timezone.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::getDefaultTimeZone() To get default timezone if one wasn't provided.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     * use FireHub\Core\Support\Enums\DateTime\Format\Predefined;
     *
     * $datetime = DateTime::fromFormat(Predefined::DATETIME, '2024-08-24 12:11:23');
     *
     * // 2024-08-24 12:11:23.000000
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Format\Predefined|non-empty-string $format <p>
     * Format accepted by date with some extras.
     * </p>
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone [optional] <p>
     * TimeZone support class.
     * </p>
     *
     * @throws Exception Emits Exception in case of an error.
     * @throws Error If we couldn't create DateTime from the provided format.
     *
     * @return self New datetime specified format.
     */
    public static function fromFormat (Predefined|string $format, string $datetime, ?TimeZone $timezone = null):self {

        $timezone = $timezone ?? TimeZone::create(TimeZone::getDefaultTimeZone());

        return new self(
            BaseDateTime::createFromFormat(
                DataIs::string($format) ? $format : $format->value,
                $datetime,
                new BaseTimeZone($timezone->get()->value)
            ) ?: throw new Error("Couldn't create DateTime from the provided format."),
            $timezone
        );

    }

    /**
     * ### Gets timezone for datetime
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->timezone();
     *
     * // America/New_York
     * ```
     *
     * @return \FireHub\Core\Support\Zwick\TimeZone Timezone for datetime.
     */
    public function timezone ():TimeZone {

        return $this->timezone;

    }

    /**
     * ### Sets timezone for datetime
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::get() To get timezone.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Zone;
     *
     * DateTime::now()->setTimezone(TimeZone::create(Zone::EUROPE_ZAGREB));
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\TimeZone $timezone <p>
     * Timezone to set.
     * </p>
     *
     * @throws Exception Exception in case of an error.
     *
     * @return void
     */
    public function setTimezone (TimeZone $timezone):void {

        $this->timezone = $timezone;

        $this->datetime->setTimezone(new BaseTimeZone($timezone->get()->value));

    }

    /**
     * ### Get timestamp for datetime
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Epoch::UNIX As parameter.
     * @uses \FireHub\Core\Support\Zwick\Timestamp::from() To create a timestamp from string.
     * @uses \FireHub\Core\Support\Zwick\Timestamp::seconds() To get timestamp seconds.
     * @uses \FireHub\Core\Support\Zwick\Timestamp::fractions() To get timestamp fractions.
     * @uses \FireHub\Core\Support\Zwick\DateTime::microSecond() To get microsecond of the time.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::create() To create UTC timezone.
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone::UTC As timezone.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::stringToTimestamp() To parse about any English textual
     * datetime description into a Unix timestamp.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->timestamp();
     *
     * 1725901873.220000
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Epoch|non-empty-string $epoch [optional] <p>
     * Timestamp reference point.
     * </p>
     *
     * @throws Error If we couldn't convert string to timestamp.
     * @throws Exception Emits Exception in case of an error.
     *
     * @return \FireHub\Core\Support\Zwick\Timestamp Returns the timestamp representing the date.
     */
    public function timestamp (Epoch|string $epoch = Epoch::UNIX):Timestamp {

        $timestamp = Timestamp::from($this->datetime->getTimestamp(), $this->microSecond());

        return $epoch === Epoch::UNIX
            ? $timestamp
            : Timestamp::from(
                $timestamp->seconds() - DateAndTime::stringToTimestamp(
                    $epoch instanceOf Epoch ? $epoch->value : $epoch.' ' .TimeZone::create(Zone::UTC)
                ),
                $timestamp->fractions(),
                $epoch
            );

    }

    /**
     * ### Gets date and/or time according to given format
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Format As parameter.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if a format value is string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Enums\DateTime\Format\Predefined;
     *
     * $datetime = DateTime::from('1970-01-01 12:11:13.22');
     *
     * $datetime->parse(PredefineD::DATE_MICRO_TIME);
     *
     * // 1970-01-01 12:11:13.220000
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Format\Format|string $format <p>
     * Format enum or string accepted by date().
     * </p>
     *
     * @throws Error If a parsed format is not string.
     *
     * @return string Formatted datetime.
     */
    public function parse (Format|string $format):string {

        return $this->datetime->format(
            $format instanceof Format
                ? (DataIs::string($format->value)
                    ? $format->value
                    : throw new Error('Parsed format must be string.')
                ) : $format
        );

    }

    /**
     * ### Modify the datetime
     * @since 1.0.0
     *
     * @param null|int $year [optional] <p>
     * Year of the date.
     * </p>
     * @param null|int<0, 12> $month [optional] <p>
     * Year of the date.
     * </p>
     * @param null|int<0, 31> $day [optional] <p>
     * Year of the date.
     * </p>
     * @param null|int<0, 23> $hour [optional] <p>
     * Hour of the time.
     * </p>
     * @param null|int<0, 59> $minute [optional] <p>
     * Minute of the time.
     * </p>
     * @param null|int<0, 59> $second [optional] <p>
     * Second of the time.
     * </p>
     * @param null|int<0, 999999> $microsecond [optional] <p>
     * Microsecond of the time.
     * </p>
     *
     * @return $this Datetime with modified datetime.
     *
     * @SuppressWarnings@SuppressWarnings(PHPMD.UnusedPrivateMethod)
     */
    private function set (int $year = null, ?int $month = null, ?int $day = null, ?int $hour = null, ?int $minute = null, ?int $second = null, ?int $microsecond = null):static {

        if ($year || $month || $day)
            $this->datetime->setDate(
                $year ?? $this->year(),
                $month ?? $this->month(),
                $day ?? $this->day()
            );

        if ($hour || $minute || $second || $microsecond)
            $this->datetime->setTime(
                $hour ?? $this->hour(),
                $minute ?? $this->minute(),
                $second ?? $this->second(),
                $microsecond ?? $this->microSecond()
            );

        return $this;

    }

    /**
     * ### Call predefined patterns
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone To check if an argument contains an instance of TimeZone.
     * @uses \FireHub\Core\Support\Zwick\DateTime::from() To create datetime from string.
     * @uses \FireHub\Core\Support\Zwick\Helpers\Parse To parse about any English textual datetime description into a
     * date/time.
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     * @param array<array-key, mixed> $arguments <p>
     * List of arguments.
     * </p>
     *
     * @throws Exception Emits Exception in case of an error.
     *
     * @return self New datetime.
     */
    public static function __callStatic (string $method, array $arguments):self {

        foreach ($arguments as $argument_key => $argument_value) if ($argument_value instanceof TimeZone) {
            $timezone = $argument_value;
            unset($arguments[$argument_key]);
        }

        return self::from(Parse::$method(...$arguments), $timezone ?? null); // @phpstan-ignore-line

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME As datetime format.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * echo DateTime::now();
     *
     * // 2024-08-27 02:54:52.024551
     * ```
     */
    public function __toString ():string {

        return $this->datetime->format(Predefined::DATE_MICRO_TIME->value);

    }

}