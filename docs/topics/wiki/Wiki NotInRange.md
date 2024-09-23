```php
final class \FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotInRange()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Not in the range of characters



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\NotInRange**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L25)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|readonly private|<a href="#$from">from</a>|||
|readonly private|<a href="#$until">until</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#regex()">regex</a>|### Get regex predefined pattern|

<h2><a name="$from"># property: from</a></h2>

```php
readonly private \FireHub\Core\Support\Contracts\HighLevel\Characters $from
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L41)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L41)**</sub>
<h2><a name="$until"># property: until</a></h2>

```php
readonly private \FireHub\Core\Support\Contracts\HighLevel\Characters $until
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L42)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L42)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public NotInRange::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters $from, \FireHub\Core\Support\Contracts\HighLevel\Characters $until):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L40)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L40)**</sub>
#### Parameters

* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) **$from** - _From character._
* [\FireHub\Core\Support\Contracts\HighLevel\Characters](./Wiki-Characters) **$until** - _Until character._
#### Returns

* void
<h2><a name="regex()"># method: regex</a></h2>

```php
public NotInRange::regex()
```











### ### Get regex predefined pattern



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L55)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/predefined/firehub.NotInRange.php#L55)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If $characters is not exclusive list of character interface._