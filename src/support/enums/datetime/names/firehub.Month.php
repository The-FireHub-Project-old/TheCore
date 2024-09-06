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

namespace FireHub\Core\Support\Enums\DateTime\Names;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### Month names enum
 * @since 1.0.0
 */
enum Month:int implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Names name trait
     * @since 1.0.0
     */
    use Name;

    /**
     * @since 1.0.0
     */
    case JANUARY = 1;

    /**
     * @since 1.0.0
     */
    case FEBRUARY = 2;

    /**
     * @since 1.0.0
     */
    case MARCH = 3;

    /**
     * @since 1.0.0
     */
    case APRIL = 4;

    /**
     * @since 1.0.0
     */
    case MAY = 5;

    /**
     * @since 1.0.0
     */
    case JUNE = 6;

    /**
     * @since 1.0.0
     */
    case JULY = 7;

    /**
     * @since 1.0.0
     */
    case AUGUST = 8;

    /**
     * @since 1.0.0
     */
    case SEPTEMBER = 9;

    /**
     * @since 1.0.0
     */
    case OCTOBER = 10;

    /**
     * @since 1.0.0
     */
    case NOVEMBER = 11;

    /**
     * @since 1.0.0
     */
    case DECEMBER = 12;

}