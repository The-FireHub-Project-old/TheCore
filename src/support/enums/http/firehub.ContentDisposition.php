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
 * ### HTTP content disposition
 * @since 1.0.0
 */
enum ContentDisposition:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### AES-GCM encryption with a 128-bit content encryption key
     * @since 1.0.0
     */
    case INLINE = 'inline';

    /**
     * ### AES-GCM encryption with a 128-bit content encryption key
     * @since 1.0.0
     */
    case ATTACHMENT = 'attachment';

}