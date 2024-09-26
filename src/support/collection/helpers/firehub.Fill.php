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
    Indexed, Fix, Gen, ReadOnlyIndexed
};
use FireHub\Core\Support\LowLevel\Arr;

/**
 * ### Fill the collection with values
 * @since 1.0.0
 *
 * @template TValue
 */
final class Fill implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Number of elements to insert.
     * @var positive-int $length
     */
    private readonly int $length;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * Value to use for filling.
     * </p>
     * @param positive-int $length <p>
     * Number of elements to insert.
     * Must be greater than or equal to one.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly mixed $value,
        int $length
    ) {

        $this->length = max($length, 1);

    }

    /**
     * ### Fill as an indexed collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::list() To create an indexed collection.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     * @uses \FireHub\Core\Support\LowLevel\Arr::fill() To fill an array with values.
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<TValue> Indexed collection type.
     */
    public function list ():Indexed {

        return Collection::list(Arr::fill($this->value, 0, $this->length));

    }

    /**
     * ### Fill as a read-only indexed collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::list() To create an indexed collection.
     * @uses \FireHub\Core\Support\Collection\Type\ReadOnlyIndexed As return.
     * @uses \FireHub\Core\Support\LowLevel\Arr::fill() To fill an array with values.
     *
     * @return \FireHub\Core\Support\Collection\Type\ReadOnlyIndexed<TValue> Indexed read-only collection type.
     */
    public function readOnlyList ():ReadOnlyIndexed {

        return Collection::readOnlyList(Arr::fill($this->value, 0, $this->length));

    }

    /**
     * ### Fill as a fixed collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::fixed() To create a fixed collection.
     * @uses \FireHub\Core\Support\Collection\Type\Fix As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Fix<TValue> Indexed collection type.
     */
    public function fixed ():Fix {

        return Collection::fixed(function ($storage) {

            for ($counter = 0; $counter < $this->length; $counter++)
                $storage[$counter] = $this->value;

        }, $this->length);

    }

    /**
     * ### Fill as a lazy collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::lazy() To create a lazy collection.
     * @uses \FireHub\Core\Support\Collection\Type\Gen As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<int, TValue> Indexed collection type.
     */
    public function lazy ():Gen {

        return Collection::lazy(function () {

            for ($counter = 0; $counter < $this->length; $counter++)
                yield $this->value;

        });

    }

}