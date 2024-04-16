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
    StrMB, StrSafe
};
use FireHub\Core\Support\Enums\ {
    Side, String\CaseFolding, String\Encoding
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, RunInSeparateProcess
};
use Error, ValueError;

/**
 * ### Test multibyte string low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(StrSafe::class)]
#[CoversClass(StrMB::class)]
final class StrMBTest extends Base {

    public string $empty_string = '';
    public string $string = 'đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ';
    public string $string_single_quote_with_slash = "đščć\'ž";
    public string $string_single_quote_without_slash = "đščć'ž";
    public string $string_double_quote_with_slash = 'đščć\"ž';
    public string $string_double_quote_without_slash = 'đščć"ž';
    public string $string_backslash_with_slash = 'đščć\\ž';
    public string $string_backslash_without_slash = 'đščć\ž';

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testContains ():void {

        $this->assertFalse(StrMB::contains('j', $this->empty_string));
        $this->assertTrue(StrMB::contains('カ', $this->string));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStartsWith ():void {

        $this->assertTrue(StrMB::startsWith('đ', $this->string));
        $this->assertFalse(StrMB::startsWith('Đ', $this->string));
        $this->assertFalse(StrMB::startsWith('č', $this->string));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEndsWith ():void {

        $this->assertTrue(StrMB::endsWith('ナ', $this->string));
        $this->assertFalse(StrMB::endsWith('p', $this->string));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAddSlashes ():void {

        $this->assertSame("đščć\\\\\\'ž", StrMB::addSlashes($this->string_single_quote_with_slash));
        $this->assertSame("đščć\'ž", StrMB::addSlashes($this->string_single_quote_without_slash));
        $this->assertSame("đščć\\\\\\\"ž", StrMB::addSlashes($this->string_double_quote_with_slash));
        $this->assertSame("đščć\\\\\\\"ž", StrMB::addSlashes($this->string_double_quote_with_slash));
        $this->assertSame("đščć\\\\ž", StrMB::addSlashes($this->string_backslash_with_slash));
        $this->assertSame("đščć\\\\ž", StrMB::addSlashes($this->string_backslash_without_slash));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStripSlashes ():void {

        $this->assertSame("đščć'ž", StrMB::stripSlashes($this->string_single_quote_with_slash));
        $this->assertSame("đščć'ž", StrMB::stripSlashes($this->string_single_quote_without_slash));
        $this->assertSame("đščć\"ž", StrMB::stripSlashes($this->string_double_quote_with_slash));
        $this->assertSame("đščć\"ž", StrMB::stripSlashes($this->string_double_quote_with_slash));
        $this->assertSame("đščćž", StrMB::stripSlashes($this->string_backslash_with_slash));
        $this->assertSame("đščćž", StrMB::stripSlashes($this->string_backslash_without_slash));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExplode ():void {

        $this->assertSame(
            ['đščćž', '诶杰艾玛', 'ЛЙ', 'ÈßÁ', 'カタカナ'],
            StrMB::explode($this->string, ' ')
        );

        $this->assertSame(
            ['đščćž 诶杰艾玛 ЛЙ ÈßÁ ', 'タ', 'ナ'],
            StrMB::explode($this->string, 'カ')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testExplodeEmptyString ():void {

        $this->expectException(ValueError::class);

        StrMB::explode($this->string, '');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testImplode ():void {

        $this->assertSame(
            $this->string,
            StrMB::implode(['đščćž', '诶杰艾玛', 'ЛЙ', 'ÈßÁ', 'カタカナ'], ' ')
        );

        $this->assertSame(
            'đščćž 诶杰艾玛 ЛЙ ÈßÁ žタžナ',
            StrMB::implode(['đščćž 诶杰艾玛 ЛЙ ÈßÁ ', 'タ', 'ナ'], 'ž')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testImplodeCannotConvertString ():void {

        $this->expectException(Error::class);

        StrMB::implode([fn() => '', ''], '');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQuoteMeta ():void {

        $this->assertSame(
            "đščćž\. đščćž\.",
            StrMB::quoteMeta('đščćž. đščćž.')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRepeat ():void {

        $this->assertSame(
            'ÈßÁ カタカナЙÈßÁ カタカナ',
            StrMB::repeat('ÈßÁ カタカナ', 2, 'Й')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testRepeatLessThenOne ():void {

        $this->expectException(Error::class);

        StrMB::repeat('カタ', -1);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testStripTags ():void {

        $this->assertSame(
            'đščćž 诶杰艾玛. ÈßÁ カタカナ',
            StrMB::stripTags(
                '<p>đščćž 诶杰艾玛.</p><!-- Comment --> <a href="#fragment">ÈßÁ カタカナ</a>'
            )
        );

        $this->assertSame(
            '<p>đščćž 诶杰艾玛.</p> <a href="#fragment">ÈßÁ カタカナ</a>',
            StrMB::stripTags(
                '<p>đščćž 诶杰艾玛.</p><!-- Comment --> <a href="#fragment">ÈßÁ カタカナ</a>',
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
            "ÈßÁ カタカナЙÈßÁ カタカナ :) ...  \n\r",
            StrMB::trim("\t\tÈßÁ カタカナЙÈßÁ カタカナ :) ...  \n\r", Side::LEFT)
        );

        $this->assertSame(
            "\t\tÈßÁ カタカナЙÈßÁ カタカナ :) ...",
            StrMB::trim("\t\tÈßÁ カタカナЙÈßÁ カタカナ :) ...", Side::RIGHT)
        );

        $this->assertSame(
            "ÈßÁ カタカナЙÈßÁ カタカナ :) ...",
            StrMB::trim("\t\tÈßÁ カタカナЙÈßÁ カタカナ :) ...  \n\r", Side::BOTH)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCompare ():void {

        $this->assertSame(-1, StrMB::compare('Č', 'č'));
        $this->assertSame(1, StrMB::compare('čao', 'Čao'));
        $this->assertSame(0, StrMB::compare('Čao', 'Čao'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testConvert ():void {

        $string = $this->string;

        $this->assertSame(
            'ĐŠČĆŽ 诶杰艾玛 ЛЙ ÈSSÁ カタカナ',
            StrMB::convert($string, CaseFolding::UPPER)
        );

        $this->assertSame(
            'đščćž 诶杰艾玛 лй èßá カタカナ',
            StrMB::convert($string, CaseFolding::LOWER)
        );

        $this->assertSame(
            'Đščćž 诶杰艾玛 Лй Èßá カタカナ',
            StrMB::convert($string, CaseFolding::TITLE)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPart ():void {

        $this->assertSame(
            '诶杰艾玛 ЛЙ ÈßÁ カタカナ',
            StrMB::part($this->string, 6)
        );

        $this->assertSame(
            'ЛЙ È',
            StrMB::part($this->string, 11, 4)
        );

        $this->assertSame(
            'カタカ',
            StrMB::part($this->string, -4, 3)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstPart ():void {

        $this->assertSame(
            '诶杰艾玛 ЛЙ ÈßÁ カタカナ',
            StrMB::firstPart('诶杰艾玛', $this->string)
        );

        $this->assertSame(
            'đščćž 诶杰艾玛',
            StrMB::firstPart(' ЛЙ', $this->string, true)
        );

        $this->assertSame(
            'ЛЙ ÈßÁ カタカナ',
            StrMB::firstPart('лй', $this->string, false, false)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastPart ():void {

        $this->assertSame(
            '诶杰艾玛 ЛЙ ÈßÁ カタカナ',
            StrMB::lastPart('诶杰艾玛', $this->string)
        );

        $this->assertSame(
            'đščćž 诶杰艾玛',
            StrMB::lastPart(' ЛЙ', $this->string, true)
        );

        $this->assertSame(
            'čćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ',
            StrMB::lastPart('Č', $this->string, false, false)
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
                0 => 'đščćž',
                1 => ' 诶杰艾玛',
                2 => ' ЛЙ È',
                3 => 'ßÁ カタ',
                4 => 'カナ'
            ],
            StrMB::split($this->string, 5)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSplitLengthLessThanOne ():void {

        $this->expectException(Error::class);

        StrMB::split($this->string, 0);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPartCount ():void {

        $this->assertSame(
            2,
            StrMB::partCount('ЛЙ ÈßÁ ЛЙ ÈßÁ', 'ЛЙ')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLength ():void {

        $this->assertSame(
            22,
            StrMB::length($this->string)
        );

        $this->assertSame(
            0,
            StrMB::length($this->empty_string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFirstPosition ():void {

        $this->assertFalse(StrMB::firstPosition('лй', $this->string));

        $this->assertSame(
            11,
            StrMB::firstPosition('лй', $this->string, false)
        );

        $this->assertSame(
            11,
            StrMB::firstPosition('ЛЙ', $this->string, false, 9)
        );

        $this->assertSame(
            0,
            StrMB::firstPosition('đ', $this->string)
        );

        $this->assertFalse(
            StrMB::firstPosition('ЛЙ', $this->string, false, 20)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testLastPosition ():void {

        $this->assertFalse(StrMB::lastPosition('лй', $this->string));

        $this->assertSame(
            11,
            StrMB::lastPosition('лй', $this->string, false)
        );

        $this->assertSame(
            11,
            StrMB::lastPosition('ЛЙ', $this->string, false, 9)
        );

        $this->assertSame(
            0,
            StrMB::lastPosition('đ', $this->string)
        );

        $this->assertFalse(
            StrMB::lastPosition('ЛЙ', $this->string, false, 20)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RunInSeparateProcess]
    public function testEncoding ():void {

        $this->assertTrue(StrMB::encoding(Encoding::UTF_8));

        $this->assertSame(Encoding::UTF_8, StrMB::encoding());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDetectEncoding ():void {

        $this->assertSame(Encoding::UTF_8, StrMB::detectEncoding($this->string));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testConvertEncoding ():void {

        $this->assertSame(
            '+AREBYQENAQcBfg +i/ZncIJ+c5s +BBsEGQ +AMgA3wDB +MKswvzCrMMo-',
            StrMB::convertEncoding($this->string, Encoding::UTF_7)
        );

        $this->assertSame(
            '&AREBYQENAQcBfg- &i,ZncIJ+c5s- &BBsEGQ- &AMgA3wDB- &MKswvzCrMMo-',
            StrMB::convertEncoding($this->string, Encoding::UTF7_IMAP)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCheckEncoding ():void {

        $this->assertTrue(StrMB::checkEncoding($this->string));

        $this->assertFalse(StrMB::checkEncoding($this->string, Encoding::UTF_7));

    }

}