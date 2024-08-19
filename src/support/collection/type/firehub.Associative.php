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

use FireHub\Core\Support\Contracts\HighLevel\Collectable;
use FireHub\Core\Support\Collection\Helpers\SliceRange;
use FireHub\Core\Support\Enums\ {
    Order, Sort
};
use FireHub\Core\Support\LowLevel\ {
    Arr as ArrLL, DataIs
};
use ArgumentCountError, Error;

use function FireHub\Core\Support\Helpers\Arr\ {
    only, random, shuffle
};

/**
 * ### Associative array collection type
 *
 * Collections that use named keys that you assign to them.
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Collection\Type\Arr<TKey, TValue>
 *
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class Associative extends Arr {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param array<TKey, TValue> $storage <p>
     * Array underlying data.
     * </p>
     */
    public function __construct (
        protected array $storage
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::first() As parent method if $callback doesn't exist.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->first();
     *
     * // 'John'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->first(function ($value, $key) {
     *  return $key <> 'firstname';
     * });
     *
     * // 'Doe'
     * ```
     */
    public function first (?callable $callback = null):mixed {

        if ($callback) {

            foreach ($this->storage as $key => $value)
                if ($callback($value, $key)) return $value;

            return null;

        }

        return parent::first();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::firstKey() As parent method if $callback doesn't exist.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->firstKey();
     *
     * // 'firstname'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->firstKey(function ($value, $key) {
     *  return $key <> 'firstname';
     * });
     *
     * // 'lastname'
     * ```
     */
    public function firstKey (?callable $callback = null):null|int|string {

        if ($callback) {

            foreach ($this->storage as $key => $value)
                if ($callback($value, $key)) return $key;

            return null;

        }

        return parent::firstKey();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::last() As parent method if $callback doesn't exist.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->last();
     *
     * // 2
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->last(function ($value, $key) {
     *  return $key <> 10;
     * });
     *
     * // 25
     * ```
     */
    public function last (?callable $callback = null):mixed {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $key => $value)
                if ($callback($value, $key)) $found = $value;

            return $found;

        }

        return parent::last();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::lastKey() As parent method if $callback doesn't exist.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->lastKey();
     *
     * // 10
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->lastKey(function ($value, $key) {
     *  return $key <> 2;
     * });
     *
     * // 'age'
     * ```
     */
    public function lastKey (?callable $callback = null):null|int|string {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $key => $value)
                if ($callback($value, $key)) $found = $key;

            return $found;

        }

        return parent::lastKey();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->each(function ($value, $key) {
     *  if ($value === 'Jack') return false;
     * });
     *
     * // true
     * ```
     */
    public function each (callable $callback, int $limit = 1_000_000):bool {

        $counter = 0;

        foreach ($this->storage as $key => $value)
            if (
                $callback($value, $key) === false
                || $counter++ > $limit
            ) return false;

        return true;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->every(function ($value, $key) {
     *  return $key !== 'gender';
     * });
     *
     * // true
     * ```
     */
    public function every (callable $callback):bool {

        foreach ($this->storage as $key => $value)
            if (!$callback($value, $key)) return false;

        return true;

    }

    /**
     * ### Get collection's keys
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::keys() To return all the keys or a subset of the keys for an array.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->keys();
     *
     * // ['firstname', 'lastname', 'age', 10]
     * ```
     * @example With a filter option.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->keys(25);
     *
     * // ['age']
     * ```
     *
     * @param TValue $with_values [optional] <p>
     * If specified, then only keys containing these values are returned.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<TKey> Collection's keys.
     */
    public function keys (mixed $with_values = null):Indexed {

        return new Indexed(ArrLL::keys($this->storage, $with_values));

    }

    /**
     * ### Computes the difference of collections
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To verity that the contents of a variable can be called
     * as a function.
     * @uses \FireHub\Core\Support\LowLevel\Arr::differenceAssoc() To compute the difference of arrays with
     * additional index check.
     * @uses \FireHub\Core\Support\LowLevel\Arr::differenceAssocFuncKey() To compute the difference of arrays with
     * additional index check by using a callback function for key comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::differenceAssocFuncValue() To compute the difference of arrays with
     * additional index check by using a callback function for value comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::differenceAssocFuncKeyValue() To compute the difference of arrays with
     * additional index check by using a callback function for key and value comparison.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->difference($collection2);
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     * @example With a callback function for values.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->difference($collection2, function ($value_a, $value_b):int {
     *  return $value_a !== $value_b ? 1 : 0;
     * });
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     * @example With a callback function for keys.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->difference($collection2, null, function ($key_a, $key_b):int {
     *  return $key_a !== $key_b ? 1 : 0;
     * });
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     * @example With a callback function for keys and values.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->difference($collection2, function ($value_a, $value_b):int {
     *  return $value_a !== $value_b ? 1 : 0;
     * }, function ($key_a, $key_b):int {
     *  return $key_a !== $key_b ? 1 : 0;
     * });
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     *
     * @param \FireHub\Core\Support\Collection\Type\Arr<array-key, mixed> $collection <p>
     * Collection to compare against.
     * </p>
     * @param null|callable(mixed $a, mixed $b):int<-1, 1> $value [optional] <p>
     * <code>callable (mixed $a, mixed $b):int<-1, 1></code>
     * The comparison function.
     * </p>
     * @param null|callable(mixed $a, mixed $b):int<-1, 1> $key [optional] <p>
     * <code>callable (mixed $a, mixed $b):int<-1, 1></code>
     * The comparison function.
     * </p>
     *
     * @return static<TKey, TValue> An array containing all the entries from $collection that aren't present in
     * any of the other collections.
     *
     * @caution Returning non-integer values from the comparison function, such as float, will result in an internal
     * cast to int of the callback's return value.
     * So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as
     * equal.
     */
    public function difference (Arr $collection, ?callable $value = null, ?callable $key = null):self {

        return new self( match (true) {
            DataIs::callable($value) && DataIs::callable($key) =>
            ArrLL::differenceAssocFuncKeyValue(
                $this->storage,
                $collection->all(),
                $value,
                $key
            ),
            DataIs::callable($value) =>
            ArrLL::differenceAssocFuncValue(
                $this->storage,
                $collection->all(),
                $value
            ),
            DataIs::callable($key) =>
            ArrLL::differenceAssocFuncKey(
                $this->storage,
                $collection->all(), // @phpstan-ignore-line
                $key
            ),
            default =>
            ArrLL::differenceAssoc(
                $this->storage,
                $collection->all()
            )
        });

    }

    /**
     * ### Computes the difference in keys of collections
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::differenceKey() To compute the difference of arrays using keys for
     * comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::differenceKeyFunc() To compute the difference of arrays using keys for
     * comparison by using a callback function for data comparison.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->differenceKeys($collection2);
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     * @example With callback function.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->differenceKeys($collection2, function ($key_a, $key_b):int {
     *  return $key_a !== $key_b ? 1 : 0;
     * });
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     *
     * @param \FireHub\Core\Support\Collection\Type\Arr<array-key, mixed> $collection <p>
     * Collection to compare against.
     * </p>
     * @param null|callable(mixed $key_a, mixed $key_b):int<-1, 1> $keys [optional] <p>
     * The comparison function.
     * </p>
     *
     * @return static<TKey, TValue> An array containing all the entries from $collection that aren't present in
     * any of the other collections.
     */
    public function differenceKeys (Arr $collection, ?callable $keys = null):self {

        return new self($keys
            ? ArrLL::differenceKeyFunc($this->storage, $collection->all(), $keys)
            : ArrLL::differenceKey($this->storage, $collection->all()));

    }

    /**
     * ### Computes the intersection of collections
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To verity that the contents of a variable can be called
     * as a function.
     * @uses \FireHub\Core\Support\LowLevel\Arr:intersectAssoc() To compute the intersection of arrays with
     * additional index check.
     * @uses \FireHub\Core\Support\LowLevel\Arr::intersectAssocFuncKey() To compute the intersection of arrays with
     * additional index check by using a callback function for key comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::intersectAssocFuncValue() To compute the intersection of arrays with
     * additional index check by using a callback function for value comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::intersectAssocFuncKeyValue() To compute the intersection of arrays with
     * additional index check by using a callback function for key and value comparison.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->intersect($collection2);
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     * @example With a callback function for values.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->intersect($collection2, function ($value_a, $value_b):int {
     *  return $value_a !== $value_b ? 1 : 0;
     * });
     *
     * // ['firstname' => 'John', 10 => 2]
     * ```
     * @example With a callback function for keys.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->intersect($collection2, null, function ($key_a, $key_b):int {
     *  return $key_a === $key_b ? 1 : 0;
     * });
     *
     * // []
     * ```
     * @example With a callback function for keys and values.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->intersect($collection2, function ($value_a, $value_b):int {
     *  return $value_a === $value_b ? 1 : 0;
     * }, function ($key_a, $key_b):int {
     *  return $key_a === $key_b ? 1 : 0;
     * });
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     *
     * @param \FireHub\Core\Support\Collection\Type\Arr<array-key, mixed> $collection <p>
     * Collection to compare against.
     * </p>
     * @param null|callable(mixed $a, mixed $b):int<-1, 1> $value [optional] <p>
     * <code>callable (mixed $a, mixed $b):int<-1, 1></code>
     * The comparison function.
     * </p>
     * @param null|callable(mixed $a, mixed $b):int<-1, 1> $key [optional] <p>
     * <code>callable (mixed $a, mixed $b):int<-1, 1></code>
     * The comparison function.
     * </p>
     *
     * @return static<TKey, TValue> An array containing all the entries from $collection that are present in
     * any of the other collections.
     *
     * @caution Returning non-integer values from the comparison function, such as float, will result in an internal
     * cast to int of the callback's return value.
     * So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as
     * equal.
     */
    public function intersect (Arr $collection, ?callable $value = null, ?callable $key = null):self {

        return new self( match (true) {
            DataIs::callable($value) && DataIs::callable($key) =>
            ArrLL::intersectAssocFuncKeyValue(
                $this->storage,
                $collection->all(),
                $value,
                $key
            ),
            DataIs::callable($value) =>
            ArrLL::intersectAssocFuncValue(
                $this->storage,
                $collection->all(),
                $value
            ),
            DataIs::callable($key) =>
            ArrLL::intersectAssocFuncKey(
                $this->storage,
                $collection->all(), // @phpstan-ignore-line
                $key
            ),
            default =>
            ArrLL::intersectAssoc(
                $this->storage,
                $collection->all()
            )
        });

    }

    /**
     * ### Computes the intersection in keys of collections
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::intersectKey() To compute the intersection of arrays using keys for
     * comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::intersectKeyFunc() To compute the intersection of arrays using keys for
     * comparison by using a callback function for data comparison.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->intersectKeys($collection2);
     *
     * // ['lastname' => 'Doe', 'age' => 25]
     * ```
     * @example With callback function.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(['lastname' => 'Doe', 'age' => 25]);
     *
     * $collection1->intersectKeys($collection2, function ($key_a, $key_b):int {
     *  return $key_a === $key_b ? 1 : 0;
     * });
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     *
     * @param \FireHub\Core\Support\Collection\Type\Arr<array-key, mixed> $collection <p>
     * Collection to compare against.
     * </p>
     * @param null|callable(mixed $key_a, mixed $key_b):int<-1, 1> $keys [optional] <p>
     * The comparison function.
     * </p>
     *
     * @return static<TKey, TValue> An array containing all the entries from $collection that are present in
     * any of the other collections.
     */
    public function intersectKeys (Arr $collection, ?callable $keys = null):self {

        return new self($keys
            ? ArrLL::intersectKeyFunc($this->storage, $collection->all(), $keys)
            : ArrLL::intersectKey($this->storage, $collection->all()));

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::filter() To filter elements in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->filter(function ($value, $key) {
     *  return $key !== 'firstname' && $value !== 'Doe';
     * });
     *
     * // ['age' => 25, 10 => 2]
     * ```
     */
    public function filter (callable $callback):static {

        return new static(
            ArrLL::filter($this->storage, $callback, true, true)
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative::filter() To filter elements in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->reject(function ($value, $key) {
     *  return $key === 'age' || $value === 2;
     * });
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     */
    public function reject (callable $callback):static {

        /** @phpstan-ignore-next-line */
        return $this->filter(fn($value, $key) => $value != $callback($value, $key));

    }

    /**
     * ### New collection with items with the specified keys
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\only() To get all values from an array with the specified keys.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->only('firstname', 'lastname');
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     *
     * @param list<array-key> $keys <p>
     * List of keys to keep.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<TKey, TValue> New filtered collection.
     */
    public function only (array $keys):self {

        return new self(only($this->storage, $keys));

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::map() To apply the callback to the elements of the given array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->map(function ($value, $key) {
     *  return $key.':'.$value;
     * });
     *
     * // ['firstname' => 'firstname:John', 'lastname' => 'lastname:Doe', 'age' => 'age:25', 10 => '10:2']
     * ```
     */
    public function map (callable $callback):static {

        try {

            return new static(ArrLL::map($this->storage, $callback));

        } catch (ArgumentCountError) {

            $storage = [];

            foreach ($this->storage as $key => $value) $storage[$key] = $callback($value, $key);

            return new static($storage);

        }

    }

    /**
     * ### Applies the callback to each collection key
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->mapKeys(function ($value, $key) {
     *  return 'new '.$key;
     * });
     *
     * // ['new firstname' => 'John', 'new lastname' => 'Doe', 'new age' => 25, 'new 10' => 2]
     * ```
     *
     * @param callable(TValue, TKey=):mixed $callback <p>
     * <code>callable(TValue $value):mixed</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return self<array-key, TValue> New modified collection.
     */
    public function mapKeys (callable $callback):self {

        $storage = [];

        foreach ($this->storage as $key => $value) $storage[$callback($value, $key)] = $value;

        return new self($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection = Collection::associative(fn():array => [2, 1, 2, 3, 4, 13, 22, 27, 28, 29]);
     *
     * $collection->merge($collection2);
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2, 1, 2, 3, 4, 13, 22, 27, 28, 29]
     * ```
     *
     * @return self<TKey, TValue> New merged collection.
     */
    public function merge (Collectable ...$collections):self {

        $storage = $this->storage;

        foreach ($collections as $collection)
            $storage = $storage + $collection->all();

        return new static($storage);

    }

    /**
     * ### Merge recursively new collection into current one
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::mergeRecursive() To merge two or more arrays recursively.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     *
     * @param self<TKey, TValue> ...$collections <p>
     * Variable list of collections to recursively merge.
     * </p>
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::associative(fn():array => [
     *  'firstname' => 'Jane', 'lastname' => 'Doe'
     * ]);
     *
     * $collection3 = Collection::associative(fn():array => [
     *  'one', 'two', 'three'
     * ]);
     *
     * $collection->mergeRecursive($collection2, $collection3);
     *
     * // [
     * //   'firstname' => ['John', 'Jane'],
     * //   'lastname' => ['Doe', 'Doe'],
     * //   'age' => 25, 0 => 2, 1 => 'one', 2 => 'two', 3 => 'three'
     * // ]
     * ```
     *
     * @return static<array-key, mixed> New recursively merged collection.
     */
    public function mergeRecursive (Collectable ...$collections):self {

        $storage = $this->storage;

        foreach ($collections as $collection)
            $storage = ArrLL::mergeRecursive($storage, $collection->all());

        return new self($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * [$passed, $failed] = $collection->partition(function ($value, $key) {
     *  return $key === 10;
     * });
     *
     * $passed->all();
     *
     * // [10 => 2]
     *
     * $failed->all();
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25]
     * ```
     *
     * @return self<int, array<TKey, TValue>>
     */
    public function partition (callable $callback):self {

        $passed = []; $failed = [];
        foreach ($this->storage as $key => $value)
            $callback($value, $key)
                ? $passed[$key] = $value
                : $failed[$key] = $value;

        return new static([$passed, $failed]);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::reverse() To reverse the order of array items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->reverse();
     *
     * // [10 => 2, 'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John']
     * ```
     *
     * @return self<TKey, TValue> New collection with reversed order.
     */
    public function reverse ():self {

        return new static(ArrLL::reverse($this->storage, true));

    }

    /**
     * ### Exchanges all keys with their associated values in collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::flip() To exchange all keys with their associated values in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->flip();
     *
     * // ['John' => 'firstname', 'Doe' => 'lastname', 25 => 'age', 2 => 10]
     * ```
     *
     * @error\exeption E_WARNING if values on $array argument are neither int nor string.
     *
     * @return self<TValue, TKey> New flipped collection.
     *
     * @phpstan-ignore-next-line
     */
    public function flip ():self {

        return new self(ArrLL::flip($this->storage)); // @phpstan-ignore-line

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative::slice() To get a slice from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->nth(2);
     *
     * // ['firstname' => 'John', 'age' => 25]
     * ```
     *
     * @return self<TKey, TValue> New filtered collection.
     *
     * @phpstan-ignore-next-line
     */
    public function nth (int $step, int $offset = 0):self {

        $storage = [];

        $counter = 0;
        foreach (
            $offset > 0
                ? $this->slice($offset)->storage
                : $this->storage as $key => $value
        ) if ($counter++ % (max($step, 1)) === 0) $storage[$key] = $value;

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::slice() To extract a slice of the array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->slice(2, 3);
     *
     * // ['age' => 25, 10 => 2]
     * ```
     */
    public function slice (int $offset, ?int $length = null):static {

        $storage = ArrLL::slice($this->storage, $offset, $length, true);

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() As replacement array.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::count() To count for SliceRange.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::slice() To slice a portion of the collection.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::merge() To merge a portion of the collection.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::start() As start position.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::end() As end position.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $slice = $collection->splice(2, 1)
     *
     * $collection->all();
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 10 => 2]
     *
     * $slice->all();
     *
     * // ['age' => 25]
     * ```
     *
     * @return self<TKey, TValue> New sliced collection.
     */
    public function splice (int $offset, ?int $length = null, Collectable $replacement = null):self {

        $range = new SliceRange($this->count(), $offset, $length);

        $start = $range->start();
        $end = $range->end();

        $storage = []; $position = 0;
        foreach ($this as $key => $value) {

            if ($position++ < $start) continue;

            if ($position > $end) break;

            unset($this[$key]);

            $storage[$key] = $value;

        }

        empty($replacement) ?: $this->storage = $this->slice(0, $offset)
            ->merge($replacement, $this->slice($length ?? 0))
            ->storage;

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->takeUntil(function ($value, $key) {
     *  return $value === 25;
     * });
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     */
    public function takeUntil (callable $callback):static {

        $storage = [];

        foreach ($this->storage as $key => $value) {

            if ($callback($value, $key)) break;

            $storage[$key] = $value;

        }

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->takeWhile(function ($value, $key) {
     *  return $value !== 25;
     * });
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     */
    public function takeWhile (callable $callback):static {

        $storage = [];

        foreach ($this->storage as $key => $value) {

            if (!$callback($value, $key)) break;

            $storage[$key] = $value;

        }

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->skipUntil(function ($value, $key) {
     *  return $value !== 25;
     * });
     *
     * // ['age' => 25, 10 => 2]
     * ```
     */
    public function skipUntil (callable $callback):static {

        $storage = [];

        $found = false;
        foreach ($this->storage as $key => $value) {

            if (!$found && !$callback($value, $key)) continue;

            $found = true;

            $storage[$key] = $value;

        }

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->skipWhile(function ($value, $key) {
     *  return $value === 'John';
     * });
     *
     * // ['lastname' => 'Doe', 'age' => 25, 10 => 2]
     * ```
     */
    public function skipWhile (callable $callback):static {

        $storage = [];

        $found = false;
        foreach ($this->storage as $key => $value) {

            if (!$found && $callback($value, $key)) continue;

            $found = true;

            $storage[$key] = $value;

        }

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\shuffle() To shuffle array items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->shuffle();
     *
     * // ['age' => 25, 'firstname' => 'John', 'lastname' => 'Doe', 10 => 2]
     * ```
     */
    public function shuffle ():self {

        shuffle($this->storage);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Order::ASC As parameter.
     * @uses \FireHub\Core\Support\Enums\Sort::BY_REGULAR As parameter.
     * @uses \FireHub\Core\Support\LowLevel\Arr::sort() To sort an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sort();
     *
     * // [10 => 2, 'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John']
     * ```
     * @example Sorting order.
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Order;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sort(Order::DESC);
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]
     * ```
     * @example Sorting order with a flag.
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Order;
     * use FireHub\Core\Support\Enums\Sort;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sort(Order::DESC, Sort::BY_NUMERIC);
     *
     * // ['age' => 25, 10 => 2, 'firstname' => 'John', 'lastname' => 'Doe']
     * ```
     */
    public function sort (Order $order = Order::ASC, Sort $flag = Sort::BY_REGULAR):self {

        ArrLL::sort($this->storage, $order, $flag, true);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::sortBy() To sort an array by values using a user-defined comparison
     * function.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sortBy(function (mixed $current, mixed $next):int {
     *  if ($a === $b) return 0;
     *  return ($a < $b) ? -1 : 1;
     * });
     *
     * // [10 => 2, 'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John']
     * ```
     */
    public function sortBy (callable $callback):self {

        ArrLL::sortBy($this->storage, $callback, true);

        return $this;

    }

    /**
     * ### Sort collection keys
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Order::ASC As parameter.
     * @uses \FireHub\Core\Support\Enums\Sort::SORT_REGULAR As parameter.
     * @uses \FireHub\Core\Support\LowLevel\Arr::sortByKeys() To sort an array by key.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sortKeys();
     *
     * // [10 => 2, 'age' => 25, 'firstname' => 'John', 'lastname' => 'Doe']
     * ```
     * @example Sorting order.
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Order;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sortKeys(Order::DESC);
     *
     * // ['lastname' => 'Doe', 'firstname' => 'John', 'age' => 25, 10 => 2]
     * ```
     * @example Sorting order with a flag.
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Order;
     * use FireHub\Core\Support\Enums\Sort;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sort(Order::ASC, Sort::BY_NUMERIC);
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]
     * ```
     *
     * @param \FireHub\Core\Support\Enums\Order $order [optional] <p>
     * Order type.
     * </p>
     * @param \FireHub\Core\Support\Enums\Sort $flag [optional] <p>
     * Sorting type.
     * </p>
     *
     * @return $this Sorted collection.
     */
    public function sortKeys (Order $order = Order::ASC, Sort $flag = Sort::BY_REGULAR):self {

        ArrLL::sortByKeys($this->storage, $order, $flag);

        return $this;

    }

    /**
     * ### Sort collection keys using a user-defined comparison function
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::sortKeysBy() To sort an array by key using a user-defined comparison function.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->sortKeysBy(function (mixed $current, mixed $next):int {
     *  if ($current === $next) return 0;
     *  return ($current < $next) ? -1 : 1;
     * });
     *
     * // [10 => 2, 'age' => 25, 'firstname' => 'John', 'lastname' => 'Doe']
     * ```
     *
     * @param callable(TKey $a, TKey $b):int<-1, 1> $callback <p>
     * <code><![CDATA[ callable (TKey $a, TKey $b):int<-1, 1> ]]></code>
     * The callback comparison function.
     * Function cmp_function should accept two parameters which will be filled by pairs of array keys.
     * The comparison function must return an integer less than, equal to, or greater than
     * zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     *
     * @return $this Sorted collection.
     */
    public function sortKeysBy (callable $callback):self {

        ArrLL::sortKeysBy($this->storage, $callback);

        return $this;

    }

    /**
     * ### Pick one or more random values out of the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\random() To pick one or more random values out of the array.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::count() To count elements of a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'two', 'three', 'four', 'five']);
     *
     * $collection->random();
     *
     * // 'two' – randomly selected
     * ```
     * @example Using more than one random item.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'two', 'three', 'four', 'five']);
     *
     * $collection->random(2);
     *
     * // ['two', 'five'] – randomly selected
     * ```
     *
     * @throws Error If a collection has zero items.
     *
     * @param positive-int $number <p>
     * Specifies how many entries you want to pick from a collection.
     * </p>
     *
     * @return mixed If you're picking only one entry, returns a random entry.
     * Otherwise, it returns a collection of random items.
     */
    public function random (int $number = 1):mixed {

        $count = $this->count();

        $number = $number > $count
            ? ($count === 0
                ? throw new Error('Collection must have at least one item to get random item.')
                : $count)
            : $number;

        $random = random($this->storage, $number, true);

        return $number > 1
            ? new static($random) // @phpstan-ignore-line
            : $random;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param ?array-key $offset <p>
     * Offset to assign the value to.
     * </p>
     * @param TValue $value <p>
     * Value to set.
     * </p>
     */
    public function offsetSet (mixed $offset, mixed $value):void {

        $this->storage[$offset] = $value;

    }

}