```php
final class \FireHub\Core\Support\LowLevel\File()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### File low-level proxy class

_Class contains methods related to files._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\File**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L46)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php)**</sub>


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

<h2><a name="isfile()"># method: isFile</a></h2>

```php
public static File::isFile(non-empty-string $path):bool
```











### ### Tells whether the path is a regular file



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L64)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L64)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
#### Returns

* bool - _True if the filename exists and is a regular file, false otherwise._
<h2><a name="isexecutable()"># method: isExecutable</a></h2>

```php
public static File::isExecutable(non-empty-string $path):bool
```











### ### Tells whether the path is executable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L87)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L87)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
#### Returns

* bool - _True if the filename exists and is an executable file, false otherwise._
<h2><a name="isuploaded()"># method: isUploaded</a></h2>

```php
public static File::isUploaded(non-empty-string $path):bool
```











### ### Tells whether the file was uploaded via HTTP POST

_Returns true if the file named by filename was uploaded via HTTP POST. This is useful to help ensure that a
malicious user hasn't tried to trick the script into working on files upon which it should not be working.
This sort of check is especially important if there is any chance that anything done with uploaded files could
reveal their contents to the user, or even to other users on the same system. For proper working, the function
[[File#isUploaded()]] needs an argument like $_FILES['userfile']['tmp_name'], - the name of the uploaded file on
the client's machine $_FILES['userfile']['name'] does not work._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L110)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L110)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
#### Returns

* bool - _True on success or false on failure._
<h2><a name="size()"># method: size</a></h2>

```php
public static File::size(non-empty-string $path):int
```











### ### Gets file size



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L133)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L133)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get file size for file._
#### Returns

* int - _The size of the file in bytes._
<h2><a name="copy()"># method: copy</a></h2>

```php
public static File::copy(non-empty-string $path, string $to):void
```











### ### Copies file

_Makes a copy of the file $path to $to._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L164)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L164)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
* string **$to** - _The destination path. If dest is a URL, the copy operation may fail if the wrapper does not support overwriting
of existing files. If the destination file already exists, it will be overwritten._
#### Throws

* [\Error](./Wiki-Error) - _If we could not copy file._
#### Returns

* void
<h2><a name="delete()"># method: delete</a></h2>

```php
public static File::delete(non-empty-string $path):void
```











### ### Deletes a file

_Attempts to remove the folder named by $path._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L186)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L186)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
#### Throws

* [\Error](./Wiki-Error) - _If we could not delete the file._
#### Returns

* void
<h2><a name="link()"># method: link</a></h2>

```php
public static File::link(non-empty-string $path, string $link):void
```











### ### Create a hard link



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L213)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L213)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
* string **$link** - _The link name._
#### Throws

* [\Error](./Wiki-Error) - _If we could not create a hard link for a path._
#### Returns

* void
<h2><a name="getcontent()"># method: getContent</a></h2>

```php
public static File::getContent(non-empty-string $path, int $offset, int $length = null):string
```











### ### Reads entire file into a string



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L245)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L245)**</sub>
#### Parameters

* non-empty-string **$path** - _Path of the file to read._
* int **$offset** - _[optional] 
The offset where the reading starts on the original stream. Negative offsets count from the end of the stream.
Seeking ($offset) is not supported with remote files. Attempting to seek on non-local files may work with small
offsets, but this is unpredictable because it works on the buffered stream._
* int **$length** = null
#### Throws

* [\Error](./Wiki-Error) - _If we cannot get content from a path._
#### Returns

* string - _The read data._
<h2><a name="getcontentarray()"># method: getContentArray</a></h2>

```php
public static File::getContentArray(non-empty-string $path, bool $skip_empty_lines = false, bool $ignore_new_lines = false):string[]
```











### ### Reads entire file into an array



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L284)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L284)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
* bool **$skip_empty_lines** = false - _[optional] 
Skip empty lines._
* bool **$ignore_new_lines** = false - _[optional] 
Omit newline at the end of each array element._
#### Throws

* [\Error](./Wiki-Error) - _If we cannot get content from a path._
#### Returns

* string[] - _The file in an array. Each element of the array corresponds to a line in the file, with newline still attached._
<h2><a name="putcontent()"># method: putContent</a></h2>

```php
public static File::putContent(non-empty-string $path, array<int,string>|string $data, bool $append = false, bool $lock = true, bool $create_file = false)
```











### ### Write data to a file



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L322)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L322)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file where to write the data._
* array&lt;int,string&gt; or string **$data** - _The data to write._
* bool **$append** = false - _[optional] 
Append the data to the file instead of overwriting it._
* bool **$lock** = true - _[optional] 
Acquire an exclusive lock on the file while proceeding to the writing._
* bool **$create_file** = false - _[optional] 
Is true, method will create a new file if one doesn't exist._
#### Throws

* [\Error](./Wiki-Error) - _If $create_file option is off and $path is not file, or could not put content on a path._
#### Returns

*  - _non-negative-int Number of bytes that were written to the file, false otherwise._
<h2><a name="read()"># method: read</a></h2>

```php
public static File::read(non-empty-string $path):int
```











### ### Outputs a file

_Reads a file and writes it to the output buffer._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L353)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L353)**</sub>
#### Parameters

* non-empty-string **$path** - _The filename path being read._
#### Throws

* [\Error](./Wiki-Error) - _If we could not put read file on a path, or a path is empty._
#### Returns

* int - _The number of bytes read from the file._
<h2><a name="moveuploaded()"># method: moveUploaded</a></h2>

```php
public static File::moveUploaded(non-empty-string $from, non-empty-string $to):void
```











### ### Moves an uploaded file to a new location

_This function checks to ensure that the file designated by $from is a valid upload file š(meaning that it was
uploaded via PHP's HTTP POST upload mechanism). If the file is valid, it will be moved to the filename given
by $to._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L385)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.File.php#L385)**</sub>
#### Parameters

* non-empty-string **$from** - _Filename of the uploaded file._
* non-empty-string **$to** - _Destination of the moved file._
#### Throws

* [\Error](./Wiki-Error) - _If we could not move the uploaded file._
#### Returns

* void
<h2><a name="exist()"># method: exist</a></h2>

```php
final public static FileSystem::exist(non-empty-string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks whether a file or folder exists



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L88)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L88)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file or folder._
#### Returns

