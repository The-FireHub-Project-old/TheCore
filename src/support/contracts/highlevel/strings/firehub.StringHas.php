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
 * ### Strings has checker contract
 * @since 1.0.0
 */
interface StringHas {

    /**
     * ### Checks if string has lowercase
     * @since 1.0.0
     *
     * @return bool True if string has lowercase, false otherwise.
     */
    public function lower ():bool;

    /**
     * ### Checks if string has uppercase
     * @since 1.0.0
     *
     * @return bool True if string has uppercase, false otherwise.
     */
    public function upper ():bool;

    /**
     * ### Checks if string has alphabetic
     * @since 1.0.0
     *
     * @return bool True if string has alphabetic, false otherwise.
     */
    public function alphabetic ():bool;

    /**
     * ### Checks if string has alphanumeric
     * @since 1.0.0
     *
     * @return bool True if string has alphanumeric, false otherwise.
     */
    public function alphanumeric ():bool;

    /**
     * ### Checks if string has whitespace
     * @since 1.0.0
     *
     * @return bool True if string has whitespace, false otherwise.
     */
    public function blank ():bool;

    /**
     * ### Checks if string has numeric
     * @since 1.0.0
     *
     * @return bool True if a string has numeric, false otherwise.
     */
    public function numeric ():bool;

    /**
     * ### Checks if string has hexadecimal
     * @since 1.0.0
     *
     * @return bool True if string has hexadecimal, false otherwise.
     */
    public function hexadecimal ():bool;

    /**
     * ### Checks if string has control code
     * @since 1.0.0
     *
     * @return bool True if string has control code, false otherwise.
     */
    public function control ():bool;

    /**
     * ### Checks if string has printable
     * @since 1.0.0
     *
     * @return bool True if string has printable, false otherwise.
     */
    public function printable ():bool;

    /**
     * ### Checks if string has graphical
     * @since 1.0.0
     *
     * @return bool True if string has graphical, false otherwise.
     */
    public function graphical ():bool;

    /**
     * ### Checks if string has punctuation
     * @since 1.0.0
     *
     * @return bool True if string has punctuation, false otherwise.
     */
    public function punctuation ():bool;

}