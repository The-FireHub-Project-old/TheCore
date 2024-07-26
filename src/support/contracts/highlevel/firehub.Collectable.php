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

namespace FireHub\Core\Support\Contracts\HighLevel;

use FireHub\Core\Support\Contracts\Countable;
use FireHub\Core\Support\Contracts\Iterator\IterablesAggregate;
use FireHub\Core\Support\Collection\Helpers\ {
    Convert, Condition
};

/**
 * ### Collectable contract
 *
 * Efficient data structures, provided as an alternative to the array.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\Iterator\IterablesAggregate<TKey, TValue>
 */
interface Collectable extends Countable, IterablesAggregate {

    /**
     * ### Create a collection from a provided array
     * @since 1.0.0
     *
     * @param array<array-key, mixed> $array <p>
     * Array from which a new collection will be created.
     * </p>
     *
     * @return self<TKey, TValue> New collection from provided array.
     */
    public static function fromArray (array $array):self;

    /**
     * ### Convert a collection to a different one
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\Convert As return.
     *
     * @return \FireHub\Core\Support\Collection\Helpers\Convert<TKey, TValue> As return.
     */
    public function convert ():Convert;

    /**
     * ### Conditionable methods for collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\Condition As return.
     *
     * @return \FireHub\Core\Support\Collection\Helpers\Condition<static> As return.
     */
    public function when ():Condition;

    /**
     * ### Get collection as an array
     * @since 1.0.0
     *
     * @return array<array-key, mixed> Collection items as an array.
     */
    public function all ():array;

    /**
     * ### Get first item from collection
     * @since 1.0.0
     *
     * @param null|callable(TValue=, TKey=):bool $callback [optional] <p>
     * <code>null|callable(TValue=, TKey=):bool</code>
     * If callback is used, the method will return the first item that passes the truth test.
     * </p>
     *
     * @return null|TValue First item from a collection.
     */
    public function first (?callable $callback = null):mixed;

    /**
     * ### Get first key from collection
     * @since 1.0.0
     *
     * @param null|callable(TValue=, TKey=):bool $callback [optional] <p>
     * <code>null|callable(TValue=, TKey=):bool</code>
     * If callback is used, the method will return the first key that passes the truth test.
     * </p>
     *
     * @return null|TKey First key from a collection.
     */
    public function firstKey (?callable $callback = null):mixed;

    /**
     * ### Get last item from collection
     * @since 1.0.0
     *
     * @param null|callable(TValue=, TKey=):bool $callback [optional] <p>
     * <code>null|callable(TValue=, TKey=):bool</code>
     * If callback is used, the method will return the last item that passes the truth test.
     * </p>
     *
     * @return null|TValue Last item from a collection.
     */
    public function last (?callable $callback = null):mixed;

    /**
     * ### Get last key from collection
     * @since 1.0.0
     *
     * @param null|callable(TValue=, TKey=):bool $callback [optional] <p>
     * <code>null|callable(TValue=, TKey=):bool</code>
     * If callback is used, the method will return the last key that passes the truth test.
     * </p>
     *
     * @return null|TKey Last key from a collection.
     */
    public function lastKey (?callable $callback = null):mixed;

    /**
     * ### Call user-generated function on each item in collection
     * @since 1.0.0
     *
     * @param callable(TValue=, TKey=):mixed $callback <p>
     * <code>callable(TValue=, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     * @param positive-int $limit [optional] <p>
     * Maximum number of elements that is allowed to be iterated.
     * </p>
     *
     * @return bool True if each item in the collection has iterated, false otherwise.
     */
    public function each (callable $callback, int $limit = 1_000_000):bool;

    /**
     * ### Verify that all items of a collection pass a given truth test
     * @since 1.0.0
     *
     * @param callable(TValue=, TKey=):bool $callback <p>
     * <code>callable(TValue=, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return bool True if each item in the collection passes a given truth test, false otherwise.
     */
    public function every (callable $callback):bool;

    /**
     * ### Searches the collection for a given value and returns the first corresponding key if successful
     * @since 1.0.0
     *
     * @param TValue|callable(TValue=, TKey=):bool $value <p>
     * <code>TValue|callable(TValue=, TKey=):bool</code>
     * The searched value.
     * If the value is a string, the comparison is done in a case-sensitive manner.
     * </p>
     *
     * @return TKey|false The key if it is found in the collection, false otherwise.
     * If a value is found in a collection more than once, the first matching key is returned.
     */
    public function search (mixed $value):mixed;

    /**
     * ### Check if a collection is empty
     * @since 1.0.0
     *
     * @return bool True if a collection is empty, false otherwise.
     */
    public function isEmpty ():bool;

    /**
     * ### Check if a collection is not empty
     * @since 1.0.0
     *
     * @return bool True, if a collection is not empty, false otherwise.
     */
    public function isNotEmpty ():bool;

    /**
     * ### Determines whether a collection contains a given item
     * @since 1.0.0
     *
     * @param TValue|callable(TValue=, TKey=):bool $value <p>
     * <code>TValue|callable(TValue=, TKey=):bool</code>
     * The value to check.
     * </p>
     *
     * @return bool True if a collection contains a checked item, false otherwise.
     */
    public function contains (mixed $value):bool;

    /**
     * ### Determines whether collection doesn't contain a given item
     * @since 1.0.0
     *
     * @param TValue|callable(TValue=, TKey=):bool $value <p>
     * <code>TValue|callable(TValue=, TKey=):bool</code>
     * The value to check.
     * </p>
     *
     * @return bool True if a collection doesn't contain a checked item, false otherwise.
     */
    public function doesntContains (mixed $value):bool;

    /**
     * ### Filter items from collection
     * @since 1.0.0
     *
     * @param callable(TValue $value=, TKey=):bool $callback <p>
     * <code>callable(TValue, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return static<TKey, TValue> New filtered collection.
     */
    public function filter (callable $callback):self;

    /**
     * ### Reject items from collection
     * @since 1.0.0
     *
     * @param callable(TValue $value=, TKey=):bool $callback $callback <p>
     * <code>callable(TValue, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return static<TKey, TValue> New rejected collection.
     */
    public function reject (callable $callback):self;

    /**
     * ### Applies the callback to each collection item
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):mixed $callback <p>
     * <code>callable(TValue $value):mixed</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return static<TKey, mixed> New modified collection.
     */
    public function map (callable $callback):self;

    /**
     * ### Merge new collections into current one
     * @since 1.0.0
     *
     * @param self<TKey, TValue> ...$collections <p>
     * Collections to merge.
     * </p>
     *
     * @return static<TKey, TValue> New merged collection.
     */
    public function merge (self ...$collections):self;

}