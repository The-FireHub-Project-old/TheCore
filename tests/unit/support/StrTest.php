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
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\Strings\Expression\ {
    FunctionFamily, Check, Replace, Get, Pattern, Split
};
use FireHub\Core\Support\Strings\Expression\Pattern\ {
    Any, AtLeast, AtMost, Between, Exactly, Has, Is, Occurrences, OneOrMore, ZeroOrMore, ZeroOrOne
};
use FireHub\Core\Support\Strings\Expression\Pattern\Predefined\ {
    Chars, NotChars
};
use FireHub\Core\Support\ {
    Char, Str, IStr
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends, DependsOnClass, RequiresOperatingSystemFamily
};
use FireHub\Core\Support\Enums\String\Encoding;
use FireHub\Core\Support\Enums\String\Expression\Modifier;
use Error;

/**
 * ### Test string high-level support class
 * @since 1.0.0
 */
#[CoversClass(Str::class)]
#[CoversClass(IStr::class)]
#[CoversClass(Expression::class)]
#[CoversClass(FunctionFamily::class)]
#[CoversClass(Check::class)]
#[CoversClass(Replace::class)]
#[CoversClass(Get::class)]
#[CoversClass(Split::class)]
#[CoversClass(Pattern::class)]
#[CoversClass(Any::class)]
#[CoversClass(AtLeast::class)]
#[CoversClass(AtMost::class)]
#[CoversClass(Between::class)]
#[CoversClass(Exactly::class)]
#[CoversClass(Occurrences::class)]
#[CoversClass(OneOrMore::class)]
#[CoversClass(ZeroOrMore::class)]
#[CoversClass(ZeroOrOne::class)]
#[CoversClass(Has::class)]
#[CoversClass(Is::class)]
#[CoversClass(Chars::class)]
#[CoversClass(NotChars::class)]
final class StrTest extends Base {

