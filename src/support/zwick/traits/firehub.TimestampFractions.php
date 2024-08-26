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

use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\ {
    Side, Data\Type
};
use FireHub\Core\Support\LowLevel\ {
    DateAndTime, Data
};

/**
 * ### This trait allows usage of microseconds in timestamps
 * @since 1.0.0
 */
trait TimestampFractions {

    /**
     * ### Get microtime as string
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
     * use FireHub\Core\Support\Zwick\MicroUnixTimestamp;
     *
     * $timestamp = MicroUnixTimestamp::from('1970-01-01 12:45:31.452212');
     *
     * $timestamp->microtime();
     *
     * // 1724412073.452212
     * ```
     *
     * @return \FireHub\Core\Support\Str Formatted microtime.
     */
    public function microtime ():Str {

        return Str::from($this->seconds)
            ->append('.')
            ->append(Str::from($this->fractions)->pad(6, '0', Side::LEFT)->string());

    }

    /**
     * ### Create fractions
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::parse() To get fractions.
     * @uses \FireHub\Core\Support\LowLevel\DateAndTime::microtime() If needs current microtime.
     * @uses \FireHub\Core\Support\LowLevel\Data::setType() To set fractions to int.
     * @uses \FireHub\Core\Support\Enums\Data\Type::T_INT As fraction type.
     *
     * @param non-empty-string $datetime <p>
     * A date/time string.
     * </p>
     *
     * @return void
     */
    private function createFractions (string $datetime):void {

        /** @phpstan-ignore-next-line  Fractions are always between 0 and 999,999 */
        $this->fractions = ($parse = DateAndTime::parse($datetime)) && $parse['fraction'] !== false
            /** @phpstan-ignore-next-line  Fractions are always float */
            ? Data::setType($parse['fraction'] * 1000000, Type::T_INT)
            : DateAndTime::microtime();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::string() To get microtime as string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Zwick\MicroUnixTimestamp;
     *
     * echo MicroUnixTimestamp::from('1970-01-01 12:45:31.452212');
     *
     * // 1724412073.452212
     * ```
     */
    public function __toString ():string {

        return $this->microtime()->string();

    }

}