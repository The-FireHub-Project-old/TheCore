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

namespace FireHub\Core\Kernel;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Bags\Server as ServerBag;
use FireHub\Core\Support\LowLevel\Network;

/**
 * ### Server and execution environment information
 * @since 1.0.0
 */
abstract class Server implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server As parameter.
     *
     * @param \FireHub\Core\Support\Bags\Server $server <p>
     * Server and execution environment information bag.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected readonly ServerBag $server
    ) {}

    /**
     * ### Gets the host name for the local machine
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Network::hostname() To get the host name.
     *
     * @return non-empty-string|false String with the hostname on success, otherwise false is returned.
     */
    public function hostname ():string|false {

        return Network::hostname() ?: false;

    }

    /**
     * ### Gets the IPv4 address for the local machine
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\Server::hostname() To get the host name for the local machine.
     * @uses \FireHub\Core\Support\LowLevel\Network::ipFromHostname() To get the IPv4 address corresponding to a
     * given Internet host name.
     *
     * @return string|false String with the hostname on success, otherwise false is returned.
     */
    public function ip ():string|false {

        return $this->hostname() ? Network::ipFromHostname($this->hostname()) : false;

    }

    /**
     * ### Filename of the currently executing script, relative to the document root
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script
     *
     * @return non-empty-string The filename of the currently executing script, relative to the document root.
     */
    public function script ():string {

        return $this->server->script;

    }

    /**
     * ### Absolute pathname of the currently executing script
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script_filename
     *
     * @return non-empty-string The absolute pathname of the currently executing script.
     */
    public function scriptFilename ():string {

        return $this->server->script_filename;

    }

    /**
     * ### Contains the current script's path
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script_path
     *
     * @return non-empty-string Script's path.
     */
    public function scriptPath ():string {

        return $this->server->script_path;

    }

    /**
     * ### Filesystem- (not document root-) based path to the current script after the server has done any virtual-to-real mapping
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$script_filesystem_path
     *
     * @return non-empty-string Script's path.
     */
    public function scriptFilesystemPath ():string {

        return $this->server->script_filesystem_path;

    }

}