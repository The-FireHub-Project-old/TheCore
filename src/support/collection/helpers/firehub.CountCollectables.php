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

use FireHub\Core\Support\Contracts\HighLevel\Collectable;

/**
 * ### Count elements in Collectables, counted recursively
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
class CountCollectables {

    /**
     * ### Counting result
     * @since 1.0.0
     *
     * @var non-negative-int
     */
    private int $count = 0;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Collectable<TKey, TValue> $collectable <p>
     * Collectable instance to count.
     * </p>
     */
    public function __construct (
        private readonly Collectable $collectable
    ){}

    /**
     * ### Call an object as a function
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Collectable As parameter.
     *
     * @return non-negative-int Number of elements in Collectables, counted recursively.
     */
    public function __invoke ():int {

        foreach ($this->collectable as $item) {

            $this->count++;
            if ($item instanceof Collectable) $this->count += (new self($item))();

        }

        return $this->count;

    }

}