```php
final class \FireHub\Core\Support\LowLevel\Folder()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Folder low-level proxy class

_Class contains methods related to folders._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Folder**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L34)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#create()">create</a>|### Makes folder|
|public static |<a href="#delete()">delete</a>|### Deletes folder|
|public static |<a href="#isfolder()">isFolder</a>|### Tells whether the filename is a regular folder|
|public static |<a href="#totalspace()">totalSpace</a>|### Gets total size of a filesystem or disk partition|
|public static |<a href="#freespace()">freeSpace</a>|### Gets free space of a filesystem or disk partition|
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

<h2><a name="create()"># method: create</a></h2>

```php
public static Folder::create(string $path, \FireHub\Core\Support\Enums\FileSystem\Permission $owner, \FireHub\Core\Support\Enums\FileSystem\Permission $owner_group, \FireHub\Core\Support\Enums\FileSystem\Permission $global, bool $recursive = false):void
```













### ### Makes folder

_Attempts to create the folder specified by $path._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L70)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L70)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to folder ot disk partition._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$owner** - _File owner permission._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$owner_group** - _File owner group permission._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$global** - _Everyone's permission._
* bool **$recursive** = false - _[optional] 
If true, then any parent folders to the $path specified will also be created, with the same permissions._
#### Throws

* [\Error](./Wiki-Error) - _If we could not create a folder._
#### Returns

* void
<h2><a name="delete()"># method: delete</a></h2>

```php
public static Folder::delete(string $path):void
```













### ### Deletes folder

_Attempts to remove the folder named by $path._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L95)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L95)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not delete the folder._
#### Returns

* void
<h2><a name="isfolder()"># method: isFolder</a></h2>

```php
public static Folder::isFolder(string $path):bool
```











> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### ### Tells whether the filename is a regular folder



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L120)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L120)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the folder. If filename is a relative filename, it will be checked relative to the current working
folder. If filename is a symbolic or hard link, then the link will be resolved and checked. If you have
enabled open_basedir, further restrictions may apply._
#### Returns

* bool - _True if the filename exists and is a regular folder, false otherwise._
<h2><a name="totalspace()"># method: totalSpace</a></h2>

```php
public static Folder::totalSpace(string $path):float
```











> [!NOTE]
            Given a file name instead of a folder, the behavior of the function is unspecified and may differ
between operating systems and PHP versions.> [!NOTE]
            This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.

### ### Gets total size of a filesystem or disk partition



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L146)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L146)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to folder ot disk partition._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get disk space for a path._
#### Returns

* float - _Returns the total number of bytes as a float._
<h2><a name="freespace()"># method: freeSpace</a></h2>

```php
public static Folder::freeSpace(string $path):float
```











> [!NOTE]
            Given a file name instead of a folder, the behavior of the function is unspecified and may differ
between operating systems and PHP versions.> [!NOTE]
            This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.

### ### Gets free space of a filesystem or disk partition



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L173)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Folder.php#L173)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to folder ot disk partition._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get disk space for a path._
#### Returns

* float - _Returns the total free space of bytes as a float._
<h2><a name="exist()"># method: exist</a></h2>

```php
final public static FileSystem::exist(string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions
may return unexpected results for files which are larger than 2GB.> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.> [!TIP]
            On windows, use //computername/share/filename or \\computername\share\filename to check files on network
shares.

### ### Checks whether a file or folder exists



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L91)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L91)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the file or folder._
#### Returns

* bool - _True if the file or directory specified by filename exists, false otherwise._
<h2><a name="isreadable()"># method: isReadable</a></h2>

```php
final public static FileSystem::isReadable(string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            The check is done using the real UID/GID instead of the effective one.> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### ### Tells whether a file exists and is readable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L114)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L114)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the file or folder._
#### Returns

* bool - _True if the file or directory specified by $path exists and is readable, false otherwise._
<h2><a name="iswritable()"># method: isWritable</a></h2>

```php
final public static FileSystem::isWritable(string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### Tells whether the path is writable



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L136)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L136)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the file._
#### Returns

