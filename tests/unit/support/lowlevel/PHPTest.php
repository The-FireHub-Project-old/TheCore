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
use FireHub\Core\Support\LowLevel\PHP;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test PHP low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(PHP::class)]
final class PHPTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetEnvironmentVariables ():void {

        $this->assertTrue(PHP::setEnvironmentVariable('FOO=BAR'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetEnvironmentVariables ():void {

        $this->assertSame('BAR', PHP::getEnvironmentVariable('FOO'));

    }

}