* bool - _True if the file or directory specified by filename exists, false otherwise._
<h2><a name="isreadable()"># method: isReadable</a></h2>

```php
final public static FileSystem::isReadable(non-empty-string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Tells whether a file exists and is readable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L109)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L109)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file or folder._
#### Returns

* bool - _True if the file or directory specified by $path exists and is readable, false otherwise._
<h2><a name="iswritable()"># method: isWritable</a></h2>

```php
final public static FileSystem::isWritable(non-empty-string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### Tells whether the path is writable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L129)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L129)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
#### Returns

* bool - _True if the filename exists and is writable._
<h2><a name="issymboliclink()"># method: isSymbolicLink</a></h2>

```php
final public static FileSystem::isSymbolicLink(non-empty-string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Tells whether the path is a symbolic link



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L149)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L149)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file._
#### Returns

* bool - _True if the filename exists and is a symbolic link, false otherwise._
<h2><a name="rename()"># method: rename</a></h2>

```php
public static FileSystem::rename(non-empty-string $path, non-empty-string $new_name):void
```











### ### Renames a file or directory

_Attempts to rename $path to $new_name, moving it between directories if necessary. If renaming a file and
$new_name exists, it will be overwritten. If renaming a directory and $new_name exists, this function will
emit a warning._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L181)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L181)**</sub>
#### Parameters

* non-empty-string **$path** - _The old name path._
* non-empty-string **$new_name** - _The new name._
#### Throws

* [\Error](./Wiki-Error) - _If we could not rename a path._
#### Returns

* void
<h2><a name="basename()"># method: basename</a></h2>

```php
final public static FileSystem::basename(non-empty-string $path, string $suffix = &#039;&#039;):string
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Returns a trailing name component of a path

_Given a string containing the path to a file or directory, this function will return the trailing name component._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L210)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L210)**</sub>
#### Parameters

