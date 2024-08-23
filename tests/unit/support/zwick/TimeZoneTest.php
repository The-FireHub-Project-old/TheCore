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
use FireHub\Core\Support\Zwick\TimeZone;
use FireHub\Core\Support\Enums\DateTime\Zone;
use PHPUnit\Framework\Attributes\ {
    CoversClass, RunInSeparateProcess
};

/**
 * ### Test TimeZone zwick support class
 * @since 1.0.0
 */
#[CoversClass(TimeZone::class)]
#[CoversClass(Zone::class)]
final class TimeZoneTest extends Base {

    public TimeZone $timezone;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->timezone = TimeZone::create(Zone::AMERICA_NEW_YORK);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGet ():void {

        $this->assertSame(Zone::AMERICA_NEW_YORK, $this->timezone->get());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOffset ():void {

        $this->assertSame(-18000, $this->timezone->offset());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOffsetDTS ():void {

        $this->assertSame(-14400, $this->timezone->offsetDTS());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RunInSeparateProcess]
    public function testDefaultTimeZone ():void {

        $this->timezone::setDefaultTimeZone(Zone::AMERICA_DENVER);

        $this->assertSame(
            Zone::AMERICA_DENVER,
            $this->timezone::getDefaultTimeZone()
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('America/New_York', $this->timezone->__toString());

    }

}