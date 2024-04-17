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

namespace FireHub\Core\Support\Contracts\HighLevel;

use FireHub\Core\Support\Contracts\Stringable;
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\Enums\ {
    Side, String\Encoding
};

use const FireHub\Core\Support\Constants\Number\MAX;

/**
 * ### Strings contract
 *
 * A string is a stream of character.
 * @since 1.0.0
 */
interface Strings extends Stringable {

    /**
     * ### Regular expression
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Strings\Expression Regular expression.
     */
    public function expression ():Expression;

    /**
     *  ### Boolean representation of the given logical string value
     *
     * True - 'true', '1', 'on', 'yes', positive-int
     * False - 'false', '0','off', 'no', only blanks, non-positive-int
     * For all other strings, the return value is a result of a boolean cast.
     * @since 1.0.0
     *
     * @return bool True or false, based on boolean representation of the given logical string value.
     */
    public function asBoolean ():bool;

    /**
     * ### Checks if a string starts with a given value
     *
     * Performs a check indicating if $string begins with $value.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string starts with value, false otherwise.
     */
    public function startsWith (string $value):bool;

    /**
     * ### Checks if a string starts with any of the given values
     *
     * Performs a check indicating if $string begins with $value.
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if string starts with any of the given values, false otherwise.
     */
    public function startsWithAny (string ...$values):bool;

    /**
     * ### Checks if a string ends with a given value
     *
     * Performs a check indicating if $string ends with $value.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string ends with value, false otherwise.
     */
    public function endsWith (string $value):bool;

    /**
     * ### Checks if a string ends with any of the given values
     *
     * Performs a check indicating if $string begins with $value.
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if string ends with any of the given values, false otherwise.
     */
    public function endsWithAny (string ...$values):bool;

    /**
     * ### Checks if string contains value
     *
     * Performs a check indicating if $string is contained in $string.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if a string contains value, false otherwise.
     */
    public function contains (string $value):bool;

    /**
     * ### Checks if string contains all values
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if a string contains all values, false otherwise.
     */
    public function containsAll (string ...$values):bool;

    /**
     * ### Checks if string contains any of the values
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if a string contains any of the values, false otherwise.
     */
    public function containsAny (string ...$values):bool;

    /**
     * ### Checks if string equals value
     *
     * Performs a case-sensitive check indicating if $string is contained in $string.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if a string equals value, false otherwise.
     */
    public function equals (string $value):bool;

    /**
     * ### Checks if string equals to any of the values
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if a string equals to any of the values, false otherwise.
     */
    public function equalsAny (string ...$values):bool;

    /**
     * ### Get or change string encoding
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     *
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding <p>
     * String encoding.
     * </p>
     *
     * @return $this|\FireHub\Core\Support\Enums\String\Encoding This character or current encoding.
     * @phpstan-return ($encoding is null ? \FireHub\Core\Support\Enums\String\Encoding : $this)
     */
    public function encoding (?Encoding $encoding = null):self|Encoding;

    /**
     * ### Get or set string as raw string
     * @since 1.0.0
     *
     * @param null|string $string [optional] <p>
     * String to set.
     * </p>
     *
     * @return $this|string String as raw string.
     * @phpstan-return ($string is null ? string : $this)
     */
    public function string (string $string = null):self|string;

    /**
     * ### Make a string lowercase
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function toLower ():self;

    /**
     * ### Make a string uppercase
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function toUpper ():self;

    /**
     * ### Make a string title-case
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function toTitle ():self;

    /**
     * ### Make a first character of string uppercased
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function capitalize ():self;

    /**
     * ### Make a first character of string uppercased
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function deCapitalize ():self;

    /**
     * ### Quote string with slashes
     *
     * Backslashes are added before characters that need to be escaped:
     * (single quote, double quote, backslash, NUL).
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function addSlashes ():self;

    /**
     * ### Un-quotes a quoted string
     *
     * Backslashes are removed: (backslashes become single quote, double backslashes are made into a single backslash).
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function stripSlashes ():self;

    /**
     * ### Strip HTML and PHP tags from a string
     *
     * This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string.
     * It uses the same tag stripping state machine as the fgetss() function.
     * @since 1.0.0
     *
     * @param null|string|array $allowed_tags <p>
     * <code><![CDATA[ null|string|array<int, string> ]]></code>
     * You can use the optional second parameter to specify tags which should not be stripped.
     * @phpstan-param null|string|array<int, string> $allowed_tags
     *
     * @return $this This string.
     *
     * @note Self-closing XHTML tags are ignored and only non-self-closing tags should be used in allowed_tags.
     * For example, to allow both <br> and <br/>, you should use: <br>.
     * </p>
     */
    public function stripTags (null|string|array $allowed_tags = null):self;

