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
use FireHub\Core\Support\Char;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends
};
use FireHub\Core\Support\Enums\String\Encoding;
use Error;

/**
 * ### Test char high-level support class
 * @since 1.0.0
 */
#[CoversClass(Char::class)]
final class CharTest extends Base {

    public Char $control;
    public Char $punctuation;
    public Char $blank;
    public Char $latin_alphabet;
    public Char $ascii_digit;
    public Char $latin_extended;
    public Char $latin_historic;
    public Char $greek;
    public Char $cyrillic;
    public Char $arabic;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->control = Char::fromCodepoint(0, Encoding::UTF_8);
        $this->punctuation = Char::from('}', Encoding::UTF_8);
        $this->blank = Char::from(' ', Encoding::UTF_8);
        $this->latin_alphabet = Char::from('F', Encoding::UTF_8);
        $this->ascii_digit = Char::from('4', Encoding::UTF_8);
        $this->latin_extended = Char::from('č', Encoding::UTF_8);
        $this->latin_historic = Char::from('Ʀ', Encoding::UTF_8);
        $this->greek = Char::from('Ϸ', Encoding::UTF_8);
        $this->cyrillic = Char::from('Ж', Encoding::UTF_8);
        $this->arabic = Char::from('ۺ', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFromEmptyCharacter ():void {

        $this->expectException(Error::class);

        Char::from('');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFromMoreThanOneCharacter ():void {

        $this->expectException(Error::class);

        Char::from('ab');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsLower ():void {

        $this->assertFalse($this->control->is()->lower());
        $this->assertFalse($this->punctuation->is()->lower());
        $this->assertFalse($this->blank->is()->lower());
        $this->assertFalse($this->latin_alphabet->is()->lower());
        $this->assertFalse($this->ascii_digit->is()->lower());
        $this->assertTrue($this->latin_extended->is()->lower());
        $this->assertFalse($this->latin_historic->is()->lower());
        $this->assertFalse($this->greek->is()->lower());
        $this->assertFalse($this->cyrillic->is()->lower());
        $this->assertFalse($this->arabic->is()->lower());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsUpper ():void {

        $this->assertFalse($this->control->is()->upper());
        $this->assertFalse($this->punctuation->is()->upper());
        $this->assertFalse($this->blank->is()->upper());
        $this->assertTrue($this->latin_alphabet->is()->upper());
        $this->assertFalse($this->ascii_digit->is()->upper());
        $this->assertFalse($this->latin_extended->is()->upper());
        $this->assertTrue($this->latin_historic->is()->upper());
        $this->assertTrue($this->greek->is()->upper());
        $this->assertTrue($this->cyrillic->is()->upper());
        $this->assertFalse($this->arabic->is()->upper());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsAlphabetic ():void {

        $this->assertFalse($this->control->is()->alphabetic());
        $this->assertFalse($this->punctuation->is()->alphabetic());
        $this->assertFalse($this->blank->is()->alphabetic());
        $this->assertTrue($this->latin_alphabet->is()->alphabetic());
        $this->assertFalse($this->ascii_digit->is()->alphabetic());
        $this->assertTrue($this->latin_extended->is()->alphabetic());
        $this->assertTrue($this->latin_historic->is()->alphabetic());
        $this->assertTrue($this->greek->is()->alphabetic());
        $this->assertTrue($this->cyrillic->is()->alphabetic());
        $this->assertTrue($this->arabic->is()->alphabetic());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsAlphanumeric ():void {

        $this->assertFalse($this->control->is()->alphanumeric());
        $this->assertFalse($this->punctuation->is()->alphanumeric());
        $this->assertFalse($this->blank->is()->alphanumeric());
        $this->assertTrue($this->latin_alphabet->is()->alphanumeric());
        $this->assertTrue($this->ascii_digit->is()->alphanumeric());
        $this->assertTrue($this->latin_extended->is()->alphanumeric());
        $this->assertTrue($this->latin_historic->is()->alphanumeric());
        $this->assertTrue($this->greek->is()->alphanumeric());
        $this->assertTrue($this->cyrillic->is()->alphanumeric());
        $this->assertTrue($this->arabic->is()->alphanumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsBlank ():void {

        $this->assertFalse($this->control->is()->blank());
        $this->assertTrue($this->blank->is()->blank());
        $this->assertFalse($this->latin_alphabet->is()->blank());
        $this->assertFalse($this->ascii_digit->is()->blank());
        $this->assertFalse($this->latin_extended->is()->blank());
        $this->assertFalse($this->latin_historic->is()->blank());
        $this->assertFalse($this->greek->is()->blank());
        $this->assertFalse($this->cyrillic->is()->blank());
        $this->assertFalse($this->arabic->is()->blank());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNumeric ():void {

        $this->assertFalse($this->control->is()->numeric());
        $this->assertFalse($this->punctuation->is()->numeric());
        $this->assertFalse($this->blank->is()->numeric());
        $this->assertFalse($this->latin_alphabet->is()->numeric());
        $this->assertTrue($this->ascii_digit->is()->numeric());
        $this->assertFalse($this->latin_extended->is()->numeric());
        $this->assertFalse($this->latin_historic->is()->numeric());
        $this->assertFalse($this->greek->is()->numeric());
        $this->assertFalse($this->cyrillic->is()->numeric());
        $this->assertFalse($this->arabic->is()->numeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsHexadecimal ():void {

        $this->assertFalse($this->control->is()->hexadecimal());
        $this->assertFalse($this->punctuation->is()->hexadecimal());
        $this->assertFalse($this->blank->is()->hexadecimal());
        $this->assertTrue($this->latin_alphabet->is()->hexadecimal());
        $this->assertTrue($this->ascii_digit->is()->hexadecimal());
        $this->assertFalse($this->latin_extended->is()->hexadecimal());
        $this->assertFalse($this->latin_historic->is()->hexadecimal());
        $this->assertFalse($this->greek->is()->hexadecimal());
        $this->assertFalse($this->cyrillic->is()->hexadecimal());
        $this->assertFalse($this->arabic->is()->hexadecimal());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsControl ():void {

        $this->assertTrue($this->control->is()->control());
        $this->assertFalse($this->punctuation->is()->control());
        $this->assertFalse($this->blank->is()->control());
        $this->assertFalse($this->latin_alphabet->is()->control());
        $this->assertFalse($this->ascii_digit->is()->control());
        $this->assertFalse($this->latin_extended->is()->control());
        $this->assertFalse($this->latin_historic->is()->control());
        $this->assertFalse($this->greek->is()->control());
        $this->assertFalse($this->cyrillic->is()->control());
        $this->assertFalse($this->arabic->is()->control());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsPrintable ():void {

        $this->assertFalse($this->control->is()->printable());
        $this->assertTrue($this->punctuation->is()->printable());
        $this->assertTrue($this->blank->is()->printable());
        $this->assertTrue($this->latin_alphabet->is()->printable());
        $this->assertTrue($this->ascii_digit->is()->printable());
        $this->assertTrue($this->latin_extended->is()->printable());
        $this->assertTrue($this->latin_historic->is()->printable());
        $this->assertTrue($this->greek->is()->printable());
        $this->assertTrue($this->cyrillic->is()->printable());
        $this->assertTrue($this->arabic->is()->printable());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsGraphical ():void {

        $this->assertFalse($this->control->is()->graphical());
        $this->assertTrue($this->punctuation->is()->graphical());
        $this->assertFalse($this->blank->is()->graphical());
        $this->assertTrue($this->latin_alphabet->is()->graphical());
        $this->assertTrue($this->ascii_digit->is()->graphical());
        $this->assertTrue($this->latin_extended->is()->graphical());
        $this->assertTrue($this->latin_historic->is()->graphical());
        $this->assertTrue($this->greek->is()->graphical());
        $this->assertTrue($this->cyrillic->is()->graphical());
        $this->assertTrue($this->arabic->is()->graphical());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsPunctuation ():void {

        $this->assertFalse($this->control->is()->punctuation());
        $this->assertTrue($this->punctuation->is()->punctuation());
        $this->assertFalse($this->blank->is()->punctuation());
        $this->assertFalse($this->latin_alphabet->is()->punctuation());
        $this->assertFalse($this->ascii_digit->is()->punctuation());
        $this->assertFalse($this->latin_extended->is()->punctuation());
        $this->assertFalse($this->latin_historic->is()->punctuation());
        $this->assertFalse($this->greek->is()->punctuation());
        $this->assertFalse($this->cyrillic->is()->punctuation());
        $this->assertFalse($this->arabic->is()->punctuation());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsASCII ():void {

        $this->assertTrue($this->control->is()->ascii());
        $this->assertTrue($this->punctuation->is()->ascii());
        $this->assertTrue($this->blank->is()->ascii());
        $this->assertTrue($this->latin_alphabet->is()->ascii());
        $this->assertTrue($this->ascii_digit->is()->ascii());
        $this->assertFalse($this->latin_extended->is()->ascii());
        $this->assertFalse($this->latin_historic->is()->ascii());
        $this->assertFalse($this->greek->is()->ascii());
        $this->assertFalse($this->cyrillic->is()->ascii());
        $this->assertFalse($this->arabic->is()->ascii());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEncoding ():void {

        $this->assertSame(Encoding::UTF_8, $this->control->encoding());
        $this->assertSame(Encoding::UTF_8, $this->punctuation->encoding());
        $this->assertSame(Encoding::UTF_8, $this->blank->encoding());
        $this->assertSame(Encoding::UTF_8, $this->latin_alphabet->encoding());
        $this->assertSame(Encoding::UTF_8, $this->ascii_digit->encoding());
        $this->assertSame(Encoding::UTF_8, $this->latin_extended->encoding());
        $this->assertSame(Encoding::UTF_8, $this->latin_historic->encoding());
        $this->assertSame(Encoding::UTF_8, $this->greek->encoding());
        $this->assertSame(Encoding::UTF_8, $this->cyrillic->encoding());
        $this->assertSame(Encoding::UTF_8, $this->arabic->encoding());

        $this->assertSame(
            $this->control->string(),
            $this->control->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->punctuation->string(),
            $this->punctuation->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->blank->string(),
            $this->blank->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->latin_alphabet->string(),
            $this->latin_alphabet->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->ascii_digit->string(),
            $this->ascii_digit->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->latin_extended->string(),
            $this->latin_extended->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->latin_historic->string(),
            $this->latin_historic->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->greek->string(),
            $this->greek->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->cyrillic->string(),
            $this->cyrillic->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->arabic->string(),
            $this->arabic->encoding(Encoding::ISO_8859_1)->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testToLower ():void {

        $this->assertSame('}', $this->punctuation->toLower()->string());
        $this->assertSame(' ', $this->blank->toLower()->string());
        $this->assertSame('f', $this->latin_alphabet->toLower()->string());
        $this->assertSame('4', $this->ascii_digit->toLower()->string());
        $this->assertSame('č', $this->latin_extended->toLower()->string());
        $this->assertSame('ʀ', $this->latin_historic->toLower()->string());
        $this->assertSame('ϸ', $this->greek->toLower()->string());
        $this->assertSame('ж', $this->cyrillic->toLower()->string());
        $this->assertSame('ۺ', $this->arabic->toLower()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testToUpper ():void {

        $this->assertSame('}', $this->punctuation->toUpper()->string());
        $this->assertSame(' ', $this->blank->toUpper()->string());
        $this->assertSame('F', $this->latin_alphabet->toUpper()->string());
        $this->assertSame('4', $this->ascii_digit->toUpper()->string());
        $this->assertSame('Č', $this->latin_extended->toUpper()->string());
        $this->assertSame('Ʀ', $this->latin_historic->toUpper()->string());
        $this->assertSame('Ϸ', $this->greek->toUpper()->string());
        $this->assertSame('Ж', $this->cyrillic->toUpper()->string());
        $this->assertSame('ۺ', $this->arabic->toUpper()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testString ():void {

        $this->assertSame('}', $this->punctuation->string());
        $this->assertSame(' ', $this->blank->string());
        $this->assertSame('F', $this->latin_alphabet->string());
        $this->assertSame('4', $this->ascii_digit->string());
        $this->assertSame('č', $this->latin_extended->string());
        $this->assertSame('Ʀ', $this->latin_historic->string());
        $this->assertSame('Ϸ', $this->greek->string());
        $this->assertSame('Ж', $this->cyrillic->string());
        $this->assertSame('ۺ', $this->arabic->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCodepoint ():void {

        $this->assertSame(
            Char::fromCodepoint(0)->codepoint(),
            $this->control->codepoint());

        $this->assertSame(
            Char::fromCodepoint(125)->codepoint(),
            $this->punctuation->codepoint());

        $this->assertSame(
            Char::fromCodepoint(32)->codepoint(),
            $this->blank->codepoint());

        $this->assertSame(
            Char::fromCodepoint(70)->codepoint(),
            $this->latin_alphabet->codepoint());

        $this->assertSame(
            Char::fromCodepoint(52)->codepoint(),
            $this->ascii_digit->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(269)->codepoint(),
            $this->latin_extended->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(422)->codepoint(),
            $this->latin_historic->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(1015)->codepoint(),
            $this->greek->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(1046)->codepoint(),
            $this->cyrillic->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(1786)->codepoint(),
            $this->arabic->codepoint()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testPrint ():void {

        $this->assertSame($this->control->string(), $this->control->__toString());
        $this->assertSame($this->punctuation->string(), $this->punctuation->__toString());
        $this->assertSame($this->blank->string(), $this->blank->__toString());
        $this->assertSame($this->latin_alphabet->string(), $this->latin_alphabet->__toString());
        $this->assertSame($this->ascii_digit->string(), $this->ascii_digit->__toString());
        $this->assertSame($this->latin_extended->string(), $this->latin_extended->__toString());
        $this->assertSame($this->latin_historic->string(), $this->latin_historic->__toString());
        $this->assertSame($this->greek->string(), $this->greek->__toString());
        $this->assertSame($this->cyrillic->string(), $this->cyrillic->__toString());
        $this->assertSame($this->arabic->string(), $this->arabic->__toString());

    }

}