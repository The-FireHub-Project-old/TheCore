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
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L28">
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
|inherited protected|<a href="#$string">string</a>|||
|inherited protected|<a href="#$encoding">encoding</a>||null|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public|<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|public|<a href="#contains()">contains</a>|### Checks if string contains value|
|public|<a href="#equals()">equals</a>|### Checks if string equals value|
|public|<a href="#carryfrom()">carryFrom</a>|### Carry from part of the string|
|public|<a href="#carryuntil()">carryUntil</a>|### Carry until part of the string|
|public|<a href="#carryfromlast()">carryFromLast</a>|### Carry from the last part of a string|
|public|<a href="#carryuntillast()">carryUntilLast</a>|### Carry until the last part of a string|
|public|<a href="#indexof()">indexOf</a>|### Find the position of the first occurrence of a substring|
|public|<a href="#lastindexof()">lastIndexOf</a>|### Find the position of the last occurrence of a substring|
|inherited public|<a href="#__construct()">__construct</a>|### Constructor|
|inherited public static |<a href="#from()">from</a>|### Create a new string from raw string|
|inherited public static |<a href="#fromlist()">fromList</a>|### Create a new string from array elements with a string|
|inherited public|<a href="#expression()">expression</a>|### Regular expression|
|inherited public|<a href="#startswithany()">startsWithAny</a>|### Checks if a string starts with any of the given values|
|inherited public|<a href="#endswithany()">endsWithAny</a>|### Checks if a string ends with any of the given values|
|inherited public|<a href="#containsall()">containsAll</a>|### Checks if string contains all values|
|inherited public|<a href="#containsany()">containsAny</a>|### Checks if string contains any of the values|
|inherited public|<a href="#equalsany()">equalsAny</a>|### Checks if string equals to any of the values|
|inherited public|<a href="#encoding()">encoding</a>|### Get or change string encoding|
|inherited public|<a href="#string()">string</a>|### Get or set string as raw string|
|inherited public|<a href="#tolower()">toLower</a>|### Make a string lowercase|
|inherited public|<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|inherited public|<a href="#totitle()">toTitle</a>|### Make a string title-case|
|inherited public|<a href="#capitalize()">capitalize</a>|### Make a first character of string uppercased|
|inherited public|<a href="#decapitalize()">deCapitalize</a>|### Make a first character of string uppercased|
|inherited public|<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|inherited public|<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|inherited public|<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public|<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|inherited public|<a href="#slice()">slice</a>|### Slice with part of the string|
|inherited public|<a href="#carry()">carry</a>|### Carry with part of the string|
|inherited public|<a href="#carryafter()">carryAfter</a>|### Carry from part of the string|
|inherited public|<a href="#carryafterlast()">carryAfterLast</a>|### Carry from the last part of the string|
|inherited public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical string value|
|inherited public|<a href="#length()">length</a>|### Get string length|
|inherited public|<a href="#__tostring()">__toString</a>||

## property: string {id="$string"}

