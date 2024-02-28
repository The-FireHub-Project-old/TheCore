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
use FireHub\Core\Support\Strings\ {
    Expression, StringHas, StringIs
};
use FireHub\Core\Support\LowLevel\StrMB;
use FireHub\Core\Support\Enums\String\ {
    CaseFolding, Encoding
};
use Error, Stringable;

/**
 * ### String high-level class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @api
 */
final class Str implements Strings {

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
    public function __construct (
        private string $string,
        private ?Encoding $encoding = null
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
     * @return self New string.
     */
    public static function from (string $string, ?Encoding $encoding = null):self {

        return new self($string, $encoding);

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
     * @return self New string containing a string representation of all the array elements in the same order,
     * with the separator string between each element.
     */
    public static function fromList (array|Collectable $list, string $glue = '', ?Encoding $encoding = null):self {

        return new self(
            StrMB::implode($list instanceof Collectable ? $list->all() : $list, $glue),
            $encoding
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\StringIs As string checker.
     */
    public function is ():StringIs {

        return new StringIs($this->string, $this->encoding);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\StringHas As string checker.
     */
    public function has ():StringHas {

        return new StringHas($this->string, $this->encoding);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression Regular expression.
     */
    public function expression ():Expression {

        return new Expression($this->string, $this->encoding);

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
     * Str::from('FireHub')->string();
     *
     * // FireHub
     * ```
     */
    public function string ():string {

        return $this->string;

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