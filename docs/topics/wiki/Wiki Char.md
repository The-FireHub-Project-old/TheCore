```php
class \FireHub\Core\Support\Char()
```











### ### Character high-level class

_Class allows you to manipulate characters in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Char**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L37)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Char.php)**</sub>


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
|public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical character value|
|public|<a href="#encoding()">encoding</a>|### Get or change character encoding|
|public|<a href="#string()">string</a>|### Get character as raw string|
|public|<a href="#tolower()">toLower</a>|### Make a character lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a character uppercase|
|public|<a href="#codepoint()">codepoint</a>|### Get character as codepoint|
|public|<a href="#__tostring()">__toString</a>||

<h2><a name="$character"># property: character</a></h2>

```php
private string $character
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L59)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L59)**</sub>
<h2><a name="$encoding"># property: encoding</a></h2>

```php
private ?\FireHub\Core\Support\Enums\String\Encoding $encoding = null
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L60)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L60)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Char::__construct(non-empty-string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L58)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L58)**</sub>
#### Parameters

* non-empty-string **$character** - _Character to use._
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
public static Char::from(non-empty-string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self
```











### ### Create a new character from raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L97)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L97)**</sub>
#### Parameters

* non-empty-string **$character** - _Character to use._
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L149)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L149)**</sub>
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

<h2><a name="expression()"># method: expression</a></h2>

```php
public Char::expression(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers)
```











### ### Regular expression



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L168)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L168)**</sub>
#### Parameters

* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of additional expression pattern modifiers._
<h2><a name="asboolean()"># method: asBoolean</a></h2>

```php
public Char::asBoolean()
```











### ### Boolean representation of the given logical character value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L190)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L190)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

Char::from('1')->asBoolean();

// true
```

<h2><a name="encoding()"># method: encoding</a></h2>

```php
public Char::encoding(?\FireHub\Core\Support\Enums\String\Encoding $encoding = null)
```











### ### Get or change character encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L215)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L215)**</sub>
#### Parameters

* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _Character encoding._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current encoding._
* [\ValueError](./Wiki-ValueError) - _If the value of encoding is an invalid encoding._
#### Examples
```php
use FireHub\Core\Support\Char;
use FireHub\Core\Support\Enums\String\Encoding;

Char::from('F')->encoding(Encoding::UTF_8);
```

<h2><a name="string()"># method: string</a></h2>

```php
public Char::string(string $string = null)
```











### ### Get character as raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L254)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L254)**</sub>
#### Parameters

* string **$string** = null
#### Examples
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

<h2><a name="tolower()"># method: toLower</a></h2>

```php
public Char::toLower()
```











### ### Make a character lowercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L279)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L279)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L304)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L304)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

Char::fromString('f')->toUpper();

// F
```

<h2><a name="codepoint()"># method: codepoint</a></h2>

```php
public Char::codepoint()
```











### ### Get character as codepoint



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L332)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L332)**</sub>
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















><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Char.php#L352)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Char.php#L352)**</sub>
#### Examples
```php
use FireHub\Core\Support\Char;

echo Char::from('F');

// F
```
