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

namespace FireHub\Core\Support\Collection\Type;

/**
 * ### Indexed array collection type
 *
 * Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1).
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Collection\Type\Arr<array-key, TValue>
 */
final class Indexed extends Arr {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param array<TValue> $storage <p>
     * Array underlying data.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected array $storage
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::fist() To return parent first method if there is no callback.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'one', 'one', 'two', 'two', 'three', 'three', 'three']);
     *
     * $collection->first();
     *
     * // 'one'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'one', 'one', 'two', 'two', 'three', 'three', 'three']);
     *
     * $collection->first(function ($value) {
     *  return $value <> 'one';
     * });
     *
     * // 'two'
     * ```
     */
    public function first (?callable $callback = null):mixed {

        if ($callback) {

            foreach ($this->storage as $value)
                if ($callback($value)) return $value;

            return null;

        }

        return parent::first();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::last() To return parent last method if there is no callback.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'one', 'one', 'two', 'two', 'three', 'three', 'three']);
     *
     * $collection->last();
     *
     * // 'three'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'one', 'one', 'two', 'two', 'three', 'three', 'three']);
     *
     * $collection->last(function ($value, $key) {
     *  return $value <> 'three';
     * });
     *
     * // 'two'
     * ```
     */
    public function last (?callable $callback = null):mixed {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $value)
                if ($callback($value)) $found = $value;

            return $found;

        }

        return parent::last();

    }

}