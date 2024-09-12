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

use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\Associative;
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\DateTime\Unit\ {
    Basic, Calculable, Days, Microseconds, Months, Years
};
use FireHub\Core\Support\LowLevel\ {
    Arr, StrSB
};
use Error;

/**
 * ### Date and time manipulation support library
 *
 * This class allows you to represent date/time information with a rich set of methods that are supplied to modify
 * and format this information as well.
 * @since 1.0.0
 *
 * @method static self millenniums (int $number) ### Create an interval specifying a number of millenniums
 * @method static self centuries (int $number) ### Create an interval specifying a number of centuries
 * @method static self decades (int $number) ### Create an interval specifying a number of decades
 * @method static self years (int $number) ### Create an interval specifying a number of years
 * @method static self quarters (int $number) ### Create an interval specifying a number of quarters
 * @method static self months (int $number) ### Create an interval specifying a number of months
 * @method static self fortnights (int $number) ### Create an interval specifying a number of fortnights
 * @method static self weeks (int $number) ### Create an interval specifying a number of weeks
 * @method static self days (int $number) ### Create an interval specifying a number of days
 * @method static self hours (int $number) ### Create an interval specifying a number of hours
 * @method static self minutes (int $number) ### Create an interval specifying a number of minutes
 * @method static self seconds (int $number) ### Create an interval specifying a number of seconds
 * @method static self milliseconds (int $number) ### Create an interval specifying a number of milliseconds
 * @method static self microSeconds (int $number) ### Create an interval specifying a number of microseconds
 * @method int getYears () ### Get years from an interval
 * @method int getMonths () ### Get months from an interval
 * @method int getDays () ### Get days from an interval
 * @method int getHours () ### Get hours from an interval
 * @method int getMinutes () ### Get minutes from an interval
 * @method int getSeconds () ### Get seconds from an interval
 * @method int getMicroSeconds () ### Get microseconds from an interval
 * @method self addMillenniums (int $number) ### Add the given number of millenniums to the current interval
 * @method self addCenturies (int $number) ### Add the given number of centuries to the current interval
 * @method self addDecades (int $number) ### Add the given number of decades to the current interval
 * @method self addYears (int $number) ### Add the given number of years to the current interval
 * @method self addQuarters (int $number) ### Add the given number of quarters to the current interval
 * @method self addMonths (int $number) ### Add the given number of months to the current interval
 * @method self addFortnights (int $number) ### Add the given number of fortnights to the current interval
 * @method self addWeeks (int $number) ### Add the given number of weeks to the current interval
 * @method self addDays (int $number) ### Add the given number of days to the current interval
 * @method self addHours (int $number) ### Add the given number of hours to the current interval
 * @method self addMinutes (int $number) ### Add the given number of minutes to the current interval
 * @method self addSeconds (int $number) ### Add the given number of seconds to the current interval
 * @method self addMilliSeconds (int $number) ### Add the given number of milliseconds to the current interval
 * @method self addMicroSeconds (int $number) ### Add the given number of microseconds to the current interval
 * @method self subMillenniums (int $number) ### Sub given number of millenniums to the current interval
 * @method self subCenturies (int $number) ### Sub given number of centuries to the current interval
 * @method self subDecades (int $number) ### Sub given number of decades to the current interval
 * @method self subYears (int $number) ### Sub given number of years to the current interval
 * @method self subQuarters (int $number) ### Sub given number of quarters to the current interval
 * @method self subMonths (int $number) ### Sub given number of months to the current interval
 * @method self subFortnights (int $number) ### Sub given number of fortnights to the current interval
 * @method self subWeeks (int $number) ### Sub given number of weeks to the current interval
 * @method self subDays (int $number) ### Sub given number of days to the current interval
 * @method self subHours (int $number) ### Sub given number of hours to the current interval
 * @method self subMinutes (int $number) ### Sub given number of minutes to the current interval
 * @method self subSeconds (int $number) ### Sub given number of seconds to the current interval
 * @method self subMilliSeconds (int $number) ### Sub given number of milliseconds to the current interval
 * @method self subMicroSeconds (int $number) ### Sub given number of microseconds to the current interval
 *
 * @api
 */
class Interval extends Zwick {

    /**
     * ### Interval units
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Associative<string, int>
     */
    private Associative $units;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @return void
     */
    private function __construct () {

        $this->units = Collection::associative(function ():array {

            $units = [];

            foreach (Basic::cases() as $basic_unit)
                $units[$basic_unit->value] = 0;

            return $units;

        });

    }

    /**
     * ### Get unit value from interval
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Interval;
     *
     * Interval::days(10)->getDays();
     *
     * // 10
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Unit\Basic $unit <p>
     * Unit to add value.
     * </p>
     *
     * @return int Unit value.
     */
    public function get (Basic $unit):int {

        return $this->units->get($unit->value);

    }

