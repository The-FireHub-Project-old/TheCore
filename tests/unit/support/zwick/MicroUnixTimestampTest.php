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
use FireHub\Core\Support\Zwick\ {
    TimeZone, MicroUnixTimestamp
};
use FireHub\Core\Support\Enums\DateTime\Zone;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test Unix Timestamp zwick support class
 * @since 1.0.0
 */
#[CoversClass(MicroUnixTimestamp::class)]
#[CoversClass(TimeZone::class)]
#[CoversClass(Zone::class)]
final class MicroUnixTimestampTest extends Base {

    public MicroUnixTimestamp $timestamp;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->timestamp = MicroUnixTimestamp::from(
            '1970-01-01 12:45:31.452212',
            TimeZone::create(Zone::AMERICA_NEW_YORK)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSeconds ():void {

        $this->assertSame(63931, $this->timestamp->seconds());

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
    public function testMicrotime ():void {

        $this->assertSame('63931.452212', $this->timestamp->microtime()->string());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('63931.452212', $this->timestamp->__toString());

    }

}