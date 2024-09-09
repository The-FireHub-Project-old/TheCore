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

use FireHub\Core\Support\Enums\DateTime\Format\ {
    Day, Month, Time, Week, Year
};
use FireHub\Core\Support\Enums\DateTime\ {
    Names\WeekDay, Unit\Months, Unit\Years
};
use FireHub\Core\Support\Enums\Data\Type;
use FireHub\Core\Support\LowLevel\ {
    Data, NumInt
};

/**
 * ### Get information about the current date\time
 * @since 1.0.0
 *
 * @api
 */
trait Get {

    /**
     * ### Get millennium
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumInt::ceil() To round fractions up.
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::year() To get year.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Years::MILLENNIUM As years unit.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Years::calculate() To calculate the number of units.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime = DateTime::now()->millennium();
     *
     * // 3
     * ```
     *
     * @return int Millennium.
     */
    public function millennium ():int {

        return NumInt::ceil(($this->year() + 1) / Years::MILLENNIUM->calculate());

    }

    /**
     * ### Get century
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumInt::ceil() To round fractions up.
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::year() To get year.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Years::CENTURY As years unit.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Years::calculate() To calculate the number of units.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->century();
     *
     * // 21
     * ```
     *
     * @return int Century.
     */
    public function century ():int {

        return NumInt::ceil(($this->year() + 1) / Years::CENTURY->calculate());

    }

    /**
     * ### Get a decade in century
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumInt::ceil() To round fractions up.
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::yearShort() To get a short two-digit year.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Years::DECADE As years unit.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Years::calculate() To calculate the number of units.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->decade();
     *
     * // 3
     * ```
     *
     * @return int Decade.
     */
    public function decade ():int {

        return NumInt::ceil(($this->yearShort() + 1) / Years::DECADE->calculate());

    }

    /**
     * ### Get year
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Year::LONG As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example Get Calendar year.
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->year();
     *
     * // 2023
     * ```
     *
     * @return int Year.
     */
    public function year ():int {

        return Data::setType($this->parse(Year::LONG), Type::T_INT);

    }

    /**
     * ### Get short two-digit year
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Year::SHORT As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example Get Calendar year.
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->yearShort();
     *
     * // 23
     * ```
     *
     * @return int Year.
     */
    public function yearShort ():int {

        return Data::setType($this->parse(Year::SHORT), Type::T_INT);

    }

    /**
     * ### Get quarter in year
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumInt::ceil() To round fractions up.
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::month() To get a month.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Months::QUARTER As month unit.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Months::calculate() To calculate the number of units.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime = DateTime::now()->quarter();
     *
     * // 3
     * ```
     *
     * @return int Quarter in a year.
     */
    public function quarter ():int {

        return NumInt::ceil(($this->month() + 1) / Months::QUARTER->calculate());

    }

    /**
     * ### Get month number
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Month::NUMERIC_SHORT As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->month();
     *
     * // 7
     * ```
     *
     * @return int Month number.
     */
    public function month ():int {

        return Data::setType($this->parse(Month::NUMERIC_SHORT), Type::T_INT);

    }

    /**
     * ### The week number of the year
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Week::NUMBER As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->week(),
     *
     * // 12
     * ```
     *
     * @return int Week number of the year.
     */
    public function week ():int {

        return Data::setType($this->parse(Week::NUMBER), Type::T_INT);

    }

    //public function weekInMonth ():int {

        //return NumInt::ceil(($this->day() + self::firstDay()->dayInWeek() - 1) / 7);

    //}

    /**
     * ### The day of the month
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_MONTH_SHORT As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->day();
     *
     * // 2
     * ```
     *
     * @return int Day in month number.
     */
    public function day ():int {

        return Data::setType($this->parse(Day::NUMERIC_IN_MONTH_SHORT), Type::T_INT);

    }

    /**
     * ### The day of the month suffix
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\DayFormat::NUMERIC_IN_MONTH_SHORT As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->daySuffix();
     *
     * // th
     * ```
     *
     * @return string English ordinal suffix for the day of the month, two characters.
     */
    public function daySuffix ():string {

        return $this->parse(Day::SUFFIX);

    }

    /**
     * ### The day of the year
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Day::NUMBER aS format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->dayInYear();
     *
     * // 195
     * ```
     *
     * @return int Number of days in the given month.
     */
    public function dayInYear ():int {

        return Data::setType($this->parse(Day::NUMBER), Type::T_INT) + 1;

    }

    /**
     * ### The day number of the week
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Names\WeekDay As return.
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Day::NUMERIC_IN_WEEK_ISO_8601 As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Enums\DateTime\Ordinal;
     * use FireHub\Core\Support\Enums\DateTime\WeekDay;
     *
     * DateTime::weekDay(Ordinal::LAST, WeekDay::SUNDAY)->dayInWeek();
     *
     * // WeekDay::SUNDAY
     * ```
     *
     * @return \FireHub\Core\Support\Enums\DateTime\Names\WeekDay Weekday names enum.
     */
    public function weekDay ():WeekDay {

        return WeekDay::from(
            Data::setType($this->parse(Day::NUMERIC_IN_WEEK_ISO_8601), Type::T_INT)
        );

    }

    /**
     * ### 24 type hour of the time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Time::HOUR_SHORT_24 As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->hour();
     *
     * // 13
     * ```
     *
     * @return int Hour of the time number.
     */
    public function hour ():int {

        return Data::setType($this->parse(Time::HOUR_SHORT_24), Type::T_INT);

    }

    /**
     * ### 24 type hour of the time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Time::HOUR_SHORT_12 As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->hour();
     *
     * // 1
     * ```
     *
     * @return int Hour of the time number.
     */
    public function hourShort ():int {

        return Data::setType($this->parse(Time::HOUR_SHORT_12), Type::T_INT);

    }

    /**
     * ### Ante meridiem and Post meridiem suffix for the hour
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Time::MERDIEM_LC As format type.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->merdiem();
     *
     * // am
     * ```
     *
     * @return string Ante meridiem (am) or Post meridiem (pm).
     */
    public function merdiem ():string {

        return $this->parse(Time::MERDIEM_LC);

    }

    /**
     * ### Minute of the time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Time::MINUTES As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->minute();
     *
     * // 5
     * ```
     *
     * @return int Minute of the time number.
     */
    public function minute ():int {

        return Data::setType($this->parse(Time::MINUTES), Type::T_INT);

    }

    /**
     * ### Second of the time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Time::SECONDS As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->second();
     *
     * // 7
     * ```
     *
     * @return int Seconds of the time number.
     */
    public function second ():int {

        return Data::setType($this->parse(Time::SECONDS), Type::T_INT);

    }

    /**
     * ### Millisecond of the time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Traits\Get::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Time::MILLISECONDS As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->milliSecond(false);
     *
     * // 1
     * ```
     *
     * @return int Millisecond of the time number.
     */
    public function milliSecond ():int {

        return Data::setType($this->parse(Time::MILLISECONDS), Type::T_INT);

    }

    /**
     * ### Microsecond of the time
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Time::MICROSECONDS As format type.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set to integer.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT To convert to integer.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * DateTime::now()->microSecond(false);
     *
     * // 1409
     * ```
     *
     * @return int Microsecond of the time number.
     */
    public function microSecond ():int {

        return Data::setType($this->parse(Time::MICROSECONDS), Type::T_INT);

    }

}