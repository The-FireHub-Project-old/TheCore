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

namespace FireHub\Core\Support\Contracts\Iterator;

use Traversable as InternalTraversable;

/**
 * ### Base traversable contract
 *
 * Interface to detect if a class is traversable using foreach.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends InternalTraversable<TKey, TValue>
 */
interface Traversable extends InternalTraversable {

}