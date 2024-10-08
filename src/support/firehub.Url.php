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

namespace FireHub\Core\Support;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Associative
};
use FireHub\Core\Support\Enums\URL\Schema;
use FireHub\Core\Support\LowLevel\Url as UrlLL;
use Error;

/**
 * ### URL support class
 *
 * Give info about the provided URL.
 * @since 1.0.0
 *
 * @api
 */
class Url implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### URL schema
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Enums\URL\Schema|false
     */
    private Schema|false $schema;

    /**
     * ### URL username
     * @since 1.0.0
     *
     * @var string|false
     */
    private string|false $username;

    /**
     * ### URL password
     * @since 1.0.0
     *
     * @var string|false
     */
    private string|false $password;

    /**
     * ### URL host
     * @since 1.0.0
     *
     * @var string|false
     */
    private string|false $host;

    /**
     * ### URL port
     * @since 1.0.0
     *
     * @var int|false
     */
    private int|false $port;

    /**
     * ### URL path
     *
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Indexed<non-empty-string>
     */
    private Indexed $path;

    /**
     * ### URL query
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Associative<array-key, string|string[]>
     */
    private Associative $query;

    /**
     * ### URL fragment
     * @since 1.0.0
     *
     * @var string|false
     */
    private string|false $fragment;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Url::parse() To parse URL.
     * @uses \FireHub\Core\Support\LowLevel\Url::parseQuery() To parse URL query parameters.
     * @uses \FireHub\Core\Support\Enums\URL\Schema::tryFrom() To try to get the schema case.
     * @uses \FireHub\Core\Support\Collection::list() To create a path list.
     * @uses \FireHub\Core\Support\Collection::associative() To create a query list.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::filter() To remove empty paths.
     *
     * @param string $url <p>
     * URL to build from.
     * </p>
     *
     * @return void
     */
    public function __construct (string $url) {

        $parse = UrlLL::parse($url)
            ?: throw new Error('Cannot parse URL from '.$url);

        $this->schema = Schema::tryFrom($parse['scheme'] ?? '') ?? false;
        $this->username = $parse['user'] ?? false;
        $this->password = $parse['pass'] ?? false;
        $this->host = $parse['host'] ?? false;
        $this->port = $parse['port'] ?? false;
        $this->path = Collection::list(isset($parse['path']) ? explode( '/',$parse['path']) : [])
            ->filter(fn($value) => $value !== '');
        $this->query = Collection::associative(UrlLL::parseQuery($parse['query'] ?? ''));
        $this->fragment = $parse['fragment'] ?? false;

    }

    /**
     * ### Get or set URL scheme
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\URL\Schema As parameter and return.
     *
     * @param null|\FireHub\Core\Support\Enums\URL\Schema $as [optional] <p>
     * Schema to set.
     * </p>
     *
     * @return ($as is null ? \FireHub\Core\Support\Enums\URL\Schema|false : $this) URL scheme or false if none exist or
     * this object with new data.
     */
    public function scheme (?Schema $as = null):static|Schema|false {

        if (!$as) return $this->schema;

        $this->schema = $as;

        return $this;

    }

    /**
     * ### Get or set URL username
     * @since 1.0.0
     *
     * @param null|string $as [optional] <p>
     * Username to set.
     * </p>
     *
     * @return ($as is null ? string|false : $this) URL username or false if none exist or this object with new data.
     */
    public function username (?string $as = null):static|string|false {

        if (!$as) return $this->username;

        $this->username = $as;

        return $this;

    }

    /**
     * ### Get or set URL password
     * @since 1.0.0
     *
     * @param null|string $as [optional] <p>
     * Password to set.
     * </p>
     *
     * @return ($as is null ? string|false : $this) URL password or false if none exist or this object with new data.
     */
    public function password (?string $as = null):static|string|false {

        if (!$as) return $this->password;

        $this->password = $as;

        return $this;

    }

    /**
     * ### Get or set URL host
     * @since 1.0.0
     *
     * @param null|string $as [optional] <p>
     * Host to set.
     * </p>
     *
     * @return ($as is null ? string|false : $this) URL host or false if none exist or this object with new data.
     */
    public function host (?string $as = null):static|string|false {

        if (!$as) return $this->host;

        $this->host = $as;

        return $this;

    }

    /**
     * ### Get or set URL port
     * @since 1.0.0
     *
     * @param null|int $as [optional] <p>
     * Port to set.
     * </p>
     *
     * @return ($as is null ? int|false : $this) URL port or false if none exist or this object with new data.
     */
    public function port (?int $as = null):static|int|false {

        if (!$as) return $this->port;

        $this->port = $as;

        return $this;

    }

    /**
     * ### Get or set URL path
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::fromList() To create string from paths.
     * @uses \FireHub\Core\Support\Str::prepend() To prepend slash in front.
     * @uses \FireHub\Core\Support\Str::$string To get string as raw string.
     *
     * @return string URL path.
     */
    public function path ():string {

        return Str::fromList($this->path, '/')->prepend('/')->string();

    }

    /**
     * ### Get URL path list
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<non-empty-string> URL path.
     */
    public function pathList ():Indexed {

        return $this->path;

    }

    /**
     * ### Get URL query
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Url::buildQuery() To generate URL-encoded query string.
     * @uses \FireHub\Core\Support\Collection\Type\Associative::all() To get all query parameters.
     *
     * @return string|false URL query or false if none exist.
     */
    public function query ():string|false {

        return UrlLL::buildQuery($this->query->all()) ?: false;

    }

    /**
     * ### Get URL query list
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As return.
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<array-key, string|string[]> Collection of URL query
     * parameters.
     */
    public function queryList ():Associative {

        return $this->query;

    }

    /**
     * ### Get or set URL fragment
     * @since 1.0.0
     *
     * @param null|string $as [optional] <p>
     * Fragment to set.
     * </p>
     *
     * @return ($as is null ? string|false : $this) URL fragment or false if none exist or this object with new data.
     */
    public function fragment (?string $as = null):static|string|false {

        if (!$as) return $this->fragment;

        $this->fragment = $as;

        return $this;

    }

    /**
     * ### Parse URL
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\URL\Schema::withAuthority() To get URL schema with authority.
     * @uses \FireHub\Core\Support\Url::username() To get URL username.
     * @uses \FireHub\Core\Support\Url::passwsord() To get URL password.
     * @uses \FireHub\Core\Support\Url::host() To get URL host.
     * @uses \FireHub\Core\Support\Url::port() To get URL port.
     * @uses \FireHub\Core\Support\Url::path() To get URL path.
     * @uses \FireHub\Core\Support\Url::query() To parse URL query.
     * @uses \FireHub\Core\Support\Url::fragment() To get URL fragment.
     *
     * @return string URL.
     */
    public function parse ():string {

        return ($this->schema ? $this->schema->withAuthority() : '')
            .($this->username() ?: '')
            .($this->password() ? '@'.$this->password() : '')
            .($this->host() ?: '')
            .($this->port() ? ':'.$this->port() : '')
            .$this->path()
            .($this->query() ? '?'.$this->query() : '')
            .($this->fragment() ? '#'.$this->fragment() : '');

    }

}