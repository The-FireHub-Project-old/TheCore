<title># InitBackedEnum</title>

<code-block lang="php">
<![CDATA[interface InitBackedEnum]]>
</code-block>













### ### FireHub initial-backed enum interface



<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Base\InitBackedEnum
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/firehub.InitBackedEnum.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/firehub.InitBackedEnum.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/base/firehub.InitBackedEnum.php">
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
|public static |<a href="#fromname()">fromName</a>|### Get value from enum name|
|inherited public static |<a href="#getconstantvalue()">getConstantValue</a>|### Get value from constant name|
|inherited public static |<a href="#asjson()">asJSON</a>|### Data serialized as JSON|

## method: fromName {id="fromname()"}

<code-block lang="php">
    <![CDATA[public static InitBackedEnum::fromName(non-empty-string $name):?static]]>
</code-block>













### ### Get value from enum name



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/firehub.InitBackedEnum.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/firehub.InitBackedEnum.php#L33">
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
        <list><li>non-empty-string <format style="bold">$name</format> - <format style="italic">
Enum name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>null or static - <format style="italic">Enum from enum name, or null if enum not found.</format></li></list>
    </def>
</deflist>
## method: getConstantValue {id="getconstantvalue()"}

<code-block lang="php">
    <![CDATA[public static Base::getConstantValue(non-empty-string $name):mixed]]>
</code-block>













### ### Get value from constant name



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/firehub.Base.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/firehub.Base.php#L33">
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
        <list><li>non-empty-string <format style="bold">$name</format> - <format style="italic">
Constant name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Value from constant.</format></li></list>
    </def>
</deflist>
## method: asJSON {id="asjson()"}

<code-block lang="php">
    <![CDATA[public static Base::asJSON():string]]>
</code-block>













### ### Data serialized as JSON

<p><format style="italic">By default, all public (static and non-static, initialized and non-initialized) properties will be returned.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/firehub.Base.php#L43">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/firehub.Base.php#L43">
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
        <list><li>string - <format style="italic">Data which is serialized as JSON.</format></li></list>
    </def>
</deflist>