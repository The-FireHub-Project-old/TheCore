<title># RegexMB</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\RegexMB()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Multibyte regex low-level proxy class

<p><format style="italic">The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the
delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character
except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself,
it needs to be escaped by backslash. Perl-style (), }, [], and <> matching delimiters may also be used.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\RegexMB
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L39">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php">
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
|public static |<a href="#match()">match</a>|### Perform a regular expression match|
|public static |<a href="#replace()">replace</a>|### Perform a regular expression search and replace|
|public static |<a href="#replacefunc()">replaceFunc</a>|### Perform a regular expression search and replace using a callback|
|public static |<a href="#encoding()">encoding</a>|### Set/Get character encoding for multibyte regex|

## method: match {id="match()"}

<code-block lang="php">
    <![CDATA[public static RegexMB::match(string $pattern, string $string, bool $case_sensitive = true):bool]]>
</code-block>













### ### Perform a regular expression match

<p><format style="italic">Searches subject for a match to the regular expression given in a pattern.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L59">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L59">
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
        <list><li>string <format style="bold">$pattern</format> - <format style="italic">
The regular expression pattern.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string being evaluated.
</format></li><li>bool <format style="bold">$case_sensitive</format> = true - <format style="italic">[optional] 
Case-sensitive match.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string matches the regular expression pattern, false if not.</format></li></list>
    </def>
</deflist>
## method: replace {id="replace()"}

<code-block lang="php">
    <![CDATA[public static RegexMB::replace(string $pattern, string $replacement, string $string):string]]>
</code-block>











<warning>
                <p><format style="bold">Warning:</format></p>
                <p>Never use the e modifier when working on untrusted input. No automatic escaping will happen (as known
from [[RegexSB#replace()]]). Not taking care of this will most likely create remote code execution
vulnerabilities in your application.</p>
            </warning><note>
                <p><format style="bold">Note:</format></p>
                <p>The internal encoding or the character encoding specified by encoding() will be used as character
encoding for this function.</p>
            </note>

### ### Perform a regular expression search and replace

<p><format style="italic">Searches $subject for matches to $pattern and replaces them with $replacement.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L93">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L93">
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
        <list><li>string <format style="bold">$pattern</format> - <format style="italic">
The regular expression pattern.
</format></li><li>string <format style="bold">$replacement</format> - <format style="italic">
The string to replace.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string being evaluated.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If string is not valid for the current encoding, or while performing a regular expression search
and replace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Replaced string.</format></li></list>
    </def>
</deflist>
## method: replaceFunc {id="replacefunc()"}

<code-block lang="php">
    <![CDATA[public static RegexMB::replaceFunc(string $pattern, callable $callback, string $string):string]]>
</code-block>













### ### Perform a regular expression search and replace using a callback

<p><format style="italic">Searches $subject for matches to $pattern and replaces them with $replacement.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L124">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L124">
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
        <list><li>string <format style="bold">$pattern</format> - <format style="italic">
The regular expression pattern.
</format></li><li>callable <format style="bold">$callback</format> - <format style="italic">
<code><![CDATA[ callable(array<array-key, string> $matches):string ]]></code>
A callback that will be called and passed an array of matched elements in the subject string.
The callback should return the replacement string.
This is the callback signature.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The string being evaluated.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If string is not valid for the current encoding, or while performing a regular expression search
and replace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Replaced string.</format></li></list>
    </def>
</deflist>
## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public static RegexMB::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):true|\FireHub\Core\Support\Enums\String\Encoding]]>
</code-block>













### ### Set/Get character encoding for multibyte regex



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L151">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L151">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">To get or set regex character encoding.</format></li><li><a href="DataIs.md#string()">\FireHub\Core\Support\LowLevel\DataIs::string()</a>  - <format style="italic">To check if provider encoding is string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If encoding is invalid or failed to get regex encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> - <format style="italic">If encoding is set, then returns true. In this case, the internal character encoding is
NOT changed. If encoding is omitted, then the current character encoding name for a multibyte regex is returned.</format></li></list>
    </def>
</deflist>