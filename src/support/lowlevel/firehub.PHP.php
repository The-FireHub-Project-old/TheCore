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

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};
use FireHub\Core\Support\Enums\PHP\IniAccessLevel;

use function extension_loaded;
use function get_current_user;
use function get_extension_funcs;
use function get_included_files;
use function get_loaded_extensions;
use function getenv;
use function getmypid;
use function ini_get;
use function ini_get_all;
use function ini_restore;
use function ini_set;
use function memory_get_peak_usage;
use function memory_get_usage;
use function memory_reset_peak_usage;
use function php_ini_loaded_file;
use function php_sapi_name;
use function php_uname;
use function phpversion;
use function putenv;
use function sys_get_temp_dir;
use function version_compare;
use function zend_version;

/**
 * ### PHP info and options low-level proxy class
 *
 * This method enables you to get a lot of information about PHP itself, for example, runtime configuration,
 * loaded extensions, version, and much more.
 * @since 1.0.0
 */
final class PHP implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Find out whether an extension is loaded
     * @since 1.0.0
     *
     * @param string $name <p>
     * The extension name. This parameter is case-insensitive.
     * </p>
     *
     * @return bool True, if the extension identified by an extension is loaded, false otherwise.
     */
    public static function isExtensionLoaded (string $name):bool {

        return extension_loaded($name);

    }

    /**
     * ### Array with the names of all modules compiled and loaded
     * @since 1.0.0
     *
     * @return string[] Indexed array of all the module names.
     */
    public static function loadedExtensions ():array {

        return get_loaded_extensions();

    }

    /**
     * ### Array with the names of the functions of a module
     * @since 1.0.0
     *
     * @param string $extension <p>
     * The module name. This parameter is case-insensitive.
     * </p>
     *
     * @return string[]|false Array with all the functions, or false if an extension is not a valid extension.
     */
    public static function extensionFunctions (string $extension):array|false {

        return get_extension_funcs($extension);

    }

    /**
     * ### Gets the name of the owner for the current PHP script
     * @since 1.0.0
     *
     * @return string Username as a string.
     */
    public static function scriptOwner ():string {

        return get_current_user();

    }

    /**
     * ### Array with the names of included or required files
     * @since 1.0.0
     *
     * @return string[] Array of the names for all files referenced by include and family.
     */
    public static function includedFiles ():array {

        return get_included_files();

    }

    /**
     * ### Gets the value of a single or all the environment variables
     * @since 1.0.0
     *
     * @param null|string $name [optional] <p>
     * The variable name as a string or null.
     * </p>
     *
     * @return array<non-empty-string, string>|string|false Returns the value of the environment variable name, or false
     * if the environment variable name doesn't exist. If the name is null, all environment variables are returned as
     * an associative array.
     *
     * @phpstan-ignore-next-line
     */
    public static function getEnvironmentVariable (?string $name = null):array|string|false {

        return getenv($name); // @phpstan-ignore-line

    }

    /**
     * ### Sets the value of an environment variable
     *
     * Adds assignment to the server environment. The environment variable will only exist for the duration of the
     * current request. At the end of the request, the environment is restored to its original state.
     * @since 1.0.0
     *
     * @param non-empty-string $assignment <p>
     * The setting, like "FOO=BAR".
     * </p>
     *
     * @return bool True on success or false on failure.
     */
    public static function setEnvironmentVariables (string $assignment):bool {

        return putenv($assignment);

    }

    /**
     * ### Retrieve a path to the loaded php.ini file
     * @since 1.0.0
     *
     * @return non-empty-string|false The loaded php.ini path, or false if one is not loaded.
     */
    public static function getConfigurationPath ():string|false {

        return php_ini_loaded_file();

    }

    /**
     * ### Gets the value of a configuration option
     * @since 1.0.0
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

        return ini_get($option);

    }

    /**
     * ### Gets all configuration options
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\PHP\IniAccessLevel To set access level.
     *
     * @param null|non-empty-string $extension <p>
     * An optional extension name. If not null or the string core, the function returns only options specific for
     * that extension.
     * </p>
     *
     * @return array<non-empty-string, array{global_value: null|int|string, local_value: null|int|string, access: \FireHub\Core\Support\Enums\PHP\IniAccessLevel}>|false
     * Associative array with directive name as the array key. Returns false and raises an E_WARNING level error if
     * the extension doesn't exist.
     *
     * @note Method ignores "array" ini options such as pdo.dsn.*.
     */
    public static function getConfigurationOptions (?string $extension = null):array|false {

        $options = ini_get_all($extension);

        if (!$options) return false;

        foreach ($options as $option => $values)
            $options[$option]['access'] = IniAccessLevel::from($values['access']); // @phpstan-ignore-line

        return $options; // @phpstan-ignore-line

    }

    /**
     * ### Sets the value of a configuration option
     *
     * Sets the value of the given configuration option. The configuration option will keep this new value during the
     * script's execution and will be restored at the script's ending.
     * @since 1.0.0
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

        return ini_set($option, $value) !== false;

    }

    /**
     * ### Restores the value of a configuration option to its original value
     * @since 1.0.0
     *
     * @param non-empty-string $option <p>
     * The configuration option name.
     * </p>
     *
     * @return void
     */
    public static function restoreConfigurationOption (string $option):void {

        ini_restore($option);

    }

    /**
     * ### Gets PHP's process ID
     * @since 1.0.0
     *
     * @return int|false Current PHP process ID, or false on error.
     *
     * @warning Process IDs aren't unique, thus they're a weak entropy source. We recommend against relying on pids
     * in security-dependent contexts.
     */
    public static function processID ():int|false {

        return getmypid();

    }

    /**
     * ### Gets the peak of memory allocated by PHP
     *
     * Returns a lowercase string that describes the type of interface (the Server API, SAPI) that PHP is using. For
     * example, in CLI PHP this string will be "cli" whereas with Apache it may have several different values
     * depending on the exact SAPI used.
     * @since 1.0.0
     *
     * @return non-empty-lowercase-string|false Interface type, or false on failure.
     */
    public static function serverAPI ():string|false {

        return php_sapi_name();

    }

    /**
     * ### Information about the operating system PHP is running one "cli" whereas with Apache it may have several different values
     * depending on the exact SAPI used.
     * @since 1.0.0
     *
     * @return array{name: string, release: string, version: string, machine: string} Operating system Information.
     */
    public static function osInfo ():array {

        return [
            'name' => php_uname('s'),
            'release' => php_uname('r'),
            'version' => php_uname('v'),
            'machine' => php_uname('m')
        ];

    }

    /**
     * ### Gets the current PHP or extension version
     * @since 1.0.0
     *
     * @param null|non-empty-string $extension <p>
     * An optional extension name.
     * </p>
     *
     * @return string|false The current PHP version as a string. If a string argument is provided for extension
     * parameter, phpversion() returns the version of that extension, or false if there is no version information
     * associated or the extension isn't enabled.
     */
    public static function version (?string $extension = null):string|false {

        return phpversion($extension); // @phpstan-ignore-line

    }

    /**
     * ### Compares two "PHP-standardized" version number strings
     * @since 1.0.0
     *
     * @param string $first <p>
     * First version number.
     * </p>
     * @param string $second <p>
     * Second version number.
     * </p>
     *
     * @return int-mask<-1, 0, 1> Returns -1 if the first version is lower than the second, 0 if they're equal, and 1
     * if the second is lower.
     */
    public static function compareVersion (string $first, string $second):int {

        return version_compare($first, $second);

    }

    /**
     * ### Gets the version of the current Zend engine
     * @since 1.0.0
     *
     * @return string Zend Engine version number, as a string.
     */
    public static function zendVersion ():string {

        return zend_version();

    }

    /**
     * ### Gets a directory path used for temporary files
     * @since 1.0.0
     *
     * @return string Path of the temporary directory.
     */
    public static function tempFolder ():string {

        return sys_get_temp_dir();

    }

    /**
     * ### Gets the amount of memory allocated to PHP
     * @since 1.0.0
     *
     * @return non-negative-int The memory amount in bytes.
     */
    public static function getMemoryUsage ():int {

        return memory_get_usage();

    }

    /**
     * ### Gets the peak of memory allocated by PHP
     * @since 1.0.0
     *
     * @return non-negative-int The memory peak in bytes.
     */
    public static function getMemoryPeakUsage ():int {

        return memory_get_peak_usage();

    }

    /**
     * ### Reset the peak memory usage
     * @since 1.0.0
     *
     * @return void
     */
    public static function resetMemoryPeakUsage ():void {

        memory_reset_peak_usage();

    }

}