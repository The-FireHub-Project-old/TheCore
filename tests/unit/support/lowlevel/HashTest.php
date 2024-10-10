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
use FireHub\Core\Support\LowLevel\Hash;
use FireHub\Core\Support\Enums\Hash\ {
    Algorithm, HmacAlgorithm
};
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test hash low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Hash::class)]
#[CoversClass(Algorithm::class)]
#[CoversClass(HmacAlgorithm::class)]
final class HashTest extends Base {

    public string $string = 'test';

    public string $generated;

    public string $generated_hmac;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->generated = Hash::generate($this->string, Algorithm::MD5);

        $this->generated_hmac = Hash::generateHMAC($this->string, 'test', HmacAlgorithm::MD5);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCompare ():void {

        $this->assertTrue(Hash::compare($this->generated, '098f6bcd4621d373cade4e832627b4f6'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHkdfKey ():void {

        $encryption_key = Hash::hkdfKey(HmacAlgorithm::SHA3_256, 'test', 32, 'info', 'salt');
        $authentication_key = Hash::hkdfKey(HmacAlgorithm::SHA3_256, 'test', 32, 'info', 'salt');

        $this->assertEquals($encryption_key, $authentication_key);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPbkdf2Key ():void {

        $this->assertEquals(
            '669cfe52482116fda1aa',
            Hash::pbkdf2Key(HmacAlgorithm::SHA256, 'password', 'salt', 600000, 20)
        );

    }

}