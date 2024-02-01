```php
final class \FireHub\Core\Support\LowLevel\Arr()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Array low-level proxy class



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Arr**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L104)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#keyexist()">keyExist</a>|### Checks if the given key or index exists in the array|
|public static |<a href="#inarray()">inArray</a>|### Checks if a value exists in an array|
|public static |<a href="#islist()">isList</a>|### Checks whether a given array is a list|
|public static |<a href="#multisort()">multiSort</a>|### Sort multiple or multidimensional arrays|
|public static |<a href="#walk()">walk</a>|### Apply a user function to every member of an array|
|public static |<a href="#walkrecursive()">walkRecursive</a>|### Apply a user function recursively to every member of an array|
|public static |<a href="#countvalues()">countValues</a>|### Counts the occurrences of each distinct value in an array|
|public static |<a href="#fill()">fill</a>|### Fill an array with values|
|public static |<a href="#fillkeys()">fillKeys</a>|### Fill an array with values, specifying keys|
|public static |<a href="#foldkeys()">foldKeys</a>|### Changes the case of all keys in an array|
|public static |<a href="#chunk()">chunk</a>|### ### Split an array into chunks|
|public static |<a href="#column()">column</a>|### Return the values from a single column in the input array|
|public static |<a href="#combine()">combine</a>|### Creates an array by using one array for keys and another for its values|
|public static |<a href="#difference()">difference</a>|### Computes the difference of arrays using values for comparison|
|public static |<a href="#differencefunc()">differenceFunc</a>|### Computes the difference of arrays using values for comparison by using a callback for comparison|
|public static |<a href="#differencekey()">differenceKey</a>|### Computes the difference of arrays using keys for comparison|
|public static |<a href="#differencekeyfunc()">differenceKeyFunc</a>|### Computes the difference of arrays using keys for comparison by using a callback for data comparison|
|public static |<a href="#differenceassoc()">differenceAssoc</a>|### Computes the difference of arrays with additional index check|
|public static |<a href="#differenceassocfuncvalue()">differenceAssocFuncValue</a>|### Computes the difference of arrays with additional index check by using a callback for value comparison|
|public static |<a href="#differenceassocfunckey()">differenceAssocFuncKey</a>|### Computes the difference of arrays with additional index check by using a callback for key comparison|
|public static |<a href="#differenceassocfunckeyvalue()">differenceAssocFuncKeyValue</a>|### Computes the difference of arrays with additional index check by using a callback for key-value comparison|
|public static |<a href="#intersect()">intersect</a>|### Computes the intersection of arrays using values for comparison|
|public static |<a href="#intersectfunc()">intersectFunc</a>|### Computes the intersection of arrays using values for comparison by using a callback for data comparison|
|public static |<a href="#intersectkey()">intersectKey</a>|### Computes the intersection of arrays using keys for comparison|
|public static |<a href="#intersectkeyfunc()">intersectKeyFunc</a>|### Computes the intersection of arrays using keys for comparison by using a callback for data comparison|
|public static |<a href="#intersectassoc()">intersectAssoc</a>|### Computes the intersection of arrays with additional index check|
|public static |<a href="#intersectassocfuncvalue()">intersectAssocFuncValue</a>|### Computes the intersection of arrays with additional index check by using a callback for value comparison|
|public static |<a href="#intersectassocfunckey()">intersectAssocFuncKey</a>|### Computes the intersection of arrays with additional index check by using a callback for key comparison|
|public static |<a href="#intersectassocfunckeyvalue()">intersectAssocFuncKeyValue</a>|### Computes the intersection of arrays with additional index check by using a callback for key-value comparison|
|public static |<a href="#filter()">filter</a>|### Filter elements in an array|
|public static |<a href="#flip()">flip</a>|### Exchanges all keys with their associated values in an array|
|public static |<a href="#keys()">keys</a>|### Return all the keys or a subset of the keys of an array|
|public static |<a href="#values()">values</a>|### Return all the values from an array|
|public static |<a href="#map()">map</a>|### Applies the callback to the elements of the given arrays|
|public static |<a href="#merge()">merge</a>|### Merges the elements of one or more arrays together|
|public static |<a href="#mergerecursive()">mergeRecursive</a>|### Merge two or more arrays recursively|
|public static |<a href="#pad()">pad</a>|### Pad array to the specified length with a value|
|public static |<a href="#replace()">replace</a>|### Replaces elements from passed arrays into the first array|
|public static |<a href="#replacerecursive()">replaceRecursive</a>|### Replace two or more arrays recursively|
|public static |<a href="#reverse()">reverse</a>|### Reverse the order of array items|
|public static |<a href="#slice()">slice</a>|### Extract a slice of the array|
|public static |<a href="#splice()">splice</a>|### Remove a portion of the array and replace it with something else|
|public static |<a href="#unique()">unique</a>|### Removes duplicate values from an array|
|public static |<a href="#range()">range</a>|### Create an array containing a range of elements|
|public static |<a href="#random()">random</a>|### Pick one or more random keys out of an array|
|public static |<a href="#reduce()">reduce</a>|### Iteratively reduce the array to a single value using a callback function|
|public static |<a href="#pop()">pop</a>|### Pop the element off the end of array|
|public static |<a href="#push()">push</a>|### Push elements onto the end of array|
|public static |<a href="#shift()">shift</a>|### Removes an item at the beginning of an array|
|public static |<a href="#unshift()">unshift</a>|### Prepend one or more elements to the beginning of an array|
|public static |<a href="#firstkey()">firstKey</a>|### Get first key from an array|
|public static |<a href="#lastkey()">lastKey</a>|### Get last key from array|
|public static |<a href="#product()">product</a>|### Calculate the product of values in an array|
|public static |<a href="#sum()">sum</a>|### Calculate the sum of values in an array|
|public static |<a href="#search()">search</a>|### Searches the array for a given value and returns the first corresponding key if successful|
|public static |<a href="#shuffle()">shuffle</a>|### Shuffle array|
|public static |<a href="#sort()">sort</a>|### Sorts array|
|public static |<a href="#sortbykey()">sortByKey</a>|### Sorts array by key|
|public static |<a href="#sortby()">sortBy</a>|### Sorts an array by values using a user-defined comparison function|
|public static |<a href="#sortkeyby()">sortKeyBy</a>|### Sorts array by key using a user-defined comparison function|

<h2><a name="keyexist()"># method: keyExist</a></h2>

```php
public static Arr::keyExist(array-key $key, array $array):bool
```











> [!NOTE]
            Method will search for the keys in the first dimension only. Nested keys in multidimensional arrays will
not be found.

### ### Checks if the given key or index exists in the array

_Returns true if the given key is set in the array. Key can be any value possible for an array index._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L126)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L126)**</sub>
#### Parameters

* array-key **$key** - _Key to check._
* array **$array** - _<code>array<array-key, mixed></code>
An array with keys to check._
#### Returns

* bool - _True if key exists in an array, false otherwise._
<h2><a name="inarray()"># method: inArray</a></h2>

```php
public static Arr::inArray(mixed $value, array $array):bool
```













### ### Checks if a value exists in an array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L148)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L148)**</sub>
#### Parameters

* mixed **$value** - _The searched value.
note: If a needle is a string, the comparison is done in a case-sensitive manner._
* array **$array** - _<code>array<array-key, mixed></code>
The array._
#### Returns

* bool - _True if value is found in the array, false otherwise._
<h2><a name="islist()"># method: isList</a></h2>

```php
public static Arr::isList(array $array):bool
```











> [!NOTE]
            This function returns true on empty arrays.

### ### Checks whether a given array is a list

_Determines if the given array is a list. An array is considered a list if its keys consist of consecutive
numbers from 0 to count($array)-1._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L172)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L172)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, TValue></code>
The array being evaluated._
#### Returns

* bool - _<code>($array is list ? true: false)</code> True if an array is a list, false otherwise._
<h2><a name="multisort()"># method: multiSort</a></h2>

```php
public static Arr::multiSort(array $array):bool
```











> [!CAUTION]
            Associative (string) keys will be maintained, but numeric keys will be re-indexed.> [!NOTE]
            Resets array's internal pointer to the first element.

### ### Sort multiple or multidimensional arrays



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L198)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L198)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, array<array-key, mixed>></code>
A multidimensional array being sorted._
#### Throws

* [\Error](./Wiki-Error) - _Failed to sort a multi-sort array._
* [\ValueError](./Wiki-ValueError) - _If array sizes are inconsistent._
#### Returns

* bool - _True on success._
<h2><a name="walk()"># method: walk</a></h2>

```php
public static Arr::walk(array &$array, callable $callback):true
```













### ### Apply a user function to every member of an array

_Applies the user-defined callback function to each element of the array $array. Method is not affected by the
internal array pointer of an array. Method will walk through the entire array regardless of pointer position._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L234)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L234)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array **$array** - _<code>array<TKey, TValue></code>
The array to apply a user function._
* callable **$callback** - _<code>callable (TValue $value, TKey $key):mixed</code>
Typically, function name takes on two parameters. The array parameter's value is the first, and the key/index
second. If a function name needs to be working with the actual values of the array, specify the first
parameter of function name as a reference. Then, any changes made to those elements will be made in the
original array itself. Users may not change the array itself from the callback function, e.g., add/delete
elements, unset elements, etc._
#### Throws

* [\ArgumentCountError](./Wiki-ArgumentCountError) - _If the $callback function requires more than two parameters._
#### Returns

* true - _True on success._
<h2><a name="walkrecursive()"># method: walkRecursive</a></h2>

```php
public static Arr::walkRecursive(array &$array, callable $callback):true
```













### ### Apply a user function recursively to every member of an array

_Applies the user-defined callback function to each element of the array. This function will recurse into
deeper arrays._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L267)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L267)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array **$array** - _<code>array<TKey, TValue></code>
The array to apply a user function._
* callable **$callback** - _<code>callable (TValue $value, TKey $key):mixed</code>
Typically, function name takes on two parameters. The array parameter's value is the first, and the key/index
second. If a function name needs to be working with the actual values of the array, specify the first
parameter of function name as a reference. Then, any changes made to those elements will be made in the
original array itself. Users may not change the array itself from the callback function. E.g., Add/delete
elements, unset elements, etc._
#### Returns

* true - _True on success._
<h2><a name="countvalues()"># method: countValues</a></h2>

```php
public static Arr::countValues(array $array):array
```













### ### Counts the occurrences of each distinct value in an array

_Returns an array using the values of $array (which must be int-s or strings) as keys and their frequency in an
$array as values._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L294)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L294)**</sub>
#### Templates

* TValue of array-key
#### Parameters

* array **$array** - _<code>array<array-key, TValue></code>
The array of values to count._
#### Returns

* array - _<code>array<array-key, positive-int></code> An associative array of values from
input as keys and their count as value._
<h2><a name="fill()"># method: fill</a></h2>

```php
public static Arr::fill(mixed $value, int $start_index, int $length):array
```













### ### Fill an array with values

_Fills an array with $length entries of the value of the $value parameter, keys starting at the $start_index
parameter._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L326)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L326)**</sub>
#### Templates

* TValue
#### Parameters

* mixed **$value** - _<code>TValue</code>
Value to use for filling._
* int **$start_index** - _The first index of the returned array._
* int **$length**
#### Throws

* [\ValueError](./Wiki-ValueError) - _If $length is out of range._
#### Returns

* array - _<code>array<int, TValue></code> Filled array._
<h2><a name="fillkeys()"># method: fillKeys</a></h2>

```php
public static Arr::fillKeys(array $keys, mixed $value):array
```













### ### Fill an array with values, specifying keys

_Fills an array with the value of the $value parameter, using the values of the $keys array as keys._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L358)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L358)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$keys** - _<code>array<array-key, array-key></code>
Array of values that will be used as keys.
Illegal values for a key will be converted to string._
* mixed **$value** - _<code>TValue</code>
Value to use for filling._
#### Throws

* [\Error](./Wiki-Error) - _If key could not be converted to string._
#### Returns

* array - _<code>array<TKey, TValue></code> The filled array._
<h2><a name="foldkeys()"># method: foldKeys</a></h2>

```php
public static Arr::foldKeys(array $array, \FireHub\Core\Support\Enums\String\CaseFolding $case = CaseFolding::LOWER):array
```













### ### Changes the case of all keys in an array

_Returns an array with all keys from array lowercased or uppercased. Numbered indices are left as is._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L393)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L393)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to work on._
* [\FireHub\Core\Support\Enums\String\CaseFolding](./Wiki-CaseFolding) **$case** = CaseFolding::LOWER - _[optional] 
<code>\FireHub\Core\Support\Enums\String\CaseFolding::LOWER|\FireHub\Core\Support\Enums\String\CaseFolding::UPPER</code>
Either LOWER or UPPER case folding._
#### Returns

* array - _<code>array<TKey, TValue></code> An array with its keys lower or uppercased._
<h2><a name="chunk()"># method: chunk</a></h2>

```php
public static Arr::chunk(array $array, positive-int $length, bool $preserve_keys = false):array
```













### ### ### Split an array into chunks

_Chunks an array into arrays with $length elements. The last chunk may contain less than $length elements._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L428)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L428)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array._
* positive-int **$length** - _The size of each chunk.
If the length is less than 1, it will default to 1._
* bool **$preserve_keys** = false - _[optional] 
When set to true, keys will be preserved.
Default is false that will reindex the chunk numerically._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If length is less than 1._
#### Returns

* array - _<code>($preserve_keys is true ? list<array<TKey, TValue>> : list<list<TValue>>)</code>
Multidimensional numerically indexed array, starting with zero, with each dimension containing $length elements._
<h2><a name="column()"># method: column</a></h2>

```php
public static Arr::column(array $array, int|string $key, null|int|string $index = null):array
```













### ### Return the values from a single column in the input array

_Returns the values from a single column of the $array, identified by the $key. Optionally, an argument key may
be provided to $index the values in the returned array by the values from the index argument column of the
input array._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L470)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L470)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<array-key, array<TKey, TValue>></code>
A multidimensional array (record set) from which to pull a column of values. If an array of objects is provided,
then public properties can be directly pulled. In order for protected or private properties to be pulled,
the class must implement both the __get() and __isset() magic methods._
* int or string **$key** - _<code>TKey</code>
The column of values to return. This value may be an integer key of the column you wish to retrieve, or it may
be a string key name for an associative array or property name. It may also be null to return complete arrays or
objects (this is useful together with $index to reindex the array)._
* null or int or string **$index** = null - _[optional] 
<code>null|TKey</code>
The column to use as the index/keys for the returned array. This value may be the integer key of the column,
or it may be the string key name. The value is cast as usual for array keys._
#### Returns

* array - _<code>($index is null ? array<TValue> : array<TValue, TValue>)</code> Array of values
representing a single column from the input array._
<h2><a name="combine()"># method: combine</a></h2>

```php
public static Arr::combine(array $keys, array $values):array
```













### ### Creates an array by using one array for keys and another for its values

_Creates an array by using the values from the $keys array as keys and the values from the $values array as the
corresponding values._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L503)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L503)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$keys** - _<code>array<array-key, TKey></code>
Array of values to be used as keys.
Illegal values for a key will be converted to string._
* array **$values** - _<code>array<array-key, TValue></code>
Array of values to be used as values on a combined array._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If arguments $keys and $values don&#039;t have the same number of elements._
#### Returns

* array - _<code>array<TKey, TValue></code> The combined array._
<h2><a name="difference()"># method: difference</a></h2>

```php
public static Arr::difference(array $array, array ...$excludes):array
```











> [!NOTE]
            This function only checks one dimension of an n-dimensional array. You can check deeper dimensions by
using [[Arr#difference($array1[0], $array2[0])]].

### ### Computes the difference of arrays using values for comparison

_Compares an array against one or more other arrays and returns the values in array that are not present in any of
the other arrays._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L537)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L537)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<array-key, TValue></code>
The array to compare from._
* variadic array **$excludes** - _[optional] 
<code>array<array-key, mixed></code>
An array to compare against._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from
$array that are not present in any of the other arrays._
<h2><a name="differencefunc()"># method: differenceFunc</a></h2>

```php
public static Arr::differenceFunc(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.> [!NOTE]
            Please note that this function only checks one dimension of an n-dimensional array. Of course, you can
check deeper dimensions by using [[Arr#differenceFunc($array1[0], $array2[0]), 'data_compare_func']].

### ### Computes the difference of arrays using values for comparison by using a callback for comparison

_Computes the difference of arrays by using a callback function for data comparison. This is unlike
[[Arr#difference()]] which uses an internal function for comparing the data._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L579)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L579)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function must return an integer less than, equal to, or greater than zero if the first argument
is considered to be respectively less than, equal to, or greater than the second._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array
that are not present in any of the other arrays._
<h2><a name="differencekey()"># method: differenceKey</a></h2>

```php
public static Arr::differenceKey(array $array, array ...$excludes):array
```











> [!NOTE]
            This function only checks one dimension of an n-dimensional array. Of course, you can check deeper
dimensions by using [[Arr#differenceKey($array1[0], $array2[0])]].

### ### Computes the difference of arrays using keys for comparison

_Compares the keys from array against the keys from arrays and returns the difference. This function is like
[[Arr#difference()]] except the comparison is done on the keys instead of the values._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L613)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L613)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* variadic array **$excludes** - _[optional] 
<code>array<array-key, mixed></code>
An array to compare against._
#### Returns

* array - _<code>array<TKey, TValue></code> Returns an array containing all the entries from
array whose keys are absent from all the other arrays._
<h2><a name="differencekeyfunc()"># method: differenceKeyFunc</a></h2>

```php
public static Arr::differenceKeyFunc(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value
of 0, which will compare such values as equal.> [!NOTE]
            This function only checks one dimension of an n-dimensional array. Of course, you can check deeper
dimensions by using [[Arr#differenceKeyFunc($array1[0], $array2[0], 'callback_func')]].

### ### Computes the difference of arrays using keys for comparison by using a callback for data comparison

_Compares the keys from array against the keys from arrays and returns the difference. This function is like
[[Arr#difference()]] except the comparison is done on the keys instead of the values._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L654)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L654)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array
that are not present in any of the other arrays._
<h2><a name="differenceassoc()"># method: differenceAssoc</a></h2>

```php
public static Arr::differenceAssoc(array $array, array ...$excludes):array
```











> [!NOTE]
            This function only checks one dimension of an n-dimensional array. It is possible to check deeper
dimensions by using, for example, [[Arr#differenceAssoc($array1[0], $array2[0])]].> [!NOTE]
            Ensure arguments are passed in the correct order when comparing similar arrays with more keys. The new
array should be the first in the list.

### ### Computes the difference of arrays with additional index check

_Compares an array against arrays and returns the difference. Unlike [[Arr#difference()]], the array keys are
also used in the comparison._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L690)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L690)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* variadic array **$excludes** - _[optional] 
<code>array<array-key, mixed></code>
An array to compare against._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array
that are not present in any of the other arrays._
<h2><a name="differenceassocfuncvalue()"># method: differenceAssocFuncValue</a></h2>

```php
public static Arr::differenceAssocFuncValue(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value
of 0, which will compare such values as equal.> [!NOTE]
            Please note that this function only checks one dimension of an n-dimensional array. Of course, you can
check deeper dimensions by using, for example,
[[Arr#differenceAssocFuncValue($array1[0], $array2[0], 'some_comparison_func')]].

### ### Computes the difference of arrays with additional index check by using a callback for value comparison

_Computes the difference of arrays with additional index check, compares data by a callback function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L731)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L731)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array
that are not present in any of the other arrays._
<h2><a name="differenceassocfunckey()"># method: differenceAssocFuncKey</a></h2>

```php
public static Arr::differenceAssocFuncKey(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.> [!NOTE]
            This function only checks one dimension of an n-dimensional array. It is possible to check deeper
dimensions by using, for example, [[Arr#differenceAssocFuncKey($array1[0], $array2[0], 'key_compare_func')]].

### ### Computes the difference of arrays with additional index check by using a callback for key comparison

_Compares an array against arrays and returns the difference. Unlike [[Arr#difference()]], the array keys are
used in the comparison. Unlike [[Arr#differenceAssoc()]], a user-supplied callback function is used for the
indices comparison, not internal function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L773)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L773)**</sub>
#### Templates

* TKey
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function._
#### Returns

* array - _<code>array<TKey, TValue></code> Returns an array containing all the entries from
$array that are not present in any of the other arrays._
<h2><a name="differenceassocfunckeyvalue()"># method: differenceAssocFuncKeyValue</a></h2>

```php
public static Arr::differenceAssocFuncKeyValue(array $array, array $excludes, callable $callback_value, callable $callback_key):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.> [!NOTE]
            This function only checks one dimension of an n-dimensional array. It is possible to check deeper
dimensions by using, for example,
[[Arr#differenceAssocFuncKeyValue($array1[0], $array2[0], 'data_compare_func', 'key_compare_func')]].

### ### Computes the difference of arrays with additional index check by using a callback for key-value comparison

_Computes the difference of arrays with additional index check, compares data and indexes by a callback function.
Note that the keys are used in the comparison unlike [[Arr#difference()]] and [[Arr#differenceFunc()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L819)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L819)**</sub>
#### Templates

* TKey
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback_value** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function for value._
* callable **$callback_key** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function for key._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array
that are not present in any of the other arrays._
<h2><a name="intersect()"># method: intersect</a></h2>

```php
public static Arr::intersect(array $array, array ...$arrays):array
```











> [!NOTE]
            Two elements are considered equal if and only if (string) $elem1 === (string) $elem2. In words: when the
string representation is the same.

### ### Computes the intersection of arrays using values for comparison

_Returns an array containing all the values of array that are present in all the arguments. Note that keys are
preserved._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L852)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L852)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array with main values to check._
* variadic array **$arrays** - _[optional] 
<code>array<array-key, mixed></code>
An array to compare values against._
#### Returns

* array - _<code>array<TKey, TValue></code> The filtered array._
<h2><a name="intersectfunc()"># method: intersectFunc</a></h2>

```php
public static Arr::intersectFunc(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.> [!NOTE]
            Two elements are considered equal if and only if (string) $elem1 === (string) $elem2. In words: when the
string representation is the same.

### ### Computes the intersection of arrays using values for comparison by using a callback for data comparison

_Computes the intersection of arrays, compares data by a callback function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L892)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L892)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function._
#### Returns

* array - _<code>array<TKey, TValue></code> Arrays containing all the entries from $array that
are not present in any of the other arrays._
<h2><a name="intersectkey()"># method: intersectKey</a></h2>

```php
public static Arr::intersectKey(array $array, array ...$arrays):array
```













### ### Computes the intersection of arrays using keys for comparison

_Returns an array containing all the entries of array which have keys that are present in all the arguments._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L921)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L921)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array with main values to check._
* variadic array **$arrays** - _[optional] 
<code>array<array-key, mixed></code>
An array to compare values against._
#### Returns

* array - _<code>array<TKey, TValue></code> The filtered array._
<h2><a name="intersectkeyfunc()"># method: intersectKeyFunc</a></h2>

```php
public static Arr::intersectKeyFunc(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.

### ### Computes the intersection of arrays using keys for comparison by using a callback for data comparison

_Returns an array containing all the values of array which have matching keys that are present in all the
arguments._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L960)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L960)**</sub>
#### Templates

* TKey
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array that
are not present in any of the other arrays._
<h2><a name="intersectassoc()"># method: intersectAssoc</a></h2>

```php
public static Arr::intersectAssoc(array $array, array ...$arrays):array
```











> [!NOTE]
            The two values from the key → value pairs are considered equal only if (string) $elem1 === (string) $elem2.
In other words, a strict type check is executed, so the string representation must be the same.

### ### Computes the intersection of arrays with additional index check

_Returns an array containing all the values of array that are present in all the arguments. Note that the keys
are also used in the comparison unlike in [[Arr#intersect()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L993)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L993)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array with main values to check._
* variadic array **$arrays** - _[optional] 
<code>array<array-key, mixed></code>
An array to compare values against._
#### Returns

* array - _<code>array<TKey, TValue></code> The filtered array._
<h2><a name="intersectassocfuncvalue()"># method: intersectAssocFuncValue</a></h2>

```php
public static Arr::intersectAssocFuncValue(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.

### ### Computes the intersection of arrays with additional index check by using a callback for value comparison

_Computes the intersection of arrays with additional index check, compares data by a callback function. Note
that the keys are used in the comparison unlike in [[Arr#intersectFunc()]]. The data is compared by using a
callback function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1033)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1033)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _$callback 
<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array that
are not present in any of the other arrays._
<h2><a name="intersectassocfunckey()"># method: intersectAssocFuncKey</a></h2>

```php
public static Arr::intersectAssocFuncKey(array $array, array $excludes, callable $callback):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.> [!NOTE]
            The comparison function must return an integer less than, equal to, or greater than zero if the first
argument is considered to be respectively less than, equal to, or greater than the second.

### ### Computes the intersection of arrays with additional index check by using a callback for key comparison

_Computes the intersection of arrays with additional index check, compares data and indexes by separate
callback functions._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1074)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1074)**</sub>
#### Templates

* TKey
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array that
are not present in any of the other arrays._
<h2><a name="intersectassocfunckeyvalue()"># method: intersectAssocFuncKeyValue</a></h2>

```php
public static Arr::intersectAssocFuncKeyValue(array $array, array $excludes, callable $callback_value, callable $callback_key):array
```











> [!CAUTION]
            Returning non-integer values from the comparison function, such as float, will result in an internal
cast to int of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer
value of 0, which will compare such values as equal.> [!NOTE]
            The comparison function must return an integer less than, equal to, or greater than zero if the first
argument is considered to be respectively less than, equal to, or greater than the second.

### ### Computes the intersection of arrays with additional index check by using a callback for key-value comparison

_Computes the intersection of arrays with additional index check, compares data and indexes by separate
callback functions._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1119)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1119)**</sub>
#### Templates

* TKey
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to compare from._
* array **$excludes** - _<code>array<array-key, mixed></code>
An array to compare against._
* callable **$callback_value** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function for value._
* callable **$callback_key** - _<code>callable (mixed $a, mixed $b):int<-1, 1></code>
The comparison function for key._
#### Returns

* array - _<code>array<TKey, TValue></code> An array containing all the entries from $array that
are not present in any of the other arrays._
<h2><a name="filter()"># method: filter</a></h2>

```php
public static Arr::filter(array $array, null|callable $callback = null, bool $pass_key = false):array
```











> [!CAUTION]
            If the array is changed from the callback function (e.g., an element added, deleted or unset) then
behavior of this function is undefined.

### ### Filter elements in an array

_Iterates over each value in the $array passing them to the $callback function. If the $callback function
returns true, the current value from an $array is returned into the result array. Array keys are preserved, and
may result in gaps if the $array was indexed. The result array can be re-indexed using the values() function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1158)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1158)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to iterate over._
* null or callable **$callback** = null - _[optional] 
<code>null|callable (TValue, TKey=):bool</code>
The callback function to use.
If no callback is supplied, all empty and false entries of an array will be removed._
* bool **$pass_key** = false - _[optional] 
Pass key as the argument to callback._
#### Returns

* array - _<code>array<TKey, TValue></code> Filtered array._
<h2><a name="flip()"># method: flip</a></h2>

```php
public static Arr::flip(array $array):array
```













### ### Exchanges all keys with their associated values in an array

_Returns an array in flip order; i.e., keys from an $array become values and values from an $array become keys.
Note that the values of $array need to be valid keys, i.e., they need to be either int or string. A warning
will be emitted if a value has the wrong type, and the key/value pair in question will not be included in the
result. If a value has several occurrences, the latest key will be used as its value, and all others will be
lost._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1193)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1193)**</sub>
#### Templates

* TKey of array-key
* TValue of array-key
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to flip._
#### Returns

* array - _<code>array<TKey, TValue></code> The flipped array._
<h2><a name="keys()"># method: keys</a></h2>

```php
public static Arr::keys(array $array, mixed $filter = null):array
```













### ### Return all the keys or a subset of the keys of an array

_Returns the keys, numeric and string, from the $array. If a $filter is specified, then only the keys for that
value are returned. Otherwise, all the keys from the array are returned._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1218)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1218)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
An array containing keys to return._
* mixed **$filter** = null - _[optional] 
If specified, then only keys containing these values are returned._
#### Returns

* array - _<code>list<mixed></code> An array of all the keys in input._
<h2><a name="values()"># method: values</a></h2>

```php
public static Arr::values(array $array):array
```













### ### Return all the values from an array

_Returns all the values from the array and indexes the array numerically._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1243)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1243)**</sub>
#### Templates

* TValue
#### Parameters

* array **$array** - _<code>array<array-key, TValue></code>
The array._
#### Returns

* array - _<code>array<TValue></code> An indexed array of values._
<h2><a name="map()"># method: map</a></h2>

```php
public static Arr::map(array $array, callable $callback):array
```













### ### Applies the callback to the elements of the given arrays

_Returns an array containing the results of applying the $callback to the corresponding value of an $array used as
arguments for the callback. The number of parameters that the $callback function accepts should match the
number of arrays passed to map(). Excess input arrays are ignored. An ArgumentCountError is thrown if an
insufficient number of arguments is provided._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1279)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1279)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
Array to run through the callback function._
* callable **$callback** - _<code>null|callable (TValue $value):mixed</code>
Callback function to run for each element in each array.
Null can be passed as a value to $callback to perform a zip operation on multiple arrays.
If only an array is provided, map() will return the input array._
#### Throws

