<title># StrSB</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\StrSB()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Single-byte string low-level proxy class

<p><format style="italic">Class allows you to manipulate strings in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\StrSB
    </def><def title="Parent class:">
        <a href="StrSafe.md">\FireHub\Core\Support\LowLevel\StrSafe</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L64">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php">
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
|public static |<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public static |<a href="#compare()">compare</a>|### String comparison|
|public static |<a href="#chunksplit()">chunkSplit</a>|### Split a string into smaller chunks|
|public static |<a href="#pad()">pad</a>|### Pad a string to a certain length with another string|
|public static |<a href="#replacepart()">replacePart</a>|### Replace text within a portion of a string|
|public static |<a href="#shuffle()">shuffle</a>|### Randomly shuffles a string|
|public static |<a href="#reverse()">reverse</a>|### Reverse a string|
|public static |<a href="#wrap()">wrap</a>|### Wraps a string to a given number of characters|
|public static |<a href="#tolower()">toLower</a>|### Make a string lowercase|
|public static |<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|public static |<a href="#totitle()">toTitle</a>|### Make a string title-cased|
|public static |<a href="#capitalize()">capitalize</a>|### Make a first character of string uppercased|
|public static |<a href="#decapitalize()">deCapitalize</a>|### Make a first character of string lowercased|
|public static |<a href="#translate()">translate</a>|### Translate characters or replace substrings|
|public static |<a href="#part()">part</a>|### Get part of string|
|public static |<a href="#firstpart()">firstPart</a>|### Find first part of a string|
|public static |<a href="#lastpart()">lastPart</a>|### Find last part of a string|
|public static |<a href="#partfrom()">partFrom</a>|### Find part of a string with characters|
|public static |<a href="#countbychar()">countByChar</a>|### Return information about characters used in a string|
|public static |<a href="#split()">split</a>|### Convert a string to an array|
|public static |<a href="#countwords()">countWords</a>|### Count number of words in string|
|public static |<a href="#partcount()">partCount</a>|### Get number of times the searched substring occurs in the string|
|public static |<a href="#segmentmatching()">segmentMatching</a>|### Length of the initial segment for a string consisting entirely of characters contained within a given mask|
|public static |<a href="#segmentnotmatching()">segmentNotMatching</a>|### Find length of initial segment not matching mask|
|public static |<a href="#length()">length</a>|### Get string length|
|public static |<a href="#comparepart()">comparePart</a>|### Comparison of two strings from an offset, up to length characters|
|public static |<a href="#comparefirstn()">compareFirstN</a>|### String comparison of the first n characters|
|public static |<a href="#firstposition()">firstPosition</a>|### Find the position of the first occurrence of a substring in a string|
|public static |<a href="#lastposition()">lastPosition</a>|### Find the position of the last occurrence of a substring in a string|
|inherited public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|inherited public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|inherited public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|inherited public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|inherited public static |<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|inherited public static |<a href="#replace()">replace</a>|### Replace all occurrences of the search string with the replacement string|
|inherited public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|inherited public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|inherited public static |<a href="#explode()">explode</a>|### Split a string by a string|

## method: addSlashes {id="addslashes()"}

<code-block lang="php">
    <![CDATA[public static StrSB::addSlashes(string $string, string $characters = null)]]>
</code-block>













### ### Quote string with slashes



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L82">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L82">
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
        <list><li><a href="StrSafe.md#addslashes()">\FireHub\Core\Support\LowLevel\StrSafe::addSlashes()</a>  - <format style="italic">To call parent method if $characters parameter was
not provided.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to be escaped.
</format></li><li>string <format style="bold">$characters</format> = null - <format style="italic">[optional] 
The list of characters to be escaped. Non-alphanumeric characters with ASCII codes lower than 32 and higher
than 126 converted to octal representation.
</format></li></list>
    </def>
</deflist>
## method: stripSlashes {id="stripslashes()"}

<code-block lang="php">
    <![CDATA[public static StrSB::stripSlashes(string $string, bool $c_representation = false)]]>
