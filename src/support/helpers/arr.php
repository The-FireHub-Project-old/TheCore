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

namespace FireHub\Core\Support\Helpers\Arr;

use FireHub\Core\Support\LowLevel\ {
    Arr, DataIs, Iterables
};

/**
 * ### Checks if an array is empty
 * @since 1.0.0
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Array\is_empty;
 *
 * is_empty([]);
 *
 * // true
 * ```
 *
 * @uses \FireHub\Core\Support\LowLevel\Iterables::count() To count array elements.
 *
 * @param array<array-key, mixed> $array <p>
 * Array to check.
 * </p>
 *
 * @return bool True if an array is empty, false otherwise
 *
 * @api
 */
function is_empty (array $array):bool {

    return Iterables::count($array) === 0;

}

/**
 * ### Get first value from array
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::firstKey() To get the first key from an array.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\first;
 *
 * first([1,2,3]);
 *
 * // 1
 * ```
 *
 * @param array<TKey, TValue> $array <p>
 * The array.
 * </p>
 *
 * @return null|TValue First value from an array or null if an array is empty.
 *
 * @api
 */
function first (array $array):mixed {

    $key = Arr::firstKey($array);

    return isset($key) ? $array[$key] : null;

}

/**
 * ### Get last value from array
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::lastKey() To get the last key from an array.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\last;
 *
 * last([1,2,3]);
 *
 * // 3
 * ```
 *
 * @param array<TKey, TValue> $array <p>
 * The array.
 * </p>
 *
 * @return null|TValue Last value from array or null if an array is empty.
 *
 * @api
 */
function last (array $array):mixed {

    $key = Arr::lastKey($array);

    return isset($key) ? $array[$key] : null;

}

/**
 * ### Group an array by a key or set of keys shared between all array members
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if the provided key is callable.
 * @uses \FireHub\Core\Support\LowLevel\DataIs::array() To check if the provided key is array.
 * @uses \FireHub\Core\Support\LowLevel\Arr::merge() To merge all groups.
 * @uses \FireHub\Core\Support\LowLevel\Arr::slice() To remove the first key.
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\group_by;
 *
 * last([1,2,3]);
 *
 * // 3
 * ```
 *
 * @param array<array-key, mixed> $array <p>
 * The array.
 * </p>
 * @param array-key|callable $key <p>
 * <code><![CDATA[ array-key|callable(array<array-key, mixed>> $row):mixed ]]></code>
 * Array key to group with.
 * </p>
 * @param array-key|callable ...$keys <p>
 * <code><![CDATA[ array-key|callable(array<array-key, mixed>> $row):mixed ]]></code>
 * Additional array keys to group with.
 * </p>
 *
 * @return array<array-key, mixed> The grouped array.
 *
 * @api
 */
function groupByKey (array $array, int|string|callable $key, int|string|callable ...$keys):array {

    $_key = $key;

    $grouped = [];
    foreach ($array as $array_key => $value) {

        $key = match (true) {
            DataIs::callable($_key) => $_key($value),
            DataIs::array($value) && isset($value[$_key]) => $value[$_key],
            default => null
        };

        if ($key === null) continue;

        $grouped[$key][$array_key] = $value;

    }

    if (!empty($keys)) {

        foreach ($grouped as $key => $value) {

            $params = Arr::merge([$value], Arr::slice($keys, 0, count($keys)+2));

            $grouped[$key] = groupByKey(...$params); // @phpstan-ignore-line

        }

    }

    return $grouped;

}