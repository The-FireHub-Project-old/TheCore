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
 * ### Strings contract
 *
 * A string is a stream of character.
 * @since 1.0.0
 */
interface Strings extends Stringable {

    /**
     * ### Checks if string is lowercase
     * @since 1.0.0
     *
     * @return bool True if string is lowercase, false otherwise.
     */
    public function isLower ():bool;

    /**
     * ### Checks if string is uppercase
     * @since 1.0.0
     *
     * @return bool True if string is uppercase, false otherwise.
     */
    public function isUpper ():bool;

    /**
     * ### Checks if string is alphabetic
     * @since 1.0.0
     *
     * @return bool True if string is alphabetic, false otherwise.
     */
    public function isAlphabetic ():bool;

    /**
     * ### Checks if string is alphanumeric
     * @since 1.0.0
     *
     * @return bool True if string is alphanumeric, false otherwise.
     */
    public function isAlphanumeric ():bool;

    /**
     * ### Checks if string is whitespace
     * @since 1.0.0
     *
     * @return bool True if string is whitespace, false otherwise.
     */
    public function isBlank ():bool;

    /**
     * ### Checks if string is numeric
     * @since 1.0.0
     *
     * @return bool True if string is numeric, false otherwise.
     */
    public function isNumeric ():bool;

    /**
     * ### Checks if string is hexadecimal
     * @since 1.0.0
     *
     * @return bool True if string is hexadecimal, false otherwise.
     */
    public function isHexadecimal ():bool;

    /**
     * ### Checks if string is control code
     * @since 1.0.0
     *
     * @return bool True if string is control code, false otherwise.
     */
    public function isControl ():bool;

    /**
     * ### Checks if string is printable
     * @since 1.0.0
     *
     * @return bool True if string is printable, false otherwise.
     */
    public function isPrintable ():bool;

    /**
     * ### Checks if string is graphical
     * @since 1.0.0
     *
     * @return bool True if string is graphical, false otherwise.
     */
    public function isGraphical ():bool;

    /**
     * ### Checks if string is punctuation
     * @since 1.0.0
     *
     * @return bool True if string is punctuation, false otherwise.
     */
    public function isPunctuation ():bool;

    /**
     * ### Checks if string is ASCII
     * @since 1.0.0
     *
     * @return bool True if string is ASCII, false otherwise.
     */
    public function isASCII ():bool;

    /**
     * ### Checks if string has lowercase
     * @since 1.0.0
     *
     * @return bool True if string has lowercase, false otherwise.
     */
    public function hasLower ():bool;

    /**
     * ### Checks if string has uppercase
     * @since 1.0.0
     *
     * @return bool True if string has uppercase, false otherwise.
     */
    public function hasUpper ():bool;

    /**
     * ### Checks if string has alphabetic
     * @since 1.0.0
     *
     * @return bool True if string has alphabetic, false otherwise.
     */
    public function hasAlphabetic ():bool;

    /**
     * ### Checks if string has alphanumeric
     * @since 1.0.0
     *
     * @return bool True if string has alphanumeric, false otherwise.
     */
    public function hasAlphanumeric ():bool;

    /**
     * ### Checks if string has whitespace
     * @since 1.0.0
     *
     * @return bool True if string has whitespace, false otherwise.
     */
    public function hasBlank ():bool;

    /**
     * ### Checks if string has numeric
     * @since 1.0.0
     *
     * @return bool True if a string has numeric, false otherwise.
     */
    public function hasNumeric ():bool;

    /**
     * ### Checks if string has hexadecimal
     * @since 1.0.0
     *
     * @return bool True if string has hexadecimal, false otherwise.
     */
    public function hasHexadecimal ():bool;

    /**
     * ### Checks if string has control code
     * @since 1.0.0
     *
     * @return bool True if string has control code, false otherwise.
     */
    public function hasControl ():bool;

    /**
     * ### Checks if string has printable
     * @since 1.0.0
     *
     * @return bool True if string has printable, false otherwise.
     */
    public function hasPrintable ():bool;

    /**
     * ### Checks if string has graphical
     * @since 1.0.0
     *
     * @return bool True if string has graphical, false otherwise.
     */
    public function hasGraphical ():bool;

    /**
     * ### Checks if string has punctuation
     * @since 1.0.0
     *
     * @return bool True if string has punctuation, false otherwise.
     */
    public function hasPunctuation ():bool;

    /**
     * ### Get string as raw string
     * @since 1.0.0
     *
     * @return string String as raw string.
     */
    public function string ():string;

    /**
     * ### Carry with part of the string
     *
     * Carry with part of the string specified by the $from and $length parameters.
     * @since 1.0.0
     *
     * @param int $from <p>
     * If start is non-negative, the returned string will start at the start position in string, counting from zero.
     * For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
     * and so forth.
     * If the start is negative, the returned string will start at the start character from the end of the string.
     * </p>
     * @param null|int $length [optional] <p>
     * Maximum number of characters to use from string.
     * If omitted or NULL is passed, extract all characters to the end of the string.
     * </p>
     *
     * @return $this This string.
     */
    public function carry (int $from, ?int $length = null):self;

}