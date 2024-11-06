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
 * ### Adds functionality that needs to be run as the service provider is added to the container
 * @since 1.0.0
 */
interface BootableServiceProvider {

    /**
     * ### Method is invoked as soon as you register the service provider with the container
     * @since 1.0.0
     *
     * @return void
     */
    public function boot ():void;

}