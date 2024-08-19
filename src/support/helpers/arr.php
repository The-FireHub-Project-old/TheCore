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

use FireHub\Core\Support\Enums\Order;
use FireHub\Core\Support\LowLevel\ {
    Arr, DataIs, Iterables
};
use Error, ValueError;

/**
 * ### Checks if an array is empty
 * @since 1.0.0
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\is_empty;
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
 * @uses \FireHub\Core\Support\LowLevel\DataIs::array() To check if the provided key is an array.
 * @uses \FireHub\Core\Support\LowLevel\Arr::merge() To merge all groups.
 * @uses \FireHub\Core\Support\LowLevel\Arr::slice() To remove the first key.
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\groupByKey;
 *
 * groupByKey([
 *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
 *  ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
 *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27],
 *  10],
 *  'lastname',
 *  function (array $value) {
 *      return $value['firstname'] === 'John';
 *  });
 *
 * // 'Doe' => [
 * //     1 => [
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

/**
 * ### Removes unique values from an array
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::differenceAssoc() To compute the difference of arrays with an additional index
 * check.
 * @uses \FireHub\Core\Support\LowLevel\Arr::unique() To remove duplicate values from an array.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\duplicates;
 *
 * duplicates([1, 1, 1, 1, 2, 3, 3, 3, 4, 4, 5]);
 *
 * // [1, 1, 1, 3, 3, 4]
 * ```
 *
 * @param array<TKey, TValue> $array <p>
 * The array to remove unique values.
 * </p>
 *
 * @return array<TKey, TValue> The array duplicates.
 *
 * @note The new array will preserve keys.
 *
 * @api
 */
function duplicates (array $array):array {

    return Arr::differenceAssoc($array, Arr::unique($array));

}

/**
 * ### Get all values from an array with the specified keys
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::intersectKey() To compute the intersection of arrays using keys for
 * comparison.
 * @uses \FireHub\Core\Support\LowLevel\Arr::flip To exchange all keys with their associated values in an array.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\only;
 *
 * only([1, 1, 1, 1, 2, 3, 3, 3, 4, 4, 5], [1, 2]);
 *
 * // [1 => 1, 2 => 1]
 * ```
 *
 * @param array<TKey, TValue> $array <p>
 * The array to filter items.
 * </p>
 * @param list<array-key> $keys <p>
 * List of keys to return.
 * </p
 *
 * @error\exeption E_WARNING if values on $array argument are neither int nor string.
 *
 * @return array<TKey, TValue> The filtered array.
 *
 * @api
 */
function only (array $array, array $keys):array {

    return Arr::intersectKey($array, Arr::flip($keys));

}

/**
 * ### Get all values from an array except for those with the specified keys
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::intersectKey() To compute the difference of arrays using keys for
 * comparison.
 * @uses \FireHub\Core\Support\LowLevel\Arr::flip To exchange all keys with their associated values in an array.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\except;
 *
 * except([1, 1, 1, 1, 2, 3, 3, 3, 4, 4, 5], [1, 2]);
 *
 * // [0 => 1, 3 => 1, 4 => 2, 5 => 3, 6 => 3, 7 => 3, 8 => 4, 9 => 4, 10 => 5]
 * ```
 *
 * @param array<TKey, TValue> $array <p>
 * The array to filter items.
 * </p>
 * @param list<array-key> $keys <p>
 * List of keys to return.
 * </p>
 *
 * @error\exeption E_WARNING if values on $array argument are neither int nor string.
 *
 * @return array<TKey, TValue> The filtered array.
 *
 * @api
 */
function except (array $array, array $keys):array {

    return Arr::differenceKey($array, Arr::flip($keys));

}

/**
 * ### Group multidimensional array by provided unique and duplicated column values
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::inArray() To check if a value exists in an array.
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\uniqueDuplicatesMultidimensional;
 *
 * uniqueDuplicatesMultidimensional([
 *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
 *  ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
 *  ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
 *  ], 'firstname');
 *
 * // [
 * //   0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
 * //   2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
 * // ],
 * // [
 * //   1 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
 * // ]
 * ```
 *
 * @param array<array-key, mixed> $array <p>
 * The array.
 * </p>
 * @param array-key $key <p>
 * Array key to group with.
 * </p>
 *
 * @throws Error If any of the items doesn't have a provided key.
 *
 * @return array<array-key, array<array-key, mixed>> The grouped array with unique and duplicated values.
 *
 * @note The new array will preserve keys.
 *
 * @api
 */
function uniqueDuplicatesMultidimensional (array $array, int|string $key):array {

    $keys = [];
    $unique = [];
    $duplicated = [];

    foreach ($array as $array_key => $array_value) {

        if (!isset($array_value[$key])) throw new Error('All array items must have provided key!'); // @phpstan-ignore-line

        if (!Arr::inArray($array_value[$key], $keys)) {

            $keys[] = $array_value[$key];
            $unique[$array_key] = $array_value;

        } else $duplicated[$array_key] = $array_value;

    }

    return [$unique, $duplicated];

}

