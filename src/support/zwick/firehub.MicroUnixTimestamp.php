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

use FireHub\Core\Support\Zwick\Traits\TimestampFractions;

/**
 * ### Epoch Unix micro timestamp
 *
 * Epoch Unix timestamp is the number of seconds and microseconds since the Unix Epoch (January 1, 1970 00:00:00 GMT).
 * @since 1.0.0
 *
 * @api
 */
class MicroUnixTimestamp extends UnixTimestamp {

    /**
     * ### This trait allows usage of microseconds in timestamps
     * @since 1.0.0
     */
    use TimestampFractions;

    /**
     * ### Timestamp fractions of the second
     * @since 1.0.0
     *
     * @var int<0, 999999>
     */
    protected int $fractions = 0;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     * @uses \FireHub\Core\Support\Zwick\UnixTimestamp::__construct() As parent constructor.
     * @uses \FireHub\Core\Support\Zwick\Traits\TimestampFractions::createFractions() To create fractions.
     */
    public function __construct (string $datetime, ?TimeZone $timezone = null) {

        $this->createFractions($datetime);

        parent::__construct($datetime, $timezone);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\TimeZone As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\MicroUnixTimestamp;
     *
     * MicroUnixTimestamp::from('1970-01-01 12:45:31.452212');
     *
     * // 1724412073.452212
     * ```
     */
    public static function from (string $datetime, ?TimeZone $timezone = null):self {

        return new self($datetime, $timezone);

    }

    /**
     * ### Get timestamp fractions
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Timestamp;
     *
     * $timestamp = UnixTimestamp::from('1970-01-01 12:45:31.452212');
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

}