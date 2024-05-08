<title># Declared</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\Declared()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Declared low-level proxy class

<p><format style="italic">Class allows you to get information about declared classes and objects.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\Declared
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L31">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php">
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
|public static |<a href="#classes()">classes</a>|### Gets the declared classes|
|public static |<a href="#interfaces()">interfaces</a>|### Gets the declared interfaces|
|public static |<a href="#traits()">traits</a>|### Gets the declared traits|
|public static |<a href="#constants()">constants</a>|### Gets the declared constants|
|public static |<a href="#functions()">functions</a>|### Gets the declared functions|

## method: classes {id="classes()"}

<code-block lang="php">
    <![CDATA[public static Declared::classes():class-string[]]]>
</code-block>













### ### Gets the declared classes



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L42">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L42">
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
        <list><li>class-string[] - <format style="italic">Array of the names for the declared classes in the current script.</format></li></list>
    </def>
</deflist>
## method: interfaces {id="interfaces()"}

<code-block lang="php">
    <![CDATA[public static Declared::interfaces():class-string[]]]>
</code-block>













### ### Gets the declared interfaces



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L54">
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
        <list><li>class-string[] - <format style="italic">Array of the names for the declared interfaces in the current script.</format></li></list>
    </def>
</deflist>
## method: traits {id="traits()"}

<code-block lang="php">
    <![CDATA[public static Declared::traits():class-string[]]]>
</code-block>













### ### Gets the declared traits



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L66">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L66">
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
        <list><li>class-string[] - <format style="italic">Array of the names for the declared traits in the current script.</format></li></list>
    </def>
</deflist>
## method: constants {id="constants()"}

<code-block lang="php">
    <![CDATA[public static Declared::constants(bool $categorize = false):mixed]]>
</code-block>













### ### Gets the declared constants

<p><format style="italic">Returns the names and values of all the constants currently defined. This includes those created by extensions
as well as those created with the define() function.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L87">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L87">
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
        <list><li>bool <format style="bold">$categorize</format> = false - <format style="italic">[optional] 
Causing this function to return a multidimensional array with categories in the keys of the first dimension
and constants and their values in the second dimension.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Array of constant name => constant value array,
optionally grouped by extension name registering the constant.</format></li></list>
    </def>
</deflist>
## method: functions {id="functions()"}

<code-block lang="php">
    <![CDATA[public static Declared::functions(bool $exclude_disabled = true)]]>
</code-block>













### ### Gets the declared functions



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L105">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Declared.php#L105">
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
        <list><li>bool <format style="bold">$exclude_disabled</format> = true - <format style="italic">[optional] 
Whether disabled functions should be excluded from the return value.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">array{internal: non-empty-array<int, callable-string>, user: array<int, callable-string>}
A multidimensional array containing a list of all defined functions, both built-in (internal) and user-defined.
The internal functions will be accessible via $arr["internal"], and the user defined ones using $arr["user"].</format></li></list>
    </def>
</deflist>