<title># Constant</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\Constant()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Constant low-level class proxy class

<p><format style="italic">Class allows you to obtain information about constants.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\Constant
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L29">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php">
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
|public static |<a href="#define()">define</a>|### Defines a named constant|
|public static |<a href="#defined()">defined</a>|### Checks whether a given named constant exists|
|public static |<a href="#value()">value</a>|### Returns the value of a constant|

## method: define {id="define()"}

<code-block lang="php">
    <![CDATA[public static Constant::define(non-empty-string $name, null|array<array-key,mixed>|scalar $value):true]]>
</code-block>













### ### Defines a named constant

<p><format style="italic">Defines a named constant at runtime.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L48">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L48">
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
The name of the constant.
</format></li><li>null or array&lt;array-key,mixed&gt; or scalar <format style="bold">$value</format> - <format style="italic">
The value of the constant.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true - <format style="italic">True on success.</format></li></list>
    </def>
</deflist>
## method: defined {id="defined()"}

<code-block lang="php">
    <![CDATA[public static Constant::defined(non-empty-string $name):bool]]>
</code-block>













### ### Checks whether a given named constant exists

<p><format style="italic">This function works also with class constants and enum cases.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L69">
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
The constant name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the named constant given by name parameter has been defined, false otherwise.</format></li></list>
    </def>
</deflist>
## method: value {id="value()"}

<code-block lang="php">
    <![CDATA[public static Constant::value(non-empty-string $name):mixed]]>
</code-block>













### ### Returns the value of a constant

<p><format style="italic">Method [[Constant#value()]] is useful if you need to retrieve the value of a constant, but do not know its name.
I.e., it is stored in a variable or returned by a function.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L92">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Constant.php#L92">
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
The constant name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the constant is not defined.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">The value of the constant.</format></li></list>
    </def>
</deflist>