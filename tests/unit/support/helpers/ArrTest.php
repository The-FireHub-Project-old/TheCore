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
use PHPUnit\Framework\Attributes\ {
    CoversFunction
};

use function FireHub\Core\Support\Helpers\Arr\first;
use function FireHub\Core\Support\Helpers\Arr\last;
use function FireHub\Core\Support\Helpers\Arr\groupByKey;

/**
 * ### Test PHP functions
 * @since 1.0.0
 */
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\first')]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\last')]
#[CoversFunction('\FireHub\Core\Support\Helpers\Arr\groupByKey')]
final class ArrTest extends Base {

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

}