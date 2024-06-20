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
use Error;

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

        $this->collection = Collection::list(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

        $this->multidimensional = Collection::list([
            ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
            ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
        ]);
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
    public function testArrayAccessible ():void {

        $this->assertTrue(isset($this->collection[0]));
        $this->assertFalse(isset($this->collection[6]));

        $this->assertSame('John',$this->collection[0]);
        $this->assertNull($this->collection[6]);

        $this->collection[] = 'Jack';
        $this->assertSame(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 'Jack'],$this->collection->all());

        unset($this->collection[6]);
        $this->assertSame(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard'],$this->collection->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAll ():void {

        $this->assertSame(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard'], $this->collection->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCount ():void {

        $this->assertSame(6, $this->collection->count());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountRecursively ():void {

        $this->assertSame(14, $this->multidimensional->countRecursively());

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
    public function testCountBy ():void {

        $this->assertSame(['J' => 4, 'R' => 2], $this->collection->countBy(function ($value) {
            return substr($value, 0, 1);
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFromEmptyCharacter ():void {

        $this->expectException(Error::class);

        $this->collection->countBy(function () {
            return [];
        });

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountByValues ():void {

        $this->assertSame(['John' => 1, 'Jane' => 3, 'Richard' => 2], $this->collection->countByValues()->all());
        $this->assertSame(['Doe' => 2, 'Roe' => 1], $this->multidimensional->countByValues('lastname')->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirst ():void {

        $this->assertSame('John', $this->collection->first());

        $this->assertSame('Jane', $this->collection->first(function ($value) {
            return $value <> 'John';
        }));

        $this->assertNull($this->collection->first(function ($value) {
            return $value === 'Jack';
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
            return $value <> 'John';
        }));

        $this->assertNull($this->collection->firstKey(function ($value) {
            return $value === 'Jack';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLast ():void {

        $this->assertSame('Richard', $this->collection->last());

        $this->assertSame('Jane', $this->collection->last(function ($value) {
            return $value <> 'Richard';
        }));

        $this->assertNull($this->collection->last(function ($value) {
            return $value === 'Jack';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastKey ():void {

        $this->assertSame(5, $this->collection->lastKey());

        $this->assertSame(3, $this->collection->lastKey(function ($value) {
            return $value <> 'Richard';
        }));

        $this->assertNull($this->collection->lastKey(function ($value) {
            return $value === 'Jack';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEach ():void {

        $this->assertFalse($this->collection->each(function ($value) {
            if ($value === 'Jane') return false;
            return true;
        }));

        $this->assertTrue($this->collection->each(function ($value) {
            if ($value === 'Jack') return false;
            return true;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertTrue($this->collection->contains('Jane'));
        $this->assertFalse($this->collection->contains('Jack'));

        $this->assertTrue($this->collection->contains(function ($value) {
            return $value === 'Jane';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDoesntContains ():void {

        $this->assertFalse($this->collection->doesntContains('Jane'));
        $this->assertTrue($this->collection->doesntContains('Jack'));

        $this->assertFalse($this->collection->doesntContains(function ($value) {
            return $value === 'Jane';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearch ():void {

        $this->assertSame(1, $this->collection->search('Jane'));

        $this->assertSame(1, $this->collection->search(function ($value) {
            return $value !== 'John';
        }));

        $this->assertFalse($this->collection->search('Jack'));

    }

}