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
    Arr, Indexed
};
use FireHub\Core\Support\Collection\Helpers\CountCollectables;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test index collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Indexed::class)]
#[CoversClass(CountCollectables::class)]
final class IndexedTest extends Base {

    public Indexed $collection;
    public Indexed $multidimensional;
    public Indexed $multidimensional_collection;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::list(['one', 'two', 'three']);

        $this->multidimensional = Collection::list(['one', 'two', ['three', 'our']]);

        $this->multidimensional_collection = Collection::list(fn():array => [
            Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
            'one',
            'two',
            Collection::list([Collection::list([1,2]),Collection::list([1,2])])
        ]);

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
    public function testCountRecursively ():void {

        $this->assertSame(5, $this->multidimensional->countRecursively());

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