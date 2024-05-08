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


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|private|<a href="#$list">list</a>|### List of loaders|[]|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#get()">get</a>|### Get loader callback|
|public|<a href="#add()">add</a>|### Adds a new loader|
|public|<a href="#remove()">remove</a>|### Removes loader|
|public|<a href="#list()">list</a>|### Get list of autoloader implementations|

<h2><a name="$list"># property: list</a></h2>

```php
private array<non-empty-string,callable> $list = []
```









### ### List of loaders



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L34)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L34)**</sub>
<h2><a name="get()"># method: get</a></h2>

```php
public Loaders::get(non-empty-string $name):callable
```











### ### Get loader callback



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L48)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L48)**</sub>
#### Parameters

* non-empty-string **$name** - _Loader name._
#### Throws

* [\Error](./Wiki-Error) - _If loader doesn&#039;t exist._
#### Returns

* callable - _Loader callback._
<h2><a name="add()"># method: add</a></h2>

```php
public Loaders::add(non-empty-string $name, callable $callback):true
```











### ### Adds a new loader



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L73)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L73)**</sub>
#### Parameters

* non-empty-string **$name** - _Loader name._
* callable **$callback** - _<code>callable(string):void</code>
The autoload function being registered._
#### Throws

* [\Error](./Wiki-Error) - _If loader is empty, or loader already exists._
#### Returns

* true - _Always true._
<h2><a name="remove()"># method: remove</a></h2>

```php
public Loaders::remove(non-empty-string $name):true
```











### ### Removes loader



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L98)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L98)**</sub>
#### Parameters

* non-empty-string **$name** - _Loader name._
#### Throws

* [\Error](./Wiki-Error) - _If loader doesn&#039;t exist._
#### Returns

* true - _Always true._
<h2><a name="list()"># method: list</a></h2>

```php
public Loaders::list():array<non-empty-string,callable>
```











### ### Get list of autoloader implementations



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L116)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L116)**</sub>
#### Returns

* array&lt;non-empty-string,callable&gt; - _<code>array<non-empty-string, callable(string):void></code> List of autoloader
implementations._