* [\ArgumentCountError](./Wiki-ArgumentCountError) - _If an insufficient number of arguments is provided._
#### Returns

* array - _<code>array<TKey, mixed></code> Array containing all the elements of arr1 after
applying the callback function._
<h2><a name="merge()"># method: merge</a></h2>

```php
public static Arr::merge(array ...$arrays):array
```











> [!NOTE]
            If the input arrays have the same string keys, then the later value for that key will overwrite the
previous one.> [!NOTE]
            If the arrays contain numeric keys, the later value will be appended.> [!NOTE]
            Numeric keys will be renumbered.

### ### Merges the elements of one or more arrays together

_Merges the elements of one or more arrays together so that the values of one are appended to the end of the
previous one. It returns the resulting array. If the input arrays have the same string keys, then the later
value for that key will overwrite the previous one. If, however, the arrays contain numeric keys, the later
value will not overwrite the original value, but will be appended. Values in the input arrays with numeric
keys will be renumbered with incrementing keys starting from zero in the result array._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1312)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1312)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* variadic array **$arrays** - _[optional] 
<code>array<TKey, TValue></code>
Variable list of arrays to merge._
#### Returns

* array - _<code>array<TKey, TValue></code> The resulting array._
<h2><a name="mergerecursive()"># method: mergeRecursive</a></h2>

