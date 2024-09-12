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

/**
 * ### Sets information about the current date\time
 * @since 1.0.0
 */
trait Set {

    /**
     * ### Sets the year
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the date.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setYear(2020);
     *
     * // 2020-07-17 14:45:17.473596
     * ```
     *
     * @param int $year <p>
     * Year of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setYear (int $year):static {

        return $this->set(year: $year);

    }

    /**
     * ### Sets the month
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the date.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setMonth(19);
     *
     * // 2023-10-17 14:45:17.473596
     * ```
     *
     * @param int $month <p>
     * Month of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setMonth (int $month):static {

        return $this->set(month: $month);

    }

    /**
     * ### Sets the day
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the date.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setDay(10);
     *
     * // 2023-07-10 14:45:17.473596
     * ```
     *
     * @param int $day <p>
     * Day of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setDay (int $day):static {

        return $this->set(day: $day);

    }

    /**
     * ### Sets the hour
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the time.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setHour(10);
     *
     * // 2023-07-10 10:45:17.473596
     * ```
     *
     * @param int $hour $hour <p>
     * Hour of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setHour (int $hour):static {

        return $this->set(hour: $hour);

    }

    /**
     * ### Sets the minute
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the time.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setMinute(10);
     *
     * // 2023-07-10 14:10:17.473596
     * ```
     *
     * @param int $minute $minute <p>
     * Minute of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setMinute (int $minute):static {

        return $this->set(minute: $minute);

    }

    /**
     * ### Sets the second
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the time.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setSecond(34.);
     *
     * // 2023-07-10 14:45:34.473596
     * ```
     *
     * @param int $second $second <p>
     * Second of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setSecond (int $second):static {

        return $this->set(second: $second);

    }

    /**
     * ### Sets the microsecond
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the time.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setMilliSecond(400);
     *
     * // 2023-07-10 14:45:17.400000
     * ```
     *
     * @param int $millisecond <p>
     * Millisecond of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setMilliSecond (int $millisecond):static {

        return $this->set(microsecond: $millisecond * 1000);

    }

    /**
     * ### Sets the microsecond
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::set() To set the time.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->setMicroSecond(374323);
     *
     * // 2023-07-10 14:45:17.374323
     * ```
     *
     * @param int $microsecond <p>
     * Microsecond of the date.
     * </p>
     *
     * @return $this This object.
     */
    public function setMicroSecond (int $microsecond):static {

        return $this->set(microsecond: $microsecond);

    }

}