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
use FireHub\Core\Support\Enums\URL\Schema;
use Closure;

/**
 * ### Identifier for a specific version of a resource
 * @since 1.0.0
 */
final class ForceHTTPS extends Middleware {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Request::notSecure() To check if the current request is not secured.
     * @uses \FireHub\Core\Kernel\HTTP\Request::url() To get current request URL.
     * @uses \FireHub\Core\Kernel\HTTP\Response::redirect() To redirect page to secured schema.
     * @uses \FireHub\Core\Kernel\HTTP\Response::forceHTTPS() To inform browsers that the site should only be accessed
     * using HTTPS.
     * @uses \FireHub\Core\Support\HTTP\Url::host() To get current request host.
     * @uses \FireHub\Core\Support\HTTP\Url::scheme() To set current request scheme to HTTPS.
     * @uses \FireHub\Core\Support\HTTP\Url::parse() To parse the current request URL with HTTPS.
     * @uses \FireHub\Core\Support\Enums\URL\Schema::HTTPS As URL scheme.
     */
    public function handle (Request $request, Closure $carry):Response {

        return $request->notSecure() && $request->url()->host() !== 'localhost'
            ? $carry($request)->redirect($request->url()->scheme(Schema::HTTPS)->parse())
            : $carry($request)->forceHTTPS();

    }

}