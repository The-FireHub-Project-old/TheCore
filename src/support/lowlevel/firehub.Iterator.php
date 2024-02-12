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

namespace FireHub\Core\Support\LowLevel;

use Traversable;

use function iterator_apply;
use function iterator_count;
use function iterator_to_array;

/**
 * ### Iterator low-level proxy class
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class Iterator {

    /**
     * ### Copy the iterator into an array
     *
     * Copy the elements of an iterator into an array.
     * @since 1.0.0
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param Traversable $iterator <p>
     * <code><![CDATA[ Traversable<TKey, TValue> ]]></code>
     * The iterator being copied.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Whether to use the iterator element keys as index.
     * If a key is an array or object, a warning will be generated. Null keys will be converted to an empty string,
     * float keys will be truncated to their int counterpart, resource keys will generate a warning and be converted
     * to their resource ID, and bool keys will be converted to integers.
     * </p>
     * @phpstan-param Traversable<TKey, TValue> $iterator
     *
     * @return array <code>($preserve_keys is true ? array<TKey, TValue> : array<array-key, TValue>)</code> An array
     * containing items of the iterator.
     * @phpstan-return ($preserve_keys is true ? array<TKey, TValue> : array<array-key, TValue>)
     *
     * @note If this parameter $preserve_keys is not set or set to true, duplicate keys will be overwritten. The last
     * value with a given key will be in the returned array. Set this parameter as false to get all the values in any
     * case.
     */
    public static function toArray (iterable $iterator, bool $preserve_keys = true):array {

        return iterator_to_array($iterator, $preserve_keys);

    }

    /**
     * ### Count the elements in an iterator
     *
     * Count the elements in an iterator. Method is not guaranteed to retain the current position of the iterator.
     * @since 1.0.0
     *
     * @param Traversable $iterator <p>
     * <code><![CDATA[ Traversable<mixed, mixed> ]]></code>
     * The iterator being counted.
     * </p>
     * @phpstan-param Traversable<mixed, mixed> $iterator
     *
     * @return int <code>non-negative-int</code> Number of elements in iterator.
     * @phpstan-return non-negative-int
     */
    public static function count (iterable $iterator):int {

        return iterator_count($iterator);

    }

    /**
     * ### Call a function for every element in an iterator
     * @since 1.0.0
     *
     * @template TKey
     * @template TValue
     *
     * @param Traversable $iterator <p>
     * <code><![CDATA[ Traversable<TKey, TValue> ]]></code>
     * The iterator objects to iterate over.
     * </p>
     * @param callable(TValue $value, TKey $key):bool $callback <p>
     * <code>callable (TValue $value, TKey $key):bool</code>
     * The callback function to call on every element The function must return true to continue iterating over the
     * iterator.
     * </p>
     * @param null|array $arguments <p>
     * <code><![CDATA[ array<array-key, mixed> ]]></code>
     * An array of arguments; each element of args is passed to the callback as separate argument.
     * </p>
     * @phpstan-param Traversable<TKey, TValue> $iterator
     * @phpstan-param null|array<array-key, mixed> $arguments
     *
     * @return int Iteration count.
     */
    public static function apply (Traversable $iterator, callable $callback, array $arguments = null):int {

        return iterator_apply($iterator, $callback, $arguments);

    }

}