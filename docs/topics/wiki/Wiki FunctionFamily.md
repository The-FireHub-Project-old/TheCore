```php
abstract class \FireHub\Core\Support\Strings\Expression\FunctionFamily()
```







> [!IMPORTANT]
This is an **abstract** class that cannot be instantiated directly.



### ### Regular expression function family



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Expression\FunctionFamily**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L41)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|magic public|<a href="#any()">any</a>||
|magic public|<a href="#is()">is</a>||
|magic public|<a href="#has()">has</a>||
|magic public|<a href="#oneormore()">oneOrMore</a>||
|magic public|<a href="#zeroormore()">zeroOrMore</a>||
|magic public|<a href="#zeroorone()">zeroOrOne</a>||
|magic public|<a href="#exactly()">exactly</a>||
|magic public|<a href="#atleast()">atLeast</a>||
|magic public|<a href="#atmost()">atMost</a>||
|magic public|<a href="#between()">between</a>||
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#custom()">custom</a>|### Custom regex pattern|
|public|<a href="#withdelimiter()">withDelimiter</a>|### Set patter enclosure delimiter|
|public|<a href="#__call()">__call</a>|### Call predefined patterns|

<h2><a name="any()"># method: any</a></h2>

```php
public FunctionFamily::any():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### Any string is from the beginning until the end_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="is()"># method: is</a></h2>

```php
public FunctionFamily::is():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### If string is from the beginning until the end_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="has()"># method: has</a></h2>

```php
public FunctionFamily::has():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### Has string from the beginning until the end_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="oneormore()"># method: oneOrMore</a></h2>

```php
public FunctionFamily::oneOrMore():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### One or more occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="zeroormore()"># method: zeroOrMore</a></h2>

```php
public FunctionFamily::zeroOrMore():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### Zero or more occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="zeroorone()"># method: zeroOrOne</a></h2>

```php
public FunctionFamily::zeroOrOne():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### Zero or one occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="exactly()"># method: exactly</a></h2>

```php
public FunctionFamily::exactly():\FireHub\Core\Support\Strings\Expression\Pattern
```













_(int $number) ### Exactly occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="atleast()"># method: atLeast</a></h2>

```php
public FunctionFamily::atLeast():\FireHub\Core\Support\Strings\Expression\Pattern
```













_(int $number) ### At least occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="atmost()"># method: atMost</a></h2>

```php
public FunctionFamily::atMost():\FireHub\Core\Support\Strings\Expression\Pattern
```













_(int $number) ### At most occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="between()"># method: between</a></h2>

```php
public FunctionFamily::between():\FireHub\Core\Support\Strings\Expression\Pattern
```













_(int $from, int $to) ### Between occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public FunctionFamily::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character, \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L79)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L79)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) or [\FireHub\Core\Support\Contracts\HighLevel\Strings](./Wiki-Strings) **$string_or_character** - _Character or string to use._
* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of expression pattern modifiers._
#### Returns

* void
<h2><a name="custom()"># method: custom</a></h2>

```php
abstract public FunctionFamily::custom(string $pattern):mixed
```







> [!IMPORTANT]
This is an **abstract** method that cannot be instantiated directly.



### ### Custom regex pattern



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L99)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L99)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
#### Returns

* mixed - _Regex result._
<h2><a name="withdelimiter()"># method: withDelimiter</a></h2>

```php
public FunctionFamily::withDelimiter(\FireHub\Core\Support\Contracts\HighLevel\Characters $character):static
```











### ### Set patter enclosure delimiter



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L116)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L116)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) **$character** - _Patter enclosure delimiter to use._
#### Throws

* [\Error](./Wiki-Error) - _If delimiter is alphanumeric, backslash, or whitespace._
#### Returns

* static - _Current function._
<h2><a name="__call()"># method: __call</a></h2>

```php
public FunctionFamily::__call(string $method, array $arguments):\FireHub\Core\Support\Strings\Expression\Pattern
```











### ### Call predefined patterns



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L172)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L172)**</sub>
#### Parameters

* string **$method** - _<code>non-empty-string</code>
Method name._
* array **$arguments** - _<code>array<array-key, mixed></code>
List of arguments._
#### Throws

* [\Error](./Wiki-Error) - _If method doesn&#039;t exist._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern) - _This regex pattern._