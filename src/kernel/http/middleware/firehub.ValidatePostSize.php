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
use FireHub\Core\Support\LowLevel\PHP;
use Closure, Error;

/**
 * ### Identifier for a specific version of a resource
 * @since 1.0.0
 */
final class ValidatePostSize extends Middleware {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Request::contentLength() To get the size of the message body, in bytes, sent
     * to the recipient.
     * @uses \FireHub\Core\Support\LowLevel\PHP::parseConfigurationQuantity() To get interpreted size from ini
     * shorthand syntax for a post_max_size option.
     * @uses \FireHub\Core\Support\LowLevel\PHP::getConfigurationOption() To get the value of a post_max_size option.
     *
     * @throws Error If trying to send content bigger from what the server is configured to receive.
     */
    public function handle (Request $request, Closure $carry):Response {

        $max_post_size = PHP::getConfigurationOption('post_max_size');

        if (!empty($max_post_size))
            $request->contentLength() <= PHP::parseConfigurationQuantity($max_post_size)
                ?: throw new Error('Cannot send content bigger then server is configured to receive!');

        return $carry($request);

    }

}