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

use FireHub\Core\Support\Zwick\DateTime;
use FireHub\Core\Support\Enums\DateTime\ {
    Format\Format, Format\Predefined as PredefinedFormat, Format\Year as YearFormat, Format\TimeZone as TimeZoneFormat,
    Names\Month, Names\WeekDay
};
use FireHub\Core\Support\Enums\Data\Type;
use FireHub\Core\Support\LowLevel\Data;

/**
 * ### Check information about the current date\time
 * @since 1.0.0
 */
trait Check {

    /**
     * ### Check whether it is a leap year
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To change a type.
     * @uses \FireHub\Core\Support\Zwick\DateTime::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Year::LEAP As format type.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_BOOL To set a type as boolean.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->leapYear();
     *
     * // true
     * ```
     *
     * @return bool True if is leap year, false otherwise.
     */
    public function leapYear ():bool {

        return Data::setType($this->parse(YearFormat::LEAP), Type::T_BOOL);

    }

    /**
     * ### Check if DateTime is in January
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::JANUARY As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isJanuary();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in January, false otherwise.
     */
    public function isJanuary ():bool {

        return $this->monthName() === Month::JANUARY;

    }

    /**
     * ### Check if DateTime is in February
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::FEBRUARY As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isFebruary();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in February, false otherwise.
     */
    public function isFebruary ():bool {

        return $this->monthName() === Month::FEBRUARY;

    }

    /**
     * ### Check if DateTime is in March
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::MARCH As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isMarch();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in March, false otherwise.
     */
    public function isMarch ():bool {

        return $this->monthName() === Month::MARCH;

    }

    /**
     * ### Check if DateTime is in April
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::APRIL As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isApril();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in April, false otherwise.
     */
    public function isApril ():bool {

        return $this->monthName() === Month::APRIL;

    }

    /**
     * ### Check if DateTime is in May
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::MAY As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isMay();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in May, false otherwise.
     */
    public function isMay ():bool {

        return $this->monthName() === Month::MAY;

    }

    /**
     * ### Check if DateTime is in June
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::JUNE As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isJune();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in June, false otherwise.
     */
    public function isJune ():bool {

        return $this->monthName() === Month::JUNE;

    }

    /**
     * ### Check if DateTime is in July
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::JULY As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isJuly();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in July, false otherwise.
     */
    public function isJuly ():bool {

        return $this->monthName() === Month::JULY;

    }

    /**
     * ### Check if DateTime is in August
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::AUGUST As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isAugust();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in August, false otherwise.
     */
    public function isAugust ():bool {

        return $this->monthName() === Month::AUGUST;

    }

    /**
     * ### Check if DateTime is in September
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::SEPTEMBER As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isSeptember();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in September, false otherwise.
     */
    public function isSeptember ():bool {

        return $this->monthName() === Month::SEPTEMBER;

    }

    /**
     * ### Check if DateTime is in October
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::OCTOBER As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isOctober();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in October, false otherwise.
     */
    public function isOctober ():bool {

        return $this->monthName() === Month::OCTOBER;

    }

    /**
     * ### Check if DateTime is in November
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::NOVEMBER As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isNovember();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in November, false otherwise.
     */
    public function isNovember ():bool {

        return $this->monthName() === Month::NOVEMBER;

    }

    /**
     * ### Check if DateTime is in December
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::monthName() To get the month name.
     * @uses \FireHub\Core\Support\Enums\DateTime\Month::DECEMBER As month name.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isDecember();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being in December, false otherwise.
     */
    public function isDecember ():bool {

        return $this->monthName() === Month::DECEMBER;

    }

    /**
     * ### Check if DateTime is today
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Check::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Zwick\DateTime::today() To set DateTime to the current date.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::DATE As date format.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isToday();
     *
     * // true
     * ```
     *
     * @return bool True if is DateTime being today, false otherwise.
     */
    public function isToday ():bool {

        return $this->parse(PredefinedFormat::DATE) === DateTime::today()->parse(PredefinedFormat::DATE);

    }

    /**
     * ### Check if DateTime is yesterday
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Check::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Zwick\DateTime::yesterday() To set DateTime to yesterday date.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::DATE As date format.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isYesterday();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being yesterday, false otherwise.
     */
    public function isYesterday ():bool {

        return $this->parse(PredefinedFormat::DATE) === DateTime::yesterday()->parse(PredefinedFormat::DATE);

    }

    /**
     * ### Check if DateTime is tomorrow
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Check::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Zwick\DateTime::tomorrow() To set DateTime to tomorrow date.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::DATE As date format.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->isTomorrow();
     *
     * // false
     * ```
     *
     * @return bool True if is DateTime being tomorrow, false otherwise.
     */
    public function isTomorrow ():bool {

        return $this->parse(PredefinedFormat::DATE) === DateTime::tomorrow()->parse(PredefinedFormat::DATE);

    }

}