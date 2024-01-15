<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Enums\String;

/**
 * ### String case folding enum
 * @since 1.0.0
 */
enum CaseFolding:int {

    /**
     * ### Performs a full lower-case folding
     * @since 1.0.0
     */
    case LOWER = 0;

    /**
     * ### Performs a full upper-case folding
     * @since 1.0.0
     */
    case UPPER = 1;

    /**
     * ### Performs a full title-case folding
     * @since 1.0.0
     */
    case TITLE = 2;

}