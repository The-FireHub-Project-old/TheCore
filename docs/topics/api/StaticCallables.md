<title># StaticCallables</title>

<code-block lang="php">
<![CDATA[interface StaticCallables]]>
</code-block>













### ### Static callable contract



<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\Magic\StaticCallables
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.StaticCallables.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.StaticCallables.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/magic/firehub.StaticCallables.php">
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
|public static |<a href="#__callstatic()">__callStatic</a>|### Invoking inaccessible (protected or private) or non-existing static methods in an object context|

## method: __callStatic {id="__callstatic()"}

<code-block lang="php">
    <![CDATA[public static StaticCallables::__callStatic(non-empty-string $method, array<array-key,mixed> $arguments):mixed]]>
</code-block>













### ### Invoking inaccessible (protected or private) or non-existing static methods in an object context



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.StaticCallables.php#L36">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.StaticCallables.php#L36">
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
        <list><li>non-empty-string <format style="bold">$method</format> - <format style="italic">
Method name.
</format></li><li>array&lt;array-key,mixed&gt; <format style="bold">$arguments</format> - <format style="italic">
List of arguments.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Method return.</format></li></list>
    </def>
</deflist>