    public Str $control;
    public Str $string;
    public Str $insensitive_string;
    public Str $string_with_glue;
    public Str $string_lower;
    public Str $string_upper;
    public Str $string_with_num;
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
        $this->string = Str::from('FireHub', Encoding::UTF_8);
        $this->insensitive_string = IStr::from('FireHub', Encoding::UTF_8);
        $this->string_with_glue = Str::fromList(['F', 'i', 'r', 'e', 'H', 'u', 'b'], '-', Encoding::UTF_8);
        $this->string_lower = Str::from('firehub', Encoding::UTF_8);
        $this->string_upper = Str::from('FIREHUB', Encoding::UTF_8);
        $this->string_with_num = Str::from('FireHub123', Encoding::UTF_8);
        $this->mixed = Str::from('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testChunkLengthLessThenZero ():void {

        $this->expectException(Error::class);

        $this->string->expression()->check()->withDelimiter(Char::from('x'))->is()->custom('FireHub');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionCheckIs ():void {

        $this->assertTrue($this->string->expression()->check()->withDelimiter(Char::from('#'))->is()->custom('FireHub'));

        $this->assertFalse($this->string->expression()->check()->is()->custom('FIREHUB'));
        $this->assertTrue($this->string->expression()->check(Modifier::CASELESS)->is()->custom('FIREHUB'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceAny ():void {

        $this->string->expression()->replace('x')->any()->lower();

        $this->assertSame('FxxxHxx', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceAtLeast ():void {

        $this->string->expression()->replace('x')->atLeast(1)->lower();

        $this->assertSame('FxHx', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RequiresOperatingSystemFamily('Windows')]
    public function testExpressionReplaceAtMostWindows ():void {

        $this->string->expression()->replace('x')->atMost(1)->lower();

        $this->assertSame('FireHub', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RequiresOperatingSystemFamily('Linux')]
    public function testExpressionReplaceAtMostLinux ():void {

        $this->string->expression()->replace('x')->atMost(1)->lower();

        $this->assertSame('FireHub', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RequiresOperatingSystemFamily('Darwin')]
    public function testExpressionReplaceAtMostDarwin ():void {

        $this->string->expression()->replace('x')->atMost(1)->lower();

        $this->assertSame('xFxxxxHxxx', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceBetween ():void {

        $this->string->expression()->replace('x')->between(2,3)->lower();

        $this->assertSame('FxHx', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceExactly ():void {

        $this->string->expression()->replace('=')->exactly(3)->lower();

        $this->assertSame('F=Hub', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceOneOrMore ():void {

        $this->string->expression()->replace('=')->oneOrMore()->lower();

        $this->assertSame('F=H=', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceZeroOrMore ():void {

        $this->string->expression()->replace('=')->zeroOrMore()->lower();

        $this->assertSame('=F==H==', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceZeroOrOne ():void {

        $this->string->expression()->replace('=')->zeroOrOne()->lower();

        $this->assertSame('=F====H===', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceHas ():void {

        $this->string->expression()->replace('x')->has()->custom('r');

        $this->assertSame('xeHub', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionReplaceIs ():void {

        $this->string->expression()->replace('x', Modifier::CASELESS)->is()->custom('FIREHUB');
        $this->assertSame('x', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionGetIs ():void {

        $this->string->expression()->get(Modifier::CASELESS)->is()->custom('FIREHUB');

        $this->assertSame('FireHub', $this->string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionSplitIs ():void {

        $this->assertSame(
            ['F','reHub'],
            $this->string->expression()->split()->any()->custom('i')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStartsWith ():void {

        $this->assertFalse($this->control->startsWith('fire'));
        $this->assertFalse( $this->string->startsWith('fire'));
        $this->assertTrue($this->mixed->startsWith('đščćž'));

        $this->assertTrue($this->insensitive_string->startsWith('fire'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStartWithAny ():void {

        $this->assertFalse($this->string->startsWithAny('fire', 'test'));
        $this->assertTrue( $this->string->startsWithAny('Fire', 'test'));

        $this->assertTrue($this->insensitive_string->startsWithAny('fire', 'test'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEndsWith ():void {

        $this->assertFalse($this->control->endsWith('Hub'));
        $this->assertTrue( $this->string->endsWith('Hub'));
        $this->assertTrue($this->mixed->endsWith('{:;'));

        $this->assertTrue($this->insensitive_string->endsWith('hub'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEndsWithAny ():void {

        $this->assertFalse($this->string->endsWithAny('hub', 'test'));
        $this->assertTrue( $this->string->endsWithAny('Hub', 'test'));

        $this->assertTrue($this->insensitive_string->endsWithAny('hub', 'test'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertFalse($this->control->contains('reHu'));
        $this->assertTrue( $this->string->contains('reHu'));
        $this->assertTrue($this->mixed->contains('ЛЙ'));

        $this->assertTrue($this->insensitive_string->contains('rehu'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContainsAll ():void {

        $this->assertFalse($this->mixed->containsAll('ЛЙ', '123'));
        $this->assertTrue($this->mixed->containsAll('ЛЙ', 'đščćž'));

        $this->assertFalse($this->insensitive_string->containsAll('test', '123'));
        $this->assertTrue($this->insensitive_string->containsAll('fir', 'hub'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContainsAny ():void {

        $this->assertFalse($this->mixed->containsAny('test', '123'));
        $this->assertTrue($this->mixed->containsAny('ЛЙ', '123'));

        $this->assertFalse($this->insensitive_string->containsAny('test', '123'));
        $this->assertTrue($this->insensitive_string->containsAny('fir', '123'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEquals ():void {

        $this->assertFalse( $this->string->equals('firehub'));
        $this->assertTrue($this->string->equals('FireHub'));

        $this->assertTrue( $this->insensitive_string->equals('firehub'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEqualsAny ():void {

        $this->assertFalse($this->string->equalsAny('test', 'firehub'));
        $this->assertTrue($this->string->equalsAny('test', 'FireHub'));

        $this->assertTrue($this->insensitive_string->equalsAny('test', 'firehub'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testEncoding ():void {

        $this->assertSame(Encoding::UTF_8, $this->control->encoding());
        $this->assertSame(Encoding::UTF_8, $this->string->encoding());
        $this->assertSame(Encoding::UTF_8, $this->string_with_glue->encoding());
        $this->assertSame(Encoding::UTF_8, $this->string_lower->encoding());
        $this->assertSame(Encoding::UTF_8, $this->string_upper->encoding());
        $this->assertSame(Encoding::UTF_8, $this->string_with_num->encoding());
        $this->assertSame(Encoding::UTF_8, $this->mixed->encoding());

        $this->assertSame(
            $this->control->string(),
            $this->control->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->string->string(),
            $this->string->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->insensitive_string->string(),
            $this->insensitive_string->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->string_with_glue->string(),
            $this->string_with_glue->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->string_lower->string(),
            $this->string_lower->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->string_upper->string(),
            $this->string_upper->encoding(Encoding::ISO_8859_1)->string()
        );

        $this->assertSame(
            $this->string_with_num->string(),
            $this->string_with_num->encoding(Encoding::ISO_8859_1)->string()
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
    public function testString ():void {

        $this->assertSame(
            Str::from(Char::fromCodepoint(0, Encoding::UTF_8)->string())->string(),
            $this->control->string()
        );
        $this->assertSame('FireHub', $this->string->string());
        $this->assertSame('FireHub Web App', $this->string->string('FireHub Web App')->string());
        $this->assertSame('FireHub Web App', $this->insensitive_string->string('FireHub Web App')->string());
        $this->assertSame('F-i-r-e-H-u-b', $this->string_with_glue->string());
        $this->assertSame('firehub', $this->string_lower->string());
        $this->assertSame('FIREHUB', $this->string_upper->string());
        $this->assertSame('FireHub123', $this->string_with_num->string());
        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;', $this->mixed->string());

        $this->assertSame('Fire', $this->string->string('Fire')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSlice ():void {

        $this->assertSame('ireHu',  $this->string->slice(1, -1)->string());
        $this->assertSame('eHu',  $this->string->slice(2)->string());
        $this->assertSame('eH',  $this->string->slice(-5, 2)->string());
        $this->assertSame('đš',  $this->mixed->slice(0, 2)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCarry ():void {

        $this->assertSame('ćž 诶杰艾',  $this->mixed->carry(3, 6)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCarryFrom ():void {

        $this->assertSame('ЛЙ ÈßÁ カタカナ }{:;',  $this->mixed->carryFrom('ЛЙ')->string());
        $this->assertSame('Hub',  $this->insensitive_string->carryFrom('h')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCaryAfter ():void {

        $this->assertSame(' ÈßÁ カタカナ }{:;',  $this->mixed->carryAfter('ЛЙ')->string());
        $this->assertSame('ub',  $this->insensitive_string->carryAfter('h')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCarryUntil ():void {

        $this->assertSame('đščćž 诶杰艾玛 ',  $this->mixed->carryUntil('ЛЙ')->string());
        $this->assertSame('Fire',  $this->insensitive_string->carryUntil('h')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCarryFromLast ():void {

        $this->assertSame('カナ }{:;',  $this->mixed->carryFromLast('カ')->string());
        $this->assertSame('Hub',  $this->insensitive_string->carryFromLast('h')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCarryAfterLast ():void {

        $this->assertSame('ナ }{:;',  $this->mixed->carryAfterLast('カ')->string());
        $this->assertSame('ub',  $this->insensitive_string->carryAfterLast('h')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCarryUntilLast ():void {

        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタ',  $this->mixed->carryUntilLast('カ')->string());
        $this->assertSame('Fire',  $this->insensitive_string->carryUntilLast('h')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLength ():void {

        $this->assertSame(7,  $this->string->length());
        $this->assertSame(27,  $this->mixed->length());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIndexOf ():void {

        $this->assertSame(4,  $this->string->indexOf('H'));
        $this->assertFalse($this->string->indexOf('h'));
        $this->assertSame(4,  $this->insensitive_string->indexOf('h'));
        $this->assertSame(18,  $this->mixed->indexOf('カ'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastIndexOf ():void {

        $this->assertSame(4,  $this->string->lastIndexOf('H'));
        $this->assertFalse($this->string->lastIndexOf('h'));
        $this->assertSame(4,  $this->insensitive_string->lastIndexOf('h'));
        $this->assertSame(20,  $this->mixed->lastIndexOf('カ'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testPrint ():void {

        $this->assertSame($this->control->string(), $this->control->__toString());
        $this->assertSame($this->string->string(), $this->string->__toString());
        $this->assertSame($this->insensitive_string->string(), $this->insensitive_string->__toString());
        $this->assertSame($this->string_with_glue->string(), $this->string_with_glue->__toString());
        $this->assertSame($this->string_lower->string(), $this->string_lower->__toString());
        $this->assertSame($this->string_upper->string(), $this->string_upper->__toString());
        $this->assertSame($this->string_with_num->string(), $this->string_with_num->__toString());
        $this->assertSame($this->mixed->string(), $this->mixed->__toString());

    }

}