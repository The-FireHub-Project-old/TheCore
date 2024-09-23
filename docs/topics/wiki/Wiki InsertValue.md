```php
final class \FireHub\Core\Support\Strings\InsertValue()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Insert value on string



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\InsertValue**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L24)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|readonly private|<a href="#$string">string</a>|||
|readonly private|<a href="#$value">value</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#before()">before</a>|### Insert value before pattern|
|public|<a href="#after()">after</a>|### Insert value before pattern|

<h2><a name="$string"># property: string</a></h2>

```php
readonly private \FireHub\Core\Support\Contracts\HighLevel\Strings $string
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L42)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L42)**</sub>
<h2><a name="$value"># property: value</a></h2>

```php
readonly private string $value
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L43)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L43)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public InsertValue::__construct(\FireHub\Core\Support\Contracts\HighLevel\Strings $string, non-empty-string $value):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L41)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L41)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Strings](./Wiki-Strings) **$string** - _String to use._
* non-empty-string **$value** - _String to insert._
#### Returns

* void
<h2><a name="before()"># method: before</a></h2>

```php
public InsertValue::before():\FireHub\Core\Support\Strings\Expression\ReplaceFunc
```











### ### Insert value before pattern



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L54)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L54)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\ReplaceFunc](./Wiki-ReplaceFunc) - _Regular expression search and replace using a callback._
<h2><a name="after()"># method: after</a></h2>

```php
public InsertValue::after():\FireHub\Core\Support\Strings\Expression\ReplaceFunc
```











### ### Insert value before pattern



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L68)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.InsertValue.php#L68)**</sub>
#### Returns

* [\FireHub\Core\Support\Strings\Expression\ReplaceFunc](./Wiki-ReplaceFunc) - _Regular expression search and replace using a callback._