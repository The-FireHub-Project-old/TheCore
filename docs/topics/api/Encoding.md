<title># Encoding</title>

<code-block lang="php">
<![CDATA[enum Encoding]]>
</code-block>













### ### Supported character encodings enum



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\String\Encoding
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php">
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
    <def title="This enum is used by:">
        <list><li><a href="CharMB.md#chr()">\FireHub\Core\Support\LowLevel\CharMB::chr()</a>  - <format style="italic">As parameter.</format></li><li><a href="CharMB.md#ord()">\FireHub\Core\Support\LowLevel\CharMB::ord()</a>  - <format style="italic">As parameter.</format></li><li><a href="RegexMB.md#encoding()">\FireHub\Core\Support\LowLevel\RegexMB::encoding()</a>  - <format style="italic">To get or set regex character encoding.</format></li><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#firstpart()">\FireHub\Core\Support\LowLevel\StrMB::firstPart()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#lastpart()">\FireHub\Core\Support\LowLevel\StrMB::lastPart()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#split()">\FireHub\Core\Support\LowLevel\StrMB::split()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#partcount()">\FireHub\Core\Support\LowLevel\StrMB::partCount()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#firstposition()">\FireHub\Core\Support\LowLevel\StrMB::firstPosition()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#lastposition()">\FireHub\Core\Support\LowLevel\StrMB::lastPosition()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#encoding()">\FireHub\Core\Support\LowLevel\StrMB::encoding()</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="StrMB.md#detectencoding()">\FireHub\Core\Support\LowLevel\StrMB::detectEncoding()</a>  - <format style="italic">As detected encoding.</format></li><li><a href="StrMB.md#convertencoding()">\FireHub\Core\Support\LowLevel\StrMB::convertEncoding()</a>  - <format style="italic">As converted encoding.</format></li><li><a href="StrMB.md#checkencoding()">\FireHub\Core\Support\LowLevel\StrMB::checkEncoding()</a>  - <format style="italic">As checked encoding.</format></li></list>
    </def>
