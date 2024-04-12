```php
final class \FireHub\Core\Support\LowLevel\RegexMB()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Multibyte regex low-level proxy class

_The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the
delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character
except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself,
it needs to be escaped by backslash. Perl-style (), }, [], and <> matching delimiters may also be used._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\RegexMB**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L41)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#match()">match</a>|### Perform a regular expression match|
|public static |<a href="#replace()">replace</a>|### Perform a regular expression search and replace|
|public static |<a href="#replacefunc()">replaceFunc</a>|### Perform a regular expression search and replace using a callback|
|public static |<a href="#split()">split</a>|### Split string by a regular expression|
|public static |<a href="#encoding()">encoding</a>|### Set/Get character encoding for multibyte regex|

<h2><a name="match()"># method: match</a></h2>

```php
public static RegexMB::match(string $pattern, string $string, bool $case_sensitive = true, null|array &$result = null):bool
```











### ### Perform a regular expression match

_Searches subject for a match to the regular expression given in a pattern._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L69)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L69)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* string **$string** - _The string being evaluated._
* bool **$case_sensitive** = true - _[optional] 
Case-sensitive match._
* by reference null or array **$result** = null - _[optional] 
<code>null|string[]</code>
Case-sensitive match._
#### Returns

* bool - _True if string matches the regular expression pattern, false if not._
<h2><a name="replace()"># method: replace</a></h2>

```php
public static RegexMB::replace(string $pattern, string $replacement, string $string, bool $case_sensitive = true):string
```











### ### Perform a regular expression search and replace

_Searches $subject for matches to $pattern and replaces them with $replacement._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L107)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L107)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* string **$replacement** - _The string to replace._
* string **$string** - _The string being evaluated._
* bool **$case_sensitive** = true - _[optional] 
Case-sensitive replace._
#### Throws

* [\Error](./Wiki-Error) - _If string is not valid for the current encoding, or while performing a regular expression search
and replace._
#### Returns

* string - _Replaced string._
<h2><a name="replacefunc()"># method: replaceFunc</a></h2>

```php
public static RegexMB::replaceFunc(string $pattern, callable $callback, string $string):string
```











### ### Perform a regular expression search and replace using a callback

_Searches $subject for matches to $pattern and replaces them with $replacement._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L140)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L140)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* callable **$callback** - _<code>callable(array<array-key, string> $matches):string</code>
A callback that will be called and passed an array of matched elements in the subject string.
The callback should return the replacement string.
This is the callback signature._
* string **$string** - _The string being evaluated._
#### Throws

* [\Error](./Wiki-Error) - _If string is not valid for the current encoding, or while performing a regular expression search
and replace._
#### Returns

* string - _Replaced string._
<h2><a name="split()"># method: split</a></h2>

```php
public static RegexMB::split(string $pattern, string $string, int $limit = -1):array
```











### ### Split string by a regular expression

_Split the given string by a regular expression._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L171)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L171)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* string **$string** - _The input string._
* int **$limit** = -1 - _[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit)._
#### Throws

* [\Error](./Wiki-Error) - _If error while performing a regular expression split._
#### Returns

* array - _<code>string[]</code> Array containing substrings of $string split along boundaries matched
by $pattern._
<h2><a name="encoding()"># method: encoding</a></h2>

```php
public static RegexMB::encoding(null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):true|\FireHub\Core\Support\Enums\String\Encoding
```











### ### Set/Get character encoding for multibyte regex



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L198)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.RegexMB.php#L198)**</sub>
#### Parameters

* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If encoding is invalid or failed to get regex encoding._
#### Returns

* true or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) - _If encoding is set, then returns true. In this case, the internal character encoding is
NOT changed. If encoding is omitted, then the current character encoding name for a multibyte regex is returned._