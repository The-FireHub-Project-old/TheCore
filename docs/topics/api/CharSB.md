<title># CharSB</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\CharSB()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Single-byte character low-level proxy class

<p><format style="italic">Class allows you to manipulate characters in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\CharSB
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L26">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php">
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
|public static |<a href="#chr()">chr</a>|### Generate a single-byte string from a number|
|public static |<a href="#ord()">ord</a>|### Convert the first byte of a string to a value between 0 and 255|

## method: chr {id="chr()"}

<code-block lang="php">
    <![CDATA[public static CharSB::chr(int $codepoint):string]]>
</code-block>













### ### Generate a single-byte string from a number

<p><format style="italic">Returns a one-character string containing the character specified by interpreting $codepoint as an unsigned
integer. This can be used to create a one-character string in a single-byte encoding such as ASCII, ISO-8859,
or Windows 1252, by passing the position of a desired character in the encoding's mapping table. However, note
that this function is not aware of any string encoding, and in particular cannot be passed a Unicode code point
value to generate a string in a multibyte encoding like UTF-8 or UTF-16. This function complements
[[CharSB#ord()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L47">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L47">
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
        <list><li>int <format style="bold">$codepoint</format> - <format style="italic">
An integer between 0 and 255.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">A single-character string containing the specified byte.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="Useful links:">
        <list><li><a href="https://www.man7.org/linux/man-pages/man7/ascii.7.html">https://www.man7.org/linux/man-pages/man7/ascii.7.html</a> - <format style="italic">List of codepoint values</format></li></list>
    </def>
</deflist>
## method: ord {id="ord()"}

<code-block lang="php">
    <![CDATA[public static CharSB::ord(string $character):int]]>
</code-block>













### ### Convert the first byte of a string to a value between 0 and 255

<p><format style="italic">Interprets the binary value of the first byte from $character as an unsigned integer between 0 and 255. If the
string is in a single-byte encoding, such as ASCII, ISO-8859, or Windows 1252, this is equivalent to returning
the position of a character in the character set's mapping table. However, note that this function is not
aware of any string encoding, and in particular will never identify a Unicode code point in a multibyte
encoding such as UTF-8 or UTF-16. This function complements [[CharSB#chr()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L69">
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
        <list><li>string <format style="bold">$character</format> - <format style="italic">
A character.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">An integer between 0 and 255.</format></li></list>
    </def>
</deflist>