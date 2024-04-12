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
use FireHub\Core\Support\Enums\String\Encoding;

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