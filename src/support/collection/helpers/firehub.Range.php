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
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Fix, Gen
};
use FireHub\Core\Support\LowLevel\ {
    Arr, Iterables
};
use SplFixedArray, Throwable;

/**
 * ### Creates the collection containing a range of items
 * @since 1.0.0
 */
final class Range implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Array containing a range of elements
     * @since 1.0.0
     *
     * @var array<int|float|string>
     */
    private array $range;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::range() To create an array containing a range of elements.
     *
     * @param int|float|string $start <p>
     * First value of the sequence.
     * </p>
     * @param int|float|string $end <p>
     * The sequence is ended upon reaching the end value.
     * </p>
     * @param positive-int|float $step [optional] <p>
     * If a step value is given, it will be used as the increment between elements in the sequence.
     * Step should be given as a positive number. If not specified, a step will default to 1.
     * </p>
     *
     * @error\exeption E_WARNING If &start or &end is a string implicitly cast to int because of the other boundary value
     * is a number, $start or $end is a non-numeric string with more than one byte or &start or &end is the empty
     * string.
     *
     * @return void
     */
    public function __construct (
        private readonly int|float|string $start,
        private readonly int|float|string $end,
        private readonly int|float $step = 1
    ) {

        try {

            $this->range = Arr::range($this->start, $this->end, $this->step);

        } catch (Throwable) {

            $this->range = [];

        }


    }

    /**
     * ### Indexed collection containing a range of items
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<string|int|float> Indexed collection type.
     */
    public function list ():Indexed {

        return new Indexed($this->range);

    }

    /**
     * ### Fixed collection containing a range of items
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix As return.
     * @uses \FireHub\Core\Support\LowLevel\Iterables::count() To count range items.
     *
     * @return \FireHub\Core\Support\Collection\Type\Fix<string|int|float> Fixed collection type.
     */
    public function fixed ():Fix {

        $storage = new SplFixedArray();

        $storage->setSize(Iterables::count($this->range));

        $counter = 0;
        foreach ($this->range as $value) $storage[$counter++] = $value;

        return new Fix($storage);

    }

    /**
     * ### Lazy collection containing a range of items
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<int, string|int|float> Indexed collection type.
     */
    public function lazy ():Gen {

        return new Gen(fn() => yield from $this->range);

    }

}