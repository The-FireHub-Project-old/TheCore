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

namespace FireHub\Core\Support\Strings;

use FireHub\Core\Support\Contracts\HighLevel\Strings\StringIs as StringIsContract;
use FireHub\Core\Support\Char;
use FireHub\Core\Support\LowLevel\ {
    DataIs, StrMB
};
use FireHub\Core\Support\Enums\String\Encoding;
use Error;

/**
 * ### Strings checker
 * @since 1.0.0
 */
final class StringIs implements StringIsContract {

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
        private readonly string $string,
        private readonly ?Encoding $encoding = null
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs To check if a string is numeric.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->empty();
     *
     * // false
     * ```
     */
    public function empty ():bool {

        return empty($this->string) && !DataIs::numeric($this->string);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->lower();
     *
     * // false
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function lower ():bool {

        return $this->regexMatch('^[[:lower:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->upper();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function upper ():bool {

        return $this->regexMatch('^[[:upper:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->alphabetic();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function alphabetic ():bool {

        return $this->regexMatch('^[[:alpha:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->alphanumeric();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function alphanumeric ():bool {

        return $this->regexMatch('^[[:alnum:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->blank();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function blank ():bool {

        return $this->regexMatch('^[[:space:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->numeric();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function numeric ():bool {

        return $this->regexMatch('^[[:digit:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->hexadecimal();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hexadecimal ():bool {

        return $this->regexMatch('^[[:xdigit:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->control();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function control ():bool {

        return $this->regexMatch('^[[:cntrl:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->printable();
     *
     * // true
     * ```
     * @example Space is also printable.
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs(' '))->printable();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function printable ():bool {

        return $this->regexMatch('^[[:print:]]*$');

    }

    /**
     *
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->graphical();
     *
     * // true
     * ```
     * @example Space is not graphical.
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs(' '))->graphical();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function graphical ():bool {

        return $this->regexMatch('^[[:graph:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->punctuation();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function punctuation ():bool {

        return $this->regexMatch('^[[:punct:]]*$');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::checkEncoding() To check if character is valid ASCII.
     * @uses \FireHub\Core\Support\Enums\String\Encoding::ASCII As string encoding.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->ascii();
     *
     * // true
     * ```
     */
    public function ascii ():bool {

        return StrMB::checkEncoding($this->string, Encoding::ASCII);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\StringIs::empty() To check if the current string is empty.
     * @uses \FireHub\Core\Support\Char::from() To create character from string.
     * @uses \FireHub\Core\Support\Char::isUpper() To check if a first letter of the string is uppercased.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::part() To get the first character of the string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\StringIs;
     *
     * (new StringIs('FireHub'))->capitalized();
     *
     * // true
     * ```
     */
    public function capitalized ():bool {

        return !$this->empty()
            && Char::from(
            /** @phpstan-ignore-next-line Character is not empty at this point */
                StrMB::part($this->string, 0, 1, $this->encoding),
                $this->encoding
            )->isUpper();

    }

    /**
     * ### Perform a regular expression match
     *
     * Searches subject for a match to the regular expression given in a pattern.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression::match() To perform a regular expression match.
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if string matches the regular expression pattern, false if not.
     */
    private function regexMatch (string $pattern):bool {

        return (new Expression($this->string, $this->encoding))
            ->match($pattern, true);

    }

}