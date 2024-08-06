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
use FireHub\Core\Support\LowLevel\Arr as ArrLL;

use function FireHub\Core\Support\Helpers\Arr\shuffle;

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
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
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
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);;
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