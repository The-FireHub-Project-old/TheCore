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

use FireHub\Core\Support\LowLevel\ {
    DataIs, StrMB
};
use FireHub\Core\Support\Enums\String\ {
    CaseFolding, Expression\Modifier
};

use const FireHub\Core\Support\Constants\Number\MAX;

/**
 * ### Case-insensitive string high-level class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @api
 */
final class IStr extends Str {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::startsWith() To check if a string starts with a given value.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert raw string.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::toLower() To make a string lowercase.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->startsWith('fire');
     *
     * // true
     * ```
     */
    public function startsWith (string $value):bool {

        $string = $this->string;

        return StrMB::startsWith(
            StrMB::convert($value, CaseFolding::LOWER, $this->encoding),
            StrMB::convert($string, CaseFolding::LOWER, $this->encoding)
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::endsWith() To check if a string ends with a given value.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert raw string.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::toLower() To make a string lowercase.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->endsWith('hub');
     *
     * // true
     * ```
     */
    public function endsWith (string $value):bool {

        $string = $this->string;

        return StrMB::endsWith(
            StrMB::convert($value, CaseFolding::LOWER, $this->encoding),
            StrMB::convert($string, CaseFolding::LOWER, $this->encoding)
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::contains() To check if a string contains value.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert the string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To lowercase string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->contains('fire');
     *
     * // true
     * ```
     */
    public function contains (string $value):bool {

        $string = $this->string;

        return StrMB::contains(
            StrMB::convert($value, CaseFolding::LOWER, $this->encoding),
            StrMB::convert($string, CaseFolding::LOWER, $this->encoding)
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert the string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To lowercase string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->contains('firehub');
     *
     * // true
     * ```
     */
    public function equals (string $value):bool {

        $string = $this->string;

        return StrMB::convert($value, CaseFolding::LOWER, $this->encoding)
            === StrMB::convert($string, CaseFolding::LOWER, $this->encoding);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs To check if expression return array.
     * @uses \FireHub\Core\Support\Constants\Number\MAX To set maximum PHP integer.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier::MULTIBYTE To use multibyte strings.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier::CASELESS To use caseless strings.
     */
    public function break (string $separator, int $limit = MAX):array {

        /** @phpstan-ignore-next-line */
        return DataIs::array(
            $exp = $this->expression()->split($limit, Modifier::MULTIBYTE, Modifier::CASELESS)->any()->custom($separator)
        ) ? $exp : [];

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::firstPart() To get the first part of a string.
     */
    public function carryFrom (string $find):self {

        $this->string = StrMB::firstPart(
            $find, $this->string, false,
            false, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::firstPart() To get the first part of a string.
     */
    public function carryUntil (string $find):self {

        $this->string = StrMB::firstPart(
            $find, $this->string, true,
            false, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::lastPart() To get the last part of a string.
     */
    public function carryFromLast (string $find):self {

        $this->string = StrMB::lastPart(
            $find, $this->string, false,
            false, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::lastPart() To get the last part of a string.
     */
    public function carryUntilLast (string $find):self {

        $this->string = StrMB::lastPart(
            $find, $this->string, true,
            false, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses self::expression() As regular expression.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier::MULTIBYTE To use multibyte strings.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier::CASELESS To use caseless strings.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->replace('H', 'X');
     *
     * // FireXub
     */
    public function replace (string $find, string $with):self {

        $this->string = (
            $exp = $this->expression()
            ->replace($with, Modifier::MULTIBYTE, Modifier::CASELESS)
            ->any()
            ->custom($find)
        ) instanceof self ? $exp->string() : '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::firstPosition() To find the position of the first occurrence of a substring in a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->indexOf('Web');
     *
     * // 8
     * ```
     */
    public function indexOf (string $find):int|false {

        return StrMB::firstPosition($find, $this->string, false, 0, $this->encoding);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::lastPosition() To find the position of the last occurrence of a substring in a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->lastIndexOf('e');
     *
     * // 9
     * ```
     */
    public function lastIndexOf (string $find):int|false {

        return StrMB::lastPosition($find, $this->string, false, 0, $this->encoding);

    }

}