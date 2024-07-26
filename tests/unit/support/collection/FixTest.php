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
    public function testArrayAccessible ():void {

        $this->assertTrue(isset($this->collection[0]));
        $this->assertFalse(isset($this->collection[3]));

        $this->assertSame('one',$this->collection[0]);

        $this->collection[0] = 'first';
        $this->assertSame(['first', 'two', 'three'],$this->collection->all());

        unset($this->collection[1]);
        $this->assertSame(['first', null, 'three'],$this->collection->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFromArray ():void {

        $this->assertSame(
            ['first', 'two', 'three'],
            Fix::fromArray(['first', 'two', 'three'])->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAll ():void {

        $this->assertSame(['one', 'two', 'three'], $this->collection->all());

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

        $this->assertSame('one', $this->collection->first());

        $this->assertSame('two', $this->collection->first(function ($value) {
            return $value === 'two';
        }));

        $this->assertNull($this->collection->first(function ($value) {
            return $value === 'four';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstKey ():void {

        $this->assertSame(0, $this->collection->firstKey());

        $this->assertSame(1, $this->collection->firstKey(function ($value) {
            return $value === 'two';
        }));

        $this->assertNull($this->collection->firstKey(function ($value) {
            return $value === 'four';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLast ():void {

        $this->assertSame('three', $this->collection->last());

        $this->assertSame('two', $this->collection->last(function ($value) {
            return $value === 'two';
        }));

        $this->assertNull($this->collection->last(function ($value) {
            return $value === 'four';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastKey ():void {

        $this->assertSame(2, $this->collection->lastKey());

        $this->assertSame(1, $this->collection->lastKey(function ($value) {
            return $value === 'two';
        }));

        $this->assertNull($this->collection->lastKey(function ($value) {
            return $value === 'four';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEach ():void {

        $this->assertFalse($this->collection->each(function ($value) {
            if ($value === 'three') return false;
            return true;
        }));

        $this->assertTrue($this->collection->each(function ($value) {
            if ($value === 'four') return false;
            return true;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEvery ():void {

        $this->assertFalse($this->collection->every(function ($value) {
            return $value === 'three';
        }));

        $this->assertTrue($this->collection->every(function ($value) {
            return $value !== 'four';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertTrue($this->collection->contains('one'));
        $this->assertFalse($this->collection->contains('four'));

        $this->assertTrue($this->collection->contains(function ($value) {
            return $value === 'one';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDoesntContains ():void {

        $this->assertFalse($this->collection->doesntContains('one'));
        $this->assertTrue($this->collection->doesntContains('four'));

        $this->assertFalse($this->collection->doesntContains(function ($value) {
            return $value === 'one';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsEmpty ():void {

        $this->assertFalse($this->collection->isEmpty());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNotEmpty ():void {

        $this->assertTrue($this->collection->isNotEmpty());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearch ():void {

        $this->assertSame(2, $this->collection->search('three'));

        $this->assertSame(1, $this->collection->search(function ($value) {
            return $value !== 'one';
        }));

        $this->assertFalse($this->collection->search('four'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFilter ():void {

        $this->assertSame(['two', 'three'], $this->collection->filter(function ($value) {
            return $value !== 'one';
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReject ():void {

        $this->assertSame(['two', 'three'], $this->collection->reject(function ($value) {
            return $value === 'one';
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMap ():void {

        $this->assertSame(
            ['new one', 'new two', 'new three'],
            $this->collection->map(function ($value) {
                return 'new '.$value;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMerge ():void {

        $this->assertSame(
            ['one', 'two', 'three', 'one', 'two', 'three'],
            $this->collection->merge($this->collection)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testJsonSerialize ():void {

        $this->assertSame('["one","two","three"]', json_encode($this->collection));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSerialize ():void {

        $this->assertSame(
            'O:40:"FireHub\Core\Support\Collection\Type\Fix":3:{i:0;s:3:"one";i:1;s:3:"two";i:2;s:5:"three";}',
            $serialize = serialize($this->collection)
        );

        $this->assertEquals($this->collection, unserialize($serialize));

    }

}