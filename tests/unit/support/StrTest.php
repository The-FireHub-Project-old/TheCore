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
use FireHub\Core\Support\ {
    Char, Str
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends, DependsOnClass
};
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Test string high-level support class
 * @since 1.0.0
 */
#[CoversClass(Str::class)]
final class StrTest extends Base {

    public Str $control;
    public Str $empty;
    public Str $string;
    public Str $with_glue;
    public Str $lowercased;
    public Str $uppercased;
    public Str $mb;
    public Str $with_numbers;
    public Str $numbers;
    public Str $blank;
    public Str $punctuation;
    public Str $symbol;
    public Str $mixed;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[DependsOnClass(Char::class)]
    public function setUp ():void {

        $this->control = Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8);
        $this->empty = Str::from('', Encoding::UTF_8);
        $this->string = Str::from('FireHub', Encoding::UTF_8);
        $this->with_glue = Str::fromList(['F', 'i', 'r', 'e', 'H', 'u', 'b'], '-', Encoding::UTF_8);
        $this->lowercased = Str::from('firehub', Encoding::UTF_8);
        $this->uppercased = Str::from('FIREHUB', Encoding::UTF_8);
        $this->mb = Str::from('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', Encoding::UTF_8);
        $this->with_numbers = Str::from('FireHub123', Encoding::UTF_8);
        $this->numbers = Str::from('123', Encoding::UTF_8);
        $this->blank = Str::from('   ', Encoding::UTF_8);
        $this->punctuation = Str::from('}{:;', Encoding::UTF_8);
        $this->symbol = Str::from('~$%&', Encoding::UTF_8);
        $this->mixed = Str::from('}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string()), Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsEmpty ():void {

        $this->assertFalse($this->control->isEmpty());
        $this->assertTrue($this->empty->isEmpty());
        $this->assertFalse( $this->string->isEmpty());
        $this->assertFalse($this->with_glue->isEmpty());
        $this->assertFalse($this->lowercased->isEmpty());
        $this->assertFalse($this->uppercased->isEmpty());
        $this->assertFalse($this->mb->isEmpty());
        $this->assertFalse($this->with_numbers->isEmpty());
        $this->assertFalse($this->numbers->isEmpty());
        $this->assertFalse($this->blank->isEmpty());
        $this->assertFalse($this->punctuation->isEmpty());
        $this->assertFalse($this->symbol->isEmpty());
        $this->assertFalse($this->mixed->isEmpty());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsLower ():void {

        $this->assertFalse($this->control->isLower());
        $this->assertTrue($this->empty->isLower());
        $this->assertFalse( $this->string->isLower());
        $this->assertFalse($this->with_glue->isLower());
        $this->assertTrue($this->lowercased->isLower());
        $this->assertFalse($this->uppercased->isLower());
        $this->assertFalse($this->mb->isLower());
        $this->assertFalse($this->with_numbers->isLower());
        $this->assertFalse($this->numbers->isLower());
        $this->assertFalse($this->blank->isLower());
        $this->assertFalse($this->punctuation->isLower());
        $this->assertFalse($this->symbol->isLower());
        $this->assertFalse($this->mixed->isLower());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsUpper ():void {

        $this->assertFalse($this->control->isUpper());
        $this->assertTrue($this->empty->isUpper());
        $this->assertFalse( $this->string->isUpper());
        $this->assertFalse($this->with_glue->isUpper());
        $this->assertFalse($this->lowercased->isUpper());
        $this->assertTrue($this->uppercased->isUpper());
        $this->assertFalse($this->mb->isUpper());
        $this->assertFalse($this->with_numbers->isUpper());
        $this->assertFalse($this->numbers->isUpper());
        $this->assertFalse($this->blank->isUpper());
        $this->assertFalse($this->punctuation->isUpper());
        $this->assertFalse($this->symbol->isUpper());
        $this->assertFalse($this->mixed->isUpper());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsAlphabetic ():void {

        $this->assertFalse($this->control->isAlphabetic());
        $this->assertTrue($this->empty->isAlphabetic());
        $this->assertTrue( $this->string->isAlphabetic());
        $this->assertFalse($this->with_glue->isAlphabetic());
        $this->assertTrue($this->lowercased->isAlphabetic());
        $this->assertTrue($this->uppercased->isAlphabetic());
        $this->assertFalse($this->mb->isAlphabetic());
        $this->assertFalse($this->with_numbers->isAlphabetic());
        $this->assertFalse($this->numbers->isAlphabetic());
        $this->assertFalse($this->blank->isAlphabetic());
        $this->assertFalse($this->punctuation->isAlphabetic());
        $this->assertFalse($this->symbol->isAlphabetic());
        $this->assertFalse($this->mixed->isAlphabetic());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsAlphanumeric ():void {

        $this->assertFalse($this->control->isAlphanumeric());
        $this->assertTrue($this->empty->isAlphanumeric());
        $this->assertTrue( $this->string->isAlphanumeric());
        $this->assertFalse($this->with_glue->isAlphanumeric());
        $this->assertTrue($this->lowercased->isAlphanumeric());
        $this->assertTrue($this->uppercased->isAlphanumeric());
        $this->assertFalse($this->mb->isAlphanumeric());
        $this->assertTrue($this->with_numbers->isAlphanumeric());
        $this->assertTrue($this->numbers->isAlphanumeric());
        $this->assertFalse($this->blank->isAlphanumeric());
        $this->assertFalse($this->punctuation->isAlphanumeric());
        $this->assertFalse($this->symbol->isAlphanumeric());
        $this->assertFalse($this->mixed->isAlphanumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsBlank ():void {

        $this->assertFalse($this->control->isBlank());
        $this->assertTrue($this->empty->isBlank());
        $this->assertFalse( $this->string->isBlank());
        $this->assertFalse($this->with_glue->isBlank());
        $this->assertFalse($this->lowercased->isBlank());
        $this->assertFalse($this->uppercased->isBlank());
        $this->assertFalse($this->mb->isBlank());
        $this->assertFalse($this->with_numbers->isBlank());
        $this->assertFalse($this->numbers->isBlank());
        $this->assertTrue($this->blank->isBlank());
        $this->assertFalse($this->punctuation->isBlank());
        $this->assertFalse($this->symbol->isBlank());
        $this->assertFalse($this->mixed->isBlank());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsNumeric ():void {

        $this->assertFalse($this->control->isNumeric());
        $this->assertTrue($this->empty->isNumeric());
        $this->assertFalse( $this->string->isNumeric());
        $this->assertFalse($this->with_glue->isNumeric());
        $this->assertFalse($this->lowercased->isNumeric());
        $this->assertFalse($this->uppercased->isNumeric());
        $this->assertFalse($this->mb->isNumeric());
        $this->assertFalse($this->with_numbers->isNumeric());
        $this->assertTrue($this->numbers->isNumeric());
        $this->assertFalse($this->blank->isNumeric());
        $this->assertFalse($this->punctuation->isNumeric());
        $this->assertFalse($this->symbol->isNumeric());
        $this->assertFalse($this->mixed->isNumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsHexadecimal ():void {

        $this->assertFalse($this->control->isHexadecimal());
        $this->assertTrue($this->empty->isHexadecimal());
        $this->assertFalse( $this->string->isHexadecimal());
        $this->assertFalse($this->with_glue->isHexadecimal());
        $this->assertFalse($this->lowercased->isHexadecimal());
        $this->assertFalse($this->uppercased->isHexadecimal());
        $this->assertFalse($this->mb->isHexadecimal());
        $this->assertFalse($this->with_numbers->isHexadecimal());
        $this->assertTrue($this->numbers->isHexadecimal());
        $this->assertFalse($this->blank->isHexadecimal());
        $this->assertFalse($this->punctuation->isHexadecimal());
        $this->assertFalse($this->symbol->isHexadecimal());
        $this->assertFalse($this->mixed->isHexadecimal());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsControl ():void {

        $this->assertTrue($this->control->isControl());
        $this->assertTrue($this->empty->isControl());
        $this->assertFalse( $this->string->isControl());
        $this->assertFalse($this->with_glue->isControl());
        $this->assertFalse($this->lowercased->isControl());
        $this->assertFalse($this->uppercased->isControl());
        $this->assertFalse($this->mb->isControl());
        $this->assertFalse($this->with_numbers->isControl());
        $this->assertFalse($this->numbers->isControl());
        $this->assertFalse($this->blank->isControl());
        $this->assertFalse($this->punctuation->isControl());
        $this->assertFalse($this->symbol->isControl());
        $this->assertFalse($this->mixed->isControl());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsPrintable ():void {

        $this->assertFalse($this->control->isPrintable());
        $this->assertTrue($this->empty->isPrintable());
        $this->assertTrue( $this->string->isPrintable());
        $this->assertTrue($this->with_glue->isPrintable());
        $this->assertTrue($this->lowercased->isPrintable());
        $this->assertTrue($this->uppercased->isPrintable());
        $this->assertTrue($this->mb->isPrintable());
        $this->assertTrue($this->with_numbers->isPrintable());
        $this->assertTrue($this->numbers->isPrintable());
        $this->assertTrue($this->blank->isPrintable());
        $this->assertTrue($this->punctuation->isPrintable());
        $this->assertTrue($this->symbol->isPrintable());
        $this->assertFalse($this->mixed->isPrintable());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsGraphical ():void {

        $this->assertFalse($this->control->isGraphical());
        $this->assertTrue($this->empty->isGraphical());
        $this->assertTrue( $this->string->isGraphical());
        $this->assertTrue($this->with_glue->isGraphical());
        $this->assertTrue($this->lowercased->isGraphical());
        $this->assertTrue($this->uppercased->isGraphical());
        $this->assertFalse($this->mb->isGraphical());
        $this->assertTrue($this->with_numbers->isGraphical());
        $this->assertTrue($this->numbers->isGraphical());
        $this->assertFalse($this->blank->isGraphical());
        $this->assertTrue($this->punctuation->isGraphical());
        $this->assertTrue($this->symbol->isGraphical());
        $this->assertFalse($this->mixed->isGraphical());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsPunctuation ():void {

        $this->assertFalse($this->control->isPunctuation());
        $this->assertTrue($this->empty->isPunctuation());
        $this->assertFalse( $this->string->isPunctuation());
        $this->assertFalse($this->with_glue->isPunctuation());
        $this->assertFalse($this->lowercased->isPunctuation());
        $this->assertFalse($this->uppercased->isPunctuation());
        $this->assertFalse($this->mb->isPunctuation());
        $this->assertFalse($this->with_numbers->isPunctuation());
        $this->assertFalse($this->numbers->isPunctuation());
        $this->assertFalse($this->blank->isPunctuation());
        $this->assertTrue($this->punctuation->isPunctuation());
        $this->assertFalse($this->symbol->isPunctuation());
        $this->assertFalse($this->mixed->isPunctuation());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsASCII ():void {

        $this->assertTrue($this->control->isASCII());
        $this->assertTrue($this->empty->isASCII());
        $this->assertTrue( $this->string->isASCII());
        $this->assertTrue($this->with_glue->isASCII());
        $this->assertTrue($this->lowercased->isASCII());
        $this->assertTrue($this->uppercased->isASCII());
        $this->assertFalse($this->mb->isASCII());
        $this->assertTrue($this->with_numbers->isASCII());
        $this->assertTrue($this->numbers->isASCII());
        $this->assertTrue($this->blank->isASCII());
        $this->assertTrue($this->punctuation->isASCII());
        $this->assertTrue($this->symbol->isASCII());
        $this->assertTrue($this->mixed->isASCII());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsCapitalized ():void {

        $this->assertFalse($this->control->isCapitalized());
        $this->assertFalse($this->empty->isCapitalized());
        $this->assertTrue( $this->string->isCapitalized());
        $this->assertTrue($this->with_glue->isCapitalized());
        $this->assertFalse($this->lowercased->isCapitalized());
        $this->assertTrue($this->uppercased->isCapitalized());
        $this->assertFalse($this->mb->isCapitalized());
        $this->assertTrue($this->with_numbers->isCapitalized());
        $this->assertFalse($this->numbers->isCapitalized());
        $this->assertFalse($this->blank->isCapitalized());
        $this->assertFalse($this->punctuation->isCapitalized());
        $this->assertFalse($this->symbol->isCapitalized());
        $this->assertFalse($this->mixed->isCapitalized());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasLower ():void {

        $this->assertFalse($this->control->hasLower());
        $this->assertFalse($this->empty->hasLower());
        $this->assertTrue( $this->string->hasLower());
        $this->assertTrue($this->with_glue->hasLower());
        $this->assertTrue($this->lowercased->hasLower());
        $this->assertFalse($this->uppercased->hasLower());
        $this->assertTrue($this->mb->hasLower());
        $this->assertTrue($this->with_numbers->hasLower());
        $this->assertFalse($this->numbers->hasLower());
        $this->assertFalse($this->blank->hasLower());
        $this->assertFalse($this->punctuation->hasLower());
        $this->assertFalse($this->symbol->hasLower());
        $this->assertFalse($this->mixed->hasLower());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasUpper ():void {

        $this->assertFalse($this->control->hasUpper());
        $this->assertFalse($this->empty->hasUpper());
        $this->assertTrue( $this->string->hasUpper());
        $this->assertTrue($this->with_glue->hasUpper());
        $this->assertFalse($this->lowercased->hasUpper());
        $this->assertTrue($this->uppercased->hasUpper());
        $this->assertTrue($this->mb->hasUpper());
        $this->assertTrue($this->with_numbers->hasUpper());
        $this->assertFalse($this->numbers->hasUpper());
        $this->assertFalse($this->blank->hasUpper());
        $this->assertFalse($this->punctuation->hasUpper());
        $this->assertFalse($this->symbol->hasUpper());
        $this->assertFalse($this->mixed->hasUpper());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasAlphabetic ():void {

        $this->assertFalse($this->control->hasAlphabetic());
        $this->assertFalse($this->empty->hasAlphabetic());
        $this->assertTrue( $this->string->hasAlphabetic());
        $this->assertTrue($this->with_glue->hasAlphabetic());
        $this->assertTrue($this->lowercased->hasAlphabetic());
        $this->assertTrue($this->uppercased->hasAlphabetic());
        $this->assertTrue($this->mb->hasAlphabetic());
        $this->assertTrue($this->with_numbers->hasAlphabetic());
        $this->assertFalse($this->numbers->hasAlphabetic());
        $this->assertFalse($this->blank->hasAlphabetic());
        $this->assertFalse($this->punctuation->hasAlphabetic());
        $this->assertFalse($this->symbol->hasAlphabetic());
        $this->assertFalse($this->mixed->hasAlphabetic());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasAlphanumeric ():void {

        $this->assertFalse($this->control->hasAlphanumeric());
        $this->assertFalse($this->empty->hasAlphanumeric());
        $this->assertTrue( $this->string->hasAlphanumeric());
        $this->assertTrue($this->with_glue->hasAlphanumeric());
        $this->assertTrue($this->lowercased->hasAlphanumeric());
        $this->assertTrue($this->uppercased->hasAlphanumeric());
        $this->assertTrue($this->mb->hasAlphanumeric());
        $this->assertTrue($this->with_numbers->hasAlphanumeric());
        $this->assertTrue($this->numbers->hasAlphanumeric());
        $this->assertFalse($this->blank->hasAlphanumeric());
        $this->assertFalse($this->punctuation->hasAlphanumeric());
        $this->assertFalse($this->symbol->hasAlphanumeric());
        $this->assertFalse($this->mixed->hasAlphanumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasBlank ():void {

        $this->assertFalse($this->control->hasBlank());
        $this->assertFalse($this->empty->hasBlank());
        $this->assertFalse( $this->string->hasBlank());
        $this->assertFalse($this->with_glue->hasBlank());
        $this->assertFalse($this->lowercased->hasBlank());
        $this->assertFalse($this->uppercased->hasBlank());
        $this->assertTrue($this->mb->hasBlank());
        $this->assertFalse($this->with_numbers->hasBlank());
        $this->assertFalse($this->numbers->hasBlank());
        $this->assertTrue($this->blank->hasBlank());
        $this->assertFalse($this->punctuation->hasBlank());
        $this->assertFalse($this->symbol->hasBlank());
        $this->assertFalse($this->mixed->hasBlank());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasNumeric ():void {

        $this->assertFalse($this->control->hasNumeric());
        $this->assertFalse($this->empty->hasNumeric());
        $this->assertFalse( $this->string->hasNumeric());
        $this->assertFalse($this->with_glue->hasNumeric());
        $this->assertFalse($this->lowercased->hasNumeric());
        $this->assertFalse($this->uppercased->hasNumeric());
        $this->assertFalse($this->mb->hasNumeric());
        $this->assertTrue($this->with_numbers->hasNumeric());
        $this->assertTrue($this->numbers->hasNumeric());
        $this->assertFalse($this->blank->hasNumeric());
        $this->assertFalse($this->punctuation->hasNumeric());
        $this->assertFalse($this->symbol->hasNumeric());
        $this->assertFalse($this->mixed->hasNumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasHexadecimal ():void {

        $this->assertFalse($this->control->hasHexadecimal());
        $this->assertFalse($this->empty->hasHexadecimal());
        $this->assertTrue( $this->string->hasHexadecimal());
        $this->assertTrue($this->with_glue->hasHexadecimal());
        $this->assertTrue($this->lowercased->hasHexadecimal());
        $this->assertTrue($this->uppercased->hasHexadecimal());
        $this->assertFalse($this->mb->hasHexadecimal());
        $this->assertTrue($this->with_numbers->hasHexadecimal());
        $this->assertTrue($this->numbers->hasHexadecimal());
        $this->assertFalse($this->blank->hasHexadecimal());
        $this->assertFalse($this->punctuation->hasHexadecimal());
        $this->assertFalse($this->symbol->hasHexadecimal());
        $this->assertFalse($this->mixed->hasHexadecimal());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasControl ():void {

        $this->assertTrue($this->control->hasControl());
        $this->assertFalse($this->empty->hasControl());
        $this->assertFalse( $this->string->hasControl());
        $this->assertFalse($this->with_glue->hasControl());
        $this->assertFalse($this->lowercased->hasControl());
        $this->assertFalse($this->uppercased->hasControl());
        $this->assertFalse($this->mb->hasControl());
        $this->assertFalse($this->with_numbers->hasControl());
        $this->assertFalse($this->numbers->hasControl());
        $this->assertFalse($this->blank->hasControl());
        $this->assertFalse($this->punctuation->hasControl());
        $this->assertFalse($this->symbol->hasControl());
        $this->assertTrue($this->mixed->hasControl());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasPrintable ():void {

        $this->assertFalse($this->control->hasPrintable());
        $this->assertFalse($this->empty->hasPrintable());
        $this->assertTrue( $this->string->hasPrintable());
        $this->assertTrue($this->with_glue->hasPrintable());
        $this->assertTrue($this->lowercased->hasPrintable());
        $this->assertTrue($this->uppercased->hasPrintable());
        $this->assertTrue($this->mb->hasPrintable());
        $this->assertTrue($this->with_numbers->hasPrintable());
        $this->assertTrue($this->numbers->hasPrintable());
        $this->assertTrue($this->blank->hasPrintable());
        $this->assertTrue($this->punctuation->hasPrintable());
        $this->assertTrue($this->symbol->hasPrintable());
        $this->assertTrue($this->mixed->hasPrintable());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasGraphical ():void {

        $this->assertFalse($this->control->hasGraphical());
        $this->assertFalse($this->empty->hasGraphical());
        $this->assertTrue( $this->string->hasGraphical());
        $this->assertTrue($this->with_glue->hasGraphical());
        $this->assertTrue($this->lowercased->hasGraphical());
        $this->assertTrue($this->uppercased->hasGraphical());
        $this->assertTrue($this->mb->hasGraphical());
        $this->assertTrue($this->with_numbers->hasGraphical());
        $this->assertTrue($this->numbers->hasGraphical());
        $this->assertFalse($this->blank->hasGraphical());
        $this->assertTrue($this->punctuation->hasGraphical());
        $this->assertTrue($this->symbol->hasGraphical());
        $this->assertTrue($this->mixed->hasGraphical());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasPunctuation ():void {

        $this->assertFalse($this->control->hasPunctuation());
        $this->assertFalse($this->empty->hasPunctuation());
        $this->assertFalse( $this->string->hasPunctuation());
        $this->assertTrue($this->with_glue->hasPunctuation());
        $this->assertFalse($this->lowercased->hasPunctuation());
        $this->assertFalse($this->uppercased->hasPunctuation());
        $this->assertFalse($this->mb->hasPunctuation());
        $this->assertFalse($this->with_numbers->hasPunctuation());
        $this->assertFalse($this->numbers->hasPunctuation());
        $this->assertFalse($this->blank->hasPunctuation());
        $this->assertTrue($this->punctuation->hasPunctuation());
        $this->assertTrue($this->symbol->hasPunctuation());
        $this->assertTrue($this->mixed->hasPunctuation());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testString ():void {

        $this->assertSame(Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string())->string(), $this->control->string());
        $this->assertSame('', $this->empty->string());
        $this->assertSame('FireHub', $this->string->string());
        $this->assertSame('F-i-r-e-H-u-b', $this->with_glue->string());
        $this->assertSame('firehub', $this->lowercased->string());
        $this->assertSame('FIREHUB', $this->uppercased->string());
        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', $this->mb->string());
        $this->assertSame('FireHub123', $this->with_numbers->string());
        $this->assertSame('123', $this->numbers->string());
        $this->assertSame('   ', $this->blank->string());
        $this->assertSame('}{:;', $this->punctuation->string());
        $this->assertSame('~$%&', $this->symbol->string());
        $this->assertSame('}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string()), $this->mixed->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEncoding ():void {

        $this->assertSame(Encoding::UTF_8, $this->control->encoding());
        $this->assertSame(Encoding::UTF_8, $this->empty->encoding());
        $this->assertSame(Encoding::UTF_8, $this->string->encoding());
        $this->assertSame(Encoding::UTF_8, $this->with_glue->encoding());
        $this->assertSame(Encoding::UTF_8, $this->lowercased->encoding());
        $this->assertSame(Encoding::UTF_8, $this->uppercased->encoding());
        $this->assertSame(Encoding::UTF_8, $this->mb->encoding());
        $this->assertSame(Encoding::UTF_8, $this->with_numbers->encoding());
        $this->assertSame(Encoding::UTF_8, $this->numbers->encoding());
        $this->assertSame(Encoding::UTF_8, $this->blank->encoding());
        $this->assertSame(Encoding::UTF_8, $this->punctuation->encoding());
        $this->assertSame(Encoding::UTF_8, $this->symbol->encoding());
        $this->assertSame(Encoding::UTF_8, $this->mixed->encoding());

        $this->assertSame(
            $this->control->string(),
            $this->control->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->empty->string(),
            $this->empty->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->string->string(),
            $this->string->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->with_glue->string(),
            $this->with_glue->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->lowercased->string(),
            $this->lowercased->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->uppercased->string(),
            $this->uppercased->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->mb->string(),
            $this->mb->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->with_numbers->string(),
            $this->with_numbers->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->numbers->string(),
            $this->numbers->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->blank->string(),
            $this->blank->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->punctuation->string(),
            $this->punctuation->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->symbol->string(),
            $this->symbol->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->mixed->string(),
            $this->mixed->encoding(Encoding::ISO_8859_1)->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testCarry ():void {

        $this->assertSame('', $this->control->carry(2, 3)->string());
        $this->assertSame('', $this->empty->carry(2, 3)->string());
        $this->assertSame('reH', $this->string->carry(2, 3)->string());
        $this->assertSame('i-r', $this->with_glue->carry(2, 3)->string());
        $this->assertSame('reh', $this->lowercased->carry(2, 3)->string());
        $this->assertSame('REH', $this->uppercased->carry(2, 3)->string());
        $this->assertSame('čćž', $this->mb->carry(2, 3)->string());
        $this->assertSame('reH', $this->with_numbers->carry(2, 3)->string());
        $this->assertSame('3', $this->numbers->carry(2, 3)->string());
        $this->assertSame(' ', $this->blank->carry(2, 3)->string());
        $this->assertSame(':;', $this->punctuation->carry(2, 3)->string());
        $this->assertSame('%&', $this->symbol->carry(2, 3)->string());
        $this->assertSame(
            Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string())->string(),
            $this->mixed->carry(2, 3)->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testCarryWithoutLength ():void {

        $this->assertSame('reHub', $this->string->carry(2)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testCarryWithNegativeStart ():void {

        $this->assertSame('Hu', $this->string->carry(-3, 2)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testCarryWithNegativeStartAndWithoutLength ():void {

        $this->assertSame('eHub', $this->string->carry(-4)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testPrint ():void {

        $this->assertSame($this->control->string(), $this->control->__toString());
        $this->assertSame($this->empty->string(), $this->empty->__toString());
        $this->assertSame($this->string->string(), $this->string->__toString());
        $this->assertSame($this->with_glue->string(), $this->with_glue->__toString());
        $this->assertSame($this->lowercased->string(), $this->lowercased->__toString());
        $this->assertSame($this->uppercased->string(), $this->uppercased->__toString());
        $this->assertSame($this->mb->string(), $this->mb->__toString());
        $this->assertSame($this->with_numbers->string(), $this->with_numbers->__toString());
        $this->assertSame($this->numbers->string(), $this->numbers->__toString());
        $this->assertSame($this->blank->string(), $this->blank->__toString());
        $this->assertSame($this->punctuation->string(), $this->punctuation->__toString());
        $this->assertSame($this->symbol->string(), $this->symbol->__toString());
        $this->assertSame($this->mixed->string(), $this->mixed->__toString());

    }

}