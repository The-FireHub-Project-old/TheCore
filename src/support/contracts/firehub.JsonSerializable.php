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

namespace FireHub\Core\Support\Contracts;

use JsonSerializable as InternalJsonSerializable;

/**
 * ### JsonSerializable contract
 *
 * Objects implementing JsonSerializable can customize their JSON representation when encoded with json_encode().
 * @since 1.0.0
 */
interface JsonSerializable extends InternalJsonSerializable {

    /**
     * ### Specify data which should be serialized to JSON
     *
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @since 1.0.0
     *
     * @return array<array-key, mixed> data which can be serialized by json_encode(), which is a value of any type other than a resource.
     */
    public function jsonSerialize ():array;

}