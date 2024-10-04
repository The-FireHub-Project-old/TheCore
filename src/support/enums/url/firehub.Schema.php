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

namespace FireHub\Core\Support\Enums\URL;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### The scheme of URL is the first part of the URL, before the ':' character
 * @since 1.0.0
 */
enum Schema:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Binary Large Object; a pointer to a large in-memory object
     * @since 1.0.0
     */
    case BLOB = 'blob';

    /**
     * ### Data directly embedded in the URL
     * @since 1.0.0
     */
    case DATA = 'data';

    /**
     * ### Host-specific filenames
     * @since 1.0.0
     */
    case FILE = 'file';

    /**
     * ### File Transfer Protocol
     * @since 1.0.0
     */
    case FTP = 'ftp';

    /**
     * ### Secure File Transfer Protocol
     * @since 1.0.0
     */
    case FTPS = 'ftps';

    /**
     * ### Hyper text transfer protocol
     * @since 1.0.0
     */
    case HTTP = 'http';

    /**
     * ### Secure hyper text transfer protocol
     * @since 1.0.0
     */
    case HTTPS = 'https';

    /**
     * ### Internet Message Access Protocol
     * @since 1.0.0
     */
    case IMAP = 'imap';

    /**
     * ### URL-embedded JavaScript code
     * @since 1.0.0
     */
    case JAVASCRIPT = 'javascript';

    /**
     * ### Lightweight directory access protocol
     * @since 1.0.0
     */
    case LDAP = 'lpad';

    /**
     * ### Electronic mail address
     * @since 1.0.0
     */
    case MAILTO = 'mailto';

    /**
     * ### Usenet News
     * @since 1.0.0
     */
    case NEWS = 'news';

    /**
     * ### Usenet News
     * @since 1.0.0
     */
    case NNTP = 'nntp';

    /**
     * ### Short Message Service
     * @since 1.0.0
     */
    case SMS = 'sms';

    /**
     * ### Secure shell
     * @since 1.0.0
     */
    case SSH = 'ssh';

    /**
     * ### Telephone
     * @since 1.0.0
     */
    case TEL = 'tel';

    /**
     * ### Client/server application protocol
     * @since 1.0.0
     */
    case TELNET = 'telnet';

    /**
     * ### Uniform Resource Names
     * @since 1.0.0
     */
    case VIEW_SOURCE = 'view-source';

    /**
     * ### WebSocket connections
     * @since 1.0.0
     */
    case WS = 'ws';

    /**
     * ### Secure WebSocket connections
     * @since 1.0.0
     */
    case WSS = 'wss';

    /**
     * ### Get URL schema with authority
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\URL\Authority::COLON As authority type.
     * @uses \FireHub\Core\Support\Enums\URL\Authority::COLON_DOUBLE_FORWARD_SLASH As authority type.
     *
     * @return non-empty-lowercase-string URL schema with authority.
     */
    public function withAuthority ():string {

        return $this->value.match ($this) {
            self::BLOB, self::FILE, self::FTP, self::FTPS, self::HTTP, self::HTTPS, self::LDAP, self::IMAP, self::NNTP,
            self::SSH, self::TELNET, self::WS, self::WSS,
                => Authority::COLON_DOUBLE_FORWARD_SLASH->value,
            default => Authority::COLON->value
        };

    }

}