* non-empty-string **$path** - _A path. On Windows, both slash (/) and backslash (\) are used as directory separator character. In other
environments, it is the forward slash (/)._
* string **$suffix** = '' - _[optional] 
If the name component ends in suffix, this will also be cut off._
#### Returns

* string - _The base name of the given path._
<h2><a name="pathinfo()"># method: pathInfo</a></h2>

```php
final public static FileSystem::pathInfo(string $path):array
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Returns information about a file path



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L240)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L240)**</sub>
#### Parameters

* string **$path** - _The path to be parsed._
#### Returns

* array - _<code>array<'dirname': string|false, 'basename': string, 'extension': string|false,
'filename': string|false >]]></code> Information about a file path._
<h2><a name="absolutepath()"># method: absolutePath</a></h2>

```php
final public static FileSystem::absolutePath(string $path):string
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Returns canonical absolute pathname

_Expands all symbolic links and resolves references to /./, /../ and extra / characters in the input path and
returns the canonical absolute pathname. Trailing delimiters, such as \ and /, are also removed._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L280)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L280)**</sub>
#### Parameters

* string **$path** - _The path being checked._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get absolute path for path, file doesn&#039;t exist or a script doesn&#039;t have
executable permissions._
#### Returns

* string - _The canonical absolute pathname._
<h2><a name="parent()"># method: parent</a></h2>

```php
final public static FileSystem::parent(non-empty-string $path, positive-int $levels = 1):string
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Returns parent folder path

_Given a string containing the path of a file or directory, this function will return the parent folder's path
that is levels up from the current folder._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L309)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L309)**</sub>
#### Parameters

* non-empty-string **$path** - _A path._
* positive-int **$levels** = 1 - _[optional] 
The number of parent folders to go up. This must be an integer greater than 0._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If $levels are less than 1._
#### Returns

* string - _The parent folder name of the given path. If there are no slashes in path, a dot ('.') is
returned, indicating the current folder._
<h2><a name="getgroup()"># method: getGroup</a></h2>

```php
final public static FileSystem::getGroup(non-empty-string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets file or folder group

_Gets the file or folder group. The group ID is returned in numerical format._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L334)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L334)**</sub>
#### Parameters

* non-empty-string **$path** - _Path of the file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get a group for file._
#### Returns

* int - _The group ID of the file._
<h2><a name="setgroup()"># method: setGroup</a></h2>

```php
final public static FileSystem::setGroup(non-empty-string $path, non-empty-string|int $group):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Changes file or folder group

_Attempts to change the group of the file or folder $path to $group. Only the superuser may change the group of
files arbitrarily; other users may change the group of files to any group of which that user is a member._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L362)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L362)**</sub>
#### Parameters

* non-empty-string **$path** - _Path of the file or folder._
* non-empty-string or int **$group** - _A group name or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not set a group for file or folder._
#### Returns

* void
<h2><a name="getowner()"># method: getOwner</a></h2>

```php
final public static FileSystem::getOwner(non-empty-string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets file or folder owner



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L386)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L386)**</sub>
#### Parameters

* non-empty-string **$path** - _Path of the file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get an owner for file or folder._
#### Returns

* int - _The user ID of the owner for the file or folder._
<h2><a name="setowner()"># method: setOwner</a></h2>

```php
final public static FileSystem::setOwner(non-empty-string $path, non-empty-string|int $user):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets file or folder owner



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L413)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L413)**</sub>
#### Parameters

* non-empty-string **$path** - _Pth of the file or folder._
* non-empty-string or int **$user** - _A username or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get an owner for file or folder._
#### Returns

* void
<h2><a name="getpermissions()"># method: getPermissions</a></h2>

```php
final public static FileSystem::getPermissions(non-empty-string $path):string
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets path permissions

_Gets permissions for the given path._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L441)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L441)**</sub>
#### Parameters

* non-empty-string **$path** - _The path._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get permissions for a path._
#### Returns

* string - _Path permissions._
<h2><a name="setpermissions()"># method: setPermissions</a></h2>

