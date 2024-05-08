```php
final class \FireHub\Core\Support\LowLevel\Data()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Data low-level proxy class

_Class contains variable handling methods._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Data**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L33)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#gettype()">getType</a>|### Gets data type|
|public static |<a href="#settype()">setType</a>|### Sets data type|
|public static |<a href="#serializevalue()">serializeValue</a>|### Generates storable representation of data|
|public static |<a href="#unserializevalue()">unserializeValue</a>|### Creates a PHP value from a stored representation|

<h2><a name="gettype()"># method: getType</a></h2>

```php
public static Data::getType(mixed $value):\FireHub\Core\Support\Enums\Data\Type
```











### ### Gets data type



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L56)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L56)**</sub>
#### Parameters

* mixed **$value** - _The variable being type checked._
#### Throws

* [\Error](./Wiki-Error) - _If a type of value is unknown._
#### Returns

* [\FireHub\Core\Support\Enums\Data\Type](./Wiki-Type) - _Type of data._
<h2><a name="settype()"># method: setType</a></h2>

```php
public static Data::setType(mixed $value, \FireHub\Core\Support\Enums\Data\Type $type):mixed
```











### ### Sets data type



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L116)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L116)**</sub>
#### Parameters

* mixed **$value** - _The variable being converted to type._
* [\FireHub\Core\Support\Enums\Data\Type](./Wiki-Type) **$type** - _Type to convert variable to._
#### Throws

* [\Error](./Wiki-Error) - _If a type cannot be set to resource or failed to set a type for value._
#### Returns

* mixed - _Converted value._
<h2><a name="serializevalue()"># method: serializeValue</a></h2>

```php
public static Data::serializeValue(scalar|array<array-key,mixed>|object|null $value):string
```











### ### Generates storable representation of data

_Generates a storable representation of a value.
This is useful for storing or passing PHP values around without losing their type and structure.
To make the serialized string into a PHP value again, use unserialize()._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L173)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L173)**</sub>
#### Parameters

* scalar or array&lt;array-key,mixed&gt; or object or null **$value** - _The value to be serialized._
#### Throws

* [\Error](./Wiki-Error) - _If try to serialize anonymous class, function or resource._
#### Returns

* string - _String containing a byte-stream representation of value that can be stored anywhere._
<h2><a name="unserializevalue()"># method: unserializeValue</a></h2>

```php
public static Data::unserializeValue(non-empty-string $data, bool|class-string[] $allowed_classes = false, int $max_depth = 4096):mixed
```











### ### Creates a PHP value from a stored representation



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L207)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L207)**</sub>
#### Parameters

* non-empty-string **$data** - _The serialized string._
* bool or class-string[] **$allowed_classes** = false - _[optional] 
Either an array of class names which should be accepted, false to accept no classes,
or true to accept all classes._
* int **$max_depth** = 4096 - _[optional] 
The maximum depth of structures permitted during unserialization, and is intended to prevent stack overflows._
#### Throws

* [\Error](./Wiki-Error) - _$data is already false already or $data is NULL, or could not unserialize data._
#### Returns

* mixed - _The converted value is returned._