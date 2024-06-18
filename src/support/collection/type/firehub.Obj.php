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
use FireHub\Core\Support\LowLevel\Iterator;
use SplObjectStorage, Traversable;

/**
 * ### Object collection type
 *
 * Object collection provides a map from objects to data or, by ignoring data, an object set.
 * This dual purpose can be useful in many cases involving the need to uniquely identify objects.
 * @since 1.0.0
 *
 * @implements \FireHub\Core\Support\Contracts\HighLevel\Collectable<int, object>
 */
final class Obj implements Init, Collectable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param SplObjectStorage<object, mixed> $storage <p>
     * Storage underlying data.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private SplObjectStorage $storage
    ) {}

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
     * $collection = Collection::object(function (SplObjectStorage $storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     * });
     *
     * $collection->all();
     *
     * // [['object' => object(stdClass), 'info' => 'data for object 1'], ['object' => object(stdClass), 'info' => [1,2,3]]]
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

        return $data;

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
     *
     * $collection = Collection::object(function (SplObjectStorage $storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     * });
     *
     * $collection->count();
     *
     * // 2
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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
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
     * If callback is used, the method will return the first item that passes truth test.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function first (callable $callback = null):mixed {

        if ($callback) {

            foreach ($this->storage as $object)
                if ($callback($object, $this->storage[$object])) return $object;

            return null;

        }

        $this->storage->rewind();

        return $this->storage->valid() ? $this->storage->current() : null;

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
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
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
     * If callback is used, the method will return the first item that passes truth test.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function firstKey (callable $callback = null):?int {

        if ($callback) {

            foreach ($this->storage as $key => $object)
                if ($callback($object, $this->storage[$object])) return $key;

            return null;

        }

        $this->storage->rewind();

        return $this->storage->valid() ? $this->storage->key() : null;

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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     * });
     *
     * $collection->last(function ($object, $info) use ($cls1) {
     *  return $object === $cls1;
     * });
     *
     * // new stdClass()
     * ```
     *
     * @param null|callable(object=, mixed=):bool $callback [optional] <p>
     * If callback is used, the method will return the last item that passes truth test.
     * </p>
     *
     * @phpstan-ignore-next-line
     */
    public function last (callable $callback = null):mixed {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $object)
                if ($callback($object, $this->storage[$object])) $found = $object;

            return $found;

        }

        $counter = 0;

        $count = $this->count();

        foreach ($this->storage as $value) if (++$counter === $count) return $value;

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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     * });
     *
     * $collection->lastKey(function ($object, $info) use ($cls1) {
     *  return $object === $cls1;
     * });
     *
     * // 0
     * ```
     *
     * @param null|callable(object=, mixed=):bool $callback [optional] <p>
     * If callback is used, the method will return the last item that passes truth test.
     * </p>
     *
     * @SuppressWarnings(PHPMD.UnusedLocalVariable)
     *
     * @phpstan-ignore-next-line
     */
    public function lastKey (callable $callback = null):?int {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $key => $object)
                if ($callback($object, $this->storage[$object])) $found = $key;

            return $found;

        }

        $counter = 0;

        $count = $this->count();

        foreach ($this->storage as $key => $value) if (++$counter === $count) return $key;

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
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     * });
     *
     * $collection->each(function ($object, $info) {
     *  if (* condition *) {
     *      return false;
     *  }
     * });
     * ```
     *
     * @param callable(object=, mixed=):(false|void) $callback <p>
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
                $callback($object, $this->storage[$object]) === false
                || $counter++ > $limit
            ) return false;

        return true;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return Traversable<object> Collection items as an array.
     */
    public function getIterator ():Traversable {

        yield from $this->storage;

    }

}