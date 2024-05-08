<title># Permission</title>

<code-block lang="php">
<![CDATA[enum Permission]]>
</code-block>













### ### File permission enum



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\FileSystem\Permission
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php">
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
        <list><li><a href="FileSystem.md#setpermissions()">\FireHub\Core\Support\LowLevel\FileSystem::setPermissions()</a>  - <format style="italic">As parameter.</format></li><li><a href="Folder.md#create()">\FireHub\Core\Support\LowLevel\Folder::create()</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#nothing">NOTHING</a>|### User has no permissions|0|
|<a href="#execute">EXECUTE</a>|### User with execute permissions can run a file as a program|1|
|<a href="#write">WRITE</a>|### Grants the ability to modify, or remove the content of the file|2|
|<a href="#write_execute">WRITE_EXECUTE</a>|### Combination of write and execute permissions|3|
|<a href="#read">READ</a>|### Grants the ability to read, i.e., view the contents of the file|4|
|<a href="#read_execute">READ_EXECUTE</a>|### Combination of read and execute permissions|5|
|<a href="#read_write">READ_WRITE</a>|### Combination of read and write permissions|6|
|<a href="#all">ALL</a>|### User has all permissions: read, write and execute|7|

## case: NOTHING {id="nothing"}

<code-block lang="php">
<![CDATA[
    NOTHING    ]]>
</code-block>







### ### User has no permissions



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L27">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L27">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: EXECUTE {id="execute"}

<code-block lang="php">
<![CDATA[
    EXECUTE = 1    ]]>
</code-block>







### ### User with execute permissions can run a file as a program



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L33">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WRITE {id="write"}

<code-block lang="php">
<![CDATA[
    WRITE = 2    ]]>
</code-block>







### ### Grants the ability to modify, or remove the content of the file



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L39">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: WRITE_EXECUTE {id="write_execute"}

<code-block lang="php">
<![CDATA[
    WRITE_EXECUTE = 3    ]]>
</code-block>







### ### Combination of write and execute permissions



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L45">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L45">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: READ {id="read"}

<code-block lang="php">
<![CDATA[
    READ = 4    ]]>
</code-block>







### ### Grants the ability to read, i.e., view the contents of the file



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L51">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L51">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: READ_EXECUTE {id="read_execute"}

<code-block lang="php">
<![CDATA[
    READ_EXECUTE = 5    ]]>
</code-block>







### ### Combination of read and execute permissions



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L57">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: READ_WRITE {id="read_write"}

<code-block lang="php">
<![CDATA[
    READ_WRITE = 6    ]]>
</code-block>







### ### Combination of read and write permissions



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L63">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L63">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: ALL {id="all"}

<code-block lang="php">
<![CDATA[
    ALL = 7    ]]>
</code-block>







### ### User has all permissions: read, write and execute



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L69">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>