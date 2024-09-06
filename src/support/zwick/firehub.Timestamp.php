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
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\ {
    DateTime\Epoch, Side
};
use FireHub\Core\Support\LowLevel\DateAndTime;

/**
 * ### Epoch timestamp
 *
 * Epoch timestamp is the number of seconds passes from fixed date and time used as a reference from which a computer
 * measures system time.
 * @since 1.0.0
 *
 * @api
 */
class Timestamp implements Init, Stringable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Timestamp reference point
     * @since 1.0.0
     *
     * @var non-empty-string
     */
    private string $epoch;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Epoch As parameter.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::format() To format epoch time.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::stringToTimestamp() To convert epoch argument to timestamp.
     *
     * @param int $seconds <p>
     * Timestamp seconds.
     * </p>
     * @param int<0, 999999> $fractions<p>
     * Timestamp fractions of the second.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Epoch|non-empty-string $epoch <p>
     * Timestamp reference point.
     * </p>
     *
     * @return void
     */
    private function __construct (
        private int $seconds,
        private int $fractions,
        Epoch|string $epoch
    ) {

        if ($fractions < 0) $fractions = 0;

        while ($fractions >= 999999) $fractions /= 10;

        $this->fractions = (int)$fractions; // @phpstan-ignore-line

        $this->epoch = DateAndTime::format( // @phpstan-ignore-line
            'Y-m-d H:i:s',
            DateAndTime::stringToTimestamp($epoch instanceOf Epoch ? $epoch->value : $epoch)
        );

    }

    /**
     * ### Create unix timestamp from string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Epoch::UNIX As default parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     *
     * Timestamp::from(1724412073);
     *
     * // 1,724,412,073
     * ```
     * @param int $seconds <p>
     * Timestamp seconds.
     * </p>
     * @param int<0, 999999> $fractions [optional] <p>
     * Timestamp fractions of the second.
     * </p>
     * @param \FireHub\Core\Support\Enums\DateTime\Epoch|non-empty-string $epoch [optional] <p>
     * Timestamp reference point.
     * </p>
     *
     * @return self New unix timestamp from string.
     */
    public static function from (int $seconds, int $fractions = 0, Epoch|string $epoch = Epoch::UNIX):self {

        return new self($seconds, $fractions, $epoch);

    }

    /**
     * ### Get timestamp seconds
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     *
     * $timestamp = Timestamp::from(1724401698);
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
     * ### Get timestamp fractions
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     *
     * $timestamp = Timestamp::from(1724412073, 452212);
     *
     * $timestamp->fractions();
     *
     * // 452212
     * ```
     *
     * @return int<0, 999999> Timestamp fractions.
     */
    public function fractions ():int {

        return $this->fractions;

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
     * $timestamp = Timestamp::from(1724412073, 452212, Epoch::Y2K);
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
     * ### Get timestamp microtime
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::from() To create string from seconds and fractions.
     * @uses \FireHub\Core\Support\Str::append() To add fractions at the end of the string.
     * @uses \FireHub\Core\Support\Str::pad() To pad zeros in fractions if needed.
     * @uses \FireHub\Core\Support\Enums\Side::LEFT As pad size.
     * @uses \FireHub\Core\Support\Str::string() To print padded fractions.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     *
     * $timestamp = Timestamp::from(1724412073, 452212);
     *
     * $timestamp->microtime();
     *
     * // 1724412073.452212
     * ```
     *
     * @return string Timestamp fractions.
     */
    public function microtime ():string {

        return Str::from($this->seconds)
            ->append('.')
            ->append(Str::from($this->fractions)->pad(6, '0', Side::LEFT)->string())
            ->string();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Timestamp::microtime() To get timestamp microtime.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     *
     * echo Timestamp::from(1724412073, 452212);
     *
     * // 1724412073.452212
     * ```
     */
    public function __toString ():string {

        return $this->microtime();

    }

}