<title># Autoload</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Initializers\Autoload()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Automatically loads classes and interfaces

<p><format style="italic">Autoload registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they
are currently not defined. By registering autoloaders, FireHub is given a last chance to load the class or
interface before it fails with an error. Any class-like construct may be autoloaded the same way. That includes
classes, interfaces, traits, and enumerations.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Initializers\Autoload
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L34">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


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

## property: loaders {id="$loaders"}

<code-block lang="php">
    <![CDATA[private static \FireHub\Core\Initializers\Autoload\Loaders $loaders]]>
</code-block>











### ### List of active loader implementations for autoloader



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L42">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L42">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## property: alias {id="$alias"}

<code-block lang="php">
    <![CDATA[readonly private string $alias]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L70">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L70">
                    View blame
                </a>
            </def></deflist>
## property: callback {id="$callback"}

<code-block lang="php">
    <![CDATA[readonly private \FireHub\Core\Initializers\Autoload\Callback $callback]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L71">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L71">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This property is used by:">
        <list><li><a href="Autoload.md#append()">\FireHub\Core\Initializers\Autoload::append()</a>  - <format style="italic">To invoke autoload function being registered.</format></li></list>
    </def>
</deflist>
## property: prepend {id="$prepend"}

<code-block lang="php">
    <![CDATA[readonly private bool $prepend]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L72">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L72">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[private Autoload::__construct(string $alias, \FireHub\Core\Initializers\Autoload\Callback $callback, bool $prepend):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L69">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Callback.md">\FireHub\Core\Initializers\Autoload\Callback</a>  - <format style="italic">As autoload function being registered.</format></li><li><a href="SplAutoload.md#register()">\FireHub\Core\Support\LowLevel\SplAutoload::register()</a>  - <format style="italic">To register a callback function as an autoloader.</format></li><li><a href="Loaders.md#add()">\FireHub\Core\Initializers\Autoload\Loaders::add()</a>  - <format style="italic">To add new callback function as loader with alias.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$alias</format> - <format style="italic">
<code>non-empty-string</code>
Autoloader implementation name.
</format></li><li><a href="Callback.md">\FireHub\Core\Initializers\Autoload\Callback</a> <format style="bold">$callback</format> - <format style="italic">
The autoload function being registered.
</format></li><li>bool <format style="bold">$prepend</format> - <format style="italic">
If true, autoloader will be prepended queue instead of appending it.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to register autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: include {id="include()"}

<code-block lang="php">
    <![CDATA[public static Autoload::include(array $classes, callable $callback):void]]>
</code-block>













### ### Manually include a list of classes

<p><format style="italic">This list can be filled with classes that need to be loaded manually. This is useful if autoload itself has
classes that need to be loader fist.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L123">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L123">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="FireHub.md#preload()">\FireHub\Core\FireHub::preload()</a>  - <format style="italic">To manually include a list of classes.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$classes</format> - <format style="italic">
<code>class-string[]</code>
List of classes to be preloaders. These preloaders will be called in order as they are in the list.
</format></li><li>callable <format style="bold">$callback</format> - <format style="italic">
<code>callable(string $class):string</code>
Get a class path for including.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system cannot preload class.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Initializers\Autoload;

Autoload::load([
 \MyNamespace\MyClass::class,
 \MyNamespace\MyOtherClass::class
]);
```

## method: append {id="append()"}

<code-block lang="php">
    <![CDATA[public static Autoload::append(string $alias, callable|string $path):self]]>
</code-block>













### ### Register new autoload implementation at the end of the queue



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L182">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L182">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Autoload.md#$callback">\FireHub\Core\Initializers\Autoload::$callback</a>  - <format style="italic">To invoke autoload function being registered.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Autoload.md#register()">\FireHub\Core\Initializers\Autoload::register()</a>  - <format style="italic">To register new autoload implementation at the end of
the queue.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$alias</format> - <format style="italic">
<code>non-empty-string</code>
Autoloader implementation name.
</format></li><li>callable or string <format style="bold">$path</format> - <format style="italic">
<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to register autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>self - <format style="italic">Autoload implementation.</format></li></list>
    </def>
</deflist>
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

## method: register {id="register()"}

<code-block lang="php">
    <![CDATA[public static Autoload::register(string $alias, callable|string $path):self]]>
</code-block>













### ### This method is alias for [[Autoload#append()]]



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L212">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L212">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Autoload.md#append()">\FireHub\Core\Initializers\Autoload::append()</a>  - <format style="italic">To register new autoload implementation at the end of
the queue.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$alias</format> - <format style="italic">
<code>non-empty-string</code>
Autoloader implementation name.
</format></li><li>callable or string <format style="bold">$path</format> - <format style="italic">
<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to register autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>self - <format style="italic">Autoload implementation.</format></li></list>
    </def>
</deflist>
## method: prepend {id="prepend()"}

<code-block lang="php">
    <![CDATA[public static Autoload::prepend(string $alias, callable|string $path):self]]>
</code-block>













### ### Register new autoload implementation at the beginning of the queue



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L247">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L247">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Autoload.md#$callback">\FireHub\Core\Initializers\Autoload::$callback</a>  - <format style="italic">To invoke autoload function being registered.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$alias</format> - <format style="italic">
<code>non-empty-string</code>
Autoloader implementation name.
</format></li><li>callable or string <format style="bold">$path</format> - <format style="italic">
<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to register autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>self - <format style="italic">Autoload implementation.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Initializers\Autoload;

Autoload::prepend('MyApp', 'path_to_my_app/');
```

## method: unregister {id="unregister()"}

<code-block lang="php">
    <![CDATA[public static Autoload::unregister(string $alias):true]]>
</code-block>













### ### Unregister autoload implementation

<p><format style="italic">Removes a function from the autoloaded queue. If the queue is activated and empty after removing the given
function, then it will be deactivated. When this function results in the queue being deactivated, any autoload
function that previously existed will not be reactivated.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L282">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L282">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="SPLAutoload.md#unregister()">\FireHub\Core\Support\LowLevel\SPLAutoload::unregister()</a>  - <format style="italic">To unregister autoload implementation.</format></li><li><a href="Loaders.md#get()">\FireHub\Core\Initializers\Autoload\Loaders::get()</a>  - <format style="italic">To get loader callback.</format></li><li><a href="Loaders.md#remove()">\FireHub\Core\Initializers\Autoload\Loaders::remove()</a>  - <format style="italic">To remove unregistered autoload implementation.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$alias</format> - <format style="italic">
<code>non-empty-string</code>
Autoloader implementation name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to unregister the autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true - <format style="italic">Always true.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Initializers\Autoload;

Autoload::unregister('MyApp');
```

## method: implementations {id="implementations()"}

<code-block lang="php">
    <![CDATA[public static Autoload::implementations():\FireHub\Core\Initializers\Autoload\Loaders]]>
</code-block>













### ### Get all registered autoloader implementations



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L315">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L315">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Loaders.md">\FireHub\Core\Initializers\Autoload\Loaders</a> - <format style="italic">List of autoloader implementations.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Initializers\Autoload;

Autoload::implementations();

// ['MyApp' => object, 'OtherImplementations' => object]
```

## method: load {id="load()"}

<code-block lang="php">
    <![CDATA[public static Autoload::load(string $class):void]]>
</code-block>













### ### Try all registered autoload functions to load the requested lass



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L343">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L343">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="SPLAutoload.md#load()">\FireHub\Core\Support\LowLevel\SPLAutoload::load()</a>  - <format style="italic">To try all registered autoload functions to load
the requested class.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$class</format> - <format style="italic">
<code>class-string</code>
Fully qualified class name that is being called.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Initializers\Autoload;

Autoload::load('\MyApp\MyClass');
```

## method: callback {id="callback()"}

<code-block lang="php">
    <![CDATA[private static Autoload::callback(callable|string $path):\FireHub\Core\Initializers\Autoload\Callback]]>
</code-block>













### ### Invoke autoload function



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L364">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/firehub.Autoload.php#L364">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Callback.md">\FireHub\Core\Initializers\Autoload\Callback</a>  - <format style="italic">As new autoload function.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable or string <format style="bold">$path</format> - <format style="italic">
<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Callback.md">\FireHub\Core\Initializers\Autoload\Callback</a> - <format style="italic">New autoload function.</format></li></list>
    </def>
</deflist>