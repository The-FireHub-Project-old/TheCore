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
use FireHub\Core\Support\Zwick\Timespan;
use PHPUnit\Framework\Attributes\CoversClass;
use Error;

/**
 * ### Test Timespan zwick support class
 * @since 1.0.0
 */
#[CoversClass(Timespan::class)]
final class TimespanTest extends Base {

    public Timespan $timespan;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->timespan = Timespan::years(2);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAdd ():void {

        $this->assertEquals($this->timespan, $this->timespan->addDecades(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSub ():void {

        $this->assertEquals($this->timespan, $this->timespan->subMonths(6));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGet ():void {

        $this->assertSame(2, $this->timespan->getYears());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFromEmptyCharacter ():void {

        $this->expectException(Error::class);

        $this->timespan->getYearss();

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('2;0;0;0;0;0;0', $this->timespan->__toString());

    }

}