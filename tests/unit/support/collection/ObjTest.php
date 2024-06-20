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

    public stdClass $cls1;
    public stdClass $cls2;
    public stdClass $cls3;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->cls1 = new stdClass();
        $this->cls2 = new stdClass();
        $this->cls3 = new stdClass();
        $this->collection = Collection::object(function (SplObjectStorage $storage):void {
            $storage[$this->cls1] = 'data for object 1';
            $storage[$this->cls2] = [1,2,3];
            $storage[$this->cls3] = 20;
        });

        $this->empty = Collection::object(function (SplObjectStorage $storage):void {});

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAll ():void {

        $this->assertSame([
            ['object' => $this->cls1, 'info' => 'data for object 1'],
            ['object' => $this->cls2, 'info' => [1,2,3]],
            ['object' => $this->cls3, 'info' => 20]
        ], $this->collection->all());

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

        $this->assertEquals($this->cls1, $this->collection->first());

        $this->assertEquals($this->cls2, $this->collection->first(function ($object, $info) {
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
            return $info <> 'data for object 1';
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

        $this->assertEquals($this->cls3, $this->collection->last());

        $this->assertEquals($this->cls2, $this->collection->last(function ($object, $info) {
            return $info <> 20;
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
            return $info <> 20;
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
            if ($info === 'data for object 2') return false;
            return true;
        }));

        $this->assertFalse($this->collection->each(function ($object, $info) {
            if ($info === 'data for object 1') return false;
            return true;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertTrue($this->collection->contains($this->cls1));
        $this->assertFalse($this->collection->contains(new stdClass()));

        $this->assertTrue($this->collection->contains(function ($object, $info) {
            return $object === $this->cls1;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDoesntContains ():void {

        $this->assertFalse($this->collection->doesntContains($this->cls1));
        $this->assertTrue($this->collection->doesntContains(new stdClass()));

        $this->assertFalse($this->collection->doesntContains(function ($object, $info) {
            return$object === $this->cls1;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearch ():void {

        $this->assertSame(0, $this->collection->search($this->cls1));

        $this->assertSame(1, $this->collection->search(function ($object, $info) {
            return $info !== 'data for object 1';
        }));

        $this->assertFalse($this->collection->search(new stdClass()));

    }

}