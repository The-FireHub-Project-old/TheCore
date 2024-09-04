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
 * ### Region enum
 * @since 1.0.0
 */
enum Region implements UNM49 {

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
    case AMERICAS;

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
    case EUROPE;

    /**
     * @since 1.0.0
     */
    case OCEANIA;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function name ():string {

        return match ($this) {
            self::AFRICA => 'Africa',
            self::AMERICAS => 'Americas',
            self::ANTARCTICA => 'Antarctica',
            self::ASIA => 'Asia',
            self::EUROPE => 'Europe',
            self::OCEANIA => 'Oceania'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::AFRICA => '002',
            self::AMERICAS => '119',
            self::ANTARCTICA => '110',
            self::ASIA => '142',
            self::EUROPE => '150',
            self::OCEANIA => '009'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function region ():UNM49 {

        return World::WORLD;

    }

}