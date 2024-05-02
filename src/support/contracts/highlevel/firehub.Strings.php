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
use FireHub\Core\Support\Strings\ {
    Expression, InsertValue
};
use FireHub\Core\Support\Enums\ {
    Side, String\Encoding, String\Expression\Modifier
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
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of additional expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression Regular expression.
     */
    public function expression (Modifier ...$modifiers):Expression;

    /**
     * ### value on string
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * String to insert.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return \FireHub\Core\Support\Strings\InsertValue Inserts value.
     */
    public function insertValue (string $value):InsertValue;

    /**
     * ### Boolean representation of the given logical string value
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
     * ### Swap lower and upper cases on string
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function swapCase ():self;

    /**
     * ### Streamline string
     *
     * Strip whitespace (or other characters) from the beginning and end of a string and strip multiple spaces.
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function streamline ():self;

    /**
     * ### Capitalize every word in string
     * @since 1.0.0
     *
     * @param array $ignore [optional] <p>
     * List of additional words not to be capitalized.
     * </p>
     * @phpstan-param non-empty-string[] $ignore
     *
     * @return $this This string.
     */
    public function titleize (array $ignore = []):self;

    /**
     * ### Remove spaces
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function spaceless ():self;

    /**
     * ### Format sting to kebab-case
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function kebabCase ():self;

    /**
     * ### Format sting to snake-case
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function snakeCase ():self;

    /**
     * ### Lowercased and trimmed string separated by the given delimiter
     *
     * Delimiters are inserted before uppercase characters (except the first character of the string), and in place of spaces, dashes, and underscores.
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function delimit (string $delimiter):self;

    /**
     * ### Lowercased and trimmed string separated by dash
     *
     * Dash is inserted before uppercase characters (except the first character of the string), and in place of spaces, dashes, and underscores.
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function dasherize ():self;

    /**
     * ### Makes a PascalCase version of the string
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function pascalize ():self;

    /**
     * ### Humanize string
     *
     * Capitalizes the first word of the string, replaces underscores with spaces and removes forbidden words.
     * @since 1.0.0
     *
     * @param array $forbidden_words [optional] <p>
     * <code><![CDATA[ list<string> ]]></code>
     * List of forbidden words to remove.
     * </p>
     * @phpstan-param list<string> $forbidden_words
     *
     * @return $this This string.
     */
    public function humanize (array $forbidden_words = ['id']):self;

    /**
     * ### Tidy string
     *
     * Returns a string with smart quotes, ellipsis characters, and dashes from Windows-1252 (commonly used in Word documents)
     * replaced by their ASCII equivalents.
     * @since 1.0.0
     *
     * @return $this This string.
     */
    public function tidy ():self;

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
     * ### Slice string after first start and until last end
     * @since 1.0.0
     *
     * @param string $start <p>
     * <code>non-empty-string</code>
     * First character.
     * </p>
     * @param string $end <p>
     * <code>non-empty-string</code>
     * Last character.
     * </p>
     * @phpstan-param non-empty-string $start
     * @phpstan-param non-empty-string $end
     *
     * @return $this This string.
     */
    public function between (string $start, string $end):self;

    /**
     * ### Slice string after first start and until first end
     * @since 1.0.0
     *
     * @param string $start <p>
     * <code>non-empty-string</code>
     * First character.
     * </p>
     * @param string $end <p>
     * <code>non-empty-string</code>
     * Last character.
     * </p>
     * @phpstan-param non-empty-string $start
     * @phpstan-param non-empty-string $end
     *
     * @return $this This string.
     */
    public function betweenFirst (string $start, string $end):self;

    /**
     * ### Slice string after last start and until last end
     * @since 1.0.0
     *
     * @param string $start <p>
     * <code>non-empty-string</code>
     * First character.
     * </p>
     * @param string $end <p>
     * <code>non-empty-string</code>
     * Last character.
     * </p>
     * @phpstan-param non-empty-string $start
     * @phpstan-param non-empty-string $end
     *
     * @return $this This string.
     */
    public function betweenLast (string $start, string $end):self;

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
     * ### Inserts string at the position provided
     * @since 1.0.0
     *
     * @param string $string <p>
     * <code>non-empty-string</code>
     * String to insert.
     * </p>
     * @param int $position <p>
     * Position where string will be inserted.
     * </p>
     * @phpstan-param non-empty-string $string
     *
     * @return $this This string.
     *
     * @tip If $end is negative, it is computed from the end of the string.
     */
    public function insert (string $string, int $position):self;

    /**
     * ### Move part of the string
     *
     * Move part of the string specified by the $from and $until parameters.
     * @since 1.0.0
     *
     * @param int $from <p>
     * Start position of moving string, counting from zero.
     * </p>
     * @param int $length <p>
     * Length of moving string, counting from $start.
     * </p>
     * @param int $to <p>
     * Position where string will be moved, counting from zero.
     * </p>
     *
     * @return $this This string.
     *
     * @tip If $end is negative, it is computed from the end of the string.
     */
    public function move (int $from, int $length, int $to):self;

    /**
     * ### Overwrite with part of the string
     *
     * Overwrite with part of the string specified by the $from and $until parameters.
     * @since 1.0.0
     *
     * @param int $from <p>
     * Returned string will start at the start position in string, counting from zero.
     * </p>
     * @param int $until <p>
     * Returned string will end at the start position in string.
     * </p>
     * @param string $with <p>
     * The string to insert.
     * </p>
     *
     * @return $this This string.
     *
     * @tip If $end is negative, it is computed from the end of the string.
     */
    public function overwrite (int $from, int $until, string $with):self;

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
     * @param int $times <p>
     * Number of time the input string should be repeated.
     * If the $times is set to 0 or less, the function will return empty string.
     * </p>
     * @param string $separator [optional] <p>
     * Separator in between any repeated string.
     * </p>
     *
     * @return $this This string repeated $times times.
     */
    public function repeat (int $times, string $separator = ''):self;

    /**
     * ### Reverse order of characters
     * @since 1.0.0
     *
     * @return $this This reversed string.
     */
    public function reverse ():self;

    /**
     * ### Pad a string to a certain length with another string
     *
     * This method returns the $string padded on the left, the right, or both sides to the specified padding length.
     * If the optional argument $pad is not supplied, the $string is padded with spaces; otherwise it is padded
     * with characters from $pad up to the limit.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Side::BOTH As parameter.
     *
     * @param int $length <p>
     * If the value of pad_length is negative, less than, or equal to the length of the input string,
     * no padding takes place.
     * </p>
     * @param string $pad [optional] <p>
     * <code>non-empty-string</code>
     * The pad may be truncated if the required number of padding characters can't be evenly divided by the pad's
     * length.
     * </p>
     * @param \FireHub\Core\Support\Enums\Side $side [optional] <p>
     * Pad side.
     * </p>
     * @phpstan-param non-empty-string $pad
     *
     * @return $this This string.
     */
    public function pad (int $length, string $pad = " ", Side $side = Side::BOTH):self;

    /**
     * ### Prepends the given string to the current string
     * @since 1.0.0
     *
     * @param string $prefix <p>
     * The prefix to prepend.
     * </p>
     *
     * @return $this This string.
     */
    public function prepend (string $prefix):self;

    /**
     * ### Appends the given string to the current string
     * @since 1.0.0
     *
     * @param string $suffix <p>
     * The suffix to append.
     * </p>
     *
     * @return $this This string.
     */
    public function append (string $suffix):self;

    /**
     * ### Makes sure that the current string starts with the given text
     * @since 1.0.0
     *
     * @param string $prefix <p>
     * <code>non-empty-string</code>
     * The prefix to make sure it exists.
     * </p>
     * @phpstan-param non-empty-string $prefix
     *
     * @return $this This string.
     */
    public function ensurePrefix (string $prefix):self;

    /**
     * ### Makes sure that the current string ends with the given text
     * @since 1.0.0
     *
     * @param string $suffix <p>
     * <code>non-empty-string</code>
     * The suffix to make sure it exists.
     * </p>
     * @phpstan-param non-empty-string $suffix
     *
     * @return $this This string.
     */
    public function ensureSuffix (string $suffix):self;

    /**
     * ### Makes sure that the current string doesn't start with the given text
     * @since 1.0.0
     *
     * @param string $prefix <p>
     * <code>non-empty-string</code>
     * The prefix to make sure exists.
     * </p>
     * @phpstan-param non-empty-string $prefix
     *
     * @return $this This string.
     */
    public function removePrefix (string $prefix):self;

    /**
     * ### Makes sure that the current string doesn't end with the given text
     * @since 1.0.0
     *
     * @param string $suffix <p>
     * <code>non-empty-string</code>
     * The suffix to make sure exists.
     * </p>
     * @phpstan-param non-empty-string $suffix
     *
     * @return $this This string.
     */
    public function removeSuffix (string $suffix):self;

    /**
     * Surrounds string with the given substring
     * @since 1.0.0
     *
     * @param string $with <p>
     * <code>non-empty-string</code>
     * The substring to add to both sides.
     * </p>
     * @phpstan-param non-empty-string $with
     *
     * @return $this This string.
     */
    public function surround (string $with):self;

    /**
     * ### Randomly shuffles a string
     * @since 1.0.0
     *
     * @return $this This string.
     *
     * @caution This function does not generate cryptographically secure values,
     * and must not be used for cryptographic purposes,
     * or purposes that require returned values to be unguessable.
     */
    public function shuffle ():self;

    /**
     * ### Wraps each word in the string with specified quote
     * @since 1.0.0
     *
     * @param string $with <p>
     * <code>non-empty-string</code>
     * String to quote with.
     * </p>
     * @phpstan-param non-empty-string $with
     *
     * @return $this This string.
     */
    public function quote (string $with):self;

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
     *
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
     * ### Truncates the string to a given length
     * @since 1.0.0
     *
     * @param int $length <p>
     * Maximum string length, with $with argument included.
     * </p>
     * @param string $with [optional] <p>
     * Truncates the string with.
     * </p>
     *
     * @return $this This string.
     *
     * @note If truncating occurs, the string is further truncated so that the $with may be appended without exceeding the desired length.
     * @note If truncate is negative, string will be truncated from right to left.
     */
    public function truncate (int $length, string $with = ''):self;

    /**
     * ### Truncates the string to a given length, while ensuring that it does not split words
     * @since 1.0.0
     *
     * @param int $length <p>
     * Maximum string length, with $with argument included.
     * </p>
     * @param string $with <p>
     * Truncates the string with.
     * </p>
     *
     * @return $this This string.
     *
     * @note If truncating occurs, the string is further truncated so that the $with may be appended without exceeding the desired length.
     * @note If truncate is negative, string will be truncated from right to left.
     */
    public function safeTruncate (int $length, string $with):self;

    /**
     * ### Get first character of string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters As return.
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Characters|null The first character of string or null is string is empty.
     */
    public function first ():?Characters;

    /**
     * ### Get last character of string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters As return.
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Characters|null The last character of string or null is string is empty.
     */
    public function last ():?Characters;

    /**
     * ### Break string into characters
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Characters[] List of characters.
     *
     * @todo Change from array to Collection
     */
    public function toChars ():array;

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
     * @phpstan-return list<non-empty-string>
     *
     * @todo Change from array to Collection
     */
    public function chop (int $length = 1):array;

    /**
     * ### Break string with a separator
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Constants\Number\MAX To set maximum PHP integer.
     *
     * @param string $with <p>
     * <code>non-empty-string</code>
     * The boundary string.
     * </p>
     * @param int $limit [optional] <p>
     * <code><![CDATA[ int<min, max> ]]></code>
     * If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
     * If the limit parameter is negative, all components except the last - limit are returned.
     * If the limit parameter is zero, then this is treated as 1.
     * </p>
     * @phpstan-param non-empty-string $with
     * @phpstan-param int<min, max> $limit
     *
     * @return array <code>string[]</code> If delimiter contains a value that is not contained in string and a negative
     * limit is used, then an empty array will be returned.
     * For any other limit, an array containing string will be returned.
     * @phpstan-return string[]
     *
     * @todo Change from array to Collection
     */
    public function break (string $with, int $limit = MAX):array;

    /**
     * ### Break string with an array of separators
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Constants\Number\MAX To set maximum PHP integer.
     *
     * @param array $separators <p>
     * <code>non-empty-string[]</code>
     * The boundary strings.
     * </p>
     * @param int $limit [optional] <p>
     * <code><![CDATA[ int<min, max> ]]></code>
     * If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
     * If the limit parameter is negative, all components except the last - limit are returned.
     * If the limit parameter is zero, then this is treated as 1.
     * </p>
     * @phpstan-param non-empty-string[] $separators
     * @phpstan-param int<min, max> $limit
     *
     * @return array <code>string[]</code> If delimiter contains a value that is not contained in string and a negative
     * limit is used, then an empty array will be returned.
     * For any other limit, an array containing string will be returned.
     * @phpstan-return string[]
     */
    public function breakWithAny (array $separators, int $limit = MAX):array;

    /**
     * ### Group a string into chunks
     * @since 1.0.0
     *
     * @param int $number_of_groups <p>
     * <code>positive-int</code>
     * The size of each chunk.
     * </p>
     * @phpstan-param positive-int $number_of_groups
     *
     * @return list<string> Grouped string into chunks.
     *
     * @todo Change from array to Collection
     */
    public function group (int $number_of_groups):array;

    /**
     * ### Checks how mny times string contains value
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return int Number of times the searched value occurs in the string.
     * @phpstan-return non-negative-int
     */
    public function containTimes (string $value):int;

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
     * @return int|false Position of the first occurrence for a substring.
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
     * @return int|false Position of the last occurrence for a substring.
     * @phpstan-return non-negative-int|false
     */
    public function lastIndexOf (string $find):int|false;

}