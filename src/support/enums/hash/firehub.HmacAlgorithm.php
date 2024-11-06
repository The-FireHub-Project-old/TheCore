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

namespace FireHub\Core\Support\Enums\Hash;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### Hashing HMAC algorithms
 * @since 1.0.0
 */
enum HmacAlgorithm:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case MD2 = 'md2';

    /**
     * @since 1.0.0
     */
    case MD4 = 'md4';

    /**
     * @since 1.0.0
     */
    case MD5 = 'md5';

    /**
     * @since 1.0.0
     */
    case SHA1 = 'sha1';

    /**
     * @since 1.0.0
     */
    case SHA224 = 'sha224';

    /**
     * @since 1.0.0
     */
    case SHA256 = 'sha256';

    /**
     * @since 1.0.0
     */
    case SHA384 = 'sha384';

    /**
     * @since 1.0.0
     */
    case SHA512_224 = 'sha512/224';

    /**
     * @since 1.0.0
     */
    case SHA512_256 = 'sha512/256';

    /**
     * @since 1.0.0
     */
    case SHA512 = 'sha512';

    /**
     * @since 1.0.0
     */
    case SHA3_224 = 'sha3-224';

    /**
     * @since 1.0.0
     */
    case SHA3_256 = 'sha3-256';

    /**
     * @since 1.0.0
     */
    case SHA3_384 = 'sha3-384';

    /**
     * @since 1.0.0
     */
    case SHA3_512 = 'sha3-512';

    /**
     * @since 1.0.0
     */
    case RIPEMD128 = 'ripemd128';

    /**
     * @since 1.0.0
     */
    case RIPEMD160 = 'ripemd160';

    /**
     * @since 1.0.0
     */
    case RIPEMD256 = 'ripemd256';

    /**
     * @since 1.0.0
     */
    case RIPEMD320 = 'ripemd320';

    /**
     * @since 1.0.0
     */
    case WHIRLPOOL = 'whirlpool';

    /**
     * @since 1.0.0
     */
    case TIGER128_3 = 'tiger128,3';

    /**
     * @since 1.0.0
     */
    case TIGER160_3 = 'tiger160,3';

    /**
     * @since 1.0.0
     */
    case TIGER192_3 = 'tiger192,3';

    /**
     * @since 1.0.0
     */
    case TIGER128_4 = 'tiger128,4';

    /**
     * @since 1.0.0
     */
    case TIGER160_4 = 'tiger160,4';

    /**
     * @since 1.0.0
     */
    case TIGER192_4 = 'tiger192,4';

    /**
     * @since 1.0.0
     */
    case SNEFRU = 'snefru';

    /**
     * @since 1.0.0
     */
    case SNEFRU256 = 'snefru256';

    /**
     * @since 1.0.0
     */
    case GOST = 'gost';

    /**
     * @since 1.0.0
     */
    case GOST_CRYPTO = 'gost-crypto';

    /**
     * @since 1.0.0
     */
    case HAVAL128_3 = 'haval128,3';

    /**
     * @since 1.0.0
     */
    case HAVAL160_3 = 'haval160,3';

    /**
     * @since 1.0.0
     */
    case HAVAL192_3 = 'haval192,3';

    /**
     * @since 1.0.0
     */
    case HAVAL224_3 = 'haval224,3';

    /**
     * @since 1.0.0
     */
    case HAVAL256_3 = 'haval256,3';

    /**
     * @since 1.0.0
     */
    case HAVAL128_4 = 'haval128,4';

    /**
     * @since 1.0.0
     */
    case HAVAL160_4 = 'haval160,4';

    /**
     * @since 1.0.0
     */
    case HAVAL192_4 = 'haval192,4';

    /**
     * @since 1.0.0
     */
    case HAVAL224_4 = 'haval224,4';

    /**
     * @since 1.0.0
     */
    case HAVAL256_4 = 'haval256,4';

    /**
     * @since 1.0.0
     */
    case HAVAL128_5 = 'haval128,5';

    /**
     * @since 1.0.0
     */
    case HAVAL160_5 = 'haval160,5';

    /**
     * @since 1.0.0
     */
    case HAVAL192_5 = 'haval192,5';

    /**
     * @since 1.0.0
     */
    case HAVAL224_5 = 'haval224,5';

    /**
     * @since 1.0.0
     */
    case HAVAL256_5 = 'haval256,5';

}