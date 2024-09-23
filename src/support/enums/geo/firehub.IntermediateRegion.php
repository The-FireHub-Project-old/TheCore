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

use FireHub\Core\Base\Trait\ConcreteEnum;
use FireHub\Core\Support\Enums\Geo\Contracts\UNM49;

/**
 * ### Intermediate region enum
 * @since 1.0.0
 */
enum IntermediateRegion implements UNM49 {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case CARIBBEAN;

    /**
     * @since 1.0.0
     */
    case CENTRAL_AMERICA;

    /**
     * @since 1.0.0
     */
    case EASTERN_AFRICA;

    /**
     * @since 1.0.0
     */
    case MIDDLE_AFRICA;

    /**
     * @since 1.0.0
     */
    case SOUTH_AMERICA;

    /**
     * @since 1.0.0
     */
    case SOUTHERN_AFRICA;

    /**
     * @since 1.0.0
     */
    case WESTERN_AFRICA;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function name ():string {

        return match ($this) {
            self::CARIBBEAN => 'Caribbean',
            self::CENTRAL_AMERICA => 'Central America',
            self::EASTERN_AFRICA => 'Eastern Africa',
            self::MIDDLE_AFRICA => 'Middle Africa',
            self::SOUTH_AMERICA => 'South America',
            self::SOUTHERN_AFRICA => 'Southern Africa',
            self::WESTERN_AFRICA => 'Western Africa'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::CARIBBEAN => '029',
            self::CENTRAL_AMERICA => '013',
            self::EASTERN_AFRICA => '014',
            self::MIDDLE_AFRICA => '017',
            self::SOUTH_AMERICA => '005',
            self::SOUTHERN_AFRICA => '018',
            self::WESTERN_AFRICA => '011'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function region ():UNM49 {

        return match ($this) {
            self::CARIBBEAN, self::CENTRAL_AMERICA, self::SOUTH_AMERICA => SubRegion::LATIN_AMERICA_AND_THE_CARIBBEAN,
            self::EASTERN_AFRICA, self::MIDDLE_AFRICA, self::SOUTHERN_AFRICA,
            self::WESTERN_AFRICA => SubRegion::SUB_SAHARAN_AFRICA
        };

    }

}