* bool - _True if the filename exists and is writable._
<h2><a name="issymboliclink()"># method: isSymbolicLink</a></h2>

```php
final public static FileSystem::isSymbolicLink(string $path):bool
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### ### Tells whether the path is a symbolic link



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L158)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L158)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the file._
#### Returns

* bool - _True if the filename exists and is a symbolic link, false otherwise._
<h2><a name="rename()"># method: rename</a></h2>

```php
public static FileSystem::rename(string $path, string $new_name):void
```











> [!NOTE]
            On Windows, if $new_name already exists, it must be writable, otherwise [[FileSystem#rename()]] fails and
issues E_WARNING.

### ### Renames a file or directory

_Attempts to rename $path to $new_name, moving it between directories if necessary. If renaming a file and
$new_name exists, it will be overwritten. If renaming a directory and $new_name exists, this function will
emit a warning._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L194)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L194)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
The old name path._
* string **$new_name** - _<code>non-empty-string</code>
The new name._
#### Throws

* [\Error](./Wiki-Error) - _If we could not rename a path._
#### Returns

* void
<h2><a name="basename()"># method: basename</a></h2>

```php
final public static FileSystem::basename(string $path, string $suffix = &#039;&#039;):string
```





> [!IMPORTANT]
This method is marked as **final**.





> [!CAUTION]
            Method is locale aware, so for it to see the correct basename with multibyte character paths,
the matching locale must be set using the setlocale() function. If a path contains characters which are invalid
for the current locale, the behavior of [[FileSystem#basename()]] is undefined.> [!NOTE]
            Method operates naively on the input string, and is not aware of the actual filesystem, or path
components such as "..".

### ### Returns a trailing name component of a path

_Given a string containing the path to a file or directory, this function will return the trailing name component._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L225)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L225)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
A path. On Windows, both slash (/) and backslash (\) are used as directory separator character. In other
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





> [!CAUTION]
            [[FileSystem#pathInfo()]] is locale aware, so for it to parse a path containing multibyte characters
correctly, the matching locale must be set using the setlocale() function.> [!NOTE]
            [[FileSystem#pathInfo()]] operates naively on the input string, and is not aware of the actual filesystem,
or path components such as "..".> [!NOTE]
            On Windows systems only, the \ character will be interpreted as a directory separator. On other systems
it will be treated like any other character.

### ### Returns information about a file path



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L255)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L255)**</sub>
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





> [!NOTE]
            Whilst a path must be supplied, the value can be an empty string. In this case, the value is interpreted
as the current directory.> [!NOTE]
            The running script must have executable permissions on all directories in the hierarchy, otherwise
[[FileSystem#absolutePath()]] will return false.> [!NOTE]
            For case-insensitive filesystems absolutePath() may or may not normalize the character case.> [!NOTE]
            The function [[FileSystem#absolutePath()]] will not work for a file which is inside a Phar as such a path
would be virtual path, not a real one.> [!NOTE]
            On Windows, one level only expands junctions and symbolic links to directories.> [!NOTE]
            Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions
may return unexpected results for files which are larger than 2GB.

### ### Returns canonical absolute pathname

_Expands all symbolic links and resolves references to /./, /../ and extra / characters in the input path and
returns the canonical absolute pathname. Trailing delimiters, such as \ and /, are also removed._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L294)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L294)**</sub>
#### Parameters

* string **$path** - _The path being checked._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get absolute path for path, file doesn&#039;t exist or a script doesn&#039;t have
executable permissions._
#### Returns

* string - _The canonical absolute pathname._
<h2><a name="parent()"># method: parent</a></h2>

```php
final public static FileSystem::parent(string $path, int $levels = 1):string
```





> [!IMPORTANT]
This method is marked as **final**.





> [!CAUTION]
            Be careful when using this function in a loop that can reach the top-level directory as this can
result in an infinite loop.

### ### Returns parent folder path

_Given a string containing the path of a file or directory, this function will return the parent folder's path
that is levels up from the current folder._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L327)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L327)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
A path._
* int **$levels** = 1 - _[optional] 
<code>positive-int</code>
The number of parent folders to go up. This must be an integer greater than 0._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If $levels are less than 1._
#### Returns

* string - _The parent folder name of the given path. If there are no slashes in path, a dot ('.') is
returned, indicating the current folder._
<h2><a name="getgroup()"># method: getGroup</a></h2>

```php
final public static FileSystem::getGroup(string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





> [!WARNING]
            This method does not work on Windows.> [!NOTE]
            The results of this function are cached. See clearCache() for more details.> [!TIP]
            Use posix_getgrgid() to resolve it to a group name.

### ### Gets file or folder group

_Gets the file or folder group. The group ID is returned in numerical format._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L354)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L354)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path of the file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get a group for file._
#### Returns

