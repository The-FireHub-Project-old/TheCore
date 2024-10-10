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

namespace FireHub\Core\Support\Enums\HTTP;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### HTTP content encoding
 * @since 1.0.0
 */
enum ContentEncoding:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### AES-GCM encryption with a 128-bit content encryption key
     * @since 1.0.0
     */
    case AES128GCM = 'aes128gcm';

    /**
     * ### Brotli Compressed Data Format
     * @since 1.0.0
     */
    case BR = 'br';

    /**
     * ### UNIX "compress" data format [Welch, T., "A Technique for High Performance Data Compression", IEEE
     * Computer 17(6), June 1984.]
     * @since 1.0.0
     */
    case COMPRESS = 'compress';

    /**
     * ### "Dictionary-Compressed Brotli" data format
     * @since 1.0.0
     */
    case DCB = 'dcb';

    /**
     * ### "Dictionary-Compressed Zstandard" data format
     * @since 1.0.0
     */
    case DCZ = 'dcz';

    /**
     * ### "deflate" compressed data ([RFC1951]) inside the "zlib" data format ([RFC1950])
     * @since 1.0.0
     */
    case DEFLATE = 'deflate';

    /**
     * ### W3C Efficient XML Interchange
     * @since 1.0.0
     */
    case EXI = 'exi';

    /**
     * ### GZIP file format [RFC1952]
     * @since 1.0.0
     */
    case GZIP = 'gzip';

    /**
     * ### Reserved
     * @since 1.0.0
     */
    case IDENTITY = 'identity';

    /**
     * ### Network Transfer Format for Java Archives
     * @since 1.0.0
     */
    case PACK200GZIP = 'pack200-gzip';

    /**
     * ### A stream of bytes compressed using the Zstandard protocol with a Window_Size of not more than 8 MB
     * @since 1.0.0
     */
    case ZSTD = 'zstd';

}