</deflist>
### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#base64">BASE64</a>||&#039;BASE64&#039;|
|<a href="#uuencode">UUENCODE</a>||&#039;UUENCODE&#039;|
|<a href="#html_entities">HTML_ENTITIES</a>||&#039;HTML-ENTITIES&#039;|
|<a href="#quoted_printable">QUOTED_PRINTABLE</a>||&#039;Quoted-Printable&#039;|
|<a href="#seven_bit">SEVEN_BIT</a>||&#039;7bit&#039;|
|<a href="#eight_bit">EIGHT_BIT</a>||&#039;8bit&#039;|
|<a href="#ucs_4">UCS_4</a>||&#039;UCS-4&#039;|
|<a href="#ucs_4be">UCS_4BE</a>||&#039;UCS-4BE&#039;|
|<a href="#ucs_4le">UCS_4LE</a>||&#039;UCS-4LE&#039;|
|<a href="#ucs_2">UCS_2</a>||&#039;UCS-2&#039;|
|<a href="#ucs_2be">UCS_2BE</a>||&#039;UCS-2BE&#039;|
|<a href="#ucs_2le">UCS_2LE</a>||&#039;UCS-2LE&#039;|
|<a href="#utf_32">UTF_32</a>||&#039;UTF-32&#039;|
|<a href="#utf_32be">UTF_32BE</a>||&#039;UTF-32BE&#039;|
|<a href="#utf_32le">UTF_32LE</a>||&#039;UTF-32LE&#039;|
|<a href="#utf_16">UTF_16</a>||&#039;UTF-16&#039;|
|<a href="#utf_16be">UTF_16BE</a>||&#039;UTF-16BE&#039;|
|<a href="#utf_16le">UTF_16LE</a>||&#039;UTF-16LE&#039;|
|<a href="#utf_8">UTF_8</a>||&#039;UTF-8&#039;|
|<a href="#utf_7">UTF_7</a>||&#039;UTF-7&#039;|
|<a href="#utf7_imap">UTF7_IMAP</a>||&#039;UTF7-IMAP&#039;|
|<a href="#ascii">ASCII</a>||&#039;ASCII&#039;|
|<a href="#euc_jp">EUC_JP</a>||&#039;EUC-JP&#039;|
|<a href="#sjis">SJIS</a>||&#039;SJIS&#039;|
|<a href="#eucjp_win">EUCJP_WIN</a>||&#039;eucJP-win&#039;|
|<a href="#euc_jp_2004">EUC_JP_2004</a>||&#039;EUC-JP-2004&#039;|
|<a href="#sjis_mobile_docomo">SJIS_MOBILE_DOCOMO</a>||&#039;SJIS-Mobile#DOCOMO&#039;|
|<a href="#sjis_mobile_kddi">SJIS_MOBILE_KDDI</a>||&#039;SJIS-Mobile#KDDI&#039;|
|<a href="#sjis_mobile_softbank">SJIS_MOBILE_SOFTBANK</a>||&#039;SJIS-Mobile#SOFTBANK&#039;|
|<a href="#sjis_mac">SJIS_MAC</a>||&#039;SJIS-mac&#039;|
|<a href="#sjis_2004">SJIS_2004</a>||&#039;SJIS-2004&#039;|
|<a href="#utf_8_mobile_docomo">UTF_8_MOBILE_DOCOMO</a>||&#039;UTF-8-Mobile#DOCOMO&#039;|
|<a href="#utf_8_mobile_kddi_a">UTF_8_MOBILE_KDDI_A</a>||&#039;UTF-8-Mobile#KDDI-A&#039;|
|<a href="#utf_8_mobile_kddi_b">UTF_8_MOBILE_KDDI_B</a>||&#039;UTF-8-Mobile#KDDI-B&#039;|
|<a href="#utf_8_mobile_softbank">UTF_8_MOBILE_SOFTBANK</a>||&#039;UTF-8-Mobile#SOFTBANK&#039;|
|<a href="#cp932">CP932</a>||&#039;CP932&#039;|
|<a href="#cp51932">CP51932</a>||&#039;CP51932&#039;|
|<a href="#jis">JIS</a>||&#039;JIS&#039;|
|<a href="#iso_2022_jp">ISO_2022_JP</a>||&#039;ISO-2022-JP&#039;|
|<a href="#iso_2022_jp_ms">ISO_2022_JP_MS</a>||&#039;ISO-2022-JP-MS&#039;|
|<a href="#gb18030">GB18030</a>||&#039;GB18030&#039;|
|<a href="#windows_1252">WINDOWS_1252</a>||&#039;Windows-1252&#039;|
|<a href="#windows_1254">WINDOWS_1254</a>||&#039;Windows-1254&#039;|
|<a href="#iso_8859_1">ISO_8859_1</a>||&#039;ISO-8859-1&#039;|
|<a href="#iso_8859_2">ISO_8859_2</a>||&#039;ISO-8859-2&#039;|
|<a href="#iso_8859_3">ISO_8859_3</a>||&#039;ISO-8859-3&#039;|
|<a href="#iso_8859_4">ISO_8859_4</a>||&#039;ISO-8859-4&#039;|
|<a href="#iso_8859_5">ISO_8859_5</a>||&#039;ISO-8859-5&#039;|
|<a href="#iso_8859_6">ISO_8859_6</a>||&#039;ISO-8859-6&#039;|
|<a href="#iso_8859_7">ISO_8859_7</a>||&#039;ISO-8859-7&#039;|
|<a href="#iso_8859_8">ISO_8859_8</a>||&#039;ISO-8859-8&#039;|
|<a href="#iso_8859_9">ISO_8859_9</a>||&#039;ISO-8859-9&#039;|
|<a href="#iso_8859_10">ISO_8859_10</a>||&#039;ISO-8859-10&#039;|
|<a href="#iso_8859_13">ISO_8859_13</a>||&#039;ISO-8859-13&#039;|
|<a href="#iso_8859_14">ISO_8859_14</a>||&#039;ISO-8859-14&#039;|
|<a href="#iso_8859_15">ISO_8859_15</a>||&#039;ISO-8859-15&#039;|
|<a href="#iso_8859_16">ISO_8859_16</a>||&#039;ISO-8859-16&#039;|
|<a href="#euc_cn">EUC_CN</a>||&#039;EUC-CN&#039;|
|<a href="#cp936">CP936</a>||&#039;CP936&#039;|
|<a href="#hz">HZ</a>||&#039;HZ&#039;|
|<a href="#euc_tw">EUC_TW</a>||&#039;EUC-TW&#039;|
|<a href="#big_5">BIG_5</a>||&#039;BIG-5&#039;|
|<a href="#cp950">CP950</a>||&#039;CP950&#039;|
|<a href="#euc_kr">EUC_KR</a>||&#039;EUC-KR&#039;|
|<a href="#uhc">UHC</a>||&#039;UHC&#039;|
|<a href="#iso_2022_kr">ISO_2022_KR</a>||&#039;ISO-2022-KR&#039;|
|<a href="#windows_1251">WINDOWS_1251</a>||&#039;Windows-1251&#039;|
|<a href="#cp866">CP866</a>||&#039;CP866&#039;|
|<a href="#koi8_r">KOI8_R</a>||&#039;KOI8-R&#039;|
|<a href="#koi8_u">KOI8_U</a>||&#039;KOI8-U&#039;|
|<a href="#arm_scii_8">ARM_SCII_8</a>||&#039;ArmSCII-8&#039;|
|<a href="#cp850">CP850</a>||&#039;CP850&#039;|
|<a href="#iso_2022_jp_2004">ISO_2022_JP_2004</a>||&#039;ISO-2022-JP-2004&#039;|
|<a href="#iso_2022_jp_mobile_kddi">ISO_2022_JP_MOBILE_KDDI</a>||&#039;ISO-2022-JP-MOBILE#KDDI&#039;|
|<a href="#cp50220">CP50220</a>||&#039;CP50220&#039;|
|<a href="#cp50221">CP50221</a>||&#039;CP50221&#039;|
|<a href="#cp50222">CP50222</a>||&#039;CP50222&#039;|

