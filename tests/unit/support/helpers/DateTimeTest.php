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

namespace support\helpers;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\Zwick\TimeZone;
use FireHub\Core\Support\Enums\DateTime\Zone;
use PHPUnit\Framework\Attributes\ {
    CoversClass, CoversFunction
};

use function FireHub\Core\Support\Helpers\DateTime\callWithTimezone;

/**
 * ### Test DateTime functions
 * @since 1.0.0
 */
#[CoversClass(TimeZone::class)]
#[CoversClass(Zone::class)]
#[CoversFunction('\FireHub\Core\Support\Helpers\DateTime\callWithTimezone')]
final class DateTimeTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCallWithTimezone ():void {

        callWithTimezone(TimeZone::create(Zone::AMERICA_NEW_YORK), function () {
            $this->assertSame(18000, strtotime('1970-01-01 00:00:00'));
        });

        callWithTimezone(TimeZone::create(Zone::AUSTRALIA_MELBOURNE), function () {
            $this->assertSame(-36000, strtotime('1970-01-01 00:00:00'));
        });

    }

}