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

namespace FireHub\Core\Support\Zwick;

use FireHub\Core\Support\Collection\Type\Obj;
use Error, SplObjectStorage;

/**
 * ### A timeline is a list of events arranged in the order in which they happened
 * @since 1.0.0
 *
 * @api
 */
class Timeline extends Obj {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Zwick\Timeline::every() To verify that all items of a collection are Zwick DateTime objects.
     *
     * @throws Error If a collection is not an exclusive list of Zwick DateTime objects.
     */
    public function __construct (
        protected SplObjectStorage $storage
    ) {

        /** @phpstan-ignore-next-line */
        $this->every(fn($object, $info) => $object instanceof DateTime)
            ?: throw new Error('Collection must be exclusive list of Zwick DateTime objects.');

        parent::__construct($storage);

    }

}