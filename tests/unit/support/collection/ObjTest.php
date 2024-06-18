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
    Arr, Obj
};
use PHPUnit\Framework\Attributes\CoversClass;
use SplObjectStorage, stdClass;

/**
 * ### Test object collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Obj::class)]
final class ObjTest extends Base {

    public Obj $collection;
    public Obj $empty;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {
        $this->collection = Collection::object(function (SplObjectStorage $storage):void {
            $storage[new stdClass()] = 'one';
            $storage[new stdClass()] = 'two';
            $storage[new stdClass()] = 'three';
        });

        $this->empty = Collection::object(function (SplObjectStorage $storage):void {});

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
    public function testFirst ():void {

        $this->assertEquals(new stdClass(), $this->collection->first());

        $this->assertEquals(new stdClass(), $this->collection->first(function ($object, $info) {
            return $info <> 'one';
        }));

        $this->assertNull($this->collection->first(function ($object, $info) {
            return $info === 'x';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstKey ():void {

        $this->assertEquals(0, $this->collection->firstKey());

        $this->assertEquals(1, $this->collection->firstKey(function ($object, $info) {
            return $info <> 'one';
        }));

        $this->assertNull($this->collection->firstKey(function ($object, $info) {
            return $info === 'x';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLast ():void {

        $this->assertEquals(new stdClass(), $this->collection->last());

        $this->assertEquals(new stdClass(), $this->collection->last(function ($object, $info) {
            return $info <> 'three';
        }));

        $this->assertNull($this->empty->last());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastKey ():void {

        $this->assertEquals(2, $this->collection->lastKey());

        $this->assertEquals(1, $this->collection->lastKey(function ($object, $info) {
            return $info <> 'three';
        }));

        $this->assertNull($this->empty->lastKey());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEach ():void {

        $this->assertTrue($this->collection->each(function ($object, $info) {
            if ($info === 'four') return false;
            return true;
        }));

        $this->assertFalse($this->collection->each(function ($object, $info) {
            if ($info === 'three') return false;
            return true;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearch ():void {

        $cls1 = new stdClass();

        $this->assertSame(0, Collection::object(function (SplObjectStorage $storage) use ($cls1):void {
            $storage[$cls1] = 'test';
        })->search($cls1));

        $this->assertSame(0, Collection::object(function (SplObjectStorage $storage) use ($cls1):void {
            $storage[$cls1] = 'test';
        })->search(function ($value) use ($cls1) {
            return $value === $cls1;
        }));

        $this->assertFalse($this->collection->search(new stdClass()));

    }

}