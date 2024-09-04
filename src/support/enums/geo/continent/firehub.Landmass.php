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
 * ### Landmass
 *
 * A landmass, or land mass, is a large region or area of land that is in one piece and not broken up by oceans.
 * The term is often used to refer to lands surrounded by an ocean or sea, such as a continent or an island.
 * In the field of geology, a landmass is a defined section of continental crust extending above sea level.
 * @since 1.0.0
 */
enum Landmass implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case AFRO_EURASIA;

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

}