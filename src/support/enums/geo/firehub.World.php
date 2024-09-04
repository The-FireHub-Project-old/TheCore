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
 * ### World enum
 * @since 1.0.0
 */
enum World implements UNM49 {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case WORLD;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function name ():string {

        return match ($this) {
            self::WORLD => 'World'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::WORLD => '001'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function region ():?UNM49 {

        return null;

    }

}