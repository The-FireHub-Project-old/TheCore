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
    CoversFunction, RequiresPhp
};

use function FireHub\Core\Support\Helpers\PHP\is64bit;
use function FireHub\Core\Support\Helpers\PHP\is32bit;

/**
 * ### Test PHP functions
 * @since 1.0.0
 */
#[CoversFunction('\FireHub\Core\Support\Helpers\PHP\is64bit')]
#[CoversFunction('\FireHub\Core\Support\Helpers\PHP\is32bit')]
final class PHPTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RequiresPhp('>=8.3')]
    public function testPHP ():void {

        $this->assertIsBool(is64bit());
        $this->assertIsBool(is32bit());

    }

}