/**
 * ### Pick one or more random values out of the array
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::random() To pick one or more random keys out of an array.
 * @uses \FireHub\Core\Support\LowLevel\DataIs::array() To check if the value is an array.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\random;
 *
 * random([1, 1, 1, 1, 2, 3, 3, 3, 4, 4, 5], 1);
 *
 * // 4
 * ```
 *
 * @param array<TKey, TValue> $array <p>
 * Array from we're picking random items.
 * </p>
 * @param positive-int $number [optional] <p>
 * Specifies how many entries you want to pick.
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * Whether you want to preserve keys from an original array or not.
 * </p>
 *
 * @throws ValueError If $number is not between one and the number of elements in the argument.
 *
 * @return ($preserve_keys is true ? mixed|array<TKey, TValue> : mixed|list<TValue>)
 * If you're picking only one entry, return the value for a random entry.
 * Otherwise, it returns an array of values for the random entries.
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
function random (array $array, int $number = 1, bool $preserve_keys = false):mixed {

    $keys = Arr::random($array, $number);

    if (!DataIs::array($keys)) return $array[$keys];

    $items = [];
    foreach ($keys as $key)
        $preserve_keys ? $items[$key] = $array[$key] : $items[] = $array[$key];

    return $items;

}

/**
 * ### Shuffle array items with keys preserved
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::keys() To get array keys.
 * @uses \FireHub\Core\Support\LowLevel\Arr::shuffle() To shuffle array items.
 *
 * @example
 * ```php
 * use function FireHub\Core\Support\Helpers\Arr\shuffle;
 *
 * shuffle(['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
 *
 * // ['age' => 25, 'firstname' => 'John', 'lastname' => 'Doe', 10 => 2]
 * ```
 *
 * @param array<TKey, TValue> &$array <p>
 * An array to shuffle.
 * </p>
 *
 * @return true Always returns true.
 *
 * @api
 */
function shuffle (array &$array):true {

    $items = [];

    $keys = Arr::keys($array);

    Arr::shuffle($keys);

    foreach($keys as $key) $items[$key] = $array[$key];

    $array = $items;

    return true;

}

/**
 * ### Sort multiple on multidimensional arrays
 * @since 1.0.0
 *
 * @uses \FireHub\Core\Support\LowLevel\Arr::column() To return the values from a single column in the input array.
 * @uses \FireHub\Core\Support\LowLevel\Arr::multiSort() To sort multiple or multidimensional arrays.
 * @uses \FireHub\Core\Support\Enums\Order::DESC As order enum.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @example
 * ```php
 * use FireHub\Core\Support\Enums\Order;
 * use function FireHub\Core\Support\Helpers\Array\multiSort;
 *
 * $array = [
 *  ['id' => 1, 'firstname' => 'John', 'lastname' => 'Doe', 'gender' => 'male', 'age' => 25],
 *  ['id' => 2, 'firstname' => 'Jane', 'lastname' => 'Doe', 'gender' => 'female', 'age' => 23],
 *  ['id' => 3, 'firstname' => 'Richard', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 27],
 *  ['id' => 4, 'firstname' => 'Jane', 'lastname' => 'Roe', 'gender' => 'female', 'age' => 22],
 *  ['id' => 5, 'firstname' => 'John', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 26]
 * ];
 *
 * multiSort([
 *  'lastname' => Order::ASC
 *  'age' => Order::DESC
 * ]);
 *
 * // [
 * //   ['id' => 1, 'firstname' => 'John', 'lastname' => 'Doe', 'gender' => 'male', 'age' => 25],
 * //   ['id' => 2, 'firstname' => 'Jane', 'lastname' => 'Doe', 'gender' => 'female', 'age' => 23],
 * //   ['id' => 3, 'firstname' => 'Richard', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 27],
 * //   ['id' => 5, 'firstname' => 'John', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 26],
 * //   ['id' => 4, 'firstname' => 'Jane', 'lastname' => 'Roe', 'gender' => 'female', 'age' => 22]
 * // ]
 * ```
 *
 * @param array<array-key, array<TKey, TValue>> &$array <p>
 * A multidimensional array being sorted.
 * </p>
 * @param array<array<TKey, string|\FireHub\Core\Support\Enums\Order>> $fields <p>
 * List of fields to sort by.
 * </p>
 *
 * @throws Error Failed to sort a multi-sort array.
 * @throws ValueError If array sizes are inconsistent.
 *
 * @return bool True on success, false otherwise.
 *
 * @caution Associative (string) keys will be maintained, but numeric keys will be re-indexed.
 * @note Resets array's internal pointer to the first element.
 *
 * @api
 */
function multiSort (array &$array, array $fields):bool {

    $multi_sort = [];

    foreach ($fields as $column => $order) {

        $order = match($order) {
            Order::DESC => SORT_DESC,
            default => SORT_ASC
        };

        $multi_sort[] = [...Arr::column($array, $column)]; // @phpstan-ignore-line

        $multi_sort[] = $order;

    }

    $multi_sort[] = &$array;

    return Arr::multiSort($multi_sort); // @phpstan-ignore-line

}