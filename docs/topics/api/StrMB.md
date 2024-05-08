<title># StrMB</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\StrMB()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Multibyte string low-level proxy class

<p><format style="italic">Class provides multibyte specific string functions that help you deal with multibyte encodings.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\StrMB
    </def><def title="Parent class:">
        <a href="StrSafe.md">\FireHub\Core\Support\LowLevel\StrSafe</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L48">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php">
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
|public static |<a href="#convert()">convert</a>|### Perform case folding on a string|
|public static |<a href="#part()">part</a>|### Get part of string|
|public static |<a href="#firstpart()">firstPart</a>|### Find first part of a string|
|public static |<a href="#lastpart()">lastPart</a>|### Find last part of a string|
|public static |<a href="#split()">split</a>|### Given a multibyte string, return an array of its characters|
|public static |<a href="#partcount()">partCount</a>|### Get number of times the searched substring occurs in the string|
|public static |<a href="#length()">length</a>|### Get string length|
|public static |<a href="#firstposition()">firstPosition</a>|### Find the position of the first occurrence for a substring in a string|
|public static |<a href="#lastposition()">lastPosition</a>|### Find the position of the last occurrence for a substring in a string|
|public static |<a href="#encoding()">encoding</a>|### Set/Get internal character encoding|
|public static |<a href="#detectencoding()">detectEncoding</a>|### Detect character encoding|
|public static |<a href="#convertencoding()">convertEncoding</a>|### Convert a string from one character encoding to another|
|public static |<a href="#checkencoding()">checkEncoding</a>|### Check if strings are valid for the specified encoding|
|inherited public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|inherited public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|inherited public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|inherited public static |<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|inherited public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|inherited public static |<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|inherited public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|inherited public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|inherited public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|inherited public static |<a href="#explode()">explode</a>|### Split a string by a string|
|inherited public static |<a href="#compare()">compare</a>|### String comparison|
|inherited public static |<a href="#translate()">translate</a>|### Translate characters or replace substrings|

## method: convert {id="convert()"}

<code-block lang="php">
    <![CDATA[public static StrMB::convert(string $string, \FireHub\Core\Support\Enums\String\CaseFolding $caseFolding, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):mixed]]>
</code-block>













### ### Perform case folding on a string

<p><format style="italic">Performs case folding on a string, converted in the way specified by $caseFolding.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L73">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L73">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li><li><a href="CaseFolding.md#upper">\FireHub\Core\Support\Enums\String\CaseFolding::UPPER</a>  - <format style="italic">To convert to uppercase.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To convert to lowercase.</format></li><li><a href="CaseFolding.md#title">\FireHub\Core\Support\Enums\String\CaseFolding::TITLE</a>  - <format style="italic">To convert to title-case.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Char.md#tolower()">\FireHub\Core\Support\Char::toLower()</a>  - <format style="italic">To convert character.</format></li><li><a href="Char.md#toupper()">\FireHub\Core\Support\Char::toUpper()</a>  - <format style="italic">To convert character.</format></li><li><a href="IStr.md#startswith()">\FireHub\Core\Support\IStr::startsWith()</a>  - <format style="italic">To convert raw string.</format></li><li><a href="IStr.md#endswith()">\FireHub\Core\Support\IStr::endsWith()</a>  - <format style="italic">To convert raw string.</format></li><li><a href="IStr.md#contains()">\FireHub\Core\Support\IStr::contains()</a>  - <format style="italic">To convert the string.</format></li><li><a href="IStr.md#equals()">\FireHub\Core\Support\IStr::equals()</a>  - <format style="italic">To convert the string.</format></li><li><a href="IStr.md#containtimes()">\FireHub\Core\Support\IStr::containTimes()</a>  - <format style="italic">To convert the string.</format></li><li><a href="Str.md#tolower()">\FireHub\Core\Support\Strings\Str::toLower()</a>  - <format style="italic">To convert string.</format></li><li><a href="Str.md#toupper()">\FireHub\Core\Support\Strings\Str::toUpper()</a>  - <format style="italic">To convert string.</format></li><li><a href="Str.md#totitle()">\FireHub\Core\Support\Strings\Str::toTitle()</a>  - <format style="italic">To convert string.</format></li><li><a href="Str.md#capitalize()">\FireHub\Core\Support\Strings\Str::capitalize()</a>  - <format style="italic">To perform case folding on a string.</format></li><li><a href="Str.md#decapitalize()">\FireHub\Core\Support\Strings\Str::deCapitalize()</a>  - <format style="italic">To perform case folding on a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string being converted.
</format></li><li><a href="CaseFolding.md">\FireHub\Core\Support\Enums\String\CaseFolding</a> <format style="bold">$caseFolding</format> - <format style="italic">
The case folding type.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Converted string.</format></li></list>
    </def>
