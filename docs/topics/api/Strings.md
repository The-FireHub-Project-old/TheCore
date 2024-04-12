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
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L27">
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


### Used by
<deflist>
    <def title="This interface is used by:">
        <list><li><a href="FunctionFamily.md#__construct()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Replace.md#__construct()">\FireHub\Core\Support\Strings\Expression\Replace::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Expression.md#__construct()">\FireHub\Core\Support\Strings\Expression::__construct()</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#expression()">expression</a>|### Regular expression|
|public|<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public|<a href="#startswithany()">startsWithAny</a>|### Checks if a string starts with any of the given values|
|public|<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|public|<a href="#endswithany()">endsWithAny</a>|### Checks if a string ends with any of the given values|
|public|<a href="#contains()">contains</a>|### Checks if string contains value|
|public|<a href="#containsall()">containsAll</a>|### Checks if string contains all values|
|public|<a href="#containsany()">containsAny</a>|### Checks if string contains any of the values|
|public|<a href="#equals()">equals</a>|### Checks if string equals value|
|public|<a href="#equalsany()">equalsAny</a>|### Checks if string equals to any of the values|
|public|<a href="#encoding()">encoding</a>|### Get or change string encoding|
|public|<a href="#string()">string</a>|### Get or set string as raw string|
|public|<a href="#tolower()">toLower</a>|### Make a string lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|public|<a href="#totitle()">toTitle</a>|### Make a string title-case|
|public|<a href="#capitalize()">capitalize</a>|### Make a first character of string uppercased|
|public|<a href="#decapitalize()">deCapitalize</a>|### Make a first character of string uppercased|
|public|<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|public|<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public|<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|public|<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|public|<a href="#slice()">slice</a>|### Slice with part of the string|
|public|<a href="#carry()">carry</a>|### Carry with part of the string|
|public|<a href="#carryfrom()">carryFrom</a>|### Carry from part of the string|
|public|<a href="#carryafter()">carryAfter</a>|### Carry from part of the string|
|public|<a href="#carryuntil()">carryUntil</a>|### Carry until part of the string|
|public|<a href="#carryfromlast()">carryFromLast</a>|### Carry from the last part of a string|
|public|<a href="#carryafterlast()">carryAfterLast</a>|### Carry from the last part of the string|
|public|<a href="#carryuntillast()">carryUntilLast</a>|### Carry until the last part of a string|
|public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical string value|
|public|<a href="#length()">length</a>|### Get string length|
|public|<a href="#indexof()">indexOf</a>|### Find the position of the first occurrence of a substring|
|public|<a href="#lastindexof()">lastIndexOf</a>|### Find the position of the last occurrence of a substring|
|inherited public|<a href="#__tostring()">__toString</a>|### Gets a string representation of the object|

## method: expression {id="expression()"}

<code-block lang="php">
    <![CDATA[public Strings::expression():\FireHub\Core\Support\Strings\Expression]]>
</code-block>













### ### Regular expression



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L35">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L35">
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
        <list><li><a href="Expression.md">\FireHub\Core\Support\Strings\Expression</a> - <format style="italic">Regular expression.</format></li></list>
    </def>
</deflist>
## method: startsWith {id="startswith()"}

<code-block lang="php">
    <![CDATA[public Strings::startsWith(string $value):bool]]>
</code-block>













### ### Checks if a string starts with a given value

<p><format style="italic">Performs a check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L51">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L51">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string></code>
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string starts with value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: startsWithAny {id="startswithany()"}

<code-block lang="php">
    <![CDATA[public Strings::startsWithAny(string ...$values):bool]]>
</code-block>













### ### Checks if a string starts with any of the given values

<p><format style="italic">Performs a check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L67">
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
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
<code>non-empty-string></code>
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string starts with any of the given values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: endsWith {id="endswith()"}

<code-block lang="php">
    <![CDATA[public Strings::endsWith(string $value):bool]]>
</code-block>













### ### Checks if a string ends with a given value

<p><format style="italic">Performs a check indicating if $string ends with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L83">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L83">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string></code>
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string ends with value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: endsWithAny {id="endswithany()"}

<code-block lang="php">
    <![CDATA[public Strings::endsWithAny(string ...$values):bool]]>
</code-block>













### ### Checks if a string ends with any of the given values

<p><format style="italic">Performs a check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L99">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L99">
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
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
<code>non-empty-string></code>
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string ends with any of the given values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public Strings::contains(string $value):bool]]>
</code-block>













