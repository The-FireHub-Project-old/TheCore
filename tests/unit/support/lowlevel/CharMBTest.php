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
use FireHub\Core\Support\LowLevel\CharMB;
use FireHub\Core\Support\Enums\String\Encoding;
use PHPUnit\Framework\Attributes\ {
    CoversClass, DataProvider, RequiresPhpExtension
};
use Error;

/**
 * ### Test multibyte character low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(CharMB::class)]
#[RequiresPhpExtension('mbstring')]
final class CharMBTest extends Base {

    /**
     * @since 1.0.0
     *
     * @param string $string
     * @param int $codepoint
     * @param \FireHub\Core\Support\Enums\String\Encoding $encoding
     *
     * @return void
     */
    #[DataProvider('codepoints')]
    public function testChr (string $string, int $codepoint, Encoding $encoding):void {

        $this->assertSame($string, CharMB::chr($codepoint, $encoding));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testChrCannotConvert ():void {

        $this->expectException(Error::class);

        CharMB::chr(0x20AC, Encoding::ISO_8859_1);

    }

    /**
     * @since 1.0.0
     *
     * @param string $string
     * @param int $codepoint
     * @param \FireHub\Core\Support\Enums\String\Encoding $encoding
     *
     * @return void
     */
    #[DataProvider('codepoints')]
    public function testOrd (string $string, int $codepoint, Encoding $encoding):void {

        $this->assertSame($codepoint, CharMB::ord($string, $encoding));

    }

    /**
     * @since 1.0.0
     *
     * @return array
     */
    public static function codepoints ():array {

        return [
            ['A', 65, Encoding::UTF_8],
            ['?', 63, Encoding::UTF_8],
            ['€', 0x20AC, Encoding::UTF_8],
            ['🐘', 128024, Encoding::UTF_8]
        ];

    }

}