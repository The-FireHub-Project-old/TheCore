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

namespace FireHub\Core\Support\Contracts\Iterator;

use IteratorAggregate, Traversable as InternalTraversable;

/**
 * ### Base iterator aggregate contract
 *
 * Interface for external iterators or objects that can be iterated themselves internally.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\Iterator\Traversable<TKey, TValue>
 * @extends IteratorAggregate<TKey, TValue>
 */
interface IterablesAggregate extends Traversable, IteratorAggregate {

    /**
     * ### Retrieve an external iterator
     * @since 1.0.0
     *
     * @return InternalTraversable <code><![CDATA[ Traversable<TKey, TValue> ]]></code>
     * An instance of an object implementing Iterator or Traversable.
     * @phpstan-return InternalTraversable<TKey, TValue>
     */
    public function getIterator ():InternalTraversable;

}