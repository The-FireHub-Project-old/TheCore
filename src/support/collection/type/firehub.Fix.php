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
use FireHub\Core\Support\Collection\Helpers\CountCollectables;
use FireHub\Core\Support\LowLevel\Iterator;
use SplFixedArray, Traversable;

/**
 * ### Fixed collection type
 *
 * Fixed collection allows only integers as keys, but it is faster and uses less memory than an array collection.
 * This collection type must be resized manually and allows only integers within the range as indexes.
 * @since 1.0.0
 *
 * @implements \FireHub\Core\Support\Contracts\HighLevel\Collectable<int, mixed>
 */
final class Fix implements Init, Collectable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param SplFixedArray<mixed> $storage <p>
     * Fixed array underlying data.
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
     * * @example
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
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
     * use FireHub\Core\Support\Collections\Collection;
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
     * use FireHub\Core\Support\Collections\Collection;
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
     */
    public function countMultidimensional ():int {

        return (new CountCollectables($this))();

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

}