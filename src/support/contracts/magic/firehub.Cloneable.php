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
 * ### Cloneable contract
 *
 * Creating a copy of an object with fully replicated properties is not always the wanted behavior.
 * An object copy is created by using the clone keyword (which calls the object's __clone() method if possible).
 * When an object is cloned, PHP will perform a shallow copy of all the object's properties. Any properties that
 * are references to other variables will remain references.
 * @since 1.0.0
 */
interface Cloneable {

    /**
     * ### Object's __clone() method properties
     *
     * When object's __clone() method will be called, this method allows any necessary properties that need to be changed.
     * @since 1.0.0
     *
     * @return void
     */
    public function __clone ():void;

}