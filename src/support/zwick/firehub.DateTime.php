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

use FireHub\Core\Support\Enums\DateTime\Format\Predefined;
use FireHub\Core\Support\LowLevel\DataIs;
use DateTime as BaseDateTime, DateTimeZone as BaseTimeZone, Error, Exception;

/**
 * ### Date and time manipulation support library
 *
 * This class allows you to represent date/time information with a rich set of methods that are supplied to modify
 * and format this information as well.
 * @since 1.0.0
 *
 * @api
 */
class DateTime extends Zwick {

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
     * DateTime::now()->setTimezone(Zone::EUROPE_ZAGREB);
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