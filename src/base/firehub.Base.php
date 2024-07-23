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

/**
 * ### FireHub base interface
 * @since 1.0.0
 */
interface Base {

    /**
     * ### Get value from constant name
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Constant name.
     * </p>
     *
     * @return mixed Value from constant.
     */
    public static function getConstantValue (string $name):mixed;

    /**
     * ### Data serialized as JSON
     *
     * By default, all public (static and non-static, initialized and non-initialized) properties will be returned.
     * @since 1.0.0
     *
     * @return string Data which is serialized as JSON.
     */
    public static function asJSON ():string;

}