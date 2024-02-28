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

namespace support\strings;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Char;
use FireHub\Core\Support\Strings\StringIs;
use PHPUnit\Framework\Attributes\ {
    CoversClass, DependsOnClass
};
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Test strings checker class
 * @since 1.0.0
 */
#[CoversClass(StringIs::class)]
final class StringIsTest extends Base {

    public StringIs $control;
    public StringIs $empty;
    public StringIs $string;
    public StringIs $lowercased;
    public StringIs $uppercased;
    public StringIs $mb;
    public StringIs $with_numbers;
    public StringIs $numbers;
    public StringIs $blank;
    public StringIs $punctuation;
    public StringIs $symbol;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[DependsOnClass(Char::class)]
    public function setUp ():void {

        $this->control = new StringIs(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8);
        $this->empty = new StringIs('', Encoding::UTF_8);
        $this->string = new StringIs('FireHub', Encoding::UTF_8);
        $this->lowercased = new StringIs('firehub', Encoding::UTF_8);
        $this->uppercased = new StringIs('FIREHUB', Encoding::UTF_8);
        $this->mb = new StringIs('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', Encoding::UTF_8);
        $this->with_numbers = new StringIs('FireHub123', Encoding::UTF_8);
        $this->numbers = new StringIs('123', Encoding::UTF_8);
        $this->blank = new StringIs('   ', Encoding::UTF_8);
        $this->punctuation = new StringIs('}{:;', Encoding::UTF_8);
        $this->symbol = new StringIs('♥≠☺', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEmpty ():void {

        $this->assertFalse($this->control->empty());
        $this->assertTrue($this->empty->empty());
        $this->assertFalse( $this->string->empty());
        $this->assertFalse($this->lowercased->empty());
        $this->assertFalse($this->uppercased->empty());
        $this->assertFalse($this->mb->empty());
        $this->assertFalse($this->with_numbers->empty());
        $this->assertFalse($this->numbers->empty());
        $this->assertFalse($this->blank->empty());
        $this->assertFalse($this->punctuation->empty());
        $this->assertFalse($this->symbol->empty());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLower ():void {

        $this->assertFalse($this->control->lower());
        $this->assertTrue($this->empty->lower());
        $this->assertFalse( $this->string->lower());
        $this->assertTrue($this->lowercased->lower());
        $this->assertFalse($this->uppercased->lower());
        $this->assertFalse($this->mb->lower());
        $this->assertFalse($this->with_numbers->lower());
        $this->assertFalse($this->numbers->lower());
        $this->assertFalse($this->blank->lower());
        $this->assertFalse($this->punctuation->lower());
        $this->assertFalse($this->symbol->lower());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUpper ():void {

        $this->assertFalse($this->control->upper());
        $this->assertTrue($this->empty->upper());
        $this->assertFalse( $this->string->upper());
        $this->assertFalse($this->lowercased->upper());
        $this->assertTrue($this->uppercased->upper());
        $this->assertFalse($this->mb->upper());
        $this->assertFalse($this->with_numbers->upper());
        $this->assertFalse($this->numbers->upper());
        $this->assertFalse($this->blank->upper());
        $this->assertFalse($this->punctuation->upper());
        $this->assertFalse($this->symbol->upper());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAlphabetic ():void {

        $this->assertFalse($this->control->alphabetic());
        $this->assertTrue($this->empty->alphabetic());
        $this->assertTrue( $this->string->alphabetic());
        $this->assertTrue($this->lowercased->alphabetic());
        $this->assertTrue($this->uppercased->alphabetic());
        $this->assertFalse($this->mb->alphabetic());
        $this->assertFalse($this->with_numbers->alphabetic());
        $this->assertFalse($this->numbers->alphabetic());
        $this->assertFalse($this->blank->alphabetic());
        $this->assertFalse($this->punctuation->alphabetic());
        $this->assertFalse($this->symbol->alphabetic());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAlphanumeric ():void {

        $this->assertFalse($this->control->alphanumeric());
        $this->assertTrue($this->empty->alphanumeric());
        $this->assertTrue( $this->string->alphanumeric());
        $this->assertTrue($this->lowercased->alphanumeric());
        $this->assertTrue($this->uppercased->alphanumeric());
        $this->assertFalse($this->mb->alphanumeric());
        $this->assertTrue($this->with_numbers->alphanumeric());
        $this->assertTrue($this->numbers->alphanumeric());
        $this->assertFalse($this->blank->alphanumeric());
        $this->assertFalse($this->punctuation->alphanumeric());
        $this->assertFalse($this->symbol->alphanumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBlank ():void {

        $this->assertFalse($this->control->blank());
        $this->assertTrue($this->empty->blank());
        $this->assertFalse( $this->string->blank());
        $this->assertFalse($this->lowercased->blank());
        $this->assertFalse($this->uppercased->blank());
        $this->assertFalse($this->mb->blank());
        $this->assertFalse($this->with_numbers->blank());
        $this->assertFalse($this->numbers->blank());
        $this->assertTrue($this->blank->blank());
        $this->assertFalse($this->punctuation->blank());
        $this->assertFalse($this->symbol->blank());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testNumeric ():void {

        $this->assertFalse($this->control->numeric());
        $this->assertTrue($this->empty->numeric());
        $this->assertFalse( $this->string->numeric());
        $this->assertFalse($this->lowercased->numeric());
        $this->assertFalse($this->uppercased->numeric());
        $this->assertFalse($this->mb->numeric());
        $this->assertFalse($this->with_numbers->numeric());
        $this->assertTrue($this->numbers->numeric());
        $this->assertFalse($this->blank->numeric());
        $this->assertFalse($this->punctuation->numeric());
        $this->assertFalse($this->symbol->numeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHexadecimal ():void {

        $this->assertFalse($this->control->hexadecimal());
        $this->assertTrue($this->empty->hexadecimal());
        $this->assertFalse( $this->string->hexadecimal());
        $this->assertFalse($this->lowercased->hexadecimal());
        $this->assertFalse($this->uppercased->hexadecimal());
        $this->assertFalse($this->mb->hexadecimal());
        $this->assertFalse($this->with_numbers->hexadecimal());
        $this->assertTrue($this->numbers->hexadecimal());
        $this->assertFalse($this->blank->hexadecimal());
        $this->assertFalse($this->punctuation->hexadecimal());
        $this->assertFalse($this->symbol->hexadecimal());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testControl ():void {

        $this->assertTrue($this->control->control());
        $this->assertTrue($this->empty->control());
        $this->assertFalse( $this->string->control());
        $this->assertFalse($this->lowercased->control());
        $this->assertFalse($this->uppercased->control());
        $this->assertFalse($this->mb->control());
        $this->assertFalse($this->with_numbers->control());
        $this->assertFalse($this->numbers->control());
        $this->assertFalse($this->blank->control());
        $this->assertFalse($this->punctuation->control());
        $this->assertFalse($this->symbol->control());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrintable ():void {

        $this->assertFalse($this->control->printable());
        $this->assertTrue($this->empty->printable());
        $this->assertTrue( $this->string->printable());
        $this->assertTrue($this->lowercased->printable());
        $this->assertTrue($this->uppercased->printable());
        $this->assertTrue($this->mb->printable());
        $this->assertTrue($this->with_numbers->printable());
        $this->assertTrue($this->numbers->printable());
        $this->assertTrue($this->blank->printable());
        $this->assertTrue($this->punctuation->printable());
        $this->assertTrue($this->symbol->printable());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGraphical ():void {

        $this->assertFalse($this->control->graphical());
        $this->assertTrue($this->empty->graphical());
        $this->assertTrue( $this->string->graphical());
        $this->assertTrue($this->lowercased->graphical());
        $this->assertTrue($this->uppercased->graphical());
        $this->assertFalse($this->mb->graphical());
        $this->assertTrue($this->with_numbers->graphical());
        $this->assertTrue($this->numbers->graphical());
        $this->assertFalse($this->blank->graphical());
        $this->assertTrue($this->punctuation->graphical());
        $this->assertTrue($this->symbol->graphical());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPunctuation ():void {

        $this->assertFalse($this->control->punctuation());
        $this->assertTrue($this->empty->punctuation());
        $this->assertFalse( $this->string->punctuation());
        $this->assertFalse($this->lowercased->punctuation());
        $this->assertFalse($this->uppercased->punctuation());
        $this->assertFalse($this->mb->punctuation());
        $this->assertFalse($this->with_numbers->punctuation());
        $this->assertFalse($this->numbers->punctuation());
        $this->assertFalse($this->blank->punctuation());
        $this->assertTrue($this->punctuation->punctuation());
        $this->assertFalse($this->symbol->punctuation());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAscii ():void {

        $this->assertTrue($this->control->ascii());
        $this->assertTrue($this->empty->ascii());
        $this->assertTrue( $this->string->ascii());
        $this->assertTrue($this->lowercased->ascii());
        $this->assertTrue($this->uppercased->ascii());
        $this->assertFalse($this->mb->ascii());
        $this->assertTrue($this->with_numbers->ascii());
        $this->assertTrue($this->numbers->ascii());
        $this->assertTrue($this->blank->ascii());
        $this->assertTrue($this->punctuation->ascii());
        $this->assertFalse($this->symbol->ascii());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsCapitalized ():void {

        $this->assertFalse($this->control->capitalized());
        $this->assertFalse($this->empty->capitalized());
        $this->assertTrue( $this->string->capitalized());
        $this->assertFalse($this->lowercased->capitalized());
        $this->assertTrue($this->uppercased->capitalized());
        $this->assertFalse($this->mb->capitalized());
        $this->assertTrue($this->with_numbers->capitalized());
        $this->assertFalse($this->numbers->capitalized());
        $this->assertFalse($this->blank->capitalized());
        $this->assertFalse($this->punctuation->capitalized());
        $this->assertFalse($this->symbol->capitalized());

    }

}