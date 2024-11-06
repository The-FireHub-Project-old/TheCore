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
use FireHub\Core\Support\Contracts\HighLevel\ReadCollectable;
use FireHub\Core\Support\Collection\Helpers\CountCollectables;
use FireHub\Core\Support\Collection\Traits\ {
    Conditionable, Ensure, Reducible
};
use FireHub\Core\Support\LowLevel\ {
    Arr as ArrLL, DataIs, Iterables
};
use Error, Traversable, TypeError;

use function FireHub\Core\Support\Helpers\Arr\ {
    isEmpty, first, last
};

/**
 * ### Read-only array collection type
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @implements \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable<TKey, TValue>
 *
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
abstract class ReadonlyArr implements Init, ReadCollectable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

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