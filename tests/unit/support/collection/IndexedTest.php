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
    public Indexed $named;
    public Indexed $int_named;
    public Indexed $multidimensional;
    public Indexed $multidimensional_complex;
    public Indexed $multidimensional_collection;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::list(['one', 'two', 'three']);

        $this->named = Collection::list(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

        $this->multidimensional = Collection::list(['one', 'two', ['three', 'four']]);

        $this->int_named = Collection::list(['one', 'one', 'one', 'two', 'two', 'three', 'three', 'three']);

        $this->multidimensional_complex = Collection::list([
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

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountBy ():void {

        $this->assertSame(['J' => 4, 'R' => 2], $this->named->countBy(function ($value, $key) {
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

        $this->named->countBy(function ($value, $key) {
            return [];
        });

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountByValues ():void {

        $this->assertSame(['John' => 1, 'Jane' => 3, 'Richard' => 2], $this->named->countByValues()->all());
        $this->assertSame(['Doe' => 2, 'Roe' => 1], $this->multidimensional_complex->countByValues('lastname')->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirst ():void {

        $this->assertSame('one', $this->int_named->first());

        $this->assertSame('two', $this->int_named->first(function ($value) {
            return $value <> 'one';
        }));

        $this->assertNull($this->int_named->first(function ($value) {
            return $value === 'four';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLast ():void {

        $this->assertSame('three', $this->int_named->last());

        $this->assertSame('two', $this->int_named->last(function ($value) {
            return $value <> 'three';
        }));

    }

}