<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core;

use FireHub\Core\Initializers\Kernel as BaseKernel;
use FireHub\Core\Initializers\Enums\Kernel;

/**
 * ### Main FireHub class for bootstrapping
 *
 * This class contains all system definitions, constants and dependant components for FireHub bootstrapping.
 * @since 1.0.0
 */
final class FireHub {

    /**
     * ### Constructor
     *
     * Prevents instantiation of the main class.
     * @since 1.0.0
     *
     * @return void
     */
    private function __construct() {}

    /**
     * ### Light the torch
     *
     * This methode serves for instantiating the FireHub framework.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Enums\Kernel As parameter.
     * @uses \FireHub\Core\Initializers\Enums\Kernel::run() To run selected Kernel.
     * @uses \FireHub\Core\Firehub::kernel() To process Kernel.
     *
     * @param \FireHub\Core\Initializers\Enums\Kernel $kernel <p>
     * Pick Kernel from Kernel enum, process your request and return the appropriate response.
     * </p>
     *
     * @return string Response from Kernel.
     */
    public static function boot (Kernel $kernel):string {

        return (new self)
            ->kernel($kernel->run());

    }

    /**
     * ### Process Kernel
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Kernel As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Kernel::runtime() To handle client runtime.
     *
     * @param \FireHub\Core\Initializers\Kernel $kernel <p>
     * Picked Kernel from Kernel enum, process your request and return the appropriate response.
     * </p>
     *
     * @return string Response from Kernel.
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod) PHPMD has a bug where it reports unused method unless directory
     * called.
     */
    private function kernel (BaseKernel $kernel):string {

        return $kernel->runtime();

    }

}