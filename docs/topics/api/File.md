<title># File</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\File()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### File low-level proxy class

<p><format style="italic">Class contains methods related to files.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\File
    </def><def title="Parent class:">
        <a href="FileSystem.md">\FireHub\Core\Support\LowLevel\FileSystem</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L46">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php">
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
|public static |<a href="#isfile()">isFile</a>|### Tells whether the path is a regular file|
|public static |<a href="#isexecutable()">isExecutable</a>|### Tells whether the path is executable|
|public static |<a href="#isuploaded()">isUploaded</a>|### Tells whether the file was uploaded via HTTP POST|
|public static |<a href="#size()">size</a>|### Gets file size|
|public static |<a href="#copy()">copy</a>|### Copies file|
|public static |<a href="#delete()">delete</a>|### Deletes a file|
|public static |<a href="#link()">link</a>|### Create a hard link|
|public static |<a href="#getcontent()">getContent</a>|### Reads entire file into a string|
|public static |<a href="#getcontentarray()">getContentArray</a>|### Reads entire file into an array|
|public static |<a href="#putcontent()">putContent</a>|### Write data to a file|
|public static |<a href="#read()">read</a>|### Outputs a file|
|public static |<a href="#moveuploaded()">moveUploaded</a>|### Moves an uploaded file to a new location|
|inherited public static |<a href="#exist()">exist</a>|### Checks whether a file or folder exists|
|inherited public static |<a href="#isreadable()">isReadable</a>|### Tells whether a file exists and is readable|
|inherited public static |<a href="#iswritable()">isWritable</a>|Tells whether the path is writable|
|inherited public static |<a href="#issymboliclink()">isSymbolicLink</a>|### Tells whether the path is a symbolic link|
|inherited public static |<a href="#rename()">rename</a>|### Renames a file or directory|
|inherited public static |<a href="#basename()">basename</a>|### Returns a trailing name component of a path|
|inherited public static |<a href="#pathinfo()">pathInfo</a>|### Returns information about a file path|
|inherited public static |<a href="#absolutepath()">absolutePath</a>|### Returns canonical absolute pathname|
|inherited public static |<a href="#parent()">parent</a>|### Returns parent folder path|
|inherited public static |<a href="#getgroup()">getGroup</a>|### Gets file or folder group|
|inherited public static |<a href="#setgroup()">setGroup</a>|### Changes file or folder group|
|inherited public static |<a href="#getowner()">getOwner</a>|### Gets file or folder owner|
|inherited public static |<a href="#setowner()">setOwner</a>|### Gets file or folder owner|
|inherited public static |<a href="#getpermissions()">getPermissions</a>|### Gets path permissions|
|inherited public static |<a href="#setpermissions()">setPermissions</a>|### Sets path permissions|
|inherited public static |<a href="#lastaccessed()">lastAccessed</a>|### Gets last access time of path|
|inherited public static |<a href="#lastmodified()">lastModified</a>|### Gets last modification time of a path|
|inherited public static |<a href="#lastchanged()">lastChanged</a>|### Gets inode change time of a path|
|inherited public static |<a href="#setlastaccessedandmodification()">setLastAccessedAndModification</a>|### Sets last access and modification time of a path|
|inherited public static |<a href="#inode()">inode</a>|### Gets file inode|
|inherited public static |<a href="#list()">list</a>|### List files and folders inside the specified folder|
|inherited public static |<a href="#search()">search</a>|### Find path-names matching a pattern|
|inherited public static |<a href="#symlink()">symlink</a>|### Creates a symbolic link|
|inherited public static |<a href="#symlinktarget()">symlinkTarget</a>|### Returns the target of a symbolic link|
|inherited public static |<a href="#symlinkgroup()">symlinkGroup</a>|### Changes group ownership of symlink|
|inherited public static |<a href="#symlinkowner()">symlinkOwner</a>|### Changes user ownership of symlink|
|inherited public static |<a href="#statistics()">statistics</a>|### Gives information about a file or folder|
|inherited public static |<a href="#clearcache()">clearCache</a>|### Clears file status cache|

## method: isFile {id="isfile()"}

<code-block lang="php">
    <![CDATA[public static File::isFile(non-empty-string $path):bool]]>
</code-block>













### ### Tells whether the path is a regular file



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L64">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L64">
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
        <list><li><a href="Callback.md#__invoke()">\FireHub\Core\Initializers\Autoload\Callback::__invoke()</a>  - <format style="italic">To check if $path is a valid path.</format></li><li><a href="File.md#putcontent()">\FireHub\Core\Support\LowLevel\File::putContent()</a>  - <format style="italic">To tell whether the $file is a regular file.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the filename exists and is a regular file, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isExecutable {id="isexecutable()"}

