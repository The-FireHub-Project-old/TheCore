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

/**
 * ### Array inaccessible contract
 *
 * @inheritDoc
 *
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\ArrayAccessible<TKey, TValue>
 */
interface ArrayInAccessible extends ArrayAccessible {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function offsetExists (mixed $offset):never;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function offsetGet (mixed $offset):never;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function offsetSet (mixed $offset, mixed $value):never;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function offsetUnset (mixed $offset):never;

}