</code-block>













### ### Un-quotes a quoted string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L226">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L226">
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
        <list><li><a href="StrSafe.md#stripslashes()">\FireHub\Core\Support\LowLevel\StrSafe::stripSlashes()</a>  - <format style="italic">If $c_representation set to true.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to be unquoted.
</format></li><li>bool <format style="bold">$c_representation</format> = false - <format style="italic">[optional] 
If true, octal and hexadecimal representation from addSlashes method are recognized.
</format></li></list>
    </def>
</deflist>
## method: compare {id="compare()"}

<code-block lang="php">
    <![CDATA[public static StrSB::compare(string $string_1, string $string_2, bool $case_sensitive = true)]]>
</code-block>













### ### String comparison



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L706">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L706">
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
        <list><li><a href="StrSafe.md#compare()">\FireHub\Core\Support\LowLevel\StrSafe::compare()</a>  - <format style="italic">If comparison is case-sensitive.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string_1</format> - <format style="italic">
String to compare against.
</format></li><li>string <format style="bold">$string_2</format> - <format style="italic">
String to compare with.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Is comparison case-sensitive or not.
</format></li></list>
    </def>
</deflist>
## method: chunkSplit {id="chunksplit()"}

<code-block lang="php">
    <![CDATA[public static StrSB::chunkSplit(string $string, int $length = 76, string $separator = &quot;
&quot;):string]]>
</code-block>













### ### Split a string into smaller chunks

<p><format style="italic">Can be used to split a string into smaller chunks, which is useful for e.g., converting base64_encode() output to
match RFC 2045 semantics. It inserts $separator every $length characters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L112">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L112">
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
The string to be chunked.
</format></li><li>int <format style="bold">$length</format> = 76 - <format style="italic">[optional] 
The chunk length.
</format></li><li>string <format style="bold">$separator</format> = "
" - <format style="italic">[optional] 
The line-ending sequence.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If length is less than 1.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The chunked string.</format></li></list>
    </def>
</deflist>
## method: pad {id="pad()"}

<code-block lang="php">
    <![CDATA[public static StrSB::pad(string $string, int $length, string $pad = &quot; &quot;, \FireHub\Core\Support\Enums\Side $side = Side::RIGHT):string]]>
</code-block>













### ### Pad a string to a certain length with another string

<p><format style="italic">This method returns the $string padded on the left, the right, or both sides to the specified padding length.
If the optional argument $pad is not supplied, the $string is padded with spaces; otherwise it is padded with
characters from $pad up to the limit.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L151">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L151">
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
        <list><li><a href="Side.md#right">\FireHub\Core\Support\Enums\Side::RIGHT</a>  - <format style="italic">If padding string to the right.</format></li><li><a href="Side.md#left">\FireHub\Core\Support\Enums\Side::LEFT</a>  - <format style="italic">If padding string to the left.</format></li><li><a href="Side.md#both">\FireHub\Core\Support\Enums\Side::BOTH</a>  - <format style="italic">If padding string on both sides.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string being padded.
</format></li><li>int <format style="bold">$length</format> - <format style="italic">
If the value of $length is negative, less than, or equal to the length of the input string, no padding takes
place.
</format></li><li>string <format style="bold">$pad</format> = " " - <format style="italic">[optional] 
<code>non-empty-string</code>
The pad may be truncated if the required number of padding characters can't be evenly divided by the pad's
length.
</format></li><li><a href="Side.md">\FireHub\Core\Support\Enums\Side</a> <format style="bold">$side</format> = Side::RIGHT - <format style="italic">[optional] 
Pad side.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the pad is empty.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Padded string.</format></li></list>
    </def>
</deflist>
## method: replacePart {id="replacepart()"}

<code-block lang="php">
    <![CDATA[public static StrSB::replacePart(string $string, string $replace, int $offset, null|int $length = null):string]]>
</code-block>













### ### Replace text within a portion of a string

