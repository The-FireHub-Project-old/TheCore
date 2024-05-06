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

namespace support\strings\articles;

use FireHub\Core\Support\Str;
use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Strings\Articles\Paragraph;
use PHPUnit\Framework\Attributes\CoversClass;
use FireHub\Core\Support\Enums\String\ {
    Encoding, EndingPunctuation
};

/**
 * ### Test Paragraph string support class
 * @since 1.0.0
 */
#[CoversClass(Paragraph::class)]
#[CoversClass(EndingPunctuation::class)]
final class ParagraphTest extends Base {

    public Paragraph $paragraph;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->paragraph = Paragraph::from('FireHub Web App', Encoding::UTF_8)->title('The FireHub');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTitle ():void {

        $this->assertSame('The FireHub', $this->paragraph->title()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSentences ():void {

        $this->assertEquals([Str::from('FireHub Web App.'), Str::from('Best App.')], Paragraph::from('FireHub Web App. Best App.')->sentences());

    }

}