```php
final public static FileSystem::setPermissions(non-empty-string $path, \FireHub\Core\Support\Enums\FileSystem\Permission $owner, \FireHub\Core\Support\Enums\FileSystem\Permission $owner_group, \FireHub\Core\Support\Enums\FileSystem\Permission $global):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Sets path permissions

_Attempts to change the mode of the specified path to that given in permissions._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L483)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L483)**</sub>
#### Parameters

* non-empty-string **$path** - _The path._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$owner** - _File owner permission._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$owner_group** - _File owner group permission._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$global** - _Everyone's permission,_
#### Throws

* [\Error](./Wiki-Error) - _If we could not set permissions for a path._
#### Returns

* void - _non-empty-string $path_
<h2><a name="lastaccessed()"># method: lastAccessed</a></h2>

```php
final public static FileSystem::lastAccessed(non-empty-string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets last access time of path



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L511)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L511)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get last accessed time for a path._
#### Returns

* int - _The time the file was last accessed. The time is returned as a Unix timestamp._
<h2><a name="lastmodified()"># method: lastModified</a></h2>

```php
final public static FileSystem::lastModified(non-empty-string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets last modification time of a path

_Represents when the data or content is changed or modified, not including that of metadata such as ownership or
owner group._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L537)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L537)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get last modified time for a path._
#### Returns

* int - _The time the file was last modified. The time is returned as a Unix timestamp._
<h2><a name="lastchanged()"># method: lastChanged</a></h2>

```php
final public static FileSystem::lastChanged(non-empty-string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets inode change time of a path

_Represents the time when the metadata or inode data of a file is altered, such as the change of permissions,
ownership or group._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L568)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L568)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get last changed time for a path._
#### Returns

* int - _The time the file was last changed. The time is returned as a Unix timestamp._
<h2><a name="setlastaccessedandmodification()"># method: setLastAccessedAndModification</a></h2>

```php
final public static FileSystem::setLastAccessedAndModification(non-empty-string $path, null|int $last_accessed = null, null|int $last_modified = null):true
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Sets last access and modification time of a path

_Attempts to set the access and modification times of the file named in the filename parameter to the value
given in mtime. Note that the access time is always modified, regardless of the number of parameters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L600)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L600)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to file or folder._
* null or int **$last_accessed** = null - _[optional] 
The touch time. If mtime is null, the current system time() is used._
* null or int **$last_modified** = null - _[optional] 
If not null, the access time of the given filename is set to the value of atime. Otherwise, it is set to the
value passed to the mtime parameter. If both are null, the current system time is used._
#### Throws

* [\Error](./Wiki-Error) - _If we could not set last access and modification time of a path._
#### Returns

* true - _True on success._
<h2><a name="inode()"># method: inode</a></h2>

```php
final public static FileSystem::inode(non-empty-string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets file inode

_Inode are special disk blocks they are created when the file system is created._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L624)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L624)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we don&#039;t get inode for a path._
#### Returns

* int - _The inode number of the file._
<h2><a name="list()"># method: list</a></h2>

```php
final public static FileSystem::list(non-empty-string $folder, null|\FireHub\Core\Support\Enums\Order $order = null):string[]
```





> [!IMPORTANT]
This method is marked as **final**.





### ### List files and folders inside the specified folder



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L650)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L650)**</sub>
#### Parameters

* non-empty-string **$folder** - _The folder that will be scanned._
* null or [\FireHub\Core\Support\Enums\Order](./Wiki-Order) **$order** = null - _[optional] 
Result order._
#### Throws

* [\Error](./Wiki-Error) - _If $folder is empty, or we could not list files and directories inside the specified folder._
#### Returns

* string[] - _An array of filenames._
<h2><a name="search()"># method: search</a></h2>

```php
final public static FileSystem::search(non-empty-string $pattern, bool $only_folders = false):string[]
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Find path-names matching a pattern

_This method searches for all the path-names matching patterns according to the rules used by the libc glob()
function, which is similar to the rules used by common shells._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L688)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L688)**</sub>
#### Parameters

* non-empty-string **$pattern** - _The pattern. No tilde expansion or parameter substitution is done.
- * - Matches zero or more characters.
- ? - Matches exactly one character (any character).
- [...] - Matches one character from a group of characters. If the first character is !, matches any character
not in the group.
- \ - Escapes the following character._
* bool **$only_folders** = false - _[optional] 
Return only directory entries which match the pattern._
#### Throws

* [\Error](./Wiki-Error) - _If there was an error while searching for a path._
#### Returns

* string[] - _An array containing the matched files/folders, an empty array if no file matched._
<h2><a name="symlink()"># method: symlink</a></h2>

```php
final public static FileSystem::symlink(non-empty-string $path, non-empty-string $link):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Creates a symbolic link

