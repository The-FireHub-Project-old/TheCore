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
use FireHub\Core\Support\LowLevel\RegexSB;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test single-byte regex low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(RegexSB::class)]
final class RegexSBTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMatch ():void {

        $this->assertTrue(
            RegexSB::match('/php/i', 'PHP is the web scripting language of choice.')
        );

        $this->assertFalse(
            RegexSB::match('/php/i', 'PHP is the web scripting language of choice.', 10)
        );

        $this->assertFalse(
            RegexSB::match('/\bweb\b/i', 'PHP is the website scripting language of choice.')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplace ():void {

        $this->assertSame(
            'April1,2003',
            RegexSB::replace('/(\w+) (\d+), (\d+)/i', '${1}1,$3', 'April 15, 2003')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplaceFunc ():void {

        $text = "April fools day is 04/01/2002 ";
        $text.= "and last christmas was 12/24/2001.";

        $this->assertSame(
            'April fools day is 04/01/2003 and last christmas was 12/24/2002.',
            RegexSB::replaceFunc(
                '|(\d{2}/\d{2}/)(\d{4})|',
                fn($matches) => $matches[1].($matches[2]+1),
                $text
            )
        );

    }

}