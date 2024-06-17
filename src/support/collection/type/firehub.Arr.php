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
use FireHub\Core\Support\LowLevel\ {
    Arr as ArrLL, Iterables
};
use Error, Traversable, TypeError;

/**
 * ### Array collection type
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @implements \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue>
 */
abstract class Arr implements Init, Collectable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Array underlying data
     * @since 1.0.0
     *
     * @var array<TKey, TValue>
     */
    protected array $storage = [];

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'two', 'three']);
     *
     * $collection->all();
     *
     * // ['one', 'two', 'three']
     * ```
     *
     * @return array<TKey, TValue> Collection items as an array.
     */
    public function all ():array {

        return $this->storage;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Iterables::count() To count storage items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'two', 'three']);
     *
     * $collection->count();
     *
     * // 3
     * ```
     */
    public function count ():int {

        return Iterables::count($this->storage);

    }

    /**
     * ### Recursively count elements
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Iterables::count() To count storage items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'two', ['three', 'four']]);
     *
     * $collection->countRecursively();
     *
     * // 5
     * ```
     */
    public function countRecursively ():int {

        return Iterables::count($this->storage, true);

    }

    /**
     * ### Count elements in Collectables, counted recursively
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\CountCollectables To count elements in Collectables, counted recursively.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     * use FireHub\Core\Support\Collection\Helpers\CountCollectables;
     *
     * $collection = Collection::list(fn():array => [
     *  Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
     *  'one',
     *  'two',
     *  Collection::list([Collection::list([1,2]),Collection::list([1,2])])
     * ]);
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
     * ### Counts the occurrences of values with callback function
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::create(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $count = $collection->countBy(function ($value, $key) {
     *  return substr($value, 0, 1);
     * });
     *
     * // ['J' => 4, 'R' => 2]
     * ```
     *
     * @param callable(TValue=, TKey=):array-key $callback $callback <p>
     * Count all items by custom callable.
     * </p>
     *
     * @throws Error If counted values are neither string nor int.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, positive-int> New collection with group items.
     */
    public function countBy (callable $callback):Associative {

        $storage = [];

        try {

            foreach ($this->storage as $key => $value) {

                $callable = $callback($value, $key);

                $storage[$callable] = ($storage[$callable] ?? 0) + 1;

            }

        } catch (TypeError) {

            throw new Error('Cannot count values that are neither string nor int.');

        }

        return new Associative($storage);

    }

    /**
     * ### Counts the occurrences of values in the collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     * @uses \FireHub\Core\Support\LowLevel\Arr::countValues() To count the occurrences of each distinct value in a collection.
     * @uses \FireHub\Core\Support\LowLevel\Arr::column() To get the values from a single column in the collection.
     *
     * @example Using countBy method.
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $count = $collection->countBy();
     *
     * // ['John' => 1, 'Jane' => 3, 'Richard' => 2]
     * ```
     * @example Counting a multidimensional collection.
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::create()->multidimensional(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $count = $collection->countByValues('lastname);
     *
     * // ['Doe' => 2, 'Roe' => 1]
     * ```
     *
     * @error\exeption E_WARNING for every element that is not string or int.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, positive-int> New collection with counted values.
     */
    public function countByValues (int|string $column = null):Associative {

        return new Associative(
            ArrLL::countValues(
                $column ? ArrLL::column($this->storage, $column) : $this->storage // @phpstan-ignore-line
            )
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return Traversable<TKey, TValue> Collection items as an array.
     */
    public function getIterator ():Traversable {

        yield from $this->storage;

    }

}