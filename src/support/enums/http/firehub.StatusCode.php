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

use FireHub\Core\Base\Trait\ConcreteBackedEnum;
use FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode as StatusCodeContract;

/**
 * ### Response status code
 * @since 1.0.0
 */
enum StatusCode:string implements StatusCodeContract {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### 100 Continue
     *
     * This interim response indicates that the client should continue the request or ignore the response if the
     * request is already finished.
     * @since 1.0.0
     */
    case CONTINUE = 'Continue';

    /**
     * ### 101 Switching Protocols
     *
     * This code is sent in response to an Upgrade request header from the client and indicates the protocol the
     * server is switching to.
     * @since 1.0.0
     */
    case SWITCHING_PROTOCOLS = 'Switching Protocols';

    /**
     * ### 103 Early Hints
     *
     * This status code is primarily intended to be used with the Link header, letting the user agent start
     * preloading resources while the server prepares a response or pre-connects to an origin from which the page will
     * need resources.
     * @since 1.0.0
     */
    case EARLY_HINTS = 'Early Hints';

    /**
     * ### 200 OK
     *
     * The request succeeded. The result meaning of "success" depends on the HTTP method.
     * - GET: The resource has been fetched and transmitted in the message body.
     * - HEAD: The representation headers are included in the response without any message body.
     * - PUT or POST: The resource describing the result of the action is transmitted in the message body.
     * - TRACE: The message body contains the request message as received by the server.
     * @since 1.0.0
     */
    case OK = 'OK';

    /**
     * ### 201 Created
     *
     * The request succeeded, and a new resource was created as a result. This is typically the response sent after
     * POST requests, or some PUT requests.
     * @since 1.0.0
     */
    case CREATED = 'Created';

    /**
     * ### 202 Accepted
     *
     * The request has been received but not yet acted upon. It is noncommittal, since there is no way in HTTP to
     * later send an asynchronous response indicating the outcome of the request. It is intended for cases where
     * another process or server handles the request, or for batch processing.
     * @since 1.0.0
     */
    case ACCEPTED = 'Accepted';

    /**
     * ### 203 Non-Authoritative Information
     *
     * This response code means the returned metadata is not exactly the same as is available from the origin server
     * but is collected from a local or a third-party copy. This is mostly used for mirrors or backups of another
     * resource. Except for that specific case, the 200 OK response is preferred to this status.
     * @since 1.0.0
     */
    case NON_AUTHORITATIVE_INFORMATION = 'Non-Authoritative Information';

    /**
     * ### 204 No Content
     *
     * There is no content to send for this request, but the headers may be useful. The user agent may update its
     * cached headers for this resource with the new ones.
     * @since 1.0.0
     */
    case NO_CONTENT = 'No Content';

    /**
     * ### 205 Reset Content
     *
     * Tells the user agent to reset the document which sent this request.
     * @since 1.0.0
     */
    case RESET_CONTENT = 'Reset Content';

    /**
     * ### 206 Partial Content
     *
     * This response code is used when the Range header is sent from the client to request only part of a resource.
     * @since 1.0.0
     */
    case PARTIAL_CONTENT = 'Partial Content';

    /**
     * ### 226 IM Used
     *
     * The server has fulfilled a GET request for the resource, and the response is a representation of the result for
     * one or more instance-manipulations applied to the current instance.
     * @since 1.0.0
     */
    case IM_USED = 'IM Used';

    /**
     * ### 300 Multiple Choices
     *
     * The request has more than one possible response. The user agent or user should select one of them. (There is
     * no standardized way of choosing one of the responses, but HTML links to the possibilities are recommended,
     * so the user can pick.).
     * @since 1.0.0
     */
    case MULTIPLE_CHOICES = 'Multiple Choices';

    /**
     * ### 301 Moved Permanently
     *
     * The URL of the requested resource has been changed permanently. The new URL is given in the response.
     * @since 1.0.0
     */
    case MOVED_PERMANENTLY = 'Moved Permanently';

    /**
     * ### 302 Found
     *
     * This response code means that the URI of the requested resource has been changed temporarily. Further changes in
     * the URI might be made in the future. Therefore, the client should use this same URI in future requests.
     * @since 1.0.0
     */
    case FOUND = 'Found';

    /**
     * ### 303 See Other
     *
     * The server sent this response to direct the client to get the requested resource at another URI with a GET
     * request.
     * @since 1.0.0
     */
    case SEE_OTHER = 'See Other';

