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

namespace FireHub\Core\Support\Enums\Geo\Continent {

    use FireHub\Core\Base\ {
        InitEnum, Trait\ConcreteEnum
    };

    /**
     * ### Physiographic regions
     *
     * Physiographic regions are a means of defining Earth's landforms into independently distinct, mutually exclusive
     * areas, independent of political boundaries. It is based upon the classic three-tiered approach
     * by Nevin M. Fenneman in 1916 that separates landforms into physiographic divisions, physiographic provinces,
     * and physiographic sections.
     * @since 1.0.0
     */
    enum PhysiographicRegion implements InitEnum {

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
        case AMERICA;

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

    }
}