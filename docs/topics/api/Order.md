<title># Order</title>

<code-block lang="php">
<![CDATA[enum Order]]>
</code-block>













### ### Ordering enum



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\Order
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Order.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Order.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/firehub.Order.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#asc">ASC</a>|### Arranging in ascending order|&#039;ASC&#039;|
|<a href="#desc">DESC</a>|### Arranging in descending order|&#039;DESC&#039;|

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#reverse()">reverse</a>|Get the reverse order.|

## method: reverse {id="reverse()"}

<code-block lang="php">
    <![CDATA[public Order::reverse():\FireHub\Core\Support\Enums\Order]]>
</code-block>













### Get the reverse order.



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Order.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Order.php#L41">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Order.md">\FireHub\Core\Support\Enums\Order</a> - <format style="italic">The reversed order.</format></li></list>
    </def>
</deflist>
## case: ASC {id="asc"}

<code-block lang="php">
<![CDATA[
    ASC = &#039;ASC&#039;    ]]>
</code-block>







### ### Arranging in ascending order



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Order.php#L27">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Order.php#L27">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Arr.md#sort()">\FireHub\Core\Support\LowLevel\Arr::sort()</a>  - <format style="italic">As default parameter.</format></li><li><a href="Arr.md#sortbykey()">\FireHub\Core\Support\LowLevel\Arr::sortByKey()</a>  - <format style="italic">As default parameter.</format></li><li><a href="FileSystem.md#list()">\FireHub\Core\Support\LowLevel\FileSystem::list()</a>  - <format style="italic">To list files and folders in ascending order.</format></li></list>
    </def>
</deflist>
## case: DESC {id="desc"}

<code-block lang="php">
<![CDATA[
    DESC = &#039;DESC&#039;    ]]>
</code-block>







### ### Arranging in descending order



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Order.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Order.php#L33">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="FileSystem.md#list()">\FireHub\Core\Support\LowLevel\FileSystem::list()</a>  - <format style="italic">To list files and folders in descending order.</format></li></list>
    </def>
</deflist>