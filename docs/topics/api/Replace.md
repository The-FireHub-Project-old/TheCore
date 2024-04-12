<title># Replace</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Strings\Expression\Replace()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Perform a regular expression search and replace



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Strings\Expression\Replace
    </def><def title="Parent class:">
        <a href="FunctionFamily.md">\FireHub\Core\Support\Strings\Expression\FunctionFamily</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L27">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php">
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
    <def title="This class is used by:">
        <list><li><a href="Expression.md#replace()">\FireHub\Core\Support\Strings\Expression::replace()</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$string_or_character">string_or_character</a>|||
|readonly private|<a href="#$with">with</a>|||
|inherited protected|<a href="#$delimiter">delimiter</a>|### Pattern enclosure|&#039;/&#039;|
|inherited protected|<a href="#$modifiers">modifiers</a>|### List of expression pattern modifiers|[]|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#custom()">custom</a>|### Custom regex pattern|
|inherited public|<a href="#withdelimiter()">withDelimiter</a>|### Set patter enclosure delimiter|
|inherited protected|<a href="#patternbuilder()">patternBuilder</a>|### Pattern builder|
|inherited public|<a href="#__call()">__call</a>|### Call predefined patterns|
|inherited magic public|<a href="#any()">any</a>||
|inherited magic public|<a href="#is()">is</a>||
|inherited magic public|<a href="#has()">has</a>||
|inherited magic public|<a href="#oneormore()">oneOrMore</a>||
|inherited magic public|<a href="#zeroormore()">zeroOrMore</a>||
|inherited magic public|<a href="#zeroorone()">zeroOrOne</a>||
|inherited magic public|<a href="#exactly()">exactly</a>||
|inherited magic public|<a href="#atleast()">atLeast</a>||
|inherited magic public|<a href="#atmost()">atMost</a>||
|inherited magic public|<a href="#between()">between</a>||

## property: string_or_character {id="$string_or_character"}

