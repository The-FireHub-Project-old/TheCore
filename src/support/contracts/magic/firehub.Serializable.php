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

namespace FireHub\Core\Support\Contracts\Magic;

/**
 * ### Serializable contract
 *
 * Contract allows serialization for objects.
 * @since 1.0.0
 */
interface Serializable {

    /**
     * ### Construct and return an associative array of key/value pairs that represent the serialized form of the object
     * @since 1.0.0
     *
     * @return array<array-key, mixed> An associative array of key/value pairs that represent the serialized form of the object.
     */
    public function __serialize ():array;

    /**
     * ### Converts from serialized data back to the object
     * @since 1.0.0
     *
     * @param array<array-key, mixed> $data <p>
     * Serialized data.
     * </p>
     *
     * @return void
     */
    public function __unserialize (array $data):void;

}