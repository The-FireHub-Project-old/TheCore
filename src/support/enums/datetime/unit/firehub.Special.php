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

namespace FireHub\Core\Support\Enums\DateTime\Unit;

use FireHub\Core\Base\Trait\ConcreteBackedEnum;

/**
 * ### Special unit enum
 * @since 1.0.0
 */
enum Special:string implements Unit {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case WEEKDAY = 'wd';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function singular ():string {

        return match ($this) {
            self::WEEKDAY => 'weekday'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function plural ():string {

        return match ($this) {
            self::WEEKDAY => 'weekdays'
        };

    }

}