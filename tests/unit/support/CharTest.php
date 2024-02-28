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
    public Char $symbol;
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
        $this->symbol = Char::from('♥', Encoding::UTF_8);
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

        $this->assertFalse($this->control->isLower());
        $this->assertFalse($this->punctuation->isLower());
        $this->assertFalse($this->blank->isLower());
        $this->assertFalse($this->latin_alphabet->isLower());
        $this->assertFalse($this->ascii_digit->isLower());
        $this->assertFalse($this->symbol->isLower());
        $this->assertTrue($this->latin_extended->isLower());
        $this->assertFalse($this->latin_historic->isLower());
        $this->assertFalse($this->greek->isLower());
        $this->assertFalse($this->cyrillic->isLower());
        $this->assertFalse($this->arabic->isLower());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsUpper ():void {

        $this->assertFalse($this->control->isUpper());
        $this->assertFalse($this->punctuation->isUpper());
        $this->assertFalse($this->blank->isUpper());
        $this->assertTrue($this->latin_alphabet->isUpper());
        $this->assertFalse($this->ascii_digit->isUpper());
        $this->assertFalse($this->symbol->isUpper());
        $this->assertFalse($this->latin_extended->isUpper());
        $this->assertTrue($this->latin_historic->isUpper());
        $this->assertTrue($this->greek->isUpper());
        $this->assertTrue($this->cyrillic->isUpper());
        $this->assertFalse($this->arabic->isUpper());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsAlphabetic ():void {

        $this->assertFalse($this->control->isAlphabetic());
        $this->assertFalse($this->punctuation->isAlphabetic());
        $this->assertFalse($this->blank->isAlphabetic());
        $this->assertTrue($this->latin_alphabet->isAlphabetic());
        $this->assertFalse($this->ascii_digit->isAlphabetic());
        $this->assertFalse($this->symbol->isAlphabetic());
        $this->assertTrue($this->latin_extended->isAlphabetic());
        $this->assertTrue($this->latin_historic->isAlphabetic());
        $this->assertTrue($this->greek->isAlphabetic());
        $this->assertTrue($this->cyrillic->isAlphabetic());
        $this->assertTrue($this->arabic->isAlphabetic());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsAlphanumeric ():void {

        $this->assertFalse($this->control->isAlphanumeric());
        $this->assertFalse($this->punctuation->isAlphanumeric());
        $this->assertFalse($this->blank->isAlphanumeric());
        $this->assertTrue($this->latin_alphabet->isAlphanumeric());
        $this->assertTrue($this->ascii_digit->isAlphanumeric());
        $this->assertFalse($this->symbol->isAlphanumeric());
        $this->assertTrue($this->latin_extended->isAlphanumeric());
        $this->assertTrue($this->latin_historic->isAlphanumeric());
        $this->assertTrue($this->greek->isAlphanumeric());
        $this->assertTrue($this->cyrillic->isAlphanumeric());
        $this->assertTrue($this->arabic->isAlphanumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsBlank ():void {

        $this->assertFalse($this->control->isBlank());
        $this->assertTrue($this->blank->isBlank());
        $this->assertFalse($this->latin_alphabet->isBlank());
        $this->assertFalse($this->ascii_digit->isBlank());
        $this->assertFalse($this->symbol->isBlank());
        $this->assertFalse($this->latin_extended->isBlank());
        $this->assertFalse($this->latin_historic->isBlank());
        $this->assertFalse($this->greek->isBlank());
        $this->assertFalse($this->cyrillic->isBlank());
        $this->assertFalse($this->arabic->isBlank());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNumeric ():void {

        $this->assertFalse($this->control->isNumeric());
        $this->assertFalse($this->punctuation->isNumeric());
        $this->assertFalse($this->blank->isNumeric());
        $this->assertFalse($this->latin_alphabet->isNumeric());
        $this->assertTrue($this->ascii_digit->isNumeric());
        $this->assertFalse($this->symbol->isNumeric());
        $this->assertFalse($this->latin_extended->isNumeric());
        $this->assertFalse($this->latin_historic->isNumeric());
        $this->assertFalse($this->greek->isNumeric());
        $this->assertFalse($this->cyrillic->isNumeric());
        $this->assertFalse($this->arabic->isNumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsHexadecimal ():void {

        $this->assertFalse($this->control->isHexadecimal());
        $this->assertFalse($this->punctuation->isHexadecimal());
        $this->assertFalse($this->blank->isHexadecimal());
        $this->assertTrue($this->latin_alphabet->isHexadecimal());
        $this->assertTrue($this->ascii_digit->isHexadecimal());
        $this->assertFalse($this->symbol->isHexadecimal());
        $this->assertFalse($this->latin_extended->isHexadecimal());
        $this->assertFalse($this->latin_historic->isHexadecimal());
        $this->assertFalse($this->greek->isHexadecimal());
        $this->assertFalse($this->cyrillic->isHexadecimal());
        $this->assertFalse($this->arabic->isHexadecimal());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsControl ():void {

        $this->assertTrue($this->control->isControl());
        $this->assertFalse($this->punctuation->isControl());
        $this->assertFalse($this->blank->isControl());
        $this->assertFalse($this->latin_alphabet->isControl());
        $this->assertFalse($this->ascii_digit->isControl());
        $this->assertFalse($this->symbol->isControl());
        $this->assertFalse($this->latin_extended->isControl());
        $this->assertFalse($this->latin_historic->isControl());
        $this->assertFalse($this->greek->isControl());
        $this->assertFalse($this->cyrillic->isControl());
        $this->assertFalse($this->arabic->isControl());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsPrintable ():void {

        $this->assertFalse($this->control->isPrintable());
        $this->assertTrue($this->punctuation->isPrintable());
        $this->assertTrue($this->blank->isPrintable());
        $this->assertTrue($this->latin_alphabet->isPrintable());
        $this->assertTrue($this->ascii_digit->isPrintable());
        $this->assertTrue($this->symbol->isPrintable());
        $this->assertTrue($this->latin_extended->isPrintable());
        $this->assertTrue($this->latin_historic->isPrintable());
        $this->assertTrue($this->greek->isPrintable());
        $this->assertTrue($this->cyrillic->isPrintable());
        $this->assertTrue($this->arabic->isPrintable());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsGraphical ():void {

        $this->assertFalse($this->control->isGraphical());
        $this->assertTrue($this->punctuation->isGraphical());
        $this->assertFalse($this->blank->isGraphical());
        $this->assertTrue($this->latin_alphabet->isGraphical());
        $this->assertTrue($this->ascii_digit->isGraphical());
        $this->assertTrue($this->symbol->isGraphical());
        $this->assertTrue($this->latin_extended->isGraphical());
        $this->assertTrue($this->latin_historic->isGraphical());
        $this->assertTrue($this->greek->isGraphical());
        $this->assertTrue($this->cyrillic->isGraphical());
        $this->assertTrue($this->arabic->isGraphical());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsPunctuation ():void {

        $this->assertFalse($this->control->isPunctuation());
        $this->assertTrue($this->punctuation->isPunctuation());
        $this->assertFalse($this->blank->isPunctuation());
        $this->assertFalse($this->latin_alphabet->isPunctuation());
        $this->assertFalse($this->ascii_digit->isPunctuation());
        $this->assertFalse($this->symbol->isPunctuation());
        $this->assertFalse($this->latin_extended->isPunctuation());
        $this->assertFalse($this->latin_historic->isPunctuation());
        $this->assertFalse($this->greek->isPunctuation());
        $this->assertFalse($this->cyrillic->isPunctuation());
        $this->assertFalse($this->arabic->isPunctuation());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsSymbol ():void {

        $this->assertFalse($this->control->isSymbol());
        $this->assertTrue($this->punctuation->isSymbol());
        $this->assertFalse($this->blank->isSymbol());
        $this->assertFalse($this->latin_alphabet->isSymbol());
        $this->assertFalse($this->ascii_digit->isSymbol());
        $this->assertTrue($this->symbol->isSymbol());
        $this->assertFalse($this->latin_extended->isSymbol());
        $this->assertFalse($this->latin_historic->isSymbol());
        $this->assertFalse($this->greek->isSymbol());
        $this->assertFalse($this->cyrillic->isSymbol());
        $this->assertFalse($this->arabic->isSymbol());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsASCII ():void {

        $this->assertTrue($this->control->isASCII());
        $this->assertTrue($this->punctuation->isASCII());
        $this->assertTrue($this->blank->isASCII());
        $this->assertTrue($this->latin_alphabet->isASCII());
        $this->assertTrue($this->ascii_digit->isASCII());
        $this->assertFalse($this->symbol->isASCII());
        $this->assertFalse($this->latin_extended->isASCII());
        $this->assertFalse($this->latin_historic->isASCII());
        $this->assertFalse($this->greek->isASCII());
        $this->assertFalse($this->cyrillic->isASCII());
        $this->assertFalse($this->arabic->isASCII());

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
        $this->assertSame(Encoding::UTF_8, $this->symbol->encoding());
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
            $this->symbol->string(),
            $this->symbol->encoding(Encoding::ISO_8859_1)->string()
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
        $this->assertSame('♥', $this->symbol->toLower()->string());
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
        $this->assertSame('♥', $this->symbol->toUpper()->string());
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
        $this->assertSame('♥', $this->symbol->string());
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
            Char::fromCodepoint(9829)->codepoint(),
            $this->symbol->codepoint()
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
        $this->assertSame($this->symbol->string(), $this->symbol->__toString());
        $this->assertSame($this->latin_extended->string(), $this->latin_extended->__toString());
        $this->assertSame($this->latin_historic->string(), $this->latin_historic->__toString());
        $this->assertSame($this->greek->string(), $this->greek->__toString());
        $this->assertSame($this->cyrillic->string(), $this->cyrillic->__toString());
        $this->assertSame($this->arabic->string(), $this->arabic->__toString());

    }

}