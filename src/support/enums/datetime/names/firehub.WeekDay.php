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
 * ### Weekday names enum
 * @since 1.0.0
 */
enum WeekDay:int implements InitBackedEnum {

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
    case MONDAY = 1;

    /**
     * @since 1.0.0
     */
    case TUESDAY = 2;

    /**
     * @since 1.0.0
     */
    case WEDNESDAY = 3;

    /**
     * @since 1.0.0
     */
    case THURSDAY = 4;

    /**
     * @since 1.0.0
     */
    case FRIDAY = 5;

    /**
     * @since 1.0.0
     */
    case SATURDAY = 6;

    /**
     * @since 1.0.0
     */
    case SUNDAY = 7;

}