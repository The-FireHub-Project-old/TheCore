<title># JsonSerializable</title>

<code-block lang="php">
<![CDATA[interface JsonSerializable]]>
</code-block>













### ### JsonSerializable contract

<p><format style="italic">Objects implementing JsonSerializable can customize their JSON representation when encoded with json_encode().</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\JsonSerializable
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.JsonSerializable.php#L25">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.JsonSerializable.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/firehub.JsonSerializable.php">
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

## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public JsonSerializable::jsonSerialize():array<array-key,mixed>]]>
</code-block>













### ### Specify data which should be serialized to JSON

<p><format style="italic">Serializes the object to a value that can be serialized natively by json_encode().</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.JsonSerializable.php#L35">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.JsonSerializable.php#L35">
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
        <list><li>array&lt;array-key,mixed&gt; - <format style="italic">Data which can be serialized by json_encode(), which is a value of any type other than a resource.</format></li></list>
    </def>
</deflist>