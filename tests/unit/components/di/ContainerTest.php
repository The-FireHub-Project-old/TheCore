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

namespace components\di;

use FireHub\Core\Testing\Base;
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Components\DI\Helpers\Autowire;
use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\Data\Type;
use FireHub\Core\Support\Enums\String\Encoding;
use PHPUnit\Framework\Attributes\ {
    CoversClass, DependsOnClass, RunInSeparateProcess
};

/**
 * ### Test registry component class
 * @since 1.0.0
 */
#[CoversClass(Container::class)]
#[CoversClass(Autowire::class)]
#[CoversClass(Type::class)]
final class ContainerTest extends Base {

    public Container $container;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[DependsOnClass(Str::class)]
    public function setUp ():void {

        $this->container = Container::getInstance();

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBound ():void {

        $this->assertFalse($this->container->bound(Str::class));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RunInSeparateProcess]
    public function testResolveCreate ():void {

        $this->assertEquals(
            new Str('xy'),
            $this->container->resolve(Str::class, ['string' => 'xy'])
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RunInSeparateProcess]
    public function testResolveBind ():void {

        $this->container->bind(
            Str::class, fn(Container $container, string $str, ?Encoding $encoding = null):object => new Str($str, $encoding)
        );

        $this->container->bindIfNeeds(
            Str::class, fn(Container $container, string $str, ?Encoding $encoding = null):object => new Str($str, $encoding)
        );

        $this->assertEquals(new Str('xy'), $this->container->resolve(Str::class, ['xy']));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RunInSeparateProcess]
    public function testResolveSingleton ():void {

        $this->container->singleton(
            Str::class, fn(Container $container, mixed ...$params):object => new Str(...$params)
        );

        $this->container->singletonIfNeeds(
            Str::class, fn(Container $container, mixed ...$params):object => new Str(...$params)
        );

        $this->assertEquals(new Str('xy'), $this->container->resolve(Str::class, ['xy']));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RunInSeparateProcess]
    public function testResolveScoped ():void {

        $this->container->scoped(
            Str::class, fn(Container $container, mixed ...$params):object => new Str(...$params)
        );

        $this->container->scopedIfNeeds(
            Str::class, fn(Container $container, mixed ...$params):object => new Str(...$params)
        );

        $this->assertEquals(new Str('xy'), $this->container->resolve(Str::class, ['xy']));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    #[RunInSeparateProcess]
    public function testResolveInstance ():void {

        $this->container->instance(
            Str::class, new Str('xy')
        );

        $this->assertEquals(new Str('xy'), $this->container->resolve(Str::class));

    }

}