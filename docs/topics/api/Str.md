<title># Str</title>

<code-block lang="php">
<![CDATA[abstract class \FireHub\Core\Support\Strings\Str()]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> class that cannot be instantiated directly.
    </p>
</tip>





### ### String high-level abstract class

<p><format style="italic">Class allows you to manipulate strings in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Strings\Str
    </def><def title="Implements:">
        <list><li><a href="Init.md">\FireHub\Core\Base\Init</a></li><li><a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="Concrete.md">\FireHub\Core\Base\Trait\Concrete</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L50">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/firehub.Str.php">
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
|protected|<a href="#$string">string</a>|### String to use|&#039;&#039;|
|protected|<a href="#$encoding">encoding</a>|Character encoding|null|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#from()">from</a>|### Create a new string from raw string|
|public static |<a href="#fromlist()">fromList</a>|### Create a new string from array elements with a string|
|public|<a href="#expression()">expression</a>|### Regular expression|
|public|<a href="#insertvalue()">insertValue</a>|### value on string|
|public|<a href="#tochars()">toChars</a>|### Break string into characters|
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
|public|<a href="#__tostring()">__toString</a>|### Gets a string representation of the object|
|inherited public|<a href="#jsonserialize()">jsonSerialize</a>||
|inherited public|<a href="#__serialize()">__serialize</a>||
|inherited public|<a href="#__unserialize()">__unserialize</a>||

## property: string {id="$string"}

<code-block lang="php">
    <![CDATA[protected string $string = &#039;&#039;]]>
</code-block>











### ### String to use



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L64">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L64">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L72">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L72">
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
    <![CDATA[abstract public Str::__construct(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> method that cannot be instantiated directly.
    </p>
</tip>





### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L90">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L90">
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
## method: from {id="from()"}

<code-block lang="php">
    <![CDATA[public static Str::from(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static]]>
</code-block>













### ### Create a new string from raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L122">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L122">
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
Creating a new string with specific encoding.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L169">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L169">
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
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the array item couldn&#039;t be converted to string.</format></li></list>
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

## method: expression {id="expression()"}

<code-block lang="php">
    <![CDATA[public Str::expression(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers)]]>
</code-block>













### ### Regular expression



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L186">
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
        <list><li><a href="Modifier.md#multibyte">\FireHub\Core\Support\Enums\String\Expression\Modifier::MULTIBYTE</a>  - <format style="italic">As default modifier.</format></li><li><a href="Expression.md">\FireHub\Core\Support\Strings\Expression</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#streamline()">\FireHub\Core\Support\Strings\Str::streamline()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#quote()">\FireHub\Core\Support\Strings\Str::quote()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#breakwithany()">\FireHub\Core\Support\Strings\Str::breakWithAny()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#split()">\FireHub\Core\Support\Strings\Str::split()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#splitbeforeany()">\FireHub\Core\Support\Strings\Str::splitBeforeAny()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#splitafterany()">\FireHub\Core\Support\Strings\Str::splitAfterAny()</a>  - <format style="italic">As regular expression.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>variadic <a href="Modifier.md">\FireHub\Core\Support\Enums\String\Expression\Modifier</a> <format style="bold">$modifiers</format> - <format style="italic">
List of additional expression pattern modifiers.
</format></li></list>
    </def>
</deflist>
## method: insertValue {id="insertvalue()"}

<code-block lang="php">
    <![CDATA[public Str::insertValue(string $value)]]>
</code-block>













### ### value on string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L199">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L199">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L220">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L220">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L246">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L246">
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

## method: startsWith {id="startswith()"}

<code-block lang="php">
    <![CDATA[public Str::startsWith(string $value)]]>
</code-block>













### ### Checks if a string starts with a given value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L268">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L268">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->startsWith('Fire');

// true
```

## method: startsWithAny {id="startswithany()"}

<code-block lang="php">
    <![CDATA[public Str::startsWithAny(string ...$values)]]>
</code-block>













### ### Checks if a string starts with any of the given values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L290">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L290">
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

## method: endsWith {id="endswith()"}

<code-block lang="php">
    <![CDATA[public Str::endsWith(string $value)]]>
</code-block>













### ### Checks if a string ends with a given value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L315">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L315">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->endsWith('Hub');

// true
```

## method: endsWithAny {id="endswithany()"}

<code-block lang="php">
    <![CDATA[public Str::endsWithAny(string ...$values)]]>
</code-block>













### ### Checks if a string ends with any of the given values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L337">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L337">
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

## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public Str::contains(string $value)]]>
</code-block>













### ### Checks if string contains a value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L362">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L362">
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
        <list><li><a href="StrMB.md#contains()">\FireHub\Core\Support\LowLevel\StrMB::contains()</a>  - <format style="italic">To check if a string contains a value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$value</format> - <format style="italic">
The value to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->contains('ire');

// true
```

## method: containsAll {id="containsall()"}

<code-block lang="php">
    <![CDATA[public Str::containsAll(string ...$values)]]>
</code-block>













### ### Checks if string contains all values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L384">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L384">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L409">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L409">
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

## method: equals {id="equals()"}

<code-block lang="php">
    <![CDATA[public Str::equals(string $value)]]>
</code-block>













### ### Checks if string equals value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L432">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L432">
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
The value to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->equals('FireHub');

// true
```

## method: equalsAny {id="equalsany()"}

<code-block lang="php">
    <![CDATA[public Str::equalsAny(string ...$values)]]>
</code-block>













### ### Checks if string equals to any of the values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L454">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L454">
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













### ### Checks if a string matches a given pattern



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L477">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L477">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L506">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L506">
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
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we couldn&#039;t get current encoding.</format></li><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If the value of encoding is an invalid encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\String\Encoding;

Str::from('FireHub')->encoding(Encoding::UTF_8);
```

## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Str::string(?string $string = null)]]>
</code-block>













### ### Get or set string as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L544">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L544">
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
        <list><li>null or string <format style="bold">$string</format> = null - <format style="italic">[optional] 
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L571">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L571">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L596">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L596">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L621">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L621">
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













### ### Make the first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L647">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L647">
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













### ### Make the first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L677">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L677">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L708">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L708">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L740">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L740">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L773">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L773">
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
        <list><li><a href="Conjunction.md#shorts()">\FireHub\Core\Support\Enums\String\Words\Conjunction::shorts()</a>  - <format style="italic">To get a list of all short conjunctions.</format></li><li><a href="Preposition.md#shorts()">\FireHub\Core\Support\Enums\String\Words\Preposition::shorts()</a>  - <format style="italic">To get a list of all short prepositions.</format></li><li><a href="Str.md#streamline()">\FireHub\Core\Support\Strings\Str::streamline()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#from()">\FireHub\Core\Support\Strings\Str::from()</a>  - <format style="italic">To create string from any word.</format></li><li><a href="Str.md#capitalize()">\FireHub\Core\Support\Strings\Str::capitalize()</a>  - <format style="italic">To capitalize each word.</format></li><li><a href="Str.md#decapitalize()">\FireHub\Core\Support\Strings\Str::deCapitalize()</a>  - <format style="italic">To deCapitalize each word.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append words.</format></li><li><a href="Arr.md#inarray()">\FireHub\Core\Support\LowLevel\Arr::inArray()</a>  - <format style="italic">Check if the word is inside an ignore list.</format></li><li><a href="StrMB.md#implode()">\FireHub\Core\Support\LowLevel\StrMB::implode()</a>  - <format style="italic">To join words with $with argument as a new string.</format></li><li><a href="Arr.md#merge()">\FireHub\Core\Support\LowLevel\Arr::merge()</a>  - <format style="italic">To merge all ignored cases.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L814">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L814">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L836">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L836">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L858">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L858">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L881">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L881">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L906">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L906">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L933">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L933">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L955">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L955">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L979">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L979">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1006">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1006">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1041">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1041">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1070">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1070">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1114">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1114">
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
You can use the optional second parameter to specify tags which shouldn't be stripped.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('<p>FireHub</p>')->stripTags();

// FireHub
```
With the $allowed_tags parameter, you allow certain tags to be excluded from the strip.
```php
use FireHub\Core\Support\Str;

Str::from('<p><i><a>FireHub</a></i></p>')->stripTags('<p>');

// <p>FireHub</p>
```
Alternatively, you can use an array in $allowed_tags parameter to allow multiple tags.
```php
use FireHub\Core\Support\Str;

Str::from('<p><i><a>FireHub</a></i></p>')->stripTags(['<p>', '<a>']);

// <p><a>FireHub</a></p>
```

## method: quoteMeta {id="quotemeta()"}

<code-block lang="php">
    <![CDATA[public Str::quoteMeta()]]>
</code-block>













### ### Quote meta-characters



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1138">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1138">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1162">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1162">
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
        <list><li><a href="Str.md#carryfrom()">\FireHub\Core\Support\Strings\Str::carryFrom()</a>  - <format style="italic">To carry from part of the string.</format></li><li><a href="Str.md#carryuntillast()">\FireHub\Core\Support\Strings\Str::carryUntilLast()</a>  - <format style="italic">To carry until the last part of a string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1184">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1184">
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
        <list><li><a href="Str.md#carryfrom()">\FireHub\Core\Support\Strings\Str::carryFrom()</a>  - <format style="italic">To carry from part of the string.</format></li><li><a href="Str.md#carryuntil()">\FireHub\Core\Support\Strings\Str::carryUntil()</a>  - <format style="italic">To carry until the part of a string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1206">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1206">
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
        <list><li><a href="Str.md#carryfromlast()">\FireHub\Core\Support\Strings\Str::carryFromLast()</a>  - <format style="italic">To carry from the last part of the string.</format></li><li><a href="Str.md#carryuntillast()">\FireHub\Core\Support\Strings\Str::carryUntilLast()</a>  - <format style="italic">To carry until the last part of a string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1246">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1246">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1291">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1291">
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
        <list><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To get part of a string.</format></li></list>
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

## method: carryFrom {id="carryfrom()"}

<code-block lang="php">
    <![CDATA[public Str::carryFrom(string $find)]]>
</code-block>













### ### Carry from part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1315">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1315">
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
    <def title="This method is used by:">
        <list><li><a href="Str.md#between()">\FireHub\Core\Support\Strings\Str::between()</a>  - <format style="italic">To carry from part of the string.</format></li><li><a href="Str.md#betweenfirst()">\FireHub\Core\Support\Strings\Str::betweenFirst()</a>  - <format style="italic">To carry from part of the string.</format></li></list>
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

Str::from('FireHub Web App')->carryFrom('Web');

// Web App
```

## method: carryAfter {id="carryafter()"}

<code-block lang="php">
    <![CDATA[public Str::carryAfter(string $find)]]>
</code-block>













### ### Carry from part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1343">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1343">
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
        <list><li><a href="static.md#carry()">\FireHub\Core\Support\Strings\static::carry()</a>  - <format style="italic">To get the last part for string.</format></li><li><a href="static.md#indexof()">\FireHub\Core\Support\Strings\static::indexOf()</a>  - <format style="italic">To get the position of $find.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length for $find.</format></li></list>
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

## method: carryUntil {id="carryuntil()"}

<code-block lang="php">
    <![CDATA[public Str::carryUntil(string $find)]]>
</code-block>













### ### Carry until part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1365">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1365">
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
    <def title="This method is used by:">
        <list><li><a href="Str.md#betweenfirst()">\FireHub\Core\Support\Strings\Str::betweenFirst()</a>  - <format style="italic">To carry until the part of a string.</format></li></list>
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

Str::from('FireHub Web App')->carryUntil('Web');

// FireHub
```

## method: carryFromLast {id="carryfromlast()"}

<code-block lang="php">
    <![CDATA[public Str::carryFromLast(string $find)]]>
</code-block>













### ### Carry from the last part of a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1391">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1391">
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
    <def title="This method is used by:">
        <list><li><a href="Str.md#betweenlast()">\FireHub\Core\Support\Strings\Str::betweenLast()</a>  - <format style="italic">To carry from the last part of the string.</format></li></list>
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

Str::from('FireHub Web App')->carryFromLast('Web');

// Web App
```

## method: carryAfterLast {id="carryafterlast()"}

<code-block lang="php">
    <![CDATA[public Str::carryAfterLast(string $find)]]>
</code-block>













### ### Carry from the last part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1419">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1419">
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
        <list><li><a href="static.md#carry()">\FireHub\Core\Support\Strings\static::carry()</a>  - <format style="italic">To get the last part for string.</format></li><li><a href="static.md#lastindexof()">\FireHub\Core\Support\Strings\static::lastIndexOf()</a>  - <format style="italic">To get the last position of $find.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length for $find.</format></li></list>
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

## method: carryUntilLast {id="carryuntillast()"}

<code-block lang="php">
    <![CDATA[public Str::carryUntilLast(string $find)]]>
</code-block>













### ### Carry until the last part of a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1441">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1441">
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
    <def title="This method is used by:">
        <list><li><a href="Str.md#between()">\FireHub\Core\Support\Strings\Str::between()</a>  - <format style="italic">To carry until the last part of a string.</format></li><li><a href="Str.md#betweenlast()">\FireHub\Core\Support\Strings\Str::betweenLast()</a>  - <format style="italic">To carry until the last part of a string.</format></li></list>
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

Str::from('FireHub Web App')->carryUntilLast('Web');

// FireHub
```

## method: insert {id="insert()"}

<code-block lang="php">
    <![CDATA[public Str::insert(string $string, int $position)]]>
</code-block>













### ### Inserts string at the position provided



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1468">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1468">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1496">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1496">
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
        <list><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To get part of a string.</format></li><li><a href="StrMB.md#firstposition()">\FireHub\Core\Support\LowLevel\StrMB::firstPosition()</a>  - <format style="italic">To find the position of the first occurrence for a substring in a string.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get string length.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1533">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1533">
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
        <list><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To remove the current string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1558">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1558">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1583">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1583">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1617">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1617">
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
If the $times are set to 0 or less, the function will return an empty string.
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
With a custom separator.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1644">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1644">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1686">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1686">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1725">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1725">
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
        <list><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To get string segment to mask.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get masked string length.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Strings\Str::length()</a>  - <format style="italic">To get the current string length.</format></li><li><a href="Str.md#overwrite()">\FireHub\Core\Support\Strings\Str::overwrite()</a>  - <format style="italic">To remove the current string.</format></li><li><a href="Str.md#pad()">\FireHub\Core\Support\Strings\Str::pad()</a>  - <format style="italic">To add masked string.</format></li><li><a href="Str.md#prepend()">\FireHub\Core\Support\Strings\Str::prepend()</a>  - <format style="italic">To add the first part of the string.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To add the last part to the string.</format></li><li><a href="Characters.md#string()">\FireHub\Core\Support\Contracts\HighLevel\Characters::string()</a>  - <format style="italic">To add character to pad.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1759">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1759">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1781">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1781">
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
        <list><li><a href="Str.md#titleize()">\FireHub\Core\Support\Strings\Str::titleize()</a>  - <format style="italic">To append words.</format></li><li><a href="Str.md#insert()">\FireHub\Core\Support\Strings\Str::insert()</a>  - <format style="italic">To append $string argument.</format></li><li><a href="Str.md#overwrite()">\FireHub\Core\Support\Strings\Str::overwrite()</a>  - <format style="italic">To append $string argument.</format></li><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To add the last part to the string.</format></li><li><a href="Str.md#surround()">\FireHub\Core\Support\Strings\Str::surround()</a>  - <format style="italic">To append $with argument.</format></li><li><a href="Str.md#quote()">\FireHub\Core\Support\Strings\Str::quote()</a>  - <format style="italic">To append words.</format></li><li><a href="Str.md#truncate()">\FireHub\Core\Support\Strings\Str::truncate()</a>  - <format style="italic">To append $with an argument at the end of the current string.

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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1806">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1806">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1829">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1829">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1853">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1853">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1879">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1879">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1904">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1904">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1929">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1929">
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
        <list><li><a href="Arr.md#range()">\FireHub\Core\Support\LowLevel\Arr::range()</a>  - <format style="italic">To create an array containing a range of elements.</format></li><li><a href="Arr.md#shuffle()">\FireHub\Core\Support\LowLevel\Arr::shuffle()</a>  - <format style="italic">To shuffle an array.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Str::length()</a>  - <format style="italic">To get string length.</format></li><li><a href="Str.md#part()">\FireHub\Core\Support\Str::part()</a>  - <format style="italic">To get part of a string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1967">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1967">
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
        <list><li><a href="Str.md#streamline()">\FireHub\Core\Support\Strings\Str::streamline()</a>  - <format style="italic">To streamline string.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As regular expression.</format></li><li><a href="Str.md#from()">\FireHub\Core\Support\Strings\Str::from()</a>  - <format style="italic">To create string from any word.</format></li><li><a href="Str.md#surround()">\FireHub\Core\Support\Strings\Str::surround()</a>  - <format style="italic">To surround any word with $with argument.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append words.</format></li><li><a href="StrMB.md#implode()">\FireHub\Core\Support\LowLevel\StrMB::implode()</a>  - <format style="italic">To join words with $with argument as a new string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2021">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2021">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2059">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2059">
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
        <list><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length of $with argument.</format></li><li><a href="Str.md#length()">\FireHub\Core\Support\Strings\Str::length()</a>  - <format style="italic">To get length of current string.</format></li><li><a href="Str.md#carry()">\FireHub\Core\Support\Strings\Str::carry()</a>  - <format style="italic">To get part of the current string.</format></li><li><a href="Str.md#append()">\FireHub\Core\Support\Strings\Str::append()</a>  - <format style="italic">To append $with an argument at the end of the current string.

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













### ### Truncates the string to a given length while ensuring that it doesn't split words



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2094">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2094">
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

### ### Get the first character of string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2129">
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

### ### Get the last character of string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2148">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2148">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2182">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2182">
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
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the length is less than 1.</format></li></list>
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

## method: break {id="break()"}

<code-block lang="php">
    <![CDATA[public Str::break(string $with, int $limit = MAX)]]>
</code-block>













### ### Break string with a separator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2215">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2215">
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
        <list><li><a href="MAX.md">\FireHub\Core\Support\Constants\Number\MAX</a>  - <format style="italic">To set maximum PHP integer.</format></li><li><a href="Arr.md#filter()">\FireHub\Core\Support\LowLevel\Arr::filter()</a>  - <format style="italic">To filter out empty strings.</format></li><li><a href="StrMB.md#explode()">\FireHub\Core\Support\LowLevel\StrMB::explode()</a>  - <format style="italic">To split a string by a string.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get substring length.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$with</format> - <format style="italic">
The boundary string.
</format></li><li>int <format style="bold">$limit</format> = MAX - <format style="italic">[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is negative, all components except the last – limit are returned.
If the limit parameter is zero, then this is treated as 1.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->break('H');

// ['Fire' 'ub']
```
Splitting string by custom length.
```php
use FireHub\Core\Support\Str;

Str::from('FireHubFireHubFireHub')->break('H', 2);

// ['Fire' 'hbFireHubFireHub']
```

## method: breakWithAny {id="breakwithany()"}

<code-block lang="php">
    <![CDATA[public Str::breakWithAny(array $characters, int $limit = MAX)]]>
</code-block>













### ### Break string with any of separators



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2239">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2239">
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
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2263">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2263">
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
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2288">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2288">
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
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2313">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2313">
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
If the limit is set and positive, the returned array will contain a maximum of limit elements with
the last element containing the rest of the string.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2340">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2340">
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
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the number of groups is less than one.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->group(3);

// ['Fir', 'eHu', 'b']
```

## method: containTimes {id="containtimes()"}

<code-block lang="php">
    <![CDATA[public Str::containTimes(string $value)]]>
</code-block>













### ### Checks how mny times string contains value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2364">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2364">
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
The value to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->containTimes('b');

// 2
```

## method: length {id="length()"}

<code-block lang="php">
    <![CDATA[public Str::length()]]>
</code-block>













### ### Get string length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2386">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2386">
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
        <list><li><a href="Str.md#mask()">\FireHub\Core\Support\Strings\Str::mask()</a>  - <format style="italic">To get the current string length.</format></li><li><a href="Str.md#truncate()">\FireHub\Core\Support\Strings\Str::truncate()</a>  - <format style="italic">To get length of current string.</format></li><li><a href="Str.md#safetruncate()">\FireHub\Core\Support\Strings\Str::safeTruncate()</a>  - <format style="italic">To get length of current string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->length();

// 7
```

## method: indexOf {id="indexof()"}

<code-block lang="php">
    <![CDATA[public Str::indexOf(string $find)]]>
</code-block>













### ### Find the position of the first occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2408">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2408">
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
        <list><li><a href="StrMB.md#firstposition()">\FireHub\Core\Support\LowLevel\StrMB::firstPosition()</a>  - <format style="italic">To find the position of the first occurrence for a substring in a string.</format></li></list>
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

Str::from('FireHub Web App')->indexOf('Web');

// 8
```

## method: lastIndexOf {id="lastindexof()"}

<code-block lang="php">
    <![CDATA[public Str::lastIndexOf(string $find)]]>
</code-block>













### ### Find the position of the last occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2430">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2430">
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
        <list><li><a href="StrMB.md#lastposition()">\FireHub\Core\Support\LowLevel\StrMB::lastPosition()</a>  - <format style="italic">To find the position of the last occurrence for a substring in a string.</format></li></list>
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

Str::from('FireHub Web App')->lastIndexOf('e');

// 9
```

## method: charAt {id="charat()"}

<code-block lang="php">
    <![CDATA[public Str::charAt(int $index)]]>
</code-block>













### ### Find the character at the provider position



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2452">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2452">
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
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If the character index is out of range.</format></li></list>
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













### ### Gets a string representation of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2474">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2474">
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