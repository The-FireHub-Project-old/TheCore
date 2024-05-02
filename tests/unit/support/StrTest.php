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
use FireHub\Core\Support\Strings\ {
    Expression, InsertValue, Str as aStr
};
use FireHub\Core\Support\Strings\Expression\ {
    FunctionFamily, Check, Replace, ReplaceFunc, Get, Pattern, Split
};
use FireHub\Core\Support\Strings\Expression\Pattern\ {
    Any, AtLeast, AtMost, BeginsWith, Between, EndsWith, Exactly, Has, Is, Occurrences, OneOrMore, ZeroOrMore, ZeroOrOne
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
use FireHub\Core\Support\Enums\ {
    Side, String\Encoding, String\Words\Conjunction, String\Words\Preposition
};
use Error;

/**
 * ### Test string high-level support class
 * @since 1.0.0
 */
#[CoversClass(aStr::class)]
#[CoversClass(Str::class)]
#[CoversClass(IStr::class)]
#[CoversClass(Expression::class)]
#[CoversClass(InsertValue::class)]
#[CoversClass(FunctionFamily::class)]
#[CoversClass(Check::class)]
#[CoversClass(Replace::class)]
#[CoversClass(ReplaceFunc::class)]
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
#[CoversClass(BeginsWith::class)]
#[CoversClass(EndsWith::class)]
#[CoversClass(Chars::class)]
#[CoversClass(NotChars::class)]
#[CoversClass(Conjunction::class)]
#[CoversClass(Preposition::class)]
final class StrTest extends Base {

    public Str $control;
    public Str $string;
    public Str $insensitive_string;
    public Str $string_with_glue;
    public Str $string_lower;
    public Str $string_upper;
    public Str $string_with_num;
    public Str $mixed;
    public Str $empty;

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
        $this->empty = Str::from('', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAsBoolean ():void {

        $this->assertTrue(Str::from('True')->asBoolean());
        $this->assertTrue(Str::from('1')->asBoolean());
        $this->assertTrue(Str::from('On')->asBoolean());
        $this->assertTrue(Str::from('Yes')->asBoolean());
        $this->assertTrue(Str::from('56.5')->asBoolean());
        $this->assertTrue(Str::from('test')->asBoolean());

        $this->assertFalse(Str::from('False')->asBoolean());
        $this->assertFalse(Str::from('0')->asBoolean());
        $this->assertFalse(Str::from('Off')->asBoolean());
        $this->assertFalse(Str::from('No')->asBoolean());
        $this->assertFalse(Str::from(' ')->asBoolean());
        $this->assertFalse(Str::from('-6')->asBoolean());

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
        $this->assertTrue($this->insensitive_string->expression()->check()->is()->custom('FIREHUB'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionCheckBeginsWith ():void {

        $this->assertTrue($this->string->expression()->check()->beginsWith()->upper());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionCheckEndsWith ():void {

        $this->assertTrue($this->string->expression()->check()->endsWith()->lower());

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

        $this->insensitive_string->expression()->replace('x')->is()->custom('FIREHUB');
        $this->assertSame('x', $this->insensitive_string->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExpressionGetIs ():void {

        $this->assertSame([], $this->string->expression()->get()->is()->custom('FIREHUB'));

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
    public function testExpressionRemoveAny ():void {

        $this->assertSame('FireHub', $this->string_with_num->expression()->remove()->any()->digits()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testInsertValue ():void {

        $this->assertSame('F*i*r*eH*u*b', $this->string->insertValue('*')->before()->any()->lower()->string());
        $this->assertSame('FカireHカub123', $this->string_with_num->insertValue('カ')->after()->any()->upper()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSwapCase ():void {

        $this->assertSame('fIREhUB', $this->string->swapCase()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStreamline ():void {

        $this->assertSame('Fi r eHub', Str::from('
        Fi   r
        eHub')->streamline()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTitleize ():void {

        $this->assertSame('FireHub Web App', Str::from('fireHub Web app')->titleize()->string());
        $this->assertSame('FireHub at', Str::from('fireHub at')->titleize()->string());
        $this->assertSame('FireHub X c', Str::from('fireHub x c')->titleize(['c'])->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSpaceless ():void {

        $this->assertSame('FireHubWebApp', Str::from('FireHub Web App')->spaceless()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSnakeCase ():void {

        $this->assertSame('fire_hub_web_app', Str::from('FireHubWebApp')->snakeCase()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testKebabCase ():void {

        $this->assertSame('fire-hub-web-app', Str::from('FireHubWebApp')->kebabCase()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDelimit ():void {

        $this->assertSame('fire-hub-web-app', Str::from('FireHubWebApp')->delimit('-')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDasherize ():void {

        $this->assertSame('fire-hub-web-app', Str::from('FireHubWebApp')->dasherize()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPascalize ():void {

        $this->assertSame('FireHubWebApp', Str::from('fireHub Web app')->pascalize()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHumanize ():void {

        $this->assertSame('Firehub', Str::from(' firehub_id')->humanize()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTidy ():void {

        $this->assertSame('"FireHub..."', Str::from('“FireHub…”')->tidy()->string());

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
    public function testToLower ():void {

        $this->assertSame('firehub', $this->string->toLower()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToUpper ():void {

        $this->assertSame('FIREHUB', $this->string->toUpper()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToTitle ():void {

        $this->assertSame('Đščćž 诶杰艾玛 Лй Èßá カタカナ }{:;', $this->mixed->toTitle()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCapitalize ():void {

        $this->assertSame('Đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;', $this->mixed->capitalize()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDeCapitalize ():void {

        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;', $this->mixed->deCapitalize()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSlashes ():void {

        $string = Str::from("Is your name O'Reilly?");

        $this->assertSame("Is your name O\'Reilly?", $string->addSlashes()->string());
        $this->assertSame("Is your name O'Reilly?", $string->stripSlashes()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStripTags ():void {

        $this->assertSame("FireHub", Str::from('<p>FireHub</p>')->stripTags()->string());
        $this->assertSame("<p>FireHub</p>", Str::from('<p><i><a>FireHub</a></i></p>')->stripTags('<p>')->string());
        $this->assertSame("<p><a>FireHub</a></p>", Str::from('<p><i><a>FireHub</a></i></p>')->stripTags(['<p>', '<a>'])->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQuoteMeta ():void {

        $this->assertSame("FireHub\?", Str::from('FireHub?')->quoteMeta()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBetween ():void {

        $this->assertSame("FireHubFireHubFire", Str::from('FireHubFireHubFireHub')->between('F', 'H')->string());
        $this->assertSame("Fire", Str::from('FireHubFireHubFireHub')->betweenFirst('F', 'H')->string());
        $this->assertSame("Hu", Str::from('FireHubFireHubFireHub')->betweenLast('H', 'b')->string());

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
    public function testChop ():void {

        $this->assertSame(['Fire', 'Hub'],  $this->string->chop(4));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBreak ():void {

        $this->assertSame(['Fire', 'ubFire', 'ubFireHub'],  Str::from('FireHubFireHubFireHub')->break('H', 3));
        $this->assertSame(['FireHubFireHubFireHub'],  Str::from('FireHubFireHubFireHub')->break('h'));
        $this->assertSame(['Fire', 'ubFire', 'ubFire', 'ub'],  IStr::from('FireHubFireHubFireHub')->break('h'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBreakWithAny ():void {

        $this->assertSame(['Fir', 'Hub W', 'b A', 'lication'],  Str::from('FireHub Web Application')->breakWithAny(['e', 'p']));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGroup ():void {

        $this->assertSame(['Fir', 'eHu', 'b'],  $this->string->group(3));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGroupLengthLessThenOne ():void {

        $this->expectException(Error::class);

        $this->string->group(0);

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
    public function testInsert ():void {

        $this->assertSame('Fi=reHub',  $this->string->insert('=', 2)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMove ():void {

        $this->assertSame('reFiHub',  $this->string->move(0, 2, 4)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOverwrite ():void {

        $this->assertSame('Fi=Hub',  $this->string->overwrite(2, 4, '=')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOverwriteUntilLessThenFrom ():void {

        $this->expectException(Error::class);

        $this->string->overwrite(4, 2, '=');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplace ():void {

        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ čタčナ }{:;',  $this->mixed->replace('カ', 'č')->string());
        $this->assertSame('FireHub',  $this->string->replace('h', 'č')->string());
        $this->assertSame('Firečub',  $this->insensitive_string->replace('h', 'č')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplaceMultiple ():void {

        $this->assertSame('YYXX', Str::from('XXYY')->replaceMultiple(['X' => 'Y', 'Y' => 'X'])->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplaceRecursive ():void {

        $this->assertSame('1111', Str::from('1122')->replaceRecursive(['1' => '2', '2' => '1'])->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRepeat ():void {

        $this->assertSame('', $this->string->repeat(-5)->string());
        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;', $this->mixed->repeat(1)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReverse ():void {

        $this->assertSame(';:{} ナカタカ ÁßÈ ЙЛ 玛艾杰诶 žćčšđ', $this->mixed->reverse()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPad ():void {

        $this->assertSame('カカカFireHub', $this->string->pad(10, 'カ', Side::LEFT)->string());
        $this->assertSame('カカカカカカđščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;カカカカカカカ', $this->mixed->pad(40, 'カ')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrepend ():void {

        $this->assertSame('カFireHub', $this->string->prepend('カ')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEnsurePrefix ():void {

        $this->assertSame('FireHub', $this->string->ensurePrefix('Fi')->string());
        $this->assertSame('fiFireHub', $this->string->ensurePrefix('fi')->string());
        $this->assertSame('FireHub', $this->insensitive_string->ensurePrefix('fi')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEnsureSuffix ():void {

        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;カ', $this->mixed->ensureSuffix('カ')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRemovePrefix ():void {

        $this->assertSame('FireHub', $this->string->removePrefix('fi')->string());
        $this->assertSame('reHub', $this->insensitive_string->removePrefix('fi')->string());
        $this->assertSame('ćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ }{:;', $this->mixed->removePrefix('đšč')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRemoveSuffix ():void {

        $this->assertSame('Fire', $this->string->removeSuffix('Hub')->string());
        $this->assertSame('đščćž 诶杰艾玛 ЛЙ ÈßÁ カタ', $this->mixed->removeSuffix('カナ }{:;')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSurround ():void {

        $this->assertSame('カカFireHubカカ', $this->string->surround('カカ')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testShuffle ():void {

        $this->assertIsString($this->string->shuffle()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAppend ():void {

        $this->assertSame('FireHubカ', $this->string->append('カ')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQuote ():void {

        $this->assertSame('*đščćž* *诶杰艾玛* *ЛЙ* *ÈßÁ* *カタカナ* *}{:;*', $this->mixed->quote('*')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTrim ():void {

        $this->assertSame('FireHub',  Str::from("\r\nFireHub\r\n")->trim()->string());
        $this->assertSame("FireHub\r\n",  Str::from("FireHub\r\n")->trim(Side::LEFT)->string());
        $this->assertSame("\r\nFireHub",  Str::from("\r\nFireHub")->trim(Side::RIGHT)->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTruncate ():void {

        $this->assertSame('FireHub Web',  Str::from('FireHub Web App')->truncate(-4)->string());
        $this->assertSame('FireHub...',  Str::from('FireHub Web App')->truncate(10, '...')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTruncateWithGreaterThanLength ():void {

        $this->expectException(Error::class);

        $this->string->truncate(2, '...');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSafeTruncate ():void {

        $this->assertSame('FireHub Web...',  Str::from('FireHub Web Application')->safeTruncate(17, '...')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSafeTruncateWithGreaterThanLength ():void {

        $this->expectException(Error::class);

        $this->string->safeTruncate(2, '...');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirst ():void {

        $this->assertSame('F',  $this->string->first()->string());
        $this->assertSame('đ',  $this->mixed->first()->string());
        $this->assertSame(null, $this->empty->first());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLast ():void {

        $this->assertSame('b',  $this->string->last()->string());
        $this->assertSame(null,  $this->empty->last());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContainTimes ():void {

        $this->assertSame(2,  $this->mixed->containTimes('カ'));
        $this->assertSame(1,  $this->insensitive_string->containTimes('f'));

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