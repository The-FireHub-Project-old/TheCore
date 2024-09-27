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

namespace FireHub\Core\Support\Collection\Helpers;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\ {
    Associative, Gen, ReadonlyAssociative
};
use FireHub\Core\Support\LowLevel\Arr;

/**
 * ### Fill the collection with a list of keys and value
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 */
final class FillKeys implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param list<TKey> $keys <p>
     * Keys to use for filling.
     * </p>
     * @param TValue $value <p>
     * Value to use for filling.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly array $keys,
        private readonly mixed $value
    ) {}

    /**
     * ### Fill as an associative collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::associative() To create an associative collection.
     * @uses \FireHub\Core\Support\LowLevel\Arr::fillKeys() To fill an array with values, specifying keys.
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<TKey, TValue> Associative collection type.
     */
    public function associative ():Associative {

        return Collection::associative(Arr::fillKeys($this->keys, $this->value));

    }

    /**
     * ### Fill as a read-only associative collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::readonlyAssociative() To create a read-only associative collection.
     * @uses \FireHub\Core\Support\LowLevel\Arr::fillKeys() To fill an array with values, specifying keys.
     * @uses \FireHub\Core\Support\Collection\Type\ReadonlyAssociative As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\ReadonlyAssociative<TKey, TValue> Associative read-only
     * collection type.
     */
    public function readonlyAssociative ():ReadonlyAssociative {

        return Collection::readonlyAssociative(Arr::fillKeys($this->keys, $this->value));

    }

    /**
     * ### Fill as a lazy collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::lazy() To create a lazy collection type.
     * @uses \FireHub\Core\Support\Collection\Type\Gen As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<TKey, TValue> The lazy collection type.
     */
    public function lazy ():Gen {

        return Collection::lazy(function () {
            foreach ($this->keys as $key) yield $key => $this->value;
        });

    }

}