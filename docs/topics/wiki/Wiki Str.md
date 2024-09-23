```php
abstract class \FireHub\Core\Support\Strings\Str()
```







> [!IMPORTANT]
This is an **abstract** class that cannot be instantiated directly.



### ### String high-level abstract class

_Class allows you to manipulate strings in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Str**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L47)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/firehub.Str.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$string">string</a>|### String to use|&#039;&#039;|
|protected|<a href="#$encoding">encoding</a>|Character encoding|null|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#from()">from</a>|### Create a new string from raw string|
|public static |<a href="#fromlist()">fromList</a>|### Create a new string from array elements with a string|
|public|<a href="#expression()">expression</a>|### Regular expression|
|public|<a href="#insertvalue()">insertValue</a>|### value on string|
|public|<a href="#tochars()">toChars</a>|### Break string into characters|
|public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical string value|
|public|<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public|<a href="#startswithany()">startsWithAny</a>|### Checks if a string starts with any of the given values|
|public|<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|public|<a href="#endswithany()">endsWithAny</a>|### Checks if a string ends with any of the given values|
|public|<a href="#contains()">contains</a>|### Checks if string contains value|
|public|<a href="#containsall()">containsAll</a>|### Checks if string contains all values|
|public|<a href="#containsany()">containsAny</a>|### Checks if string contains any of the values|
|public|<a href="#equals()">equals</a>|### Checks if string equals value|
|public|<a href="#equalsany()">equalsAny</a>|### Checks if string equals to any of the values|
|public|<a href="#match()">match</a>|### Checks if string matches a given pattern|
|public|<a href="#encoding()">encoding</a>|### Get or change string encoding|
|public|<a href="#string()">string</a>|### Get or set string as raw string|
|public|<a href="#tolower()">toLower</a>|### Make a string lowercase|
|public|<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|public|<a href="#totitle()">toTitle</a>|### Make a string title-case|
|public|<a href="#capitalize()">capitalize</a>|### Make a first character of string uppercased|
|public|<a href="#decapitalize()">deCapitalize</a>|### Make a first character of string uppercased|
|public|<a href="#swapcase()">swapCase</a>|### Swap lower and upper cases on string|
|public|<a href="#streamline()">streamline</a>|### Streamline string|
|public|<a href="#titleize()">titleize</a>|### Capitalize every word in string|
|public|<a href="#spaceless()">spaceless</a>|### Remove spaces|
|public|<a href="#kebabcase()">kebabCase</a>|### Format sting to kebab-case|
|public|<a href="#snakecase()">snakeCase</a>|### Format sting to snake-case|
|public|<a href="#headline()">headline</a>|### Format strings to headline|
|public|<a href="#delimit()">delimit</a>|### Lowercased and trimmed string separated by the given delimiter|
|public|<a href="#dasherize()">dasherize</a>|### Lowercased and trimmed string separated by dash|
|public|<a href="#pascalize()">pascalize</a>|### Makes a PascalCase version of the string|
|public|<a href="#humanize()">humanize</a>|### Humanize string|
|public|<a href="#tidy()">tidy</a>|### Tidy string|
|public|<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|public|<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|public|<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|public|<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|public|<a href="#between()">between</a>|### Slice string after first start and until last end|
|public|<a href="#betweenfirst()">betweenFirst</a>|### Slice string after first start and until first end|
|public|<a href="#betweenlast()">betweenLast</a>|### Slice string after last start and until last end|
|public|<a href="#slice()">slice</a>|### Slice with part of the string|
|public|<a href="#carry()">carry</a>|### Carry with part of the string|
|public|<a href="#carryfrom()">carryFrom</a>|### Carry from part of the string|
|public|<a href="#carryafter()">carryAfter</a>|### Carry from part of the string|
|public|<a href="#carryuntil()">carryUntil</a>|### Carry until part of the string|
|public|<a href="#carryfromlast()">carryFromLast</a>|### Carry from the last part of a string|
|public|<a href="#carryafterlast()">carryAfterLast</a>|### Carry from the last part of the string|
|public|<a href="#carryuntillast()">carryUntilLast</a>|### Carry until the last part of a string|
|public|<a href="#insert()">insert</a>|### Inserts string at the position provided|
|public|<a href="#move()">move</a>|### Move part of the string|
|public|<a href="#overwrite()">overwrite</a>|### Overwrite with part of the string|
|public|<a href="#replace()">replace</a>|### Replace all occurrences of the search string with the replacement string|
|public|<a href="#replacerecursive()">replaceRecursive</a>|### Replace all occurrences recursively of search in a subject replaced with the given replacement value|
|public|<a href="#repeat()">repeat</a>|### Repeat a string|
|public|<a href="#reverse()">reverse</a>|### Reverse order of characters|
|public|<a href="#pad()">pad</a>|### Pad a string to a certain length with another string|
|public|<a href="#mask()">mask</a>|### Mask a portion of a string|
|public|<a href="#prepend()">prepend</a>|### Prepends the given string to the current string|
|public|<a href="#append()">append</a>|### Appends the given string to the current string|
|public|<a href="#ensureprefix()">ensurePrefix</a>|### Makes sure that the current string starts with the given text|
|public|<a href="#ensuresuffix()">ensureSuffix</a>|### Makes sure that the current string ends with the given text|
|public|<a href="#removeprefix()">removePrefix</a>|### Makes sure that the current string doesn't start with the given text|
|public|<a href="#removesuffix()">removeSuffix</a>|### Makes sure that the current string doesn't end with the given text|
|public|<a href="#surround()">surround</a>|Surrounds string with the given substring|
|public|<a href="#shuffle()">shuffle</a>|### Randomly shuffles a string|
|public|<a href="#quote()">quote</a>|### Wraps each word in the string with specified quote|
|public|<a href="#trim()">trim</a>|### Strip whitespace (or other characters) from the beginning and end of a string|
|public|<a href="#truncate()">truncate</a>|### Truncates the string to a given length|
|public|<a href="#safetruncate()">safeTruncate</a>|### Truncates the string to a given length, while ensuring that it does not split words|
|public|<a href="#first()">first</a>|### Get first character of string|
|public|<a href="#last()">last</a>|### Get last character of string|
|public|<a href="#chop()">chop</a>|### Chop a string to an array|
|public|<a href="#break()">break</a>|### Break string with a separator|
|public|<a href="#breakwithany()">breakWithAny</a>|### Break string with any of separators|
|public|<a href="#split()">split</a>|### Split string with a separator|
|public|<a href="#splitbeforeany()">splitBeforeAny</a>|### Split string before any of separators|
|public|<a href="#splitafterany()">splitAfterAny</a>|### Split string after any of separators|
|public|<a href="#group()">group</a>|### Group a string into chunks|
|public|<a href="#containtimes()">containTimes</a>|### Checks how mny times string contains value|
|public|<a href="#length()">length</a>|### Get string length|
|public|<a href="#indexof()">indexOf</a>|### Find the position of the first occurrence of a substring|
|public|<a href="#lastindexof()">lastIndexOf</a>|### Find the position of the last occurrence of a substring|
|public|<a href="#charat()">charAt</a>|### Find the character at the provider position|
|public|<a href="#__tostring()">__toString</a>||

