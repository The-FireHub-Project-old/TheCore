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

use FireHub\Core\Support\LowLevel\Arr;
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
     * @inheritdoc
     *
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
     * @throws Error If the key doesn't exist in a collection.
     */
    public function get (int|string $key):mixed {

        return $this->exist($key)
            ? $this->__get($key)
            : throw new Error("Key $key doesn't exist in collection.");

    }

    /**
     * @inheritdoc
     *
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
     * @throws Error If the key already exists in a collection.
     */
    public function add (int|string $key, mixed $value):void {

        !$this->exist($key)
            ? $this->__set($key, $value)
            : throw new Error("Key $key already exists in collection.");

    }

    /**
     * ### Puts item into collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::add() To add items to a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->put('middle-name', 'Marry');
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
     *
     * @note This method is an alias of add method.
     *
     * @see \FireHub\Core\Support\Collection\Traits\Overloadable::add() As alias to this function.
     */
    public function put (int|string $key, mixed $value):void {

        $this->add($key, $value);

    }

    /**
     * @inheritdoc
     *
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
     * @throws Error If the key doesn't exist in a collection.
     */
    public function replace (int|string $key, mixed $value):void {

        $this->exist($key)
            ? $this->__set($key, $value)
            : throw new Error("Key $key doesn't exist in collection.");

    }

    /**
     * ### Update item from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::replace() To replace item from a collection.
     * @uses \FireHub\Core\Support\LowLevel\Arr::replace() To replace the elements of one or more arrays together.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  'first' => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     *  'second' => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     *  'third' => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * ]);
     *
     * $collection->update('first', ['firstname' => 'Joe']);
     *
     * // [
     * //   'first' => ['firstname' => 'Joe', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
     * //   'second' => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
     * //   'third' => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
     * //]
     * ```
     *
     * @param array<array-key, mixed> $value <p>
     * Collection value.
     * </p>
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @throws Error If the key doesn't exist in a collection.
     *
     * @return void
     */
    public function update (mixed $key, array $value):void {

        /** @phpstan-ignore-next-line */
        $this->replace($key, Arr::replace($this->storage[$key], $value));

    }

    /**
     * ### Update item from a collection recursively
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::replaceRecursive() To replace item from a
     * collection recursively.
     * @uses \FireHub\Core\Support\LowLevel\Arr::replace() To replace the elements of one or more arrays together.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => [
     *  'first' => ['name' => ['firstname' => 'John', 'lastname' => 'Doe'], 'age' => 25, 10 => 2],
     *  'second' => ['name' => ['firstname' => 'Jane', 'lastname' => 'Doe'], 'age' => 21, 10 => 1],
     *  'third' => ['name' => ['firstname' => 'Richard', 'lastname' => 'Roe'], 'age' => 27]
     * ]);
     *
     * $collection->updateRecursive('first', ['name' => ['firstname' => 'Joe']];
     *
     * // [
     * //   'first' => ['name' => ['firstname' => 'Joe', 'lastname' => 'Doe'], 'age' => 25, 10 => 2],
     * //   'second' => ['name' => ['firstname' => 'Jane', 'lastname' => 'Doe'], 'age' => 21, 10 => 1],
     * //   'third' => ['name' => ['firstname' => 'Richard', 'lastname' => 'Roe'], 'age' => 27]
     * //]
     * ```
     *
     * @param array<array-key, mixed> $value <p>
     * Collection value.
     * </p>
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @throws Error If the key doesn't exist in a collection.
     *
     * @return void
     */
    public function updateRecursive (mixed $key, array $value):void {

        /** @phpstan-ignore-next-line */
        $this->replace($key, Arr::replaceRecursive($this->storage[$key], $value));

    }

    /**
     * @inheritdoc
     *
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
     */
    public function set (int|string $key, mixed $value):void {

        $this->offsetSet($key, $value);

    }

    /**
     * @inheritdoc
     *
     * @since 1.0.0
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
     */
    public function exist (int|string $key):bool {

        return $this->__isset($key);

    }

    /**
     * ### Check if item exist in collection
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
     * $collection->has('firstname');
     *
     * // true
     * ```
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @return bool True on success, false otherwise.
     *
     * @note This method is an alias of has method.
     *
     * @see \FireHub\Core\Support\Collection\Traits\Overloadable::exist() As alias to this function.
     */
    public function has (int|string $key):bool {

        return $this->exist($key);

    }

    /**
     * @inheritdoc
     *
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
     * @throws Error If the key doesn't exist in a collection.

     */
    public function remove (int|string $key):void {

        $this->exist($key)
            ? $this->__unset($key)
            : throw new Error("Key $key doesn't exist in collection.");

    }

    /**
     * ### Deletes item from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Traits\Overloadable::remove() To remove the key from a collection.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
     *
     * $collection->delete('firstname');
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
     *
     * @note This method is an alias of remove method.
     *
     * @see \FireHub\Core\Support\Collection\Traits\Overloadable::remove() As alias to this function.
     */
    public function delete (int|string $key):void {

        $this->remove($key);

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