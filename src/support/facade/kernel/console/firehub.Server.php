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

namespace FireHub\Core\Support\Facade\Kernel\Console;

use FireHub\Core\Components\DI\Facade;
use FireHub\Core\Kernel\Console\Server as ConsoleServer;

/**
 * ### Console Server and execution environment information
 * @since 1.0.0
 *
 * @method static string|false hostname () ### Gets the host name for the local machine
 * @method static string|false ip () ### Gets the IPv4 address for the local machine
 * @method static string script () ### Filename of the currently executing script, relative to the document root
 * @method static string scriptFilename () ### Absolute pathname of the currently executing script
 * @method static string scriptPath () ### Contains the current script's path
 * @method static string scriptFilesystemPath () ### Filesystem- (not document root-) based path to the current script after the server has done any virtual-to-real mapping
 * @method static bool isExtensionLoaded (string $name) ### Find out whether an extension is loaded
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyIndexed loadedExtensions () ### Collection with the names of all modules compiled and loaded
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyIndexed<string>|false extensionFunctions (string $extension) ### Collection with the names of the functions for a module
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyIndexed includedFiles () ### Collection with the names of included or required files
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyAssociative getEnvironmentVariable () ### Gets all the environment variables
 * @method static bool setEnvironmentVariable (string $key, string $value) ### Sets the value of an environment variable
 *
 * @phpstan-ignore-next-line
 */
class Server extends Facade {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function record ():string {

        return ConsoleServer::class;

    }

}