<h2><a name="$string"># property: string</a></h2>

```php
protected string $string = &#039;&#039;
```









### ### String to use



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L55)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L55)**</sub>
<h2><a name="$encoding"># property: encoding</a></h2>

```php
protected null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null
```









### Character encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L63)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L63)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
abstract public Str::__construct(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void
```







> [!IMPORTANT]
This is an **abstract** method that cannot be instantiated directly.



### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L81)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L81)**</sub>
#### Parameters

* string **$string** - _String to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding.
If it is null, the internal character encoding value will be used._
#### Returns

* void
<h2><a name="from()"># method: from</a></h2>

```php
public static Str::from(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static
```











### ### Create a new string from raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L113)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L113)**</sub>
#### Parameters

* string **$string** - _String to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* static - _New string._
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
public static Str::fromList(array<array-key,null|scalar|\Stringable>|\FireHub\Core\Support\Contracts\HighLevel\Collectable<int,\FireHub\Core\Support\Str> $list, string $glue = &#039;&#039;, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static
```











### ### Create a new string from array elements with a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L160)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L160)**</sub>
#### Parameters

* array&lt;array-key,null or scalar or [\Stringable&gt;](./Wiki-Stringable&gt;) or [\FireHub\Core\Support\Contracts\HighLevel\Collectable&lt;int,\FireHub\Core\Support\Str&gt;](./Wiki-Str&gt;) **$list** - _The array of strings to implode._
* string **$glue** = '' - _[optional] 
The boundary string._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Throws

* [\Error](./Wiki-Error) - _If array item could not be converted to string._
#### Returns

* static - _New string containing a string representation of all the array elements in the same order,
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

<h2><a name="expression()"># method: expression</a></h2>

```php
public Str::expression(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers)
```











### ### Regular expression



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L177)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L177)**</sub>
#### Parameters

* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of additional expression pattern modifiers._
<h2><a name="insertvalue()"># method: insertValue</a></h2>

```php
public Str::insertValue(string $value)
```











### ### value on string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L190)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L190)**</sub>
#### Parameters

