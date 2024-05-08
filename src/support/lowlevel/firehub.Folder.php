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

use FireHub\Core\Support\Enums\FileSystem\Permission;
use Error;

use function disk_free_space;
use function disk_total_space;
use function is_dir;
use function mkdir;
use function rmdir;

/**
 * ### Folder low-level proxy class
 *
 * Class contains methods related to folders.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
final class Folder extends FileSystem {

    /**
     * ### Makes folder
     *
     * Attempts to create the folder specified by $path.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\FileSystem\Permission As parameter.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::int() To find whether octdec() returns an integer.
     *
     * @param non-empty-string $path <p>
     * Path to folder ot disk partition.
     * </p>
     * @param \FireHub\Core\Support\Enums\FileSystem\Permission $owner <p>
     * File owner permission.
     * </p>
     * @param \FireHub\Core\Support\Enums\FileSystem\Permission $owner_group <p>
     * File owner group permission.
     * </p>
     * @param \FireHub\Core\Support\Enums\FileSystem\Permission $global <p>
     * Everyone's permission.
     * </p>
     * @param bool $recursive [optional] <p>
     * If true, then any parent folders to the $path specified will also be created, with the same permissions.
     * </p>
     *
     * @throws Error If we could not create a folder.
     * @error\exeption E_WARNING if the folder already exists or if the relevant permissions prevent creating folder.
     *
     * @return void
     *
     * @todo Replace octdec with low level class.
     */
    public static function create (string $path, Permission $owner, Permission $owner_group, Permission $global, bool $recursive = false):void {

        DataIs::int($permissions = octdec('0'.$owner->value.$owner_group->value.$global->value))
        && mkdir($path, $permissions, $recursive)
            ?: throw new Error("Could not create folder: $path.");

    }

    /**
     * ### Deletes folder
     *
     * Attempts to remove the folder named by $path.
     * @since 1.0.0
     *
     * @param non-empty-string $path <p>
     * Path to folder.
     * </p>
     *
     * @throws Error If we could not delete the folder.
     * @error\exeption E_WARNING if the folder is not empty, or relevant permissions mustn't permit this.
     *
     * @return void
     */
    public static function delete (string $path):void {

        rmdir($path)
            ?: throw new Error("Could not delete folder: $path.");

    }

    /**
     * ### Tells whether the filename is a regular folder
     * @since 1.0.0
     *
     * @param non-empty-string $path <p>
     * Path to the folder. If filename is a relative filename, it will be checked relative to the current working
     * folder. If filename is a symbolic or hard link, then the link will be resolved and checked. If you have
     * enabled open_basedir, further restrictions may apply.
     * </p>
     *
     * @error\exeption E_WARNING upon failure.
     *
     * @return bool True if the filename exists and is a regular folder, false otherwise.
     *
     * @note The results of this function are cached. See [[FileSystem#clearCache()]] for more details.
     */
    public static function isFolder (string $path):bool {

        return is_dir($path);

    }

    /**
     * ### Gets total size of a filesystem or disk partition
     * @since 1.0.0
     *
     * @param non-empty-string $path <p>
     * Path to folder ot disk partition.
     * </p>
     *
     * @throws Error If we could not get disk space for a path.
     * @error\exeption E_WARNING if we could not get disk space for a path.
     *
     * @return float Returns the total number of bytes as a float.
     *
     * @note Given a file name instead of a folder, the behavior of the function is unspecified and may differ
     * between operating systems and PHP versions.
     * @note This function will not work on remote files as the file to be examined must be accessible via the
     * server's filesystem.
     */
    public static function totalSpace (string $path):float {

        return disk_total_space($path)
            ?: throw new Error("Could not get disk space for path: $path.");

    }

    /**
     * ### Gets free space of a filesystem or disk partition
     * @since 1.0.0
     *
     * @param non-empty-string $path <p>
     * Path to folder ot disk partition.
     * </p>
     *
     * @throws Error If we could not get disk space for a path.
     * @error\exeption E_WARNING if we could not get disk space for a path.
     *
     * @return float Returns the total free space of bytes as a float.
     *
     * @note Given a file name instead of a folder, the behavior of the function is unspecified and may differ
     * between operating systems and PHP versions.
     * @note This function will not work on remote files as the file to be examined must be accessible via the
     * server's filesystem.
     */
    public static function freeSpace (string $path):float {

        return disk_free_space($path)
            ?: throw new Error("Could not get disk space for path: $path.");

    }

}