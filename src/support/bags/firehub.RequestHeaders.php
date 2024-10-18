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
 * ### Bag for HTTP request header variables
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
final class RequestHeaders extends Bag {

    /**
     * ### Set to a non-empty value different to "off" if the script was queried through the HTTPS protocol
     * @since 1.0.0
     *
     * @var string
     */
    public string $https = 'off';

    /**
     * ### Contents of the Host: header from the current request, if there is one
     * @since 1.0.0
     *
     * @var string
     */
    public string $host = '';

    /**
     * ### When doing HTTP authentication, this variable is set to the authentication type
     * @since 1.0.0
     *
     * @var string
     */
    public string $auth = '';

    /**
     * ### When doing HTTP authentication, this variable is set to the username provided by the user
     * @since 1.0.0
     *
     * @var string
     */
    public string $auth_username = '';

    /**
     * ### When doing HTTP authentication, this variable is set to the password provided by the user
     * @since 1.0.0
     *
     * @var string
     */
    public string $auth_password = '';

    /**
     * ### Allows the sender to hint about how the connection may be used to set a timeout and a maximum number of
     * requests
     * @since 1.0.0
     *
     * @var string
     */
    public string $connection = '';

    /**
     * ### Whether the network connection stays open after the current transaction finishes
     * @since 1.0.0
     *
     * @var string
     *
     * @note Set the Connection header to "keep-alive" for this header to have any effect.
     */
    public string $connection_keep_alive = '';

    /**
     * ### Which request method was used to access the page
     * @since 1.0.0
     *
     * @var string
     */
    public string $method = '';

    /**
     * ### The URI which was given to access this page
     * @since 1.0.0
     *
     * @var string
     */
    public string $uri = '';

    /**
     * ### The Un-encoded URI which was given to access this page
     * @since 1.0.0
     *
     * @var string
     */
    public string $un_encoded_uri = '';

    /**
     * ### The query string, if any, via which the page was accessed
     * @since 1.0.0
     *
     * @var string
     */
    public string $query_string = '';

    /**
     * ### Array of arguments passed to the script when running from the command line
     * @since 1.0.0
     *
     * @var non-empty-string[]
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
     * ### Identify the application, operating system, vendor, and/or version of the requesting user agent
     * @since 1.0.0
     *
     * @var string
     */
    public string $user_agent = '';

    /**
     * ### Indicates which content types, expressed as MIME types, the client is able to understand
     *
     * The server uses content negotiation to select one of the proposals and informs the client of the choice with
     * the Content-Type response header. Browsers set required values for this header based on the context of
     * the request. For example, a browser uses different values in a request when fetching a CSS stylesheet, image,
     * video, or a script.
     * @since 1.0.0
     *
     * @var string
     */
    public string $accept = '';

    /**
     * ### Indicates the natural language and locale that the client prefers
     *
     * The server uses content negotiation to select one of the proposals and informs the client of the choice with
     * the Content-Language response header. Browsers set required values for this header according to their active
     * user interface language. Users can also configure additional preferred languages through browser settings.
     * @since 1.0.0
     *
     * @var string
     */
    public string $accept_language = '';

    /**
     * ### Indicates the content encoding (usually a compression algorithm) that the client can understand
     *
     * The server uses content negotiation to select one of the proposals and informs the client of that choice with
     * the Content-Encoding response header.
     * @since 1.0.0
     *
     * @var string
     */
    public string $accept_encoding = '';

    /**
     * ### Control caching in browsers
     *
     * Field holds directives (instructions) – in both requests and responses – that control caching in browsers
     * and shared caches (for example, Proxies, CDNs).
     * @since 1.0.0
     *
     * @var string
     */
    public string $cache = '';

    /**
     * ### Indicate a client's preference for the priority order
     *
     * The priority order at which the response containing the requested resource should be sent, relative to other
     * resource requests on the same connection. If the header is not specified in the request, a default priority
     * is assumed.
     * @since 1.0.0
     *
     * @var string
     */
    public string $priority = '';

    /**
     * ### Contains stored HTTP cookies associated with the server
     * @since 1.0.0
     *
     * @var string
     */
    public string $cookie = '';

