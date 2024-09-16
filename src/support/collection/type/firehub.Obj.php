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
use FireHub\Core\Support\Collection\Type\Contracts\Obj as ObjContract;
use FireHub\Core\Support\Collection\Contracts\Accessible as AccessibleCollection;
use FireHub\Core\Support\Collection\Helpers\SliceRange;
use FireHub\Core\Support\Collection\Traits\ {
    Accessible, Convertable, Conditionable, Ensure, Reducible, Sliceable
};
use FireHub\Core\Support\LowLevel\ {
    DataIs, Iterator
};
use Error, SplObjectStorage , UnexpectedValueException, Traversable;

/**
 * ### Object collection type
 *
 * Object collection provides a map from objects to data or, by ignoring data, an object set.
 * This dual purpose can be useful in many cases involving the need to uniquely identify objects.
 * @since 1.0.0
 *
 * @implements \FireHub\Core\Support\Collection\Contracts\Accessible<int, object>
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class Obj implements ObjContract, Init, AccessibleCollection {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### This trait allows applying the callback to each collection item
     * @since 1.0.0
     *
     * @use \FireHub\Core\Support\Collection\Traits\Accessible<int, object>
     */
    use Accessible;

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
     * @use \FireHub\Core\Support\Collection\Traits\Sliceable<int, object>
     */
    use Sliceable;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function __construct (
        private SplObjectStorage $storage
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @throws Error If missing object or info key from an array.
     *
     * @return list<array{object: object, info: mixed}> New collection from provided array.
     *
     * @phpstan-ignore-next-line
     */
    public static function fromArray (array $array):static {

        $storage = new SplObjectStorage();

        foreach ($array as $value) {

            $object = $value['object'] ?? throw new Error('Missing object key from an array!'); // @phpstan-ignore-line
            $info = $value['info'] ?? throw new Error('Missing info key from an array!'); // @phpstan-ignore-line

            $storage[$object] = $info; // @phpstan-ignore-line

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function (SplObjectStorage $storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->all();
     *
     * // [
     * //   ['object' => object(stdClass), 'info' => 'data for object 1'],
     * //   ['object' => object(stdClass), 'info' => [1,2,3]],
     * //   ['object' => object(stdClass), 'info' => 20]
     * // ]
     * ```
     *
     * @return list<array{object: object, info: mixed}> Collection items as an array.
     */
    public function all ():array {

        $this->storage->rewind();

        $data = [];

        while ($this->storage->valid()) {

            $object = $this->storage->current();
            $info = $this->storage->getInfo();
            $this->storage->next();

            $data[] = ['object' => $object, 'info' => $info];

        }

        return $data; // @phpstan-ignore-line

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function (SplObjectStorage $storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
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
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->first();
     *
     * // new stdClass()
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->first(function ($object, $info) use ($cls1) {
     *  return $object === $cls1;
     * });
     *
     * // new stdClass()
     * ```
     *
     * @param null|callable(object=, mixed=):bool $callback [optional] <p>
     * <code>null|callable(object=, mixed=):bool</code>
     * If callback is used, the method will return the first item that passes truth test.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function first (?callable $callback = null):mixed {

        if ($callback) {

            foreach ($this->storage as $object)
                if ($callback($object, $this->storage[$object])) return $object; // @phpstan-ignore-line

            return null;

        }

        $this->storage->rewind();

        return $this->storage->valid() ? $this->storage->current() : null; // @phpstan-ignore-line

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->firstKey();
     *
     * // 0
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->firstKey(function ($object, $info) use ($cls1) {
     *  return $object === $cls1;
     * });
     *
     * // 0
     * ```
     *
     * @param null|callable(object=, mixed=):bool $callback [optional] <p>
     * <code>null|callable(object=, mixed=):bool</code>
     * If callback is used, the method will return the first item that passes truth test.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function firstKey (?callable $callback = null):?int {

        if ($callback) {

            foreach ($this->storage as $key => $object)
                if ($callback($object, $this->storage[$object])) return $key; // @phpstan-ignore-line

            return null;

        }

        $this->storage->rewind();

        return $this->storage->valid() ? $this->storage->key() : null; // @phpstan-ignore-line

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj::count() To count elements in the iterator.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->last();
     *
     * // new stdClass()
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->last(function ($object, $info) use ($cls1) {
     *  return $info <> 20;
     * });
     *
     * // new stdClass()
     * ```
     *
     * @param null|callable(object=, mixed=):bool $callback [optional] <p>
     * <code>null|callable(object=, mixed=):bool</code>
     * If callback is used, the method will return the last item that passes truth test.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function last (?callable $callback = null):mixed {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $object)
                if ($callback($object, $this->storage[$object])) $found = $object; // @phpstan-ignore-line

            return $found; // @phpstan-ignore-line

        }

        $counter = 0;

        $count = $this->count();

        foreach ($this->storage as $value) if (++$counter === $count) return $value; // @phpstan-ignore-line

        return null;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj::count() To count elements in the iterator.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->lastKey();
     *
     * // 1
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->lastKey(function ($object, $info) use ($cls1) {
     *  return $info <> 20;
     * });
     *
     * // 1
     * ```
     *
     * @param null|callable(object=, mixed=):bool $callback [optional] <p>
     * <code>null|callable(object=, mixed=):bool</code>
     * If callback is used, the method will return the last item that passes truth test.
     * </p>
     *
     * @SuppressWarnings(PHPMD.UnusedLocalVariable)
     *
     * @phpstan-ignore-next-line
     */
    public function lastKey (?callable $callback = null):?int {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $key => $object)
                if ($callback($object, $this->storage[$object])) $found = $key; // @phpstan-ignore-line

            return $found; // @phpstan-ignore-line

        }

        $counter = 0;

        $count = $this->count();

        foreach ($this->storage as $key => $value) if (++$counter === $count) return $key; // @phpstan-ignore-line

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->each(function ($object, $info) {
     *  if ($info === 'data for object 1') return false;
     * });
     *
     * // false
     * ```
     *
     * @param callable(object=, mixed=):mixed $callback <p>
     * <code>callable(object=, mixed=):bool</code>
     * Function to call on each item in collection.
     * </p>
     * @param positive-int $limit [optional] <p>
     * Maximum number of elements that is allowed to be iterated.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function each (callable $callback, int $limit = 1_000_000):bool {

        $counter = 0;

        foreach ($this->storage as $object)
            if (
                $callback($object, $this->storage[$object]) === false // @phpstan-ignore-line
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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->every(function ($object, $info) {
     *  return $info !== 10;
     * });
     *
     * // true
     * ```
     */
    public function every (callable $callback):bool {

        foreach ($this->storage as $object)
            if (!$callback($object, $this->storage[$object])) return false; // @phpstan-ignore-line

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->any(function ($object, $info) {
     *  return $info === 'data for object 1';
     * });
     *
     * // true
     * ```
     */
    public function any (callable $callback):bool {

        foreach ($this->storage as $object)
            if ($callback($object, $this->storage[$object])) return true; // @phpstan-ignore-line

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj::firstKey() To get the first key from a collection.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if $value is callable.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->search($cls1);
     *
     * // 0
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->search(function ($object, $info) use ($cls1, $cls2, $cls3) {
     *  return $info !== 'data for object 1';
     * });
     *
     * // 1
     * ```
     *
     * @param object|callable(object=, mixed=):bool $value <p>
     * The searched value.
     * If value is a string, the comparison is done in a case-sensitive manner.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function search (mixed $value):int|false {

        if (DataIs::callable($value)) return $this->firstKey($value) ?? false;

        foreach ($this->storage as $key => $object)
            if ($value === $object) return $key; // @phpstan-ignore-line

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if argument $value is callable.
     * @uses \FireHub\Core\Support\Collection\Type\Obj::first() Used to search string value.
     * @uses \FireHub\Core\Support\Collection\Type\Obj::search() Used to search for a callable value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->contains($cls1);
     *
     * // true
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->contains(function ($object, $info) {
     *  return $object === $cls1;
     * });
     *
     * // true
     * ```
     */
    public function contains (mixed $value):bool {

        return DataIs::callable($value)
            ? !($this->first($value) === null) // @phpstan-ignore-line
            : !($this->search($value) === false);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj::contains() To determine whether a collection contains a given item.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->doesntContain($cls1);
     *
     * // false
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->doesntContain(function ($object, $info) {
     *  return $object === $cls1;
     * });
     *
     * // false
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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->containTimes($cls1);
     *
     * // 1
     * ```
     */
    public function containTimes (mixed $value):int {

        $counter = 0;

        foreach ($this->storage as $object)
            if ($value === $object) $counter++;

        return $counter;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj::count() To check if the number of collection items is 0.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
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
     * @uses \FireHub\Core\Support\Collection\Type\Obj::isEmpty() To check if a collection is empty.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
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
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->filter(function ($object, $info) {
     *  return $info === 20;
     * });
     *
     * // [[object(stdClass), 'data for object 1']]
     * ```
     */
    public function filter (callable $callback):static {

        $storage = new SplObjectStorage();

        foreach ($this->storage as $object)
            !$callback($object, $this->storage[$object]) ?: $storage[$object] = $this->storage[$object]; // @phpstan-ignore-line

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj::filter() To filter elements in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->reject(function ($object, $info) {
     *  return $info !== 20;
     * });
     *
     * // [[object(stdClass), 'data for object 1']]
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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = 'data for object 2';
     * });
     *
     * $collection->map(function ($info) {
     *  return 'new '.$info;
     * });
     *
     * // [[object(stdClass), 'new data for object 1'], [object(stdClass), 'new data for object 2']]
     * ```
     */
    public function map (callable $callback):static {


        $storage = new SplObjectStorage();

        foreach ($this->storage as $object)
            $storage[$object] = $callback($object, $this->storage[$object]); // @phpstan-ignore-line

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::storage() To get storage data.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->merge($collection2);
     *
     * // [
     * //   [object(stdClass), 'data for object 1'], [object(stdClass), [1,2,3]], [object(stdClass),20],
     * //   [object(stdClass), 'data for object 1'], [object(stdClass), [1,2,3]], [object(stdClass),20]
     * // ]
     * ```
     */
    public function merge (Collectable ...$collections):static {

        $storage = new SplObjectStorage();

        foreach ($this->storage as $object) $storage[$object] = $this->storage[$object]; // @phpstan-ignore-line

        foreach ($collections as $collection)
            foreach ($collection as $object) $storage[$object] = $collection[$object]; // @phpstan-ignore-line

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix::slice() To get a slice from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->nth(2, 1);
     *
     * // [[object(stdClass), [1,2,3]]]
     * ```
     *
     * @phpstan-ignore-next-line
     */
    public function nth (int $step, int $offset = 0):static {

        $storage = new SplObjectStorage();

        $counter = 0;
        foreach (
            $offset > 0
                ? $this->slice($offset)->storage
                : $this->storage as $object
        ) if ($counter++ % (max($step, 1)) === 0)  $storage[$object] = $this->storage[$object]; // @phpstan-ignore-line

        return new static($storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj::count() To count for SliceRange.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::start() As start position.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::end() As end position.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->slice(1, 2);
     *
     * // [[object(stdClass), [1,2,3]], [object(stdClass), 20]]
     * ```
     */
    public function slice (int $offset, ?int $length = null):static {

        $range = new SliceRange($this->count(), $offset, $length);

        $storage = new SplObjectStorage();

        $start = $range->start();
        $end = $range->end();

        $position = 0;
        foreach ($this->storage as $object) {

            if ($position++ < $start) continue;

            if ($position > $end) break;

            $storage[$object] = $this->storage[$object]; // @phpstan-ignore-line

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->takeUntil(function ($object, $info) {
     *  return $info === [1, 2, 3];
     * });
     *
     * // [[objects(stdClass), 'data for object 1']]
     * ```
     */
    public function takeUntil (callable $callback):static {

        $storage = new SplObjectStorage();

        foreach ($this as $object) {

            if ($callback($object, $this->storage[$object])) break; // @phpstan-ignore-line

            $storage[$object] = $this->storage[$object];

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->takeWhile(function ($object, $info) {
     *  return $info !== [1, 2, 3];
     * });
     *
     * // [[objects(stdClass), 'data for object 1']]
     * ```
     */
    public function takeWhile (callable $callback):static {

        $storage = new SplObjectStorage();

        foreach ($this as $object) {

            if (!$callback($object, $this->storage[$object])) break; // @phpstan-ignore-line

            $storage[$object] = $this->storage[$object];

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->skipUntil(function ($object, $info) {
     *  return $info === [1, 2, 3];
     * });
     *
     * // [[objects(stdClass), [1,2,3]], [objects(stdClass), 20]]
     * ```
     */
    public function skipUntil (callable $callback):static {

        $storage = new SplObjectStorage();

        $found = false;
        foreach ($this as $object) {

            if (!$found && !$callback($object, $this->storage[$object])) continue; // @phpstan-ignore-line

            $found = true;

            $storage[$object] = $this->storage[$object];

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
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     * $cls3 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2, $cls3):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     *  $storage[$cls3] = 20;
     * });
     *
     * $collection->skipWhile(function ($object, $info) {
     *  return $info !== [1, 2, 3];
     * });
     *
     * // [[objects(stdClass), [1,2,3]], [objects(stdClass), 20]]
     * ```
     */
    public function skipWhile (callable $callback):static {

        $storage = new SplObjectStorage();

        $found = false;
        foreach ($this as $object) {

            if (!$found && $callback($object, $this->storage[$object])) continue; // @phpstan-ignore-line

            $found = true;

            $storage[$object] = $this->storage[$object];

        }

        return new static($storage);

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

        try {

            return $this->storage[$offset]; // @phpstan-ignore-line

        } catch (UnexpectedValueException) { // @phpstan-ignore-line

            return null;

        }

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function offsetSet (mixed $offset, mixed $value):void {

        $this->storage[$offset] = $value; // @phpstan-ignore-line

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function offsetUnset (mixed $offset):void {

        unset($this->storage[$offset]); // @phpstan-ignore-line

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return Traversable<object> Collection items as an array.
     */
    public function getIterator ():Traversable {

        yield from $this->storage; // @phpstan-ignore-line

    }

}