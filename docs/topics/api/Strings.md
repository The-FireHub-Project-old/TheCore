<title># Strings</title>

<code-block lang="php">
<![CDATA[interface Strings]]>
</code-block>













### ### Strings contract

<p><format style="italic">A string is a stream of character.</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\HighLevel\Strings
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L25">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php">
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
|public|<a href="#islower()">isLower</a>|### Checks if string is lowercase|
|public|<a href="#isupper()">isUpper</a>|### Checks if string is uppercase|
|public|<a href="#isalphabetic()">isAlphabetic</a>|### Checks if string is alphabetic|
|public|<a href="#isalphanumeric()">isAlphanumeric</a>|### Checks if string is alphanumeric|
|public|<a href="#isblank()">isBlank</a>|### Checks if string is whitespace|
|public|<a href="#isnumeric()">isNumeric</a>|### Checks if string is numeric|
|public|<a href="#ishexadecimal()">isHexadecimal</a>|### Checks if string is hexadecimal|
|public|<a href="#iscontrol()">isControl</a>|### Checks if string is control code|
|public|<a href="#isprintable()">isPrintable</a>|### Checks if string is printable|
|public|<a href="#isgraphical()">isGraphical</a>|### Checks if string is graphical|
|public|<a href="#ispunctuation()">isPunctuation</a>|### Checks if string is punctuation|
|public|<a href="#isascii()">isASCII</a>|### Checks if string is ASCII|
|public|<a href="#haslower()">hasLower</a>|### Checks if string has lowercase|
|public|<a href="#hasupper()">hasUpper</a>|### Checks if string has uppercase|
|public|<a href="#hasalphabetic()">hasAlphabetic</a>|### Checks if string has alphabetic|
|public|<a href="#hasalphanumeric()">hasAlphanumeric</a>|### Checks if string has alphanumeric|
|public|<a href="#hasblank()">hasBlank</a>|### Checks if string has whitespace|
|public|<a href="#hasnumeric()">hasNumeric</a>|### Checks if string has numeric|
|public|<a href="#hashexadecimal()">hasHexadecimal</a>|### Checks if string has hexadecimal|
|public|<a href="#hascontrol()">hasControl</a>|### Checks if string has control code|
|public|<a href="#hasprintable()">hasPrintable</a>|### Checks if string has printable|
|public|<a href="#hasgraphical()">hasGraphical</a>|### Checks if string has graphical|
|public|<a href="#haspunctuation()">hasPunctuation</a>|### Checks if string has punctuation|
|public|<a href="#string()">string</a>|### Get string as raw string|
|public|<a href="#carry()">carry</a>|### Carry with part of the string|
|inherited public|<a href="#__tostring()">__toString</a>|### Gets a string representation of the object|

## method: isLower {id="islower()"}

<code-block lang="php">
    <![CDATA[public Strings::isLower():bool]]>
</code-block>













### ### Checks if string is lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L33">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is lowercase, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isUpper {id="isupper()"}

<code-block lang="php">
    <![CDATA[public Strings::isUpper():bool]]>
</code-block>













### ### Checks if string is uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L41">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is uppercase, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isAlphabetic {id="isalphabetic()"}

<code-block lang="php">
    <![CDATA[public Strings::isAlphabetic():bool]]>
</code-block>













### ### Checks if string is alphabetic



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L49">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L49">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is alphabetic, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isAlphanumeric {id="isalphanumeric()"}

<code-block lang="php">
    <![CDATA[public Strings::isAlphanumeric():bool]]>
</code-block>













### ### Checks if string is alphanumeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L57">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is alphanumeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isBlank {id="isblank()"}

<code-block lang="php">
    <![CDATA[public Strings::isBlank():bool]]>
</code-block>













### ### Checks if string is whitespace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L65">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is whitespace, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isNumeric {id="isnumeric()"}

<code-block lang="php">
    <![CDATA[public Strings::isNumeric():bool]]>
</code-block>













### ### Checks if string is numeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L73">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L73">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is numeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isHexadecimal {id="ishexadecimal()"}

<code-block lang="php">
    <![CDATA[public Strings::isHexadecimal():bool]]>
</code-block>













### ### Checks if string is hexadecimal



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L81">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is hexadecimal, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isControl {id="iscontrol()"}

<code-block lang="php">
    <![CDATA[public Strings::isControl():bool]]>
</code-block>













