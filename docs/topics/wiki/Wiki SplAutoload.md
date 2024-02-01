```php
final class \FireHub\Core\Support\LowLevel\SplAutoload()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### SPL Autoload low-level proxy class



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\SplAutoload**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L32)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#default()">default</a>|### Default autoload implementation|
|public static |<a href="#extensions()">extensions</a>|### Register and return file extensions for default autoload|
|public static |<a href="#register()">register</a>|### Register a callback function as an autoloader|
|public static |<a href="#unregister()">unregister</a>|### Unregister autoload implementation|
|public static |<a href="#functions()">functions</a>|### Get all registered autoload functions|
|public static |<a href="#load()">load</a>|### Try all registered autoload functions to load the requested class|

<h2><a name="default()"># method: default</a></h2>

```php
public static SplAutoload::default(class-string $class, null|string $file_extensions = null):void
```













### ### Default autoload implementation

_This function is intended to be used as a default implementation for [[SplAutoload#register()]].
If nothing else is specified and register method is called without any parameters,
then this function will be used for any later call to autoload._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L54)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L54)**</sub>
#### Parameters

* class-string **$class** - _The name of the class (and namespace) being instantiated._
* null or string **$file_extensions** = null - _[optional] 
By default, it checks all include paths to contain filenames built up by the lowercase class name appended by the
filename extensions .inc and .php._
#### Throws

* [\LogicException](./Wiki-LogicException) - _When the class is not found and there are no other autoloaders registered._
#### Returns

* void
<h2><a name="extensions()"># method: extensions</a></h2>

```php
public static SplAutoload::extensions(null|non-empty-string $file_extensions = null):string
```











> [!NOTE]
            There should not be a space between the defined file extensions.

### ### Register and return file extensions for default autoload

_This function can modify and check the file extensions that the built-in autoload fallback function
[[SplAutoload#default()]] will be using._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L77)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L77)**</sub>
#### Parameters

* null or non-empty-string **$file_extensions** = null - _[optional] 
If null, it simply returns the current list of extensions each separated by comma.
To modify the list of file extensions, invoke the functions with the new list of file extensions to use
in a single string with each extension separated by comma._
#### Returns

* string - _A comma delimited list of default file extensions for default method._
<h2><a name="register()"># method: register</a></h2>

```php
public static SplAutoload::register(null|callable $callback = null, bool $prepend = false):bool
```













### ### Register a callback function as an autoloader

_Register a function with the spl provided autoload queue. If the queue is not yet activated, it will be
activated. If there must be multiple autoload functions, this method allows for this. It effectively creates a
queue of autoload functions, and runs through each of them in the order they are defined._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L106)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L106)**</sub>
#### Parameters

* null or callable **$callback** = null - _[optional] 
<code>callable (string $class):void</code>
The autoload function being registered. If no callback is provided, then the default autoloader
will be used._
* bool **$prepend** = false - _[optional] 
Whether to prepend the autoloader on the stack instead of appending it._
#### Throws

* [\Error](./Wiki-Error) - _If failed to register a callback function as an autoloader._
#### Returns

* bool - _True if autoloader was registered._
<h2><a name="unregister()"># method: unregister</a></h2>

```php
public static SplAutoload::unregister(callable $callback):true
```













### ### Unregister autoload implementation

_Removes a function from the autoloaded queue. If the queue is activated and empty after removing the given
function, then it will be deactivated. When this function results in the queue being deactivated, any autoload
function that previously existed will not be reactivated._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L130)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L130)**</sub>
#### Parameters

* callable **$callback** - _[optional] 
<code>callable (string $class):void</code>
The autoload function that will be unregistered._
#### Throws

* [\Error](./Wiki-Error) - _If failed to unregister autoload implementation._
#### Returns

* true - _True if autoloader was unregistered._
<h2><a name="functions()"># method: functions</a></h2>

```php
public static SplAutoload::functions():array
```













### ### Get all registered autoload functions



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L145)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L145)**</sub>
#### Returns

* array - _<code>array<array-key, mixed></code> An array of all registered autoload functions.
If no function is registered, or autoloaded queue is not activated, then the return value will be an empty array._
<h2><a name="load()"># method: load</a></h2>

```php
public static SplAutoload::load(class-string $class):void
```











> [!NOTE]
            This method can be used to manually search for a class or interface using the registered autoloader
functions.

### ### Try all registered autoload functions to load the requested class



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L164)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L164)**</sub>
#### Parameters

* class-string **$class** - _Fully qualified class name that is being called._
#### Returns

* void