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
 * ### UnOverloadable contract
 *
 * @inheritDoc
 *
 * @since 1.0.0
 */
interface UnOverloadable extends Overloadable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function __get (string $name):never;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function __set (string $name, mixed $value):never;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function __isset (string $name):never;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return never
     */
    public function __unset (string $name):never;

}