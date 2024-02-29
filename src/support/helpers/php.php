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

namespace FireHub\Core\Support\Helpers\PHP;

use const FireHub\Core\Support\Constants\Number\SIZE;

/**
 * ### Check if using 64bit version of PHP
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\Constants\Number\SIZE To get the size of an integer in bytes in this build of PHP.
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\PHP\is64bit;
 *
 * is64bit();
 *
 * // true
 * ```
 *
 * @return bool True if using 64bit version of PHP, otherwise false.
 *
 * @api
 */
function is64bit ():bool {

    return SIZE === 8;

}

/**
 * ### Check if using 32bit version of PHP
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\Helpers\PHP\is64bit() To check if using 64bit version of PHP.
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\PHP\is32bit;
 *
 * is32bit();
 *
 * // false
 * ```
 *
 * @return bool True if using 32bit version of PHP, otherwise false.
 *
 * @api
 */
function is32bit ():bool {

    return SIZE === 4;

}