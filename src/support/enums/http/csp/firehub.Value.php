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

namespace FireHub\Core\Support\Enums\HTTP\CSP;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### HTTP Content Security Policy values
 * @since 1.0.0
 */
enum Value:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Won't allow loading of any resources
     * @since 1.0.0
     */
    case NONE = "'none'";

    /**
     * ### Only allow resources from the current origin
     * @since 1.0.0
     */
    case SELF = "'self'";

    /**
     * ### The trust granted to a script in the page due to an accompanying nonce or hash is extended to the scripts it loads
     * @since 1.0.0
     */
    case STRICT_DYNAMIC = "'strict-dynamic'";

    /**
     * ### Allow use of inline resources
     * @since 1.0.0
     */
    case UNSAFE_INLINE = "'unsafe-inline'";

    /**
     * ### Allows enabling specific inline event handlers
     * @since 1.0.0
     */
    case UNSAFE_HASHES = "'unsafe-hashes'";

}