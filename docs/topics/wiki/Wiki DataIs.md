```php
final class \FireHub\Core\Support\LowLevel\DataIs()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Data type checker low-level proxy class



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\DataIs**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L39)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#array()">array</a>|### Checks if value is array|
|public static |<a href="#bool()">bool</a>|### Checks if value is boolean|
|public static |<a href="#callable()">callable</a>|### Verify that the contents of a variable can be called as a function|
|public static |<a href="#countable()">countable</a>|### Verify that the contents of a variable is a countable value|
|public static |<a href="#float()">float</a>|### Finds whether the type of variable is a float|
|public static |<a href="#int()">int</a>|### Find whether the type of variable is an integer|
|public static |<a href="#iterable()">iterable</a>|### Verify that the contents of a variable is an iterable value|
|public static |<a href="#null()">null</a>|### Finds whether a variable is null|
|public static |<a href="#numeric()">numeric</a>|### Finds whether a variable is a number or a numeric string|
|public static |<a href="#object()">object</a>|### Finds whether a variable is an object|
|public static |<a href="#resource()">resource</a>|### Finds whether a variable is a resource|
|public static |<a href="#scalar()">scalar</a>|### Finds whether a variable is a scalar|
|public static |<a href="#string()">string</a>|### Find whether the type of variable is a string|

<h2><a name="array()"># method: array</a></h2>

```php
public static DataIs::array(mixed $value):mixed
```











### ### Checks if value is array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L51)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L51)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is array, false otherwise._
<h2><a name="bool()"># method: bool</a></h2>

```php
public static DataIs::bool(mixed $value):mixed
```











### ### Checks if value is boolean



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L67)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L67)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is boolean, false otherwise._
<h2><a name="callable()"># method: callable</a></h2>

```php
public static DataIs::callable(mixed $value):mixed
```











### ### Verify that the contents of a variable can be called as a function



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L83)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L83)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is callable, false otherwise._
<h2><a name="countable()"># method: countable</a></h2>

```php
public static DataIs::countable(mixed $value):mixed
```











### ### Verify that the contents of a variable is a countable value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L99)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L99)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is countable, false otherwise._
<h2><a name="float()"># method: float</a></h2>

```php
public static DataIs::float(mixed $value):mixed
```











### ### Finds whether the type of variable is a float



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L115)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L115)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is float, false otherwise._
<h2><a name="int()"># method: int</a></h2>

```php
public static DataIs::int(mixed $value):mixed
```











### ### Find whether the type of variable is an integer



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L131)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L131)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is integer, false otherwise._
<h2><a name="iterable()"># method: iterable</a></h2>

```php
public static DataIs::iterable(mixed $value):mixed
```











### ### Verify that the contents of a variable is an iterable value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L147)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L147)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is iterable, false otherwise._
<h2><a name="null()"># method: null</a></h2>

```php
public static DataIs::null(mixed $value):mixed
```











### ### Finds whether a variable is null



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L163)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L163)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is null, false otherwise._
<h2><a name="numeric()"># method: numeric</a></h2>

```php
public static DataIs::numeric(mixed $value):mixed
```











### ### Finds whether a variable is a number or a numeric string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L179)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L179)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is numeric, false otherwise._
<h2><a name="object()"># method: object</a></h2>

```php
public static DataIs::object(mixed $value):mixed
```











### ### Finds whether a variable is an object



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L195)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L195)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is object, false otherwise._
<h2><a name="resource()"># method: resource</a></h2>

```php
public static DataIs::resource(mixed $value):mixed
```











### ### Finds whether a variable is a resource



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L211)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L211)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is resource, false otherwise or if resource is closed._
<h2><a name="scalar()"># method: scalar</a></h2>

```php
public static DataIs::scalar(mixed $value):mixed
```











### ### Finds whether a variable is a scalar

_Scalar values include: string, int, float and bool._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L229)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L229)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is scalar, false otherwise._
<h2><a name="string()"># method: string</a></h2>

```php
public static DataIs::string(mixed $value):mixed
```











### ### Find whether the type of variable is a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L245)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L245)**</sub>
#### Parameters

* mixed **$value** - _Value to check._
#### Returns

* mixed - _True if value is string, false otherwise._