### ### Checks if string contains value

<p><format style="italic">Performs a check indicating if $string is contained in $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L115">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L115">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string</code>
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string contains value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: containsAll {id="containsall()"}

<code-block lang="php">
    <![CDATA[public Strings::containsAll(string ...$values):bool]]>
</code-block>













### ### Checks if string contains all values



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
    <def title="This method has parameters:">
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
<code>non-empty-string[]</code>
The list of values to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string contains all values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: containsAny {id="containsany()"}

<code-block lang="php">
    <![CDATA[public Strings::containsAny(string ...$values):bool]]>
</code-block>













### ### Checks if string contains any of the values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L143">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L143">
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
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
<code>non-empty-string[]</code>
The list of values to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string contains any of the values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: equals {id="equals()"}

<code-block lang="php">
    <![CDATA[public Strings::equals(string $value):bool]]>
</code-block>













### ### Checks if string equals value

<p><format style="italic">Performs a case-sensitive check indicating if $string is contained in $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L159">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L159">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string</code>
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string equals value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: equalsAny {id="equalsany()"}

<code-block lang="php">
    <![CDATA[public Strings::equalsAny(string ...$values):bool]]>
</code-block>













### ### Checks if string equals to any of the values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L173">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L173">
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
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
<code>non-empty-string[]</code>
The list of values to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string equals to any of the values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Strings::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):$this|\FireHub\Core\Support\Enums\String\Encoding]]>
</code-block>













### ### Get or change string encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L188">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L188">
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
String encoding.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> - <format style="italic">This character or current encoding.</format></li></list>
    </def>
</deflist>
## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Strings::string(null|string $string = null):$this|string]]>
</code-block>













### ### Get or set string as raw string



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
    <def title="This method is used by:">
        <list><li><a href="Check.md#custom()">\FireHub\Core\Support\Strings\Expression\Check::custom()</a>  - <format style="italic">To get string raw string.</format></li><li><a href="Get.md#custom()">\FireHub\Core\Support\Strings\Expression\Get::custom()</a>  - <format style="italic">To get string raw string.</format></li><li><a href="Replace.md#custom()">\FireHub\Core\Support\Strings\Expression\Replace::custom()</a>  - <format style="italic">To get string raw string.</format></li><li><a href="Split.md#custom()">\FireHub\Core\Support\Strings\Expression\Split::custom()</a>  - <format style="italic">To get string raw string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or string <format style="bold">$string</format> = null - <format style="italic">[optional] 
String to set.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this or string - <format style="italic">String as raw string.</format></li></list>
    </def>
</deflist>
## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public Strings::toLower():$this]]>
</code-block>













### ### Make a string lowercase



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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: toUpper {id="toupper()"}

<code-block lang="php">
    <![CDATA[public Strings::toUpper():$this]]>
</code-block>













### ### Make a string uppercase



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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: toTitle {id="totitle()"}

<code-block lang="php">
    <![CDATA[public Strings::toTitle():$this]]>
</code-block>













### ### Make a string title-case



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L225">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L225">
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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: capitalize {id="capitalize()"}

<code-block lang="php">
    <![CDATA[public Strings::capitalize():$this]]>
</code-block>













### ### Make a first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L233">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L233">
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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: deCapitalize {id="decapitalize()"}

<code-block lang="php">
    <![CDATA[public Strings::deCapitalize():$this]]>
</code-block>













### ### Make a first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L241">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L241">
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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: addSlashes {id="addslashes()"}

<code-block lang="php">
    <![CDATA[public Strings::addSlashes():$this]]>
</code-block>













### ### Quote string with slashes

<p><format style="italic">Backslashes are added before characters that need to be escaped:
(single quote, double quote, backslash, NUL).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L252">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L252">
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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: stripSlashes {id="stripslashes()"}

<code-block lang="php">
    <![CDATA[public Strings::stripSlashes():$this]]>
</code-block>













### ### Un-quotes a quoted string

<p><format style="italic">Backslashes are removed: (backslashes become single quote, double backslashes are made into a single backslash).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L262">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L262">
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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: stripTags {id="striptags()"}

<code-block lang="php">
    <![CDATA[public Strings::stripTags(null|string|array $allowed_tags = null):$this]]>
</code-block>













### ### Strip HTML and PHP tags from a string

<p><format style="italic">This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string.
It uses the same tag stripping state machine as the fgetss() function.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L282">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L282">
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
        <list><li>null or string or array <format style="bold">$allowed_tags</format> = null - <format style="italic">
