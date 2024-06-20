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

        $this->collection = Collection::associative(['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirst ():void {

        $this->assertSame('John', $this->collection->first());

        $this->assertSame('Doe', $this->collection->first(function ($value, $key) {
            return $key <> 'firstname';
        }));

        $this->assertNull($this->collection->first(function ($value, $key) {
            return $value === 'Jack';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstKey ():void {

        $this->assertSame('firstname', $this->collection->firstKey());

        $this->assertSame('lastname', $this->collection->firstKey(function ($value, $key) {
            return $key <> 'firstname';
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

        $this->assertSame(2, $this->collection->last());

        $this->assertSame(25, $this->collection->last(function ($value, $key) {
            return $key <> 10;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastKey ():void {

        $this->assertSame(10, $this->collection->lastKey());

        $this->assertSame('age', $this->collection->lastKey(function ($value, $key) {
            return $key <> 10;
        }));

        $this->assertNull($this->collection->lastKey(function ($value, $key) {
            return $key === 'x';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEach ():void {

        $this->assertTrue($this->collection->each(function ($value, $key) {
            if ($value === 'Jane') return false;
            return true;
        }));

        $this->assertFalse($this->collection->each(function ($value, $key) {
            if ($value === 'John') return false;
            return true;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearch ():void {

        $this->assertSame('lastname', $this->collection->search('Doe'));

        $this->assertSame('lastname', $this->collection->search(function ($value, $key) {
            return $key !== 'firstname';
        }));

        $this->assertFalse($this->collection->search('Jack'));

    }

}