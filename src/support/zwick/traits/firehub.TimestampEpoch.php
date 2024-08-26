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

namespace FireHub\Core\Support\Zwick\Traits;

use FireHub\Core\Support\Zwick\TimeZone;
use FireHub\Core\Support\Enums\DateTime\ {
    Epoch, Zone
};
use FireHub\Core\Support\LowLevel\ {
    DateAndTime, DataIs
};
use Error;

use function FireHub\Core\Support\Helpers\DateTime\callWithTimezone;

/**
 * ### This trait allows usage of epoch in timestamps
 * @since 1.0.0
 */
trait TimestampEpoch {

    /**
     * ### Timestamp reference point
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Epoch::UNIX As default value.
     *
     * @var non-empty-string
     */
    private string $epoch = Epoch::UNIX->value;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Epoch As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone::UTC As reference point timezone.
     * @uses \FireHub\Core\Support\Helpers\DateTime\callWithTimezone() To convert $datetime to seconds with timezone
     * information.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if epoch is string or enum.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::format() To format date and time.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::stringToTimestamp() To parse about any English textual
     * datetime description into a Unix timestamp.
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Epoch|non-empty-string $epoch <p>
     * Timestamp reference point.
     * </p>
     * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone [optional] <p>
     * TimeZone support class.
     * </p>
     */
    public function __construct (string $datetime, Epoch|string $epoch, ?TimeZone $timezone = null) {

        /** @phpstan-ignore-next-line */
        $this->epoch = DateAndTime::format(
            'Y-m-d H:i:s',
            DateAndTime::stringToTimestamp(DataIs::string($epoch) ? $epoch : $epoch->value)
        );

        parent::__construct($datetime, $timezone);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Epoch::UNIX As default epoch.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Epoch;
     *
     * Timestamp::from('2024-01-01', TimeZone::create(Zone::AMERICA_NEW_YORK), Epoch::Y2K);
     *
     * // 757400400
     * ```
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone [optional] <p>
     * TimeZone support class.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Epoch|non-empty-string $epoch <p>
     * Timestamp reference point.
     * </p>
     */
    public static function from (string $datetime, ?TimeZone $timezone = null, Epoch|string $epoch = Epoch::UNIX):self {

        return new self($datetime, $epoch, $timezone);

    }

    /**
     * ### Get timestamp epoch
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     * use FireHub\Core\Support\Zwick\TimeZone;
     * use FireHub\Core\Support\Enums\DateTime\Epoch;
     *
     * $timestamp = Timestamp::from('2024-01-01', TimeZone::create(Zone::AMERICA_NEW_YORK), Epoch::Y2K);
     *
     * $timestamp->epoch();
     *
     * // 2000-01-01 00:00:00
     * ```
     *
     * @return non-empty-string Timestamp epoch.
     */
    public function epoch ():string {

        return $this->epoch;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Helpers\DateTime\callWithTimezone() To convert $datetime to seconds with timezone
     * information.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::stringToTimestamp() To parse about any English textual
     * datetime description into a Unix timestamp.
     * @uses \FireHub\Core\Support\Zwick\TimeZone::create() To create a new timezone.
     * @uses \FireHub\Core\Support\Enums\DateTime\Zone::UTC As timezone enum.
     *
     * @throws Error If we couldn't convert string to timestamp
     */
    protected function createSeconds (string $datetime, ?TimeZone $timezone = null):void {

        callWithTimezone($timezone, function () use ($datetime) {

            $this->seconds = DateAndTime::stringToTimestamp($datetime)
                - DateAndTime::stringToTimestamp($this->epoch.' '.TimeZone::create(Zone::UTC));

        });

    }

}