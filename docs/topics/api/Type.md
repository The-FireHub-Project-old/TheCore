<title># Type</title>

<code-block lang="php">
<![CDATA[enum Type]]>
</code-block>













### ### Data type enum

<p><format style="italic">Data type defines the type of data a variable can store.</format></p>

<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\Data\Type
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L23">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#t_bool">T_BOOL</a>|### A bool expresses a truth value, it can be either true or false||
|<a href="#t_int">T_INT</a>|### An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}||
|<a href="#t_float">T_FLOAT</a>|### A floating-point number is represented approximately with a fixed number of significant digits||
|<a href="#t_string">T_STRING</a>|### A string is a series of characters, where a character is the same as a byte||
|<a href="#t_array">T_ARRAY</a>|### An ordered map where map is a type that associates values to keys||
|<a href="#t_object">T_OBJECT</a>|### An object is an individual instance of the data structure defined by a class||
|<a href="#t_null">T_NULL</a>|### The special null value represents a variable with no value||
|<a href="#t_resource">T_RESOURCE</a>|### The special resource type is used to store references to some function call or to external PHP resources||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#category()">category</a>|## Gets data type category|

## method: category {id="category()"}

<code-block lang="php">
    <![CDATA[public Type::category():\FireHub\Core\Support\Enums\Data\Category]]>
</code-block>













### ## Gets data type category



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L83">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L83">
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
        <list><li><a href="Category.md#scalar">\FireHub\Core\Support\Enums\Data\Category::SCALAR</a>  - <format style="italic">To check if this enum is a scalar type category.</format></li><li><a href="Category.md#compound">\FireHub\Core\Support\Enums\Data\Category::COMPOUND</a>  - <format style="italic">To check if this enum is a compound type category.</format></li><li><a href="Category.md#special">\FireHub\Core\Support\Enums\Data\Category::SPECIAL</a>  - <format style="italic">To check if this enum is a special type category.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Category.md">\FireHub\Core\Support\Enums\Data\Category</a> - <format style="italic">Data type category.</format></li></list>
    </def>
</deflist>
## case: T_BOOL {id="t_bool"}

<code-block lang="php">
<![CDATA[
    T_BOOL    ]]>
</code-block>







### ### A bool expresses a truth value, it can be either true or false



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L29">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L29">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
## case: T_INT {id="t_int"}

<code-block lang="php">
<![CDATA[
    T_INT    ]]>
</code-block>







### ### An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L35">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L35">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li><li><a href="DateAndTime.md#microtime()">\FireHub\Core\Support\LowLevel\DateAndTime::microtime()</a>  - <format style="italic">To set microtime as integer.</format></li></list>
    </def>
</deflist>
## case: T_FLOAT {id="t_float"}

<code-block lang="php">
<![CDATA[
    T_FLOAT    ]]>
</code-block>







### ### A floating-point number is represented approximately with a fixed number of significant digits



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L41">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
## case: T_STRING {id="t_string"}

<code-block lang="php">
<![CDATA[
    T_STRING    ]]>
</code-block>







### ### A string is a series of characters, where a character is the same as a byte



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L47">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L47">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
## case: T_ARRAY {id="t_array"}

<code-block lang="php">
<![CDATA[
    T_ARRAY    ]]>
</code-block>







### ### An ordered map where map is a type that associates values to keys



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L53">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L53">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
## case: T_OBJECT {id="t_object"}

<code-block lang="php">
<![CDATA[
    T_OBJECT    ]]>
</code-block>







### ### An object is an individual instance of the data structure defined by a class



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L59">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L59">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
## case: T_NULL {id="t_null"}

<code-block lang="php">
<![CDATA[
    T_NULL    ]]>
</code-block>







### ### The special null value represents a variable with no value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L65">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
## case: T_RESOURCE {id="t_resource"}

<code-block lang="php">
<![CDATA[
    T_RESOURCE    ]]>
</code-block>







### ### The special resource type is used to store references to some function call or to external PHP resources



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L71">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/data/firehub.Type.php#L71">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Data.md#gettype()">\FireHub\Core\Support\LowLevel\Data::getType()</a>  - <format style="italic">As data type.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>