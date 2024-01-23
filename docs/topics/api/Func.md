<title># Func</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\Func()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Function low-level proxy class

<p><format style="italic">Class allows you to obtain information about functions.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\Func
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L31">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php">
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
|public static |<a href="#isfunction()">isFunction</a>|### Checks if function name exists|
|public static |<a href="#call()">call</a>|### Call the callback|
|public static |<a href="#registershutdown()">registerShutdown</a>|### Register a function for execution on shutdown|
|public static |<a href="#registertick()">registerTick</a>|### Register a function for execution on each tick|
|public static |<a href="#unregistertick()">unregisterTick</a>|### De-register a function for execution on each tick|

## method: isFunction {id="isfunction()"}

<code-block lang="php">
    <![CDATA[public static Func::isFunction(string $name):bool]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>This function will return false for constructs, such as include_once and echo.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>A function name may exist even if the function itself is unusable due to configuration or compiling
options.</p>
            </note>

### ### Checks if function name exists

<p><format style="italic">Checks the list of defined functions, both built-in (internal) and user-defined, for function.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L50">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L50">
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
        <list><li>string <format style="bold">$name</format> - <format style="italic">
The function name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the interface exists, false otherwise.</format></li></list>
    </def>
</deflist>
## method: call {id="call()"}

<code-block lang="php">
    <![CDATA[public static Func::call(callable $callback, mixed ...$arguments):mixed]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>Callbacks registered with this method will not be called if there is an uncaught exception thrown
in a previous callback.</p>
            </note>

### ### Call the callback

<p><format style="italic">Calls the callback given by the first parameter and passes the remaining parameters as arguments.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L78">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L78">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has templates:">
        <list><li>TReturn</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
<code>callable():TReturn</code>
The callable to be called.
</format></li><li>variadic mixed <format style="bold">$arguments</format> - <format style="italic">
Zero or more parameters to be passed to the callback.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic"><code>TReturn</code> The return value of the callback.</format></li></list>
    </def>
</deflist>
## method: registerShutdown {id="registershutdown()"}

<code-block lang="php">
    <![CDATA[public static Func::registerShutdown(callable $callback, mixed ...$arguments):void]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>The working directory of the script can change inside the shutdown function under some web servers,
e.g. Apache.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>Shutdown functions will not be executed if the process is killed with a SIGTERM or SIGKILL signal. While
you cannot intercept a SIGKILL, you can use pcntl_signal() to install a handler for a SIGTERM which uses exit()
to end cleanly.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>Shutdown functions run separately from the time tracked by max_execution_time. That means even if a
process is terminated for running too long, shutdown functions will still be called. Additionally, if the
max_execution_time runs out while a shutdown function is running, it will not be terminated.</p>
            </note>

### ### Register a function for execution on shutdown

<p><format style="italic">Registers a callback to be executed after script execution finishes or exit() is called. Multiple calls to
[[Func#registerShutdown()]] can be made, and each will be called in the same order as they were registered.
If you call exit() within one registered shutdown function, processing will stop completely and no other
registered shutdown functions will be called. Shutdown functions may also call [[Func#registerShutdown()]]
themselves to add a shutdown function to the end of the queue.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L114">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L114">
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
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
The shutdown callback to register.
The shutdown callbacks are executed as part of the request, so it's possible to send output from them and
access output buffers.
</format></li><li>variadic mixed <format style="bold">$arguments</format> - <format style="italic">
It is possible to pass parameters to the shutdown function by passing additional parameters.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: registerTick {id="registertick()"}

<code-block lang="php">
    <![CDATA[public static Func::registerTick(callable $callback, mixed ...$arguments):bool]]>
</code-block>













### ### Register a function for execution on each tick

<p><format style="italic">Registers the given callback to be executed when a tick is called.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L139">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L139">
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
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
The function to register.
</format></li><li>variadic mixed <format style="bold">$arguments</format> - <format style="italic">
Parameters for callback function.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to register tick function.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True on success.</format></li></list>
    </def>
</deflist>
## method: unregisterTick {id="unregistertick()"}

<code-block lang="php">
    <![CDATA[public static Func::unregisterTick(callable $callback):void]]>
</code-block>













### ### De-register a function for execution on each tick

<p><format style="italic">De-registers the function, so it is no longer executed when a tick is called.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L158">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Func.php#L158">
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
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
The function to deregister.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>