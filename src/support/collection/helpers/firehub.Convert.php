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
use FireHub\Core\Support\Contracts\HighLevel\Collectable;
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Associative, Fix, Gen
};
use Generator;

/**
 * ### Convert a collection to a different one
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
final class Convert implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable As parameter.
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue> $collectable <p>
     * Collectable instance to convert.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Collectable $collectable
    ){}

    /**
     * ### Convert a collection to an indexed collection type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::list() To create an indexed collection type.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<mixed> Collection as an indexed collection type.
     */
    public function toList ():Indexed {

        return Collection::list($this->collectable->all());

    }

    /**
     * ### Convert a collection to an associative collection type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::associative() To create a new associative collection type.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, mixed> Collection as an associative
     * collection type.
     */
    public function toAssociative ():Associative {

        return Collection::associative($this->collectable->all());

    }

    /**
     * ### Convert a collection to a fixed collection type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::fixed() To create a new fixed collection type.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::count() To count elements in the iterator.
     * @uses \FireHub\Core\Support\Collection\Type\Fix As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Fix<mixed> Collection as a fixed collection type.
     */
    public function toFixed ():Fix {
        return Collection::fixed(function ($storage):void {

            $counter = 0;

            foreach ($this->collectable->all() as $value) $storage[$counter++] = $value;

        }, $this->collectable->count());

    }

    /**
     * ### Convert a collection to a lazy collection type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::lazy() To create a new lazy collection type.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable::all() To get a collection as an array.
     * @uses \FireHub\Core\Support\Collection\Type\Gen As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<array-key, mixed> Collection as a lazy collection type.
     */
    public function toLazy ():Gen {

        return Collection::lazy(
            fn ():Generator => yield from $this->collectable->all()
        );

    }

}