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
    InitBackedEnum, Trait\ConcreteBackedEnum
};
use FireHub\Core\Support\Str;

/**
 * ### HTTP common content media type
 * @since 1.0.0
 *
 * @link https://www.iana.org/assignments/media-types/media-types.xhtml For a complete list.
 */
enum CommonMimeType:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Binary files
     *
     * This is the default for binary files. As it means an unknown binary file, browsers usually don't execute it or
     * even ask if it should be executed. They treat it as if the Content-Disposition header was set to attachment and
     * propose a "Save As" dialog.
     * @since 1.0.0
     */
    case BIN = 'application/octet-stream';

    /**
     * ### XML content
     * @since 1.0.0
     */
    case XML = 'application/xml';

    /**
     * ### Textual files
     *
     * This is the default for textual files. Even if it really means "unknown textual file," browsers assume they
     * can display it.
     * @since 1.0.0
     */
    case TXT = 'text/plain';

    /**
     * ### CSS files
     *
     * CSS files used to style a Web page must be sent with text/css. If a server doesn't recognize the .css suffix
     * for CSS files, it may send them with text/plain or application/octet-stream MIME types. If so, they won't be
     * recognized as CSS by most browsers and will be ignored.
     * @since 1.0.0
     */
    case CSS = 'text/css';

    /**
     * ### HTML content
     *
     * All HTML content should be served with this type.
     * @since 1.0.0
     */
    case HTML = 'text/html';

    /**
     * ### JavaScript files
     *
     * Per the IANA Media Types registry, RFC 9239, and the HTML specification, JavaScript content should always be
     * served using the MIME type text/javascript. No other MIME types are considered valid for JavaScript, and using
     * any MIME type other than text/javascript may result in scripts that don't load or run.
     * @since 1.0.0
     */
    case JS = 'text/javascript';

    /**
     * ### Animated Portable Network Graphics
     * @since 1.0.0
     */
    case APNG = 'image/apng';

    /**
     * ### AV1 Image File Format
     * @since 1.0.0
     */
    case AVIF = 'image/avif';

    /**
     * ### Woff Font Format
     * @since 1.0.0
     */
    case WOFF = 'font/woff';

    /**
     * ### Woff2 Font Format
     * @since 1.0.0
     */
    case WOFF2 = 'font/woff2';

    /**
     * ### TTF Font Format
     * @since 1.0.0
     */
    case TTF = 'font/ttf';

    /**
     * ### OTF Font Format
     * @since 1.0.0
     */
    case OTF = 'font/otf';

    /**
     * ### Graphics Interchange Format
     * @since 1.0.0
     */
    case GIF = 'image/gif';

    /**
     * ### Joint Photographic Expert Group image
     * @since 1.0.0
     */
    case JPEG = 'image/jpeg';

    /**
     * ### Portable Network Graphics
     * @since 1.0.0
     */
    case PNG = 'image/png';

    /**
     * ### Scalable Vector Graphics
     * @since 1.0.0
     */
    case SVG = 'image/svg+xml';

    /**
     * ### Web Picture format
     * @since 1.0.0
     */
    case WEBP = 'image/webp';

    /**
     * ### Get case types
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\HTTP\CommonMimeType::casesIf() To generate a list of cases on an enum based on
     * callable.
     * @uses \FireHub\Core\Support\Str::from() To create a string form type.
     * @uses \FireHub\Core\Support\Str::startsWith() To check if type starts with type argument.
     * @uses \FireHub\Core\Support\Str::string() To get raw string.
     *
     * @param non-empty-string $type <p>
     * Cases that start with type.
     * </p>
     *
     * @return self[] List of case types.
     */
    public static function casesType (string $type):array {

        return CommonMimeType::casesIf(fn($case) => Str::from($case->value)->startsWith(
            Str::from($type)->string() // @phpstan-ignore-line
        ));

    }

}