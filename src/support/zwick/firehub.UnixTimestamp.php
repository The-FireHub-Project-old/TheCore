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
use FireHub\Core\Support\LowLevel\DateAndTime;
use Error;

use function FireHub\Core\Support\Helpers\DateTime\callWithTimezone;

/**
 * ### Epoch Unix timestamp
 *
 * Epoch Unix timestamp is the number of seconds since the Unix Epoch (January 1, 1970 00:00:00 GMT).
 * @since 1.0.0
 *
 * @api
 */
class UnixTimestamp implements Init, Stringable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Timestamp seconds
     * @since 1.0.0
     *
     * @var int
     */
    protected int $seconds = 0;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses static::createSeconds() To create seconds.
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone [optional] <p>
     * TimeZone support class.
     * </p>
     *
     * @throws Error If we couldn't convert string to timestamp.
     * @error\exeption E_WARNING if the time zone is not valid.
     *
     * @return void
     */
    public function __construct (string $datetime, ?TimeZone $timezone = null) {

        static::createSeconds($datetime, $timezone);

    }

    /**
     * ### Create unix timestamp from string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\UnixTimestamp;
     *
     * UnixTimestamp::from('now');
     *
     * // 1724401698
     * ```
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone [optional] <p>
     * TimeZone support class.
     * </p>
     *
     * @throws Error If we couldn't convert string to timestamp.
     * @error\exeption E_WARNING if the time zone is not valid.
     *
     * @return self New unix timestamp from string.
     */
    public static function from (string $datetime, ?TimeZone $timezone = null):self {

        return new self($datetime, $timezone);

    }

    /**
     * ### Get timestamp seconds
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     *
     * $timestamp = UnixTimestamp::from('now');
     *
     * $timestamp->seconds();
     *
     * // 1724401698
     * ```
     *
     * @return int Timestamp seconds.
     */
    public function seconds ():int {

        return $this->seconds;

    }

    /**
     * ### Create timestamp seconds
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Helpers\DateTime\callWithTimezone() To convert $datetime to seconds with timezone
     * information.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::stringToTimestamp() To parse about any English textual
     * datetime description into a Unix timestamp.
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone [optional] <p>
     * TimeZone support class.
     * </p>
     *
     * @return void
     */
    protected function createSeconds (string $datetime, ?TimeZone $timezone = null):void {

        callWithTimezone($timezone, function () use ($datetime) {

            $this->seconds = DateAndTime::stringToTimestamp($datetime);

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\UnixTimestamp;
     *
     * echo UnixTimestamp::from('now');
     *
     * // 1724401698
     * ```
     */
    public function __toString ():string {

        return (string)$this->seconds;

    }

}