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
use FireHub\Core\Support\LowLevel\ {
    ClsObj, Obj
};
use PHPUnit\Framework\Attributes\CoversClass;
use Countable, DateInterval, DateTime, DateTimeInterface;

/**
 * ### Test object low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(ClsObj::class)]
#[CoversClass(Obj::class)]
final class ObjTest extends Base {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testID ():void {

        $this->assertIsInt(Obj::id(new DateTime));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testHash ():void {

        $this->assertIsString(Obj::hash(new DateTime));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testClassName ():void {

        $this->assertSame('DateTime', Obj::className(new DateTime));
        $this->assertNotSame('NotDateTime', Obj::className(new DateTime));

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

        $this->assertSame(['var1' => 'foo'], Obj::properties($class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMangledProperties ():void {

        $class = new class {
            public string $var1 = 'foo';
            public string $var2;
        };

        $this->assertSame(['var1' => 'foo'], Obj::mangledProperties($class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testMethodExist ():void {

        $this->assertTrue(Obj::methodExist(new DateTime, 'format'));
        $this->assertFalse(Obj::methodExist(new DateTime, 'nonExisting'));

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

        $this->assertTrue(Obj::propertyExist($class, 'var1'));
        $this->assertFalse(Obj::propertyExist($class, 'var4'));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testOfClass ():void {

        $this->assertTrue(Obj::ofClass(new DateTime, DateTimeInterface::class));
        $this->assertFalse(Obj::ofClass(new DateInterval('P7D'), DateTimeInterface::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSubClassOf ():void {

        $this->assertTrue(Obj::subClassOf(new DateTime, DateTimeInterface::class));
        $this->assertFalse(Obj::subClassOf(new DateInterval('P7D'), DateTimeInterface::class));

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

        $this->assertSame(['method_1'], Obj::methods($class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParentClass ():void {

        $class = new class extends DateTime{};

        $this->assertSame('DateTime', Obj::parentClass($class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testParents ():void {

        $class = new class extends DateTime{};

        $this->assertSame(['DateTime' => 'DateTime'], Obj::parents($class));

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

        $this->assertSame(['Countable' => 'Countable'], Obj::implements($class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUses ():void {

        $class = new class {};

        $this->assertSame([], Obj::uses($class));

    }

}