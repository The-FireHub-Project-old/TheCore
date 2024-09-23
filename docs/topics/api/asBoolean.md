<title># asBoolean</title>

<code-block lang="php">
<![CDATA[function \FireHub\Core\Support\Helpers\String\asBoolean(string $string):bool]]>
</code-block>













### ### Boolean representation of the given logical string value

<p><format style="italic">True – 'true', '1', 'on', 'yes', positive-int
False – 'false', '0','off', 'no', only blanks, non-positive-int
For all other strings, the return value is a result of a boolean cast.</format></p>

<deflist>
    <def title="Function basic info:">
        <list><li>This function was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Function Name:">
        \FireHub\Core\Support\Helpers\String\asBoolean()
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/helpers/string.php#L47">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/helpers/string.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/helpers/string.php">
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
        <list><li><a href="DataIs.md#null()">\FireHub\Core\Support\LowLevel\DataIs::null()</a>  - <format style="italic">To check if $map matches any predefined values.</format></li><li><a href="DataIs.md#numeric()">\FireHub\Core\Support\LowLevel\DataIs::numeric()</a>  - <format style="italic">To check if $string is a numeric value.</format></li><li><a href="StrSB.md#tolower()">\FireHub\Core\Support\LowLevel\StrSB::toLower()</a>  - <format style="italic">To lowercase $string argument.</format></li><li><a href="Regex.md#replace()">\FireHub\Core\Support\LowLevel\Regex::replace()</a>  - <format style="italic">To replace spaces with empty value.</format></li></list>
    </def>
</deflist>
### Used by
<deflist>
    <def title="This function is used by:">
        <list><li><a href="Char.md#asboolean()">\FireHub\Core\Support\Char::asBoolean()</a>  - <format style="italic">To convert raw string to boolean.</format></li><li><a href="Str.md#asboolean()">\FireHub\Core\Support\Strings\Str::asBoolean()</a>  - <format style="italic">To convert raw string to boolean.</format></li></list>
    </def>
</deflist>
### Parameters
<deflist>
    <def title="This function has parameters:">
        <list><li>string <format style="bold">$string</format></li></list>
    </def>
</deflist>
### Returns
<deflist>
    <def title="This function returns:">
        <list><li>bool - <format style="italic">True or false, based on boolean representation of the given logical string value.</format></li></list>
    </def>
</deflist>
### Examples
```php
use function FireHub\Core\Support\Helpers\String\asBoolean;

asBoolean('Yes');

// true
```
