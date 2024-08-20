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

namespace FireHub\Core\Support\Enums\Number;

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};

/**
 * ### Logarithmic base
 * @since 1.0.0
 */
enum LogBase implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * ### e
     * @since 1.0.0
     */
    case E;

    /**
     * ### log_2 e
     * @since 1.0.0
     */
    case LOG2E;

    /**
     * ### log_10 e
     * @since 1.0.0
     */
    case LOG10E;

    /**
     * ### log_e 10
     * @since 1.0.0
     */
    case LN2;

    /**
     * ### log_e 2
     * @since 1.0.0
     */
    case LN10;

    /**
     * ### Get the numerical value of the logarithmic base
     * @since 1.0.0
     *
     * @return float Log value.
     */
    public function value ():float {

        return match ($this) {
            self::E => 2.7182818284590452354,
            self::LOG2E => 1.4426950408889634074,
            self::LOG10E => 0.43429448190325182765,
            self::LN2 => 0.69314718055994530942,
            self::LN10 => 2.30258509299404568402
        };

    }

}