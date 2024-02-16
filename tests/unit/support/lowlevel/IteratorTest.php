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
use FireHub\Core\Support\LowLevel\Iterator;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends
};
use Countable, IteratorAggregate, SplFixedArray, Traversable;

/**
 * ### Test iterator low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Iterator::class)]
final class IteratorTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToArray ():void {

        $this->assertIsArray(Iterator::toArray(self::countableTraversableObject()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCount ():void {

        $this->assertSame(3, Iterator::count(self::countableTraversableObject()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testToArray')]
    public function testApply ():void {

        $iterator = new SplFixedArray(3);
        $iterator[0] = 1;
        $iterator[1] = 2;
        $iterator[2] = 3;

        Iterator::apply($iterator, function (...$param) use ($iterator) {
            foreach ($param as $key => $value) {
                $iterator[$key] = $value + 1;
            }
            return true;

        },$iterator->toArray());

        $this->assertSame([2, 3, 4], $iterator->toArray());

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
            public function toArray ():array {
                return [1,2,3];
        }
        };

    }

}