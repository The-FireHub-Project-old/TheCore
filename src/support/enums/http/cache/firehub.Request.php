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

namespace FireHub\Core\Support\Enums\HTTP\Cache;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### HTTP request cache control
 * @since 1.0.0
 */
enum Request:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Allow for the number of seconds
     *
     * The max-age=N request directive indicates that the client allows a stored response generated on the origin
     * server within N seconds – where N may be any non-negative integer (including 0).
     * @since 1.0.0
     */
    case MAX_AGE = 'max-age';

    /**
     * ### Allow stale for the number of seconds
     *
     * The max-stale=N request directive indicates that the client allows a stored response that is stale within N
     * seconds. If no N value is specified, the client will accept a stale response of any age.
     * @since 1.0.0
     */
    case MAX_STALE = 'max-stale';

    /**
     * ### Allow fresh for least number of seconds
     *
     * The min-fresh=N request directive indicates that the client allows a stored response that is fresh for at
     * least N seconds.
     * @since 1.0.0
     */
    case MIN_FRESH = 'min-fresh';

    /**
     * ### Validate the response with the origin server before reuse
     *
     * The no-cache request directive asks caches to validate the response with the origin server before reuse.
     * @since 1.0.0
     */
    case NO_CACHE = 'no-cache';

    /**
     * ### Allows a client to request that caches refrain from storing the request and corresponding response
     *
     * The no-store request directive allows a client to request that caches refrain from storing the request and
     * corresponding response – even if the origin server's response could be stored.
     * @since 1.0.0
     */
    case NO_STORE = 'no-store';

    /**
     * ### Same meaning that no-transform has for a response, but for a request instead
     * @since 1.0.0
     */
    case NO_TRANSFORM = 'no-transform';

    /**
     * ### The client indicates that an already-cached response should be returned
     *
     * If a cache has a stored response, even a stale one, it will be returned. If no cached response is available,
     * a 504-Gateway Timeout response will be returned.
     * @since 1.0.0
     */
    case ONLY_IF_CACHED = 'only-if-cached';

}