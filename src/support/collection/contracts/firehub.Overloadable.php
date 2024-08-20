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

namespace FireHub\Core\Support\Collection\Contracts;

use FireHub\Core\Support\Contracts\Magic\Overloadable as MagicOverloadable;

/**
 * ### Overloadable collectable contract
 *
 * Accessible collectable provides an easy way to manipulate collections.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Collection\Contracts\Accessible<TKey, TValue>
 */
interface Overloadable extends Accessible, MagicOverloadable {

}