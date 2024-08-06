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

namespace support\helpers;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Enums\Order;
use PHPUnit\Framework\Attributes\ {
    CoversClass, CoversFunction
};

use function FireHub\Core\Support\Helpers\Arr\is_empty;
use function FireHub\Core\Support\Helpers\Arr\first;
use function FireHub\Core\Support\Helpers\Arr\last;
use function FireHub\Core\Support\Helpers\Arr\groupByKey;
use function FireHub\Core\Support\Helpers\Arr\shuffle;
use function FireHub\Core\Support\Helpers\Arr\multiSort;

/**
 * ### Test PHP functions
 * @since 1.0.0
 */
#[CoversClass(Order::class)]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\is_empty')]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\first')]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\last')]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\groupByKey')]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\shuffle')]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\multiSort')]
final class ArrTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsEmpty ():void {

        $this->assertTrue(is_empty([]));
        $this->assertFalse(is_empty([1, 2, 3]));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirst ():void {

        $this->assertSame(1, first([1,2,3]));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLast ():void {

        $this->assertSame(3, last([1,2,3]));

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
        ], groupByKey([
            ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
            ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
            ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27],
            10
        ], 'lastname', function (array $value) {
            return $value['firstname'] === 'John';
        }));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testShuffle ():void {

        $arr = ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2];

        $this->assertTrue(shuffle($arr));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMultiSort ():void {

        $arr = [
            ['id' => 1, 'firstname' => 'John', 'lastname' => 'Doe', 'gender' => 'male', 'age' => 25],
            ['id' => 2, 'firstname' => 'Jane', 'lastname' => 'Doe', 'gender' => 'female', 'age' => 23],
            ['id' => 3, 'firstname' => 'Richard', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 27],
            ['id' => 4, 'firstname' => 'Jane', 'lastname' => 'Roe', 'gender' => 'female', 'age' => 22],
            ['id' => 5, 'firstname' => 'John', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 26]
        ];

        multiSort($arr, ['lastname' => Order::ASC, 'age' => Order::DESC]);

        $this->assertSame(
            [
                ['id' => 1, 'firstname' => 'John', 'lastname' => 'Doe', 'gender' => 'male', 'age' => 25],
                ['id' => 2, 'firstname' => 'Jane', 'lastname' => 'Doe', 'gender' => 'female', 'age' => 23],
                ['id' => 3, 'firstname' => 'Richard', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 27],
                ['id' => 5, 'firstname' => 'John', 'lastname' => 'Roe', 'gender' => 'male', 'age' => 26],
                ['id' => 4, 'firstname' => 'Jane', 'lastname' => 'Roe', 'gender' => 'female', 'age' => 22]
            ],
            $arr
        );

    }

}