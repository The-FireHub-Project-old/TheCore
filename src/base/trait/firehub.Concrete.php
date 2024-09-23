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

namespace FireHub\Core\Base\Trait;

use FireHub\Core\Support\LowLevel\Obj;
use Error;

/**
 * ### FireHub initial concrete trait
 * @since 1.0.0
 */
trait Concrete {

    /**
     * ### FireHub base concrete trait
     * @since 1.0.0
     */
    use Base;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Obj::properties() To get all public class properties.
     */
    public function jsonSerialize ():array {

        return Obj::properties($this);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @throws Error If you try to serialize an object.
     *
     * @return never
     */
    public function __serialize ():never {

        throw new Error('You are not allowed to serialize '.static::class);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @throws Error If you try to unserialize an object.
     *
     * @return never
     */
    public function __unserialize (array $data):never {

        throw new Error('You are not allowed to unserialize '.static::class);

    }

}