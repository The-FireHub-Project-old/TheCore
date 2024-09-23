<title># ArrayInAccessible</title>

<code-block lang="php">
<![CDATA[interface ArrayInAccessible]]>
</code-block>













### ### Array inaccessible contract



<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\ArrayInAccessible
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L29">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Templates
<deflist>
    <def title="This interface has templates:">
        <list><li>TKey</li><li>TValue</li></list>
    </def>
</deflist>
### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#offsetexists()">offsetExists</a>|### Whether an offset exists|
|public|<a href="#offsetget()">offsetGet</a>|### Offset to retrieve|
|public|<a href="#offsetset()">offsetSet</a>|### Assign a value to the specified offset|
|public|<a href="#offsetunset()">offsetUnset</a>|### Unset an offset|

## method: offsetExists {id="offsetexists()"}

<code-block lang="php">
    <![CDATA[public ArrayInAccessible::offsetExists(mixed $offset):never]]>
</code-block>













### ### Whether an offset exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L38">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L38">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to check for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>
## method: offsetGet {id="offsetget()"}

<code-block lang="php">
    <![CDATA[public ArrayInAccessible::offsetGet(mixed $offset):never]]>
</code-block>













### ### Offset to retrieve



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L47">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L47">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to retrieve.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>
## method: offsetSet {id="offsetset()"}

<code-block lang="php">
    <![CDATA[public ArrayInAccessible::offsetSet(mixed $offset, mixed $value):never]]>
</code-block>













### ### Assign a value to the specified offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L56">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L56">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to assign the value to.
</format></li><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to set.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>
## method: offsetUnset {id="offsetunset()"}

<code-block lang="php">
    <![CDATA[public ArrayInAccessible::offsetUnset(mixed $offset):never]]>
</code-block>













### ### Unset an offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayInAccessible.php#L65">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to unset.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>