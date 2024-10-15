<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Kernel
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Kernel;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\ {
    ReadonlyIndexed, ReadonlyAssociative
};
use FireHub\Core\Support\Bags\Server as ServerBag;
use FireHub\Core\Support\LowLevel\ {
    Network, PHP
};

/**
 * ### Server and execution environment information
 * @since 1.0.0
 */
abstract class Server implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server As parameter.
     *
     * @param \FireHub\Core\Support\Bags\Server $server <p>
     * Server and execution environment information bag.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected readonly ServerBag $server
    ) {}

    /**
     * ### Gets PHP's process ID
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::processID() To get PHP's process ID.
     *
     * @return int|false Current PHP process ID, or false on error.
     *
     * @warning Process IDs aren't unique, thus they're a weak entropy source. We recommend against relying on pids
     * in security-dependent contexts.
     */
    public static function processID ():int|false {

        return PHP::processID();

    }

    /**
     * ### Type of interface between web server and PHP
     *
     * Returns a lowercase string that describes the type of interface (the Server API, SAPI) that PHP is using. For
     * example, in CLI PHP this string will be "cli" whereas with Apache it may have several different values
     * depending on the exact SAPI used.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::serverAPI() To get a type of interface between web server and PHP.
     *
     * @return non-empty-lowercase-string|false Interface type, or false on failure.
     */
    public static function serverAPI ():string|false {

        return PHP::serverAPI();

    }

    /**
     * ### Gets the host name for the local machine
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Network::hostname() To get the host name.
     *
     * @return non-empty-string|false String with the hostname on success, otherwise false is returned.
     */
    public function hostname ():string|false {

        return Network::hostname() ?: false;

    }

    /**
     * ### Gets the IPv4 address for the local machine
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\Server::hostname() To get the host name for the local machine.
     * @uses \FireHub\Core\Support\LowLevel\Network::ipFromHostname() To get the IPv4 address corresponding to a
     * given Internet host name.
     *
     * @return string|false String with the hostname on success, otherwise false is returned.
     */
    public function ip ():string|false {

        return $this->hostname() ? Network::ipFromHostname($this->hostname()) : false;

    }

    /**
     * ### Filename of the currently executing script, relative to the document root
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script
     *
     * @return non-empty-string The filename of the currently executing script, relative to the document root.
     */
    public function script ():string {

        return $this->server->script;

    }

    /**
     * ### Gets the name of the owner for the current PHP script
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::scriptOwner() To get the name of the owner for the current PHP script.
     *
     * @return string Username as a string.
     */
    public static function scriptOwner ():string {

        return PHP::scriptOwner();

    }

    /**
     * ### Absolute pathname of the currently executing script
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script_filename
     *
     * @return non-empty-string The absolute pathname of the currently executing script.
     */
    public function scriptFilename ():string {

        return $this->server->script_filename;

    }

    /**
     * ### Contains the current script's path
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script_path
     *
     * @return non-empty-string Script's path.
     */
    public function scriptPath ():string {

        return $this->server->script_path;

    }

    /**
     * ### Filesystem- (not document root-) based path to the current script after the server has done any virtual-to-real mapping
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script_filesystem_path
     *
     * @return non-empty-string Script's path.
     */
    public function scriptFilesystemPath ():string {

        return $this->server->script_filesystem_path;

    }

    /**
     * ### Find out whether an extension is loaded
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::isExtensionLoaded() To find out whether an extension is loaded.
     *
     * @param string $name <p>
     * The extension name. This parameter is case-insensitive.
     * </p>
     *
     * @return bool True, if the extension identified by an extension is loaded, false otherwise.
     */
    public function isExtensionLoaded (string $name):bool {

        return PHP::isExtensionLoaded($name);

    }

    /**
     * ### Collection with the names of all modules compiled and loaded
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::readonlyList() To create a list collection from extensions.
     * @uses \FireHub\Core\Support\LowLevel\PHP::loadedExtensions() To get an array with the names of all modules
     * compiled and loaded.
     *
     * @return \FireHub\Core\Support\Collection\Type\ReadonlyIndexed<string> Indexed collection of all the module names.
     */
    public function loadedExtensions ():ReadonlyIndexed {

        return Collection::readonlyList(PHP::loadedExtensions());

    }

    /**
     * ### Collection with the names of the functions for a module
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::readonlyList() To create a list collection from extension functions.
     * @uses \FireHub\Core\Support\LowLevel\PHP::loadedExtensions() To get an array with the names of the functions
     * of a module.
     *
     * @param string $extension <p>
     * The module name. This parameter is case-insensitive.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\ReadonlyIndexed<string>|false Array with all the functions, or false if an
     * extension is not a valid extension.
     */
    public static function extensionFunctions (string $extension):ReadonlyIndexed|false {

        $extensions = PHP::extensionFunctions($extension);

        return $extensions
            ? Collection::readonlyList($extensions) : false;

    }

    /**
     * ### Collection with the names of included or required files
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::readonlyList() To create a list collection from included files.
     * @uses \FireHub\Core\Support\LowLevel\PHP::includedFiles() To get an array with the names of included or
     * required files.
     *
     * @return \FireHub\Core\Support\Collection\Type\ReadonlyIndexed<string> Array of the names for all files referenced by include and family.
     */
    public static function includedFiles ():ReadonlyIndexed {

        return Collection::readonlyList(PHP::includedFiles());

    }

    /**
     * ### Gets all the environment variables
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\ReadonlyAssociative To create a list collection from all the environment variables.
     * @uses \FireHub\Core\Support\LowLevel\PHP::getEnvironmentVariable() To get all the environment variables.
     *
     * @return \FireHub\Core\Support\Collection\Type\ReadonlyAssociative<non-empty-string, string> Environment variables list.
     */
    public static function getEnvironmentVariable (?string $name = null):ReadonlyAssociative {

        return Collection::readonlyAssociative(PHP::getEnvironmentVariable($name)); // @phpstan-ignore-line

    }

    /**
     * ### Sets the value of an environment variable
     *
     * Adds assignment to the server environment. The environment variable will only exist for the duration of the
     * current request. At the end of the request, the environment is restored to its original state.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::setEnvironmentVariable() To set the value of an environment variable.
     *
     * @param non-empty-string $key <p>
     * The setting key.
     * </p>
     * @param non-empty-string $value <p>
     * The setting value.
     * </p>
     *
     * @return bool True on success or false on failure.
     */
    public static function setEnvironmentVariable (string $key, string $value):bool {

        return PHP::setEnvironmentVariable($key.'='.$value);

    }

    /**
     * ### Retrieve a path to the loaded php.ini file
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::getConfigurationPath() To get the retrieve path to the loaded php.ini
     * file.
     *
     * @return non-empty-string|false The loaded php.ini path, or false if one is not loaded.
     */
    public static function getConfigurationPath ():string|false {

        return PHP::getConfigurationPath();

    }

    /**
     * ### Gets the value of a configuration option
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::getConfigurationOption() To get the value of a configuration option.
     *
     * @param non-empty-string $option <p>
     * The configuration option name.
     * </p>
     *
     * @return string|false Value of the configuration option as a string on success, or an empty string for null
     * values. Returns false if the configuration option doesn't exist.
     *
     * @note A boolean ini value of off will be returned as an empty string or "0" while a boolean ini value of on
     * will be returned as "1". The function can also return the literal string of INI value.
     * @note Method can't read "array" ini options such as pdo.dsn.*, and returns false in this case.
     */
    public static function getConfigurationOption (string $option):string|false {

        return PHP::getConfigurationOption($option);

    }

    /**
     * ### Gets all configuration options
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\ReadonlyAssociative To create a list collection from all the configuration options.
     * @uses \FireHub\Core\Support\LowLevel\PHP::getConfigurationOption() To get all configuration options.
     *
     * @param null|non-empty-string $extension <p>
     * An optional extension name. If not null or the string core, the function returns only options specific for
     * that extension.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\ReadonlyAssociative<non-empty-string, array{global_value: null|int|string, local_value: null|int|string, access: \FireHub\Core\Support\Enums\PHP\IniAccessLevel}>|false
     * Associative array with directive name as the array key. Returns false and raises an E_WARNING level error if
     * the extension doesn't exist.
     *
     * @note Method ignores "array" ini options such as pdo.dsn.*.
     */
    public static function getConfigurationOptions (?string $extension = null):readonlyAssociative|false {

        $options = PHP::getConfigurationOptions($extension);

        return $options // @phpstan-ignore-line
            ? Collection::readonlyAssociative($options) : false;

    }

    /**
     * ### Sets the value of a configuration option
     *
     * Sets the value of the given configuration option. The configuration option will keep this new value during the
     * script's execution and will be restored at the script's ending.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::setConfigurationOption() To set the value of a configuration option.
     *
     * @param non-empty-string $option <p>
     * The configuration option name.
     * </p>
     * @param null|scalar $value <p>
     * The new value for the option.
     * </p>
     *
     * @return bool Returns the true on success, false on failure.
     *
     * @note A boolean ini value of off will be returned as an empty string or "0" while a boolean ini value of on
     * will be returned as "1". The function can also return the literal string of INI value.
     * @note Method can't read "array" ini options such as pdo.dsn.*, and returns false in this case.
     */
    public static function setConfigurationOption (string $option, null|int|float|string|bool $value):bool {

        return  PHP::setConfigurationOption($option, $value);

    }

    /**
     * ### Restores the value of a configuration option to its original value
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\PHP::restoreConfigurationOption() To restore the value of a configuration
     * option to its original value.
     *
     * @param non-empty-string $option <p>
     * The configuration option name.
     * </p>
     *
     * @return void
     */
    public static function restoreConfigurationOption (string $option):void {

        PHP::restoreConfigurationOption($option);

    }

}