<code-block lang="php">
    <![CDATA[protected \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L51">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L51">
                    View blame
                </a>
            </def></deflist>
## property: with {id="$with"}

<code-block lang="php">
    <![CDATA[readonly private string $with]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L52">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L52">
                    View blame
                </a>
            </def></deflist>
## property: delimiter {id="$delimiter"}

<code-block lang="php">
    <![CDATA[protected string $delimiter = &#039;/&#039;]]>
</code-block>











### ### Pattern enclosure



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L50">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L50">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## property: modifiers {id="$modifiers"}

<code-block lang="php">
    <![CDATA[protected array $modifiers = []]]>
</code-block>











### ### List of expression pattern modifiers



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L59">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L59">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Replace::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character, string $with, \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L50">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L50">
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
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a>  - <format style="italic">As parameter.</format></li><li><a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a>  - <format style="italic">As parameter.</format></li><li><a href="Modifier.md">\FireHub\Core\Support\Enums\String\Expression\Modifier</a>  - <format style="italic">As parameter.</format></li><li><a href="Pattern.md#get()">\FireHub\Core\Support\Strings\Expression\Pattern::get()</a>  - <format style="italic">To get pattern result.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> or <a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a> <format style="bold">$string_or_character</format> - <format style="italic">
Character or string to use.
</format></li><li>string <format style="bold">$with</format> - <format style="italic">
The string to replace.
</format></li><li>variadic <a href="Modifier.md">\FireHub\Core\Support\Enums\String\Expression\Modifier</a> <format style="bold">$modifiers</format> - <format style="italic">
List of expression pattern modifiers.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: custom {id="custom()"}

<code-block lang="php">
    <![CDATA[public Replace::custom(string $pattern):\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings]]>
</code-block>













### ### Custom regex pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L73">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Replace.php#L73">
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
        <list><li><a href="FunctionFamily.md#patternbuilder()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::patternBuilder()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="Regex.md#replace()">\FireHub\Core\Support\LowLevel\Regex::replace()</a>  - <format style="italic">To perform a regular expression search and replace.</format></li><li><a href="Characters.md#string()">\FireHub\Core\Support\Contracts\HighLevel\Characters::string()</a>  - <format style="italic">To get character raw string.</format></li><li><a href="Strings.md#string()">\FireHub\Core\Support\Contracts\HighLevel\Strings::string()</a>  - <format style="italic">To get string raw string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$pattern</format> - <format style="italic">
The regular expression pattern.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> or <a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a> - <format style="italic">This character or string.</format></li></list>
    </def>
</deflist>
## method: withDelimiter {id="withdelimiter()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::withDelimiter(\FireHub\Core\Support\Contracts\HighLevel\Characters $character):static]]>
</code-block>













### ### Set patter enclosure delimiter



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L116">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L116">
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
        <list><li><a href="Characters.md#string()">\FireHub\Core\Support\Contracts\HighLevel\Characters::string()</a>  - <format style="italic">To get raw value from character.</format></li><li><a href="Characters.md#expression()">\FireHub\Core\Support\Contracts\HighLevel\Characters::expression()</a>  - <format style="italic">To do regular expression on $character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$character</format> - <format style="italic">
Patter enclosure delimiter to use.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If delimiter is alphanumeric, backslash, or whitespace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>static - <format style="italic">Current function.</format></li></list>
    </def>
</deflist>
## method: patternBuilder {id="patternbuilder()"}

<code-block lang="php">
    <![CDATA[protected FunctionFamily::patternBuilder(string $pattern):string]]>
</code-block>













### ### Pattern builder



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L140">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L140">
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
        <list><li><a href="Check.md#custom()">\FireHub\Core\Support\Strings\Expression\Check::custom()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="Get.md#custom()">\FireHub\Core\Support\Strings\Expression\Get::custom()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="Replace.md#custom()">\FireHub\Core\Support\Strings\Expression\Replace::custom()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="Split.md#custom()">\FireHub\Core\Support\Strings\Expression\Split::custom()</a>  - <format style="italic">To build a pattern.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$pattern</format> - <format style="italic">
The regular expression pattern.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Pattern string.</format></li></list>
    </def>
</deflist>
## method: __call {id="__call()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::__call(string $method, array $arguments):\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>













### ### Call predefined patterns



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L172">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L172">
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
        <list><li><a href="Cls.md#ofclass()">\FireHub\Core\Support\LowLevel\Cls::ofClass()</a>  - <format style="italic">To check if method argument is pattern class.</format></li><li><a href="StrSB.md#capitalize()">\FireHub\Core\Support\LowLevel\StrSB::capitalize()</a>  - <format style="italic">To capitalize method argument name.</format></li><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$method</format> - <format style="italic">
<code>non-empty-string</code>
Method name.
</format></li><li>array <format style="bold">$arguments</format> - <format style="italic">
<code><![CDATA[ array<array-key, mixed> ]]></code>
List of arguments.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If method doesn&#039;t exist.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a> - <format style="italic">This regex pattern.</format></li></list>
    </def>
</deflist>
## method: any {id="any()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::any():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">() ### Any string is from the beginning until the end</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: is {id="is()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::is():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">() ### If string is from the beginning until the end</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: has {id="has()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::has():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">() ### Has string from the beginning until the end</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: oneOrMore {id="oneormore()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::oneOrMore():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">() ### One or more occurrences</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: zeroOrMore {id="zeroormore()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::zeroOrMore():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">() ### Zero or more occurrences</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: zeroOrOne {id="zeroorone()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::zeroOrOne():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">() ### Zero or one occurrences</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: exactly {id="exactly()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::exactly():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">(int $number) ### Exactly occurrences</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: atLeast {id="atleast()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::atLeast():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">(int $number) ### At least occurrences</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: atMost {id="atmost()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::atMost():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">(int $number) ### At most occurrences</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: between {id="between()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::between():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">(int $from, int $to) ### Between occurrences</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>