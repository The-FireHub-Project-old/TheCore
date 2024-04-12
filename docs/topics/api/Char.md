<title># Char</title>

<code-block lang="php">
<![CDATA[class \FireHub\Core\Support\Char()]]>
</code-block>













### ### Character high-level class

<p><format style="italic">Class allows you to manipulate characters in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Char
    </def><def title="Implements:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L35">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Char.php">
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
|private|<a href="#$character">character</a>|||
|private|<a href="#$encoding">encoding</a>||null|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#from()">from</a>|### Create a new character from raw string|
|public static |<a href="#fromcodepoint()">fromCodepoint</a>|### Create a new character from raw string|
|public|<a href="#expression()">expression</a>|### Regular expression|
|public|<a href="#encoding()">encoding</a>|### Get or change character encoding|
|public|<a href="#string()">string</a>|### Get character as raw string|
|public|<a href="#tolower()">toLower</a>|### Make a character lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a character uppercase|
|public|<a href="#codepoint()">codepoint</a>|### Get character as codepoint|
|public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical character value|
|public|<a href="#__tostring()">__toString</a>||

## property: character {id="$character"}

<code-block lang="php">
    <![CDATA[private string $character]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L59">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L59">
                    View blame
                </a>
            </def></deflist>
## property: encoding {id="$encoding"}

<code-block lang="php">
    <![CDATA[private ?\FireHub\Core\Support\Enums\String\Encoding $encoding = null]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L60">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L60">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Char::__construct(string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L58">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L58">
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
        <list><li><a href="StrMB.md#length()">\FireHub\Core\Support\LowLevel\StrMB::length()</a>  - <format style="italic">To check the length of the provided character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$character</format> - <format style="italic">
<code>non-empty-string</code>
Character to use.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If char is not a single character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
<deflist>
    <def title="Useful links:">
        <list><li><a href="https://en.wikipedia.org/wiki/List_of_Unicode_characters">https://en.wikipedia.org/wiki/List_of_Unicode_characters</a> - <format style="italic">List of codepoint values.</format></li></list>
    </def>
</deflist>
## method: from {id="from()"}

<code-block lang="php">
    <![CDATA[public static Char::from(string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self]]>
</code-block>













### ### Create a new character from raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L99">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L99">
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
        <list><li>string <format style="bold">$character</format> - <format style="italic">
<code>non-empty-string</code>
Character to use.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If character si empty.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>self - <format style="italic">New character.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F');
```
Creating new character with specific encoding.
```php
use FireHub\Core\Support\Char;
use FireHub\Core\Support\Enums\String\Encoding;

Char::from('F', Encoding::UTF_8);
```

## method: fromCodepoint {id="fromcodepoint()"}

<code-block lang="php">
    <![CDATA[public static Char::fromCodepoint(int $codepoint, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self]]>
</code-block>













### ### Create a new character from raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L151">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L151">
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
        <list><li><a href="CharMB.md#chr()">\FireHub\Core\Support\LowLevel\CharMB::chr()</a>  - <format style="italic">To get character from codepoint parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$codepoint</format> - <format style="italic">
Codepoint to use.
</format></li><li>null or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> <format style="bold">$encoding</format> = null - <format style="italic">[optional] 
Character encoding. If it is null, the internal character encoding value will be used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a character is empty or codepoint could not be converted to character, or codepoint could not be
converted to character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>self - <format style="italic">New character.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from(70);

echo $char->string();

// F
```
Creating new character with specific encoding.
```php
use FireHub\Core\Support\Char;
use FireHub\Core\Support\Enums\String\Encoding;

$char = Char::from(269, Encoding::UTF_8);

echo $char->string();

// č

$char = Char::from(196, Encoding::ISO_8859_1);

echo $char->string();

// č
```

## method: expression {id="expression()"}

<code-block lang="php">
    <![CDATA[public Char::expression()]]>
</code-block>













### ### Regular expression



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L169">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L169">
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
## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Char::encoding(?\FireHub\Core\Support\Enums\String\Encoding $encoding = null)]]>
</code-block>













### ### Get or change character encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L194">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L194">
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
Character encoding.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current encoding.</format></li><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If the value of encoding is an invalid encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;
use FireHub\Core\Support\Enums\String\Encoding;

Char::from('F')->encoding(Encoding::UTF_8);
```

## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Char::string(string $string = null)]]>
</code-block>













### ### Get character as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L233">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L233">
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
        <list><li><a href="Char.md#from">\FireHub\Core\Support\Char::from</a>  - <format style="italic">To create a new character if $string argument is present.</format></li><li><a href="DataIs.md#null()">\FireHub\Core\Support\LowLevel\DataIs::null()</a>  - <format style="italic">To check if $string is null or not.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$string</format> = null</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->string();

// F
```
Set the character.
```php
use FireHub\Core\Support\Char;

Char::from('F')->string('X');

// X
```

## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public Char::toLower()]]>
</code-block>













### ### Make a character lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L258">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L258">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert character.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To lowercase character.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::fromString('F')->toLower();

// f
```

## method: toUpper {id="toupper()"}

<code-block lang="php">
    <![CDATA[public Char::toUpper()]]>
</code-block>













### ### Make a character uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L283">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L283">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert character.</format></li><li><a href="CaseFolding.md#upper">\FireHub\Core\Support\Enums\String\CaseFolding::UPPER</a>  - <format style="italic">To uppercase character.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::fromString('f')->toUpper();

// F
```

## method: codepoint {id="codepoint()"}

<code-block lang="php">
    <![CDATA[public Char::codepoint()]]>
</code-block>













### ### Get character as codepoint



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L311">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L311">
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
        <list><li><a href="CharMB.md#ord">\FireHub\Core\Support\LowLevel\CharMB::ord</a>  - <format style="italic">To get codepoint value from character.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If character could not be converted to codepoint.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

$char = Char::fromString('F');

echo $char->codepoint();

// 70
```

## method: asBoolean {id="asboolean()"}

<code-block lang="php">
    <![CDATA[public Char::asBoolean()]]>
</code-block>













### ### Boolean representation of the given logical character value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L331">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L331">
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

## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Char::__toString()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L349">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L349">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

echo Char::from('F');

// F
```
