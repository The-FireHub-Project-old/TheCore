```php
final class \FireHub\Core\Support\Strings\Expression()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Regular expression



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Expression**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L31)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$modifiers">modifiers</a>|### List of expression pattern modifiers|[]|
|readonly private|<a href="#$string">string</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#check()">check</a>|### Perform a regular expression check|
|public|<a href="#get()">get</a>|### Perform a regular expression check and get a result|
|public|<a href="#replace()">replace</a>|### Perform a regular expression search and replace|
|public|<a href="#replacefunc()">replaceFunc</a>|### Perform a regular expression search and replace|
|public|<a href="#remove()">remove</a>|### Perform a regular expression remove|
|public|<a href="#split()">split</a>|### Perform a regular expression split|
|public|<a href="#splitwithoutempty()">splitWithoutEmpty</a>|### Perform a regular expression split|

<h2><a name="$modifiers"># property: modifiers</a></h2>

```php
protected \FireHub\Core\Support\Enums\String\Expression\Modifier[] $modifiers = []
```









### ### List of expression pattern modifiers



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L39)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L39)**</sub>
<h2><a name="$string"># property: string</a></h2>

```php
readonly private \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L58)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L58)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Expression::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string, \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L57)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L57)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) or [\FireHub\Core\Support\Contracts\HighLevel\Strings](./Wiki-Strings) **$string** - _Character or string to use._
* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of expression pattern modifiers._
#### Returns

* void
<h2><a name="check()"># method: check</a></h2>

```php
public Expression::check():\FireHub\Core\Support\Strings\Expression\Check
```











### ### Perform a regular expression check



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L77)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L77)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Check](./Wiki-Check) - _Regular expression check._
<h2><a name="get()"># method: get</a></h2>

```php
public Expression::get():\FireHub\Core\Support\Strings\Expression\Get
```











### ### Perform a regular expression check and get a result



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L91)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L91)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Get](./Wiki-Get) - _Regular expression check and get a result._
<h2><a name="replace()"># method: replace</a></h2>

```php
public Expression::replace(string $with):\FireHub\Core\Support\Strings\Expression\Replace
```











### ### Perform a regular expression search and replace



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L109)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L109)**</sub>
#### Parameters

* string **$with** - _The string to replace._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Replace](./Wiki-Replace) - _Regular expression search and replace._
<h2><a name="replacefunc()"># method: replaceFunc</a></h2>

```php
public Expression::replaceFunc(callable $callback):\FireHub\Core\Support\Strings\Expression\ReplaceFunc
```











### ### Perform a regular expression search and replace



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L130)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L130)**</sub>
#### Parameters

* callable **$callback** - _<code>Closure(array<array-key, string> $matches):string</code>
A callback that will be called and passed an array of matched elements in the subject string.
The callback should return the replacement string.
This is the callback signature._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\ReplaceFunc](./Wiki-ReplaceFunc) - _Regular expression search and replace using a callback._
<h2><a name="remove()"># method: remove</a></h2>

```php
public Expression::remove():\FireHub\Core\Support\Strings\Expression\Replace
```











### ### Perform a regular expression remove



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L144)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L144)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Replace](./Wiki-Replace) - _Regular expression search and remove._
<h2><a name="split()"># method: split</a></h2>

```php
public Expression::split(int $limit = -1):\FireHub\Core\Support\Strings\Expression\Split
```











### ### Perform a regular expression split



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L163)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L163)**</sub>
#### Parameters

* int **$limit** = -1 - _[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit)._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Split](./Wiki-Split) - _Regular expression split._
<h2><a name="splitwithoutempty()"># method: splitWithoutEmpty</a></h2>

```php
public Expression::splitWithoutEmpty(int $limit = -1):\FireHub\Core\Support\Strings\Expression\Split
```











### ### Perform a regular expression split



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L182)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L182)**</sub>
#### Parameters

* int **$limit** = -1 - _[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit)._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Split](./Wiki-Split) - _Regular expression split._