<code-block lang="php">
    <![CDATA[protected string $string]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L58">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L58">
                    View blame
                </a>
            </def></deflist>
## property: encoding {id="$encoding"}

<code-block lang="php">
    <![CDATA[protected ?\FireHub\Core\Support\Enums\String\Encoding $encoding = null]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L59">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L59">
                    View blame
                </a>
            </def></deflist>
## method: startsWith {id="startswith()"}

<code-block lang="php">
    <![CDATA[public IStr::startsWith(string $value)]]>
</code-block>













### ### Checks if a string starts with a given value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L48">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L48">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string></code>
The value to search for.
</format></li></list>
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













### ### Checks if a string ends with a given value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L77">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string></code>
The value to search for.
</format></li></list>
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













### ### Checks if string contains value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L106">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L106">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string</code>
The value to search for.
</format></li></list>
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













### ### Checks if string equals value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L134">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L134">
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
        <list><li>string <format style="bold">$value</format> - <format style="italic">
<code>non-empty-string</code>
The value to search for.
</format></li></list>
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













### ### Carry from part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L150">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L150">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
## method: carryUntil {id="carryuntil()"}

<code-block lang="php">
    <![CDATA[public IStr::carryUntil(string $find)]]>
</code-block>













### ### Carry until part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L168">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L168">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
## method: carryFromLast {id="carryfromlast()"}

<code-block lang="php">
    <![CDATA[public IStr::carryFromLast(string $find)]]>
</code-block>













### ### Carry from the last part of a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L186">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
## method: carryUntilLast {id="carryuntillast()"}

<code-block lang="php">
    <![CDATA[public IStr::carryUntilLast(string $find)]]>
</code-block>













### ### Carry until the last part of a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L204">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L204">
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
        <list><li>string <format style="bold">$find</format> - <format style="italic">
String to find.
</format></li></list>
    </def>
</deflist>
## method: indexOf {id="indexof()"}

<code-block lang="php">
    <![CDATA[public IStr::indexOf(string $find)]]>
</code-block>













### ### Find the position of the first occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L231">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L231">
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
        <list><li><a href="StrMB.md#firstposition()">\FireHub\Core\Support\LowLevel\StrMB::firstPosition()</a>  - <format style="italic">To find the position of the first occurrence of a substring in a string.</format></li></list>
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
    <![CDATA[public IStr::lastIndexOf(string $find)]]>
</code-block>













### ### Find the position of the last occurrence of a substring



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L253">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L253">
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
        <list><li><a href="StrMB.md#lastposition()">\FireHub\Core\Support\LowLevel\StrMB::lastPosition()</a>  - <format style="italic">To find the position of the last occurrence of a substring in a string.</format></li></list>
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

## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[final public Str::__construct(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L57">
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
        <list><li>string <format style="bold">$string</format> - <format style="italic">
String to use.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L89">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L89">
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
    <![CDATA[public static Str::fromList(array|\FireHub\Core\Support\Contracts\HighLevel\Collectable $list, string $glue = &#039;&#039;, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static]]>
</code-block>













### ### Create a new string from array elements with a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L136">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L136">
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
        <list><li>array or <a href="Collectable.md">\FireHub\Core\Support\Contracts\HighLevel\Collectable</a> <format style="bold">$list</format> - <format style="italic">
<code><![CDATA[ array<array-key, null|scalar|Stringable>|\FireHub\Core\Support\Contracts\HighLevel\Collectable<int, \FireHub\Core\Support\Str> ]]></code>
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

## method: expression {id="expression()"}

<code-block lang="php">
    <![CDATA[public Str::expression()]]>
</code-block>













### ### Regular expression



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L152">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L152">
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
        <list><li><a href="Expression.md">\FireHub\Core\Support\Strings\Expression</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
## method: startsWithAny {id="startswithany()"}

<code-block lang="php">
    <![CDATA[public Str::startsWithAny(string ...$values)]]>
</code-block>













### ### Checks if a string starts with any of the given values



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L196">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L196">
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
<code>non-empty-string></code>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L243">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L243">
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
<code>non-empty-string></code>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L290">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L290">
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
<code>non-empty-string[]</code>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L315">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L315">
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
<code>non-empty-string[]</code>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L360">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L360">
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
<code>non-empty-string[]</code>
The list of values to search for.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->equalsAny('FireHub', 'Fi');

// true
```

## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Str::encoding(?\FireHub\Core\Support\Enums\String\Encoding $encoding = null)]]>
</code-block>













### ### Get or change string encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L388">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L388">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L426">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L426">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L453">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L453">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L478">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L478">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L503">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L503">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L529">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L529">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To perform case folding on a string.</format></li><li><a href="CaseFolding.md#upper">\FireHub\Core\Support\Enums\String\CaseFolding::UPPER</a>  - <format style="italic">To uppercase the first character of a string.</format></li><li><a href="static.md#carry()">\FireHub\Core\Support\static::carry()</a>  - <format style="italic">To carry parts of the string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L559">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L559">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To perform case folding on a string.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To lowercase the first character of a string.</format></li><li><a href="static.md#carry()">\FireHub\Core\Support\static::carry()</a>  - <format style="italic">To carry parts of the string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->deCapitalize();

// fireHub
```

## method: addSlashes {id="addslashes()"}

<code-block lang="php">
    <![CDATA[public Str::addSlashes()]]>
</code-block>













### ### Quote string with slashes



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L590">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L590">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L619">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L619">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L663">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L663">
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
<code><![CDATA[ null|string|array<int, string> ]]></code>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L687">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L687">
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

## method: slice {id="slice()"}

<code-block lang="php">
    <![CDATA[public Str::slice(int $from, ?int $until = null)]]>
</code-block>













### ### Slice with part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L728">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L728">
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
        <list><li><a href="NumInt.md#max()">\FireHub\Core\Support\LowLevel\NumInt::max()</a>  - <format style="italic">To turn negative $from to 0.</format></li><li><a href="StrMB.md#part()">\FireHub\Core\Support\LowLevel\StrMB::part()</a>  - <format style="italic">To get part of string.</format></li></list>
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
Getting slice of string with passed $until argument.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(3, 5);

// eHu
```
Getting slice of string with negative $until argument.
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L775">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L775">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L827">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L827">
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
        <list><li><a href="static.md#carry()">\FireHub\Core\Support\static::carry()</a>  - <format style="italic">To get last part for string.</format></li><li><a href="static.md#indexof()">\FireHub\Core\Support\static::indexOf()</a>  - <format style="italic">To get position of $find.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length for $find.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L905">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L905">
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
        <list><li><a href="static.md#carry()">\FireHub\Core\Support\static::carry()</a>  - <format style="italic">To get last part for string.</format></li><li><a href="static.md#lastindexof()">\FireHub\Core\Support\static::lastIndexOf()</a>  - <format style="italic">To get lst position of $find.</format></li><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To get length for $find.</format></li></list>
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

## method: asBoolean {id="asboolean()"}

<code-block lang="php">
    <![CDATA[public Str::asBoolean()]]>
</code-block>













### ### Boolean representation of the given logical string value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L953">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L953">
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

Str::from('Yes')->asBoolean();

// true
```

## method: length {id="length()"}

<code-block lang="php">
    <![CDATA[public Str::length()]]>
</code-block>













### ### Get string length



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L973">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L973">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0 - @uses \FireHub\Core\Support\LowLevel\StrMB::length() To get string length.</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->length();

// 7
```

## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Str::__toString()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L1037">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L1037">
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
