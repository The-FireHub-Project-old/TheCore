<title># IStr</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\IStr()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Case-insensitive string high-level class

<p><format style="italic">Class allows you to manipulate strings in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\IStr
    </def><def title="Parent class:">
        <a href="Str.md">\FireHub\Core\Support\Str</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L35">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.IStr.php">
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
|inherited protected|<a href="#$string">string</a>|### String to use|&#039;&#039;|
|inherited protected|<a href="#$encoding">encoding</a>|Character encoding|null|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#expression()">expression</a>||
|public|<a href="#startswith()">startsWith</a>||
|public|<a href="#endswith()">endsWith</a>||
|public|<a href="#contains()">contains</a>||
|public|<a href="#equals()">equals</a>||
|public|<a href="#carryfrom()">carryFrom</a>||
|public|<a href="#carryuntil()">carryUntil</a>||
|public|<a href="#carryfromlast()">carryFromLast</a>||
|public|<a href="#carryuntillast()">carryUntilLast</a>||
|public|<a href="#break()">break</a>||
|public|<a href="#containtimes()">containTimes</a>||
|public|<a href="#indexof()">indexOf</a>||
|public|<a href="#lastindexof()">lastIndexOf</a>||
|inherited public|<a href="#__construct()">__construct</a>|### Constructor|
|inherited public|<a href="#replacemultiple()">replaceMultiple</a>|### Replace all occurrences of search in a subject replaced with the given replacement value|
|inherited public static |<a href="#from()">from</a>|### Create a new string from raw string|
|inherited public static |<a href="#fromlist()">fromList</a>|### Create a new string from array elements with a string|
|inherited public|<a href="#insertvalue()">insertValue</a>|### value on string|
|inherited public|<a href="#tochars()">toChars</a>|### Break string into characters|
|inherited public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical string value|
|inherited public|<a href="#startswithany()">startsWithAny</a>|### Checks if a string starts with any of the given values|
|inherited public|<a href="#endswithany()">endsWithAny</a>|### Checks if a string ends with any of the given values|
|inherited public|<a href="#containsall()">containsAll</a>|### Checks if string contains all values|
|inherited public|<a href="#containsany()">containsAny</a>|### Checks if string contains any of the values|
|inherited public|<a href="#equalsany()">equalsAny</a>|### Checks if string equals to any of the values|
|inherited public|<a href="#match()">match</a>|### Checks if string matches a given pattern|
|inherited public|<a href="#encoding()">encoding</a>|### Get or change string encoding|
|inherited public|<a href="#string()">string</a>|### Get or set string as raw string|
|inherited public|<a href="#tolower()">toLower</a>|### Make a string lowercase|
|inherited public|<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|inherited public|<a href="#totitle()">toTitle</a>|### Make a string title-case|
|inherited public|<a href="#capitalize()">capitalize</a>|### Make a first character of string uppercased|
|inherited public|<a href="#decapitalize()">deCapitalize</a>|### Make a first character of string uppercased|
|inherited public|<a href="#swapcase()">swapCase</a>|### Swap lower and upper cases on string|
|inherited public|<a href="#streamline()">streamline</a>|### Streamline string|
|inherited public|<a href="#titleize()">titleize</a>|### Capitalize every word in string|
|inherited public|<a href="#spaceless()">spaceless</a>|### Remove spaces|
|inherited public|<a href="#kebabcase()">kebabCase</a>|### Format sting to kebab-case|
|inherited public|<a href="#snakecase()">snakeCase</a>|### Format sting to snake-case|
|inherited public|<a href="#headline()">headline</a>|### Format strings to headline|
|inherited public|<a href="#delimit()">delimit</a>|### Lowercased and trimmed string separated by the given delimiter|
|inherited public|<a href="#dasherize()">dasherize</a>|### Lowercased and trimmed string separated by dash|
|inherited public|<a href="#pascalize()">pascalize</a>|### Makes a PascalCase version of the string|
|inherited public|<a href="#humanize()">humanize</a>|### Humanize string|
|inherited public|<a href="#tidy()">tidy</a>|### Tidy string|
|inherited public|<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|inherited public|<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|inherited public|<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public|<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|inherited public|<a href="#between()">between</a>|### Slice string after first start and until last end|
|inherited public|<a href="#betweenfirst()">betweenFirst</a>|### Slice string after first start and until first end|
|inherited public|<a href="#betweenlast()">betweenLast</a>|### Slice string after last start and until last end|
|inherited public|<a href="#slice()">slice</a>|### Slice with part of the string|
|inherited public|<a href="#carry()">carry</a>|### Carry with part of the string|
|inherited public|<a href="#carryafter()">carryAfter</a>|### Carry from part of the string|
|inherited public|<a href="#carryafterlast()">carryAfterLast</a>|### Carry from the last part of the string|
|inherited public|<a href="#insert()">insert</a>|### Inserts string at the position provided|
|inherited public|<a href="#move()">move</a>|### Move part of the string|
|inherited public|<a href="#overwrite()">overwrite</a>|### Overwrite with part of the string|
|inherited public|<a href="#replace()">replace</a>|### Replace all occurrences of the search string with the replacement string|
|inherited public|<a href="#replacerecursive()">replaceRecursive</a>|### Replace all occurrences recursively of search in a subject replaced with the given replacement value|
|inherited public|<a href="#repeat()">repeat</a>|### Repeat a string|
|inherited public|<a href="#reverse()">reverse</a>|### Reverse order of characters|
|inherited public|<a href="#pad()">pad</a>|### Pad a string to a certain length with another string|
|inherited public|<a href="#mask()">mask</a>|### Mask a portion of a string|
|inherited public|<a href="#prepend()">prepend</a>|### Prepends the given string to the current string|
|inherited public|<a href="#append()">append</a>|### Appends the given string to the current string|
|inherited public|<a href="#ensureprefix()">ensurePrefix</a>|### Makes sure that the current string starts with the given text|
|inherited public|<a href="#ensuresuffix()">ensureSuffix</a>|### Makes sure that the current string ends with the given text|
|inherited public|<a href="#removeprefix()">removePrefix</a>|### Makes sure that the current string doesn't start with the given text|
|inherited public|<a href="#removesuffix()">removeSuffix</a>|### Makes sure that the current string doesn't end with the given text|
|inherited public|<a href="#surround()">surround</a>|Surrounds string with the given substring|
|inherited public|<a href="#shuffle()">shuffle</a>|### Randomly shuffles a string|
|inherited public|<a href="#quote()">quote</a>|### Wraps each word in the string with specified quote|
|inherited public|<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|inherited public|<a href="#truncate()">truncate</a>|### Truncates the string to a given length|
|inherited public|<a href="#safetruncate()">safeTruncate</a>|### Truncates the string to a given length, while ensuring that it does not split words|
|inherited public|<a href="#first()">first</a>|### Get first character of string|
|inherited public|<a href="#last()">last</a>|### Get last character of string|
|inherited public|<a href="#chop()">chop</a>|### Chop a string to an array|
|inherited public|<a href="#breakwithany()">breakWithAny</a>|### Break string with any of separators|
|inherited public|<a href="#split()">split</a>|### Split string with a separator|
|inherited public|<a href="#splitbeforeany()">splitBeforeAny</a>|### Split string before any of separators|
|inherited public|<a href="#splitafterany()">splitAfterAny</a>|### Split string after any of separators|
|inherited public|<a href="#group()">group</a>|### Group a string into chunks|
|inherited public|<a href="#length()">length</a>|### Get string length|
|inherited public|<a href="#charat()">charAt</a>|### Find the character at the provider position|
|inherited public|<a href="#__tostring()">__toString</a>||

## property: string {id="$string"}

