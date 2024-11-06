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
use FireHub\Core\Support\Contracts\HighLevel\ReadCollectable;

/**
 * ### Conditionable methods for collection
 * @since 1.0.0
 *
 * @template-covariant TCollectable of \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable
 */
final class Condition implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable As parameter.
     *
     * @param TCollectable $collectable <p>
     * Collectable instance to condition upon.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly ReadCollectable $collectable
    ){}

    /**
     * ### Execute the given callback when the first argument given to the method evaluates to true
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->when()->is(true, function (&$collection) {
     *  return $collection[] = 10;
     * }, function (&$collection) {
     *  return $collection[] = 11;
     * });
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 10]
     * ```
     *
     * @param bool $condition <p>
     * Condition to meet.
     * </p>
     * @param callable(TCollectable):mixed $condition_meet <p>
     * Callback if the condition is met.
     * </p>
     * @param null|callable(TCollectable):mixed $condition_not_meet [optional] <p>
     * Callback if the condition is not met.
     * </p>
     *
     * @return TCollectable This collection.
     */
    public function is (bool $condition, callable $condition_meet, ?callable $condition_not_meet = null):ReadCollectable {

        $condition
            ? $condition_meet($this->collectable)
            : (
                !$condition_not_meet ?: $condition_not_meet($this->collectable)
            );

        return $this->collectable;

    }

    /**
     * ### Execute the given callback unless the first argument given to the method evaluates to true
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->when()->unless(true, function (&$collection) {
     *  return $collection[] = 10;
     * }, function (&$collection) {
     *  return $collection[] = 11;
     * });
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 11]
     * ```
     *
     * @param bool $condition <p>
     * Condition to meet.
     * </p>
     * @param callable(TCollectable):mixed $condition_meet <p>
     * Callback if the condition is met.
     * </p>
     * @param null|callable(TCollectable):mixed $condition_not_meet [optional] <p>
     * Callback if the condition is not met.
     * </p>
     *
     * @return TCollectable This collection.
     */
    public function unless (bool $condition, callable $condition_meet, ?callable $condition_not_meet = null):ReadCollectable {

        !$condition
            ? $condition_meet($this->collectable)
            : (
                !$condition_not_meet ?: $condition_not_meet($this->collectable)
            );

        return $this->collectable;

    }

    /**
     * ### Execute the given callback when the collection is empty
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\Condition::is() To execute the given callback when the first
     * argument given to the method evaluates to true.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable::isEmpty() Check if a collection is empty.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->when()->empty(function (&$collection) {
     *  return $collection[] = 10;
     * });
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']
     * ```
     *
     * @param callable(TCollectable):mixed $callback $callback <p>
     * Callback if a collection is empty.
     * </p>
     *
     * @return TCollectable This collection.
     */
    public function empty (callable $callback):ReadCollectable {

        return $this->is($this->collectable->isEmpty(), $callback);

    }

    /**
     * ### Execute the given callback when the collection is not empty
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\Condition::is() To execute the given callback when the first
     * argument given to the method evaluates to true.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable::isNotEmpty() Check if a collection is not empty.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable As return.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Collection;
     *
     * $collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
     *
     * $collection->when()->notEmpty(function (&$collection) {
     *  return $collection[] = 10;
     * });
     *
     * // ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 10]
     * ```
     *
     * @param callable(TCollectable):mixed $callback $callback <p>
     * Callback if a collection is not empty.
     * </p>
     *
     * @return TCollectable This collection.
     */
    public function notEmpty (callable $callback):ReadCollectable {

        return $this->is($this->collectable->isNotEmpty(), $callback);

    }

}