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
use FireHub\Core\Support\Enums\ {
    Order, Sort
};
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test associative collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Associative::class)]
#[CoversClass(Order::class)]
#[CoversClass(Sort::class)]
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
    public function testSplit ():void {

        $this->assertEquals(
            [
                Associative::fromArray(['firstname' => 'John', 'lastname' => 'Doe']),
                Associative::fromArray(['age' => 25, 10 => 2])
            ],
            $this->collection->split(2)->all()
        );

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
    public function testMergeRecursive ():void {

        $collection2 = Collection::associative(fn():array => ['firstname' => 'Jane', 'lastname' => 'Doe']);
        $collection3 = Collection::associative(fn():array => ['one', 'two', 'three']);

        $this->assertSame(
            [
                'firstname' => ['John', 'Jane'],
                'lastname' => ['Doe', 'Doe'],
                'age' => 25, 0 => 2, 1 => 'one', 2 => 'two', 3 => 'three'
            ],
            $this->collection->mergeRecursive($collection2, $collection3)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPartition ():void {

        $this->assertSame(
            [
                0 => [10 => 2],
                1 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25]
            ],
            $this->collection->partition(function ($value, $key) {
                return $key === 10;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReverse ():void {

        $this->assertSame(
            [10 => 2,  'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John'],
            $this->collection->reverse()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testNth ():void {

        $this->assertSame(
            ['lastname' => 'Doe', 10 => 2],
            $this->collection->nth(2, 1)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEven ():void {

        $this->assertSame(
            ['lastname' => 'Doe', 10 => 2],
            $this->collection->even()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOdd ():void {

        $this->assertSame(
            ['firstname' => 'John', 'age' => 25],
            $this->collection->odd()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSlice ():void {

        $this->assertSame(
            ['age' => 25, 10 => 2],
            $this->collection->slice(2, 3)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSplice ():void {

        $splice = $this->collection->splice(2, 1, Collection::associative(['sex' => 'male']));
        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'sex' => 'male', 10 => 2],
            $this->collection->all()
        );
        $this->assertSame(
            ['age' => 25],
            $splice->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTake ():void {

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe'],
            $this->collection->take(2)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTakeUntil ():void {

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe'],
            $this->collection->takeUntil(fn($value, $key) => $value === 25)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTakeWhile ():void {

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe'],
            $this->collection->takeWhile(fn($value, $key) => $value !== 25)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSkip ():void {

        $this->assertSame(
            ['age' => 25, 10 => 2],
            $this->collection->skip(2)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSkipUntil ():void {

        $this->assertSame(
            ['age' => 25, 10 => 2],
            $this->collection->skipUntil(fn($value, $key) => $value === 25)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSkipWhile ():void {

        $this->assertSame(
            ['lastname' => 'Doe', 'age' => 25, 10 => 2],
            $this->collection->skipWhile(fn($value, $key) => $value === 'John')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testShuffle ():void {

        $this->assertSame($this->collection, $this->collection->shuffle());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSort ():void {

        $this->assertSame(
            [10 => 2, 'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John'],
            $this->collection->sort()->all()
        );

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            $this->collection->sort(Order::DESC)->all()
        );

        $this->assertSame(
            ['age' => 25, 10 => 2, 'firstname' => 'John', 'lastname' => 'Doe'],
            $this->collection->sort(Order::DESC, Sort::BY_NUMERIC)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSortBy ():void {

        $this->assertSame(
            [10 => 2, 'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John'],
            $this->collection->sortBy(function (mixed $current, mixed $next) {
                if ($current === $next) return 0;
                return ($current < $next) ? -1 : 1;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSortKeys ():void {

        $this->assertSame(
            [10 => 2, 'age' => 25, 'firstname' => 'John', 'lastname' => 'Doe'],
            $this->collection->sortKeys()->all()
        );

        $this->assertSame(
            ['lastname' => 'Doe', 'firstname' => 'John', 'age' => 25, 10 => 2],
            $this->collection->sortKeys(Order::DESC)->all()
        );

        $this->assertSame(
            ['lastname' => 'Doe', 'firstname' => 'John', 'age' => 25, 10 => 2],
            $this->collection->sortKeys(Order::ASC, Sort::BY_NUMERIC)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSortKeysBy ():void {

        $this->assertSame(
            [10 => 2, 'age' => 25, 'firstname' => 'John', 'lastname' => 'Doe'],
            $this->collection->sortKeysBy(function (mixed $current, mixed $next) {
                if ($current === $next) return 0;
                return ($current < $next) ? -1 : 1;
            })->all()
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