<code-block lang="php">
    <![CDATA[protected string $string = &#039;&#039;]]>
</code-block>











### ### String to use



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L55">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L55">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## property: encoding {id="$encoding"}

<code-block lang="php">
    <![CDATA[protected null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null]]>
</code-block>











### Character encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L63">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L63">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## method: expression {id="expression()"}

<code-block lang="php">
    <![CDATA[public IStr::expression(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L46">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L46">
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
        <list><li><a href="Modifier.md#multibyte">\FireHub\Core\Support\Enums\String\Expression\Modifier::MULTIBYTE</a>  - <format style="italic">As default modifier.</format></li><li><a href="Modifier.md#caseless">\FireHub\Core\Support\Enums\String\Expression\Modifier::CASELESS</a>  - <format style="italic">As default modifier.</format></li><li><a href="Expression.md">\FireHub\Core\Support\Strings\Expression</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic <a href="Modifier.md">\FireHub\Core\Support\Enums\String\Expression\Modifier</a> <format style="bold">$modifiers</format></li></list>
    </def>
</deflist>
## method: startsWith {id="startswith()"}

<code-block lang="php">
    <![CDATA[public IStr::startsWith(string $value)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L70">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L70">
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
        <list><li><a href="StrMB.md#startswith()">\FireHub\Core\Support\LowLevel\StrMB::startsWith()</a>  - <format style="italic">To check if a string starts with a given value.</format></li><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert raw string.</format></li><li><a href="StrSB.md#tolower()">\FireHub\Core\Support\LowLevel\StrSB::toLower()</a>  - <format style="italic">To make a string lowercase.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$value</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->startsWith('fire');

// true
```

## method: endsWith {id="endswith()"}

<code-block lang="php">
    <![CDATA[public IStr::endsWith(string $value)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L99">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L99">
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
        <list><li><a href="StrMB.md#endswith()">\FireHub\Core\Support\LowLevel\StrMB::endsWith()</a>  - <format style="italic">To check if a string ends with a given value.</format></li><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert raw string.</format></li><li><a href="StrSB.md#tolower()">\FireHub\Core\Support\LowLevel\StrSB::toLower()</a>  - <format style="italic">To make a string lowercase.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$value</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->endsWith('hub');

// true
```

## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public IStr::contains(string $value)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L128">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L128">
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
        <list><li><a href="StrMB.md#contains()">\FireHub\Core\Support\LowLevel\StrMB::contains()</a>  - <format style="italic">To check if a string contains value.</format></li><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert the string.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To lowercase string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$value</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->contains('fire');

// true
```

## method: equals {id="equals()"}

<code-block lang="php">
    <![CDATA[public IStr::equals(string $value)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L156">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L156">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert the string.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To lowercase string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$value</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->contains('firehub');

// true
```

## method: carryFrom {id="carryfrom()"}

<code-block lang="php">
    <![CDATA[public IStr::carryFrom(string $find)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L172">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L172">
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
        <list><li><a href="StrMB.md#firstpart()">\FireHub\Core\Support\LowLevel\StrMB::firstPart()</a>  - <format style="italic">To get the first part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format></li></list>
    </def>
</deflist>
## method: carryUntil {id="carryuntil()"}

<code-block lang="php">
    <![CDATA[public IStr::carryUntil(string $find)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L190">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L190">
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
        <list><li><a href="StrMB.md#firstpart()">\FireHub\Core\Support\LowLevel\StrMB::firstPart()</a>  - <format style="italic">To get the first part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format></li></list>
    </def>
</deflist>
## method: carryFromLast {id="carryfromlast()"}

<code-block lang="php">
    <![CDATA[public IStr::carryFromLast(string $find)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L208">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L208">
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
        <list><li><a href="StrMB.md#lastpart()">\FireHub\Core\Support\LowLevel\StrMB::lastPart()</a>  - <format style="italic">To get the last part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format></li></list>
    </def>
</deflist>
## method: carryUntilLast {id="carryuntillast()"}

<code-block lang="php">
    <![CDATA[public IStr::carryUntilLast(string $find)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L226">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L226">
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
        <list><li><a href="StrMB.md#lastpart()">\FireHub\Core\Support\LowLevel\StrMB::lastPart()</a>  - <format style="italic">To get the last part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format></li></list>
    </def>
</deflist>
## method: break {id="break()"}

<code-block lang="php">
    <![CDATA[public IStr::break(string $with, int $limit = MAX)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L245">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L245">
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
        <list><li><a href="DataIs.md">\FireHub\Core\Support\LowLevel\DataIs</a>  - <format style="italic">To check if expression returns an array.</format></li><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$with</format></li><li>int <format style="bold">$limit</format> = MAX</li></list>
    </def>
</deflist>
## method: containTimes {id="containtimes()"}

<code-block lang="php">
    <![CDATA[public IStr::containTimes(string $value)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L262">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L262">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert the string.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To lowercase string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$value</format></li></list>
    </def>
</deflist>
## method: indexOf {id="indexof()"}

<code-block lang="php">
    <![CDATA[public IStr::indexOf(string $find)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L290">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L290">
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
        <list><li><a href="StrMB.md#firstposition()">\FireHub\Core\Support\LowLevel\StrMB::firstPosition()</a>  - <format style="italic">To find the position for the first occurrence of a substring in a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->indexOf('Web');

// 8
```

## method: lastIndexOf {id="lastindexof()"}

<code-block lang="php">
    <![CDATA[public IStr::lastIndexOf(string $find)]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L312">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L312">
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
        <list><li><a href="StrMB.md#lastposition()">\FireHub\Core\Support\LowLevel\StrMB::lastPosition()</a>  - <format style="italic">To find the position for the last occurrence of a substring in a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->lastIndexOf('e');

// 9
```

## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[abstract public Str::__construct(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> method that cannot be instantiated directly.
    </p>
</tip>





### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L81">
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
        <list><li>string <format style="bold">$string</format> - <format style="italic">
String to use.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding.
If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: replaceMultiple {id="replacemultiple()"}

<code-block lang="php">
    <![CDATA[public Str::replaceMultiple(array<non-empty-string,string> $rules):$this]]>
</code-block>













### ### Replace all occurrences of search in a subject replaced with the given replacement value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L61">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L61">
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
        <list><li><a href="StrMB.md#translate()">\FireHub\Core\Support\StrMB::translate()</a>  - <format style="italic">To translate characters or replace substrings.</format></li></list>
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
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->replaceMultiple(['F' => 'M', 'H' => 'X']);

// MireXub

## method: from {id="from()"}

<code-block lang="php">
    <![CDATA[public static Str::from(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static]]>
</code-block>













### ### Create a new string from raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L113">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L113">
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
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">To create string from any word.</format></li><li><a href="Str.md#quote()">\FireHub\Core\Support\Strings\Str::quote()</a>  - <format style="italic">To create string from any word.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
String to use.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>static - <format style="italic">New string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub');
```
Creating new string with specific encoding.
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\String\Encoding;

Str::from('FireHub', Encoding::UTF_8);
```

## method: fromList {id="fromlist()"}

<code-block lang="php">
    <![CDATA[public static Str::fromList(array<array-key,null|scalar|\Stringable>|\FireHub\Core\Support\Contracts\HighLevel\Collectable<int,\FireHub\Core\Support\Str> $list, string $glue = &#039;&#039;, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">After Collection check if string.</format></p>
            </tip>

### ### Create a new string from array elements with a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L160">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L160">
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
        <list><li><a href="StrMB.md#implode()">\FireHub\Core\Support\LowLevel\StrMB::implode()</a>  - <format style="italic">To join array elements with a string.</format></li><li><a href="Collectable.md#all()">\FireHub\Core\Support\Contracts\HighLevel\Collectable::all()</a>  - <format style="italic">To get a list as an array.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array&lt;array-key,null or scalar or <a href="Stringable&gt;.md">\Stringable&gt;</a> or <a href="Str&gt;.md">\FireHub\Core\Support\Contracts\HighLevel\Collectable&lt;int,\FireHub\Core\Support\Str&gt;</a> <format style="bold">$list</format> - <format style="italic">
The array of strings to implode.
</format></li><li>string <format style="bold">$glue</format> = '' - <format style="italic">[optional] 
The boundary string.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If array item could not be converted to string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>static - <format style="italic">New string containing a string representation of all the array elements in the same order,
with the separator string between each element.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::fromList(['F', 'i', 'r', 'e', 'H', 'u', 'B']);

// FireHub
```
Creating with glue.
```php
use FireHub\Core\Support\Str;

Str::fromList(['F', 'i', 'r', 'e', 'H', 'u', 'B'], '-');

// F-i-r-e-H-u-b
```

## method: insertValue {id="insertvalue()"}

<code-block lang="php">
    <![CDATA[public Str::insertValue(string $value)]]>
</code-block>













### ### value on string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L190">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L190">
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
        <list><li><a href="InsertValue.md">\FireHub\Core\Support\Strings\InsertValue</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$value</format> - <format style="italic">
String to insert.
</format></li></list>
    </def>
</deflist>
## method: toChars {id="tochars()"}

<code-block lang="php">
    <![CDATA[public Str::toChars()]]>
</code-block>













### ### Break string into characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L211">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L211">
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
        <list><li><a href="Str.md#chop()">\FireHub\Core\Support\Str::chop()</a>  - <format style="italic">To chop a string to an array.</format></li><li><a href="Char.md#from()">\FireHub\Core\Support\Char::from()</a>  - <format style="italic">To create a new character from raw string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#first()">\FireHub\Core\Support\Strings\Str::first()</a>  - <format style="italic">To break string into characters.</format></li><li><a href="Str.md#last()">\FireHub\Core\Support\Strings\Str::last()</a>  - <format style="italic">To break string into characters.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->toChars();
```

## method: asBoolean {id="asboolean()"}

<code-block lang="php">
    <![CDATA[public Str::asBoolean()]]>
</code-block>













### ### Boolean representation of the given logical string value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L237">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L237">
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
        <list><li><a href="asBoolean.md">\FireHub\Core\Support\Helpers\String\asBoolean()</a>  - <format style="italic">To convert raw string to boolean.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('Yes')->asBoolean();

// true

## method: startsWithAny {id="startswithany()"}

<code-block lang="php">
    <![CDATA[public Str::startsWithAny(string ...$values)]]>
</code-block>













### ### Checks if a string starts with any of the given values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L281">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L281">
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
        <list><li><a href="StrMB.md#startswith()">\FireHub\Core\Support\LowLevel\StrMB::startsWith()</a>  - <format style="italic">To check if a string starts with a given value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->startsWithAny('Fire', 'test');

// true
```

## method: endsWithAny {id="endswithany()"}

<code-block lang="php">
    <![CDATA[public Str::endsWithAny(string ...$values)]]>
</code-block>













### ### Checks if a string ends with any of the given values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L328">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L328">
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
        <list><li><a href="StrMB.md#endswith()">\FireHub\Core\Support\LowLevel\StrMB::endsWith()</a>  - <format style="italic">To check if a string ends with a given value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->endsWithAny('Hub', 'test');

// true
```

## method: containsAll {id="containsall()"}

<code-block lang="php">
    <![CDATA[public Str::containsAll(string ...$values)]]>
</code-block>













### ### Checks if string contains all values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L375">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L375">
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
        <list><li><a href="Str.md#contains()">\FireHub\Core\Support\Str::contains()</a>  - <format style="italic">To check if a string contains any of the provided values.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
The list of values to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->containsAll('ire', 'Fi');

// true
```

## method: containsAny {id="containsany()"}

<code-block lang="php">
    <![CDATA[public Str::containsAny(string ...$values)]]>
</code-block>













### ### Checks if string contains any of the values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L400">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L400">
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
        <list><li><a href="Str.md#contains()">\FireHub\Core\Support\Str::contains()</a>  - <format style="italic">To check if a string contains all the provided values.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
The list of values to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->containsAny('ire', 'Fi');

// true
```

## method: equalsAny {id="equalsany()"}

<code-block lang="php">
    <![CDATA[public Str::equalsAny(string ...$values)]]>
</code-block>













### ### Checks if string equals to any of the values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L445">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L445">
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
        <list><li><a href="Str.md#equals()">\FireHub\Core\Support\Str::equals()</a>  - <format style="italic">To check if a string equals the provided values.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic string <format style="bold">$values</format> - <format style="italic">
The list of values to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->equalsAny('FireHub', 'Fi');

// true
```

## method: match {id="match()"}

<code-block lang="php">
    <![CDATA[public Str::match(string $pattern)]]>
</code-block>













### ### Checks if string matches a given pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L468">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L468">
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
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->match('Fire*b*A*');

// true
```

## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Str::encoding(?\FireHub\Core\Support\Enums\String\Encoding $encoding = null)]]>
</code-block>













### ### Get or change string encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L497">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L497">
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
        <list><li><a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a>  - <format style="italic">As parameter.</format></li><li><a href="StrMB.md#encoding()">\FireHub\Core\Support\LowLevel\StrMB::encoding()</a>  - <format style="italic">To get internal character encoding if default is not set.</format></li></list>
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current encoding.</format></li><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If the value of encoding is an invalid encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\String\Encoding;

Str::from('FireHub')->encoding(Encoding::UTF_8);
```

## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Str::string(string $string = null)]]>
</code-block>













### ### Get or set string as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L535">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L535">
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
        <list><li><a href="DataIs.md#null()">\FireHub\Core\Support\LowLevel\DataIs::null()</a>  - <format style="italic">To check if $string is null or not.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> = null - <format style="italic">[optional] 
String to set.
</format></li></list>
    </def>
</deflist>
Get the string.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->string();

// FireHub
```
Set the string.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->string('FireHub Web App');

// FireHub Web App
```

## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public Str::toLower()]]>
</code-block>













### ### Make a string lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L562">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L562">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert string.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To convert string to lowercase.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->toLower();

// firehub
```

## method: toUpper {id="toupper()"}

<code-block lang="php">
    <![CDATA[public Str::toUpper()]]>
</code-block>













### ### Make a string uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L587">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L587">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert string.</format></li><li><a href="CaseFolding.md#upper">\FireHub\Core\Support\Enums\String\CaseFolding::UPPER</a>  - <format style="italic">To convert string to uppercase.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->toUpper();

// FIREHUB
```

## method: toTitle {id="totitle()"}

<code-block lang="php">
    <![CDATA[public Str::toTitle()]]>
</code-block>













### ### Make a string title-case



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L612">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L612">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert string.</format></li><li><a href="CaseFolding.md#title">\FireHub\Core\Support\Enums\String\CaseFolding::TITLE</a>  - <format style="italic">To convert string to title-case.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub web app')->toTitle();

// Firehub Web App
```

## method: capitalize {id="capitalize()"}

<code-block lang="php">
    <![CDATA[public Str::capitalize()]]>
</code-block>













### ### Make a first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L638">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L638">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To perform case folding on a string.</format></li><li><a href="CaseFolding.md#upper">\FireHub\Core\Support\Enums\String\CaseFolding::UPPER</a>  - <format style="italic">To uppercase the first character of a string.</format></li><li><a href="static.md#carry()">\FireHub\Core\Support\Strings\static::carry()</a>  - <format style="italic">To carry parts of the string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">To capitalize each word.</format></li><li><a href="Str.md#humanize()">\FireHub\Core\Support\Strings\Str::humanize()</a>  - <format style="italic">As capitalize string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('firehub')->capitalize();

// Firehub
```

## method: deCapitalize {id="decapitalize()"}

<code-block lang="php">
    <![CDATA[public Str::deCapitalize()]]>
</code-block>













### ### Make a first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L668">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L668">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To perform case folding on a string.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To lowercase the first character of a string.</format></li><li><a href="static.md#carry()">\FireHub\Core\Support\Strings\static::carry()</a>  - <format style="italic">To carry parts of the string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">To deCapitalize each word.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->deCapitalize();

// fireHub
```

## method: swapCase {id="swapcase()"}

<code-block lang="php">
    <![CDATA[public Str::swapCase():$this]]>
</code-block>













### ### Swap lower and upper cases on string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L699">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L699">
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
        <list><li><a href="Str.md#tochars()">\FireHub\Core\Support\Str::toChars()</a>  - <format style="italic">To break string into characters.</format></li><li><a href="Char.md#toupper()">\FireHub\Core\Support\Char::toUpper()</a>  - <format style="italic">To make a character uppercase.</format></li><li><a href="Char.md#tolower()">\FireHub\Core\Support\Char::toLower()</a>  - <format style="italic">To make a character lowercase.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->swapCase();

// fIREhUB
```

## method: streamline {id="streamline()"}

<code-block lang="php">
    <![CDATA[public Str::streamline()]]>
</code-block>













### ### Streamline string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L731">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L731">
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
        <list><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#trim()">\FireHub\Core\Support\Str::trim()</a>  - <format style="italic">To strip whitespace (or other characters) from the beginning and end of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#humanize()">\FireHub\Core\Support\Strings\Str::humanize()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#quote()">\FireHub\Core\Support\Strings\Str::quote()</a>  - <format style="italic">To streamline string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from(' Fire
 Hub ')->streamline();

// FireHub
```

## method: titleize {id="titleize()"}

<code-block lang="php">
    <![CDATA[public Str::titleize(array $ignore = [])]]>
</code-block>













### ### Capitalize every word in string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L764">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L764">
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
        <list><li><a href="Conjunction.md#shorts()">\FireHub\Core\Support\Enums\String\Words\Conjunction::shorts()</a>  - <format style="italic">To get a list of all short conjunctions.</format></li><li><a href="Preposition.md#shorts()">\FireHub\Core\Support\Enums\String\Words\Preposition::shorts()</a>  - <format style="italic">To get a list of all short prepositions.</format></li><li><a href="Str.md#streamline()">\FireHub\Core\Support\Strings\Str::streamline()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#from()">\FireHub\Core\Support\Strings\Str::from()</a>  - <format style="italic">To create string from any word.</format></li><li><a href="Str.md#capitalize()">\FireHub\Core\Support\Strings\Str::capitalize()</a>  - <format style="italic">To capitalize each word.</format></li><li><a href="Str.md#decapitalize()">\FireHub\Core\Support\Strings\Str::deCapitalize()</a>  - <format style="italic">To deCapitalize each word.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append words.</format></li><li><a href="Arr.md#inarray()">\FireHub\Core\Support\LowLevel\Arr::inArray()</a>  - <format style="italic">Check if word is inside an ignore list.</format></li><li><a href="StrMB.md#implode()">\FireHub\Core\Support\LowLevel\StrMB::implode()</a>  - <format style="italic">To join words with $with argument as new string.</format></li><li><a href="Arr.md#merge()">\FireHub\Core\Support\LowLevel\Arr::merge()</a>  - <format style="italic">To merge all ignored cases.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$ignore</format> = [] - <format style="italic">$ignore [optional] 
List of additional words not to be capitalized.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub web app')->titleize();

// FireHub Web App
```

## method: spaceless {id="spaceless()"}

<code-block lang="php">
    <![CDATA[public Str::spaceless()]]>
</code-block>













### ### Remove spaces



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L805">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L805">
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
        <list><li><a href="Str.md#expression()">\FireHub\Core\Support\Str::expression()</a>  - <format style="italic">As regular expression.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->spaceless();

// FireHubWebApp
```

## method: kebabCase {id="kebabcase()"}

<code-block lang="php">
    <![CDATA[public Str::kebabCase()]]>
</code-block>













### ### Format sting to kebab-case



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L827">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L827">
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
        <list><li><a href="Str.md#dasherize()">\FireHub\Core\Support\Str::dasherize()</a>  - <format style="italic">To lowercase and trimmed string separated by dash.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Strings\Str;

Str::from('FireHub')->kebabCase();

// fire-hub
```

## method: snakeCase {id="snakecase()"}

<code-block lang="php">
    <![CDATA[public Str::snakeCase()]]>
</code-block>













### ### Format sting to snake-case



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L849">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L849">
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
        <list><li><a href="Str.md#delimit()">\FireHub\Core\Support\Str::delimit()</a>  - <format style="italic">To lowercase and trimmed string separated by the given delimiter.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->snakeCase();

// fire_hub
```

## method: headline {id="headline()"}

<code-block lang="php">
    <![CDATA[public Str::headline()]]>
</code-block>













### ### Format strings to headline



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L872">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L872">
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
        <list><li><a href="Str.md#delimit()">\FireHub\Core\Support\Str::delimit()</a>  - <format style="italic">To lowercase and trimmed string separated by space.</format></li><li><a href="Str.md#titleize()">\FireHub\Core\Support\Str::titleize()</a>  - <format style="italic">To capitalize every word in string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web app')->headline();

// Fire Hub Web App
```

## method: delimit {id="delimit()"}

<code-block lang="php">
    <![CDATA[public Str::delimit(string $delimiter)]]>
</code-block>













### ### Lowercased and trimmed string separated by the given delimiter



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L897">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L897">
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
        <list><li><a href="Str.md#streamline()">\FireHub\Core\Support\Str::streamline()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Str::expression()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#replace()">\FireHub\Core\Support\Str::replace()</a>  - <format style="italic">To replace characters with delimiter.</format></li><li><a href="Str.md#tolower()">\FireHub\Core\Support\Str::toLower()</a>  - <format style="italic">To lowercase string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$delimiter</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Strings\Str;

Str::from('FireHub')->delimit('-');

// fire-hub
```

## method: dasherize {id="dasherize()"}

<code-block lang="php">
    <![CDATA[public Str::dasherize()]]>
</code-block>













### ### Lowercased and trimmed string separated by dash



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L924">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L924">
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
        <list><li><a href="Str.md#delimit()">\FireHub\Core\Support\Str::delimit()</a>  - <format style="italic">To lowercase and trimmed string separated by the given delimiter.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->dasherize();

// fire-hub
```

## method: pascalize {id="pascalize()"}

<code-block lang="php">
    <![CDATA[public Str::pascalize()]]>
</code-block>













### ### Makes a PascalCase version of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L946">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L946">
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
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Str::titleize()</a>  - <format style="italic">Ti title-case all words.</format></li><li><a href="Str.md#spaceless()">\FireHub\Core\Support\Str::spaceless()</a>  - <format style="italic">To remove spaces.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub web app')->pascalize();

// FireHubWebApp
```

## method: humanize {id="humanize()"}

<code-block lang="php">
    <![CDATA[public Str::humanize(array $forbidden_words = [&#039;_id&#039;])]]>
</code-block>













### ### Humanize string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L970">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L970">
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
        <list><li><a href="Str.md#replace()">\FireHub\Core\Support\Strings\Str::replace()</a>  - <format style="italic">To replace underscore and forbidden words.</format></li><li><a href="Str.md#streamline()">\FireHub\Core\Support\Strings\Str::streamline()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#capitalize()">\FireHub\Core\Support\Strings\Str::capitalize()</a>  - <format style="italic">As capitalize string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$forbidden_words</format> = ['_id'] - <format style="italic">[optional] 
List of forbidden words to remove.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('firehub_id')->humanize();

// Firehub
```

## method: tidy {id="tidy()"}

<code-block lang="php">
    <![CDATA[public Str::tidy():$this]]>
</code-block>













### ### Tidy string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L997">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L997">
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
        <list><li><a href="Str.md#replace()">\FireHub\Core\Support\Strings\Str::replace()</a>  - <format style="italic">To replace all occurrences of the search string with the replacement string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('“FireHub…”')->tidy();

// "FireHub..."
```

## method: addSlashes {id="addslashes()"}

<code-block lang="php">
    <![CDATA[public Str::addSlashes()]]>
</code-block>













### ### Quote string with slashes



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1032">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1032">
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
        <list><li><a href="StrMB.md#addslashes()">\FireHub\Core\Support\LowLevel\StrMB::addSlashes()</a>  - <format style="italic">To quote string with slashes.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from("Is your name O'Reilly?")->addSlashes();

// Is your name O\'Reilly?
```

## method: stripSlashes {id="stripslashes()"}

<code-block lang="php">
    <![CDATA[public Str::stripSlashes()]]>
</code-block>













### ### Un-quotes a quoted string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1061">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1061">
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
        <list><li><a href="StrMB.md#stripslashes()">\FireHub\Core\Support\LowLevel\StrMB::stripSlashes()</a>  - <format style="italic">To un-quote a quoted string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('Is your name O\'Reilly?')->stripSlashes();

// Is your name O'Reilly?
```

## method: stripTags {id="striptags()"}

<code-block lang="php">
    <![CDATA[public Str::stripTags(null|string|array $allowed_tags = null)]]>
</code-block>













### ### Strip HTML and PHP tags from a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1105">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1105">
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
        <list><li><a href="StrMB.md#striptags()">\FireHub\Core\Support\LowLevel\StrMB::stripTags()</a>  - <format style="italic">To strip HTML and PHP tags from a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or string or array <format style="bold">$allowed_tags</format> = null - <format style="italic">
You can use the optional second parameter to specify tags which should not be stripped.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('<p>FireHub</p>')->stripTags();

// FireHub
```
With $allowed_tags parameter, you allow certain tags to be excluded for the strip.
```php
use FireHub\Core\Support\Str;

Str::from('<p><i><a>FireHub</a></i></p>')->stripTags('<p>');

// <p>FireHub</p>
```
Alternatively, you can use array in $allowed_tags parameter to allow multiple tags.
```php
use FireHub\Core\Support\Str;

Str::from('<p><i><a>FireHub</a></i></p>')->stripTags(['<p>', '<a>']);

// <p><a>FireHub</a></p>
```

## method: quoteMeta {id="quotemeta()"}

<code-block lang="php">
    <![CDATA[public Str::quoteMeta()]]>
</code-block>













### ### Quote meta characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1129">
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
        <list><li><a href="StrMB.md#quotemeta()">\FireHub\Core\Support\LowLevel\StrMB::quoteMeta()</a>  - <format style="italic">To quote meta characters.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub?')->quoteMeta();

// FireHub\?
```

## method: between {id="between()"}

<code-block lang="php">
    <![CDATA[public Str::between(string $start, string $end)]]>
</code-block>













### ### Slice string after first start and until last end



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1153">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1153">
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
        <list><li><a href="Str.md#carryfrom()">\FireHub\Core\Support\Strings\Str::carryFrom()</a>  - <format style="italic">To cary from part of the string.</format></li><li><a href="Str.md#carryuntillast()">\FireHub\Core\Support\Strings\Str::carryUntilLast()</a>  - <format style="italic">To cary until the last part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$start</format> - <format style="italic">
First character.
</format></li><li>string <format style="bold">$end</format> - <format style="italic">
Last character.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHubFireHubFireHub')->between('F', 'H');

// FireHubFireHubFire

## method: betweenFirst {id="betweenfirst()"}

<code-block lang="php">
    <![CDATA[public Str::betweenFirst(string $start, string $end)]]>
</code-block>













### ### Slice string after first start and until first end



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1175">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1175">
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
        <list><li><a href="Str.md#carryfrom()">\FireHub\Core\Support\Strings\Str::carryFrom()</a>  - <format style="italic">To cary from part of the string.</format></li><li><a href="Str.md#carryuntil()">\FireHub\Core\Support\Strings\Str::carryUntil()</a>  - <format style="italic">To cary until the part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$start</format> - <format style="italic">
First character.
</format></li><li>string <format style="bold">$end</format> - <format style="italic">
Last character.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHubFireHubFireHub')->betweenFirst('F', 'H');

// Fire

## method: betweenLast {id="betweenlast()"}

<code-block lang="php">
    <![CDATA[public Str::betweenLast(string $start, string $end)]]>
</code-block>













### ### Slice string after last start and until last end



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1197">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1197">
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
        <list><li><a href="Str.md#carryfromlast()">\FireHub\Core\Support\Strings\Str::carryFromLast()</a>  - <format style="italic">To cary from the last part of the string.</format></li><li><a href="Str.md#carryuntillast()">\FireHub\Core\Support\Strings\Str::carryUntilLast()</a>  - <format style="italic">To cary until the last part of a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$start</format> - <format style="italic">
First character.
</format></li><li>string <format style="bold">$end</format> - <format style="italic">
Last character.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('Fire')->betweenLast('F', 'H');

// Fire

## method: slice {id="slice()"}

<code-block lang="php">
    <![CDATA[public Str::slice(int $from, ?int $until = null)]]>
</code-block>













### ### Slice with part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1237">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1237">
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
        <list><li><a href="NumInt.md#max()">\FireHub\Core\Support\LowLevel\NumInt::max()</a>  - <format style="italic">To turn negative $from to 0.</format></li><li><a href="Str.md#carry()">\FireHub\Core\Support\Strings\Str::carry()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Str::length()</a>  - <format style="italic">To get length of current string.</format></li></list>
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
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(3);

// Fir
```
Getting a slice of string with passed $until argument.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(3, 5);

// eHu
```
Getting a slice of string with negative $until argument.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(1, -1);

// ireHu
```

## method: carry {id="carry()"}

<code-block lang="php">
    <![CDATA[public Str::carry(int $from, ?int $length = null)]]>
</code-block>













### ### Carry with part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1282">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1282">
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
        <list><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To get part of string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#slice()">\FireHub\Core\Support\Strings\Str::slice()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="Str.md#insert()">\FireHub\Core\Support\Strings\Str::insert()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="Str.md#overwrite()">\FireHub\Core\Support\Strings\Str::overwrite()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="Str.md#truncate()">\FireHub\Core\Support\Strings\Str::truncate()</a>  - <format style="italic">To get part of the current string.</format></li></list>
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
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->carry(3);

// eHub
```
Getting part of string with passed length.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->carry(3, 2);

// eH
```
$from and $length parameters can also be negative.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->carry(-3, -1);

// Hu
```

## method: carryAfter {id="carryafter()"}

<code-block lang="php">
    <![CDATA[public Str::carryAfter(string $find)]]>
</code-block>













### ### Carry from part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1334">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1334">
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
        <list><li><a href="static.md#carry()">\FireHub\Core\Support\Strings\static::carry()</a>  - <format style="italic">To get the last part for string.</format></li><li><a href="static.md#indexof()">\FireHub\Core\Support\Strings\static::indexOf()</a>  - <format style="italic">To get position of $find.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length for $find.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryAfter('Web ');

// App
```

## method: carryAfterLast {id="carryafterlast()"}

<code-block lang="php">
    <![CDATA[public Str::carryAfterLast(string $find)]]>
</code-block>













### ### Carry from the last part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1410">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1410">
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
        <list><li><a href="static.md#carry()">\FireHub\Core\Support\Strings\static::carry()</a>  - <format style="italic">To get the last part for string.</format></li><li><a href="static.md#lastindexof()">\FireHub\Core\Support\Strings\static::lastIndexOf()</a>  - <format style="italic">To get lst position of $find.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length for $find.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryAfter('Web ');

// App
```

## method: insert {id="insert()"}

<code-block lang="php">
    <![CDATA[public Str::insert(string $string, int $position)]]>
</code-block>













### ### Inserts string at the position provided



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1459">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1459">
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
        <list><li><a href="Str.md#carry()">\FireHub\Core\Support\Strings\Str::carry()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append $string argument.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> - <format style="italic">
String to insert.
</format></li><li>int <format style="bold">$position</format> - <format style="italic">
Position where string will be inserted.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->insert('=', 2);

// Fi=reHub
```

## method: move {id="move()"}

<code-block lang="php">
    <![CDATA[public Str::move(int $from, int $length, int $to)]]>
</code-block>













### ### Move part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1487">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1487">
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
        <list><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To get part of string.</format></li><li><a href="StrMB.md#firstposition()">\FireHub\Core\Support\LowLevel\StrMB::firstPosition()</a>  - <format style="italic">To find the position of the first occurrence for a substring in a string.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get string length.</format></li></list>
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $from is greater than $until.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->move(0, 2, 4);

// reFiHub
```

## method: overwrite {id="overwrite()"}

<code-block lang="php">
    <![CDATA[public Str::overwrite(int $from, int $until, string $with)]]>
</code-block>













### ### Overwrite with part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1524">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1524">
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
        <list><li><a href="Str.md#carry()">\FireHub\Core\Support\Strings\Str::carry()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append $string argument.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To remove current string.</format></li></list>
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $from is greater than $until.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->overwrite(2, 4, '=');

// Fi=Hub
```

## method: replace {id="replace()"}

<code-block lang="php">
    <![CDATA[public Str::replace(string $find, string $with)]]>
</code-block>













### ### Replace all occurrences of the search string with the replacement string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1549">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1549">
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
        <list><li><a href="self.md#expression()">\FireHub\Core\Support\Strings\self::expression()</a>  - <format style="italic">As regular expression.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#humanize()">\FireHub\Core\Support\Strings\Str::humanize()</a>  - <format style="italic">To replace underscore and forbidden words.</format></li><li><a href="Str.md#tidy()">\FireHub\Core\Support\Strings\Str::tidy()</a>  - <format style="italic">To replace all occurrences of the search string with the replacement string.</format></li></list>
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
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->replace('H', 'X');

// FireXub

## method: replaceRecursive {id="replacerecursive()"}

<code-block lang="php">
    <![CDATA[public Str::replaceRecursive(array $rules)]]>
</code-block>













### ### Replace all occurrences recursively of search in a subject replaced with the given replacement value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1574">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1574">
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
        <list><li><a href="static.md#replace()">\FireHub\Core\Support\Strings\static::replace()</a>  - <format style="italic">To replace all occurrences of the search string with the replacement string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$rules</format> - <format style="italic">
Find => Replace pattern rules.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('1122')->replaceRecursive(['1' => '2', '2' => '1']);

// 1111

## method: repeat {id="repeat()"}

<code-block lang="php">
    <![CDATA[public Str::repeat(int $times, string $separator = &#039;&#039;)]]>
</code-block>













### ### Repeat a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1608">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1608">
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
        <list><li><a href="StrMB.md#repeat()">\FireHub\Core\Support\LowLevel\StrMB::repeat()</a>  - <format style="italic">To repeat a string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$times</format> - <format style="italic">
Number of time the input string should be repeated.
If the $times is set to 0 or less, the function will return empty string.
</format></li><li>string <format style="bold">$separator</format> = '' - <format style="italic">[optional] 
Separator in between any repeated string.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->repeat(3);

// FireHubFireHubFireHubFireHub
```
With custom separator.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->repeat(3, '-');

// FireHub-FireHub-FireHub-FireHub
```

## method: reverse {id="reverse()"}

<code-block lang="php">
    <![CDATA[public Str::reverse():$this]]>
</code-block>













### ### Reverse order of characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1635">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1635">
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
        <list><li><a href="Str.md#chop()">\FireHub\Core\Support\Strings\Str::chop()</a>  - <format style="italic">To chop a string to an array.</format></li><li><a href="StrMB.md#implode()">\FireHub\Core\Support\LowLevel\StrMB::implode()</a>  - <format style="italic">To join string characters.</format></li><li><a href="Arr.md#reverse()">\FireHub\Core\Support\LowLevel\Arr::reverse()</a>  - <format style="italic">To reverse string characters.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->reverse();

// buHeriF
```

## method: pad {id="pad()"}

<code-block lang="php">
    <![CDATA[public Str::pad(int $length, string $pad = &quot; &quot;, \FireHub\Core\Support\Enums\Side $side = Side::BOTH)]]>
</code-block>













### ### Pad a string to a certain length with another string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1677">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1677">
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
        <list><li><a href="Side.md#right">\FireHub\Core\Support\Enums\Side::RIGHT</a>  - <format style="italic">As parameter.</format></li><li><a href="Side.md#left">\FireHub\Core\Support\Enums\Side::LEFT</a>  - <format style="italic">As parameter.</format></li><li><a href="Side.md#both">\FireHub\Core\Support\Enums\Side::BOTH</a>  - <format style="italic">As parameter.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Str::length()</a>  - <format style="italic">To get string length.</format></li><li><a href="StrMB.md#repeat()">\FireHub\Core\Support\LowLevel\StrMB::repeat()</a>  - <format style="italic">To repeat a string.</format></li><li><a href="NumInt.md#floor()">\FireHub\Core\Support\LowLevel\NumInt::floor()</a>  - <format style="italic">To round fractions down.</format></li><li><a href="NumInt.md#ceil()">\FireHub\Core\Support\LowLevel\NumInt::ceil()</a>  - <format style="italic">To round fractions up.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To add masked string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$length</format> - <format style="italic">
If the value of pad_length is negative, less than, or equal to the length of the input string,
no padding takes place.
</format></li><li>string <format style="bold">$pad</format> = " " - <format style="italic">[optional] 
The pad may be truncated if the required number of padding characters can't be evenly divided by the pad's
length.
</format></li><li><a href="Side.md">\FireHub\Core\Support\Enums\Side</a> <format style="bold">$side</format> = Side::BOTH - <format style="italic">[optional] 
Pad side.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the pad is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from('FireHub')->pad(10, '_');

// ___FireHub
```
With side argument.
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from('FireHub')->pad(10, '-', Side::RIGHT);

// FireHub---
```

## method: mask {id="mask()"}

<code-block lang="php">
    <![CDATA[public Str::mask(\FireHub\Core\Support\Contracts\HighLevel\Characters $with, int $from, ?int $length = null)]]>
</code-block>













### ### Mask a portion of a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1716">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1716">
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
        <list><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To get string segment to mask.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get masked string length.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Strings\Str::length()</a>  - <format style="italic">To get current string length.</format></li><li><a href="Str.md#overwrite()">\FireHub\Core\Support\Strings\Str::overwrite()</a>  - <format style="italic">To remove current string.</format></li><li><a href="Str.md#pad()">\FireHub\Core\Support\Strings\Str::pad()</a>  - <format style="italic">To add masked string.</format></li><li><a href="Str.md#prepend()">\FireHub\Core\Support\Strings\Str::prepend()</a>  - <format style="italic">To add the first part of the string.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To add the last part the string.</format></li><li><a href="Characters.md#string()">\FireHub\Core\Support\Contracts\HighLevel\Characters::string()</a>  - <format style="italic">To add character to pad.</format></li></list>
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
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web App')->mask(Char::from('*'), 5, 3);

// FireH***Web App
```

## method: prepend {id="prepend()"}

<code-block lang="php">
    <![CDATA[public Str::prepend(string $prefix)]]>
</code-block>













### ### Prepends the given string to the current string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1750">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1750">
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
        <list><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To add the first part of the string.</format></li><li><a href="Str.md#surround()">\FireHub\Core\Support\Strings\Str::surround()</a>  - <format style="italic">To prepend $with argument.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$prefix</format> - <format style="italic">
The prefix to prepend.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->prepend('Text-');

// Text-FireHub
```

## method: append {id="append()"}

<code-block lang="php">
    <![CDATA[public Str::append(string $suffix)]]>
</code-block>













### ### Appends the given string to the current string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1772">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1772">
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
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">To append words.</format></li><li><a href="Str.md#insert()">\FireHub\Core\Support\Strings\Str::insert()</a>  - <format style="italic">To append $string argument.</format></li><li><a href="Str.md#overwrite()">\FireHub\Core\Support\Strings\Str::overwrite()</a>  - <format style="italic">To append $string argument.</format></li><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To add the last part the string.</format></li><li><a href="Str.md#surround()">\FireHub\Core\Support\Strings\Str::surround()</a>  - <format style="italic">To append $with argument.</format></li><li><a href="Str.md#quote()">\FireHub\Core\Support\Strings\Str::quote()</a>  - <format style="italic">To append words.</format></li><li><a href="Str.md#truncate()">\FireHub\Core\Support\Strings\Str::truncate()</a>  - <format style="italic">To append $with argument at the end of the current string.

 @example
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->truncate(10);

// FireHub We
```</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$suffix</format> - <format style="italic">
The suffix to append.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->append('-text');

// FireHub-text
```

## method: ensurePrefix {id="ensureprefix()"}

<code-block lang="php">
    <![CDATA[public Str::ensurePrefix(string $prefix)]]>
</code-block>













### ### Makes sure that the current string starts with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1797">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1797">
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
        <list><li><a href="Str.md#startswith()">\FireHub\Core\Support\Str::startsWith()</a>  - <format style="italic">To check if a string starts with a given value.</format></li><li><a href="Str.md#prepend()">\FireHub\Core\Support\Str::prepend()</a>  - <format style="italic">To prepend the given string to the current string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$prefix</format> - <format style="italic">
The prefix to make sure it exists.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->ensureStartsWith('The ');

// The FireHub
```

## method: ensureSuffix {id="ensuresuffix()"}

<code-block lang="php">
    <![CDATA[public Str::ensureSuffix(string $suffix)]]>
</code-block>













### ### Makes sure that the current string ends with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1820">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1820">
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
        <list><li><a href="Str.md#endswith()">\FireHub\Core\Support\Str::endsWith()</a>  - <format style="italic">To check if a string ends with a given value.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Str::append()</a>  - <format style="italic">To append the given string to the current string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$suffix</format> - <format style="italic">
The suffix to make sure it exists.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->ensureEndsWith(' Framework');

// FireHub Framework
```

## method: removePrefix {id="removeprefix()"}

<code-block lang="php">
    <![CDATA[public Str::removePrefix(string $prefix)]]>
</code-block>













### ### Makes sure that the current string doesn't start with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1844">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1844">
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
        <list><li><a href="Str.md#startswith()">\FireHub\Core\Support\Str::startsWith()</a>  - <format style="italic">To check if a string starts with a given $prefix.</format></li><li><a href="Str.md#carry()">\FireHub\Core\Support\Str::carry()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get $prefix length.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$prefix</format> - <format style="italic">
The prefix to make sure exists.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->removePrefix('Fire');

// Hub
```

## method: removeSuffix {id="removesuffix()"}

<code-block lang="php">
    <![CDATA[public Str::removeSuffix(string $suffix)]]>
</code-block>













### ### Makes sure that the current string doesn't end with the given text



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1870">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1870">
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
        <list><li><a href="Str.md#endswith()">\FireHub\Core\Support\Str::endsWith()</a>  - <format style="italic">To check if a string ends with a given $suffix.</format></li><li><a href="Str.md#carry()">\FireHub\Core\Support\Str::carry()</a>  - <format style="italic">To carry with part of the string.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Str::length()</a>  - <format style="italic">To get string length.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get $suffix length.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$suffix</format> - <format style="italic">
The suffix to make sure exists.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->removeSuffix('Hub');

// Fire

## method: surround {id="surround()"}

<code-block lang="php">
    <![CDATA[public Str::surround(string $with)]]>
</code-block>













### Surrounds string with the given substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1895">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1895">
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
        <list><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append $with argument.</format></li><li><a href="Str.md#prepend()">\FireHub\Core\Support\Strings\Str::prepend()</a>  - <format style="italic">To prepend $with argument.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#quote()">\FireHub\Core\Support\Strings\Str::quote()</a>  - <format style="italic">To surround any word with $with argument.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$with</format> - <format style="italic">
The substring to add to both sides.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->surround('-');

// -FireHub-
```

## method: shuffle {id="shuffle()"}

<code-block lang="php">
    <![CDATA[public Str::shuffle()]]>
</code-block>













### ### Randomly shuffles a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1920">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1920">
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
        <list><li><a href="Arr.md#range()">\FireHub\Core\Support\LowLevel\Arr::range()</a>  - <format style="italic">To create an array containing a range of elements.</format></li><li><a href="Arr.md#shuffle()">\FireHub\Core\Support\LowLevel\Arr::shuffle()</a>  - <format style="italic">To shuffle an array.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Str::length()</a>  - <format style="italic">To get string length.</format></li><li><a href="Str.md#part()">\FireHub\Core\Support\Str::part()</a>  - <format style="italic">To get part of string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->shuffle();

// rHiuebF
```

## method: quote {id="quote()"}

<code-block lang="php">
    <![CDATA[public Str::quote(string $with)]]>
</code-block>













### ### Wraps each word in the string with specified quote



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1958">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1958">
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
        <list><li><a href="Str.md#streamline()">\FireHub\Core\Support\Strings\Str::streamline()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#from()">\FireHub\Core\Support\Strings\Str::from()</a>  - <format style="italic">To create string from any word.</format></li><li><a href="Str.md#surround()">\FireHub\Core\Support\Strings\Str::surround()</a>  - <format style="italic">To surround any word with $with argument.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append words.</format></li><li><a href="StrMB.md#implode()">\FireHub\Core\Support\LowLevel\StrMB::implode()</a>  - <format style="italic">To join words with $with argument as new string.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$with</format> - <format style="italic">
String to quote with.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $with argument is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->quote(-);

// -FireHub- -Web- -App-
```

## method: trim {id="trim()"}

<code-block lang="php">
    <![CDATA[public Str::trim(\FireHub\Core\Support\Enums\Side $side = Side::BOTH, string $characters = &quot; 
	 &quot;)]]>
</code-block>













### ### Strip whitespace (or other characters) from the beginning and end of a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2012">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2012">
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
        <list><li><a href="Side.md#both">\FireHub\Core\Support\Enums\Side::BOTH</a>  - <format style="italic">As parameter.</format></li><li><a href="StrMB.md#trim()">\FireHub\Core\Support\LowLevel\StrMB::trim()</a>  - <format style="italic">To strip whitespace (or other characters) from the string.</format></li></list>
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
```php
use FireHub\Core\Support\Str;

Str::from(" FireHub \n\r")->trim();

// FireHub
```
Trim only left side with first parameter.
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from("FireHub \n\r")->trim(Side::LEFT);

// FireHub \n\r
```
Trim with a custom set of characters.
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from("FireHub \n\r")->trim(Side::RIGHT, "\n\r ");

// FireHub
```

## method: truncate {id="truncate()"}

<code-block lang="php">
    <![CDATA[public Str::truncate(int $length, string $with = &#039;&#039;)]]>
</code-block>













### ### Truncates the string to a given length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2050">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2050">
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
        <list><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length of $with argument.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Strings\Str::length()</a>  - <format style="italic">To get length of current string.</format></li><li><a href="Str.md#carry()">\FireHub\Core\Support\Strings\Str::carry()</a>  - <format style="italic">To get part of the current string.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append $with argument at the end of the current string.

 @example
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->truncate(10);

// FireHub We
```</format></li></list>
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $with argument is equal or larger than $length argument.</format></li></list>
    </def>
</deflist>
Truncate with string at the end.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->truncate(10, '...');

// FireHub...
```

## method: safeTruncate {id="safetruncate()"}

<code-block lang="php">
    <![CDATA[public Str::safeTruncate(int $length, string $with)]]>
</code-block>













### ### Truncates the string to a given length, while ensuring that it does not split words



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2085">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2085">
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
        <list><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length of $with argument.</format></li><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To part of the string.</format></li><li><a href="StrMB.md#firstposition()">\FireHub\Core\Support\LowLevel\StrMB::firstPosition()</a>  - <format style="italic">To find the position of the first occurrence for a substring in a string.</format></li><li><a href="StrMB.md#lastposition()">\FireHub\Core\Support\LowLevel\StrMB::lastPosition()</a>  - <format style="italic">To find the position of the last occurrence for a substring in a string.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Strings\Str::length()</a>  - <format style="italic">To get length of current string.</format></li></list>
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $with argument is equal or larger than $length argument.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web Application')->safeTruncate(17, '...');

// FireHub Web...
```

## method: first {id="first()"}

<code-block lang="php">
    <![CDATA[public Str::first()]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Change when toChars() method refactors with Collection.</format></p>
            </tip>

### ### Get first character of string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2120">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2120">
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
        <list><li><a href="Str.md#tochars()">\FireHub\Core\Support\Strings\Str::toChars()</a>  - <format style="italic">To break string into characters.</format></li><li><a href="Arr.md#firstkey()">\FireHub\Core\Support\LowLevel\Arr::firstKey()</a>  - <format style="italic">To get the first key of string.</format></li><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
## method: last {id="last()"}

<code-block lang="php">
    <![CDATA[public Str::last()]]>
</code-block>











<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Change when toChars() method refactors with Collection.</format></p>
            </tip>

### ### Get last character of string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2139">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2139">
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
        <list><li><a href="Str.md#tochars()">\FireHub\Core\Support\Strings\Str::toChars()</a>  - <format style="italic">To break string into characters.</format></li><li><a href="Arr.md#lastkey()">\FireHub\Core\Support\LowLevel\Arr::lastKey()</a>  - <format style="italic">To get the last key of string.</format></li><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
## method: chop {id="chop()"}

<code-block lang="php">
    <![CDATA[public Str::chop(int $length = 1)]]>
</code-block>













### ### Chop a string to an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2173">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2173">
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
        <list><li><a href="StrMB.md#split()">\FireHub\Core\Support\LowLevel\StrMB::split()</a>  - <format style="italic">To return an array of string characters.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#reverse()">\FireHub\Core\Support\Strings\Str::reverse()</a>  - <format style="italic">To chop a string to an array.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$length</format> = 1 - <format style="italic">[optional] 
Maximum length of the chunk.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If length is less than 1.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->chop();

// ['F', 'i', 'r', 'e', 'H', 'u', 'b']
```
Splitting string by custom length.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->chop(3);

// ['Fir', 'eHu', 'b']
```

## method: breakWithAny {id="breakwithany()"}

<code-block lang="php">
    <![CDATA[public Str::breakWithAny(array $characters, int $limit = MAX)]]>
</code-block>













### ### Break string with any of separators



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2230">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2230">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$characters</format> - <format style="italic">
<code>non-empty-string[]</code>
The boundary characters.
</format></li><li>int <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web Application')->breakWithAny([Char::from('e'), Char::from('p')]);

// ['Fir', 'Hub W', 'b A', '', 'lication']
```

## method: split {id="split()"}

<code-block lang="php">
    <![CDATA[public Str::split(string $with, int $limit = MAX)]]>
</code-block>













### ### Split string with a separator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2254">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2254">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$with</format> - <format style="italic">
The boundary string.
</format></li><li>int <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->split('H');

// ['Fire' 'Hub']
```

## method: splitBeforeAny {id="splitbeforeany()"}

<code-block lang="php">
    <![CDATA[public Str::splitBeforeAny(array $characters, int $limit = MAX)]]>
</code-block>













### ### Split string before any of separators



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2279">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2279">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$characters</format> - <format style="italic">
The boundary characters.
</format></li><li>int <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web Application')->splitBeforeAny([Char::from('W'), Char::from('A')]);

// ['FireHub ', 'Web ', 'App']
```

## method: splitAfterAny {id="splitafterany()"}

<code-block lang="php">
    <![CDATA[public Str::splitAfterAny(array $characters, int $limit = MAX)]]>
</code-block>













### ### Split string after any of separators



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2304">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2304">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$characters</format> - <format style="italic">
<code>non-empty-string[]</code>
The boundary characters.
</format></li><li>int <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web Application')->splitAfterAny([Char::from('W'), Char::from('A')]);

// ['FireHub W', 'eb A', 'pplication']
```

## method: group {id="group()"}

<code-block lang="php">
    <![CDATA[public Str::group(int $number_of_groups)]]>
</code-block>













### ### Group a string into chunks



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2331">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2331">
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
        <list><li><a href="Str.md#chop()">\FireHub\Core\Support\Str::chop()</a>  - <format style="italic">To chop a string to an array.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Str::length()</a>  - <format style="italic">To get string length.</format></li><li><a href="NumInt.md#ceil()">\FireHub\Core\Support\LowLevel\NumInt::ceil()</a>  - <format style="italic">To round fractions up for division of length and number of groups.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$number_of_groups</format> - <format style="italic">
The size of each chunk.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If number of groups is less than one.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->group(3);

// ['Fir', 'eHu', 'b']
```

## method: length {id="length()"}

<code-block lang="php">
    <![CDATA[public Str::length()]]>
</code-block>













### ### Get string length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2377">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2377">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0 - @uses \FireHub\Core\Support\LowLevel\StrMB::length() To get string length.</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To get current string length.</format></li><li><a href="Str.md#truncate()">\FireHub\Core\Support\Strings\Str::truncate()</a>  - <format style="italic">To get length of current string.</format></li><li><a href="Str.md#safetruncate()">\FireHub\Core\Support\Strings\Str::safeTruncate()</a>  - <format style="italic">To get length of current string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->length();

// 7
```

## method: charAt {id="charat()"}

<code-block lang="php">
    <![CDATA[public Str::charAt(int $index)]]>
</code-block>













### ### Find the character at the provider position



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2443">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2443">
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If character index is out of range.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->charAt(4);

// H
```

## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Str::__toString()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2465">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2465">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

echo Str::from('FireHub');

// FireHub
```