<code><![CDATA[ null|string|array<int, string> ]]></code>
You can use the optional second parameter to specify tags which should not be stripped.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: quoteMeta {id="quotemeta()"}

<code-block lang="php">
    <![CDATA[public Strings::quoteMeta():$this]]>
</code-block>













### ### Quote meta characters

<p><format style="italic">Returns a version of str with a backslash character (\) before every character that is among these: .\+*?[^]($).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L292">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L292">
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
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: slice {id="slice()"}

<code-block lang="php">
    <![CDATA[public Strings::slice(int $from, null|int $until = null):$this]]>
</code-block>













### ### Slice with part of the string

<p><format style="italic">Slice with part of the string specified by the $from and $until parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L313">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L313">
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
Returned string will start at the start position in string, counting from zero.
</format></li><li>null or int <format style="bold">$until</format> = null - <format style="italic">[optional] 
Returned string will end at the start position in string.
If omitted or NULL is passed, extract all characters to the end of the string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: carry {id="carry()"}

<code-block lang="php">
    <![CDATA[public Strings::carry(int $from, null|int $length = null):$this]]>
</code-block>













### ### Carry with part of the string

<p><format style="italic">Carry with part of the string specified by the $from and $length parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L336">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L336">
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
## method: carryFrom {id="carryfrom()"}

<code-block lang="php">
    <![CDATA[public Strings::carryFrom(string $find):$this]]>
</code-block>













### ### Carry from part of the string

<p><format style="italic">Returns part of $string starting from and including the first occurrence of $find to the end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L350">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L350">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: carryAfter {id="carryafter()"}

<code-block lang="php">
    <![CDATA[public Strings::carryAfter(string $find):$this]]>
</code-block>













### ### Carry from part of the string

<p><format style="italic">Returns part of $string starting from the first occurrence of $find to the end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L364">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L364">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: carryUntil {id="carryuntil()"}

<code-block lang="php">
    <![CDATA[public Strings::carryUntil(string $find):$this]]>
</code-block>













### ### Carry until part of the string

<p><format style="italic">Returns part of $string starting from the beginning until the first occurrence of $find.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L378">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L378">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: carryFromLast {id="carryfromlast()"}

<code-block lang="php">
    <![CDATA[public Strings::carryFromLast(string $find):$this]]>
</code-block>













### ### Carry from the last part of a string

<p><format style="italic">This function returns the portion of $string which starts at the last occurrence of and including $find
and goes until the end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L393">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L393">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: carryAfterLast {id="carryafterlast()"}

<code-block lang="php">
    <![CDATA[public Strings::carryAfterLast(string $find):$this]]>
</code-block>













### ### Carry from the last part of the string

<p><format style="italic">Returns last part of $string starting from the first occurrence of $find to the end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L407">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L407">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: carryUntilLast {id="carryuntillast()"}

<code-block lang="php">
    <![CDATA[public Strings::carryUntilLast(string $find):$this]]>
</code-block>













### ### Carry until the last part of a string

<p><format style="italic">Returns part of $string starting from the beginning until and goes until the last occurrence of $find.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L421">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L421">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: asBoolean {id="asboolean()"}

<code-block lang="php">
    <![CDATA[public Strings::asBoolean():bool]]>
</code-block>













### ### Boolean representation of the given logical string value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L429">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L429">
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
        <list><li>bool - <format style="italic">True or false, based on boolean representation of the given logical string value.</format></li></list>
    </def>
</deflist>
## method: length {id="length()"}

<code-block lang="php">
    <![CDATA[public Strings::length():int]]>
</code-block>













### ### Get string length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L438">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L438">
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
        <list><li>int - <format style="italic">Length of the string.</format></li></list>
    </def>
</deflist>
## method: indexOf {id="indexof()"}

<code-block lang="php">
    <![CDATA[public Strings::indexOf(string $find):int|false]]>
</code-block>













### ### Find the position of the first occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L451">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L451">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int or false - <format style="italic">Position of the first occurrence of a substring.</format></li></list>
    </def>
</deflist>
## method: lastIndexOf {id="lastindexof()"}

<code-block lang="php">
    <![CDATA[public Strings::lastIndexOf(string $find):int|false]]>
</code-block>













### ### Find the position of the last occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L464">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L464">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int or false - <format style="italic">Position of the last occurrence of a substring.</format></li></list>
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