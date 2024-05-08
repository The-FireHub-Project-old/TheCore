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

use Stringable as InternalStringable;

/**
 * ### Stringable contract
 *
 * The Stringable interface denotes a class as having a __toString() method. Unlike most interfaces, Stringable is
 * implicitly present on any class that has the magic __toString() method defined, although it can and should be
 * declared explicitly. Its primary value is to allow functions to type check against the union type
 * string|Stringable to accept either a string primitive or an object that can be cast to a string.
 * @since 1.0.0
 */
interface Stringable extends InternalStringable {

    /**
     * ### Gets a string representation of the object
     * @since 1.0.0
     *
     * @return string The string representation of the object.
     */
    public function __toString ():string;

}