## case: BASE64 {id="base64"}

<code-block lang="php">
<![CDATA[
    BASE64 = &#039;BASE64&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L26">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L26">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UUENCODE {id="uuencode"}

<code-block lang="php">
<![CDATA[
    UUENCODE = &#039;UUENCODE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L31">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L31">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: HTML_ENTITIES {id="html_entities"}

<code-block lang="php">
<![CDATA[
    HTML_ENTITIES = &#039;HTML-ENTITIES&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L36">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L36">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: QUOTED_PRINTABLE {id="quoted_printable"}

<code-block lang="php">
<![CDATA[
    QUOTED_PRINTABLE = &#039;Quoted-Printable&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L41">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SEVEN_BIT {id="seven_bit"}

<code-block lang="php">
<![CDATA[
    SEVEN_BIT = &#039;7bit&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L46">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L46">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EIGHT_BIT {id="eight_bit"}

<code-block lang="php">
<![CDATA[
    EIGHT_BIT = &#039;8bit&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L51">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L51">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UCS_4 {id="ucs_4"}

<code-block lang="php">
<![CDATA[
    UCS_4 = &#039;UCS-4&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L56">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L56">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UCS_4BE {id="ucs_4be"}

<code-block lang="php">
<![CDATA[
    UCS_4BE = &#039;UCS-4BE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L61">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L61">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UCS_4LE {id="ucs_4le"}

<code-block lang="php">
<![CDATA[
    UCS_4LE = &#039;UCS-4LE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L66">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L66">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UCS_2 {id="ucs_2"}

<code-block lang="php">
<![CDATA[
    UCS_2 = &#039;UCS-2&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L71">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L71">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UCS_2BE {id="ucs_2be"}

<code-block lang="php">
<![CDATA[
    UCS_2BE = &#039;UCS-2BE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L76">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L76">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UCS_2LE {id="ucs_2le"}

<code-block lang="php">
<![CDATA[
    UCS_2LE = &#039;UCS-2LE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L81">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_32 {id="utf_32"}

<code-block lang="php">
<![CDATA[
    UTF_32 = &#039;UTF-32&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L86">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L86">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_32BE {id="utf_32be"}

<code-block lang="php">
<![CDATA[
    UTF_32BE = &#039;UTF-32BE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L91">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L91">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_32LE {id="utf_32le"}

<code-block lang="php">
<![CDATA[
    UTF_32LE = &#039;UTF-32LE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L96">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L96">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_16 {id="utf_16"}

<code-block lang="php">
<![CDATA[
    UTF_16 = &#039;UTF-16&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L101">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L101">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_16BE {id="utf_16be"}

<code-block lang="php">
<![CDATA[
    UTF_16BE = &#039;UTF-16BE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L106">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L106">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_16LE {id="utf_16le"}

<code-block lang="php">
<![CDATA[
    UTF_16LE = &#039;UTF-16LE&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L111">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L111">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_8 {id="utf_8"}

<code-block lang="php">
<![CDATA[
    UTF_8 = &#039;UTF-8&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L116">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L116">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_7 {id="utf_7"}

<code-block lang="php">
<![CDATA[
    UTF_7 = &#039;UTF-7&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L121">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L121">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF7_IMAP {id="utf7_imap"}

<code-block lang="php">
<![CDATA[
    UTF7_IMAP = &#039;UTF7-IMAP&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L126">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L126">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ASCII {id="ascii"}

<code-block lang="php">
<![CDATA[
    ASCII = &#039;ASCII&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L131">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L131">
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
        <list><li><a href="Char.md#isascii()">\FireHub\Core\Support\Char::isASCII()</a>  - <format style="italic">As string encoding.</format></li><li><a href="Str.md#isascii()">\FireHub\Core\Support\Str::isASCII()</a>  - <format style="italic">As string encoding.</format></li></list>
    </def>
</deflist>
## case: EUC_JP {id="euc_jp"}

<code-block lang="php">
<![CDATA[
    EUC_JP = &#039;EUC-JP&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L136">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L136">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SJIS {id="sjis"}

<code-block lang="php">
<![CDATA[
    SJIS = &#039;SJIS&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L141">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L141">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EUCJP_WIN {id="eucjp_win"}

<code-block lang="php">
<![CDATA[
    EUCJP_WIN = &#039;eucJP-win&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L146">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L146">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EUC_JP_2004 {id="euc_jp_2004"}

<code-block lang="php">
<![CDATA[
    EUC_JP_2004 = &#039;EUC-JP-2004&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L151">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L151">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SJIS_MOBILE_DOCOMO {id="sjis_mobile_docomo"}

<code-block lang="php">
<![CDATA[
    SJIS_MOBILE_DOCOMO = &#039;SJIS-Mobile#DOCOMO&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L156">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L156">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SJIS_MOBILE_KDDI {id="sjis_mobile_kddi"}

<code-block lang="php">
<![CDATA[
    SJIS_MOBILE_KDDI = &#039;SJIS-Mobile#KDDI&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L161">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L161">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SJIS_MOBILE_SOFTBANK {id="sjis_mobile_softbank"}

<code-block lang="php">
<![CDATA[
    SJIS_MOBILE_SOFTBANK = &#039;SJIS-Mobile#SOFTBANK&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L166">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L166">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SJIS_MAC {id="sjis_mac"}

<code-block lang="php">
<![CDATA[
    SJIS_MAC = &#039;SJIS-mac&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L171">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L171">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SJIS_2004 {id="sjis_2004"}

<code-block lang="php">
<![CDATA[
    SJIS_2004 = &#039;SJIS-2004&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L176">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L176">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_8_MOBILE_DOCOMO {id="utf_8_mobile_docomo"}

<code-block lang="php">
<![CDATA[
    UTF_8_MOBILE_DOCOMO = &#039;UTF-8-Mobile#DOCOMO&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L181">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L181">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_8_MOBILE_KDDI_A {id="utf_8_mobile_kddi_a"}

<code-block lang="php">
<![CDATA[
    UTF_8_MOBILE_KDDI_A = &#039;UTF-8-Mobile#KDDI-A&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L186">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_8_MOBILE_KDDI_B {id="utf_8_mobile_kddi_b"}

<code-block lang="php">
<![CDATA[
    UTF_8_MOBILE_KDDI_B = &#039;UTF-8-Mobile#KDDI-B&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L191">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L191">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UTF_8_MOBILE_SOFTBANK {id="utf_8_mobile_softbank"}

<code-block lang="php">
<![CDATA[
    UTF_8_MOBILE_SOFTBANK = &#039;UTF-8-Mobile#SOFTBANK&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L196">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L196">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP932 {id="cp932"}

<code-block lang="php">
<![CDATA[
    CP932 = &#039;CP932&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L201">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L201">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP51932 {id="cp51932"}

<code-block lang="php">
<![CDATA[
    CP51932 = &#039;CP51932&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L206">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L206">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: JIS {id="jis"}

<code-block lang="php">
<![CDATA[
    JIS = &#039;JIS&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L211">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L211">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_2022_JP {id="iso_2022_jp"}

<code-block lang="php">
<![CDATA[
    ISO_2022_JP = &#039;ISO-2022-JP&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L216">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L216">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_2022_JP_MS {id="iso_2022_jp_ms"}

<code-block lang="php">
<![CDATA[
    ISO_2022_JP_MS = &#039;ISO-2022-JP-MS&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L221">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L221">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: GB18030 {id="gb18030"}

<code-block lang="php">
<![CDATA[
    GB18030 = &#039;GB18030&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L226">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L226">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WINDOWS_1252 {id="windows_1252"}

<code-block lang="php">
<![CDATA[
    WINDOWS_1252 = &#039;Windows-1252&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L231">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L231">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WINDOWS_1254 {id="windows_1254"}

<code-block lang="php">
<![CDATA[
    WINDOWS_1254 = &#039;Windows-1254&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L236">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L236">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_1 {id="iso_8859_1"}

<code-block lang="php">
<![CDATA[
    ISO_8859_1 = &#039;ISO-8859-1&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L241">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L241">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_2 {id="iso_8859_2"}

<code-block lang="php">
<![CDATA[
    ISO_8859_2 = &#039;ISO-8859-2&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L246">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L246">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_3 {id="iso_8859_3"}

<code-block lang="php">
<![CDATA[
    ISO_8859_3 = &#039;ISO-8859-3&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L251">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L251">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_4 {id="iso_8859_4"}

<code-block lang="php">
<![CDATA[
    ISO_8859_4 = &#039;ISO-8859-4&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L256">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L256">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_5 {id="iso_8859_5"}

<code-block lang="php">
<![CDATA[
    ISO_8859_5 = &#039;ISO-8859-5&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L261">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L261">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_6 {id="iso_8859_6"}

<code-block lang="php">
<![CDATA[
    ISO_8859_6 = &#039;ISO-8859-6&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L266">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L266">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_7 {id="iso_8859_7"}

<code-block lang="php">
<![CDATA[
    ISO_8859_7 = &#039;ISO-8859-7&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L271">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L271">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_8 {id="iso_8859_8"}

<code-block lang="php">
<![CDATA[
    ISO_8859_8 = &#039;ISO-8859-8&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L276">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L276">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_9 {id="iso_8859_9"}

<code-block lang="php">
<![CDATA[
    ISO_8859_9 = &#039;ISO-8859-9&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L281">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L281">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_10 {id="iso_8859_10"}

<code-block lang="php">
<![CDATA[
    ISO_8859_10 = &#039;ISO-8859-10&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L286">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L286">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_13 {id="iso_8859_13"}

<code-block lang="php">
<![CDATA[
    ISO_8859_13 = &#039;ISO-8859-13&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L291">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L291">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_14 {id="iso_8859_14"}

<code-block lang="php">
<![CDATA[
    ISO_8859_14 = &#039;ISO-8859-14&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L296">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L296">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_15 {id="iso_8859_15"}

<code-block lang="php">
<![CDATA[
    ISO_8859_15 = &#039;ISO-8859-15&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L301">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L301">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_8859_16 {id="iso_8859_16"}

<code-block lang="php">
<![CDATA[
    ISO_8859_16 = &#039;ISO-8859-16&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L306">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L306">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EUC_CN {id="euc_cn"}

<code-block lang="php">
<![CDATA[
    EUC_CN = &#039;EUC-CN&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L311">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L311">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP936 {id="cp936"}

<code-block lang="php">
<![CDATA[
    CP936 = &#039;CP936&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L316">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L316">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: HZ {id="hz"}

<code-block lang="php">
<![CDATA[
    HZ = &#039;HZ&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L321">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L321">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EUC_TW {id="euc_tw"}

<code-block lang="php">
<![CDATA[
    EUC_TW = &#039;EUC-TW&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L326">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L326">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BIG_5 {id="big_5"}

<code-block lang="php">
<![CDATA[
    BIG_5 = &#039;BIG-5&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L331">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L331">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP950 {id="cp950"}

<code-block lang="php">
<![CDATA[
    CP950 = &#039;CP950&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L336">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L336">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EUC_KR {id="euc_kr"}

<code-block lang="php">
<![CDATA[
    EUC_KR = &#039;EUC-KR&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L341">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L341">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UHC {id="uhc"}

<code-block lang="php">
<![CDATA[
    UHC = &#039;UHC&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L346">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L346">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_2022_KR {id="iso_2022_kr"}

<code-block lang="php">
<![CDATA[
    ISO_2022_KR = &#039;ISO-2022-KR&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L351">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L351">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WINDOWS_1251 {id="windows_1251"}

<code-block lang="php">
<![CDATA[
    WINDOWS_1251 = &#039;Windows-1251&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L356">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L356">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP866 {id="cp866"}

<code-block lang="php">
<![CDATA[
    CP866 = &#039;CP866&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L361">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L361">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: KOI8_R {id="koi8_r"}

<code-block lang="php">
<![CDATA[
    KOI8_R = &#039;KOI8-R&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L366">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L366">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: KOI8_U {id="koi8_u"}

<code-block lang="php">
<![CDATA[
    KOI8_U = &#039;KOI8-U&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L371">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L371">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ARM_SCII_8 {id="arm_scii_8"}

<code-block lang="php">
<![CDATA[
    ARM_SCII_8 = &#039;ArmSCII-8&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L376">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L376">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP850 {id="cp850"}

<code-block lang="php">
<![CDATA[
    CP850 = &#039;CP850&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L381">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L381">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_2022_JP_2004 {id="iso_2022_jp_2004"}

<code-block lang="php">
<![CDATA[
    ISO_2022_JP_2004 = &#039;ISO-2022-JP-2004&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L386">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L386">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ISO_2022_JP_MOBILE_KDDI {id="iso_2022_jp_mobile_kddi"}

<code-block lang="php">
<![CDATA[
    ISO_2022_JP_MOBILE_KDDI = &#039;ISO-2022-JP-MOBILE#KDDI&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L391">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L391">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP50220 {id="cp50220"}

<code-block lang="php">
<![CDATA[
    CP50220 = &#039;CP50220&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L396">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L396">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP50221 {id="cp50221"}

<code-block lang="php">
<![CDATA[
    CP50221 = &#039;CP50221&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L401">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L401">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: CP50222 {id="cp50222"}

<code-block lang="php">
<![CDATA[
    CP50222 = &#039;CP50222&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L406">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/firehub.Encoding.php#L406">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>