```php
public static Arr::mergeRecursive(array ...$arrays):array
```













### ### Merge two or more arrays recursively

_Merges the elements of one or more arrays together so that the values of one are appended to the end of the
previous one. It returns the resulting array. If the input arrays have the same string keys, then the values
for these keys are merged into an array. This is done recursively, so that if one of the values is an array
itself, the function will merge it with a corresponding entry in another array too. If, however, the arrays
have the same numeric key, the later value will not overwrite the original value, but will be appended._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1337)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1337)**</sub>
#### Parameters

* variadic array **$arrays** - _[optional] 
<code>array<array-key, mixed></code>
Variable list of arrays to recursively merge._
#### Returns

* array - _<code>array<array-key, mixed></code> The resulting array._
<h2><a name="pad()"># method: pad</a></h2>

```php
public static Arr::pad(array $array, int $length, mixed $value):array
```











> [!CAUTION]
            Keys can be re-numbered.

### ### Pad array to the specified length with a value

_Returns a copy of the array padded to size specified by $length with value $value. If the length is positive,
then the array is padded on the right if it's negative then on the left. If the absolute value of length is
less than or equal to the length of the array, then no padding takes place. It is possible to add at most
1048576 elements at a time._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1371)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1371)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
Initial array of values to pad._
* int **$length** - _New size of the array.
If the length is positive, then the array is padded on the right if it's negative then on the left.
If the absolute value of length is less than or equal to the length of the array, then no padding takes place._
* mixed **$value** - _Value to pad if input is less than length._
#### Returns

