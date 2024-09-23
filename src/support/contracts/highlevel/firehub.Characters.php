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

use FireHub\Core\Support\Contracts\Magic\Stringable;
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\Enums\String\ {
    Encoding, Expression\Modifier
};

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
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of additional expression pattern modifiers.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression Regular expression.
     */
    public function expression (Modifier ...$modifiers):Expression;

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
     * @return ($encoding is null ? \FireHub\Core\Support\Enums\String\Encoding : $this) This character or current encoding.
     */
    public function encoding (?Encoding $encoding = null):self|Encoding;

    /**
     * ### Boolean representation of the given logical character value
     *
     * True – positive-int
     * False – non-positive-int
     * For all other characters, the return value is a result of a boolean cast.
     * @since 1.0.0
     *
     * @return bool True or false, based on boolean representation of the given logical character value.
     */
    public function asBoolean ():bool;

    /**
     * ### Get character as raw string
     * @since 1.0.0
     *
     * @param null|string $string [optional] <p>
     * If exists, argument will set the string.
     * </p>
     *
     * @return ($string is null ? non-empty-string : \FireHub\Core\Support\Contracts\HighLevel\Characters) Character as string.
     */
    public function string (?string $string = null):Characters|string;

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