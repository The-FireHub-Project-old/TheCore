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

}