<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\LowLevel;

use FireHub\Core\Support\Enums\ {
    Order, FileSystem\Permission
};
use Error, ValueError;

use const FireHub\Core\Support\Constants\Path\DS;
use const GLOB_ONLYDIR;
use const SCANDIR_SORT_ASCENDING;
use const SCANDIR_SORT_DESCENDING;
use const SCANDIR_SORT_NONE;

use function basename;
use function chgrp;
use function chmod;
use function chown;
use function clearstatcache;
use function dirname;
use function file_exists;
use function fileatime;
use function filectime;
use function filegroup;
use function fileinode;
use function filemtime;
use function fileowner;
use function fileperms;
use function glob;
use function is_link;
use function is_readable;
use function is_writable;
use function lchgrp;
use function lchown;
use function lstat;
use function pathinfo;
use function readlink;
use function realpath;
use function rename;
use function scandir;
use function symlink;
use function stat;
use function touch;

/**
 * ### File System low-level proxy class
 *
 * Class contains methods related to a file system.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class FileSystem {

    /**
     * ### Checks whether a file or folder exists
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @error\exeption E_WARNING upon failure.
     *
     * @return bool True if the file or directory specified by filename exists, false otherwise.
     *
     * @note Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions
     * may return unexpected results for files which are larger than 2GB.
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     *
     * @tip On windows, use //computername/share/filename or \\computername\share\filename to check files on network
     * shares.
     */
    final public static function exist (string $path):bool {

        return file_exists($path);

    }

    /**
     * ### Tells whether a file exists and is readable
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @error\exeption E_WARNING upon failure.
     *
     * @return bool True if the file or directory specified by $path exists and is readable, false otherwise.
     *
     * @note The check is done using the real UID/GID instead of the effective one.
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     */
    final public static function isReadable (string $path):bool {

        return is_readable($path);

    }

    /**
     * Tells whether the path is writable
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the file.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @error\exeption E_WARNING upon failure.
     *
     * @return bool True if the filename exists and is writable.
     *
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     */
    final public static function isWritable (string $path):bool {

        return is_writable($path);

    }

    /**
     * ### Tells whether the path is a symbolic link
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the file.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @error\exeption E_WARNING upon failure.
     *
     * @return bool True if the filename exists and is a symbolic link, false otherwise.
     *
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     */
    final public static function isSymbolicLink (string $path):bool {

        return is_link($path);

    }

    /**
     * ### Renames a file or directory
     *
     * Attempts to rename $path to $new_name, moving it between directories if necessary. If renaming a file and
     * $new_name exists, it will be overwritten. If renaming a directory and $new_name exists, this function will
     * emit a warning.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\FileSystem::parent() To return a parent folder path.
     * @uses \FireHub\Core\Support\Constants\Path\DS To separate folders.
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * The old name path.
     * </p>
     * @param string $new_name <p>
     * <code>non-empty-string</code>
     * The new name.
     * </p>
     * @phpstan-param non-empty-string $path
     * @phpstan-param non-empty-string $new_name
     *
     * @throws Error If we could not rename a path.
     * @error\exeption E_WARNING upon failure.
     *
     * @return void
     *
     * @note On Windows, if $new_name already exists, it must be writable, otherwise [[FileSystem#rename()]] fails and
     * issues E_WARNING.
     */
    public static function rename (string $path, string $new_name):void {

        rename($path, self::parent($path).DS.$new_name)
            ?: throw new Error("Could not rename path: $path.");

    }

    /**
     * ### Returns a trailing name component of a path
     *
     * Given a string containing the path to a file or directory, this function will return the trailing name component.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * A path. On Windows, both slash (/) and backslash (\) are used as directory separator character. In other
     * environments, it is the forward slash (/).
     * </p>
     * @param string $suffix [optional] <p>
     * If the name component ends in suffix, this will also be cut off.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @return string The base name of the given path.
     *
     * @caution Method is locale aware, so for it to see the correct basename with multibyte character paths,
     * the matching locale must be set using the setlocale() function. If a path contains characters which are invalid
     * for the current locale, the behavior of [[FileSystem#basename()]] is undefined.
     * @note Method operates naively on the input string, and is not aware of the actual filesystem, or path
     * components such as "..".
     */
    final public static function basename (string $path, string $suffix = ''):string {

        return basename($path, $suffix);

    }

    /**
     * ### Returns information about a file path
     * @since 1.0.0
     *
     * @param string $path <p>
     * The path to be parsed.
     * </p>
     *
     * @return array <code><![CDATA[ array<'dirname': string|false, 'basename': string, 'extension': string|false,
     * 'filename': string|false >]]></code> Information about a file path.
     * @phpstan-return array{
     *  'dirname': string|false,
     *  'basename': string,
     *  'extension': string|false,
     *  'filename': string|false
     * }
     *
     * @caution [[FileSystem#pathInfo()]] is locale aware, so for it to parse a path containing multibyte characters
     * correctly, the matching locale must be set using the setlocale() function.
     * @note [[FileSystem#pathInfo()]] operates naively on the input string, and is not aware of the actual filesystem,
     * or path components such as "..".
     * @note On Windows systems only, the \ character will be interpreted as a directory separator. On other systems
     * it will be treated like any other character.
     */
    final public static function pathInfo (string $path):array {

        $path_info = pathinfo($path);

        if (!isset($path_info['dirname'])) $path_info['dirname'] = false;
        if (!isset($path_info['extension'])) $path_info['extension'] = false;
        if (!isset($path_info['filename'])) $path_info['filename'] = false;

        return $path_info;

    }

    /**
     * ### Returns canonical absolute pathname
     *
     * Expands all symbolic links and resolves references to /./, /../ and extra / characters in the input path and
     * returns the canonical absolute pathname. Trailing delimiters, such as \ and /, are also removed.
     * @since 1.0.0
     *
     * @param string $path <p>
     * The path being checked.
     * </p>
     *
     * @throws Error If we could not get absolute path for path, file doesn't exist or a script doesn't have
     * executable permissions.
     *
     * @return string The canonical absolute pathname.
     *
     * @note Whilst a path must be supplied, the value can be an empty string. In this case, the value is interpreted
     * as the current directory.
     * @note The running script must have executable permissions on all directories in the hierarchy, otherwise
     * [[FileSystem#absolutePath()]] will return false.
     * @note For case-insensitive filesystems absolutePath() may or may not normalize the character case.
     * @note The function [[FileSystem#absolutePath()]] will not work for a file which is inside a Phar as such a path
     * would be virtual path, not a real one.
     * @note On Windows, one level only expands junctions and symbolic links to directories.
     * @note Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions
     * may return unexpected results for files which are larger than 2GB.
     */
    final public static function absolutePath (string $path):string {

        return realpath($path)
            ?: throw new Error("Could not get absolute path for path: $path.");

    }

    /**
     * ### Returns parent folder path
     *
     * Given a string containing the path of a file or directory, this function will return the parent folder's path
     * that is levels up from the current folder.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * A path.
     * </p>
     * @param int $levels [optional] <p>
     * <code>positive-int</code>
     * The number of parent folders to go up. This must be an integer greater than 0.
     * </p>
     * @phpstan-param non-empty-string $path
     * @phpstan-param positive-int $levels
     *
     * @throws ValueError If $levels are less than 1.
     *
     * @return string The parent folder name of the given path. If there are no slashes in path, a dot ('.') is
     * returned, indicating the current folder.
     *
     * @caution Be careful when using this function in a loop that can reach the top-level directory as this can
     * result in an infinite loop.
     */
    final public static function parent (string $path, int $levels = 1):string {

        return dirname($path, $levels);

    }

    /**
     * ### Gets file or folder group
     *
     * Gets the file or folder group. The group ID is returned in numerical format.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path of the file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not get a group for file.
     * @error\exeption E_WARNING if we could not get a group for file.
     *
     * @return int The group ID of the file.
     *
     * @warning This method does not work on Windows.
     * @note The results of this function are cached. See clearCache() for more details.
     * @tip Use posix_getgrgid() to resolve it to a group name.
     */
    final public static function getGroup (string $path):int {

        return filegroup($path)
            ?: throw new Error("Could not get group for path: $path.");

    }

    /**
     * ### Changes file or folder group
     *
     * Attempts to change the group of the file or folder $path to $group. Only the superuser may change the group of
     * files arbitrarily; other users may change the group of files to any group of which that user is a member.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path of the file or folder.
     * </p>
     * @param string|int $group <p>
     * <code>non-empty-string|int</code>
     * A group name or number.
     * </p>
     * @phpstan-param non-empty-string $path
     * @phpstan-param non-empty-string|int $group
     *
     * @throws Error If we could not set a group for file or folder.
     *
     * @return void
     *
     * @warning This method does not work on Windows.
     * @tip Use posix_getgrgid() to resolve it to a group name.
     */
    final public static function setGroup (string $path, string|int $group):void {

        chgrp($path, $group)
            ?: throw new Error("Could not set group $group for path $path.");

    }

    /**
     * ### Gets file or folder owner
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path of the file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not get an owner for file or folder.
     * @error\exeption E_WARNING if we could not get an owner for file or folder.
     *
     * @return int The user ID of the owner for the file or folder.
     *
     * @warning This method does not work on Windows.
     * @note The results of this function are cached. See clearCache() for more details.
     * @tip Use posix_getpwuid() to resolve it to a username.
     */
    final public static function getOwner (string $path):int {

        return fileowner($path)
            ?: throw new Error("Could not get owner for file or folder $path.");

    }

    /**
     * ### Gets file or folder owner
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Pth of the file or folder.
     * </p>
     * @param string|int $user <p>
     * <code>non-empty-string|int</code>
     * A username or number.
     * </p>
     * @phpstan-param non-empty-string $path
     * @phpstan-param non-empty-string|int $user
     *
     * @throws Error If we could not get an owner for file or folder.
     *
     * @return void
     *
     * @warning This method does not work on Windows.
     * @note This function will not work on remote files as the file to be examined must be accessible via the
     * server's filesystem.
     * @tip Use posix_getpwuid() to resolve it to a username.
     */
    final public static function setOwner (string $path, string|int $user):void {

        chown($path, $user)
            ?: throw new Error("Could not get owner for file or folder $path.");

    }

    /**
     * ### Gets path permissions
     *
     * Gets permissions for the given path.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::int() To find whether fileperms() function returns integer.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::part() To get part of decoct() function.
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * The path.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not get permissions for a path.
     *
     * @return string Path permissions.
     *
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     *
     * @todo Replace decoct with low level class.
     */
    final public static function getPermissions (string $path):string {

        return DataIs::int($permissions = fileperms($path))
            ? StrSB::part(decoct($permissions), -4)
            : throw new Error("Could not get permissions for path $path.");

    }

    /**
     * ### Sets path permissions
     *
     * Attempts to change the mode of the specified path to that given in permissions.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\FileSystem\Permission As parameter.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::int() To find whether octdec returns integer.
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * The path.
     * </p>
     * @param \FireHub\Core\Support\Enums\FileSystem\Permission $owner <p>
     * File owner permission.
     * </p>
     * @param \FireHub\Core\Support\Enums\FileSystem\Permission $owner_group <p>
     * File owner group permission.
     * </p>
     * @param \FireHub\Core\Support\Enums\FileSystem\Permission $global <p>
     * Everyone's permission,
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not set permissions for a path.
     * @error\exeption E_WARNING if we could not set permissions for a path.
     *
     * @return void non-empty-string $path
     *
     * @note The current user is the user under which PHP runs. It is probably not the same user you use for normal
     * shell or FTP access. The mode can be changed only by user who owns the file on most systems.
     * @note This function will not work on remote files as the file to be examined must be accessible via the
     * server's filesystem.
     *
     * @todo Replace octdec with low level class.
     */
    final public static function setPermissions (string $path, Permission $owner, Permission $owner_group, Permission $global):void {

        DataIs::int($permissions = octdec('0'.$owner->value.$owner_group->value.$global->value))
        && chmod($path, $permissions)
            ?: throw new Error("Could not set permissions for path $path.");

    }

    /**
     * ### Gets last access time of path
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not get last accessed time for a path.
     * @error\exeption E_WARNING if we could not get last accessed time for a path.
     *
     * @return int The time the file was last accessed. The time is returned as a Unix timestamp.
     *
     * @note The atime of a file is supposed to change whenever the data blocks of a file are being read. This can be
     * costly performance-wise when an application regularly accesses a huge number of files or directories. Some
     * Unix filesystems can be mounted with atime updates disabled to increase the performance of such applications;
     * USENET news spools are a common example. On such filesystems this function will be useless.
     * @note Note that time resolution may differ from one file system to another.
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     */
    final public static function lastAccessed (string $path):int {

        return ($time = fileatime($path)) !== false
            ? $time : throw new Error("Could not get last accessed time for path: $path.");

    }

    /**
     * ### Gets last modification time of a path
     *
     * Represents when the data or content is changed or modified, not including that of metadata such as ownership or
     * owner group.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not get last modified time for a path.
     * @error\exeption E_WARNING if we could not get last modified time for a path.
     *
     * @return int The time the file was last modified. The time is returned as a Unix timestamp.
     *
     * @note Note that time resolution may differ from one file system to another.
     * @note The results of this function are cached.See [[FileSystem#clearCache()]] for more details.
     */
    final public static function lastModified (string $path):int {

        return ($time = filemtime($path)) !== false
            ? $time : throw new Error("Could not get last modified time for path: $path.");

    }

    /**
     * ### Gets inode change time of a path
     *
     * Represents the time when the metadata or inode data of a file is altered, such as the change of permissions,
     * ownership or group.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not get last changed time for a path.
     * @error\exeption E_WARNING if we could not get last changed time for a path.
     *
     * @return int The time the file was last changed. The time is returned as a Unix timestamp.
     *
     * @note In most Unix filesystems, a file is considered changed when its inode data is changed; that is, when the
     * permissions, owner, group, or other metadata from the inode is updated. See also [[FileSystem#lastModified()]]
     * (which is what you want to use when you want to create "Last Modified" footers on web pages) and
     * [[FileSystem#lastAccessed()]].
     * @note On Windows, this function will return creating time, but on UNIX inode change time.
     * @note Note that time resolution may differ from one file system to another.
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     */
    final public static function lastChanged (string $path):int {

        return ($time = filectime($path)) !== false
            ? $time : throw new Error("Could not get last changed time for path: $path.");

    }

    /**
     * ### Sets last access and modification time of a path
     *
     * Attempts to set the access and modification times of the file named in the filename parameter to the value
     * given in mtime. Note that the access time is always modified, regardless of the number of parameters.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to file or folder.
     * </p>
     * @param null|int $last_accessed [optional] <p>
     * The touch time. If mtime is null, the current system time() is used.
     * </p>
     * @param null|int $last_modified [optional] <p>
     * If not null, the access time of the given filename is set to the value of atime. Otherwise, it is set to the
     * value passed to the mtime parameter. If both are null, the current system time is used.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not set last access and modification time of a path.
     *
     * @return True True on success.
     *
     * @note If the file does not exist, it will be created.
     * @note Note that time resolution may differ from one file system to another.
     */
    final public static function setLastAccessedAndModification (string $path, int $last_accessed = null, int $last_modified = null):true {

        return touch($path, $last_modified, $last_accessed)
            ?: throw new Error("Could not set last access and modification time of path: $path.");

    }

    /**
     * ### Gets file inode
     *
     * Inode are special disk blocks they are created when the file system is created.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to file or folder.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we don't get inode for a path.
     * @error\exeption E_WARNING if we not get inode for a path.
     *
     * @return int The inode number of the file.
     *
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     */
    final public static function inode (string $path):int {

        return fileinode($path)
            ?: throw new Error("Could not get inode for path: $path.");

    }

    /**
     * ### List files and folders inside the specified folder
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Order::ASC To list files and folders in ascending order.
     * @uses \FireHub\Core\Support\Enums\Order::DESC To list files and folders in descending order.
     *
     * @param string $folder <p>
     * <code>non-empty-string</code>
     * The folder that will be scanned.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\Order $order [optional] <p>
     * Result order.
     * </p>
     * @phpstan-param non-empty-string $folder
     *
     * @throws Error If $folder is empty, or we could not list files and directories inside the specified folder.
     * @error\exeption E_WARNING upon failure.
     *
     * @return array <code>string[]</code> An array of filenames.
     * @phpstan-return string[]
     */
    final public static function list (string $folder, Order $order = null):array {

        return scandir($folder, match ($order) {
            Order::ASC => SCANDIR_SORT_ASCENDING,
            Order::DESC => SCANDIR_SORT_DESCENDING,
            default => SCANDIR_SORT_NONE
        })
            ?: throw new Error("Could not list files and directories inside the specified folder: $folder.");

    }

    /**
     * ### Find path-names matching a pattern
     *
     * This method searches for all the path-names matching patterns according to the rules used by the libc glob()
     * function, which is similar to the rules used by common shells.
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * <code>non-empty-string</code>
     * The pattern. No tilde expansion or parameter substitution is done.
     * - * - Matches zero or more characters.
     * - ? - Matches exactly one character (any character).
     * - [...] - Matches one character from a group of characters. If the first character is !, matches any character
     * not in the group.
     * - \ - Escapes the following character.
     * </p>
     * @param bool $only_folders [optional] <p>
     * Return only directory entries which match the pattern.
     * </p>
     * @phpstan-param non-empty-string $pattern
     *
     * @throws Error If there was an error while searching for a path.
     *
     * @return array <code>string[]</code> An array containing the matched files/folders, an empty array if no file
     * matched.
     * @phpstan-return string[]
     *
     * @note This function will not work on remote files as the file to be examined must be accessible via the
     * server's filesystem.
     * @note This function isn't available on some systems (e.g., old Sun OS).
     */
    final public static function search (string $pattern, bool $only_folders = false):array {

        return glob($pattern, $only_folders ? GLOB_ONLYDIR : 0)
            ?: throw new Error("Error while searching for path: $only_folders.");

    }

    /**
     * ### Creates a symbolic link
     *
     * Creates a symbolic link to the existing $path with the specified name $link.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the symlink.
     * </p>
     * @param string $link <p>
     * <code>non-empty-string</code>
     * The link name.
     * </p>
     * @phpstan-param non-empty-string $path
     * @phpstan-param non-empty-string $link
     *
     * @throws Error If we could not create symlink for a path with link.
     * @error\exeption E_WARNING if a link already exists, permission denied or on Windows $path doesn't exist.
     *
     * @return void
     */
    final public static function symlink (string $path, string $link):void {

        symlink($path, $link)
            ?: throw new Error("Could not create symlink for path: $path, with link: $link.");

    }

    /**
     * ### Returns the target of a symbolic link
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the symlink.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not target for a path.
     *
     * @return string The contents of the symbolic link path.
     */
    final public static function symlinkTarget (string $path):string {

        return readlink($path)
            ?: throw new Error("Could not get target for path: $path.");

    }

    /**
     * ### Changes group ownership of symlink
     *
     * Attempts to change the group of the symlink filenames to group. Only the superuser may change the group of a
     * symlink arbitrarily. Other users may change the group of a symlink to any group of which that user is a member.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the symlink.
     * </p>
     * @param string|int $group <p>
     * <code>non-empty-string|int</code>
     * The group specified by name or number.
     * </p>
     * @phpstan-param non-empty-string $path
     * @phpstan-param non-empty-string|int $group
     *
     * @throws Error If we could not change a symlink group.
     *
     * @return void
     *
     * @note This function will not work on remote files as the file to be examined must be accessible via the
     * server's filesystem.
     * @note This function is not implemented on Windows platforms.
     * @tip Use posix_getgrgid() to resolve it to a group name.
     */
    final public static function symlinkGroup (string $path, string|int $group):void {

        lchgrp($path, $group)
            ?: throw new Error("Could not change symlink: $path, to group: $group.");

    }

    /**
     * ### Changes user ownership of symlink
     *
     * Attempts to change the owner of the symlink $path to user $user. Only the superuser may change the owner of a
     * symlink.
     * @since 1.0.0
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the symlink.
     * </p>
     * @param string|int $user <p>
     * <code>non-empty-string|int</code>
     * Username or number.
     * </p>
     * @phpstan-param non-empty-string $path
     * @phpstan-param non-empty-string|int $user
     *
     * @throws Error If we could not change symlink ownership.
     *
     * @return void
     *
     * @note This function will not work on remote files as the file to be examined must be accessible via the
     * server's filesystem.
     * @note This function is not implemented on Windows platforms.
     * @tip Use posix_getpwuid() to resolve it to a username.
     */
    final public static function symlinkOwner (string $path, string|int $user):void {

        lchown($path, $user)
            ?: throw new Error("Could not change symlink: $path, to ownership: $user.");

    }

    /**
     * ### Gives information about a file or folder
     *
     * Gathers the statistics of the file named by filename. If filename is a symbolic link, statistics are from the
     * file itself, not the symlink - use $symlink argument to change that behavior.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::filter() To filter string keys in statistics.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To find whether the statistics key is string or not.
     *
     * @param string $path <p>
     * <code>non-empty-string</code>
     * Path to the file or folder.
     * </p>
     * @param bool $symlink [optional] <p>
     * If true, the method gives information about a file or symbolic link.
     * </p>
     * @phpstan-param non-empty-string $path
     *
     * @throws Error If we could not get statistics for a path.
     *
     * @return array <code><![CDATA[ array<0|1|2|3|4|5|6|7|8|9|10|11|12|'atime'|'blksize'|'blocks'|'ctime'|'dev'|'gid'|'ino'|'mode'|'mtime'|'nlink'|'rdev'|'size'|'uid', int> ]]</code>
     * Statistics about file or folder.
     * @phpstan-return array<0|1|2|3|4|5|6|7|8|9|10|11|12|'atime'|'blksize'|'blocks'|'ctime'|'dev'|'gid'|'ino'|'mode'|'mtime'|'nlink'|'rdev'|'size'|'uid', int>
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    final public static function statistics (string $path, bool $symlink = false):array {

        return Arr::filter(
            ($statistics = $symlink ? lstat($path) : stat($path))
                ? $statistics
                : throw new Error("Could not get statistics for path: $path."),
            fn($value, $key) => DataIs::string($key), // @phpstan-ignore-line
            true
        );

    }

    /**
     * ### Clears file status cache
     *
     * When you use [[FileSystem#statistics()]] or any of the other functions listed in the affected functions list
     * (below), PHP caches the information those functions return to provide faster performance. However, in certain
     * cases, you may want to clear the cached information. For instance, if the same file is being checked multiple
     * times within a single script, and that file is in danger of being removed or changed during that script's
     * operation, you may elect to clear the status cache. In these cases, you can use the [[FileSystem#clearCache()]]
     * function to clear the information that PHP caches about a file. You should also note that PHP doesn't cache
     * information about non-existent files. So, if you call [[FileSystem#exist()]] on a file which doesn't exist, it
     * will return false until you create the file. If you create the file, it will return true even if you then
     * delete the file. However, [[File#delete()]] clears the cache automatically.
     * @since 1.0.0
     *
     * @param bool $clear_realpath_cache [optional] <p>
     * Whether to also clear the realpath cache.
     * </p>
     * @param string $path [optional] <p>
     * Clear the realpath cache for a specific filename only. Only used if $clear_realpath_cache is true.
     * </p>
     *
     * @return void
     *
     * @note This function caches information about specific filenames, so you only need to call clearCache() if you
     * are performing multiple operations on the same filename and require the information about that particular file
     * to not be cached.
     */
    final public static function clearCache (bool $clear_realpath_cache = false, string $path = ''):void {

        clearstatcache($clear_realpath_cache, $path);

    }

}