* int - _The group ID of the file._
<h2><a name="setgroup()"># method: setGroup</a></h2>

```php
final public static FileSystem::setGroup(string $path, string|int $group):void
```





> [!IMPORTANT]
This method is marked as **final**.





> [!WARNING]
            This method does not work on Windows.> [!TIP]
            Use posix_getgrgid() to resolve it to a group name.

### ### Changes file or folder group

_Attempts to change the group of the file or folder $path to $group. Only the superuser may change the group of
files arbitrarily; other users may change the group of files to any group of which that user is a member._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L386)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L386)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path of the file or folder._
* string or int **$group** - _<code>non-empty-string|int</code>
A group name or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not set a group for file or folder._
#### Returns

* void
<h2><a name="getowner()"># method: getOwner</a></h2>

```php
final public static FileSystem::getOwner(string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





> [!WARNING]
            This method does not work on Windows.> [!NOTE]
            The results of this function are cached. See clearCache() for more details.> [!TIP]
            Use posix_getpwuid() to resolve it to a username.

### ### Gets file or folder owner



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L412)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L412)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path of the file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get an owner for file or folder._
#### Returns

* int - _The user ID of the owner for the file or folder._
<h2><a name="setowner()"># method: setOwner</a></h2>

```php
final public static FileSystem::setOwner(string $path, string|int $user):void
```





> [!IMPORTANT]
This method is marked as **final**.





> [!WARNING]
            This method does not work on Windows.> [!NOTE]
            This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.> [!TIP]
            Use posix_getpwuid() to resolve it to a username.

### ### Gets file or folder owner



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L443)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L443)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Pth of the file or folder._
* string or int **$user** - _<code>non-empty-string|int</code>
A username or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get an owner for file or folder._
#### Returns

* void
<h2><a name="getpermissions()"># method: getPermissions</a></h2>

```php
final public static FileSystem::getPermissions(string $path):string
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### ### Gets path permissions

_Gets permissions for the given path._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L473)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L473)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
The path._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get permissions for a path._
#### Returns

* string - _Path permissions._
<h2><a name="setpermissions()"># method: setPermissions</a></h2>

