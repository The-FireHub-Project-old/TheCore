<title># StrSafe</title>

<code-block lang="php">
<![CDATA[abstract class \FireHub\Core\Support\LowLevel\StrSafe()]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> class that cannot be instantiated directly.
    </p>
</tip>





### ### Safe string low-level proxy class

<p><format style="italic">Class contains methods that are safe to use on normal as well as on multibyte encoding.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\StrSafe
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L46">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php">
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
|public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|public static |<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|public static |<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|public static |<a href="#explode()">explode</a>|### Split a string by a string|
|public static |<a href="#compare()">compare</a>|### String comparison|
|public static |<a href="#translate()">translate</a>|### Translate characters or replace substrings|

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