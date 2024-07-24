<title># is_empty</title>

<code-block lang="php">
<![CDATA[function \FireHub\Core\Support\Helpers\Arr\is_empty(array<array-key,mixed> $array):bool]]>
</code-block>













### ### Checks if an array is empty



<deflist>
    <def title="Function basic info:">
        <list><li>This function was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Function Name:">
        \FireHub\Core\Support\Helpers\Arr\is_empty()
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/helpers/arr.php#L46">
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
        <list><li><a href="Iterables.md#count()">\FireHub\Core\Support\LowLevel\Iterables::count()</a>  - <format style="italic">To count array elements.</format></li></list>
    </def>
</deflist>
### Used by
<deflist>
    <def title="This function is used by:">
        <list><li><a href="Arr.md#isempty()">\FireHub\Core\Support\Collection\Type\Arr::isEmpty()</a>  - <format style="italic">To check if an array is empty.</format></li></list>
    </def>
</deflist>
### Parameters
<deflist>
    <def title="This function has parameters:">
        <list><li>array&lt;array-key,mixed&gt; <format style="bold">$array</format> - <format style="italic">
Array to check.
</format></li></list>
    </def>
</deflist>
### Returns
<deflist>
    <def title="This function returns:">
        <list><li>bool - <format style="italic">True if an array is empty, false otherwise</format></li></list>
    </def>
</deflist>
### Examples
```php
use function FireHub\Core\Support\Helpers\Array\is_empty;

is_empty([]);

// true
```
