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

namespace FireHub\Core\Support\LowLevel;

use FireHub\Core\Base\ {
    InitStatic, Trait\ConcreteStatic
};

use function get_headers;
use function get_meta_tags;
use function http_build_query;
use function parse_url;
use function parse_str;
use function urldecode;
use function urlencode;

final class Url implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Fetches all the headers sent by the server in response to an HTTP request
     * @since 1.0.0
     *
     * @param string $url <p>
     * The URL to parse.
     * </p>
     * @param null|resource $context <p>
     * A valid resource context, created with stream_context_create(), or null to use the default context.
     * </p>
     *
     * @return array<array-key, mixed>|false Array with the headers, or false on failure.
     */
    public static function headers (string $url, mixed $context = null):array|false {

        return get_headers($url, true, $context);

    }

    /**
     * ### Extracts all meta-tag content attributes from a file and returns an array
     * @since 1.0.0
     *
     * @param string $url <p>
     * The path to the HTML file, as a string.
     * This can be a local file or a URL.
     * </p>
     *
     * @return array<array-key, mixed>|false Returns an array with all the parsed meta-tags, or false on failure.
     *
     * @note Only meta-tags with name attributes will be parsed. Quotes aren't required.
     * @note The value of the name property becomes the key, the value of the content property becomes the value of
     * the returned array, so you can use standard array functions to traverse it or access single values.
     * Special characters in the value of the name property are substituted with '_', the rest is converted to
     * lowercase. If two meta tags have the same name, only the last one is returned.
     */
    public static function metaTags (string $url):array|false {

        return get_meta_tags($url);

    }

    /**
     * ### Generate URL-encoded query string
     * @since 1.0.0
     *
     * @param array<string, scalar>|object $data <p>
     * Can be an array or object containing properties.
     * </p>
     *
     * @return string URL-encoded string.
     */
    public static function buildQuery (array|object $data):string {

        return http_build_query($data);

    }

    /**
     * ### Parse a URL and return its components
     * @since 1.0.0
     *
     * @param string $url <p>
     * The URL to parse.
     * </p>
     *
     * @return array{
     *     scheme?: string,
     *     host?: string,
     *     port?: int,
     *     user?: string,
     *     pass?: string,
     *     query?: string,
     *     path?: string,
     *     fragment?: string
     * }|false
     *
     * @note Invalid characters are replaced by _.
     */
    public static function parse (string $url):array|false {

        return parse_url($url);

    }

    /**
     * ### Parses the URL query into variables
     * @since 1.0.0
     *
     * @param string $query <p>
     * The input query.
     * </p>
     *
     * @return array<non-empty-string, non-empty-string> Parsed query.
     *
     * @caution Whitespaces are replaced with underscores.
     */
    public static function parseQuery (string $query):array {

        parse_str($query, $result);

        return $result;

    }

    /**
     * ### URL-encodes string
     *
     * This function is convenient when encoding a string to be used in a query part of a URL, as a convenient way to
     * pass variables to the next page.
     * @since 1.0.0
     *
     * @param string $url <p>
     * The string to be encoded.
     * </p>
     *
     * @return string Returns a string in which all non-alphanumeric characters except '-_.' have been replaced with a
     * percent (%) sign followed by two hex digits and spaces encoded as plus (+) signs.
     */
    public static function encode (string $url):string {

        return urlencode($url);

    }

    /**
     * ### Decodes URL-encoded string
     *
     * Decodes any %## encoding in the given string. Plus symbols ('+') are decoded to a space character.
     * @since 1.0.0
     *
     * @param string $url <p>
     * The string to be decoded.
     * </p>
     *
     * @return string Decoded string.
     */
    public static function decode (string $url):string {

        return urldecode($url);

    }

}