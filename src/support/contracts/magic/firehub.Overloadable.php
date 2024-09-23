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
 * ### Overloadable contract
 *
 * Overloading provides the means to dynamically create properties and methods. These dynamic entities are processed via
 * magic methods one can establish in a class for various action types.
 * The overloading methods are invoked when interacting with properties or methods that haven't been declared
 * or are *n't visible in the current scope.
 * @since 1.0.0
 */
interface Overloadable {

    /**
     * ### Reading data from inaccessible (protected or private) or non-existing properties
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Property name.
     * </p>
     *
     * @return mixed Property value.
     */
    public function __get (string $name):mixed;

    /**
     * ### Writing data from inaccessible (protected or private) or non-existing properties
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Property name.
     * </p>
     * @param mixed $value <p>
     * Property value.
     * </p>
     *
     * @return void
     */
    public function __set (string $name, mixed $value):void;

    /**
     * ### Triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Property name.
     * </p>
     *
     * @return bool True if property exists, false otherwise.
     */
    public function __isset (string $name):bool;

    /**
     * ### Triggered by calling unset() on inaccessible (protected or private) or non-existing properties
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Property name.
     * </p>
     *
     * @return void
     */
    public function __unset (string $name):void;

}