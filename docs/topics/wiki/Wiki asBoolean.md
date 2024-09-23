```php
function \FireHub\Core\Support\Helpers\String\asBoolean(string $string):bool
```











### ### Boolean representation of the given logical string value

_True - 'true', '1', 'on', 'yes', positive-int
False - 'false', '0','off', 'no', only blanks, non-positive-int
For all other strings, the return value is a result of a boolean cast._

<sub>_This function was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Function Name:  **\FireHub\Core\Support\Helpers\String\asBoolean()**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/helpers/string.php#L47)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/helpers/string.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/helpers/string.php)**</sub>


### Parameters

* string **$string**
### Returns

* bool - _True or false, based on boolean representation of the given logical string value._
### Examples
```php
use function FireHub\Core\Support\Helpers\String\asBoolean;

asBoolean('Yes');

// true
```
