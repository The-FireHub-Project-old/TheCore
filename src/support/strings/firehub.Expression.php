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

use FireHub\Core\Support\Contracts\HighLevel\ {
    Characters, Strings
};
use FireHub\Core\Support\Strings\Expression\ {
    Check, Get, Replace, ReplaceFunc, Split
};
use FireHub\Core\Support\Enums\String\Expression\Modifier;
use Closure;

/**
 * ### Regular expression
 * @since 1.0.0
 */
final class Expression {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters As parameter.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings As parameter.
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string <p>
     * Character or string to use.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Characters|Strings $string
    ) {}

    /**
     * ### Perform a regular expression check
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Check As return.
     *
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Check Regular expression check.
     */
    public function check (Modifier ...$modifiers):Check {

        return new Check($this->string, ...$modifiers);

    }

    /**
     * ### Perform a regular expression check and get a result
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Part As return.
     *
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Get Regular expression check and get a result.
     */
    public function get (Modifier ...$modifiers):Get {

        return new Get($this->string, ...$modifiers);

    }

    /**
     * ### Perform a regular expression search and replace
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Replace As return.
     *
     * @param string $with <p>
     * The string to replace.
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Replace Regular expression search and replace.
     */
    public function replace (string $with, Modifier ...$modifiers):Replace {

        return new Replace($this->string, $with, ...$modifiers);

    }

    /**
     * ### Perform a regular expression search and replace
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Replace As return.
     *
     * @param Closure(array<array-key, string> $matches):string $callback <p>
     * <code><![CDATA[ Closure(array<array-key, string> $matches):string ]]></code>
     * A callback that will be called and passed an array of matched elements in the subject string.
     * The callback should return the replacement string.
     * This is the callback signature.
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\ReplaceFunc Regular expression search and replace using a callback.
     */
    public function replaceFunc (Closure $callback, Modifier ...$modifiers):ReplaceFunc {

        return new ReplaceFunc($this->string, $callback, ...$modifiers);

    }

    /**
     * ### Perform a regular expression remove
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Replace As return.
     *
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Replace Regular expression search and remove.
     */
    public function remove (Modifier ...$modifiers):Replace {

        return new Replace($this->string, '', ...$modifiers);

    }

    /**
     * ### Perform a regular expression split
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Split As return.
     *
     * @param int $limit [optional] <p>
     * The maximum possible replacements for each pattern in each subject string.
     * Defaults to -1 (no limit).
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Split Regular expression split.
     */
    public function split (int $limit = -1, Modifier ...$modifiers):Split {

        return new Split($this->string, $limit, ...$modifiers);

    }

}