    /**
     * ### 304 Not Modified
     *
     * This is used for caching purposes. It tells the client that the response has not been modified, so the client
     * can continue to use the same cached version of the response.
     * @since 1.0.0
     */
    case NOT_MODIFIED = 'Not Modified';

    /**
     * ### 307 Temporary Redirect
     *
     * The server sends this response to direct the client to get the requested resource at another URI with the same
     * method that was used in the prior request. This has the same semantics as the 302 Found HTTP response code,
     * with the exception that the user agent mustn't change the HTTP method used: if a POST was used in the first
     * request, a POST must be used in the second request.
     * @since 1.0.0
     */
    case TEMPORARY_REDIRECT = 'Temporary Redirect';

    /**
     * ### 308 Permanent Redirect
     *
     * This means that the resource is now permanently located at another URI, specified by the Location: HTTP
     * Response header. This has the same semantics as the 301 Moved Permanently HTTP response code, with the
     * exception that the user agent mustn't change the HTTP method used: if a POST was used in the first request, a
     * POST must be used in the second request.
     * @since 1.0.0
     */
    case PERMANENT_REDIRECT = 'Permanent Redirect';

    /**
     * ### 400 Bad Request
     *
     * The server cannot or will not process the request due to something that is perceived to be a client error (for
     * example, malformed request syntax, invalid request message framing, or deceptive request routing).
     * @since 1.0.0
     */
    case BAD_REQUEST = 'Bad Request';

    /**
     * ### 401 Unauthorized
     *
     * Although the HTTP standard specifies "unauthorized", semantically this response means "unauthenticated". That
     * is, the client must authenticate itself to get the requested response.
     * @since 1.0.0
     */
    case UNAUTHORIZED = 'Unauthorized';

    /**
     * ### 403 Forbidden
     *
     * The client doesn't have access rights to the content; that is, it is unauthorized, so the server is refusing
     * to give the requested resource. Unlike 401 Unauthorized, the client's identity is known to the server.
     * @since 1.0.0
     */
    case FORBIDDEN = 'Forbidden';

    /**
     * ### 404 Not Found
     *
     * The server can't find the requested resource. In the browser, this means the URL is not recognized. In an API,
     * this can also mean that the endpoint is valid but the resource itself doesn't exist. Servers may also send
     * this response instead of 403 Forbidden to hide the existence of a resource from an unauthorized client.
     * This response code is probably the most well-known due to its frequent occurrence on the web.
     * @since 1.0.0
     */
    case NOT_FOUND = 'Not Found';

    /**
     * ### 405 Method Not Allowed
     *
     * The request method is known by the server but is not supported by the target resource. For example, an API may
     * not allow calling DELETE to remove a resource.
     * @since 1.0.0
     */
    case METHOD_NOT_ALLOWED = 'Method Not Allowed';

    /**
     * ### 406 Not Acceptable
     *
     * This response is sent when the web server, after performing server-driven content negotiation, doesn't find
     * any content that conforms to the criteria given by the user agent.
     * @since 1.0.0
     */
    case NOT_ACCEPTABLE = 'Not Acceptable';

    /**
     * ### 407 Proxy Authentication Required
     *
     * This is similar to 401 Unauthorized, but authentication is needed to be done by a proxy.
     * @since 1.0.0
     */
    case PROXY_AUTHENTICATION_REQUIRED = 'Proxy Authentication Required';

    /**
     * ### 408 Request Timeout
     *
     * This response is sent on an idle connection by some servers, even without any previous request by the client.
     * It means that the server would like to shut down this unused connection. This response is used much more since
     * some browsers, like Chrome, Firefox 27+, or IE9, use HTTP pre-connection mechanisms to speed up surfing. Also
     * note that some servers merely shut down the connection without sending this message.
     * @since 1.0.0
     */
    case REQUEST_TIMEOUT = 'Request Timeout';

    /**
     * ### 409 Conflict
     *
     * This response is sent when a request conflicts with the current state of the server.
     * @since 1.0.0
     */
    case CONFLICT = 'Conflict';

    /**
     * ### 410 Gone
     *
     * This response is sent when the requested content has been permanently deleted from the server, with no forwarding
     * address. Clients are expected to remove their caches and links to the resource. The HTTP specification intends
     * this status code to be used for "limited-time, promotional services". APIs shouldn't feel compelled to
     * indicate resources that have been deleted with this status code.
     * @since 1.0.0
     */
    case GONE = 'Gone';

