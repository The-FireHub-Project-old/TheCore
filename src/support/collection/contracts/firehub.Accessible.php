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

use FireHub\Core\Support\Contracts\HighLevel\Collectable;
use FireHub\Core\Support\Contracts\ArrayAccessible;

/**
 * ### Accessible collectable contract
 *
 * Accessible collectable provides an easy way to manipulate collections.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue>
 * @extends \FireHub\Core\Support\Contracts\ArrayAccessible<TKey, TValue>
 */
interface Accessible extends Collectable, ArrayAccessible {

    /**
     * ### Applies the callback to each collection item
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):mixed $callback <p>
     * <code>callable(TValue $value):mixed</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return $this New modified collection.
     */
    public function transform (callable $callback):self;

}