    /**
     * ### Indicates expectations that need to be met by the server to handle the request successfully
     * @since 1.0.0
     *
     * @var string
     */
    public string $expect = '';

    /**
     * ### Contains information that may be added by reverse proxy servers
     * @since 1.0.0
     *
     * @var string
     */
    public string $forwarded = '';

    /**
     * ### Contains an internet email address for a human user who controls the requesting user agent
     * @since 1.0.0
     *
     * @var string
     */
    public string $from = '';

    /**
     * ### Makes the request conditional
     *
     * The server sends back the requested resource, with a 200 status, only if it has been last modified after the
     * given date. If the resource has not been modified since, the response is a 304 without the body. The
     * Last-Modified response header of a previous request contains the date of the last modification. Unlike
     * If-Unmodified-Since, If-Modified-Since can only be used with a GET or HEAD.
     * @since 1.0.0
     *
     * @var string
     */
    public string $if_modified_since = '';

    /**
     * ### Makes the request for the resource conditional
     *
     * The server will send the requested resource or accept it in the case of a POST or another non-safe method only
     * if the resource has not been modified after the date specified by this HTTP header. If the resource has been
     * modified after the specified date, the response will be a 412-Precondition Failed error.
     * @since 1.0.0
     *
     * @var string
     */
    public string $if_unmodified_since = '';

    /**
     * ### Makes the request conditional
     *
     * For GET and HEAD methods, the server will return the requested resource, with a 200 status, only if it doesn't
     * have an ETag matching the given ones. For other methods, the request will be processed only if the eventually
     * existing resource's ETag doesn't match any of the values listed.
     * @since 1.0.0
     *
     * @var string
     */
    public string $if_none_match = '';

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
     * ### The IP address from which the user is viewing the current page if behind the proxy server
     * @since 1.0.0
     *
     * @var string
     */
    public string $remote_address_forwarded = '';

    /**
     * ### The IP address provided by the user from which the user is viewing the current page if behind the proxy server
     * @since 1.0.0
     *
     * @var string
     */
    public string $client_ip = '';

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
     * ### The timestamp for the start of the request
     * @since 1.0.0
     *
     * @var int
     */
    public int $time;

    /**
     * ### The timestamp for the start of the request, with microsecond precision
     * @since 1.0.0
     *
     * @var float
     */
    public float $time_float;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    protected function adapt ():array {

        return [
            'host' => 'HTTP_HOST',
            'auth' => 'HTTP_AUTHORIZATION',
            'auth_username' => 'PHP_AUTH_USER',
            'auth_password' => 'PHP_AUTH_PW',
            'connection' => 'HTTP_CONNECTION',
            'method' => 'REQUEST_METHOD',
            'uri' => 'REQUEST_URI',
            'un_encoded_uri' => 'UNENCODED_URL',
            'script_arguments' => 'argv',
            'script_argument_number' => 'argc',
            'user_agent' => 'HTTP_USER_AGENT',
            'accept' => 'HTTP_ACCEPT',
            'accept_language' => 'HTTP_ACCEPT_LANGUAGE',
            'accept_encoding' => 'HTTP_ACCEPT_ENCODING',
            'cache' => 'HTTP_CACHE_CONTROL',
            'priority' => 'HTTP_PRIORITY',
            'cookie' => 'HTTP_COOKIE',
            'expect' => 'HTTP_EXCEPT',
            'forwarded' => 'HTTP_FORWARDED',
            'from' => 'HTTP_FROM',
            'if_modified_since' => 'HTTP_IF_MODIFIED_SINCE',
            'if_unmodified_since' => 'HTTP_IF_UNMODIFIED_SINCE',
            'if_none_match' => 'HTTP_IF_NONE_MATCH',
            'permissions_policy' => 'HTTP_PERMISSIONS_POLICY',
            'remote_address' => 'REMOTE_ADDR',
            'remote_address_forwarded' => 'HTTP_X_FORWARDED_FOR',
            'client_ip' => 'HTTP_CLIENT_IP',
            'remote_user_redirect' => 'REDIRECT_REMOTE_USER',
            'time' => 'REQUEST_TIME',
            'time_float' => 'REQUEST_TIME_FLOAT'
        ];

    }

}