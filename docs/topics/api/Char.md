<title># Char</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Char()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







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
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L34">
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
|public|<a href="#encoding()">encoding</a>|### Change character encoding|
|public|<a href="#tolower()">toLower</a>|### Make a character lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a character uppercase|
|public|<a href="#string()">string</a>|### Get character as raw string|
|public|<a href="#codepoint()">codepoint</a>|### Get character as codepoint|
|private|<a href="#regexmatch()">regexMatch</a>|### Perform a regular expression match|
|public|<a href="#__tostring()">__toString</a>||

## property: character {id="$character"}

<code-block lang="php">
    <![CDATA[private string $character]]>
</code-block>















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
## property: encoding {id="$encoding"}

<code-block lang="php">
    <![CDATA[private ?\FireHub\Core\Support\Enums\String\Encoding $encoding = null]]>
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
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Char::__construct(string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L57">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L98">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L98">
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
        <list><li><a href="Str.md#iscapitalized()">\FireHub\Core\Support\Str::isCapitalized()</a>  - <format style="italic">To create character from string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L150">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L150">
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

## method: isLower {id="islower()"}

<code-block lang="php">
    <![CDATA[public Char::isLower()]]>
</code-block>













### ### Checks if character is lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L179">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L179">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isLower();

// false
```

## method: isUpper {id="isupper()"}

<code-block lang="php">
    <![CDATA[public Char::isUpper()]]>
</code-block>













### ### Checks if character is uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L203">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L203">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#iscapitalized()">\FireHub\Core\Support\Str::isCapitalized()</a>  - <format style="italic">To check if a first letter of the string is uppercased.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isUpper();

// true
```

## method: isAlphabetic {id="isalphabetic()"}

<code-block lang="php">
    <![CDATA[public Char::isAlphabetic()]]>
</code-block>













### ### Checks if character is alphabetic



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L227">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L227">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isAlphabetic();

// true
```

## method: isAlphanumeric {id="isalphanumeric()"}

<code-block lang="php">
    <![CDATA[public Char::isAlphanumeric()]]>
</code-block>













### ### Checks if character is alphanumeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L251">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L251">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Char.md#issymbol()">\FireHub\Core\Support\Char::isSymbol()</a>  - <format style="italic">To check if the character is alphanumeric.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isAlphanumeric();

// true
```

## method: isBlank {id="isblank()"}

<code-block lang="php">
    <![CDATA[public Char::isBlank()]]>
</code-block>













### ### Checks if character is whitespace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L275">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L275">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Char.md#issymbol()">\FireHub\Core\Support\Char::isSymbol()</a>  - <format style="italic">To check if the character is whitespace.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isBlank();

// false
```

## method: isNumeric {id="isnumeric()"}

<code-block lang="php">
    <![CDATA[public Char::isNumeric()]]>
</code-block>













### ### Checks if character is numeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L299">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L299">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isNumeric();

// false
```

## method: isHexadecimal {id="ishexadecimal()"}

<code-block lang="php">
    <![CDATA[public Char::isHexadecimal()]]>
</code-block>













### ### Checks if character is hexadecimal



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L323">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L323">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isHexadecimal();

// true
```

## method: isControl {id="iscontrol()"}

<code-block lang="php">
    <![CDATA[public Char::isControl()]]>
</code-block>













### ### Checks if character is control code



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L347">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L347">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Char.md#issymbol()">\FireHub\Core\Support\Char::isSymbol()</a>  - <format style="italic">To check if the character is control code.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isControl();

// false
```

## method: isPrintable {id="isprintable()"}

<code-block lang="php">
    <![CDATA[public Char::isPrintable()]]>
</code-block>













### ### Checks if character is printable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L379">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L379">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isPrintable();

// true
```
Space is also printable.
```php
use FireHub\Core\Support\Char;

Char::from(' ')->isPrintable();

// true
```

## method: isGraphical {id="isgraphical()"}

<code-block lang="php">
    <![CDATA[public Char::isGraphical()]]>
</code-block>













### ### Checks if character is graphical



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L411">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L411">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isGraphical();

// true
```
Space is not graphical.
```php
use FireHub\Core\Support\Char;

Char::from(' ')->isGraphical();

// false
```

## method: isPunctuation {id="ispunctuation()"}

<code-block lang="php">
    <![CDATA[public Char::isPunctuation()]]>
</code-block>













### ### Checks if character is punctuation



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L435">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L435">
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
        <list><li><a href="Char.md#regexmatch()">\FireHub\Core\Support\Char::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isPunctuation();

// false
```

## method: isSymbol {id="issymbol()"}

<code-block lang="php">
    <![CDATA[public Char::isSymbol()]]>
</code-block>













### ### Checks if character is a symbol



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L461">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L461">
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
        <list><li><a href="Char.md#isalphanumeric()">\FireHub\Core\Support\Char::isAlphanumeric()</a>  - <format style="italic">To check if the character is alphanumeric.</format></li><li><a href="Char.md#isblank()">\FireHub\Core\Support\Char::isBlank()</a>  - <format style="italic">To check if the character is whitespace.</format></li><li><a href="Char.md#iscontrol()">\FireHub\Core\Support\Char::isControl()</a>  - <format style="italic">To check if the character is control code.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isSymbol();

// false
```

## method: isASCII {id="isascii()"}

<code-block lang="php">
    <![CDATA[public Char::isASCII()]]>
</code-block>













### ### Checks if character is ASCII



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L484">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L484">
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
        <list><li><a href="StrMB.md#checkencoding()">\FireHub\Core\Support\LowLevel\StrMB::checkEncoding()</a>  - <format style="italic">To check if character is valid ASCII.</format></li><li><a href="Encoding.md#ascii">\FireHub\Core\Support\Enums\String\Encoding::ASCII</a>  - <format style="italic">As string encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::from('F')->isASCII();

// true
```

## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Char::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):$this|\FireHub\Core\Support\Enums\String\Encoding]]>
</code-block>













### ### Change character encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L512">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L512">
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
<deflist>
    <def title="This method returns:">
        <list><li>$this or <a href="Encoding.md">\FireHub\Core\Support\Enums\String\Encoding</a> - <format style="italic">This character or current encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;
use FireHub\Core\Support\Enums\String\Encoding;

Char::from('F')->encoding(Encoding::UTF_8);
```

## method: toLower {id="tolower()"}

<code-block lang="php">
    <![CDATA[public Char::toLower()]]>
</code-block>













### ### Make a character lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L543">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L543">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert string.</format></li><li><a href="CaseFolding.md#lower">\FireHub\Core\Support\Enums\String\CaseFolding::LOWER</a>  - <format style="italic">To lowercase string.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L572">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L572">
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
        <list><li><a href="StrMB.md#convert()">\FireHub\Core\Support\LowLevel\StrMB::convert()</a>  - <format style="italic">To convert string.</format></li><li><a href="CaseFolding.md#upper">\FireHub\Core\Support\Enums\String\CaseFolding::UPPER</a>  - <format style="italic">To uppercase string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Char;

Char::fromString('f')->toUpper();

// F
```

## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Char::string()]]>
</code-block>













### ### Get character as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L598">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L598">
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

Char::from('F')->string();

// F
```

## method: codepoint {id="codepoint()"}

<code-block lang="php">
    <![CDATA[public Char::codepoint()]]>
</code-block>













### ### Get character as codepoint



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L624">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L624">
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

## method: regexMatch {id="regexmatch()"}

<code-block lang="php">
    <![CDATA[private Char::regexMatch(string $pattern):bool]]>
</code-block>













### ### Perform a regular expression match

<p><format style="italic">Searches subject for a match to the regular expression given in a pattern.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L647">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L647">
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
        <list><li><a href="RegexMB.md#encoding()">\FireHub\Core\Support\LowLevel\RegexMB::encoding()</a>  - <format style="italic">To set character encoding for multibyte regex.</format></li><li><a href="RegexMB.md#match()">\FireHub\Core\Support\LowLevel\RegexMB::match()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Char.md#islower()">\FireHub\Core\Support\Char::isLower()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#isupper()">\FireHub\Core\Support\Char::isUpper()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#isalphabetic()">\FireHub\Core\Support\Char::isAlphabetic()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#isalphanumeric()">\FireHub\Core\Support\Char::isAlphanumeric()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#isblank()">\FireHub\Core\Support\Char::isBlank()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#isnumeric()">\FireHub\Core\Support\Char::isNumeric()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#ishexadecimal()">\FireHub\Core\Support\Char::isHexadecimal()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#iscontrol()">\FireHub\Core\Support\Char::isControl()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#isprintable()">\FireHub\Core\Support\Char::isPrintable()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#isgraphical()">\FireHub\Core\Support\Char::isGraphical()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Char.md#ispunctuation()">\FireHub\Core\Support\Char::isPunctuation()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string matches the regular expression pattern, false if not.</format></li></list>
    </def>
</deflist>
## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Char::__toString()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L675">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L675">
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
