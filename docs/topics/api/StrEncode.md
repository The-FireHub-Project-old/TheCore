<title># StrEncode</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\StrEncode()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### String encoding low-level proxy class

<p><format style="italic">Encoding is the process of assigning numbers to graphical characters, especially the written characters of human
language, allowing them to be stored, transmitted, and transformed using digital computers.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\StrEncode
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L33">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php">
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
|public static |<a href="#base64encode()">base64Encode</a>|### Encodes string with MIME base64|
|public static |<a href="#base64decode()">base64Decode</a>|### Decodes data encoded with MIME base64|
|public static |<a href="#uuencode()">uuEncode</a>|### Uuencode a string|
|public static |<a href="#uudecode()">uuDecode</a>|### Decode an uuencoded data|
|public static |<a href="#quotedprintableencode()">quotedPrintableEncode</a>|### Convert a 8bit string to a quoted-printable data|
|public static |<a href="#quotedprintabledecode()">quotedPrintableDecode</a>|### Convert a quoted-printable data to an 8 bit string|

## method: base64Encode {id="base64encode()"}

<code-block lang="php">
    <![CDATA[public static StrEncode::base64Encode(string $string):string]]>
</code-block>













### ### Encodes string with MIME base64

<p><format style="italic">This encoding is designed to make binary data survive transport through transport layers that are not 8-bit
clean, such as mail bodies. Base64-encoded data takes about 33% more space than the original data.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L48">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L48">
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
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The data to be encoded.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Base64 encoded data.</format></li></list>
    </def>
</deflist>
## method: base64Decode {id="base64decode()"}

<code-block lang="php">
    <![CDATA[public static StrEncode::base64Decode(string $data):string]]>
</code-block>













### ### Decodes data encoded with MIME base64



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L66">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L66">
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
        <list><li>string <format style="bold">$data</format> - <format style="italic">
The base64 encoded data.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we cannot decode $data to base64.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Decoded string.</format></li></list>
    </def>
</deflist>
## method: uuEncode {id="uuencode()"}

<code-block lang="php">
    <![CDATA[public static StrEncode::uuEncode(string $string):string]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>UUEncode neither produces the beginning nor the end line, which are part of uuencoded files.</p>
            </note>

### ### Uuencode a string

<p><format style="italic">Encodes a string using the uuencode algorithm. Uuencode translates all strings (including binary data) into
printable characters, making them safe for network transmissions. Uuencoded data is about 35% larger than the
original.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L89">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L89">
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
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The data to be encoded.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The uuencoded data.</format></li></list>
    </def>
</deflist>
## method: uuDecode {id="uudecode()"}

<code-block lang="php">
    <![CDATA[public static StrEncode::uuDecode(string $data):string]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>UUDecode neither accepts the beginning nor the end line, which are part of uuencoded files.</p>
            </note>

### ### Decode an uuencoded data



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L110">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L110">
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
        <list><li>string <format style="bold">$data</format> - <format style="italic">
The uuencoded data.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we cannot uudecode $data.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Decoded data as a string or false on failure.</format></li></list>
    </def>
</deflist>
## method: quotedPrintableEncode {id="quotedprintableencode()"}

<code-block lang="php">
    <![CDATA[public static StrEncode::quotedPrintableEncode(string $string):string]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>This method is a useful tool for working with email messages.</p>
            </note>

### ### Convert a 8bit string to a quoted-printable data



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L129">
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
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The data to be encoded.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Quoted-printable encoded data.</format></li></list>
    </def>
</deflist>
## method: quotedPrintableDecode {id="quotedprintabledecode()"}

<code-block lang="php">
    <![CDATA[public static StrEncode::quotedPrintableDecode(string $data):string]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>This method is a useful tool for working with email messages.</p>
            </note>

### ### Convert a quoted-printable data to an 8 bit string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L147">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L147">
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
        <list><li>string <format style="bold">$data</format> - <format style="italic">
The quoted printable data.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The 8-bit binary string.</format></li></list>
    </def>
</deflist>