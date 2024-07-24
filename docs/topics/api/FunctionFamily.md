<title># FunctionFamily</title>

<code-block lang="php">
<![CDATA[abstract class \FireHub\Core\Support\Strings\Expression\FunctionFamily()]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> class that cannot be instantiated directly.
    </p>
</tip>





### ### Regular expression function family



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Strings\Expression\FunctionFamily
    </def><def title="Implements:">
        <list><li><a href="Init.md">\FireHub\Core\Base\Init</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="Concrete.md">\FireHub\Core\Base\Trait\Concrete</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L48">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$delimiter">delimiter</a>|### Pattern enclosure|&#039;/&#039;|
|protected|<a href="#$modifiers">modifiers</a>|### List of expression pattern modifiers|[]|
|protected|<a href="#$string_or_character">string_or_character</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|magic public|<a href="#any()">any</a>||
|magic public|<a href="#is()">is</a>||
|magic public|<a href="#has()">has</a>||
|magic public|<a href="#beginswith()">beginsWith</a>||
|magic public|<a href="#endswith()">endsWith</a>||
|magic public|<a href="#oneormore()">oneOrMore</a>||
|magic public|<a href="#zeroormore()">zeroOrMore</a>||
|magic public|<a href="#zeroorone()">zeroOrOne</a>||
|magic public|<a href="#exactly()">exactly</a>||
|magic public|<a href="#atleast()">atLeast</a>||
|magic public|<a href="#atmost()">atMost</a>||
|magic public|<a href="#between()">between</a>||
|magic public|<a href="#before()">before</a>||
|magic public|<a href="#after()">after</a>||
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#custom()">custom</a>|### Custom regex pattern|
|public|<a href="#withdelimiter()">withDelimiter</a>|### Set patter enclosure delimiter|
|protected|<a href="#patternbuilder()">patternBuilder</a>|### Pattern builder|
|public|<a href="#__call()">__call</a>|### Call predefined patterns|
|inherited public|<a href="#jsonserialize()">jsonSerialize</a>||
|inherited public|<a href="#__serialize()">__serialize</a>||
|inherited public|<a href="#__unserialize()">__unserialize</a>||

## property: delimiter {id="$delimiter"}

<code-block lang="php">
    <![CDATA[protected non-empty-string $delimiter = &#039;/&#039;]]>
</code-block>











### ### Pattern enclosure



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L62">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L62">
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
    <![CDATA[protected \FireHub\Core\Support\Enums\String\Expression\Modifier[] $modifiers = []]]>
</code-block>











### ### List of expression pattern modifiers



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L70">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L70">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## property: string_or_character {id="$string_or_character"}

<code-block lang="php">
    <![CDATA[protected \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L91">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L91">
                    View blame
                </a>
            </def></deflist>
## method: any {id="any()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::any():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### Any string is from the beginning until the end</format></p>

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















<p><format style="italic">### If string is from the beginning until the end</format></p>

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















<p><format style="italic">### Has string from the beginning until the end</format></p>

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
## method: beginsWith {id="beginswith()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::beginsWith():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### If begins string is</format></p>

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
## method: endsWith {id="endswith()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::endsWith():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### If ends string is</format></p>

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















<p><format style="italic">### One or more occurrences</format></p>

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















<p><format style="italic">### Zero or more occurrences</format></p>

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















<p><format style="italic">### Zero or one occurrences</format></p>

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
    <![CDATA[public FunctionFamily::exactly(int $number):\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### Exactly occurrences</format></p>

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
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$number</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: atLeast {id="atleast()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::atLeast(int $number):\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### At least occurrences</format></p>

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
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$number</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: atMost {id="atmost()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::atMost(int $number):\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### At most occurrences</format></p>

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
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$number</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: between {id="between()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::between(int $from, int $to):\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### Between occurrences</format></p>

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
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$from</format></li><li>int <format style="bold">$to</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Pattern.md">\FireHub\Core\Support\Strings\Expression\Pattern</a></li></list>
    </def>
</deflist>
## method: before {id="before()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::before():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### Before occurrences</format></p>

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
## method: after {id="after()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::after():\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>















<p><format style="italic">### After occurrences</format></p>

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
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character, \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L90">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L90">
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
    <![CDATA[abstract public FunctionFamily::custom(string $pattern):mixed]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> method that cannot be instantiated directly.
    </p>
</tip>





### ### Custom regex pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L110">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L110">
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
        <list><li><a href="Pattern.md#custom()">\FireHub\Core\Support\Strings\Expression\Pattern::custom()</a>  - <format style="italic">As custom regex.</format></li></list>
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
        <list><li>mixed - <format style="italic">Regex result.</format></li></list>
    </def>
</deflist>
## method: withDelimiter {id="withdelimiter()"}

<code-block lang="php">
    <![CDATA[public FunctionFamily::withDelimiter(\FireHub\Core\Support\Contracts\HighLevel\Characters $character):static]]>
</code-block>













### ### Set patter enclosure delimiter



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L127">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L127">
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
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the delimiter is alphanumeric, backslash, or whitespace.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L151">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L151">
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
        <list><li><a href="Check.md#custom()">\FireHub\Core\Support\Strings\Expression\Check::custom()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="Get.md#custom()">\FireHub\Core\Support\Strings\Expression\Get::custom()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="Replace.md#custom()">\FireHub\Core\Support\Strings\Expression\Replace::custom()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="ReplaceFunc.md#custom()">\FireHub\Core\Support\Strings\Expression\ReplaceFunc::custom()</a>  - <format style="italic">To build a pattern.</format></li><li><a href="Split.md#custom()">\FireHub\Core\Support\Strings\Expression\Split::custom()</a>  - <format style="italic">To build a pattern.</format></li></list>
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
    <![CDATA[public FunctionFamily::__call(non-empty-string $method, array<array-key,mixed> $arguments):\FireHub\Core\Support\Strings\Expression\Pattern]]>
</code-block>













### ### Call predefined patterns



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L179">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L179">
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
        <list><li>non-empty-string <format style="bold">$method</format> - <format style="italic">
Method name.
</format></li><li>array&lt;array-key,mixed&gt; <format style="bold">$arguments</format> - <format style="italic">
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
## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::jsonSerialize()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L39">
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
        <list><li><a href="Obj.md#properties()">\FireHub\Core\Support\LowLevel\Obj::properties()</a>  - <format style="italic">To get all public class properties.</format></li></list>
    </def>
</deflist>
## method: __serialize {id="__serialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::__serialize():never]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L54">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If you try to serialize an object.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>
## method: __unserialize {id="__unserialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::__unserialize(array $data):never]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L69">
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
        <list><li>array <format style="bold">$data</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If you try to unserialize an object.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>