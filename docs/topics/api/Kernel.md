<title># Kernel</title>

<code-block lang="php">
<![CDATA[enum Kernel]]>
</code-block>













### ### Enum for available Kernel types



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Initializers\Enums\Kernel
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L28">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Used by
<deflist>
    <def title="This enum is used by:">
        <list><li><a href="FireHub.md#boot()">\FireHub\Core\FireHub::boot()</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
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

## method: run {id="run()"}

<code-block lang="php">
    <![CDATA[public Kernel::run():\FireHub\Core\Initializers\Kernel]]>
</code-block>













### ### Run selected Kernel



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L64">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L64">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Kernel.md">\FireHub\Core\Kernel\HTTP\Kernel</a>  - <format style="italic">To create HTTP Kernel.</format></li><li><a href="Kernel.md">\FireHub\Core\Kernel\HTTP\Micro\Kernel</a>  - <format style="italic">To create Micro HTTP Kernel.</format></li><li><a href="Kernel.md">\FireHub\Core\Kernel\Console\Kernel</a>  - <format style="italic">To create Console Kernel.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="FireHub.md#boot()">\FireHub\Core\FireHub::boot()</a>  - <format style="italic">To run selected Kernel.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Kernel.md">\FireHub\Core\Initializers\Kernel</a> - <format style="italic">Selected Kernel.</format></li></list>
    </def>
</deflist>
## case: HTTP {id="http"}

<code-block lang="php">
<![CDATA[
    HTTP    ]]>
</code-block>







### ### Fully functional HTTP Kernel



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L36">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L36">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="See also:">
        <list><li><a href="Kernel.md">\FireHub\Core\Kernel\HTTP\Kernel</a> - <format style="italic">To find more details on how to use this kernel.</format></li></list>
    </def>
</deflist>
## case: MICRO_HTTP {id="micro_http"}

<code-block lang="php">
<![CDATA[
    MICRO_HTTP    ]]>
</code-block>







### ### Simplified Micro HTTP Kernel



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L44">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L44">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="See also:">
        <list><li><a href="Kernel.md">\FireHub\Core\Kernel\HTTP\Micro\Kernel</a> - <format style="italic">To find more details on how to use this kernel.</format></li></list>
    </def>
</deflist>
## case: CONSOLE {id="console"}

<code-block lang="php">
<![CDATA[
    CONSOLE    ]]>
</code-block>







### ### Console Kernel



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L52">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/initializers/enums/firehub.Kernel.php#L52">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="See also:">
        <list><li><a href="Kernel.md">\FireHub\Core\Kernel\Console\Kernel</a> - <format style="italic">To find more details on how to use this kernel.</format></li></list>
    </def>
</deflist>