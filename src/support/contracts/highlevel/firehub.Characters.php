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

/**
 * ### Characters contract
 *
 * Interface allows you to represent character.
 * @since 1.0.0
 */
interface Characters extends Stringable {

    /**
     * ### Checks if character is lowercase
     * @since 1.0.0
     *
     * @return bool True if character is lowercase, false otherwise.
     */
    public function isLower ():bool;

    /**
     * ### Checks if character is uppercase
     * @since 1.0.0
     *
     * @return bool True if character is uppercase, false otherwise.
     */
    public function isUpper ():bool;

    /**
     * ### Checks if character is alphabetic
     * @since 1.0.0
     *
     * @return bool True if character is alphabetic, false otherwise.
     */
    public function isAlphabetic ():bool;

    /**
     * ### Checks if character is alphanumeric
     * @since 1.0.0
     *
     * @return bool True if character is alphanumeric, false otherwise.
     */
    public function isAlphanumeric ():bool;

    /**
     * ### Checks if character is whitespace
     * @since 1.0.0
     *
     * @return bool True if character is whitespace, false otherwise.
     */
    public function isBlank ():bool;

    /**
     * ### Checks if character is numeric
     * @since 1.0.0
     *
     * @return bool True if character is numeric, false otherwise.
     */
    public function isNumeric ():bool;

    /**
     * ### Checks if character is hexadecimal
     * @since 1.0.0
     *
     * @return bool True if character is hexadecimal, false otherwise.
     */
    public function isHexadecimal ():bool;

    /**
     * ### Checks if character is control code
     * @since 1.0.0
     *
     * @return bool True if character is control code, false otherwise.
     */
    public function isControl ():bool;

    /**
     * ### Checks if character is printable
     * @since 1.0.0
     *
     * @return bool True if character is printable, false otherwise.
     */
    public function isPrintable ():bool;

    /**
     * ### Checks if character is graphical
     * @since 1.0.0
     *
     * @return bool True if character is graphical, false otherwise.
     */
    public function isGraphical ():bool;

    /**
     * ### Checks if character is punctuation
     * @since 1.0.0
     *
     * @return bool True if character is punctuation, false otherwise.
     */
    public function isPunctuation ():bool;

    /**
     * ### Checks if character is ASCII
     * @since 1.0.0
     *
     * @return bool True if character is ASCII, false otherwise.
     */
    public function isASCII ():bool;

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