* array - _<code>array<array-key, mixed></code> A copy of the input padded to size specified by $length with value $value._
<h2><a name="replace()"># method: replace</a></h2>

```php
public static Arr::replace(array $array, array ...$replacements):array
```













### ### Replaces elements from passed arrays into the first array

_Replaces the values of $array with values having the same keys in each of the following arrays. If a key from
the first array exists in the second array, its value will be replaced by the value from the second array. If
the key exists in the second array, and not the first, it will be created in the first array. If a key only
exists in the first array, it will be left as is. If several arrays are passed for replacement, they will be
processed in order, the later arrays overwriting the previous values. Method is not recursive, it will replace
values in the first array by whatever type is in the second array._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1404)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1404)**</sub>
#### Templates

* TValue
#### Parameters

* array **$array** - _<code>array<TValue></code>
The array in which elements are replaced._
* variadic array **$replacements**
#### Returns

* array - _<code>array<TValue></code> The resulting array._
<h2><a name="replacerecursive()"># method: replaceRecursive</a></h2>

```php
public static Arr::replaceRecursive(array $array, array ...$replacements):array
```













### ### Replace two or more arrays recursively

_Replaces the values of $array with the same values from all the following arrays. If a key from the first
array exists in the second array, its value will be replaced by the value from the second array. If the key
exists in the second array, and not the first, it will be created in the first array. If a key only exists in
the first array, it will be left as is. If several arrays are passed for replacement, they will be processed
in order, the later array overwriting the previous values. When the value in the first array is scalar, it
will be replaced by the value in the second array, may it be scalar or array. When the value in the first
array and the second array are both arrays, replaceRecursive() will replace their respective values recursively._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1438)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1438)**</sub>
#### Templates

