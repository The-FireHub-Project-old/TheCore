<title># Path</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Path()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Path support class

<p><format style="italic">Give info about various paths inside the FireHub framework.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Path
    </def><def title="Implements:">
        <list><li><a href="Init.md">\FireHub\Core\Base\Init</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="Concrete.md">\FireHub\Core\Base\Trait\Concrete</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Path.php#L33">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Path.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Path.php">
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
|public static |<a href="#project()">project</a>|### Get FireHub project path|
|public static |<a href="#core()">core</a>|### Get FireHub Core path|
|private static |<a href="#phar()">phar</a>|### Get current phar path|
|inherited public|<a href="#jsonserialize()">jsonSerialize</a>||
|inherited public|<a href="#__serialize()">__serialize</a>||
|inherited public|<a href="#__unserialize()">__unserialize</a>||

## method: project {id="project()"}

<code-block lang="php">
    <![CDATA[public static Path::project():non-empty-string]]>
</code-block>













### ### Get FireHub project path



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Path.php#L53">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Path.php#L53">
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
        <list><li><a href="Path.md#phar()">\FireHub\Core\Support\Path::phar()</a>  - <format style="italic">To get a current phar path.</format></li><li><a href="Folder.md#parent()">\FireHub\Core\Support\LowLevel\Folder::parent()</a>  - <format style="italic">To return a parent core phar folder.</format></li><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">As system definition for separating folders, platform-specific.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system couldn&#039;t load your project phar.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>non-empty-string - <format style="italic">FireHub project path.</format></li></list>
    </def>
</deflist>
## method: core {id="core()"}

<code-block lang="php">
    <![CDATA[public static Path::core():non-empty-string]]>
</code-block>













### ### Get FireHub Core path



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Path.php#L75">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Path.php#L75">
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
        <list><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">As system definition for separating folders, platform-specific.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="FireHub.md#autoload()">\FireHub\Core\FireHub::autoload()</a>  - <format style="italic">To get FireHub Core path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>non-empty-string - <format style="italic">FireHub Core path.</format></li></list>
    </def>
</deflist>
## method: phar {id="phar()"}

<code-block lang="php">
    <![CDATA[private static Path::phar(bool $return_phar):non-empty-string]]>
</code-block>













### ### Get current phar path



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Path.php#L93">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Path.php#L93">
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
        <list><li><a href="Path.md#project()">\FireHub\Core\Support\Path::project()</a>  - <format style="italic">To get a current phar path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>bool <format style="bold">$return_phar</format> - <format style="italic">
If true, a full phar URL is returned; otherwise the full path on disk to the phar archive is returned.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system couldn&#039;t get a current phar path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>non-empty-string - <format style="italic">Current phar path.</format></li></list>
    </def>
</deflist>
## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::jsonSerialize()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L39">
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
        <list><li><a href="Obj.md#properties()">\FireHub\Core\Support\LowLevel\Obj::properties()</a>  - <format style="italic">To get all public class properties.</format></li></list>
    </def>
</deflist>
## method: __serialize {id="__serialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::__serialize():never]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L54">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If you try to serialize an object.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>
## method: __unserialize {id="__unserialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::__unserialize(array $data):never]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L69">
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
        <list><li>array <format style="bold">$data</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If you try to unserialize an object.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>