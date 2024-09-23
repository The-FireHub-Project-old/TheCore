```php
final class \FireHub\Core\Support\LowLevel\Iterables()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Array or Traversable low-level proxy class



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Iterables**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L36)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#count()">count</a>|### Counts all elements in the array|
|public static |<a href="#current()">current</a>|### Return the current element in an array|
|public static |<a href="#key()">key</a>|### Fetch a key from an array|
|public static |<a href="#prev()">prev</a>|### Rewind the internal array pointer|
|public static |<a href="#next()">next</a>|### Advance the internal pointer of an array|
|public static |<a href="#reset()">reset</a>|### Set the internal pointer of an array to its first element|
|public static |<a href="#end()">end</a>|### Set the internal pointer of an array to its last element|

<h2><a name="count()"># method: count</a></h2>

```php
public static Iterables::count(array<array-key,mixed>|\Countable $array, bool $multidimensional = false)
```











### ### Counts all elements in the array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L53)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L53)**</sub>
#### Parameters

* array&lt;array-key,mixed&gt; or [\Countable](./Wiki-Countable) **$array** - _Array to count._
* bool **$multidimensional** = false - _[optional] 
Count multidimensional items._
#### Returns

*  - _non-negative-int Number of elements in an array._
<h2><a name="current()"># method: current</a></h2>

```php
public static Iterables::current(array<array-key,\FireHub\Core\Support\LowLevel\TValue> $array):\FireHub\Core\Support\LowLevel\TValue|false
```











### ### Return the current element in an array

_Every array has an internal pointer to its "current" element, which is initialized to the first element
inserted into the array._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L87)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L87)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array&lt;array-key,\FireHub\Core\Support\LowLevel\TValue&gt; **$array** - _The array._
#### Returns

* [\FireHub\Core\Support\LowLevel\TValue](./Wiki-TValue) or false - _The current() function simply returns the value of the array element that is being pointed
to with the internal pointer. It does not move the pointer in any way. If the internal pointer points beyond
the end of the elements list or the array is empty, current() returns false._
<h2><a name="key()"># method: key</a></h2>

```php
public static Iterables::key(array<array-key,\FireHub\Core\Support\LowLevel\TValue> $array):null|\FireHub\Core\Support\LowLevel\TKey
```











### ### Fetch a key from an array

_Key returns the index element of the current array position._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L111)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L111)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* array&lt;array-key,\FireHub\Core\Support\LowLevel\TValue&gt; **$array** - _The array._
#### Returns

* null or [\FireHub\Core\Support\LowLevel\TKey](./Wiki-TKey) - _The key() function simply returns the key of the array element that's currently being pointed to by the internal pointer.
It does not move the pointer in any way.
If the internal pointer points beyond the end of the elements list or the array is empty, key() returns null._
<h2><a name="prev()"># method: prev</a></h2>

```php
public static Iterables::prev(array<array-key,\FireHub\Core\Support\LowLevel\TValue> &$array):\FireHub\Core\Support\LowLevel\TValue|false
```











### ### Rewind the internal array pointer

_Method prev() behaves just like next(), except it rewinds the internal array pointer one place instead of
advancing it._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L142)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L142)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array&lt;array-key,\FireHub\Core\Support\LowLevel\TValue&gt; **$array** - _The input array._
#### Returns

* [\FireHub\Core\Support\LowLevel\TValue](./Wiki-TValue) or false - _Returns the array value in the previous place that's pointed to by the internal array pointer,
or false if there are no more elements._
<h2><a name="next()"># method: next</a></h2>

```php
public static Iterables::next(array<array-key,\FireHub\Core\Support\LowLevel\TValue> &$array):\FireHub\Core\Support\LowLevel\TValue|false
```











### ### Advance the internal pointer of an array

_Method next() behaves like current(), with one difference.
It advances the internal array pointer one place forward before returning the element value.
That means it returns the next array value and advances the internal array pointer by one._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L175)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L175)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array&lt;array-key,\FireHub\Core\Support\LowLevel\TValue&gt; **$array** - _The array being affected._
#### Returns

* [\FireHub\Core\Support\LowLevel\TValue](./Wiki-TValue) or false - _Returns the array value in the next place that's pointed to by the internal array
pointer, or false if there are no more elements._
<h2><a name="reset()"># method: reset</a></h2>

```php
public static Iterables::reset(array<array-key,\FireHub\Core\Support\LowLevel\TValue> &$array):\FireHub\Core\Support\LowLevel\TValue|false
```











### ### Set the internal pointer of an array to its first element

_Method reset() rewinds array's internal pointer to the first element and returns the value of the first array
element._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L206)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L206)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array&lt;array-key,\FireHub\Core\Support\LowLevel\TValue&gt; **$array** - _The input array._
#### Returns

* [\FireHub\Core\Support\LowLevel\TValue](./Wiki-TValue) or false - _Returns the value of the first array element, or false if the array is empty._
<h2><a name="end()"># method: end</a></h2>

```php
public static Iterables::end(array<array-key,\FireHub\Core\Support\LowLevel\TValue> &$array):\FireHub\Core\Support\LowLevel\TValue|false
```











### ### Set the internal pointer of an array to its last element

_Method end() advances array's internal pointer to the last element, and returns its value._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L233)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterables.php#L233)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* by reference array&lt;array-key,\FireHub\Core\Support\LowLevel\TValue&gt; **$array** - _The input array._
#### Returns

* [\FireHub\Core\Support\LowLevel\TValue](./Wiki-TValue) or false - _Returns the value of the last element or false for an empty array._