    /**
     * ### Quote meta characters
     *
     * Returns a version of str with a backslash character (\) before every character that is among these: .\+*?[^]($).
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function quoteMeta ():self;

    /**
     * ### Slice with part of the string
     *
     * Slice with part of the string specified by the $from and $until parameters.
     * @since 1.0.0
     *
     * @param int $from <p>
     * Returned string will start at the start position in string, counting from zero.
     * </p>
     * @param null|int $until [optional] <p>
     * Returned string will end at the start position in string.
     * If omitted or NULL is passed, extract all characters to the end of the string.
     * </p>
     *
     * @return $this This string.
     *
     * @tip If $end is omitted, the function extracts the remaining string.
     * @tip If $end is negative, it is computed from the end of the string.
     */
    public function slice (int $from, ?int $until = null):self;

    /**
     * ### Chop a string to an array
     * @since 1.0.0
     *
     * @param int $length [optional] <p>
     * <code>positive-int</code>
     * Maximum length of the chunk.
     * </p>
     * @phpstan-param positive-int $length
     *
     * @return array <code><![CDATA[ list<string> ]]></code> If the optional $length parameter is specified, the
     * returned array will be broken down into chunks with each being $length in length, except the final chunk which
     * may be shorter if the string does not divide evenly. The default $length is 1, meaning every chunk will be one
     * byte in size.
     * @phpstan-return list<string>
     */
    public function chop (int $length = 1):array;

    /**
     * ### Break string with a separator
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Constants\Number\MAX To set maximum PHP integer.
     *
     * @param string $separator <p>
     * <code>non-empty-string</code>
     * The boundary string.
     * </p>
     * @param int $limit [optional] <p>
     * <code><![CDATA[ int<min, max> ]]></code>
     * If the limit is set and positive, the returned array will contain a maximum of limit elements with the last
     * element containing the rest of the string. If the limit parameter is negative, all components except the last
     * - limit are returned. If the limit parameter is zero, then this is treated as 1.
     * </p>
     * @phpstan-param non-empty-string $separator
     * @phpstan-param int<min, max> $limit
     *
     * @return array <code>string[]</code> If delimiter contains a value that is not contained in string and a negative
     * limit is used, then an empty array will be returned. For any other limit, an array containing string will be
     * returned.
     * @phpstan-return string[]
     */
    public function break (string $separator, int $limit = MAX):array;

    /**
     * ### Carry with part of the string
     *
     * Carry with part of the string specified by the $from and $length parameters.
     * @since 1.0.0
     *
     * @param int $from <p>
     * If start is non-negative, the returned string will start at the start position in string, counting from zero.
     * For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
     * and so forth.
     * If the start is negative, the returned string will start at the start character from the end of the string.
     * </p>
     * @param null|int $length [optional] <p>
     * Maximum number of characters to use from string.
     * If omitted or NULL is passed, extract all characters to the end of the string.
     * </p>
     *
     * @return $this This string.
     *
     * @tip If $length is negative, it is computed from the end of the string.
     */
    public function carry (int $from, ?int $length = null):self;

    /**
     * ### Carry from part of the string
     *
     * Returns part of $string starting from and including the first occurrence of $find to the end of $string.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return $this This string.
     */
    public function carryFrom (string $find):self;

    /**
     * ### Carry from part of the string
     *
     * Returns part of $string starting from the first occurrence of $find to the end of $string.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return $this This string.
     */
    public function carryAfter (string $find):self;

