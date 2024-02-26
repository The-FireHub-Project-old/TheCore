```php
final class \FireHub\Core\Support\Str()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### String high-level class

_Class allows you to manipulate strings in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Str**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L34)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Str.php)**</sub>


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
|public|<a href="#__tostring()">__toString</a>||

<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Str::__construct(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L49)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L49)**</sub>
#### Parameters

* string **$string** - _String to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* void
<h2><a name="from()"># method: from</a></h2>

```php
public static Str::from(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self
```











### ### Create a new string from raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L81)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L81)**</sub>
#### Parameters

* string **$string** - _String to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* self - _New string._
#### Examples
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

<h2><a name="fromlist()"># method: fromList</a></h2>

```php
public static Str::fromList(array|\FireHub\Core\Support\Contracts\HighLevel\Collectable $list, string $glue = &#039;&#039;, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):self
```











### ### Create a new string from array elements with a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L128)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L128)**</sub>
#### Parameters

* array or [\FireHub\Core\Support\Contracts\HighLevel\Collectable](./Wiki-Collectable) **$list** - _<code>array<array-key, null|scalar|Stringable>|\FireHub\Core\Support\Contracts\HighLevel\Collectable<int, \FireHub\Core\Support\Str></code>
The array of strings to implode._
* string **$glue** = '' - _[optional] 
The boundary string._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If array item could not be converted to string._
#### Returns

* self - _New string containing a string representation of all the array elements in the same order,
with the separator string between each element._
#### Examples
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

<h2><a name="isempty()"># method: isEmpty</a></h2>

```php
final public Str::isEmpty():bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if string is empty



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L154)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L154)**</sub>
#### Returns

* bool - _True if string is empty, false otherwise._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isEmpty();

// false
```

<h2><a name="islower()"># method: isLower</a></h2>

```php
final public Str::isLower()
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if string is lowercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L175)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L175)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isLower();

// false

<h2><a name="isupper()"># method: isUpper</a></h2>

```php
public Str::isUpper()
```











### ### Checks if string is uppercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L199)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L199)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isUpper();

// false
```

<h2><a name="isalphabetic()"># method: isAlphabetic</a></h2>

```php
public Str::isAlphabetic()
```











### ### Checks if string is alphabetic



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L223)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L223)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isAlphabetic();

// true
```

<h2><a name="isalphanumeric()"># method: isAlphanumeric</a></h2>

```php
public Str::isAlphanumeric()
```











### ### Checks if string is alphanumeric



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L247)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L247)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isAlphanumeric();

// true
```

<h2><a name="isblank()"># method: isBlank</a></h2>

```php
public Str::isBlank()
```











### ### Checks if string is whitespace



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L271)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L271)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isBlank();

// false
```

<h2><a name="isnumeric()"># method: isNumeric</a></h2>

```php
public Str::isNumeric()
```











### ### Checks if string is numeric



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L295)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L295)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isNumeric();

// false
```

<h2><a name="ishexadecimal()"># method: isHexadecimal</a></h2>

```php
public Str::isHexadecimal()
```











### ### Checks if string is hexadecimal



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L319)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L319)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isHexadecimal();

// true
```

<h2><a name="iscontrol()"># method: isControl</a></h2>

```php
public Str::isControl()
```











### ### Checks if string is control code



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L343)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L343)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isControl();

// false
```

<h2><a name="isprintable()"># method: isPrintable</a></h2>

```php
public Str::isPrintable()
```











### ### Checks if string is printable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L375)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L375)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
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

<h2><a name="isgraphical()"># method: isGraphical</a></h2>

```php
public Str::isGraphical()
```











### ### Checks if string is graphical



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L408)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L408)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
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

<h2><a name="ispunctuation()"># method: isPunctuation</a></h2>

```php
public Str::isPunctuation()
```











### ### Checks if string is punctuation



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L432)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L432)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isPunctuation();

// false
```

<h2><a name="isascii()"># method: isASCII</a></h2>

```php
public Str::isASCII()
```