```php
final public static FileSystem::setPermissions(string $path, \FireHub\Core\Support\Enums\FileSystem\Permission $owner, \FireHub\Core\Support\Enums\FileSystem\Permission $owner_group, \FireHub\Core\Support\Enums\FileSystem\Permission $global):void
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            The current user is the user under which PHP runs. It is probably not the same user you use for normal
shell or FTP access. The mode can be changed only by user who owns the file on most systems.> [!NOTE]
            This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.

### ### Sets path permissions

_Attempts to change the mode of the specified path to that given in permissions._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L517)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L517)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
The path._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$owner** - _File owner permission._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$owner_group** - _File owner group permission._
* [\FireHub\Core\Support\Enums\FileSystem\Permission](./Wiki-Permission) **$global** - _Everyone's permission,_
#### Throws

* [\Error](./Wiki-Error) - _If we could not set permissions for a path._
#### Returns

* void - _non-empty-string $path_
<h2><a name="lastaccessed()"># method: lastAccessed</a></h2>

```php
final public static FileSystem::lastAccessed(string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            The atime of a file is supposed to change whenever the data blocks of a file are being read. This can be
costly performance-wise when an application regularly accesses a huge number of files or directories. Some
Unix filesystems can be mounted with atime updates disabled to increase the performance of such applications;
USENET news spools are a common example. On such filesystems this function will be useless.> [!NOTE]
            Note that time resolution may differ from one file system to another.> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### ### Gets last access time of path



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L547)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L547)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get last accessed time for a path._
#### Returns

* int - _The time the file was last accessed. The time is returned as a Unix timestamp._
<h2><a name="lastmodified()"># method: lastModified</a></h2>

```php
final public static FileSystem::lastModified(string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            Note that time resolution may differ from one file system to another.> [!NOTE]
            The results of this function are cached.See [[FileSystem#clearCache()]] for more details.

### ### Gets last modification time of a path

_Represents when the data or content is changed or modified, not including that of metadata such as ownership or
owner group._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L575)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L575)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get last modified time for a path._
#### Returns

* int - _The time the file was last modified. The time is returned as a Unix timestamp._
<h2><a name="lastchanged()"># method: lastChanged</a></h2>

```php
final public static FileSystem::lastChanged(string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            In most Unix filesystems, a file is considered changed when its inode data is changed; that is, when the
permissions, owner, group, or other metadata from the inode is updated. See also [[FileSystem#lastModified()]]
(which is what you want to use when you want to create "Last Modified" footers on web pages) and
[[FileSystem#lastAccessed()]].> [!NOTE]
            On Windows, this function will return creating time, but on UNIX inode change time.> [!NOTE]
            Note that time resolution may differ from one file system to another.> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### ### Gets inode change time of a path

_Represents the time when the metadata or inode data of a file is altered, such as the change of permissions,
ownership or group._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L608)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L608)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get last changed time for a path._
#### Returns

* int - _The time the file was last changed. The time is returned as a Unix timestamp._
<h2><a name="setlastaccessedandmodification()"># method: setLastAccessedAndModification</a></h2>

```php
final public static FileSystem::setLastAccessedAndModification(string $path, null|int $last_accessed = null, null|int $last_modified = null):true
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            If the file does not exist, it will be created.> [!NOTE]
            Note that time resolution may differ from one file system to another.

### ### Sets last access and modification time of a path

_Attempts to set the access and modification times of the file named in the filename parameter to the value
given in mtime. Note that the access time is always modified, regardless of the number of parameters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L642)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L642)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to file or folder._
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
final public static FileSystem::inode(string $path):int
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            The results of this function are cached. See [[FileSystem#clearCache()]] for more details.

### ### Gets file inode

_Inode are special disk blocks they are created when the file system is created._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L668)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L668)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to file or folder._
#### Throws

* [\Error](./Wiki-Error) - _If we don&#039;t get inode for a path._
#### Returns

* int - _The inode number of the file._
<h2><a name="list()"># method: list</a></h2>

```php
final public static FileSystem::list(string $folder, null|\FireHub\Core\Support\Enums\Order $order = null):array
```





> [!IMPORTANT]
This method is marked as **final**.







### ### List files and folders inside the specified folder



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L697)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L697)**</sub>
#### Parameters

* string **$folder** - _<code>non-empty-string</code>
The folder that will be scanned._
* null or [\FireHub\Core\Support\Enums\Order](./Wiki-Order) **$order** = null - _[optional] 
Result order._
#### Throws

* [\Error](./Wiki-Error) - _If $folder is empty, or we could not list files and directories inside the specified folder._
#### Returns

* array - _<code>string[]</code> An array of filenames._
<h2><a name="search()"># method: search</a></h2>

```php
final public static FileSystem::search(string $pattern, bool $only_folders = false):array
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.> [!NOTE]
            This function isn't available on some systems (e.g., old Sun OS).

### ### Find path-names matching a pattern

_This method searches for all the path-names matching patterns according to the rules used by the libc glob()
function, which is similar to the rules used by common shells._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L739)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L739)**</sub>
#### Parameters

* string **$pattern** - _<code>non-empty-string</code>
The pattern. No tilde expansion or parameter substitution is done.
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

* array - _<code>string[]</code> An array containing the matched files/folders, an empty array if no file
matched._
<h2><a name="symlink()"># method: symlink</a></h2>

```php
final public static FileSystem::symlink(string $path, string $link):void
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Creates a symbolic link

_Creates a symbolic link to the existing $path with the specified name $link._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L768)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L768)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the symlink._
* string **$link** - _<code>non-empty-string</code>
The link name._
#### Throws

* [\Error](./Wiki-Error) - _If we could not create symlink for a path with link._
#### Returns

* void
<h2><a name="symlinktarget()"># method: symlinkTarget</a></h2>

```php
final public static FileSystem::symlinkTarget(string $path):string
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Returns the target of a symbolic link



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L789)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L789)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the symlink._
#### Throws

