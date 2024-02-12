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
use FireHub\Core\Support\Enums\String\Encoding;

use function mb_ereg;
use function mb_ereg_replace;
use function mb_ereg_replace_callback;
use function mb_eregi;
use function mb_regex_encoding;

/**
 * ### Multibyte regex low-level proxy class
 *
 * The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the
 * delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character
 * except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself,
 * it needs to be escaped by backslash. Perl-style (), {}, [], and <> matching delimiters may also be used.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 *
 * @comment Temporary exclude on phpmd.md because match pattern is not read correctly on line 158.
 */
final class RegexMB {

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
     * @param bool $case_sensitive [optional] <p>
     * Case-sensitive match.
     * </p>
     *
     * @return bool True if string matches the regular expression pattern, false if not.
     */
    public static function match (string $pattern, string $string, bool $case_sensitive = true):bool {

        return $case_sensitive
            ? mb_ereg($pattern, $string)
            : mb_eregi($pattern, $string);

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
     *
     * @throws Error If string is not valid for the current encoding, or while performing a regular expression search
     * and replace.
     *
     * @return string Replaced string.
     * @warning Never use the e modifier when working on untrusted input. No automatic escaping will happen (as known
     * from [[RegexSB#replace()]]). Not taking care of this will most likely create remote code execution
     * vulnerabilities in your application.
     * @note The internal encoding or the character encoding specified by encoding() will be used as character
     * encoding for this function.
     */
    public static function replace (string $pattern, string $replacement, string $string):string {

        return mb_ereg_replace($pattern, $replacement, $string)
            ?: throw new Error('Error while perform a regular expression search and replace.');

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
     *
     * @throws Error If string is not valid for the current encoding, or while performing a regular expression search
     * and replace.
     *
     * @return string Replaced string.
     */
    public static function replaceFunc (string $pattern, callable $callback, string $string):string {

        return mb_ereg_replace_callback($pattern, $callback, $string)
            ?: throw new Error('Error while performing a regular expression search and replace.');

    }

    /**
     * ### Set/Get character encoding for multibyte regex
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding To get or set regex character encoding.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if provider encoding is string.
     *
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @throws Error If encoding is invalid or failed to get regex encoding.
     *
     * @return true|Encoding If encoding is set, then returns true. In this case, the internal character encoding is
     * NOT changed. If encoding is omitted, then the current character encoding name for a multibyte regex is returned.
     *
     * @SuppressWarnings(PHPMD)
     *
     * @phpstan-ignore-next-line PHPStan reports that mb_regex_encoding can only be bool.
     */
    public static function encoding (Encoding $encoding = null):true|Encoding {

        return match ($regex_encoding = mb_regex_encoding($encoding?->value)) {
            true => true,
            false => throw new Error('Failed to get regex encoding.'),
            DataIs::string($regex_encoding) => Encoding::tryFrom($regex_encoding) // @phpstan-ignore-line PHPStan reports that mb_regex_encoding can only be bool
                ?? throw new Error('Invalid regex encoding.')
        };

    }

}