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

use function FireHub\Core\Support\Helpers\PHP\is32bit;

/**
 * ### Basic unit enum
 * @since 1.0.0
 */
enum Basic:string implements Unit, Relative {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case YEAR = 'Y';

    /**
     * @since 1.0.0
     */
    case MONTH = 'M';

    /**
     * @since 1.0.0
     */
    case DAY = 'D';

    /**
     * @since 1.0.0
     */
    case HOUR = 'h';

    /**
     * @since 1.0.0
     */
    case MINUTE = 'm';

    /**
     * @since 1.0.0
     */
    case SECOND = 's';

    /**
     * @since 1.0.0
     */
    case MICROSECOND = 'µs';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function singular ():string {

        return match ($this) {
            self::YEAR => 'year',
            self::MONTH => 'month',
            self::DAY => 'day',
            self::HOUR => 'hour',
            self::MINUTE => 'minute',
            self::SECOND => 'second',
            self::MICROSECOND => 'microsecond'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function plural ():string {

        return match ($this) {
            self::YEAR => 'years',
            self::MONTH => 'months',
            self::DAY => 'days',
            self::HOUR => 'hours',
            self::MINUTE => 'minutes',
            self::SECOND => 'seconds',
            self::MICROSECOND => 'microseconds'
        };

    }

    /**
     * ### Minimum values of each basic unit
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\PHP\is32bit() To check if using the 32bit version of PHP.
     *
     * @return non-negative-int Minimum value for unit.
     */
    public function min ():int {

        return match ($this) {
            self::YEAR => is32bit() ? 1901 : 0,
            self::MONTH, self::DAY => 1,
            default => 0
        };

    }

    /**
     *
     * ### Maximum values of each basic unit
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\PHP\is32bit() To check if using the 32bit version of PHP.
     *
     * @return positive-int Maximum value for unit.
     */
    public function max ():int {

        return match ($this) {
            self::YEAR => is32bit() ? 2037 : 9999,
            self::MONTH => 12,
            self::DAY => 31,
            self::HOUR => 23,
            self::MINUTE, self::SECOND => 59,
            self::MICROSECOND => 999999
        };

    }

}