* [\Error](./Wiki-Error) - _If we could not target for a path._
#### Returns

* string - _The contents of the symbolic link path._
<h2><a name="symlinkgroup()"># method: symlinkGroup</a></h2>

```php
final public static FileSystem::symlinkGroup(string $path, string|int $group):void
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.> [!NOTE]
            This function is not implemented on Windows platforms.> [!TIP]
            Use posix_getgrgid() to resolve it to a group name.

### ### Changes group ownership of symlink

_Attempts to change the group of the symlink filenames to group. Only the superuser may change the group of a
symlink arbitrarily. Other users may change the group of a symlink to any group of which that user is a member._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L823)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L823)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the symlink._
* string or int **$group** - _<code>non-empty-string|int</code>
The group specified by name or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not change a symlink group._
#### Returns

* void
<h2><a name="symlinkowner()"># method: symlinkOwner</a></h2>

```php
final public static FileSystem::symlinkOwner(string $path, string|int $user):void
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            This function will not work on remote files as the file to be examined must be accessible via the
server's filesystem.> [!NOTE]
            This function is not implemented on Windows platforms.> [!TIP]
            Use posix_getpwuid() to resolve it to a username.

### ### Changes user ownership of symlink

_Attempts to change the owner of the symlink $path to user $user. Only the superuser may change the owner of a
symlink._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L857)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L857)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the symlink._
* string or int **$user** - _<code>non-empty-string|int</code>
Username or number._
#### Throws

* [\Error](./Wiki-Error) - _If we could not change symlink ownership._
#### Returns

* void
<h2><a name="statistics()"># method: statistics</a></h2>

```php
final public static FileSystem::statistics(string $path, bool $symlink = false):array
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Gives information about a file or folder

_Gathers the statistics of the file named by filename. If filename is a symbolic link, statistics are from the
file itself, not the symlink - use $symlink argument to change that behavior._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L891)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L891)**</sub>
#### Parameters

* string **$path** - _<code>non-empty-string</code>
Path to the file or folder._
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





> [!NOTE]
            This function caches information about specific filenames, so you only need to call clearCache() if you
are performing multiple operations on the same filename and require the information about that particular file
to not be cached.

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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L930)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.FileSystem.php#L930)**</sub>
#### Parameters

* bool **$clear_realpath_cache** = false - _[optional] 
Whether to also clear the realpath cache._
* string **$path** = '' - _[optional] 
Clear the realpath cache for a specific filename only. Only used if $clear_realpath_cache is true._
#### Returns

* void