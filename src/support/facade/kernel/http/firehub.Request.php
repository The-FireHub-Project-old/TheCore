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
use FireHub\Core\Kernel\HTTP\Request as HttpRequest;

/**
 * ### HTTP Request
 *
 * Interact with the current HTTP request being handled by your application.
 * @since 1.0.0
 *
 * @method static bool isSecure () ### Check if the current request is secured
 * @method static \FireHub\Core\Support\Enums\URL\Schema schema () ### Get current schema
 * @method static string|false authentication () ### Get an HTTP authentication type
 * @method static string|false user () ### Get HTTP authentication username
 * @method static string|false password () ### Get HTTP authentication password
 * @method static string|false userInfo () ### Get HTTP authentication credentials
 * @method static \FireHub\Core\Support\HTTP\Url url () ### Get URL which was given to access this page
 * @method static \FireHub\Core\Kernel\Enums\Method method () ### Get request method
 * @method static connection () ### Get connection information
 * @method static string|false connectionKeepAlive () ### Whether the network connection stays open after the current transaction finishes
 * @method static \FireHub\Core\Support\Zwick\DateTime|false ifModifiedSince () ### Makes the request conditional
 * @method static \FireHub\Core\Support\Zwick\DateTime|false ifUnModifiedSince () ### Makes the request for the resource conditional
 * @method static \FireHub\Core\Support\Collection\Type\Indexed|false ifNoneMatch () ### Makes the request conditional
 * @method static \FireHub\Core\Support\Collection\Type\Indexed|false cache () ### Control caching in browsers
 * @method static string|false userAgent () ### Lets servers and network peers identify the application, operating system, vendor, and/or version of the requesting user agent
 * @method static \FireHub\Core\Support\Collection\Type\Indexed|false accept () ### Indicates which content types, expressed as MIME types, the client is able to understand
 * @method static \FireHub\Core\Support\Collection\Type\Indexed|false acceptLanguage () ### Indicates the natural language and locale that the client prefers
 * @method static \FireHub\Core\Support\Collection\Type\Indexed|false acceptEncoding () ### Indicates the content encoding (usually a compression algorithm) that the client can understand
 * @method static string|false except () ### Indicates expectations that need to be met by the server to handle the request successfully
 * @method static \FireHub\Core\Support\Collection\Type\Indexed|false forwarded () ### Contains information that may be added by reverse proxy servers
 * @method static \FireHub\Core\Support\Collection\Type\Associative|false cookie () ### Contains stored HTTP cookies associated with the server
 * @method static string|false from () ### Contains an internet email address for a human user who controls the requesting user agent
 * @method static string|false remoteHost () ### Get the hostname from which the user is viewing the current page
 * @method static string|false remoteAddress () ### Get the IP address from which the user is viewing the current page
 * @method static int|false remotePort () ### Get the port being used on the user's machine to communicate with the web server
 * @method static string|false remoteUser () ### Get the authenticated user
 * @method static \FireHub\Core\Support\Zwick\DateTime time () ### The timestamp for the start of the request, with microsecond precision
 *
 * @phpstan-ignore-next-line
 */
class Request extends Facade {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function record ():string {

        return HttpRequest::class;

    }

}