<p><format style="italic">Replaces a copy of string delimited by the $offset and (optionally) $length parameters with the string given in
$replace.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L187">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L187">
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
</format></li><li>string <format style="bold">$replace</format> - <format style="italic">
The replacement string.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">
If offset is non-negative, the replacing will begin at the into string. If offset is negative, the replacing
will begin at the character from the end of the string.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
If given and is positive, it represents the length of the portion of string which is to be replaced. If it is
negative, it represents the number of characters from the end of string at which to stop replacing. If it is
not given, then it will default to strlen(string); i.e., end the replacing at the end of string. Of course, if
length is zero, then this function will have the effect of inserting $replace into string at the given offset.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with the replaced values.</format></li></list>
    </def>
</deflist>
## method: shuffle {id="shuffle()"}

<code-block lang="php">
    <![CDATA[public static StrSB::shuffle(string $string):string]]>
</code-block>













### ### Randomly shuffles a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L206">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L206">
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
        <list><li>string - <format style="italic">The shuffled string.</format></li></list>
    </def>
</deflist>
## method: reverse {id="reverse()"}

<code-block lang="php">
    <![CDATA[public static StrSB::reverse(string $string):string]]>
</code-block>













### ### Reverse a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L244">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L244">
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
The string to be reversed.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The reversed string.</format></li></list>
    </def>
</deflist>
## method: wrap {id="wrap()"}

<code-block lang="php">
    <![CDATA[public static StrSB::wrap(string $string, int $width = 75, string $break = &quot;
&quot;, bool $cut_long_words = false):string]]>
</code-block>













### ### Wraps a string to a given number of characters

<p><format style="italic">Wraps a string to a given number of characters using a string break character.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L272">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L272">
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
The string to warp.
</format></li><li>int <format style="bold">$width</format> = 75 - <format style="italic">[optional] 
The column width.
</format></li><li>string <format style="bold">$break</format> = "
" - <format style="italic">[optional] 
The line is broken using the optional break parameter.
</format></li><li>bool <format style="bold">$cut_long_words</format> = false - <format style="italic">[optional] 
If the cut is set to true, the string is always wrapped at or before the specified width. So if you have a
word that is larger than the given width, it is broken apart.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The given string wrapped at the specified column.</format></li></list>
    </def>
</deflist>
## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public static StrSB::toLower(string $string):string]]>
</code-block>













### ### Make a string lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L288">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L288">
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
        <list><li><a href="FireHub.md#autoload()">\FireHub\Core\FireHub::autoload()</a>  - <format style="italic">To lowercase all namespace components</format></li><li><a href="Callback.md#classcomponents()">\FireHub\Core\Initializers\Autoload\Callback::classComponents()</a>  - <format style="italic">To lowercase all namespaces.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string being lowercased.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with all alphabetic characters converted to lowercase.</format></li></list>
    </def>
</deflist>
## method: toUpper {id="toupper()"}

<code-block lang="php">
    <![CDATA[public static StrSB::toUpper(string $string):string]]>
</code-block>













### ### Make a string uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L304">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L304">
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
The string being uppercased.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with all alphabetic characters converted to uppercase.</format></li></list>
    </def>
</deflist>
## method: toTitle {id="totitle()"}

<code-block lang="php">
    <![CDATA[public static StrSB::toTitle(string $string):string]]>
</code-block>













### ### Make a string title-cased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L320">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L320">
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
The string being title cased.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with title-cased conversion.</format></li></list>
    </def>
</deflist>
## method: capitalize {id="capitalize()"}

<code-block lang="php">
    <![CDATA[public static StrSB::capitalize(string $string):string]]>
</code-block>













### ### Make a first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L336">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L336">
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
The string being converted.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with first character uppercased.</format></li></list>
    </def>
</deflist>
## method: deCapitalize {id="decapitalize()"}

<code-block lang="php">
    <![CDATA[public static StrSB::deCapitalize(string $string):string]]>
</code-block>













### ### Make a first character of string lowercased

<p><format style="italic">Returns a string with the first character of $string lowercased if that character is an ASCII character in the
range "A" (0x41) to "Z" (0x5a).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L355">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L355">
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
The string being converted.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with first character lowercased.</format></li></list>
    </def>
