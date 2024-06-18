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
    public Gen $empty;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::lazy(function ():Generator {
            yield from ['one' => 'one value', 'two' => 'two value', 'three' => 'three value'];
        });

        $this->empty = Collection::lazy(function ():Generator {
            yield from [];
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

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirst ():void {

        $this->assertSame('one value', $this->collection->first());

        $this->assertSame('two value', $this->collection->first(function ($value, $key) {
            return $key <> 'one';
        }));

        $this->assertNull($this->collection->first(function ($value, $key) {
            return $key === 'x';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstKey ():void {

        $this->assertSame('one', $this->collection->firstKey());

        $this->assertSame('two', $this->collection->firstKey(function ($value, $key) {
            return $key <> 'one';
        }));

        $this->assertNull($this->collection->firstKey(function ($value, $key) {
            return $key === 'x';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLast ():void {

        $this->assertSame('three value', $this->collection->last());

        $this->assertNull($this->empty->last());

        $this->assertSame('two value', $this->collection->last(function ($value, $key) {
            return $key <> 'three';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastKey ():void {

        $this->assertSame('three', $this->collection->lastKey());

        $this->assertNull($this->empty->lastKey());

        $this->assertSame('two', $this->collection->lastKey(function ($value, $key) {
            return $key <> 'three';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEach ():void {

        $this->assertTrue($this->collection->each(function ($value, $key) {
            if ($key === 'four') return false;
            return true;
        }));

        $this->assertFalse($this->collection->each(function ($value, $key) {
            if ($key === 'three') return false;
            return true;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearch ():void {

        $this->assertSame('three', $this->collection->search('three value'));

        $this->assertSame('two', $this->collection->search(function ($value) {
            return $value !== 'one value';
        }));

        $this->assertFalse($this->collection->search('four'));

    }

}