* TValue
#### Parameters

* array **$array** - _<code>array<TValue></code>
The array in which elements are replaced._
* variadic array **$replacements**
#### Returns

* array - _<code>array<TValue></code> The resulting array._
<h2><a name="reverse()"># method: reverse</a></h2>

```php
public static Arr::reverse(array $array, bool $preserve_keys = false):array
```













### ### Reverse the order of array items

_Takes an input array and returns a new array with the order of the elements reversed._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1466)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1466)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
Array to reverse._
* bool **$preserve_keys** = false - _[optional] 
Whether you want to preserve keys from an original array or not.
Non-numeric keys are not affected by this setting and will always be preserved._
#### Returns

* array - _<code>($preserve_keys is true ? array<TKey, TValue> : array<array-key, TValue>)</code> The reversed array._
<h2><a name="slice()"># method: slice</a></h2>

```php
public static Arr::slice(array $array, int $offset, null|int $length = null, bool $preserve_keys = false):array
```













### ### Extract a slice of the array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1501)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1501)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The input array._
* int **$offset** - _If the offset is non-negative, the sequence will start at that offset in the array.
If the offset is negative, the sequence will start that far from the end of the array._
* null or int **$length** = null - _[optional] 
If length is given and is positive, then the sequence will have that many elements in it.
If length is given and is negative, then the sequence will stop that many elements from the end of the array.
If it is omitted, then the sequence will have everything from offset up until the end of the array._
* bool **$preserve_keys** = false - _[optional] 
Note that array_slice will reorder and reset the array indices by default.
You can change this behavior by setting preserve_keys to true._
#### Returns

