<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Initializers\Enums;

use FireHub\Core\Initializers\Kernel as BaseKernel;
use FireHub\Core\Kernel\ {
    HTTP\Kernel as HTTP_Kernel,
    HTTP\Micro\Kernel as HTTP_Micro_Kernel,
    Console\Kernel as Console_Kernel
};

/**
 * ### Enum for available Kernel types
 * @since 1.0.0
 */
enum Kernel {

    /**
     * ### Fully functional HTTP Kernel
     * @since 1.0.0
     *
     * @see \FireHub\Core\Kernel\HTTP\Kernel To find more details on how to use this kernel.
     */
    case HTTP;

    /**
     * ### Simplified Micro HTTP Kernel
     * @since 1.0.0
     *
     * @see \FireHub\Core\Kernel\HTTP\Micro\Kernel To find more details on how to use this kernel.
     */
    case MICRO_HTTP;

    /**
     * ### Console Kernel
     * @since 1.0.0
     *
     * @see \FireHub\Core\Kernel\Console\Kernel To find more details on how to use this kernel.
     */
    case CONSOLE;

    /**
     * ### Run selected Kernel
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Kernel To create HTTP Kernel.
     * @uses \FireHub\Core\Kernel\HTTP\Micro\Kernel To create Micro HTTP Kernel.
     * @uses \FireHub\Core\Kernel\Console\Kernel To create Console Kernel.
     *
     * @return \FireHub\Core\Initializers\Kernel Selected Kernel.
     */
    public function run ():BaseKernel {

        return match ($this) {
            self::HTTP => new HTTP_Kernel(),
            self::MICRO_HTTP => new HTTP_Micro_Kernel(),
            self::CONSOLE => new Console_Kernel()
        };

    }

}