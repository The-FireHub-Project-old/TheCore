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

use FireHub\Core\Support\LowLevel\Regex;

/**
 * ### Perform a regular expression split
 * @since 1.0.0
 */
final class Split extends FunctionFamily {

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
     * @return array <code>string[]</code> True if string matches the regular expression pattern, false if not.
     * @phpstan-return string[]
     */
    public function custom (string $pattern):array {

        return Regex::split($this->patternBuilder($pattern), $this->string_or_character->string());

    }

}