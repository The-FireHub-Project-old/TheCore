```php
final class \FireHub\Core\FireHub()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Main FireHub class for bootstrapping

_This class contains all system definitions, constants and dependant components for FireHub bootstrapping._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\FireHub**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L34)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/firehub.FireHub.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#boot()">boot</a>|### Light the torch|

<h2><a name="boot()"># method: boot</a></h2>

```php
public static FireHub::boot(\FireHub\Core\Initializers\Enums\Kernel $kernel):string
```











### ### Light the torch

_This methode serves for instantiating the FireHub framework._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L67)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L67)**</sub>
#### Parameters

* [\FireHub\Core\Initializers\Enums\Kernel](./Wiki-Kernel) **$kernel** - _Pick Kernel from Kernel enum, process your request and return the appropriate response._
#### Throws

* [\Error](./Wiki-Error) - _If a system cannot load constant, helper or autoload files, or a system cannot load autoload files,
or failed to register autoloader._
#### Returns

* string - _Response from Kernel._