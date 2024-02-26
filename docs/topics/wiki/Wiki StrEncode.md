```php
final class \FireHub\Core\Support\LowLevel\StrEncode()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### String encoding low-level proxy class

_Encoding is the process of assigning numbers to graphical characters, especially the written characters of human
language, allowing them to be stored, transmitted, and transformed using digital computers._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\StrEncode**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L33)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#base64encode()">base64Encode</a>|### Encodes string with MIME base64|
|public static |<a href="#base64decode()">base64Decode</a>|### Decodes data encoded with MIME base64|
|public static |<a href="#uuencode()">uuEncode</a>|### Uuencode a string|
|public static |<a href="#uudecode()">uuDecode</a>|### Decode an uuencoded data|
|public static |<a href="#quotedprintableencode()">quotedPrintableEncode</a>|### Convert a 8bit string to a quoted-printable data|
|public static |<a href="#quotedprintabledecode()">quotedPrintableDecode</a>|### Convert a quoted-printable data to an 8 bit string|

<h2><a name="base64encode()"># method: base64Encode</a></h2>

```php
public static StrEncode::base64Encode(string $string):string
```











### ### Encodes string with MIME base64

_This encoding is designed to make binary data survive transport through transport layers that are not 8-bit
clean, such as mail bodies. Base64-encoded data takes about 33% more space than the original data._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L48)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L48)**</sub>
#### Parameters

* string **$string** - _The data to be encoded._
#### Returns

* string - _Base64 encoded data._
<h2><a name="base64decode()"># method: base64Decode</a></h2>

```php
public static StrEncode::base64Decode(string $data):string
```











### ### Decodes data encoded with MIME base64



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L66)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L66)**</sub>
#### Parameters

* string **$data** - _The base64 encoded data._
#### Throws

* [\Error](./Wiki-Error) - _If we cannot decode $data to base64._
#### Returns

* string - _Decoded string._
<h2><a name="uuencode()"># method: uuEncode</a></h2>

```php
public static StrEncode::uuEncode(string $string):string
```











### ### Uuencode a string

_Encodes a string using the uuencode algorithm. Uuencode translates all strings (including binary data) into
printable characters, making them safe for network transmissions. Uuencoded data is about 35% larger than the
original._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L89)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L89)**</sub>
#### Parameters

* string **$string** - _The data to be encoded._
#### Returns

* string - _The uuencoded data._
<h2><a name="uudecode()"># method: uuDecode</a></h2>

```php
public static StrEncode::uuDecode(string $data):string
```











### ### Decode an uuencoded data



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L111)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L111)**</sub>
#### Parameters

* string **$data** - _The uuencoded data._
#### Throws

* [\Error](./Wiki-Error) - _If we cannot uudecode $data._
#### Returns

* string - _Decoded data as a string._
<h2><a name="quotedprintableencode()"># method: quotedPrintableEncode</a></h2>

```php
public static StrEncode::quotedPrintableEncode(string $string):string
```











### ### Convert a 8bit string to a quoted-printable data



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L130)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L130)**</sub>
#### Parameters

* string **$string** - _The data to be encoded._
#### Returns

* string - _Quoted-printable encoded data._
<h2><a name="quotedprintabledecode()"># method: quotedPrintableDecode</a></h2>

```php
public static StrEncode::quotedPrintableDecode(string $data):string
```











### ### Convert a quoted-printable data to an 8 bit string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L148)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrEncode.php#L148)**</sub>
#### Parameters

* string **$data** - _The quoted printable data._
#### Returns

* string - _The 8-bit binary string._