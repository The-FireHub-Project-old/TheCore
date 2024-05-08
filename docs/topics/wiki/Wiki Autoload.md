```php
final class \FireHub\Core\Initializers\Autoload()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Automatically loads classes and interfaces

_Autoload registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they
are currently not defined. By registering autoloaders, FireHub is given a last chance to load the class or
interface before it fails with an error. Any class-like construct may be autoloaded the same way. That includes
classes, interfaces, traits, and enumerations._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Initializers\Autoload**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L34)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|privatestatic |<a href="#$loaders">loaders</a>|### List of active loader implementations for autoloader||
|readonly private|<a href="#$alias">alias</a>|||
|readonly private|<a href="#$callback">callback</a>|||
|readonly private|<a href="#$prepend">prepend</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|private|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#include()">include</a>|### Manually include a list of classes|
|public static |<a href="#append()">append</a>|### Register new autoload implementation at the end of the queue|
|public static |<a href="#register()">register</a>|### This method is alias for [[Autoload#append()]]|
|public static |<a href="#prepend()">prepend</a>|### Register new autoload implementation at the beginning of the queue|
|public static |<a href="#unregister()">unregister</a>|### Unregister autoload implementation|
|public static |<a href="#implementations()">implementations</a>|### Get all registered autoloader implementations|
|public static |<a href="#load()">load</a>|### Try all registered autoload functions to load the requested lass|
|private static |<a href="#callback()">callback</a>|### Invoke autoload function|

<h2><a name="$loaders"># property: loaders</a></h2>

```php
private static \FireHub\Core\Initializers\Autoload\Loaders $loaders
```









### ### List of active loader implementations for autoloader



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L42)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L42)**</sub>
<h2><a name="$alias"># property: alias</a></h2>

```php
readonly private string $alias
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L68)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L68)**</sub>
<h2><a name="$callback"># property: callback</a></h2>

```php
readonly private \FireHub\Core\Initializers\Autoload\Callback $callback
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L69)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L69)**</sub>
<h2><a name="$prepend"># property: prepend</a></h2>

```php
readonly private bool $prepend
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L70)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L70)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
private Autoload::__construct(non-empty-string $alias, \FireHub\Core\Initializers\Autoload\Callback $callback, bool $prepend):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L67)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L67)**</sub>
#### Parameters

* non-empty-string **$alias** - _$alias 
Autoloader implementation name._
* [\FireHub\Core\Initializers\Autoload\Callback](./Wiki-Callback) **$callback** - _The autoload function being registered._
* bool **$prepend** - _If true, autoloader will be prepended queue instead of appending it._
#### Throws

* [\Error](./Wiki-Error) - _If failed to register autoloader._
#### Returns

* void
<h2><a name="include()"># method: include</a></h2>

```php
public static Autoload::include(class-string[] $classes, callable $callback):void
```











### ### Manually include a list of classes

_This list can be filled with classes that need to be loaded manually. This is useful if autoload itself has
classes that need to be loader fist._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L119)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L119)**</sub>
#### Parameters

* class-string[] **$classes** - _List of classes to be preloaders. These preloaders will be called in order as they are in the list._
* callable **$callback** - _<code>callable(string $class):string</code>
Get a class path for including._
#### Throws

* [\Error](./Wiki-Error) - _If a system cannot preload class._
#### Returns

* void
#### Examples
```php
use FireHub\Core\Initializers\Autoload;

Autoload::load([
 \MyNamespace\MyClass::class,
 \MyNamespace\MyOtherClass::class
]);
```

<h2><a name="append()"># method: append</a></h2>

```php
public static Autoload::append(non-empty-string $alias, callable|non-empty-string $path):self
```











### ### Register new autoload implementation at the end of the queue



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L175)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L175)**</sub>
#### Parameters

* non-empty-string **$alias** - _Autoloader implementation name._
* callable or non-empty-string **$path** - _<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path._
#### Throws

* [\Error](./Wiki-Error) - _If failed to register autoloader._
#### Returns

* self - _Autoload implementation._
#### Examples
Registering new autoload implementation.

