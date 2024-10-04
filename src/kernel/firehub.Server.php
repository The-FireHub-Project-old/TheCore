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

namespace FireHub\Core\Kernel;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Bags\Server as ServerBag;

/**
 * ### Server and execution environment information
 * @since 1.0.0
 */
final class Server implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server As parameter.
     *
     * @param \FireHub\Core\Support\Bags\Server $server <p>
     * Server and execution environment information bag.
     * </p>
     *
     * @return void
     */
    final public function __construct (
        private readonly ServerBag $server
    ) {}

}