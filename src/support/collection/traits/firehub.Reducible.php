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
 * ### This trait allows reduction of the collection to a single value
 * @since 1.0.0
 */
trait Reducible {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [1, 2, 3, 4, 13, 22, 27, 28, 29]);
     *
     * $collection->reduce(function ($carry, $value, $key) {
     *  return $carry + $value;
     * }, 1);
     *
     * // 130
     * ```
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $reduce = $collection->reduce(function ($carry, $value, $key) {
     *  return $carry.$value'-';
     * }, 'names: ');
     *
     * // names: John-Jane-Jane-Jane-Richard-Richard-
     * ```
     */
    public function reduce (callable $callback, mixed $initial = null):mixed {

        foreach ($this as $key => $value)
            $initial = $callback($initial, $value, $key); // @phpstan-ignore-line

        return $initial;

    }

}