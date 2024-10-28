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
     * ### Name and revision of the information protocol via which the page was requested
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$protocol
     *
     * @return non-empty-string|false Information protocol.
     */
    public function protocol ():string|false {

        return $this->server->protocol ?: false;

    }

    /**
     * ### The name of the server host under which the current script is executing
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$name
     *
     * @return non-empty-string|false Server name.
     *
     * @caution If the script is running on a virtual host, this will be the value defined for that virtual host.
     * @note Under Apache 2, UseCanonicalName = On and ServerName must be set. Otherwise, this value reflects
     * the hostname supplied by the client, which can be spoofed. It is not safe to rely on this value in
     * security-dependent contexts.
     */
    public function name ():string|false {

        return $this->server->name ?: false;

    }

    /**
     * ### The IP address of the server under which the current script is executing
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$address
     * @uses \FireHub\Core\Support\Bags\Server::$local_address
     *
     * @return non-empty-string|false IP address.
     */
    public function address ():string|false {

        return match (true) {
            $this->server->address !== '' => $this->server->address,
            $this->server->local_address !== '' => $this->server->local_address,
            default => false
        };

    }

    /**
     * ### The port on the server machine being used by the web server for communication
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$port
     *
     * @return int|false Server port.
     *
     * @note Under Apache 2, UseCanonicalName = On, as well as UseCanonicalPhysicalPort = On must be set to get
     * the physical (real) port, otherwise, this value can be spoofed, and it may or may not return the physical port
     * value. It is not safe to rely on this value in security-dependent contexts.
     */
    public function port ():int|false {

        return $this->server->port ? (int)$this->server->port : false;

    }

    /**
     * ### Server identification string, given in the headers when responding to requests
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$software
     *
     * @return non-empty-string|false Server identification.
     */
    public function software ():string|false {

        return $this->server->software ?: false;

    }

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

    /**
     * ### Get the hostname from which the user is viewing the current page
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$remote_host
     *
     * @return non-empty-string|false Hostname or false if no hostname was sent.
     */
    public function remoteHost ():string|false {

        return $this->server->remote_host ?: false;

    }

    /**
     * ### Get the IP address from which the user is viewing the current page
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$remote_address_forwarded
     * @uses \FireHub\Core\Support\Bags\Server::$remote_address
     * @uses \FireHub\Core\Support\Bags\Server::$client_ip
     *
     * @return non-empty-string|false IP address or false if no IP address was sent.
     */
    public function remoteAddress ():string|false {

        return match (true) {
            $this->server->remote_address_forwarded !== '' => $this->server->remote_address_forwarded,
            $this->server->remote_address !== '' => $this->server->remote_address,
            $this->server->client_ip !== '' => $this->server->client_ip,
            default => false
        };

    }

    /**
     * ### Get the port being used on the user's machine to communicate with the web server
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$remote_port
     *
     * @return int|false Port or false if no port was sent.
     */
    public function remotePort ():int|false {

        return $this->server->remote_port ? (int)$this->server->remote_port : false;

    }

    /**
     * ### Get the authenticated user
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\Server::$remote_user
     * @uses \FireHub\Core\Support\Bags\Server::$remote_user_redirect
     *
     * @return non-empty-string|false Authenticated user or false if no user was sent.
     */
    public function remoteUser ():string|false {

        return $this->server->remote_user
            ?: ($this->server->remote_user_redirect ?: false);

    }

}