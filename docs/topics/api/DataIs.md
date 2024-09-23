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
    </def><def title="Implements:">
        <list><li><a href="InitStatic.md">\FireHub\Core\Base\InitStatic</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="ConcreteStatic.md">\FireHub\Core\Base\Trait\ConcreteStatic</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L42">
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


### Used by
<deflist>
    <def title="This class is used by:">
        <list><li><a href="IStr.md#break()">\FireHub\Core\Support\IStr::break()</a>  - <format style="italic">To check if the expression returns an array.</format></li></list>
    </def>
</deflist>
### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#array()">array</a>|### Checks if value is array|
|public static |<a href="#bool()">bool</a>|### Checks if the value is boolean|
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
    <![CDATA[public static DataIs::array(mixed $value):mixed]]>
</code-block>













### ### Checks if value is array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L60">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L60">
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
        <list><li>mixed - <format style="italic">True if value is array, false otherwise.</format></li></list>
    </def>
</deflist>
## method: bool {id="bool()"}

<code-block lang="php">
    <![CDATA[public static DataIs::bool(mixed $value):mixed]]>
</code-block>













### ### Checks if the value is boolean



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L76">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L76">
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
        <list><li>mixed - <format style="italic">True if the value is boolean, false otherwise.</format></li></list>
    </def>
</deflist>
## method: callable {id="callable()"}

<code-block lang="php">
    <![CDATA[public static DataIs::callable(mixed $value):mixed]]>
</code-block>













### ### Verify that the contents of a variable can be called as a function



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L92">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L92">
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
        <list><li><a href="Callback.md#__invoke()">\FireHub\Core\Initializers\Autoload\Callback::__invoke()</a>  - <format style="italic">To check if $class is callable or string.</format></li><li><a href="Arr.md#search()">\FireHub\Core\Support\Collection\Type\Arr::search()</a>  - <format style="italic">To check if $value is callable.</format></li><li><a href="Arr.md#contains()">\FireHub\Core\Support\Collection\Type\Arr::contains()</a>  - <format style="italic">To check if argument $value is callable.</format></li><li><a href="Fix.md#search()">\FireHub\Core\Support\Collection\Type\Fix::search()</a>  - <format style="italic">To check if $value is callable.</format></li><li><a href="Fix.md#contains()">\FireHub\Core\Support\Collection\Type\Fix::contains()</a>  - <format style="italic">To check if argument $value is callable.</format></li><li><a href="Gen.md#search()">\FireHub\Core\Support\Collection\Type\Gen::search()</a>  - <format style="italic">To check if $value is callable.</format></li><li><a href="Gen.md#contains()">\FireHub\Core\Support\Collection\Type\Gen::contains()</a>  - <format style="italic">To check if argument $value is callable.</format></li><li><a href="Obj.md#search()">\FireHub\Core\Support\Collection\Type\Obj::search()</a>  - <format style="italic">To check if $value is callable.</format></li><li><a href="Obj.md#contains()">\FireHub\Core\Support\Collection\Type\Obj::contains()</a>  - <format style="italic">To check if argument $value is callable.</format></li></list>
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
        <list><li>mixed - <format style="italic">True if value is callable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: countable {id="countable()"}

<code-block lang="php">
    <![CDATA[public static DataIs::countable(mixed $value):mixed]]>
</code-block>













### ### Verify that the contents of a variable is a countable value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L108">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L108">
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
        <list><li>mixed - <format style="italic">True if value is countable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: float {id="float()"}

<code-block lang="php">
    <![CDATA[public static DataIs::float(mixed $value):mixed]]>
</code-block>













### ### Finds whether the type of variable is a float



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L124">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L124">
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
        <list><li>mixed - <format style="italic">True if value is float, false otherwise.</format></li></list>
    </def>
</deflist>
## method: int {id="int()"}

<code-block lang="php">
    <![CDATA[public static DataIs::int(mixed $value):mixed]]>
</code-block>













### ### Find whether the type of variable is an integer



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L140">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L140">
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
        <list><li>mixed - <format style="italic">True if value is integer, false otherwise.</format></li></list>
    </def>
</deflist>
## method: iterable {id="iterable()"}

<code-block lang="php">
    <![CDATA[public static DataIs::iterable(mixed $value):mixed]]>
</code-block>













### ### Verify that the contents of a variable is an iterable value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L156">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L156">
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
        <list><li>mixed - <format style="italic">True if value is iterable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: null {id="null()"}

<code-block lang="php">
    <![CDATA[public static DataIs::null(mixed $value):mixed]]>
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
    <def title="This method is used by:">
        <list><li><a href="Char.md#string()">\FireHub\Core\Support\Char::string()</a>  - <format style="italic">To check if $string is null or not.</format></li><li><a href="asBoolean.md">\FireHub\Core\Support\Helpers\String\asBoolean()</a>  - <format style="italic">To check if $map matches any predefined values.</format></li></list>
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
        <list><li>mixed - <format style="italic">True if value is null, false otherwise.</format></li></list>
    </def>
</deflist>
## method: numeric {id="numeric()"}

<code-block lang="php">
    <![CDATA[public static DataIs::numeric(mixed $value):mixed]]>
</code-block>













### ### Finds whether a variable is a number or a numeric string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L188">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L188">
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
        <list><li><a href="asBoolean.md">\FireHub\Core\Support\Helpers\String\asBoolean()</a>  - <format style="italic">To check if $string is a numeric value.</format></li></list>
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
        <list><li>mixed - <format style="italic">True if the value is numeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: object {id="object()"}

<code-block lang="php">
    <![CDATA[public static DataIs::object(mixed $value):mixed]]>
</code-block>













### ### Finds whether a variable is an object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L204">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L204">
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
        <list><li>mixed - <format style="italic">True if value is object, false otherwise.</format></li></list>
    </def>
</deflist>
## method: resource {id="resource()"}

<code-block lang="php">
    <![CDATA[public static DataIs::resource(mixed $value):mixed]]>
</code-block>













### ### Finds whether a variable is a resource



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L220">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L220">
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
        <list><li>mixed - <format style="italic">True if value is resource, false otherwise, or if the resource is closed.</format></li></list>
    </def>
</deflist>
## method: scalar {id="scalar()"}

<code-block lang="php">
    <![CDATA[public static DataIs::scalar(mixed $value):mixed]]>
</code-block>













### ### Finds whether a variable is a scalar

<p><format style="italic">Scalar values include: string, int, float, and bool.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L238">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L238">
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
        <list><li>mixed - <format style="italic">True if the value is scalar, false otherwise.</format></li></list>
    </def>
</deflist>
## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public static DataIs::string(mixed $value):mixed]]>
</code-block>













### ### Find whether the type of variable is a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L254">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DataIs.php#L254">
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
        <list><li><a href="Callback.md#__invoke()">\FireHub\Core\Initializers\Autoload\Callback::__invoke()</a>  - <format style="italic">To check if callable path return string.</format></li><li><a href="FileSystem.md#statistics()">\FireHub\Core\Support\LowLevel\FileSystem::statistics()</a>  - <format style="italic">To find whether the statistics key is string or not.</format></li></list>
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
        <list><li>mixed - <format style="italic">True if value is string, false otherwise.</format></li></list>
    </def>
</deflist>