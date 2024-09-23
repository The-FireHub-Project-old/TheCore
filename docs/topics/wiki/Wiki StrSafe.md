```php
abstract class \FireHub\Core\Support\LowLevel\StrSafe()
```







> [!IMPORTANT]
This is an **abstract** class that cannot be instantiated directly.



### ### Safe string low-level proxy class

_Class contains methods that are safe to use on normal as well as on multibyte encoding._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\StrSafe**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L46)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|public static |<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|public static |<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|public static |<a href="#explode()">explode</a>|### Split a string by a string|
|public static |<a href="#compare()">compare</a>|### String comparison|
|public static |<a href="#translate()">translate</a>|### Translate characters or replace substrings|

<h2><a name="contains()"># method: contains</a></h2>

```php
final public static StrSafe::contains(string $value, string $string):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if string contains value

_Performs a case-sensitive check indicating if $string is contained in $string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L63)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L63)**</sub>
#### Parameters

* string **$value** - _The value to search for._
* string **$string** - _The string to search in._
#### Returns

* bool - _True if a string contains value, false otherwise._
<h2><a name="startswith()"># method: startsWith</a></h2>

```php
final public static StrSafe::startsWith(non-empty-string $value, string $string):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if a string starts with a given value

_Performs a case-sensitive check indicating if $string begins with $value._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L84)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L84)**</sub>
#### Parameters

* non-empty-string **$value** - _The value to search for._
* string **$string** - _The string to search in._
#### Returns

* bool - _True if string starts with value, false otherwise._
<h2><a name="endswith()"># method: endsWith</a></h2>

```php
final public static StrSafe::endsWith(non-empty-string $value, string $string):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if a string ends with a given value

_Performs a case-sensitive check indicating if $string ends with $value._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L105)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L105)**</sub>
#### Parameters

* non-empty-string **$value** - _The value to search for._
* string **$string** - _The string to search in._
#### Returns

* bool - _True if string ends with value, false otherwise._
<h2><a name="addslashes()"># method: addSlashes</a></h2>

```php
public static StrSafe::addSlashes(string $string):string
```











### ### Quote string with slashes

_Backslashes are added before characters that need to be escaped:
(single quote, double quote, backslash, NUL)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L127)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L127)**</sub>
#### Parameters

* string **$string** - _The string to be escaped._
#### Returns

* string - _The escaped string._
<h2><a name="implode()"># method: implode</a></h2>

```php
final public static StrSafe::implode(array<array-key,null|scalar|\Stringable> $array, string $separator = &#039;&#039;):string
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Join array elements with a string

_Join array elements with a $separator string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L151)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L151)**</sub>
#### Parameters

* array&lt;array-key,null or scalar or [\Stringable&gt;](./Wiki-Stringable&gt;) **$array** - _The array of strings to implode._
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L169)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L169)**</sub>
#### Parameters

* string **$string** - _The input string._
#### Returns

* string - _The string with meta-characters quoted._
<h2><a name="repeat()"># method: repeat</a></h2>

```php
final public static StrSafe::repeat(string $string, int $times, string $separator = &#039;&#039;):string
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Repeat a string

_Returns string repeated $times times._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L196)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L196)**</sub>
#### Parameters

* string **$string** - _The string to be repeated._
* int **$times** - _Number of time the input string should be repeated. Multiplier has to be greater than or equal to 0.
If the $times is set to 0 or less, the function will return empty string._
* string **$separator** = '' - _[optional] 
Separator in between any repeated string._
#### Returns

* string - _Repeated string._
<h2><a name="striptags()"># method: stripTags</a></h2>

```php
public static StrSafe::stripTags(string $string, null|string|array<int,string> $allowed_tags = null):string
```











### ### Strip HTML and PHP tags from a string

_This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given string. It
uses the same tag stripping state machine as the fgetss() function._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L221)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L221)**</sub>
#### Parameters

* string **$string** - _The input string._
* null or string or array&lt;int,string&gt; **$allowed_tags** = null - _You can use the optional second parameter to specify tags which should not be stripped._
#### Returns

* string - _the Stripped string._
<h2><a name="stripslashes()"># method: stripSlashes</a></h2>

```php
public static StrSafe::stripSlashes(string $string):string
```











### ### Un-quotes a quoted string

_Backslashes are removed: (backslashes become single quote, double backslashes are made into a single backslash)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L244)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L244)**</sub>
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





### ### Strip whitespace (or other characters) from the beginning and end of a string

_This function returns a string with whitespace stripped from the beginning and end of string.
Without the second parameter, [[StrSafe#trim()]] will strip these characters.

- " " (ASCII 32 (0x20)), an ordinary space.
- "\t" (ASCII 9 (0x09)), a tab.
- "\n" (ASCII 10 (0x0A)), a new line (line feed).
- "\r" (ASCII 13 (0x0D)), a carriage return.
- "\0" (ASCII 0 (0x00)), the NUL-byte.
- "\v" (ASCII 11 (0x0B)), a vertical tab._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L286)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L286)**</sub>
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
final public static StrSafe::explode(string $string, non-empty-string $separator, int<min, max> $limit = MAX):string[]
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Split a string by a string

_Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries
formed by the string separator._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L322)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L322)**</sub>
#### Parameters

* string **$string** - _The input string._
* non-empty-string **$separator** - _The boundary string._
* int&lt;min, max&gt; **$limit** = MAX - _[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last
element containing the rest of the string. If the limit parameter is negative, all components except the last
- limit are returned. If the limit parameter is zero, then this is treated as 1._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If separator is an empty string._
#### Returns

* string[] - _If delimiter contains a value that is not contained in string and a negative limit is used, then an empty array will be returned.
For any other limit, an array containing string will be returned._
<h2><a name="compare()"># method: compare</a></h2>

```php
public static StrSafe::compare(string $string_1, string $string_2):int<-1, 1>
```











### ### String comparison



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L344)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L344)**</sub>
#### Parameters

* string **$string_1** - _String to compare against._
* string **$string_2** - _String to compare with._
#### Returns

* int&lt;-1, 1&gt; - _-1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are
equal._
<h2><a name="translate()"># method: translate</a></h2>

```php
public static StrSafe::translate(string $string, array<non-empty-string,string> $replace_pairs):string
```











### ### Translate characters or replace substrings



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L365)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L365)**</sub>
#### Parameters

* string **$string** - _The string being translated to._
* array&lt;non-empty-string,string&gt; **$replace_pairs** - _An array of key-value pairs for translation._
#### Returns

* string - _The translated string._