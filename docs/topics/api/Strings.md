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
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L34">
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
        <list><li><a href="FunctionFamily.md#__construct()">\FireHub\Core\Support\Strings\Expression\FunctionFamily::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Replace.md#__construct()">\FireHub\Core\Support\Strings\Expression\Replace::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="ReplaceFunc.md#__construct()">\FireHub\Core\Support\Strings\Expression\ReplaceFunc::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Split.md#__construct()">\FireHub\Core\Support\Strings\Expression\Split::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="Expression.md#__construct()">\FireHub\Core\Support\Strings\Expression::__construct()</a>  - <format style="italic">As parameter.</format></li><li><a href="InsertValue.md#__construct()">\FireHub\Core\Support\Strings\InsertValue::__construct()</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#expression()">expression</a>|### Regular expression|
|public|<a href="#insertvalue()">insertValue</a>|### value on string|
|public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical string value|
|public|<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public|<a href="#startswithany()">startsWithAny</a>|### Checks if a string starts with any of the given values|
|public|<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|public|<a href="#endswithany()">endsWithAny</a>|### Checks if a string ends with any of the given values|
|public|<a href="#contains()">contains</a>|### Checks if string contains a value|
|public|<a href="#containsall()">containsAll</a>|### Checks if string contains all values|
|public|<a href="#containsany()">containsAny</a>|### Checks if string contains any of the values|
|public|<a href="#equals()">equals</a>|### Checks if string equals value|
|public|<a href="#equalsany()">equalsAny</a>|### Checks if string equals to any of the values|
|public|<a href="#match()">match</a>|### Checks if a string matches a given pattern|
|public|<a href="#encoding()">encoding</a>|### Get or change string encoding|
|public|<a href="#string()">string</a>|### Get or set string as raw string|
|public|<a href="#tolower()">toLower</a>|### Make a string lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|public|<a href="#totitle()">toTitle</a>|### Make a string title-case|
|public|<a href="#capitalize()">capitalize</a>|### Make the first character of string uppercased|
|public|<a href="#decapitalize()">deCapitalize</a>|### Make the first character of string uppercased|
|public|<a href="#swapcase()">swapCase</a>|### Swap lower and upper cases on string|
|public|<a href="#streamline()">streamline</a>|### Streamline string|
|public|<a href="#titleize()">titleize</a>|### Capitalize every word in string|
|public|<a href="#spaceless()">spaceless</a>|### Remove spaces|
|public|<a href="#kebabcase()">kebabCase</a>|### Format sting to kebab-case|
|public|<a href="#snakecase()">snakeCase</a>|### Format sting to snake-case|
|public|<a href="#headline()">headline</a>|### Format strings to headline|
|public|<a href="#delimit()">delimit</a>|### Lowercased and trimmed string separated by the given delimiter|
|public|<a href="#dasherize()">dasherize</a>|### Lowercased and trimmed string separated by dash|
|public|<a href="#pascalize()">pascalize</a>|### Makes a PascalCase version of the string|
|public|<a href="#humanize()">humanize</a>|### Humanize string|
|public|<a href="#tidy()">tidy</a>|### Tidy string|
|public|<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|public|<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public|<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|public|<a href="#quotemeta()">quoteMeta</a>|### Quote meta-characters|
|public|<a href="#between()">between</a>|### Slice string after first start and until last end|
|public|<a href="#betweenfirst()">betweenFirst</a>|### Slice string after first start and until first end|
|public|<a href="#betweenlast()">betweenLast</a>|### Slice string after last start and until last end|
|public|<a href="#slice()">slice</a>|### Slice with part of the string|
|public|<a href="#carry()">carry</a>|### Carry with part of the string|
|public|<a href="#carryfrom()">carryFrom</a>|### Carry from part of the string|
|public|<a href="#carryafter()">carryAfter</a>|### Carry from part of the string|
|public|<a href="#carryuntil()">carryUntil</a>|### Carry until part of the string|
|public|<a href="#carryfromlast()">carryFromLast</a>|### Carry from the last part of a string|
|public|<a href="#carryafterlast()">carryAfterLast</a>|### Carry from the last part of the string|
|public|<a href="#carryuntillast()">carryUntilLast</a>|### Carry until the last part of a string|
|public|<a href="#insert()">insert</a>|### Inserts string at the position provided|
|public|<a href="#move()">move</a>|### Move part of the string|
|public|<a href="#overwrite()">overwrite</a>|### Overwrite with part of the string|
|public|<a href="#replace()">replace</a>|### Replace all occurrences of the search string with the replacement string|
|public|<a href="#replacerecursive()">replaceRecursive</a>|### Replace all occurrences recursively of search in a subject replaced with the given replacement value|
|public|<a href="#repeat()">repeat</a>|### Repeat a string|
|public|<a href="#reverse()">reverse</a>|### Reverse order of characters|
|public|<a href="#pad()">pad</a>|### Pad a string to a certain length with another string|
|public|<a href="#mask()">mask</a>|### Mask a portion of a string|
|public|<a href="#prepend()">prepend</a>|### Prepends the given string to the current string|
|public|<a href="#append()">append</a>|### Appends the given string to the current string|
|public|<a href="#ensureprefix()">ensurePrefix</a>|### Makes sure that the current string starts with the given text|
|public|<a href="#ensuresuffix()">ensureSuffix</a>|### Makes sure that the current string ends with the given text|
|public|<a href="#removeprefix()">removePrefix</a>|### Makes sure that the current string doesn't start with the given text|
|public|<a href="#removesuffix()">removeSuffix</a>|### Makes sure that the current string doesn't end with the given text|
|public|<a href="#surround()">surround</a>|Surrounds string with the given substring|
|public|<a href="#shuffle()">shuffle</a>|### Randomly shuffles a string|
|public|<a href="#quote()">quote</a>|### Wraps each word in the string with specified quote|
|public|<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|public|<a href="#truncate()">truncate</a>|### Truncates the string to a given length|
|public|<a href="#safetruncate()">safeTruncate</a>|### Truncates the string to a given length while ensuring that it doesn't split words|
|public|<a href="#first()">first</a>|### Get the first character of string|
|public|<a href="#last()">last</a>|### Get the last character of string|
|public|<a href="#tochars()">toChars</a>|### Break string into characters|
|public|<a href="#chop()">chop</a>|### Chop a string to an array|
|public|<a href="#break()">break</a>|### Break string with a separator|
|public|<a href="#breakwithany()">breakWithAny</a>|### Break string with any of separators|
|public|<a href="#split()">split</a>|### Split string with a separator|
|public|<a href="#splitbeforeany()">splitBeforeAny</a>|### Split string before any of separators|
|public|<a href="#splitafterany()">splitAfterAny</a>|### Split string after any of separators|
|public|<a href="#group()">group</a>|### Group a string into chunks|
|public|<a href="#containtimes()">containTimes</a>|### Checks how mny times string contains value|
|public|<a href="#length()">length</a>|### Get string length|
|public|<a href="#indexof()">indexOf</a>|### Find the position of the first occurrence of a substring|
|public|<a href="#lastindexof()">lastIndexOf</a>|### Find the position of the last occurrence of a substring|
|public|<a href="#charat()">charAt</a>|### Find the character at the provider position|
|inherited public|<a href="#__tostring()">__toString</a>|### Gets a string representation of the object|

