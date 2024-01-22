```php
final class \FireHub\Core\Support\LowLevel\Constant()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Constant low-level class proxy class

_Class allows you to obtain information about constants._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Constant**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L29)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#define()">define</a>|### Defines a named constant|
|public static |<a href="#defined()">defined</a>|### Checks whether a given named constant exists|
|public static |<a href="#value()">value</a>|### Returns the value of a constant|

<h2><a name="define()"># method: define</a></h2>

```php
public static Constant::define(string $name, null|array|bool|float|int|string $value):bool
```













### ### Defines a named constant

_Defines a named constant at runtime._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L50)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L50)**</sub>
#### Parameters

* string **$name** - _<code>non-empty-string</code>
The name of the constant._
* null or array or bool or float or int or string **$value** - _<code>null|array<array-key, mixed>|scalar</code>
The value of the constant._
#### Returns

* bool - _True on success or false on failure._
<h2><a name="defined()"># method: defined</a></h2>

```php
public static Constant::defined(string $name):bool
```











> [!NOTE]
            This function works also with class constants and enum cases.

### ### Checks whether a given named constant exists

_This function works also with class constants and enum cases._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L72)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L72)**</sub>
#### Parameters

* string **$name** - _<code>non-empty-string</code>
The constant name._
#### Returns

* bool - _True if the named constant given by name parameter has been defined, false otherwise._
<h2><a name="value()"># method: value</a></h2>

```php
public static Constant::value(string $name):mixed
```











> [!NOTE]
            This function works also with class constants and enum cases.

### ### Returns the value of a constant

_Method [[Constant#value()]] is useful if you need to retrieve the value of a constant, but do not know its name.
I.e., it is stored in a variable or returned by a function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L97)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L97)**</sub>
#### Parameters

* string **$name** - _<code>non-empty-string</code>
The constant name._
#### Throws

* [\Error](./Wiki-Error) - _If the constant is not defined._
#### Returns

* mixed - _The value of the constant._