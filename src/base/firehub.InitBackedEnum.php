<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Base
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Base;

use BackedEnum;

/**
 * ### FireHub initial-backed enum interface
 * @since 1.0.0
 */
interface InitBackedEnum extends InitEnum, BackedEnum {

    /**
     * ### Get value from enum name
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Enum name.
     * </p>
     *
     * @return ?static Enum from enum name, or null if enum not found.
     */
    public static function fromName (string $name):?static;

}