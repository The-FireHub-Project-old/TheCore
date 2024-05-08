<title># InsertValue</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Strings\InsertValue()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Insert value on string



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Strings\InsertValue
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L24">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php">
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
        <list><li><a href="Str.md#insertvalue()">\FireHub\Core\Support\Strings\Str::insertValue()</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|readonly private|<a href="#$string">string</a>|||
|readonly private|<a href="#$value">value</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#before()">before</a>|### Insert value before pattern|
|public|<a href="#after()">after</a>|### Insert value before pattern|

## property: string {id="$string"}

<code-block lang="php">
    <![CDATA[readonly private \FireHub\Core\Support\Contracts\HighLevel\Strings $string]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L42">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L42">
                    View blame
                </a>
            </def></deflist>
## property: value {id="$value"}

<code-block lang="php">
    <![CDATA[readonly private string $value]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L43">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L43">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public InsertValue::__construct(\FireHub\Core\Support\Contracts\HighLevel\Strings $string, non-empty-string $value):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L41">
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
        <list><li><a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a> <format style="bold">$string</format> - <format style="italic">
String to use.
</format></li><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
String to insert.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: before {id="before()"}

<code-block lang="php">
    <![CDATA[public InsertValue::before():\FireHub\Core\Support\Strings\Expression\ReplaceFunc]]>
</code-block>













### ### Insert value before pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L54">
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
        <list><li><a href="ReplaceFunc.md">\FireHub\Core\Support\Enums\String\Expression\ReplaceFunc</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="ReplaceFunc.md">\FireHub\Core\Support\Strings\Expression\ReplaceFunc</a> - <format style="italic">Regular expression search and replace using a callback.</format></li></list>
    </def>
</deflist>
## method: after {id="after()"}

<code-block lang="php">
    <![CDATA[public InsertValue::after():\FireHub\Core\Support\Strings\Expression\ReplaceFunc]]>
</code-block>













### ### Insert value before pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L68">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L68">
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
        <list><li><a href="ReplaceFunc.md">\FireHub\Core\Support\Enums\String\Expression\ReplaceFunc</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="ReplaceFunc.md">\FireHub\Core\Support\Strings\Expression\ReplaceFunc</a> - <format style="italic">Regular expression search and replace using a callback.</format></li></list>
    </def>
</deflist>