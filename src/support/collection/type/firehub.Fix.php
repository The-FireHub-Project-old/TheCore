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
use FireHub\Core\Support\Collection\Contracts\Accessible;
use FireHub\Core\Support\Collection\Helpers\ {
    CountCollectables, SliceRange
};
use FireHub\Core\Support\Collection\Traits\ {
    Convertable, Conditionable, Sliceable
};
use FireHub\Core\Support\LowLevel\ {
    Arr, DataIs, Iterables, Iterator
};
use SplFixedArray, Traversable;

/**
 * ### Fixed collection type
 *
 * Fixed collection allows only integers as keys, but it is faster and uses less memory than an array collection.
 * This collection type must be resized manually and allows only integers within the range as indexes.
 * @since 1.0.0
 *
 * @implements \FireHub\Core\Support\Collection\Contracts\Accessible<int, mixed>
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
final class Fix implements Init, Accessible {

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
     * ### This trait allows usage of slicing methods
     * @since 1.0.0
     *
     * @use \FireHub\Core\Support\Collection\Traits\Sliceable<int, mixed>
     */
    use Sliceable;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param SplFixedArray<mixed> $storage <p>
     * Fixed the array underlying data.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private SplFixedArray $storage
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::values() To get values from array argument.
     */
    public static function fromArray (array $array):self {

        return new self(SplFixedArray::fromArray(Arr::values($array)));

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->all();
     *
     * // ['one', 'two', 'three']
     * ```
     *
     * @return array<mixed> Collection items as an array.
     */
    public function all ():array {

        return $this->storage->jsonSerialize();

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->count();
     *
     * // 3
     * ```
     */
    public function count ():int {

        return Iterator::count($this->storage);

    }

    /**
     * ### Count elements in Collectables, counted recursively
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\CountCollectables To count elements in Collectables, counted recursively.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Collection\Helpers\CountCollectables;
     *
     * $collection = Collection::fixed(function (SplFixedArray $storage):void {
     *  $storage[0] = Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]);
     *  $storage[1] = 'one';
     *  $storage[2] = 'two';
     *  $storage[3] = Collection::fixed(function (SplFixedArray $sub_storage):void {
     *      $sub_storage[0] = Collection::list([1,2]);
     *      $sub_storage[1] = Collection::list([1,2]);
     *  }, 2);
     * }, 4);
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
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->first();
     *
     * // 'one'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->first(function ($value) {
     *  return $value === 'two;
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

        return $this->storage[0];

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->firstKey();
     *
     * // 0
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->firstKey(function ($value) {
     *  return $value === 'two';
     * });
     *
     * // 1
     * ```
     */
    public function firstKey (?callable $callback = null):?int {

        if ($callback) {

            foreach ($this->storage as $key => $value)
                if ($callback($value)) return $key;

            return null;

        }

        $iterator = $this->storage->getIterator();

        $iterator->rewind(); // @phpstan-ignore-line

        return $iterator->key(); // @phpstan-ignore-line

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix::count() To count elements in the iterator.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->last();
     *
     * // 'three'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->last(function ($value) {
     *  return $value === 'two';
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

        return $this->storage[$this->count() - 1];

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->lastKey();
     *
     * // 2
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->lastKey(function ($value) {
     *  return $value === 'two';
     * });
     *
     * // 1
     * ```
     */
    public function lastKey (?callable $callback = null):?int {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $key => $value)
                if ($callback($value)) $found = $key;

            return $found;

        }

        return $this->count() - 1;

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->each(function ($value) {
     *  if ($value === 'four') return false;
     * });
     *
     * // true
     * ```
     */
    public function each (callable $callback, int $limit = 1_000_000):bool {

        $counter = 0;

        foreach ($this->storage as $value)
            if (
                $callback($value) === false
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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->every(function ($value) {
     *  return $value !== 'four';
     * });
     *
     * // true
     * ```
     */
    public function every (callable $callback):bool {

        foreach ($this->storage as $value)
            if (!$callback($value)) return false;

        return true;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix::firstKey() To get the first key from a collection.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if $value is callable.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->search('two');
     *
     * // 1
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->search(function ($value) {
     *  return $value !== 'one';
     * });
     *
     * // 1
     * ```
     */
    public function search (mixed $value):int|false {

        if (DataIs::callable($value)) return $this->firstKey($value) ?? false;

        foreach ($this->storage as $storage_key => $storage_value)
            if ($value === $storage_value) return $storage_key;

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix::count() To check if the number of collection items is 0.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
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
     * @uses \FireHub\Core\Support\Collection\Type\Fix::isEmpty() To check if a collection is empty.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
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
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if argument $value is callable.
     * @uses \FireHub\Core\Support\Collection\Type\Fix::first() Used to search string value.
     * @uses \FireHub\Core\Support\Collection\Type\Fix::search() Used to search for a callable value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->contains('one');
     *
     * // true
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->contains(function ($value) {
     *  return $value === 'one';
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
     * @uses \FireHub\Core\Support\Collection\Type\Fix::contains() To determine whether a collection contains a given item.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->doesntContain('four');
     *
     * // true
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->doesntContain(function ($value) {
     *  return $value === 'four';
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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->filter(function ($value) {
     *  return $value !== 'one';
     * });
     *
     * // ['two', 'three']
     * ```
     */
    public function filter (callable $callback):self {

        $storage = new SplFixedArray($this->storage->getSize());

        $counter = 0;

        foreach ($this->storage as $value)
            !$callback($value) ?: $storage[$counter++] = $value;

        $storage->setSize($counter);

        return new self($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix::filter() To filter elements in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->reject(function ($value) {
     *  return $value === 'one';
     * });
     *
     * // ['two', 'three']
     * ```
     */
    public function reject (callable $callback):self {

        /** @phpstan-ignore-next-line */
        return $this->filter(fn($value) => $value != $callback($value));

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->map(function ($value) {
     *  return 'new '.$value;
     * });
     *
     * // ['new one', 'new two', 'new three']
     * ```
     */
    public function map (callable $callback):self {

        $storage = new SplFixedArray($this->storage->getSize());

        foreach ($this->storage as $key => $value) $storage[$key] = $callback($value);

        return new self($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::count() To count elements of an object.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->merge($collection2);
     *
     * // ['one', 'two', 'three', 'one', 'two', 'three]
     * ```
     */
    public function merge (Collectable ...$collections):self {

        $size = 0;

        foreach ($collections as $collection)
            $size += $collection->count();

        $storage = new SplFixedArray($this->storage->getSize() + $size);

        $counter = 0;
        foreach ($this->storage as $value) $storage[$counter++] = $value;

        foreach ($collections as $collection)
            foreach ($collection as $value) $storage[$counter++] = $value;

        return new self($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix::count() To count for SliceRange.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::start() As start position.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::end() As end position.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->slice(1, 2);
     *
     * // ['two', 'three']
     * ```
     */
    public function slice (int $offset, ?int $length = null):self {

        $range = new SliceRange($this->count(), $offset, $length);

        $storage = new SplFixedArray(max($range->count(), 1));

        $start = $range->start();
        $end = $range->end();

        $position = 0; $counter = 0;
        foreach ($this as $value) {

            if ($position++ < $start) continue;

            if ($position > $end) break;

            $storage[$counter++] = $value;

        }

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->takeUntil(function ($value) {
     *  return $value === 'two';
     * });
     *
     * // ['one']
     * ```
     */
    public function takeUntil (callable $callback):self {

        $storage = new SplFixedArray($this->storage->getSize());

        $counter = 0;
        foreach ($this as $value) {

            if ($callback($value)) break;

            $storage[$counter++] = $value;

        }

        $storage->setSize($counter);

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->takeWhile(function ($value) {
     *  return $value !== 'two';
     * });
     *
     * // ['one']
     * ```
     */
    public function takeWhile (callable $callback):self {

        $storage = new SplFixedArray($this->storage->getSize());

        $counter = 0;
        foreach ($this as $value) {

            if (!$callback($value)) break;

            $storage[$counter++] = $value;

        }

        $storage->setSize($counter);

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->skipUntil(function ($value) {
     *  return $value === 'two';
     * });
     *
     * // ['two', 'three']
     * ```
     */
    public function skipUntil (callable $callback):self {

        $storage = new SplFixedArray($this->storage->getSize());

        $counter = 0; $found = false;
        foreach ($this as $value) {

            if (!$found && !$callback($value)) continue;

            $found = true;

            $storage[$counter++] = $value;

        }

        $storage->setSize($counter);

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
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     *
     * $collection->skipWhile(function ($value) {
     *  return $value !== 'two';
     * });
     *
     * // ['two', 'three']
     * ```
     */
    public function skipWhile (callable $callback):self {

        $storage = new SplFixedArray($this->storage->getSize());

        $counter = 0; $found = false;
        foreach ($this as $value) {

            if (!$found && $callback($value)) continue;

            $found = true;

            $storage[$counter++] = $value;

        }

        $storage->setSize($counter);

        return new self($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function offsetExists (mixed $offset):bool {

        return isset($this->storage[$offset]);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function offsetGet (mixed $offset):mixed {

        return $this->storage[$offset];

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function offsetSet (mixed $offset, mixed $value):void {

        $this->storage[$offset] = $value;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function offsetUnset (mixed $offset):void {

        unset($this->storage[$offset]);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return Traversable<int, mixed|null> Collection items as an array.
     */
    public function getIterator ():Traversable {

        yield from $this->storage;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return array<mixed> Data that can be serialized by json_encode().
     */
    public function jsonSerialize ():array {

        return $this->storage->jsonSerialize();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return array<mixed> An associative array of key/value pairs that represent the serialized form of the object.
     */
    public function __serialize ():array {

        return $this->jsonSerialize();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Iterables::count() To count collection items.
     */
    public function __unserialize (array $data):void {

        $this->storage = new SplFixedArray(Iterables::count($data));

        $count = 0;
        foreach ($data as $value) $this->storage[$count++] = $value;

    }

}