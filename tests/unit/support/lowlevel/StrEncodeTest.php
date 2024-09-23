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
use FireHub\Core\Support\LowLevel\StrEncode;
use PHPUnit\Framework\Attributes\CoversClass;
use Error;

/**
 * ### Test string encoding low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(StrEncode::class)]
final class StrEncodeTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBase64 ():void {

        $this->assertSame(
            'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==',
            StrEncode::base64Encode('This is an encoded string')
        );

        $this->assertSame(
            'This is an encoded string',
            StrEncode::base64Decode('VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBase64Error ():void {

        $this->expectException(Error::class);

        StrEncode::base64Decode('Normal text.');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUU ():void {

        $this->assertSame(
            "%2&5L;&\`\n`\n",
            StrEncode::uuEncode("Hello")
        );

        $this->assertSame(
            "Hello",
            StrEncode::uuDecode("%2&5L;&\`\n`\n")
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQuotedPrintableDecode ():void {

        $this->assertSame(
            "M=C3=B6chten Sie ein paar =C3=84pfel?",
            StrEncode::quotedPrintableEncode("Möchten Sie ein paar Äpfel?")
        );

        $this->assertSame(
            "Möchten Sie ein paar Äpfel?",
            StrEncode::quotedPrintableDecode("M=C3=B6chten Sie ein paar =C3=84pfel?")
        );

    }

}