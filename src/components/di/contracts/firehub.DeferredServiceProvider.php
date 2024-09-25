<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Components
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Components\DI\Contracts;

/**
 * ### Service providers will register bindings only is actually necessary
 * @since 1.0.0
 */
interface DeferredServiceProvider {

    /**
     * ### The provides method is a way to let the container know that a service is provided by this service provider
     * @since 1.0.0
     *
     * @return non-empty-lowercase-string[]
     */
    public function provides ():array;

}