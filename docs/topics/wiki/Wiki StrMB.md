```php
final class \FireHub\Core\Support\LowLevel\StrMB()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Multibyte string low-level proxy class

_Class provides multibyte specific string functions that help you deal with multibyte encodings._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\StrMB**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L49)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#convert()">convert</a>|### Perform case folding on a string|
|public static |<a href="#part()">part</a>|### Get part of string|
|public static |<a href="#firstpart()">firstPart</a>|### Find first part of a string|
|public static |<a href="#lastpart()">lastPart</a>|### Find last part of a string|
|public static |<a href="#split()">split</a>|### Given a multibyte string, return an array of its characters|
|public static |<a href="#partcount()">partCount</a>|### Get number of times the searched substring occurs in the string|
|public static |<a href="#length()">length</a>|### Get string length|
|public static |<a href="#firstposition()">firstPosition</a>|### Find the position of the first occurrence of a substring in a string|
|public static |<a href="#lastposition()">lastPosition</a>|### Find the position of the last occurrence of a substring in a string|
|public static |<a href="#encoding()">encoding</a>|### Set/Get internal character encoding|
|public static |<a href="#detectencoding()">detectEncoding</a>|### Detect character encoding|
|public static |<a href="#convertencoding()">convertEncoding</a>|### Convert a string from one character encoding to another|
|public static |<a href="#checkencoding()">checkEncoding</a>|### Check if strings are valid for the specified encoding|
|inherited public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|inherited public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|inherited public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|inherited public static |<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|inherited public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|inherited public static |<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|inherited public static |<a href="#replace()">replace</a>|### Replace all occurrences of the search string with the replacement string|
|inherited public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|inherited public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|inherited public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|inherited public static |<a href="#explode()">explode</a>|### Split a string by a string|
|inherited public static |<a href="#compare()">compare</a>|### String comparison|

<h2><a name="convert()"># method: convert</a></h2>

```php
public static StrMB::convert( $string, \FireHub\Core\Support\Enums\String\CaseFolding $caseFolding, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string
```













### ### Perform case folding on a string

_Performs case folding on a string, converted in the way specified by $caseFolding._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L74)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L74)**</sub>
#### Parameters

*  **$string** - _The string being converted._
* [\FireHub\Core\Support\Enums\String\CaseFolding](./Wiki-CaseFolding) **$caseFolding** - _The case folding type._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* string - _Converted string._
<h2><a name="part()"># method: part</a></h2>

```php
public static StrMB::part(string $string, int $start, null|int $length = null, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string
```













### ### Get part of string

_Performs a multibyte safe [[StrSB#part()]] operation based on the number of characters. Position is counted
from the beginning of $string. First character's position is 0. Second character position is 1, and so on._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L112)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L112)**</sub>
#### Parameters

* string **$string** - _The string to extract the substring from._
* int **$start** - _If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string 'abcdef', the character at position 0 is 'a',
the character at position 2 is 'c', and so forth.
If the start is negative, the returned string will start at the start character from the end of the string._
* null or int **$length** = null - _[optional] 
Maximum number of characters to use from string.
If omitted or NULL is passed, extract all characters to the end of the string._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* string - _The portion of string specified by the start and length parameters._
<h2><a name="firstpart()"># method: firstPart</a></h2>

```php
public static StrMB::firstPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string|false
```













### ### Find first part of a string

_Returns part of $string starting from and including the first occurrence of $find to the end of $string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L144)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L144)**</sub>
#### Parameters

* string **$find** - _String to find._
* string **$string** - _The string being searched._
* bool **$before_needle** = false - _[optional] 
If true, return the part of the string before the first occurrence (excluding the find string)._
* bool **$case_sensitive** = true - _[optional] 
Is string to find case-sensitive or not._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* string or false - _The portion of string or false if needle is not found._
<h2><a name="lastpart()"># method: lastPart</a></h2>

```php
public static StrMB::lastPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):string|false
```













### ### Find last part of a string

_This function returns the portion of $string which starts at the last occurrence of $find and goes until the
end of $string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L179)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L179)**</sub>
#### Parameters

* string **$find** - _String to find._
* string **$string** - _The string being searched._
* bool **$before_needle** = false - _[optional] 
If true, return the part of the string before the last occurrence (excluding the find string)._
* bool **$case_sensitive** = true - _[optional] 
Is string to find case-sensitive or not._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* string or false - _The portion of string, or false if needle is not found._
<h2><a name="split()"># method: split</a></h2>

```php
public static StrMB::split(string $string, int $length = 1, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):array
```













### ### Given a multibyte string, return an array of its characters

_This function will return an array of strings, it is a version of [[StrSB#split()]] with support for encodings of
variable character size as well as fixed-size encodings of 1,2 or 4 byte characters. If the $length parameter
is specified, the string is broken down into chunks of the specified length in characters (not bytes). The
$encoding parameter can be optionally specified, and it is good practice to do so._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L218)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L218)**</sub>
#### Parameters

* string **$string** - _The input string._
* int **$length** = 1 - _[optional] 
<code>positive-int</code>
Maximum length of the chunk._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If length is less than 1._
#### Returns

* array - _<code>array<int, string></code> If the optional $length parameter is specified, the
returned array will be broken down into chunks with each being $length in length, except the final chunk which
may be shorter if the string does not divide evenly. The default $length is 1, meaning every chunk will be one
byte in size._
<h2><a name="partcount()"># method: partCount</a></h2>

```php
public static StrMB::partCount(string $string, string $search, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):int
```













### ### Get number of times the searched substring occurs in the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L245)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L245)**</sub>
#### Parameters

* string **$string** - _The string being checked._
* string **$search** - _The string being found._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* int - _<code>non-negative-int</code> Number of times the searched substring occurs in the string._
<h2><a name="length()"># method: length</a></h2>

```php
public static StrMB::length(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):int
```













### ### Get string length



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L269)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L269)**</sub>
#### Parameters

* string **$string** - _The string being measured for length._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* int - _<code>non-negative-int</code> String length._
<h2><a name="firstposition()"># method: firstPosition</a></h2>

```php
public static StrMB::firstPosition(string $search, string $string, bool $case_sensitive = true, int $offset, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):false|int
```













### ### Find the position of the first occurrence of a substring in a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L299)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L299)**</sub>
#### Parameters

* string **$search** - _A string to find position._
* string **$string** - _The string to search in._
* bool **$case_sensitive** = true - _[optional] 
Search case-sensitive position._
* int **$offset** - _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* false or int - _Numeric position of the first occurrence or false if none exist._
<h2><a name="lastposition()"># method: lastPosition</a></h2>

```php
public static StrMB::lastPosition(string $search, string $string, bool $case_sensitive = true, int $offset, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):false|int
```













### ### Find the position of the last occurrence of a substring in a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L331)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L331)**</sub>
#### Parameters

* string **$search** - _A string to find position._
* string **$string** - _The string to search in._
* bool **$case_sensitive** = true - _[optional] 
Search case-sensitive position._
* int **$offset** - _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* false or int - _Numeric position of the last occurrence or false if none exist._
<h2><a name="encoding()"># method: encoding</a></h2>

```php
public static StrMB::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):\FireHub\Core\Support\Enums\String\Encoding|bool
```













### ### Set/Get internal character encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L358)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L358)**</sub>
#### Parameters

* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _Encoding is the character encoding name used for the HTTP input character encoding conversion, HTTP output
character encoding conversion, and the default character encoding for string functions defined by the mbstring
module. You should notice that the internal encoding is totally different from the one for multibyte regex._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If the value of encoding is an invalid encoding._
* [\Error](./Wiki-Error) - _If we could not get current encoding._
#### Returns

* [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) or bool - _If encoding is set, then returns true on success or
false on failure. In this case, the character encoding for multibyte regex is NOT changed. If encoding is
omitted, then the current character encoding name is returned._
<h2><a name="detectencoding()"># method: detectEncoding</a></h2>

```php
public static StrMB::detectEncoding(string $string):null|\FireHub\Core\Support\Enums\String\Encoding
```













### ### Detect character encoding

_Detects the most likely character encoding for string from an ordered list of candidates._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L382)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L382)**</sub>
#### Parameters

* string **$string** - _The string to detect encoding._
#### Returns

* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) - _The detected character encoding, or null if the string
is not valid in any of the listed encodings._
<h2><a name="convertencoding()"># method: convertEncoding</a></h2>

```php
public static StrMB::convertEncoding(string $string, \FireHub\Core\Support\Enums\String\Encoding $to, null|\FireHub\Core\Support\Enums\String\Encoding $from = null):string
```













### ### Convert a string from one character encoding to another

_Converts string from $from, or the current internal encoding, to $to. If a string is an array, all its $string
values will be converted recursively._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L417)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L417)**</sub>
#### Parameters

* string **$string** - _The string to be converted._
* [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$to** - _The desired encoding of the result._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$from** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If we could not convert string._
* [\ValueError](./Wiki-ValueError) - _If the value of $to or $from is an invalid encoding._
#### Returns

* string - _Encoded string._
<h2><a name="checkencoding()"># method: checkEncoding</a></h2>

```php
public static StrMB::checkEncoding(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):true
```













### ### Check if strings are valid for the specified encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L439)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrMB.php#L439)**</sub>
#### Parameters

* string **$string** - _The string to check encoding on._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _The expected encoding._
#### Returns

* true - _on success or false on failure._
<h2><a name="contains()"># method: contains</a></h2>

```php
final public static StrSafe::contains(string $value, string $string):bool
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Checks if string contains value