<code-block lang="php">
    <![CDATA[public static File::isExecutable(non-empty-string $path):bool]]>
</code-block>













### ### Tells whether the path is executable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L87">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L87">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the filename exists and is an executable file, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isUploaded {id="isuploaded()"}

<code-block lang="php">
    <![CDATA[public static File::isUploaded(non-empty-string $path):bool]]>
</code-block>













### ### Tells whether the file was uploaded via HTTP POST

<p><format style="italic">Returns true if the file named by filename was uploaded via HTTP POST. This is useful to help ensure that a
malicious user hasn't tried to trick the script into working on files upon which it should not be working.
This sort of check is especially important if there is any chance that anything done with uploaded files could
reveal their contents to the user, or even to other users on the same system. For proper working, the function
[[File#isUploaded()]] needs an argument like $_FILES['userfile']['tmp_name'], - the name of the uploaded file on
the client's machine $_FILES['userfile']['name'] does not work.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L110">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L110">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True on success or false on failure.</format></li></list>
    </def>
</deflist>
## method: size {id="size()"}

<code-block lang="php">
    <![CDATA[public static File::size(non-empty-string $path):int]]>
</code-block>













### ### Gets file size



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L133">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L133">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get file size for file.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The size of the file in bytes.</format></li></list>
    </def>
</deflist>
## method: copy {id="copy()"}

<code-block lang="php">
    <![CDATA[public static File::copy(non-empty-string $path, string $to):void]]>
</code-block>













### ### Copies file

<p><format style="italic">Makes a copy of the file $path to $to.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L164">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L164">
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
        <list><li><a href="DS.md">\FireHub\Core\Support\Constants\Path\DS</a>  - <format style="italic">To separate folders.</format></li><li><a href="File.md#basename()">\FireHub\Core\Support\LowLevel\File::basename()</a>  - <format style="italic">To get a base name component of $to a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li><li>string <format style="bold">$to</format> - <format style="italic">
The destination path. If dest is a URL, the copy operation may fail if the wrapper does not support overwriting
of existing files. If the destination file already exists, it will be overwritten.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not copy file.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: delete {id="delete()"}

<code-block lang="php">
    <![CDATA[public static File::delete(non-empty-string $path):void]]>
</code-block>













### ### Deletes a file

<p><format style="italic">Attempts to remove the folder named by $path.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L186">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not delete the file.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: link {id="link()"}

<code-block lang="php">
    <![CDATA[public static File::link(non-empty-string $path, string $link):void]]>
</code-block>













### ### Create a hard link



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L213">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L213">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li><li>string <format style="bold">$link</format> - <format style="italic">
The link name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not create a hard link for a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: getContent {id="getcontent()"}

<code-block lang="php">
    <![CDATA[public static File::getContent(non-empty-string $path, int $offset, int $length = null):string]]>
</code-block>













### ### Reads entire file into a string



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L245">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L245">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path of the file to read.
</format></li><li>int <format style="bold">$offset</format> - <format style="italic">[optional] 
The offset where the reading starts on the original stream. Negative offsets count from the end of the stream.
Seeking ($offset) is not supported with remote files. Attempting to seek on non-local files may work with small
offsets, but this is unpredictable because it works on the buffered stream.
</format></li><li>int <format style="bold">$length</format> = null</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we cannot get content from a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The read data.</format></li></list>
    </def>
</deflist>
## method: getContentArray {id="getcontentarray()"}

<code-block lang="php">
    <![CDATA[public static File::getContentArray(non-empty-string $path, bool $skip_empty_lines = false, bool $ignore_new_lines = false):string[]]]>
</code-block>













### ### Reads entire file into an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L284">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L284">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file.
</format></li><li>bool <format style="bold">$skip_empty_lines</format> = false - <format style="italic">[optional] 
Skip empty lines.
</format></li><li>bool <format style="bold">$ignore_new_lines</format> = false - <format style="italic">[optional] 
Omit newline at the end of each array element.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we cannot get content from a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string[] - <format style="italic">The file in an array. Each element of the array corresponds to a line in the file, with newline still attached.</format></li></list>
    </def>
</deflist>
## method: putContent {id="putcontent()"}

<code-block lang="php">
    <![CDATA[public static File::putContent(non-empty-string $path, array<int,string>|string $data, bool $append = false, bool $lock = true, bool $create_file = false)]]>
</code-block>













### ### Write data to a file



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L322">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L322">
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
        <list><li><a href="File.md#isfile()">\FireHub\Core\Support\LowLevel\File::isFile()</a>  - <format style="italic">To tell whether the $file is a regular file.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the file where to write the data.
</format></li><li>array&lt;int,string&gt; or string <format style="bold">$data</format> - <format style="italic">
The data to write.
</format></li><li>bool <format style="bold">$append</format> = false - <format style="italic">[optional] 
Append the data to the file instead of overwriting it.
</format></li><li>bool <format style="bold">$lock</format> = true - <format style="italic">[optional] 
Acquire an exclusive lock on the file while proceeding to the writing.
</format></li><li>bool <format style="bold">$create_file</format> = false - <format style="italic">[optional] 
Is true, method will create a new file if one doesn't exist.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $create_file option is off and $path is not file, or could not put content on a path.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int Number of bytes that were written to the file, false otherwise.</format></li></list>
    </def>
</deflist>
## method: read {id="read()"}

<code-block lang="php">
    <![CDATA[public static File::read(non-empty-string $path):int]]>
</code-block>













### ### Outputs a file

<p><format style="italic">Reads a file and writes it to the output buffer.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L353">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L353">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
The filename path being read.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not put read file on a path, or a path is empty.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The number of bytes read from the file.</format></li></list>
    </def>
</deflist>
## method: moveUploaded {id="moveuploaded()"}

<code-block lang="php">
    <![CDATA[public static File::moveUploaded(non-empty-string $from, non-empty-string $to):void]]>
</code-block>













### ### Moves an uploaded file to a new location

<p><format style="italic">This function checks to ensure that the file designated by $from is a valid upload file š(meaning that it was
uploaded via PHP's HTTP POST upload mechanism). If the file is valid, it will be moved to the filename given
by $to.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L385">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L385">
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
        <list><li>non-empty-string <format style="bold">$from</format> - <format style="italic">
Filename of the uploaded file.
</format></li><li>non-empty-string <format style="bold">$to</format> - <format style="italic">
Destination of the moved file.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not move the uploaded file.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: exist {id="exist()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::exist(non-empty-string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks whether a file or folder exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L88">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L88">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::isReadable(non-empty-string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Tells whether a file exists and is readable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L109">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L109">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::isWritable(non-empty-string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### Tells whether the path is writable



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L129">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::isSymbolicLink(non-empty-string $path):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Tells whether the path is a symbolic link



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L149">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L149">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[public static FileSystem::rename(non-empty-string $path, non-empty-string $new_name):void]]>
</code-block>













### ### Renames a file or directory

<p><format style="italic">Attempts to rename $path to $new_name, moving it between directories if necessary. If renaming a file and
$new_name exists, it will be overwritten. If renaming a directory and $new_name exists, this function will
emit a warning.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L181">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L181">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
The old name path.
</format></li><li>non-empty-string <format style="bold">$new_name</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::basename(non-empty-string $path, string $suffix = &#039;&#039;):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Returns a trailing name component of a path

<p><format style="italic">Given a string containing the path to a file or directory, this function will return the trailing name component.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L210">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L210">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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







### ### Returns information about a file path



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L240">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L240">
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







### ### Returns canonical absolute pathname

<p><format style="italic">Expands all symbolic links and resolves references to /./, /../ and extra / characters in the input path and
returns the canonical absolute pathname. Trailing delimiters, such as \ and /, are also removed.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L280">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L280">
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
    <![CDATA[final public static FileSystem::parent(non-empty-string $path, positive-int $levels = 1):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Returns parent folder path

<p><format style="italic">Given a string containing the path of a file or directory, this function will return the parent folder's path
that is levels up from the current folder.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L309">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L309">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
A path.
</format></li><li>positive-int <format style="bold">$levels</format> = 1 - <format style="italic">[optional] 
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
    <![CDATA[final public static FileSystem::getGroup(non-empty-string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets file or folder group

<p><format style="italic">Gets the file or folder group. The group ID is returned in numerical format.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L334">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L334">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::setGroup(non-empty-string $path, non-empty-string|int $group):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Changes file or folder group

<p><format style="italic">Attempts to change the group of the file or folder $path to $group. Only the superuser may change the group of
files arbitrarily; other users may change the group of files to any group of which that user is a member.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L362">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L362">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path of the file or folder.
</format></li><li>non-empty-string or int <format style="bold">$group</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::getOwner(non-empty-string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets file or folder owner



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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::setOwner(non-empty-string $path, non-empty-string|int $user):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets file or folder owner



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L413">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L413">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Pth of the file or folder.
</format></li><li>non-empty-string or int <format style="bold">$user</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::getPermissions(non-empty-string $path):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Replace decoct with low level class.</format></p>
            </tip>

### ### Gets path permissions

<p><format style="italic">Gets permissions for the given path.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L441">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L441">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::setPermissions(non-empty-string $path, \FireHub\Core\Support\Enums\FileSystem\Permission $owner, \FireHub\Core\Support\Enums\FileSystem\Permission $owner_group, \FireHub\Core\Support\Enums\FileSystem\Permission $global):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>





<tip>
                <p><format style="bold" color="DarkBlue">Todo:</format></p>
                <p><format color="DarkBlue">Replace octdec with low level class.</format></p>
            </tip>

### ### Sets path permissions

<p><format style="italic">Attempts to change the mode of the specified path to that given in permissions.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L483">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L483">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::lastAccessed(non-empty-string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets last access time of path



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L511">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L511">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::lastModified(non-empty-string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets last modification time of a path

<p><format style="italic">Represents when the data or content is changed or modified, not including that of metadata such as ownership or
owner group.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L537">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L537">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::lastChanged(non-empty-string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets inode change time of a path

<p><format style="italic">Represents the time when the metadata or inode data of a file is altered, such as the change of permissions,
ownership or group.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L568">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L568">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::setLastAccessedAndModification(non-empty-string $path, null|int $last_accessed = null, null|int $last_modified = null):true]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Sets last access and modification time of a path

<p><format style="italic">Attempts to set the access and modification times of the file named in the filename parameter to the value
given in mtime. Note that the access time is always modified, regardless of the number of parameters.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L600">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L600">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::inode(non-empty-string $path):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets file inode

<p><format style="italic">Inode are special disk blocks they are created when the file system is created.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L624">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L624">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::list(non-empty-string $folder, null|\FireHub\Core\Support\Enums\Order $order = null):string[]]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### List files and folders inside the specified folder



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L650">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L650">
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
        <list><li>non-empty-string <format style="bold">$folder</format> - <format style="italic">
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
        <list><li>string[] - <format style="italic">An array of filenames.</format></li></list>
    </def>
</deflist>
## method: search {id="search()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::search(non-empty-string $pattern, bool $only_folders = false):string[]]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Find path-names matching a pattern

<p><format style="italic">This method searches for all the path-names matching patterns according to the rules used by the libc glob()
function, which is similar to the rules used by common shells.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L688">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L688">
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
        <list><li>non-empty-string <format style="bold">$pattern</format> - <format style="italic">
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
        <list><li>string[] - <format style="italic">An array containing the matched files/folders, an empty array if no file matched.</format></li></list>
    </def>
</deflist>
## method: symlink {id="symlink()"}

<code-block lang="php">
    <![CDATA[final public static FileSystem::symlink(non-empty-string $path, non-empty-string $link):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Creates a symbolic link

<p><format style="italic">Creates a symbolic link to the existing $path with the specified name $link.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L713">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L713">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the symlink.
</format></li><li>non-empty-string <format style="bold">$link</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::symlinkTarget(non-empty-string $path):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Returns the target of a symbolic link



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L732">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L732">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::symlinkGroup(non-empty-string $path, non-empty-string|int $group):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Changes group ownership of symlink

<p><format style="italic">Attempts to change the group of the symlink filenames to group. Only the superuser may change the group of a
symlink arbitrarily. Other users may change the group of a symlink to any group of which that user is a member.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L762">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L762">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the symlink.
</format></li><li>non-empty-string or int <format style="bold">$group</format> - <format style="italic">
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
    <![CDATA[final public static FileSystem::symlinkOwner(non-empty-string $path, non-empty-string|int $user):void]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Changes user ownership of symlink

<p><format style="italic">Attempts to change the owner of the symlink $path to user $user. Only the superuser may change the owner of a
symlink.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L793">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L793">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
Path to the symlink.
</format></li><li>non-empty-string or int <format style="bold">$user</format> - <format style="italic">

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
    <![CDATA[final public static FileSystem::statistics(non-empty-string $path, bool $symlink = false):array]]>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L825">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L825">
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
        <list><li>non-empty-string <format style="bold">$path</format> - <format style="italic">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L864">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L864">
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