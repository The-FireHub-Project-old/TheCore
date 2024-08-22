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

namespace FireHub\Core\Support\Collection\Traits;

use FireHub\Core\Support\Enums\Data\ {
    Category, Type
};
use FireHub\Core\Support\LowLevel\ {
    DataIs, Obj
};

use function FireHub\Core\Support\Helpers\Data\isType;

/**
 * ### This trait provides item checking
 * @since 1.0.0
 */
trait Ensure {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
     * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
     * @uses \FireHub\Core\Support\Collection\Traits\Ensure::every() To verify that all items of a collection pass a
     * given truth test.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if the $type argument is string.
     * @uses \FireHub\Core\Support\LowLevel\Obj::ofClass() To check if the current value is of a checked class.
     * @uses \FireHub\Core\Support\Helpers\Data\isType() To check if the current value is of a checked type.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Data\Type;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->ensure(Type::T_STRING);
     *
     * // true
     * ```
     */
    public function ensure (string|Type|Category $type):bool {

        return $this->every(function ($value) use ($type) { // @phpstan-ignore-line

            return DataIs::string($type)
                ? Obj::ofClass($value, $type) // @phpstan-ignore-line
                : isType($value, $type);
        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Data\Type As parameter.
     * @uses \FireHub\Core\Support\Enums\Data\Category As parameter.
     * @uses \FireHub\Core\Support\Collection\Traits\Ensure::every() To verify that all items of a collection pass a
     * given truth test.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if the $type argument is string.
     * @uses \FireHub\Core\Support\LowLevel\Obj::ofClass() To check if the current value is of a checked class.
     * @uses \FireHub\Core\Support\Helpers\Data\isType() To check if the current value is of a checked type.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     * use FireHub\Core\Support\Enums\Data\Type;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->ensureNone(Type::T_INT);
     *
     * // true
     * ```
     */
    public function ensureNone (string|Type|Category $type):bool {

        return $this->every(function ($value) use ($type) { // @phpstan-ignore-line

            return DataIs::string($type)
                ? !Obj::ofClass($value, $type) // @phpstan-ignore-line
                : !isType($value, $type);
        });

    }

}