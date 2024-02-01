<title># FileSystem</title>

<code-block lang="php">
<![CDATA[class \FireHub\Core\Support\LowLevel\FileSystem()]]>
</code-block>













### ### File System low-level proxy class

<p><format style="italic">Class contains methods related to a file system.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\FileSystem
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L68">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php">
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
|public static |<a href="#exist()">exist</a>|### Checks whether a file or folder exists|
|public static |<a href="#isreadable()">isReadable</a>|### Tells whether a file exists and is readable|
|public static |<a href="#iswritable()">isWritable</a>|Tells whether the path is writable|
|public static |<a href="#issymboliclink()">isSymbolicLink</a>|### Tells whether the path is a symbolic link|
|public static |<a href="#rename()">rename</a>|### Renames a file or directory|
|public static |<a href="#basename()">basename</a>|### Returns a trailing name component of a path|
|public static |<a href="#pathinfo()">pathInfo</a>|### Returns information about a file path|
|public static |<a href="#absolutepath()">absolutePath</a>|### Returns canonical absolute pathname|
|public static |<a href="#parent()">parent</a>|### Returns parent folder path|
|public static |<a href="#getgroup()">getGroup</a>|### Gets file or folder group|
|public static |<a href="#setgroup()">setGroup</a>|### Changes file or folder group|
|public static |<a href="#getowner()">getOwner</a>|### Gets file or folder owner|
|public static |<a href="#setowner()">setOwner</a>|### Gets file or folder owner|
|public static |<a href="#getpermissions()">getPermissions</a>|### Gets path permissions|
|public static |<a href="#setpermissions()">setPermissions</a>|### Sets path permissions|
|public static |<a href="#lastaccessed()">lastAccessed</a>|### Gets last access time of path|
|public static |<a href="#lastmodified()">lastModified</a>|### Gets last modification time of a path|
|public static |<a href="#lastchanged()">lastChanged</a>|### Gets inode change time of a path|
|public static |<a href="#setlastaccessedandmodification()">setLastAccessedAndModification</a>|### Sets last access and modification time of a path|
|public static |<a href="#inode()">inode</a>|### Gets file inode|
|public static |<a href="#list()">list</a>|### List files and folders inside the specified folder|
|public static |<a href="#search()">search</a>|### Find path-names matching a pattern|
|public static |<a href="#symlink()">symlink</a>|### Creates a symbolic link|
|public static |<a href="#symlinktarget()">symlinkTarget</a>|### Returns the target of a symbolic link|
|public static |<a href="#symlinkgroup()">symlinkGroup</a>|### Changes group ownership of symlink|
|public static |<a href="#symlinkowner()">symlinkOwner</a>|### Changes user ownership of symlink|
|public static |<a href="#statistics()">statistics</a>|### Gives information about a file or folder|
|public static |<a href="#clearcache()">clearCache</a>|### Clears file status cache|

## method: exist {id="exist()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::exist(string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions
may return unexpected results for files which are larger than 2GB.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note><tip>
                <p><format style="bold">Tip:</format></p>
                <p>On windows, use //computername/share/filename or \\computername\share\filename to check files on network
shares.</p>
            </tip>

### ### Checks whether a file or folder exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L91">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L91">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the file or directory specified by filename exists, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isReadable {id="isreadable()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::isReadable(string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>The check is done using the real UID/GID instead of the effective one.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note>

### ### Tells whether a file exists and is readable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L114">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L114">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the file or directory specified by $path exists and is readable, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isWritable {id="iswritable()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::isWritable(string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note>

### Tells whether the path is writable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L136">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L136">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the filename exists and is writable.</format></li></list>
    </def>
</deflist>
## method: isSymbolicLink {id="issymboliclink()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::isSymbolicLink(string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note>

### ### Tells whether the path is a symbolic link



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L158">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L158">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the filename exists and is a symbolic link, false otherwise.</format></li></list>
    </def>
</deflist>
## method: rename {id="rename()"}

