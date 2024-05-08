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
 * ### Creational contract
 * @since 1.0.0
 */
interface Creational {

    /**
     * ### Method called on each newly created object
     *
     * Constructors are ordinary methods that are called during the instantiation of their corresponding object.
     * As such, they may define an arbitrary number of arguments, which may be required, may have a type, and may have a default value.
     * Constructor arguments are called by placing the arguments in parentheses after the class name.
     * @since 1.0.0
     *
     * @return void
     */
    public function __construct ();

}