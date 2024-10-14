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

namespace FireHub\Core\Support\Facade\Kernel\HTTP;

use FireHub\Core\Components\DI\Facade;
use FireHub\Core\Kernel\HTTP\Server as HttpServer;

/**
 * ### HTTP Server and execution environment information
 * @since 1.0.0
 *
 * @method static string script () Filename of the currently executing script, relative to the document root
 * @method static string scriptFilename () Absolute pathname of the currently executing script
 * @method static string scriptPath () Contains the current script's path
 * @method static string scriptFilesystemPath () Filesystem- (not document root-) based path to the current script after the server has done any virtual-to-real mapping
 * @method static string|false protocol () Name and revision of the information protocol via which the page was requested
 * @method static string|false host () The name of the server host under which the current script is executing
 * @method static string|false address () The IP address of the server under which the current script is executing
 * @method static int|false port () The port on the server machine being used by the web server for communication
 * @method static string|false software () Server identification string, given in the headers when responding to requests
 * @method static string|false scriptDocumentRoot () Document root directory under which the current script is executing, as defined in the server's configuration file
 */
class Server extends Facade {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function record ():string {

        return HttpServer::class;

    }

}