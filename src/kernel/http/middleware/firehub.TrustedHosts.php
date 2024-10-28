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

namespace FireHub\Core\Kernel\HTTP\Middleware;

use FireHub\Core\Kernel\HTTP\ {
    Server, ServerMiddleware
};
use FireHub\Core\Support\LowLevel\Arr;
use Closure, Error;

/**
 * ### Allow only certain hosts to proceed
 * @since 1.0.0
 */
final class TrustedHosts extends ServerMiddleware {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param string[] $allowlist <p>
     * List of hosts allowed to proceed.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly array $allowlist
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::inArray() To check if the hostname exists in an allowlist.
     * @uses \FireHub\Core\Kernel\HTTP\Server::remoteHost() To get the hostname from which the user is viewing the
     * current page.
     *
     * @throws Error If the host is not allowed to proceed.
     */
    public function handle (Server $server, Closure $carry):Server {

        return Arr::inArray($server->remoteHost(), $this->allowlist)
            ? $carry($server)
            : throw new Error('Host is not allowed to proceed!');

    }

}