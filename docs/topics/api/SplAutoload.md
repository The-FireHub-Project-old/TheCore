<title># SplAutoload</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\SplAutoload()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### SPL Autoload low-level proxy class



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\SplAutoload
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L32">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#default()">default</a>|### Default autoload implementation|
|public static |<a href="#extensions()">extensions</a>|### Register and return file extensions for default autoload|
|public static |<a href="#register()">register</a>|### Register a callback function as an autoloader|
|public static |<a href="#unregister()">unregister</a>|### Unregister autoload implementation|
|public static |<a href="#functions()">functions</a>|### Get all registered autoload functions|
|public static |<a href="#load()">load</a>|### Try all registered autoload functions to load the requested class|

## method: default {id="default()"}

<code-block lang="php">
    <![CDATA[public static SplAutoload::default(class-string $class, null|string $file_extensions = null):void]]>
</code-block>













### ### Default autoload implementation

<p><format style="italic">This function is intended to be used as a default implementation for [[SplAutoload#register()]].
If nothing else is specified and register method is called without any parameters,
then this function will be used for any later call to autoload.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L54">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>class-string <format style="bold">$class</format> - <format style="italic">
The name of the class (and namespace) being instantiated.
</format></li><li>null or string <format style="bold">$file_extensions</format> = null - <format style="italic">[optional] 
By default, it checks all include paths to contain filenames built up by the lowercase class name appended by the
filename extensions .inc and .php.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="LogicException.md">\LogicException</a> - <format style="italic">When the class is not found and there are no other autoloaders registered.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: extensions {id="extensions()"}

<code-block lang="php">
    <![CDATA[public static SplAutoload::extensions(null|non-empty-string $file_extensions = null):string]]>
</code-block>













### ### Register and return file extensions for default autoload

<p><format style="italic">This function can modify and check the file extensions that the built-in autoload fallback function
[[SplAutoload#default()]] will be using.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L77">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or non-empty-string <format style="bold">$file_extensions</format> = null - <format style="italic">[optional] 
If null, it simply returns the current list of extensions each separated by comma.
To modify the list of file extensions, invoke the functions with the new list of file extensions to use
in a single string with each extension separated by comma.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">A comma delimited list of default file extensions for default method.</format></li></list>
    </def>
</deflist>
## method: register {id="register()"}

<code-block lang="php">
    <![CDATA[public static SplAutoload::register(null|callable $callback = null, bool $prepend = false):bool]]>
</code-block>













### ### Register a callback function as an autoloader

<p><format style="italic">Register a function with the spl provided autoload queue. If the queue is not yet activated, it will be
activated. If there must be multiple autoload functions, this method allows for this. It effectively creates a
queue of autoload functions, and runs through each of them in the order they are defined.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L106">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L106">
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
        <list><li><a href="Autoload.md#__construct()">\FireHub\Core\Initializers\Autoload::__construct()</a>  - <format style="italic">To register a callback function as an autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
<code>callable (string $class):void</code>
The autoload function being registered. If no callback is provided, then the default autoloader
will be used.
</format></li><li>bool <format style="bold">$prepend</format> = false - <format style="italic">[optional] 
Whether to prepend the autoloader on the stack instead of appending it.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to register a callback function as an autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if autoloader was registered.</format></li></list>
    </def>
</deflist>
## method: unregister {id="unregister()"}

<code-block lang="php">
    <![CDATA[public static SplAutoload::unregister(callable $callback):true]]>
</code-block>













### ### Unregister autoload implementation

<p><format style="italic">Removes a function from the autoloaded queue. If the queue is activated and empty after removing the given
function, then it will be deactivated. When this function results in the queue being deactivated, any autoload
function that previously existed will not be reactivated.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L130">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L130">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">[optional] 
<code>callable (string $class):void</code>
The autoload function that will be unregistered.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to unregister autoload implementation.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true - <format style="italic">True if autoloader was unregistered.</format></li></list>
    </def>
</deflist>
## method: functions {id="functions()"}

<code-block lang="php">
    <![CDATA[public static SplAutoload::functions():array]]>
</code-block>













### ### Get all registered autoload functions



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L145">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L145">
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
        <list><li>array - <format style="italic"><code><![CDATA[ array<array-key, mixed> ]]></code> An array of all registered autoload functions.
If no function is registered, or autoloaded queue is not activated, then the return value will be an empty array.</format></li></list>
    </def>
</deflist>
## method: load {id="load()"}

<code-block lang="php">
    <![CDATA[public static SplAutoload::load(class-string $class):void]]>
</code-block>













### ### Try all registered autoload functions to load the requested class



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L164">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.SplAutoload.php#L164">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>class-string <format style="bold">$class</format> - <format style="italic">
Fully qualified class name that is being called.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>