### ### Checks if string is ASCII



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L455)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L455)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isASCII();

// true
```

<h2><a name="iscapitalized()"># method: isCapitalized</a></h2>

```php
final public Str::isCapitalized():bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if first character of string uppercased



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L480)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L480)**</sub>
#### Returns

* bool - _True if string is capitalized, false otherwise._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->isCapitalized();

// true
```

<h2><a name="haslower()"># method: hasLower</a></h2>

```php
final public Str::hasLower()
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if string has lowercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L502)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L502)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasLower();

// true

<h2><a name="hasupper()"># method: hasUpper</a></h2>

```php
public Str::hasUpper()
```











### ### Checks if string has uppercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L526)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L526)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasUpper();

// true
```

<h2><a name="hasalphabetic()"># method: hasAlphabetic</a></h2>

```php
public Str::hasAlphabetic()
```











### ### Checks if string has alphabetic



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L550)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L550)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasAlphabetic();

// true
```

<h2><a name="hasalphanumeric()"># method: hasAlphanumeric</a></h2>

```php
public Str::hasAlphanumeric()
```











### ### Checks if string has alphanumeric



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L574)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L574)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasAlphanumeric();

// true
```

<h2><a name="hasblank()"># method: hasBlank</a></h2>

```php
public Str::hasBlank()
```











### ### Checks if string has whitespace



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L598)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L598)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasBlank();

// false
```

<h2><a name="hasnumeric()"># method: hasNumeric</a></h2>

```php
public Str::hasNumeric()
```











### ### Checks if string has numeric



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L622)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L622)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasNumeric();

// false
```

<h2><a name="hashexadecimal()"># method: hasHexadecimal</a></h2>

```php
public Str::hasHexadecimal()
```











### ### Checks if string has hexadecimal



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L646)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L646)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasHexadecimal();

// true
```

<h2><a name="hascontrol()"># method: hasControl</a></h2>

```php
public Str::hasControl()
```











### ### Checks if string has control code



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L670)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L670)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasControl();

// false
```

<h2><a name="hasprintable()"># method: hasPrintable</a></h2>

```php
public Str::hasPrintable()
```











### ### Checks if string has printable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L702)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L702)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
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

<h2><a name="hasgraphical()"># method: hasGraphical</a></h2>

```php
public Str::hasGraphical()
```











### ### Checks if string has graphical



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L735)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L735)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
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

<h2><a name="haspunctuation()"># method: hasPunctuation</a></h2>

```php
public Str::hasPunctuation()
```











### ### Checks if string has punctuation



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L759)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L759)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current regex encoding._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->hasPunctuation();

// false
```

<h2><a name="encoding()"># method: encoding</a></h2>

```php
public Str::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):$this|\FireHub\Core\Support\Enums\String\Encoding
```











### ### Change character encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L787)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L787)**</sub>
#### Parameters

* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _Character encoding._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current encoding._
* [\ValueError](./Wiki-ValueError) - _If the value of encoding is an invalid encoding._
#### Returns

* $this or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) - _This character or current encoding._
#### Examples
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\String\Encoding;

Str::from('FireHub')->encoding(Encoding::UTF_8);
```

<h2><a name="carry()"># method: carry</a></h2>

```php
public Str::carry(int $from, ?int $length = null)
```











### ### Carry with part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L833)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L833)**</sub>
#### Parameters

* int **$from** - _If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
and so forth.
If the start is negative, the returned string will start at the start character from the end of the string._
* null or int **$length** = null - _[optional] 
Maximum number of characters to use from string.
If omitted or NULL is passed, extract all characters to the end of the string._
#### Examples
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

<h2><a name="string()"># method: string</a></h2>

```php
public Str::string():string
```











### ### Get string as raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L856)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L856)**</sub>
#### Returns

* string - _String as string._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->string();

// FireHub
```

<h2><a name="__tostring()"># method: __toString</a></h2>

```php
public Str::__toString()
```















><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L907)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L907)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

echo Str::from('FireHub');

// FireHub
```
