```php
final class \FireHub\Core\FireHub()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Main FireHub class for bootstrapping

_This class contains all system definitions, constants and dependant components for FireHub bootstrapping._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\FireHub**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L26)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/firehub.FireHub.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|private|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#boot()">boot</a>|### Light the torch|
|private|<a href="#kernel()">kernel</a>|### Process Kernel|

<h2><a name="__construct()"># method: __construct</a></h2>

```php
private FireHub::__construct():void
```













### ### Constructor

_Prevents instantiation of the main class._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L36)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L36)**</sub>
#### Returns

* void
<h2><a name="boot()"># method: boot</a></h2>

```php
public static FireHub::boot(\FireHub\Core\Initializers\Enums\Kernel $kernel):string
```













### ### Light the torch

_This methode serves for instantiating the FireHub framework._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L54)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L54)**</sub>
#### Parameters

* [\FireHub\Core\Initializers\Enums\Kernel](./Wiki-Kernel) **$kernel** - _Pick Kernel from Kernel enum, process your request and return the appropriate response._
#### Returns

* string - _Response from Kernel._
<h2><a name="kernel()"># method: kernel</a></h2>

```php
private FireHub::kernel(\FireHub\Core\Initializers\Kernel $kernel):string
```













### ### Process Kernel



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L75)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L75)**</sub>
#### Parameters

* [\FireHub\Core\Initializers\Kernel](./Wiki-Kernel) **$kernel** - _Picked Kernel from Kernel enum, process your
request and return the appropriate response._
#### Returns

* string - _Response from Kernel._