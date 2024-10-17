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

namespace FireHub\Core\Kernel\Console;

use FireHub\Core\Kernel\Response as BaseResponse;

/**
 * ### Console Response
 *
 * Response holds all the information that needs to be sent back to the client from a given request.
 * @since 1.0.0
 */
class Response extends BaseResponse {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Kernel\Console\Request $request <p>
     * Interact with the current console request being handled by your application.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected readonly Request $request
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function __toString ():string {

        return 'Console Torch';

    }

}