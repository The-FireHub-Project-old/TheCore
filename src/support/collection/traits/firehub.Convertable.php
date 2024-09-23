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

use FireHub\Core\Support\Collection\Helpers\Convert;

/**
 * ### This trait allows converting a collection to a different one
 * @since 1.0.0
 */
trait Convertable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\Convert As return.
     */
    public function convert ():Convert {

        return new Convert($this);

    }

}