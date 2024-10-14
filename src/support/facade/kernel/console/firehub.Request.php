<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Facade\Kernel\Console;

use FireHub\Core\Components\DI\Facade;
use FireHub\Core\Kernel\Console\Request as ConsoleRequest;

/**
 * ### Console Request
 *
 * Interact with the current console request being handled by your application.
 * @since 1.0.0
 *
 * @method static \FireHub\Core\Support\Console\Input arguments () ### Input support class from arguments passed to the script when running from the command line
 * @method static \FireHub\Core\Support\Zwick\DateTime time () ### The timestamp for the start of the request, with microsecond precision
 */
class Request extends Facade {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function record ():string {

        return ConsoleRequest::class;

    }

}