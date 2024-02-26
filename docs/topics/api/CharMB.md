<title># CharMB</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\CharMB()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Multibyte character low-level proxy class

<p><format style="italic">Class provides multibyte specific character functions that help you deal with multibyte encodings.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\CharMB
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L29">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php">
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
|public static |<a href="#chr()">chr</a>|### Return character by Unicode code point value|
|public static |<a href="#ord()">ord</a>|### Get Unicode code point of character|

## method: chr {id="chr()"}

<code-block lang="php">
    <![CDATA[public static CharMB::chr(int $codepoint, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string]]>
</code-block>













### ### Return character by Unicode code point value

<p><format style="italic">Returns a string containing the character specified by the Unicode code point value, encoded in the specified
encoding. This function complements [[CharMB#ord()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L54">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Char.md#fromcodepoint()">\FireHub\Core\Support\Char::fromCodepoint()</a>  - <format style="italic">To get character from codepoint parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$codepoint</format> - <format style="italic">
The codepoint value.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If codepoint could not be converted to character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">string A string containing the requested character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="Useful links:">
        <list><li><a href="https://en.wikipedia.org/wiki/List_of_Unicode_characters">https://en.wikipedia.org/wiki/List_of_Unicode_characters</a> - <format style="italic">List of codepoint values</format></li></list>
    </def>
</deflist>
## method: ord {id="ord()"}

<code-block lang="php">
    <![CDATA[public static CharMB::ord(string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):int]]>
</code-block>













### ### Get Unicode code point of character

<p><format style="italic">Returns the Unicode code point value of the given character. This function complements [[CharMB#chr()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L83">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L83">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$character</format> - <format style="italic">
<code>non-empty-string</code>
A character.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If character could not be converted to codepoint.</format></li><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If empty string is provided.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The Unicode code point for the first character of string.</format></li></list>
    </def>
</deflist>