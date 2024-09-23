```php
final class \FireHub\Core\Support\LowLevel\CharMB()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Multibyte character low-level proxy class

_Class provides multibyte specific character functions that help you deal with multibyte encodings._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\CharMB**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L29)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#chr()">chr</a>|### Return character by Unicode code point value|
|public static |<a href="#ord()">ord</a>|### Get Unicode code point of character|

<h2><a name="chr()"># method: chr</a></h2>

```php
public static CharMB::chr(int $codepoint, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string
```











### ### Return character by Unicode code point value

_Returns a string containing the character specified by the Unicode code point value, encoded in the specified
encoding. This function complements [[CharMB#ord()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L54)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L54)**</sub>
#### Parameters

* int **$codepoint** - _The codepoint value._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If codepoint could not be converted to character._
#### Returns

* string - _string A string containing the requested character._
#### Links

* [https://en.wikipedia.org/wiki/List_of_Unicode_characters](https://en.wikipedia.org/wiki/List_of_Unicode_characters) - _List of codepoint values_
<h2><a name="ord()"># method: ord</a></h2>

```php
public static CharMB::ord(non-empty-string $character, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):int
```











### ### Get Unicode code point of character

_Returns the Unicode code point value of the given character. This function complements [[CharMB#chr()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L81)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharMB.php#L81)**</sub>
#### Parameters

* non-empty-string **$character** - _A character._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If character could not be converted to codepoint._
* [\ValueError](./Wiki-ValueError) - _If empty string is provided._
#### Returns

* int - _The Unicode code point for the first character of string._