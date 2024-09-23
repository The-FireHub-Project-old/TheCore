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

namespace FireHub\Core\Support\Enums\DateTime\Format;

use FireHub\Core\Base\Trait\ConcreteBackedEnum;

/**
 * ### Year format enum
 * @since 1.0.0
 */
enum Year:string implements Format {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Full numeric representation of a year, at least four digits, with – for years BCE
     * @since 1.0.0
     *
     * @example
     * ```php
     * -0055, 0787, 1999, 2003, 10191
     * ```
     */
    case LONG = 'Y';

    /**
     * ### Two-digit representation of a year
     * @since 1.0.0
     *
     * @example
     * ```php
     * 99 or 03
     * ```
     */
    case SHORT = 'y';

    /**
     * ### 1 if it is a leap year, 0 otherwise
     * @since 1.0.0
     *
     * @example
     * ```php
     * 1 or 0
     * ```
     */
    case LEAP = 'L';

}