* string **$value** - _String to insert._
<h2><a name="tochars()"># method: toChars</a></h2>

```php
public Str::toChars()
```











### ### Break string into characters



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L211)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L211)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->toChars();
```

<h2><a name="asboolean()"># method: asBoolean</a></h2>

```php
public Str::asBoolean()
```











### ### Boolean representation of the given logical string value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L237)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L237)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('Yes')->asBoolean();

// true

<h2><a name="startswith()"># method: startsWith</a></h2>

```php
public Str::startsWith(string $value)
```











### ### Checks if a string starts with a given value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L259)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L259)**</sub>
#### Parameters

* string **$value** - _The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->startsWith('Fire');

// true
```

<h2><a name="startswithany()"># method: startsWithAny</a></h2>

```php
public Str::startsWithAny(string ...$values)
```











### ### Checks if a string starts with any of the given values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L281)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L281)**</sub>
#### Parameters

* variadic string **$values** - _The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->startsWithAny('Fire', 'test');

// true
```

<h2><a name="endswith()"># method: endsWith</a></h2>

```php
public Str::endsWith(string $value)
```











### ### Checks if a string ends with a given value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L306)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L306)**</sub>
#### Parameters

* string **$value** - _The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->endsWith('Hub');

// true
```

<h2><a name="endswithany()"># method: endsWithAny</a></h2>

```php
public Str::endsWithAny(string ...$values)
```











### ### Checks if a string ends with any of the given values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L328)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L328)**</sub>
#### Parameters

* variadic string **$values** - _The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->endsWithAny('Hub', 'test');

// true
```

<h2><a name="contains()"># method: contains</a></h2>

```php
public Str::contains(string $value)
```











### ### Checks if string contains value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L353)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L353)**</sub>
#### Parameters

* string **$value** - _The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->contains('ire');

// true
```

<h2><a name="containsall()"># method: containsAll</a></h2>

```php
public Str::containsAll(string ...$values)
```











### ### Checks if string contains all values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L375)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L375)**</sub>
#### Parameters

* variadic string **$values** - _The list of values to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->containsAll('ire', 'Fi');

// true
```

<h2><a name="containsany()"># method: containsAny</a></h2>

```php
public Str::containsAny(string ...$values)
```











### ### Checks if string contains any of the values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L400)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L400)**</sub>
#### Parameters

* variadic string **$values** - _The list of values to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->containsAny('ire', 'Fi');

// true
```

<h2><a name="equals()"># method: equals</a></h2>

```php
public Str::equals(string $value)
```











### ### Checks if string equals value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L423)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L423)**</sub>
#### Parameters

* string **$value** - _The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->equals('FireHub');

// true
```

<h2><a name="equalsany()"># method: equalsAny</a></h2>

```php
public Str::equalsAny(string ...$values)
```











### ### Checks if string equals to any of the values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L445)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L445)**</sub>
#### Parameters

* variadic string **$values** - _The list of values to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->equalsAny('FireHub', 'Fi');

// true
```

<h2><a name="match()"># method: match</a></h2>

```php
public Str::match(string $pattern)
```











### ### Checks if string matches a given pattern



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L468)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L468)**</sub>
#### Parameters

* string **$pattern** - _The pattern to match against._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->match('Fire*b*A*');

// true
```

<h2><a name="encoding()"># method: encoding</a></h2>

```php
public Str::encoding(?\FireHub\Core\Support\Enums\String\Encoding $encoding = null)
```











### ### Get or change string encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L497)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L497)**</sub>
#### Parameters

* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _String encoding._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get current encoding._
* [\ValueError](./Wiki-ValueError) - _If the value of encoding is an invalid encoding._
#### Examples
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\String\Encoding;

Str::from('FireHub')->encoding(Encoding::UTF_8);
```

<h2><a name="string()"># method: string</a></h2>

```php
public Str::string(string $string = null)
```











### ### Get or set string as raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L535)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L535)**</sub>
#### Parameters

* string **$string** = null - _[optional] 
String to set._
#### Examples
Get the string.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->string();

// FireHub
```
Set the string.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->string('FireHub Web App');

// FireHub Web App
```

<h2><a name="tolower()"># method: toLower</a></h2>

```php
public Str::toLower()
```











### ### Make a string lowercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L562)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L562)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->toLower();

// firehub
```

<h2><a name="toupper()"># method: toUpper</a></h2>

```php
public Str::toUpper()
```











### ### Make a string uppercase



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L587)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L587)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->toUpper();

// FIREHUB
```

<h2><a name="totitle()"># method: toTitle</a></h2>

```php
public Str::toTitle()
```











### ### Make a string title-case



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L612)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L612)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub web app')->toTitle();

