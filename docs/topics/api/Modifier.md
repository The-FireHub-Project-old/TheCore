<title># Modifier</title>

<code-block lang="php">
<![CDATA[enum Modifier]]>
</code-block>













### ### Expression pattern modifiers



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\String\Expression\Modifier
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php">
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
        <list><li><a href="FunctionFamily.md#__construct()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Replace.md#__construct()">\FireHub\Core\Support\Strings\Expression\Replace::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="ReplaceFunc.md#__construct()">\FireHub\Core\Support\Strings\Expression\ReplaceFunc::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Split.md#__construct()">\FireHub\Core\Support\Strings\Expression\Split::__construct()</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#caseless">CASELESS</a>|### Makes the expression match case-insensitive|&#039;i&#039;|
|<a href="#multiline">MULTILINE</a>|### Multiline characters|&#039;m&#039;|
|<a href="#dot_all">DOT_ALL</a>|### Dot metacharacter matches all characters|&#039;s&#039;|
|<a href="#extended">EXTENDED</a>|### Dot metacharacter matches all characters|&#039;x&#039;|
|<a href="#anchored">ANCHORED</a>|### Anchored|&#039;A&#039;|
|<a href="#dollar_end_only">DOLLAR_END_ONLY</a>|### Dollar metacharacter matches only at the end|&#039;D&#039;|
|<a href="#extra_analysis">EXTRA_ANALYSIS</a>|### Extra analysis is performed|&#039;S&#039;|
|<a href="#un_greedy">UN_GREEDY</a>|### Inverts the greediness|&#039;U&#039;|
|<a href="#extra">EXTRA</a>|### Backslash in a pattern that is followed by a letter that has no special meaning causes an error|&#039;X&#039;|
|<a href="#info_j_changed">INFO_J_CHANGED</a>|### Extra analysis is performed|&#039;J&#039;|
|<a href="#multibyte">MULTIBYTE</a>|### Pattern and subject strings are treated as UTF-8|&#039;u&#039;|
|<a href="#no_auto_capture">NO_AUTO_CAPTURE</a>|### Don't capture simple groups|&#039;n&#039;|

## case: CASELESS {id="caseless"}