* array - _<code>($preserve_keys is true ? array<TKey, TValue> : array<TKey|int, TValue>)</code> Sliced array._
<h2><a name="splice()"># method: splice</a></h2>

```php
public static Arr::splice(array &$array, int $offset, null|int $length = null, mixed $replacement = []):array
```











> [!NOTE]
            Numerical keys in an array are not preserved.> [!NOTE]
            If replacement is not an array, it will be typecast to one (i.e. (array) $replacement).
This may result in unexpected behavior when using an object or null replacement.

### ### Remove a portion of the array and replace it with something else

_Removes the elements designated by offset and length from the array $array, and replaces them with the elements
of the replacement array, if supplied._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1548)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1548)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array **$array** - _<code>array<TKey, TValue></code>
Array to splice._
* int **$offset** - _If the offset is positive, then the start of the removed portion is at that offset from the beginning of the
input array.
If the offset is negative, then it starts that far from the end of the input array._
* null or int **$length** = null - _[optional] 
If length is omitted, removes everything from offset to the end of the array.
If length is specified and is positive, then that many elements will be removed.
If length is specified and is negative, then the end of the removed portion will be that many elements from
the end of the array._
* mixed **$replacement** = [] - _[optional] 
If a replacement array is specified, then the removed elements will be replaced with elements from this array.
If offset and length are such that nothing is removed, then the elements from the replacement array or array
are inserted in the place specified by the offset.
Keys in a replacement array are not preserved._
#### Returns

