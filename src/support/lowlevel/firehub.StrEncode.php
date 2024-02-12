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

use Error;

use function base64_decode;
use function base64_encode;
use function convert_uudecode;
use function convert_uuencode;
use function quoted_printable_decode;
use function quoted_printable_encode;

/**
 * ### String encoding low-level proxy class
 *
 * Encoding is the process of assigning numbers to graphical characters, especially the written characters of human
 * language, allowing them to be stored, transmitted, and transformed using digital computers.
 * @since 1.0.0
 */
final class StrEncode {

    /**
     * ### Encodes string with MIME base64
     *
     * This encoding is designed to make binary data survive transport through transport layers that are not 8-bit
     * clean, such as mail bodies. Base64-encoded data takes about 33% more space than the original data.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The data to be encoded.
     * </p>
     *
     * @return string Base64 encoded data.
     */
    public static function base64Encode (string $string):string {

        return base64_encode($string);

    }

    /**
     * ### Decodes data encoded with MIME base64
     * @since 1.0.0
     *
     * @param string $data <p>
     * The base64 encoded data.
     * </p>
     *
     * @throws Error If we cannot decode $data to base64.
     *
     * @return string Decoded string.
     */
    public static function base64Decode (string $data):string {

        return base64_decode($data, true)
            ?: throw new Error("Cannot decode $data to base64.");

    }

    /**
     * ### Uuencode a string
     *
     * Encodes a string using the uuencode algorithm. Uuencode translates all strings (including binary data) into
     * printable characters, making them safe for network transmissions. Uuencoded data is about 35% larger than the
     * original.
     * @since 1.0.0
     *
     * @param string $string <p>
     * The data to be encoded.
     * </p>
     *
     * @return string The uuencoded data.
     *
     * @note UUEncode neither produces the beginning nor the end line, which are part of uuencoded files.
     */
    public static function uuEncode (string $string):string {

        return convert_uuencode($string);

    }

    /**
     * ### Decode an uuencoded data
     * @since 1.0.0
     *
     * @param string $data <p>
     * The uuencoded data.
     * </p>
     * @phpstan-param non-empty-string $data
     *
     * @throws Error If we cannot uudecode $data.
     *
     * @return string Decoded data as a string.
     *
     * @note UUDecode neither accepts the beginning nor the end line, which are part of uuencoded files.
     */
    public static function uuDecode (string $data):string {

        return convert_uudecode($data)
            ?: throw new Error("Cannot uudecode data: $data.");

    }

    /**
     * ### Convert a 8bit string to a quoted-printable data
     * @since 1.0.0
     *
     * @param string $string <p>
     * The data to be encoded.
     * </p>
     *
     * @return string Quoted-printable encoded data.
     *
     * @note This method is a useful tool for working with email messages.
     */
    public static function quotedPrintableEncode (string $string):string {

        return quoted_printable_encode($string);

    }

    /**
     * ### Convert a quoted-printable data to an 8 bit string
     * @since 1.0.0
     *
     * @param string $data <p>
     * The quoted printable data.
     * </p>
     *
     * @return string The 8-bit binary string.
     *
     * @note This method is a useful tool for working with email messages.
     */
    public static function quotedPrintableDecode (string $data):string {

        return quoted_printable_decode($data);

    }

}