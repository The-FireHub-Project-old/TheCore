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


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|readonly private|<a href="#$path">path</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|private|<a href="#classcomponents()">classComponents</a>|### Get class components from class FQN|
|public|<a href="#__invoke()">__invoke</a>|### Invoke autoload function being registered|

<h2><a name="$path"># property: path</a></h2>

```php
readonly private \Closure|string $path
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L43)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L43)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Callback::__construct(callable|non-empty-string $path):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L42)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L42)**</sub>
#### Parameters

* callable or non-empty-string **$path** - _<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path._
#### Returns

* void
<h2><a name="classcomponents()"># method: classComponents</a></h2>

```php
private Callback::classComponents(string $class):array{namespace: string, classname: string}
```











### ### Get class components from class FQN



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L65)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L65)**</sub>
#### Parameters

* string **$class** - _Class FQN to resolve._
#### Throws

* [\Error](./Wiki-Error) - _If a system could not get class components._
#### Returns

* array{namespace: string, classname: string} - _Class components._
<h2><a name="__invoke()"># method: __invoke</a></h2>

```php
public Callback::__invoke(string $class):void
```











### ### Invoke autoload function being registered



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L109)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L109)**</sub>
#### Parameters

* string **$class** - _Fully qualified class name that is being loaded._
#### Throws

* [\Error](./Wiki-Error) - _If a system could not get class components._
#### Returns

* void