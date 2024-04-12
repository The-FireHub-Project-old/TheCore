```php
final class \FireHub\Core\Support\Strings\Expression()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Regular expression



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Expression**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L29)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#check()">check</a>|### Perform a regular expression check|
|public|<a href="#get()">get</a>|### Perform a regular expression check and get a result|
|public|<a href="#replace()">replace</a>|### Perform a regular expression search and replace|
|public|<a href="#split()">split</a>|### Perform a regular expression split|

<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Expression::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L44)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L44)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) or [\FireHub\Core\Support\Contracts\HighLevel\Strings](./Wiki-Strings) **$string** - _Character or string to use._
#### Returns

* void
<h2><a name="check()"># method: check</a></h2>

```php
public Expression::check(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):\FireHub\Core\Support\Strings\Expression\Check
```











### ### Perform a regular expression check



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L61)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L61)**</sub>
#### Parameters

* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of expression pattern modifiers._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Check](./Wiki-Check) - _Regular expression check._
<h2><a name="get()"># method: get</a></h2>

```php
public Expression::get(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):\FireHub\Core\Support\Strings\Expression\Get
```











### ### Perform a regular expression check and get a result



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L80)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L80)**</sub>
#### Parameters

* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of expression pattern modifiers._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Get](./Wiki-Get) - _Regular expression check and get a result._
<h2><a name="replace()"># method: replace</a></h2>

```php
public Expression::replace(string $with, \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):\FireHub\Core\Support\Strings\Expression\Replace
```











### ### Perform a regular expression search and replace



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L102)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L102)**</sub>
#### Parameters

* string **$with** - _The string to replace._
* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of expression pattern modifiers._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Replace](./Wiki-Replace) - _Regular expression check._
<h2><a name="split()"># method: split</a></h2>

```php
public Expression::split(\FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):\FireHub\Core\Support\Strings\Expression\Split
```











### ### Perform a regular expression split



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L121)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L121)**</sub>
#### Parameters

* variadic [\FireHub\Core\Support\Enums\String\Expression\Modifier](./Wiki-Modifier) **$modifiers** - _List of expression pattern modifiers._
#### Returns

* [\FireHub\Core\Support\Strings\Expression\Split](./Wiki-Split) - _Regular expression split._