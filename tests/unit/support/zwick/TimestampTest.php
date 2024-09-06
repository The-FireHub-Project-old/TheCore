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

namespace support\zwick;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Zwick\Timestamp;
use FireHub\Core\Support\Enums\DateTime\Epoch;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test Timestamp zwick support class
 * @since 1.0.0
 */
#[CoversClass(Timestamp::class)]
#[CoversClass(Epoch::class)]
final class TimestampTest extends Base {

    public Timestamp $timestamp;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->timestamp = Timestamp::from(1724412073, 452212);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSeconds ():void {

        $this->assertSame(1724412073, $this->timestamp->seconds());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFractions ():void {

        $this->assertSame(452212, $this->timestamp->fractions());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEpoch ():void {

        $this->assertSame('1970-01-01 00:00:00', $this->timestamp->epoch());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMicrotime ():void {

        $this->assertSame('1724412073.452212', $this->timestamp->microtime());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('1724412073.452212', $this->timestamp->__toString());

    }

}