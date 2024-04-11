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

namespace FireHub\Core\Support\Contracts\HighLevel;

use FireHub\Core\Support\Contracts\Stringable;
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Characters contract
 *
 * Interface allows you to represent character.
 * @since 1.0.0
 */
interface Characters extends Stringable {

    /**
     * ### Regular expression
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Strings\Expression Regular expression.
     */
    public function expression ():Expression;

    /**
     * ### Get or change character encoding
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     *
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding <p>
     * Character encoding.
     * </p>
     *
     * @return $this|\FireHub\Core\Support\Enums\String\Encoding This character or current encoding.
     * @phpstan-return ($encoding is null ? \FireHub\Core\Support\Enums\String\Encoding : $this)
     */
    public function encoding (?Encoding $encoding = null):self|Encoding;

    /**
     * ### Get character as raw string
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Characters|string <code>$this|non-empty-string</code> Character as string.
     * @phpstan-return ($string is null ? non-empty-string : \FireHub\Core\Support\Contracts\HighLevel\Characters)
     */
    public function string (string $string = null):Characters|string;

    /**
     * ### Make a character lowercase
     * @since 1.0.0
     *
     * @return $this This character.
     */
    public function toLower ():self;

    /**
     * ### Make a character uppercase
     * @since 1.0.0
     *
     * @return $this This character.
     */
    public function toUpper ():self;

    /**
     * ### Get character as codepoint
     * @since 1.0.0
     *
     * @return int Character as codepoint.
     */
    public function codepoint ():int;

}