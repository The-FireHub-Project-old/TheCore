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
 * ### Bag for HTTP response header variables
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
final class ResponseHeaders extends Bag {

    /**
     * ### Defines the HTTP authentication methods ("challenges") that might be used to gain access to a specific
     * resource
     * @since 1.0.0
     *
     * @var string
     */
    public string $authenticate = '';

    /**
     * ### Clears browsing data (cookies, storage, cache) associated with the requesting website
     * @since 1.0.0
     *
     * @var string
     *
     * @note This feature is available only in secure contexts (HTTPS).
     */
    public string $clear_site_data = '';

    /**
     * ### Indicate the original media type of the resource prior to any content encoding applied before transmission
     * @since 1.0.0
     *
     * @var string
     */
    public string $content_type = '';

    /**
     * ### Indicate if the content is expected to be displayed inline or downloaded
     *
     * Header indicating if the content is expected to be displayed inline in the browser, that is, as a Web page or
     * as part of a Web page, or as an attachment, that is downloaded and saved locally.
     * @since 1.0.0
     *
     * @var string
     */
    public string $content_disposition = '';

    /**
     * ### Lists any encodings that have been applied to a resource, and in what order
     *
     * This lets the recipient know how to decode the data to get the original content format described in the
     * Content-Type header. Content encoding is mainly used to compress content without losing information about
     * the original media type.
     * @since 1.0.0
     *
     * @var string
     */
    public string $content_encoding = '';

    /**
     * ### Describes the language intended for the audience, so users can differentiate it according to their own
     * preferred language
     * @since 1.0.0
     *
     * @var string
     */
    public string $content_language = '';

    /**
     * ### Indicates the size of the message body, in bytes, sent to the recipient
     * @since 1.0.0
     *
     * @var string
     */
    public string $content_length = '';

    /**
     * ### Indicates an alternate location for the returned data
     * @since 1.0.0
     *
     * @var string
     */
    public string $content_location = '';

    /**
     * ### Allows website administrators to control resources the user agent is allowed to load for a given page
     * @since 1.0.0
     *
     * @var string
     */
    public string $content_security_policy = '';

    /**
     * ### Identifier for a specific version of a resource
     *
     * It lets caches be more efficient and save bandwidth, as a web server doesn't need to resend a full response if
     * the content wasn't changed. Additionally, e-tags help to prevent simultaneous updates of a resource from
     * overwriting each other ("midair collisions").
     * @since 1.0.0
     *
     * @var string
     */
    public string $entity_tag = '';

    /**
     * ### Contains a date and time when the origin server believes the resource was last modified
     *
     * It is used as a validator to determine if the resource is the same as the previously stored one. Less accurate
     * than an ETag header, it is a fallback mechanism. Conditional requests containing If-Modified-Since or
     * If-Unmodified-Since headers make use of this field.
     * @since 1.0.0
     *
     * @var string
     */
    public string $last_modified = '';

    /**
     * ### Provides a means for serializing one or more links in HTTP headers
     *
     * This header has the same semantics as the HTML <link> element. The benefit of using the Link header is that
     * the browser can start pre-connecting or preloading resources before the HTML itself is fetched and processed.
     * @since 1.0.0
     *
     * @var string
     */
    public string $link = '';

    /**
     * ### Communicates one or more metrics and descriptions for a given request-response cycle
     *
     * It is used to surface any backend server timing metrics (for example, database read/write, CPU time, file system
     * access, and so on) in the developer tools in the user's browser or in the PerformanceServerTiming interface.
     * @since 1.0.0
     *
     * @var string
     */
    public string $server_timing = '';

    /**
     * ### Informs browsers that the site should only be accessed using HTTPS
     * @since 1.0.0
     *
     * @var string
     */
    public string $strict_transport_security = '';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    protected function adapt ():array {

        return [
            'authenticate' => 'WWW-Authenticate',
            'clear_site_data' => 'Clear-Site-Data',
            'content_type' => 'Content-type',
            'content_disposition' => 'Content-Disposition',
            'content_encoding' => 'Content-Encoding',
            'content_language' => 'Content-Language',
            'content_length' => 'Content-Length',
            'content_location' => 'Content-Location',
            'content_security_policy' => 'Content-Security-Policy',
            'entity_tag' => 'ETag',
            'last_modified' => 'Last-Modified',
            'link' => 'Link',
            'server_timing' => 'Server-Timing',
            'strict_transport_security' => 'Strict-Transport-Security'
        ];

    }

}