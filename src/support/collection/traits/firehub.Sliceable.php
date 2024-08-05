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
    abstract public function nth (int $step, int $offset = 0):self;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::nth() To get even elements.
     *
     * @return self<TKey, TValue> New filtered collection.
     */
    public function even ():self {

        return $this->nth(2, 1);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::nth() To get odd elements.
     *
     * @return self<TKey, TValue> New filtered collection.
     */
    public function odd ():self {

        return $this->nth(2);

    }

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
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $merged = $collection->take(2);
     *
     * // ['John', 'Jane']
     * ```
     *
     * @return static<TKey, TValue> New sliced collection.
     */
    public function take (int $count):self {

        return $this->slice(0, $count);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::slice() To get a slice from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $merged = $collection->skip(2);
     *
     * // ['Jane', 'Jane', 'Richard', 'Richard']
     * ```
     *
     * @return static<TKey, TValue> New sliced collection.
     */
    public function skip (int $count):self {

        return $this->slice($count);

    }

}