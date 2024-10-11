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

namespace support\console;

use FireHub\Core\Support\Console\Input;
use FireHub\Core\Testing\Base;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * ### Test Input support class
 * @since 1.0.0
 */
#[CoversClass(Input::class)]
final class InputTest extends Base {

    public Input $input;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function setUp ():void {

        $this->input = new Input(
            ['torch', 'send:mail', 'first_param', 'second_param', '--first_option', '--second_option=20']
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCommand ():void {

        $this->assertSame('send:mail', $this->input->command());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParameters ():void {

        $this->assertSame(['first_param', 'second_param'], $this->input->parameters()->all());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOptions ():void {

        $this->assertSame(['--first_option' => NULL, '--second_option' => '20'], $this->input->options()->all());

    }

}