    /**
     * ### 411 Length Required
     *
     * Server rejected the request because the Content-Length header field is not defined and the server requires it.
     * @since 1.0.0
     */
    case LENGTH_REQUIRED = 'Length Required';

    /**
     * ### 412 Precondition Failed
     *
     * The client has indicated preconditions in its headers, which the server doesn't meet.
     * @since 1.0.0
     */
    case PRECONDITION_FAILED = 'Precondition Failed';

    /**
     * ### 413 Payload Too Large
     *
     * Request entity is larger than limits defined by the server. The server might close the connection or return a
     * Retry-After header field.
     * @since 1.0.0
     */
    case PAYLOAD_TOO_LARGE = 'Payload Too Large';

    /**
     * ### 414 URI Too Long
     *
     * The URI requested by the client is longer than the server is willing to interpret.
     * @since 1.0.0
     */
    case URI_TOO_LONG = 'URI Too Long';

    /**
     * ### 415 Unsupported Media Type
     *
     * The media format of the requested data is not supported by the server, so the server is rejecting the request.
     * @since 1.0.0
     */
    case UNSUPPORTED_MEDIA_TYPE = 'Unsupported Media Type';

    /**
     * ### 416 Range Not Satisfiable
     *
     * The range specified by the Range header field in the request can't be fulfilled. It is possible that the range
     * is outside the size of the target URI's data.
     * @since 1.0.0
     */
    case RANGE_NOT_SATISFIABLE = 'Range Not Satisfiable';

    /**
     * ### 417 Expectation Failed
     *
     * This response code means the server can't meet the expectation indicated by the Expect request header field.
     * @since 1.0.0
     */
    case EXPECTATION_FAILED = 'Expectation Failed';

    /**
     * ### 421 Misdirected Request
     *
     * The request was directed at a server that is not able to produce a response. This can be sent by a server which
     * is not configured to produce responses for the combination of scheme and authority that are included in the
     * request URI.
     * @since 1.0.0
     */
    case MISDIRECTED_REQUEST = 'Misdirected Request';

    /**
     * ### 426 Upgrade Required
     *
     * The server refuses to perform the request using the current protocol but might be willing to do so after the
     * client upgrades to a different protocol. The server sends an Upgrade header in a 426 response to indicate the
     * required protocol.
     * @since 1.0.0
     */
    case UPGRADE_REQUIRED = 'Upgrade Required';

    /**
     * ### 428 Precondition Required
     *
     * The origin server requires the request to be conditional. This response is intended to prevent the 'lost
     * update' problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when
     * meanwhile a third party has modified the state on the server, leading to a conflict.
     * @since 1.0.0
     */
    case PRECONDITION_REQUIRED = 'Precondition Required';

    /**
     * ### 429 Too Many Requests
     *
     * The user has sent too many requests in a given amount of time ("rate limiting").
     * @since 1.0.0
     */
    case TOO_MANY_REQUESTS = 'Too Many Requests';

    /**
     * ### 431 Request Header Fields Too Large
     *
     * The server is unwilling to process the request because its header fields are too large. The request may be
     * resubmitted after reducing the size of the request header fields.
     * @since 1.0.0
     */
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 'Request Header Fields Too Large';

    /**
     * ### 451 Unavailable For Legal Reasons
     *
     * The user agent requested a resource that can't legally be provided, such as a web page censored by a government.
     * @since 1.0.0
     */
    case UNAVAILABLE_FOR_LEGAL_REASONS = 'Unavailable For Legal Reasons';

    /**
     * ### 500 Internal Server Error
     *
     * The server has encountered a situation it doesn't know how to handle.
     * @since 1.0.0
     */
    case INTERNAL_SERVER_ERROR = 'Internal Server Error';

    /**
     * ### 501 Not Implemented
     *
     * The request method is not supported by the server and can't be handled. The only methods that servers are
     * required to support (and therefore that mustn't return this code) are GET and HEAD.
     * @since 1.0.0
     */
    case NOT_IMPLEMENTED = 'Not Implemented';

    /**
     * ### 502 Bad Gateway
     *
     * This error response means that the server, while working as a gateway to get a response needed to handle the
     * request, got an invalid response.
     * @since 1.0.0
     */
    case BAD_GATEWAY = 'Bad Gateway';

