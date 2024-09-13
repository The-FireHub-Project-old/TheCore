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

use FireHub\Core\Support\Enums\DateTime\Format\Predefined;
use Exception;

/**
 * ### Date and time period between time and dates
 * @since 1.0.0
 *
 * @api
 */
class Period extends Zwick {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime As parameter.
     *
     * @param \FireHub\Core\Support\Zwick\DateTime $start <p>
     * The start date of the period.
     * </p>
     * @param \FireHub\Core\Support\Zwick\DateTime $end <p>
     * The end date of the period.
     * </p>
     *
     * @return void
     */
    private function __construct (
        private DateTime $start,
        private DateTime $end
    ) {}

    /**
     * ### Create a new date and time period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * Period::between($datetime1, $datetime2);
     *
     * // 2020-01-01 12:00:00 – 2021-01-01 12:00:00
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\DateTime $start <p>
     * The start date of the period.
     * </p>
     * @param \FireHub\Core\Support\Zwick\DateTime $end <p>
     * The en date of the period.
     * </p>
     *
     * @return self New period from dates.
     */
    public static function between (DateTime $start, DateTime $end):self {

        return new self($start, $end);

    }

    /**
     * ### Check if provided datetime is inside this period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->inPeriod(DateTime::from('2020-05-05'));
     *
     * // true
     * ```
     *
     * @return bool True if provided datetime is inside this period, false otherwise.
     */
    public function inPeriod (DateTime $datetime):bool {

        return (($datetime >= $this->start) && ($datetime <= $this->end));

    }

    /**
     * ### Check if period is currently in progress
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Period::inPeriod() To check if provided datetime is inside this period.
     * @uses \FireHub\Core\Support\Zwick\DateTime::now() To create datetime with the current date and time.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->inProgress();
     *
     * // false
     * ```
     *
     * @return bool True if the period is currently in progress, false otherwise.
     */
    public function inProgress ():bool {

        return $this->inPeriod(DateTime::now());

    }

    /**
     * ### Get the start date of the period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime As return-
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->getStart();
     *
     * // 2020-01-01 12:00:00
     * ```
     *
     * @return \FireHub\Core\Support\Zwick\DateTime Start date of the period.
     */
    public function getStart ():DateTime {

        return $this->start;

    }

    /**
     * ### Get the end date of the period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->getEnd();
     *
     * // 2021-01-01 12:00:00
     * ```
     *
     * @return \FireHub\Core\Support\Zwick\DateTime End date of the period.
     */
    public function getEnd ():DateTime {

        return $this->end;

    }

    /**
     * ### Change start date of the period
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->since(DateTime::from('2019-01-01 12:00:00'));
     *
     * // 2019-01-01 12:00:00 – 2021-01-01 12:00:00
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\DateTime $datetime <p>
     * The start date of the period.
     * </p>
     *
     * @return $this This period.
     */
    public function since (DateTime $datetime):self {

        $this->start = $datetime;

        return $this;

    }

    /**
     * ### Change end date of the period
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->until(DateTime::from('2022-01-01 12:00:00'));
     *
     * // 2020-01-01 12:00:00 – 2022-01-01 12:00:00
     * ```
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime As parameter.
     *
     * @param \FireHub\Core\Support\Zwick\DateTime $datetime <p>
     * The start date of the period.
     * </p>
     *
     * @return $this This period.
     */
    public function until (DateTime $datetime):self {

        $this->end = $datetime;

        return $this;

    }

    /**
     * ### Reduce the start of the period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Timespan As parameter.
     * @uses \FireHub\Core\Support\Zwick\DateTime::sub() To subtract an timespan to datetime.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Zwick\Timespan;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->reduceStart(Timespan::months(2));
     *
     * // 2019-11-01 12:00:00 – 2021-01-01 12:00:00
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\Timespan $timespan <p>
     * Timespan to use.
     * </p>
     *
     * @return $this This period.
     */
    public function reduceStart (Timespan $timespan):self {

        $this->start->sub($timespan);

        return $this;

    }

    /**
     * ### Extend the start of the period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Timespan As parameter.
     * @uses \FireHub\Core\Support\Zwick\DateTime::add() To add a timespan to datetime.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Zwick\Timespan;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->extendStart(Timespan::months(2));
     *
     * // 2020-03-01 12:00:00 – 2021-01-01 12:00:00
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\Timespan $timespan <p>
     * Timespan to use.
     * </p>
     *
     * @return $this This period.
     */
    public function extendStart (Timespan $timespan):self {

        $this->start->add($timespan);

        return $this;

    }

    /**
     * ### Reduce the end of the period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Timespan As parameter.
     * @uses \FireHub\Core\Support\Zwick\DateTime::sub() To subtract an timespan to datetime.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Zwick\Timespan;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->reduceEnd(Timespan::months(2));
     *
     * // 2020-01-01 12:00:00 – 2020-11-01 12:00:00
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\Timespan $timespan <p>
     * Timespan to use.
     * </p>
     *
     * @return $this This period.
     */
    public function reduceEnd (Timespan $timespan):self {

        $this->end->sub($timespan);

        return $this;

    }

    /**
     * ### Extend the end of the period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Timespan As parameter.
     * @uses \FireHub\Core\Support\Zwick\DateTime::add() To add a timespan to datetime.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     * use FireHub\Core\Support\Zwick\Timespan;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * $period = Period::between($datetime1, $datetime2);
     *
     * $period->extendEnd(Timespan::months(2));
     *
     * // 2020-01-01 12:00:00 – 2021-03-01 12:00:00
     * ```
     *
     * @param \FireHub\Core\Support\Zwick\Timespan $timespan <p>
     * Timespan to use.
     * </p>
     *
     * @return $this This period.
     */
    public function extendEnd (Timespan $timespan):self {

        $this->end->add($timespan);

        return $this;

    }

    /**
     * ### Get duration of a period
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::difference() To get the difference between two dates.
     * @uses \FireHub\Core\Support\Zwick\Timespan As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * Period::between($datetime1, $datetime2);
     *
     * $period->duration();
     * ```
     *
     * @throws Exception Exception in case of an error.
     *
     * @return \FireHub\Core\Support\Zwick\Timespan Duration of a period.
     */
    public function duration ():Timespan {

        return $this->end->difference($this->start);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\DateTime::parse() To get date and/ or time according to the given format.
     * @uses \FireHub\Core\Support\Enums\DateTime\Format\Predefined::DATE_MICRO_TIME As date\time format.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\Period;
     * use FireHub\Core\Support\Zwick\DateTime;
     *
     * $datetime1 = DateTime::from('2020-01-01 12:00:00');
     * $datetime2 = DateTime::from('2021-01-01 12:00:00');
     *
     * echo Period::between($datetime1, $datetime2);
     *
     * // 2020-01-01 12:00:00.100000 – 2021-01-01 12:00:00.100000
     * ```
     */
    public function __toString ():string {

        return $this->start->parse(Predefined::DATE_MICRO_TIME)
            .' - '
            .$this->end->parse(Predefined::DATE_MICRO_TIME);

    }

}