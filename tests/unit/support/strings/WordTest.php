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
    public function testSnakeCase ():void {

        $this->assertSame('fire_hub', $this->word->snakeCase()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testKebabCase ():void {

        $this->assertSame('fire-hub', $this->word->kebabCase()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDelimit ():void {

        $this->assertSame('fire-hub', $this->word->delimit('-')->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDasherize ():void {

        $this->assertSame('fire-hub', $this->word->dasherize()->string());

    }

}