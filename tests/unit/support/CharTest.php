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
use FireHub\Core\Support\Strings\Expression;
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
    public Char $space;
    public Char $char_lower;
    public Char $char_upper;
    public Char $digit;
    public Char $greek;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->control = Char::fromCodepoint(0, Encoding::UTF_8);
        $this->punctuation = Char::from('}', Encoding::UTF_8);
        $this->space = Char::from(' ', Encoding::UTF_8);
        $this->char_lower = Char::from('x', Encoding::UTF_8);
        $this->char_upper = Char::from('Y', Encoding::UTF_8);
        $this->digit = Char::from('4', Encoding::UTF_8);
        $this->greek = Char::from('Ϸ', Encoding::UTF_8);

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
    public function testExpression ():void {

        $this->assertInstanceOf(Expression::class, $this->char_lower->expression());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testEncoding ():void {

        $this->assertSame(Encoding::UTF_8, $this->control->encoding());
        $this->assertSame(Encoding::UTF_8, $this->punctuation->encoding());
        $this->assertSame(Encoding::UTF_8, $this->space->encoding());
        $this->assertSame(Encoding::UTF_8, $this->char_lower->encoding());
        $this->assertSame(Encoding::UTF_8, $this->char_upper->encoding());
        $this->assertSame(Encoding::UTF_8, $this->digit->encoding());
        $this->assertSame(Encoding::UTF_8, $this->greek->encoding());

        $this->assertSame(
            $this->control->string(),
            $this->control->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->punctuation->string(),
            $this->punctuation->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->space->string(),
            $this->space->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->char_lower->string(),
            $this->char_lower->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->char_upper->string(),
            $this->char_upper->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->digit->string(),
            $this->digit->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->greek->string(),
            $this->greek->encoding(Encoding::ISO_8859_1)->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testString ():void {

        $this->assertSame('}', $this->punctuation->string());
        $this->assertSame(' ', $this->space->string());
        $this->assertSame('x', $this->char_lower->string());
        $this->assertSame('Y', $this->char_upper->string());
        $this->assertSame('4', $this->digit->string());
        $this->assertSame('Ϸ', $this->greek->string());

        $this->assertSame('X', $this->char_lower->string('X')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToLower ():void {

        $this->assertSame('y', $this->char_upper->toLower()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToUpper ():void {

        $this->assertSame('X', $this->char_lower->toUpper()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCodepoint ():void {

        $this->assertSame(
            Char::fromCodepoint(0)->codepoint(),
            $this->control->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(125)->codepoint(),
            $this->punctuation->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(32)->codepoint(),
            $this->space->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(120)->codepoint(),
            $this->char_lower->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(89)->codepoint(),
            $this->char_upper->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(52)->codepoint(),
            $this->digit->codepoint()
        );

        $this->assertSame(
            Char::fromCodepoint(1015)->codepoint(),
            $this->greek->codepoint()
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
        $this->assertSame($this->space->string(), $this->space->__toString());
        $this->assertSame($this->char_lower->string(), $this->char_lower->__toString());
        $this->assertSame($this->char_upper->string(), $this->char_upper->__toString());
        $this->assertSame($this->digit->string(), $this->digit->__toString());
        $this->assertSame($this->greek->string(), $this->greek->__toString());

    }

}