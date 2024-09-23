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
use FireHub\Core\Support\LowLevel\Iterables;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends
};
use Countable, IteratorAggregate, Traversable;

/**
 * ### Test array or traversable low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Iterables::class)]
final class IterablesTest extends Base {

    public array $empty_arr = [];
    public array $list = [1, 2, 3];
    public array $assoc_arr = ['one' => 1, 'two' => 2, 'three' => 3];
    public array $multi_dim_array = ['one' => [1, 2, 3], 'two' => [4, 5, 6], 'three' => [7, 8, 9]];
    public array $arr_with_null = [1, 2, null];

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCount ():void {

        $this->assertSame(0, Iterables::count($this->empty_arr));
        $this->assertSame(3, Iterables::count($this->list));
        $this->assertSame(3, Iterables::count($this->assoc_arr));
        $this->assertSame(3, Iterables::count($this->multi_dim_array));
        $this->assertSame(12, Iterables::count($this->multi_dim_array, true));
        $this->assertSame(3, Iterables::count(self::countableTraversableObject()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReset ():void {

        $this->assertFalse(Iterables::reset($this->empty_arr));
        $this->assertSame(1, Iterables::reset($this->list));
        $this->assertSame(1, Iterables::reset($this->assoc_arr));
        $this->assertSame([1, 2, 3], Iterables::reset($this->multi_dim_array));
        $this->assertSame(1, Iterables::reset($this->arr_with_null));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testReset')]
    public function testCurrent ():void {

        $this->assertSame(1, Iterables::current($this->list));
        $this->assertSame(1, Iterables::current($this->assoc_arr));
        $this->assertSame([1, 2, 3], Iterables::current($this->multi_dim_array));
        $this->assertSame(1, Iterables::current($this->arr_with_null));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testReset')]
    public function testKey ():void {

        $this->assertSame(0, Iterables::key($this->list));
        $this->assertSame('one', Iterables::key($this->assoc_arr));
        $this->assertSame('one', Iterables::key($this->multi_dim_array));
        $this->assertSame(0, Iterables::key($this->arr_with_null));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testReset')]
    public function testNextPrev ():void {

        $this->assertSame(2, Iterables::next($this->list));
        $this->assertSame(2, Iterables::next($this->assoc_arr));
        $this->assertSame([4, 5, 6], Iterables::next($this->multi_dim_array));
        $this->assertSame(2, Iterables::next($this->arr_with_null));

        $this->assertSame(1, Iterables::prev($this->list));
        $this->assertSame(1, Iterables::prev($this->assoc_arr));
        $this->assertSame([1, 2, 3], Iterables::prev($this->multi_dim_array));
        $this->assertSame(1, Iterables::prev($this->arr_with_null));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEnd ():void {

        $this->assertSame(3, Iterables::end($this->list));
        $this->assertSame(3, Iterables::end($this->assoc_arr));
        $this->assertSame([7, 8, 9], Iterables::end($this->multi_dim_array));
        $this->assertSame(null, Iterables::end($this->arr_with_null));

    }

    /**
     * @since 1.0.0
     *
     * @return Countable&Traversable
     */
    private static function countableTraversableObject ():Countable&Traversable {

        return new class implements IteratorAggregate, Countable {
            public function count ():int {
                return 3;
            }
            public function getIterator ():Traversable {
                return yield from [1,2,3];
            }
        };

    }

    /**
     * @since 1.0.0
     *
     * @return Traversable
     */
    private static function traversableObject ():Traversable {

        return new class implements IteratorAggregate {
            public function getIterator ():Traversable {
                return yield from [1,2,3];
            }
        };

    }

}