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
use FireHub\Core\Support\LowLevel\RegexMB;
use FireHub\Core\Support\Enums\String\Encoding;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends
};

/**
 * ### Test multibyte regex low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(RegexMB::class)]
final class RegexMBTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMatch ():void {

        $this->assertTrue(
            RegexMB::match('danži', 'Danži is a boy.', false, $result)
        );

        $this->assertSame([0 => 'Danži'], $result);

        $this->assertFalse(
            RegexMB::match('danži', 'Danži is a boy.', true)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplace ():void {

        $this->assertSame(
            'PhP, ça marche !',
            RegexMB::replace('[é]', 'P', 'éhé, ça marche !', true)
        );

        $this->assertSame(
            'PhP, ça marche !',
            RegexMB::replace('[P]', 'P', 'Php, ça marche !', false)
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
            RegexMB::replaceFunc(
                '(\d{2}/\d{2}/)(\d{4})',
                fn($matches) => $matches[1].($matches[2]+1),
                $text
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetEncoding ():void {

        $this->assertTrue(RegexMB::encoding(Encoding::UTF_8));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testSetEncoding')]
    public function testGetEncoding ():void {

        $this->assertSame(Encoding::UTF_8, RegexMB::encoding());

    }

}