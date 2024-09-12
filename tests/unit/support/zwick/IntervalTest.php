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
use FireHub\Core\Support\Zwick\Interval;
use PHPUnit\Framework\Attributes\CoversClass;
use Error;

/**
 * ### Test Interval zwick support class
 * @since 1.0.0
 */
#[CoversClass(Interval::class)]
final class IntervalTest extends Base {

    public Interval $interval;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->interval = Interval::years(2);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAdd ():void {

        $this->assertEquals($this->interval, $this->interval->addDecades(1));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSub ():void {

        $this->assertEquals($this->interval, $this->interval->subMonths(6));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGet ():void {

        $this->assertSame(2, $this->interval->getYears());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFromEmptyCharacter ():void {

        $this->expectException(Error::class);

        $this->interval->getYearss();

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPrint ():void {

        $this->assertSame('2;0;0;0;0;0;0', $this->interval->__toString());

    }

}