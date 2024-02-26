<title># Str</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Str()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### String high-level class

<p><format style="italic">Class allows you to manipulate strings in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Str
    </def><def title="Implements:">
        <list><li><a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L34">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Str.php">
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
|private|<a href="#$string">string</a>|||
|private|<a href="#$encoding">encoding</a>||null|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#from()">from</a>|### Create a new string from raw string|
|public static |<a href="#fromlist()">fromList</a>|### Create a new string from array elements with a string|
|public|<a href="#isempty()">isEmpty</a>|### Checks if string is empty|
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
|public|<a href="#iscapitalized()">isCapitalized</a>|### Checks if first character of string uppercased|
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
|public|<a href="#encoding()">encoding</a>|### Change character encoding|
|public|<a href="#carry()">carry</a>|### Carry with part of the string|
|public|<a href="#string()">string</a>|### Get string as raw string|
|private|<a href="#regexmatch()">regexMatch</a>|### Perform a regular expression match|
|public|<a href="#__tostring()">__toString</a>||

## property: string {id="$string"}

<code-block lang="php">
    <![CDATA[private string $string]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L50">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L50">
                    View blame
                </a>
            </def></deflist>
## property: encoding {id="$encoding"}

<code-block lang="php">
    <![CDATA[private ?\FireHub\Core\Support\Enums\String\Encoding $encoding = null]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L51">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L51">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Str::__construct(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L49">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L49">
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
    <![CDATA[public static Str::from(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self]]>
</code-block>













### ### Create a new string from raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L81">
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
        <list><li>self - <format style="italic">New string.</format></li></list>
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
    <![CDATA[public static Str::fromList(array|\FireHub\Core\Support\Contracts\HighLevel\Collectable $list, string $glue = &#039;&#039;, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self]]>
</code-block>













### ### Create a new string from array elements with a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L128">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L128">
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
        <list><li>self - <format style="italic">New string containing a string representation of all the array elements in the same order,
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

## method: isEmpty {id="isempty()"}

<code-block lang="php">
    <![CDATA[final public Str::isEmpty():bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if string is empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L154">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L154">
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
        <list><li><a href="DataIs.md">\FireHub\Core\Support\LowLevel\DataIs</a>  - <format style="italic">To check if a string is numeric.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#iscapitalized()">\FireHub\Core\Support\Str::isCapitalized()</a>  - <format style="italic">To check if the current string is empty.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is empty, false otherwise.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isEmpty();

// false
```

## method: isLower {id="islower()"}

<code-block lang="php">
    <![CDATA[final public Str::isLower()]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if string is lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L175">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L175">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isLower();

// false

## method: isUpper {id="isupper()"}

<code-block lang="php">
    <![CDATA[public Str::isUpper()]]>
</code-block>













### ### Checks if string is uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L199">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L199">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isUpper();

// false
```

## method: isAlphabetic {id="isalphabetic()"}

<code-block lang="php">
    <![CDATA[public Str::isAlphabetic()]]>
</code-block>













### ### Checks if string is alphabetic



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L223">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L223">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isAlphabetic();

// true
```

## method: isAlphanumeric {id="isalphanumeric()"}

<code-block lang="php">
    <![CDATA[public Str::isAlphanumeric()]]>
</code-block>













### ### Checks if string is alphanumeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L247">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L247">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isAlphanumeric();

// true
```

## method: isBlank {id="isblank()"}

<code-block lang="php">
    <![CDATA[public Str::isBlank()]]>
</code-block>













### ### Checks if string is whitespace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L271">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L271">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isBlank();

// false
```

## method: isNumeric {id="isnumeric()"}

<code-block lang="php">
    <![CDATA[public Str::isNumeric()]]>
</code-block>













### ### Checks if string is numeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L295">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L295">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isNumeric();

// false
```

## method: isHexadecimal {id="ishexadecimal()"}

<code-block lang="php">
    <![CDATA[public Str::isHexadecimal()]]>
</code-block>













### ### Checks if string is hexadecimal



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L319">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L319">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isHexadecimal();

// true
```

## method: isControl {id="iscontrol()"}

<code-block lang="php">
    <![CDATA[public Str::isControl()]]>
</code-block>













### ### Checks if string is control code



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L343">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L343">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isControl();

// false
```

## method: isPrintable {id="isprintable()"}

<code-block lang="php">
    <![CDATA[public Str::isPrintable()]]>
</code-block>













### ### Checks if string is printable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L375">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L375">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isPrintable();

// true
```
Space is also printable.
```php
use FireHub\Core\Support\Str;

Str::from(' ')->isPrintable();

// true
```

## method: isGraphical {id="isgraphical()"}

<code-block lang="php">
    <![CDATA[public Str::isGraphical()]]>
</code-block>













### ### Checks if string is graphical



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L408">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L408">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isGraphical();

// true
```
Space is not graphical.
```php
use FireHub\Core\Support\Str;

Str::from(' ')->isGraphical();

// false
```

## method: isPunctuation {id="ispunctuation()"}

<code-block lang="php">
    <![CDATA[public Str::isPunctuation()]]>
</code-block>













### ### Checks if string is punctuation



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L432">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L432">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isPunctuation();

// false
```

## method: isASCII {id="isascii()"}

<code-block lang="php">
    <![CDATA[public Str::isASCII()]]>
</code-block>













### ### Checks if string is ASCII



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L455">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L455">
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
use FireHub\Core\Support\Str;

Str::from('FireHub')->isASCII();

// true
```

## method: isCapitalized {id="iscapitalized()"}

<code-block lang="php">
    <![CDATA[final public Str::isCapitalized():bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if first character of string uppercased



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L480">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L480">
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
        <list><li><a href="Str.md#isempty()">\FireHub\Core\Support\Str::isEmpty()</a>  - <format style="italic">To check if the current string is empty.</format></li><li><a href="Char.md#from()">\FireHub\Core\Support\Char::from()</a>  - <format style="italic">To create character from string.</format></li><li><a href="Char.md#isupper()">\FireHub\Core\Support\Char::isUpper()</a>  - <format style="italic">To check if a first letter of the string is uppercased.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if string is capitalized, false otherwise.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isCapitalized();

// true
```

## method: hasLower {id="haslower()"}

<code-block lang="php">
    <![CDATA[final public Str::hasLower()]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if string has lowercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L502">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L502">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasLower();

// true

## method: hasUpper {id="hasupper()"}

<code-block lang="php">
    <![CDATA[public Str::hasUpper()]]>
</code-block>













### ### Checks if string has uppercase



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L526">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L526">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasUpper();

// true
```

## method: hasAlphabetic {id="hasalphabetic()"}

<code-block lang="php">
    <![CDATA[public Str::hasAlphabetic()]]>
</code-block>













### ### Checks if string has alphabetic



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L550">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L550">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasAlphabetic();

// true
```

## method: hasAlphanumeric {id="hasalphanumeric()"}

<code-block lang="php">
    <![CDATA[public Str::hasAlphanumeric()]]>
</code-block>













### ### Checks if string has alphanumeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L574">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L574">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasAlphanumeric();

// true
```

## method: hasBlank {id="hasblank()"}

<code-block lang="php">
    <![CDATA[public Str::hasBlank()]]>
</code-block>













### ### Checks if string has whitespace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L598">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L598">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasBlank();

// false
```

## method: hasNumeric {id="hasnumeric()"}

<code-block lang="php">
    <![CDATA[public Str::hasNumeric()]]>
</code-block>













### ### Checks if string has numeric



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L622">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L622">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasNumeric();

// false
```

## method: hasHexadecimal {id="hashexadecimal()"}

<code-block lang="php">
    <![CDATA[public Str::hasHexadecimal()]]>
</code-block>













### ### Checks if string has hexadecimal



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L646">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L646">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasHexadecimal();

// true
```

## method: hasControl {id="hascontrol()"}

<code-block lang="php">
    <![CDATA[public Str::hasControl()]]>
</code-block>













### ### Checks if string has control code



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L670">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L670">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasControl();

// false
```

## method: hasPrintable {id="hasprintable()"}

<code-block lang="php">
    <![CDATA[public Str::hasPrintable()]]>
</code-block>













### ### Checks if string has printable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L702">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L702">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isPrintable();

// true
```
Space is also printable.
```php
use FireHub\Core\Support\Str;

Str::from(' ')->hasPrintable();

// true
```

## method: hasGraphical {id="hasgraphical()"}

<code-block lang="php">
    <![CDATA[public Str::hasGraphical()]]>
</code-block>













### ### Checks if string has graphical



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L735">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L735">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isGraphical();

// true
```
Space is not graphical.
```php
use FireHub\Core\Support\Str;

Str::from(' ')->hasGraphical();

// false
```

## method: hasPunctuation {id="haspunctuation()"}

<code-block lang="php">
    <![CDATA[public Str::hasPunctuation()]]>
</code-block>













### ### Checks if string has punctuation



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L759">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L759">
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
        <list><li><a href="Str.md#regexmatch()">\FireHub\Core\Support\Str::regexMatch()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get current regex encoding.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasPunctuation();

// false
```

## method: encoding {id="encoding()"}

<code-block lang="php">
    <![CDATA[public Str::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):$this|\FireHub\Core\Support\Enums\String\Encoding]]>
</code-block>













### ### Change character encoding



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L787">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L787">
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
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\String\Encoding;

Str::from('FireHub')->encoding(Encoding::UTF_8);
```

## method: carry {id="carry()"}

<code-block lang="php">
    <![CDATA[public Str::carry(int $from, ?int $length = null)]]>
</code-block>













### ### Carry with part of the string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L833">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L833">
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
$from parameter can also be negative.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->carry(-3, 2);

// Hu
```

## method: string {id="string()"}

<code-block lang="php">
    <![CDATA[public Str::string():string]]>
</code-block>













### ### Get string as raw string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L856">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L856">
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
        <list><li>string - <format style="italic">String as string.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->string();

// FireHub
```

## method: regexMatch {id="regexmatch()"}

<code-block lang="php">
    <![CDATA[private Str::regexMatch(string $pattern):bool]]>
</code-block>













### ### Perform a regular expression match

<p><format style="italic">Searches subject for a match to the regular expression given in a pattern.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L879">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L879">
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
        <list><li><a href="RegexMB.md#encoding()">\FireHub\Core\Support\LowLevel\RegexMB::encoding()</a>  - <format style="italic">To set string encoding for multibyte regex.</format></li><li><a href="RegexMB.md#match()">\FireHub\Core\Support\LowLevel\RegexMB::match()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#islower()">\FireHub\Core\Support\Str::isLower()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#isupper()">\FireHub\Core\Support\Str::isUpper()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#isalphabetic()">\FireHub\Core\Support\Str::isAlphabetic()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#isalphanumeric()">\FireHub\Core\Support\Str::isAlphanumeric()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#isblank()">\FireHub\Core\Support\Str::isBlank()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#isnumeric()">\FireHub\Core\Support\Str::isNumeric()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#ishexadecimal()">\FireHub\Core\Support\Str::isHexadecimal()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#iscontrol()">\FireHub\Core\Support\Str::isControl()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#isprintable()">\FireHub\Core\Support\Str::isPrintable()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#isgraphical()">\FireHub\Core\Support\Str::isGraphical()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#ispunctuation()">\FireHub\Core\Support\Str::isPunctuation()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#haslower()">\FireHub\Core\Support\Str::hasLower()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hasupper()">\FireHub\Core\Support\Str::hasUpper()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hasalphabetic()">\FireHub\Core\Support\Str::hasAlphabetic()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hasalphanumeric()">\FireHub\Core\Support\Str::hasAlphanumeric()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hasblank()">\FireHub\Core\Support\Str::hasBlank()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hasnumeric()">\FireHub\Core\Support\Str::hasNumeric()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hashexadecimal()">\FireHub\Core\Support\Str::hasHexadecimal()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hascontrol()">\FireHub\Core\Support\Str::hasControl()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hasprintable()">\FireHub\Core\Support\Str::hasPrintable()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#hasgraphical()">\FireHub\Core\Support\Str::hasGraphical()</a>  - <format style="italic">To perform a regular expression match.</format></li><li><a href="Str.md#haspunctuation()">\FireHub\Core\Support\Str::hasPunctuation()</a>  - <format style="italic">To perform a regular expression match.</format></li></list>
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
    <![CDATA[public Str::__toString()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L907">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L907">
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
