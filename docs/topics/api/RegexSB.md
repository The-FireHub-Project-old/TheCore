<title># RegexSB</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\RegexSB()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Single-byte regex low-level proxy class

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
        \FireHub\Core\Support\LowLevel\RegexSB
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php#L32">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php">
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

## method: match {id="match()"}

<code-block lang="php">
    <![CDATA[public static RegexSB::match(string $pattern, string $string, int $offset):bool]]>
</code-block>













### ### Perform a regular expression match

<p><format style="italic">Searches subject for a match to the regular expression given in a pattern.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php#L59">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php#L59">
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
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
Normally, the search starts from the beginning of the subject string. The optional parameter offset can be used
to specify the alternate place from which to start the search (in bytes).
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
    <![CDATA[public static RegexSB::replace(string $pattern, string $replacement, string $string, int $limit = -1):string]]>
</code-block>













### ### Perform a regular expression search and replace

<p><format style="italic">Searches $subject for matches to $pattern and replaces them with $replacement.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php#L90">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php#L90">
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
</format></li><li>int <format style="bold">$limit</format> = -1 - <format style="italic">[optional] 
The maximum possible replacements for each pattern in each subject string. Defaults to -1 (no limit).
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If error while performing a regular expression search and replace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Replaced string.</format></li></list>
    </def>
</deflist>
## method: replaceFunc {id="replacefunc()"}

<code-block lang="php">
    <![CDATA[public static RegexSB::replaceFunc(string $pattern, callable $callback, string $string, int $limit = -1):string]]>
</code-block>













### ### Perform a regular expression search and replace using a callback

<p><format style="italic">Searches $subject for matches to $pattern and replaces them with $replacement.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php#L125">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexSB.php#L125">
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
</format></li><li>int <format style="bold">$limit</format> = -1 - <format style="italic">[optional] 
The maximum possible replacements for each pattern in each subject string. Defaults to -1 (no limit).
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If error while performing a regular expression search and replace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Replaced string.</format></li></list>
    </def>
</deflist>