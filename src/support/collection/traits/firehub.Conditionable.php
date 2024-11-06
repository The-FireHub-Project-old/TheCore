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

use FireHub\Core\Support\Collection\Helpers\Condition;

/**
 * ### This trait allows usage of conditionable methods for collection
 * @since 1.0.0
 *
 * @template-covariant TCollectable of \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable
 */
trait Conditionable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\Condition As return.
     *
     * @return \FireHub\Core\Support\Collection\Helpers\Condition<TCollectable>
     */
    public function when ():Condition {

        return new Condition($this);

    }

}