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
use FireHub\Core\Support\Url;
use FireHub\Core\Support\Enums\URL\Schema;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test URL support class
 * @since 1.0.0
 */
#[CoversClass(Url::class)]
#[CoversClass(Schema::class)]
final class UrlTest extends Base {

    public Url $url ;

    public Url $empty;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->url = new Url('https://www.example.com:100/test/page?par1=1&par2=2#frag');
        $this->empty = new Url('');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testScheme ():void {

        $this->assertSame(Schema::HTTP, $this->url->scheme(Schema::HTTP)->scheme());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUsername ():void {

        $this->assertSame('user', $this->url->username('user')->username());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPassword ():void {

        $this->assertSame('pass', $this->url->password('pass')->password());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHost ():void {

        $this->assertSame('www.example.net', $this->url->host('www.example.net')->host());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPort ():void {

        $this->assertSame(120, $this->url->port(120)->port());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPath ():void {

        $this->assertSame('/test/page', $this->url->path());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPathList ():void {

        $this->assertSame( [1 => 'test', 2 => 'page'], $this->url->pathList()->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQuery ():void {

        $this->assertSame( 'par1=1&par2=2', $this->url->query());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testQueryList ():void {

        $this->assertSame( ['par1' => '1', 'par2' => '2'], $this->url->queryList()->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFragment ():void {

        $this->assertSame('new_frag', $this->url->fragment('new_frag')->fragment());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParse ():void {

        $this->assertSame( 'https://www.example.com:100/test/page?par1=1&par2=2#frag', $this->url->parse());

    }

}