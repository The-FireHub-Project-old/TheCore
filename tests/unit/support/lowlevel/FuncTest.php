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
use FireHub\Core\Support\LowLevel\Func;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test function low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Func::class)]
final class FuncTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testClasses ():void {

        $this->assertTrue(Func::isFunction('array_sum'));
        $this->assertFalse(Func::isFunction('i_am_not_a_function'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCall ():void {

        $this->assertSame('Hi!', Func::call(fn() => 'Hi!'));

    }

}