</deflist>
## method: translate {id="translate()"}

<code-block lang="php">
    <![CDATA[public static StrSB::translate(string $string, string $from, string $to):string]]>
</code-block>













### ### Translate characters or replace substrings



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L377">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L377">
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
</format></li><li>string <format style="bold">$from</format> - <format style="italic">
An array of key-value pairs for translation.
</format></li><li>string <format style="bold">$to</format> - <format style="italic">
The string replaced from.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The translated string.</format></li></list>
    </def>
</deflist>
## method: part {id="part()"}

<code-block lang="php">
    <![CDATA[public static StrSB::part(string $string, int $start, null|int $length = null):string]]>
</code-block>













### ### Get part of string

<p><format style="italic">Returns the portion of the string specified by the $start and $length parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L405">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L405">
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
        <list><li><a href="DateAndTime.md#microtime()">\FireHub\Core\Support\LowLevel\DateAndTime::microtime()</a>  - <format style="italic">To get part of microtime.</format></li><li><a href="FileSystem.md#getpermissions()">\FireHub\Core\Support\LowLevel\FileSystem::getPermissions()</a>  - <format style="italic">To get part of decoct() function.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
The string to extract the substring from.
</format></li><li>int <format style="bold">$start</format> - <format style="italic">
If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
and so forth. If the start is negative, the returned string will start at the start character from the end of
the string.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
Maximum number of characters to use from string. If omitted or NULL is passed, extract all characters to the
end of the string.
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
    <![CDATA[public static StrSB::firstPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true):string|false]]>
</code-block>













### ### Find first part of a string

<p><format style="italic">Returns part of $string starting from and including the first occurrence of $find to the end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L429">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L429">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string being searched.
</format></li><li>bool <format style="bold">$before_needle</format> = false - <format style="italic">[optional] 
If true, return the part of the string before the first occurrence (excluding the find string).
</format></li><li>bool <format style="bold">$case_sensitive</format> = true</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string or false - <format style="italic">The portion of string or false if needle is not found.</format></li></list>
    </def>
</deflist>
## method: lastPart {id="lastpart()"}

<code-block lang="php">
    <![CDATA[public static StrSB::lastPart(string $find, string $string):string|false]]>
</code-block>













### ### Find last part of a string

<p><format style="italic">This function returns the portion of $string which starts at the last occurrence of $find and goes until the
end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L453">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L453">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string being searched.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string or false - <format style="italic">The portion of string, or false if needle is not found.</format></li></list>
    </def>
</deflist>
## method: partFrom {id="partfrom()"}

<code-block lang="php">
    <![CDATA[public static StrSB::partFrom(string $characters, string $string):string|false]]>
</code-block>













### ### Find part of a string with characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L472">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L472">
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
        <list><li>string <format style="bold">$characters</format> - <format style="italic">
Characters to find. This parameter is case-sensitive.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string where characters are looked for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string or false - <format style="italic">String starting from the character found, or false if it is not found.</format></li></list>
    </def>
</deflist>
## method: countByChar {id="countbychar()"}

<code-block lang="php">
    <![CDATA[public static StrSB::countByChar(string $string):array]]>
</code-block>













### ### Return information about characters used in a string

<p><format style="italic">Counts the number of occurrences for every byte-value (0..255) in $string and returns it in various ways.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L492">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L492">
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
The examined string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<int, int> ]]></code> An array with the byte-value as a key with a frequency
greater than zero are listed.</format></li></list>
    </def>
</deflist>
## method: split {id="split()"}

<code-block lang="php">
    <![CDATA[public static StrSB::split(string $string, int $length = 1):array]]>
</code-block>













### ### Convert a string to an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L520">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L520">
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
</format></li><li>int <format style="bold">$length</format> = 1 - <format style="italic">[optional] 
<code>positive-int</code>
Maximum length of the chunk.
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
        <list><li>array - <format style="italic"><code><![CDATA[ array<int, string> ]]></code> If the optional $length parameter is specified, the
