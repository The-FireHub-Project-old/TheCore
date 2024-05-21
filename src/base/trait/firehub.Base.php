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

use FireHub\Core\Support\LowLevel\ {
    Cls, Constant
};
use Error;

/**
 * ### FireHub base concrete trait
 * @since 1.0.0
 */
trait Base {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Constant::value() To return the value of a constant.
     *
     * @throws Error If constant name is empty or doesn't exist.
     */
    public static function getConstantValue (string $name):mixed {

        !empty($name) ?: throw new Error("Constant cannot be empty.");

        try {

            $class = static::class;

            return Constant::value("$class::$name");

        } catch (Error) {

            throw new Error("Cannot get name from constant: $name, constant doesn't exist.");

        }

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Cls::properties() To get class public properties and their default values.
     *
     * @throws Error If JSON serialization failed.
     *
     * @todo Replace json_encode with JSON class.
     */
    public static function asJSON ():string {

        return json_encode(Cls::properties(static::class))
            ?: throw new Error('Cannot serialize '.static::class.' as JSON.');

    }

}