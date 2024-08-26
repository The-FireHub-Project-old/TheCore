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

namespace FireHub\Core\Support\Helpers\DateTime;

use FireHub\Core\Support\Zwick\TimeZone;

/**
 * ### This function provides the ability to call callback with different timezone
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\Zwick\TimeZone::getDefaultTimeZone() To get default timezone.
 * @uses \FireHub\Core\Support\Zwick\TimeZone::setDefaultTimeZone() To set default timezone.
 * @uses \FireHub\Core\Support\Zwick\TimeZone::create() To create a new timezone.
 * @uses \FireHub\Core\Support\Zwick\TimeZone::get() To get timezone.
 *
 * @example
 * ```php
 * use FireHub\Core\Support\Zwick\TimeZone;
 * use FireHub\Core\Support\Enums\DateTime\Zone;
 * use function FireHub\Core\Support\Helpers\DateTime\callWithTimezone;
 *
 * callWithTimezone(TimeZone::create(Zone::AMERICA_NEW_YORK), function () {
 *     // callable function
 * });
 *
 * // true
 * ```
 *
 * @param null|\FireHub\Core\Support\Zwick\TimeZone $timezone <p>
 * TimeZone support class.
 * </p>
 * @param callable():void $callback <p>
 * <code>callable():void</code>
 * Callback to run with different timezone.
 * </p>
 *
 * @return void
 *
 * @api
 */
function callWithTimezone (?TimeZone $timezone, callable $callback):void {

    $default_timezone = TimeZone::getDefaultTimeZone();
    $timezone = $timezone ?? TimeZone::create($default_timezone);
    TimeZone::setDefaultTimeZone($timezone->get());

    $callback();

    if ($timezone->get() <> $default_timezone)
        TimeZone::setDefaultTimeZone($default_timezone);

}