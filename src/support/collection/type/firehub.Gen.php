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
use FireHub\Core\Support\LowLevel\Iterator;
use Closure, Generator, Traversable;

/**
 * ### Lazy collection type
 *
 * Lazy collection allows you to work with huge datasets while keeping memory usage low.
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @implements \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue>
 */
final class Gen implements Init, Collectable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param Closure():Generator<TKey, TValue> $callable <p>
     * Data from a callable source.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private Closure $callable
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Iterator::count() To count storage items.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->count();
     *
     * // 5
     * ```
     */
    public function count ():int {

        return Iterator::count($this);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen::invoke() To invoke storage.
     *
     * @return Traversable<TKey, TValue> Collection items as an array.
     */
    public function getIterator ():Traversable {

        return $this->invoke();

    }

    /**
     * ### Invoke storage
     * @since 1.0.0
     *
     * @return Generator<TKey, TValue> Storage data.
     */
    private function invoke ():Generator {

        yield from ($this->callable)();

    }

}