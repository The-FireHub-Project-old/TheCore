<title># is32bit</title>

<code-block lang="php">
<![CDATA[function \FireHub\Core\Support\Helpers\PHP\is32bit():bool]]>
</code-block>













### ### Check if using 32bit version of PHP



<deflist>
    <def title="Function basic info:">
        <list><li>This function was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Function Name:">
        \FireHub\Core\Support\Helpers\PHP\is32bit()
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/helpers/php.php#L63">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/helpers/php.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/helpers/php.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Uses
<deflist>
    <def title="This function uses:">
        <list><li><a href="SIZE.md">\FireHub\Core\Support\Constants\Number\SIZE</a>  - <format style="italic">To get the size of an integer in bytes in this build of PHP.</format></li></list>
    </def>
</deflist>
### Returns
<deflist>
    <def title="This function returns:">
        <list><li>bool - <format style="italic">True if using 32bit version of PHP, otherwise false.</format></li></list>
    </def>
</deflist>
### Examples
```php
use function FireHub\Core\Support\Helpers\PHP\is32bit;

is32bit();

// false
```
