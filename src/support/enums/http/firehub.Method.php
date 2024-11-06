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

namespace FireHub\Core\Support\Enums\HTTP;

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};

/**
 * ### HTTP request methods
 * @since 1.0.0
 */
enum Method implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * ### Establish an HTTP tunnel to a destination server
     *
     * The CONNECT HTTP method requests that a proxy establish an HTTP tunnel to a destination server, and if
     * successful, blindly forward data in both directions until the tunnel is closed.
     * @since 1.0.0
     */
    case CONNECT;

    /**
     * ### Asks the server to delete a specified resource
     *
     * The CONNECT HTTP method requests that a proxy establish an HTTP tunnel to a destination server, and if
     * successful, blindly forward data in both directions until the tunnel is closed.
     * @since 1.0.0
     */
    case DELETE;

    /**
     * ### Requests a representation of the specified resource
     *
     * Requests using GET should only be used to request data and shouldn't contain a body.
     * @since 1.0.0
     */
    case GET;

    /**
     * ### Requests the metadata of a resource
     *
     * The HEAD HTTP method requests the metadata of a resource in the form of headers that the server would have
     * sent if the GET method was used instead. This method can be used in cases where a URL might produce a large
     * download, for example, a HEAD request can read the Content-Length header to check the file size before
     * downloading the file with a GET.
     * @since 1.0.0
     */
    case HEAD;

    /**
     * ### Requests permitted communication options for a given URL or server
     *
     * The OPTIONS HTTP method requests permitted communication options for a given URL or server. This can be used
     * to test the allowed HTTP methods for a request or to determine whether a request would succeed when making a CORS
     * preflighted request. A client can specify a URL with this method or an asterisk (*) to refer to the entire
     * server.
     * @since 1.0.0
     */
    case OPTIONS;

    /**
     * ### Applies partial modifications to a resource
     *
     * PATCH is somewhat analogous to the "update" concept found in CRUD (in general, HTTP is different from CRUD,
     * and the two shouldn't be confused).
     * @since 1.0.0
     */
    case PATCH;

    /**
     * ### Sends data to the server
     *
     * The type of the body in the request is indicated by the Content-Type header.
     * @since 1.0.0
     */
    case POST;

    /**
     * ### Creates a new resource or replaces a representation of the target resource with the request content
     *
     * The difference between PUT and POST is that PUT is idempotent: calling it once is no different from calling it
     * several times successively (there are no side effects).
     * @since 1.0.0
     */
    case PUT;

    /**
     * ### Performs a message loop-back test along the path to the target resource
     *
     * The final recipient of the request should reflect the message as received (excluding any fields that might
     * include sensitive data) back to the client as the message body of a 200-OK response with a Content-Type
     * of message/http. The final recipient is either the origin server or the first server to receive a Max-Forwards
     * value of 0 in the request.
     * @since 1.0.0
     */
    case TRACE;

}