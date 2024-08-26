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
    TimeZone, Timestamp
};
use FireHub\Core\Support\Enums\DateTime\ {
    Epoch, Zone
};
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test Timestamp zwick support class
 * @since 1.0.0
 */
#[CoversClass(Timestamp::class)]
#[CoversClass(TimeZone::class)]
#[CoversClass(Epoch::class)]
#[CoversClass(Zone::class)]
final class TimestampTest extends Base {

    public Timestamp $timestamp;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->timestamp = Timestamp::from(
            '2024-01-01',
            TimeZone::create(Zone::AMERICA_NEW_YORK),
            Epoch::Y2K
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSeconds ():void {

        $this->assertSame(757400400, $this->timestamp->seconds());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testEpoch ():void {

        $this->assertSame(Epoch::Y2K->value, $this->timestamp->epoch());

    }

}