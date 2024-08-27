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

namespace FireHub\Core\Support\Enums\DateTime\Format;

use FireHub\Core\Base\Trait\ConcreteBackedEnum;

/**
 * ### Week format enum
 * @since 1.0.0
 */
enum Week:string implements Format {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### ISO 8601 week number of year, weeks starting on Monday
     * @since 1.0.0
     *
     * @example
     * ```php
     * 42 (the 42nd week of the year)
     * ```
     */
    case NUMBER = 'W';

}