// Firehub Web App
```

<h2><a name="capitalize()"># method: capitalize</a></h2>

```php
public Str::capitalize()
```











### ### Make a first character of string uppercased



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L638)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L638)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('firehub')->capitalize();

// Firehub
```

<h2><a name="decapitalize()"># method: deCapitalize</a></h2>

```php
public Str::deCapitalize()
```











### ### Make a first character of string uppercased



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L668)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L668)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->deCapitalize();

// fireHub
```

<h2><a name="swapcase()"># method: swapCase</a></h2>

```php
public Str::swapCase():$this
```











### ### Swap lower and upper cases on string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L699)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L699)**</sub>
#### Returns

* $this - _This string._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->swapCase();

// fIREhUB
```

<h2><a name="streamline()"># method: streamline</a></h2>

```php
public Str::streamline()
```











### ### Streamline string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L731)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L731)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from(' Fire
 Hub ')->streamline();

// FireHub
```

<h2><a name="titleize()"># method: titleize</a></h2>

```php
public Str::titleize(array $ignore = [])
```











### ### Capitalize every word in string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L764)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L764)**</sub>
#### Parameters

* array **$ignore** = [] - _$ignore [optional] 
List of additional words not to be capitalized._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub web app')->titleize();

// FireHub Web App
```

<h2><a name="spaceless()"># method: spaceless</a></h2>

```php
public Str::spaceless()
```











### ### Remove spaces



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L805)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L805)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->spaceless();

// FireHubWebApp
```

<h2><a name="kebabcase()"># method: kebabCase</a></h2>

```php
public Str::kebabCase()
```











### ### Format sting to kebab-case



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L827)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L827)**</sub>
#### Examples
```php
use FireHub\Core\Support\Strings\Str;

Str::from('FireHub')->kebabCase();

// fire-hub
```

<h2><a name="snakecase()"># method: snakeCase</a></h2>

```php
public Str::snakeCase()
```











### ### Format sting to snake-case



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L849)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L849)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->snakeCase();

// fire_hub
```

<h2><a name="headline()"># method: headline</a></h2>

```php
public Str::headline()
```











### ### Format strings to headline



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L872)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L872)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web app')->headline();

// Fire Hub Web App
```

<h2><a name="delimit()"># method: delimit</a></h2>

```php
public Str::delimit(string $delimiter)
```











### ### Lowercased and trimmed string separated by the given delimiter



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L897)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L897)**</sub>
#### Parameters

* string **$delimiter**
#### Examples
```php
use FireHub\Core\Support\Strings\Str;

Str::from('FireHub')->delimit('-');

// fire-hub
```

<h2><a name="dasherize()"># method: dasherize</a></h2>

```php
public Str::dasherize()
```











### ### Lowercased and trimmed string separated by dash



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L924)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L924)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->dasherize();

// fire-hub
```

<h2><a name="pascalize()"># method: pascalize</a></h2>

```php
public Str::pascalize()
```











### ### Makes a PascalCase version of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L946)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L946)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub web app')->pascalize();

// FireHubWebApp
```

<h2><a name="humanize()"># method: humanize</a></h2>

```php
public Str::humanize(array $forbidden_words = [&#039;_id&#039;])
```











### ### Humanize string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L970)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L970)**</sub>
#### Parameters

* array **$forbidden_words** = ['_id'] - _[optional] 
List of forbidden words to remove._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('firehub_id')->humanize();

// Firehub
```

<h2><a name="tidy()"># method: tidy</a></h2>

```php
public Str::tidy():$this
```











### ### Tidy string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L997)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L997)**</sub>
#### Returns

* $this - _This string._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('“FireHub…”')->tidy();

// "FireHub..."
```

<h2><a name="addslashes()"># method: addSlashes</a></h2>

```php
public Str::addSlashes()
```











### ### Quote string with slashes



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1032)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1032)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from("Is your name O'Reilly?")->addSlashes();

// Is your name O\'Reilly?
```

<h2><a name="stripslashes()"># method: stripSlashes</a></h2>

```php
public Str::stripSlashes()
```











### ### Un-quotes a quoted string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1061)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1061)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('Is your name O\'Reilly?')->stripSlashes();

// Is your name O'Reilly?
```

<h2><a name="striptags()"># method: stripTags</a></h2>

```php
public Str::stripTags(null|string|array $allowed_tags = null)
```











### ### Strip HTML and PHP tags from a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1105)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1105)**</sub>
#### Parameters

* null or string or array **$allowed_tags** = null - _You can use the optional second parameter to specify tags which should not be stripped._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('<p>FireHub</p>')->stripTags();

// FireHub
```
With $allowed_tags parameter, you allow certain tags to be excluded for the strip.
```php
use FireHub\Core\Support\Str;

Str::from('<p><i><a>FireHub</a></i></p>')->stripTags('<p>');

// <p>FireHub</p>
```
Alternatively, you can use array in $allowed_tags parameter to allow multiple tags.
```php
use FireHub\Core\Support\Str;

Str::from('<p><i><a>FireHub</a></i></p>')->stripTags(['<p>', '<a>']);

// <p><a>FireHub</a></p>
```

<h2><a name="quotemeta()"># method: quoteMeta</a></h2>

```php
public Str::quoteMeta()
```











### ### Quote meta characters



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1129)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1129)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub?')->quoteMeta();

