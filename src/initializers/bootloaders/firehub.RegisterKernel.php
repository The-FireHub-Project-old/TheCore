<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Kernel
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Initializers\Bootloaders;

use FireHub\Core\Components\DI\Container;
use FireHub\Core\Kernel\Server;
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Bags\RequestHeaders;
use FireHub\Core\Support\Bags\Server as ServerBag;
use FireHub\Core\Support\LowLevel\StrSB;

/**
 * ### Register provided Kernel
 *
 * @since 1.0.0
 */
final class RegisterKernel implements Bootloader {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::associative() As bag list.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::partition() To separate collection items in a server bag
     * and header bag.
     * @uses \FireHub\Core\Kernel\Server To add to container.
     * @uses \FireHub\Core\Support\Bags\Server As server bag.
     * @uses \FireHub\Core\Support\Bags\RequestHeaders As request bag.
     * @uses \FireHub\Core\Components\DI\Container::getInstance() To get container instance.
     * @uses \FireHub\Core\Components\DI\Container::singleton() To bind request as a singleton.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::startsWith() To check if bag item start with HTTP_.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::contains() To check if bag item contains word AUTH.
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    public function load ():void {

        [$headers, $server] = Collection::associative($_SERVER)->partition(
        /** @phpstan-ignore-next-line */
            fn($value, $key) => StrSB::startsWith('HTTP_', $key)
                || StrSB::startsWith('REQUEST', $key)
                || StrSB::contains('AUTH', $key)
                || $key === 'HTTPS'|| $key === 'UNENCODED_URL' || $key === 'QUERY_STRING' || $key === 'argv' || $key === 'argc'
        );

        $container = Container::getInstance();

        $container->singleton(ServerBag::class, fn() => new ServerBag($server)); // @phpstan-ignore-line
        $container->singleton(RequestHeaders::class, fn() => new RequestHeaders($headers)); // @phpstan-ignore-line

        $container->singleton(Server::class, fn($container) => new Server(
            $container->resolve(ServerBag::class)
        ));

    }

}