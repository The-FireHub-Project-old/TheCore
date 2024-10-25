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
    Middleware, Request, Response
};
use FireHub\Core\Support\LowLevel\Arr;
use Closure, Error;

/**
 * ### Block only certain hosts to proceed
 * @since 1.0.0
 */
final class UntrustedHosts extends Middleware {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param string[] $blocklist <p>
     * List of hosts allowed to proceed.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly array $blocklist
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::inArray() To check if the hostname exists in a blocklist.
     * @uses \FireHub\Core\Kernel\HTTP\Request::remoteHost() To get the hostname from which the user is viewing the
     * current page.
     *
     * @throws Error If the host is not allowed to proceed.
     */
    public function handle (Request $request, Closure $carry):Response {

        return Arr::inArray($request->remoteHost(), $this->blocklist)
            ? throw new Error('Host is not allowed to proceed!')
            : $carry($request);

    }

}