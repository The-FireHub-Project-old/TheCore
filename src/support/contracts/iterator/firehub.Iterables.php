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

use Iterator;

/**
 * ### Base iterator contract
 *
 * Interface for external iterators or objects that can be iterated themselves internally.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\Iterator\Traversable<TKey, TValue>
 * @extends Iterator<TKey, TValue>
 */
interface Iterables extends Traversable, Iterator {

    /**
     * ### Checks if the current position is valid
     * @since 1.0.0
     *
     * @return bool True on success or false on failure.
     *
     * @note This method is called after rewind() and next() to check if the current position is valid.
     */
    public function valid ():bool;

    /**
     * ### Return the current element
     * @since 1.0.0
     *
     * @return mixed <code>TValue</code> Current element.
     * @phpstan-return TValue
     */
    public function current ():mixed;

    /**
     * ### Return the key of the current element
     * @since 1.0.0
     *
     * @return mixed <code>null|TKey</code> Key of the current element.
     * @phpstan-return null|TKey
     */
    public function key ():mixed;

    /**
     * ### Move forward to next element
     * @since 1.0.0
     *
     * @return void
     *
     * @note This method is called after each foreach loop.
     */
    public function next ():void;

    /**
     * ### Rewind the iterator to the first element
     * @since 1.0.0
     *
     * @return void
     *
     * @note This is the first method called when starting a foreach loop. It will not be executed after foreach loops.
     */
    public function rewind ():void;

}