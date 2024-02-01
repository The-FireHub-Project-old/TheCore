<title># DS</title>

<code-block lang="php">
<![CDATA[constant string DS = \DIRECTORY_SEPARATOR]]>
</code-block>













### ### System definition for separating folders, platform specific

<p><format style="italic">Convert '\\' and '/' for different operating systems. This is just a shorter version of PHP internal
DIRECTORY_SEPARATOR constant.</format></p>

<deflist>
    <def title="Constant basic info:">
        <list><li>This constant was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Constant Name:">
        \FireHub\Core\Support\Constants\Path\DS
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/constants/path.php#L47">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/constants/path.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/constants/path.php">
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
    <def title="This constant is used by:">
        <list><li><a href="FireHub.md#preload()">\FireHub\Core\FireHub::preload()</a>  - <format style="italic">As system definition for separating folders, platform specific.</format></li><li><a href="FireHub.md#autoload()">\FireHub\Core\FireHub::autoload()</a>  - <format style="italic">As system definition for separating folders, platform specific.</format></li><li><a href="Callback.md#classcomponents()">\FireHub\Core\Initializers\Autoload\Callback::classComponents()</a>  - <format style="italic">As system definition for separating folders, platform specific.</format></li><li><a href="Callback.md#__invoke()">\FireHub\Core\Initializers\Autoload\Callback::__invoke()</a>  - <format style="italic">As system definition for separating folders, platform specific.</format></li><li><a href="Path.md#project()">\FireHub\Core\Support\Path::project()</a>  - <format style="italic">As system definition for separating folders, platform specific.</format></li><li><a href="File.md#copy()">\FireHub\Core\Support\LowLevel\File::copy()</a>  - <format style="italic">To separate folders.</format></li><li><a href="FileSystem.md#rename()">\FireHub\Core\Support\LowLevel\FileSystem::rename()</a>  - <format style="italic">To separate folders.</format></li></list>
    </def>
</deflist>
### Links
<deflist>
    <def title="Useful links:">
        <list><li><a href="https://www.php.net/manual/en/dir.constants.php">https://www.php.net/manual/en/dir.constants.php</a> - <format style="italic">To find more info for DIRECTORY_SEPARATOR constant.</format></li></list>
    </def>
</deflist>