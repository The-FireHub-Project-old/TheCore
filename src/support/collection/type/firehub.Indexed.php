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

use FireHub\Core\Support\LowLevel\Arr as ArrLL;

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
class Indexed extends Arr {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param array<TValue> $storage <p>
     * Array underlying data.
     * </p>
     */
    public function __construct (
        protected array $storage
    ) {}

    /**
     * ### Removes an item at the beginning of the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::shift() To remove an item at the beginning of an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->shift();
     *
     * // ['Jane', 'Jane', 'Jane', 'Richard', 'Richard']
     * ```
     *
     * @return $this This collection.
     */
    public function shift ():self {

        ArrLL::shift($this->storage);

        return $this;

    }

    /**
     * ### Push items at the beginning of the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::unshift() To prepend elements to the beginning of the array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->unshift('Jack');
     *
     * // ['Jack', 'John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']
     * ```
     *
     * @param TValue ...$values [optional] <p>
     * List of values to unshift.
     * </p>
     *
     * @return $this This collection.
     */
    public function unshift (mixed ...$values):self {

        ArrLL::unshift($this->storage, ...$values);

        return $this;

    }

    /**
     * ### Prepends items at the beginning of the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::unshift() To push items at the beginning of the collection.
     *
     * @param TValue ...$values [optional] <p>
     * List of values to append.
     * </p>
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->prepend('Jack');
     *
     * // ['Jack', 'John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']
     * ```
     *
     * @return $this This collection.
     *
     * @note This method is an alias of unshift method.
     *
     * @see \FireHub\Core\Support\Collection\Type\Indexed::unshift() As alias to this function.
     */
    public function prepend (mixed ...$values):self {

        return $this->unshift(...$values);

    }

    /**
     * ### Removes an item at the end of the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::pop() To pop the element off the end of an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->pop();
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard']
     * ```
     *
     * @return $this This collection.
     */
    public function pop ():self {

        ArrLL::pop($this->storage);

        return $this;

    }

    /**
     * ### Push items at the end of the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::push() To push elements onto the end of an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->push('Jack');
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 'Jack']
     * ```
     *
     * @param TValue ...$values [optional] <p>
     * List of values to push.
     * </p>
     *
     * @return $this This collection.
     */
    public function push (mixed ...$values):self {

        ArrLL::push($this->storage, ...$values);

        return $this;

    }

    /**
     * ### Append items at the end of the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::push() To push items at the end of the collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->append('Jack');
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 'Jack']
     * ```
     *
     * @param TValue ...$values [optional] <p>
     * List of values to append.
     * </p>
     *
     * @return $this This collection.
     *
     * @note This method is an alias of push method.
     *
     * @see \FireHub\Core\Support\Collection\Type\Indexed::push() As alias to this function.
     */
    public function append (mixed ...$values):self {

        return $this->push(...$values);

    }

}