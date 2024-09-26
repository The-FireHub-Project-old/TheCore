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

use FireHub\Core\Support\Collection\Helpers\Convert;

/**
 * ### Collectable contract
 *
 * Efficient data structures, provided as an alternative to the array.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable<TKey, TValue>
 */
interface Collectable extends ReadCollectable {

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
     * ### Split collection by number of groups into similar size
     * @since 1.0.0
     *
     * @param positive-int $number_of_groups <p>
     * Number of groups.
     * </p>
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Collectable<int, self<TKey, TValue>> Grouped collection.
     */
    public function split (int $number_of_groups):Collectable;

    /**
     * ### Split collection into chunks
     * @since 1.0.0
     *
     * @param positive-int $size_of_group <p>
     * Size of each group.
     * </p>
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Collectable<int, \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue>> Grouped collection.
     */
    public function chunk (int $size_of_group):Collectable;

    /**
     * ### Split collection into chunks by callable
     * @since 1.0.0
     *
     * @param callable(TValue, TKey):mixed $callback <p>
     * <code>callable(TValue, TKey):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Collectable<int, \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue>> Grouped collection.
     */
    public function chunkUntil (callable $callback):Collectable;

    /**
     * ### Split the collection into the given number of groups filling non-terminal groups first
     * @since 1.0.0
     *
     * @param positive-int $number_of_groups <p>
     * Number of groups.
     * </p>
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Collectable<int, self<TKey, TValue>> Grouped collection.
     */
    public function group (int $number_of_groups):Collectable;

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

    /**
     * ### New collection consisting of every n-th element
     * @since 1.0.0
     *
     * @param positive-int $step <p>
     * N-th step.
     * </p>
     * @param non-negative-int $offset [optional] <p>
     * Starting offset.
     * </p>
     *
     * @return self<TKey, TValue> New filtered collection.
     */
    public function nth (int $step, int $offset = 0):self;

    /**
     * ### New collection consisting of even elements
     * @since 1.0.0
     *
     * @return self<TKey, TValue> New filtered collection.
     */
    public function even ():self;

    /**
     * ### New collection consisting of odd elements
     * @since 1.0.0
     *
     * @return self<TKey, TValue> New filtered collection.
     */
    public function odd ():self;

    /**
     * ### Get slice from collection
     * @since 1.0.0
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
     *
     * @return self<TKey, TValue> New sliced collection.
     */
    public function slice (int $offset, ?int $length = null):self;

    /**
     * ### Take first n items from collection
     * @since 1.0.0
     *
     * @param int $count <p>
     * If the count is positive, then the sequence will have that many elements in it.
     * If the count is negative, then the sequence will stop that many elements from the end of the array.
     * </p>
     *
     * @return self<TKey, TValue> New sliced collection.
     */
    public function take (int $count):self;

    /**
     * ### Take until the given callback returns true
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):bool $callback <p>
     * <code>callable(TValue, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return self<TKey, TValue> New collection with items.
     */
    public function takeUntil (callable $callback):self;

    /**
     * ### Take while the given callback returns true
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):bool $callback <p>
     * <code>callable(TValue, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return self<TKey, TValue> New collection with items.
     */
    public function takeWhile (callable $callback):self;

    /**
     * ### Skip first n items from collection
     * @since 1.0.0
     *
     * @param int $count <p>
     * If the count is non-negative, the sequence will start at that offset in the array.
     * If the count is negative, the sequence will start that far from the end of the array.
     * </p>
     *
     * @return self<TKey, TValue> New sliced collection.
     */
    public function skip (int $count):self;

    /**
     * ### sKIP until the given callback returns true
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):bool $callback <p>
     * <code>callable(TValue, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return self<TKey, TValue> New collection with items.
     */
    public function skipUntil (callable $callback):self;

    /**
     * ### Skip while the given callback returns true
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):bool $callback <p>
     * <code>callable(TValue, TKey=):bool</code>
     * Function to call on each item in a collection.
     * </p>
     *
     * @return self<TKey, TValue> New collection with items.
     */
    public function skipWhile (callable $callback):self;

}