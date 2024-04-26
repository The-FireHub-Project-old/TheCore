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
use FireHub\Core\Support\Strings\Word;
use PHPUnit\Framework\Attributes\CoversClass;
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Test word string support class
 * @since 1.0.0
 */
#[CoversClass(Word::class)]
final class WordTest extends Base {

    public Word $word;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->word = Word::from('FireHub', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAsBoolean ():void {

        $this->assertTrue(Word::from('True')->asBoolean());
        $this->assertTrue(Word::from('1')->asBoolean());
        $this->assertTrue(Word::from('On')->asBoolean());
        $this->assertTrue(Word::from('Yes')->asBoolean());
        $this->assertTrue(Word::from('56.5')->asBoolean());
        $this->assertTrue(Word::from('test')->asBoolean());

        $this->assertFalse(Word::from('False')->asBoolean());
        $this->assertFalse(Word::from('0')->asBoolean());
        $this->assertFalse(Word::from('Off')->asBoolean());
        $this->assertFalse(Word::from('No')->asBoolean());
        $this->assertFalse(Word::from(' ')->asBoolean());
        $this->assertFalse(Word::from('-6')->asBoolean());

    }

}