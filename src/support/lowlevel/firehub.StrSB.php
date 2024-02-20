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
use Error, ValueError;

use function addcslashes;
use function chunk_split;
use function count_chars;
use function lcfirst;
use function str_pad;
use function str_shuffle;
use function str_split;
use function str_word_count;
use function strcasecmp;
use function strcspn;
use function stripcslashes;
use function stristr;
use function stripos;
use function strlen;
use function strncmp;
use function strpbrk;
use function strpos;
use function strrchr;
use function strstr;
use function strrev;
use function strripos;
use function strrpos;
use function strspn;
use function strtolower;
use function strtoupper;
use function strtr;
use function substr;
use function substr_compare;
use function substr_count;
use function substr_replace;
use function ucfirst;
use function ucwords;
use function wordwrap;

/**
 * ### Single-byte string low-level proxy class
 *
 * Class allows you to manipulate strings in various ways.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
final class StrSB extends StrSafe {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSafe::addSlashes() To call parent method if $characters parameter was
     * not provided.
     *
     * @param string $string <p>
     * The string to be escaped.
     * </p>
     * @param string $characters [optional] <p>
     * The list of characters to be escaped. Non-alphanumeric characters with ASCII codes lower than 32 and higher
     * than 126 converted to octal representation.
     * </p>
     */
    public static function addSlashes (string $string, string $characters = null):string {

        return empty($characters)
            ? parent::addSlashes($string)
            : addcslashes($string, $characters);

    }

    /**
     * ### Split a string into smaller chunks
     *
     * Can be used to split a string into smaller chunks, which is useful for e.g., converting base64_encode() output to
     * match RFC 2045 semantics. It inserts $separator every $length characters.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to be chunked.
     * </p>
     * @param int $length [optional] <p>
     * The chunk length.
     * </p>
     * @param string $separator [optional] <p>
     * The line-ending sequence.
     * </p>
     * @phpstan-param positive-int $length
     *
     * @throws ValueError If length is less than 1.
     *
     * @return string The chunked string.
     */
    public static function chunkSplit (string $string, int $length = 76, string $separator = "\r\n"):string {

        return chunk_split($string, $length, $separator);

    }

    /**
     * ### Pad a string to a certain length with another string
     *
     * This method returns the $string padded on the left, the right, or both sides to the specified padding length.
     * If the optional argument $pad is not supplied, the $string is padded with spaces; otherwise it is padded with
     * characters from $pad up to the limit.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Side::RIGHT If padding string to the right.
     * @uses \FireHub\Core\Support\Enums\Side::LEFT If padding string to the left.
     * @uses \FireHub\Core\Support\Enums\Side::BOTH If padding string on both sides.
     *
     * @param string $string <p>
     * The string being padded.
     * </p>
     * @param int $length <p>
     * If the value of $length is negative, less than, or equal to the length of the input string, no padding takes
     * place.
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
     * @throws Error If the pad is empty.
     *
     * @return string Padded string.
     */
    public static function pad (string $string, int $length, string $pad = " ", Side $side = Side::RIGHT):string {

        return $pad !== '' ? str_pad($string, $length, $pad, match ($side) {
            Side::LEFT => 0,
            Side::RIGHT => 1,
            Side::BOTH => 2
        }) : throw new Error('Pad cannot be empty.');

    }

    /**
     * ### Replace text within a portion of a string
     *
     * Replaces a copy of string delimited by the $offset and (optionally) $length parameters with the string given in
     * $replace.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The input string.
     * </p>
     * @param string $replace <p>
     * The replacement string.
     * </p>
     * @param int $offset <p>
     * If offset is non-negative, the replacing will begin at the into string. If offset is negative, the replacing
     * will begin at the character from the end of the string.
     * </p>
     * @param null|int $length [optional] <p>
     * If given and is positive, it represents the length of the portion of string which is to be replaced. If it is
     * negative, it represents the number of characters from the end of string at which to stop replacing. If it is
     * not given, then it will default to strlen(string); i.e., end the replacing at the end of string. Of course, if
     * length is zero, then this function will have the effect of inserting $replace into string at the given offset.
     * </p>
     *
     * @return string String with the replaced values.
     */
    public static function replacePart (string $string, string $replace, int $offset, int $length = null):string {

        return substr_replace($string, $replace, $offset, $length);

    }

    /**
     * ### Randomly shuffles a string
     * @since 1.0.0
     *
     * @param string $string <p>
     * The input string.
     * </p>
     *
     * @return string The shuffled string.
     *
     * @caution This function does not generate cryptographically secure values, and must not be used for
     * cryptographic purposes, or purposes that require returned values to be unguessable.
     */
    public static function shuffle (string $string):string {

        return str_shuffle($string);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSafe::stripSlashes() If $c_representation set to true.
     *
     * @param string $string <p>
     * The string to be unquoted.
     * </p>
     * @param bool $c_representation [optional] <p>
     * If true, octal and hexadecimal representation from addSlashes method are recognized.
     * </p>
     */
    public static function stripSlashes (string $string, bool $c_representation = false):string {

        return $c_representation
            ? stripcslashes($string)
            : parent::stripSlashes($string);

    }

    /**
     * ### Reverse a string
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to be reversed.
     * </p>
     *
     * @return string The reversed string.
     */
    public static function reverse (string $string):string {

        return strrev($string);

    }

    /**
     * ### Wraps a string to a given number of characters
     *
     * Wraps a string to a given number of characters using a string break character.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to warp.
     * </p>
     * @param int $width [optional] <p>
     * The column width.
     * </p>
     * @param string $break [optional] <p>
     * The line is broken using the optional break parameter.
     * </p>
     * @param bool $cut_long_words [optional] <p>
     * If the cut is set to true, the string is always wrapped at or before the specified width. So if you have a
     * word that is larger than the given width, it is broken apart.
     * </p>
     *
     * @return string The given string wrapped at the specified column.
     */
    public static function wrap (string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false):string {

        return wordwrap($string, $width, $break, $cut_long_words);

    }

    /**
     * ### Make a string lowercase
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being lowercased.
     * </p>
     *
     * @return string String with all alphabetic characters converted to lowercase.
     */
    public static function toLower (string $string):string {

        return strtolower($string);

    }

    /**
     * ### Make a string uppercase
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being uppercased.
     * </p>
     *
     * @return string String with all alphabetic characters converted to uppercase.
     */
    public static function toUpper (string $string):string {

        return strtoupper($string);

    }

    /**
     * ### Make a string title-cased
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being title cased.
     * </p>
     *
     * @return string String with title-cased conversion.
     */
    public static function toTitle (string $string):string {

        return ucwords($string);

    }

    /**
     * ### Make a first character of string uppercased
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being converted.
     * </p>
     *
     * @return string String with first character uppercased.
     */
    public static function capitalize (string $string):string {

        return ucfirst($string);

    }

    /**
     * ### Make a first character of string lowercased
     *
     * Returns a string with the first character of $string lowercased if that character is an ASCII character in the
     * range "A" (0x41) to "Z" (0x5a).
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being converted.
     * </p>
     *
     * @return string String with first character lowercased.
     */
    public static function deCapitalize (string $string):string {

        return lcfirst($string);

    }

    /**
     * ### Translate characters or replace substrings
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being translated to.
     * </p>
     * @param string $from <p>
     * An array of key-value pairs for translation.
     * </p>
     * @param string $to <p>
     * The string replaced from.
     * </p>
     *
     * @return string The translated string.
     */
    public static function translate (string $string, string $from, string $to):string {

        return strtr($string, $from, $to);

    }

    /**
     * ### Get part of string
     *
     * Returns the portion of the string specified by the $start and $length parameters.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to extract the substring from.
     * </p>
     * @param int $start <p>
     * If start is non-negative, the returned string will start at the start position in string, counting from zero.
     * For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
     * and so forth. If the start is negative, the returned string will start at the start character from the end of
     * the string.
     * </p>
     * @param null|int $length [optional] <p>
     * Maximum number of characters to use from string. If omitted or NULL is passed, extract all characters to the
     * end of the string.
     * </p>
     *
     * @return string The portion of string specified by the start and length parameters.
     */
    public static function part (string $string, int $start, ?int $length = null):string {

        return substr($string, $start, $length);

    }

    /**
     * ### Find first part of a string
     *
     * Returns part of $string starting from and including the first occurrence of $find to the end of $string.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param string $string <p>
     * The string being searched.
     * </p>
     * @param bool $before_needle [optional] <p>
     * If true, return the part of the string before the first occurrence (excluding the find string).
     * </p>
     *
     * @return string|false The portion of string or false if needle is not found.
     */
    public static function firstPart (string $find, string $string, bool $before_needle = false, bool $case_sensitive = true):string|false {

        if ($case_sensitive) return strstr($string, $find, $before_needle);

        return stristr($string, $find, $before_needle);

    }

    /**
     * ### Find last part of a string
     *
     * This function returns the portion of $string which starts at the last occurrence of $find and goes until the
     * end of $string.
     * @since 1.0.0
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param string $string <p>
     * The string being searched.
     * </p>
     *
     * @return string|false The portion of string, or false if needle is not found.
     */
    public static function lastPart (string $find, string $string):string|false {

        return strrchr($string, $find);

    }

    /**
     * ### Find part of a string with characters
     * @since 1.0.0
     *
     * @param string $characters <p>
     * Characters to find. This parameter is case-sensitive.
     * </p>
     * @param string $string <p>
     * The string where characters are looked for.
     * </p>
     *
     * @return string|false String starting from the character found, or false if it is not found.
     */
    public static function partFrom (string $characters, string $string):string|false {

        return strpbrk($string, $characters);

    }

    /**
     * ### Return information about characters used in a string
     *
     * Counts the number of occurrences for every byte-value (0..255) in $string and returns it in various ways.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The examined string.
     * </p>
     *
     * @return array <code><![CDATA[ array<int, int> ]]></code> An array with the byte-value as a key with a frequency
     * greater than zero are listed.
     * @phpstan-return array<int, int>
     */
    public static function countByChar (string $string):array {

        /** @phpstan-ignore-next-line Return is always array because mode is set to 1. */
        return count_chars($string, 1);

    }

    /**
     * ### Convert a string to an array
     * @since 1.0.0
     *
     * @param string $string <p>
     * The input string.
     * </p>
     * @param int $length [optional] <p>
     * <code>positive-int</code>
     * Maximum length of the chunk.
     * </p>
     * @phpstan-param positive-int $length
     *
     * @throws Error If length is less than 1.
     *
     * @return array <code><![CDATA[ array<int, string> ]]></code> If the optional $length parameter is specified, the
     * returned array will be broken down into chunks with each being $length in length, except the final chunk which
     * may be shorter if the string does not divide evenly. The default $length is 1, meaning every chunk will be one
     * byte in size.
     * @phpstan-return array<int, string>
     */
    public static function split (string $string, int $length = 1):array {

        return !$length < 1
            ? str_split($string, $length)
            : throw new Error('Length must be at least 1.');

    }

    /**
     * ### Count number of words in string
     *
     * Counts the number of words inside string. If the optional format is not specified, then the return value will
     * be an integer representing the number of words found. In the event the format is specified,
     * the return value will be an array, the content of which is dependent on the format.
     * The possible value for the format and the resultant outputs are listed below.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string.
     * </p>
     * @param null|string $characters [optional] <p>
     * A list of additional characters which will be considered as 'word'.
     * </p>
     * @param int $format [optional] <p>
     * <code><![CDATA[ 0|1|2 ]]></code>
     * A string to search words.
     * 0 - returns the number of words found.
     * 1 - returns an array containing all the words found inside the string.
     * 2 - returns an associative array, where the key is the numeric position of the word inside the string and the
     * value is the actual word itself.
     * </p>
     * @phpstan-param 0|1|2 $format
     *
     * @throws Error If failed to count words for string.
     *
     * @return int|array <code><![CDATA[ int|array<int, string> ]]></code> Number of words found or list of words.
     * @phpstan-return int|array<int, string>
     */
    public static function countWords (string $string, string $characters = null, int $format = 0):int|array {

        return str_word_count($string, $format, $characters)
            ?: throw new Error('Failed to count words for string.');

    }

    /**
     * ### Get number of times the searched substring occurs in the string
     *
     * Returns the number of times the needle substring occurs in the haystack string. Please note that needle is
     * case-sensitive.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being checked.
     * </p>
     * @param string $search <p>
     * The string being found.
     * </p>
     * @param int $start [optional] <p>
     * The offset where to start counting. If the offset is negative, counting starts from the end of the string.
     * </p>
     * @param null|int $length [optional] <p>
     * The maximum length after the specified offset to search for the substring. It outputs a warning if the offset
     * plus the length is greater than the $string length. A negative length counts from the end of $string.
     * </p>
     *
     * @return int <code>non-negative-int</code> Number of times the searched substring occurs in the string.
     * @phpstan-return non-negative-int
     *
     * @note This method doesn't count overlapped substring.
     */
    public static function partCount (string $string, string $search, int $start = 0, ?int $length = null):int {

        return substr_count($string, $search, $start, $length);

    }

    /**
     * ### Length of the initial segment for a string consisting entirely of characters contained within a given mask
     *
     * Finds the length of the initial segment of $string that contains only characters from $characters.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to examine.
     * </p>
     * @param string $characters <p>
     * The list of allowable characters.
     * </p>
     * @param int $offset [optional] <p>
     * The position in subject to start searching. If start is given and is non-negative, then
     * [[StrSB#segmentMatching()]] will begin examining the subject at the start position. For instance, in the
     * string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth. If
     * start is given and is negative, then [[StrSB#segmentMatching()]] will begin examining subject at the start
     * position from the end of subject.
     * </p>
     * @param int|null $length [optional] <p>
     * The length of the segment from subject to examine. If length is given and is non-negative, then the subject
     * will be examined for length characters after the starting position. If length is given and is negative, then
     * the subject will be examined from the starting position up-to-length characters from the end of the subject.
     * </p>
     *
     * @return int The length of the initial segment for string which consists entirely of characters in characters.
     *
     * @note When offset parameter is set, the returned length is counted starting from this position, not from
     * beginning of the string.
     */
    public static function segmentMatching (string $string, string $characters, int $offset = 0, ?int $length = null):int {

        return strspn($string, $characters, $offset, $length);

    }

    /**
     * ### Find length of initial segment not matching mask
     *
     * Returns the length of the initial segment of $string which does not contain any of the characters in $characters.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string to examine.
     * </p>
     * @param string $characters <p>
     * The string containing every disallowed character.
     * </p>
     * @param int $offset [optional] <p>
     * The position in subject to start searching. If start is given and is non-negative, then
     * [[StrSB#segmentNotMatching()]] will begin examining the subject at the start position. For instance, in the
     * string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth. If
     * start is given and is negative, then [[StrSB#segmentNotMatching()]] will begin examining subject at the start
     * position from the end of subject.
     * </p>
     * @param null|int $length [optional] <p>
     * The length of the segment from subject to examine. If length is given and is non-negative, then the subject
     * will be examined for length characters after the starting position. If length is given and is negative, then
     * the subject will be examined from the starting position up-to-length characters from the end of the subject.
     * </p>
     *
     * @return int The length of the initial segment from string which consists entirely of characters not in
     * characters.
     *
     * @note When offset parameter is set, the returned length is counted starting from this position, not from
     * beginning of the string.
     */
    public static function segmentNotMatching (string $string, string $characters, int $offset = 0, ?int $length = null):int {

        return strcspn($string, $characters, $offset, $length);

    }

    /**
     * ### Get string length
     * @since 1.0.0
     *
     * @param string $string <p>
     * The string being measured for length.
     * </p>
     *
     * @return int <code>non-negative-int</code> String length.
     * @phpstan-return non-negative-int
     *
     * @note The function returns the number of bytes rather than the number of characters in a string.
     */
    public static function length (string $string):int {

        return strlen($string);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSafe::compare() If comparison is case-sensitive.
     *
     * @param string $string_1 <p>
     * String to compare against.
     * </p>
     * @param string $string_2 <p>
     * String to compare with.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is comparison case-sensitive or not.
     * </p>
     */
    public static function compare (string $string_1, string $string_2, bool $case_sensitive = true):int {

        return $case_sensitive
            ? parent::compare($string_1, $string_2)
            : strcasecmp($string_1, $string_2) <=> 0;

    }

    /**
     * ### Comparison of two strings from an offset, up to length characters
     * @since 1.0.0
     *
     * @param string $string_1 <p>
     * String to compare against.
     * </p>
     * @param string $string_2 <p>
     * String to compare with.
     * </p>
     * @param int $offset [optional] <p>
     * The start position for the comparison. If negative, it starts counting from the end of the string.
     * </p>
     * @param null|int $length [optional] <p>
     * The length of the comparison. The default value is the largest of the length for the needle compared to the
     * length of haystack minus the offset.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * If case_sensitive is true, comparison is case-insensitive.
     * </p>
     *
     * @throws ValueError If $offset is higher than $string_1.
     *
     * @return int -1 if string1 is less than string2, 1 if string1 is greater than string2 and 0 if they are equal.
     */
    public static function comparePart (string $string_1, string $string_2, int $offset, int $length = null, bool $case_sensitive = true):int {

        return substr_compare(
            $string_1,
            $string_2,
            $offset,
            $length,
            !$case_sensitive
        );

    }

    /**
     * ### String comparison of the first n characters
     * @since 1.0.0
     *
     * @param string $string_1 <p>
     * String to compare against.
     * </p>
     * @param string $string_2 <p>
     * String to compare with.
     * </p>
     * @param int $length <p>
     * Number of characters to use in the comparison.
     * </p>
     *
     * @return int|false -1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are
     * equal, or false if length is less than 0.
     */
    public static function compareFirstN (string $string_1, string $string_2, int $length):int|false {

        return $length > 0 ? strncmp($string_1, $string_2, $length) <=> 0 : false;

    }

    /**
     * ### Find the position of the first occurrence of a substring in a string
     * @since 1.0.0
     *
     * @param string $search <p>
     * A string to find position.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Search case-sensitive position.
     * </p>
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from the beginning of the string.
     * </p>
     *
     * @return int|false Numeric position of the first occurrence or false if none exist.
     *
     * @warning This function may return Boolean false, but may also return a non-Boolean value which evaluates to
     * false. Please read the section on Booleans for more information. Use the === operator for testing the return
     * value of this function.
     */
    public static function firstPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0):int|false {

        if ($case_sensitive) return strpos($string, $search, $offset);

        return stripos($string, $search, $offset);

    }

    /**
     * ### Find the position of the last occurrence of a substring in a string
     * @since 1.0.0
     *
     * @param string $search <p>
     * A string to find position.
     * </p>
     * @param string $string <p>
     * The string to search in.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Search case-sensitive position.
     * </p>
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from the beginning of the string.
     * </p>
     *
     * @return int|false Numeric position of the last occurrence or false if none exist.
     *
     * @warning This function may return Boolean false, but may also return a non-Boolean value which evaluates to
     * false. Please read the section on Booleans for more information. Use the === operator for testing the return
     * value of this function.
     */
    public static function lastPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0):int|false {

        if ($case_sensitive) return strrpos($string, $search, $offset);

        return strripos($string, $search, $offset);

    }

}