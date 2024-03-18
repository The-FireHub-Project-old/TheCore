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

namespace FireHub\Core\Support\LowLevel;

use FireHub\Core\Support\Enums\Side;
use Error, ValueError, Stringable;

use const FireHub\Core\Support\Constants\Number\MAX;

use function addslashes;
use function explode;
use function implode;
use function ltrim;
use function quotemeta;
use function rtrim;
use function str_contains;
use function str_ends_with;
use function str_ireplace;
use function str_repeat;
use function str_replace;
use function str_starts_with;
use function strcmp;
use function strip_tags;
use function stripslashes;
use function trim;

/**
 * ### Safe string low-level proxy class
 *
 * Class contains methods that are safe to use on normal as well as on multibyte encoding.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
abstract class StrSafe {

    /**
     * ### Checks if string contains value
     *
     * Performs a case-sensitive check indicating if $string is contained in $string.
     * @since 1.0.0
     *
     * @param string $value <p>
     * The value to search for.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     *
     * @return bool True if a string contains value, false otherwise.
     */
    final public static function contains (string $value, string $string):bool {

        return str_contains($string, $value);

    }

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
     * @param string $string <p>
     * The string to search in.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string starts with value, false otherwise.
     */
    final public static function startsWith (string $value, string $string):bool {

        return $value && str_starts_with($string, $value);

    }

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
     * @param string $string <p>
     * The string to search in.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     *
     * @return bool True if string ends with value, false otherwise.
     */
    final public static function endsWith (string $value, string $string):bool {

        return $value && str_ends_with($string, $value);

    }

    /**
     * ### Quote string with slashes
     *
     * Backslashes are added before characters that need to be escaped:
     * (single quote, double quote, backslash, NUL).
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to be escaped.
     * </p>
     *
     * @return string The escaped string.
     *
     * @caution The [[StrSafe#addSlashes()]] is sometimes incorrectly used to try to prevent SQL Injection. Instead,
     * database-specific escaping functions and/or prepared statements should be used.
     */
    public static function addSlashes (string $string):string {

        return addslashes($string);

    }

    /**
     * ### Join array elements with a string
     *
     * Join array elements with a $separator string.
     * @since 1.0.0
     *
     * @param array $array <p>
     * <code><![CDATA[ array<array-key, null|scalar|Stringable> ]]></code>
     * The array of strings to implode.
     * </p>
     * @param string $separator [optional] <p>
     * The boundary string.
     * </p>
     * @phpstan-param array<array-key, null|scalar|Stringable> $array
     *
     * @throws Error If array item could not be converted to string.
     *
     * @return string Returns a string containing a string representation of all the array elements in the same order,
     * with the separator string between each element.
     */
    final public static function implode (array $array, string $separator = ''):string {

        return implode($separator, $array);

    }

    /**
     * ### Quote meta characters
     *
     * Returns a version of str with a backslash character (\) before every character that is among these: .\+*?[^]($).
     * @since 1.0.0
     *
     * @param string $string <p>
     * <code>non-empty-string</code>
     * The input string.
     * </p>
     * @phpstan-param non-empty-string $string
     *
     * @throws Error If empty string is given as string.
     *
     * @return string The string with meta-characters quoted.
     */
    final public static function quoteMeta (string $string):string {

        return quotemeta($string)
            ?: throw new Error('Empty string is given as string.');

    }

    /**
     * ### Replace all occurrences of the search string with the replacement string
     *
     * This function returns a string or an array with all occurrences of search
     * in a subject replaced with the given replacement value.
     * @since 1.0.0
     *
     * @param string|array $search <p>
     * <code><![CDATA[ string|list<string> ]]></code>
     * The replacement value that replaces found search values.
     * An array may be used to designate multiple replacements.
     * </p>
     * @param string|array $replace <p>
     * <code><![CDATA[ string|list<string> ]]></code>
     * The string being searched and replaced on.
     * </p>
     * @param string $string <p>
     * The value being searched for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Searched values are case-insensitive.
     * </p>
     * @param null|int &$count [optional] <p>
     * If passed, this will hold the number of matched and replaced needles.
     * </p>
     * @phpstan-param string|list<string> $search
     * @phpstan-param string|list<string> $replace
     * @param-out int $count
     *
     * @return string String with the replaced values.
     *
     * @note Multibyte characters may not work as expected while $case_sensitive is on.
     * @note Because method replaces left to right, it might replace a previously inserted value when doing
     * multiple replacements.
     * @tip To replace text based on a pattern rather than a fixed string, use preg_replace().
     */
    final public static function replace (string|array $search, string|array $replace, string $string, bool $case_sensitive = true, int &$count = null):string {

        if ($case_sensitive) return str_replace($search, $replace, $string, $count);

        return str_ireplace($search, $replace, $string, $count);

    }

    /**
     * ### Repeat a string
     *
     * Returns string repeated $times times.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to be repeated.
     * </p>
     * @param int $times <p>
     * <code>non-negative-int</code>
     * Number of time the input string should be repeated. Multiplier has to be greater than or equal to 0. If the
     * multiplier is set to 0, the function will return an empty string.
     * </p>
     * @param string $separator [optional] <p>
     * Separator in between any repeated string.
     * </p>
     * @phpstan-param non-negative-int $times
     *
     * @throws Error If $times argument is not 0 or greater.
     *
     * @return string Repeated string.
     */
    final public static function repeat (string $string, int $times, string $separator = ''):string {

        return $times === 0 ? '' : str_repeat($string.$separator, $times - 1).$string;

    }

    /**
     * ### Strip HTML and PHP tags from a string
     *
     * This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string. It
     * uses the same tag stripping state machine as the fgetss() function.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The input string.
     * </p>
     * @param null|string|array $allowed_tags <p>
     * <code><![CDATA[ null|string|array<int, string> ]]></code>
     * You can use the optional second parameter to specify tags which should not be stripped.
     * @phpstan-param null|string|array<int, string> $allowed_tags
     *
     * @return string the Stripped string.
     *
     * @note Self-closing XHTML tags are ignored and only non-self-closing tags should be used in allowed_tags.
     * For example, to allow both <br> and <br/>, you should use: <br>.
     * </p>
     */
    public static function stripTags (string $string, null|string|array $allowed_tags = null):string {

        return strip_tags($string, $allowed_tags);

    }

    /**
     * ### Un-quotes a quoted string
     *
     * Backslashes are removed: (backslashes become single quote, double backslashes are made into a single backslash).
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to be unquoted.
     * </p>
     *
     * @return string String with backslashes stripped off.
     *
     * @note [[StrSafe#stripSlashes()]] is not recursive. If you want to apply this function to multidimensional
     * array, you need to use a recursive function.
     * @tip [[StrSafe#stripSlashes()]] can be used if you aren't inserting this data into a place (such as a database)
     * that requires escaping. For example, if you're simply outputting data straight from an HTML form.
     */
    public static function stripSlashes (string $string):string {

        return stripslashes($string);

    }

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
     * @uses \FireHub\Core\Support\Enums\Side::BOTH If trimming string on both sides.
     * @uses \FireHub\Core\Support\Enums\Side::LEFT If trimming string on the left side.
     * @uses \FireHub\Core\Support\Enums\Side::RIGHT If trimming string on the right side.
     *
     * @param string $string <p>
     * The string that will be trimmed.
     * </p>
     * @param \FireHub\Core\Support\Enums\Side $side [optional] <p>
     * Side to trim string.
     * </p>
     * @param string $characters [optional] <p>
     * The stripped characters can also be specified using the char-list parameter. List all characters that you want
     * to be stripped. With '..', you can specify a range of characters.
     * </p>
     *
     * @return string The trimmed string.
     *
     * @note Because trim() trims characters from the beginning and end of a string, it may be confusing when characters
     * are (or are not) removed from the middle. Trim('abc', 'bad') removes both 'a' and 'b' because it trims 'a'
     * thus moving 'b' to the beginning to also be trimmed. So, this is why it "works" whereas trim('abc', 'b')
     * seemingly does not.
     */
    final public static function trim (string $string, Side $side = Side::BOTH, string $characters = " \n\r\t\v\x00"):string {

        return match($side) {
            Side::LEFT => ltrim($string, $characters),
            Side::RIGHT => rtrim($string, $characters),
            Side::BOTH => trim($string, $characters)
        };

    }

    /**
     * ### Split a string by a string
     *
     * Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries
     * formed by the string separator.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Constants\Number\MAX To set the limit of returned array size to maximum.
     *
     * @param string $string <p>
     * The input string.
     * </p>
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
     * @throws ValueError If separator is an empty string.
     *
     * @return array <code>string[]</code> If delimiter contains a value that is not contained in string and a negative
     * limit is used, then an empty array will be returned. For any other limit, an array containing string will be
     * returned.
     * @phpstan-return string[]
     */
    final public static function explode (string $string, string $separator, int $limit = MAX):array {

        return explode($separator, $string, $limit);

    }

    /**
     * ### String comparison
     * @since 1.0.0
     *
     * @param string $string_1 <p>
     * String to compare against.
     * </p>
     * @param string $string_2 <p>
     * String to compare with.
     * </p>
     *
     * @return int<-1, 1> -1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are
     * equal.
     *
     * @note This comparison is case-sensitive.
     */
    public static function compare (string $string_1, string $string_2):int {

        return strcmp($string_1, $string_2) <=> 0;

    }

}