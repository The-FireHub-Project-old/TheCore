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

namespace FireHub\Core\Support\Constants\Number;

use const PHP_FLOAT_DIG;
use const PHP_FLOAT_EPSILON;
use const PHP_FLOAT_MAX;
use const PHP_FLOAT_MIN;
use const PHP_INT_MAX;
use const PHP_INT_MIN;
use const PHP_INT_SIZE;

/**
 * ### The smallest integer supported in this build of PHP
 *
 * Usually int(-2147483648) in 32bit systems and int(-9223372036854775808) in 64bit systems.
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Number\MIN
 *
 * @api
 */
const MIN = PHP_INT_MIN;

/**
 * ### The largest integer supported in this build of PHP
 *
 * Usually int(2147483647) in 32bit systems and int(9223372036854775807) in 64bit systems.
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Number\MAX
 *
 * @api
 */
const MAX = PHP_INT_MAX;

/**
 * ### The size of an integer in bytes in this build of PHP
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Number\SIZE
 *
 * @api
 */
const SIZE = PHP_INT_SIZE;

/**
 * ### Number of decimal digits that can be rounded into a float and back without precision loss
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Number\FLOAT_DIG
 *
 * @api
 */
const FLOAT_DIG = PHP_FLOAT_DIG;

/**
 * ### Smallest representable positive number x, so that x + 1.0 != 1.0
 * @since 1.0.0
 *
 * @var float \FireHub\Core\Support\Constants\Number\PHP_FLOAT_EPSILON
 *
 * @api
 */
const FLOAT_EPSILON = PHP_FLOAT_EPSILON;

/**
 * ### Smallest representable positive floating point number
 * @since 1.0.0
 *
 * @var float \FireHub\Core\Support\Constants\Number\FLOAT_MIN
 *
 * @api
 */
const FLOAT_MIN = PHP_FLOAT_MIN;

/**
 * ### Largest representable floating point number
 * @since 1.0.0
 *
 * @var float \FireHub\Core\Support\Constants\Number\FLOAT_MAX
 *
 * @api
 */
const FLOAT_MAX = PHP_FLOAT_MAX;