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

namespace FireHub\Core\Kernel\HTTP;

use FireHub\Core\Kernel\Server as BaseServer;

/**
 * ### HTTP Server and execution environment information
 * @since 1.0.0
 */
class Server extends BaseServer {

    /**
     * ### Document root directory under which the current script is executing, as defined in the server's configuration file
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script_document_root
     *
     * @return non-empty-string|false Document root directory.
     */
    public function scriptDocumentRoot ():string|false {

        return $this->server->script_document_root ?: false;

    }

}