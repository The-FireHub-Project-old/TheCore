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
    public Associative $numbers;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::associative(['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);
        $this->numbers = Collection::associative([1, 2, 3, 4, 13, 22, 27, 28, 29]);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testArrayAccessible ():void {

        $this->assertTrue(isset($this->collection['firstname']));
        $this->assertFalse(isset($this->collection['gender']));

        $this->assertSame('John',$this->collection['firstname']);
        $this->assertNull($this->collection['gender']);

        $this->collection['gender'] = 'male';
        $this->assertSame(['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2, 'gender' => 'male'],$this->collection->all());

        unset($this->collection['gender']);
        $this->assertSame(['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],$this->collection->all());

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
    public function testEvery ():void {

        $this->assertFalse($this->collection->every(function ($value, $key) {
            return $value === 'Jane';
        }));

        $this->assertTrue($this->collection->every(function ($value, $key) {
            return $value !== 'Jack';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertTrue($this->collection->contains('John'));
        $this->assertFalse($this->collection->contains('Jack'));

        $this->assertTrue($this->collection->contains(function ($value, $key) {
            return $value === 'John';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDoesntContains ():void {

        $this->assertFalse($this->collection->doesntContains('John'));
        $this->assertTrue($this->collection->doesntContains('Jack'));

        $this->assertFalse($this->collection->doesntContains(function ($value, $key) {
            return $value === 'John';
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

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFilter ():void {

        $this->assertSame(['age' => 25, 10 => 2], $this->collection->filter(function ($value, $key) {
            return $key !== 'firstname' && $value !== 'Doe';
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReject ():void {

        $this->assertSame(['firstname' => 'John', 'lastname' => 'Doe'], $this->collection->reject(function ($value, $key) {
            return $key === 'age' || $value === 2;
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMap ():void {

        $this->assertSame(
            ['firstname' => 'firstname:John', 'lastname' => 'lastname:Doe', 'age' => 'age:25', 10 => '10:2'],
            $this->collection->map(function ($value, $key) {
                return $key.':'.$value;
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
            [
                'firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2,
                0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 13, 5 => 22, 6 => 27, 7 => 28, 8 => 29
            ],
            $this->collection->merge($this->numbers)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testJsonSerialize ():void {

        $this->assertSame('{"firstname":"John","lastname":"Doe","age":25,"10":2}', json_encode($this->collection));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSerialize ():void {

        $this->assertSame(
            'O:48:"FireHub\Core\Support\Collection\Type\Associative":4:{s:9:"firstname";s:4:"John";s:8:"lastname";s:3:"Doe";s:3:"age";i:25;i:10;i:2;}',
            $serialize = serialize($this->collection)
        );

        $this->assertEquals($this->collection, unserialize($serialize));

    }

}