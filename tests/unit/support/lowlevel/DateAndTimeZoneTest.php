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
use FireHub\Core\Support\LowLevel\DateAndTimeZone;
use FireHub\Core\Support\Enums\DateTime\Zone;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Depends
};

/**
 * ### Test timezone character low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(DateAndTimeZone::class)]
final class DateAndTimeZoneTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetDefaultTimezone ():void {

        $this->assertTrue(DateAndTimeZone::setDefaultTimezone(Zone::AMERICA_NEW_YORK));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[Depends('testSetDefaultTimezone')]
    public function testGetDefaultTimezone ():void {

        $this->assertSame(Zone::AMERICA_NEW_YORK, DateAndTimeZone::getDefaultTimezone());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAbbreviationList ():void {

        $this->assertIsArray(DateAndTimeZone::abbreviationList());

    }

}