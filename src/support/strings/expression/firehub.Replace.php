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

namespace FireHub\Core\Support\Strings\Expression;

use FireHub\Core\Support\Contracts\HighLevel\ {
    Characters, Strings
};
use FireHub\Core\Support\LowLevel\Regex;
use FireHub\Core\Support\Enums\String\Expression\Modifier;

/**
 * ### Perform a regular expression search and replace
 * @since 1.0.0
 */
final class Replace extends FunctionFamily {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters As parameter.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings As parameter.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Pattern::get() To get pattern result.
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character <p>
     * Character or string to use.
     * </p>
     * @param string $with <p>
     * The string to replace.
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected Characters|Strings $string_or_character,
        private readonly string $with,
        Modifier ...$modifiers
    ) {

        parent::__construct($string_or_character, ...$modifiers);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\FunctionFamily::patternBuilder() To build a pattern.
     * @uses \FireHub\Core\Support\LowLevel\Regex::replace() To perform a regular expression search and replace.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters::string() To get character raw string.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings::string() To get string raw string.
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings
     * This character or string.
     */
    public function custom (string $pattern):Characters|Strings {

        return $this->string_or_character->string(
            Regex::replace($this->patternBuilder($pattern), $this->with, $this->string_or_character->string())
        );

    }

}