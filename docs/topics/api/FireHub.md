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

<p><format style="italic">This class contains all system definitions, constants, and dependant components for FireHub bootstrapping.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\FireHub
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L34">
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
|private|<a href="#bootloaders()">bootloaders</a>|### Initialize bootloaders|
|private|<a href="#registerconstants()">registerConstants</a>|### Register constants|
|private|<a href="#registerhelpers()">registerHelpers</a>|### Register helper functions|
|private|<a href="#preload()">preload</a>|### Load preloader classes|
|private|<a href="#autoload()">autoload</a>|### Load autoloader|
|private|<a href="#kernel()">kernel</a>|### Process Kernel|

## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[private FireHub::__construct():void]]>
</code-block>













### ### Constructor

<p><format style="italic">Prevents instantiation of the main class.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L44">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L44">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L67">
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
        <list><li><a href="Kernel.md">\FireHub\Core\Initializers\Enums\Kernel</a>  - <format style="italic">As parameter.</format></li><li><a href="Kernel.md#run()">\FireHub\Core\Initializers\Enums\Kernel::run()</a>  - <format style="italic">To run the selected Kernel.</format></li><li><a href="Firehub.md#bootloaders()">\FireHub\Core\Firehub::bootloaders()</a>  - <format style="italic">To initialize bootloaders.</format></li><li><a href="Firehub.md#kernel()">\FireHub\Core\Firehub::kernel()</a>  - <format style="italic">To process Kernel.</format></li></list>
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
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system can&#039;t load constant, helper, or autoload files, or a system can&#039;t load autoload files,
or failed to register autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Response from Kernel.</format></li></list>
    </def>
</deflist>
## method: bootloaders {id="bootloaders()"}

<code-block lang="php">
    <![CDATA[private FireHub::bootloaders():$this]]>
</code-block>













### ### Initialize bootloaders

<p><format style="italic">Load the series of bootloaders required to boot FireHub framework.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L92">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L92">
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
        <list><li><a href="FireHub.md#registerconstants()">\FireHub\Core\FireHub::registerConstants()</a>  - <format style="italic">To register constants.</format></li><li><a href="FireHub.md#registerhelpers()">\FireHub\Core\FireHub::registerHelpers()</a>  - <format style="italic">To register helpers.</format></li><li><a href="FireHub.md#preload()">\FireHub\Core\FireHub::preload()</a>  - <format style="italic">To load preloader classes.</format></li><li><a href="Firehub.md#autoload()">\FireHub\Core\Firehub::autoload()</a>  - <format style="italic">To load autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system can&#039;t load constant, helper, or autoload files, or a system can&#039;t load autoload files,
or failed to register autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This object.</format></li></list>
    </def>
</deflist>
## method: registerConstants {id="registerconstants()"}

<code-block lang="php">
    <![CDATA[private FireHub::registerConstants():$this]]>
</code-block>













### ### Register constants

<p><format style="italic">This method will scan the Initializers\Constants folder and automatically include all PHP files.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L112">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L112">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="FireHub.md#bootloaders()">\FireHub\Core\FireHub::bootloaders()</a>  - <format style="italic">To register constants.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system can&#039;t load constant files.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This object.</format></li></list>
    </def>
</deflist>
## method: registerHelpers {id="registerhelpers()"}

<code-block lang="php">
    <![CDATA[private FireHub::registerHelpers():$this]]>
</code-block>













### ### Register helper functions

<p><format style="italic">This method will scan the Initializers\Helpers folder and automatically include all PHP files.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L143">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L143">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="FireHub.md#bootloaders()">\FireHub\Core\FireHub::bootloaders()</a>  - <format style="italic">To register helpers.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system can&#039;t load helper files.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This object.</format></li></list>
    </def>
</deflist>
## method: preload {id="preload()"}

<code-block lang="php">
    <![CDATA[private FireHub::preload():$this]]>
</code-block>













### ### Load preloader classes



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L176">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L176">
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
        <list><li><a href="Autoload.md#include()">\FireHub\Core\Initializers\Autoload::include()</a>  - <format style="italic">To manually include a list of classes.</format></li><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">As system definition for separating folders, platform-specific.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="FireHub.md#bootloaders()">\FireHub\Core\FireHub::bootloaders()</a>  - <format style="italic">To load preloader classes.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system can&#039;t load autoload files.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This object.</format></li></list>
    </def>
</deflist>
## method: autoload {id="autoload()"}

<code-block lang="php">
    <![CDATA[private FireHub::autoload():$this]]>
</code-block>













### ### Load autoloader

<p><format style="italic">This method contains definitions and a series of functions needed for calling classes.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L228">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L228">
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
        <list><li><a href="Autoload.md#prepend()">\FireHub\Core\Initializers\Autoload::prepend()</a>  - <format style="italic">To register FireHub main autoloader.</format></li><li><a href="StrSB.md#explode()">\FireHub\Core\Support\LowLevel\StrSB::explode()</a>  - <format style="italic">To create an array from namespace.</format></li><li><a href="StrSB.md#implode()">\FireHub\Core\Support\LowLevel\StrSB::implode()</a>  - <format style="italic">To join component into namespace.</format></li><li><a href="StrSB.md#tolower()">\FireHub\Core\Support\LowLevel\StrSB::toLower()</a>  - <format style="italic">To lowercase all namespace components</format></li><li><a href="Arr.md#firstkey()">\FireHub\Core\Support\LowLevel\Arr::firstKey()</a>  - <format style="italic">To check if the first key is firehub and core.</format></li><li><a href="Arr.md#shift()">\FireHub\Core\Support\LowLevel\Arr::shift()</a>  - <format style="italic">To remove firehub and core form namespace.</format></li><li><a href="Path.md#core()">\FireHub\Core\Support\Path::core()</a>  - <format style="italic">To get FireHub Core path.</format></li><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">As system definition for separating folders, platform-specific.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If a system failed to register autoloader.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This object.</format></li></list>
    </def>
</deflist>
## method: kernel {id="kernel()"}

<code-block lang="php">
    <![CDATA[private FireHub::kernel(\FireHub\Core\Initializers\Kernel $kernel):string]]>
</code-block>













### ### Process Kernel



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/firehub.FireHub.php#L270">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/firehub.FireHub.php#L270">
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
Picked Kernel from Kernel enum, process your request and return the appropriate response.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Response from Kernel.</format></li></list>
    </def>
</deflist>