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
    Arr, Associative
};
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test associative collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Associative::class)]
final class AssociativeTest extends Base {

    public Associative $collection;
    public Associative $multidimensional;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::associative(['one' => 'one value', 'two' => 'two value', 'three' => 'three value']);

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

}