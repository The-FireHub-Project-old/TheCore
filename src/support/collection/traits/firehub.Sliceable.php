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

namespace FireHub\Core\Support\Collection\Traits;

/**
 * ### This trait allows usage of slicing methods
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
trait Sliceable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function slice (int $offset, ?int $length = null):self;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::slice() To get a slice from a collection.
     *
     * @return static<TKey, TValue> New sliced collection.
     */
    public function take (int $count):self {

        return $this->slice(0, $count);

    }

}