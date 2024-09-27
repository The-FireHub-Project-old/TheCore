<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Components
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Components\Registry;

use FireHub\Core\Support\Collection\Type\Associative;

/**
 * ### Recording of registry items
 * @since 1.0.0
 *
 * @template TKey of non-empty-lowercase-string
 * @template TValue of array<non-empty-lowercase-string,
 *     mixed>|\FireHub\Core\Support\Collection\Type\Associative<non-empty-lowercase-string,
 *     mixed>|\FireHub\Core\Support\Collection\Type\ReadonlyAssociative<non-empty-lowercase-string, mixed>
 *
 * @extends \FireHub\Core\Support\Collection\Type\Associative<TKey, TValue>
 */
final class Register extends Associative {

}