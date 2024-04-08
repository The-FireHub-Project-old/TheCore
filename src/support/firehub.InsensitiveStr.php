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

use FireHub\Core\Support\LowLevel\StrMB;
use FireHub\Core\Support\Enums\String\CaseFolding;

/**
 * ### Case-insensitive string high-level class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @api
 */
final class InsensitiveStr extends Str {

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
     * Str::from('FireHub')->startsWith('Fire');
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
     * Str::from('FireHub')->endsWith('Hub');
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
     * Str::from('FireHub')->contains('ire');
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

}