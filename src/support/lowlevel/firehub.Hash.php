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
use FireHub\Core\Support\Enums\Hash\ {
    Algorithm, HmacAlgorithm
};
use SensitiveParameter, ValueError;

use function hash;
use function hash_equals;
use function hash_hkdf;
use function hash_hmac;
use function hash_file;
use function hash_pbkdf2;

/**
 * ### Hash low-level proxy class
 *
 * Class contains functions that can be used for direct or incremental processing of arbitrary length messages using
 * a variety of hashing algorithms.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class Hash implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Generate a hash value (message digest)
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Hash\Algorithm As parameter.
     *
     * @param string $data <p>
     * Message to be hashed.
     * </p>
     * @param \FireHub\Core\Support\Enums\Hash\Algorithm $algorithm <p>
     * Selected hashing algorithm.
     * </p>
     * @param bool $binary [optional] <p>
     * When set to true, outputs raw binary data. False outputs lowercase hexits.
     * </p>
     *
     * @return string String containing the calculated message digests as lowercase hexits unless binary is set to
     * true in which case the raw binary representation of the message digest is returned.
     */
    public static function generate (string $data, Algorithm $algorithm, bool $binary = false):string {

        return hash($algorithm->value, $data, $binary);

    }

    /**
     * ### Generate a hash value (message digest)
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Hash\HmacAlgorithm As parameter.
     *
     * @param string $data <p>
     * Message to be hashed.
     * </p>
     * @param string $key <p>
     * Shared secret key used for generating the HMAC variant of the message digest.
     * </p>
     * @param \FireHub\Core\Support\Enums\Hash\HmacAlgorithm $algorithm <p>
     * Selected hashing algorithm.
     * </p>
     * @param bool $binary [optional] <p>
     * When set to true, outputs raw binary data. False outputs lowercase hexits.
     * </p>
     *
     * @return string String containing the calculated message digests as lowercase hexits unless binary is set to
     * true in which case the raw binary representation of the message digest is returned.
     */
    public static function generateHMAC (string $data, #[SensitiveParameter] string $key, HmacAlgorithm $algorithm, bool $binary = false):string {

        return hash_hmac($algorithm->value, $data, $key, $binary);

    }

    /**
     * ### Timing attack safe string comparison
     *
     * Checks whether two strings are equal without leaking information about the contents of known_string via the
     * execution time.
     * @since 1.0.0
     *
     * @param string $known <p>
     * The known string that must be kept secret.
     * </p>
     * @param string $with <p>
     * The user-supplied string to compare against.
     * </p>
     *
     * @return bool Returns true when the two strings are equal, false otherwise;
     *
     * @caution It is important to provide the user-supplied string as the second parameter, rather than the first.
     */
    public static function compare (#[SensitiveParameter] string $known, #[SensitiveParameter] string $with):bool {

        return hash_equals($known, $with);

    }

    /**
     * ### Generate a hash value using the contents of a given file
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Hash\Algorithm As parameter.
     *
     * @param string $filename <p>
     * URL location of a file to be hashed.
     * </p>
     * @param \FireHub\Core\Support\Enums\Hash\Algorithm $algorithm <p>
     * Selected hashing algorithm.
     * </p>
     * @param bool $binary [optional] <p>
     * When set to true, outputs raw binary data. False outputs lowercase hexits.
     * </p>
     *
     * @return bool Returns true when the two strings are equal, false otherwise.
     *
     * @caution It is important to provide the user-supplied string as the second parameter, rather than the first.
     */
    public static function file (string $filename, Algorithm $algorithm, bool $binary = false):bool {

        return hash_file($algorithm->value, $filename, $binary);

    }

    /**
     * ### Generate an HKDF key derivation of a supplied key input
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Hash\HmacAlgorithm As parameter.
     *
     * @param \FireHub\Core\Support\Enums\Hash\HmacAlgorithm $algorithm <p>
     * Selected hashing algorithm.
     * </p>
     * @param non-empty-string $key <p>
     * Input keying material (raw binary). Can't be empty.
     * </p>
     * @param int $length [optional] <p>
     * Desired output length in bytes. Can't be greater than 255 times the chosen hash function size.
     * If the length is 0, the output length will default to the chosen hash function size.
     * </p>
     * @param string $info [optional] <p>
     * Application/context-specific info string.
     * </p>
     * @param string $salt [optional] <p>
     * Salt to use during derivation.
     * While optional, adding random salt significantly improves the strength of HKDF.
     * </p>
     *
     * @throws ValueError If the key is empty, algo is unknown/non-cryptographic, length is less than 0 or too large
     * (greater than 255 times the size of the hash function).
     *
     * @return string Returns a string containing a raw binary representation of the derived key (also known as output
     * keying material – OKM).
     */
    public static function hkdfKey (HmacAlgorithm $algorithm, #[SensitiveParameter] string $key, int $length = 0, string $info = '',  string $salt = ''):string {

        return hash_hkdf($algorithm->value, $key, $length, $info, $salt);

    }

    /**
     * ### Generate a PBKDF2 key derivation of a supplied password
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Hash\HmacAlgorithm As parameter.
     *
     * @param \FireHub\Core\Support\Enums\Hash\HmacAlgorithm $algorithm <p>
     * Selected hashing algorithm.
     * </p>
     * @param string $password <p>
     * The password to use for the derivation.
     * </p>
     * @param string $salt <p>
     * The salt to use for the derivation. This value should be generated randomly.
     * </p>
     * @param positive-int $iterations <p>
     * The number of internal iterations to perform for the derivation.
     * </p>
     * @param non-negative-int $length [optional] <p>
     * The length of the output string. If binary is true, this corresponds to the byte-length of the derived key,
     * if binary is false, this corresponds to twice the byte-length of the derived key (as every byte of the key
     * is returned as two hexits).
     * If 0 is passed, the entire output of the supplied algorithm is used.
     * </p>
     * @param bool $binary [optional] <p>
     * When set to true, outputs raw binary data. False outputs lowercase hexits.
     * </p>
     *
     * @throws ValueError If the iteration parameter is less than or equal to 0, the length is less than 0 or the
     * salt is too long (greater than INT_MAX – 4).
     *
     * @return string Returns a string containing the derived key as lowercase hexits unless binary is set to true in
     * which case the raw binary representation of the derived key is returned.
     */
    public static function pbkdf2Key (HmacAlgorithm $algorithm, #[SensitiveParameter] string $password, string $salt, int $iterations, int $length, bool $binary = false):string {

        return hash_pbkdf2($algorithm->value, $password, $salt, $iterations, $length, $binary);

    }

}