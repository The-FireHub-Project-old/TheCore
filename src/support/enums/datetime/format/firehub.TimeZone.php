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
 * ### Timezone format enum
 * @since 1.0.0
 */
enum TimeZone:string implements Format {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Whether the date is in daylight saving time
     * @since 1.0.0
     *
     * @example
     * ```php
     * 1, if Daylight Saving Time, 0 otherwise
     * ```
     */
    case DAYLIGHT_SAVING_TIME = 'I';

    /**
     * ### Difference to Greenwich time (GMT) without a colon between hours and minutes
     * @since 1.0.0
     *
     * @example
     * ```php
     * +0200
     * ```
     */
    case GMT_DIFF = 'O';

    /**
     * ### Difference to Greenwich time (GMT) with colon between hours and minutes
     * @since 1.0.0
     *
     * @example
     * ```php
     * +02:00
     * ```
     */
    case GMT_DIFF_COLON = 'P';

    /**
     * ### Timezone abbreviation, if known; otherwise the GMT offset
     * @since 1.0.0
     *
     * @example
     * ```php
     * EST, MDT, +05
     * ```
     */
    case ABBREVIATION = 'T';

    /**
     * ### Timezone offset in seconds. The offset for timezones west of UTC is always negative,
     * and for those east of UTC is always positive
     * @since 1.0.0
     *
     * @example
     * ```php
     * -43,200 through 50,400
     * ```
     */
    case OFFSET = 'Z';

}