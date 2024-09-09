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

use FireHub\Core\Support\Enums\DateTime\ {
    Format\Format, Format\Predefined as PredefinedFormat, Format\Year as YearFormat, Format\TimeZone as TimeZoneFormat,
    Names\Month, Names\WeekDay
};
use FireHub\Core\Support\Enums\Data\Type;
use FireHub\Core\Support\LowLevel\Data;

/**
 * ### Check information about the current date\time
 * @since 1.0.0
 *
 * @api
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

}