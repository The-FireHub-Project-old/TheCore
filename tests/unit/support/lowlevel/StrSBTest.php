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

namespace support\lowlevel;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\LowLevel\ {
    StrSB, StrSafe
};
use FireHub\Core\Support\Enums\Side;
use PHPUnit\Framework\Attributes\CoversClass;
use Error, ValueError, Stringable;

/**
 * ### Test single-byte string low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(StrSB::class)]
#[CoversClass(StrSafe::class)]
final class StrSBTest extends Base {

    public string $empty_string = '';
    public string $string = 'The lazy fox jumped over the fence';
    public string $string_single_quote_with_slash = "O\'Reilly";
    public string $string_single_quote_without_slash = "O'Reilly";
    public string $string_double_quote_with_slash = 'O\"Reilly';
    public string $string_double_quote_without_slash = 'O"Reilly';
    public string $string_backslash_with_slash = 'O\\Reilly';
    public string $string_backslash_without_slash = 'O\Reilly';

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertFalse(StrSB::contains('j', $this->empty_string));
        $this->assertTrue(StrSB::contains('j', $this->string));
        $this->assertFalse(StrSB::contains('J', $this->string));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStartsWith ():void {

        $this->assertTrue(StrSB::startsWith('T', $this->string));
        $this->assertFalse(StrSB::startsWith('t', $this->string));
        $this->assertFalse(StrSB::startsWith('p', $this->string));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEndsWith ():void {

        $this->assertTrue(StrSB::endsWith('e', $this->string));
        $this->assertFalse(StrSB::endsWith('E', $this->string));
        $this->assertFalse(StrSB::endsWith('p', $this->string));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAddSlashes ():void {

        $this->assertSame("O\\\\\\'Reilly", StrSB::addSlashes($this->string_single_quote_with_slash));
        $this->assertSame("\\O\\\\Reilly", StrSB::addSlashes($this->string_backslash_without_slash, 'A..Z'));
        $this->assertSame("O\\R\\e\\i\\l\\l\\y", StrSB::addSlashes($this->string_backslash_without_slash, 'a..z'));
        $this->assertSame("O\'Reilly", StrSB::addSlashes($this->string_single_quote_without_slash));
        $this->assertSame("O\\\\\\\"Reilly", StrSB::addSlashes($this->string_double_quote_with_slash));
        $this->assertSame("O\\\\\\\"Reilly", StrSB::addSlashes($this->string_double_quote_with_slash));
        $this->assertSame("O\\\\Reilly", StrSB::addSlashes($this->string_backslash_with_slash));
        $this->assertSame("O\\\\Reilly", StrSB::addSlashes($this->string_backslash_without_slash));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStripSlashes ():void {

        $this->assertSame("O'Reilly", StrSB::stripSlashes($this->string_single_quote_with_slash));
        $this->assertSame("OReilly", StrSB::stripSlashes($this->string_backslash_without_slash, true));
        $this->assertSame("OReilly", StrSB::stripSlashes($this->string_backslash_without_slash));
        $this->assertSame("O'Reilly", StrSB::stripSlashes($this->string_single_quote_without_slash));
        $this->assertSame("O\"Reilly", StrSB::stripSlashes($this->string_double_quote_with_slash));
        $this->assertSame("O\"Reilly", StrSB::stripSlashes($this->string_double_quote_with_slash));
        $this->assertSame("OReilly", StrSB::stripSlashes($this->string_backslash_with_slash));
        $this->assertSame("OReilly", StrSB::stripSlashes($this->string_backslash_without_slash));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExplode ():void {

        $this->assertSame(
            [''],
            StrSB::explode($this->empty_string, ' ')
        );

        $this->assertSame(
            ['The', 'lazy', 'fox', 'jumped', 'over', 'the', 'fence'],
            StrSB::explode($this->string, ' ')
        );

        $this->assertSame(
            ['The lazy fox ', ' over the fence'],
            StrSB::explode($this->string, 'jumped')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExplodeEmptyString ():void {

        $this->expectException(ValueError::class);

        StrSB::explode($this->string, '');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testImplode ():void {

        $this->assertSame(
            $this->empty_string,
            StrSB::implode(['', null], '')
        );

        $this->assertSame(
            $this->string,
            StrSB::implode(['The', 'lazy', 'fox', 'jumped', 'over', 'the', 'fence'], ' ')
        );

        $this->assertSame(
            'The lazy fox - over the fence',
            StrSB::implode(['The lazy fox ', ' over the fence'], '-')
        );

        $this->assertSame(
            '1;;;2;3.12;x',
            StrSB::implode(
                [
                    true, false, null, 2, 3.12,
                    new class implements Stringable {public function __toString() : string{return 'x';}}
                ],
                ';')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testImplodeCannotConvertString ():void {

        $this->expectException(Error::class);

        StrSB::implode([fn() => '', ''], '');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQuoteMeta ():void {

        $this->assertSame(
            "PHP is a popular scripting language\. Fast, flexible, and pragmatic\.",
            StrSB::quoteMeta('PHP is a popular scripting language. Fast, flexible, and pragmatic.')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplace ():void {

        $this->assertSame(
            'The lazy mouse jumped over the fence',
            StrSB::replace('fox', 'mouse', $this->string)
        );

        $this->assertSame(
            $this->string,
            StrSB::replace('Fox', 'mouse', $this->string)
        );

        $this->assertSame(
            'The lazy fox, the lazy fox, the lazy fox.',
            StrSB::replace('mouse', 'fox', 'The lazy mouse, the lazy mouse, the lazy mouse.')
        );

        $this->assertSame(
            'The lazy mouse jumped over the fence',
            StrSB::replace('Fox', 'mouse', $this->string, false)
        );

        $this->assertSame(
            'An lazy mouse jumped over the fence',
            StrSB::replace(['The', 'fox'], ['An',  'mouse'], $this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRepeat ():void {

        $this->assertSame(
            'fox-fox',
            StrSB::repeat('fox', 2, '-')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRepeatLessThenOne ():void {

        $this->expectException(Error::class);

        StrSB::repeat('fox', -1);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStripTags ():void {

        $this->assertSame(
            'Test paragraph. Other text',
            StrSB::stripTags(
                '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>'
            )
        );

        $this->assertSame(
            '<p>Test paragraph.</p> <a href="#fragment">Other text</a>',
            StrSB::stripTags(
                '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>',
                ['p', 'a']
            )
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTrim ():void {

        $this->assertSame(
            "These are a few words :) ...  \n\r",
            StrSB::trim("\t\tThese are a few words :) ...  \n\r", Side::LEFT)
        );

        $this->assertSame(
            "\t\tThese are a few words :) ...",
            StrSB::trim("\t\tThese are a few words :) ...", Side::RIGHT)
        );

        $this->assertSame(
            "These are a few words :) ...",
            StrSB::trim("\t\tThese are a few words :) ...  \n\r", Side::BOTH)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCompare ():void {

        $this->assertSame(-1, StrSB::compare('a', 'z'));
        $this->assertSame(1, StrSB::compare('hello', 'Hello'));
        $this->assertSame(0, StrSB::compare('Hello', 'Hello'));

        $this->assertSame(1, StrSB::compare('a', 'A'));
        $this->assertSame(0, StrSB::compare('a', 'A', false));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testChunkSplit ():void {

        $this->assertSame(
            'The lazy f-ox jumped -over the f-ence-',
            StrSB::chunkSplit($this->string, 10, '-')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPad ():void {

        $this->assertSame(
            '----------------The lazy fox jumped over the fence',
            StrSB::pad($this->string, 50, '-', Side::LEFT)
        );

        $this->assertSame(
            'The lazy fox jumped over the fence----------------',
            StrSB::pad($this->string, 50, '-', Side::RIGHT)
        );

        $this->assertSame(
            '--------The lazy fox jumped over the fence--------',
            StrSB::pad($this->string, 50, '-', Side::BOTH)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPadIsEmpty ():void {

        $this->expectException(Error::class);

        StrSB::pad($this->string, 50, '');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReplacePart ():void {

        $this->assertSame(
            'An lazy fox jumped over the fence',
            StrSB::replacePart($this->string, 'An', 0, 3)
        );

        $this->assertSame(
            'The lazy fox jumped over the bush',
            StrSB::replacePart($this->string, 'bush', -5, 5)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testReverse ():void {

        $this->assertSame(
            'ecnef eht revo depmuj xof yzal ehT',
            StrSB::reverse($this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWrap ():void {

        $this->assertSame(
            'The lazy fox jumped<br />over the fence',
            StrSB::wrap($this->string, 20, '<br />')
        );

        $this->assertSame(
            'A very<br />long<br />wooooooo<br />ooooord',
            StrSB::wrap('A very long woooooooooooord', 8, '<br />', true)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToLower ():void {

        $this->assertSame(
            'the lazy fox jumped over the fence',
            StrSB::toLower($this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToUpper ():void {

        $this->assertSame(
            'THE LAZY FOX JUMPED OVER THE FENCE',
            StrSB::toUpper($this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testToTitle ():void {

        $this->assertSame(
            'The Lazy Fox Jumped Over The Fence',
            StrSB::toTitle($this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCapitalizeDeCapitalize ():void {

        $this->assertSame(
            'the lazy fox jumped over the fence',
            StrSB::deCapitalize($this->string)
        );

        $this->assertSame(
            'The lazy fox jumped over the fence',
            StrSB::capitalize($this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTranslate ():void {

        $this->assertSame(
            'Hello World',
            StrSB::translate('Hillo Warld', ['il' => 'el', 'ar' => 'or'])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPart ():void {

        $this->assertSame(
            'azy fox jumped over the fence',
            StrSB::part($this->string, 5)
        );

        $this->assertSame(
            'ox j',
            StrSB::part($this->string, 10, 4)
        );

        $this->assertSame(
            'fen',
            StrSB::part($this->string, -5, 3)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstPart ():void {

        $this->assertSame(
            'fox jumped over the fence',
            StrSB::firstPart('fox', $this->string)
        );

        $this->assertSame(
            'The lazy',
            StrSB::firstPart(' fox', $this->string, true)
        );

        $this->assertSame(
            ' fox jumped over the fence',
            StrSB::firstPart(' Fox', $this->string, false, false)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastPart ():void {

        $this->assertSame(
            'jumped over the fence',
            StrSB::lastPart('jumped', $this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPartFrom ():void {

        $this->assertSame(
            'ox jumped over the fence',
            StrSB::partFrom('xov', $this->string)
        );

        $this->assertFalse(
            StrSB::partFrom('bqg', $this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountByChar ():void {

        $this->assertSame(
            [
                32 => 6, 84 => 1, 97 => 1, 99 => 1, 100 => 1, 101 => 6, 102 => 2,
                104 => 2, 106 => 1, 108 => 1, 109 => 1, 110 => 1, 111 =>  2, 112 => 1,
                114 => 1, 116 => 1, 117 => 1, 118 => 1, 120 => 1, 121 => 1, 122 =>  1
            ],
            StrSB::countByChar($this->string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSplit ():void {

        $this->assertSame(
            [
                0 => 'The l',
                1 => 'azy f',
                2 => 'ox ju',
                3 => 'mped ',
                4 => 'over ',
                5 => 'the f',
                6 => 'ence',
            ],
            StrSB::split($this->string, 5)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSplitLengthLessThanOne ():void {

        $this->expectException(Error::class);

        StrSB::split($this->string, 0);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountWords ():void {

        $this->assertSame(
            7,
            StrSB::countWords('The lazy fox jumped3over the fence')
        );

        $this->assertSame(
            6,
            StrSB::countWords('The lazy fox jumped3over the fence', 'jumped3over')
        );

        $this->assertSame(
            [
                0 => 'The',
                1 => 'lazy',
                2 => 'fox',
                3 => 'jumped',
                4 => 'over',
                5 => 'the',
                6 => 'fence'
            ],
            StrSB::countWords($this->string, format: 1)
        );

        $this->assertSame(
            [
                0 => 'The',
                4 => 'lazy',
                9 => 'fox',
                13 => 'jumped',
                20 => 'over',
                25 => 'the',
                29 => 'fence'
            ],
            StrSB::countWords($this->string, format: 2)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountWordsFailed ():void {

        $this->expectException(Error::class);

        StrSB::countWords($this->empty_string);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPartCount ():void {

        $text = 'This is a test';

        $this->assertSame(
            2,
            StrSB::partCount($text, 'is')
        );

        $this->assertSame(
            1,
            StrSB::partCount($text, 'is', 3)
        );

        $this->assertSame(
            0,
            StrSB::partCount($text, 'is', 3, 3)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSegmentMatching ():void {

        $this->assertSame(
            0,
            StrSB::segmentMatching($this->string, 'lazy')
        );

        $this->assertSame(
            4,
            StrSB::segmentMatching($this->string, 'lazy', 4)
        );

        $this->assertSame(
            3,
            StrSB::segmentMatching($this->string, 'lazy', 4, 3)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSegmentNotMatching ():void {

        $this->assertSame(
            4,
            StrSB::segmentNotMatching($this->string, 'lazy')
        );

        $this->assertSame(
            0,
            StrSB::segmentNotMatching($this->string, 'lazy', 4)
        );

        $this->assertSame(
            2,
            StrSB::segmentNotMatching($this->string, 'lazy', 2, 3)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLength ():void {

        $this->assertSame(
            34,
            StrSB::length($this->string)
        );

        $this->assertSame(
            0,
            StrSB::length($this->empty_string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testComparePart ():void {

        $this->assertSame(
            0,
            StrSB::comparePart('abcde', 'BC', 1, 2, false)
        );

        $this->assertSame(
            1,
            StrSB::comparePart('abcde', 'bc', 1, 3)
        );

        $this->assertSame(
            -1,
            StrSB::comparePart('abcde', 'cd', 1, 2)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testComparePartOffsetHigherThenString ():void {

        $this->expectException(ValueError::class);

        StrSB::comparePart('abcde', 'BC', 10);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCompareFirstN ():void {

        $this->assertSame(
            1,
            StrSB::compareFirstN('Hello John', 'Hello Doe', 50)
        );

        $this->assertSame(
            0,
            StrSB::compareFirstN('Hello John', 'Hello Doe', 5)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstPosition ():void {

        $this->assertFalse(StrSB::firstPosition('Fox', $this->string));

        $this->assertSame(
            9,
            StrSB::firstPosition('Fox', $this->string, false)
        );

        $this->assertSame(
            9,
            StrSB::firstPosition('Fox', $this->string, false, 9)
        );

        $this->assertSame(
            0,
            StrSB::firstPosition('T', $this->string)
        );

        $this->assertFalse(
            StrSB::firstPosition('Fox', $this->string, false, 10)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastPosition ():void {

        $this->assertFalse(StrSB::lastPosition('Fox', $this->string));

        $this->assertSame(
            9,
            StrSB::lastPosition('Fox', $this->string, false)
        );

        $this->assertSame(
            9,
            StrSB::lastPosition('Fox', $this->string, false, 9)
        );

        $this->assertSame(
            0,
            StrSB::lastPosition('T', $this->string)
        );

        $this->assertFalse(
            StrSB::lastPosition('Fox', $this->string, false, 10)
        );

    }

}