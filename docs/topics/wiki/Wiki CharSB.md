```php
final class \FireHub\Core\Support\LowLevel\CharSB()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Single-byte character low-level proxy class

_Class allows you to manipulate characters in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\CharSB**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L26)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#chr()">chr</a>|### Generate a single-byte string from a number|
|public static |<a href="#ord()">ord</a>|### Convert the first byte of a string to a value between 0 and 255|

<h2><a name="chr()"># method: chr</a></h2>

```php
public static CharSB::chr(int $codepoint):string
```











### ### Generate a single-byte string from a number

_Returns a one-character string containing the character specified by interpreting $codepoint as an unsigned
integer. This can be used to create a one-character string in a single-byte encoding such as ASCII, ISO-8859,
or Windows 1252, by passing the position of a desired character in the encoding's mapping table. However, note
that this function is not aware of any string encoding, and in particular cannot be passed a Unicode code point
value to generate a string in a multibyte encoding like UTF-8 or UTF-16. This function complements
[[CharSB#ord()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L47)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L47)**</sub>
#### Parameters

* int **$codepoint** - _An integer between 0 and 255._
#### Returns

* string - _A single-character string containing the specified byte._
#### Links

* [https://www.man7.org/linux/man-pages/man7/ascii.7.html](https://www.man7.org/linux/man-pages/man7/ascii.7.html) - _List of codepoint values_
<h2><a name="ord()"># method: ord</a></h2>

```php
public static CharSB::ord(string $character):int
```











### ### Convert the first byte of a string to a value between 0 and 255

_Interprets the binary value of the first byte from $character as an unsigned integer between 0 and 255. If the
string is in a single-byte encoding, such as ASCII, ISO-8859, or Windows 1252, this is equivalent to returning
the position of a character in the character set's mapping table. However, note that this function is not
aware of any string encoding, and in particular will never identify a Unicode code point in a multibyte
encoding such as UTF-8 or UTF-16. This function complements [[CharSB#chr()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L69)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.CharSB.php#L69)**</sub>
#### Parameters

* string **$character** - _A character._
#### Returns

* int - _An integer between 0 and 255._