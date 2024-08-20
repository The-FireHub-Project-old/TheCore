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

namespace FireHub\Core\Support;

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Associative, Fix, Gen, Obj
};
use Closure, Generator, SplFixedArray, SplObjectStorage;

/**
 * ### Collection high-level class
 *
 * Class allows you to manipulate data maps in various ways.
 * @since 1.0.0
 *
 * @api
 */
class Collection implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Indexed array collection type
     *
     * Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1).
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     *
     * @template TValue
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn ():array => ['one', 'two', 'three']);
     * ```
     *
     * @param array<TValue>|Closure():array<TValue> $storage <p>
     * Array underlying data.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<TValue> Indexed collection.
     */
    public static function list (array|Closure $storage):Indexed {

        return new Indexed($storage instanceof Closure ? $storage(): $storage);

    }

    /**
     * ### Associative array collection type
     *
     * Collections that use named keys that you assign to them.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn ():array => [
     *  'firstname' => 'John',
     *  'lastname' => 'Doe',
     *  'age' => 25,
     *  'height' => '190cm',
     *  'gender' => 'male'
     * ]);
     * ```
     *
     * @param array<TKey, TValue>|Closure():array<TKey, TValue> $storage <p>
     * Array underlying data.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<TKey, TValue> Associative collection.
     */
    public static function associative (array|Closure $storage):Associative {

        return new Associative($storage instanceof Closure ? $storage(): $storage);

    }

    /**
     * ### Fixed collection type
     *
     * Fixed collection allows only integers as keys, but it is faster and uses less memory than an array collection.
     * This collection type must be resized manually and allows only integers within the range as indexes.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Fix As return.
     *
     * @example Create a new fixed collection.
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::fixed(function ($storage):void {
     *  $storage[0] = 'one';
     *  $storage[1] = 'two';
     *  $storage[2] = 'three';
     * }, 3);
     * ```
     *
     * @param Closure(SplFixedArray<mixed> $storage):void $storage <p>
     * Data from a callable source.
     * </p>
     * @param int $size [optional] <p>
     * Size of a collection.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Fix<mixed> Fixed collection.
     */
    public static function fixed (Closure $storage, int $size):Fix {

        $fixed = new SplFixedArray($size);

        $storage($fixed);

        return new Fix($fixed);

    }

    /**
     * ### Lazy collection type
     *
     * Lazy collection allows you to work with huge datasets while keeping memory usage low.
     * @since 1.0.0
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @uses \FireHub\Core\Support\Collection\Type\Gen As return.
     *
     * @example Create a new generator collection.
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::lazy(fn():Generator => yield from ['one', 'two', 'three']);
     * ```
     *
     * @param Closure():Generator<TKey, TValue> $callable <p>
     * Data from a callable source.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Gen<TKey, TValue> Lazy collection.
     */
    public static function lazy (Closure $callable):Gen {

        return new Gen($callable);

    }

    /**
     * ### Object collection type
     *
     * Object collection provides a map from objects to data or, by ignoring data, an object set.
     * This dual purpose can be useful in many cases involving the need to uniquely identify objects.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj As return.
     *
     * @example Create a new object collection.
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $cls1 = new stdClass();
     * $cls2 = new stdClass();
     *
     * $collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
     *  $storage[$cls1] = 'data for object 1';
     *  $storage[$cls2] = [1,2,3];
     * });
     * ```
     *
     * @param Closure(SplObjectStorage<object, mixed>):void $callable <p>
     * Data from a callable source.
     * </p>
     *
     * @return \FireHub\Core\Support\Collection\Type\Obj<object, mixed> Object collection.
     */
    public static function object (Closure $callable):Obj {

        $object = new SplObjectStorage();

        $callable($object);

        return new Obj($object);

    }

}