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
 * @template TKey of array-key
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Collection\Contracts\Accessible<TKey, TValue>
 */
interface Overloadable extends Accessible, MagicOverloadable {

    /**
     * ### Gets item from collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @return TValue Item from a collection.
     */
    public function get (int|string $key):mixed;

    /**
     * ### Adds item to collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     * @param TValue $value <p>
     * Collection value.
     * </p>
     *
     * @return void
     */
    public function add (int|string $key, mixed $value):void;

    /**
     * ### Replaces item from collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     * @param TValue $value <p>
     * Collection value.
     * </p>
     *
     * @return void
     */
    public function replace (int|string $key, mixed $value):void;
    /**
     * ### Adds or replaces item from collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     * @param TValue $value <p>
     * Collection value.
     * </p>
     *
     * @return void
     */
    public function set (int|string $key, mixed $value):void;

    /**
     * ### Check if item exist in collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public function exist (int|string $key):bool;

    /**
     * ### Removes item from collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @return void
     */
    public function remove (int|string $key):void;

}