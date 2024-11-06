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

namespace FireHub\Core\Support\Facade\Kernel\HTTP;

use FireHub\Core\Components\DI\Facade;
use FireHub\Core\Kernel\HTTP\Server as HttpServer;

/**
 * ### HTTP Server and execution environment information
 * @since 1.0.0
 *
 * @method static string|false processID () ### Gets PHP's process ID
 * @method static string|false serverAPI () ### Type of interface between web server and PHP
 * @method static string|false hostname () ### Gets the host name for the local machine
 * @method static string|false ip () ### Gets the IPv4 address for the local machine
 * @method static string|false name () ### The name of the server host under which the current script is executing
 * @method static string|false protocol () ### Name and revision of the information protocol via which the page was requested
 * @method static string|false address () ### The IP address of the server under which the current script is executing
 * @method static int|false port () ### The port on the server machine being used by the web server for communication
 * @method static string|false software () ### Server identification string, given in the headers when responding to requests
 * @method static array osInfo () ### Gets OS information
 * @method static string|false phpVersion (?string $extension = null) ### Gets the current PHP or extension version
 * @method static string zendVersion (?string $extension = null) ### Gets the version of the current Zend engine
 * @method static string script () ### Filename of the currently executing script, relative to the document root
 * @method static string scriptFilename () ### Absolute pathname of the currently executing script
 * @method static string scriptPath () ### Contains the current script's path
 * @method static string scriptFilesystemPath () ### Filesystem- (not document root-) based path to the current script after the server has done any virtual-to-real mapping
 * @method static string|false scriptDocumentRoot () ### Document root directory under which the current script is executing, as defined in the server's configuration file
 * @method static bool isExtensionLoaded (string $name) ### Find out whether an extension is loaded
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyIndexed loadedExtensions () ### Collection with the names of all modules compiled and loaded
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyIndexed<string>|false extensionFunctions (string $extension) ### Collection with the names of the functions for a module
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyIndexed includedFiles () ### Collection with the names of included or required files
 * @method static \FireHub\Core\Support\Collection\Type\ReadonlyAssociative getEnvironmentVariable () ### Gets all the environment variables
 * @method static bool setEnvironmentVariable (string $key, string $value) ### Sets the value of an environment variable
 * @method static bool getConfigurationPath (string $key, string $value) ### Retrieve a path to the loaded php.ini file
 * @method static string|false getConfigurationOption (string $key, string $value) ### Gets the value of a configuration option
 * @method static string|false getConfigurationOptions (?string $extension = null) ### Gets all configuration options
 * @method static string|false setConfigurationOption (string $option, null|int|float|string|bool $value) ### Sets the value of a configuration option
 * @method static void restoreConfigurationOption (string $option) ### Restores the value of a configuration option to its original value
 * @method static string tempFolder () ### Gets a directory path used for temporary files
 * @method static int getMemoryUsage () ### Gets the amount of memory allocated to PHP
 * @method static int getMemoryPeakUsage () ### Gets the peak of memory allocated by PHP
 * @method static void resetMemoryPeakUsage () ### Reset the peak memory usage
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

        return HttpServer::class;

    }

}