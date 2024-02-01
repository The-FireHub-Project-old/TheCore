```php
final class \FireHub\Core\Initializers\Autoload\Loaders()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### List of active loader implementations for autoloader



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Initializers\Autoload\Loaders**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L26)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#get()">get</a>|### Get loader callback|
|public|<a href="#add()">add</a>|### Adds a new loader|
|public|<a href="#remove()">remove</a>|### Removes loader|
|public|<a href="#list()">list</a>|### Get list of autoloader implementations|

<h2><a name="get()"># method: get</a></h2>

```php
public Loaders::get(string $name):callable
```













### ### Get loader callback



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L52)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L52)**</sub>
#### Parameters

* string **$name** - _<code>non-empty-string</code>
Loader name._
#### Throws

* [\Error](./Wiki-Error) - _If loader doesn&#039;t exist._
#### Returns

* callable - _<code>callable(string):void</code> Loader callback._
<h2><a name="add()"># method: add</a></h2>

```php
public Loaders::add(string $name, callable $callback):true
```













### ### Adds a new loader



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L79)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L79)**</sub>
#### Parameters

* string **$name** - _<code>non-empty-string</code>
Loader name._
* callable **$callback** - _<code>callable(string):void</code>
The autoload function being registered._
#### Throws

* [\Error](./Wiki-Error) - _If loader is empty, or loader already exists._
#### Returns

* true - _Always true._
<h2><a name="remove()"># method: remove</a></h2>

```php
public Loaders::remove(string $name):true
```













### ### Removes loader



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L106)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L106)**</sub>
#### Parameters

* string **$name** - _<code>non-empty-string</code>
Loader name._
#### Throws

* [\Error](./Wiki-Error) - _If loader doesn&#039;t exist._
#### Returns

* true - _Always true._
<h2><a name="list()"># method: list</a></h2>

```php
public Loaders::list():array
```













### ### Get list of autoloader implementations



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L125)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L125)**</sub>
#### Returns

* array - _<code>array<non-empty-string, callable(string):void></code> List of autoloader
implementations._