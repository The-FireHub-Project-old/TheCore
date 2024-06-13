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
    Arr, Gen
};
use FireHub\Core\Support\Collection\Helpers\CountCollectables;
use PHPUnit\Framework\Attributes\CoversClass;
use Generator;

/**
 * ### Test lazy collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Gen::class)]
#[CoversClass(CountCollectables::class)]
final class GenTest extends Base {

    public Gen $collection;
    public Gen $multidimensional_collection;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::lazy(function ():Generator {
            yield from ['one' => 'one value', 'two' => 'two value', 'three' => 'three value'];
        });

        $this->multidimensional_collection = Collection::lazy(function ():Generator {
            yield from [
                Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
                'one',
                'two',
                Collection::list([Collection::list([1,2]),Collection::list([1,2])])
            ];
        });

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAll ():void {

        $this->assertIsArray($this->collection->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCount ():void {

        $this->assertSame(3, $this->collection->count());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountMultidimensional ():void {

        $this->assertSame(17, $this->multidimensional_collection->countMultidimensional());

    }

}