```php
final class \FireHub\Core\Support\LowLevel\Iterator()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Iterator low-level proxy class



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Iterator**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L29)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#toarray()">toArray</a>|### Copy the iterator into an array|
|public static |<a href="#count()">count</a>|### Count the elements in an iterator|
|public static |<a href="#apply()">apply</a>|### Call a function for every element in an iterator|

<h2><a name="toarray()"># method: toArray</a></h2>

```php
public static Iterator::toArray(\Traversable<\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue> $iterator, bool $preserve_keys = true):mixed
```











### ### Copy the iterator into an array

_Copy the elements of an iterator into an array._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L56)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L56)**</sub>
#### Templates

* TKey of array-key
* TValue
#### Parameters

* [\Traversable&lt;\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue&gt;](./Wiki-TValue&gt;) **$iterator** - _The iterator being copied._
* bool **$preserve_keys** = true - _[optional] 
Whether to use the iterator element keys as index.
If a key is an array or object, a warning will be generated. Null keys will be converted to an empty string,
float keys will be truncated to their int counterpart, resource keys will generate a warning and be converted
to their resource ID, and bool keys will be converted to integers._
#### Returns

* mixed - _An array containing items of the iterator._
<h2><a name="count()"># method: count</a></h2>

```php
public static Iterator::count(\Traversable<mixed,mixed> $iterator)
```











### ### Count the elements in an iterator

_Count the elements in an iterator. Method is not guaranteed to retain the current position of the iterator._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L74)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L74)**</sub>
#### Parameters

* [\Traversable&lt;mixed,mixed&gt;](./Wiki-Traversable&lt;mixed,mixed&gt;) **$iterator** - _The iterator being counted._
#### Returns

*  - _non-negative-int Number of elements in iterator._
<h2><a name="apply()"># method: apply</a></h2>

```php
public static Iterator::apply(\Traversable<\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue> $iterator, callable $callback, null|\FireHub\Core\Support\LowLevel\TValue[] $arguments = null):int
```











### ### Call a function for every element in an iterator



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L101)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L101)**</sub>
#### Templates

* TKey
* TValue
#### Parameters

* [\Traversable&lt;\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue&gt;](./Wiki-TValue&gt;) **$iterator** - _The iterator objects to iterate over._
* callable **$callback** - _<code>callable (TValue $value=):bool</code>
The callback function to call on every element The function must return true to continue iterating over the
iterator._
* null or [\FireHub\Core\Support\LowLevel\TValue[]](./Wiki-TValue[]) **$arguments** = null - _An array of arguments; each element of args is passed to the callback as separate argument._
#### Returns

* int - _Iteration count._