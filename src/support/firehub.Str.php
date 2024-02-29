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
use FireHub\Core\Support\LowLevel\ {
    Arr, StrMB
};
use FireHub\Core\Support\Enums\ {
    Side, String\CaseFolding, String\Encoding
};
use Error, Stringable, ValueError;

/**
 * ### String high-level class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
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
     * @uses \FireHub\Core\Support\LowLevel\StrMB::startsWith() To check if a string starts with a given value.
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
    public function startsWith (string $value, bool $case_sensitive = true):bool {

        $string = $this->string;

        return $case_sensitive
            ? StrMB::startsWith($value, $string)
            : StrMB::startsWith(
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
    public function endsWith (string $value, bool $case_sensitive = true):bool {

        $string = $this->string;

        return $case_sensitive
            ? StrMB::endsWith($value, $string)
            : StrMB::endsWith(
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
    public function contains (string $value, bool $case_sensitive = true):bool {

        $string = $this->string;

        return $case_sensitive
            ? StrMB::contains($value, $string)
            : StrMB::contains(
                StrMB::convert($value, CaseFolding::LOWER, $this->encoding),
                StrMB::convert($string, CaseFolding::LOWER, $this->encoding)
            );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::contains() To check if a string contains any of the provided values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->containsAll('ire', 'Fi');
     *
     * // true
     * ```
     */
    public function containsAll (array $values, bool $case_sensitive = true):bool {

        foreach ($values as $value)
            if (!$this->contains($value, $case_sensitive)) return false;

        return true;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::contains() To check if a string contains all the provided values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->containsAny('ire', 'Fi');
     *
     * // true
     * ```
     */
    public function containsAny (array $values, bool $case_sensitive = true):bool {

        foreach ($values as $value)
            if ($this->contains($value, $case_sensitive)) return true;

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::inArray() To check if a value exists in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->equalToAny('FireHub', 'Web', 'App');
     *
     * // true
     * ```
     */
    public function equalToAny (array $values):bool {

        return Arr::inArray($this->string, $values);

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
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To convert string to lowercase.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->toLower();
     *
     * // firehub
     * ```
     */
    public function toLower ():self {

        $this->string = StrMB::convert($this->string, CaseFolding::LOWER, $this->encoding);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::UPPER To convert string to uppercase.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->toUpper();
     *
     * // FIREHUB
     * ```
     */
    public function toUpper ():self {

        $this->string = StrMB::convert($this->string, CaseFolding::UPPER, $this->encoding);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::TITLE To convert string to title-case.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub web app')->toTitle();
     *
     * // Firehub Web App
     * ```
     */
    public function toTitle ():self {

        $this->string = StrMB::convert($this->string, CaseFolding::TITLE, $this->encoding);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To perform case folding on a string.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::part() To get the first character of a string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::UPPER To uppercase the first character of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('firehub')->capitalize();
     *
     * // Firehub
     * ```
     */
    public function capitalize ():self {

        $this->string = StrMB::convert(
                StrMB::part($this->string, 0, 1, $this->encoding),
                CaseFolding::UPPER,
                $this->encoding
            ).StrMB::part($this->string, 1, encoding: $this->encoding);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To perform case folding on a string.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::part() To get the first character of a string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To lowercase the first character of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->deCapitalize();
     *
     * // fireHub
     * ```
     */
    public function deCapitalize ():self {

        $this->string = StrMB::convert(
                StrMB::part($this->string, 0, 1, $this->encoding),
                CaseFolding::LOWER,
                $this->encoding
            ).StrMB::part($this->string, 1, encoding: $this->encoding);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::addSlashes() To quote string with slashes.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from("Is your name O'Reilly?")->addSlashes();
     *
     * // Is your name O\'Reilly?
     * ```
     *
     * @caution The [[Str#addSlashes()]] is sometimes incorrectly used to try to prevent SQL Injection. Instead,
     * database-specific escaping functions and/or prepared statements should be used.
     */
    public function addSlashes ():self {

        $this->string = StrMB::addSlashes($this->string);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::stripSlashes() To un-quote a quoted string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('Is your name O\'Reilly?')->stripSlashes();
     *
     * // Is your name O'Reilly?
     * ```
     *
     * @note [[Str#stripSlashes()]] is not recursive. If you want to apply this function to multidimensional
     * array, you need to use a recursive function.
     * @tip [[Str#stripSlashes()]] can be used if you aren't inserting this data into a place (such as a database)
     * that requires escaping.
     * For example, if you're simply outputting data straight from an HTML form.
     */
    public function stripSlashes ():self {

        $this->string = StrMB::stripSlashes($this->string);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::stripTags() To strip HTML and PHP tags from a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('<p>FireHub</p>')->stripTags();
     *
     * // FireHub
     * ```
     * @example With $allowed_tags parameter, you allow certain tags to be excluded for the strip.
     *  ```php
     *  use FireHub\Core\Support\Str;
     *
     *  Str::from('<p><i><a>FireHub</a></i></p>')->stripTags('<p>');
     *
     *  // <p>FireHub</p>
     *  ```
     * @example Alternatively, you can use array in $allowed_tags parameter to allow multiple tags.
     *  ```php
     *  use FireHub\Core\Support\Str;
     *
     *  Str::from('<p><i><a>FireHub</a></i></p>')->stripTags(['<p>', '<a>']);
     *
     *  // <p><a>FireHub</a></p>
     *  ```
     *
     * @note Self-closing XHTML tags are ignored and only non-self-closing tags should be used in allowed_tags.
     * For example, to allow both <br> and <br/>, you should use: <br>.
     * </p>
     */
    public function stripTags (null|string|array $allowed_tags = null):self {

        $this->string = StrMB::stripTags($this->string, $allowed_tags);

        return $this;

    }

    /**
     * ### Quote meta characters
     *
     * Returns a version of str with a backslash character (\) before every character that is among these: .\+*?[^]($).
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\StringIs::empty() To check if string is empty.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::quoteMeta() To quote meta characters.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub?')->quoteMeta();
     *
     * // FireHub\?
     * ```
     *
     * @return $this This string.
     */
    public function quoteMeta ():self {

        /** @phpstan-ignore-next-line Character is not empty at this point */
        if (!$this->is()->empty()) $this->string = StrMB::quoteMeta($this->string);

        return $this;

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
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::firstPart() To get the first part of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->carryFrom('Web');
     *
     * // Web App
     * ```
     */
    public function carryFrom (string $find, bool $case_sensitive = true):self {

        $this->string = StrMB::firstPart(
            $find, $this->string, false,
            $case_sensitive, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::firstPart() To get the first part of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->carryUntil('Web');
     *
     * // FireHub
     * ```
     */
    public function carryUntil (string $find, bool $case_sensitive = true):self {

        $this->string = StrMB::firstPart(
            $find, $this->string, true,
            $case_sensitive, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::lastPart() To get the last part of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->carryFromLast('Web');
     *
     * // Web App
     * ```
     */
    public function carryFromLast (string $find, bool $case_sensitive = true):self {

        $this->string = StrMB::lastPart(
            $find, $this->string, false,
            $case_sensitive, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::lastPart() To get the last part of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->carryUntilLast('Web');
     *
     * // FireHub
     * ```
     */
    public function carryUntilLast (string $find, bool $case_sensitive = true):self {

        $this->string = StrMB::lastPart(
            $find, $this->string, true,
            $case_sensitive, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Side::BOTH As parameter.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::trim() To strip whitespace (or other characters) from the string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from(" FireHub \n\r")->trim();
     *
     * // FireHub
     * ```
     * @example Trim only left side with first parameter.
     * ```php
     * use FireHub\Core\Support\Str;
     * use FireHub\Core\Support\Enums\Side;
     *
     * Str::from("FireHub \n\r")->trim(Side::LEFT);
     *
     * // FireHub \n\r
     * ```
     * @example Trim with a custom set of characters.
     * ```php
     * use FireHub\Core\Support\Str;
     * use FireHub\Core\Support\Enums\Side;
     *
     * Str::from("FireHub \n\r")->trim(Side::RIGHT, "\n\r ");
     *
     * // FireHub
     * ```
     *
     * @note Because [[Str#trim()]] trims characters from the beginning and end of a string, it may be confusing when
     * characters are (or are not) removed from the middle.
     * Trim('abc', 'bad') removes both 'a' and 'b' because it trims 'a' thus moving 'b' to the beginning to also be
     * trimmed.
     * So, this is why it "works" whereas trim('abc', 'b') seemingly does not.
     */
    public function trim (Side $side = Side::BOTH, string $characters = " \n\r\t\v\x00"):self {

        $this->string = StrMB::trim($this->string, $side, $characters);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression::replace() To perform a regular expression search and replace.
     * @uses \FireHub\Core\Support\Str::trim() To strip whitespace (or other characters) from the beginning and end
     * of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from(' Fire
     *  Hub ')->normalize();
     *
     * // FireHub
     * ```
     */
    public function streamline ():self {

        $this->string = $this->expression()->replace('\s+',' ')->string();

        return $this->trim();

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