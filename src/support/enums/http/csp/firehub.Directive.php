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

namespace FireHub\Core\Support\Enums\HTTP\CSP;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### HTTP Content Security Policy directives
 * @since 1.0.0
 */
enum Directive:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Defines the valid sources for web workers and nested browsing contexts loaded using elements such as <frame> and <iframe>
     * @since 1.0.0
     */
    case CHILD_SRC = 'child-src';

    /**
     * ### Directive restricts the URLs which can be loaded using script interfaces
     * - The ping attribute in <a> elements
     * - fetch()
     * - XMLHttpRequest
     * - WebSocket
     * - EventSource
     * - Navigator.sendBeacon()
     *
     * @since 1.0.0
     */
    case CONNECT_SRC = 'connect-src';

    /**
     * ### Serves as a fallback for the other fetch directives
     * @since 1.0.0
     */
    case DEFAULT_SRC = 'default-src';

    /**
     * ### Specifies valid sources for fonts loaded using @font-face
     * @since 1.0.0
     */
    case FONT_SRC = 'font-src';

    /**
     * ### Specifies valid sources for nested browsing contexts loaded into elements such as <frame> and <iframe>
     * @since 1.0.0
     */
    case FRAME_SRC = 'frame-src';

    /**
     * ### Specifies valid sources of images and favicons
     * @since 1.0.0
     */
    case IMG_SRC = 'img-src';

    /**
     * ### Specifies valid sources of application manifest files
     * @since 1.0.0
     */
    case MANIFEST_SRC = 'manifest-src';

    /**
     * ### Specifies valid sources for loading media using the <audio>, <video> and <track> elements
     * @since 1.0.0
     */
    case MEDIA_SRC = 'media-src';

    /**
     * ### Specifies valid sources for the <object> and <embed> elements
     * @since 1.0.0
     */
    case OBJECT_SRC = 'object-src';

    /**
     * ### Specifies valid sources for JavaScript and WebAssembly resources
     * @since 1.0.0
     */
    case SCRIPT_SRC = 'script-src';

    /**
     * ### Specifies valid sources for JavaScript <script> elements
     * @since 1.0.0
     */
    case SCRIPT_SRC_ELEM = 'script-src-elem';

    /**
     * ### Specifies valid sources for JavaScript inline event handlers
     * @since 1.0.0
     */
    case SCRIPT_SRC_ATTR = 'script-src-attr';

    /**
     * ### Specifies valid sources for stylesheets
     * @since 1.0.0
     */
    case STYLE_SRC = 'style-src';

    /**
     * ### Specifies valid sources for stylesheets <style> elements and <link> elements with rel="stylesheet"
     * @since 1.0.0
     */
    case STYLE_SRC_ELEM = 'style-src-elem';

    /**
     * ### Specifies valid sources for inline styles applied to individual DOM elements
     * @since 1.0.0
     */
    case STYLE_SRC_ATTR = 'style-src-attr';

    /**
     * ### Specifies valid sources for Worker, SharedWorker, or ServiceWorker scripts
     * @since 1.0.0
     */
    case WORKER_SRC = 'worker-src';

    /**
     * ### Restricts the URLs which can be used in a document's <base> element
     * @since 1.0.0
     */
    case BASE_URI = 'base-uri';

    /**
     * ### Enables a sandbox for the requested resource similar to the <iframe> sandbox attribute
     * @since 1.0.0
     */
    case SANDBOX = 'sandbox';

    /**
     * ### Restricts the URLs which can be used as the target of a form submission from a given context
     * @since 1.0.0
     */
    case FORM_ACTION = 'form-action';

    /**
     * ### Specifies valid parents that may embed a page using <frame>, <iframe>, <object>, or <embed>
     * @since 1.0.0
     */
    case FRAME_ANCESTORS = 'frame-ancestors';

    /**
     * ### Upgrade insecure requests
     *
     * Instructs user agents to treat all of a site's insecure URLs (those served over HTTP) as though they've been
     * replaced with secure URLs (those served over HTTPS). This directive is intended for websites with large
     * numbers of insecure legacy URLs that need to be rewritten.
     * @since 1.0.0
     */
    case UPGRADE_INSECURE_REQUESTS = 'upgrade-insecure-requests';

}