## method: expression {id="expression()"}

<code-block lang="php">
    <![CDATA[public Strings::expression(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):\FireHub\Core\Support\Strings\Expression]]>
</code-block>













### ### Regular expression



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L46">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L46">
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
## method: insertValue {id="insertvalue()"}

<code-block lang="php">
    <![CDATA[public Strings::insertValue(non-empty-string $value):\FireHub\Core\Support\Strings\InsertValue]]>
</code-block>













### ### value on string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L58">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L58">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
String to insert.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="InsertValue.md">\FireHub\Core\Support\Strings\InsertValue</a> - <format style="italic">Inserts value.</format></li></list>
    </def>
</deflist>
## method: asBoolean {id="asboolean()"}

<code-block lang="php">
    <![CDATA[public Strings::asBoolean():bool]]>
</code-block>













### ### Boolean representation of the given logical string value

<p><format style="italic">True – 'true', '1', 'on', 'yes', positive-int
False – 'false', '0','off', 'no', only blanks, non-positive-int
For all other strings, the return value is a result of a boolean cast.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L70">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L70">
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
## method: startsWith {id="startswith()"}

<code-block lang="php">
    <![CDATA[public Strings::startsWith(non-empty-string $value):bool]]>
</code-block>













### ### Checks if a string starts with a given value

<p><format style="italic">Performs a check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L84">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L84">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the string starts with value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: startsWithAny {id="startswithany()"}

<code-block lang="php">
    <![CDATA[public Strings::startsWithAny(non-empty-string ...$values):bool]]>
</code-block>













### ### Checks if a string starts with any of the given values

<p><format style="italic">Performs a check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L98">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L98">
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
        <list><li>variadic non-empty-string <format style="bold">$values</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the string starts with any of the given values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: endsWith {id="endswith()"}

<code-block lang="php">
    <![CDATA[public Strings::endsWith(non-empty-string $value):bool]]>
</code-block>













### ### Checks if a string ends with a given value

