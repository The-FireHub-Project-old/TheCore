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
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Gen
};
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\DateTime\Format\Predefined;
use Exception;

/**
 * ### Period of time between fixed points with defined ticks
 *
 * An Interval stores a fixed amount of time (in years, months, days, hours...).
 * @since 1.0.0
 *
 * @api
 */
class Interval extends Zwick {

    /**
     * ### If true, Interval will include the first tick
     * @since 1.0.0
     *
     * @var bool
     */
    protected bool $include_start = false;

    /**
     * ### If true, Interval will exclude the last tick
     * @since 1.0.0
     *
     * @var bool
     */
    protected bool $exclude_end = false;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Period As parameter.
     * @uses \FireHub\Core\Support\Zwick\Interval As parameter.
     *
     * @param \FireHub\Core\Support\Zwick\Period $period <p>
     * Date and time period between time and dates where ticks will occur.
     * </p>
     * @param \FireHub\Core\Support\Zwick\Timespan $tick <p>
     * Tick frequency.
     * </p>
     *
     * @return void
     */
    final private function __construct (
        private readonly Period $period,
        private readonly Timespan $tick
    ) {}

    /**
     * ### Create a new interval
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Period As parameter.
     * @uses \FireHub\Core\Support\Zwick\Interval As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Interval;
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\Timespan;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $timespan = Timespan::months(4);
     *
     * Interval::create($period, $timespan);
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\Period $period <p>
     * Date and time period between time and dates where ticks will occur.
     * </p>
     * @param \FireHub\Core\Support\Zwick\Timespan $tick <p>
     * Tick frequency.
     * </p>
     *
     * @return static New interval.
     */
    public static function create (Period $period, Timespan $tick):static {

        return new static($period, $tick);

    }

    /**
     * ### Interval will include the first tick
     * @since 1.0.0
     *
     * @return $this This interval.
     */
    public function includeStart ():static {

        $this->include_start = true;

        return $this;

    }

    /**
     * ### Interval will exclude the last tick
     * @since 1.0.0
     *
     * @return $this This interval.
     */
    public function excludeEnd ():static {

        $this->exclude_end = true;

        return $this;

    }

    /**
     * ### Iterate over a set of dates and times, recurring at regular intervals, over a given period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::list() As indexed array collection type.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     * @uses \FireHub\Core\Support\Zwick\DateTime::from() To create datetime from string.
     * @uses \FireHub\Core\Support\Zwick\DateTime::add() To add an interval to datetime.
     * @uses \FireHub\Core\Support\Zwick\DateTime::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Zwick\DateTime::timezone() To get the start date timezone.
     * @uses \FireHub\Core\Support\Zwick\Period::getStart() To get the start date of the period.
     * @uses \FireHub\Core\Support\Zwick\Period::getEnd() To get the end date of the period.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME As datetime format.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Interval;
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\Timespan;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $timespan = Timespan::months(4);
     *
     * $interval = Interval::create($period, $timespan);
     *
     * $interval->ticks();
     *
     * // 2020-05-01 12:00:00.100000
     * // 2020-09-01 12:00:00.100000
     * // 2021-01-01 12:00:00.100000
     * ```
     *
     * @throws Exception Emits Exception in case of an error.
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<\FireHub\Core\Support\Zwick\DateTime> List collection.
     */
    public function ticks ():Indexed {

        return Collection::list(function ():array {

            $collection = [];

            $start_period = DateTime::from(
                $this->period->getStart()->parse(Predefined::DATE_MICRO_TIME),
                $this->period->getStart()->timezone()
            );

            for ($datetime = $this->period->getStart(); $datetime <= $this->period->getEnd(); $datetime->add($this->tick)) {

                $tick = DateTime::from(
                    $datetime->parse(Predefined::DATE_MICRO_TIME),
                    $datetime->timezone()
                );

                if (
                    !$this->include_start
                    && (
                        $tick->parse(Predefined::DATE_MICRO_TIME)
                        === $start_period->parse(Predefined::DATE_MICRO_TIME)
                    ) ||
                    (
                        $this->exclude_end
                        && (
                            $datetime->parse(Predefined::DATE_MICRO_TIME)
                            === $this->period->getEnd()->parse(Predefined::DATE_MICRO_TIME)
                        )
                    )
                ) continue;

                $collection[] = $tick;

            }

            return $collection;

        });

    }

    /**
     * ### Iterate over a set of dates and times, recurring at regular intervals, over a given period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::lazy() As lazy collection type.
     * @uses \FireHub\Core\Support\Collection\Type\Gen As return.
     * @uses \FireHub\Core\Support\Zwick\DateTime::from() To create datetime from string.
     * @uses \FireHub\Core\Support\Zwick\DateTime::add() To add an interval to datetime.
     * @uses \FireHub\Core\Support\Zwick\DateTime::parse() To get date and/or time according to the given format.
     * @uses \FireHub\Core\Support\Zwick\DateTime::timezone() To get the start date timezone.
     * @uses \FireHub\Core\Support\Zwick\Period::getStart() To get the start date of the period.
     * @uses \FireHub\Core\Support\Zwick\Period::getEnd() To get the end date of the period.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME As datetime format.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Interval;
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\Timespan;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $timespan = Timespan::months(4);
     *
     * $interval = Interval::create($period, $timespan);
     *
     * $interval->lazyTicks();
     *
     * // 2020-05-01 12:00:00.100000
     * // 2020-09-01 12:00:00.100000
     * // 2021-01-01 12:00:00.100000
     * ```
     *
     * @throws Exception Emits Exception in case of an error.
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<int, \FireHub\Core\Support\Zwick\DateTime> List collection.
     */
    public function lazyTicks ():Gen {

        return Collection::lazy(function () {

            $start_period = DateTime::from(
                $this->period->getStart()->parse(Predefined::DATE_MICRO_TIME),
                $this->period->getStart()->timezone()
            );

            for ($datetime = $this->period->getStart(); $datetime <= $this->period->getEnd(); $datetime->add($this->tick)) {

                $tick = DateTime::from(
                    $datetime->parse(Predefined::DATE_MICRO_TIME),
                    $datetime->timezone()
                );

                if (
                    !$this->include_start
                    && (
                        $tick->parse(Predefined::DATE_MICRO_TIME)
                        === $start_period->parse(Predefined::DATE_MICRO_TIME)
                    ) ||
                    (
                        $this->exclude_end
                        && (
                            $datetime->parse(Predefined::DATE_MICRO_TIME)
                            === $this->period->getEnd()->parse(Predefined::DATE_MICRO_TIME)
                        )
                    )
                ) continue;

                yield $tick;

            }

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::fromList() To create a string from $units.
     * @uses \FireHub\Core\Support\Str::string() To get string as raw string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Interval;
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\Timespan;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $timespan = Timespan::months(4);
     *
     * echo Interval::create($period, $timespan);
     *
     * // 2020-05-01 12:00:00.100000;2020-09-01 12:00:00.100000;2021-01-01 12:00:00.100000
     * ```
     *
     * @throws Exception Emits Exception in case of an error.
     */
    public function __toString ():string {

        return Str::fromList($this->ticks(), ';')->string();

    }

}