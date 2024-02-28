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
use FireHub\Core\Support\Strings\ {
    Expression, StringHas, StringIs
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
    public Str $mixed;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[DependsOnClass(Char::class)]
    public function setUp ():void {

        $this->control = Str::from(
            Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8
        );
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
        $this->mixed = Str::from(
            '}~' .Str::from(Char::fromCodepoint(
                0,
                Encoding::UTF_8)->string()
            ),
            Encoding::UTF_8
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStringIs ():void {

        $this->assertInstanceOf(StringIs::class, $this->string->is());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStringHas ():void {

        $this->assertInstanceOf(StringHas::class, $this->string->has());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpression ():void {

        $this->assertInstanceOf(Expression::class, $this->string->expression());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStartsWith ():void {

        $this->assertFalse($this->control->startsWith('đščćž'));
        $this->assertFalse($this->empty->startsWith('đščćž'));
        $this->assertFalse( $this->string->startsWith('đščćž'));
        $this->assertFalse($this->with_glue->startsWith('đščćž'));
        $this->assertFalse($this->lowercased->startsWith('đščćž'));
        $this->assertFalse($this->uppercased->startsWith('đščćž'));
        $this->assertTrue($this->mb->startsWith('đščćž'));
        $this->assertFalse($this->mb->startsWith('Đščćž'));
        $this->assertTrue($this->mb->startsWith('Đščćž', false));
        $this->assertFalse($this->with_numbers->startsWith('đščćž'));
        $this->assertFalse($this->numbers->startsWith('đščćž'));
        $this->assertFalse($this->blank->startsWith('đščćž'));
        $this->assertFalse($this->punctuation->startsWith('đščćž'));
        $this->assertFalse($this->mixed->startsWith('đščćž'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEndsWith ():void {

        $this->assertFalse($this->control->endsWith('Hub'));
        $this->assertFalse($this->empty->endsWith('Hub'));
        $this->assertTrue( $this->string->endsWith('Hub'));
        $this->assertFalse($this->with_glue->endsWith('Hub'));
        $this->assertFalse($this->lowercased->endsWith('Hub'));
        $this->assertFalse($this->uppercased->endsWith('Hub'));
        $this->assertFalse($this->mb->endsWith('Hub'));
        $this->assertFalse($this->with_numbers->endsWith('Hub'));
        $this->assertFalse($this->numbers->endsWith('Hub'));
        $this->assertFalse($this->blank->endsWith('Hub'));
        $this->assertFalse($this->punctuation->endsWith('Hub'));
        $this->assertFalse($this->mixed->endsWith('Hub'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertFalse($this->control->contains('đščćž'));
        $this->assertFalse($this->empty->contains('đščćž'));
        $this->assertFalse( $this->string->contains('đščćž'));
        $this->assertFalse($this->with_glue->contains('đščćž'));
        $this->assertFalse($this->lowercased->contains('đščćž'));
        $this->assertFalse($this->uppercased->contains('đščćž'));
        $this->assertTrue($this->mb->contains('đščćž'));
        $this->assertFalse($this->mb->contains('Đščćž'));
        $this->assertTrue($this->mb->contains('Đščćž', false));
        $this->assertFalse($this->with_numbers->contains('đščćž'));
        $this->assertFalse($this->numbers->contains('đščćž'));
        $this->assertFalse($this->blank->contains('đščćž'));
        $this->assertFalse($this->punctuation->contains('đščćž'));
        $this->assertFalse($this->mixed->contains('đščćž'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContainsAll ():void {

        $this->assertFalse($this->control->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->empty->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse( $this->string->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->with_glue->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->lowercased->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->uppercased->containsAll(['ЛЙ', 'カタ']));
        $this->assertTrue($this->mb->containsAll(['ЛЙ', 'カタ']));
        $this->assertTrue($this->mb->containsAll(['ЛЙ', 'カタ']));
        $this->assertTrue($this->mb->containsAll(['лй', 'カタ'], false));
        $this->assertFalse($this->with_numbers->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->numbers->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->blank->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->punctuation->containsAll(['ЛЙ', 'カタ']));
        $this->assertFalse($this->mixed->containsAll(['ЛЙ', 'カタ']));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContainsAny ():void {

        $this->assertFalse($this->control->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->empty->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse( $this->string->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->with_glue->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->lowercased->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->uppercased->containsAny(['ЛЙ', 'カタ']));
        $this->assertTrue($this->mb->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->mb->containsAny(['лй', 'xy']));
        $this->assertTrue($this->mb->containsAny(['лй', 'カタ'], false));
        $this->assertFalse($this->with_numbers->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->numbers->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->blank->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->punctuation->containsAny(['ЛЙ', 'カタ']));
        $this->assertFalse($this->mixed->containsAny(['ЛЙ', 'カタ']));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEqualToAny ():void {

        $this->assertFalse($this->control->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->empty->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse( $this->string->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->with_glue->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->lowercased->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->uppercased->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertTrue($this->mb->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->with_numbers->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->numbers->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->blank->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->punctuation->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));
        $this->assertFalse($this->mixed->equalToAny(['đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', 'カタ']));

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
    public function testToLower ():void {

        $this->assertSame(Char::fromCodepoint(0, Encoding::UTF_8)->string(), $this->control->toLower()->string());
        $this->assertSame('', $this->empty->toLower()->string());
        $this->assertSame('firehub', $this->string->toLower()->string());
        $this->assertSame('f-i-r-e-h-u-b', $this->with_glue->toLower()->string());
        $this->assertSame('firehub', $this->lowercased->toLower()->string());
        $this->assertSame('firehub', $this->uppercased->toLower()->string());
        $this->assertSame('đščćž 诶杰艾玛 лй èßá カタカナ', $this->mb->toLower()->string());
        $this->assertSame('firehub123', $this->with_numbers->toLower()->string());
        $this->assertSame('123', $this->numbers->toLower()->string());
        $this->assertSame('   ', $this->blank->toLower()->string());
        $this->assertSame('}{:;', $this->punctuation->toLower()->string());
        $this->assertSame(
            '}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8),
            $this->mixed->toLower()->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testToUpper ():void {

        $this->assertSame(Char::fromCodepoint(0, Encoding::UTF_8)->string(), $this->control->toUpper()->string());
        $this->assertSame('', $this->empty->toUpper()->string());
        $this->assertSame('FIREHUB', $this->string->toUpper()->string());
        $this->assertSame('F-I-R-E-H-U-B', $this->with_glue->toUpper()->string());
        $this->assertSame('FIREHUB', $this->lowercased->toUpper()->string());
        $this->assertSame('FIREHUB', $this->uppercased->toUpper()->string());
        $this->assertSame('ĐŠČĆŽ 诶杰艾玛 ЛЙ ÈSSÁ カタカナ', $this->mb->toUpper()->string());
        $this->assertSame('FIREHUB123', $this->with_numbers->toUpper()->string());
        $this->assertSame('123', $this->numbers->toUpper()->string());
        $this->assertSame('   ', $this->blank->toUpper()->string());
        $this->assertSame('}{:;', $this->punctuation->toUpper()->string());
        $this->assertSame(
            '}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8),
            $this->mixed->toUpper()->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testToTitle ():void {

        $this->assertSame(Char::fromCodepoint(0, Encoding::UTF_8)->string(), $this->control->toTitle()->string());
        $this->assertSame('', $this->empty->toTitle()->string());
        $this->assertSame('Firehub', $this->string->toTitle()->string());
        $this->assertSame('F-I-R-E-H-U-B', $this->with_glue->toTitle()->string());
        $this->assertSame('Firehub', $this->lowercased->toTitle()->string());
        $this->assertSame('Firehub', $this->uppercased->toTitle()->string());
        $this->assertSame('Đščćž 诶杰艾玛 Лй Èßá カタカナ', $this->mb->toTitle()->string());
        $this->assertSame('Firehub123', $this->with_numbers->toTitle()->string());
        $this->assertSame('123', $this->numbers->toTitle()->string());
        $this->assertSame('   ', $this->blank->toTitle()->string());
        $this->assertSame('}{:;', $this->punctuation->toTitle()->string());
        $this->assertSame(
            '}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8),
            $this->mixed->toTitle()->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testCapitalize ():void {

        $this->assertSame(
            Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8)->string(),
            $this->control->capitalize()->string()
        );
        $this->assertSame('', $this->empty->capitalize()->string());
        $this->assertSame('FireHub', $this->string->capitalize()->string());
        $this->assertSame('F-i-r-e-H-u-b', $this->with_glue->capitalize()->string());
        $this->assertSame('Firehub', $this->lowercased->capitalize()->string());
        $this->assertSame('FIREHUB', $this->uppercased->capitalize()->string());
        $this->assertSame('Đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', $this->mb->capitalize()->string());
        $this->assertSame('FireHub123', $this->with_numbers->capitalize()->string());
        $this->assertSame('123', $this->numbers->capitalize()->string());
        $this->assertSame('   ', $this->blank->capitalize()->string());
        $this->assertSame('}{:;', $this->punctuation->capitalize()->string());
        $this->assertSame(
            '}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8),
            $this->mixed->capitalize()->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testDeCapitalize ():void {

        $this->assertSame(
            Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8)->string(),
            $this->control->deCapitalize()->string()
        );
        $this->assertSame('', $this->empty->deCapitalize()->string());
        $this->assertSame('fireHub', $this->string->deCapitalize()->string());
        $this->assertSame('f-i-r-e-H-u-b', $this->with_glue->deCapitalize()->string());
        $this->assertSame('firehub', $this->lowercased->deCapitalize()->string());
        $this->assertSame('fIREHUB', $this->uppercased->deCapitalize()->string());
        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', $this->mb->deCapitalize()->string());
        $this->assertSame('fireHub123', $this->with_numbers->deCapitalize()->string());
        $this->assertSame('123', $this->numbers->deCapitalize()->string());
        $this->assertSame('   ', $this->blank->deCapitalize()->string());
        $this->assertSame('}{:;', $this->punctuation->deCapitalize()->string());
        $this->assertSame(
            '}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string(), Encoding::UTF_8),
            $this->mixed->deCapitalize()->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testString ():void {

        $this->assertSame(
            Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string())->string(),
            $this->control->string()
        );
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
        $this->assertSame(
            '}~'.Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string()),
            $this->mixed->string()
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
        $this->assertSame($this->mixed->string(), $this->mixed->__toString());

    }

}