First parameter is autoloaded name that can be later used to unregistered same autoloader, while the second
parameter should be a root path where all your classes are stored.

```php
use FireHub\Core\Initializers\Autoload;

Autoload::append('MyApp', 'path_to_my_app/');
```
Registering new autoload implementation with function.

Alternatively, you can use callback instead of writing a direct root path. Callback should still return a root
path for your classes, but this way you can manipulate a returning result like in example bellow.

note: you can return false if you want to filter the same results.

```php
use FireHub\Core\Initializers\Autoload;

Autoload::append('MyApp', function (string $namespace, string $classname):string|false {
 if ($classname === 'SomeClassName') {
     return false;
 }

\\ return $namespace.'\\'.$classname.'.class.php';
});
```

<h2><a name="register()"># method: register</a></h2>

```php
public static Autoload::register(non-empty-string $alias, callable|non-empty-string $path):self
```











### ### This method is alias for [[Autoload#append()]]



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L202)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L202)**</sub>
#### Parameters

* non-empty-string **$alias** - _Autoloader implementation name._
* callable or non-empty-string **$path** - _<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path._
#### Throws

* [\Error](./Wiki-Error) - _If failed to register autoloader._
#### Returns

* self - _Autoload implementation._
<h2><a name="prepend()"># method: prepend</a></h2>

```php
public static Autoload::prepend(non-empty-string $alias, callable|non-empty-string $path):self
```











### ### Register new autoload implementation at the beginning of the queue



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L234)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L234)**</sub>
#### Parameters

* non-empty-string **$alias** - _Autoloader implementation name._
* callable or non-empty-string **$path** - _<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path._
#### Throws

* [\Error](./Wiki-Error) - _If failed to register autoloader._
#### Returns

* self - _Autoload implementation._
#### Examples
```php
use FireHub\Core\Initializers\Autoload;

Autoload::prepend('MyApp', 'path_to_my_app/');
```

<h2><a name="unregister()"># method: unregister</a></h2>

```php
public static Autoload::unregister(non-empty-string $alias):true
```











### ### Unregister autoload implementation

_Removes a function from the autoloaded queue. If the queue is activated and empty after removing the given
function, then it will be deactivated. When this function results in the queue being deactivated, any autoload
function that previously existed will not be reactivated._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L267)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L267)**</sub>
#### Parameters

* non-empty-string **$alias** - _Autoloader implementation name._
#### Throws

* [\Error](./Wiki-Error) - _If failed to unregister the autoloader._
#### Returns

* true - _Always true._
#### Examples
```php
use FireHub\Core\Initializers\Autoload;

Autoload::unregister('MyApp');
```

<h2><a name="implementations()"># method: implementations</a></h2>

```php
public static Autoload::implementations():\FireHub\Core\Initializers\Autoload\Loaders
```











### ### Get all registered autoloader implementations



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L300)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L300)**</sub>
#### Returns

* [\FireHub\Core\Initializers\Autoload\Loaders](./Wiki-Loaders) - _List of autoloader implementations._
#### Examples
```php
use FireHub\Core\Initializers\Autoload;

Autoload::implementations();

// ['MyApp' => object, 'OtherImplementations' => object]
```

<h2><a name="load()"># method: load</a></h2>

```php
public static Autoload::load(class-string $class):void
```











### ### Try all registered autoload functions to load the requested lass



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L326)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L326)**</sub>
#### Parameters

* class-string **$class** - _Fully qualified class name that is being called._
#### Returns

* void
#### Examples
```php
use FireHub\Core\Initializers\Autoload;

Autoload::load('\MyApp\MyClass');
```

<h2><a name="callback()"># method: callback</a></h2>

```php
private static Autoload::callback(callable|non-empty-string $path):\FireHub\Core\Initializers\Autoload\Callback
```











### ### Invoke autoload function



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L346)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L346)**</sub>
#### Parameters

* callable or non-empty-string **$path** - _<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path._
#### Returns

* [\FireHub\Core\Initializers\Autoload\Callback](./Wiki-Callback) - _New autoload function._