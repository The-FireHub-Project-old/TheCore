<title># DataIs</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\DataIs()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Data type checker low-level proxy class



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\DataIs
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L40">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php">
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
|public static |<a href="#array()">array</a>|### Checks if value is array|
|public static |<a href="#bool()">bool</a>|### Checks if value is boolean|
|public static |<a href="#callable()">callable</a>|### Verify that the contents of a variable can be called as a function|
|public static |<a href="#countable()">countable</a>|### Verify that the contents of a variable is a countable value|
|public static |<a href="#float()">float</a>|### Finds whether the type of variable is a float|
|public static |<a href="#int()">int</a>|### Find whether the type of variable is an integer|
|public static |<a href="#iterable()">iterable</a>|### Verify that the contents of a variable is an iterable value|
|public static |<a href="#null()">null</a>|### Finds whether a variable is null|
|public static |<a href="#numeric()">numeric</a>|### Finds whether a variable is a number or a numeric string|
|public static |<a href="#object()">object</a>|### Finds whether a variable is an object|
|public static |<a href="#resource()">resource</a>|### Finds whether a variable is a resource|
|public static |<a href="#scalar()">scalar</a>|### Finds whether a variable is a scalar|
|public static |<a href="#string()">string</a>|### Find whether the type of variable is a string|

## method: array {id="array()"}

<code-block lang="php">
    <![CDATA[public static DataIs::array(mixed $value):bool]]>
</code-block>













### ### Checks if value is array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L53">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L53">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is array ? true : false)</code> True if value is array, false otherwise.</format></li></list>
    </def>
</deflist>
## method: bool {id="bool()"}

<code-block lang="php">
    <![CDATA[public static DataIs::bool(mixed $value):bool]]>
</code-block>













### ### Checks if value is boolean



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L70">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L70">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is bool ? true : false)</code> True if value is boolean, false otherwise.</format></li></list>
    </def>
</deflist>
## method: callable {id="callable()"}

<code-block lang="php">
    <![CDATA[public static DataIs::callable(mixed $value):bool]]>
</code-block>













### ### Verify that the contents of a variable can be called as a function



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L87">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L87">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is callable ? true : false)</code> True if value is callable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: countable {id="countable()"}

<code-block lang="php">
    <![CDATA[public static DataIs::countable(mixed $value):bool]]>
</code-block>













### ### Verify that the contents of a variable is a countable value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L104">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L104">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is array|Countable ? true : false)</code> True if value is countable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: float {id="float()"}

<code-block lang="php">
    <![CDATA[public static DataIs::float(mixed $value):bool]]>
</code-block>













### ### Finds whether the type of variable is a float



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L121">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L121">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is float ? true : false)</code> True if value is float, false otherwise.</format></li></list>
    </def>
</deflist>
## method: int {id="int()"}

<code-block lang="php">
    <![CDATA[public static DataIs::int(mixed $value):bool]]>
</code-block>













### ### Find whether the type of variable is an integer



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L138">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L138">
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
        <list><li><a href="FileSystem.md#getpermissions()">\FireHub\Core\Support\LowLevel\FileSystem::getPermissions()</a>  - <format style="italic">To find whether fileperms() function returns integer.</format></li><li><a href="FileSystem.md#setpermissions()">\FireHub\Core\Support\LowLevel\FileSystem::setPermissions()</a>  - <format style="italic">To find whether octdec returns integer.</format></li><li><a href="Folder.md#create()">\FireHub\Core\Support\LowLevel\Folder::create()</a>  - <format style="italic">To find whether octdec() returns an integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is int ? true : false)</code> True if value is integer, false otherwise.</format></li></list>
    </def>
</deflist>
## method: iterable {id="iterable()"}

<code-block lang="php">
    <![CDATA[public static DataIs::iterable(mixed $value):bool]]>
</code-block>













### ### Verify that the contents of a variable is an iterable value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L155">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L155">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is iterable ? true : false)</code> True if value is iterable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: null {id="null()"}

<code-block lang="php">
    <![CDATA[public static DataIs::null(mixed $value):bool]]>
</code-block>













### ### Finds whether a variable is null



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L172">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L172">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is null ? true : false)</code> True if value is null, false otherwise.</format></li></list>
    </def>
</deflist>
## method: numeric {id="numeric()"}

<code-block lang="php">
    <![CDATA[public static DataIs::numeric(mixed $value):bool]]>
</code-block>













### ### Finds whether a variable is a number or a numeric string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L189">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L189">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is numeric ? true : false)</code> True if value is numeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: object {id="object()"}

<code-block lang="php">
    <![CDATA[public static DataIs::object(mixed $value):bool]]>
</code-block>













### ### Finds whether a variable is an object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L206">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L206">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is object ? true : false)</code> True if value is object, false otherwise.</format></li></list>
    </def>
</deflist>
## method: resource {id="resource()"}

<code-block lang="php">
    <![CDATA[public static DataIs::resource(mixed $value):bool]]>
</code-block>













### ### Finds whether a variable is a resource



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L223">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L223">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is resource ? true : false)</code> True if value is resource, false otherwise or if resource is closed.</format></li></list>
    </def>
</deflist>
## method: scalar {id="scalar()"}

<code-block lang="php">
    <![CDATA[public static DataIs::scalar(mixed $value):bool]]>
</code-block>













### ### Finds whether a variable is a scalar

<p><format style="italic">Scalar values include: string, int, float and bool.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L242">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L242">
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
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is scalar ? true : false)</code> True if value is scalar, false otherwise.</format></li></list>
    </def>
</deflist>
## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public static DataIs::string(mixed $value):bool]]>
</code-block>













### ### Find whether the type of variable is a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L259">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L259">
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
        <list><li><a href="FileSystem.md#statistics()">\FireHub\Core\Support\LowLevel\FileSystem::statistics()</a>  - <format style="italic">To find whether the statistics key is string or not.</format></li><li><a href="RegexMB.md#encoding()">\FireHub\Core\Support\LowLevel\RegexMB::encoding()</a>  - <format style="italic">To check if provider encoding is string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic"><code>($value is string ? true : false)</code> True if value is string, false otherwise.</format></li></list>
    </def>
</deflist>