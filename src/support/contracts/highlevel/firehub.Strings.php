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
use FireHub\Core\Support\Contracts\HighLevel\Strings\ {
    StringHas, StringIs
};
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\Enums\Side;

/**
 * ### Strings contract
 *
 * A string is a stream of character.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
interface Strings extends Stringable {

    /**
     * ### Check string
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Strings\StringIs String checker.
     */
    public function is ():StringIs;

    /**
     * ### Check string has
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Strings\StringHas String has checker.
     */
    public function has ():StringHas;

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
     * Performs a case-sensitive check indicating if $string begins with $value.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string starts with value, false otherwise.
     */
    public function startsWith (string $value, bool $case_sensitive = true):bool;

    /**
     * ### Checks if a string ends with a given value
     *
     * Performs a case-sensitive check indicating if $string ends with $value.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string ends with value, false otherwise.
     */
    public function endsWith (string $value, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string contains value
     *
     * Performs a case-sensitive check indicating if $string is contained in $string.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * The value to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if a string contains value, false otherwise.
     */
    public function contains (string $value, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string contains all values
     * @since 1.0.0
     *
     * @param array $values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string[] $values
     *
     * @return bool True if a string contains all values, false otherwise.
     */
    public function containsAll (array $values, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string contains any of the values
     * @since 1.0.0
     *
     * @param array $values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string[] $values
     *
     * @return bool True if a string contains any of the values, false otherwise.
     */
    public function containsAny (array $values, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string is equal to any of the values
     * @since 1.0.0
     *
     * @param array $values <p>
     * <code>non-empty-string[]</code>
     * The list of values to compare to.
     * </p>
     * @phpstan-param non-empty-string[] $values
     *
     * @return bool True if a string contains any of the values, false otherwise.
     */
    public function equalToAny (array $values):bool;

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
     */
    public function stripTags (null|string|array $allowed_tags = null):self;

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
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     *
     * @return $this This string.
     */
    public function carryFrom (string $find, bool $case_sensitive = true):self;

    /**
     * ### Carry until part of the string
     *
     * Returns part of $string starting from the beginning until the first occurrence of $find.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     *
     * @return $this This string.
     */
    public function carryUntil (string $find, bool $case_sensitive = true):self;

    /**
     * ### Carry from the last part of a string
     *
     * This function returns the portion of $string which starts at the last occurrence of $find and goes until the
     * end of $string.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     *
     * @return $this This string.
     */
    public function carryFromLast (string $find, bool $case_sensitive = true):self;

    /**
     * ### Carry until the last part of a string
     *
     * Returns part of $string starting from the beginning until and goes until the last occurrence of $find.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     *
     * @return $this This string.
     */
    public function carryUntilLast (string $find, bool $case_sensitive = true):self;

    /**
     * ### Strip whitespace (or other characters) from the beginning and end of a string
     *
     * This function returns a string with whitespace stripped from the beginning and end of string.
     * Without the second parameter, [[Strings#trim()]] will strip these characters.
     *
     * - " " (ASCII 32 (0x20)), an ordinary space.
     * - "\t" (ASCII 9 (0x09)), a tab.
     * - "\n" (ASCII 10 (0x0A)), a new line (line feed).
     * - "\r" (ASCII 13 (0x0D)), a carriage return.
     * - "\0" (ASCII 0 (0x00)), the NUL-byte.
     * - "\v" (ASCII 11 (0x0B)), a vertical tab.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Enums\Side $side [optional] <p>
     * Side to trim string.
     * </p>
     * @param string $characters [optional] <p>
     * The stripped characters can also be specified using the char-list parameter.
     * List all characters that you want to be stripped.
     * With '..', you can specify a range of characters.
     * </p>
     *
     * @return $this This string.
     */
    public function trim (Side $side = Side::BOTH, string $characters = " \n\r\t\v\x00"):self;

    /**
     * ### Strip whitespace (or other characters) from the beginning and end of a string and strip multiple spaces
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function streamline ():self;

    /**
     * ### Get string as raw string
     * @since 1.0.0
     *
     * @return string String as raw string.
     */
    public function string ():string;

}