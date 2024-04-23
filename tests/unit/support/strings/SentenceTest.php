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
use FireHub\Core\Support\Strings\Sentence;
use PHPUnit\Framework\Attributes\CoversClass;
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Test Sentence string support class
 * @since 1.0.0
 */
#[CoversClass(Sentence::class)]
final class SentenceTest extends Base {

    public Sentence $sentence;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->sentence = Sentence::from('FireHub Web App', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testDot ():void {

        $this->assertSame('FireHub Web App.', $this->sentence->ensureDot()->string());
        $this->assertSame('FireHub Web App', $this->sentence->removeDot()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSpaceless ():void {

        $this->assertSame('FireHubWebApp', $this->sentence->spaceless()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTitleize ():void {

        $this->assertSame('FireHub Web App', Sentence::from('fireHub Web app')->titleize()->string());
        $this->assertSame('FireHub at', Sentence::from('fireHub at')->titleize()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPascalize ():void {

        $this->assertSame('FireHubWebApp', Sentence::from('fireHub Web app')->pascalize()->string());

    }

}