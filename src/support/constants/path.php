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

namespace FireHub\Core\Support\Constants\Path;

use const DEFAULT_INCLUDE_PATH;
use const DIRECTORY_SEPARATOR;
use const PATH_SEPARATOR;
use const PEAR_INSTALL_DIR as PHP_PEAR_INSTALL_DIR;
use const PEAR_EXTENSION_DIR as PHP_PEAR_EXTENSION_DIR;
use const PHP_BINARY;
use const PHP_BINDIR;
use const PHP_CONFIG_FILE_SCAN_DIR;
use const PHP_CONFIG_FILE_PATH;
use const PHP_EXTENSION_DIR;
use const PHP_LIBDIR;
use const PHP_LOCALSTATEDIR;
use const PHP_DATADIR;
use const PHP_MAXPATHLEN;
use const PHP_PREFIX;
use const PHP_SYSCONFDIR;

/**
 * ### System definition for separating folders, platform-specific
 *
 * Convert '\\' and '/' for different operating systems.
 * This is a shorter version of PHP internal
 * DIRECTORY_SEPARATOR constant.
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\DS
 *
 * @link https://www.php.net/manual/en/dir.constants.php To find more info for DIRECTORY_SEPARATOR constant.
 *
 * @api
 */
const DS = DIRECTORY_SEPARATOR;

/**
 * ### Semicolon on Windows, colon otherwise
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\SEPARATOR
 *
 * @link https://www.php.net/manual/en/dir.constants.php To find more info for PATH_SEPARATOR constant.
 *
 * @api
 */
const SEPARATOR = PATH_SEPARATOR;

/**
 * ### The maximum length of filenames (including a path) supported by this build of PHP
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Path\MAX_LENGTH
 *
 * @api
 */
const MAX_LENGTH = PHP_MAXPATHLEN;

/**
 * ### Default PHP include path
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Path\DEFAULT_INCLUDE
 *
 * @api
 */
const DEFAULT_INCLUDE = DEFAULT_INCLUDE_PATH;

/**
 * ### PEAR installation directory
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Path\PEAR_INSTALL_DIR
 *
 * @api
 */
const PEAR_INSTALL_DIR = PHP_PEAR_INSTALL_DIR;

/**
 * ### PEAR extension directory
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Path\PEAR_EXTENSION_DIR
 *
 * @api
 */
const PEAR_EXTENSION_DIR = PHP_PEAR_EXTENSION_DIR;

/**
 * ### The default directory where to look for dynamically loadable extensions (unless overridden by extension_dir)
 *
 * Defaults to PHP_PREFIX (or PHP_PREFIX . "\\ext" on Windows).
 * @since 1.0.0
 *
 * @var int \FireHub\Core\Support\Constants\Path\EXTENSION_DIR
 *
 * @api
 */
const EXTENSION_DIR = PHP_EXTENSION_DIR;

/**
 * ### The value --prefix was set to at configuring
 *
 * On Windows, it is the value --with-prefix was set to at configure-
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\PREFIX
 *
 * @api
 */
const PREFIX = PHP_PREFIX;

/**
 * ### The value --bindir was set to at configuring
 *
 * On Windows, it is the value --with-prefix was set to at configuring.
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\BINDIR
 *
 * @api
 */
const BINDIR = PHP_BINDIR;

/**
 * ### Specifies the PHP binary path during script execution
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\BINARY
 *
 * @api
 */
const BINARY = PHP_BINARY;

/**
 * ### Specifies libdir directory
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\LIBDIR
 *
 * @api
 */
const LIBDIR = PHP_LIBDIR;

/**
 * ### Specifies datadir directory
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\DATADIR
 *
 * @api
 */
const DATADIR = PHP_DATADIR;

/**
 * ### Specifies sysconfig directory
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\SYSCONFDIR
 *
 * @api
 */
const SYSCONFDIR = PHP_SYSCONFDIR;

/**
 * ### Specifies localstatedir directory
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\LOCALSTATEDIR
 *
 * @api
 */
const LOCALSTATEDIR = PHP_LOCALSTATEDIR;

/**
 * ### Specifies a config file path
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\CONFIG_FILE
 *
 * @api
 */
const CONFIG_FILE = PHP_CONFIG_FILE_PATH;

/**
 * ### Specifies file scan directory
 * @since 1.0.0
 *
 * @var string \FireHub\Core\Support\Constants\Path\FILE_SCAN
 *
 * @api
 */
const FILE_SCAN = PHP_CONFIG_FILE_SCAN_DIR;