<p><format style="italic">Performs a check indicating if $string ends with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L112">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L112">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the string ends with value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: endsWithAny {id="endswithany()"}

<code-block lang="php">
    <![CDATA[public Strings::endsWithAny(non-empty-string ...$values):bool]]>
</code-block>













### ### Checks if a string ends with any of the given values

<p><format style="italic">Performs a check indicating if $string begins with $value.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L126">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L126">
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
        <list><li>variadic non-empty-string <format style="bold">$values</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the string ends with any of the given values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public Strings::contains(non-empty-string $value):bool]]>
</code-block>













### ### Checks if string contains a value

<p><format style="italic">Performs a check indicating if $string is contained in $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L140">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L140">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string contains a value, false otherwise.</format></li></list>
    </def>
</deflist>
## method: containsAll {id="containsall()"}

<code-block lang="php">
    <![CDATA[public Strings::containsAll(non-empty-string ...$values):bool]]>
</code-block>













### ### Checks if string contains all values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L152">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L152">
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
        <list><li>variadic non-empty-string <format style="bold">$values</format> - <format style="italic">
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
    <![CDATA[public Strings::containsAny(non-empty-string ...$values):bool]]>
</code-block>













### ### Checks if string contains any of the values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L164">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L164">
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
        <list><li>variadic non-empty-string <format style="bold">$values</format> - <format style="italic">
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
    <![CDATA[public Strings::equals(non-empty-string $value):bool]]>
</code-block>













### ### Checks if string equals value

<p><format style="italic">Performs a case-sensitive check indicating if $string is contained in $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L178">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L178">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
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
    <![CDATA[public Strings::equalsAny(non-empty-string ...$values):bool]]>
</code-block>













### ### Checks if string equals to any of the values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L190">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L190">
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
        <list><li>variadic non-empty-string <format style="bold">$values</format> - <format style="italic">
The list of values to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string equals to any of the values, false otherwise.</format></li></list>
    </def>
</deflist>
## method: match {id="match()"}

<code-block lang="php">
    <![CDATA[public Strings::match(string $pattern):bool]]>
</code-block>













### ### Checks if a string matches a given pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L202">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L202">
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
The pattern to match against.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a string matches a pattern, false otherwise.</format></li></list>
    </def>
</deflist>
## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Strings::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):mixed]]>
</code-block>













### ### Get or change string encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L216">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L216">
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
        <list><li>mixed - <format style="italic">This character or current encoding.</format></li></list>
    </def>
</deflist>
## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Strings::string(null|string $string = null):mixed]]>
</code-block>













### ### Get or set string as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L228">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L228">
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
        <list><li><a href="Check.md#custom()">\FireHub\Core\Support\Strings\Expression\Check::custom()</a>  - <format style="italic">To get string raw string.</format></li><li><a href="Get.md#custom()">\FireHub\Core\Support\Strings\Expression\Get::custom()</a>  - <format style="italic">To get string raw string.</format></li><li><a href="Replace.md#custom()">\FireHub\Core\Support\Strings\Expression\Replace::custom()</a>  - <format style="italic">To get string raw string.</format></li><li><a href="ReplaceFunc.md#custom()">\FireHub\Core\Support\Strings\Expression\ReplaceFunc::custom()</a>  - <format style="italic">To get string raw string.</format></li><li><a href="Split.md#custom()">\FireHub\Core\Support\Strings\Expression\Split::custom()</a>  - <format style="italic">To get string raw string.</format></li></list>
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
        <list><li>mixed - <format style="italic">String as raw string.</format></li></list>
    </def>
</deflist>
## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public Strings::toLower():$this]]>
</code-block>













### ### Make a string lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L236">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L236">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L244">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L244">
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
## method: capitalize {id="capitalize()"}

<code-block lang="php">
    <![CDATA[public Strings::capitalize():$this]]>
</code-block>













### ### Make the first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L260">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L260">
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













### ### Make the first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L268">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L268">
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
## method: swapCase {id="swapcase()"}

<code-block lang="php">
    <![CDATA[public Strings::swapCase():$this]]>
</code-block>













### ### Swap lower and upper cases on string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L276">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L276">
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
## method: streamline {id="streamline()"}

<code-block lang="php">
    <![CDATA[public Strings::streamline():$this]]>
</code-block>













### ### Streamline string

<p><format style="italic">Strip whitespace (or other characters) from the beginning and end of a string and strip multiple spaces.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L286">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L286">
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
## method: titleize {id="titleize()"}

<code-block lang="php">
    <![CDATA[public Strings::titleize(non-empty-string[] $ignore = []):$this]]>
</code-block>













### ### Capitalize every word in string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L298">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L298">
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
        <list><li>non-empty-string[] <format style="bold">$ignore</format> = [] - <format style="italic">$ignore [optional] 
