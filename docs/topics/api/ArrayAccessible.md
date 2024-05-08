<title># ArrayAccessible</title>

<code-block lang="php">
<![CDATA[interface ArrayAccessible]]>
</code-block>













### ### Array accessible contract

<p><format style="italic">Interface to provide accessing objects as arrays.</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2023 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\ArrayAccessible
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L30">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php">
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
    <![CDATA[public ArrayAccessible::offsetExists(\FireHub\Core\Support\Contracts\TKey $offset):bool]]>
</code-block>













### ### Whether an offset exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L42">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L42">
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
        <list><li><a href="TKey.md">\FireHub\Core\Support\Contracts\TKey</a> <format style="bold">$offset</format> - <format style="italic">
Offset to check for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True on success, false otherwise.</format></li></list>
    </def>
</deflist>
## method: offsetGet {id="offsetget()"}

<code-block lang="php">
    <![CDATA[public ArrayAccessible::offsetGet(\FireHub\Core\Support\Contracts\TKey $offset):\FireHub\Core\Support\Contracts\TValue]]>
</code-block>













### ### Offset to retrieve



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L54">
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
        <list><li><a href="TKey.md">\FireHub\Core\Support\Contracts\TKey</a> <format style="bold">$offset</format> - <format style="italic">
Offset to retrieve.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TValue.md">\FireHub\Core\Support\Contracts\TValue</a> - <format style="italic">Offset value.</format></li></list>
    </def>
</deflist>
## method: offsetSet {id="offsetset()"}

<code-block lang="php">
    <![CDATA[public ArrayAccessible::offsetSet(\FireHub\Core\Support\Contracts\TKey $offset, \FireHub\Core\Support\Contracts\TValue $value):void]]>
</code-block>













### ### Assign a value to the specified offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L69">
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
        <list><li><a href="TKey.md">\FireHub\Core\Support\Contracts\TKey</a> <format style="bold">$offset</format> - <format style="italic">
Offset to assign the value to.
</format></li><li><a href="TValue.md">\FireHub\Core\Support\Contracts\TValue</a> <format style="bold">$value</format> - <format style="italic">
Value to set.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: offsetUnset {id="offsetunset()"}

<code-block lang="php">
    <![CDATA[public ArrayAccessible::offsetUnset(\FireHub\Core\Support\Contracts\TKey $offset):void]]>
</code-block>













### ### Unset an offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.ArrayAccessible.php#L81">
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
        <list><li><a href="TKey.md">\FireHub\Core\Support\Contracts\TKey</a> <format style="bold">$offset</format> - <format style="italic">
Offset to unset.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>