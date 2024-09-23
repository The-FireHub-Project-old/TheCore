<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub\Core\Components
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Components\DI\Enums;

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};

/**
 * ### Container-binding types
 * @since 1.0.0
 */
enum Type implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * ### Creates an object on every request
     * @since 1.0.0
     */
    case BIND;

    /**
     * ### Creates an object should only be resolved one time
     * @since 1.0.0
     */
    case SHARED;

    /**
     * ### Creates an object should only be resolved one time unless objects parameters have changed
     * @since 1.0.0
     */
    case SCOPED;

}