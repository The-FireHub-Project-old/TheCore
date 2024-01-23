```php
enum Kernel
```













### ### Enum for available Kernel types



<sub>_This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Enum Name:  **\FireHub\Core\Initializers\Enums\Kernel**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L28)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php)**</sub>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#http">HTTP</a>|### Fully functional HTTP Kernel||
|<a href="#micro_http">MICRO_HTTP</a>|### Simplified Micro HTTP Kernel||
|<a href="#console">CONSOLE</a>|### Console Kernel||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#run()">run</a>|### Run selected Kernel|

<h2><a name="run()"># method: run</a></h2>

```php
public Kernel::run():\FireHub\Core\Initializers\Kernel
```













### ### Run selected Kernel



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L64)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L64)**</sub>
#### Returns

* [\FireHub\Core\Initializers\Kernel](./Wiki-Kernel) - _Selected Kernel._
<h2><a name="http"># case: HTTP</a></h2>

```php
HTTP
```







### ### Fully functional HTTP Kernel



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L36)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L36)**</sub>
#### See also

* [\FireHub\Core\Kernel\HTTP\Kernel](./Wiki-Kernel.md) - _To find more details on how to use this kernel._
<h2><a name="micro_http"># case: MICRO_HTTP</a></h2>

```php
MICRO_HTTP
```







### ### Simplified Micro HTTP Kernel



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L44)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L44)**</sub>
#### See also

* [\FireHub\Core\Kernel\HTTP\Micro\Kernel](./Wiki-Kernel.md) - _To find more details on how to use this kernel._
<h2><a name="console"># case: CONSOLE</a></h2>

```php
CONSOLE
```







### ### Console Kernel



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L52)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L52)**</sub>
#### See also

* [\FireHub\Core\Kernel\Console\Kernel](./Wiki-Kernel.md) - _To find more details on how to use this kernel._