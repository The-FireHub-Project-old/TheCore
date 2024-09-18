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

namespace components;

use FireHub\Core\Components\Registry;
use FireHub\Core\Components\Registry\Register;
use FireHub\Core\Testing\Base;
use PHPUnit\Framework\Attributes\CoversClass;
use Error;

/**
 * ### Test registry component class
 * @since 1.0.0
 */
#[CoversClass(Registry::class)]
#[CoversClass(Register::class)]
final class RegistryTest extends Base {

    public Registry $registry;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->registry = Registry::getInstance();

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRegister ():void {

        $this->assertEquals(new Register([]), $this->registry->register('test'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRegisterWithLengthLessThanTwo ():void {

        $this->expectException(Error::class);

        $this->registry->register('te');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRegisterWithNonAsciiChar ():void {

        $this->expectException(Error::class);

        $this->registry->register('Ã-test');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnregister ():void {

        $this->assertTrue($this->registry->unregister('test'));

    }

}