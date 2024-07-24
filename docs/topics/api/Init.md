<title># Init</title>

<code-block lang="php">
<![CDATA[interface Init]]>
</code-block>













### ### FireHub initial class interface



<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Base\Init
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/firehub.Init.php#L25">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/firehub.Init.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/base/firehub.Init.php">
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
|public|<a href="#jsonserialize()">jsonSerialize</a>|### Specify data which should be serialized to JSON|
|inherited public|<a href="#__serialize()">__serialize</a>|### Construct and return an associative array of key/value pairs that represent the serialized form of the object|
|inherited public|<a href="#__unserialize()">__unserialize</a>|### Converts from serialized data back to the object|
|inherited public static |<a href="#getconstantvalue()">getConstantValue</a>|### Get value from constant name|
|inherited public static |<a href="#asjson()">asJSON</a>|### Data serialized as JSON|

## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public Init::jsonSerialize()]]>
</code-block>













### ### Specify data which should be serialized to JSON

<p><format style="italic">Serializes the object to a value that can be serialized natively by json_encode().
By default, all initialized public, non-static properties will be returned.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/firehub.Init.php#L37">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/firehub.Init.php#L37">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## method: __serialize {id="__serialize()"}

<code-block lang="php">
    <![CDATA[public Serializable::__serialize():array<array-key,mixed>]]>
</code-block>













### ### Construct and return an associative array of key/value pairs that represent the serialized form of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Serializable.php#L31">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Serializable.php#L31">
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
        <list><li>array&lt;array-key,mixed&gt; - <format style="italic">An associative array of key/value pairs that represent the serialized form of the object.</format></li></list>
    </def>
</deflist>
## method: __unserialize {id="__unserialize()"}

<code-block lang="php">
    <![CDATA[public Serializable::__unserialize(array<array-key,mixed> $data):void]]>
</code-block>













### ### Converts from serialized data back to the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Serializable.php#L43">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Serializable.php#L43">
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
        <list><li>array&lt;array-key,mixed&gt; <format style="bold">$data</format> - <format style="italic">
Serialized data.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
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