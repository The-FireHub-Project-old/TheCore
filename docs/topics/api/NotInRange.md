<title># NotInRange</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotInRange()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Not in the range of characters



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotInRange
    </def><def title="Implements:">
        <list><li><a href="Predefined.md">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L25">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|readonly private|<a href="#$from">from</a>|||
|readonly private|<a href="#$until">until</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#regex()">regex</a>|### Get regex predefined pattern|

## property: from {id="$from"}

<code-block lang="php">
    <![CDATA[readonly private \FireHub\Core\Support\Contracts\HighLevel\Characters $from]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L41">
                    View blame
                </a>
            </def></deflist>
## property: until {id="$until"}

<code-block lang="php">
    <![CDATA[readonly private \FireHub\Core\Support\Contracts\HighLevel\Characters $until]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L42">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L42">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public NotInRange::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters $from, \FireHub\Core\Support\Contracts\HighLevel\Characters $until):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L40">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L40">
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
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$from</format> - <format style="italic">
From character.
</format></li><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$until</format> - <format style="italic">
Until character.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: regex {id="regex()"}

<code-block lang="php">
    <![CDATA[public NotInRange::regex()]]>
</code-block>













### ### Get regex predefined pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L55">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L55">
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
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a>  - <format style="italic">To test if $characters is of character interface.</format></li><li><a href="Characters.md#string()">\FireHub\Core\Support\Contracts\HighLevel\Characters::string()</a>  - <format style="italic">To get a raw string from character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $characters is not exclusive list of character interface.</format></li></list>
    </def>
</deflist>