</deflist>
## method: part {id="part()"}

<code-block lang="php">
    <![CDATA[public static StrMB::part(string $string, int $start, null|int $length = null, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string]]>
</code-block>













### ### Get part of string

<p><format style="italic">Performs a multibyte safe [[StrSB#part()]] operation based on the number of characters. Position is counted
from the beginning of $string. First character's position is 0. Second character position is 1, and so on.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L111">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L111">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#carry()">\FireHub\Core\Support\Strings\Str::carry()</a>  - <format style="italic">To get part of string.</format></li><li><a href="Str.md#move()">\FireHub\Core\Support\Strings\Str::move()</a>  - <format style="italic">To get part of string.</format></li><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To get string segment to mask.</format></li><li><a href="Str.md#safetruncate()">\FireHub\Core\Support\Strings\Str::safeTruncate()</a>  - <format style="italic">To part of the string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to extract the substring from.
</format></li><li>int <format style="bold">$start</format> - <format style="italic">
If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
and so forth.
If the start is negative, the returned string will start at the start character from the end of the string.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
Maximum number of characters to use from string.
If omitted or NULL is passed, extract all characters to the end of the string.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The portion of string specified by the start and length parameters.</format></li></list>
    </def>
</deflist>
## method: firstPart {id="firstpart()"}

<code-block lang="php">
    <![CDATA[public static StrMB::firstPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string|false]]>
</code-block>













### ### Find first part of a string

<p><format style="italic">Returns part of $string starting from and including the first occurrence of $find to the end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L143">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L143">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="IStr.md#carryfrom()">\FireHub\Core\Support\IStr::carryFrom()</a>  - <format style="italic">To get the first part of a string.</format></li><li><a href="IStr.md#carryuntil()">\FireHub\Core\Support\IStr::carryUntil()</a>  - <format style="italic">To get the first part of a string.</format></li><li><a href="Str.md#carryfrom()">\FireHub\Core\Support\Strings\Str::carryFrom()</a>  - <format style="italic">To get the first part of a string.</format></li><li><a href="Str.md#carryuntil()">\FireHub\Core\Support\Strings\Str::carryUntil()</a>  - <format style="italic">To get the first part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string being searched.
</format></li><li>bool <format style="bold">$before_needle</format> = false - <format style="italic">[optional] 
If true, return the part of the string before the first occurrence (excluding the find string).
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Is string to find case-sensitive or not.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string or false - <format style="italic">The portion of string or false if needle is not found.</format></li></list>
    </def>
</deflist>
## method: lastPart {id="lastpart()"}

<code-block lang="php">
    <![CDATA[public static StrMB::lastPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string|false]]>
</code-block>













### ### Find last part of a string

<p><format style="italic">This function returns the portion of $string which starts at the last occurrence of $find and goes until the
end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L178">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L178">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="IStr.md#carryfromlast()">\FireHub\Core\Support\IStr::carryFromLast()</a>  - <format style="italic">To get the last part of a string.</format></li><li><a href="IStr.md#carryuntillast()">\FireHub\Core\Support\IStr::carryUntilLast()</a>  - <format style="italic">To get the last part of a string.</format></li><li><a href="Str.md#carryfromlast()">\FireHub\Core\Support\Strings\Str::carryFromLast()</a>  - <format style="italic">To get the last part of a string.</format></li><li><a href="Str.md#carryuntillast()">\FireHub\Core\Support\Strings\Str::carryUntilLast()</a>  - <format style="italic">To get the last part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string being searched.
</format></li><li>bool <format style="bold">$before_needle</format> = false - <format style="italic">[optional] 
If true, return the part of the string before the last occurrence (excluding the find string).
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Is string to find case-sensitive or not.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string or false - <format style="italic">The portion of string, or false if needle is not found.</format></li></list>
    </def>
</deflist>
## method: split {id="split()"}

<code-block lang="php">
    <![CDATA[public static StrMB::split(string $string, positive-int $length = 1, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):list<non-empty-string>]]>
</code-block>













### ### Given a multibyte string, return an array of its characters

<p><format style="italic">This function will return an array of strings, it is a version of [[StrSB#split()]] with support for encodings of
variable character size as well as fixed-size encodings of 1,2 or 4 byte characters. If the $length parameter
is specified, the string is broken down into chunks of the specified length in characters (not bytes). The
$encoding parameter can be optionally specified, and it is good practice to do so.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L213">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L213">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#chop()">\FireHub\Core\Support\Strings\Str::chop()</a>  - <format style="italic">To return an array of string characters.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The input string.
</format></li><li>positive-int <format style="bold">$length</format> = 1 - <format style="italic">[optional] 
Maximum length of the chunk.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If length is less than 1.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>list&lt;non-empty-string&gt; - <format style="italic">If the optional $length parameter is specified, the returned array will be broken down into chunks with each being
$length in length, except the final chunk which may be shorter if the string does not divide evenly. The default $length is 1, meaning every chunk
will be one byte in size.</format></li></list>
    </def>
</deflist>
## method: partCount {id="partcount()"}

<code-block lang="php">
    <![CDATA[public static StrMB::partCount(string $string, string $search, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null)]]>
</code-block>













### ### Get number of times the searched substring occurs in the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L240">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L240">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string being checked.
</format></li><li>string <format style="bold">$search</format> - <format style="italic">
The string being found.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int Number of times the searched substring occurs in the string.</format></li></list>
    </def>
</deflist>
## method: length {id="length()"}

<code-block lang="php">
    <![CDATA[public static StrMB::length(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null)]]>
</code-block>













### ### Get string length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L263">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L263">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Char.md#__construct()">\FireHub\Core\Support\Char::__construct()</a>  - <format style="italic">To check the length of the provided character.</format></li><li><a href="Str.md#carryafter()">\FireHub\Core\Support\Strings\Str::carryAfter()</a>  - <format style="italic">To get length for $find.</format></li><li><a href="Str.md#carryafterlast()">\FireHub\Core\Support\Strings\Str::carryAfterLast()</a>  - <format style="italic">To get length for $find.</format></li><li><a href="Str.md#move()">\FireHub\Core\Support\Strings\Str::move()</a>  - <format style="italic">To get string length.</format></li><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To get masked string length.</format></li><li><a href="Str.md#removeprefix()">\FireHub\Core\Support\Strings\Str::removePrefix()</a>  - <format style="italic">To get $prefix length.</format></li><li><a href="Str.md#removesuffix()">\FireHub\Core\Support\Strings\Str::removeSuffix()</a>  - <format style="italic">To get $suffix length.</format></li><li><a href="Str.md#truncate()">\FireHub\Core\Support\Strings\Str::truncate()</a>  - <format style="italic">To get length of $with argument.</format></li><li><a href="Str.md#safetruncate()">\FireHub\Core\Support\Strings\Str::safeTruncate()</a>  - <format style="italic">To get length of $with argument.</format></li><li><a href="Str.md#break()">\FireHub\Core\Support\Strings\Str::break()</a>  - <format style="italic">To get substring length.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string being measured for length.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int String length.</format></li></list>
    </def>
</deflist>
## method: firstPosition {id="firstposition()"}

<code-block lang="php">
    <![CDATA[public static StrMB::firstPosition(string $search, string $string, bool $case_sensitive = true, int $offset, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null)]]>
</code-block>













### ### Find the position of the first occurrence for a substring in a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L293">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L293">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="IStr.md#indexof()">\FireHub\Core\Support\IStr::indexOf()</a>  - <format style="italic">To find the position for the first occurrence of a substring in a string.</format></li><li><a href="Str.md#move()">\FireHub\Core\Support\Strings\Str::move()</a>  - <format style="italic">To find the position of the first occurrence for a substring in a string.</format></li><li><a href="Str.md#safetruncate()">\FireHub\Core\Support\Strings\Str::safeTruncate()</a>  - <format style="italic">To find the position of the first occurrence for a substring in a string.</format></li><li><a href="Str.md#indexof()">\FireHub\Core\Support\Strings\Str::indexOf()</a>  - <format style="italic">To find the position of the first occurrence for a substring in a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$search</format> - <format style="italic">
A string to find position.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string to search in.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Search case-sensitive position.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
If specified, search will start this number of characters counted from the beginning of the string.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">false|non-negative-int Numeric position of the first occurrence or false if none exist.</format></li></list>
    </def>
</deflist>
## method: lastPosition {id="lastposition()"}

<code-block lang="php">
    <![CDATA[public static StrMB::lastPosition(string $search, string $string, bool $case_sensitive = true, int $offset, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null)]]>
</code-block>













### ### Find the position of the last occurrence for a substring in a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L325">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L325">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="IStr.md#lastindexof()">\FireHub\Core\Support\IStr::lastIndexOf()</a>  - <format style="italic">To find the position for the last occurrence of a substring in a string.</format></li><li><a href="Str.md#safetruncate()">\FireHub\Core\Support\Strings\Str::safeTruncate()</a>  - <format style="italic">To find the position of the last occurrence for a substring in a string.</format></li><li><a href="Str.md#lastindexof()">\FireHub\Core\Support\Strings\Str::lastIndexOf()</a>  - <format style="italic">To find the position of the last occurrence for a substring in a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$search</format> - <format style="italic">
A string to find position.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string to search in.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Search case-sensitive position.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
If specified, search will start this number of characters counted from the beginning of the string.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">false|non-negative-int Numeric position of the last occurrence or false if none exist.</format></li></list>
    </def>
</deflist>
## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public static StrMB::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):mixed]]>
</code-block>













### ### Set/Get internal character encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L351">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L351">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">The encoding parameter for character encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">
Encoding is the character encoding name used for the HTTP input character encoding conversion, HTTP output
character encoding conversion, and the default character encoding for string functions defined by the mbstring
module. You should notice that the internal encoding is totally different from the one for multibyte regex.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If the value of encoding is an invalid encoding.</format></li><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">If encoding is set, then returns true. In this case, the
character encoding for multibyte regex is NOT changed. If encoding is omitted, then the current character encoding name is returned.</format></li></list>
    </def>
</deflist>
## method: detectEncoding {id="detectencoding()"}

<code-block lang="php">
    <![CDATA[public static StrMB::detectEncoding(string $string):null|\FireHub\Core\Support\Enums\String\Encoding]]>
</code-block>













### ### Detect character encoding

<p><format style="italic">Detects the most likely character encoding for string from an ordered list of candidates.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L375">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L375">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">As detected encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to detect encoding.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> - <format style="italic">The detected character encoding, or null if the string
is not valid in any of the listed encodings.</format></li></list>
    </def>
</deflist>
## method: convertEncoding {id="convertencoding()"}

<code-block lang="php">
    <![CDATA[public static StrMB::convertEncoding(string $string, \FireHub\Core\Support\Enums\String\Encoding $to, null|\FireHub\Core\Support\Enums\String\Encoding $from = null):string]]>
</code-block>













### ### Convert a string from one character encoding to another

<p><format style="italic">Converts string from $from, or the current internal encoding, to $to. If a string is an array, all its $string
values will be converted recursively.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L410">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L410">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">As converted encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to be converted.
</format></li><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$to</format> - <format style="italic">
The desired encoding of the result.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$from</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not convert string.</format></li><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If the value of $to or $from is an invalid encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Encoded string.</format></li></list>
    </def>
</deflist>
## method: checkEncoding {id="checkencoding()"}

<code-block lang="php">
    <![CDATA[public static StrMB::checkEncoding(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):true]]>
</code-block>













### ### Check if strings are valid for the specified encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L432">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L432">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">As checked encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to check encoding on.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">
The expected encoding.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true - <format style="italic">on success or false on failure.</format></li></list>
    </def>
</deflist>
## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::contains(string $value, string $string):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if string contains value

<p><format style="italic">Performs a case-sensitive check indicating if $string is contained in $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L63">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L63">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string to search in.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string contains value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: startsWith {id="startswith()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::startsWith(non-empty-string $value, string $string):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if a string starts with a given value

<p><format style="italic">Performs a case-sensitive check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L84">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L84">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string to search in.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string starts with value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: endsWith {id="endswith()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::endsWith(non-empty-string $value, string $string):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if a string ends with a given value

<p><format style="italic">Performs a case-sensitive check indicating if $string ends with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L105">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L105">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string to search in.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string ends with value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: addSlashes {id="addslashes()"}

<code-block lang="php">
    <![CDATA[public static StrSafe::addSlashes(string $string):string]]>
</code-block>













### ### Quote string with slashes

<p><format style="italic">Backslashes are added before characters that need to be escaped:
(single quote, double quote, backslash, NUL).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L127">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L127">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="StrSB.md#addslashes()">\FireHub\Core\Support\LowLevel\StrSB::addSlashes()</a>  - <format style="italic">To call parent method if $characters parameter was
not provided.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to be escaped.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The escaped string.</format></li></list>
    </def>
</deflist>
## method: implode {id="implode()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::implode(array<array-key,null|scalar|\Stringable> $array, string $separator = &#039;&#039;):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Join array elements with a string

<p><format style="italic">Join array elements with a $separator string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L151">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L151">
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
        <list><li>array&lt;array-key,null or scalar or <a href="Stringable&gt;.md">\Stringable&gt;</a> <format style="bold">$array</format> - <format style="italic">
The array of strings to implode.
</format></li><li>string <format style="bold">$separator</format> = '' - <format style="italic">[optional] 
The boundary string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If array item could not be converted to string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Returns a string containing a string representation of all the array elements in the same order,
with the separator string between each element.</format></li></list>
    </def>
</deflist>
## method: quoteMeta {id="quotemeta()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::quoteMeta(string $string):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Quote meta characters

<p><format style="italic">Returns a version of str with a backslash character (\) before every character that is among these: .\+*?[^]($).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L169">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L169">
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
The input string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The string with meta-characters quoted.</format></li></list>
    </def>
</deflist>
## method: repeat {id="repeat()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::repeat(string $string, int $times, string $separator = &#039;&#039;):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Repeat a string

<p><format style="italic">Returns string repeated $times times.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L196">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L196">
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
The string to be repeated.
</format></li><li>int <format style="bold">$times</format> - <format style="italic">
Number of time the input string should be repeated. Multiplier has to be greater than or equal to 0.
If the $times is set to 0 or less, the function will return empty string.
</format></li><li>string <format style="bold">$separator</format> = '' - <format style="italic">[optional] 
Separator in between any repeated string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Repeated string.</format></li></list>
    </def>
</deflist>
## method: stripTags {id="striptags()"}

<code-block lang="php">
    <![CDATA[public static StrSafe::stripTags(string $string, null|string|array<int,string> $allowed_tags = null):string]]>
</code-block>













### ### Strip HTML and PHP tags from a string

<p><format style="italic">This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string. It
uses the same tag stripping state machine as the fgetss() function.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L221">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L221">
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
The input string.
</format></li><li>null or string or array&lt;int,string&gt; <format style="bold">$allowed_tags</format> = null - <format style="italic">
You can use the optional second parameter to specify tags which should not be stripped.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">the Stripped string.</format></li></list>
    </def>
</deflist>
## method: stripSlashes {id="stripslashes()"}

<code-block lang="php">
    <![CDATA[public static StrSafe::stripSlashes(string $string):string]]>
</code-block>













### ### Un-quotes a quoted string

<p><format style="italic">Backslashes are removed: (backslashes become single quote, double backslashes are made into a single backslash).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L244">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L244">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="StrSB.md#stripslashes()">\FireHub\Core\Support\LowLevel\StrSB::stripSlashes()</a>  - <format style="italic">If $c_representation set to true.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to be unquoted.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with backslashes stripped off.</format></li></list>
    </def>
</deflist>
## method: trim {id="trim()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::trim(string $string, \FireHub\Core\Support\Enums\Side $side = Side::BOTH, string $characters = &quot; 
	 &quot;):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Strip whitespace (or other characters) from the beginning and end of a string

<p><format style="italic">This function returns a string with whitespace stripped from the beginning and end of string.
Without the second parameter, [[StrSafe#trim()]] will strip these characters.

- " " (ASCII 32 (0x20)), an ordinary space.
- "\t" (ASCII 9 (0x09)), a tab.
- "\n" (ASCII 10 (0x0A)), a new line (line feed).
- "\r" (ASCII 13 (0x0D)), a carriage return.
- "\0" (ASCII 0 (0x00)), the NUL-byte.
- "\v" (ASCII 11 (0x0B)), a vertical tab.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L286">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L286">
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
        <list><li><a href="Side.md#both">\FireHub\Core\Support\Enums\Side::BOTH</a>  - <format style="italic">If trimming string on both sides.</format></li><li><a href="Side.md#left">\FireHub\Core\Support\Enums\Side::LEFT</a>  - <format style="italic">If trimming string on the left side.</format></li><li><a href="Side.md#right">\FireHub\Core\Support\Enums\Side::RIGHT</a>  - <format style="italic">If trimming string on the right side.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string that will be trimmed.
</format></li><li><a href="Side.md">\FireHub\Core\Support\Enums\Side</a> <format style="bold">$side</format> = Side::BOTH - <format style="italic">[optional] 
Side to trim string.
</format></li><li>string <format style="bold">$characters</format> = " 
	 " - <format style="italic">[optional] 
The stripped characters can also be specified using the char-list parameter. List all characters that you want
to be stripped. With '..', you can specify a range of characters.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The trimmed string.</format></li></list>
    </def>
</deflist>
## method: explode {id="explode()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::explode(string $string, non-empty-string $separator, int<min, max> $limit = MAX):string[]]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Split a string by a string

<p><format style="italic">Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries
formed by the string separator.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L322">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L322">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set the limit of returned array size to maximum.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The input string.
</format></li><li>non-empty-string <format style="bold">$separator</format> - <format style="italic">
The boundary string.
</format></li><li>int&lt;min, max&gt; <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last
element containing the rest of the string. If the limit parameter is negative, all components except the last
- limit are returned. If the limit parameter is zero, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If separator is an empty string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">If delimiter contains a value that is not contained in string and a negative limit is used, then an empty array will be returned.
For any other limit, an array containing string will be returned.</format></li></list>
    </def>
</deflist>
## method: compare {id="compare()"}

<code-block lang="php">
    <![CDATA[public static StrSafe::compare(string $string_1, string $string_2):int<-1, 1>]]>
</code-block>













### ### String comparison



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L344">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L344">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="StrSB.md#compare()">\FireHub\Core\Support\LowLevel\StrSB::compare()</a>  - <format style="italic">If comparison is case-sensitive.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string_1</format> - <format style="italic">
String to compare against.
</format></li><li>string <format style="bold">$string_2</format> - <format style="italic">
String to compare with.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int&lt;-1, 1&gt; - <format style="italic">-1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are
equal.</format></li></list>
    </def>
</deflist>
## method: translate {id="translate()"}

<code-block lang="php">
    <![CDATA[public static StrSafe::translate(string $string, array<non-empty-string,string> $replace_pairs):string]]>
</code-block>













### ### Translate characters or replace substrings



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L365">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L365">
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
The string being translated to.
</format></li><li>array&lt;non-empty-string,string&gt; <format style="bold">$replace_pairs</format> - <format style="italic">
An array of key-value pairs for translation.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The translated string.</format></li></list>
    </def>
</deflist>