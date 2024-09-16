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

namespace FireHub\Core\Support\Collection\Type\Contracts;

use SplObjectStorage;

/**
 * ### Object collection type interface
 * @since 1.0.0
 */
interface Obj {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param SplObjectStorage<object, mixed> $storage <p>
     * Storage underlying data.
     * </p>
     *
     * @return void
     */
    public function __construct (SplObjectStorage $storage);

}