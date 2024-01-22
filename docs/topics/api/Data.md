<title># Data</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\Data()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Data low-level proxy class

<p><format style="italic">Class contains variable handling methods.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\Data
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L31">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php">
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
|public static |<a href="#gettype()">getType</a>|### Gets data type|
|public static |<a href="#settype()">setType</a>|### Sets data type|
|public static |<a href="#serializevalue()">serializeValue</a>|### Generates storable representation of data|
|public static |<a href="#unserializevalue()">unserializeValue</a>|### Creates a PHP value from a stored representation|

## method: getType {id="gettype()"}

<code-block lang="php">
    <![CDATA[public static Data::getType(mixed $value):\FireHub\Core\Support\Enums\Data\Type]]>
</code-block>













### ### Gets data type



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L54">
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
        <list><li><a href="Type.md#t_bool">\FireHub\Core\Support\Enums\Data\Type::T_BOOL</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_int">\FireHub\Core\Support\Enums\Data\Type::T_INT</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_float">\FireHub\Core\Support\Enums\Data\Type::T_FLOAT</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_string">\FireHub\Core\Support\Enums\Data\Type::T_STRING</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_array">\FireHub\Core\Support\Enums\Data\Type::T_ARRAY</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_object">\FireHub\Core\Support\Enums\Data\Type::T_OBJECT</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_null">\FireHub\Core\Support\Enums\Data\Type::T_NULL</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_resource">\FireHub\Core\Support\Enums\Data\Type::T_RESOURCE</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
The variable being type checked.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a type of value is unknown.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Type.md">\FireHub\Core\Support\Enums\Data\Type</a> - <format style="italic">Type of data.</format></li></list>
    </def>
</deflist>
## method: setType {id="settype()"}

<code-block lang="php">
    <![CDATA[public static Data::setType(mixed $value, \FireHub\Core\Support\Enums\Data\Type $type):mixed]]>
</code-block>













### ### Sets data type



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L112">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L112">
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
        <list><li><a href="Type.md#t_bool">\FireHub\Core\Support\Enums\Data\Type::T_BOOL</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_int">\FireHub\Core\Support\Enums\Data\Type::T_INT</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_float">\FireHub\Core\Support\Enums\Data\Type::T_FLOAT</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_array">\FireHub\Core\Support\Enums\Data\Type::T_ARRAY</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_object">\FireHub\Core\Support\Enums\Data\Type::T_OBJECT</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_null">\FireHub\Core\Support\Enums\Data\Type::T_NULL</a>  - <format style="italic">As data type.</format></li><li><a href="Type.md#t_resource">\FireHub\Core\Support\Enums\Data\Type::T_RESOURCE</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
The variable being converted to type.
</format></li><li><a href="Type.md">\FireHub\Core\Support\Enums\Data\Type</a> <format style="bold">$type</format> - <format style="italic">
Type to convert variable to.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a type cannot be set to resource.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Converted value or false if conversion failed.</format></li></list>
    </def>
</deflist>
## method: serializeValue {id="serializevalue()"}

<code-block lang="php">
    <![CDATA[public static Data::serializeValue(string|int|float|bool|array|object|null $value):string]]>
</code-block>











<warning>
                <p><format style="bold">Warning:</format></p>
                <p>When serialize() serializes objects, the leading backslash is not included in the class name of
namespaced classes for maximum compatibility.</p>
            </warning><note>
                <p><format style="bold">Note:</format></p>
                <p>This is a binary string that may include null bytes and needs to be stored and handled as such. For
example, serialize() output should generally be stored in a BLOB field in a database, rather than a CHAR or
TEXT field.</p>
            </note>

### ### Generates storable representation of data

<p><format style="italic">Generates a storable representation of a value.
This is useful for storing or passing PHP values around without losing their type and structure.
To make the serialized string into a PHP value again, use unserialize().</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L156">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L156">
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
        <list><li>string or int or float or bool or array or object or null <format style="bold">$value</format> - <format style="italic">
<code><![CDATA[ scalar|array<array-key, mixed>|object|null ]]></code>
The value to be serialized.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If try to serialize anonymous class, function or resource.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String containing a byte-stream representation of value that can be stored anywhere.</format></li></list>
    </def>
</deflist>
## method: unserializeValue {id="unserializevalue()"}

<code-block lang="php">
    <![CDATA[public static Data::unserializeValue(string $data, bool|array $allowed_classes = false, int $max_depth = 4096):mixed]]>
</code-block>













### ### Creates a PHP value from a stored representation



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Data.php#L186">
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
        <list><li>string <format style="bold">$data</format> - <format style="italic">
<code>non-empty-string</code>
The serialized string.
</format></li><li>bool or array <format style="bold">$allowed_classes</format> = false - <format style="italic">[optional] 
<code><![CDATA[ bool|array<class-string> ]]></code>
Either an array of class names which should be accepted, false to accept no classes,
or true to accept all classes.
</format></li><li>int <format style="bold">$max_depth</format> = 4096 - <format style="italic">[optional] 
The maximum depth of structures permitted during unserialization, and is intended to prevent stack overflows.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">$data is already false already or $data is NULL, or could not unserialize data.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">The converted value is returned.</format></li></list>
    </def>
</deflist>