returned array will be broken down into chunks with each being $length in length, except the final chunk which
may be shorter if the string does not divide evenly. The default $length is 1, meaning every chunk will be one
byte in size.</format></li></list>
    </def>
</deflist>
## method: countWords {id="countwords()"}

<code-block lang="php">
    <![CDATA[public static StrSB::countWords(string $string, null|string $characters = null, int $format):int|array]]>
</code-block>













### ### Count number of words in string

<p><format style="italic">Counts the number of words inside string. If the optional format is not specified, then the return value will
be an integer representing the number of words found. In the event the format is specified,
the return value will be an array, the content of which is dependent on the format.
The possible value for the format and the resultant outputs are listed below.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L558">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L558">
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
The string.
</format></li><li>null or string <format style="bold">$characters</format> = null - <format style="italic">[optional] 
A list of additional characters which will be considered as 'word'.
</format></li><li>int <format style="bold">$format</format> - <format style="italic">[optional] 
<code><![CDATA[ 0|1|2 ]]></code>
A string to search words.
0 - returns the number of words found.
1 - returns an array containing all the words found inside the string.
2 - returns an associative array, where the key is the numeric position of the word inside the string and the
value is the actual word itself.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to count words for string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int or array - <format style="italic"><code><![CDATA[ int|array<int, string> ]]></code> Number of words found or list of words.</format></li></list>
    </def>
</deflist>
## method: partCount {id="partcount()"}

<code-block lang="php">
    <![CDATA[public static StrSB::partCount(string $string, string $search, int $start, null|int $length = null):int]]>
</code-block>













### ### Get number of times the searched substring occurs in the string

<p><format style="italic">Returns the number of times the needle substring occurs in the haystack string. Please note that needle is
case-sensitive.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L591">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L591">
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
The string being checked.
</format></li><li>string <format style="bold">$search</format> - <format style="italic">
The string being found.
</format></li><li>int <format style="bold">$start</format> - <format style="italic">[optional] 
The offset where to start counting. If the offset is negative, counting starts from the end of the string.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
The maximum length after the specified offset to search for the substring. It outputs a warning if the offset
plus the length is greater than the $string length. A negative length counts from the end of $string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic"><code>non-negative-int</code> Number of times the searched substring occurs in the string.</format></li></list>
    </def>
</deflist>
## method: segmentMatching {id="segmentmatching()"}

<code-block lang="php">
    <![CDATA[public static StrSB::segmentMatching(string $string, string $characters, int $offset, int|null $length = null):int]]>
</code-block>













### ### Length of the initial segment for a string consisting entirely of characters contained within a given mask

