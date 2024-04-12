```php
final class \FireHub\Core\Support\IStr()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Case-insensitive string high-level class

_Class allows you to manipulate strings in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\IStr**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L28)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.IStr.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#startswith()">startsWith</a>|### Checks if a string starts with a given value|
|public|<a href="#endswith()">endsWith</a>|### Checks if a string ends with a given value|
|public|<a href="#contains()">contains</a>|### Checks if string contains value|
|public|<a href="#equals()">equals</a>|### Checks if string equals value|
|public|<a href="#carryfrom()">carryFrom</a>|### Carry from part of the string|
|public|<a href="#carryuntil()">carryUntil</a>|### Carry until part of the string|
|public|<a href="#carryfromlast()">carryFromLast</a>|### Carry from the last part of a string|
|public|<a href="#carryuntillast()">carryUntilLast</a>|### Carry until the last part of a string|
|public|<a href="#indexof()">indexOf</a>|### Find the position of the first occurrence of a substring|
|public|<a href="#lastindexof()">lastIndexOf</a>|### Find the position of the last occurrence of a substring|
|inherited public|<a href="#__construct()">__construct</a>|### Constructor|
|inherited public static |<a href="#from()">from</a>|### Create a new string from raw string|
|inherited public static |<a href="#fromlist()">fromList</a>|### Create a new string from array elements with a string|
|inherited public|<a href="#expression()">expression</a>|### Regular expression|
|inherited public|<a href="#startswithany()">startsWithAny</a>|### Checks if a string starts with any of the given values|
|inherited public|<a href="#endswithany()">endsWithAny</a>|### Checks if a string ends with any of the given values|
|inherited public|<a href="#containsall()">containsAll</a>|### Checks if string contains all values|
|inherited public|<a href="#containsany()">containsAny</a>|### Checks if string contains any of the values|
|inherited public|<a href="#equalsany()">equalsAny</a>|### Checks if string equals to any of the values|
|inherited public|<a href="#encoding()">encoding</a>|### Get or change string encoding|
|inherited public|<a href="#string()">string</a>|### Get or set string as raw string|
|inherited public|<a href="#tolower()">toLower</a>|### Make a string lowercase|
|inherited public|<a href="#toupper()">toUpper</a>|### Make a string uppercase|
|inherited public|<a href="#totitle()">toTitle</a>|### Make a string title-case|
|inherited public|<a href="#capitalize()">capitalize</a>|### Make a first character of string uppercased|
|inherited public|<a href="#decapitalize()">deCapitalize</a>|### Make a first character of string uppercased|
|inherited public|<a href="#addslashes()">addSlashes</a>|### Quote string with slashes|
|inherited public|<a href="#stripslashes()">stripSlashes</a>|### Un-quotes a quoted string|
|inherited public|<a href="#striptags()">stripTags</a>|### Strip HTML and PHP tags from a string|
|inherited public|<a href="#quotemeta()">quoteMeta</a>|### Quote meta characters|
|inherited public|<a href="#slice()">slice</a>|### Slice with part of the string|
|inherited public|<a href="#carry()">carry</a>|### Carry with part of the string|
|inherited public|<a href="#carryafter()">carryAfter</a>|### Carry from part of the string|
|inherited public|<a href="#carryafterlast()">carryAfterLast</a>|### Carry from the last part of the string|
|inherited public|<a href="#asboolean()">asBoolean</a>|### Boolean representation of the given logical string value|
|inherited public|<a href="#length()">length</a>|### Get string length|
|inherited public|<a href="#__tostring()">__toString</a>||

<h2><a name="startswith()"># method: startsWith</a></h2>

```php
public IStr::startsWith(string $value)
```











### ### Checks if a string starts with a given value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L48)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L48)**</sub>
#### Parameters

* string **$value** - _<code>non-empty-string></code>
The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->startsWith('fire');

// true
```

<h2><a name="endswith()"># method: endsWith</a></h2>

```php
public IStr::endsWith(string $value)
```











### ### Checks if a string ends with a given value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L77)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L77)**</sub>
#### Parameters

* string **$value** - _<code>non-empty-string></code>
The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->endsWith('hub');

// true
```

<h2><a name="contains()"># method: contains</a></h2>

```php
public IStr::contains(string $value)
```











### ### Checks if string contains value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L106)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L106)**</sub>
#### Parameters

* string **$value** - _<code>non-empty-string</code>
The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->contains('fire');

// true
```

<h2><a name="equals()"># method: equals</a></h2>

```php
public IStr::equals(string $value)
```











### ### Checks if string equals value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L134)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L134)**</sub>
#### Parameters

* string **$value** - _<code>non-empty-string</code>
The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->contains('firehub');

// true
```

<h2><a name="carryfrom()"># method: carryFrom</a></h2>

```php
public IStr::carryFrom(string $find)
```











### ### Carry from part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L150)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L150)**</sub>
#### Parameters

* string **$find** - _String to find._
<h2><a name="carryuntil()"># method: carryUntil</a></h2>

```php
public IStr::carryUntil(string $find)
```











### ### Carry until part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L168)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L168)**</sub>
#### Parameters

* string **$find** - _String to find._
<h2><a name="carryfromlast()"># method: carryFromLast</a></h2>

```php
public IStr::carryFromLast(string $find)
```











### ### Carry from the last part of a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L186)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L186)**</sub>
#### Parameters

* string **$find** - _String to find._
<h2><a name="carryuntillast()"># method: carryUntilLast</a></h2>

```php
public IStr::carryUntilLast(string $find)
```











### ### Carry until the last part of a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L204)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L204)**</sub>
#### Parameters

* string **$find** - _String to find._
<h2><a name="indexof()"># method: indexOf</a></h2>

```php
public IStr::indexOf(string $find)
```











### ### Find the position of the first occurrence of a substring



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L231)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L231)**</sub>
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
public IStr::lastIndexOf(string $find)
```











