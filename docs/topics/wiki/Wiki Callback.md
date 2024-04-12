```php
final class \FireHub\Core\Initializers\Autoload\Callback()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### The autoload function being registered



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Initializers\Autoload\Callback**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L28)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#__invoke()">__invoke</a>|### Invoke autoload function being registered|

<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Callback::__construct(callable|string $path):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L43)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L43)**</sub>
#### Parameters

* callable or string **$path** - _<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path._
#### Returns

* void
<h2><a name="__invoke()"># method: __invoke</a></h2>

```php
public Callback::__invoke(string $class):void
```











### ### Invoke autoload function being registered



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L111)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L111)**</sub>
#### Parameters

* string **$class** - _Fully qualified class name that is being loaded._
#### Throws

* [\Error](./Wiki-Error) - _If a system could not get class components._
#### Returns

* void