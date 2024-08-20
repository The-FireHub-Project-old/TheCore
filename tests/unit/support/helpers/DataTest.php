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
use FireHub\Core\Support\Enums\ {
    Data\Category, Data\Type, Operator\Comparison
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, CoversFunction
};

use function FireHub\Core\Support\Helpers\Data\isType;

/**
 * ### Test Data functions
 * @since 1.0.0
 */
#[CoversClass(Comparison::class)]
#[CoversClass(Type::class)]
#[CoversClass(Category::class)]
#[CoversFunction('\FireHub\Core\Support\Helpers\Data\isType')]
final class DataTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsType ():void {

        $this->assertTrue(isType(10, Type::T_INT));
        $this->assertTrue(isType(10, Category::SCALAR));

    }

}