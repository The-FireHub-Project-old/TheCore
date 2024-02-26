<title># Characters</title>

<code-block lang="php">
<![CDATA[interface Characters]]>
</code-block>













### ### Characters contract

<p><format style="italic">Interface allows you to represent character.</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\HighLevel\Characters
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L25">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php">
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
|public|<a href="#islower()">isLower</a>|### Checks if character is lowercase|
|public|<a href="#isupper()">isUpper</a>|### Checks if character is uppercase|
|public|<a href="#isalphabetic()">isAlphabetic</a>|### Checks if character is alphabetic|
|public|<a href="#isalphanumeric()">isAlphanumeric</a>|### Checks if character is alphanumeric|
|public|<a href="#isblank()">isBlank</a>|### Checks if character is whitespace|
|public|<a href="#isnumeric()">isNumeric</a>|### Checks if character is numeric|
|public|<a href="#ishexadecimal()">isHexadecimal</a>|### Checks if character is hexadecimal|
|public|<a href="#iscontrol()">isControl</a>|### Checks if character is control code|
|public|<a href="#isprintable()">isPrintable</a>|### Checks if character is printable|
|public|<a href="#isgraphical()">isGraphical</a>|### Checks if character is graphical|
|public|<a href="#ispunctuation()">isPunctuation</a>|### Checks if character is punctuation|
|public|<a href="#issymbol()">isSymbol</a>|### Checks if character is a symbol|
|public|<a href="#isascii()">isASCII</a>|### Checks if character is ASCII|
|public|<a href="#tolower()">toLower</a>|### Make a character lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a character uppercase|
|public|<a href="#string()">string</a>|### Get character as raw string|
|public|<a href="#codepoint()">codepoint</a>|### Get character as codepoint|
|inherited public|<a href="#__tostring()">__toString</a>|### Gets a string representation of the object|

## method: isLower {id="islower()"}

<code-block lang="php">
    <![CDATA[public Characters::isLower():bool]]>
</code-block>













### ### Checks if character is lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L33">
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
        <list><li>bool - <format style="italic">True if character is lowercase, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isUpper {id="isupper()"}

<code-block lang="php">
    <![CDATA[public Characters::isUpper():bool]]>
</code-block>













### ### Checks if character is uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L41">
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
        <list><li>bool - <format style="italic">True if character is uppercase, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isAlphabetic {id="isalphabetic()"}

<code-block lang="php">
    <![CDATA[public Characters::isAlphabetic():bool]]>
</code-block>













### ### Checks if character is alphabetic



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L49">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L49">
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
        <list><li>bool - <format style="italic">True if character is alphabetic, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isAlphanumeric {id="isalphanumeric()"}

<code-block lang="php">
    <![CDATA[public Characters::isAlphanumeric():bool]]>
</code-block>













### ### Checks if character is alphanumeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L57">
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
        <list><li>bool - <format style="italic">True if character is alphanumeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isBlank {id="isblank()"}

<code-block lang="php">
    <![CDATA[public Characters::isBlank():bool]]>
</code-block>













### ### Checks if character is whitespace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L65">
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
        <list><li>bool - <format style="italic">True if character is whitespace, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isNumeric {id="isnumeric()"}

<code-block lang="php">
    <![CDATA[public Characters::isNumeric():bool]]>
</code-block>













### ### Checks if character is numeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L73">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L73">
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
        <list><li>bool - <format style="italic">True if character is numeric, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isHexadecimal {id="ishexadecimal()"}

<code-block lang="php">
    <![CDATA[public Characters::isHexadecimal():bool]]>
</code-block>













### ### Checks if character is hexadecimal



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L81">
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
        <list><li>bool - <format style="italic">True if character is hexadecimal, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isControl {id="iscontrol()"}

<code-block lang="php">
    <![CDATA[public Characters::isControl():bool]]>
</code-block>













### ### Checks if character is control code



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L89">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L89">
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
        <list><li>bool - <format style="italic">True if character is control code, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isPrintable {id="isprintable()"}

<code-block lang="php">
    <![CDATA[public Characters::isPrintable():bool]]>
</code-block>













### ### Checks if character is printable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L97">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L97">
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
        <list><li>bool - <format style="italic">True if character is printable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isGraphical {id="isgraphical()"}

<code-block lang="php">
    <![CDATA[public Characters::isGraphical():bool]]>
</code-block>













### ### Checks if character is graphical



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L105">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L105">
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
        <list><li>bool - <format style="italic">True if character is graphical, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isPunctuation {id="ispunctuation()"}

<code-block lang="php">
    <![CDATA[public Characters::isPunctuation():bool]]>
</code-block>













### ### Checks if character is punctuation



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L113">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L113">
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
        <list><li>bool - <format style="italic">True if character is punctuation, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isSymbol {id="issymbol()"}

<code-block lang="php">
    <![CDATA[public Characters::isSymbol():bool]]>
</code-block>













### ### Checks if character is a symbol



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L121">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L121">
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
        <list><li>bool - <format style="italic">True if character is a symbol, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isASCII {id="isascii()"}

<code-block lang="php">
    <![CDATA[public Characters::isASCII():bool]]>
</code-block>













### ### Checks if character is ASCII



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L129">
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
        <list><li>bool - <format style="italic">True if character is ASCII, false otherwise.</format></li></list>
    </def>
</deflist>
## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public Characters::toLower():$this]]>
</code-block>













### ### Make a character lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L137">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L137">
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
        <list><li>$this - <format style="italic">This character.</format></li></list>
    </def>
</deflist>
## method: toUpper {id="toupper()"}

<code-block lang="php">
    <![CDATA[public Characters::toUpper():$this]]>
</code-block>













### ### Make a character uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L145">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L145">
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
        <list><li>$this - <format style="italic">This character.</format></li></list>
    </def>
</deflist>
## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Characters::string():string]]>
</code-block>













### ### Get character as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L154">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L154">
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
        <list><li>string - <format style="italic"><code>non-empty-string</code> Character as string.</format></li><li>non-empty-string</li></list>
    </def>
</deflist>
## method: codepoint {id="codepoint()"}

<code-block lang="php">
    <![CDATA[public Characters::codepoint():int]]>
</code-block>













### ### Get character as codepoint



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L162">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L162">
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
        <list><li>int - <format style="italic">Character as codepoint.</format></li></list>
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