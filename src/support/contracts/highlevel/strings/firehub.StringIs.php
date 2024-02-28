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

namespace FireHub\Core\Support\Contracts\HighLevel\Strings;

/**
 * ### Strings checker contract
 * @since 1.0.0
 */
interface StringIs {

    /**
     * ### Checks if string is empty
     * @since 1.0.0
     *
     * @return bool True if string is empty, false otherwise.
     */
    public function empty ():bool;

    /**
     * ### Checks if string is lowercase
     * @since 1.0.0
     *
     * @return bool True if string is lowercase, false otherwise.
     */
    public function lower ():bool;

    /**
     * ### Checks if string is uppercase
     * @since 1.0.0
     *
     * @return bool True if string is uppercase, false otherwise.
     */
    public function upper ():bool;

    /**
     * ### Checks if string is alphabetic
     * @since 1.0.0
     *
     * @return bool True if string is alphabetic, false otherwise.
     */
    public function alphabetic ():bool;

    /**
     * ### Checks if string is alphanumeric
     * @since 1.0.0
     *
     * @return bool True if string is alphanumeric, false otherwise.
     */
    public function alphanumeric ():bool;

    /**
     * ### Checks if string is whitespace
     * @since 1.0.0
     *
     * @return bool True if string is whitespace, false otherwise.
     */
    public function blank ():bool;

    /**
     * ### Checks if string is numeric
     * @since 1.0.0
     *
     * @return bool True if string is numeric, false otherwise.
     */
    public function numeric ():bool;

    /**
     * ### Checks if string is hexadecimal
     * @since 1.0.0
     *
     * @return bool True if string is hexadecimal, false otherwise.
     */
    public function hexadecimal ():bool;

    /**
     * ### Checks if string is control code
     * @since 1.0.0
     *
     * @return bool True if string is control code, false otherwise.
     */
    public function control ():bool;

    /**
     * ### Checks if string is printable
     * @since 1.0.0
     *
     * @return bool True if string is printable, false otherwise.
     */
    public function printable ():bool;

    /**
     * ### Checks if string is graphical
     * @since 1.0.0
     *
     * @return bool True if string is graphical, false otherwise.
     */
    public function graphical ():bool;

    /**
     * ### Checks if string is punctuation
     * @since 1.0.0
     *
     * @return bool True if string is punctuation, false otherwise.
     */
    public function punctuation ():bool;

    /**
     * ### Checks if string is ASCII
     * @since 1.0.0
     *
     * @return bool True if string is ASCII, false otherwise.
     */
    public function ascii ():bool;

    /**
     * ### Checks if first character of string uppercased
     * @since 1.0.0
     *
     * @return bool True if string is capitalized, false otherwise.
     */
    public function capitalized ():bool;

}