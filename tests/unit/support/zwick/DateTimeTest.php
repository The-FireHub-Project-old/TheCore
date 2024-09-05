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
    DateTime, TimeZone
};
use FireHub\Core\Support\Enums\DateTime\ {
    Zone, Format\Predefined
};
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test DateTime zwick support class
 * @since 1.0.0
 */
#[CoversClass(DateTime::class)]
#[CoversClass(TimeZone::class)]
#[CoversClass(Zone::class)]
#[CoversClass(Predefined::class)]
final class DateTimeTest extends Base {

    public DateTime $datetime;
    public DateTime $future;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->datetime = DateTime::from('1970-01-01 12:11:30.123456', TimeZone::create(Zone::AMERICA_NEW_YORK));

        $this->future = DateTime::fromFormat(Predefined::DATETIME, '5555-12-31 23:59:59', TimeZone::create(Zone::AMERICA_NEW_YORK));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testTimezone ():void {

        $this->assertEquals(TimeZone::create(Zone::AMERICA_NEW_YORK), $this->datetime->timezone());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetTimezone ():void {

        $this->datetime->setTimezone(Timezone::create(Zone::AUSTRALIA_MELBOURNE));

        $this->assertEquals(TimeZone::create(Zone::AUSTRALIA_MELBOURNE), $this->datetime->timezone());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParse ():void {

        $this->assertSame('1970-01-01 12:11:30.123456', $this->datetime->parse(Predefined::DATE_MICRO_TIME));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('1970-01-01 12:11:30.123456', $this->datetime->__toString());

        $this->assertSame('5555-12-31 23:59:59.000000', $this->future->__toString());

    }

}