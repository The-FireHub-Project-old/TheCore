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

namespace FireHub\Core\Support\Contracts;

use Countable as InternalCountable;

/**
 * ### Countable contract
 *
 * Classes implementing Countable can be used with the count() function.
 * @since 1.0.0
 */
interface Countable extends InternalCountable {

    /**
     * ### Count elements of an object
     * @since 1.0.0
     *
     * @return non-negative-int Number of elements of an object.
     */
    public function count ():int;

}