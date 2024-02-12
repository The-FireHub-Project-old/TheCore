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

namespace FireHub\Core\Initializers;

/**
 * ### Abstract Base Kernel
 *
 * Process requests that come in through various sources and give a client appropriate response.
 * @since 1.0.0
 */
abstract class Kernel {

    /**
     * ### Handle client runtime
     * @since 1.0.0
     *
     * @return string Response from Kernel.
     */
    abstract public function runtime ():string;

}