<title># first</title>

<code-block lang="php">
<![CDATA[function \FireHub\Core\Support\Helpers\Arr\first(array $array):null|\FireHub\Core\Support\Helpers\Arr\TValue]]>
</code-block>













### ### Get first value from array



<deflist>
    <def title="Function basic info:">
        <list><li>This function was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Function Name:">
        \FireHub\Core\Support\Helpers\Arr\first()
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/helpers/arr.php#L78">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/helpers/arr.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/helpers/arr.php">
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
        <list><li><a href="Arr.md#firstkey()">\FireHub\Core\Support\LowLevel\Arr::firstKey()</a>  - <format style="italic">To get the first key from an array.</format></li></list>
    </def>
</deflist>
### Used by
<deflist>
    <def title="This function is used by:">
        <list><li><a href="Arr.md#first()">\FireHub\Core\Support\Collection\Type\Arr::first()</a>  - <format style="italic">To get the first value from a collection.</format></li></list>
    </def>
</deflist>
### Templates
<deflist>
    <def title="This function has templates:">
        <list><li>TKey of array-key</li><li>TValue</li></list>
    </def>
</deflist>
### Parameters
<deflist>
    <def title="This function has parameters:">
        <list><li>array <format style="bold">$array</format></li></list>
    </def>
</deflist>
### Returns
<deflist>
    <def title="This function returns:">
        <list><li>null or <a href="TValue.md">\FireHub\Core\Support\Helpers\Arr\TValue</a> - <format style="italic">First value from an array or null if an array is empty.</format></li></list>
    </def>
</deflist>
### Examples
```php
use function FireHub\Core\Support\Helpers\Arr\first;

first([1,2,3]);

// 1
```
