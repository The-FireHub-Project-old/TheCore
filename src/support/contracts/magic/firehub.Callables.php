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
 * ### Callable contract
 * @since 1.0.0
 */
interface Callables {

    /**
     * ### Invoking inaccessible (protected or private) or non-existing methods in an object context
     * @since 1.0.0
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     * @param array<array-key, mixed> $arguments <p>
     * List of arguments.
     * </p>
     *
     * @return mixed Method return.
     */
    public function __call (string $method, array $arguments):mixed;

}