### ### Checks if string is control code



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L89">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L89">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is control code, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isPrintable {id="isprintable()"}

<code-block lang="php">
    <![CDATA[public Strings::isPrintable():bool]]>
</code-block>













### ### Checks if string is printable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L97">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L97">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is printable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isGraphical {id="isgraphical()"}

<code-block lang="php">
    <![CDATA[public Strings::isGraphical():bool]]>
</code-block>













### ### Checks if string is graphical



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L105">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L105">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is graphical, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isPunctuation {id="ispunctuation()"}

<code-block lang="php">
    <![CDATA[public Strings::isPunctuation():bool]]>
</code-block>













### ### Checks if string is punctuation



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L113">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L113">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is punctuation, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isASCII {id="isascii()"}

<code-block lang="php">
    <![CDATA[public Strings::isASCII():bool]]>
</code-block>













### ### Checks if string is ASCII



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L121">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L121">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is ASCII, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasLower {id="haslower()"}

<code-block lang="php">
    <![CDATA[public Strings::hasLower():bool]]>
</code-block>













### ### Checks if string has lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L129">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has lowercase, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasUpper {id="hasupper()"}

<code-block lang="php">
    <![CDATA[public Strings::hasUpper():bool]]>
</code-block>













### ### Checks if string has uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L137">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L137">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has uppercase, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasAlphabetic {id="hasalphabetic()"}

<code-block lang="php">
    <![CDATA[public Strings::hasAlphabetic():bool]]>
</code-block>













### ### Checks if string has alphabetic



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L145">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L145">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has alphabetic, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasAlphanumeric {id="hasalphanumeric()"}

<code-block lang="php">
    <![CDATA[public Strings::hasAlphanumeric():bool]]>
</code-block>













### ### Checks if string has alphanumeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L153">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L153">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has alphanumeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasBlank {id="hasblank()"}

<code-block lang="php">
    <![CDATA[public Strings::hasBlank():bool]]>
</code-block>













### ### Checks if string has whitespace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L161">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L161">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has whitespace, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasNumeric {id="hasnumeric()"}

<code-block lang="php">
    <![CDATA[public Strings::hasNumeric():bool]]>
</code-block>













### ### Checks if string has numeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L169">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L169">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string has numeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasHexadecimal {id="hashexadecimal()"}

<code-block lang="php">
    <![CDATA[public Strings::hasHexadecimal():bool]]>
</code-block>













### ### Checks if string has hexadecimal



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L177">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L177">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has hexadecimal, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasControl {id="hascontrol()"}

<code-block lang="php">
    <![CDATA[public Strings::hasControl():bool]]>
</code-block>













### ### Checks if string has control code



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L185">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L185">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has control code, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasPrintable {id="hasprintable()"}

<code-block lang="php">
    <![CDATA[public Strings::hasPrintable():bool]]>
</code-block>













### ### Checks if string has printable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L193">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L193">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has printable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasGraphical {id="hasgraphical()"}

<code-block lang="php">
    <![CDATA[public Strings::hasGraphical():bool]]>
</code-block>













### ### Checks if string has graphical



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L201">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L201">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has graphical, false otherwise.</format></li></list>
    </def>
</deflist>
## method: hasPunctuation {id="haspunctuation()"}

<code-block lang="php">
    <![CDATA[public Strings::hasPunctuation():bool]]>
</code-block>













### ### Checks if string has punctuation



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L209">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L209">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string has punctuation, false otherwise.</format></li></list>
    </def>
</deflist>
## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Strings::string():string]]>
</code-block>













### ### Get string as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L217">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L217">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String as raw string.</format></li></list>
    </def>
</deflist>
## method: carry {id="carry()"}

<code-block lang="php">
    <![CDATA[public Strings::carry(int $from, null|int $length = null):$this]]>
</code-block>













### ### Carry with part of the string

<p><format style="italic">Carry with part of the string specified by the $from and $length parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L238">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L238">
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
        <list><li>int <format style="bold">$from</format> - <format style="italic">
If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
and so forth.
If the start is negative, the returned string will start at the start character from the end of the string.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
Maximum number of characters to use from string.
If omitted or NULL is passed, extract all characters to the end of the string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Stringable::__toString():string]]>
</code-block>













### ### Gets a string representation of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.Stringable.php#L36">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.Stringable.php#L36">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The string representation of the object.</format></li></list>
    </def>
</deflist>