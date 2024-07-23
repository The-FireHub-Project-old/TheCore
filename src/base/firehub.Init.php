<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Base
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Base;

use FireHub\Core\Support\Contracts\ {
    JsonSerializable, Magic\Serializable
};

/**
 * ### FireHub initial class interface
 * @since 1.0.0
 */
interface Init extends Base, JsonSerializable, Serializable {

    /**
     * ### Specify data which should be serialized to JSON
     *
     * Serializes the object to a value that can be serialized natively by json_encode().
     * By default, all initialized public, non-static properties will be returned.
     *
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function jsonSerialize ():array;

}