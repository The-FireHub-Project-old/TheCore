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

use Error;

/**
 * ### This trait allows usage of property overloading for collections
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 */
trait Overloadable {

    /**
     * ### Gets item from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::exist() To check if an item exists in a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->get('firstname');
     *
     * // John
     * ```
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @throws Error If the key doesn't exist in a collection.
     *
     * @return TValue Item from a collection.
     */
    public function get (int|string $key):mixed {

        return $this->exist($key)
            ? $this->__get($key)
            : throw new Error("Key $key doesn't exist in collection.");

    }

    /**
     * ### Adds item to collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::exist() To check if an item exists in a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->add('middle-name', 'Marry');
     *
     * // ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2, 'middle-name' => 'Marry']
     * ```
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     * @param TValue $value <p>
     * Collection value.
     * </p>
     *
     * @throws Error If the key already exists in a collection.
     *
     * @return void
     */
    public function add (int|string $key, mixed $value):void {

        !$this->exist($key)
            ? $this->__set($key, $value)
            : throw new Error("Key $key already exists in collection.");

    }

    /**
     * ### Replaces item from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::exist() To check if an item exists in a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->replace('firstname', 'Marry');
     *
     * // ['firstname' => 'Marry', 'lastname' => 'Doe', 'age' => 25, 10 => 2]
     * ```
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     * @param TValue $value <p>
     * Collection value.
     * </p>
     *
     * @throws Error If the key doesn't exist in a collection.
     *
     * @return void
     */
    public function replace (int|string $key, mixed $value):void {

        $this->exist($key)
            ? $this->__set($key, $value)
            : throw new Error("Key $key doesn't exist in collection.");

    }

    /**
     * ### Adds or replaces item from collection
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collections\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->set('firstname', 'Jenna');
     * $collection->set('middle-name', 'Marry');
     *
     * // ['firstname' => 'Jenna', 'lastname' => 'Doe', 'age' => 25, 10 => 2, 'middle-name' => 'Marry']
     * ```
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     * @param TValue $value <p>
     * Collection value.
     * </p>
     *
     * @return void
     */
    public function set (int|string $key, mixed $value):void {

        $this->offsetSet($key, $value);

    }

    /**
     * ### Check if item exist in collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->exist('firstname');
     *
     * // true
     * ```
     *
     * @return bool True on success, false otherwise.
     */
    public function exist (int|string $key):bool {

        return $this->__isset($key);

    }

    /**
     * ### Removes item from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::exist() To check if an item exists in a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->remove('firstname');
     *
     * // ['lastname' => 'Doe', 'age' => 25, 10 => 2]
     * ```
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @throws Error If the key doesn't exist in a collection.
     *
     * @return void
     */
    public function remove (int|string $key):void {

        $this->exist($key)
            ? $this->__unset($key)
            : throw new Error("Key $key doesn't exist in collection.");

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param TKey $name <p>
     * Property name.
     * </p>
     */
    public function __get (int|string $name):mixed {

        return $this->offsetGet($name);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param TKey $name <p>
     * Property name.
     * </p>
     * @param TValue $value <p>
     * Property value.
     * </p>
     */
    public function __set (int|string $name, mixed $value):void {

        $this->offsetSet($name, $value);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param TKey $name <p>
     * Property name.
     * </p>
     */
    public function __isset (int|string $name):bool {

        return $this->offsetExists($name);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param TKey $name <p>
     * Property name.
     * </p>
     */
    public function __unset (int|string $name):void {

        $this->offsetUnset($name);

    }

}