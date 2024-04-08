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

use FireHub\Core\Support\Contracts\HighLevel\ {
    Collectable, Strings
};
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\LowLevel\ {
    DataIs, StrMB
};
use FireHub\Core\Support\Enums\String\Encoding;
use Error, ValueError, Stringable;

/**
 * ### String high-level class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @api
 */
class Str implements Strings {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param string $string <p>
     * String to use.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return void
     */
    final public function __construct (
        protected string $string,
        protected ?Encoding $encoding = null
    ) {}

    /**
     * ### Create a new string from raw string
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub');
     * ```
     * @example Creating new string with specific encoding.
     * ```php
     * use FireHub\Core\Support\Str;
     * use FireHub\Core\Support\Enums\String\Encoding;
     *
     * Str::from('FireHub', Encoding::UTF_8);
     * ```
     *
     * @param string $string <p>
     * String to use.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return static New string.
     */
    public static function from (string $string, ?Encoding $encoding = null):static {

        return new static($string, $encoding);

    }

    /**
     * ### Create a new string from array elements with a string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::implode() To join array elements with a string.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a list as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::fromList(['F', 'i', 'r', 'e', 'H', 'u', 'B']);
     *
     * // FireHub
     * ```
     * @example Creating with glue.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::fromList(['F', 'i', 'r', 'e', 'H', 'u', 'B'], '-');
     *
     * // F-i-r-e-H-u-b
     * ```
     *
     * @param array|Collectable $list <p>
     * <code><![CDATA[ array<array-key, null|scalar|Stringable>|\FireHub\Core\Support\Contracts\HighLevel\Collectable<int, \FireHub\Core\Support\Str> ]]></code>
     * The array of strings to implode.
     * </p>
     * @param string $glue [optional] <p>
     * The boundary string.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     * @phpstan-param array<array-key, null|scalar|Stringable>|\FireHub\Core\Support\Contracts\HighLevel\Collectable<int, \FireHub\Core\Support\Str> $list
     *
     * @throws Error If array item could not be converted to string.
     *
     * @return static New string containing a string representation of all the array elements in the same order,
     * with the separator string between each element.
     */
    public static function fromList (array|Collectable $list, string $glue = '', ?Encoding $encoding = null):static {

        return new static(
            StrMB::implode($list instanceof Collectable ? $list->all() : $list, $glue),
            $encoding
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression As return.
     */
    public function expression ():Expression {

        return new Expression($this);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::startsWith() To check if a string starts with a given value.
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

        return StrMB::startsWith($value, $this->string);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::endsWith() To check if a string ends with a given value.
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

        return StrMB::endsWith($value, $this->string);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::contains() To check if a string contains value.
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

        return StrMB::contains($value, $this->string);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::encoding() To get internal character encoding if default is not set.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     * use FireHub\Core\Support\Enums\String\Encoding;
     *
     * Str::from('FireHub')->encoding(Encoding::UTF_8);
     * ```
     *
     * @throws Error If we could not get current encoding.
     * @throws ValueError If the value of encoding is an invalid encoding.
     */
    public function encoding (?Encoding $encoding = null):self|Encoding {

        if ($encoding) {

            $this->encoding = $encoding;

            return $this;

        }

        return $this->encoding ?? StrMB::encoding();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::null() To check if $string is null or not.
     *
     * @example Get the string.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->string();
     *
     * // FireHub
     * ```
     * @example Set the string.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->string('FireHub Web App');
     *
     * // FireHub Web App
     * ```
     */
    public function string (string $string = null):self|string {

        if (DataIs::null($string)) return $this->string;

        $this->string = $string;

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * echo Str::from('FireHub');
     *
     * // FireHub
     * ```
     */
    public function __toString ():string {

        return $this->string;

    }

}