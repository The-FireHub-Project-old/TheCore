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
 * ### Days unit enum
 * @since 1.0.0
 */
enum Days:string implements Calculable, Relative {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case FORTNIGHT = 'fn';

    /**
     * @since 1.0.0
     */
    case WEEK = 'w';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic As return.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic::DAY As parent.
     */
    public function parent ():Basic {

        return Basic::DAY;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function singular ():string {

        return match ($this) {
            self::FORTNIGHT => 'fortnight',
            self::WEEK => 'week'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function plural ():string {

        return match ($this) {
            self::FORTNIGHT => 'fortnights',
            self::WEEK => 'weeks'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function calculate ():int {

        return match ($this) {
            self::FORTNIGHT => 14,
            self::WEEK => 7
        };

    }

}