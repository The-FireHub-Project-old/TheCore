<title># ConcreteBackedEnum</title>

<code-block lang="php">
<![CDATA[trait \FireHub\Core\Base\Trait\ConcreteBackedEnum()]]>
</code-block>













### ### FireHub initial concrete-backed enum trait



<deflist>
    <def title="Trait basic info:">
        <list><li>This trait was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Trait Name:">
        \FireHub\Core\Base\Trait\ConcreteBackedEnum
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.ConcreteBackedEnum.php#L24">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.ConcreteBackedEnum.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/base/trait/firehub.ConcreteBackedEnum.php">
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
|public static |<a href="#fromname()">fromName</a>||
|public static |<a href="#asjson()">asJSON</a>||

## method: fromName {id="fromname()"}

<code-block lang="php">
    <![CDATA[public static ConcreteBackedEnum::fromName(string $name)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.ConcreteBackedEnum.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.ConcreteBackedEnum.php#L39">
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
        <list><li><a href="Constant.md#value()">\FireHub\Core\Support\LowLevel\Constant::value()</a>  - <format style="italic">To return the value of a constant.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$name</format></li></list>
    </def>
</deflist>
## method: asJSON {id="asjson()"}

<code-block lang="php">
    <![CDATA[public static ConcreteBackedEnum::asJSON()]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Replace json_encode with JSON class.</format></p>
            </tip>





<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.ConcreteBackedEnum.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.ConcreteBackedEnum.php#L67">
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
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If JSON serialization failed.</format></li></list>
    </def>
</deflist>