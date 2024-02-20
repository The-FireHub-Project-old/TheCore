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

namespace support;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Path;
use PHPUnit\Framework\Attributes\CoversClass;
use Error;

/**
 * ### Test path support class
 * @since 1.0.0
 */
#[CoversClass(Path::class)]
final class PathTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCore ():void {

        $this->assertIsString(Path::core());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testProject ():void {

        $this->expectException(Error::class);

        Path::project();

    }

}