_Performs a case-sensitive check indicating if $string is contained in $string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L65)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L65)**</sub>
#### Parameters

* string **$value** - _The value to search for._
* string **$string** - _The string to search in._
#### Returns

* bool - _True if a string contains value, false otherwise._
<h2><a name="startswith()"># method: startsWith</a></h2>

```php
final public static StrSafe::startsWith(string $value, string $string):bool
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Checks if a string starts with a given value

_Performs a case-sensitive check indicating if $string begins with $value._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L88)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L88)**</sub>
#### Parameters

* string **$value** - _<code>non-empty-string></code>
The value to search for._
* string **$string** - _The string to search in._
#### Returns

* bool - _True if string starts with value, false otherwise._
<h2><a name="endswith()"># method: endsWith</a></h2>

```php
final public static StrSafe::endsWith(string $value, string $string):bool
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Checks if a string ends with a given value

_Performs a case-sensitive check indicating if $string ends with $value._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L112)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L112)**</sub>
#### Parameters

* string **$value** - _<code>non-empty-string></code>
The value to search for._
* string **$string** - _The string to search in._
#### Returns

* bool - _True if string ends with value, false otherwise._
<h2><a name="addslashes()"># method: addSlashes</a></h2>

```php
public static StrSafe::addSlashes(string $string):string
```











