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
use FireHub\Core\Support\Collection\Helpers\Condition;
use FireHub\Core\Support\Enums\Data\ {
    Category, Type
};

/**
 * ### Read-only collectable contract
 *
 * Efficient data structures, provided as an alternative to the array.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\Iterator\IterablesAggregate<TKey, TValue>
 */
interface ReadCollectable extends Countable, IterablesAggregate {

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
     * ### Reduces the collection to a single value, passing the result of each iteration into the subsequent iteration
     * @since 1.0.0
     *
     * @param callable(mixed $init, TValue $value, TKey $key):mixed $callback <p>
     * <code>callable(mixed $init, TValue, TKey=):mixed</code>
     * The callable function.
     * </p>
     * @param mixed $initial [optional] <p>
     * If the optional initial is available, it will be used at the beginning of the process,
     * or as a final result in case the array is empty.
     * </p>
     *
     * @return mixed Reduced value.
     */
    public function reduce (callable $callback, mixed $initial = null):mixed;

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
     * ### Verify that any item of a collection pass a given truth test
     * @since 1.0.0
     *
     * @param callable(TValue=, TKey=):bool $callback <p>
     * <code>callable(TValue=, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return bool True if any item in the collection passes a given truth test, false otherwise.
     */
    public function any (callable $callback):bool;

    /**
     * ### Verify that all items of a collection are of certain type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
     * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
     *
     * @param class-string|\FireHub\Core\Support\Enums\Data\Type|\FireHub\Core\Support\Enums\Data\Category $type <p>
     * Type to check on all collection items.
     * </p>
     *
     * @return bool True if each item in the collection is of a certain type, false otherwise.
     */
    public function ensure (string|Type|Category $type):bool;

    /**
     * ### Verify that none of the items in a collection is of certain type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
     * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
     *
     * @param class-string|\FireHub\Core\Support\Enums\Data\Type|\FireHub\Core\Support\Enums\Data\Category $type <p>
     * Type to check on all collection items.
     * </p>
     *
     * @return bool True if none of the items in a collection is of a certain type, false otherwise.
     */
    public function ensureNone (string|Type|Category $type):bool;

    /**
     * ### Verify that any of the items in a collection is of certain type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
     * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
     *
     * @param class-string|\FireHub\Core\Support\Enums\Data\Type|\FireHub\Core\Support\Enums\Data\Category $type <p>
     * Type to check on all collection items.
     * </p>
     *
     * @return bool True if any of the items in a collection is of a certain type, false otherwise.
     */
    public function ensureAny (string|Type|Category $type):bool;

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
     * ### Count number of times value is found in a collection
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value to check.
     * </p>
     *
     * @return non-negative-int The number of times values is found in a collection.
     */
    public function containTimes (mixed $value):int;

}