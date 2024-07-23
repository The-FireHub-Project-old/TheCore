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
 * ### Debuggable contract
 * @since 1.0.0
 */
interface Debuggable {

    /**
     * ### This method is called by var_dump() and print_r() when dumping an object
     *
     * If the method isn't defined on an object, then all public, protected, and private properties will be shown.
     * @since 1.0.0
     *
     * @return array<string, mixed> Get the properties that should be shown.
     */
    public function __debugInfo ():array;

}