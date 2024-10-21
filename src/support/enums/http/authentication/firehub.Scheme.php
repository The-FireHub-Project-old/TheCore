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

namespace FireHub\Core\Support\Enums\HTTP\Authentication;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### The Authentication scheme that defines how the credentials are encoded
 * @since 1.0.0
 */
enum Scheme:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### The 'Basic' HTTP Authentication Scheme
     * @since 1.0.0
     */
    case BASIC = 'Basic';

    /**
     * ### The OAuth 2.0 Authorization Framework: Bearer Token Usage
     * @since 1.0.0
     */
    case BEARER = 'Bearer';

    /**
     * ### HTTP Digest Access Authentication
     * @since 1.0.0
     */
    case DIGEST = 'Digest';

    /**
     * ### HTTP Origin-Bound Authentication
     * @since 1.0.0
     */
    case HOBA = 'HOBA';

    /**
     * ### Mutual Authentication Protocol for HTTP
     * @since 1.0.0
     */
    case MUTUAL = 'Mutual';

    /**
     * ### SPNEGO-based Kerberos and NTLM HTTP Authentication in Microsoft Windows
     * @since 1.0.0
     */
    case NEGOTIATE_NTLM = 'Negotiate / NTLM';

    /**
     * ### Voluntary Application Server Identification (VAPID) for Web Push
     * @since 1.0.0
     */
    case VAPID = 'VAPID';

    /**
     * ### Salted Challenge Response HTTP Authentication Mechanism
     * @since 1.0.0
     */
    case SCRAM = 'SCRAM';

}