* array - _<code>array<TKey|int, TValue></code> Spliced array._
<h2><a name="unique()"># method: unique</a></h2>

```php
public static Arr::unique(array $array):array
```











> [!NOTE]
            The new array will preserve associative keys, and reindex others.> [!NOTE]
            This method is not intended to work on multidimensional arrays.

### ### Removes duplicate values from an array

_Takes an input array and returns a new array without duplicate values._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1575)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1575)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array **$array** - _<code>array<TKey, TValue></code>
The array to remove duplicates._
#### Returns

* array - _<code>array<TKey, TValue></code> The filtered array._
<h2><a name="range()"># method: range</a></h2>

```php
public static Arr::range(int|float|string $start, int|float|string $end, int|float $step = 1):array
```











> [!NOTE]
            Character sequence values are limited to a length of one. If a length greater than one is entered.
only the first character is used.

### ### Create an array containing a range of elements



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1611)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1611)**</sub>
#### Parameters

* int or float or string **$start** - _First value of the sequence._
* int or float or string **$end** - _The sequence is ended upon reaching the end value._
* int or float **$step** = 1 - _[optional] 
If a step value is given, it will be used as the increment between elements in the sequence. Step should be
given as a positive number. If not specified, a step will default to 1._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If &amp;start or &amp;end is a string implicitly cast to int because the other boundary value
is a number, $start or $end is a non-numeric string with more than one byte or &amp;start or &amp;end is the empty
string._
#### Returns

* array - _<code>array<int, int|float|string></code> An array of elements from start to end,
inclusive, false otherwise._
<h2><a name="random()"># method: random</a></h2>

```php
public static Arr::random(array $array, int $number = 1):array|int|string
```











> [!CAUTION]
            This function does not generate cryptographically secure values, and must not be used for
cryptographic purposes, or purposes that require returned values to be unguessable.

### ### Pick one or more random keys out of an array

_Picks one or more random entries out of an array, and returns the key (or keys) of the random entries._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1642)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1642)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
The input array._
* int **$number** = 1 - _[optional] 
Specifies how many entries should be picked._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If $number is not between one and the number of elements in argument._
#### Returns

* array or int or string - _<code>array<int, array-key>|int|string</code> When picking only one entry,
array_rand() returns the key for a random entry. Otherwise, an array of keys for the random entries is returned._
<h2><a name="reduce()"># method: reduce</a></h2>

```php
public static Arr::reduce(array $array, callable $callback, mixed $initial = null):mixed
```













### ### Iteratively reduce the array to a single value using a callback function

_Iteratively applies the $callback function to the elements of the $array, to reduce the array to a single value._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1670)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1670)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
The input array._
* callable **$callback** - _<code>callable (mixed $carry, mixed $item):mixed</code>
The callable function._
* mixed **$initial** = null - _[optional] 
If the optional initial is available, it will be used at the beginning of the process,
or as a final result in case the array is empty._
#### Returns

* mixed - _Resulting value or null if the array is empty and initial is not passed._
<h2><a name="pop()"># method: pop</a></h2>

```php
public static Arr::pop(array &$array):mixed
```











> [!NOTE]
            This function will reset the array pointer of the input array after use.

### ### Pop the element off the end of array

_Pops and returns the last element value of th $array, shortening the $array by one element._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1696)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1696)**</sub>
#### Templates

* TValue
#### Parameters

* by reference array **$array** - _<code>array<array-key, TValue></code>
The array to get the value from._
#### Returns

* mixed - _<code>TValue|null</code> The last value of an array. If an array is empty (or is not an array), null will be returned._
<h2><a name="push()"># method: push</a></h2>

```php
public static Arr::push(array &$array, \FireHub\Core\Support\LowLevel\TValue ...$values):int
```











> [!NOTE]
            If you use push to add one element to the array, it's better to use $array[] = because in that way there
is no overhead of calling a function.

### ### Push elements onto the end of array

_Method treats an array as a stack, and pushes the passed variables onto the end of array. The length of array
increases by the number of variables pushed._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1726)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1726)**</sub>
#### Templates

* TValue
#### Parameters

* by reference array **$array** - _<code>array<array-key, TValue></code>
The input array._
* variadic [\FireHub\Core\Support\LowLevel\TValue](./Wiki-TValue) **$values** - _[optional] 
The values to push onto the end of the array._
#### Returns

* int - _The new number of elements in the array._
<h2><a name="shift()"># method: shift</a></h2>

```php
public static Arr::shift(array &$array):mixed
```











> [!NOTE]
            This function will reset the array pointer of the input array after use.

### ### Removes an item at the beginning of an array

_Shifts the first value of the array off and returns it, shortening the array by one element and moving
everything down. All numerical array keys will be modified to start counting from zero while literal keys won't
be affected._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1754)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1754)**</sub>
#### Templates

* TValue
#### Parameters

* by reference array **$array** - _<code>array<array-key, TValue></code>
Array to shift._
#### Returns

* mixed - _<code>TValue|null</code> The shifted value, or null if an array is empty or is not an array._
<h2><a name="unshift()"># method: unshift</a></h2>

```php
public static Arr::unshift(array &$array, \FireHub\Core\Support\LowLevel\TValue ...$values):int
```











> [!NOTE]
            Resets array's internal pointer to the first element.

### ### Prepend one or more elements to the beginning of an array

_Method prepends passed elements to the front of the array.
Note that the list of elements is prepended as a whole, so that the prepended elements stay in the same order.
All numerical array keys will be modified to start counting from zero while literal keys won't be changed._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1784)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1784)**</sub>
#### Templates