_Creates a symbolic link to the existing $path with the specified name $link._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L713)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L713)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the symlink._
* non-empty-string **$link** - _The link name._
#### Throws

* [\Error](./Wiki-Error) - _If we could not create symlink for a path with link._
#### Returns

* void
<h2><a name="symlinktarget()"># method: symlinkTarget</a></h2>

```php
final public static FileSystem::symlinkTarget(non-empty-string $path):string
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Returns the target of a symbolic link



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L732)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L732)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the symlink._
#### Throws

* [\Error](./Wiki-Error) - _If we could not target for a path._
#### Returns

* string - _The contents of the symbolic link path._
<h2><a name="symlinkgroup()"># method: symlinkGroup</a></h2>

```php
final public static FileSystem::symlinkGroup(non-empty-string $path, non-empty-string|int $group):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Changes group ownership of symlink

_Attempts to change the group of the symlink filenames to group. Only the superuser may change the group of a
symlink arbitrarily. Other users may change the group of a symlink to any group of which that user is a member._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L762)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L762)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the symlink._
* non-empty-string or int **$group** - _The group specified by name or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not change a symlink group._
#### Returns

* void
<h2><a name="symlinkowner()"># method: symlinkOwner</a></h2>

```php
final public static FileSystem::symlinkOwner(non-empty-string $path, non-empty-string|int $user):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Changes user ownership of symlink

_Attempts to change the owner of the symlink $path to user $user. Only the superuser may change the owner of a
symlink._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L793)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L793)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the symlink._
* non-empty-string or int **$user** - _Username or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not change symlink ownership._
#### Returns

* void
<h2><a name="statistics()"># method: statistics</a></h2>

```php
final public static FileSystem::statistics(non-empty-string $path, bool $symlink = false):array
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gives information about a file or folder

_Gathers the statistics of the file named by filename. If filename is a symbolic link, statistics are from the
file itself, not the symlink - use $symlink argument to change that behavior._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L825)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L825)**</sub>
#### Parameters

* non-empty-string **$path** - _Path to the file or folder._
* bool **$symlink** = false - _[optional] 
If true, the method gives information about a file or symbolic link._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get statistics for a path._
#### Returns

* array - _<code>array<0|1|2|3|4|5|6|7|8|9|10|11|12|'atime'|'blksize'|'blocks'|'ctime'|'dev'|'gid'|'ino'|'mode'|'mtime'|'nlink'|'rdev'|'size'|'uid', int> ]]</code>
Statistics about file or folder._
<h2><a name="clearcache()"># method: clearCache</a></h2>

```php
final public static FileSystem::clearCache(bool $clear_realpath_cache = false, string $path = &#039;&#039;):void
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Clears file status cache

_When you use [[FileSystem#statistics()]] or any of the other functions listed in the affected functions list
(below), PHP caches the information those functions return to provide faster performance. However, in certain
cases, you may want to clear the cached information. For instance, if the same file is being checked multiple
times within a single script, and that file is in danger of being removed or changed during that script's
operation, you may elect to clear the status cache. In these cases, you can use the [[FileSystem#clearCache()]]
function to clear the information that PHP caches about a file. You should also note that PHP doesn't cache
information about non-existent files. So, if you call [[FileSystem#exist()]] on a file which doesn't exist, it
will return false until you create the file. If you create the file, it will return true even if you then
delete the file. However, [[File#delete()]] clears the cache automatically._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L864)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L864)**</sub>
#### Parameters

* bool **$clear_realpath_cache** = false - _[optional] 
Whether to also clear the realpath cache._
* string **$path** = '' - _[optional] 
Clear the realpath cache for a specific filename only. Only used if $clear_realpath_cache is true._
#### Returns

* void