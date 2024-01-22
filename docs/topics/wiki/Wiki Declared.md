```php
final class \FireHub\Core\Support\LowLevel\Declared()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Declared low-level proxy class

_Class allows you to get information about declared classes and objects._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Declared**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L31)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#classes()">classes</a>|### Gets the declared classes|
|public static |<a href="#interfaces()">interfaces</a>|### Gets the declared interfaces|
|public static |<a href="#traits()">traits</a>|### Gets the declared traits|
|public static |<a href="#constants()">constants</a>|### Gets the declared constants|
|public static |<a href="#functions()">functions</a>|### Gets the declared functions|

<h2><a name="classes()"># method: classes</a></h2>

```php
public static Declared::classes():array
```











> [!NOTE]
            Note that depending on what extensions you have compiled or loaded into PHP, additional classes could be
present. This means that you will not be able to define your own classes using these names.

### ### Gets the declared classes



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L44)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L44)**</sub>
#### Returns

* array - _<code>array<class-string></code> Array of the names for the declared classes in
the current script._
<h2><a name="interfaces()"># method: interfaces</a></h2>

```php
public static Declared::interfaces():array
```













### ### Gets the declared interfaces



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L58)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L58)**</sub>
#### Returns

* array - _<code>array<class-string></code> Array of the names for the declared interfaces in
the current script._
<h2><a name="traits()"># method: traits</a></h2>

```php
public static Declared::traits():array
```













### ### Gets the declared traits



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L72)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L72)**</sub>
#### Returns

* array - _<code>array<class-string></code> Array of the names for the declared traits in
the current script._
<h2><a name="constants()"># method: constants</a></h2>

```php
public static Declared::constants(bool $categorize = false):array
```













### ### Gets the declared constants

_Returns the names and values of all the constants currently defined. This includes those created by extensions
as well as those created with the define() function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L94)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L94)**</sub>
#### Parameters

* bool **$categorize** = false - _[optional] 
Causing this function to return a multidimensional array with categories in the keys of the first dimension
and constants and their values in the second dimension._
#### Returns

* array - _<code>($categorize is true ? array<string, array<non-empty-string, mixed>> : array<non-empty-string, mixed>)</code>
array of constant name => constant value array, optionally grouped by extension name registering the constant._
<h2><a name="functions()"># method: functions</a></h2>

```php
public static Declared::functions(bool $exclude_disabled = true):array
```













### ### Gets the declared functions



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L113)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L113)**</sub>
#### Parameters

* bool **$exclude_disabled** = true - _[optional] 
Whether disabled functions should be excluded from the return value._
#### Returns

* array - _<code>array{internal: non-empty-array<int, callable-string>, user: array<int, callable-string>}</code>
A multidimensional array containing a list of all defined functions, both built-in (internal) and user-defined.
The internal functions will be accessible via $arr["internal"], and the user defined ones using $arr["user"]._