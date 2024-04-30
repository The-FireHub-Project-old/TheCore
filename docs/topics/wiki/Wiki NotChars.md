```php
final class \FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotChars()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Not-characters



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotChars**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotChars.php#L25)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotChars.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotChars.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#regex()">regex</a>|### Get regex predefined pattern|

<h2><a name="__construct()"># method: __construct</a></h2>

```php
public NotChars::__construct(array $characters):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotChars.php#L39)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotChars.php#L39)**</sub>
#### Parameters

* array **$characters** - _<code>\FireHub\Core\Support\Contracts\HighLevel\Characters[]</code>
List of characters._
#### Returns

* void
<h2><a name="regex()"># method: regex</a></h2>

```php
public NotChars::regex()
```











### ### Get regex predefined pattern



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotChars.php#L53)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotChars.php#L53)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If $characters is not exclusive list of character interface._