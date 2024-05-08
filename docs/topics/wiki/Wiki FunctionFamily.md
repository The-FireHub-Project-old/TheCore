```php
abstract class \FireHub\Core\Support\Strings\Expression\FunctionFamily()
```







> [!IMPORTANT]
This is an **abstract** class that cannot be instantiated directly.



### ### Regular expression function family



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Expression\FunctionFamily**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L45)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$delimiter">delimiter</a>|### Pattern enclosure|&#039;/&#039;|
|protected|<a href="#$modifiers">modifiers</a>|### List of expression pattern modifiers|[]|
|protected|<a href="#$string_or_character">string_or_character</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|magic public|<a href="#any()">any</a>||
|magic public|<a href="#is()">is</a>||
|magic public|<a href="#has()">has</a>||
|magic public|<a href="#beginswith()">beginsWith</a>||
|magic public|<a href="#endswith()">endsWith</a>||
|magic public|<a href="#oneormore()">oneOrMore</a>||
|magic public|<a href="#zeroormore()">zeroOrMore</a>||
|magic public|<a href="#zeroorone()">zeroOrOne</a>||
|magic public|<a href="#exactly()">exactly</a>||
|magic public|<a href="#atleast()">atLeast</a>||
|magic public|<a href="#atmost()">atMost</a>||
|magic public|<a href="#between()">between</a>||
|magic public|<a href="#before()">before</a>||
|magic public|<a href="#after()">after</a>||
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#custom()">custom</a>|### Custom regex pattern|
|public|<a href="#withdelimiter()">withDelimiter</a>|### Set patter enclosure delimiter|
|protected|<a href="#patternbuilder()">patternBuilder</a>|### Pattern builder|
|public|<a href="#__call()">__call</a>|### Call predefined patterns|

<h2><a name="$delimiter"># property: delimiter</a></h2>

```php
protected non-empty-string $delimiter = &#039;/&#039;
```









### ### Pattern enclosure



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L53)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L53)**</sub>
<h2><a name="$modifiers"># property: modifiers</a></h2>

```php
protected \FireHub\Core\Support\Enums\String\Expression\Modifier[] $modifiers = []
```









### ### List of expression pattern modifiers



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L61)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L61)**</sub>
<h2><a name="$string_or_character"># property: string_or_character</a></h2>

```php
protected \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L82)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L82)**</sub>
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
<h2><a name="beginswith()"># method: beginsWith</a></h2>

```php
public FunctionFamily::beginsWith():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### If begins string is_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="endswith()"># method: endsWith</a></h2>

```php
public FunctionFamily::endsWith():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### If ends string is_

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
<h2><a name="before()"># method: before</a></h2>

```php
public FunctionFamily::before():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### Before occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="after()"># method: after</a></h2>

```php
public FunctionFamily::after():\FireHub\Core\Support\Strings\Expression\Pattern
```













_() ### After occurrences_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L0)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern)
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public FunctionFamily::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character, \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L81)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L81)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L101)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L101)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
#### Returns

* mixed - _Regex result._
<h2><a name="withdelimiter()"># method: withDelimiter</a></h2>

```php
public FunctionFamily::withDelimiter(\FireHub\Core\Support\Contracts\HighLevel\Characters $character):static
```











### ### Set patter enclosure delimiter



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L118)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L118)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) **$character** - _Patter enclosure delimiter to use._
#### Throws

* [\Error](./Wiki-Error) - _If delimiter is alphanumeric, backslash, or whitespace._
#### Returns

* static - _Current function._
<h2><a name="patternbuilder()"># method: patternBuilder</a></h2>

```php
protected FunctionFamily::patternBuilder(string $pattern):string
```











### ### Pattern builder



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L142)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L142)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
#### Returns

* string - _Pattern string._
<h2><a name="__call()"># method: __call</a></h2>

```php
public FunctionFamily::__call(non-empty-string $method, array<array-key,mixed> $arguments):\FireHub\Core\Support\Strings\Expression\Pattern
```











### ### Call predefined patterns



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L170)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.FunctionFamily.php#L170)**</sub>
#### Parameters

* non-empty-string **$method** - _Method name._
* array&lt;array-key,mixed&gt; **$arguments** - _List of arguments._
#### Throws

* [\Error](./Wiki-Error) - _If method doesn&#039;t exist._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Pattern](./Wiki-Pattern) - _This regex pattern._