### ### Find the position of the last occurrence of a substring



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.IStr.php#L253)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.IStr.php#L253)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->lastIndexOf('e');

// 9
```

<h2><a name="__construct()"># method: __construct</a></h2>

```php
final public Str::__construct(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L59)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L59)**</sub>
#### Parameters

* string **$string** - _String to use._
* null or [\FireHub\Core\Support\Enums\String\Encoding](./Wiki-Encoding) **$encoding** = null - _[optional] 
Character encoding. If it is null, the internal character encoding value will be used._
#### Returns

* void
<h2><a name="from()"># method: from</a></h2>

```php
public static Str::from(string $string, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static
```











### ### Create a new string from raw string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L91)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L91)**</sub>
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
public static Str::fromList(array|\FireHub\Core\Support\Contracts\HighLevel\Collectable $list, string $glue = &#039;&#039;, null|\FireHub\Core\Support\Enums\String\Encoding $encoding = null):static
```











### ### Create a new string from array elements with a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L138)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L138)**</sub>
#### Parameters

* array or [\FireHub\Core\Support\Contracts\HighLevel\Collectable](./Wiki-Collectable) **$list** - _<code>array<array-key, null|scalar|Stringable>|\FireHub\Core\Support\Contracts\HighLevel\Collectable<int, \FireHub\Core\Support\Str></code>
The array of strings to implode._
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
public Str::expression()
```











### ### Regular expression



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L154)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L154)**</sub>
<h2><a name="startswithany()"># method: startsWithAny</a></h2>

```php
public Str::startsWithAny(string ...$values)
```











### ### Checks if a string starts with any of the given values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L198)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L198)**</sub>
#### Parameters

* variadic string **$values** - _<code>non-empty-string></code>
The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->startsWithAny('Fire', 'test');

// true
```

<h2><a name="endswithany()"># method: endsWithAny</a></h2>

```php
public Str::endsWithAny(string ...$values)
```











### ### Checks if a string ends with any of the given values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L245)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L245)**</sub>
#### Parameters

* variadic string **$values** - _<code>non-empty-string></code>
The value to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->endsWithAny('Hub', 'test');

// true
```

<h2><a name="containsall()"># method: containsAll</a></h2>

```php
public Str::containsAll(string ...$values)
```











### ### Checks if string contains all values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L292)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L292)**</sub>
#### Parameters

* variadic string **$values** - _<code>non-empty-string[]</code>
The list of values to search for._
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L317)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L317)**</sub>
#### Parameters

* variadic string **$values** - _<code>non-empty-string[]</code>
The list of values to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->containsAny('ire', 'Fi');

// true
```

<h2><a name="equalsany()"># method: equalsAny</a></h2>

```php
public Str::equalsAny(string ...$values)
```











### ### Checks if string equals to any of the values



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L362)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L362)**</sub>
#### Parameters

* variadic string **$values** - _<code>non-empty-string[]</code>
The list of values to search for._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->equalsAny('FireHub', 'Fi');

// true
```

<h2><a name="encoding()"># method: encoding</a></h2>

```php
public Str::encoding(?\FireHub\Core\Support\Enums\String\Encoding $encoding = null)
```











### ### Get or change string encoding



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L390)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L390)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L428)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L428)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L455)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L455)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L480)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L480)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L505)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L505)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L531)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L531)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L561)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L561)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->deCapitalize();

// fireHub
```

<h2><a name="addslashes()"># method: addSlashes</a></h2>

```php
public Str::addSlashes()
```











### ### Quote string with slashes



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L592)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L592)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L621)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L621)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L665)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L665)**</sub>
#### Parameters

* null or string or array **$allowed_tags** = null - _<code>null|string|array<int, string></code>
You can use the optional second parameter to specify tags which should not be stripped._
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L689)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L689)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub?')->quoteMeta();

// FireHub\?
```

<h2><a name="slice()"># method: slice</a></h2>

```php
public Str::slice(int $from, ?int $until = null)
```











### ### Slice with part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L730)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L730)**</sub>
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
Getting slice of string with passed $until argument.
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->slice(3, 5);

// eHu
```
Getting slice of string with negative $until argument.
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L777)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L777)**</sub>
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

<h2><a name="carryafter()"># method: carryAfter</a></h2>

```php
public Str::carryAfter(string $find)
```











### ### Carry from part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L829)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L829)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryAfter('Web ');

// App
```

<h2><a name="carryafterlast()"># method: carryAfterLast</a></h2>

```php
public Str::carryAfterLast(string $find)
```











### ### Carry from the last part of the string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L907)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L907)**</sub>
#### Parameters

* string **$find** - _String to find._
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub Web App')->carryAfter('Web ');

// App
```

<h2><a name="asboolean()"># method: asBoolean</a></h2>

```php
public Str::asBoolean()
```











### ### Boolean representation of the given logical string value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L957)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L957)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('Yes')->asBoolean();

// true
```

<h2><a name="length()"># method: length</a></h2>

```php
public Str::length()
```











### ### Get string length



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L979)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L979)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

Str::from('FireHub')->length();

// 7
```

<h2><a name="__tostring()"># method: __toString</a></h2>

```php
public Str::__toString()
```















><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Str.php#L1043)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Str.php#L1043)**</sub>
#### Examples
```php
use FireHub\Core\Support\Str;

echo Str::from('FireHub');

// FireHub
```
