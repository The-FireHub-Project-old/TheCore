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
use FireHub\Core\Support\Collection\Helpers\CountCollectables;
use FireHub\Core\Support\Collection\Traits\ {
    Convertable, Conditionable, Sliceable
};
use FireHub\Core\Support\LowLevel\ {
    Arr as ArrLL, DataIs, Iterables
};
use ArgumentCountError, Error, Traversable, TypeError;

use function FireHub\Core\Support\Helpers\Arr\ {
    is_empty, first, last, groupByKey
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
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
abstract class Arr implements Init, Accessible {

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
     * @since 1.0.0ž
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
     * @return static<TKey, TValue> New collection from provided array.
     */
    public static function fromArray (array $array):self {

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
     * $collection->countBy();
     *
     * // ['John' => 1, 'Jane' => 3, 'Richard' => 2]
     * ```
     * @example Counting a multidimensional collection.
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list()->multidimensional(fn():array => [
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
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\Arr\is_empty() To check if an array is empty.
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

        return is_empty($this->storage);

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
     * $collection = Collection::list(fn ():array => [
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
     * $collection->map(function ($value, $key) {
     *  return $value.'.';
     * });
     *
     * // ['John.', 'Jane.', 'Jane.', 'Jane.', 'Richard.', 'Richard.']
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
     * @return self<TKey, TValue> New merged collection.
     */
    public function merge (Collectable ...$collections):self {

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
     * @return self<int, array<TKey, TValue>>
     */
    public function partition (callable $callback):self {

        $passed = []; $failed = [];
        foreach ($this->storage as $value)
            $callback($value)
                ? $passed[] = $value
                : $failed[] = $value;

        return new static([$passed, $failed]);

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
     * @return self<TKey, TValue> New filtered collection.
     *
     * @phpstan-ignore-next-line
     */
    public function nth (int $step, int $offset = 0):self {

        $storage = []; $counter = 0;
        foreach (
            $offset > 0
                ? $this->slice($offset)->storage
                : $this->storage as $value
        ) if ($counter++ % (max($step, 1)) === 0) $storage[] = $value;

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
     * @return self<TKey, TValue> New sliced collection.
     *
     * @note Numerical keys in an array aren't preserved.
     */
    public function splice (int $offset, ?int $length = null, Collectable $replacement = null):self {

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