// FireHub\?
```

<h2><a name="between()"># method: between</a></h2>

```php
public Str::between(string $start, string $end)
```











### ### Slice string after first start and until last end



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1153)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1153)**</sub>
#### Parameters

* string **$start** - _First character._
* string **$end** - _Last character._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHubFireHubFireHub')->between('F', 'H');

// FireHubFireHubFire

<h2><a name="betweenfirst()"># method: betweenFirst</a></h2>

```php
public Str::betweenFirst(string $start, string $end)
```











### ### Slice string after first start and until first end



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1175)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1175)**</sub>
#### Parameters

* string **$start** - _First character._
* string **$end** - _Last character._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHubFireHubFireHub')->betweenFirst('F', 'H');

// Fire

<h2><a name="betweenlast()"># method: betweenLast</a></h2>

```php
public Str::betweenLast(string $start, string $end)
```











### ### Slice string after last start and until last end



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1197)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1197)**</sub>
#### Parameters

* string **$start** - _First character._
* string **$end** - _Last character._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('Fire')->betweenLast('F', 'H');

// Fire

<h2><a name="slice()"># method: slice</a></h2>

```php
public Str::slice(int $from, ?int $until = null)
```











### ### Slice with part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1237)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1237)**</sub>
#### Parameters

* int **$from** - _Returned string will start at the start position in string, counting from zero._
* null or int **$until** = null - _[optional] 
Returned string will end at the start position in string.
If omitted or NULL is passed, extract all characters to the end of the string._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(3);

// Fir
```
Getting a slice of string with passed $until argument.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(3, 5);

// eHu
```
Getting a slice of string with negative $until argument.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(1, -1);

// ireHu
```

<h2><a name="carry()"># method: carry</a></h2>

```php
public Str::carry(int $from, ?int $length = null)
```











### ### Carry with part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1282)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1282)**</sub>
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
$from and $length parameters can also be negative.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->carry(-3, -1);

// Hu
```

<h2><a name="carryfrom()"># method: carryFrom</a></h2>

```php
public Str::carryFrom(string $find)
```











### ### Carry from part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1306)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1306)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryFrom('Web');

// Web App
```

<h2><a name="carryafter()"># method: carryAfter</a></h2>

```php
public Str::carryAfter(string $find)
```











### ### Carry from part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1334)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1334)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryAfter('Web ');

// App
```

<h2><a name="carryuntil()"># method: carryUntil</a></h2>

```php
public Str::carryUntil(string $find)
```











### ### Carry until part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1356)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1356)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryUntil('Web');

// FireHub
```

<h2><a name="carryfromlast()"># method: carryFromLast</a></h2>

```php
public Str::carryFromLast(string $find)
```











### ### Carry from the last part of a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1382)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1382)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryFromLast('Web');

// Web App
```

<h2><a name="carryafterlast()"># method: carryAfterLast</a></h2>

```php
public Str::carryAfterLast(string $find)
```











### ### Carry from the last part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1410)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1410)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryAfter('Web ');

// App
```

<h2><a name="carryuntillast()"># method: carryUntilLast</a></h2>

```php
public Str::carryUntilLast(string $find)
```











### ### Carry until the last part of a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1432)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1432)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryUntilLast('Web');

// FireHub
```

<h2><a name="insert()"># method: insert</a></h2>

```php
public Str::insert(string $string, int $position)
```











### ### Inserts string at the position provided



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1459)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1459)**</sub>
#### Parameters

* string **$string** - _String to insert._
* int **$position** - _Position where string will be inserted._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->insert('=', 2);

// Fi=reHub
```

<h2><a name="move()"># method: move</a></h2>

```php
public Str::move(int $from, int $length, int $to)
```











### ### Move part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1487)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1487)**</sub>
#### Parameters

* int **$from** - _Start position of moving string, counting from zero._
* int **$length** - _Length of moving string, counting from $start._
* int **$to** - _Position where string will be moved, counting from zero._
#### Throws

* [\Error](./Wiki-Error) - _If $from is greater than $until._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->move(0, 2, 4);