> [!CAUTION]
            The [[StrSafe#addSlashes()]] is sometimes incorrectly used to try to prevent SQL Injection. Instead,
database-specific escaping functions and/or prepared statements should be used.

### ### Quote string with slashes

_Backslashes are added before characters that need to be escaped:
(single quote, double quote, backslash, NUL)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L134)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L134)**</sub>
#### Parameters

* string **$string** - _The string to be escaped._
#### Returns

* string - _The escaped string._
<h2><a name="implode()"># method: implode</a></h2>

```php
final public static StrSafe::implode(array $array, string $separator = &#039;&#039;):string
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Join array elements with a string

_Join array elements with a $separator string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L160)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L160)**</sub>
#### Parameters

* array **$array** - _<code>array<array-key, mixed></code>
The array of strings to implode._
* string **$separator** = '' - _[optional] 
The boundary string._
#### Throws

* [\Error](./Wiki-Error) - _If array item could not be converted to string._
#### Returns

* string - _Returns a string containing a string representation of all the array elements in the same order,
with the separator string between each element._
<h2><a name="quotemeta()"># method: quoteMeta</a></h2>

```php
final public static StrSafe::quoteMeta(string $string):string
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Quote meta characters

_Returns a version of str with a backslash character (\) before every character that is among these: .\+*?[^]($)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L182)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L182)**</sub>
#### Parameters

* string **$string** - _<code>non-empty-string</code>
The input string._
#### Throws

* [\Error](./Wiki-Error) - _If empty string is given as string._
#### Returns

* string - _The string with meta-characters quoted._
<h2><a name="replace()"># method: replace</a></h2>

```php
final public static StrSafe::replace(string|array $search, string|array $replace, string $string, bool $case_sensitive = true, null|int &$count = null):string
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            Multibyte characters may not work as expected while $case_sensitive is on.> [!NOTE]
            Because method replaces left to right, it might replace a previously inserted value when doing
multiple replacements.> [!TIP]
            To replace text based on a pattern rather than a fixed string, use preg_replace().

### ### Replace all occurrences of the search string with the replacement string

_This function returns a string or an array with all occurrences of search
in a subject replaced with the given replacement value._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L224)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L224)**</sub>
#### Parameters

* string or array **$search** - _<code>string|list<string></code>
The replacement value that replaces found search values.
An array may be used to designate multiple replacements._
* string or array **$replace** - _<code>string|list<string></code>
The string being searched and replaced on._
* string **$string** - _The value being searched for._
* bool **$case_sensitive** = true - _[optional] 
Searched values are case-insensitive._
* by reference null or int **$count** = null - _[optional] 
If passed, this will hold the number of matched and replaced needles._
#### Returns

* string - _String with the replaced values._
<h2><a name="repeat()"># method: repeat</a></h2>

```php
final public static StrSafe::repeat(string $string, int $times, string $separator = &#039;&#039;):string
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Repeat a string

_Returns string repeated $times times._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L255)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L255)**</sub>
#### Parameters

