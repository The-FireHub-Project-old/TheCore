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
     *
     * @note Set the Connection header to "keep-alive" for this header to have any effect.
     */
    public string $connection = '';

    /**
     * ### Whether the network connection stays open after the current transaction finishes
     * @since 1.0.0
     *
     * @var string
     */
    public string $connection_keep_alive = '';

    /**
     * ### Lets servers and network peers identify the application, operating system, vendor, and/or version of the
     * requesting user agent
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
     * ### Field holds directives (instructions) – in both requests and responses – that control caching in browsers
     * and shared caches (for example, Proxies, CDNs)
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
     * ### Contains stored HTTP cookies associated with the server (in other words, previously sent by the server with
     * the Set-Cookie header or set in JavaScript using Document.cookie)
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
     * ### Provides a mechanism to allow and deny the use of browser features in a document or within any iframe
     * elements in the document
     * @since 1.0.0
     *
     * @var string
     */
    public string $permissions_policy = '';

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
            'if_modified_since' => 'HTTP_IF-MODIFIED-SINCE',
            'if_unmodified_since' => 'HTTP_IF-UNMODIFIED-SINCE',
            'if_none_match' => 'HTTP_IF-NONE-MATCH',
            'permissions_policy' => 'HTTP_PERMISSIONS-POLICY'
        ];

    }

}