    /**
     * ### Carry until part of the string
     *
     * Returns part of $string starting from the beginning until the first occurrence of $find.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return $this This string.
     */
    public function carryUntil (string $find):self;

    /**
     * ### Carry from the last part of a string
     *
     * This function returns the portion of $string which starts at the last occurrence of and including $find
     * and goes until the end of $string.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return $this This string.
     */
    public function carryFromLast (string $find):self;

    /**
     * ### Carry from the last part of the string
     *
     * Returns last part of $string starting from the first occurrence of $find to the end of $string.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return $this This string.
     */
    public function carryAfterLast (string $find):self;

    /**
     * ### Carry until the last part of a string
     *
     * Returns part of $string starting from the beginning until and goes until the last occurrence of $find.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return $this This string.
     */
    public function carryUntilLast (string $find):self;

    /**
     * ### Replace all occurrences of the search string with the replacement string
     * @since 1.0.0
     *
     * @param string $find <p>
     * The replacement value that replaces found search values.
     * </p>
     * @param string $with <p>
     * The string being searched and replaced on.
     * </p>
     *
     * @return $this This string.
     */
    public function replace (string $find, string $with):self;

    /**
     * ### Replace all occurrences recursively of search in a subject replaced with the given replacement value
     * @since 1.0.0
     *
     * @param array $rules <p>
     * <code><![CDATA[ array<non-empty-string, string> ]]></code>
     * Find => Replace pattern rules.
     * </p>
     * @phpstan-param array<non-empty-string, string> $rules
     *
     * @return $this This string.
     *
     * @note Because method replaces left to right, it might replace a previously inserted value when doing
     * multiple replacements.
     */
    public function replaceRecursive (array $rules):self;

    /**
     * ### Repeat a string
     * @since 1.0.0`
     *
     * @param positive-int $times <p>
     * Number of time the input string should be repeated.
     * Multiplier has to be greater than or equal to 0. If the multiplier is set to 0,
     * the function will return an empty string.
     * </p>
     * @param string $separator [optional] <p>
     * Separator in between any repeated string.
     * </p>
     *
     * @return $this This string repeated $times times.
     */
    public function repeat (int $times, string $separator = ''):self;

    /**
     * ### Strip whitespace (or other characters) from the beginning and end of a string
     *
     * This function returns a string with whitespace stripped from the beginning and end of string.
     * Without the second parameter, [[StrSafe#trim()]] will strip these characters.
     *
     * - " " (ASCII 32 (0x20)), an ordinary space.
     * - "\t" (ASCII 9 (0x09)), a tab.
     * - "\n" (ASCII 10 (0x0A)), a new line (line feed).
     * - "\r" (ASCII 13 (0x0D)), a carriage return.
     * - "\0" (ASCII 0 (0x00)), the NUL-byte.
     * - "\v" (ASCII 11 (0x0B)), a vertical tab.
     * @since 1.0.0
     *t
     * @param \FireHub\Core\Support\Enums\Side $side [optional] <p>
     * Side to trim string.
     * </p>
     * @param string $characters [optional] <p>
     * The stripped characters can also be specified using the char-list parameter. List all characters that you want
     * to be stripped. With '..', you can specify a range of characters.
     * </p>
     *
     * @return $this This string.
     */
    public function trim (Side $side = Side::BOTH, string $characters = " \n\r\t\v\x00"):self;

    /**
     * ### Get string length
     * @since 1.0.0
     *
     * @return int Length of the string.
     * @phpstan-return non-negative-int
     */
    public function length ():int;

    /**
     * ### Find the position of the first occurrence of a substring
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return int|false Position of the first occurrence of a substring.
     * @phpstan-return non-negative-int|false
     */
    public function indexOf (string $find):int|false;

    /**
     * ### Find the position of the last occurrence of a substring
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     *
     * @return int|false Position of the last occurrence of a substring.
     * @phpstan-return non-negative-int|false
     */
    public function lastIndexOf (string $find):int|false;

}