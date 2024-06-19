<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Test
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace support\collection;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\ {
    Arr, Fix
};
use FireHub\Core\Support\Collection\Helpers\CountCollectables;
use PHPUnit\Framework\Attributes\CoversClass;
use SplFixedArray;

/**
 * ### Test fixed collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Fix::class)]
#[CoversClass(CountCollectables::class)]
final class FixTest extends Base {

    public Fix $collection;
    public Fix $multidimensional_collection;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::fixed(function (SplFixedArray $storage):void {
            $storage[0] = 'one';
            $storage[1] = 'two';
            $storage[2] = 'three';
        }, 3);

        $this->multidimensional_collection = Collection::fixed(function (SplFixedArray $storage):void {
            $storage[0] = Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]);
            $storage[1] = 'one';
            $storage[2] = 'two';
            $storage[3] = Collection::fixed(function (SplFixedArray $xxx):void {
                $xxx[0] = Collection::list([1,2]);
                $xxx[1] = Collection::list([1,2]);
            }, 2);
        }, 4);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCount ():void {

        $this->assertSame(3, $this->collection->count());

    }

}