<code-block lang="php">
    <![CDATA[public static FileSystem::rename(string $path, string $new_name):void]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>On Windows, if $new_name already exists, it must be writable, otherwise [[FileSystem#rename()]] fails and
issues E_WARNING.</p>
            </note>

### ### Renames a file or directory

<p><format style="italic">Attempts to rename $path to $new_name, moving it between directories if necessary. If renaming a file and
$new_name exists, it will be overwritten. If renaming a directory and $new_name exists, this function will
emit a warning.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L194">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L194">
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
        <list><li><a href="FileSystem.md#parent()">\FireHub\Core\Support\LowLevel\FileSystem::parent()</a>  - <format style="italic">To return a parent folder path.</format></li><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">To separate folders.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
The old name path.
</format></li><li>string <format style="bold">$new_name</format> - <format style="italic">
<code>non-empty-string</code>
The new name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not rename a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: basename {id="basename()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::basename(string $path, string $suffix = &#039;&#039;):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<warning>
                <p><format style="bold">Caution:</format></p>
                <p>Method is locale aware, so for it to see the correct basename with multibyte character paths,
the matching locale must be set using the setlocale() function. If a path contains characters which are invalid
for the current locale, the behavior of [[FileSystem#basename()]] is undefined.</p>
            </warning><note>
                <p><format style="bold">Note:</format></p>
                <p>Method operates naively on the input string, and is not aware of the actual filesystem, or path
components such as "..".</p>
            </note>

### ### Returns a trailing name component of a path

<p><format style="italic">Given a string containing the path to a file or directory, this function will return the trailing name component.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L225">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L225">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
A path. On Windows, both slash (/) and backslash (\) are used as directory separator character. In other
environments, it is the forward slash (/).
</format></li><li>string <format style="bold">$suffix</format> = '' - <format style="italic">[optional] 
If the name component ends in suffix, this will also be cut off.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The base name of the given path.</format></li></list>
    </def>
</deflist>
## method: pathInfo {id="pathinfo()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::pathInfo(string $path):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<warning>
                <p><format style="bold">Caution:</format></p>
                <p>[[FileSystem#pathInfo()]] is locale aware, so for it to parse a path containing multibyte characters
correctly, the matching locale must be set using the setlocale() function.</p>
            </warning><note>
                <p><format style="bold">Note:</format></p>
                <p>[[FileSystem#pathInfo()]] operates naively on the input string, and is not aware of the actual filesystem,
or path components such as "..".</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>On Windows systems only, the \ character will be interpreted as a directory separator. On other systems
it will be treated like any other character.</p>
            </note>

### ### Returns information about a file path



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L255">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L255">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
The path to be parsed.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<'dirname': string|false, 'basename': string, 'extension': string|false,
'filename': string|false >]]></code> Information about a file path.</format></li></list>
    </def>
</deflist>
## method: absolutePath {id="absolutepath()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::absolutePath(string $path):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>Whilst a path must be supplied, the value can be an empty string. In this case, the value is interpreted
as the current directory.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>The running script must have executable permissions on all directories in the hierarchy, otherwise
[[FileSystem#absolutePath()]] will return false.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>For case-insensitive filesystems absolutePath() may or may not normalize the character case.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>The function [[FileSystem#absolutePath()]] will not work for a file which is inside a Phar as such a path
would be virtual path, not a real one.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>On Windows, one level only expands junctions and symbolic links to directories.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions
may return unexpected results for files which are larger than 2GB.</p>
            </note>

### ### Returns canonical absolute pathname

<p><format style="italic">Expands all symbolic links and resolves references to /./, /../ and extra / characters in the input path and
returns the canonical absolute pathname. Trailing delimiters, such as \ and /, are also removed.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L294">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L294">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
The path being checked.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get absolute path for path, file doesn&#039;t exist or a script doesn&#039;t have
executable permissions.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The canonical absolute pathname.</format></li></list>
    </def>
</deflist>
## method: parent {id="parent()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::parent(string $path, int $levels = 1):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<warning>
                <p><format style="bold">Caution:</format></p>
                <p>Be careful when using this function in a loop that can reach the top-level directory as this can
result in an infinite loop.</p>
            </warning>

### ### Returns parent folder path

<p><format style="italic">Given a string containing the path of a file or directory, this function will return the parent folder's path
that is levels up from the current folder.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L327">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L327">
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
        <list><li><a href="FileSystem.md#rename()">\FireHub\Core\Support\LowLevel\FileSystem::rename()</a>  - <format style="italic">To return a parent folder path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
A path.
</format></li><li>int <format style="bold">$levels</format> = 1 - <format style="italic">[optional] 
<code>positive-int</code>
The number of parent folders to go up. This must be an integer greater than 0.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If $levels are less than 1.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The parent folder name of the given path. If there are no slashes in path, a dot ('.') is
returned, indicating the current folder.</format></li></list>
    </def>
</deflist>
## method: getGroup {id="getgroup()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::getGroup(string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<warning>
                <p><format style="bold">Warning:</format></p>
                <p>This method does not work on Windows.</p>
            </warning><note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See clearCache() for more details.</p>
            </note><tip>
                <p><format style="bold">Tip:</format></p>
                <p>Use posix_getgrgid() to resolve it to a group name.</p>
            </tip>

### ### Gets file or folder group

<p><format style="italic">Gets the file or folder group. The group ID is returned in numerical format.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L354">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L354">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path of the file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get a group for file.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The group ID of the file.</format></li></list>
    </def>
</deflist>
## method: setGroup {id="setgroup()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::setGroup(string $path, string|int $group):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<warning>
                <p><format style="bold">Warning:</format></p>
                <p>This method does not work on Windows.</p>
            </warning><tip>
                <p><format style="bold">Tip:</format></p>
                <p>Use posix_getgrgid() to resolve it to a group name.</p>
            </tip>

### ### Changes file or folder group

<p><format style="italic">Attempts to change the group of the file or folder $path to $group. Only the superuser may change the group of
files arbitrarily; other users may change the group of files to any group of which that user is a member.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L386">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L386">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path of the file or folder.
</format></li><li>string or int <format style="bold">$group</format> - <format style="italic">
<code>non-empty-string|int</code>
A group name or number.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not set a group for file or folder.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: getOwner {id="getowner()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::getOwner(string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<warning>
                <p><format style="bold">Warning:</format></p>
                <p>This method does not work on Windows.</p>
            </warning><note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See clearCache() for more details.</p>
            </note><tip>
                <p><format style="bold">Tip:</format></p>
                <p>Use posix_getpwuid() to resolve it to a username.</p>
            </tip>

### ### Gets file or folder owner



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L412">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L412">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path of the file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get an owner for file or folder.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The user ID of the owner for the file or folder.</format></li></list>
    </def>
</deflist>
## method: setOwner {id="setowner()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::setOwner(string $path, string|int $user):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<warning>
                <p><format style="bold">Warning:</format></p>
                <p>This method does not work on Windows.</p>
            </warning><note>
                <p><format style="bold">Note:</format></p>
                <p>This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.</p>
            </note><tip>
                <p><format style="bold">Tip:</format></p>
                <p>Use posix_getpwuid() to resolve it to a username.</p>
            </tip>

### ### Gets file or folder owner



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L443">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L443">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Pth of the file or folder.
</format></li><li>string or int <format style="bold">$user</format> - <format style="italic">
<code>non-empty-string|int</code>
A username or number.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get an owner for file or folder.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: getPermissions {id="getpermissions()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::getPermissions(string $path):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note><tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Replace decoct with low level class.</format></p>
            </tip>

### ### Gets path permissions

<p><format style="italic">Gets permissions for the given path.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L473">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L473">
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
        <list><li><a href="DataIs.md#int()">\FireHub\Core\Support\LowLevel\DataIs::int()</a>  - <format style="italic">To find whether fileperms() function returns integer.</format></li><li><a href="StrSB.md#part()">\FireHub\Core\Support\LowLevel\StrSB::part()</a>  - <format style="italic">To get part of decoct() function.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
The path.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get permissions for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">Path permissions.</format></li></list>
    </def>
</deflist>
## method: setPermissions {id="setpermissions()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::setPermissions(string $path, \FireHub\Core\Support\Enums\FileSystem\Permission $owner, \FireHub\Core\Support\Enums\FileSystem\Permission $owner_group, \FireHub\Core\Support\Enums\FileSystem\Permission $global):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>The current user is the user under which PHP runs. It is probably not the same user you use for normal
shell or FTP access. The mode can be changed only by user who owns the file on most systems.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.</p>
            </note><tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Replace octdec with low level class.</format></p>
            </tip>

### ### Sets path permissions

<p><format style="italic">Attempts to change the mode of the specified path to that given in permissions.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L517">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L517">
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
        <list><li><a href="Permission.md">\FireHub\Core\Support\Enums\FileSystem\Permission</a>  - <format style="italic">As parameter.</format></li><li><a href="DataIs.md#int()">\FireHub\Core\Support\LowLevel\DataIs::int()</a>  - <format style="italic">To find whether octdec returns integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
The path.
</format></li><li><a href="Permission.md">\FireHub\Core\Support\Enums\FileSystem\Permission</a> <format style="bold">$owner</format> - <format style="italic">
File owner permission.
</format></li><li><a href="Permission.md">\FireHub\Core\Support\Enums\FileSystem\Permission</a> <format style="bold">$owner_group</format> - <format style="italic">
File owner group permission.
</format></li><li><a href="Permission.md">\FireHub\Core\Support\Enums\FileSystem\Permission</a> <format style="bold">$global</format> - <format style="italic">
Everyone's permission,
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not set permissions for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void - <format style="italic">non-empty-string $path</format></li></list>
    </def>
</deflist>
## method: lastAccessed {id="lastaccessed()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::lastAccessed(string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>The atime of a file is supposed to change whenever the data blocks of a file are being read. This can be
costly performance-wise when an application regularly accesses a huge number of files or directories. Some
Unix filesystems can be mounted with atime updates disabled to increase the performance of such applications;
USENET news spools are a common example. On such filesystems this function will be useless.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>Note that time resolution may differ from one file system to another.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note>

### ### Gets last access time of path



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L547">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L547">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get last accessed time for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The time the file was last accessed. The time is returned as a Unix timestamp.</format></li></list>
    </def>
</deflist>
## method: lastModified {id="lastmodified()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::lastModified(string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>Note that time resolution may differ from one file system to another.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached.See [[FileSystem#clearCache()]] for more details.</p>
            </note>

### ### Gets last modification time of a path

<p><format style="italic">Represents when the data or content is changed or modified, not including that of metadata such as ownership or
owner group.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L575">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L575">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get last modified time for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The time the file was last modified. The time is returned as a Unix timestamp.</format></li></list>
    </def>
</deflist>
## method: lastChanged {id="lastchanged()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::lastChanged(string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>In most Unix filesystems, a file is considered changed when its inode data is changed; that is, when the
permissions, owner, group, or other metadata from the inode is updated. See also [[FileSystem#lastModified()]]
(which is what you want to use when you want to create "Last Modified" footers on web pages) and
[[FileSystem#lastAccessed()]].</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>On Windows, this function will return creating time, but on UNIX inode change time.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>Note that time resolution may differ from one file system to another.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note>

### ### Gets inode change time of a path

<p><format style="italic">Represents the time when the metadata or inode data of a file is altered, such as the change of permissions,
ownership or group.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L608">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L608">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get last changed time for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The time the file was last changed. The time is returned as a Unix timestamp.</format></li></list>
    </def>
</deflist>
## method: setLastAccessedAndModification {id="setlastaccessedandmodification()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::setLastAccessedAndModification(string $path, null|int $last_accessed = null, null|int $last_modified = null):true]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>If the file does not exist, it will be created.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>Note that time resolution may differ from one file system to another.</p>
            </note>

### ### Sets last access and modification time of a path

<p><format style="italic">Attempts to set the access and modification times of the file named in the filename parameter to the value
given in mtime. Note that the access time is always modified, regardless of the number of parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L642">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L642">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to file or folder.
</format></li><li>null or int <format style="bold">$last_accessed</format> = null - <format style="italic">[optional] 
The touch time. If mtime is null, the current system time() is used.
</format></li><li>null or int <format style="bold">$last_modified</format> = null - <format style="italic">[optional] 
If not null, the access time of the given filename is set to the value of atime. Otherwise, it is set to the
value passed to the mtime parameter. If both are null, the current system time is used.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not set last access and modification time of a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>true - <format style="italic">True on success.</format></li></list>
    </def>
</deflist>
## method: inode {id="inode()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::inode(string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>The results of this function are cached. See [[FileSystem#clearCache()]] for more details.</p>
            </note>

### ### Gets file inode

<p><format style="italic">Inode are special disk blocks they are created when the file system is created.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L668">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L668">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to file or folder.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we don&#039;t get inode for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The inode number of the file.</format></li></list>
    </def>
</deflist>
## method: list {id="list()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::list(string $folder, null|\FireHub\Core\Support\Enums\Order $order = null):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### List files and folders inside the specified folder



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L697">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L697">
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
        <list><li><a href="Order.md#asc">\FireHub\Core\Support\Enums\Order::ASC</a>  - <format style="italic">To list files and folders in ascending order.</format></li><li><a href="Order.md#desc">\FireHub\Core\Support\Enums\Order::DESC</a>  - <format style="italic">To list files and folders in descending order.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$folder</format> - <format style="italic">
<code>non-empty-string</code>
The folder that will be scanned.
</format></li><li>null or <a href="Order.md">\FireHub\Core\Support\Enums\Order</a> <format style="bold">$order</format> = null - <format style="italic">[optional] 
Result order.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $folder is empty, or we could not list files and directories inside the specified folder.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code>string[]</code> An array of filenames.</format></li></list>
    </def>
</deflist>
## method: search {id="search()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::search(string $pattern, bool $only_folders = false):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>This function isn't available on some systems (e.g., old Sun OS).</p>
            </note>

### ### Find path-names matching a pattern

<p><format style="italic">This method searches for all the path-names matching patterns according to the rules used by the libc glob()
function, which is similar to the rules used by common shells.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L739">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L739">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$pattern</format> - <format style="italic">
<code>non-empty-string</code>
The pattern. No tilde expansion or parameter substitution is done.
- * - Matches zero or more characters.
- ? - Matches exactly one character (any character).
- [...] - Matches one character from a group of characters. If the first character is !, matches any character
not in the group.
- \ - Escapes the following character.
</format></li><li>bool <format style="bold">$only_folders</format> = false - <format style="italic">[optional] 
Return only directory entries which match the pattern.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If there was an error while searching for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code>string[]</code> An array containing the matched files/folders, an empty array if no file
matched.</format></li></list>
    </def>
</deflist>
## method: symlink {id="symlink()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::symlink(string $path, string $link):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Creates a symbolic link

<p><format style="italic">Creates a symbolic link to the existing $path with the specified name $link.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L768">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L768">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the symlink.
</format></li><li>string <format style="bold">$link</format> - <format style="italic">
<code>non-empty-string</code>
The link name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not create symlink for a path with link.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: symlinkTarget {id="symlinktarget()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::symlinkTarget(string $path):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Returns the target of a symbolic link



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L789">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L789">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the symlink.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not target for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The contents of the symbolic link path.</format></li></list>
    </def>
</deflist>
## method: symlinkGroup {id="symlinkgroup()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::symlinkGroup(string $path, string|int $group):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>This function is not implemented on Windows platforms.</p>
            </note><tip>
                <p><format style="bold">Tip:</format></p>
                <p>Use posix_getgrgid() to resolve it to a group name.</p>
            </tip>

### ### Changes group ownership of symlink

<p><format style="italic">Attempts to change the group of the symlink filenames to group. Only the superuser may change the group of a
symlink arbitrarily. Other users may change the group of a symlink to any group of which that user is a member.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L823">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L823">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the symlink.
</format></li><li>string or int <format style="bold">$group</format> - <format style="italic">
<code>non-empty-string|int</code>
The group specified by name or number.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not change a symlink group.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: symlinkOwner {id="symlinkowner()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::symlinkOwner(string $path, string|int $user):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.</p>
            </note><note>
                <p><format style="bold">Note:</format></p>
                <p>This function is not implemented on Windows platforms.</p>
            </note><tip>
                <p><format style="bold">Tip:</format></p>
                <p>Use posix_getpwuid() to resolve it to a username.</p>
            </tip>

### ### Changes user ownership of symlink

<p><format style="italic">Attempts to change the owner of the symlink $path to user $user. Only the superuser may change the owner of a
symlink.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L857">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L857">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the symlink.
</format></li><li>string or int <format style="bold">$user</format> - <format style="italic">
<code>non-empty-string|int</code>
Username or number.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not change symlink ownership.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: statistics {id="statistics()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::statistics(string $path, bool $symlink = false):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gives information about a file or folder

<p><format style="italic">Gathers the statistics of the file named by filename. If filename is a symbolic link, statistics are from the
file itself, not the symlink - use $symlink argument to change that behavior.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L891">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L891">
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
        <list><li><a href="Arr.md#filter()">\FireHub\Core\Support\LowLevel\Arr::filter()</a>  - <format style="italic">To filter string keys in statistics.</format></li><li><a href="DataIs.md#string()">\FireHub\Core\Support\LowLevel\DataIs::string()</a>  - <format style="italic">To find whether the statistics key is string or not.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$path</format> - <format style="italic">
<code>non-empty-string</code>
Path to the file or folder.
</format></li><li>bool <format style="bold">$symlink</format> = false - <format style="italic">[optional] 
If true, the method gives information about a file or symbolic link.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get statistics for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<0|1|2|3|4|5|6|7|8|9|10|11|12|'atime'|'blksize'|'blocks'|'ctime'|'dev'|'gid'|'ino'|'mode'|'mtime'|'nlink'|'rdev'|'size'|'uid', int> ]]</code>
Statistics about file or folder.</format></li></list>
    </def>
</deflist>
## method: clearCache {id="clearcache()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::clearCache(bool $clear_realpath_cache = false, string $path = &#039;&#039;):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<note>
                <p><format style="bold">Note:</format></p>
                <p>This function caches information about specific filenames, so you only need to call clearCache() if you
are performing multiple operations on the same filename and require the information about that particular file
to not be cached.</p>
            </note>

### ### Clears file status cache

<p><format style="italic">When you use [[FileSystem#statistics()]] or any of the other functions listed in the affected functions list
(below), PHP caches the information those functions return to provide faster performance. However, in certain
cases, you may want to clear the cached information. For instance, if the same file is being checked multiple
times within a single script, and that file is in danger of being removed or changed during that script's
operation, you may elect to clear the status cache. In these cases, you can use the [[FileSystem#clearCache()]]
function to clear the information that PHP caches about a file. You should also note that PHP doesn't cache
information about non-existent files. So, if you call [[FileSystem#exist()]] on a file which doesn't exist, it
will return false until you create the file. If you create the file, it will return true even if you then
delete the file. However, [[File#delete()]] clears the cache automatically.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L930">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L930">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>bool <format style="bold">$clear_realpath_cache</format> = false - <format style="italic">[optional] 
Whether to also clear the realpath cache.
</format></li><li>string <format style="bold">$path</format> = '' - <format style="italic">[optional] 
Clear the realpath cache for a specific filename only. Only used if $clear_realpath_cache is true.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>