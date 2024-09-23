<title># Regex</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\Regex()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Regex low-level proxy class

<p><format style="italic">The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the
delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character
except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself,
it needs to be escaped by backslash. Perl style (), }, [], and <> matching delimiters may also be used.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\Regex
    </def><def title="Implements:">
        <list><li><a href="InitStatic.md">\FireHub\Core\Base\InitStatic</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="ConcreteStatic.md">\FireHub\Core\Base\Trait\ConcreteStatic</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L42">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php">
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
|public static |<a href="#split()">split</a>|### Split string by a regular expression|
|public static |<a href="#quote()">quote</a>|### Quote regular expression characters|


## method: match {id="match()"}

<code-block lang="php">
    <![CDATA[public static Regex::match(string $pattern, string $string, int $offset, bool $all = false, null|string[] &$result = null):bool]]>
</code-block>













### ### Perform a regular expression match

<p><format style="italic">Searches subject for a match to the regular expression given in a pattern.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L82">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L82">
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
        <list><li><a href="Check.md#custom()">\FireHub\Core\Support\Strings\Expression\Check::custom()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Get.md#custom()">\FireHub\Core\Support\Strings\Expression\Get::custom()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
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
</format></li><li>bool <format style="bold">$all</format> = false - <format style="italic">[optional] 
If true, search subject for a match to the regular expression given in a pattern.
</format></li><li>by reference null or string[] <format style="bold">$result</format> = null - <format style="italic">[optional] 
Regular expressions match the result.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the string matches the regular expression pattern, false if not.</format></li></list>
    </def>
</deflist>
## method: replace {id="replace()"}

<code-block lang="php">
    <![CDATA[public static Regex::replace(string $pattern, string $replacement, string $string, int $limit = -1):string]]>
</code-block>













### ### Perform a regular expression search and replace

<p><format style="italic">Searches $subject for matches to $pattern and replaces them with $replacement.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L116">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L116">
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
        <list><li><a href="asBoolean.md">\FireHub\Core\Support\Helpers\String\asBoolean()</a>  - <format style="italic">To replace spaces with empty value.</format></li><li><a href="Replace.md#custom()">\FireHub\Core\Support\Strings\Expression\Replace::custom()</a>  - <format style="italic">To perform a regular expression search and replace.</format></li></list>
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
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit).
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If error while performing a regular expression, search and replace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Replaced string.</format></li></list>
    </def>
</deflist>
## method: replaceFunc {id="replacefunc()"}

<code-block lang="php">
    <![CDATA[public static Regex::replaceFunc(string $pattern, callable $callback, string $string, int $limit = -1):string]]>
</code-block>













### ### Perform a regular expression search and replace using a callback

<p><format style="italic">Searches $subject for matches to $pattern and replaces them with $replacement.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L152">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L152">
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
        <list><li><a href="ReplaceFunc.md#custom()">\FireHub\Core\Support\Strings\Expression\ReplaceFunc::custom()</a>  - <format style="italic">To perform a regular expression search and replace using a callback.</format></li></list>
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
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit).
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If error while performing a regular expression, search and replace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Replaced string.</format></li></list>
    </def>
</deflist>
## method: split {id="split()"}

<code-block lang="php">
    <![CDATA[public static Regex::split(string $pattern, string $string, int $limit = -1, bool $remove_empty = false):string[]]]>
</code-block>













### ### Split string by a regular expression

<p><format style="italic">Split the given string by a regular expression.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L185">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L185">
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
        <list><li><a href="Split.md#custom()">\FireHub\Core\Support\Strings\Expression\Split::custom()</a>  - <format style="italic">To perform a regular expression split.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$pattern</format> - <format style="italic">
The regular expression pattern.
</format></li><li>string <format style="bold">$string</format> - <format style="italic">
The input string.
</format></li><li>int <format style="bold">$limit</format> = -1 - <format style="italic">[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit).
</format></li><li>bool <format style="bold">$remove_empty</format> = false - <format style="italic">[optional] 
If true, only non-empty pieces will be returned.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If error while performing a regular expression split.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">Array containing substrings of $string split along boundaries matched by $pattern.</format></li></list>
    </def>
</deflist>
## method: quote {id="quote()"}

<code-block lang="php">
    <![CDATA[public static Regex::quote(string $string, null|string $delimiter = null):string]]>
</code-block>













### ### Quote regular expression characters

<p><format style="italic">Method takes string and puts a backslash in front of every character that is part of the regular expression syntax.
This is useful if you have a runtime string that you need to match in some text
and the string may contain special regex characters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L211">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L211">
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
</format></li><li>null or string <format style="bold">$delimiter</format> = null - <format style="italic">[optional] 
If the optional delimiter is specified, it will also be escaped.
This is useful for escaping the delimiter required by the PCRE functions.
The / is the most commonly used delimiter.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The quoted (escaped) string.</format></li></list>
    </def>
</deflist>