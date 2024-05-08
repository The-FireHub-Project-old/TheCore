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
 * ### Perform a regular expression split
 * @since 1.0.0
 */
final class Split extends FunctionFamily {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters As parameter.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings As parameter.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character <p>
     * Character or string to use.
     * </p>
     * @param bool $remove_empty <p>
     * If true, only non-empty pieces will be returned.
     * </p>
     * @param int $limit [optional] <p>
     * The maximum possible replacements for each pattern in each subject string.
     * Defaults to -1 (no limit).
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected Characters|Strings $string_or_character,
        private readonly bool $remove_empty,
        private readonly int $limit = -1,
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
     * @uses \FireHub\Core\Support\LowLevel\Regex::split() To perform a regular expression split.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters::string() To get character raw string.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings::string() To get string raw string.
     *
     * @return string[] True if string matches the regular expression pattern, false if not.
     */
    public function custom (string $pattern):array {

        return Regex::split($this->patternBuilder($pattern), $this->string_or_character->string(), $this->limit, $this->remove_empty);

    }

}