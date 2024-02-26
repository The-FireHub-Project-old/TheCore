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
use FireHub\Core\Support\LowLevel\ {
    DataIs, RegexMB, StrMB
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
     * ### Checks if string is empty
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs To check if a string is numeric.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isEmpty();
     *
     * // false
     * ```
     *
     * @return bool True if string is empty, false otherwise.
     */
    final public function isEmpty ():bool {

        return empty($this->string) && !DataIs::numeric($this->string);

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isLower();
     *
     * // false
     *
     * @throws Error If we could not get current regex encoding.
     */
    final public function isLower ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isUpper();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isUpper ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isAlphabetic();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isAlphabetic ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isAlphanumeric();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isAlphanumeric ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isBlank();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isBlank ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isNumeric();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isNumeric ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isHexadecimal();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isHexadecimal ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isControl();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isControl ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isPrintable();
     *
     * // true
     * ```
     * @example Space is also printable.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from(' ')->isPrintable();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isPrintable ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isGraphical();
     *
     * // true
     * ```
     * @example Space is not graphical.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from(' ')->isGraphical();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isGraphical ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isPunctuation();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function isPunctuation ():bool {

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isASCII();
     *
     * // true
     * ```
     */
    public function isASCII ():bool {

        return StrMB::checkEncoding($this->string, Encoding::ASCII);

    }

    /**
     * ### Checks if first character of string uppercased
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::isEmpty() To check if the current string is empty.
     * @uses \FireHub\Core\Support\Char::from() To create character from string.
     * @uses \FireHub\Core\Support\Char::isUpper() To check if a first letter of the string is uppercased.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isCapitalized();
     *
     * // true
     * ```
     *
     * @return bool True if string is capitalized, false otherwise.
     */
    final public function isCapitalized ():bool {

        /** @phpstan-ignore-next-line Character is not empty at this point. */
        return !$this->isEmpty() && Char::from($this->string[0])->isUpper();

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\Core\Support\Str::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasLower();
     *
     * // true
     *
     * @throws Error If we could not get current regex encoding.
     */
    final public function hasLower ():bool {

        return $this->regexMatch('.*[[:lower:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasUpper();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasUpper ():bool {

        return $this->regexMatch('.*[[:upper:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasAlphabetic();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasAlphabetic ():bool {

        return $this->regexMatch('.*[[:alpha:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasAlphanumeric();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasAlphanumeric ():bool {

        return $this->regexMatch('.*[[:alnum:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasBlank();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasBlank ():bool {

        return $this->regexMatch('.*[[:space:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasNumeric();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasNumeric ():bool {

        return $this->regexMatch('.*[[:digit:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasHexadecimal();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasHexadecimal ():bool {

        return $this->regexMatch('.*[[:xdigit:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasControl();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasControl ():bool {

        return $this->regexMatch('.*[[:cntrl:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isPrintable();
     *
     * // true
     * ```
     * @example Space is also printable.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from(' ')->hasPrintable();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasPrintable ():bool {

        return $this->regexMatch('.*[[:print:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->isGraphical();
     *
     * // true
     * ```
     * @example Space is not graphical.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from(' ')->hasGraphical();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasGraphical ():bool {

        return $this->regexMatch('.*[[:graph:]]');

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
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->hasPunctuation();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     */
    public function hasPunctuation ():bool {

        return $this->regexMatch('.*[[:punct:]]');

    }

    /**
     * ### Change character encoding
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     * use FireHub\Core\Support\Enums\String\Encoding;
     *
     * Str::from('FireHub')->encoding(Encoding::UTF_8);
     * ```
     *
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding <p>
     * Character encoding.
     * </p>
     *
     * @throws Error If we could not get current encoding.
     * @throws ValueError If the value of encoding is an invalid encoding.
     *
     * @return $this|\FireHub\Core\Support\Enums\String\Encoding This character or current encoding.
     * @phpstan-return ($encoding is null ? \FireHub\Core\Support\Enums\String\Encoding : $this)
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
     * @uses \FireHub\Core\Support\LowLevel\StrMB::part() To get part of string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->carry(3);
     *
     * // eHub
     * ```
     * @example Getting part of string with passed length.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->carry(3, 2);
     *
     * // eH
     * ```
     * @example $from parameter can also be negative.
     *  ```php
     *  use FireHub\Core\Support\Str;
     *
     *  Str::from('FireHub')->carry(-3, 2);
     *
     *  // Hu
     *  ```
     */
    public function carry (int $from, ?int $length = null):self {

        $this->string = StrMB::part($this->string, $from, $length, $this->encoding);

        return $this;

    }

    /**
     * ### Get string as raw string
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
     *
     * @return string String as string.
     */
    public function string ():string {

        return $this->string;

    }

    /**
     * ### Perform a regular expression match
     *
     * Searches subject for a match to the regular expression given in a pattern.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::encoding() To set string encoding for multibyte regex.
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::match() To perform a regular expression match.
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

        $regex_encoding = RegexMB::encoding();

        RegexMB::encoding($this->encoding);

        $match = RegexMB::match($pattern, $this->string);

        RegexMB::encoding($regex_encoding);

        return $match;

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