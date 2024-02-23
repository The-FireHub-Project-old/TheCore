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

namespace FireHub\Core\Support\Contracts\HighLevel;

use FireHub\Core\Support\Contracts\Iterator\IterablesAggregate;

/**
 * ### Collectable contract
 *
 * Efficient data structures, provided as an alternative to the array.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Contracts\Iterator\IterablesAggregate<TKey, TValue>
 */
interface Collectable extends IterablesAggregate {

    /**
     * ### Get collection as an array
     * @since 1.0.0
     *
     * @return array <code><![CDATA[ array<TKey, TValue> ]]></code> Collection items as an array.
     * @phpstan-return array<TKey, TValue>
     */
    public function all ():array;

}