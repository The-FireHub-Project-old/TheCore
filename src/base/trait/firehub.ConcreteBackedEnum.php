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

use FireHub\Core\Support\LowLevel\Constant;
use Error;

/**
 * ### FireHub initial concrete backed enum trait
 * @since 1.0.0
 */
trait ConcreteBackedEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Constant::value() To return the value of a constant.
     */
    public static function fromName (string $name):?static {

        try {

            $class = static::class;

            $value = Constant::value("$class::$name");

            return $value instanceof static ? $value : null;


        } catch (Error) {

            return null;

        }

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @throws Error If JSON serialization failed.
     *
     * @todo Replace json_encode with JSON class.
     */
    public static function asJSON ():string {

        $cases = [];
        foreach (self::cases() as $case) $cases[$case->name] = $case->value;

        return json_encode($cases)
            ?: throw new Error('Cannot serialize '.static::class.' as JSON.');

    }

}