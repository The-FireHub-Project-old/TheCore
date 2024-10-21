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
 * ### HTTP site data
 * @since 1.0.0
 */
enum SiteData:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Cookies for the origin of the response URL
     * @since 1.0.0
     */
    case COOKIES = 'cookies';

    /**
     * ### DOM storage for the origin of the response URL
     *
     * localStorage, sessionStorage, IndexedDB, Service worker registrations, and so on.
     * @since 1.0.0
     */
    case STORAGE = 'storage';

}