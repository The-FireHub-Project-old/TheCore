<title># Callback</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Initializers\Autoload\Callback()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### The autoload function being registered



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Initializers\Autoload\Callback
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L28">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Used by
<deflist>
    <def title="This class is used by:">
        <list><li><a href="Autoload.md#__construct()">\FireHub\Core\Initializers\Autoload::__construct()</a>  - <format style="italic">As autoload function being registered.</format></li></list>
    </def>
</deflist>
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

## property: path {id="$path"}

<code-block lang="php">
    <![CDATA[readonly private \Closure|string $path]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L44">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L44">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Callback::__construct(callable|string $path):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L43">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L43">
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
        <list><li>callable or string <format style="bold">$path</format> - <format style="italic">
<code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
inside a root path.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: classComponents {id="classcomponents()"}

<code-block lang="php">
    <![CDATA[private Callback::classComponents(string $class):array]]>
</code-block>













### ### Get class components from class FQN



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L67">
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
        <list><li><a href="StrSB.md#explode()">\FireHub\Core\Support\LowLevel\StrSB::explode()</a>  - <format style="italic">To split class to components.</format></li><li><a href="StrSB.md#implode()">\FireHub\Core\Support\LowLevel\StrSB::implode()</a>  - <format style="italic">To join array elements to get namespace.</format></li><li><a href="StrSB.md#tolower()">\FireHub\Core\Support\LowLevel\StrSB::toLower()</a>  - <format style="italic">To lowercase all namespaces.</format></li><li><a href="Arr.md#lastkey()">\FireHub\Core\Support\LowLevel\Arr::lastKey()</a>  - <format style="italic">To get classname.</format></li><li><a href="Arr.md#pop()">\FireHub\Core\Support\LowLevel\Arr::pop()</a>  - <format style="italic">To remove classname from namespace.</format></li><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">As system definition for separating folders, platform specific.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Callback.md#__invoke()">\FireHub\Core\Initializers\Autoload\Callback::__invoke()</a>  - <format style="italic">To get class components from class FQN.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$class</format> - <format style="italic">
Class FQN to resolve.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system could not get class components.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code>array{namespace: string, classname: string}</code> Class components.</format></li></list>
    </def>
</deflist>
## method: __invoke {id="__invoke()"}

<code-block lang="php">
    <![CDATA[public Callback::__invoke(string $class):void]]>
</code-block>













### ### Invoke autoload function being registered



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L111">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Callback.php#L111">
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
        <list><li><a href="Callback.md#classcomponents()">\FireHub\Core\Initializers\Autoload\Callback::classComponents()</a>  - <format style="italic">To get class components from class FQN.</format></li><li><a href="DataIs.md#callable()">\FireHub\Core\Support\LowLevel\DataIs::callable()</a>  - <format style="italic">To check if $class is callable or string.</format></li><li><a href="DataIs.md#string()">\FireHub\Core\Support\LowLevel\DataIs::string()</a>  - <format style="italic">To check if callable path return string.</format></li><li><a href="File.md#isfile()">\FireHub\Core\Support\LowLevel\File::isFile()</a>  - <format style="italic">To check if $path is a valid path.</format></li><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">As system definition for separating folders, platform specific.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$class</format> - <format style="italic">
Fully qualified class name that is being loaded.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system could not get class components.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>