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

use FireHub\Core\Support\Collection\Type\ {
    Associative, Indexed, Gen
};
use FireHub\Core\Support\LowLevel\NumInt;

/**
 * ### This trait allows usage of slicing methods
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
trait Sliceable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function count ():int;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function nth (int $step, int $offset = 0):self;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::nth() To get even elements.
     *
     * @return self<TKey, TValue> New filtered collection.
     */
    public function even ():self {

        return $this->nth(2, 1);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::nth() To get odd elements.
     *
     * @return self<TKey, TValue> New filtered collection.
     */
    public function odd ():self {

        return $this->nth(2);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function slice (int $offset, ?int $length = null):self;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::slice() To get a slice from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $merged = $collection->take(2);
     *
     * // ['John', 'Jane']
     * ```
     *
     * @return self<TKey, TValue> New sliced collection.
     */
    public function take (int $count):self {

        return $this->slice(0, $count);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::slice() To get a slice from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $merged = $collection->skip(2);
     *
     * // ['Jane', 'Jane', 'Richard', 'Richard']
     * ```
     *
     * @return self<TKey, TValue> New sliced collection.
     */
    public function skip (int $count):self {

        return $this->slice($count);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::count() To count elements of an object.
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::slice() To get a slice from a collection.
     * @uses \FireHub\Core\Support\LowLevel\NumInt::floor() To round fractions down.
     * @uses \FireHub\Core\Support\LowLevel\NumInt::divide() To divide integers.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->split(3);
     *
     * // [Indexed['John', 'Jane'], Indexed['Jane', 'Jane'], Indexed['Richard', 'Richard']]
     * ```
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<self<TKey, TValue>> Grouped collection.
     *
     * @phpstan-ignore-next-line
     */
    public function split (int $number_of_groups):Indexed {

        $storage = [];

        $number_of_groups = max($number_of_groups, 1);

        $group_size = NumInt::floor(
            NumInt::divide($this->count(), $number_of_groups)
        );

        $remain = $this->count() % $number_of_groups;

        $start = 0;
        for ($position = 0; $position < $number_of_groups; $position++) {

            $size = $group_size;

            if ($position < $remain) $size++;

            if ($size) $storage[] = $this->slice($start, $size);

            $start += $size;

        }

        return new Indexed($storage); // @phpstan-ignore-line

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::chunkUntil() To split a collection into chunks by callable.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->chunk(4);
     *
     * // [Associative['John', 'Jane', 'Jane', 'Jane'], Associative['Richard', 'Richard']]
     * ```
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<int, \FireHub\Core\Support\Collection\Type\Associative<TKey, TValue>> Grouped collection.
     *
     * @phpstan-ignore-next-line
     */
    public function chunk (int $size_of_group):Gen {

        $size_of_group = max($size_of_group, 1);

        $counter = 0;
        return $this->chunkUntil(function() use (&$counter, $size_of_group) {

            $counter++;
            if ($counter === $size_of_group) {

                $counter = 0;

                return true;

            }

            return false;

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As chunk.
     * @uses \FireHub\Core\Support\Collection\Type\Gen As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->chunkUntil(fn($value, $key) => 'Richard');
     *
     * // [Associative['John', 'Jane', 'Jane', 'Jane', 'Richard'], Associative['Richard']]
     * ```
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<int, \FireHub\Core\Support\Collection\Type\Associative<TKey, TValue>> Grouped collection.
     *
     * @phpstan-ignore-next-line
     */
    public function chunkUntil (callable $callback):Gen {

        return new Gen(function () use ($callback) {

            $chunks = [];
            foreach ($this as $key => $value) {

                $chunks[$key] = $value;

                if ($callback($value, $key)) { // @phpstan-ignore-line

                    yield new Associative($chunks);

                    $chunks = [];

                }

            }

            if ($chunks) yield new Associative($chunks);

        });

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::count() To count elements of an object.
     * @uses \FireHub\Core\Support\Collection\Traits\Sliceable::chunk() To split a collection into chunks.
     * @uses \FireHub\Core\Support\LowLevel\NumInt::ceil() To round fractions up.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
     *
     * $collection->group(4);
     *
     * // [Associative[1, 2, 3, 4], Associative[5, 6, 7, 8], Associative[9, 10]]
     * ```
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<int, \FireHub\Core\Support\Collection\Type\Associative<TKey, TValue>> Grouped collection.
     *
     * @phpstan-ignore-next-line
     */
    public function group (int $number_of_groups):Gen {

        return $this->chunk(
            ($size = NumInt::ceil($this->count() / $number_of_groups)) >= 1 ? $size : 1
        );

    }

}