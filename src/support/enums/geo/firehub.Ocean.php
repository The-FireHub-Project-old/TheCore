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

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};

/**
 * ### Ocean enum
 * @since 1.0.0
 */
enum Ocean implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case ARCTIC;

    /**
     * @since 1.0.0
     */
    case ATLANTIC;

    /**
     * @since 1.0.0
     */
    case INDIAN;

    /**
     * @since 1.0.0
     */
    case PACIFIC;

    /**
     * @since 1.0.0
     */
    case SOUTHERN;

}