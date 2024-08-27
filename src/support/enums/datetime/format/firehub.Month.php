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
 * ### Month format enum
 * @since 1.0.0
 */
enum Month:string implements Format {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Full textual representation of a month
     * @since 1.0.0
     *
     * @example
     * ```php
     * January, December
     * ```
     */
    case TEXTUAL_LONG = 'F';

    /**
     * ### Short textual representation of a month, three letters
     * @since 1.0.0
     *
     * @example
     * ```php
     * Jan, Dec
     * ```
     */
    case TEXTUAL_SHORT = 'M';

    /**
     * ### Numeric representation of a month, with leading zeros
     * @since 1.0.0
     *
     * @example
     * ```php
     * 01 through 12
     * ```
     */
    case NUMERIC_LONG = 'm';

    /**
     * ### Numeric representation of a month, without leading zeros
     * @since 1.0.0
     *
     * @example
     * ```php
     * 1 through 12
     * ```
     */
    case NUMERIC_SHORT = 'n';

    /**
     * ### Number of days in the given month
     * @since 1.0.0
     *
     * @example
     * ```php
     * 28 through 31
     * ```
     */
    case NUMBER_OF_DAYS = 't';

}