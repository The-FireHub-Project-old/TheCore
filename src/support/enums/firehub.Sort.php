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

namespace FireHub\Core\Support\Enums;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### Sorting enum
 * @since 1.0.0
 */
enum Sort:int implements InitBackedEnum {

    /**
     * ### FireHub initial concrete backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Compare items normally
     * @since 1.0.0
     */
    case BY_REGULAR = 0;

    /**
     * ### Compare items numerically
     * @since 1.0.0
     */
    case BY_NUMERIC = 1;

    /**
     * ### Compare items as strings
     * @since 1.0.0
     */
    case BY_STRING = 2;

    /**
     * ### Compare items as strings, based on the current locale
     * @since 1.0.0
     */
    case BY_LOCALE_STRING = 5;

    /**
     * ### Compare items as strings using "natural ordering" like natsort()
     * @since 1.0.0
     */
    case BY_NATURAL = 6;

    /**
     * ### Sort strings case-insensitively
     * @since 1.0.0
     */
    case BY_STRING_FLAG_CASE = 10;

    /**
     * ### Sort natural case-insensitively
     * @since 1.0.0
     */
    case BY_NATURAL_FLAG_CASE = 14;

}