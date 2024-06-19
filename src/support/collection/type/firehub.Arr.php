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

namespace FireHub\Core\Support\Collection\Type;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Contracts\HighLevel\Collectable;
use FireHub\Core\Support\LowLevel\Iterables;
use Traversable;

/**
 * ### Array collection type
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @implements \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue>
 */
abstract class Arr implements Init, Collectable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Array underlying data
     * @since 1.0.0
     *
     * @var array<TKey, TValue>
     */
    protected array $storage = [];

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Iterables::count() To count storage items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->count();
     *
     * // 6
     * ```
     */
    public function count ():int {

        return Iterables::count($this->storage);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @return Traversable<TKey, TValue> Collection items as an array.
     */
    public function getIterator ():Traversable {

        yield from $this->storage;

    }

}