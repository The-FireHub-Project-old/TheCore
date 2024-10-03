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
 * ### Server and execution environment information
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
final class Server extends Bag {

    /**
     * ### Set to a non-empty value different to "off" if the script was queried through the HTTPS protocol
     * @since 1.0.0
     *
     * @var string
     */
    public string $https = 'off';

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
     * ### The timestamp for the start of the request
     * @since 1.0.0
     *
     * @var int
     */
    public int $request_time;

    /**
     * ### The timestamp for the start of the request, with microsecond precision
     * @since 1.0.0
     *
     * @var float
     */
    public float $request_time_float;

    /**
     * ### Array of arguments passed to the script when running from the command line
     * @since 1.0.0
     *
     * @var array<non-empty-string, non-empty-string>
     */
    public array $script_arguments = [];

    /**
     * ### The number of arguments passed to the script when running from the command line
     * @since 1.0.0
     *
     * @var non-negative-int
     */
    public int $script_argument_number = 0;

    /**
     * ### Which request method was used to access the page
     * @since 1.0.0
     *
     * @var string
     */
    public string $request_method = '';

    /**
     * ### The URI which was given to access this page
     * @since 1.0.0
     *
     * @var string
     */
    public string $request_uri = '';

    /**
     * ### The Un-encoded URI which was given to access this page
     * @since 1.0.0
     *
     * @var string
     */
    public string $request_un_encoded_uri = '';

    /**
     * ### The query string, if any, via which the page was accessed
     * @since 1.0.0
     *
     * @var string
     */
    public string $query_string = '';

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
     * ### The Host name from which the user is viewing the current page
     * @since 1.0.0
     *
     * @var string
     */
    public string $remote_host = '';

    /**
     * ### The IP address from which the user is viewing the current page
     * @since 1.0.0
     *
     * @var string
     *
     * @note  The web server must be configured to create this variable. For example, in Apache HostnameLookups On
     * must be set inside httpd.conf for it to exist. See also gethostbyaddr().
     */
    public string $remote_address = '';

    /**
     * ### The port being used on the user's machine to communicate with the web server
     * @since 1.0.0
     *
     * @var string
     */
    public string $remote_port = '';

    /**
     * ### The authenticated user
     * @since 1.0.0
     *
     * @var string
     */
    public string $remote_user = '';

    /**
     * ### The authenticated user if the request is internally redirected
     * @since 1.0.0
     *
     * @var string
     */
    public string $remote_user_redirect = '';

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
            'script_arguments' => 'argv',
            'script_argument_number' => 'argc',
            'server_host' => 'SERVER_NAME',
            'server_address' => 'SERVER_ADDR',
            'local_address' => 'LOCAL_ADDR',
            'request_un_encoded_uri' => 'UNENCODED_URL',
            'remote_address' => 'REMOTE_ADDR',
            'remote_user_redirect' => 'REDIRECT_REMOTE_USER'
        ];

    }

}