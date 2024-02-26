```php
final class \FireHub\Core\Support\Char()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Character high-level class

_Class allows you to manipulate characters in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Char**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L34)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Char.php)**</sub>


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
|public|<a href="#__tostring()">__toString</a>||

<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Char::__construct(string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L57)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L57)**</sub>
#### Parameters

* string **$character** - _<code>non-empty-string</code>
Character to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If char is not a single character._
#### Returns

* void
#### Links

* [https://en.wikipedia.org/wiki/List_of_Unicode_characters](https://en.wikipedia.org/wiki/List_of_Unicode_characters) - _List of codepoint values._
<h2><a name="from()"># method: from</a></h2>

```php
public static Char::from(string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self
```











### ### Create a new character from raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L98)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L98)**</sub>
#### Parameters

* string **$character** - _<code>non-empty-string</code>
Character to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If character si empty._
#### Returns

* self - _New character._
#### Examples
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

<h2><a name="fromcodepoint()"># method: fromCodepoint</a></h2>

```php
public static Char::fromCodepoint(int $codepoint, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self
```











### ### Create a new character from raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L150)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L150)**</sub>
#### Parameters

* int **$codepoint** - _Codepoint to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If a character is empty or codepoint could not be converted to character, or codepoint could not be
converted to character._
#### Returns

* self - _New character._
#### Examples
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

<h2><a name="islower()"># method: isLower</a></h2>

```php
public Char::isLower()
```











### ### Checks if character is lowercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L179)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L179)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isLower();

// false
```

<h2><a name="isupper()"># method: isUpper</a></h2>

```php
public Char::isUpper()
```











### ### Checks if character is uppercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L203)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L203)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isUpper();

// true
```

<h2><a name="isalphabetic()"># method: isAlphabetic</a></h2>

```php
public Char::isAlphabetic()
```











### ### Checks if character is alphabetic



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L227)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L227)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isAlphabetic();

// true
```

<h2><a name="isalphanumeric()"># method: isAlphanumeric</a></h2>

```php
public Char::isAlphanumeric()
```











### ### Checks if character is alphanumeric



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L251)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L251)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isAlphanumeric();

// true
```

<h2><a name="isblank()"># method: isBlank</a></h2>

```php
public Char::isBlank()
```











### ### Checks if character is whitespace



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L275)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L275)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isBlank();

// false
```

<h2><a name="isnumeric()"># method: isNumeric</a></h2>

```php
public Char::isNumeric()
```











### ### Checks if character is numeric



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L299)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L299)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isNumeric();

// false
```

<h2><a name="ishexadecimal()"># method: isHexadecimal</a></h2>

```php
public Char::isHexadecimal()
```











### ### Checks if character is hexadecimal



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L323)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L323)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isHexadecimal();

// true
```

<h2><a name="iscontrol()"># method: isControl</a></h2>

```php
public Char::isControl()
```











### ### Checks if character is control code



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L347)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L347)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isControl();

// false
```

<h2><a name="isprintable()"># method: isPrintable</a></h2>

```php
public Char::isPrintable()
```











### ### Checks if character is printable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L379)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L379)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
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

<h2><a name="isgraphical()"># method: isGraphical</a></h2>

```php
public Char::isGraphical()
```











### ### Checks if character is graphical



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L411)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L411)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
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

<h2><a name="ispunctuation()"># method: isPunctuation</a></h2>

```php
public Char::isPunctuation()
```











### ### Checks if character is punctuation



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L435)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L435)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isPunctuation();

// false
```

<h2><a name="issymbol()"># method: isSymbol</a></h2>

```php
public Char::isSymbol()
```











### ### Checks if character is a symbol



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L461)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L461)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isSymbol();

// false
```

<h2><a name="isascii()"># method: isASCII</a></h2>

```php
public Char::isASCII()
```











### ### Checks if character is ASCII



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L484)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L484)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->isASCII();

// true
```

<h2><a name="encoding()"># method: encoding</a></h2>

```php
public Char::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):$this|\FireHub\Core\Support\Enums\String\Encoding
```











### ### Change character encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L512)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L512)**</sub>
#### Parameters

* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _Character encoding._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current encoding._
* [\ValueError](./Wiki-ValueError) - _If the value of encoding is an invalid encoding._
#### Returns

* $this or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) - _This character or current encoding._
#### Examples
```php
use FireHub\Core\Support\Char;
use FireHub\Core\Support\Enums\String\Encoding;

Char::from('F')->encoding(Encoding::UTF_8);
```

<h2><a name="tolower()"># method: toLower</a></h2>

```php
public Char::toLower()
```











### ### Make a character lowercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L543)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L543)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

Char::fromString('F')->toLower();

// f
```

<h2><a name="toupper()"># method: toUpper</a></h2>

```php
public Char::toUpper()
```











### ### Make a character uppercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L572)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L572)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

Char::fromString('f')->toUpper();

// F
```

<h2><a name="string()"># method: string</a></h2>

```php
public Char::string()
```











### ### Get character as raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L598)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L598)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('F')->string();

// F
```

<h2><a name="codepoint()"># method: codepoint</a></h2>

```php
public Char::codepoint()
```











### ### Get character as codepoint



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L624)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L624)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If character could not be converted to codepoint._
#### Examples
```php
use FireHub\Core\Support\Char;

$char = Char::fromString('F');

echo $char->codepoint();

// 70
```

<h2><a name="__tostring()"># method: __toString</a></h2>

```php
public Char::__toString()
```















><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L675)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L675)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

echo Char::from('F');

// F
```
