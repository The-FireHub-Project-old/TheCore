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

use FireHub\Core\Support\LowLevel\RegexMB;
use FireHub\Core\Support\Enums\String\Encoding;
use Error, FireHub\Core\Support\Contracts\Stringable;

/**
 * ### Regular expression
 * @since 1.0.0
 */
final class Expression implements Stringable {

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
    public function __construct (
        private string $string,
        private readonly ?Encoding $encoding = null
    ) {}

    /**
     * ### Perform a regular expression match
     *
     * Searches subject for a match to the regular expression given in a pattern.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::encoding() To set string encoding for multibyte regex.
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::match() To perform a regular expression match.
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     * @param bool $case_sensitive <p>
     * Case-sensitive match.
     * </p>
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if string matches the regular expression pattern, false if not.
     */
    public function match (string $pattern, bool $case_sensitive):bool {

        $regex_encoding = RegexMB::encoding();

        RegexMB::encoding($this->encoding);

        $match = RegexMB::match($pattern, $this->string, $case_sensitive);

        RegexMB::encoding($regex_encoding);

        return $match;

    }

    /**
     * ### Perform a regular expression search and replace
     *
     * Searches $subject for matches to $pattern and replaces them with $replacement.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::encoding() To set string encoding for multibyte regex.
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::match() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\String\Expression;
     *
     * new Expression('FireHub')->replace('[Fire]', 'Hot');
     *
     * // HotHub
     * ```
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     * @param string $replacement <p>
     * The string to replace.
     * </p>
     *
     * @throws Error If string is not valid for the current encoding, or while performing a regular expression search
     * and replace.
     *
     * @return self This expression.
     *
     * @warning Never use the e modifier when working on untrusted input. No automatic escaping will happen (as known
     * from [[Expression#replace()]]). Not taking care of this will most likely create remote code execution
     * vulnerabilities in your application.
     */
    public function replace (string $pattern, string $replacement):self {

        $regex_encoding = RegexMB::encoding();

        RegexMB::encoding($this->encoding);

        $this->string = RegexMB::replace($pattern, $replacement, $this->string);

        RegexMB::encoding($regex_encoding);

        return $this;

    }

    /**
     * ### Perform a regular expression search and replace using a callback
     *
     * Searches $subject for matches to $pattern and replaces them with $replacement.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::encoding() To set string encoding for multibyte regex.
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::replaceFunc() To perform a regular search and replace using a
     * callback.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\String\Expression;
     *
     * new Expression('FireHub')->replaceFunc('[FH]', fn($matches) => $matches[0].'-');
     *
     * // -Fire-Hub
     * ```
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
     *
     * @throws Error If string is not valid for the current encoding, or while performing a regular expression search
     * and replace.
     *
     * @return self This expression.
     */
    public function replaceFunc (string $pattern, callable $callback):self {

        $regex_encoding = RegexMB::encoding();

        RegexMB::encoding($this->encoding);

        $this->string = RegexMB::replaceFunc($pattern, $callback, $this->string)
            ?: throw new Error('Error while performing a regular expression search and replace.');

        RegexMB::encoding($regex_encoding);

        return $this;

    }

    /**
     * ### Get string as raw string
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\String\Expression;
     *
     * echo new Expression('FireHub')->string();
     *
     * // FireHub
     * ```
     */
    public function string ():string {

        return $this->string;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\String\Expression;
     *
     * echo new Expression('FireHub');
     *
     * // FireHub
     * ```
     *
     * @return string String as raw string.
     */
    public function __toString ():string {

        return $this->string;

    }

}