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
use FireHub\Core\Support\Collection\Contracts\Accessible as AccessibleCollection;
use FireHub\Core\Support\Collection\Helpers\CountCollectables;
use FireHub\Core\Support\Collection\Traits\ {
    Accessible, Convertable, Conditionable, Ensure, Reducible, Sliceable
};
use FireHub\Core\Support\Enums\ {
    Order, Sort, Data\Category, Data\Type, Operator\Comparison
};
use FireHub\Core\Support\LowLevel\ {
    Arr as ArrLL, DataIs, Iterables
};
use Error, Traversable, TypeError, ValueError;

use function FireHub\Core\Support\Helpers\Arr\ {
    isEmpty, first, last, groupByKey, duplicates, filterRecursive, filterRecursiveType,
    multiSort, random, uniqueDuplicatesTwoDimensional
};

/**
 * ### Array collection type
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @implements \FireHub\Core\Support\Collection\Contracts\Accessible<TKey, TValue>
 *
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
abstract class Arr implements Init, AccessibleCollection {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### This trait allows applying the callback to each collection item
     * @since 1.0.0
     *
     * @use \FireHub\Core\Support\Collection\Traits\Accessible<TKey, TValue>
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
     * @use \FireHub\Core\Support\Collection\Traits\Sliceable<TKey, TValue>
     */
    use Sliceable;

    /**
     * ### Array underlying data
     * @since 1.0.0
     *
     * @var array<TKey, TValue>
     */
    protected array $storage = [];

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param array<TKey, TValue> $storage <p>
     * Array underlying data.
     * </p>
     *
     * @return void
     */
    abstract public function __construct (array $storage);

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return static New collection from provided array.
     */
    public static function fromArray (array $array):static {

        return new static($array);

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->all();
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']
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
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->count();
     *
     * // 6
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
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->countRecursively();
     *
     * // 14
     * ```
     *
     * @return non-negative-int The number of elements in an object counted recursively.
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
     * use FireHub\Core\Support\Collection;
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
     *
     * @return non-negative-int Number of elements of an object.
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
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->countBy(function ($value, $key) {
     *  return substr($value, 0, 1);
     * });
     *
     * // ['J' => 4, 'R' => 2]
     * ```
     *
     * @param callable(TValue=, TKey=):array-key $callback <p>
     * <code>callable(TValue=, TKey=):bool</code>
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
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->countByValues();
     *
     * // ['John' => 1, 'Jane' => 3, 'Richard' => 2]
     * ```
     * @example Counting a two-dimensional collection.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     *  $collection->countByValues('lastname');
     *
     * // ['Doe' => 2, 'Roe' => 1]
     * ```
     *
     * @param null|int|string $column [optional] <p>
     * Column to count by.
     * </p>
     *
     * @error\exeption E_WARNING for every element that is not string or int.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, positive-int> New collection with counted values.
     */
    public function countByValues (null|int|string $column = null):Associative {

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
     * @uses \FireHub\Core\Support\Helpers\Arr\first() To get the first value from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->first();
     *
     * // 'John'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->first(function ($value) {
     *  return $values <> 'John';
     * });
     *
     * // 'Jane'
     * ```
     */
    public function first (?callable $callback = null):mixed {

        if ($callback) {

            foreach ($this->storage as $value)
                if ($callback($value)) return $value;

            return null;

        }

        return first($this->storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::firstKey() To get the first key from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->firstKey();
     *
     * // 0
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->firstKey(function ($value) {
     *  return $value <> 'John';
     * });
     *
     * // 1
     * ```
     */
    public function firstKey (?callable $callback = null):null|int|string {

        if ($callback) {

            foreach ($this->storage as $key => $value)
                if ($callback($value)) return $key;

            return null;

        }

        return ArrLL::firstKey($this->storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\last() To get the last value from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->last();
     *
     * // 'Richard'
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->last(function ($value) {
     *  return $value <> 'Richard';
     * });
     *
     * // 'Jane'
     * ```
     */
    public function last (?callable $callback = null):mixed {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $value)
                if ($callback($value)) $found = $value;

            return $found;

        }

        return last($this->storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::firstKey() To get the last key from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->lastKey();
     *
     * // 5
     * ```
     * @example With $callback parameter.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->lastKey(function ($value) {
     *  return $value <> 'Richard';
     * });
     *
     * // 3
     * ```
     */
    public function lastKey (?callable $callback = null):null|int|string {

        if ($callback) {

            $found = null;

            foreach ($this->storage as $key => $value)
                if ($callback($value)) $found = $key;

            return $found;

        }

        return ArrLL::lastKey($this->storage);

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->each(function ($value) {
     *  if ($value === 'Jack') return false;
     * });
     *
     * // false
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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->every(function ($value) {
     *  return $value !== 'Jack';
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
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->any(function ($value) {
     *  return $value === 'John';
     * });
     *
     * // true
     * ```
     */
    public function any (callable $callback):bool {

        foreach ($this->storage as $value)
            if ($callback($value)) return true;

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::firstKey() To get the first key from a collection.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if $value is callable.
     * @uses \FireHub\Core\Support\LowLevel\Arr::search() To search the array for a given value and returns the first corresponding key if successful.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->search('Jane');
     *
     * // 1
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->search(function ($value, $key) {
     *  return $value !== 'John';
     * });
     *
     * // 1
     * ```
     *
     * @warning This method may return Boolean false but may also return a non-Boolean value which evaluates to false.
     * Read the section on Booleans for more information.
     * Use the === operator for testing the return value of this function.
     */
    public function search (mixed $value):int|string|false {

        return DataIs::callable($value)
            ? ($this->firstKey($value) ?? false)
            : ArrLL::search($value, $this->storage);

    }

    /**
     * ### Searches the two-dimensional collection for a given value and returns the first corresponding key
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::search() To search the array for a given value and returns the first corresponding key if successful.
     * @uses \FireHub\Core\Support\LowLevel\Arr::combine() To get key from value.
     * @uses \FireHub\Core\Support\LowLevel\Arr::keys() To get keys from a collection.
     * @uses \FireHub\Core\Support\LowLevel\Arr::column() To get the values from a single column in the collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->searchTwoDimensional('age', 27);
     *
     * // 2
     * ```
     *
     * @param array-key $column <p>
     * The searched value.
     * If the value is a string, the comparison is done in a case-sensitive manner.
     * </p>
     * @param mixed $value <p>
     * The searched value.
     * If the value is a string, the comparison is done in a case-sensitive manner.
     * </p>
     *
     * @return TKey|false The key if it is found in the collection, false otherwise.
     * If a value is found in a collection more than once, the first matching key is returned.
     */
    public function searchTwoDimensional (int|string $column, mixed $value):int|string|false {

        return ArrLL::search(
            $value,
            /* @phpstan-ignore-next-line */
            ArrLL::combine(ArrLL::keys($this->storage), ArrLL::column($this->storage, $column))
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\isEmpty() To check if an array is empty.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->isEmpty();
     *
     * // false
     * ```
     */
    public function isEmpty ():bool {

        return isEmpty($this->storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::isEmpty() To check if a collection is empty.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->isNotEmpty();
     *
     * // true
     * ```
     */
    public function isNotEmpty ():bool {

        return !static::isEmpty();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if argument $value is callable.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::first() Used to search string value.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::search() Used to search for a callable value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->contains('Jane');
     *
     * // true
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->contains(function ($value) {
     *  return $value === 'Jane';
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
     * @uses \FireHub\Core\Support\Collection\Type\Arr::contains() To determine whether a collection contains a given item.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->doesntContain('Jack');
     *
     * // true
     * ```
     * @example With callable.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->doesntContain(function ($value) {
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
     * @uses \FireHub\Core\Support\LowLevel\Iterables::count() To count all elements in the array.
     * @uses \FireHub\Core\Support\LowLevel\Arr::keys() To get all keys with a specified value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->containTimes('Jane');
     *
     * // 3
     * ```
     */
    public function containTimes (mixed $value):int {

        return Iterables::count(ArrLL::keys($this->storage, $value));

    }

    /**
     * ### Group collection by user-defined function until a result is true
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::reduce() To iteratively reduce the array to a single value using a
     * callback function.
     * @uses \FireHub\Core\Support\LowLevel\Arr::keys() To return all the keys or a subset of the keys for an array.
     * @uses \FireHub\Core\Support\LowLevel\Arr::count() To count all elements in the array.
     * @uses \FireHub\Core\Support\LowLevel\Arr::end() To set the internal pointer of an array to its last element.
     * @uses \FireHub\Core\Support\LowLevel\Arr::key() To fetch a key from an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list()->indexed(fn():array => [1, 2, 3, 4, 13, 22, 27, 28, 29]);
     *
     * $collection->groupBy(function ($prev, $curr) {
     *  return ($curr – $prev) > 1;
     * });
     *
     * // [[1, 2, 3, 4], [13], [22], [27, 28, 29]]
     * ```
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->groupBy(function ($prev, $curr) {
     *  return $curr['lastname'] !== 'Doe';
     * });
     *
     * // [
     * //   [
     * //       ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     * //       ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21]
     * //   ],
     * //   [
     * //       ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * //   ]
     * // ]
     * ```
     *
     * @param callable(TValue $prev, TValue $curr):bool $callback <p>
     * <code>callable(TValue $prev, TValue $curr):bool</code>
     * User-defined function.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<array<TKey, TValue>> The grouped collection.
     */
    public function groupBy (callable $callback):Indexed {

        /** @phpstan-ignore-next-line */
        return new Indexed(ArrLL::reduce(
            ArrLL::keys($this->storage),
            function (array $carry, int|string $key) use ($callback):array { // @phpstan-ignore-line

                $current = $this->storage[$key];
                $length = Iterables::count($carry);

                if ($length > 0) {

                    $chunk = &$carry[$length - 1];
                    Iterables::end($chunk); // @phpstan-ignore-line
                    $previous = $chunk[Iterables::key($chunk)];

                    if ($callback($previous, $current)) $carry[] = [$key => $current];
                    else $chunk[$key] = $current;

                } else $carry[] = [$key => $current];

                return $carry;
            },
            []
        ));

    }

    /**
     * ### Group collection by a key or set of keys shared between all array members
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     * @uses \FireHub\Core\Support\Helpers\Arr\groupByKey() To group a collection by a key or set of keys shared between
     * all array members.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->groupByKey('lastname', function ($value) {
     *  return $value['firstname'] === 'John';
     * });
     *
     * // 'Doe' => [
     * //      1 => [
     * //          0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]
     * //      ],
     * //      0 => [
     * //          1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
     * //      ]
     * //  ],
     * //  'Roe' => [
     * //      0 => [
     * //          2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * //      ]
     * //  ]
     * ```
     *
     * @param array-key|callable $key <p>
     * <code><![CDATA[ array-key|callable(array<array-key, mixed>> $row):mixed ]]></code>
     * Array key to group with.
     * </p>
     * @param array-key|callable ...$keys <p>
     * <code><![CDATA[ array-key|callable(array<array-key, mixed>> $row):mixed ]]></code>
     * Additional array keys to group with.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, mixed> The grouped collection.
     */
    public function groupByKey (int|string|callable $key, int|string|callable ...$keys):Associative {

        return new Associative(groupByKey($this->storage, $key, ...$keys));

    }

    /**
     * ### Combines the values of the collection, as keys, with the values of another collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable As parameter.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\LowLevel\Arr::combine() To create an array by using one array for keys and another
     * for its values.
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @template TNewValue
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $keys = Collection::list(fn():array => ['firstname', 'lastname', 'age']);
     * $values = Collection::list(fn():array => ['John', 'Doe', 25]));
     *
     * $keys->combine($values);
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25]
     * ```
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Collectable<mixed, TNewValue> $collection <p>
     * Collection to be used as values.
     * </p>
     *
     * @throws ValueError If arguments $keys and $values don't have the same number of elements.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, TNewValue> The combined collection.
     */
    public function combine (Collectable $collection):Associative {

        /** @phpstan-ignore-next-line */
        return new Associative(ArrLL::combine($this->storage, $collection->all()));

    }

    /**
     * ### Computes the difference of collections
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::difference() To compute the difference of arrays using values for
     * comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::differenceFunc() To compute the difference of arrays using values for
     * comparison by using a callback function for data comparison.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::list(['Jane', 'Richard']);
     *
     * $collection1->difference($collection2);
     *
     * // ['John']
     * ```
     * @example With callback function.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::list(['Jane', 'Richard']);
     *
     * $collection1->difference($collection2, function ($value_a, $value_b):int {
     *  return $value_a !== $value_b ? 1 : 0;
     * });
     *
     * // ['John']
     * ```
     *
     * @param \FireHub\Core\Support\Collection\Type\Arr<array-key, mixed> $collection <p>
     * Collection to compare against.
     * </p>
     * @param null|callable(mixed $a, mixed $b):int<-1, 1> $value [optional] <p>
     * <code>callable (mixed $a, mixed $b):int<-1, 1></code>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument
     * is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     *
     * @return static An array containing all the entries from $collection that aren't present in any of the other
     * collections.
     *
     * @caution Returning non-integer values from the comparison function, such as float, will result in an internal
     * cast to int of the callback's return value.
     * So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as
     * equal.
     */
    public function difference (Arr $collection, ?callable $value = null):static {

        return new static(
            $value
                ? ArrLL::differenceFunc($this->storage, $collection->all(), $value)
                : ArrLL::difference($this->storage, $collection->all())
        );

    }

    /**
     * ### Computes the intersection of collections
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::intersect() To compute the intersection of arrays using values for
     * comparison.
     * @uses \FireHub\Core\Support\LowLevel\Arr::intersectFunc() To compute the intersection of arrays using values for
     * comparison by using a callback function for data comparison.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::list(['Jane', 'Richard']);
     *
     * $collection1->intersect($collection2);
     *
     * // [1 => 'Jane', 2 => 'Jane', 3 => 'Jane', 4 => 'Richard', 5 => 'Richard']
     * ```
     * @example With callback function.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::list(['Jane', 'Richard']);
     *
     * $collection1->intersect($collection2, function ($value_a, $value_b):int {
     *  return $value_a === $value_b ? 1 : 0;
     * });
     *
     * // [0 => 'John', 2 => 'Jane', 3 => 'Jane']
     * ```
     *
     * @param \FireHub\Core\Support\Collection\Type\Arr<array-key, mixed> $collection <p>
     * Collection to compare against.
     * </p>
     * @param null|callable(mixed $a, mixed $b):int<-1, 1> $value [optional] <p>
     * <code>callable (mixed $a, mixed $b):int<-1, 1></code>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument
     * is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     *
     * @return static An array containing all the entries from $collection that are present in any of the other
     * collections.
     *
     * @caution Returning non-integer values from the comparison function, such as float, will result in an internal
     * cast to int of the callback's return value.
     * So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as
     * equal.
     */
    public function intersect (Arr $collection, ?callable $value = null):static {

        return new static(
            $value
                ? ArrLL::intersectFunc($this->storage, $collection->all(), $value)
                : ArrLL::intersect($this->storage, $collection->all())
        );

    }

    /**
     * ### Collapses a collection of arrays into a single, flat collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::merge() To merge all subarrays.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::array() To check if subarray is an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  [1, 2, 3],
     *  [4, 5, 6],
     *  [7, 8, 9]
     * ]);
     *
     * $collection->collapse();
     *
     * // [1, 2, 3, 4, 5, 6, 7, 8, 9]
     * ```
     *
     * @return static<array-key, mixed>
     *
     * @phpstan-ignore-next-line
     */
    public function collapse ():static {

        $storage = [];

        foreach ($this->storage as $value)
            if (DataIs::array($value)) $storage[] = $value;

        return new static(ArrLL::merge(...$storage));

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->filter(function ($value) {
     *  return $value !== 'Jane';
     * });
     *
     * // ['John', 'Richard', 'Richard']
     * ```
     */
    public function filter (callable $callback):static {

        return new static(
            ArrLL::filter($this->storage, $callback, true)
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::filter() To filter elements in an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->reject(function ($value) {
     *  return $value !== 'Jane';
     * });
     *
     * // ['Jane', 'Jane', 'Jane']
     * ```
     */
    public function reject (callable $callback):static {

        /** @phpstan-ignore-next-line */
        return $this->filter(fn($value) => $value != $callback($value));

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->map(function ($value) {
     *  return $value.'.';
     * });
     *
     * // ['John.', 'Jane.', 'Jane.', 'Jane.', 'Richard.', 'Richard.']
     * ```
     */
    public function map (callable $callback):static {

        return new static(ArrLL::map($this->storage, $callback));

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection2 = Collection::list(fn():array => [1, 2, 3, 4, 13, 22, 27, 28, 29]);
     *
     * $collection->merge($collection2);
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 1, 2, 3, 4, 13, 22, 27, 28, 29]
     * ```
     *
     * @return static New merged collection.
     */
    public function merge (Collectable ...$collections):static {

        $storage = $this->storage;

        foreach ($collections as $collection)
            $storage = [...$storage, ...$collection->all()];

        return new static($storage);

    }

    /**
     * ### Separate collection items that pass a given truth test from those that do not
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * [$passed, $failed] = $collection->partition(function ($value) {
     *  return $value === 'Jane';
     * });
     *
     * $passed->all();
     *
     * // ['Jane', 'Jane', 'Jane']
     *
     * $failed->all();
     *
     * // ['John', 'Richard', 'Richard']
     * ```
     *
     * @param callable(TValue, TKey=):bool $callback <p>
     * <code>callable(TValue, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return static New partitioned collection.
     */
    public function partition (callable $callback):static {

        $passed = []; $failed = [];
        foreach ($this->storage as $value)
            $callback($value)
                ? $passed[] = $value
                : $failed[] = $value;

        return new static([$passed, $failed]);

    }

    /**
     * ### Reverse the order of collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::reverse() To reverse the order of array items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->reverse();
     *
     * // ['Richard', 'Richard', 'Jane', 'Jane', 'Jane', 'John']
     * ```
     *
     * @return static New collection with reversed order.
     */
    public function reverse ():static {

        return new static(ArrLL::reverse($this->storage));

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::slice() To get a slice from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->nth(2);
     *
     * // ['Jane', 'Jane', 'Richard']
     * ```
     * @example With offset.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->nth(2, 1);
     *
     * // ['Jane', 'Richard']
     * ```
     *
     * @return static<TKey, TValue> New filtered collection.
     *
     * @phpstan-ignore-next-line
     */
    public function nth (int $step, int $offset = 0):static {

        $storage = []; $counter = 0;
        foreach (
            $offset > 0
                ? $this->slice($offset)->storage
                : $this->storage as $value
        ) if ($counter++ % (max($step, 1)) === 0) $storage[] = $value;

        return new static($storage);

    }

    /**
     * ### Pad a collection to the specified length with a value
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::pad() To pad an array to the specified length with a value.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->pad(10, 'Daniel');
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 'Daniel', 'Daniel', 'Daniel', 'Daniel']
     * ```
     * @example Pad with negative size.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->pad(-10, 'Daniel');
     *
     * // ['Daniel', 'Daniel', 'Daniel', 'Daniel', 'John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']
     * ```
     *
     * @param int $size <p>
     * New size of the array.
     * If the length is positive, then the array is padded on the right if it is negative, then on the left.
     * If the absolute value of length is less than or equal to the length of the array, then no padding takes place.
     * </p>
     * @param mixed $value <p>
     * Value to pad if input is less than length.
     * </p>
     *
     * @return static New collection with pad.
     *
     * @caution Keys can be re-numbered.
     */
    public function pad (int $size, mixed $value):static {

        return new static(ArrLL::pad($this->storage, $size, $value));

    }

    /**
     * ### Removes duplicate items from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::unique() To remove duplicate values from an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->unique();
     *
     * // ['John', 'Jane', 'Richard']
     * ```
     *
     * @return static New collection with unique items.
     *
     * @note The new array will preserve keys.
     * @note This method is not intended to work on multidimensional arrays.
     */
    public function unique ():static {

        return new static(ArrLL::unique($this->storage));

    }

    /**
     * ### Removes unique items from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\duplicates() To remove unique values from an array.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->duplicates();
     *
     * // ['Jane', 'Jane', 'Richard']
     * ```
     *
     * @return static New collection with duplicated items.
     *
     * @note The new array will preserve keys.
     */
    public function duplicates ():static {

        return new static(duplicates($this->storage));

    }

    /**
     * ### Removes duplicate items from two-dimensional collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\uniqueDuplicatesTwoDimensional() To group a two-dimensional array by
     * provided unique and duplicated column values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->uniqueDuplicatesTwoDimensional();
     *
     * // [
     * //   0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     * //   2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * // ]
     * ```
     *
     * @return static New collection with unique items.
     *
     * @note The new array will preserve keys.
     */
    public function uniqueTwoDimensional (int|string $key):static {

        return new static(uniqueDuplicatesTwoDimensional($this->storage, $key)[0]);

    }

    /**
     * ### Removes unique items from two-dimensional collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\uniqueDuplicatesTwoDimensional() To group a two-dimensional array by
     * provided unique and duplicated column values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->duplicatesTwoDimensional();
     *
     * // [
     * //   1 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
     * // ]
     * ```
     *
     * @return static New collection with unique items.
     *
     * @note The new array will preserve keys.
     */
    public function duplicatesTwoDimensional (int|string $key):static {

        return new static(uniqueDuplicatesTwoDimensional($this->storage, $key)[1]);

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->slice(2, 3);
     *
     * // ['Jane', 'Jane', 'Richard']
     * ```
     * @example With a negative offset we can start from the last element.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->slice(-3, 2);
     *
     * // ['Jane', 'Richard']
     * ```
     * @example With a negative length sequence will stop that many elements from the end of the array.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->slice(2, -1);
     *
     * // ['Jane', 'Jane', 'Richard']
     * ```
     */
    public function slice (int $offset, ?int $length = null):static {

        $storage = ArrLL::slice($this->storage, $offset, $length);

        return new static($storage);

    }

    /**
     * ### Remove a portion of the array and replace it with something else
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() As replacement array.
     * @uses \FireHub\Core\Support\LowLevel\Arr::splice() To remove a portion of the array and replace it with
     * something else.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $slice = $collection->splice(2, 3)
     *
     * $collection->all();
     *
     * // ['John', 'Jane', 'Richard']
     *
     * $slice->all();
     *
     * // ['Jane', 'Jane', 'Richard']
     * ```
     * @example With a negative offset we can start from the last element.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $slice = $collection->splice(-5, 2);
     *
     * $collection->all();
     *
     * // ['John', 'Jane', 'Richard', 'Richard']
     *
     * $slice->all();
     *
     * // ['Jane', 'Jane']
     * ```
     * @example With a negative length sequence will stop that many elements from the end of the array.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $slice = $collection->slice(2, -1);
     *
     * $collection->all();
     *
     * // ['John', 'Jane', 'Richard']
     *
     * $slice->all();
     *
     * // ['Jane', 'Jane', 'Richard']
     * ```
     * @example With replacement array.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $slice = $collection->slice(2, 2, ['Marc']);
     *
     * $collection->all();
     *
     * // ['John', 'Jane', 'Marc', 'Richard']
     *
     * $slice->all();
     *
     * // ['Jane', 'Jane']
     * ```
     *
     * @param int $offset <p>
     * If the offset is non-negative, the sequence will start at that offset in the array.
     * If the offset is negative, the sequence will start that far from the end of the array.
     * </p>
     * @param null|int $length [optional] <p>
     * If length is given and is positive, then the sequence will have that many elements in it.
     * If length is given and is negative, then the sequence will stop that many elements from the end of the array.
     * If it is omitted, then the sequence will have everything from offset up until the end of the array.
     * </p>
     * @param null|\FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue> $replacement [optional] <p>
     * If a replacement collection is specified, then the removed elements will be replaced with elements from this
     * collection.
     * If offset and length are such that nothing is removed, then the elements from the replacement collection
     * or collection are inserted in the place specified by the offset.
     * Keys in a replacement collection aren't preserved.
     * </p>
     *
     * @return static New sliced collection.
     *
     * @note Numerical keys in an array aren't preserved.
     */
    public function splice (int $offset, ?int $length = null, Collectable $replacement = null):static {

        $storage = ArrLL::splice($this->storage, $offset, $length, $replacement?->all());

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->takeUntil(function ($value) {
     *  return $value === 'Richard';
     * });
     *
     * // ['John', 'Jane', 'Jane', 'Jane']
     * ```
     */
    public function takeUntil (callable $callback):static {

        $storage = [];

        foreach ($this->storage as $value) {

            if ($callback($value)) break;

            $storage[] = $value;

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->takeWhile(function ($value) {
     *  return $value !== 'Richard';
     * });
     *
     * // ['John', 'Jane', 'Jane', 'Jane']
     * ```
     */
    public function takeWhile (callable $callback):static {

        $storage = [];

        foreach ($this->storage as $value) {

            if (!$callback($value)) break;

            $storage[] = $value;

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->skipUntil(function ($value) {
     *  return $value !== 'Richard';
     * });
     *
     * // ['Richard', 'Richard']
     * ```
     */
    public function skipUntil (callable $callback):static {

        $storage = [];

        $found = false;
        foreach ($this->storage as $value) {

            if (!$found && !$callback($value)) continue;

            $found = true;

            $storage[] = $value;

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->skipWhile(function ($value) {
     *  return $value === 'John';
     * });
     *
     * // ['Jane', 'Jane', 'Jane', 'Richard', 'Richard']
     * ```
     */
    public function skipWhile (callable $callback):static {

        $storage = [];

        $found = false;
        foreach ($this->storage as $value) {

            if (!$found && $callback($value)) continue;

            $found = true;

            $storage[] = $value;

        }

        return new static($storage);

    }

    /**
     * ### Filters the collection by a given key / value pair
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison As parameter.
     * @uses \FireHub\Core\Support\Helpers\Arr\filterRecursive() To filter elements in an array recursively.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Operator\Comparison;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->where('lastname', Comparison::EQUAL, 'Doe');
     *
     * // [
     * //   0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     * //   1 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * // ]
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param \FireHub\Core\Support\Enums\Operator\Comparison $operator <p>
     * Operator for filtering.
     * </p>
     * @param mixed $value <p>
     * Value to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function where (int|string $key, Comparison $operator, mixed $value):static {

        return new static(filterRecursive($this->storage, $key, $operator, $value));

    }

    /**
     * ### Filters the collection by removing a given key / value pair
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison As parameter.
     * @uses \FireHub\Core\Support\Helpers\Arr\filterRecursive() To filter elements in an array recursively.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Operator\Comparison;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->whereNot('lastname', Comparison::EQUAL, 'Doe');
     *
     * // [
     * //   2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * // ]
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param \FireHub\Core\Support\Enums\Operator\Comparison $operator <p>
     * Operator for filtering.
     * </p>
     * @param mixed $value <p>
     * Value to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function whereNot (int|string $key, Comparison $operator, mixed $value):static {

        return new static(filterRecursive($this->storage, $key, $operator, $value, false));

    }

    /**
     * ### Filters the collection by determining if the value is within a given range
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::where() To filter the collection by a given key / value pair.
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison::GREATER_OR_EQUAL To compare values.
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison::LESS_OR_EQUAL To compare values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Operator\Comparison;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->whereBetween('age', 24, 27);
     *
     * // [
     * //   0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     * //   2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * // ]
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param mixed $start <p>
     * Lowest value to filter.
     * </p>
     * @param mixed $end <p>
     * Highest value to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function whereBetween (int|string $key, mixed $start, mixed $end):static {

        return $this
            ->where($key, Comparison::GREATER_OR_EQUAL, $start)
            ->where($key, Comparison::LESS_OR_EQUAL, $end);

    }

    /**
     * ### Filters the collection by determining if the value is not within a given range
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::where() To filter the collection by a given key / value pair.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison::LESS To compare values.
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison::GREATER To compare values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Operator\Comparison;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->whereNotBetween('age', 24, 27);
     *
     * // [
     * //   1 => 'firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
     * // ]
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param mixed $start <p>
     * Lowest value to filter.
     * </p>
     * @param mixed $end <p>
     * Highest value to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function whereNotBetween (int|string $key, mixed $start, mixed $end):static {

        $storage = $this->where($key, Comparison::LESS, $start)->all();
        $storage += $this->where($key, Comparison::GREATER, $end)->all();

        return new static($storage);

    }

    /**
     * ### Filters the collection by determining if the value is within a given range
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::where() To filter the collection by a given key / value pair.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison::EQUAL To compare values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Operator\Comparison;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->whereIn('firstname', ['John', 'Richard']);
     *
     * // [
     * //   0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     * //   2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * // ]
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param list<mixed> $values <p>
     * Values to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function whereIn (int|string $key, array $values):static {

        $storage = [];
        foreach ($values as $value)
            $storage += $this->where($key, Comparison::EQUAL, $value)->all();

        return new static($storage);

    }

    /**
     * ### Filters the collection by determining if the value is not within a given range
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::where() To filter the collection by a given key / value pair.
     * @uses \FireHub\Core\Support\Enums\Operator\Comparison::NOT_EQUAL To compare values.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Operator\Comparison;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->whereNotIn('firstname', ['John', 'Richard']);
     *
     * // [
     * //   1 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
     * // ]
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param list<mixed> $values <p>
     * Values to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function whereNotIn (int|string $key, array $values):static {

        $collection = $this;

        foreach ($values as $value)
            $collection = $collection->where($key, Comparison::NOT_EQUAL, $value);

        return $collection;

    }

    /**
     * ### Filters the collection with value type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\filterRecursiveType() To filter elements in an array recursively with
     * a value type.
     * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
     * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Data\Type;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->whereDataIs('age', Type::T_INT);
     *
     * // [
     * //   ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     * //   ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     * //   ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * // ]
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param \FireHub\Core\Support\Enums\Data\Category|\FireHub\Core\Support\Enums\Data\Type $type <p>
     * Data to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function whereDataIs (int|string $key, Category|Type $type):static {

        return new static(filterRecursiveType($this->storage, $key, $type));

    }

    /**
     * ### Filters the collection with a value type removed
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\filterRecursiveType() To filter elements in an array recursively with
     * a value type.
     * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
     * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Data\Type;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->whereDataIsNot('age', Type::T_INT);
     *
     * // []
     * ```
     *
     * @param array-key $key <p>
     * Key to filter on.
     * </p>
     * @param \FireHub\Core\Support\Enums\Data\Category|\FireHub\Core\Support\Enums\Data\Type $type <p>
     * Data to filter.
     * </p>
     *
     * @return static New filtered collection.
     */
    public function whereDataIsNot (int|string $key, Category|Type $type):static {

        return new static(filterRecursiveType($this->storage, $key, $type, false));

    }

    /**
     * ### Get the values from given key
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::column() To return the values from a single column in the input array.
     * @uses \FireHub\Core\Support\LowLevel\Arr::combine() To create an array by using one array for keys and another
     * for its values.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $pluck = $collection->pluck('firstname');
     *
     * // ['John', 'Jane', 'Richard']
     * ```
     * @example With custom keys
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $pluck = $collection->pluck('age', 'firstname');
     *
     * // ['John' => 25, 'Jane' => 21, 'Richard' => 27]
     * ```
     *
     * @param array-key $key <p>
     * Key to pluck.
     * </p>
     * @param null|array-key $pluck_key [optional] <p>
     * Keys for plucked values.
     * </p>
     *
     * @throws ValueError If arguments $keys and $values don't have the same number of elements.
     *
     * @return ($pluck_key is null
     *  ? \FireHub\Core\Support\Collection\Type\Indexed<mixed>
     *  : \FireHub\Core\Support\Collection\Type\Associative<array-key, mixed>
     * ) New collection with plucked values.
     */
    public function pluck (int|string $key, int|string $pluck_key = null):Indexed|Associative {

        $values = ArrLL::column($this->storage, $key); // @phpstan-ignore-line

        if ($pluck_key)
            return new Associative(
                /* @phpstan-ignore-next-line */
                ArrLL::combine(ArrLL::column($this->storage, $pluck_key), $values)
            );

        return new Indexed($values);

    }

    /**
     * ### Shuffle collection items
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::shuffle() To shuffle array items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->shuffle();
     *
     * // ['Jane', 'Jane', 'Richard', 'John', 'Richard', 'Jane']
     * ```
     *
     * @return $this Shuffled collection.
     */
    public function shuffle ():static {

        ArrLL::shuffle($this->storage);

        return $this;

    }

    /**
     * ### Sort collection items
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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->sort();
     *
     * // ['Jane', 'Jane', 'Jane', 'John', 'Richard', 'Richard']
     * ```
     * @example Sorting order.
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Order;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->sort(Order::DESC);
     *
     * // ['Richard', 'Richard', 'John', 'Jane', 'Jane', 'Jane']
     * ```
     * @example Sorting order with a flag.
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Order;
     * use FireHub\Core\Support\Enums\Sort;
     *
     * $collection = Collection::list(fn():array => [1, 2, 3, 4, 13, 22, 27, 28, 29]);
     *
     * $collection->sort(Order::ASC, Sort::BY_STRING_FLAG_CASE);
     *
     * // [1, 13, 2, 22, 27, 28, 29, 3, 4]
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
    public function sort (Order $order = Order::ASC, Sort $flag = Sort::BY_REGULAR):static {

        ArrLL::sort($this->storage, $order, $flag);

        return $this;

    }

    /**
     * ### Sort collection using a user-defined comparison function
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::sortBy() To sort an array by values using a user-defined comparison
     * function.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->sortBy(function (mixed $current, mixed $next):int {
     *  if ($current === $next) return 0;
     *  return ($current < $next) ? -1 : 1;
     * });
     *
     * // ['Jane', 'Jane', 'Jane', 'John', 'Richard', 'Richard']
     * ```
     *
     * @param callable(TValue $a, TValue $b):int<-1, 1> $callback <p>
     * <code><![CDATA[ callable (TValue $a, TValue $b):int<-1, 1> ]]></code>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument
     * is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     *
     * @return $this Sorted collection.
     *
     * @caution Returning non-integer values from the comparison function, such as float, will result in an internal
     * cast to int of the callback's return value.
     * So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as
     * equal.
     */
    public function sortBy (callable $callback):static {

        ArrLL::sortBy($this->storage, $callback);

        return $this;

    }

    /**
     * ### Sort collection on two-dimensional arrays
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\multiSort() To sort multiple or two-dimensional arrays.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Order;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->multiSort([
     *  'lastname' => Order::ASC
     *  'age' => Order::ASC
     * ]);
     *
     * // [
     * //   ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
     * //   ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     * //   ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * // ]
     * ```
     *
     * @param array<array<TKey, string|\FireHub\Core\Support\Enums\Order>> $fields <p>
     * List of fields to sort by.
     * </p>
     *
     * @throws Error Failed to sort a multi-sort array.
     * @throws ValueError If array sizes are inconsistent.
     *
     * @return $this Sorted collection.
     *
     * @caution Associative (string) keys will be maintained, but numeric keys will be re-indexed.
     * @note Resets array's internal pointer to the first element.
     */
    public function multiSort (array $fields):static {

        multiSort($this->storage, $fields); // @phpstan-ignore-line

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
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
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
     * @param positive-int $number [optional] <p>
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

        $random = random($this->storage, $number);

        return $number > 1
            ? new static($random) // @phpstan-ignore-line
            : $random;

    }

    /**
     * ### Pick one or more random values out of the two-dimensional collection using keys
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\random() To pick one or more random values out of the array.
     * @uses \FireHub\Core\Support\Collection\Type\Arr::count() To count elements of a collection.
     * @uses \FireHub\Core\Support\LowLevel\Arr::column() To get values from keys.
     * @uses \FireHub\Core\Support\LowLevel\Arr::merge() To merge values from keys.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
     *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
     *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->randomTwoDimensional(1, 'age');
     *
     * // 21 – randomly selected
     * ```
     * @example Using more than one random item.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['one', 'two', 'three', 'four', 'five']);
     *
     * $collection->randomTwoDimensional(2, 'age');
     *
     * // [25, 27] – randomly selected
     * ```
     *
     * @throws Error If a collection has zero items.
     *
     * @param positive-int $number <p>
     * Specifies how many entries you want to pick from a collection.
     * </p>
     * @param int|string $key  <p>
     * Key to pick from.
     * </p>
     * @param int|string ...$keys [optional] <p>
     * Additional keys to pick from.
     * </p>
     *
     * @return mixed If you're picking only one entry, returns a random entry.
     * Otherwise, it returns a collection of random items.
     */
    public function randomTwoDimensional (int $number, int|string $key, int|string ...$keys):mixed {

        $count = $this->count();

        $number = $number > $count
            ? ($count === 0
                ? throw new Error('Collection must have at least one item to get random item.')
                : $count)
            : $number;

        $storage = [];
        $storage[] = ArrLL::column($this->storage, $key); // @phpstan-ignore-line
        foreach ($keys as $key) $storage[] = ArrLL::column($this->storage, $key); // @phpstan-ignore-line

        $random = random(ArrLL::merge(...$storage), $number);

        return $number > 1
            ? new static($random) // @phpstan-ignore-line
            : $random;

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
     *
     * @uses \FireHub\Core\Support\Collection\Type\Arr::offsetExists() To check if an offset exists.
     */
    public function offsetGet (mixed $offset):mixed {

        return $this->offsetExists($offset) ? $this->storage[$offset] : null;

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

        $this->storage[] = $value;

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
     * @return Traversable<TKey, TValue> Collection items as an array.
     */
    public function getIterator ():Traversable {

        yield from $this->storage;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return array<TKey, TValue> Data that can be serialized by json_encode().
     */
    public function jsonSerialize ():array {

        return $this->storage;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return array<TKey, TValue> An associative array of key/value pairs that represent the serialized form of the object.
     */
    public function __serialize ():array {

        return $this->storage;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param array<TKey, TValue> $data <p>
     * Serialized data.
     * </p>
     */
    public function __unserialize (array $data):void {

        $this->storage = $data;

    }

}