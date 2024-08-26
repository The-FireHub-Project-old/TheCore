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
    TimeZone, UnixTimestamp
};
use FireHub\Core\Support\Enums\DateTime\Zone;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test Unix Timestamp zwick support class
 * @since 1.0.0
 */
#[CoversClass(UnixTimestamp::class)]
#[CoversClass(TimeZone::class)]
#[CoversClass(Zone::class)]
final class UnixTimestampTest extends Base {

    public UnixTimestamp $timestamp;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->timestamp = UnixTimestamp::from(
            '1970-01-01',
            TimeZone::create(Zone::AMERICA_NEW_YORK)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSeconds ():void {

        $this->assertSame(18000, $this->timestamp->seconds());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('18000', $this->timestamp->__toString());

    }

}