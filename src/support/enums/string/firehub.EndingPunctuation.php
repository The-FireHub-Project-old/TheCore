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

namespace FireHub\Core\Support\Enums\String;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### End of sentence punctuation
 * @since 1.0.0
 */
enum EndingPunctuation:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case PERIOD = '.';

    /**
     * @since 1.0.0
     */
    case QUESTION = '?';

    /**
     * @since 1.0.0
     */
    case EXCLAMATION = '!';

}