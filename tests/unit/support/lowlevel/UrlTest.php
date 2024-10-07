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
use FireHub\Core\Support\LowLevel\Url;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test url low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Url::class)]
final class UrlTest extends Base {

    public string $url = 'https://www.example.com:100/test/page?par1=1&par2=2#frag';

    public string $empty = '';

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBuildQuery ():void {

        $this->assertSame('foo=bar&baz=boom&cow=milk&php=hypertext+processor', Url::buildQuery([
            'foo' => 'bar',
            'baz' => 'boom',
            'cow' => 'milk',
            'null' => null,
            'php' => 'hypertext processor'
        ]));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParse ():void {

        $this->assertSame([
            'scheme' => 'https',
            'host' => 'www.example.com',
            'port' => 100,
            'path' => '/test/page',
            'query' => 'par1=1&par2=2',
            'fragment' => 'frag'
        ], Url::parse($this->url));

        $this->assertSame(['path' => ''],Url::parse($this->empty));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParseQuery ():void {

        $this->assertSame(['MyValue' => 'Something'],Url::parseQuery('MyValue=Something'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEncodeDecode ():void {

        $this->assertSame(
            'https%3A%2F%2Fwww.example.com%3A100%2Ftest%2Fpage%3Fpar1%3D1%26par2%3D2%23frag',
            Url::encode($this->url)
        );

        $this->assertSame(
            $this->url,
            Url::decode('https%3A%2F%2Fwww.example.com%3A100%2Ftest%2Fpage%3Fpar1%3D1%26par2%3D2%23frag')
        );

    }

}