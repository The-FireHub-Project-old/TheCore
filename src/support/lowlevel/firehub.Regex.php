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

use Error;

use function preg_match;
use function preg_match_all;
use function preg_replace;
use function preg_replace_callback;
use function preg_split;

/**
 * ### Regex low-level proxy class
 *
 * The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the
 * delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character
 * except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself,
 * it needs to be escaped by backslash. Perl style (), {}, [], and <> matching delimiters may also be used.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class Regex {

    /**
     * ### Perform a regular expression match
     *
     * Searches subject for a match to the regular expression given in a pattern.
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     * @param string $string <p>
     * The string being evaluated.
     * </p>
     * @param int $offset [optional] <p>
     * Normally, the search starts from the beginning of the subject string. The optional parameter offset can be used
     * to specify the alternate place from which to start the search (in bytes).
     * </p>
     * @param bool $all [optional] <p>
     * If true, search subject for a match to the regular expression given in a pattern.
     * </p>
     * @param null|array &$result [optional] <p>
     * <code>null|string[]</code>
     * Regular expression match result.
     * </p>
     * @phpstan-param null|string[] &$result
     * @param-out array $result
     *
     * @error\exeption E_WARNING if the regex pattern passed does not compile to a valid regex.
     *
     * @return bool True if string matches the regular expression pattern, false if not.
     *
     * @warning This function may return Boolean false, but may also return a non-Boolean value which evaluates to
     * false. Please read the section on Booleans for more information. Use the === operator for testing the return
     * value of this function.
     */
    public static function match (string $pattern, string $string, int $offset = 0, bool $all = false, array &$result = null):bool {

        return $all
            ? preg_match_all($pattern, $string, $result, offset: $offset) !== 0
            : preg_match($pattern, $string, $result, offset: $offset) !== 0;

    }

    /**
     * ### Perform a regular expression search and replace
     *
     * Searches $subject for matches to $pattern and replaces them with $replacement.
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     * @param string $replacement <p>
     * The string to replace.
     * </p>
     * @param string $string <p>
     * The string being evaluated.
     * </p>
     * @param int $limit [optional] <p>
     * The maximum possible replacements for each pattern in each subject string.
     * Defaults to -1 (no limit).
     * </p>
     *
     * @throws Error If error while performing a regular expression search and replace.
     * @error\exeption E_WARNING using the "\e" modifier, or if the regex pattern passed does not compile to valid
     * regex.
     *
     * @return string Replaced string.
     */
    public static function replace (string $pattern, string $replacement, string $string, int $limit = -1):string {

        return preg_replace($pattern, $replacement, $string, $limit)
            ?? throw new Error("Error while performing a regular expression search and replace.");

    }

    /**
     * ### Perform a regular expression search and replace using a callback
     *
     * Searches $subject for matches to $pattern and replaces them with $replacement.
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     * @param callable(array<array-key, string> $matches):string $callback <p>
     * <code><![CDATA[ callable(array<array-key, string> $matches):string ]]></code>
     * A callback that will be called and passed an array of matched elements in the subject string.
     * The callback should return the replacement string.
     * This is the callback signature.
     * </p>
     * @param string $string <p>
     * The string being evaluated.
     * </p>
     * @param int $limit [optional] <p>
     * The maximum possible replacements for each pattern in each subject string.
     * Defaults to -1 (no limit).
     * </p>
     *
     * @throws Error If error while performing a regular expression search and replace.
     * @error\exeption E_WARNING using the "\e" modifier, or if the regex pattern passed does not compile to valid
     * regex.
     *
     * @return string Replaced string.
     */
    public static function replaceFunc (string $pattern, callable $callback, string $string, int $limit = -1):string {

        return preg_replace_callback($pattern, $callback, $string, $limit)
            ?? throw new Error("Error while performing a regular expression search and replace.");

    }

    /**
     * ### Split string by a regular expression
     *
     * Split the given string by a regular expression.
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     * @param string $string <p>
     * The input string.
     * </p>
     * @param int $limit [optional] <p>
     * The maximum possible replacements for each pattern in each subject string.
     * Defaults to -1 (no limit).
     * </p>
     *
     * @throws Error If error while performing a regular expression split.
     * @error\exeption E_WARNING using the "\e" modifier, or if the regex pattern passed does not compile to valid
     * regex.
     *
     * @return array <code>string[]</code> Array containing substrings of $string split along boundaries matched
     * by $pattern.
     * @phpstan-return string[]
     */
    public static function split (string $pattern, string $string, int $limit = -1):array {

        return preg_split($pattern, $string, $limit)
            ?: throw new Error("Error while performing a regular expression split.");

    }

}