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

use Error;

/**
 * ### FireHub initial concrete enum trait
 * @since 1.0.0
 */
trait ConcreteEnum {

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
     * @throws Error If JSON serialization failed.
     *
     * @todo Replace json_encode with JSON class.
     */
    public static function asJSON ():string {

        $cases = [];
        foreach (self::cases() as $case) $cases[] = $case->name;

        return json_encode($cases)
            ?: throw new Error('Cannot serialize '.static::class.' as JSON.');

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function casesIf (callable $callback):array {

        $cases = [];
        foreach (self::cases() as $case) {
            if ($callback($case)) $cases[] = $case;
        }

        return $cases;

    }

}