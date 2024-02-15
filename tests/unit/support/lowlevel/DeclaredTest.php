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
use FireHub\Core\Support\LowLevel\Declared;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test declared low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Declared::class)]
final class DeclaredTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testClasses ():void {

        $this->assertIsList(Declared::classes());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testInterfaces ():void {

        $this->assertIsList(Declared::interfaces());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTraits ():void {

        $this->assertIsList(Declared::traits());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testConstants ():void {

        $this->assertIsArray(Declared::constants());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFunctions ():void {

        $this->assertIsArray(Declared::functions());

    }

}