List of additional words not to be capitalized.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: spaceless {id="spaceless()"}

<code-block lang="php">
    <![CDATA[public Strings::spaceless():$this]]>
</code-block>













### ### Remove spaces



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L306">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L306">
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
## method: kebabCase {id="kebabcase()"}

<code-block lang="php">
    <![CDATA[public Strings::kebabCase():$this]]>
</code-block>













### ### Format sting to kebab-case



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L314">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L314">
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
## method: snakeCase {id="snakecase()"}

<code-block lang="php">
    <![CDATA[public Strings::snakeCase():$this]]>
</code-block>













### ### Format sting to snake-case



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L322">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L322">
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
## method: headline {id="headline()"}

<code-block lang="php">
    <![CDATA[public Strings::headline():$this]]>
</code-block>













### ### Format strings to headline

<p><format style="italic">Format strings delimited by casing, hyphens, or underscores into a space delimited string with each word's first letter capitalized.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L332">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L332">
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
## method: delimit {id="delimit()"}

<code-block lang="php">
    <![CDATA[public Strings::delimit(string $delimiter):$this]]>
</code-block>













### ### Lowercased and trimmed string separated by the given delimiter

<p><format style="italic">Delimiters are inserted before uppercase characters (except the first character of the string), and in place of spaces, dashes, and underscores.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L342">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L342">
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
        <list><li>string <format style="bold">$delimiter</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: dasherize {id="dasherize()"}

<code-block lang="php">
    <![CDATA[public Strings::dasherize():$this]]>
</code-block>













### ### Lowercased and trimmed string separated by dash

<p><format style="italic">Dash is inserted before uppercase characters (except the first character of the string), and in place of spaces, dashes, and underscores.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L352">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L352">
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
## method: pascalize {id="pascalize()"}

<code-block lang="php">
    <![CDATA[public Strings::pascalize():$this]]>
</code-block>













### ### Makes a PascalCase version of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L360">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L360">
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
## method: humanize {id="humanize()"}

