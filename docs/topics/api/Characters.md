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
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L29">
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


### Used by
<deflist>
    <def title="This interface is used by:">
        <list><li><a href="Strings.md#first()">\FireHub\Core\Support\Contracts\HighLevel\Strings::first()</a>  - <format style="italic">As return.</format></li><li><a href="Strings.md#last()">\FireHub\Core\Support\Contracts\HighLevel\Strings::last()</a>  - <format style="italic">As return.</format></li><li><a href="FunctionFamily.md#__construct()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Replace.md#__construct()">\FireHub\Core\Support\Strings\Expression\Replace::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="ReplaceFunc.md#__construct()">\FireHub\Core\Support\Strings\Expression\ReplaceFunc::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Split.md#__construct()">\FireHub\Core\Support\Strings\Expression\Split::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Chars.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\Chars::regex()</a>  - <format style="italic">To test if $characters is list of character interface.</format></li><li><a href="InRange.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\InRange::regex()</a>  - <format style="italic">To test if $characters is of character interface.</format></li><li><a href="NotChars.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotChars::regex()</a>  - <format style="italic">To test if $characters is list of character interface.</format></li><li><a href="NotInRange.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotInRange::regex()</a>  - <format style="italic">To test if $characters is of character interface.</format></li><li><a href="Expression.md#__construct()">\FireHub\Core\Support\Strings\Expression::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Str.md#first()">\FireHub\Core\Support\Strings\Str::first()</a>  - <format style="italic">As return.</format></li><li><a href="Str.md#last()">\FireHub\Core\Support\Strings\Str::last()</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#expression()">expression</a>|### Regular expression|
|public|<a href="#encoding()">encoding</a>|### Get or change character encoding|
|public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical character value|
|public|<a href="#string()">string</a>|### Get character as raw string|
|public|<a href="#tolower()">toLower</a>|### Make a character lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a character uppercase|
|public|<a href="#codepoint()">codepoint</a>|### Get character as codepoint|
|inherited public|<a href="#__tostring()">__toString</a>|### Gets a string representation of the object|

## method: expression {id="expression()"}

<code-block lang="php">
    <![CDATA[public Characters::expression(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):\FireHub\Core\Support\Strings\Expression]]>
</code-block>













### ### Regular expression



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
    <def title="This method is used by:">
        <list><li><a href="FunctionFamily.md#withdelimiter()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::withDelimiter()</a>  - <format style="italic">To do regular expression on $character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic <a href="Modifier.md">\FireHub\Core\Support\Enums\String\Expression\Modifier</a> <format style="bold">$modifiers</format> - <format style="italic">
List of additional expression pattern modifiers.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Expression.md">\FireHub\Core\Support\Strings\Expression</a> - <format style="italic">Regular expression.</format></li></list>
    </def>
</deflist>
## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Characters::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):mixed]]>
</code-block>













### ### Get or change character encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L55">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L55">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">
Character encoding.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">This character or current encoding.</format></li></list>
    </def>
</deflist>
## method: asBoolean {id="asboolean()"}

<code-block lang="php">
    <![CDATA[public Characters::asBoolean():bool]]>
</code-block>













### ### Boolean representation of the given logical character value

<p><format style="italic">True - positive-int
False - non-positive-int
For all other characters, the return value is a result of a boolean cast.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L67">
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
        <list><li>bool - <format style="italic">True or false, based on boolean representation of the given logical character value.</format></li></list>
    </def>
</deflist>
## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Characters::string(string $string = null):mixed]]>
</code-block>













### ### Get character as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L75">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L75">
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
        <list><li><a href="Check.md#custom()">\FireHub\Core\Support\Strings\Expression\Check::custom()</a>  - <format style="italic">To get character raw string.</format></li><li><a href="FunctionFamily.md#withdelimiter()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::withDelimiter()</a>  - <format style="italic">To get raw value from character.</format></li><li><a href="Get.md#custom()">\FireHub\Core\Support\Strings\Expression\Get::custom()</a>  - <format style="italic">To get character raw string.</format></li><li><a href="Replace.md#custom()">\FireHub\Core\Support\Strings\Expression\Replace::custom()</a>  - <format style="italic">To get character raw string.</format></li><li><a href="ReplaceFunc.md#custom()">\FireHub\Core\Support\Strings\Expression\ReplaceFunc::custom()</a>  - <format style="italic">To get character raw string.</format></li><li><a href="Split.md#custom()">\FireHub\Core\Support\Strings\Expression\Split::custom()</a>  - <format style="italic">To get character raw string.</format></li><li><a href="Chars.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\Chars::regex()</a>  - <format style="italic">To get a raw string from character.</format></li><li><a href="InRange.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\InRange::regex()</a>  - <format style="italic">To get a raw string from character.</format></li><li><a href="NotChars.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotChars::regex()</a>  - <format style="italic">To get a raw string from character.</format></li><li><a href="NotInRange.md#regex()">\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotInRange::regex()</a>  - <format style="italic">To get a raw string from character.</format></li><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To add character to pad.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> = null</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Character as string.</format></li></list>
    </def>
</deflist>
## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public Characters::toLower():$this]]>
</code-block>













### ### Make a character lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L83">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L83">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L91">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L91">
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
## method: codepoint {id="codepoint()"}

<code-block lang="php">
    <![CDATA[public Characters::codepoint():int]]>
</code-block>













### ### Get character as codepoint



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L99">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Characters.php#L99">
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