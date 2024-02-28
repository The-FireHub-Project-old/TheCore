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
    Expression, StringIs
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
        $this->symbol = Str::from('~$%&', Encoding::UTF_8);
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

        $this->assertInstanceOf(
            StringIs::class,
            $this->string->is()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpression ():void {

        $this->assertInstanceOf(
            Expression::class,
            $this->string->expression()
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
        $this->assertSame('~$%&', $this->symbol->string());
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
        $this->assertSame($this->symbol->string(), $this->symbol->__toString());
        $this->assertSame($this->mixed->string(), $this->mixed->__toString());

    }

}