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

namespace FireHub\Core\Support\Constants\Math;

use const INF as PHP_INF;
use const NAN as PHP_NAN;
use const M_PI;

/**
 * ### Ratio of a circle's circumference to its diameter
 * @since 1.0.0
 *
 * @var float \FireHub\Core\Support\Constants\Math\PI
 *
 * @api
 */
const PI = M_PI;

/**
 * ### The infinite
 * @since 1.0.0
 *
 * @var float \FireHub\Core\Support\Constants\Math\INF
 *
 * @api
 */
const INF = PHP_INF;

/**
 * ### Not A Number
 * @since 1.0.0
 *
 * @var float \FireHub\Core\Support\Constants\Math\NAN
 *
 * @api
 */
const NAN = PHP_NAN;