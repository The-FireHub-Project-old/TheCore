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

/**
 * ### Invokable contract
 *
 * Call an object as a function.
 * @since 1.0.0
 */
interface Invokable {

    /**
     * ### Call an object as a function
     * @since 1.0.0
     *
     * @param mixed ...$values <p>
     * Invoke arguments.
     * </p>
     *
     * @return mixed Invoke result.
     */
    public function __invoke (mixed ...$values):mixed;

}