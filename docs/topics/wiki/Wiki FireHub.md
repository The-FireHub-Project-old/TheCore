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
|private|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#boot()">boot</a>|### Light the torch|
|private|<a href="#bootloaders()">bootloaders</a>|### Initialize bootloaders|
|private|<a href="#registerconstants()">registerConstants</a>|### Register constants|
|private|<a href="#registerhelpers()">registerHelpers</a>|### Register helper functions|
|private|<a href="#preload()">preload</a>|### Load preloader classes|
|private|<a href="#autoload()">autoload</a>|### Load autoloader|
|private|<a href="#kernel()">kernel</a>|### Process Kernel|

<h2><a name="__construct()"># method: __construct</a></h2>

```php
private FireHub::__construct():void
```











### ### Constructor

_Prevents instantiation of the main class._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L44)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L44)**</sub>
#### Returns

* void
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
<h2><a name="bootloaders()"># method: bootloaders</a></h2>

```php
private FireHub::bootloaders():$this
```











### ### Initialize bootloaders

_Load series of bootloaders required to boot FireHub framework._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L92)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L92)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If a system cannot load constant, helper or autoload files, or a system cannot load autoload files,
or failed to register autoloader._
#### Returns

* $this - _This object._
<h2><a name="registerconstants()"># method: registerConstants</a></h2>

```php
private FireHub::registerConstants():$this
```











### ### Register constants

_This method will scan Initializers\Constants folder and automatically include all PHP files._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L112)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L112)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If a system cannot load constant files._
#### Returns

* $this - _This object._
<h2><a name="registerhelpers()"># method: registerHelpers</a></h2>

```php
private FireHub::registerHelpers():$this
```











### ### Register helper functions

_This method will scan Initializers\Helpers folder and automatically include all PHP files._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L143)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L143)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If a system cannot load helper files._
#### Returns

* $this - _This object._
<h2><a name="preload()"># method: preload</a></h2>

```php
private FireHub::preload():$this
```











### ### Load preloader classes



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L176)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L176)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If a system cannot load autoload files._
#### Returns

* $this - _This object._
<h2><a name="autoload()"># method: autoload</a></h2>

```php
private FireHub::autoload():$this
```











### ### Load autoloader

_This method contains definitions and series of functions needed for calling classes._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L228)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L228)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If a system failed to register autoloader._
#### Returns

* $this - _This object._
<h2><a name="kernel()"># method: kernel</a></h2>

```php
private FireHub::kernel(\FireHub\Core\Initializers\Kernel $kernel):string
```











### ### Process Kernel



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L270)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L270)**</sub>
#### Parameters

* [\FireHub\Core\Initializers\Kernel](./Wiki-Kernel) **$kernel** - _Picked Kernel from Kernel enum, process your request and return the appropriate response._
#### Returns

* string - _Response from Kernel._