    /**
     * ### 503 Service Unavailable
     *
     * The server is not ready to handle the request. Common causes are a server that is down for maintenance or that
     * is overloaded. Note that together with this response, a user-friendly page explaining the problem should be
     * sent. This response should be used for temporary conditions, and the Retry-After HTTP header should, if
     * possible, contain the estimated time before the recovery of the service. The webmaster must also take care
     * of the caching-related headers that are sent along with this response, as these temporary condition responses
     * should usually not be cached.
     * @since 1.0.0
     */
    case SERVICE_UNAVAILABLE = 'Service Unavailable';

    /**
     * ### 504 Gateway Timeout
     *
     * This error response is given when the server is acting as a gateway and can't get a response in time.
     * @since 1.0.0
     */
    case GATEWAY_TIMEOUT = 'Gateway Timeout';

    /**
     * ### 505 HTTP Version Not Supported
     *
     * The server doesn't support the HTTP version used in the request.
     * @since 1.0.0
     */
    case HTTP_VERSION_NOT_SUPPORTED = 'HTTP Version Not Supported';

    /**
     * ### 506 Variant Also Negotiates
     *
     * The server has an internal configuration error: the chosen variant resource is configured to engage in
     * transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.
     * @since 1.0.0
     */
    case VARIANT_ALSO_NEGOTIATES = 'Variant Also Negotiates';

    /**
     * ### 510 Not Extended
     *
     * Further extensions to the request are required for the server to fulfill it.
     * @since 1.0.0
     */
    case NOT_EXTENDED = 'Not Extended';

    /**
     * ### 511 Network Authentication Required
     *
     * Indicates that the client needs to authenticate to gain network access.
     * @since 1.0.0
     */
    case NETWORK_AUTHENTICATION_REQUIRED = 'Network Authentication Required';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function fromCode (int $code):self|false {

        foreach (self::cases() as $status) {
            if ($status->code() === $code) return $status;
        }

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():int {

        return match ($this) {
            self::CONTINUE => 100,
            self::SWITCHING_PROTOCOLS => 101,
            self::EARLY_HINTS => 103,
            self::OK => 200,
            self::CREATED => 201,
            self::ACCEPTED => 202,
            self::NON_AUTHORITATIVE_INFORMATION => 203,
            self::NO_CONTENT => 204,
            self::RESET_CONTENT => 205,
            self::PARTIAL_CONTENT => 206,
            self::IM_USED => 226,
            self::MULTIPLE_CHOICES => 300,
            self::MOVED_PERMANENTLY => 301,
            self::FOUND => 302,
            self::SEE_OTHER => 303,
            self::NOT_MODIFIED => 304,
            self::TEMPORARY_REDIRECT => 307,
            self::PERMANENT_REDIRECT => 308,
            self::BAD_REQUEST => 400,
            self::UNAUTHORIZED => 401,
            self::FORBIDDEN => 403,
            self::NOT_FOUND => 404,
            self::METHOD_NOT_ALLOWED => 405,
            self::NOT_ACCEPTABLE => 406,
            self::PROXY_AUTHENTICATION_REQUIRED => 407,
            self::REQUEST_TIMEOUT => 408,
            self::CONFLICT => 409,
            self::GONE => 410,
            self::LENGTH_REQUIRED => 411,
            self::PRECONDITION_FAILED => 412,
            self::PAYLOAD_TOO_LARGE => 413,
            self::URI_TOO_LONG => 414,
            self::UNSUPPORTED_MEDIA_TYPE => 415,
            self::RANGE_NOT_SATISFIABLE => 416,
            self::EXPECTATION_FAILED => 417,
            self::MISDIRECTED_REQUEST => 421,
            self::UPGRADE_REQUIRED => 426,
            self::PRECONDITION_REQUIRED => 428,
            self::TOO_MANY_REQUESTS => 429,
            self::REQUEST_HEADER_FIELDS_TOO_LARGE => 431,
            self::UNAVAILABLE_FOR_LEGAL_REASONS => 451,
            self::INTERNAL_SERVER_ERROR => 500,
            self::NOT_IMPLEMENTED => 501,
            self::BAD_GATEWAY => 502,
            self::SERVICE_UNAVAILABLE => 503,
            self::GATEWAY_TIMEOUT => 504,
            self::HTTP_VERSION_NOT_SUPPORTED => 505,
            self::VARIANT_ALSO_NEGOTIATES => 506,
            self::NOT_EXTENDED => 510,
            self::NETWORK_AUTHENTICATION_REQUIRED => 511
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\StatusCode::code() To get status code.
     */
    public function codeStatus ():string {

        return $this->code(). ' '.$this->value;

    }

}