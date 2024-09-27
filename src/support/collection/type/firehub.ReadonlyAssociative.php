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

use FireHub\Core\Support\Collection\Type\Traits\Associative as AssociativeTrait;
use Error;

/**
 * ### Read-only associative array collection type
 *
 * Collections that use named keys that you assign to them.
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Collection\Type\ReadonlyArr<TKey, TValue>
 */
class ReadonlyAssociative extends ReadonlyArr {

    /**
     * ### Associative array trait
     * @since 1.0.0
     *
     * @use \FireHub\Core\Support\Collection\Type\Traits\Associative<TKey, TValue>
     */
    use AssociativeTrait;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param array<TKey, TValue> $storage <p>
     * Array underlying data.
     * </p>
     */
    public function __construct (
        protected array $storage
    ) {}

    /**
     * ### Gets item from collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\ReadonlyAssociative::exist() To check if an item exists in a collection.
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
            ? $this->storage[$key]
            : throw new Error("Key $key doesn't exist in collection.");

    }

    /**
     * ### Check if item exist in collection
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @return bool True on success, false otherwise.
     */
    public function exist (int|string $key):bool {

        return isset($this->storage[$key]);

    }

    /**
     * ### Check if item exist in collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\ReadonlyAssociative::exist() To check if an item exists in a collection.
     *
     * @param TKey $key <p>
     * Collection key.
     * </p>
     *
     * @return bool True on success, false otherwise.
     *
     * @note This method is an alias of has method.
     */
    public function has (int|string $key):bool {

        return $this->exist($key);

    }

}