// reFiHub
```

<h2><a name="overwrite()"># method: overwrite</a></h2>

```php
public Str::overwrite(int $from, int $until, string $with)
```











### ### Overwrite with part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1524)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1524)**</sub>
#### Parameters

* int **$from** - _Returned string will start at the start position in string, counting from zero._
* int **$until** - _Returned string will end at the start position in string._
* string **$with** - _The string to insert._
#### Throws

* [\Error](./Wiki-Error) - _If $from is greater than $until._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->overwrite(2, 4, '=');

// Fi=Hub
```

<h2><a name="replace()"># method: replace</a></h2>

```php
public Str::replace(string $find, string $with)
```











### ### Replace all occurrences of the search string with the replacement string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1549)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1549)**</sub>
#### Parameters

* string **$find** - _The replacement value that replaces found search values._
* string **$with** - _The string being searched and replaced on._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->replace('H', 'X');

// FireXub

<h2><a name="replacerecursive()"># method: replaceRecursive</a></h2>

```php
public Str::replaceRecursive(array $rules)
```











### ### Replace all occurrences recursively of search in a subject replaced with the given replacement value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1574)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1574)**</sub>
#### Parameters

* array **$rules** - _Find => Replace pattern rules._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('1122')->replaceRecursive(['1' => '2', '2' => '1']);

// 1111

<h2><a name="repeat()"># method: repeat</a></h2>

```php
public Str::repeat(int $times, string $separator = &#039;&#039;)
```











### ### Repeat a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1608)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1608)**</sub>
#### Parameters

* int **$times** - _Number of time the input string should be repeated.
If the $times is set to 0 or less, the function will return empty string._
* string **$separator** = '' - _[optional] 
Separator in between any repeated string._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->repeat(3);

// FireHubFireHubFireHubFireHub
```
With custom separator.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->repeat(3, '-');

// FireHub-FireHub-FireHub-FireHub
```

<h2><a name="reverse()"># method: reverse</a></h2>

```php
public Str::reverse():$this
```











### ### Reverse order of characters



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1635)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1635)**</sub>
#### Returns

* $this - _This string._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->reverse();

// buHeriF
```

<h2><a name="pad()"># method: pad</a></h2>

```php
public Str::pad(int $length, string $pad = &quot; &quot;, \FireHub\Core\Support\Enums\Side $side = Side::BOTH)
```











### ### Pad a string to a certain length with another string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1677)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1677)**</sub>
#### Parameters

* int **$length** - _If the value of pad_length is negative, less than, or equal to the length of the input string,
no padding takes place._
* string **$pad** = " " - _[optional] 
The pad may be truncated if the required number of padding characters can't be evenly divided by the pad's
length._
* [\FireHub\Core\Support\Enums\Side](./Wiki-Side) **$side** = Side::BOTH - _[optional] 
Pad side._
#### Throws

* [\Error](./Wiki-Error) - _If the pad is empty._
#### Examples
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from('FireHub')->pad(10, '_');

// ___FireHub
```
With side argument.
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from('FireHub')->pad(10, '-', Side::RIGHT);

// FireHub---
```

<h2><a name="mask()"># method: mask</a></h2>

```php
public Str::mask(\FireHub\Core\Support\Contracts\HighLevel\Characters $with, int $from, ?int $length = null)
```











### ### Mask a portion of a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1716)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1716)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) **$with** - _Character to mask with._
* int **$from** - _If start is non-negative, masking will start at the start position in string, counting from zero.
If the start is negative, masking will start at the start character from the end of the string._
* null or int **$length** = null - _[optional] 
Maximum number of characters to use for masking._
#### Examples
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web App')->mask(Char::from('*'), 5, 3);

// FireH***Web App
```

<h2><a name="prepend()"># method: prepend</a></h2>

```php
public Str::prepend(string $prefix)
```











### ### Prepends the given string to the current string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1750)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1750)**</sub>
#### Parameters

* string **$prefix** - _The prefix to prepend._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->prepend('Text-');

// Text-FireHub
```

<h2><a name="append()"># method: append</a></h2>

```php
public Str::append(string $suffix)
```











### ### Appends the given string to the current string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1772)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1772)**</sub>
#### Parameters

* string **$suffix** - _The suffix to append._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->append('-text');

// FireHub-text
```

<h2><a name="ensureprefix()"># method: ensurePrefix</a></h2>

```php
public Str::ensurePrefix(string $prefix)
```











### ### Makes sure that the current string starts with the given text



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1797)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1797)**</sub>
#### Parameters

* string **$prefix** - _The prefix to make sure it exists._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->ensureStartsWith('The ');

