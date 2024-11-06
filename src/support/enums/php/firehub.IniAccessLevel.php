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

namespace FireHub\Core\Support\Enums\PHP;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### INI configuration access level
 * @since 1.0.0
 */
enum IniAccessLevel:int implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini
     * @since 1.0.0
     */
    case USER = 1;

    /**
     * ### Entry can be set in php.ini, .htaccess, httpd.conf, or .user.ini
     * @since 1.0.0
     */
    case PER_DIR = 2;

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini, php.ini, .htaccess, or httpd.conf
     * @since 1.0.0
     */
    case USER_AND_PER_DIR = 3;

    /**
     * ### Entry can be set in php.ini or httpd.conf
     * @since 1.0.0
     */
    case SYSTEM = 4;

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini, php.ini, or httpd.conf
     * @since 1.0.0
     */
    case USER_AND_SYSTEM = 5;

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini, php.ini, .htaccess, or httpd.conf
     * @since 1.0.0
     */
    case PER_DIR_AND_SYSTEM = 6;

    /**
     * ### Entry can be set anywhere
     * @since 1.0.0
     */
    case ALL = 7;

}