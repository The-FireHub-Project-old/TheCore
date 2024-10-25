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
 * ### Allow only certain addresses to proceed
 * @since 1.0.0
 */
final class TrustedAddresses extends Middleware {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param string[] $allowlist <p>
     * List of addresses allowed to proceed.
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
     * @uses \FireHub\Core\Support\LowLevel\Arr::inArray() To check if the address exists in an allowlist.
     * @uses \FireHub\Core\Kernel\HTTP\Request::remoteAddress() To get the IP address from which the user is viewing the
     * current page.
     *
     * @throws Error If the address is not allowed to proceed.
     */
    public function handle (Request $request, Closure $carry):Response {

        return Arr::inArray($request->remoteAddress(), $this->allowlist)
            ? $carry($request)
            : throw new Error('Address is not allowed to proceed!');

    }

}