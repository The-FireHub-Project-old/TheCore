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
use FireHub\Core\Support\Strings\StringHas;
use PHPUnit\Framework\Attributes\ {
    CoversClass, DependsOnClass
};
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Test strings checker class
 * @since 1.0.0
 */
#[CoversClass(StringHas::class)]
final class StringHasTest extends Base {

    public StringHas $control;
    public StringHas $empty;
    public StringHas $string;
    public StringHas $lowercased;
    public StringHas $uppercased;
    public StringHas $mb;
    public StringHas $with_numbers;
    public StringHas $numbers;
    public StringHas $blank;
    public StringHas $punctuation;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[DependsOnClass(Char::class)]
    public function setUp ():void {

        $this->control = new StringHas(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8);
        $this->empty = new StringHas('', Encoding::UTF_8);
        $this->string = new StringHas('FireHub', Encoding::UTF_8);
        $this->lowercased = new StringHas('firehub', Encoding::UTF_8);
        $this->uppercased = new StringHas('FIREHUB', Encoding::UTF_8);
        $this->mb = new StringHas('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', Encoding::UTF_8);
        $this->with_numbers = new StringHas('FireHub123', Encoding::UTF_8);
        $this->numbers = new StringHas('123', Encoding::UTF_8);
        $this->blank = new StringHas('   ', Encoding::UTF_8);
        $this->punctuation = new StringHas('}{:;', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasLower ():void {

        $this->assertFalse($this->control->lower());
        $this->assertFalse($this->empty->lower());
        $this->assertTrue( $this->string->lower());
        $this->assertTrue($this->lowercased->lower());
        $this->assertFalse($this->uppercased->lower());
        $this->assertTrue($this->mb->lower());
        $this->assertTrue($this->with_numbers->lower());
        $this->assertFalse($this->numbers->lower());
        $this->assertFalse($this->blank->lower());
        $this->assertFalse($this->punctuation->lower());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasUpper ():void {

        $this->assertFalse($this->control->upper());
        $this->assertFalse($this->empty->upper());
        $this->assertTrue( $this->string->upper());
        $this->assertFalse($this->lowercased->upper());
        $this->assertTrue($this->uppercased->upper());
        $this->assertTrue($this->mb->upper());
        $this->assertTrue($this->with_numbers->upper());
        $this->assertFalse($this->numbers->upper());
        $this->assertFalse($this->blank->upper());
        $this->assertFalse($this->punctuation->upper());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasAlphabetic ():void {

        $this->assertFalse($this->control->alphabetic());
        $this->assertFalse($this->empty->alphabetic());
        $this->assertTrue( $this->string->alphabetic());
        $this->assertTrue($this->lowercased->alphabetic());
        $this->assertTrue($this->uppercased->alphabetic());
        $this->assertTrue($this->mb->alphabetic());
        $this->assertTrue($this->with_numbers->alphabetic());
        $this->assertFalse($this->numbers->alphabetic());
        $this->assertFalse($this->blank->alphabetic());
        $this->assertFalse($this->punctuation->alphabetic());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasAlphanumeric ():void {

        $this->assertFalse($this->control->alphanumeric());
        $this->assertFalse($this->empty->alphanumeric());
        $this->assertTrue( $this->string->alphanumeric());
        $this->assertTrue($this->lowercased->alphanumeric());
        $this->assertTrue($this->uppercased->alphanumeric());
        $this->assertTrue($this->mb->alphanumeric());
        $this->assertTrue($this->with_numbers->alphanumeric());
        $this->assertTrue($this->numbers->alphanumeric());
        $this->assertFalse($this->blank->alphanumeric());
        $this->assertFalse($this->punctuation->alphanumeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasBlank ():void {

        $this->assertFalse($this->control->blank());
        $this->assertFalse($this->empty->blank());
        $this->assertFalse( $this->string->blank());
        $this->assertFalse($this->lowercased->blank());
        $this->assertFalse($this->uppercased->blank());
        $this->assertTrue($this->mb->blank());
        $this->assertFalse($this->with_numbers->blank());
        $this->assertFalse($this->numbers->blank());
        $this->assertTrue($this->blank->blank());
        $this->assertFalse($this->punctuation->blank());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasNumeric ():void {

        $this->assertFalse($this->control->numeric());
        $this->assertFalse($this->empty->numeric());
        $this->assertFalse( $this->string->numeric());
        $this->assertFalse($this->lowercased->numeric());
        $this->assertFalse($this->uppercased->numeric());
        $this->assertFalse($this->mb->numeric());
        $this->assertTrue($this->with_numbers->numeric());
        $this->assertTrue($this->numbers->numeric());
        $this->assertFalse($this->blank->numeric());
        $this->assertFalse($this->punctuation->numeric());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasHexadecimal ():void {

        $this->assertFalse($this->control->hexadecimal());
        $this->assertFalse($this->empty->hexadecimal());
        $this->assertTrue( $this->string->hexadecimal());
        $this->assertTrue($this->lowercased->hexadecimal());
        $this->assertTrue($this->uppercased->hexadecimal());
        $this->assertFalse($this->mb->hexadecimal());
        $this->assertTrue($this->with_numbers->hexadecimal());
        $this->assertTrue($this->numbers->hexadecimal());
        $this->assertFalse($this->blank->hexadecimal());
        $this->assertFalse($this->punctuation->hexadecimal());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasControl ():void {

        $this->assertTrue($this->control->control());
        $this->assertFalse($this->empty->control());
        $this->assertFalse( $this->string->control());
        $this->assertFalse($this->lowercased->control());
        $this->assertFalse($this->uppercased->control());
        $this->assertFalse($this->mb->control());
        $this->assertFalse($this->with_numbers->control());
        $this->assertFalse($this->numbers->control());
        $this->assertFalse($this->blank->control());
        $this->assertFalse($this->punctuation->control());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasPrintable ():void {

        $this->assertFalse($this->control->printable());
        $this->assertFalse($this->empty->printable());
        $this->assertTrue( $this->string->printable());
        $this->assertTrue($this->lowercased->printable());
        $this->assertTrue($this->uppercased->printable());
        $this->assertTrue($this->mb->printable());
        $this->assertTrue($this->with_numbers->printable());
        $this->assertTrue($this->numbers->printable());
        $this->assertTrue($this->blank->printable());
        $this->assertTrue($this->punctuation->printable());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasGraphical ():void {

        $this->assertFalse($this->control->graphical());
        $this->assertFalse($this->empty->graphical());
        $this->assertTrue( $this->string->graphical());
        $this->assertTrue($this->lowercased->graphical());
        $this->assertTrue($this->uppercased->graphical());
        $this->assertTrue($this->mb->graphical());
        $this->assertTrue($this->with_numbers->graphical());
        $this->assertTrue($this->numbers->graphical());
        $this->assertFalse($this->blank->graphical());
        $this->assertTrue($this->punctuation->graphical());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHasPunctuation ():void {

        $this->assertFalse($this->control->punctuation());
        $this->assertFalse($this->empty->punctuation());
        $this->assertFalse( $this->string->punctuation());
        $this->assertFalse($this->lowercased->punctuation());
        $this->assertFalse($this->uppercased->punctuation());
        $this->assertFalse($this->mb->punctuation());
        $this->assertFalse($this->with_numbers->punctuation());
        $this->assertFalse($this->numbers->punctuation());
        $this->assertFalse($this->blank->punctuation());
        $this->assertTrue($this->punctuation->punctuation());

    }

}