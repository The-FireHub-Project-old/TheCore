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

use FireHub\Core\Kernel\Request as BaseRequest;
use FireHub\Core\Support\Console\Input;

/**
 * ### Console Request
 *
 * Interact with the current console request being handled by your application.
 * @since 1.0.0
 */
class Request extends BaseRequest {

    /**
     * ### Input support class from arguments passed to the script when running from the command line
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$script_arguments
     * @uses \FireHub\Core\Support\Console\Input As return.
     *
     * @return \FireHub\Core\Support\Console\Input Input support class.
     */
    public function arguments ():Input {

        return new Input($this->headers->script_arguments);

    }

}