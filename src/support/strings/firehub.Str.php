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

use FireHub\Core\Support\Contracts\HighLevel\ {
    Collectable, Strings
};
use FireHub\Core\Support\Char;
use FireHub\Core\Support\LowLevel\ {
    Arr, DataIs, NumInt, StrMB
};
use FireHub\Core\Support\Enums\Side;
use FireHub\Core\Support\Enums\String\ {
    CaseFolding, Encoding, Expression\Modifier
};
use Error, ValueError, Stringable;

use const FireHub\Core\Support\Constants\Number\MAX;

use function FireHub\Core\Support\Helpers\String\asBoolean;

/**
 * ### String high-level abstract class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
abstract class Str implements Strings {

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
     * @uses \FireHub\Core\Support\Str::chop() To chop a string to an array.
     * @uses \FireHub\Core\Support\Char::from() To create a new character from raw string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->toChars();
     * ```
     */
    public function toChars ():array {

        $chars = [];

        foreach ($this->chop() as $char)
            $chars[] = Char::from($char);

        return $chars;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\String\asBoolean() To convert raw string to boolean.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('Yes')->asBoolean();
     *
     * // true
     * ```
     */
    public function asBoolean ():bool {

        return asBoolean($this->string);

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
     * @uses \FireHub\Core\Support\LowLevel\StrMB::startsWith() To check if a string starts with a given value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->startsWithAny('Fire', 'test');
     *
     * // true
     * ```
     */
    public function startsWithAny (string ...$values):bool {

        foreach ($values as $value)
            if ($this->startsWith($value)) return true;

        return false;

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
     * @uses \FireHub\Core\Support\LowLevel\StrMB::endsWith() To check if a string ends with a given value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->endsWithAny('Hub', 'test');
     *
     * // true
     * ```
     */
    public function endsWithAny (string ...$values):bool {

        foreach ($values as $value)
            if ($this->endsWith($value)) return true;

        return false;

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
    public function containsAll (string ...$values):bool {

        foreach ($values as $value)
            if (!$this->contains($value)) return false;

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
    public function containsAny (string ...$values):bool {

        foreach ($values as $value)
            if ($this->contains($value)) return true;

        return false;

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
     * Str::from('FireHub')->equals('FireHub');
     *
     * // true
     * ```
     */
    public function equals (string $value):bool {

        return $this->string === $value;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::equals() To check if a string equals the provided values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->equalsAny('FireHub', 'Fi');
     *
     * // true
     * ```
     */
    public function equalsAny (string ...$values):bool {

        foreach ($values as $value)
            if ($this->equals($value)) return true;

        return false;

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
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::UPPER To uppercase the first character of a string.
     * @uses static::carry() To carry parts of the string.
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
                (clone $this)->carry(0, 1)->string,
                CaseFolding::UPPER,
                $this->encoding
            ).$this->carry(1);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To perform case folding on a string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To lowercase the first character of a string.
     * @uses static::carry() To carry parts of the string.
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
                (clone $this)->carry(0, 1)->string,
                CaseFolding::LOWER,
                $this->encoding
            ).$this->carry(1);

        return $this;

    }

    /**
     * ### Swap lower and upper cases on string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::toChars() To break string into characters.
     * @uses \FireHub\Core\Support\Char::toUpper() To make a character uppercase.
     * @uses \FireHub\Core\Support\Char::toLower() To make a character lowercase.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier::MULTIBYTE To use multibyte strings.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->swapCase();
     *
     * // fIREhUB
     * ```
     *
     * @return $this This string.
     */
    public function swapCase ():self {

        $string = '';
        foreach ($this->toChars() as $char)
            $string .= $char->expression()->check(Modifier::MULTIBYTE)->is()->lower()
                ? $char->toUpper()
                : $char->toLower();

        $this->string = $string;

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
     * @note [[StrSafe#stripSlashes()]] is not recursive. If you want to apply this function to multidimensional
     * array, you need to use a recursive function.
     * @tip [[StrSafe#stripSlashes()]] can be used if you aren't inserting this data into a place (such as a database)
     * that requires escaping. For example, if you're simply outputting data straight from an HTML form.
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
     * @inheritDoc
     *
     * @since 1.0.0
     *
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
     */
    public function quoteMeta ():self {

        $this->string = StrMB::quoteMeta($this->string);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::carryFrom() To cary from part of the string.
     * @uses \FireHub\Core\Support\Strings\Str::carryUntilLast() To cary until the last part of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHubFireHubFireHub')->between('F', 'H');
     *
     * // FireHubFireHubFire
     */
    public function between (string $start, string $end):self {

        return $this->carryFrom($start)->carryUntilLast($end);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::carryFrom() To cary from part of the string.
     * @uses \FireHub\Core\Support\Strings\Str::carryUntil() To cary until the part of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHubFireHubFireHub')->betweenFirst('F', 'H');
     *
     * // Fire
     */
    public function betweenFirst (string $start, string $end):self {

        return $this->carryFrom($start)->carryUntil($end);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::carryFromLast() To cary from the last part of the string.
     * @uses \FireHub\Core\Support\Strings\Str::carryUntilLast() To cary until the last part of a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('Fire')->betweenLast('F', 'H');
     *
     * // Fire
     */
    public function betweenLast (string $start, string $end):self {

        return $this->carryFromLast($start)->carryUntilLast($end);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\NumInt::max() To turn negative $from to 0.
     * @uses \FireHub\Core\Support\Strings\Str::carry() To carry with part of the string.
     * @uses \FireHub\Core\Support\Str::length() To get length of current string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->slice(3);
     *
     * // Fir
     * ```
     * @example Getting slice of string with passed $until argument.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->slice(3, 5);
     *
     * // eHu
     * ```
     * @example Getting slice of string with negative $until argument.
     *  ```php
     *  use FireHub\Core\Support\Str;
     *
     *  Str::from('FireHub')->slice(1, -1);
     *
     *  // ireHu
     *  ```
     */
    public function slice (int $from, ?int $until = null):self {

        return $this->carry(
            $from = NumInt::max($from, 0), match (true) {
                $until === null => $this->length(),
                $until >= 0 && $until <= $from => 0,
                $until < 0 => $this->length() + $until - $from,
                default => $until - $from
            }
        );

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
     * @example $from and $length parameters can also be negative.
     *  ```php
     *  use FireHub\Core\Support\Str;
     *
     *  Str::from('FireHub')->carry(-3, -1);
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
    public function carryFrom (string $find):self {

        $this->string = StrMB::firstPart(
            $find, $this->string, false, true, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses static::carry() To get last part for string.
     * @uses static::indexOf() To get position of $find.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::length() To get length for $find.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->carryAfter('Web ');
     *
     * // App
     * ```
     */
    public function carryAfter (string $find):self {

        return $this->carry($this->indexOf($find) + StrMB::length($find, $this->encoding));

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
    public function carryUntil (string $find):self {

        $this->string = StrMB::firstPart(
            $find, $this->string, true, true, $this->encoding
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
    public function carryFromLast (string $find):self {

        $this->string = StrMB::lastPart(
            $find, $this->string, false, true, $this->encoding
        ) ?: '';

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses static::carry() To get last part for string.
     * @uses static::lastIndexOf() To get lst position of $find.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::length() To get length for $find.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub Web App')->carryAfter('Web ');
     *
     * // App
     * ```
     */
    public function carryAfterLast (string $find):self {

        return $this->carry($this->lastIndexOf($find) + StrMB::length($find, $this->encoding));

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
    public function carryUntilLast (string $find):self {

        $this->string = StrMB::lastPart(
            $find, $this->string, true, true, $this->encoding
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

        return ($exp = $this->expression()
            ->replace($with, Modifier::MULTIBYTE)
            ->any()
            ->custom($find)
        ) instanceof $this ? $exp : $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses static::replace() To replace all occurrences of the search string with the replacement string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('1122')->replaceRecursive(['1' => '2', '2' => '1']);
     *
     * // 1111
     */
    public function replaceRecursive (array $rules):self {

        foreach ($rules as $find => $with) $this->replace((string)$find, $with);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::repeat() To repeat a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->repeat(3);
     *
     * // FireHubFireHubFireHubFireHub
     * ```
     * @example With custom separator.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->repeat(3, '-');
     *
     * // FireHub-FireHub-FireHub-FireHub
     * ```
     *
     * @note If $times is less than 1, original string will be returned.
     */
    public function repeat (int $times, string $separator = ''):self {

        $this->string = StrMB::repeat($this->string, $times + 1, $separator);

        return $this;

    }

    /**
     * ### Reverse order of characters
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::chop() To chop a string to an array.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::implode() To join string characters.
     * @uses \FireHub\Core\Support\LowLevel\Arr::reverse() To reverse string characters.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->reverse();
     *
     * // buHeriF
     * ```
     *
     * @return $this This string.
     */
    final public function reverse ():self {

        $this->string = StrMB::implode(Arr::reverse($this->chop()));

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Side::RIGHT As parameter.
     * @uses \FireHub\Core\Support\Enums\Side::LEFT As parameter.
     * @uses \FireHub\Core\Support\Enums\Side::BOTH As parameter.
     * @uses \FireHub\Core\Support\Str::length() To get string length.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::repeat() To repeat a string.
     * @uses \FireHub\Core\Support\LowLevel\NumInt::floor() To round fractions down.
     * @uses \FireHub\Core\Support\LowLevel\NumInt::ceil() To round fractions up.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     * use FireHub\Core\Support\Enums\Side;
     *
     * Str::from('FireHub')->pad(10, '_');
     *
     * // ___FireHub
     * ```
     * @example With side argument.
     * ```php
     * use FireHub\Core\Support\Str;
     * use FireHub\Core\Support\Enums\Side;
     *
     * Str::from('FireHub')->pad(10, '-', Side::RIGHT);
     *
     * // FireHub---
     * ```
     *
     * @throws Error If the pad is empty.
     */
    public function pad (int $length, string $pad = " ", Side $side = Side::BOTH):self {

        $final_length = ($final_length = $length - $this->length()) > 0 ? $final_length : 0;

        $half_length = ($half_length = $final_length / 2) > 0 ? $half_length : 0;

        return match ($side) {
            Side::LEFT => $this->prepend(StrMB::repeat($pad, $final_length)),
            Side::RIGHT => $this->append(StrMB::repeat($pad, $final_length)),
            default => $this->prepend(StrMB::repeat($pad, NumInt::floor($half_length)))
                ->append(StrMB::repeat($pad, NumInt::ceil($half_length)))
        };

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
     * Str::from('FireHub')->prepend('Text-');
     *
     * // Text-FireHub
     * ```
     */
    public function prepend (string $prefix):self {

        $this->string = $prefix.$this->string;

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
     * Str::from('FireHub')->append('-text');
     *
     * // FireHub-text
     * ```
     */
    public function append (string $suffix):self {

        $this->string = $this->string.$suffix;

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::startsWith() To check if a string starts with a given value.
     * @uses \FireHub\Core\Support\Str::prepend() To prepend the given string to the current string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->ensureStartsWith('The ');
     *
     * // The FireHub
     * ```
     */
    public function ensurePrefix (string $prefix):self {

        return $this->startsWith($prefix) ? $this : $this->prepend($prefix);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::endsWith() To check if a string ends with a given value.
     * @uses \FireHub\Core\Support\Str::append() To append the given string to the current string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->ensureEndsWith(' Framework');
     *
     * // FireHub Framework
     * ```
     */
    public function ensureSuffix (string $suffix):self {

        return $this->endsWith($suffix) ? $this : $this->append($suffix);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::startsWith() To check if a string starts with a given $prefix.
     * @uses \FireHub\Core\Support\Str::carry() To carry with part of the string.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::length() To get $prefix length.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->removePrefix('Fire');
     *
     * // Hub
     * ```
     */
    public function removePrefix (string $prefix):self {

        return $this->startsWith($prefix)
            ? $this->carry(StrMB::length($prefix, $this->encoding))
            : $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::endsWith() To check if a string ends with a given $suffix.
     * @uses \FireHub\Core\Support\Str::carry() To carry with part of the string.
     * @uses \FireHub\Core\Support\Str::length() To get string length.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::length() To get $suffix length.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->removeSuffix('Hub');
     *
     * // Fire
     */
    public function removeSuffix (string $suffix):self {

        return $this->endsWith($suffix)
            ? $this->carry(0, $this->length() - StrMB::length($suffix, $this->encoding))
            : $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::append() To append $with argument.
     * @uses \FireHub\Core\Support\Strings\Str::prepend() To prepend $with argument.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->surround('-');
     *
     * // -FireHub-
     * ```
     */
    public function surround (string $with):self {

        return $this->append($with)->prepend($with);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::range() To create an array containing a range of elements.
     * @uses \FireHub\Core\Support\LowLevel\Arr::shuffle() To shuffle an array.
     * @uses \FireHub\Core\Support\Str::length() To get string length.
     * @uses \FireHub\Core\Support\Str::part() To get part of string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->shuffle();
     *
     * // rHiuebF
     * ```
     */
    public function shuffle ():self {

        $characters = Arr::range(0, $this->length() - 1);
        Arr::shuffle($characters);

        $string = '';
        foreach ($characters as $character)
            $string .= StrMB::part($this->string, $character, 1); // @phpstan-ignore-line $character is int at this point

        $this->string = $string;

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
     * @note Because trim() trims characters from the beginning and end of a string, it may be confusing when characters
     * are (or are not) removed from the middle. Trim('abc', 'bad') removes both 'a' and 'b' because it trims 'a'
     * thus moving 'b' to the beginning to also be trimmed. So, this is why it "works" whereas trim('abc', 'b')
     * seemingly does not.
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
     * @uses \FireHub\Core\Support\LowLevel\StrMB::split() To return an array of string characters.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->chop();
     *
     * // ['F', 'i', 'r', 'e', 'H', 'u', 'b']
     * ```
     * @example Splitting string by custom length.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->chop(3);
     *
     * // ['Fir', 'eHu', 'b']
     * ```
     *
     * @throws Error If length is less than 1.
     */
    public function chop (int $length = 1):array {

        return StrMB::split($this->string, $length,$this->encoding);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Constants\Number\MAX To set maximum PHP integer.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::explode() To split a string by a string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->break('H');
     *
     * // ['Fire' 'hb']
     * ```
     * @example Splitting string by custom length.
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHubFireHubFireHub')->break('H', 2);
     *
     * // ['Fire' 'hbFireHubFireHub']
     * ```
     */
    public function break (string $separator, int $limit = MAX):array {

        return StrMB::explode($this->string, $separator, $limit);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::chop() To chop a string to an array.
     * @uses \FireHub\Core\Support\Str::length() To get string length.
     * @uses \FireHub\Core\Support\LowLevel\NumInt::ceil() To round fractions up for division of length and number of groups.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->group(3);
     *
     * // ['Fir', 'eHu', 'b']
     * ```
     *
     * @throws Error If number of groups is less than one.
     */
    public function group (int $number_of_groups):array {

        if ($number_of_groups < 1) throw new Error('Cannot have groups less then one.');

        return $this->chop((
            $size = NumInt::ceil($this->length() / $number_of_groups)) >= 1 ? $size : 1
        );

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
     * Str::from('FireHub Web App')->containTimes('b');
     *
     * // 2
     * ```
     */
    public function containTimes (string $value):int {

        return StrMB::partCount($this->string, $value, $this->encoding);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     *  @uses \FireHub\Core\Support\LowLevel\StrMB::length() To get string length.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Str;
     *
     * Str::from('FireHub')->length();
     *
     * // 7
     * ```
     */
    public function length ():int {

        return StrMB::length($this->string, $this->encoding);

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

        return StrMB::firstPosition($find, $this->string, true, 0, $this->encoding);

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

        return StrMB::lastPosition($find, $this->string, true, 0, $this->encoding);

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