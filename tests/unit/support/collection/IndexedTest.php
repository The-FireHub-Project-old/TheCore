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
use FireHub\Core\Support\Contracts\HighLevel\Collectable;
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\ {
    Arr, Indexed
};
use FireHub\Core\Support\Collection\Helpers\ {
    Convert, Condition, CountCollectables, Emp, Range, SliceRange
};
use FireHub\Core\Support\Enums\ {
    Order, Sort, Data\Type, Data\Category, Operator\Comparison
};
use PHPUnit\Framework\Attributes\CoversClass;
use Error;

/**
 * ### Test index collection high-level support class
 * @since 1.0.0
 */
#[CoversClass(Collection::class)]
#[CoversClass(Emp::class)]
#[CoversClass(Range::class)]
#[CoversClass(Arr::class)]
#[CoversClass(Indexed::class)]
#[CoversClass(Convert::class)]
#[CoversClass(Condition::class)]
#[CoversClass(CountCollectables::class)]
#[CoversClass(SliceRange::class)]
#[CoversClass(Order::class)]
#[CoversClass(Sort::class)]
#[CoversClass(Comparison::class)]
#[CoversClass(Type::class)]
#[CoversClass(Category::class)]
final class IndexedTest extends Base {

    public Indexed $collection;
    public Indexed $multidimensional;
    public Indexed $multidimensional_collection;
    public Indexed $multidimensional_numbers;
    public Indexed $numbers;
    public Indexed $empty;
    public Indexed $range;

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
        $this->multidimensional_numbers = Collection::list(fn():array => [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ]);
        $this->multidimensional_collection = Collection::list(fn():array => [
            Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
            'one',
            'two',
            Collection::list([Collection::list([1,2]),Collection::list([1,2])])
        ]);

        $this->numbers = Collection::list([1, 2, 3, 4, 13, 22, 27, 28, 29]);

        $this->empty = Collection::empty()->list();

