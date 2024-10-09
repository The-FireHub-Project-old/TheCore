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

use FireHub\Core\Kernel\Request as BaseRequest;
use FireHub\Core\Kernel\Enums\Method;
use FireHub\Core\Support\ {
    Collection, Str, Url
};
use FireHub\Core\Support\Collection\Type\Indexed;
use FireHub\Core\Support\Bags\RequestHeaders;
use FireHub\Core\Support\Enums\URL\Schema;
use FireHub\Core\Support\Enums\HTTP\ {
    ContentEncoding, MimeType
};
use FireHub\Core\Support\LowLevel\Arr;

/**
 * ### HTTP Request
 *
 * Interact with the current HTTP request being handled by your application
 * @since 1.0.0
 */
class Request extends BaseRequest {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Bags\RequestHeaders $headers <p>
     * Bag for HTTP request header variables.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly RequestHeaders $headers
    ) {}

    /**
     * ### Check if the current request is secured
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Request::schema() To get current schema.
     * @uses \FireHub\Core\Support\Enums\URL\Schema::HTTPS To compare schema.
     *
     * @return bool True if the request is secured, false otherwise.
     */
    public function isSecure ():bool {

        return $this->schema() === Schema::HTTPS;

    }

    /**
     * ### Get current schema
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$https
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$unlisted
     * @uses \FireHub\Core\Support\Enums\URL\Schema::HTTPS As a possible return.
     * @uses \FireHub\Core\Support\Enums\URL\Schema::HTTP As a possible return.
     *
     * @return \FireHub\Core\Support\Enums\URL\Schema Current schema.
     */
    public function schema ():Schema {

        return (
            (isset($this->headers->unlisted['http_x_forwarded_proto']) && $this->headers->unlisted['http_x_forwarded_proto'] === 'https')
            || (isset($this->headers->unlisted['http_x_forwarded_ssl']) && $this->headers->unlisted['http_x_forwarded_ssl'] === 'on')
        ) || $this->headers->https !== 'off'
            ? Schema::HTTPS : Schema::HTTP;

    }

    /**
     * ### Get HTTP authentication type
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$auth
     *
     * @return non-empty-string|false Authorized type or false type is unknown or missing.
     */
    public function authentication ():string|false {

        return $this->headers->auth ?: false;

    }

    /**
     * ### Get HTTP authentication username
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$auth_username
     *
     * @return non-empty-string|false Authorized username or false if no username was sent.
     */
    public function user ():string|false {

        return $this->headers->auth_username ?: false;

    }

    /**
     * ### Get HTTP authentication password
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$auth_password
     *
     * @return non-empty-string|false Authorized password or false if no password was sent.
     */
    public function password ():string|false {

        return $this->headers->auth_password ?: false;

    }

    /**
     * ### Get HTTP authentication credentials
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\HTTP\Request::user() To get an HTTP authentication username.
     * @uses \FireHub\Core\Kernel\HTTP\Request::password() To get an HTTP authentication password.
     *
     * @return non-empty-string|false HTTP credentials, or empty string if none was provided.
     */
    public function userInfo ():string|false {

        return $this->user()
            ? (
            $this->password()
                ? $this->user().':'.$this->password().'@'
                : $this->user().'@'
            ) : false;

    }

    /**
     * ### Get URL which was given to access this page
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Url::from() To create URL from current url.
     * @uses \FireHub\Core\Kernel\HTTP\Request::schema() To get current schema.
     * @uses \FireHub\Core\Support\Enums\URL\Schema::withAuthority() To get URL schema with authority.
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$host
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$uri
     *
     * @return \FireHub\Core\Support\Url Url.
     */
    public function url ():Url {

        return new Url($this->schema()->withAuthority().$this->headers->host.$this->headers->uri);

    }

    /**
     * ### Get request method
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\Enums\Method::getConstantValue() To get enum from value.
     *
     * @return \FireHub\Core\Kernel\Enums\Method Method enum.
     */
    public function method ():Method {

        return Method::getConstantValue($this->headers->method); // @phpstan-ignore-line

    }

    /**
     * ### Get connection information
     *
     * Allows the sender to hint about how the connection may be used to set a timeout and a maximum number of
     * requests
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$connection
     *
     * @return string|false Hostname or false if no hostname was sent.
     */
    public function connection ():string|false {

        return $this->headers->connection ?: false;

    }

    /**
     * ### Whether the network connection stays open after the current transaction finishes
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$connection_keep_alive
     *
     * @return string|false Network connection keep alive or false if not sent.
     *
     * @note Set the Connection header to "keep-alive" for this header to have any effect.
     */
    public function connectionKeepAlive ():string|false {

        return $this->headers->connection_keep_alive ?: false;

    }

    /**
     * ### Lets servers and network peers identify the application, operating system, vendor, and/or version of the
     * requesting user agent
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$user_agent
     *
     * @return string|false User agent or false if no user agent was sent.
     */
    public function userAgent ():string|false {

        return $this->headers->user_agent ?: false;

    }

    /**
     * ### Indicates which content types, expressed as MIME types, the client is able to understand
     *
     * The server uses content negotiation to select one of the proposals and informs the client of the choice with
     * the Content-Type response header. Browsers set required values for this header based on the context of
     * the request. For example, a browser uses different values in a request when fetching a CSS stylesheet, image,
     * video, or a script.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$accept
     * @uses \FireHub\Core\Support\Collection::list() To create an accept header list.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::each() To call a user-generated function on each acceptance
     * header in a collection.
     * @uses \FireHub\Core\Support\Str::from() To create string.
     * @uses \FireHub\Core\Support\Str::break() To split encodings.
     * @uses \FireHub\Core\Support\Str::containTimes() To check how many times character (*) exists.
     * @uses \FireHub\Core\Support\Str::startsWith() To check if the acceptance header starts with a given value.
     * @uses \FireHub\Core\Support\Str::carryUntil() To carry acceptance header until character (*).
     * @uses \FireHub\Core\Support\Str::string() To get raw string.
     * @uses \FireHub\Core\Support\Enums\HTTP\MimeType::casesIf() To generate a list of cases on an enum based on
     * callable.
     * @uses \FireHub\Core\Support\LowLevel\Arr::inArray() To check if the acceptance header exists in an 'encoding' column.
     * @uses \FireHub\Core\Support\LowLevel\Arr::column() To create an array with an 'encoding' column.
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<array{encoding: \FireHub\Core\Support\Enums\HTTP\MimeType, weight: float}> Accept-list.
     */
    public function accept ():Indexed {

        $result = [];
        Collection::list(Str::from($this->headers->accept)->break(','))
            ->each(function ($value) use (&$result) { // @phpstan-ignore-line

                $value = Str::from($value);

                $values = $value->break(';q=');

                switch (true) {

                    case MimeType::tryFrom($values[0]):

                        $result[] = [
                            'encoding' => MimeType::from($values[0]),
                            'weight' => (float)($values[1] ?? 1)
                        ];

                        break;

                    case $value->containTimes('*') === 1:

                        $cases = MimeType::casesIf(fn($case) => Str::from($case->value)->startsWith(
                            Str::from($values[0])->carryUntil('*')->string() // @phpstan-ignore-line
                        ));

                        foreach ($cases as $case)
                            if (!Arr::inArray($case, Arr::column($result, 'encoding')))
                                $result[] = [
                                    'encoding' => $case,
                                    'weight' => (float)($values[1] ?? 1)
                                ];

                        break;

                }

            });

        return Collection::list($result);

    }

    /**
     * ### Indicates the natural language and locale that the client prefers
     *
     * The server uses content negotiation to select one of the proposals and informs the client of the choice with
     * the Content-Language response header. Browsers set required values for this header according to their active
     * user interface language. Users can also configure additional preferred languages through browser settings.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$accept_language
     *
     * @return string|false Accept language header or false if no acceptance header request was sent.
     */
    public function acceptLanguage ():string|false {

        return $this->headers->accept_language ?: false;

    }

    /**
     * ### Indicates the content encoding (usually a compression algorithm) that the client can understand
     *
     * The server uses content negotiation to select one of the proposals and informs the client of that choice with
     * the Content-Encoding response header.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$accept_encoding
     * @uses \FireHub\Core\Support\Collection::associative() To create an accept-encoding header list.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::filter() To remove empty values.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::map() To split encoding name and weight.
     * @uses \FireHub\Core\Support\Str::from() To create string.
     * @uses \FireHub\Core\Support\Str::break() To split encodings.
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<array{encoding: \FireHub\Core\Support\Enums\HTTP\ContentEncoding, weight: float}> Accept-encoding header list.
     */
    public function acceptEncoding ():Indexed {

        /** @phpstan-ignore-next-line */
        return Collection::list(Str::from($this->headers->accept_encoding)->break(', '))
            ->filter(fn($value) => $value !== '') // @phpstan-ignore-line
            ->map(function ($value) {
                $value = Str::from($value)->break(';q=');
                return [
                    'encoding' => ContentEncoding::from($value[0]),
                    'weight' => (float)($value[1] ?? 1)
                ];
            });

    }

    /**
     * ### Get the hostname from which the user is viewing the current page
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$remote_host
     *
     * @return non-empty-string|false Hostname or false if no hostname was sent.
     */
    public function remoteHost ():string|false {

        return $this->headers->remote_host ?: false;

    }

    /**
     * ### Get IP address from which the user is viewing the current page
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$remote_address_forwarded
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$remote_address
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$client_ip
     *
     * @return non-empty-string|false IP address or false if no IP address was sent.
     */
    public function remoteAddress ():string|false {

        return match (true) {
            $this->headers->remote_address_forwarded !== '' => $this->headers->remote_address_forwarded,
            $this->headers->remote_address !== '' => $this->headers->remote_address,
            $this->headers->client_ip !== '' => $this->headers->client_ip,
            default => false
        };

    }

    /**
     * ### Get the port being used on the user's machine to communicate with the web server
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$remote_port
     *
     * @return non-empty-string|false Port or false if no port was sent.
     */
    public function remotePort ():string|false {

        return $this->headers->remote_port ?: false;

    }

    /**
     * ### Get the authenticated user
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$remote_user
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$remote_user_redirect
     *
     * @return non-empty-string|false Authenticated user or false if no user was sent.
     */
    public function remoteUser ():string|false {

        return $this->headers->remote_user
            ?: ($this->headers->remote_user_redirect ?: false);

    }

}