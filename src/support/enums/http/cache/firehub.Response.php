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
 * ### HTTP response cache control
 * @since 1.0.0
 */
enum Response:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Remain fresh for the number of seconds
     *
     * The max-age=N response directive indicates that the response remains fresh until N seconds after the response
     * is generated.
     * @since 1.0.0
     */
    case MAX_AGE = 'max-age';

    /**
     * ### Remain fresh for the number of seconds in a shared cache
     *
     * The s-maxage response directive indicates how long the response remains fresh in a shared cache. The s-maxage
     * directive is ignored by private caches and overrides the value specified by the max-age directive or the Expires
     * header for shared caches, if they're present.
     * @since 1.0.0
     */
    case SHARED_MAX_AGE = 's-maxage';

    /**
     * ### Validate with the origin server before each reuse
     *
     * The no-cache response directive indicates that the response can be stored in caches, but the response must be
     * validated with the origin server before each reuse, even when the cache is disconnected from the origin server.
     * @since 1.0.0
     */
    case NO_CACHE = 'no-cache';

    /**
     * ### Indicates that any caches of any kind (private or shared) shouldn't store this response
     * @since 1.0.0
     */
    case NO_STORE = 'no-store';

    /**
     * ### Indicates that any intermediary shouldn't transform the response contents
     *
     * Some intermediaries transform content for various reasons. For example, some convert images to reduce transfer size. In some cases, this is undesirable for
     * the content provider. The no-transform indicates that any intermediary (regardless of whether it implements a
     * cache) shouldn't transform the response contents.
     * @since 1.0.0
     */
    case NO_TRANSFORM = 'no-transform';

    /**
     * ### Indicates that the response can be stored in caches and can be reused while fresh
     *
     * If the response becomes stale, it must be validated with the origin server before reuse.
     * Typically, must-revalidate is used with max-age.
     * @since 1.0.0
     */
    case MUST_REVALIDATE = 'must-revalidate';

    /**
     * ### Equivalent of must-revalidate, but specifically for shared caches only
     * @since 1.0.0
     */
    case PROXY_REVALIDATE = 'proxy-revalidate';

    /**
     * ### Indicates that a cache should store the response only if it understands the requirements for caching based on status code
     * @since 1.0.0
     */
    case MUST_UNDERSTAND = 'must-understand';

    /**
     * ### Indicates that the response can be stored in a shared cache
     *
     * Responses for requests with Authorization header fields mustn't be stored in a shared cache; however, the
     * public directive will cause such responses to be stored in a shared cache.
     * @since 1.0.0
     */
    case PUBLIC = 'public';

    /**
     * ### Indicates that the response can be stored only in a private cache
     *
     * You should add the private directive for user-personalized content, especially for responses received after
     * login and for sessions managed via cookies.
     * @since 1.0.0
     */
    case PRIVATE = 'private';

}