        $this->range = Collection::range(1, 10, 2)->list();

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
    public function testFromArray ():void {

        $this->assertSame(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard'],
            Indexed::fromArray(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard'])->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testConvert ():void {

        $this->assertEquals($this->collection, $this->collection->convert()->toList());

        $this->assertNotEquals($this->collection, $this->collection->convert()->toAssociative());

        $this->assertNotEquals($this->collection, $this->collection->convert()->toFixed());

        $this->assertNotEquals($this->collection, $this->collection->convert()->toLazy());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhenIs ():void {

        $this->assertEquals(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 10],
            $this->collection->when()->is(true, function (&$collection) {
                return $collection[] = 10;
            })->all()
        );

        $this->assertEquals(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 10, 11],
            $this->collection->when()->is(false, function (&$collection) {
                return $collection[] = 12;
            }, function (&$collection) {
                return $collection[] = 11;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhenUnless ():void {

        $this->assertEquals(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 10],
            $this->collection->when()->unless(false, function (&$collection) {
                return $collection[] = 10;
            })->all()
        );

        $this->assertEquals(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 10, 11],
            $this->collection->when()->unless(true, function (&$collection) {
                return $collection[] = 12;
            }, function (&$collection) {
                return $collection[] = 11;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhenEmpty ():void {

        $this->assertEquals(
            [10],
            $this->empty->when()->empty(function (&$collection) {
                return $collection[] = 10;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhenNotEmpty ():void {

        $this->assertEquals(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 10],
            $this->collection->when()->notEmpty(function (&$collection) {
                return $collection[] = 10;
            })->all()
        );

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
    public function testReduce ():void {

        $this->assertSame(130, $this->numbers->reduce(function ($carry, $value, $key) {
            return $carry + $value;
        }, 1));

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
    public function testEvery ():void {

        $this->assertFalse($this->collection->every(function ($value) {
            return $value === 'Jane';
        }));

        $this->assertTrue($this->collection->every(function ($value) {
            return $value !== 'Jack';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAny ():void {

        $this->assertTrue($this->collection->any(function ($value) {
            return $value === 'John';
        }));

        $this->assertFalse($this->collection->any(function ($value) {
            return $value === 'Jack';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEnsure ():void {

        $this->assertTrue($this->collection->ensure(Category::SCALAR));
        $this->assertTrue($this->collection->ensure(Type::T_STRING));
        $this->assertFalse($this->multidimensional_collection->ensure(Collectable::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEnsureNone ():void {

        $this->assertFalse($this->collection->ensureNone(Category::SCALAR));
        $this->assertFalse($this->collection->ensureNone(Type::T_STRING));
        $this->assertFalse($this->multidimensional_collection->ensureNone(Collectable::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEnsureAny ():void {

        $this->assertTrue($this->collection->ensureAny(Category::SCALAR));
        $this->assertTrue($this->collection->ensureAny(Type::T_STRING));
        $this->assertTrue($this->multidimensional_collection->ensureAny(Collectable::class));

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
    public function testContainTimes ():void {

        $this->assertSame(3, $this->collection->containTimes('Jane'));

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

        $this->assertSame(1, $this->collection->search('Jane'));

        $this->assertSame(1, $this->collection->search(function ($value) {
            return $value !== 'John';
        }));

        $this->assertFalse($this->collection->search('Jack'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearchTwoDimensional ():void {

        $this->assertSame(0, $this->multidimensional->searchTwoDimensional('firstname', 'John'));

        $this->assertFalse($this->multidimensional->searchTwoDimensional('firstname', 'Jack'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGroupBy ():void {

        $this->assertSame(
            [
                0 => [0 => 1, 1 => 2, 2 => 3, 3 => 4],
                1 => [4 => 13],
                2 => [5 => 22],
                3 => [6 => 27, 7 => 28, 8 => 29]
            ],
            $this->numbers->groupBy(function ($prev, $curr) {
                return ($curr - $prev) > 1;
            })->all());

        $this->assertSame(
            [
                [
                    0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
                    1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
                ],
                [
                    2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
                ]
            ],
            $this->multidimensional->groupBy(function ($prev, $curr) {
                return $curr['lastname'] !== 'Doe';
            })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGroupByKey ():void {

        $this->assertSame([
            'Doe' => [
                1 => [
                    0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]
                ],
                0 => [
                    1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
                ]
            ],
            'Roe' => [
                0 => [
                    2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
                ]
            ]
        ], $this->multidimensional->groupByKey('lastname', function (array $value) {
            return $value['firstname'] === 'John';
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCombine ():void {

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
            Collection::list(fn() => ['firstname', 'lastname', 'age'])->combine(
                Collection::list(fn():array => ['John', 'Doe', 25])
            )->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifference ():void {

        $collection = Collection::list(['Jane', 'Richard']);

        $this->assertSame(
            ['John'],
            $this->collection->difference($collection)->all()
        );

        $this->assertSame(
            ['John'],
            $this->collection->difference($collection, function ($value_a, $value_b) {
                return $value_a !== $value_b ? 1 : 0;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersect ():void {

        $collection = Collection::list(['Jane', 'Richard']);

        $this->assertSame(
            [1 => 'Jane', 2 => 'Jane', 3 => 'Jane', 4 => 'Richard', 5 => 'Richard'],
            $this->collection->intersect($collection)->all()
        );

        $this->assertSame(
            [0 => 'John', 2 => 'Jane', 3 => 'Jane'],
            $this->collection->intersect($collection, function ($value_a, $value_b) {
                return $value_a === $value_b ? 1 : 0;
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSplit ():void {

        $this->assertEquals(
            [
                Indexed::fromArray(['John', 'Jane']),
                Indexed::fromArray(['Jane', 'Jane']),
                Indexed::fromArray(['Richard', 'Richard'])
            ],
            $this->collection->split(3)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCollapse ():void {

        $this->assertSame([1, 2, 3, 4, 5, 6, 7, 8, 9], $this->multidimensional_numbers->collapse()->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFilter ():void {

        $this->assertSame([0 => 'John', 4 => 'Richard', 5 => 'Richard'], $this->collection->filter(function ($value) {
            return $value !== 'Jane';
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReject ():void {

        $this->assertSame([1 => 'Jane', 2 => 'Jane', 3 => 'Jane'], $this->collection->reject(function ($value) {
            return $value !== 'Jane';
        })->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMap ():void {

        $this->assertSame(
            ['John.', 'Jane.', 'Jane.', 'Jane.', 'Richard.', 'Richard.'],
            $this->collection->map(function ($value) {
                return $value.'.';
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
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 1, 2, 3, 4, 13, 22, 27, 28, 29],
            $this->collection->merge($this->numbers)->all()
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
                0 => ['Jane', 'Jane', 'Jane'],
                1 => ['John', 'Richard', 'Richard']
            ],
            $this->collection->partition(function ($value) {
                return $value === 'Jane';
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
            ['Richard', 'Richard', 'Jane', 'Jane', 'Jane', 'John'],
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
            ['Jane', 'Jane', 'Richard'],
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
            ['Jane', 'Jane', 'Richard'],
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
            ['John', 'Jane', 'Richard'],
            $this->collection->odd()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPad ():void {

        $this->assertSame(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 'Daniel', 'Daniel', 'Daniel', 'Daniel'],
            $this->collection->pad(10, 'Daniel')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnique ():void {

        $this->assertSame(
            [0 => 'John', 1 => 'Jane', 4 => 'Richard'],
            $this->collection->unique()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDuplicates ():void {

        $this->assertSame(
            [2 => 'Jane', 3 => 'Jane', 5 => 'Richard'],
            $this->collection->duplicates()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUniqueTwoDimensional ():void {

        $this->assertSame([
            0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
        ],
            $this->multidimensional->uniqueTwoDimensional('lastname')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDuplicatesTwoDimensional ():void {

        $this->assertSame([
            1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
        ],
            $this->multidimensional->duplicatesTwoDimensional('lastname')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSlice ():void {

        $this->assertSame(
            ['Jane', 'Jane', 'Richard'],
            $this->collection->slice(2, 3)->all()
        );

        $this->assertSame(
            ['Jane', 'Richard'],
            $this->collection->slice(-3, 2)->all()
        );

        $this->assertSame(
            ['Jane', 'Jane', 'Richard'],
            $this->collection->slice(2, -1)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSplice ():void {

        $collection = Collection::list(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
        $splice = $collection->splice(2, 3);
        $this->assertSame(
            ['John', 'Jane', 'Richard'],
            $collection->all()
        );
        $this->assertSame(
            ['Jane', 'Jane', 'Richard'],
            $splice->all()
        );

        $collection = Collection::list(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
        $splice = $collection->splice(-5, 2);
        $this->assertSame(
            ['John', 'Jane', 'Richard', 'Richard'],
            $collection->all()
        );
        $this->assertSame(
            ['Jane', 'Jane'],
            $splice->all()
        );

        $collection = Collection::list(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
        $splice = $collection->splice(2, -1);
        $this->assertSame(
            ['John', 'Jane', 'Richard'],
            $collection->all()
        );
        $this->assertSame(
            ['Jane', 'Jane', 'Richard'],
            $splice->all()
        );

        $collection = Collection::list(['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);
        $splice = $collection->splice(2, 2, Collection::list(['Marc']));
        $this->assertSame(
            ['John', 'Jane', 'Marc', 'Richard', 'Richard'],
            $collection->all()
        );
        $this->assertSame(
            ['Jane', 'Jane'],
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
            ['John', 'Jane'],
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
            ['John', 'Jane', 'Jane', 'Jane'],
            $this->collection->takeUntil(fn($value) => $value === 'Richard')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTakeWhile ():void {

        $this->assertSame(
            ['John', 'Jane', 'Jane', 'Jane'],
            $this->collection->takeWhile(fn($value) => $value !== 'Richard')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSkip ():void {

        $this->assertSame(
            ['Jane', 'Jane', 'Richard', 'Richard'],
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
            ['Richard', 'Richard'],
            $this->collection->skipUntil(fn($value) => $value === 'Richard')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSkipWhile ():void {

        $this->assertSame(
            ['Jane', 'Jane', 'Jane', 'Richard', 'Richard'],
            $this->collection->skipWhile(fn($value) => $value === 'John')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhere ():void {

        $this->assertSame([
            0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
        ],
            $this->multidimensional->where('lastname', Comparison::EQUAL, 'Doe')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhereNot ():void {

        $this->assertSame([
            2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
        ],
            $this->multidimensional->whereNot('lastname', Comparison::EQUAL, 'Doe')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhereBetween ():void {

        $this->assertSame([
            0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
        ],
            $this->multidimensional->whereBetween('age', 24, 27)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhereNotBetween ():void {

        $this->assertSame([
            1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
        ],
            $this->multidimensional->whereNotBetween('age', 24, 27)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhereIn ():void {

        $this->assertSame([
            0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
        ],
            $this->multidimensional->whereIn('firstname', ['John', 'Richard'])->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhereNotIn ():void {

        $this->assertSame([
            1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1]
        ],
            $this->multidimensional->whereNotIn('firstname', ['John', 'Richard'])->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhereDataIs ():void {

        $this->assertSame([
            0 => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            1 => ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
            2 => ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
        ],
            $this->multidimensional->whereDataIs('age', Type::T_INT)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWhereDataIsNot ():void {

        $this->assertSame([],
            $this->multidimensional->whereDataIsNot('age', Type::T_INT)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPluck ():void {

        $this->assertSame(
            ['John', 'Jane', 'Richard'],
            $this->multidimensional->pluck('firstname')->all()
        );

        $this->assertSame(
            ['John' => 25, 'Jane' => 21, 'Richard' => 27],
            $this->multidimensional->pluck('age', 'firstname')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testShift ():void {

        $this->assertSame(
            ['Jane', 'Jane', 'Jane', 'Richard', 'Richard'],
            $this->collection->shift()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnshift ():void {

        $this->assertSame(
            ['Jack', 'John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard'],
            $this->collection->unshift('Jack')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrepend ():void {

        $this->assertSame(
            ['Jack', 'John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard'],
            $this->collection->prepend('Jack')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPop ():void {

        $this->assertSame(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard'],
            $this->collection->pop()->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPush ():void {

        $this->assertSame(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 'Jack'],
            $this->collection->push('Jack')->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAppend ():void {

        $this->assertSame(
            ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard', 'Jack'],
            $this->collection->append('Jack')->all()
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
            ['Jane', 'Jane', 'Jane', 'John', 'Richard', 'Richard'],
            $this->collection->sort()->all()
        );

        $this->assertSame(
            ['Richard', 'Richard', 'John', 'Jane', 'Jane', 'Jane'],
            $this->collection->sort(Order::DESC)->all()
        );

        $this->assertSame(
            [1, 13, 2, 22, 27, 28, 29, 3, 4],
            $this->numbers->sort(Order::ASC, Sort::BY_STRING_FLAG_CASE)->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSortBy ():void {

        $this->assertSame(
            ['Jane', 'Jane', 'Jane', 'John', 'Richard', 'Richard'],
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
    public function testMultiSort ():void {

        $this->assertSame(
            [
                ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
                ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
                ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
            ],
            $this->multidimensional->multiSort(['lastname' => Order::ASC, 'age' => Order::ASC])->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTransform ():void {

        $this->assertSame(
            ['John.', 'Jane.', 'Jane.', 'Jane.', 'Richard.', 'Richard.'],
            $this->collection->transform(function ($value) {
                return $value.'.';
            })->all()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRandom ():void {

        $this->assertIsArray($this->collection->random(2)->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRandomEmpty ():void {

        $this->expectException(Error::class);

        $this->empty->random(2);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRandomTwoDimensional ():void {

        $this->assertIsArray($this->multidimensional->randomTwoDimensional(2, 'age')->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRandomTwoDimensionalEmpty ():void {

        $this->expectException(Error::class);

        $this->empty->randomTwoDimensional(2, 'no-key');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testJsonSerialize ():void {

        $this->assertSame('["John","Jane","Jane","Jane","Richard","Richard"]', json_encode($this->collection));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSerialize ():void {

        $this->assertSame(
            'O:44:"FireHub\Core\Support\Collection\Type\Indexed":6:{i:0;s:4:"John";i:1;s:4:"Jane";i:2;s:4:"Jane";i:3;s:4:"Jane";i:4;s:7:"Richard";i:5;s:7:"Richard";}',
            $serialize = serialize($this->collection)
        );

        $this->assertEquals($this->collection, unserialize($serialize));

    }

}