// The FireHub
```

<h2><a name="ensuresuffix()"># method: ensureSuffix</a></h2>

```php
public Str::ensureSuffix(string $suffix)
```











### ### Makes sure that the current string ends with the given text



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1820)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1820)**</sub>
#### Parameters

* string **$suffix** - _The suffix to make sure it exists._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->ensureEndsWith(' Framework');

// FireHub Framework
```

<h2><a name="removeprefix()"># method: removePrefix</a></h2>

```php
public Str::removePrefix(string $prefix)
```











### ### Makes sure that the current string doesn't start with the given text



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1844)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1844)**</sub>
#### Parameters

* string **$prefix** - _The prefix to make sure exists._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->removePrefix('Fire');

// Hub
```

<h2><a name="removesuffix()"># method: removeSuffix</a></h2>

```php
public Str::removeSuffix(string $suffix)
```











### ### Makes sure that the current string doesn't end with the given text



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1870)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1870)**</sub>
#### Parameters

* string **$suffix** - _The suffix to make sure exists._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->removeSuffix('Hub');

// Fire

<h2><a name="surround()"># method: surround</a></h2>

```php
public Str::surround(string $with)
```











### Surrounds string with the given substring



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1895)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1895)**</sub>
#### Parameters

* string **$with** - _The substring to add to both sides._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->surround('-');

// -FireHub-
```

<h2><a name="shuffle()"># method: shuffle</a></h2>

```php
public Str::shuffle()
```











### ### Randomly shuffles a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1920)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1920)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->shuffle();

// rHiuebF
```

<h2><a name="quote()"># method: quote</a></h2>

```php
public Str::quote(string $with)
```











### ### Wraps each word in the string with specified quote



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1958)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L1958)**</sub>
#### Parameters

* string **$with** - _String to quote with._
#### Throws

* [\Error](./Wiki-Error) - _If $with argument is empty._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->quote(-);

// -FireHub- -Web- -App-
```

<h2><a name="trim()"># method: trim</a></h2>

```php
public Str::trim(\FireHub\Core\Support\Enums\Side $side = Side::BOTH, string $characters = &quot; 
	 &quot;)
```











### ### Strip whitespace (or other characters) from the beginning and end of a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2012)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2012)**</sub>
#### Parameters

* [\FireHub\Core\Support\Enums\Side](./Wiki-Side) **$side** = Side::BOTH - _[optional] 
Side to trim string._
* string **$characters** = " 
	 " - _[optional] 
The stripped characters can also be specified using the char-list parameter. List all characters that you want
to be stripped. With '..', you can specify a range of characters._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from(" FireHub \n\r")->trim();

// FireHub
```
Trim only left side with first parameter.
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from("FireHub \n\r")->trim(Side::LEFT);

// FireHub \n\r
```
Trim with a custom set of characters.
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Side;

Str::from("FireHub \n\r")->trim(Side::RIGHT, "\n\r ");

// FireHub
```

<h2><a name="truncate()"># method: truncate</a></h2>

```php
public Str::truncate(int $length, string $with = &#039;&#039;)
```











### ### Truncates the string to a given length



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2050)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2050)**</sub>
#### Parameters

* int **$length** - _Maximum string length, with $with argument included._
* string **$with** = '' - _[optional] 
Truncates the string with._
#### Throws

* [\Error](./Wiki-Error) - _If $with argument is equal or larger than $length argument._
#### Examples
Truncate with string at the end.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->truncate(10, '...');

// FireHub...
```

<h2><a name="safetruncate()"># method: safeTruncate</a></h2>

```php
public Str::safeTruncate(int $length, string $with)
```











### ### Truncates the string to a given length, while ensuring that it does not split words



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2085)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2085)**</sub>
#### Parameters

* int **$length** - _Maximum string length, with $with argument included._
* string **$with** - _Truncates the string with._
#### Throws

* [\Error](./Wiki-Error) - _If $with argument is equal or larger than $length argument._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web Application')->safeTruncate(17, '...');

// FireHub Web...
```

<h2><a name="first()"># method: first</a></h2>

```php
public Str::first()
```











### ### Get first character of string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2120)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2120)**</sub>
<h2><a name="last()"># method: last</a></h2>

```php
public Str::last()
```











### ### Get last character of string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2139)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2139)**</sub>
<h2><a name="chop()"># method: chop</a></h2>

```php
public Str::chop(int $length = 1)
```











### ### Chop a string to an array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2173)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2173)**</sub>
#### Parameters

* int **$length** = 1 - _[optional] 
Maximum length of the chunk._
#### Throws

* [\Error](./Wiki-Error) - _If length is less than 1._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->chop();

// ['F', 'i', 'r', 'e', 'H', 'u', 'b']
```
Splitting string by custom length.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->chop(3);

