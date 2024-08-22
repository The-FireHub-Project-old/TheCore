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
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Associative, Obj
};
use SplObjectStorage;

/**
 * ### Creates an empty collection
 * @since 1.0.0
 */
final class Emp implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Empty indexed array collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Indexed As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<mixed> Empty indexed array collection type.
     */
    public function list ():Indexed {

        return new Indexed([]);

    }

    /**
     * ### Empty associative array collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, mixed> Empty associative array collection type.
     */
    public function associative ():Associative {

        return new Associative([]);

    }

    /**
     * ### Empty object collection
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Obj As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Obj<object, mixed> Empty object collection type.
     */
    public function object ():Obj {

        return new Obj(new SplObjectStorage());

    }

}