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

use FireHub\Core\Support\Enums\String\ {
    CaseFolding, Encoding
};
use Error, ValueError;

use function mb_check_encoding;
use function mb_convert_case;
use function mb_convert_encoding;
use function mb_detect_encoding;
use function mb_internal_encoding;
use function mb_str_split;
use function mb_stripos;
use function mb_stristr;
use function mb_strlen;
use function mb_strpos;
use function mb_strrchr;
use function mb_strrichr;
use function mb_strripos;
use function mb_strrpos;
use function mb_strstr;
use function mb_substr;
use function mb_substr_count;

/**
 * ### Multibyte string low-level proxy class
 *
 * Class provides multibyte specific string functions that help you deal with multibyte encodings.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class StrMB extends StrSafe {

    /**
     * ### Perform case folding on a string
     *
     * Performs case folding on a string, converted in the way specified by $caseFolding.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::UPPER To convert to uppercase.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To convert to lowercase.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::TITLE To convert to title-case.
     *
     * @param string $string <p>
     * The string being converted.
     * </p>
     * @param \FireHub\Core\Support\Enums\String\CaseFolding $caseFolding <p>
     * The case folding type.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string <code>$string is non-empty-string ? non-empty-string : string</code> Converted string.
     * @phpstan-return ($string is non-empty-string ? non-empty-string : string)
     */
    public static function convert (string $string, CaseFolding $caseFolding, Encoding $encoding = null):string {

        return mb_convert_case($string, match ($caseFolding) {
            CaseFolding::UPPER => 0,
            CaseFolding::LOWER => 1,
            CaseFolding::TITLE => 2
        }, $encoding?->value);

    }

    /**
     * ### Get part of string
     *
     * Performs a multibyte safe [[StrSB#part()]] operation based on the number of characters. Position is counted
     * from the beginning of $string. First character's position is 0. Second character position is 1, and so on.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
     *
     * @param string $string <p>
     * The string to extract the substring from.
     * </p>
     * @param int $start <p>
     * If start is non-negative, the returned string will start at the start position in string, counting from zero.
     * For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
     * and so forth.
     * If the start is negative, the returned string will start at the start character from the end of the string.
     * </p>
     * @param null|int $length [optional] <p>
     * Maximum number of characters to use from string.
     * If omitted or NULL is passed, extract all characters to the end of the string.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string The portion of string specified by the start and length parameters.
     */
    public static function part (string $string, int $start, int $length = null, Encoding $encoding = null):string {

        return mb_substr($string, $start, $length, $encoding?->value);

    }

    /**
     * ### Find first part of a string
     *
     * Returns part of $string starting from and including the first occurrence of $find to the end of $string.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
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
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string|false The portion of string or false if needle is not found.
     */
    public static function firstPart (string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, Encoding $encoding = null):string|false {

        if ($case_sensitive) return mb_strstr($string, $find, $before_needle, $encoding?->value);

        return mb_stristr($string, $find, $before_needle, $encoding?->value);

    }

    /**
     * ### Find last part of a string
     *
     * This function returns the portion of $string which starts at the last occurrence of $find and goes until the
     * end of $string.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
     *
     * @param string $find <p>
     * String to find.
     * </p>
     * @param string $string <p>
     * The string being searched.
     * </p>
     * @param bool $before_needle [optional] <p>
     * If true, return the part of the string before the last occurrence (excluding the find string).
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Is string to find case-sensitive or not.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return string|false The portion of string, or false if needle is not found.
     */
    public static function lastPart (string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, Encoding $encoding = null):string|false {

        if ($case_sensitive) return mb_strrchr($string, $find, $before_needle, $encoding?->value);

        return mb_strrichr($string, $find, $before_needle, $encoding?->value);

    }

    /**
     * ### Given a multibyte string, return an array of its characters
     *
     * This function will return an array of strings, it is a version of [[StrSB#split()]] with support for encodings of
     * variable character size as well as fixed-size encodings of 1,2 or 4 byte characters. If the $length parameter
     * is specified, the string is broken down into chunks of the specified length in characters (not bytes). The
     * $encoding parameter can be optionally specified, and it is good practice to do so.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
     *
     * @param string $string <p>
     * The input string.
     * </p>
     * @param int $length [optional] <p>
     * <code>positive-int</code>
     * Maximum length of the chunk.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
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
    public static function split (string $string, int $length = 1, Encoding $encoding = null):array {

        return !$length < 1
            ? mb_str_split($string, $length, $encoding?->value)
            : throw new Error('Length must be at least 1.');

    }

    /**
     * ### Get number of times the searched substring occurs in the string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
     *
     * @param string $string <p>
     * The string being checked.
     * </p>
     * @param string $search <p>
     * The string being found.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return int <code>non-negative-int</code> Number of times the searched substring occurs in the string.
     * @phpstan-return non-negative-int
     */
    public static function partCount (string $string, string $search, Encoding $encoding = null):int {

        return mb_substr_count($string, $search, $encoding?->value);

    }

    /**
     * ### Get string length
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
     *
     * @param string $string <p>
     * The string being measured for length.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @error\exeption E_WARNING If the encoding is unknown.
     *
     * @return int <code>non-negative-int</code> String length.
     * @phpstan-return non-negative-int
     */
    public static function length (string $string, Encoding $encoding = null):int {

        return mb_strlen($string, $encoding?->value);

    }

    /**
     * ### Find the position of the first occurrence of a substring in a string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
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
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return false|int Numeric position of the first occurrence or false if none exist.
     * @phpstan-return non-negative-int|false
     */
    public static function firstPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0, Encoding $encoding = null):false|int {

        if ($case_sensitive) return mb_strpos($string, $search, $offset, $encoding?->value);

        return mb_stripos($string, $search, $offset, $encoding?->value);

    }

    /**
     * ### Find the position of the last occurrence of a substring in a string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
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
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @return false|int Numeric position of the last occurrence or false if none exist.
     * @phpstan-return non-negative-int|false
     */
    public static function lastPosition (string $search, string $string, bool $case_sensitive = true, int $offset = 0, Encoding $encoding = null):false|int {

        if ($case_sensitive) return mb_strrpos($string, $search, $offset, $encoding?->value);

        return mb_strripos($string, $search, $offset, $encoding?->value);

    }

    /**
     * ### Set/Get internal character encoding
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding The encoding parameter for character encoding.
     *
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding <p>
     * Encoding is the character encoding name used for the HTTP input character encoding conversion, HTTP output
     * character encoding conversion, and the default character encoding for string functions defined by the mbstring
     * module. You should notice that the internal encoding is totally different from the one for multibyte regex.
     * </p>
     *
     * @throws ValueError If the value of encoding is an invalid encoding.
     * @throws Error If we could not get current encoding.
     *
     * @return true|\FireHub\Core\Support\Enums\String\Encoding If encoding is set, then returns true. In this case, the
     * character encoding for multibyte regex is NOT changed. If encoding is omitted, then the current character
     * encoding name is returned.
     * @phpstan-return ($encoding is null ? \FireHub\Core\Support\Enums\String\Encoding : true)
     */
    public static function encoding (Encoding $encoding = null):true|Encoding {

        return $encoding
            ? mb_internal_encoding($encoding->value)
            : (($encoding = Encoding::tryFrom(mb_internal_encoding()))
                ? $encoding : throw new Error('Could not get current encoding.'));

    }

    /**
     * ### Detect character encoding
     *
     * Detects the most likely character encoding for string from an ordered list of candidates.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As detected encoding.
     *
     * @param string $string <p>
     * The string to detect encoding.
     * </p>
     *
     * @return null|\FireHub\Core\Support\Enums\String\Encoding The detected character encoding, or null if the string
     * is not valid in any of the listed encodings.
     */
    public static function detectEncoding (string $string):?Encoding {

        $cases = [];
        foreach (Encoding::cases() as $case) $cases[] = $case->value;

        return Encoding::tryFrom(
            mb_detect_encoding($string, $cases, true) ?: ''
        );

    }

    /**
     * ### Convert a string from one character encoding to another
     *
     * Converts string from $from, or the current internal encoding, to $to. If a string is an array, all its $string
     * values will be converted recursively.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As converted encoding.
     *
     * @param string $string <p>
     * The string to be converted.
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Encoding $to <p>
     * The desired encoding of the result.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $from [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @throws Error If we could not convert string.
     * @throws ValueError If the value of $to or $from is an invalid encoding.
     *
     * @return string Encoded string.
     */
    public static function convertEncoding (string $string, Encoding $to, Encoding $from = null):string {

        return mb_convert_encoding($string, $to->value, $from?->value)
            ?: throw new Error('Could not convert string.');

    }

    /**
     * ### Check if strings are valid for the specified encoding
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As checked encoding.
     *
     * @param string $string <p>
     * The string to check encoding on.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding <p>
     * The expected encoding.
     * </p>
     *
     * @return True on success or false on failure.
     */
    public static function checkEncoding (string $string, Encoding $encoding = null):bool {

        /** @phpstan-ignore-next-line PHPStan reports return should be true */
        return mb_check_encoding($string, $encoding?->value);

    }

}