* TValue
#### Parameters

* by reference array **$array** - _<code>array<array-key, TValue></code>
The input array._
* variadic [\FireHub\Core\Support\LowLevel\TValue](./Wiki-TValue) **$values** - _[optional] 
The values to prepend._
#### Returns

* int - _The new number of elements in the array._
<h2><a name="firstkey()"># method: firstKey</a></h2>

```php
public static Arr::firstKey(array $array):null|int|string
```













### ### Get first key from an array

_Get the first key of the given $array without affecting the internal array pointer._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1804)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1804)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
An array._
#### Returns

* null or int or string - _First key from $array or null if an array is empty._
<h2><a name="lastkey()"># method: lastKey</a></h2>

```php
public static Arr::lastKey(array $array):null|int|string
```













### ### Get last key from array

_Get the last key of the given $array without affecting the internal array pointer._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1824)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1824)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
An array._
#### Returns

* null or int or string - _Last key from $array or null if an array is empty._
<h2><a name="product()"># method: product</a></h2>

```php
public static Arr::product(array $array):int|float
```













### ### Calculate the product of values in an array

_Returns the product of values in an array._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1844)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1844)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
The array._
#### Returns

* int or float - _The product as an integer or float._
<h2><a name="sum()"># method: sum</a></h2>

```php
public static Arr::sum(array $array):int|float
```













### ### Calculate the sum of values in an array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1862)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1862)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
The input array._
#### Returns

* int or float - _The sum of values as an integer or float; 0 if the array is empty._
<h2><a name="search()"># method: search</a></h2>

```php
public static Arr::search(mixed $value, array $array):int|string|false
```











> [!WARNING]
            This method may return Boolean false, but may also return a non-Boolean value which evaluates to false.
Please read the section on Booleans for more information. Use the === operator for testing the return value of
this function.

### ### Searches the array for a given value and returns the first corresponding key if successful



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1892)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1892)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* mixed **$value** - _The searched value.
If $value is a string, the comparison is done in a case-sensitive manner._
* array **$array** - _<code>array<array-key, mixed></code>
Array to search._
#### Returns

* int or string or false - _<code>TKey|false</code> The key for value if it is found in the array, false otherwise._
<h2><a name="shuffle()"># method: shuffle</a></h2>

```php
public static Arr::shuffle(array &$array):true
```











> [!CAUTION]
            This function does not generate cryptographically secure values, and must not be used for cryptographic
purposes, or purposes that require returned values to be unguessable.> [!NOTE]
            This function assigns new keys to the elements in array. It will remove any existing keys that may have
been assigned, rather than just reordering the keys.> [!NOTE]
            Resets array's internal pointer to the first element.

### ### Shuffle array

_This function shuffles (randomizes the order of the elements in) an array._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1921)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1921)**</sub>
#### Templates

* TValue
#### Parameters

* by reference array **$array** - _<code>array<array-key, TValue></code>
The array._
#### Returns

* true - _Always returns true._
<h2><a name="sort()"># method: sort</a></h2>

```php
public static Arr::sort(array &$array, \FireHub\Core\Support\Enums\Order $order = Order::ASC, \FireHub\Core\Support\Enums\Sort $flag = Sort::SORT_REGULAR, bool $preserve_keys = false):true
```











> [!NOTE]
            Resets array's internal pointer to the first element.

### ### Sorts array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1959)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1959)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array **$array** - _<code>array<TKey, TValue></code>
Array to sort._
* [\FireHub\Core\Support\Enums\Order](./Wiki-Order) **$order** = Order::ASC - _[optional] 
Order type._
* [\FireHub\Core\Support\Enums\Sort](./Wiki-Sort) **$flag** = Sort::SORT_REGULAR - _[optional] 
Sort flag._
* bool **$preserve_keys** = false - _[optional] 
Whether you want to preserve keys from an original array or not._
#### Returns

* true - _Always true._
<h2><a name="sortbykey()"># method: sortByKey</a></h2>

```php
public static Arr::sortByKey(array<int|string,mixed> &$array, \FireHub\Core\Support\Enums\Order $order = Order::ASC, \FireHub\Core\Support\Enums\Sort $flag = Sort::SORT_REGULAR):true
```











> [!NOTE]
            Resets array's internal pointer to the first element.

### ### Sorts array by key



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1999)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L1999)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array&lt;int or string,mixed&gt; **$array** - _<code>array<TKey, TValue></code>
Array to sort._
* [\FireHub\Core\Support\Enums\Order](./Wiki-Order) **$order** = Order::ASC - _[optional] 
Order type._
* [\FireHub\Core\Support\Enums\Sort](./Wiki-Sort) **$flag** = Sort::SORT_REGULAR - _[optional] 
Sort flag._
#### Returns

* true - _Always true._
<h2><a name="sortby()"># method: sortBy</a></h2>

```php
public static Arr::sortBy(array &$array, callable $callback, bool $preserve_keys = false):true
```











> [!NOTE]
            Resets array's internal pointer to the first element.

### ### Sorts an array by values using a user-defined comparison function



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L2033)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L2033)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array **$array**
* callable **$callback** - _<code>callable (TValue $a, TValue $b):int<-1, 1></code>
The comparison function must return an integer less than, equal to, or greater than zero if the first argument
is considered to be respectively less than, equal to, or greater than the second._
* bool **$preserve_keys** = false - _[optional] 
Whether you want to preserve keys from an original array or not._
#### Returns

* true - _Always true._
<h2><a name="sortkeyby()"># method: sortKeyBy</a></h2>

```php
public static Arr::sortKeyBy(array &$array, callable $callback):true
```











> [!NOTE]
            Resets array's internal pointer to the first element.

### ### Sorts array by key using a user-defined comparison function



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L2065)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Arr.php#L2065)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array **$array** - _<code>array<TKey, TValue></code>
Array to sort._
* callable **$callback** - _<code>callable (TKey $a, TKey $b):int<-1, 1></code>
The callback comparison function. Function cmp_function should accept two parameters which will be filled
by pairs of array keys. The comparison function must return an integer less than, equal to, or greater than
zero if the first argument is considered to be respectively less than, equal to, or greater than the second._
#### Returns

* true - _Always true._