<code-block lang="php">
<![CDATA[
    CASELESS = &#039;i&#039;    ]]>
</code-block>







### ### Makes the expression match case-insensitive

<p><format style="italic">If this modifier is set, letters in the pattern match both upper and lower case letters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L29">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L29">
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
        <list><li><a href="IStr.md#expression()">\FireHub\Core\Support\IStr::expression()</a>  - <format style="italic">As default modifier.</format></li></list>
    </def>
</deflist>
## case: MULTILINE {id="multiline"}

<code-block lang="php">
<![CDATA[
    MULTILINE = &#039;m&#039;    ]]>
</code-block>







### ### Multiline characters

<p><format style="italic">By default, PCRE treats the subject string as consisting of a single "line" of characters (even if it actually
contains several newlines). The "start of line" metacharacter (^) matches only at the start of the string, while
the "end of line" metacharacter ($) matches only at the end of the string, or before a terminating newline
(unless D modifier is set). This is the same as Perl. When this modifier is set, the "start of line" and
"end of line" constructs match immediately following or immediately before any newline in the subject string,
respectively, as well as at the very start and end. This is equivalent to Perl's /m modifier.
If there are no "\n" characters in a subject string, or no occurrences of ^ or $ in a pattern, setting this
modifier has no effect.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L44">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L44">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: DOT_ALL {id="dot_all"}

<code-block lang="php">
<![CDATA[
    DOT_ALL = &#039;s&#039;    ]]>
</code-block>







### ### Dot metacharacter matches all characters

<p><format style="italic">If this modifier is set, a dot metacharacter in the pattern matches all characters, including newlines.
Without it, newlines are excluded. This modifier is equivalent to Perl's /s modifier. A negative class such as
[^a] always matches a newline character, independent of the setting for this modifier.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L54">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EXTENDED {id="extended"}

<code-block lang="php">
<![CDATA[
    EXTENDED = &#039;x&#039;    ]]>
</code-block>







### ### Dot metacharacter matches all characters

<p><format style="italic">If this modifier is set, whitespace data characters in the pattern are totally ignored except when escaped
or inside a character class, and characters between an unescaped # outside a character class and the next
newline character, inclusive, are also ignored. This is equivalent to Perl's /x modifier, and makes it possible
to include commentary inside complicated patterns. Note, however, that this applies only to data characters.
Whitespace characters may never appear within special character sequences in a pattern, for example within
the sequence (?( which introduces a conditional subpattern.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L67">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ANCHORED {id="anchored"}

<code-block lang="php">
<![CDATA[
    ANCHORED = &#039;A&#039;    ]]>
</code-block>







### ### Anchored

<p><format style="italic">If this modifier is set, the pattern is forced to be "anchored"; that is, it is constrained to match only at
the start of the string which is being searched (the "subject string"). This effect can also be achieved by
appropriate constructs in the pattern itself, which is the only way to do it in Perl.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L77">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: DOLLAR_END_ONLY {id="dollar_end_only"}

<code-block lang="php">
<![CDATA[
    DOLLAR_END_ONLY = &#039;D&#039;    ]]>
</code-block>







### ### Dollar metacharacter matches only at the end

<p><format style="italic">If this modifier is set, a dollar metacharacter in the pattern matches only at the end of the subject string.
Without this modifier, a dollar also matches immediately before the final character if it is a newline (but not
before any other newlines). This modifier is ignored if m modifier is set. There is no equivalent to this
modifier in Perl.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L88">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L88">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EXTRA_ANALYSIS {id="extra_analysis"}

<code-block lang="php">
<![CDATA[
    EXTRA_ANALYSIS = &#039;S&#039;    ]]>
</code-block>







### ### Extra analysis is performed

<p><format style="italic">When a pattern is going to be used several times, it is worth spending more time analyzing it to speed up
the time taken for matching. If this modifier is set, then this extra analysis is performed. At present,
studying a pattern is useful only for non-anchored patterns that do not have a single fixed starting character.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L98">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L98">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: UN_GREEDY {id="un_greedy"}

<code-block lang="php">
<![CDATA[
    UN_GREEDY = &#039;U&#039;    ]]>
</code-block>







### ### Inverts the greediness

<p><format style="italic">This modifier inverts the "greediness" of the quantifiers so that they are not greedy by default, but become
greedy if followed by ?. It is not compatible with Perl. It can also be set by a (?U) modifier setting within
the pattern or by a question mark behind a quantifier (e.g. .*?).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L113">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L113">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="See also:">
        <list><li><a href="https://www.php.net/manual/en/pcre.configuration.php#ini.pcre.backtrack-limit">https://www.php.net/manual/en/pcre.configuration.php#ini.pcre.backtrack-limit</a> - <format style="italic">To see pcre.backtrack_limit
configuration.</format></li></list>
    </def>
</deflist>
## case: EXTRA {id="extra"}

<code-block lang="php">
<![CDATA[
    EXTRA = &#039;X&#039;    ]]>
</code-block>







### ### Backslash in a pattern that is followed by a letter that has no special meaning causes an error

<p><format style="italic">This modifier turns on additional functionality of PCRE that is incompatible with Perl. Any backslash in
a pattern that is followed by a letter that has no special meaning causes an error, thus reserving these
combinations for future expansion. By default, as in Perl, a backslash followed by a letter with no special
meaning is treated as a literal. There are at present no other features controlled by this modifier.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L124">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L124">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: INFO_J_CHANGED {id="info_j_changed"}

<code-block lang="php">
<![CDATA[
    INFO_J_CHANGED = &#039;J&#039;    ]]>
</code-block>







### ### Extra analysis is performed

<p><format style="italic">The (?J) internal option setting changes the local PCRE_DUPNAMES option. Allow duplicate names for
sub-patterns. As of PHP 7.2.0, J is supported as modifier as well.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L133">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L133">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: MULTIBYTE {id="multibyte"}

<code-block lang="php">
<![CDATA[
    MULTIBYTE = &#039;u&#039;    ]]>
</code-block>







### ### Pattern and subject strings are treated as UTF-8

<p><format style="italic">This modifier turns on additional functionality of PCRE that is incompatible with Perl. Pattern and subject
strings are treated as UTF-8. An invalid subject will cause the preg_* function to match nothing; an invalid
pattern will trigger an error of level E_WARNING. Five and six octet UTF-8 sequences are regarded as invalid.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L143">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L143">
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
        <list><li><a href="Char.md#expression()">\FireHub\Core\Support\Char::expression()</a>  - <format style="italic">As default modifier.</format></li><li><a href="IStr.md#expression()">\FireHub\Core\Support\IStr::expression()</a>  - <format style="italic">As default modifier.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As default modifier.</format></li></list>
    </def>
</deflist>
## case: NO_AUTO_CAPTURE {id="no_auto_capture"}

<code-block lang="php">
<![CDATA[
    NO_AUTO_CAPTURE = &#039;n&#039;    ]]>
</code-block>







### ### Don't capture simple groups

<p><format style="italic">This modifier makes simple (xyz) groups non-capturing. Only named groups like (?<name>xyz) are captured.
This only affects which groups are captured, it is still possible to use numbered subpattern references, and
the matches array will still contain numbered results.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L153">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L153">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>