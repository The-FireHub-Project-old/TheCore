<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Initializers\Enums;

use FireHub\Core\Initializers\Kernel as BaseKernel;
use FireHub\Core\Kernel\Request;
use FireHub\Core\Kernel\HTTP\ {
    Kernel as HTTP_Kernel,
    Micro\Kernel as HTTP_Micro_Kernel,
    Server as HTTP_Server,
    Request as HTTP_Request
};
use FireHub\Core\Kernel\Console\ {
    Kernel as Console_Kernel,
    Server as Console_Server,
    Request as Console_Request
};
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Support\Bags\ {
    RequestHeaders, Server as ServerBag
};

/**
 * ### Enum for possible Kernel types
 * @since 1.0.0
 */
enum Kernel {

    /**
     * ### Fully functional HTTP Kernel
     * @since 1.0.0
     *
     * @see \FireHub\Core\Kernel\HTTP\Kernel To find more details on how to use this kernel.
     */
    case HTTP;

    /**
     * ### Simplified Micro HTTP Kernel
     * @since 1.0.0
     *
     * @see \FireHub\Core\Kernel\HTTP\Micro\Kernel To find more details on how to use this kernel.
     */
    case MICRO_HTTP;

    /**
     * ### Console Kernel
     * @since 1.0.0
     *
     * @see \FireHub\Core\Kernel\Console\Kernel To find more details on how to use this kernel.
     */
    case CONSOLE;

    /**
     * ### Run the selected Kernel
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container As parameter.
     * @uses \FireHub\Core\Kernel\HTTP\Kernel To create HTTP Kernel.
     * @uses \FireHub\Core\Kernel\HTTP\Micro\Kernel To create Micro HTTP Kernel.
     * @uses \FireHub\Core\Kernel\Console\Kernel To create Console Kernel.
     *
     * @return \FireHub\Core\Initializers\Kernel Selected Kernel.
     */
    public function run (Container $container):BaseKernel {

        return match ($this) {
            self::HTTP => new HTTP_Kernel($container),
            self::MICRO_HTTP => new HTTP_Micro_Kernel($container),
            self::CONSOLE => new Console_Kernel($container)
        };

    }

    /**
     * ### Get Request for selected Kernel
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Request To add to container.
     * @uses \FireHub\Core\Kernel\Console\Request To add to container.
     * @uses \FireHub\Core\Kernel\HTTP\Server To add to container.
     * @uses \FireHub\Core\Kernel\Console\Server To add to container.
     * @uses \FireHub\Core\Components\DI\Container::getInstance() To get container instance.
     * @uses \FireHub\Core\Components\DI\Container::singleton() To bind request as a singleton.
     * @uses \FireHub\Core\Components\DI\Container::resolve() To resolve binding from the container.
     * @uses \FireHub\Core\Support\Bags\RequestHeaders As request bag.
     * @uses \FireHub\Core\Support\Bags\Server As server bag.
     *
     * @return \FireHub\Core\Kernel\Request The current request being handled by your application.
     */
    public function request ():Request {

        $container = Container::getInstance();

        $headers = $container->resolve(RequestHeaders::class);
        $server_bag = $container->resolve(ServerBag::class);

        switch ($this) {

            case self::CONSOLE:

                $container->singleton(Console_Server::class, fn() => new Console_Server(
                    $server_bag
                ));

                $container->singleton(Console_Request::class, fn() => new Console_Request(
                    $headers
                ));

                return $container->resolve(Console_Request::class);

            default:

                $container->singleton(HTTP_Server::class, fn() => new HTTP_Server(
                    $server_bag
                ));

                $container->singleton(HTTP_Request::class, fn() => new HTTP_Request(
                    $headers
                ));

                return $container->resolve(HTTP_Request::class);

        }

    }

}