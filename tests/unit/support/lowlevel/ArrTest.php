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

namespace support\lowlevel;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\LowLevel\Arr;
use PHPUnit\Framework\Attributes\ {
    CoversClass, RequiresPhp
};
use FireHub\Core\Support\Enums\ {
    Order, Sort, String\CaseFolding
};
use ArgumentCountError, Error, ValueError;

/**
 * ### Test array low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Arr::class)]
final class ArrTest extends Base {

    public array $empty_arr = [];
    public array $list = [1, 2, 3];
    public array $assoc_arr = ['one' => 1, 'two' => 2, 'three' => 3];
    public array $assoc_upper_arr = ['ONE' => 1, 'TWO' => 2, 'THREE' => 3];
    public array $multi_dim_array = ['one' => [1, 2, 3], 'two' => [4, 5, 6], 'three' => [7, 8, 9]];
    public array $arr_with_null = [1, 2, null];

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testKeyExist ():void {

        $this->assertTrue(Arr::keyExist(1, $this->list));
        $this->assertTrue(Arr::keyExist('one', $this->assoc_arr));
        $this->assertFalse(Arr::keyExist('four', $this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testInArray ():void {

        $this->assertTrue(Arr::inArray(1, $this->list));
        $this->assertTrue(Arr::inArray(1, $this->assoc_arr));
        $this->assertTrue(Arr::inArray([1,2,3], $this->multi_dim_array));
        $this->assertFalse(Arr::inArray(4, $this->list));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsList ():void {

        $this->assertTrue(Arr::isList($this->empty_arr));
        $this->assertTrue(Arr::isList($this->list));
        $this->assertFalse(Arr::isList($this->assoc_arr));
        $this->assertFalse(Arr::isList($this->multi_dim_array));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMultiSort ():void {

        $this->assertTrue(Arr::multiSort([$this->multi_dim_array]));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWalk ():void {

        $array = $this->list;
        Arr::walk($array, fn(&$value, $key) => $value = $key.'-x');

        $this->assertSame(['0-x', '1-x', '2-x'], $array);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWalkRequiresMoreThenTwoArguments ():void {

        $this->expectException(ArgumentCountError::class);

        $array = $this->list;
        Arr::walk($array, fn(&$value, $key, $third) => $value = $key.'-x');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWalkRecursive ():void {

        $a1 = ['a' => 'red','b' => 'green'];
        $a2 = [$a1, '1' => 'blue', '2' => 'yellow'];

        Arr::walkRecursive($a2, fn(&$value, $key) => $value = $key.'-x');

        $this->assertSame([['a' => 'a-x', 'b' => 'b-x'], '1-x', '2-x'], $a2);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWalkRecursiveRequiresMoreThenTwoArguments ():void {

        $this->expectException(ArgumentCountError::class);

        $array = [1, 2, 3];
        Arr::walkRecursive($array, fn(&$value, $key, $third) => $value = $key.'-x');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountValues ():void {

        $this->assertSame([], Arr::countValues($this->empty_arr));
        $this->assertSame([1 => 1, 2 => 1, 3 => 1], Arr::countValues($this->list));
        $this->assertSame([1 => 1, 2 => 1, 3 => 1], Arr::countValues($this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFill ():void {

        $this->assertSame([1, 1, 1, 1, 1], Arr::fill(1, 0, 5));
        $this->assertSame([-2 => 1, -1 => 1, 0 => 1], Arr::fill(1, -2, 3));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFillNegativeLength ():void {

        $this->expectException(ValueError::class);

        Arr::fill(1, 0, -5);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFillKeys ():void {

        $this->assertSame(
            [1 => 1, 2 => 1, 3 => 1],
            Arr::fillKeys($this->list, 1)
        );

        $this->assertSame(
            [1 => 1, 2 => 1, '' => 1],
            Arr::fillKeys($this->arr_with_null, 1)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFillKeysNotString ():void {

        $this->expectException(Error::class);

        Arr::fillKeys(1, 2, fn() => '', 1);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFoldKeys ():void {

        $this->assertSame(
            $this->assoc_upper_arr,
            Arr::foldKeys($this->assoc_arr, CaseFolding::UPPER)
        );

        $this->assertSame(
            $this->assoc_arr,
            Arr::foldKeys($this->assoc_upper_arr, CaseFolding::LOWER)
        );

        $this->assertSame(
            $this->assoc_arr,
            Arr::foldKeys($this->assoc_arr, CaseFolding::TITLE)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testChunk ():void {

        $this->assertSame(
            [[1, 2], [3]],
            Arr::chunk($this->assoc_arr, 2, false)
        );

        $this->assertSame(
            [['one' => 1, 'two' => 2], ['three' => 3]],
            Arr::chunk($this->assoc_arr, 2, true)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testChunkLengthLessThenZero ():void {

        $this->expectException(ValueError::class);

        Arr::chunk($this->assoc_arr, 0);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testColumn ():void {

        $this->assertSame(
            [3 => 2, 6 => 5, 9 => 8],
            Arr::column($this->multi_dim_array, 1, 2)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCombine ():void {

        $this->assertSame(
            [1 => 1, 2 => 2, 3 => 3],
            Arr::combine($this->list, $this->assoc_arr)
        );

        $this->assertSame(
        [1 => 1, 2 => 2, '' => 3],
        Arr::combine($this->arr_with_null, $this->assoc_arr)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCombineDiffElementNumber ():void {

        $this->expectException(ValueError::class);

        Arr::combine($this->empty_arr, $this->assoc_arr);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifference ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'height' => '190cm'],
            Arr::difference($arr, ['lastname' => 'Doe', 'age' => 25])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifferenceFunc ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'height' => '190cm'],
            Arr::differenceFunc(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($value_a, $value_b) {
                    if ($value_a === $value_b && $value_a <> 'two') return 0;
                    return ($value_a > $value_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifferenceKey ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['age' => 25],
            Arr::differenceKey($arr, ['firstname' => 'Jane', 'lastname' => 'Doe', 'height' => '160cm'])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifferenceKeyFunc ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'height' => '190cm'],
            Arr::differenceKeyFunc(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($key_a, $key_b) {
                    if ($key_a === $key_b && $key_a <> 'lastname') return 0;
                    return ($key_a > $key_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifferenceAssoc ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'height' => '190cm'],
            Arr::differenceAssoc($arr, ['lastname' => 'Doe', 'age' => 25])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifferenceAssocFuncValue ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'height' => '190cm'],
            Arr::differenceAssocFuncValue(
                $arr,
                ['age' => 25],
                function ($value_a, $value_b) {
                    if ($value_a === $value_b && $value_a <> 'Doe') return 0;
                    return ($value_a > $value_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifferenceAssocFuncKey ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'height' => '190cm'],
            Arr::differenceAssocFuncKey(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($key_a, $key_b) {
                    if ($key_a === $key_b && $key_a <> 'lastname') return 0;
                    return ($key_a > $key_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDifferenceAssocFuncKeyValue ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'height' => '190cm'],
            Arr::differenceAssocFuncKeyValue(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($value_a, $value_b) {
                    if ($value_a === $value_b && $value_a <> 'Doe') return 0;
                    return ($value_a > $value_b) ? 1 : -1;
                }, function ($key_a, $key_b) {
                if ($key_a === $key_b && $key_a <> 'lastname') return 0;
                return ($key_a > $key_b) ? 1 : -1;
            }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersect ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['lastname' => 'Doe', 'age' => 25],
            Arr::intersect($arr, ['lastname' => 'Doe', 'age' => 25])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersectFunc ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['lastname' => 'Doe', 'age' => 25],
            Arr::intersectFunc(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($value_a, $value_b) {
                    if ($value_a === $value_b && $value_a <> 'two') return 0;
                    return ($value_a > $value_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersectKeyFunc ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'height' => '190cm'],
            Arr::intersectKeyFunc(
                $arr,
                ['firstname' => 'Jane', 'lastname' => 'Doe', 'height' => '160cm'],
                function ($key_a, $key_b) {
                    if ($key_a === $key_b && $key_a <> 'lastname') return 0;
                    return ($key_a > $key_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersectKey ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['firstname' => 'John', 'lastname' => 'Doe', 'height' => '190cm'],
            Arr::intersectKey($arr, ['firstname' => 'Jane', 'lastname' => 'Doe', 'height' => '160cm'])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersectAssoc ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['lastname' => 'Doe', 'age' => 25],
            Arr::intersectAssoc($arr, ['lastname' => 'Doe', 'age' => 25])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersectAssocFuncValue ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['age' => 25],
            Arr::intersectAssocFuncValue(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($value_a, $value_b) {
                    if ($value_a === $value_b && $value_a <> 'Doe') return 0;
                    return ($value_a > $value_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersectAssocFuncKey ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['age' => 25],
            Arr::intersectAssocFuncKey(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($key_a, $key_b) {
                    if ($key_a === $key_b && $key_a <> 'lastname') return 0;
                    return ($key_a > $key_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIntersectAssocFuncKeyValue ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm'];

        $this->assertSame(
            ['age' => 25],
            Arr::intersectAssocFuncKeyValue(
                $arr,
                ['lastname' => 'Doe', 'age' => 25],
                function ($value_a, $value_b) {
                    if ($value_a === $value_b && $value_a <> 'Doe') return 0;
                    return ($value_a > $value_b) ? 1 : -1;
                }, function ($key_a, $key_b) {
                    if ($key_a === $key_b && $key_a <> 'lastname') return 0;
                    return ($key_a > $key_b) ? 1 : -1;
                }
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFilter ():void {

        $this->assertSame(
            ['one' => 1, 'three' => 3],
            Arr::filter($this->assoc_arr, function ($key) {
                return $key !== 'two';
            })
        );

        $this->assertSame(
            ['three' => 3],
            Arr::filter($this->assoc_arr, function ($value, $key) {
                return $key !== 'one' && $value > 2;
            }, true)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFlip ():void {

        $this->assertSame([1 => 'one', 2 => 'two', 3 => 'three'], Arr::flip($this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testKeys ():void {

        $this->assertSame(['one', 'two', 'three'], Arr::keys($this->assoc_arr));
        $this->assertSame(['two'], Arr::keys($this->assoc_arr, 2));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testValues ():void {

        $this->assertSame([1, 2, 3], Arr::values($this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMap ():void {

        $array = $this->list;

        $this->assertSame(
            ['1-x', '2-x', '3-x'],
            Arr::map($array, fn($value) => $value.'-x')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMerge ():void {

        $this->assertSame(
            [1, 2, 3, 'one' => 1, 'two' => 2, 'three' => 3],
            Arr::merge($this->list, $this->assoc_arr)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMergeRecursive ():void {

        $this->assertSame(
            ['one' => [1, 1], 'two' => [2, 2], 'three' => [3, 3]],
            Arr::mergeRecursive($this->assoc_arr, $this->assoc_arr)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPad ():void {

        $this->assertSame([1, 2, 3, 'x', 'x'], Arr::pad($this->list, 5, 'x'));
        $this->assertSame(['x', 'x', 1, 2, 3], Arr::pad($this->list, -5, 'x'));
        $this->assertSame([1, 2, 3], Arr::pad($this->list, 2, 'x'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplace ():void {

        $this->assertSame(
            ['one' => 6, 'two' => 7, 'three' => 3],
            Arr::replace($this->assoc_arr, ['one' => 6, 'two' => 7])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplaceRecursive ():void {

        $this->assertSame(
            ['one' => [4, 2, 3], 'two' => [4, 5, 6], 'three' => [7, 8, 9]],
            Arr::replaceRecursive($this->multi_dim_array, ['one' => [4]])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReverse ():void {

        $this->assertSame(
            [3, 2, 1],
            Arr::reverse($this->list, false)
        );

        $this->assertSame(
            [2 => 3, 1 => 2, 0 => 1],
            Arr::reverse($this->list, true)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSlice ():void {

        $this->assertSame(
            [2, 3],
            Arr::slice($this->list, 1)
        );

        $this->assertSame(
            [1 => 2, 2 => 3],
            Arr::slice($this->list, 1, null, true)
        );

        $this->assertSame(
            [0 => 3],
            Arr::slice($this->list, -1)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSplice ():void {

        $list = $this->list;
        Arr::splice($list, 0, 2);
        $this->assertSame([3], $list);

        $list = $this->list;
        Arr::splice($list, -2, 1);
        $this->assertSame([1, 3], $list);

        $list = $this->list;
        Arr::splice($list, -2, 1, [10]);
        $this->assertSame([1, 10, 3], $list);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnique ():void {

        $this->assertSame(
            [0 => 1, 3 => 2, 4 => 3],
            Arr::unique([1, 1, 1, 2, 3])
        );

        $this->assertSame(
            ['one' => 1, 'two' => 2, 'three' => 3],
            Arr::unique(['one' => 1, 'one2' => 1, 'two' => 2, 'three' => 3])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRange ():void {

        $this->assertSame([1, 3, 5, 7, 9], Arr::range(1, 10, 2));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RequiresPhp('>=8.3')]
    public function testRangeNegativeStep ():void {

        $this->expectException(ValueError::class);

        Arr::range(1, 10, -2);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRandomBiggerThenArray ():void {

        $this->expectException(ValueError::class);

        Arr::random($this->list, 5);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReduce ():void {

        $this->assertSame(
            6,
            Arr::reduce($this->list, fn($carry, $item) => $carry + $item)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPop ():void {

        $list = $this->list;
        Arr::pop($list);
        $this->assertSame([1, 2], $list);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPush ():void {

        $list = $this->list;
        Arr::push($list, 4);
        $this->assertSame([1, 2, 3, 4], $list);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testShift ():void {

        $list = $this->list;
        Arr::shift($list);
        $this->assertSame([2, 3], $list);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnshift ():void {

        $list = $this->list;
        Arr::unshift($list, 0);
        $this->assertSame([0, 1, 2, 3], $list);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstKey ():void {

        $this->assertSame('one', Arr::firstKey($this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastKey ():void {

        $this->assertSame('three', Arr::lastKey($this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testProduct ():void {

        $this->assertSame(6, Arr::product($this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSum ():void {

        $this->assertSame(6, Arr::sum($this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSearch ():void {

        $this->assertSame('two', Arr::search(2, $this->assoc_arr));
        $this->assertFalse(Arr::search(5, $this->assoc_arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testShuffle ():void {

        $array = $this->list;
        Arr::shuffle($array);
        $this->assertIsArray($array);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSort ():void {

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sort($array, Order::ASC, Sort::BY_REGULAR);
        $this->assertSame(['190cm', 25, 'Doe', 'John', 'male'], $array);

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sort($array, Order::ASC, Sort::BY_REGULAR, true);
        $this->assertSame(
            ['height' => '190cm', 'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John', 'gender' => 'male'],
            $array
        );

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sort($array, Order::DESC, Sort::BY_NUMERIC, true);
        $this->assertSame(
            ['height' => '190cm', 'age' => 25, 'firstname' => 'John', 'lastname' => 'Doe', 'gender' => 'male'],
            $array
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSortByKey ():void {

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sortByKey($array, Order::ASC, Sort::BY_REGULAR);
        $this->assertSame(
            ['age' => 25, 'firstname' => 'John', 'gender' => 'male', 'height' => '190cm', 'lastname' => 'Doe'],
            $array
        );

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sortByKey($array, Order::DESC, Sort::BY_STRING);
        $this->assertSame(
            ['lastname' => 'Doe', 'height' => '190cm', 'gender' => 'male', 'firstname' => 'John', 'age' => 25],
            $array
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSortBy ():void {

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sortBy($array, function ($current, $next) {
            if ($current === $next) return 0;
            return ($current < $next) ? -1 : 1;
        });
        $this->assertSame(
            ['190cm', 25, 'Doe', 'John', 'male'],
            $array
        );

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sortBy($array, function ($current, $next) {
            if ($current === $next) return 0;
            return ($current < $next) ? -1 : 1;
        }, true);
        $this->assertSame(
            ['height' => '190cm', 'age' => 25, 'lastname' => 'Doe', 'firstname' => 'John', 'gender' => 'male'],
            $array
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSortKeyBy ():void {

        $array = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 'height' => '190cm', 'gender' => 'male'];
        Arr::sortKeyBy($array, function ($current, $next) {
            if ($current === $next) return 0;
            return ($current < $next) ? -1 : 1;
        });
        $this->assertSame(
            ['age' => 25, 'firstname' => 'John', 'gender' => 'male', 'height' => '190cm', 'lastname' => 'Doe'],
            $array
        );

    }

}