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
 * ### Years unit enum
 * @since 1.0.0
 */
enum Years:string implements Calculable {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case MILLENNIUM = 'M';

    /**
     * @since 1.0.0
     */
    case CENTURY = 'C';

    /**
     * @since 1.0.0
     */
    case DECADE = 'D';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic As return.
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic::YEAR As parent.
     */
    public function parent ():Basic {

        return Basic::YEAR;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function singular ():string {

        return match ($this) {
            self::MILLENNIUM => 'millennium',
            self::CENTURY => 'century',
            self::DECADE => 'decade'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function plural ():string {

        return match ($this) {
            self::MILLENNIUM => 'millenniums',
            self::CENTURY => 'centuries',
            self::DECADE => 'decades'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function calculate ():int {

        return match ($this) {
            self::MILLENNIUM => 1000,
            self::CENTURY => 100,
            self::DECADE => 10
        };

    }

}