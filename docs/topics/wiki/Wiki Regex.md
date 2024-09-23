```php
final class \FireHub\Core\Support\LowLevel\Regex()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Regex low-level proxy class

_The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the
delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character
except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself,
it needs to be escaped by backslash. Perl style (), }, [], and <> matching delimiters may also be used._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Regex**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L39)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#match()">match</a>|### Perform a regular expression match|
|public static |<a href="#replace()">replace</a>|### Perform a regular expression search and replace|
|public static |<a href="#replacefunc()">replaceFunc</a>|### Perform a regular expression search and replace using a callback|
|public static |<a href="#split()">split</a>|### Split string by a regular expression|
|public static |<a href="#quote()">quote</a>|### Quote regular expression characters|

<h2><a name="match()"># method: match</a></h2>

```php
public static Regex::match(string $pattern, string $string, int $offset, bool $all = false, null|string[] &$result = null):bool
```











### ### Perform a regular expression match

_Searches subject for a match to the regular expression given in a pattern._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L73)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L73)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* string **$string** - _The string being evaluated._
* int **$offset** - _[optional] 
Normally, the search starts from the beginning of the subject string. The optional parameter offset can be used
to specify the alternate place from which to start the search (in bytes)._
* bool **$all** = false - _[optional] 
If true, search subject for a match to the regular expression given in a pattern._
* by reference null or string[] **$result** = null - _[optional] 
Regular expression match result._
#### Returns

* bool - _True if string matches the regular expression pattern, false if not._
<h2><a name="replace()"># method: replace</a></h2>

```php
public static Regex::replace(string $pattern, string $replacement, string $string, int $limit = -1):string
```











### ### Perform a regular expression search and replace

_Searches $subject for matches to $pattern and replaces them with $replacement._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L107)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L107)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* string **$replacement** - _The string to replace._
* string **$string** - _The string being evaluated._
* int **$limit** = -1 - _[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit)._
#### Throws

* [\Error](./Wiki-Error) - _If error while performing a regular expression search and replace._
#### Returns

* string - _Replaced string._
<h2><a name="replacefunc()"># method: replaceFunc</a></h2>

```php
public static Regex::replaceFunc(string $pattern, callable $callback, string $string, int $limit = -1):string
```











### ### Perform a regular expression search and replace using a callback

_Searches $subject for matches to $pattern and replaces them with $replacement._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L143)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L143)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* callable **$callback** - _<code>callable(array<array-key, string> $matches):string</code>
A callback that will be called and passed an array of matched elements in the subject string.
The callback should return the replacement string.
This is the callback signature._
* string **$string** - _The string being evaluated._
* int **$limit** = -1 - _[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit)._
#### Throws

* [\Error](./Wiki-Error) - _If error while performing a regular expression search and replace._
#### Returns

* string - _Replaced string._
<h2><a name="split()"># method: split</a></h2>

```php
public static Regex::split(string $pattern, string $string, int $limit = -1, bool $remove_empty = false):string[]
```











### ### Split string by a regular expression

_Split the given string by a regular expression._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L176)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L176)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
* string **$string** - _The input string._
* int **$limit** = -1 - _[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit)._
* bool **$remove_empty** = false - _[optional] 
If true, only non-empty pieces will be returned._
#### Throws

* [\Error](./Wiki-Error) - _If error while performing a regular expression split._
#### Returns

* string[] - _Array containing substrings of $string split along boundaries matched by $pattern._
<h2><a name="quote()"># method: quote</a></h2>

```php
public static Regex::quote(string $string, null|string $delimiter = null):string
```











### ### Quote regular expression characters

_Method takes string and puts a backslash in front of every character that is part of the regular expression syntax.
This is useful if you have a run-time string that you need to match in some text and the string may contain special regex characters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L201)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Regex.php#L201)**</sub>
#### Parameters

* string **$string** - _The input string._
* null or string **$delimiter** = null - _[optional] 
If the optional delimiter is specified, it will also be escaped.
This is useful for escaping the delimiter required by the PCRE functions.
The / is the most commonly used delimiter._
#### Returns

* string - _The quoted (escaped) string._