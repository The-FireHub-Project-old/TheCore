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
use FireHub\Core\Kernel\HTTP\Kernel as HTTPKernel;
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Initializers\Enums\Kernel;
use FireHub\Core\Support\LowLevel\ {
    Cls, ClsObj
};
use PHPUnit\Framework\Attributes\CoversClass;
use Countable, DateInterval, DateTime, DateTimeInterface, Error;

/**
 * ### Test class low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(ClsObj::class)]
#[CoversClass(Cls::class)]
final class ClsTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsClass ():void {

        $this->assertFalse(Cls::isClass('NonExistingClass'));
        $this->assertTrue(Cls::isClass(DateTime::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsInterface ():void {

        $this->assertFalse(Cls::isInterface(DateTime::class));
        $this->assertTrue(Cls::isInterface(DateTimeInterface::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIsEnum ():void {

        $this->assertFalse(Cls::isEnum(DateTime::class));
        $this->assertTrue(Cls::isEnum(Kernel::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     *
     * @todo Add assertTrue() when any trait is available for testing.
     */
    public function testIsTrait ():void {

        $this->assertFalse(Cls::isTrait(DateTime::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testAlias ():void {

        Cls::alias(HTTPKernel::class, 'NewHTTPKernel');

        $this->assertNotInstanceOf(DateInterval::class, new DateTime);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testProperties ():void {

        $class = new class {
            public string $var1 = 'foo';
            protected string $var2 = 'bar';
            public string $var3;
        };

        $this->assertSame(['var1' => 'foo', 'var3' => null], Cls::properties($class::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testWalkRequiresMoreThenTwoArguments ():void {

        $this->expectException(Error::class);

        Cls::properties('NonExistingClass');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMethodExist ():void {

        $this->assertTrue(Cls::methodExist(DateTime::class, 'format'));
        $this->assertFalse(Cls::methodExist(new DateTime, 'nonExisting'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testPropertyExist ():void {

        $class = new class {
            public string $var1 = 'foo';
            protected string $var2 = 'bar';
            public string $var3;
        };

        $this->assertTrue(Cls::propertyExist($class::class, 'var1'));
        $this->assertFalse(Cls::propertyExist($class::class, 'var4'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOfClass ():void {

        $this->assertTrue(Cls::ofClass(DateTime::class, DateTimeInterface::class));
        $this->assertFalse(Cls::ofClass(DateInterval::class, DateTimeInterface::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSubClassOf ():void {

        $this->assertTrue(Cls::subClassOf(DateTime::class, DateTimeInterface::class));
        $this->assertFalse(Cls::subClassOf(DateInterval::class, DateTimeInterface::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMethods ():void {

        $class = new class {
            public function method_1 () {}
            protected function method_2 () {}
        };

        $this->assertSame(['method_1'], Cls::methods($class::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParentClass ():void {

        $class = new class extends DateTime{};

        $this->assertSame('DateTime', Cls::parentClass($class::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParents ():void {

        $class = new class extends DateTime{};

        $this->assertSame(['DateTime' => 'DateTime'], Cls::parents($class::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testImplements ():void {

        $class = new class implements Countable {
            public function count():int {return 1;}
        };

        $this->assertSame(['Countable' => 'Countable'], Cls::implements($class::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUses ():void {

        $class = new class {};

        $this->assertSame([], Cls::uses($class::class));

    }

}