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

namespace FireHub\Core\Support\Enums\Geo;

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};
use FireHub\Core\Support\Enums\Geo\Continent\ {
    Geological, Landmass, PhysiographicRegion
};

/**
 * ### Continents enum
 * @since 1.0.0
 */
enum Continent implements InitEnum {

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
    case ASIA;

    /**
     * @since 1.0.0
     */
    case AUSTRALIA;

    /**
     * @since 1.0.0
     */
    case EUROPE;

    /**
     * @since 1.0.0
     */
    case NORTH_AMERICA;

    /**
     * @since 1.0.0
     */
    case SOUTH_AMERICA;

    /**
     * ## Gets a continent as a geological continent
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Continent\Geological As return.
     *
     * @return \FireHub\Core\Support\Enums\Geo\Continent\Geological Geological continent.
     */
    public function geological ():Geological {

        return match ($this) {
            self::AFRICA => Geological::AFRICA,
            self::ANTARCTICA => Geological::ANTARCTICA,
            self::ASIA, self::EUROPE => Geological::EURASIA,
            self::AUSTRALIA => Geological::AUSTRALIA,
            self::NORTH_AMERICA => Geological::NORTH_AMERICA,
            self::SOUTH_AMERICA => Geological::SOUTH_AMERICA
        };

    }

    /**
     * ## Gets a continent as a physiographic region
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Continent\PhysiographicRegion As return.
     *
     * @return \FireHub\Core\Support\Enums\Geo\Continent\PhysiographicRegion Physiographic region.
     */
    public function physiographicRegion ():PhysiographicRegion {

        return match ($this) {
            self::AFRICA => PhysiographicRegion::AFRICA,
            self::ANTARCTICA => PhysiographicRegion::ANTARCTICA,
            self::ASIA, self::EUROPE => PhysiographicRegion::EURASIA,
            self::AUSTRALIA => PhysiographicRegion::AUSTRALIA,
            self::NORTH_AMERICA, self::SOUTH_AMERICA => PhysiographicRegion::AMERICA
        };

    }

    /**
     * ## Gets a continent as a landmass
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Continent\Landmass As return.
     *
     * @return \FireHub\Core\Support\Enums\Geo\Continent\Landmass Landmass.
     */
    public function landmass ():Landmass {

        return match ($this) {
            self::AFRICA, self::ASIA, self::EUROPE => Landmass::AFRO_EURASIA,
            self::ANTARCTICA => Landmass::ANTARCTICA,
            self::AUSTRALIA => Landmass::AUSTRALIA,
            self::NORTH_AMERICA, self::SOUTH_AMERICA => Landmass::AMERICA
        };

    }

}