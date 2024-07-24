<title># Conjunction</title>

<code-block lang="php">
<![CDATA[enum Conjunction]]>
</code-block>













### ### A conjunction is used to combine two or more objects, phrases, or clauses



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\String\Words\Conjunction
    </def><def title="Implements:">
        <list><li><a href="InitBackedEnum.md"></a></li></list>
    </def><def title="Uses:">
        <list><li><a href="ConcreteBackedEnum.md"></a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L26">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#after">AFTER</a>||&#039;after&#039;|
|<a href="#also">ALSO</a>||&#039;also&#039;|
|<a href="#although">ALTHOUGH</a>||&#039;although&#039;|
|<a href="#and">AND</a>||&#039;and&#039;|
|<a href="#as">AS</a>||&#039;as&#039;|
|<a href="#because">BECAUSE</a>||&#039;because&#039;|
|<a href="#but">BUT</a>||&#039;but&#039;|
|<a href="#for">FOR</a>||&#039;for&#039;|
|<a href="#however">HOWEVER</a>||&#039;however&#039;|
|<a href="#if">IF</a>||&#039;if&#039;|
|<a href="#no_less_than">NO_LESS_THAN</a>||&#039;no less than&#039;|
|<a href="#nor">NOR</a>||&#039;nor&#039;|
|<a href="#only">ONLY</a>||&#039;only&#039;|
|<a href="#or">OR</a>||&#039;or&#039;|
|<a href="#so">SO</a>||&#039;so&#039;|
|<a href="#still">STILL</a>||&#039;still&#039;|
|<a href="#though">THOUGH</a>||&#039;though&#039;|
|<a href="#till">TILL</a>||&#039;till&#039;|
|<a href="#too">TOO</a>||&#039;too&#039;|
|<a href="#where">WHERE</a>||&#039;where&#039;|
|<a href="#which">WHICH</a>||&#039;which&#039;|
|<a href="#who">WHO</a>||&#039;who&#039;|
|<a href="#whoever">WHOEVER</a>||&#039;whoever&#039;|
|<a href="#yet">YET</a>||&#039;yet&#039;|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#short()">short</a>|### Check if the conjunction is short|
|public static |<a href="#shorts()">shorts</a>|### Get a list of all short conjunctions|

## method: short {id="short()"}

<code-block lang="php">
    <![CDATA[public Conjunction::short():bool]]>
</code-block>













### ### Check if the conjunction is short

<p><format style="italic">All conjunctions with length less than four are considered short.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L164">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L164">
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
        <list><li><a href="StrSB.md#length()">\FireHub\Core\Support\LowLevel\StrSB::length()</a>  - <format style="italic">To get enum value length.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True of conjunction is short, false otherwise.</format></li></list>
    </def>
</deflist>
## method: shorts {id="shorts()"}

<code-block lang="php">
    <![CDATA[public static Conjunction::shorts():self[]]]>
</code-block>













### ### Get a list of all short conjunctions

<p><format style="italic">All conjunctions with length less than four are considered short.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L181">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L181">
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
        <list><li><a href="Conjunction.md#cases()">\FireHub\Core\Support\Enums\String\Words\Conjunction::cases()</a>  - <format style="italic">To get a list of all conjunctions.</format></li><li><a href="Conjunction.md#short()">\FireHub\Core\Support\Enums\String\Words\Conjunction::short()</a>  - <format style="italic">To check if the conjunction is short.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">To get a list of all short conjunctions.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>self[] - <format style="italic">List of all short conjunctions.</format></li></list>
    </def>
</deflist>
## case: AFTER {id="after"}

<code-block lang="php">
<![CDATA[
    AFTER = &#039;after&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L37">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L37">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ALSO {id="also"}

<code-block lang="php">
<![CDATA[
    ALSO = &#039;also&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L42">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L42">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ALTHOUGH {id="although"}

<code-block lang="php">
<![CDATA[
    ALTHOUGH = &#039;although&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L47">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L47">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: AND {id="and"}

<code-block lang="php">
<![CDATA[
    AND = &#039;and&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L52">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L52">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: AS {id="as"}

<code-block lang="php">
<![CDATA[
    AS = &#039;as&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L57">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BECAUSE {id="because"}

<code-block lang="php">
<![CDATA[
    BECAUSE = &#039;because&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L62">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L62">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BUT {id="but"}

<code-block lang="php">
<![CDATA[
    BUT = &#039;but&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L67">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: FOR {id="for"}

<code-block lang="php">
<![CDATA[
    FOR = &#039;for&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L72">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L72">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: HOWEVER {id="however"}

<code-block lang="php">
<![CDATA[
    HOWEVER = &#039;however&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L77">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: IF {id="if"}

<code-block lang="php">
<![CDATA[
    IF = &#039;if&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L82">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L82">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: NO_LESS_THAN {id="no_less_than"}

<code-block lang="php">
<![CDATA[
    NO_LESS_THAN = &#039;no less than&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L87">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L87">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: NOR {id="nor"}

<code-block lang="php">
<![CDATA[
    NOR = &#039;nor&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L92">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L92">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ONLY {id="only"}

<code-block lang="php">
<![CDATA[
    ONLY = &#039;only&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L97">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L97">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: OR {id="or"}

<code-block lang="php">
<![CDATA[
    OR = &#039;or&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L102">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L102">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: SO {id="so"}

<code-block lang="php">
<![CDATA[
    SO = &#039;so&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L107">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L107">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: STILL {id="still"}

<code-block lang="php">
<![CDATA[
    STILL = &#039;still&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L112">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L112">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: THOUGH {id="though"}

<code-block lang="php">
<![CDATA[
    THOUGH = &#039;though&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L117">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L117">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: TILL {id="till"}

<code-block lang="php">
<![CDATA[
    TILL = &#039;till&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L122">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L122">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: TOO {id="too"}

<code-block lang="php">
<![CDATA[
    TOO = &#039;too&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L127">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L127">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WHERE {id="where"}

<code-block lang="php">
<![CDATA[
    WHERE = &#039;where&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L132">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L132">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WHICH {id="which"}

<code-block lang="php">
<![CDATA[
    WHICH = &#039;which&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L137">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L137">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WHO {id="who"}

<code-block lang="php">
<![CDATA[
    WHO = &#039;who&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L142">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L142">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WHOEVER {id="whoever"}

<code-block lang="php">
<![CDATA[
    WHOEVER = &#039;whoever&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L147">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L147">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: YET {id="yet"}

<code-block lang="php">
<![CDATA[
    YET = &#039;yet&#039;    ]]>
</code-block>











<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L152">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/words/firehub.Conjunction.php#L152">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>