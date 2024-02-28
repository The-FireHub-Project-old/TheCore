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
use FireHub\Core\Support\Contracts\HighLevel\Strings\StringIs;

/**
 * ### Characters contract
 *
 * Interface allows you to represent character.
 * @since 1.0.0
 */
interface Characters extends Stringable {

    /**
     * ### Check character
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Strings\StringIs String checker.
     */
    public function is ():StringIs;

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
     * ### Get character as raw string
     * @since 1.0.0
     *
     * @return string <code>non-empty-string</code> Character as string.
     * @return non-empty-string
     */
    public function string ():string;

    /**
     * ### Get character as codepoint
     * @since 1.0.0
     *
     * @return int Character as codepoint.
     */
    public function codepoint ():int;

}