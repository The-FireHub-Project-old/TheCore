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

namespace FireHub\Core\Support\Contracts\Magic;

/**
 * ### Exportable contract
 * @since 1.0.0
 *
 * @note When exporting an object, var_export() does not check whether the object's implements __set_state(),
 * so re-importing objects will result in an Error exception, if __set_state() is not implemented.
 * Particularly, this affects some internal classes. It is the responsibility of the programmer to verify that only
 * objects will be re-imported, whose class implements __set_state().
 */
interface Exportable {

    /**
     * ### This method is called for classes exported by var_export()
     * @since 1.0.0
     *
     * @param array<string, mixed> $properties <p>
     * List containing exported properties.
     * </p>
     *
     * @return object Imported object.
     */
    public static function __set_state (array $properties):object;

}