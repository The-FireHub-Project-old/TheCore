<title># Loaders</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Initializers\Autoload\Loaders()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### List of active loader implementations for autoloader



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Initializers\Autoload\Loaders
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L26">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php">
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
|private|<a href="#$list">list</a>|### List of loaders|[]|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#get()">get</a>|### Get loader callback|
|public|<a href="#add()">add</a>|### Adds a new loader|
|public|<a href="#remove()">remove</a>|### Removes loader|
|public|<a href="#list()">list</a>|### Get list of autoloader implementations|

## property: list {id="$list"}

<code-block lang="php">
    <![CDATA[private array $list = []]]>
</code-block>











### ### List of loaders



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L35">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L35">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## method: get {id="get()"}

<code-block lang="php">
    <![CDATA[public Loaders::get(string $name):callable]]>
</code-block>













### ### Get loader callback



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L52">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L52">
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
        <list><li><a href="Autoload.md#unregister()">\FireHub\Core\Initializers\Autoload::unregister()</a>  - <format style="italic">To get loader callback.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$name</format> - <format style="italic">
<code>non-empty-string</code>
Loader name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If loader doesn&#039;t exist.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>callable - <format style="italic"><code>callable(string):void</code> Loader callback.</format></li></list>
    </def>
</deflist>
## method: add {id="add()"}

<code-block lang="php">
    <![CDATA[public Loaders::add(string $name, callable $callback):true]]>
</code-block>













### ### Adds a new loader



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L79">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L79">
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
        <list><li><a href="Autoload.md#__construct()">\FireHub\Core\Initializers\Autoload::__construct()</a>  - <format style="italic">To add new callback function as loader with alias.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$name</format> - <format style="italic">
<code>non-empty-string</code>
Loader name.
</format></li><li>callable <format style="bold">$callback</format> - <format style="italic">
<code>callable(string):void</code>
The autoload function being registered.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If loader is empty, or loader already exists.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true - <format style="italic">Always true.</format></li></list>
    </def>
</deflist>
## method: remove {id="remove()"}

<code-block lang="php">
    <![CDATA[public Loaders::remove(string $name):true]]>
</code-block>













### ### Removes loader



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L106">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L106">
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
        <list><li><a href="Autoload.md#unregister()">\FireHub\Core\Initializers\Autoload::unregister()</a>  - <format style="italic">To remove unregistered autoload implementation.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$name</format> - <format style="italic">
<code>non-empty-string</code>
Loader name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If loader doesn&#039;t exist.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true - <format style="italic">Always true.</format></li></list>
    </def>
</deflist>
## method: list {id="list()"}

<code-block lang="php">
    <![CDATA[public Loaders::list():array]]>
</code-block>













### ### Get list of autoloader implementations



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L125">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/autoload/firehub.Loaders.php#L125">
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
        <list><li>array - <format style="italic"><code><![CDATA[ array<non-empty-string, callable(string):void> ]]></code> List of autoloader
implementations.</format></li></list>
    </def>
</deflist>