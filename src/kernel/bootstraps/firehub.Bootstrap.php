<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Kernel
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Kernel\Bootstraps;

/**
 * ### Bootstrap
 * @since 1.0.0
 */
interface Bootstrap {

    /**
     * ### Boot bootstrap
     * @since 1.0.0
     *
     * @return void
     */
    public function boot ():void;

}