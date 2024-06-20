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

namespace FireHub\Core\Support\Contracts;

use ArrayAccess;

/**
 * ### Array accessible contract
 *
 * Interface to provide accessing objects as arrays.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends ArrayAccess<TKey, TValue>
 */
interface ArrayAccessible extends ArrayAccess {

    /**
     * ### Whether an offset exists
     * @since 1.0.0
     *
     * @param TKey $offset <p>
     * Offset to check for.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public function offsetExists (mixed $offset):bool;

    /**
     * ### Offset to retrieve
     * @since 1.0.0
     *
     * @param TKey $offset <p>
     * Offset to retrieve.
     * </p>
     *
     * @return TValue|null Offset value.
     */
    public function offsetGet (mixed $offset):mixed;

    /**
     * ### Assign a value to the specified offset
     * @since 1.0.0
     *
     * @param TKey $offset <p>
     * Offset to assign the value to.
     * </p>
     * @param TValue $value <p>
     * Value to set.
     * </p>
     *
     * @return void
     */
    public function offsetSet (mixed $offset, mixed $value):void;

    /**
     * ### Unset an offset
     * @since 1.0.0
     *
     * @param TKey $offset <p>
     * Offset to unset.
     * </p>
     *
     * @return void
     */
    public function offsetUnset (mixed $offset):void;

}