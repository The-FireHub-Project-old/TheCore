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

namespace FireHub\Core\Support\Enums\Geo\Continent;

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};

/**
 * ### Geological continents
 * @since 1.0.0
 */
enum Geological implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case AFRICA;

    /**
     * @since 1.0.0
     */
    case ANTARCTICA;

    /**
     * @since 1.0.0
     */
    case AUSTRALIA;

    /**
     * @since 1.0.0
     */
    case EURASIA;

    /**
     * @since 1.0.0
     */
    case NORTH_AMERICA;

    /**
     * @since 1.0.0
     */
    case SOUTH_AMERICA;

}