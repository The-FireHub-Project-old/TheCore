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

use FireHub\Core\Support\Enums\String\Encoding;
use Error;

use function mb_chr;
use function mb_ord;

/**
 * ### Multibyte character low-level proxy class
 *
 * Class provides multibyte specific character functions that help you deal with multibyte encodings.
 * @since 1.0.0
 */
final class CharMB {

    /**
     * ### Return character by Unicode code point value
     *
     * Returns a string containing the character specified by the Unicode code point value, encoded in the specified
     * encoding. This function complements [[CharMB#ord()]].
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     *
     * @param int $codepoint <p>
     * The codepoint value.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @throws Error If codepoint could not be converted to character.
     *
     * @link https://en.wikipedia.org/wiki/List_of_Unicode_characters List of codepoint values
     */
    public static function chr (int $codepoint, Encoding $encoding = null):string {

        return mb_chr($codepoint, $encoding?->value)
            ?: throw new Error('Codepoint could not be converted to character.');

    }

    /**
     * ### Get Unicode code point of character
     *
     * Returns the Unicode code point value of the given character. This function complements [[CharMB#chr()]].
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     *
     * @param string $character <p>
     * A character.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @throws Error If character could not be converted to codepoint.
     */
    public static function ord (string $character, Encoding $encoding = null):int {

        return mb_ord($character, $encoding?->value)
            ?: throw new Error('Character could not be converted to codepoint');

    }

}