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
     * If callback is used, the method will return the first item that passes truth test.
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
     * If callback is used, the method will return the first key that passes truth test.
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
     * If callback is used, the method will return the last item that passes truth test.
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
     * If callback is used, the method will return the last key that passes truth test.
     * </p>
     *
     * @return null|TKey Last key from a collection.
     */
    public function lastKey (?callable $callback = null):mixed;

    /**
     * ### Call user generated function on each item in collection
     * @since 1.0.0
     *
     * @param callable(TValue=, TKey=):(false|void) $callback <p>
     * Function to call on each item in collection.
     * </p>
     * @param positive-int $limit [optional] <p>
     * Maximum number of elements that is allowed to be iterated.
     * </p>
     *
     * @return bool True if each item in the collection has iterated, false otherwise.
     */
    public function each (callable $callback, int $limit = 1_000_000):bool;

    /**
     * ### Searches the collection for a given value and returns the first corresponding key if successful
     * @since 1.0.0
     *
     * @param TValue|callable(TValue=, TKey=):bool $value <p>
     * The searched value.
     * If value is a string, the comparison is done in a case-sensitive manner.
     * </p>
     *
     * @return TKey|false The key if it is found in the collection, false otherwise.
     * If value is found in a collection more than once, the first matching key is returned.
     */
    public function search (mixed $value):mixed;

    /**
     * ### Determines whether a collection contains a given item
     * @since 1.0.0
     *
     * @param TValue|callable(TValue=, TKey=):bool $value <p>
     * The value to check.
     * </p>
     *
     * @return bool True if a collection contains checked item, false otherwise.
     */
    public function contains (mixed $value):bool;

    /**
     * ### Determines whether collection doesn't contain a given item
     * @since 1.0.0
     *
     * @param TValue|callable(TValue=, TKey=):bool $value <p>
     * The value to check.
     * </p>
     *
     * @return bool True if a collection doesn't contain checked item, false otherwise.
     */
    public function doesntContains (mixed $value):bool;

}