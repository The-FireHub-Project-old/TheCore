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

namespace FireHub\Core\Support\LowLevel;

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};

use function chr;
use function ord;

/**
 * ### Single-byte character low-level proxy class
 *
 * Class allows you to manipulate characters in various ways.
 * @since 1.0.0
 */
final class CharSB implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Generate a single-byte string from a number
     *
     * Returns a one-character string containing the character specified by interpreting $codepoint as an unsigned
     * integer. This can be used to create a one-character string in a single-byte encoding such as ASCII, ISO-8859,
     * or Windows 1252, by passing the position of a desired character in the encoding's mapping table. However, note
     * that this function is not aware of any string encoding, and in particular can't be passed a Unicode code point
     * value to generate a string in a multibyte encoding like UTF-8 or UTF-16. This function complements
     * [[CharSB#ord()]].
     * @since 1.0.0
     *
     * @param int $codepoint <p>
     * An integer between 0 and 255.
     * </p>
     *
     * @return string A single-character string containing the specified byte.
     *
     * @link https://www.man7.org/linux/man-pages/man7/ascii.7.html List of codepoint values
     */
    public static function chr (int $codepoint):string {

        return chr($codepoint);

    }

    /**
     * ### Convert the first byte of a string to a value between 0 and 255
     *
     * Interprets the binary value of the first byte from $character as an unsigned integer between 0 and 255. If the
     * string is in a single-byte encoding, such as ASCII, ISO-8859, or Windows 1252, this is equivalent to returning
     * the position of a character in the character set's mapping table. However, note that this function is not
     * aware of any string encoding, and in particular will never identify a Unicode code point in a multibyte
     * encoding such as UTF-8 or UTF-16. This function complements [[CharSB#chr()]].
     * @since 1.0.0
     *
     * @param string $character <p>
     * A character.
     * </p>
     *
     * @return int An integer between 0 and 255.
     */
    public static function ord (string $character):int {

        return ord($character);

    }

}