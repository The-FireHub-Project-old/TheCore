```php
final class \FireHub\Core\Support\LowLevel\Func()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Function low-level proxy class

_Class allows you to obtain information about functions._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Func**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L31)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#isfunction()">isFunction</a>|### Checks if function name exists|
|public static |<a href="#call()">call</a>|### Call the callback|
|public static |<a href="#registershutdown()">registerShutdown</a>|### Register a function for execution on shutdown|
|public static |<a href="#registertick()">registerTick</a>|### Register a function for execution on each tick|
|public static |<a href="#unregistertick()">unregisterTick</a>|### De-register a function for execution on each tick|

<h2><a name="isfunction()"># method: isFunction</a></h2>

```php
public static Func::isFunction(non-empty-string $name):bool
```











### ### Checks if function name exists

_Checks the list of defined functions, both built-in (internal) and user-defined, for function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L49)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L49)**</sub>
#### Parameters

* non-empty-string **$name** - _The function name._
#### Returns

* bool - _True if the interface exists, false otherwise._
<h2><a name="call()"># method: call</a></h2>

```php
public static Func::call(callable $callback, mixed ...$arguments):\FireHub\Core\Support\LowLevel\TReturn
```











### ### Call the callback

_Calls the callback given by the first parameter and passes the remaining parameters as arguments._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L76)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L76)**</sub>
#### Templates

* TReturn
#### Parameters

* callable **$callback** - _<code>callable():TReturn</code>
The callable to be called._
* variadic mixed **$arguments** - _Zero or more parameters to be passed to the callback._
#### Returns

* [\FireHub\Core\Support\LowLevel\TReturn](./Wiki-TReturn) - _The return value of the callback._
<h2><a name="registershutdown()"># method: registerShutdown</a></h2>

```php
public static Func::registerShutdown(callable $callback, mixed ...$arguments):void
```











### ### Register a function for execution on shutdown

_Registers a callback to be executed after script execution finishes or exit() is called. Multiple calls to
[[Func#registerShutdown()]] can be made, and each will be called in the same order as they were registered.
If you call exit() within one registered shutdown function, processing will stop completely and no other
registered shutdown functions will be called. Shutdown functions may also call [[Func#registerShutdown()]]
themselves to add a shutdown function to the end of the queue._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L112)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L112)**</sub>
#### Parameters

* callable **$callback** - _The shutdown callback to register.
The shutdown callbacks are executed as part of the request, so it's possible to send output from them and
access output buffers._
* variadic mixed **$arguments** - _It is possible to pass parameters to the shutdown function by passing additional parameters._
#### Returns

* void
<h2><a name="registertick()"># method: registerTick</a></h2>

```php
public static Func::registerTick(callable $callback, mixed ...$arguments):bool
```











### ### Register a function for execution on each tick

_Registers the given callback to be executed when a tick is called._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L137)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L137)**</sub>
#### Parameters

* callable **$callback** - _The function to register._
* variadic mixed **$arguments** - _Parameters for callback function._
#### Throws

* [\Error](./Wiki-Error) - _If failed to register tick function._
#### Returns

* bool - _True on success._
<h2><a name="unregistertick()"># method: unregisterTick</a></h2>

```php
public static Func::unregisterTick(callable $callback):void
```











### ### De-register a function for execution on each tick

_De-registers the function, so it is no longer executed when a tick is called._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L156)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L156)**</sub>
#### Parameters

* callable **$callback** - _The function to deregister._
#### Returns

* void