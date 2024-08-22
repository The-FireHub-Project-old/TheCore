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
    Arr, Gen
};
use FireHub\Core\Support\Collection\Helpers\ {
    CountCollectables, SliceRange
};
use PHPUnit\Framework\Attributes\CoversClass;
use Generator;

/**
 * ### Test lazy collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Gen::class)]
#[CoversClass(CountCollectables::class)]
#[CoversClass(SliceRange::class)]
final class GenTest extends Base {

    public Gen $collection;
    public Gen $empty;
    public Gen $multidimensional_collection;
    public Gen $simple;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->collection = Collection::lazy(function ():Generator {
            yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2];
        });

        $this->empty = Collection::lazy(function ():Generator {
            yield from [];
        });

        $this->multidimensional_collection = Collection::lazy(function ():Generator {
            yield from [
                Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
                'one',
                'two',
                Collection::list([Collection::list([1,2]),Collection::list([1,2])])
            ];
        });

        $this->simple = Collection::lazy(function ():Generator {
            yield from ['one', 'two'];
        });

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFromArray ():void {

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            Gen::fromArray(['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2])->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAll ():void {

        $this->assertSame(['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2], $this->collection->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCount ():void {

        $this->assertSame(4, $this->collection->count());

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

        $this->assertNull($this->empty->last());

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

        $this->assertNull($this->empty->lastKey());

        $this->assertSame('age', $this->collection->lastKey(function ($value, $key) {
            return $key <> 10;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReduce ():void {

        $this->assertSame('JohnDoe252', $this->collection->reduce(function ($carry, $value, $key) {
            return $carry.$value;
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEach ():void {

        $this->assertTrue($this->collection->each(function ($value, $key) {
            if ($value === 'Jack') return false;
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
    public function testAny ():void {

        $this->assertTrue($this->collection->any(function ($value, $key) {
            return $value === 'John';
        }));

        $this->assertFalse($this->collection->any(function ($value, $key) {
            return $value === 'Jack';
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

        $this->assertTrue($this->collection->contains(function ($value) {
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
    public function testContainTimes ():void {

        $this->assertSame(1, $this->collection->containTimes('John'));

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

        $this->assertSame('firstname', $this->collection->search('John'));

        $this->assertSame('lastname', $this->collection->search(function ($value, $key) {
            return $value !== 'John';
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
                Gen::fromArray(['firstname' => 'John', 'lastname' => 'Doe']),
                Gen::fromArray(['age' => 25, 10 => 2])
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
            ['firstname' => 'new John', 'lastname' => 'new Doe', 'age' => 'new 25', 10 => 'new 2'],
            $this->collection->map(function ($value, $key) {
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
            [
                'firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2,
                0 => 'one', 1 => 'two'
            ],
            $this->collection->merge($this->simple)->all()
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
            ['lastname' => 'Doe', 'age' => 25],
            $this->collection->slice(1, 2)->all()
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
            'O:40:"FireHub\Core\Support\Collection\Type\Gen":4:{s:9:"firstname";s:4:"John";s:8:"lastname";s:3:"Doe";s:3:"age";i:25;i:10;i:2;}',
            $serialize = serialize($this->collection)
        );

        $this->assertEquals($this->collection, unserialize($serialize));

    }

}