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

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Contracts\HighLevel\Collectable;
use FireHub\Core\Support\Collection\Type\Contracts\Gen as GenContract;
use FireHub\Core\Support\Collection\Helpers\ {
    CountCollectables, SliceRange
};
use FireHub\Core\Support\Collection\Traits\ {
    Convertable, Conditionable, Ensure, Reducible, Sliceable
};
use FireHub\Core\Support\LowLevel\ {
    DataIs, Iterator
};
use Closure, Generator, Traversable;

/**
 * ### Lazy collection type
 *
 * Lazy collection allows you to work with huge datasets while keeping memory usage low.
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @implements \FireHub\Core\Support\Collection\Type\Contracts\Gen<TKey, TValue>
 * @implements \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue>
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class Gen implements GenContract, Init, Collectable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### This trait allows converting a collection to a different one
     * @since 1.0.0
     */
    use Convertable;

    /**
     * ### This trait allows usage of conditionable methods for collection
     * @since 1.0.0
     *
     * @use \FireHub\Core\Support\Collection\Traits\Conditionable<static>
     */
    use Conditionable;

    /**
     * ### This trait provides item checking
     * @since 1.0.0
     */
    use Ensure;

    /**
     * ### This trait allows reduction of the collection to a single value
     * @since 1.0.0
     */
    use Reducible;

    /**
     * ### This trait allows usage of slicing methods
     * @since 1.0.0
     *
     * @use \FireHub\Core\Support\Collection\Traits\Sliceable<TKey, TValue>
     */
    use Sliceable;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function __construct (
        private Closure $callable
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function fromArray (array $array):static {

        return new static(fn() => yield from $array);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::invoke() To invoke storage.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->all();
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]
     * ```
     *
     * @return array<TKey, TValue> Collection items as an array.
     */
    public function all ():array {

        return Iterator::toArray($this->invoke());

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Iterator::count() To count storage items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->count();
     *
     * // 5
     * ```
     */
    public function count ():int {

        return Iterator::count($this);

    }

    /**
     * ### Count elements in Collectables, counted recursively
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\CountCollectables To count elements in Collectables, counted recursively.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Collection\Helpers\CountCollectables;
     *
     * $collection = Collection::lazy(function ():Generator {
     *  yield from [
     *      Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
     *      'one',
     *      'two',
     *      Collection::list([Collection::list([1,2]),Collection::list([1,2])])
     *  ];
     * });
     *
     * $collection->countCollectables();
     *
     * // 17
     * ```
     *
     * @return non-negative-int Number of elements of an object.
     */
    public function countMultidimensional ():int {

        return (new CountCollectables($this))();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::invoke() To invoke storage.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->first();
     *
     * // 'John'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
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

            foreach ($this as $key => $value)
                if ($callback($value, $key)) return $value;

            return null;

        }

        return $this->invoke()->current();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::invoke() To invoke storage.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->firstKey();
     *
     * // 'firstname'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
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

            foreach ($this as $key => $value)
                if ($callback($value, $key)) return $key;

            return null;

        }

        return $this->invoke()->key();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::count() To count elements in the iterator.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->last();
     *
     * // 2
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
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

            foreach ($this as $key => $value)
                if ($callback($value, $key)) $found = $value;

            return $found;

        }

        $counter = 0;

        $count = $this->count();

        foreach ($this as $value)
            if (++$counter === $count) return $value;

        return null;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::count() To count elements in the iterator.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->lastKey();
     *
     * // 10
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->lastKey(function ($value, $key) {
     *  return $key <> 10;
     * });
     *
     * // 'age'
     * ```
     */
    public function lastKey (?callable $callback = null):null|int|string {

        if ($callback) {

            $found = null;

            foreach ($this as $key => $value)
                if ($callback($value, $key)) $found = $key;

            return $found;

        }

        $counter = 0;

        $count = $this->count();

        foreach ($this as $key => $value)
            if (++$counter === $count) return $key;

        return null;

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->each(function ($value, $key) {
     *  if ($value === 'John') return false;
     * });
     *
     * // false
     * ```
     */
    public function each (callable $callback, int $limit = 1_000_000):bool {

        $counter = 0;

        foreach ($this as $key => $value)
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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->every(function ($value, $key) {
     *  return $key !== 'gender';
     * });
     *
     * // true
     * ```
     */
    public function every (callable $callback):bool {

        foreach ($this as $key => $value)
            if (!$callback($value, $key)) return false;

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->any(function ($value, $key) {
     *  return $value === 'John';
     * });
     *
     * // true
     * ```
     */
    public function any (callable $callback):bool {

        foreach ($this as $key => $value)
            if ($callback($value, $key)) return true;

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::firstKey() To get the first key from a collection.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if $value is callable.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->search('John');
     *
     * // 'firstname'
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->search(function ($value, $key) {
     *  return $value !== 'John';
     * });
     *
     * // 'lastname'
     * ```
     */
    public function search (mixed $value):int|string|false {

        if (DataIs::callable($value)) return $this->firstKey($value) ?? false;

        foreach ($this as $storage_key => $storage_value)
            if ($value === $storage_value) return $storage_key;

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if argument $value is callable.
     * @uses \FireHub\Core\Support\Collection\Type\Gen::first() Used to search string value.
     * @uses \FireHub\Core\Support\Collection\Type\Gen::search() Used to search for a callable value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->contains('John');
     *
     * // true
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->contains(function ($value, $key) {
     *  return $value === 'John';
     * });
     *
     * // true
     * ```
     */
    public function contains (mixed $value):bool {

        return DataIs::callable($value)
            ? !($this->first($value) === null)
            : !($this->search($value) === false);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::contains() To determine whether a collection contains a given item.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->doesntContain('Jack');
     *
     * // true
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->doesntContain(function ($value, $key) {
     *  return $value === 'Jack';
     * });
     *
     * // true
     * ```
     */
    public function doesntContains (mixed $value):bool {

        return !$this->contains($value);

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->containTimes('John');
     *
     * // 1
     * ```
     */
    public function containTimes (mixed $value):int {

        $counter = 0;

        foreach ($this as $storage_value)
            if ($value === $storage_value) $counter++;

        return $counter;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::count() To check if the number of collection items is 0.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->isEmpty();
     *
     * // false
     * ```
     */
    public function isEmpty ():bool {

        return $this->count() === 0;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::isEmpty() To check if a collection is empty.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->isNotEmpty();
     *
     * // true
     * ```
     */
    public function isNotEmpty ():bool {

        return !self::isEmpty();

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->filter(function ($value, $key) {
     *  return $key !== 'firstname' && $value !== 'Doe';
     * });
     *
     * // ['age' => 25, 10 => 2]
     * ```
     */
    public function filter (callable $callback):static {

        return new static(function () use ($callback):Generator {

            foreach ($this as $key => $value)
                !$callback($value, $key) ?: yield $key => $value;

            return null;

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::filter() To filter elements in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
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
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->map(function ($value, $key) {
     *  return 'new '.$value;
     * });
     *
     * // ['firstname' => 'new John', 'lastname' => 'new Doe', 'age' => 'new 25', 10 => 'new 2']
     * ```
     */
    public function map (callable $callback):static {

        return new static(function () use ($callback):Generator {

            foreach ($this as $key => $value) yield $key => $callback($value, $key);

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::invoke() To invoke storage.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection2 = Collection::lazy(fn():Generator => yield from ['one', 'two']);
     *
     * $collection->merge($collection2);
     *
     * // ['one', 'two', 'three', 'four', 'five']
     * ```
     */
    public function merge (Collectable ...$collections):static {

        return new static(function () use ($collections):Generator {

            yield from $this->invoke();

            foreach ($collections as $collection) yield from $collection->all(); // @phpstan-ignore-line

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::slice() To get a slice from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->nth(2, 1);
     *
     * // ['lastname' => 'Doe', 10 => 2]
     * ```
     *
     * @phpstan-ignore-next-line
     */
    public function nth (int $step, int $offset = 0):static {

        return new static(function () use ($step, $offset):Generator {

            $storage = $this->invoke();

            $counter = 0;
            foreach (
                $offset > 0
                    ? $this->slice($offset)
                    : $storage as $key => $value
            ) if ($counter++ % (max($step, 1)) === 0) yield $key => $value;

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::count() To count for SliceRange.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::start() As start position.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::end() As end position.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->slice(1, 2);
     *
     * // ['lastname' => 'Doe', 'age' => 25]
     * ```
     */
    public function slice (int $offset, ?int $length = null):static {

        $range = new SliceRange($this->count(), $offset, $length);

        return new static(function () use ($range):Generator {

            $start = $range->start();
            $end = $range->end();

            $position = 0;
            foreach ($this as $key => $value) {

                if ($position++ < $start) continue;

                if ($position > $end) break;

                yield $key => $value;

            }

        });

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->takeUntil(function ($value, $key) {
     *  return $value === 25;
     * });
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     */
    public function takeUntil (callable $callback):static {

        return new static(function () use ($callback):Generator {

            foreach ($this as $key => $value) {

                if ($callback($value, $key)) break;

                yield $key => $value;

            }

        });

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->takeWhile(function ($value, $key) {
     *  return $value !== 25;
     * });
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe']
     * ```
     */
    public function takeWhile (callable $callback):static {

        return new static(function () use ($callback):Generator {

            foreach ($this as $key => $value) {

                if (!$callback($value, $key)) break;

                yield $key => $value;

            }

        });

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->skipUntil(function ($value, $key) {
     *  return $value !== 25;
     * });
     *
     * // ['age' => 25, 10 => 2]
     * ```
     */
    public function skipUntil (callable $callback):static {

        return new static(function () use ($callback):Generator {

            $found = false;
            foreach ($this as $key => $value) {

                if (!$found && !$callback($value, $key)) continue;

                $found = true;

                yield $key => $value;

            }

        });

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
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->skipWhile(function ($value, $key) {
     *  return $value === 'John';
     * });
     *
     * // ['lastname' => 'Doe', 'age' => 25, 10 => 2]
     * ```
     */
    public function skipWhile (callable $callback):static {

        return new static(function () use ($callback):Generator {

            $found = false;
            foreach ($this as $key => $value) {

                if (!$found && $callback($value, $key)) continue;

                $found = true;

                yield $key => $value;

            }

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::invoke() To invoke storage.
     *
     * @return Traversable<TKey, TValue> Collection items as an array.
     */
    public function getIterator ():Traversable {

        return $this->invoke();

    }

    /**
     * ### Invoke storage
     * @since 1.0.0
     *
     * @return Generator<TKey, TValue> Storage data.
     */
    private function invoke ():Generator {

        yield from ($this->callable)();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::all() To get a collection as an array.
     *
     * @return array<TKey, TValue> Data that can be serialized by json_encode().
     */
    public function jsonSerialize ():array {

        return $this->all();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::all() To get a collection as an array.
     *
     * @return array<TKey, TValue> An associative array of key/value pairs that represent the serialized form of the object.
     */
    public function __serialize ():array {

        return $this->all();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::invoke() To invoke storage.
     *
     * @param array<TKey, TValue> $data <p>
     * Serialized data.
     * </p>
     */
    public function __unserialize (array $data):void {

        $this->callable = fn():Generator => yield from $data;

        $this->invoke();

    }

}