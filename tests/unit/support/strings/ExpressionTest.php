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
use FireHub\Core\Support\Strings\Expression;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends
};
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Test regular class
 * @since 1.0.0
 */
#[CoversClass(Expression::class)]
final class ExpressionTest extends Base {

    public Expression $expression;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->expression = new Expression('FireHub đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ', Encoding::UTF_8);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMatch ():void {

        $this->assertTrue($this->expression->match('đšč', true));
        $this->assertFalse($this->expression->match('Š', true));
        $this->assertTrue($this->expression->match('Š', false));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testReplace ():void {

        $this->assertSame(
            'FireHub đščćž 诶杰艾玛 ЛЙ ÈßÁ éタéナ',
            $this->expression->replace('[カ]', 'é')->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testReplaceFunc ():void {

        $this->assertSame(
            'FireHub đščćž 诶杰艾玛 Л-Й- ÈßÁ カタカナ',
            $this->expression->replaceFunc(
                '[ЛЙ]',
                fn($matches) => $matches[0].'-'
            )->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testString ():void {

        $this->assertSame(
            'FireHub đščćž 诶杰艾玛 ЛЙ ÈßÁ カタカナ',
            $this->expression->string()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testString')]
    public function testPrint ():void {

        $this->assertSame($this->expression->string(), $this->expression->__toString());

    }

}