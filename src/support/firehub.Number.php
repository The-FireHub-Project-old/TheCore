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

namespace FireHub\Core\Support;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Contracts\HighLevel\Numbers;
use FireHub\Core\Support\LowLevel\ {
    Data, NumFloat
};
use FireHub\Core\Support\Enums\ {
    Data\Type, Number\Round
};

/**
 * ### Number high-level class
 *
 * Class allows you to manipulate numbers in various ways.
 * @since 1.0.0
 *
 * @api
 */
class Number implements Init, Numbers {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param float $number <p>
     * Number to use.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected float $number
    ) {}

    /**
     * ### Create a new number from raw number
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(10);
     * ```
     *
     * @param float $number <p>
     * Number to use.
     * </p>
     *
     * @return self New number.
     */
    public static function from (float $number):self {

        return new self($number);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(12)->isPositive();
     *
     * // true
     * ```
     */
    public function isPositive ():bool {

        return $this->number > 0;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(12)->isNegative();
     *
     * // false
     * ```
     */
    public function isNegative ():bool {

        return $this->number < 0;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::isFinite() To find whether a value is a legal finite number.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(1e308 * 2)->isFinite();
     *
     * // false
     * ```
     */
    public function isFinite ():bool {

        return NumFloat::isFinite($this->number);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::isInfinite() To find whether a value is infinite.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(1e308 * 2)->isInfinite();
     *
     * // true
     * ```
     */
    public function isInfinite ():bool {

        return NumFloat::isInfinite($this->number);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::isInfinite() To find whether a value is not a number.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(sqrt(-1))->isNan();
     *
     * // true
     * ```
     */
    public function isNan ():bool {

        return NumFloat::isNan($this->number);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Number::isNegative() To check if the number is negative.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(-12)->toPositive();
     *
     * // 12
     * ```
     */
    public function toPositive ():self {

        $this->number = $this->isNegative() ? -$this->number : $this->number;

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Number::isPositive() To check if the number is positive.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(12)->toNegative();
     *
     * // -12
     * ```
     */
    public function toNegative ():self {

        $this->number = $this->isPositive() ? -$this->number : $this->number;

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::absolute() To get absolute value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(-12)->absolute();
     *
     * // 12
     * ```
     */
    public function absolute ():self {

        $this->number = NumFloat::absolute($this->number);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::ceil() To round fractions up.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(12.5)->ceil();
     *
     * // 12
     * ```
     */
    public function ceil ():self {

        $this->number = NumFloat::ceil($this->number);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::floor() To round fractions down.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(12.5)->floor();
     *
     * // 12
     * ```
     */
    public function floor ():self {

        $this->number = NumFloat::floor($this->number);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_UP As default rounding.
     * @uses \FireHub\Core\Support\LowLevel\NumFloat::round() To round the number.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(12.5)->round();
     *
     * // 13
     * ```
     * @example Using different round mode.
     * ```php
     * use FireHub\Core\Support\Number;
     * use FireHub\Core\Support\Enums\Number\Round;
     *
     * $number = Number::from(12.5)->round(round: Round::HALF_DOWN);
     *
     * // 12
     * ```
     * @example Using different precision.
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(12.56)->round(1);
     *
     * // 12.6
     * ```
     */
    public function round (int $precision = 0, Round $round = Round::HALF_UP):self {

        $this->number = NumFloat::round($this->number, $precision, $round);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Number\Round::HALF_UP As default rounding.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set a data type.
     * @uses \FireHub\Core\Support\Number::round() To round a float.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT As data type.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(10.5)->asInt();
     *
     * // 11
     * ```
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     * use \FireHub\Core\Support\Enums\Number\Round;
     *
     * Number::from(10.5)->asInt(Round::HALF_DOWN);
     *
     * // 10
     * ```
     */
    public function asInt (Round $round = Round::HALF_UP):int {

        return Data::setType($this->round(0 ,$round)->number, Type::T_INT);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * Number::from(10)->asInt();
     *
     * // 10.0
     * ```
     */
    public function asFloat ():float {

        return $this->number;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * $number = Number::from(1000.54)->parse();
     *
     * // 1,000.54
     * ```
     */
    public function parse (int $decimals = 0, string $decimal_separator = '.', string $thousands_separator = ','):string {

        return NumFloat::format(
            $this->number,
            $decimals,
            $decimal_separator,
            $thousands_separator
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Number;
     *
     * echo Number::from(12);
     *
     * // 12
     * ```
     */
    public function __toString ():string {

        return (string)$this->number;

    }

}