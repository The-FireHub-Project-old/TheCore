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
 * ### UnCallable contract
 *
 * @inheritDoc
 *
 * @since 1.0.0
 */
interface UnCallables extends Callables {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function __call (string $method, array $arguments):never;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public static function __callStatic (string $method, array $arguments):never;

}