<code-block lang="php">
    <![CDATA[public Strings::humanize(list<string> $forbidden_words = [&#039;id&#039;]):$this]]>
</code-block>













### ### Humanize string

<p><format style="italic">Capitalizes the first word of the string, replaces underscores with spaces, and removes forbidden words.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L374">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L374">
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
        <list><li>list&lt;string&gt; <format style="bold">$forbidden_words</format> = ['id'] - <format style="italic">[optional] 
List of forbidden words to remove.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: tidy {id="tidy()"}

<code-block lang="php">
    <![CDATA[public Strings::tidy():$this]]>
</code-block>













### ### Tidy string

<p><format style="italic">Returns a string with smart quotes, ellipsis characters, and dashes from Windows-1252 (commonly used in Word documents)
replaced by their ASCII equivalents.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L385">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L385">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L396">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L396">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L406">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L406">
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
    <![CDATA[public Strings::stripTags(null|string|array<int,string> $allowed_tags = null):$this]]>
</code-block>













### ### Strip HTML and PHP tags from a string

<p><format style="italic">This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string.
It uses the same tag stripping state machine as the fgetss() function.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L424">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L424">
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
        <list><li>null or string or array&lt;int,string&gt; <format style="bold">$allowed_tags</format> = null - <format style="italic">
You can use the optional second parameter to specify tags which shouldn't be stripped.</format></li></list>
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













### ### Quote meta-characters

<p><format style="italic">Returns a version of str with a backslash character (\) before every character that is among these: .\+*?[^]($).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L434">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L434">
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
## method: between {id="between()"}

<code-block lang="php">
    <![CDATA[public Strings::between(non-empty-string $start, non-empty-string $end):$this]]>
</code-block>













### ### Slice string after first start and until last end



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L449">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L449">
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
        <list><li>non-empty-string <format style="bold">$start</format> - <format style="italic">
First character.
</format></li><li>non-empty-string <format style="bold">$end</format> - <format style="italic">
Last character.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: betweenFirst {id="betweenfirst()"}

<code-block lang="php">
    <![CDATA[public Strings::betweenFirst(non-empty-string $start, non-empty-string $end):$this]]>
</code-block>













### ### Slice string after first start and until first end



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
        <list><li>non-empty-string <format style="bold">$start</format> - <format style="italic">
First character.
</format></li><li>non-empty-string <format style="bold">$end</format> - <format style="italic">
Last character.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: betweenLast {id="betweenlast()"}

<code-block lang="php">
    <![CDATA[public Strings::betweenLast(non-empty-string $start, non-empty-string $end):$this]]>
</code-block>













### ### Slice string after last start and until last end



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L479">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L479">
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
        <list><li>non-empty-string <format style="bold">$start</format> - <format style="italic">
First character.
</format></li><li>non-empty-string <format style="bold">$end</format> - <format style="italic">
Last character.
</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L500">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L500">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L523">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L523">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L537">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L537">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L551">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L551">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L565">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L565">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L580">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L580">
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

<p><format style="italic">Returns the last part of $string starting from the first occurrence of $find to the end of $string.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L594">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L594">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L608">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L608">
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
## method: insert {id="insert()"}

<code-block lang="php">
    <![CDATA[public Strings::insert(non-empty-string $string, int $position):$this]]>
</code-block>













### ### Inserts string at the position provided



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L625">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L625">
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
        <list><li>non-empty-string <format style="bold">$string</format> - <format style="italic">
String to insert.
</format></li><li>int <format style="bold">$position</format> - <format style="italic">
Position where string will be inserted.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: move {id="move()"}

<code-block lang="php">
    <![CDATA[public Strings::move(int $from, int $length, int $to):$this]]>
</code-block>













### ### Move part of the string

<p><format style="italic">Move part of the string specified by the $from and $until parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L647">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L647">
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
Start position of moving string, counting from zero.
</format></li><li>int <format style="bold">$length</format> - <format style="italic">
Length of moving string, counting from $start.
</format></li><li>int <format style="bold">$to</format> - <format style="italic">
Position where string will be moved, counting from zero.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: overwrite {id="overwrite()"}

<code-block lang="php">
    <![CDATA[public Strings::overwrite(int $from, int $until, string $with):$this]]>
</code-block>













### ### Overwrite with part of the string

<p><format style="italic">Overwrite with part of the string specified by the $from and $until parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L669">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L669">
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
</format></li><li>int <format style="bold">$until</format> - <format style="italic">
Returned string will end at the start position in string.
</format></li><li>string <format style="bold">$with</format> - <format style="italic">
The string to insert.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: replace {id="replace()"}

<code-block lang="php">
    <![CDATA[public Strings::replace(string $find, string $with):$this]]>
</code-block>













### ### Replace all occurrences of the search string with the replacement string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L684">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L684">
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
The replacement value that replaces found search values.
</format></li><li>string <format style="bold">$with</format> - <format style="italic">
The string being searched and replaced on.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: replaceRecursive {id="replacerecursive()"}

<code-block lang="php">
    <![CDATA[public Strings::replaceRecursive(array<non-empty-string,string> $rules):$this]]>
</code-block>













### ### Replace all occurrences recursively of search in a subject replaced with the given replacement value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L699">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L699">
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
        <list><li>array&lt;non-empty-string,string&gt; <format style="bold">$rules</format> - <format style="italic">
Find => Replace pattern rules.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: repeat {id="repeat()"}

<code-block lang="php">
    <![CDATA[public Strings::repeat(int $times, string $separator = &#039;&#039;):$this]]>
</code-block>













### ### Repeat a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L715">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L715">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0`</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$times</format> - <format style="italic">
Number of time the input string should be repeated.
If the $times are set to 0 or less, the function will return an empty string.
</format></li><li>string <format style="bold">$separator</format> = '' - <format style="italic">[optional] 
Separator in between any repeated string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string repeated $times times.</format></li></list>
    </def>
</deflist>
## method: reverse {id="reverse()"}

<code-block lang="php">
    <![CDATA[public Strings::reverse():$this]]>
</code-block>













### ### Reverse order of characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L723">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L723">
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
        <list><li>$this - <format style="italic">This reversed string.</format></li></list>
    </def>
</deflist>
## method: pad {id="pad()"}

<code-block lang="php">
    <![CDATA[public Strings::pad(int $length, non-empty-string $pad = &quot; &quot;, \FireHub\Core\Support\Enums\Side $side = Side::BOTH):$this]]>
</code-block>













### ### Pad a string to a certain length with another string

<p><format style="italic">This method returns the $string padded on the left, the right, or both sides to the specified padding length.
If the optional argument $pad is not supplied, the $string is padded with spaces; otherwise it is padded
with characters from $pad up to the limit.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L749">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L749">
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
        <list><li><a href="Side.md#both">\FireHub\Core\Support\Enums\Side::BOTH</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$length</format> - <format style="italic">
If the value of pad_length is negative, less than, or equal to the length of the input string,
no padding takes place.
</format></li><li>non-empty-string <format style="bold">$pad</format> = " " - <format style="italic">[optional] 
The pad may be truncated if the required number of padding characters can't be evenly divided by the pad's
length.
</format></li><li><a href="Side.md">\FireHub\Core\Support\Enums\Side</a> <format style="bold">$side</format> = Side::BOTH - <format style="italic">[optional] 
Pad side.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: mask {id="mask()"}

<code-block lang="php">
    <![CDATA[public Strings::mask(\FireHub\Core\Support\Contracts\HighLevel\Characters $with, int $from, null|int $length = null):$this]]>
</code-block>













### ### Mask a portion of a string

<p><format style="italic">Masks a portion of a string with a repeated character and may be used to obfuscate segments of strings
such as email addresses and phone numbers,</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L771">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L771">
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
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> <format style="bold">$with</format> - <format style="italic">
Character to mask with.
</format></li><li>int <format style="bold">$from</format> - <format style="italic">
If start is non-negative, masking will start at the start position in string, counting from zero.
If the start is negative, masking will start at the start character from the end of the string.
</format></li><li>null or int <format style="bold">$length</format> = null - <format style="italic">[optional] 
Maximum number of characters to use for masking.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: prepend {id="prepend()"}

<code-block lang="php">
    <![CDATA[public Strings::prepend(string $prefix):$this]]>
</code-block>













### ### Prepends the given string to the current string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L783">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L783">
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
        <list><li>string <format style="bold">$prefix</format> - <format style="italic">
The prefix to prepend.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: append {id="append()"}

<code-block lang="php">
    <![CDATA[public Strings::append(string $suffix):$this]]>
</code-block>













### ### Appends the given string to the current string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L795">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L795">
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
        <list><li>string <format style="bold">$suffix</format> - <format style="italic">
The suffix to append.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: ensurePrefix {id="ensureprefix()"}

<code-block lang="php">
    <![CDATA[public Strings::ensurePrefix(non-empty-string $prefix):$this]]>
</code-block>













### ### Makes sure that the current string starts with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L807">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L807">
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
        <list><li>non-empty-string <format style="bold">$prefix</format> - <format style="italic">
The prefix to make sure it exists.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: ensureSuffix {id="ensuresuffix()"}

<code-block lang="php">
    <![CDATA[public Strings::ensureSuffix(non-empty-string $suffix):$this]]>
</code-block>













### ### Makes sure that the current string ends with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L819">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L819">
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
        <list><li>non-empty-string <format style="bold">$suffix</format> - <format style="italic">
The suffix to make sure it exists.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: removePrefix {id="removeprefix()"}

<code-block lang="php">
    <![CDATA[public Strings::removePrefix(non-empty-string $prefix):$this]]>
</code-block>













### ### Makes sure that the current string doesn't start with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L831">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L831">
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
        <list><li>non-empty-string <format style="bold">$prefix</format> - <format style="italic">
The prefix to make sure exists.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: removeSuffix {id="removesuffix()"}

<code-block lang="php">
    <![CDATA[public Strings::removeSuffix(non-empty-string $suffix):$this]]>
</code-block>













### ### Makes sure that the current string doesn't end with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L843">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L843">
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
        <list><li>non-empty-string <format style="bold">$suffix</format> - <format style="italic">
The suffix to make sure exists.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: surround {id="surround()"}

<code-block lang="php">
    <![CDATA[public Strings::surround(non-empty-string $with):$this]]>
</code-block>













### Surrounds string with the given substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L855">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L855">
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
        <list><li>non-empty-string <format style="bold">$with</format> - <format style="italic">
The substring to add to both sides.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: shuffle {id="shuffle()"}

<code-block lang="php">
    <![CDATA[public Strings::shuffle():$this]]>
</code-block>













### ### Randomly shuffles a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L867">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L867">
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
## method: quote {id="quote()"}

<code-block lang="php">
    <![CDATA[public Strings::quote(non-empty-string $with):$this]]>
</code-block>













### ### Wraps each word in the string with specified quote



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L879">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L879">
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
        <list><li>non-empty-string <format style="bold">$with</format> - <format style="italic">
String to quote with.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: trim {id="trim()"}

<code-block lang="php">
    <![CDATA[public Strings::trim(\FireHub\Core\Support\Enums\Side $side = Side::BOTH, string $characters = &quot; 
	 &quot;):$this]]>
</code-block>













### ### Strip whitespace (or other characters) from the beginning and end of a string

<p><format style="italic">This function returns a string with whitespace stripped from the beginning and end of the string.
Without the second parameter, [[StrSafe#trim()]] will strip these characters.

- " " (ASCII 32 (0x20)), an ordinary space.
- "\t" (ASCII 9 (0x09)), a tab.
- "\n" (ASCII 10 (0x0A)), a new line (line feed).
- "\r" (ASCII 13 (0x0D)), a carriage return.
- "\0" (ASCII 0 (0x00)), the NUL-byte.
- "\v" (ASCII 11 (0x0B)), a vertical tab.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L905">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L905">
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
        <list><li><a href="Side.md">\FireHub\Core\Support\Enums\Side</a> <format style="bold">$side</format> = Side::BOTH - <format style="italic">[optional] 
Side to trim string.
</format></li><li>string <format style="bold">$characters</format> = " 
	 " - <format style="italic">[optional] 
The stripped characters can also be specified using the char-list parameter. List all characters that you want
to be stripped. With '..', you can specify a range of characters.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: truncate {id="truncate()"}

<code-block lang="php">
    <![CDATA[public Strings::truncate(int $length, string $with = &#039;&#039;):$this]]>
</code-block>













### ### Truncates the string to a given length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L923">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L923">
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
        <list><li>int <format style="bold">$length</format> - <format style="italic">
Maximum string length, with $with argument included.
</format></li><li>string <format style="bold">$with</format> = '' - <format style="italic">[optional] 
Truncates the string with.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: safeTruncate {id="safetruncate()"}

<code-block lang="php">
    <![CDATA[public Strings::safeTruncate(int $length, string $with):$this]]>
</code-block>













### ### Truncates the string to a given length while ensuring that it doesn't split words



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L941">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L941">
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
        <list><li>int <format style="bold">$length</format> - <format style="italic">
Maximum string length, with $with argument included.
</format></li><li>string <format style="bold">$with</format> - <format style="italic">
Truncates the string with.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
## method: first {id="first()"}

<code-block lang="php">
    <![CDATA[public Strings::first():\FireHub\Core\Support\Contracts\HighLevel\Characters|null]]>
</code-block>













### ### Get the first character of string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L951">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L951">
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
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> or null - <format style="italic">The first character of string or null is string is empty.</format></li></list>
    </def>
</deflist>
## method: last {id="last()"}

<code-block lang="php">
    <![CDATA[public Strings::last():\FireHub\Core\Support\Contracts\HighLevel\Characters|null]]>
</code-block>













### ### Get the last character of string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L961">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L961">
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
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> or null - <format style="italic">The last character of string or null is string is empty.</format></li></list>
    </def>
</deflist>
## method: toChars {id="tochars()"}

<code-block lang="php">
    <![CDATA[public Strings::toChars():\FireHub\Core\Support\Contracts\HighLevel\Characters[]]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Change from array to Collection</format></p>
            </tip>

### ### Break string into characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L971">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L971">
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
        <list><li><a href="Characters[].md">\FireHub\Core\Support\Contracts\HighLevel\Characters[]</a> - <format style="italic">List of characters.</format></li></list>
    </def>
</deflist>
## method: chop {id="chop()"}

<code-block lang="php">
    <![CDATA[public Strings::chop(positive-int $length = 1):list<non-empty-string>]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Change from array to Collection</format></p>
            </tip>

### ### Chop a string to an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L988">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L988">
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
        <list><li>positive-int <format style="bold">$length</format> = 1 - <format style="italic">[optional] 
Maximum length of the chunk.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>list&lt;non-empty-string&gt; - <format style="italic">If the optional $length parameter is specified, the returned array will be
broken down into chunks with each being $length in length, except the final chunk, which may be shorter if the
string doesn't divide evenly.
The default $length is 1, meaning every chunk will be one byte in size.</format></li></list>
    </def>
</deflist>
## method: break {id="break()"}

<code-block lang="php">
    <![CDATA[public Strings::break(non-empty-string $with, int<min, max> $limit = MAX):string[]]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Change from array to Collection</format></p>
            </tip>

### ### Break string with a separator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1011">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1011">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>non-empty-string <format style="bold">$with</format> - <format style="italic">
The boundary string.
</format></li><li>int&lt;min, max&gt; <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is negative, all components except the last – limit are returned.
If the limit parameter is zero, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">If the delimiter contains a value not contained in string and a negative limit is used, then
an empty array will be returned.
For any other limit, an array containing string will be returned.</format></li></list>
    </def>
</deflist>
## method: breakWithAny {id="breakwithany()"}

<code-block lang="php">
    <![CDATA[public Strings::breakWithAny(\FireHub\Core\Support\Contracts\HighLevel\Characters[] $characters, int<min, max> $limit = MAX):string[]]]>
</code-block>













### ### Break string with any of separators



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1033">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1033">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters[].md">\FireHub\Core\Support\Contracts\HighLevel\Characters[]</a> <format style="bold">$characters</format> - <format style="italic">
<code>non-empty-string[]</code>
The boundary characters.
</format></li><li>int&lt;min, max&gt; <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">If a delimiter contains a value not contained in string, and a negative limit is used,
then an empty array will be returned.
For any other limit, an array containing string will be returned.</format></li></list>
    </def>
</deflist>
## method: split {id="split()"}

<code-block lang="php">
    <![CDATA[public Strings::split(non-empty-string $with, int<min, max> $limit = MAX):string[]]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Change from array to Collection</format></p>
            </tip>

### ### Split string with a separator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1056">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1056">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>non-empty-string <format style="bold">$with</format> - <format style="italic">
The boundary string.
</format></li><li>int&lt;min, max&gt; <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">If a delimiter contains a value not contained in string, and a negative limit is used,
then an empty array will be returned.
For any other limit, an array containing string will be returned.</format></li></list>
    </def>
</deflist>
## method: splitBeforeAny {id="splitbeforeany()"}

<code-block lang="php">
    <![CDATA[public Strings::splitBeforeAny(\FireHub\Core\Support\Contracts\HighLevel\Characters[] $characters, int<min, max> $limit = MAX):string[]]]>
</code-block>













### ### Split string before any of separators



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1077">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1077">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters[].md">\FireHub\Core\Support\Contracts\HighLevel\Characters[]</a> <format style="bold">$characters</format> - <format style="italic">
The boundary characters.
</format></li><li>int&lt;min, max&gt; <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">If a delimiter contains a value not contained in string, and a negative limit is used,
then an empty array will be returned.
For any other limit, an array containing string will be returned.</format></li></list>
    </def>
</deflist>
## method: splitAfterAny {id="splitafterany()"}

<code-block lang="php">
    <![CDATA[public Strings::splitAfterAny(\FireHub\Core\Support\Contracts\HighLevel\Characters[] $characters, int<min, max> $limit = MAX):string[]]]>
</code-block>













### ### Split string after any of separators



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1099">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1099">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters[].md">\FireHub\Core\Support\Contracts\HighLevel\Characters[]</a> <format style="bold">$characters</format> - <format style="italic">
<code>non-empty-string[]</code>
The boundary characters.
</format></li><li>int&lt;min, max&gt; <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">If a delimiter contains a value not contained in string, and a negative limit is used,
then an empty array will be returned.
For any other limit, an array containing string will be returned.</format></li></list>
    </def>
</deflist>
## method: group {id="group()"}

<code-block lang="php">
    <![CDATA[public Strings::group(positive-int $number_of_groups):list<string>]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Change from array to Collection</format></p>
            </tip>

### ### Group a string into chunks



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1113">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1113">
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
        <list><li>positive-int <format style="bold">$number_of_groups</format> - <format style="italic">
The size of each chunk.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>list&lt;string&gt; - <format style="italic">Grouped string into chunks.</format></li></list>
    </def>
</deflist>
## method: containTimes {id="containtimes()"}

<code-block lang="php">
    <![CDATA[public Strings::containTimes(non-empty-string $value)]]>
</code-block>













### ### Checks how mny times string contains value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1125">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1125">
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
        <list><li>non-empty-string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int The number of times the searched value occurs in the string.</format></li></list>
    </def>
</deflist>
## method: length {id="length()"}

<code-block lang="php">
    <![CDATA[public Strings::length()]]>
</code-block>













### ### Get string length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1133">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1133">
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
        <list><li> - <format style="italic">non-negative-int Length of the string.</format></li></list>
    </def>
</deflist>
## method: indexOf {id="indexof()"}

<code-block lang="php">
    <![CDATA[public Strings::indexOf(string $find)]]>
</code-block>













### ### Find the position of the first occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1145">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1145">
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
        <list><li> - <format style="italic">non-negative-int|false Position of the first occurrence for a substring.</format></li></list>
    </def>
</deflist>
## method: lastIndexOf {id="lastindexof()"}

<code-block lang="php">
    <![CDATA[public Strings::lastIndexOf(string $find)]]>
</code-block>













### ### Find the position of the last occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1157">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1157">
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
        <list><li> - <format style="italic">non-negative-int|false Position of the last occurrence for a substring.</format></li></list>
    </def>
</deflist>
## method: charAt {id="charat()"}

<code-block lang="php">
    <![CDATA[public Strings::charAt(int $index):\FireHub\Core\Support\Char]]>
</code-block>













### ### Find the character at the provider position



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1171">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Strings.php#L1171">
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
        <list><li>int <format style="bold">$index</format> - <format style="italic">
Position where character is located.
If start is non-negative, the returned string will start at the start position in string, counting from zero.
If the start is negative, the returned string will start at the start character from the end of the string.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Char.md">\FireHub\Core\Support\Char</a> - <format style="italic">Character at position.</format></li></list>
    </def>
</deflist>
## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Stringable::__toString():string]]>
</code-block>













### ### Gets a string representation of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Stringable.php#L36">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Stringable.php#L36">
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