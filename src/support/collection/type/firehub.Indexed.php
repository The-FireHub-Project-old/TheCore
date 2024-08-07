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

use FireHub\Core\Support\Contracts\HighLevel\Collectable;
use FireHub\Core\Support\LowLevel\Arr as ArrLL;
use ValueError;

/**
 * ### Indexed array collection type
 *
 * Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1).
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Collection\Type\Arr<array-key, TValue>
 */
class Indexed extends Arr {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param array<TValue> $storage <p>
     * Array underlying data.
     * </p>
     */
    public function __construct (
        protected array $storage
    ) {}

    /**
     * ### Combines the values of the collection, as keys, with the values of another collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable As parameter.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\LowLevel\Arr::combine() To create an array by using one array for keys and another
     * for its values.
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @template TNewValue
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $keys = Collection::list(fn():array => ['firstname', 'lastname', 'age']);
     * $values = Collection::list(fn():array => ['John', 'Doe', 25]));
     *
     * $keys->combine($values);
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25]
     * ```
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Collectable<mixed, TNewValue> $collection <p>
     * Collection to be used as values.
     * </p>
     *
     * @throws ValueError If arguments $keys and $values don't have the same number of elements.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, TNewValue> The combined collection.
     */
    public function combine (Collectable $collection):Associative {

        /** @phpstan-ignore-next-line */
        return new Associative(ArrLL::combine($this->storage, $collection->all()));

    }

}