* string **$string** - _The string to be repeated._
* int **$times** - _<code>non-negative-int</code>
Number of time the input string should be repeated. Multiplier has to be greater than or equal to 0. If the
multiplier is set to 0, the function will return an empty string._
* string **$separator** = '' - _[optional] 
Separator in between any repeated string._
#### Throws

* [\Error](./Wiki-Error) - _If $times argument is not 0 or greater._
#### Returns

* string - _Repeated string._
<h2><a name="striptags()"># method: stripTags</a></h2>

```php
public static StrSafe::stripTags(string $string, null|string|array $allowed_tags = null):string
```











> [!NOTE]
            Self-closing XHTML tags are ignored and only non-self-closing tags should be used in allowed_tags.
For example, to allow both <br> and <br/>, you should use: <br>.
</p>

### ### Strip HTML and PHP tags from a string

_This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string. It
uses the same tag stripping state machine as the fgetss() function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L282)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L282)**</sub>
#### Parameters

* string **$string** - _The input string._
* null or string or array **$allowed_tags** = null - _<code>null|string|array<int, string></code>
You can use the optional second parameter to specify tags which should not be stripped._
#### Returns

* string - _the Stripped string._
<h2><a name="stripslashes()"># method: stripSlashes</a></h2>

```php
public static StrSafe::stripSlashes(string $string):string
```











> [!NOTE]
            [[StrSafe#stripSlashes()]] is not recursive. If you want to apply this function to multidimensional
array, you need to use a recursive function.> [!TIP]
            [[StrSafe#stripSlashes()]] can be used if you aren't inserting this data into a place (such as a database)
that requires escaping. For example, if you're simply outputting data straight from an HTML form.

### ### Un-quotes a quoted string

_Backslashes are removed: (backslashes become single quote, double backslashes are made into a single backslash)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L305)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L305)**</sub>
#### Parameters

* string **$string** - _The string to be unquoted._
#### Returns

* string - _String with backslashes stripped off._
<h2><a name="trim()"># method: trim</a></h2>

```php
final public static StrSafe::trim(string $string, \FireHub\Core\Support\Enums\Side $side = Side::BOTH, string $characters = &quot; 
	 &quot;):string
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            Because trim() trims characters from the beginning and end of a string, it may be confusing when characters
are (or are not) removed from the middle. Trim('abc', 'bad') removes both 'a' and 'b' because it trims 'a'
thus moving 'b' to the beginning to also be trimmed. So, this is why it "works" whereas trim('abc', 'b')
seemingly does not.

### ### Strip whitespace (or other characters) from the beginning and end of a string

_This function returns a string with whitespace stripped from the beginning and end of string. Without the
second parameter, trim() will strip these characters.

- " " (ASCII 32 (0x20)), an ordinary space.
- "\t" (ASCII 9 (0x09)), a tab.
- "\n" (ASCII 10 (0x0A)), a new line (line feed).
- "\r" (ASCII 13 (0x0D)), a carriage return.
- "\0" (ASCII 0 (0x00)), the NUL-byte.
- "\v" (ASCII 11 (0x0B)), a vertical tab._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L347)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L347)**</sub>
#### Parameters

* string **$string** - _The string that will be trimmed._
* [\FireHub\Core\Support\Enums\Side](./Wiki-Side) **$side** = Side::BOTH - _[optional] 
Side to trim string._
* string **$characters** = " 
	 " - _[optional] 
The stripped characters can also be specified using the char-list parameter. List all characters that you want
to be stripped. With '..', you can specify a range of characters._
#### Returns

* string - _The trimmed string._
<h2><a name="explode()"># method: explode</a></h2>

```php
final public static StrSafe::explode(string $string, string $separator, int $limit = MAX):array
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Split a string by a string

_Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries
formed by the string separator._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L389)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L389)**</sub>
#### Parameters

* string **$string** - _The input string._
* string **$separator** - _<code>non-empty-string</code>
The boundary string._
* int **$limit** = MAX - _[optional] 
<code>int<min, max></code>
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last
element containing the rest of the string. If the limit parameter is negative, all components except the last
- limit are returned. If the limit parameter is zero, then this is treated as 1._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If separator is an empty string._
#### Returns

* array - _<code>string[]</code> If delimiter contains a value that is not contained in string and a negative
limit is used, then an empty array will be returned. For any other limit, an array containing string will be
returned._
<h2><a name="compare()"># method: compare</a></h2>

```php
public static StrSafe::compare(string $string_1, string $string_2):int<-1, 1>
```











> [!NOTE]
            This comparison is case-sensitive.

### ### String comparison



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L411)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L411)**</sub>
#### Parameters

* string **$string_1** - _String to compare against._
* string **$string_2** - _String to compare with._
#### Returns

* int&lt;-1, 1&gt; - _-1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are
equal._