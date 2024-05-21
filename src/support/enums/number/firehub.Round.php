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
 * ### Enum for rounding number options
 * @since 1.0.0
 */
enum Round implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * ### Rounds number away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2
     * @since 1.0.0
     */
    case HALF_UP;

    /**
     * ### Rounds number towards zero when it is halfway there, making 1.5 into 1 and -1.5 into -1
     * @since 1.0.0
     */
    case HALF_DOWN;

    /**
     * ### Rounds towards the nearest even value when it is halfway there, making both 1.5 and 2.5 into 2
     * @since 1.0.0
     */
    case HALF_EVEN;

    /**
     * ### Rounds number towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3
     * @since 1.0.0
     */
    case HALF_ODD;

}