<title># Concrete</title>

<code-block lang="php">
<![CDATA[trait \FireHub\Core\Base\Trait\Concrete()]]>
</code-block>













### ### FireHub initial concrete trait



<deflist>
    <def title="Trait basic info:">
        <list><li>This trait was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Trait Name:">
        \FireHub\Core\Base\Trait\Concrete
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L24">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php">
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
|public|<a href="#jsonserialize()">jsonSerialize</a>||
|public|<a href="#__serialize()">__serialize</a>||
|public|<a href="#__unserialize()">__unserialize</a>||

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