<p><format style="italic">Finds the length of the initial segment of $string that contains only characters from $characters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L627">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L627">
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
The string to examine.
</format></li><li>string <format style="bold">$characters</format> - <format style="italic">
The list of allowable characters.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
The position in subject to start searching. If start is given and is non-negative, then
[[StrSB#segmentMatching()]] will begin examining the subject at the start position. For instance, in the
string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth. If
start is given and is negative, then [[StrSB#segmentMatching()]] will begin examining subject at the start
position from the end of subject.
</format></li><li>int or null <format style="bold">$length</format> = null - <format style="italic">[optional] 
The length of the segment from subject to examine. If length is given and is non-negative, then the subject
will be examined for length characters after the starting position. If length is given and is negative, then
the subject will be examined from the starting position up-to-length characters from the end of the subject.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The length of the initial segment for string which consists entirely of characters in characters.</format></li></list>
    </def>
</deflist>
## method: segmentNotMatching {id="segmentnotmatching()"}

<code-block lang="php">
    <![CDATA[public static StrSB::segmentNotMatching(string $string, string $characters, int $offset, null|int $length = null):int]]>
</code-block>













### ### Find length of initial segment not matching mask

<p><format style="italic">Returns the length of the initial segment of $string which does not contain any of the characters in $characters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L664">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L664">
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
The string to examine.
</format></li><li>string <format style="bold">$characters</format> - <format style="italic">
The string containing every disallowed character.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
The position in subject to start searching. If start is given and is non-negative, then
[[StrSB#segmentNotMatching()]] will begin examining the subject at the start position. For instance, in the
string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth. If
start is given and is negative, then [[StrSB#segmentNotMatching()]] will begin examining subject at the start
position from the end of subject.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
The length of the segment from subject to examine. If length is given and is non-negative, then the subject
will be examined for length characters after the starting position. If length is given and is negative, then
the subject will be examined from the starting position up-to-length characters from the end of the subject.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The length of the initial segment from string which consists entirely of characters not in
characters.</format></li></list>
    </def>
</deflist>
## method: length {id="length()"}

<code-block lang="php">
    <![CDATA[public static StrSB::length(string $string):int]]>
</code-block>













### ### Get string length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L683">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L683">
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
The string being measured for length.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic"><code>non-negative-int</code> String length.</format></li></list>
    </def>
</deflist>
## method: comparePart {id="comparepart()"}

<code-block lang="php">
    <![CDATA[public static StrSB::comparePart(string $string_1, string $string_2, int $offset, null|int $length = null, bool $case_sensitive = true):int]]>
</code-block>













### ### Comparison of two strings from an offset, up to length characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L739">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L739">
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
        <list><li>string <format style="bold">$string_1</format> - <format style="italic">
String to compare against.
</format></li><li>string <format style="bold">$string_2</format> - <format style="italic">
String to compare with.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
The start position for the comparison. If negative, it starts counting from the end of the string.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
The length of the comparison. The default value is the largest of the length for the needle compared to the
length of haystack minus the offset.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
If case_sensitive is true, comparison is case-insensitive.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If $offset is higher than $string_1.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">-1 if string1 is less than string2, 1 if string1 is greater than string2 and 0 if they are equal.</format></li></list>
    </def>
</deflist>
## method: compareFirstN {id="comparefirstn()"}

<code-block lang="php">
    <![CDATA[public static StrSB::compareFirstN(string $string_1, string $string_2, int $length):int|false]]>
</code-block>













### ### String comparison of the first n characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L768">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L768">
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
        <list><li>string <format style="bold">$string_1</format> - <format style="italic">
String to compare against.
</format></li><li>string <format style="bold">$string_2</format> - <format style="italic">
String to compare with.
</format></li><li>int <format style="bold">$length</format> - <format style="italic">
Number of characters to use in the comparison.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int or false - <format style="italic">-1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are
equal, or false if length is less than 0.</format></li></list>
    </def>
</deflist>
## method: firstPosition {id="firstposition()"}

<code-block lang="php">
    <![CDATA[public static StrSB::firstPosition(string $search, string $string, bool $case_sensitive = true, int $offset):int|false]]>
</code-block>













### ### Find the position of the first occurrence of a substring in a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L797">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L797">
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
        <list><li>string <format style="bold">$search</format> - <format style="italic">
A string to find position.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string to search in.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Search case-sensitive position.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
If specified, search will start this number of characters counted from the beginning of the string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int or false - <format style="italic">Numeric position of the first occurrence or false if none exist.</format></li></list>
    </def>
</deflist>
## method: lastPosition {id="lastposition()"}

<code-block lang="php">
    <![CDATA[public static StrSB::lastPosition(string $search, string $string, bool $case_sensitive = true, int $offset):int|false]]>
</code-block>













### ### Find the position of the last occurrence of a substring in a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L828">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L828">
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
        <list><li>string <format style="bold">$search</format> - <format style="italic">
A string to find position.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string to search in.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Search case-sensitive position.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
If specified, search will start this number of characters counted from the beginning of the string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int or false - <format style="italic">Numeric position of the last occurrence or false if none exist.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L65">
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
    <![CDATA[final public static StrSafe::startsWith(string $value, string $string):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if a string starts with a given value

<p><format style="italic">Performs a case-sensitive check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L88">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L88">
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
<code>non-empty-string></code>
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
    <![CDATA[final public static StrSafe::endsWith(string $value, string $string):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if a string ends with a given value

<p><format style="italic">Performs a case-sensitive check indicating if $string ends with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L112">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L112">
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
<code>non-empty-string></code>
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
## method: implode {id="implode()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::implode(array $array, string $separator = &#039;&#039;):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Join array elements with a string

<p><format style="italic">Join array elements with a $separator string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L160">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L160">
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
        <list><li>array <format style="bold">$array</format> - <format style="italic">
<code><![CDATA[ array<array-key, null|scalar|Stringable> ]]></code>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L182">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L182">
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
<code>non-empty-string</code>
The input string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If empty string is given as string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The string with meta-characters quoted.</format></li></list>
    </def>
</deflist>
## method: replace {id="replace()"}

<code-block lang="php">
    <![CDATA[final public static StrSafe::replace(string|array $search, string|array $replace, string $string, bool $case_sensitive = true, null|int &$count = null):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Replace all occurrences of the search string with the replacement string

<p><format style="italic">This function returns a string or an array with all occurrences of search
in a subject replaced with the given replacement value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L224">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L224">
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
        <list><li>string or array <format style="bold">$search</format> - <format style="italic">
<code><![CDATA[ string|list<string> ]]></code>
The replacement value that replaces found search values.
An array may be used to designate multiple replacements.
</format></li><li>string or array <format style="bold">$replace</format> - <format style="italic">
<code><![CDATA[ string|list<string> ]]></code>
The string being searched and replaced on.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The value being searched for.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Searched values are case-insensitive.
</format></li><li>by reference null or int <format style="bold">$count</format> = null - <format style="italic">[optional] 
If passed, this will hold the number of matched and replaced needles.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String with the replaced values.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L255">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L255">
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
<code>non-negative-int</code>
Number of time the input string should be repeated. Multiplier has to be greater than or equal to 0. If the
multiplier is set to 0, the function will return an empty string.
</format></li><li>string <format style="bold">$separator</format> = '' - <format style="italic">[optional] 
Separator in between any repeated string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $times argument is not 0 or greater.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Repeated string.</format></li></list>
    </def>
</deflist>
## method: stripTags {id="striptags()"}

<code-block lang="php">
    <![CDATA[public static StrSafe::stripTags(string $string, null|string|array $allowed_tags = null):string]]>
</code-block>













### ### Strip HTML and PHP tags from a string

<p><format style="italic">This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string. It
uses the same tag stripping state machine as the fgetss() function.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L282">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L282">
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
</format></li><li>null or string or array <format style="bold">$allowed_tags</format> = null - <format style="italic">
<code><![CDATA[ null|string|array<int, string> ]]></code>
You can use the optional second parameter to specify tags which should not be stripped.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">the Stripped string.</format></li></list>
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

<p><format style="italic">This function returns a string with whitespace stripped from the beginning and end of string. Without the
second parameter, trim() will strip these characters.

- " " (ASCII 32 (0x20)), an ordinary space.
- "\t" (ASCII 9 (0x09)), a tab.
- "\n" (ASCII 10 (0x0A)), a new line (line feed).
- "\r" (ASCII 13 (0x0D)), a carriage return.
- "\0" (ASCII 0 (0x00)), the NUL-byte.
- "\v" (ASCII 11 (0x0B)), a vertical tab.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L347">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L347">
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
    <![CDATA[final public static StrSafe::explode(string $string, string $separator, int $limit = MAX):array]]>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L389">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L389">
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
</format></li><li>string <format style="bold">$separator</format> - <format style="italic">
<code>non-empty-string</code>
The boundary string.
</format></li><li>int <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
<code><![CDATA[ int<min, max> ]]></code>
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
        <list><li>array - <format style="italic"><code>string[]</code> If delimiter contains a value that is not contained in string and a negative
limit is used, then an empty array will be returned. For any other limit, an array containing string will be
returned.</format></li></list>
    </def>
</deflist>