```php
final class \FireHub\Core\Support\Path()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Path support class

_Give info about various paths inside the FireHub framework._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Path**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Path.php#L30)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Path.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Path.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#project()">project</a>|### Get FireHub project path|
|public static |<a href="#core()">core</a>|### Get FireHub Core path|

<h2><a name="project()"># method: project</a></h2>

```php
public static Path::project():string
```











### ### Get FireHub project path



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Path.php#L45)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Path.php#L45)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If a system could not load your project phar._
#### Returns

* string - _<code>non-empty-string</code> FireHub project path._
<h2><a name="core()"># method: core</a></h2>

```php
public static Path::core():string
```











### ### Get FireHub Core path



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Path.php#L68)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Path.php#L68)**</sub>
#### Returns

* string - _<code>non-empty-string</code> FireHub Core path._