<title># CaseFolding</title>

<code-block lang="php">
<![CDATA[enum CaseFolding]]>
</code-block>













### ### String case folding enum



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\String\CaseFolding
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php">
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
|<a href="#lower">LOWER</a>|### Performs a full lower-case folding|0|
|<a href="#upper">UPPER</a>|### Performs a full upper-case folding|1|
|<a href="#title">TITLE</a>|### Performs a full title-case folding|2|

## case: LOWER {id="lower"}

<code-block lang="php">
<![CDATA[
    LOWER    ]]>
</code-block>







### ### Performs a full lower-case folding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php#L27">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php#L27">
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
        <list><li><a href="Char.md#tolower()">\FireHub\Core\Support\Char::toLower()</a>  - <format style="italic">To lowercase character.</format></li><li><a href="IStr.md#contains()">\FireHub\Core\Support\IStr::contains()</a>  - <format style="italic">To lowercase string.</format></li><li><a href="IStr.md#equals()">\FireHub\Core\Support\IStr::equals()</a>  - <format style="italic">To lowercase string.</format></li><li><a href="Str.md#tolower()">\FireHub\Core\Support\Str::toLower()</a>  - <format style="italic">To convert string to lowercase.</format></li><li><a href="Str.md#decapitalize()">\FireHub\Core\Support\Str::deCapitalize()</a>  - <format style="italic">To lowercase the first character of a string.</format></li><li><a href="Arr.md#foldkeys()">\FireHub\Core\Support\LowLevel\Arr::foldKeys()</a>  - <format style="italic">As default parameter.</format></li><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert to lowercase.</format></li></list>
    </def>
</deflist>
## case: UPPER {id="upper"}

<code-block lang="php">
<![CDATA[
    UPPER = 1    ]]>
</code-block>







### ### Performs a full upper-case folding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php#L33">
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
        <list><li><a href="Char.md#toupper()">\FireHub\Core\Support\Char::toUpper()</a>  - <format style="italic">To uppercase character.</format></li><li><a href="Str.md#toupper()">\FireHub\Core\Support\Str::toUpper()</a>  - <format style="italic">To convert string to uppercase.</format></li><li><a href="Str.md#capitalize()">\FireHub\Core\Support\Str::capitalize()</a>  - <format style="italic">To uppercase the first character of a string.</format></li><li><a href="Arr.md#foldkeys()">\FireHub\Core\Support\LowLevel\Arr::foldKeys()</a>  - <format style="italic">To fold keys to uppercase.</format></li><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert to uppercase.</format></li></list>
    </def>
</deflist>
## case: TITLE {id="title"}

<code-block lang="php">
<![CDATA[
    TITLE = 2    ]]>
</code-block>







### ### Performs a full title-case folding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.CaseFolding.php#L39">
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
        <list><li><a href="Str.md#totitle()">\FireHub\Core\Support\Str::toTitle()</a>  - <format style="italic">To convert string to title-case.</format></li><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert to title-case.</format></li></list>
    </def>
</deflist>