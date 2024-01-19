```php
abstract class \FireHub\Core\Support\LowLevel\StrSafe()
```







> [!IMPORTANT]
This is an **abstract** class that cannot be instantiated directly.





### ### Safe string low-level proxy class

_Class contains methods that are safe to use on normal as well as on multibyte encoding._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\StrSafe**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSafe.php#L48)**</sub><br/>
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
|public static |<a href="#replace()">replace</a>|### Replace all occurrences of the search string with the replacement string|
|public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|public static |<a href="#explode()">explode</a>|### Split a string by a string|
|public static |<a href="#compare()">compare</a>|### String comparison|

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