    /**
     * ### Add unit value to interval
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Calculable As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Calculable::parent() To get a parent enum case.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Calculable::calculate() To calculate the number of units.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Interval;
     * use FireHub\Core\Support\Enums\DateTime\Unit\Days;
     *
     * Interval::days(10)->plus(Days::WEEK, 1);
     *
     * // 17
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Unit\Basic|\FireHub\Core\Support\Enums\DateTime\Unit\Calculable $unit <p>
     * Unit to add value.
     * </p>
     * @param int $number <p>
     * Value of unit.
     * </p>
     *
     * @return $this This interval.
     */
    public function plus (Basic|Calculable $unit, int $number):self {

        match (true) {
            $unit instanceof Calculable => $this->units[$unit->parent()->value] += ($unit->calculate() * $number),
            default => $this->units[$unit->value] += $number
        };

        return $this;

    }

    /**
     * ### Subtract unit value to interval
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic As parameter.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Calculable As parameter.
     * @uses \FireHub\Core\Support\Zwick\Interval::plus() Add unit value to an interval.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Interval;
     * use FireHub\Core\Support\Enums\DateTime\Unit\Basic;
     *
     * Interval::days(10)->minus(Basic::DAY, 2);
     *
     * // 8
     * ```
     *
     * @param \FireHub\Core\Support\Enums\DateTime\Unit\Basic|\FireHub\Core\Support\Enums\DateTime\Unit\Calculable $unit <p>
     * Unit to add value.
     * </p>
     * @param int $number <p>
     * Value of unit.
     * </p>
     *
     * @return $this This interval.
     */
    public function minus (Basic|Calculable $unit, int $number):self {

        return $this->plus($unit, -$number);

    }

    /**
     * ### Convert unit name to unit enum
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic As return.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Calculable As return.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic::plural() To get a plural from an enum case.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Calculable::plural() To get a plural from an enum case.
     * @uses \FireHub\Core\Support\LowLevel\Arr::merge() To merge all calculable units.
     *
     * @param non-empty-string $name <p>
     * Unit name.
     * </p>
     *
     * @throws Error If unit $name doesn't exist.
     *
     * @return \FireHub\Core\Support\Enums\DateTime\Unit\Basic|\FireHub\Core\Support\Enums\DateTime\Unit\Calculable
     * Unit enum.
     */
    private function toUnit (string $name):Basic|Calculable {

        foreach (Basic::cases() as $basic_unit)
            if ($name === $basic_unit->plural()) return $basic_unit;

        $calculable_units = Arr::merge(
            Years::cases(), Months::cases(), Days::cases(), Microseconds::cases()
        );

        foreach ($calculable_units as $calculable_unit)
            if ($name === $calculable_unit->plural()) return $calculable_unit;

        throw new Error("Unit $name doesn't exist.");

    }

    /**
     * ### Call predefined patterns
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Interval::toUnit() To convert unit mame to unit enum.
     * @uses \FireHub\Core\Support\Zwick\Interval::get() To get unit value from an interval.
     * @uses \FireHub\Core\Support\Zwick\Interval::plus() Add unit value to an interval.
     * @uses \FireHub\Core\Support\Zwick\Interval::minus() Subtract value to an interval.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::toLower() To make a string lowercase.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::part() To get part of a string.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::startsWith() To check if the method starts with a given value.
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     * @param array<array-key, int> $arguments <p>
     * List of arguments.
     * </p>
     *
     * @throws Error If unit or called method $name doesn't exist.
     *
     * @return $this|int This interval or unit value.
     */
    public function __call (string $method, array $arguments):self|int {

        $method = StrSB::toLower($method);

        $unit = $this->toUnit(
            !empty($part = StrSB::part($method, 3))
                ? $part
                : throw new Error("Unit name doesn't exist.")
        );

        return match (true) {
            StrSB::startsWith('get', $method) && $unit instanceof Basic => $this->get($unit),
            StrSB::startsWith('add', $method) => $this->plus($unit, ...$arguments),
            StrSB::startsWith('sub', $method) => $this->minus($unit, ...$arguments),
            default => throw new Error("Method $method doesn't exist.")
        };

    }

    /**
     * ### Call predefined patterns
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSB::capitalize() To capitalize method name after prefix.
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     * @param array<array-key, mixed> $arguments <p>
     * List of arguments.
     * </p>
     *
     * @throws Error If the method is not one of add methods.
     *
     * @return self New datetime.
     */
    public static function __callStatic (string $method, array $arguments):self {

        $add_method = 'add'.StrSB::capitalize($method);

        return ($instance = (new self())->$add_method(...$arguments)) instanceof self
            ? $instance
            : throw new Error('Method must be one of add methods.');

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from $units.
     * @uses \FireHub\Core\Support\Str::string() To get string as raw string.
     *
     * @since 1.0.0
     */
    public function __toString ():string {

        return Str::fromList($this->units, ';')->string();

    }

}