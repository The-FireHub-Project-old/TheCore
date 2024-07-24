<title># Pattern</title>

<code-block lang="php">
<![CDATA[abstract class \FireHub\Core\Support\Strings\Expression\Pattern()]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> class that cannot be instantiated directly.
    </p>
</tip>





### ### Regular expression pattern



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Strings\Expression\Pattern
    </def><def title="Implements:">
        <list><li><a href="Init.md">\FireHub\Core\Base\Init</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="Concrete.md">\FireHub\Core\Base\Trait\Concrete</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L126">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php">
            View history
        </a>
    </def></deflist>


### Used by
<deflist>
    <def title="This class is used by:">
        <list><li><a href="FunctionFamily.md#__call()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::__call()</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$function_family">function_family</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|magic public|<a href="#letters()">letters</a>||
|magic public|<a href="#notletters()">notLetters</a>||
|magic public|<a href="#modifierletters()">modifierLetters</a>||
|magic public|<a href="#notmodifierletters()">notModifierLetters</a>||
|magic public|<a href="#otherletters()">otherLetters</a>||
|magic public|<a href="#nototherletters()">notOtherLetters</a>||
|magic public|<a href="#lower()">lower</a>||
|magic public|<a href="#upper()">upper</a>||
|magic public|<a href="#titlecased()">titleCased</a>||
|magic public|<a href="#nottitlecased()">notTitleCased</a>||
|magic public|<a href="#numbers()">numbers</a>||
|magic public|<a href="#notnumbers()">notNumbers</a>||
|magic public|<a href="#letternumbers()">letterNumbers</a>||
|magic public|<a href="#notletternumbers()">notLetterNumbers</a>||
|magic public|<a href="#othernumbers()">otherNumbers</a>||
|magic public|<a href="#notothernumbers()">notOtherNumbers</a>||
|magic public|<a href="#digits()">digits</a>||
|magic public|<a href="#notdigits()">notDigits</a>||
|magic public|<a href="#lettersanddigits()">lettersAndDigits</a>||
|magic public|<a href="#notlettersnordigits()">notLettersNorDigits</a>||
|magic public|<a href="#ascii()">ascii</a>||
|magic public|<a href="#notascii()">notAscii</a>||
|magic public|<a href="#blanks()">blanks</a>||
|magic public|<a href="#notblanks()">notBlanks</a>||
|magic public|<a href="#control()">control</a>||
|magic public|<a href="#notcontrol()">notControl</a>||
|magic public|<a href="#whitespaces()">whitespaces</a>||
|magic public|<a href="#notwhitespaces()">notWhitespaces</a>||
|magic public|<a href="#printable()">printable</a>||
|magic public|<a href="#notprintable()">notPrintable</a>||
|magic public|<a href="#graphical()">graphical</a>||
|magic public|<a href="#notgraphical()">notGraphical</a>||
|magic public|<a href="#wordcharacters()">wordCharacters</a>||
|magic public|<a href="#notwordcharacters()">notWordCharacters</a>||
|magic public|<a href="#hexadecimals()">hexadecimals</a>||
|magic public|<a href="#nothexadecimals()">notHexadecimals</a>||
|magic public|<a href="#verticalwhitespaces()">verticalWhitespaces</a>||
|magic public|<a href="#notverticalwhitespaces()">notVerticalWhitespaces</a>||
|magic public|<a href="#horizontalwhitespaces()">horizontalWhitespaces</a>||
|magic public|<a href="#nothorizontalwhitespaces()">notHorizontalWhitespaces</a>||
|magic public|<a href="#wordboundaries()">wordBoundaries</a>||
|magic public|<a href="#notwordboundaries()">notWordBoundaries</a>||
|magic public|<a href="#format()">format</a>||
|magic public|<a href="#notformat()">notFormat</a>||
|magic public|<a href="#punctuation()">punctuation</a>||
|magic public|<a href="#notpunctuation()">notPunctuation</a>||
|magic public|<a href="#connectorpunctuation()">connectorPunctuation</a>||
|magic public|<a href="#notconnectorpunctuation()">notConnectorPunctuation</a>||
|magic public|<a href="#dashpunctuation()">dashPunctuation</a>||
|magic public|<a href="#notdashpunctuation()">notDashPunctuation</a>||
|magic public|<a href="#closepunctuation()">closePunctuation</a>||
|magic public|<a href="#notclosepunctuation()">notClosePunctuation</a>||
|magic public|<a href="#finalpunctuation()">finalPunctuation</a>||
|magic public|<a href="#notfinalpunctuation()">notFinalPunctuation</a>||
|magic public|<a href="#initialpunctuation()">initialPunctuation</a>||
|magic public|<a href="#notinitialpunctuation()">notInitialPunctuation</a>||
|magic public|<a href="#otherpunctuation()">otherPunctuation</a>||
|magic public|<a href="#nototherpunctuation()">notOtherPunctuation</a>||
|magic public|<a href="#openpunctuation()">openPunctuation</a>||
|magic public|<a href="#notopenpunctuation()">notOpenPunctuation</a>||
|magic public|<a href="#symbol()">symbol</a>||
|magic public|<a href="#notsymbol()">notSymbol</a>||
|magic public|<a href="#currency()">currency</a>||
|magic public|<a href="#notcurrency()">notCurrency</a>||
|magic public|<a href="#modifier()">modifier</a>||
|magic public|<a href="#notmodifier()">notModifier</a>||
|magic public|<a href="#mathematical()">mathematical</a>||
|magic public|<a href="#notmathematical()">notMathematical</a>||
|magic public|<a href="#othersymbol()">otherSymbol</a>||
|magic public|<a href="#notothersymbol()">notOtherSymbol</a>||
|magic public|<a href="#unassigned()">unassigned</a>||
|magic public|<a href="#assigned()">assigned</a>||
|magic public|<a href="#notnewline()">notNewLine</a>||
|magic public|<a href="#mark()">mark</a>||
|magic public|<a href="#notmark()">notMark</a>||
|magic public|<a href="#spacingmark()">spacingMark</a>||
|magic public|<a href="#nonspacingmark()">nonSpacingMark</a>||
|magic public|<a href="#notspacingmark()">notSpacingMark</a>||
|magic public|<a href="#notnonspacingmark()">notNonSpacingMark</a>||
|magic public|<a href="#enclosingmark()">enclosingMark</a>||
|magic public|<a href="#notenclosingmark()">notEnclosingMark</a>||
|magic public|<a href="#separator()">separator</a>||
|magic public|<a href="#notseparator()">notSeparator</a>||
|magic public|<a href="#lineseparator()">lineSeparator</a>||
|magic public|<a href="#notlineseparator()">notLineSeparator</a>||
|magic public|<a href="#paragraphseparator()">paragraphSeparator</a>||
|magic public|<a href="#notparagraphseparator()">notParagraphSeparator</a>||
|magic public|<a href="#spaceseparator()">spaceSeparator</a>||
|magic public|<a href="#notspaceseparator()">notSpaceSeparator</a>||
|magic public|<a href="#chars()">chars</a>||
|magic public|<a href="#notchars()">notChars</a>||
|magic public|<a href="#inrange()">inRange</a>||
|magic public|<a href="#notinrange()">notInRange</a>||
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#custom()">custom</a>|### Custom regex pattern|
|public|<a href="#regex()">regex</a>|### Custom regex|
|public|<a href="#__call()">__call</a>|### Call predefined patterns|
|inherited public|<a href="#jsonserialize()">jsonSerialize</a>||
|inherited public|<a href="#__serialize()">__serialize</a>||
|inherited public|<a href="#__unserialize()">__unserialize</a>||

## property: function_family {id="$function_family"}

<code-block lang="php">
    <![CDATA[protected \FireHub\Core\Support\Strings\Expression\FunctionFamily $function_family]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L145">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L145">
                    View blame
                </a>
            </def></deflist>
## method: letters {id="letters()"}

<code-block lang="php">
    <![CDATA[public Pattern::letters():mixed]]>
</code-block>















<p><format style="italic">### Letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notLetters {id="notletters()"}

<code-block lang="php">
    <![CDATA[public Pattern::notLetters():mixed]]>
</code-block>















<p><format style="italic">### Not-letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: modifierLetters {id="modifierletters()"}

<code-block lang="php">
    <![CDATA[public Pattern::modifierLetters():mixed]]>
</code-block>















<p><format style="italic">### Modifier letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notModifierLetters {id="notmodifierletters()"}

<code-block lang="php">
    <![CDATA[public Pattern::notModifierLetters():mixed]]>
</code-block>















<p><format style="italic">### Not-modifier letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: otherLetters {id="otherletters()"}

<code-block lang="php">
    <![CDATA[public Pattern::otherLetters():mixed]]>
</code-block>















<p><format style="italic">### Other letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notOtherLetters {id="nototherletters()"}

<code-block lang="php">
    <![CDATA[public Pattern::notOtherLetters():mixed]]>
</code-block>















<p><format style="italic">### Not-other letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: lower {id="lower()"}

<code-block lang="php">
    <![CDATA[public Pattern::lower():mixed]]>
</code-block>















<p><format style="italic">### Lower case letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: upper {id="upper()"}

<code-block lang="php">
    <![CDATA[public Pattern::upper():mixed]]>
</code-block>















<p><format style="italic">### Upper case letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: titleCased {id="titlecased()"}

<code-block lang="php">
    <![CDATA[public Pattern::titleCased():mixed]]>
</code-block>















<p><format style="italic">### Title-cased letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notTitleCased {id="nottitlecased()"}

<code-block lang="php">
    <![CDATA[public Pattern::notTitleCased():mixed]]>
</code-block>















<p><format style="italic">### Not-title-cased letters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: numbers {id="numbers()"}

<code-block lang="php">
    <![CDATA[public Pattern::numbers():mixed]]>
</code-block>















<p><format style="italic">### Numbers</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notNumbers {id="notnumbers()"}

<code-block lang="php">
    <![CDATA[public Pattern::notNumbers():mixed]]>
</code-block>















<p><format style="italic">### Not-numbers</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: letterNumbers {id="letternumbers()"}

<code-block lang="php">
    <![CDATA[public Pattern::letterNumbers():mixed]]>
</code-block>















<p><format style="italic">### Letter numbers</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notLetterNumbers {id="notletternumbers()"}

<code-block lang="php">
    <![CDATA[public Pattern::notLetterNumbers():mixed]]>
</code-block>















<p><format style="italic">### Not-netter numbers</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: otherNumbers {id="othernumbers()"}

<code-block lang="php">
    <![CDATA[public Pattern::otherNumbers():mixed]]>
</code-block>















<p><format style="italic">### Other numbers</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notOtherNumbers {id="notothernumbers()"}

<code-block lang="php">
    <![CDATA[public Pattern::notOtherNumbers():mixed]]>
</code-block>















<p><format style="italic">### Not-other numbers</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: digits {id="digits()"}

<code-block lang="php">
    <![CDATA[public Pattern::digits():mixed]]>
</code-block>















<p><format style="italic">### Digits</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notDigits {id="notdigits()"}

<code-block lang="php">
    <![CDATA[public Pattern::notDigits():mixed]]>
</code-block>















<p><format style="italic">### Not-digits</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: lettersAndDigits {id="lettersanddigits()"}

<code-block lang="php">
    <![CDATA[public Pattern::lettersAndDigits():mixed]]>
</code-block>















<p><format style="italic">### Letters and digits</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notLettersNorDigits {id="notlettersnordigits()"}

<code-block lang="php">
    <![CDATA[public Pattern::notLettersNorDigits():mixed]]>
</code-block>















<p><format style="italic">### Not-letters nor digits</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: ascii {id="ascii()"}

<code-block lang="php">
    <![CDATA[public Pattern::ascii():mixed]]>
</code-block>















<p><format style="italic">### Character codes 0-127</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notAscii {id="notascii()"}

<code-block lang="php">
    <![CDATA[public Pattern::notAscii():mixed]]>
</code-block>















<p><format style="italic">### Character codes not from 0-127</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: blanks {id="blanks()"}

<code-block lang="php">
    <![CDATA[public Pattern::blanks():mixed]]>
</code-block>















<p><format style="italic">### Space or tab only</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notBlanks {id="notblanks()"}

<code-block lang="php">
    <![CDATA[public Pattern::notBlanks():mixed]]>
</code-block>















<p><format style="italic">### Not space nor tab only</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: control {id="control()"}

<code-block lang="php">
    <![CDATA[public Pattern::control():mixed]]>
</code-block>















<p><format style="italic">### Control characters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notControl {id="notcontrol()"}

<code-block lang="php">
    <![CDATA[public Pattern::notControl():mixed]]>
</code-block>















<p><format style="italic">### Not-control characters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: whitespaces {id="whitespaces()"}

<code-block lang="php">
    <![CDATA[public Pattern::whitespaces():mixed]]>
</code-block>















<p><format style="italic">### Whitespaces</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notWhitespaces {id="notwhitespaces()"}

<code-block lang="php">
    <![CDATA[public Pattern::notWhitespaces():mixed]]>
</code-block>















<p><format style="italic">### Not-whitespaces</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: printable {id="printable()"}

<code-block lang="php">
    <![CDATA[public Pattern::printable():mixed]]>
</code-block>















<p><format style="italic">### Printing characters, including space</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notPrintable {id="notprintable()"}

<code-block lang="php">
    <![CDATA[public Pattern::notPrintable():mixed]]>
</code-block>















<p><format style="italic">### Not-printing characters, including space</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: graphical {id="graphical()"}

<code-block lang="php">
    <![CDATA[public Pattern::graphical():mixed]]>
</code-block>















<p><format style="italic">### Printing characters, excluding space</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notGraphical {id="notgraphical()"}

<code-block lang="php">
    <![CDATA[public Pattern::notGraphical():mixed]]>
</code-block>















<p><format style="italic">### Not-printing characters, excluding space</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: wordCharacters {id="wordcharacters()"}

<code-block lang="php">
    <![CDATA[public Pattern::wordCharacters():mixed]]>
</code-block>















<p><format style="italic">### Underscore or any character that is a letter or digit</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notWordCharacters {id="notwordcharacters()"}

<code-block lang="php">
    <![CDATA[public Pattern::notWordCharacters():mixed]]>
</code-block>















<p><format style="italic">### Not-underscore or any character that is not a letter nor digit</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: hexadecimals {id="hexadecimals()"}

<code-block lang="php">
    <![CDATA[public Pattern::hexadecimals():mixed]]>
</code-block>















<p><format style="italic">### Hexadecimals</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notHexadecimals {id="nothexadecimals()"}

<code-block lang="php">
    <![CDATA[public Pattern::notHexadecimals():mixed]]>
</code-block>















<p><format style="italic">### Not-hexadecimals</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: verticalWhitespaces {id="verticalwhitespaces()"}

<code-block lang="php">
    <![CDATA[public Pattern::verticalWhitespaces():mixed]]>
</code-block>















<p><format style="italic">### Vertical whitespaces</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notVerticalWhitespaces {id="notverticalwhitespaces()"}

<code-block lang="php">
    <![CDATA[public Pattern::notVerticalWhitespaces():mixed]]>
</code-block>















<p><format style="italic">### Not-vertical whitespaces</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: horizontalWhitespaces {id="horizontalwhitespaces()"}

<code-block lang="php">
    <![CDATA[public Pattern::horizontalWhitespaces():mixed]]>
</code-block>















<p><format style="italic">### Horizontal whitespaces</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notHorizontalWhitespaces {id="nothorizontalwhitespaces()"}

<code-block lang="php">
    <![CDATA[public Pattern::notHorizontalWhitespaces():mixed]]>
</code-block>















<p><format style="italic">### Not-horizontal whitespaces</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: wordBoundaries {id="wordboundaries()"}

<code-block lang="php">
    <![CDATA[public Pattern::wordBoundaries():mixed]]>
</code-block>















<p><format style="italic">### Word boundaries</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notWordBoundaries {id="notwordboundaries()"}

<code-block lang="php">
    <![CDATA[public Pattern::notWordBoundaries():mixed]]>
</code-block>















<p><format style="italic">### Not-word boundaries</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: format {id="format()"}

<code-block lang="php">
    <![CDATA[public Pattern::format():mixed]]>
</code-block>















<p><format style="italic">### Format</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notFormat {id="notformat()"}

<code-block lang="php">
    <![CDATA[public Pattern::notFormat():mixed]]>
</code-block>















<p><format style="italic">### Not-format</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: punctuation {id="punctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::punctuation():mixed]]>
</code-block>















<p><format style="italic">### Punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notPunctuation {id="notpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: connectorPunctuation {id="connectorpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::connectorPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Connector punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notConnectorPunctuation {id="notconnectorpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notConnectorPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not-connector punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: dashPunctuation {id="dashpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::dashPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Dash punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notDashPunctuation {id="notdashpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notDashPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not-dash punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: closePunctuation {id="closepunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::closePunctuation():mixed]]>
</code-block>















<p><format style="italic">### Close punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notClosePunctuation {id="notclosepunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notClosePunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not-close punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: finalPunctuation {id="finalpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::finalPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Final punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notFinalPunctuation {id="notfinalpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notFinalPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not-final punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: initialPunctuation {id="initialpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::initialPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Initial punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notInitialPunctuation {id="notinitialpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notInitialPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not-initial punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: otherPunctuation {id="otherpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::otherPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Other punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notOtherPunctuation {id="nototherpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notOtherPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not-other punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: openPunctuation {id="openpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::openPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Open punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notOpenPunctuation {id="notopenpunctuation()"}

<code-block lang="php">
    <![CDATA[public Pattern::notOpenPunctuation():mixed]]>
</code-block>















<p><format style="italic">### Not-open punctuation</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: symbol {id="symbol()"}

<code-block lang="php">
    <![CDATA[public Pattern::symbol():mixed]]>
</code-block>















<p><format style="italic">### Symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notSymbol {id="notsymbol()"}

<code-block lang="php">
    <![CDATA[public Pattern::notSymbol():mixed]]>
</code-block>















<p><format style="italic">### Not-symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: currency {id="currency()"}

<code-block lang="php">
    <![CDATA[public Pattern::currency():mixed]]>
</code-block>















<p><format style="italic">### Currency symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notCurrency {id="notcurrency()"}

<code-block lang="php">
    <![CDATA[public Pattern::notCurrency():mixed]]>
</code-block>















<p><format style="italic">### Not-currency symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: modifier {id="modifier()"}

<code-block lang="php">
    <![CDATA[public Pattern::modifier():mixed]]>
</code-block>















<p><format style="italic">### Modifier symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notModifier {id="notmodifier()"}

<code-block lang="php">
    <![CDATA[public Pattern::notModifier():mixed]]>
</code-block>















<p><format style="italic">### Not-modifier symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: mathematical {id="mathematical()"}

<code-block lang="php">
    <![CDATA[public Pattern::mathematical():mixed]]>
</code-block>















<p><format style="italic">### Mathematical symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notMathematical {id="notmathematical()"}

<code-block lang="php">
    <![CDATA[public Pattern::notMathematical():mixed]]>
</code-block>















<p><format style="italic">### Not-mathematical symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: otherSymbol {id="othersymbol()"}

<code-block lang="php">
    <![CDATA[public Pattern::otherSymbol():mixed]]>
</code-block>















<p><format style="italic">### An other symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notOtherSymbol {id="notothersymbol()"}

<code-block lang="php">
    <![CDATA[public Pattern::notOtherSymbol():mixed]]>
</code-block>















<p><format style="italic">### Not another symbol</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: unassigned {id="unassigned()"}

<code-block lang="php">
    <![CDATA[public Pattern::unassigned():mixed]]>
</code-block>















<p><format style="italic">### Unassigned – characters with code points greater than 0x10FFFF</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: assigned {id="assigned()"}

<code-block lang="php">
    <![CDATA[public Pattern::assigned():mixed]]>
</code-block>















<p><format style="italic">### Assigned – characters with code points smaller than 0x10FFFF</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notNewLine {id="notnewline()"}

<code-block lang="php">
    <![CDATA[public Pattern::notNewLine():mixed]]>
</code-block>















<p><format style="italic">### not-new line</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: mark {id="mark()"}

<code-block lang="php">
    <![CDATA[public Pattern::mark():mixed]]>
</code-block>















<p><format style="italic">### Mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notMark {id="notmark()"}

<code-block lang="php">
    <![CDATA[public Pattern::notMark():mixed]]>
</code-block>















<p><format style="italic">### Non-mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: spacingMark {id="spacingmark()"}

<code-block lang="php">
    <![CDATA[public Pattern::spacingMark():mixed]]>
</code-block>















<p><format style="italic">### Spacing mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: nonSpacingMark {id="nonspacingmark()"}

<code-block lang="php">
    <![CDATA[public Pattern::nonSpacingMark():mixed]]>
</code-block>















<p><format style="italic">### Non-spacing mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notSpacingMark {id="notspacingmark()"}

<code-block lang="php">
    <![CDATA[public Pattern::notSpacingMark():mixed]]>
</code-block>















<p><format style="italic">### Not-spacing mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notNonSpacingMark {id="notnonspacingmark()"}

<code-block lang="php">
    <![CDATA[public Pattern::notNonSpacingMark():mixed]]>
</code-block>















<p><format style="italic">### Not-non-spacing mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: enclosingMark {id="enclosingmark()"}

<code-block lang="php">
    <![CDATA[public Pattern::enclosingMark():mixed]]>
</code-block>















<p><format style="italic">### Enclosing mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notEnclosingMark {id="notenclosingmark()"}

<code-block lang="php">
    <![CDATA[public Pattern::notEnclosingMark():mixed]]>
</code-block>















<p><format style="italic">### Not-enclosing mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: separator {id="separator()"}

<code-block lang="php">
    <![CDATA[public Pattern::separator():mixed]]>
</code-block>















<p><format style="italic">### Separator</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notSeparator {id="notseparator()"}

<code-block lang="php">
    <![CDATA[public Pattern::notSeparator():mixed]]>
</code-block>















<p><format style="italic">### Not-separator mark</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: lineSeparator {id="lineseparator()"}

<code-block lang="php">
    <![CDATA[public Pattern::lineSeparator():mixed]]>
</code-block>















<p><format style="italic">### Line separator</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notLineSeparator {id="notlineseparator()"}

<code-block lang="php">
    <![CDATA[public Pattern::notLineSeparator():mixed]]>
</code-block>















<p><format style="italic">### Not-line separator</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: paragraphSeparator {id="paragraphseparator()"}

<code-block lang="php">
    <![CDATA[public Pattern::paragraphSeparator():mixed]]>
</code-block>















<p><format style="italic">### Paragraph separator</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notParagraphSeparator {id="notparagraphseparator()"}

<code-block lang="php">
    <![CDATA[public Pattern::notParagraphSeparator():mixed]]>
</code-block>















<p><format style="italic">### Not-paragraph separator</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: spaceSeparator {id="spaceseparator()"}

<code-block lang="php">
    <![CDATA[public Pattern::spaceSeparator():mixed]]>
</code-block>















<p><format style="italic">### Space separator</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notSpaceSeparator {id="notspaceseparator()"}

<code-block lang="php">
    <![CDATA[public Pattern::notSpaceSeparator():mixed]]>
</code-block>















<p><format style="italic">### Not-space separator</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: chars {id="chars()"}

<code-block lang="php">
    <![CDATA[public Pattern::chars(\FireHub\Core\Support\Contracts\HighLevel\Characters[] $characters):mixed]]>
</code-block>















<p><format style="italic">### Characters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters[].md">\FireHub\Core\Support\Contracts\HighLevel\Characters[]</a> <format style="bold">$characters</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notChars {id="notchars()"}

<code-block lang="php">
    <![CDATA[public Pattern::notChars(\FireHub\Core\Support\Contracts\HighLevel\Characters[] $characters):mixed]]>
</code-block>















<p><format style="italic">### Not-characters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters[].md">\FireHub\Core\Support\Contracts\HighLevel\Characters[]</a> <format style="bold">$characters</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: inRange {id="inrange()"}

<code-block lang="php">
    <![CDATA[public Pattern::inRange(\FireHub\Core\Support\Contracts\HighLevel\Characters $from, \FireHub\Core\Support\Contracts\HighLevel\Characters $until):mixed]]>
</code-block>















<p><format style="italic">In the range of characters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$from</format></li><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$until</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: notInRange {id="notinrange()"}

<code-block lang="php">
    <![CDATA[public Pattern::notInRange(\FireHub\Core\Support\Contracts\HighLevel\Characters $from, \FireHub\Core\Support\Contracts\HighLevel\Characters $until):mixed]]>
</code-block>















<p><format style="italic">Not in the range of characters</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$from</format></li><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$until</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed</li></list>
    </def>
</deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Pattern::__construct(\FireHub\Core\Support\Strings\Expression\FunctionFamily $function_family):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L144">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L144">
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
        <list><li><a href="FunctionFamily.md">\FireHub\Core\Support\Strings\Expression\FunctionFamily</a> <format style="bold">$function_family</format> - <format style="italic">
Function to use.
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
    <![CDATA[final public Pattern::custom(string $pattern):mixed]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Custom regex pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L161">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L161">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0d</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="FunctionFamily.md#custom()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::custom()</a>  - <format style="italic">As custom regex.</format></li><li><a href="static.md#regex()">\FireHub\Core\Support\Strings\Expression\static::regex()</a>  - <format style="italic">As regex.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Pattern.md#__call()">\FireHub\Core\Support\Strings\Expression\Pattern::__call()</a>  - <format style="italic">To get custom regex pattern.</format></li></list>
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
## method: regex {id="regex()"}

<code-block lang="php">
    <![CDATA[abstract public Pattern::regex(string $pattern):string]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> method that cannot be instantiated directly.
    </p>
</tip>





### ### Custom regex



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L177">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L177">
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
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Regex.</format></li></list>
    </def>
</deflist>
## method: __call {id="__call()"}

<code-block lang="php">
    <![CDATA[public Pattern::__call(non-empty-string $method, array<array-key,mixed> $arguments):mixed]]>
</code-block>













### ### Call predefined patterns



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L199">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L199">
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
        <list><li><a href="Pattern.md#custom()">\FireHub\Core\Support\Strings\Expression\Pattern::custom()</a>  - <format style="italic">To get custom regex pattern.</format></li><li><a href="Cls.md#ofclass()">\FireHub\Core\Support\LowLevel\Cls::ofClass()</a>  - <format style="italic">To check if method argument is pattern class.</format></li><li><a href="StrSB.md#capitalize()">\FireHub\Core\Support\LowLevel\StrSB::capitalize()</a>  - <format style="italic">To capitalize method argument name.</format></li><li><a href="Predefined.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined::regex()</a>  - <format style="italic">To get regex predefined pattern.</format></li></list>
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
        <list><li>mixed - <format style="italic">Regex result.</format></li></list>
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