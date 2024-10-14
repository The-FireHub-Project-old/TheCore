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

namespace FireHub\Core\Support\LowLevel;

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};

use function gethostname;

/**
 * ### Network low-level proxy class
 *
 * Class provides various networking methods.
 * @since 1.0.0
 *
 * @todo There will be more methods.
 */
final class Network implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Gets the host name
     *
     * Gets the standard host name for the local machine.
     * @since 1.0.0
     *
     * @return string|false String with the hostname on success, otherwise false is returned.
     */
    final public static function hostname ():string|false {

        return gethostname();

    }

}