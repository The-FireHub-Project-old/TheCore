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

use FireHub\Core\Support\Strings\Str as aStr;
use FireHub\Core\Support\LowLevel\StrMB;
use FireHub\Core\Support\Enums\String\Encoding;
use Stringable;

/**
 * ### Case-sensitive string high-level class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @api
 */
class Str extends aStr {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function __construct (
        string|int|float|bool|null|Stringable $string,
        protected ?Encoding $encoding = null
    ) {

        $this->string = (string)$string;

    }

    /**
     * ### Replace all occurrences of search in a subject replaced with the given replacement value
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\StrMB::translate() To translate characters or replace substrings.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->replaceMultiple(['F' => 'M', 'H' => 'X']);
     *
     * // MireXub
     *
     * @param array<non-empty-string, string> $rules <p>
     * Find => Replace pattern rules.
     * </p>
     *
     * @return $this This string.
     */
    public function replaceMultiple (array $rules):self {

        $this->string = StrMB::translate($this->string, $rules);

        return $this;

    }

}