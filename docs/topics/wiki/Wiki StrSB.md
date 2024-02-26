```php
final class \FireHub\Core\Support\LowLevel\StrSB()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Single-byte string low-level proxy class

_Class allows you to manipulate strings in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\StrSB**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L64)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|public static |<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public static |<a href="#compare()">compare</a>|### String comparison|
|public static |<a href="#chunksplit()">chunkSplit</a>|### Split a string into smaller chunks|
|public static |<a href="#pad()">pad</a>|### Pad a string to a certain length with another string|
|public static |<a href="#replacepart()">replacePart</a>|### Replace text within a portion of a string|
|public static |<a href="#shuffle()">shuffle</a>|### Randomly shuffles a string|
|public static |<a href="#reverse()">reverse</a>|### Reverse a string|
|public static |<a href="#wrap()">wrap</a>|### Wraps a string to a given number of characters|
|public static |<a href="#tolower()">toLower</a>|### Make a string lowercase|
|public static |<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|public static |<a href="#totitle()">toTitle</a>|### Make a string title-cased|
|public static |<a href="#capitalize()">capitalize</a>|### Make a first character of string uppercased|
|public static |<a href="#decapitalize()">deCapitalize</a>|### Make a first character of string lowercased|
|public static |<a href="#translate()">translate</a>|### Translate characters or replace substrings|
|public static |<a href="#part()">part</a>|### Get part of string|
|public static |<a href="#firstpart()">firstPart</a>|### Find first part of a string|
|public static |<a href="#lastpart()">lastPart</a>|### Find last part of a string|
|public static |<a href="#partfrom()">partFrom</a>|### Find part of a string with characters|
|public static |<a href="#countbychar()">countByChar</a>|### Return information about characters used in a string|
|public static |<a href="#split()">split</a>|### Convert a string to an array|
|public static |<a href="#countwords()">countWords</a>|### Count number of words in string|
|public static |<a href="#partcount()">partCount</a>|### Get number of times the searched substring occurs in the string|
|public static |<a href="#segmentmatching()">segmentMatching</a>|### Length of the initial segment for a string consisting entirely of characters contained within a given mask|
|public static |<a href="#segmentnotmatching()">segmentNotMatching</a>|### Find length of initial segment not matching mask|
|public static |<a href="#length()">length</a>|### Get string length|
|public static |<a href="#comparepart()">comparePart</a>|### Comparison of two strings from an offset, up to length characters|
|public static |<a href="#comparefirstn()">compareFirstN</a>|### String comparison of the first n characters|
|public static |<a href="#firstposition()">firstPosition</a>|### Find the position of the first occurrence of a substring in a string|
|public static |<a href="#lastposition()">lastPosition</a>|### Find the position of the last occurrence of a substring in a string|
|inherited public static |<a href="#contains()">contains</a>|### Checks if string contains value|
|inherited public static |<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|inherited public static |<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|inherited public static |<a href="#implode()">implode</a>|### Join array elements with a string|
|inherited public static |<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|inherited public static |<a href="#replace()">replace</a>|### Replace all occurrences of the search string with the replacement string|
|inherited public static |<a href="#repeat()">repeat</a>|### Repeat a string|
|inherited public static |<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public static |<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|inherited public static |<a href="#explode()">explode</a>|### Split a string by a string|

<h2><a name="addslashes()"># method: addSlashes</a></h2>

```php
public static StrSB::addSlashes(string $string, string $characters = null)
```











### ### Quote string with slashes



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L82)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L82)**</sub>
#### Parameters

* string **$string** - _The string to be escaped._
* string **$characters** = null - _[optional] 
The list of characters to be escaped. Non-alphanumeric characters with ASCII codes lower than 32 and higher
than 126 converted to octal representation._
<h2><a name="stripslashes()"># method: stripSlashes</a></h2>

```php
public static StrSB::stripSlashes(string $string, bool $c_representation = false)
```











### ### Un-quotes a quoted string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L226)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L226)**</sub>
#### Parameters

* string **$string** - _The string to be unquoted._
* bool **$c_representation** = false - _[optional] 
If true, octal and hexadecimal representation from addSlashes method are recognized._
<h2><a name="compare()"># method: compare</a></h2>

```php
public static StrSB::compare(string $string_1, string $string_2, bool $case_sensitive = true)
```











### ### String comparison



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L706)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L706)**</sub>
#### Parameters

* string **$string_1** - _String to compare against._
* string **$string_2** - _String to compare with._
* bool **$case_sensitive** = true - _[optional] 
Is comparison case-sensitive or not._
<h2><a name="chunksplit()"># method: chunkSplit</a></h2>

```php
public static StrSB::chunkSplit(string $string, int $length = 76, string $separator = &quot;
&quot;):string
```











### ### Split a string into smaller chunks

_Can be used to split a string into smaller chunks, which is useful for e.g., converting base64_encode() output to
match RFC 2045 semantics. It inserts $separator every $length characters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L112)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L112)**</sub>
#### Parameters

* string **$string** - _The string to be chunked._
* int **$length** = 76 - _[optional] 
The chunk length._
* string **$separator** = "
" - _[optional] 
The line-ending sequence._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If length is less than 1._
#### Returns

* string - _The chunked string._
<h2><a name="pad()"># method: pad</a></h2>

```php
public static StrSB::pad(string $string, int $length, string $pad = &quot; &quot;, \FireHub\Core\Support\Enums\Side $side = Side::RIGHT):string
```











### ### Pad a string to a certain length with another string

_This method returns the $string padded on the left, the right, or both sides to the specified padding length.
If the optional argument $pad is not supplied, the $string is padded with spaces; otherwise it is padded with
characters from $pad up to the limit._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L151)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L151)**</sub>
#### Parameters

* string **$string** - _The string being padded._
* int **$length** - _If the value of $length is negative, less than, or equal to the length of the input string, no padding takes
place._
* string **$pad** = " " - _[optional] 
<code>non-empty-string</code>
The pad may be truncated if the required number of padding characters can't be evenly divided by the pad's
length._
* [\FireHub\Core\Support\Enums\Side](./Wiki-Side) **$side** = Side::RIGHT - _[optional] 
Pad side._
#### Throws

* [\Error](./Wiki-Error) - _If the pad is empty._
#### Returns

* string - _Padded string._
<h2><a name="replacepart()"># method: replacePart</a></h2>

```php
public static StrSB::replacePart(string $string, string $replace, int $offset, null|int $length = null):string
```











### ### Replace text within a portion of a string

_Replaces a copy of string delimited by the $offset and (optionally) $length parameters with the string given in
$replace._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L187)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L187)**</sub>
#### Parameters

* string **$string** - _The input string._
* string **$replace** - _The replacement string._
* int **$offset** - _If offset is non-negative, the replacing will begin at the into string. If offset is negative, the replacing
will begin at the character from the end of the string._
* null or int **$length** = null - _[optional] 
If given and is positive, it represents the length of the portion of string which is to be replaced. If it is
negative, it represents the number of characters from the end of string at which to stop replacing. If it is
not given, then it will default to strlen(string); i.e., end the replacing at the end of string. Of course, if
length is zero, then this function will have the effect of inserting $replace into string at the given offset._
#### Returns

* string - _String with the replaced values._
<h2><a name="shuffle()"># method: shuffle</a></h2>

```php
public static StrSB::shuffle(string $string):string
```











### ### Randomly shuffles a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L206)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L206)**</sub>
#### Parameters

* string **$string** - _The input string._
#### Returns

* string - _The shuffled string._
<h2><a name="reverse()"># method: reverse</a></h2>

```php
public static StrSB::reverse(string $string):string
```











### ### Reverse a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L244)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L244)**</sub>
#### Parameters

* string **$string** - _The string to be reversed._
#### Returns

* string - _The reversed string._
<h2><a name="wrap()"># method: wrap</a></h2>

```php
public static StrSB::wrap(string $string, int $width = 75, string $break = &quot;
&quot;, bool $cut_long_words = false):string
```











### ### Wraps a string to a given number of characters

_Wraps a string to a given number of characters using a string break character._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L272)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L272)**</sub>
#### Parameters

* string **$string** - _The string to warp._
* int **$width** = 75 - _[optional] 
The column width._
* string **$break** = "
" - _[optional] 
The line is broken using the optional break parameter._
* bool **$cut_long_words** = false - _[optional] 
If the cut is set to true, the string is always wrapped at or before the specified width. So if you have a
word that is larger than the given width, it is broken apart._
#### Returns

* string - _The given string wrapped at the specified column._
<h2><a name="tolower()"># method: toLower</a></h2>

```php
public static StrSB::toLower(string $string):string
```











### ### Make a string lowercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L288)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L288)**</sub>
#### Parameters

* string **$string** - _The string being lowercased._
#### Returns

* string - _String with all alphabetic characters converted to lowercase._
<h2><a name="toupper()"># method: toUpper</a></h2>

```php
public static StrSB::toUpper(string $string):string
```











### ### Make a string uppercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L304)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L304)**</sub>
#### Parameters

* string **$string** - _The string being uppercased._
#### Returns

* string - _String with all alphabetic characters converted to uppercase._
<h2><a name="totitle()"># method: toTitle</a></h2>

```php
public static StrSB::toTitle(string $string):string
```











### ### Make a string title-cased



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L320)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L320)**</sub>
#### Parameters

* string **$string** - _The string being title cased._
#### Returns

* string - _String with title-cased conversion._
<h2><a name="capitalize()"># method: capitalize</a></h2>

```php
public static StrSB::capitalize(string $string):string
```











### ### Make a first character of string uppercased



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L336)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L336)**</sub>
#### Parameters

* string **$string** - _The string being converted._
#### Returns

* string - _String with first character uppercased._
<h2><a name="decapitalize()"># method: deCapitalize</a></h2>

```php
public static StrSB::deCapitalize(string $string):string
```











### ### Make a first character of string lowercased

_Returns a string with the first character of $string lowercased if that character is an ASCII character in the
range "A" (0x41) to "Z" (0x5a)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L355)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L355)**</sub>
#### Parameters

* string **$string** - _The string being converted._
#### Returns

* string - _String with first character lowercased._
<h2><a name="translate()"># method: translate</a></h2>

```php
public static StrSB::translate(string $string, string $from, string $to):string
```











### ### Translate characters or replace substrings



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L377)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L377)**</sub>
#### Parameters

* string **$string** - _The string being translated to._
* string **$from** - _An array of key-value pairs for translation._
* string **$to** - _The string replaced from._
#### Returns

* string - _The translated string._
<h2><a name="part()"># method: part</a></h2>

```php
public static StrSB::part(string $string, int $start, null|int $length = null):string
```











### ### Get part of string

_Returns the portion of the string specified by the $start and $length parameters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L405)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L405)**</sub>
#### Parameters

* string **$string** - _The string to extract the substring from._
* int **$start** - _If start is non-negative, the returned string will start at the start position in string, counting from zero.
For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c',
and so forth. If the start is negative, the returned string will start at the start character from the end of
the string._
* null or int **$length** = null - _[optional] 
Maximum number of characters to use from string. If omitted or NULL is passed, extract all characters to the
end of the string._
#### Returns

* string - _The portion of string specified by the start and length parameters._
<h2><a name="firstpart()"># method: firstPart</a></h2>

```php
public static StrSB::firstPart(string $find, string $string, bool $before_needle = false, bool $case_sensitive = true):string|false
```











### ### Find first part of a string

_Returns part of $string starting from and including the first occurrence of $find to the end of $string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L429)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L429)**</sub>
#### Parameters

* string **$find** - _String to find._
* string **$string** - _The string being searched._
* bool **$before_needle** = false - _[optional] 
If true, return the part of the string before the first occurrence (excluding the find string)._
* bool **$case_sensitive** = true
#### Returns

* string or false - _The portion of string or false if needle is not found._
<h2><a name="lastpart()"># method: lastPart</a></h2>

```php
public static StrSB::lastPart(string $find, string $string):string|false
```











### ### Find last part of a string

_This function returns the portion of $string which starts at the last occurrence of $find and goes until the
end of $string._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L453)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L453)**</sub>
#### Parameters

* string **$find** - _String to find._
* string **$string** - _The string being searched._
#### Returns

* string or false - _The portion of string, or false if needle is not found._
<h2><a name="partfrom()"># method: partFrom</a></h2>

```php
public static StrSB::partFrom(string $characters, string $string):string|false
```











### ### Find part of a string with characters



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L472)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L472)**</sub>
#### Parameters

* string **$characters** - _Characters to find. This parameter is case-sensitive._
* string **$string** - _The string where characters are looked for._
#### Returns

* string or false - _String starting from the character found, or false if it is not found._
<h2><a name="countbychar()"># method: countByChar</a></h2>

```php
public static StrSB::countByChar(string $string):array
```











### ### Return information about characters used in a string

_Counts the number of occurrences for every byte-value (0..255) in $string and returns it in various ways._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L492)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L492)**</sub>
#### Parameters

* string **$string** - _The examined string._
#### Returns

* array - _<code>array<int, int></code> An array with the byte-value as a key with a frequency
greater than zero are listed._
<h2><a name="split()"># method: split</a></h2>

```php
public static StrSB::split(string $string, int $length = 1):array
```











### ### Convert a string to an array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L520)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L520)**</sub>
#### Parameters

* string **$string** - _The input string._
* int **$length** = 1 - _[optional] 
<code>positive-int</code>
Maximum length of the chunk._
#### Throws

* [\Error](./Wiki-Error) - _If length is less than 1._
#### Returns

* array - _<code>array<int, string></code> If the optional $length parameter is specified, the
returned array will be broken down into chunks with each being $length in length, except the final chunk which
may be shorter if the string does not divide evenly. The default $length is 1, meaning every chunk will be one
byte in size._
<h2><a name="countwords()"># method: countWords</a></h2>

```php
public static StrSB::countWords(string $string, null|string $characters = null, int $format):int|array
```











### ### Count number of words in string

_Counts the number of words inside string. If the optional format is not specified, then the return value will
be an integer representing the number of words found. In the event the format is specified,
the return value will be an array, the content of which is dependent on the format.
The possible value for the format and the resultant outputs are listed below._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L558)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L558)**</sub>
#### Parameters

* string **$string** - _The string._
* null or string **$characters** = null - _[optional] 
A list of additional characters which will be considered as 'word'._
* int **$format** - _[optional] 
<code>0|1|2</code>
A string to search words.
0 - returns the number of words found.
1 - returns an array containing all the words found inside the string.
2 - returns an associative array, where the key is the numeric position of the word inside the string and the
value is the actual word itself._
#### Throws

* [\Error](./Wiki-Error) - _If failed to count words for string._
#### Returns

* int or array - _<code>int|array<int, string></code> Number of words found or list of words._
<h2><a name="partcount()"># method: partCount</a></h2>

```php
public static StrSB::partCount(string $string, string $search, int $start, null|int $length = null):int
```











### ### Get number of times the searched substring occurs in the string

_Returns the number of times the needle substring occurs in the haystack string. Please note that needle is
case-sensitive._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L591)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L591)**</sub>
#### Parameters

* string **$string** - _The string being checked._
* string **$search** - _The string being found._
* int **$start** - _[optional] 
The offset where to start counting. If the offset is negative, counting starts from the end of the string._
* null or int **$length** = null - _[optional] 
The maximum length after the specified offset to search for the substring. It outputs a warning if the offset
plus the length is greater than the $string length. A negative length counts from the end of $string._
#### Returns

* int - _<code>non-negative-int</code> Number of times the searched substring occurs in the string._
<h2><a name="segmentmatching()"># method: segmentMatching</a></h2>

```php
public static StrSB::segmentMatching(string $string, string $characters, int $offset, int|null $length = null):int
```











### ### Length of the initial segment for a string consisting entirely of characters contained within a given mask

_Finds the length of the initial segment of $string that contains only characters from $characters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L627)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L627)**</sub>
#### Parameters

* string **$string** - _The string to examine._
* string **$characters** - _The list of allowable characters._
* int **$offset** - _[optional] 
The position in subject to start searching. If start is given and is non-negative, then
[[StrSB#segmentMatching()]] will begin examining the subject at the start position. For instance, in the
string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth. If
start is given and is negative, then [[StrSB#segmentMatching()]] will begin examining subject at the start
position from the end of subject._
* int or null **$length** = null - _[optional] 
The length of the segment from subject to examine. If length is given and is non-negative, then the subject
will be examined for length characters after the starting position. If length is given and is negative, then
the subject will be examined from the starting position up-to-length characters from the end of the subject._
#### Returns

* int - _The length of the initial segment for string which consists entirely of characters in characters._
<h2><a name="segmentnotmatching()"># method: segmentNotMatching</a></h2>

```php
public static StrSB::segmentNotMatching(string $string, string $characters, int $offset, null|int $length = null):int
```











### ### Find length of initial segment not matching mask

_Returns the length of the initial segment of $string which does not contain any of the characters in $characters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L664)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L664)**</sub>
#### Parameters

* string **$string** - _The string to examine._
* string **$characters** - _The string containing every disallowed character._
* int **$offset** - _[optional] 
The position in subject to start searching. If start is given and is non-negative, then
[[StrSB#segmentNotMatching()]] will begin examining the subject at the start position. For instance, in the
string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth. If
start is given and is negative, then [[StrSB#segmentNotMatching()]] will begin examining subject at the start
position from the end of subject._
* null or int **$length** = null - _[optional] 
The length of the segment from subject to examine. If length is given and is non-negative, then the subject
will be examined for length characters after the starting position. If length is given and is negative, then
the subject will be examined from the starting position up-to-length characters from the end of the subject._
#### Returns

* int - _The length of the initial segment from string which consists entirely of characters not in
characters._
<h2><a name="length()"># method: length</a></h2>

```php
public static StrSB::length(string $string):int
```











### ### Get string length



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L683)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L683)**</sub>
#### Parameters

* string **$string** - _The string being measured for length._
#### Returns

* int - _<code>non-negative-int</code> String length._
<h2><a name="comparepart()"># method: comparePart</a></h2>

```php
public static StrSB::comparePart(string $string_1, string $string_2, int $offset, null|int $length = null, bool $case_sensitive = true):int
```











### ### Comparison of two strings from an offset, up to length characters



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L739)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L739)**</sub>
#### Parameters

* string **$string_1** - _String to compare against._
* string **$string_2** - _String to compare with._
* int **$offset** - _[optional] 
The start position for the comparison. If negative, it starts counting from the end of the string._
* null or int **$length** = null - _[optional] 
The length of the comparison. The default value is the largest of the length for the needle compared to the
length of haystack minus the offset._
* bool **$case_sensitive** = true - _[optional] 
If case_sensitive is true, comparison is case-insensitive._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If $offset is higher than $string_1._
#### Returns

* int - _-1 if string1 is less than string2, 1 if string1 is greater than string2 and 0 if they are equal._
<h2><a name="comparefirstn()"># method: compareFirstN</a></h2>

```php
public static StrSB::compareFirstN(string $string_1, string $string_2, int $length):int|false
```











### ### String comparison of the first n characters



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L768)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L768)**</sub>
#### Parameters

* string **$string_1** - _String to compare against._
* string **$string_2** - _String to compare with._
* int **$length** - _Number of characters to use in the comparison._
#### Returns

* int or false - _-1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are
equal, or false if length is less than 0._
<h2><a name="firstposition()"># method: firstPosition</a></h2>

```php
public static StrSB::firstPosition(string $search, string $string, bool $case_sensitive = true, int $offset):int|false
```











### ### Find the position of the first occurrence of a substring in a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L797)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L797)**</sub>
#### Parameters

* string **$search** - _A string to find position._
* string **$string** - _The string to search in._
* bool **$case_sensitive** = true - _[optional] 
Search case-sensitive position._
* int **$offset** - _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._
#### Returns

* int or false - _Numeric position of the first occurrence or false if none exist._
<h2><a name="lastposition()"># method: lastPosition</a></h2>

```php
public static StrSB::lastPosition(string $search, string $string, bool $case_sensitive = true, int $offset):int|false
```











### ### Find the position of the last occurrence of a substring in a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L828)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.StrSB.php#L828)**</sub>
#### Parameters

* string **$search** - _A string to find position._
* string **$string** - _The string to search in._
* bool **$case_sensitive** = true - _[optional] 
Search case-sensitive position._
* int **$offset** - _[optional] 
If specified, search will start this number of characters counted from the beginning of the string._
#### Returns

* int or false - _Numeric position of the last occurrence or false if none exist._
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

* array **$array** - _<code>array<array-key, null|scalar|Stringable></code>
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
<h2><a name="trim()"># method: trim</a></h2>

```php
final public static StrSafe::trim(string $string, \FireHub\Core\Support\Enums\Side $side = Side::BOTH, string $characters = &quot; 
	 &quot;):string
```





> [!IMPORTANT]
This method is marked as **final**.





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