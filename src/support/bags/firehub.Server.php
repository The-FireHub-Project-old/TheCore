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

namespace FireHub\Core\Support\Bags;

use FireHub\Core\Support\Bag;

/**
 * ### Server and execution environment information bag
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
final class Server extends Bag {

    /**
     * ### The filename of the currently executing script, relative to the document root
     * @since 1.0.0
     *
     * @var non-empty-string
     */
    public string $script;

    /**
     * ### The absolute pathname of the currently executing script
     * @since 1.0.0
     *
     * @var non-empty-string
     */
    public string $script_filename;

    /**
     * ### Contains the current script's path
     * @since 1.0.0
     *
     * @var non-empty-string
     */
    public string $script_path;

    /**
     * ### Filesystem- (not document root-) based path to the current script, after the server has done any virtual-to-real mapping
     * @since 1.0.0
     *
     * @var non-empty-string
     */
    public string $script_filesystem_path;

    /**
     * ### The document root directory under which the current script is executing, as defined in the server's configuration file
     * @since 1.0.0
     *
     * @var string
     */
    public string $script_document_root;

    /**
     * ### The name of the server host under which the current script is executing
     * @since 1.0.0
     *
     * @var string
     *
     * @caution If the script is running on a virtual host, this will be the value defined for that virtual host.
     * @note Under Apache 2, UseCanonicalName = On and ServerName must be set. Otherwise, this value reflects
     * the hostname supplied by the client, which can be spoofed. It is not safe to rely on this value in
     * security-dependent contexts.
     */
    public string $server_host = '';

    /**
     * ### The IP address of the server under which the current script is executing
     * @since 1.0.0
     *
     * @var string
     */
    public string $server_address = '';

    /**
     * ### The IP address of the IIS server under which the current script is executing
     * @since 1.0.0
     *
     * @var string
     */
    public string $local_address = '';

    /**
     * ### Name and revision of the information protocol via which the page was requested
     * @since 1.0.0
     *
     * @var string
     */
    public string $server_protocol = '';

    /**
     * ### Server identification string, given in the headers when responding to requests
     * @since 1.0.0
     *
     * @var string
     */
    public string $server_software = '';

    /**
     * ### The port on the server machine being used by the web server for communication
     * @since 1.0.0
     *
     * @var string
     *
     * @note Under Apache 2, UseCanonicalName = On, as well as UseCanonicalPhysicalPort = On must be set to get
     * the physical (real) port, otherwise, this value can be spoofed, and it may or may not return the physical port
     * value. It is not safe to rely on this value in security-dependent contexts.
     */
    public string $server_port = '';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    protected function adapt ():array {

        return [
            'script' => 'PHP_SELF',
            'script_path' => 'SCRIPT_NAME',
            'script_filesystem_path' => 'PATH_TRANSLATED',
            'script_document_root' => 'DOCUMENT_ROOT',
            'server_host' => 'SERVER_NAME',
            'server_address' => 'SERVER_ADDR',
            'local_address' => 'LOCAL_ADDR',
            'remote_address' => 'REMOTE_ADDR',
            'remote_user_redirect' => 'REDIRECT_REMOTE_USER'
        ];

    }

}