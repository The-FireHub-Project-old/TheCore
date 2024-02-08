```php
enum Type
```











### ### Data type enum

_Data type defines the type of data a variable can store._

<sub>_This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Enum Name:  **\FireHub\Core\Support\Enums\Data\Type**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L23)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php)**</sub>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#t_bool">T_BOOL</a>|### A bool expresses a truth value, it can be either true or false||
|<a href="#t_int">T_INT</a>|### An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}||
|<a href="#t_float">T_FLOAT</a>|### A floating-point number is represented approximately with a fixed number of significant digits||
|<a href="#t_string">T_STRING</a>|### A string is a series of characters, where a character is the same as a byte||
|<a href="#t_array">T_ARRAY</a>|### An ordered map where map is a type that associates values to keys||
|<a href="#t_object">T_OBJECT</a>|### An object is an individual instance of the data structure defined by a class||
|<a href="#t_null">T_NULL</a>|### The special null value represents a variable with no value||
|<a href="#t_resource">T_RESOURCE</a>|### The special resource type is used to store references to some function call or to external PHP resources||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#category()">category</a>|## Gets data type category|

<h2><a name="category()"># method: category</a></h2>

```php
public Type::category():\FireHub\Core\Support\Enums\Data\Category
```











### ## Gets data type category



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L83)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L83)**</sub>
#### Returns

* [\FireHub\Core\Support\Enums\Data\Category](./Wiki-Category) - _Data type category._
<h2><a name="t_bool"># case: T_BOOL</a></h2>

```php
T_BOOL
```





### ### A bool expresses a truth value, it can be either true or false



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L29)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L29)**</sub>
<h2><a name="t_int"># case: T_INT</a></h2>

```php
T_INT
```





### ### An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L35)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L35)**</sub>
<h2><a name="t_float"># case: T_FLOAT</a></h2>

```php
T_FLOAT
```





### ### A floating-point number is represented approximately with a fixed number of significant digits



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L41)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L41)**</sub>
<h2><a name="t_string"># case: T_STRING</a></h2>

```php
T_STRING
```





### ### A string is a series of characters, where a character is the same as a byte



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L47)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L47)**</sub>
<h2><a name="t_array"># case: T_ARRAY</a></h2>

```php
T_ARRAY
```





### ### An ordered map where map is a type that associates values to keys



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L53)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L53)**</sub>
<h2><a name="t_object"># case: T_OBJECT</a></h2>

```php
T_OBJECT
```





### ### An object is an individual instance of the data structure defined by a class



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L59)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L59)**</sub>
<h2><a name="t_null"># case: T_NULL</a></h2>

```php
T_NULL
```





### ### The special null value represents a variable with no value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L65)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L65)**</sub>
<h2><a name="t_resource"># case: T_RESOURCE</a></h2>

```php
T_RESOURCE
```





### ### The special resource type is used to store references to some function call or to external PHP resources



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L71)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L71)**</sub>