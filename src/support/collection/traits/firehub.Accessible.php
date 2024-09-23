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
 * ### This trait provides an easy way to manipulate collections
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
trait Accessible {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses static::map() To apply the callback to the elements of the given collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->transform(function ($value) {
     *  return $value.'.';
     * });
     *
     * // ['John.', 'Jane.', 'Jane.', 'Jane.', 'Richard.', 'Richard.']
     * ```
     */
    public function transform (callable $callback):static {

        $this->storage = $this->map($callback)->storage;

        return $this;

    }

}