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
use PHPUnit\Framework\Attributes\CoversFunction;

use function FireHub\Core\Support\Helpers\String\asBoolean;

/**
 * ### Test PHP functions
 * @since 1.0.0
 */
#[CoversFunction('\FireHub\Core\Support\Helpers\String\asBoolean')]
final class StringTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAsBoolean ():void {

        $this->assertTrue(asBoolean('True'));
        $this->assertTrue(asBoolean('1'));
        $this->assertTrue(asBoolean('On'));
        $this->assertTrue(asBoolean('Yes'));
        $this->assertTrue(asBoolean('56.5'));
        $this->assertTrue(asBoolean('test'));

        $this->assertFalse(asBoolean('False'));
        $this->assertFalse(asBoolean('0'));
        $this->assertFalse(asBoolean('Off'));
        $this->assertFalse(asBoolean('No'));
        $this->assertFalse(asBoolean(' '));
        $this->assertFalse(asBoolean('-6'));

    }

}