<title># FireHub</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\FireHub()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Main FireHub class for bootstrapping

<p><format style="italic">This class contains all system definitions, constants and dependant components for FireHub bootstrapping.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\FireHub
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L26">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/firehub.FireHub.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|private|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#boot()">boot</a>|### Light the torch|
|private|<a href="#kernel()">kernel</a>|### Process Kernel|

## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[private FireHub::__construct():void]]>
</code-block>













### ### Constructor

<p><format style="italic">Prevents instantiation of the main class.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L36">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L36">
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
        <list><li>void</li></list>
    </def>
</deflist>
## method: boot {id="boot()"}

<code-block lang="php">
    <![CDATA[public static FireHub::boot(\FireHub\Core\Initializers\Enums\Kernel $kernel):string]]>
</code-block>













### ### Light the torch

<p><format style="italic">This methode serves for instantiating the FireHub framework.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L54">
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
        <list><li><a href="Kernel.md">\FireHub\Core\Initializers\Enums\Kernel</a>  - <format style="italic">As parameter.</format></li><li><a href="Kernel.md#run()">\FireHub\Core\Initializers\Enums\Kernel::run()</a>  - <format style="italic">To run selected Kernel.</format></li><li><a href="Firehub.md#kernel()">\FireHub\Core\Firehub::kernel()</a>  - <format style="italic">To process Kernel.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Kernel.md">\FireHub\Core\Initializers\Enums\Kernel</a> <format style="bold">$kernel</format> - <format style="italic">
Pick Kernel from Kernel enum, process your request and return the appropriate response.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Response from Kernel.</format></li></list>
    </def>
</deflist>
## method: kernel {id="kernel()"}

<code-block lang="php">
    <![CDATA[private FireHub::kernel(\FireHub\Core\Initializers\Kernel $kernel):string]]>
</code-block>













### ### Process Kernel



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L75">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L75">
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
        <list><li><a href="Kernel.md">\FireHub\Core\Initializers\Kernel</a>  - <format style="italic">As parameter.</format></li><li><a href="Kernel.md#runtime()">\FireHub\Core\Kernel\HTTP\Kernel::runtime()</a>  - <format style="italic">To handle client runtime.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Kernel.md">\FireHub\Core\Initializers\Kernel</a> <format style="bold">$kernel</format> - <format style="italic">
Picked Kernel from Kernel enum, process your
request and return the appropriate response.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Response from Kernel.</format></li></list>
    </def>
</deflist>