// ['Fir', 'eHu', 'b']
```

<h2><a name="break()"># method: break</a></h2>

```php
public Str::break(string $with, int $limit = MAX)
```











### ### Break string with a separator



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2206)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2206)**</sub>
#### Parameters

* string **$with** - _The boundary string._
* int **$limit** = MAX - _[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is negative, all components except the last - limit are returned.
If the limit parameter is zero, then this is treated as 1._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->break('H');

// ['Fire' 'ub']
```
Splitting string by custom length.
```php
use FireHub\Core\Support\Str;

Str::from('FireHubFireHubFireHub')->break('H', 2);

// ['Fire' 'hbFireHubFireHub']
```

<h2><a name="breakwithany()"># method: breakWithAny</a></h2>

```php
public Str::breakWithAny(array $characters, int $limit = MAX)
```











### ### Break string with any of separators



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2230)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2230)**</sub>
#### Parameters

* array **$characters** - _<code>non-empty-string[]</code>
The boundary characters._
* int **$limit** = MAX - _[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1._
#### Examples
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web Application')->breakWithAny([Char::from('e'), Char::from('p')]);

// ['Fir', 'Hub W', 'b A', '', 'lication']
```

<h2><a name="split()"># method: split</a></h2>

```php
public Str::split(string $with, int $limit = MAX)
```











### ### Split string with a separator



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2254)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2254)**</sub>
#### Parameters

* string **$with** - _The boundary string._
* int **$limit** = MAX - _[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->split('H');

// ['Fire' 'Hub']
```

<h2><a name="splitbeforeany()"># method: splitBeforeAny</a></h2>

```php
public Str::splitBeforeAny(array $characters, int $limit = MAX)
```











### ### Split string before any of separators



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2279)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2279)**</sub>
#### Parameters

* array **$characters** - _The boundary characters._
* int **$limit** = MAX - _[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1._
#### Examples
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web Application')->splitBeforeAny([Char::from('W'), Char::from('A')]);

// ['FireHub ', 'Web ', 'App']
```

<h2><a name="splitafterany()"># method: splitAfterAny</a></h2>

```php
public Str::splitAfterAny(array $characters, int $limit = MAX)
```











### ### Split string after any of separators



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2304)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2304)**</sub>
#### Parameters

* array **$characters** - _<code>non-empty-string[]</code>
The boundary characters._
* int **$limit** = MAX - _[optional] 
If the limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of the string.
If the limit parameter is zero or -1, then this is treated as 1._
#### Examples
```php
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Char;

Str::from('FireHub Web Application')->splitAfterAny([Char::from('W'), Char::from('A')]);

// ['FireHub W', 'eb A', 'pplication']
```

<h2><a name="group()"># method: group</a></h2>

```php
public Str::group(int $number_of_groups)
```











### ### Group a string into chunks



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2331)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2331)**</sub>
#### Parameters

* int **$number_of_groups** - _The size of each chunk._
#### Throws

* [\Error](./Wiki-Error) - _If number of groups is less than one._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->group(3);

// ['Fir', 'eHu', 'b']
```

<h2><a name="containtimes()"># method: containTimes</a></h2>

```php
public Str::containTimes(string $value)
```











### ### Checks how mny times string contains value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2355)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2355)**</sub>
#### Parameters

* string **$value** - _The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->containTimes('b');

// 2
```

<h2><a name="length()"># method: length</a></h2>

```php
public Str::length()
```











### ### Get string length



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2377)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2377)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->length();

// 7
```

<h2><a name="indexof()"># method: indexOf</a></h2>

```php
public Str::indexOf(string $find)
```











### ### Find the position of the first occurrence of a substring



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2399)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2399)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->indexOf('Web');

// 8
```

<h2><a name="lastindexof()"># method: lastIndexOf</a></h2>

```php
public Str::lastIndexOf(string $find)
```











### ### Find the position of the last occurrence of a substring



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2421)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2421)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->lastIndexOf('e');

// 9
```

<h2><a name="charat()"># method: charAt</a></h2>

```php
public Str::charAt(int $index)
```











### ### Find the character at the provider position



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2443)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2443)**</sub>
#### Parameters

* int **$index** - _Position where character is located.
If start is non-negative, the returned string will start at the start position in string, counting from zero.
If the start is negative, the returned string will start at the start character from the end of the string._
#### Throws

* [\Error](./Wiki-Error) - _If character index is out of range._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->charAt(4);

// H
```

<h2><a name="__tostring()"># method: __toString</a></h2>

```php
public Str::__toString()
```















><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2465)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Str.php#L2465)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

echo Str::from('FireHub');

// FireHub
```
