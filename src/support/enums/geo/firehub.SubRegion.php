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
 * ### Sub-region enum
 * @since 1.0.0
 */
enum SubRegion implements UNM49 {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_AND_NEW_ZEALAND;

    /**
     * @since 1.0.0
     */
    case CENTRAL_ASIA;

    /**
     * @since 1.0.0
     */
    case EASTERN_ASIA;

    /**
     * @since 1.0.0
     */
    case EASTERN_EUROPE;

    /**
     * @since 1.0.0
     */
    case LATIN_AMERICA_AND_THE_CARIBBEAN;

    /**
     * @since 1.0.0
     */
    case MELANESIA;

    /**
     * @since 1.0.0
     */
    case MICRONESIA;

    /**
     * @since 1.0.0
     */
    case NORTHERN_AFRICA;

    /**
     * @since 1.0.0
     */
    case NORTHERN_AMERICA;

    /**
     * @since 1.0.0
     */
    case NORTHERN_EUROPE;

    /**
     * @since 1.0.0
     */
    case POLYNESIA;

    /**
     * @since 1.0.0
     */
    case SOUTH_EASTERN_ASIA;

    /**
     * @since 1.0.0
     */
    case SOUTHERN_ASIA;

    /**
     * @since 1.0.0
     */
    case SOUTHERN_EUROPE;

    /**
     * @since 1.0.0
     */
    case SUB_SAHARAN_AFRICA;

    /**
     * @since 1.0.0
     */
    case WESTERN_ASIA;

    /**
     * @since 1.0.0
     */
    case WESTERN_EUROPE;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function name ():string {

        return match ($this) {
            self::AUSTRALIA_AND_NEW_ZEALAND => 'Australia and New Zealand',
            self::CENTRAL_ASIA => 'Central Asia',
            self::EASTERN_ASIA => 'Eastern Asia',
            self::EASTERN_EUROPE => 'Eastern Europe',
            self::LATIN_AMERICA_AND_THE_CARIBBEAN => 'Latin America and the Caribbean',
            self::MELANESIA => 'Melanesia',
            self::MICRONESIA => 'Micronesia',
            self::NORTHERN_AFRICA => 'Northern Africa',
            self::NORTHERN_AMERICA => 'Northern America',
            self::NORTHERN_EUROPE => 'Northern Europe',
            self::POLYNESIA => 'Polynesia',
            self::SOUTH_EASTERN_ASIA => 'South-eastern Asia',
            self::SOUTHERN_ASIA => 'Southern Asia',
            self::SOUTHERN_EUROPE => 'Southern Europe',
            self::SUB_SAHARAN_AFRICA => 'Sub-Saharan Africa',
            self::WESTERN_ASIA => 'Western Asia',
            self::WESTERN_EUROPE => 'Western Europe'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::AUSTRALIA_AND_NEW_ZEALAND => '053',
            self::CENTRAL_ASIA => '143',
            self::EASTERN_ASIA => '030',
            self::EASTERN_EUROPE => '051',
            self::LATIN_AMERICA_AND_THE_CARIBBEAN => '419',
            self::MELANESIA => '054',
            self::MICRONESIA => '057',
            self::NORTHERN_AFRICA => '015',
            self::NORTHERN_AMERICA => '021',
            self::NORTHERN_EUROPE => '154',
            self::POLYNESIA => '061',
            self::SOUTH_EASTERN_ASIA => '035',
            self::SOUTHERN_ASIA => '034',
            self::SOUTHERN_EUROPE => '039',
            self::SUB_SAHARAN_AFRICA => '202',
            self::WESTERN_ASIA => '145',
            self::WESTERN_EUROPE => '155'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function region ():UNM49 {

        return match ($this) {
            self::AUSTRALIA_AND_NEW_ZEALAND, self::MELANESIA, self::MICRONESIA, self::POLYNESIA => Region::OCEANIA,
            self::CENTRAL_ASIA, self::EASTERN_ASIA, self::SOUTH_EASTERN_ASIA, self::SOUTHERN_ASIA,
            self::WESTERN_ASIA => Region::ASIA,
            self::EASTERN_EUROPE, self::NORTHERN_EUROPE, self::SOUTHERN_EUROPE, self::WESTERN_EUROPE => Region::EUROPE,
            self::LATIN_AMERICA_AND_THE_CARIBBEAN, self::NORTHERN_AMERICA => Region::AMERICAS,
            self::NORTHERN_AFRICA, self::SUB_SAHARAN_AFRICA => Region::AFRICA
        };

    }

}