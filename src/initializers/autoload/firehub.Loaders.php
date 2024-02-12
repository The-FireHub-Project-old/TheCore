<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Initializers\Autoload;

use FireHub\Core\Support\LowLevel\Arr;
use Error;

/**
 * ### List of active loader implementations for autoloader
 * @since 1.0.0
 *
 * @api
 */
final class Loaders {

    /**
     * ### List of loaders
     * @since 1.0.0
     *
     * @var array
     * @phpstan-var array<non-empty-string, callable(string):void>
     */
    private array $list = [];

    /**
     * ### Get loader callback
     * @since 1.0.0
     *
     * @param string $name <p>
     * <code>non-empty-string</code>
     * Loader name.
     * </p>
     * @phpstan-param non-empty-string $name
     *
     * @throws Error If loader doesn't exist.
     *
     * @return callable <code>callable(string):void</code> Loader callback.
     * @phpstan-return callable(string):void
     */
    public function get (string $name):callable {

        if (!Arr::keyExist($name, $this->list))
            throw new Error("Loader $name doesn't exist.");

        return $this->list[$name];

    }

    /**
     * ### Adds a new loader
     * @since 1.0.0
     *
     * @param string $name <p>
     * <code>non-empty-string</code>
     * Loader name.
     * </p>
     * @param callable(string):void $callback <p>
     * <code>callable(string):void</code>
     * The autoload function being registered.
     * </p>
     * @phpstan-param non-empty-string $name
     *
     * @throws Error If loader is empty, or loader already exists.
     *
     * @return true Always true.
     */
    public function add (string $name, callable $callback):true {

        if (empty($name)) throw new Error('Loader name cannot be empty.');

        if (Arr::keyExist($name, $this->list))
            throw new Error('Loader $name already exist.');

        $this->list[$name] = $callback;

        return true;

    }

    /**
     * ### Removes loader
     * @since 1.0.0
     *
     * @param string $name <p>
     * <code>non-empty-string</code>
     * Loader name.
     * </p>
     * @phpstan-param non-empty-string $name
     *
     * @throws Error If loader doesn't exist.
     *
     * @return true Always true.
     */
    public function remove (string $name):true {

        if (!Arr::keyExist($name, $this->list))
            throw new Error("Loader $name doesn't exist.");

        unset($this->list[$name]);

        return true;

    }

    /**
     * ### Get list of autoloader implementations
     * @since 1.0.0
     *
     * @return array <code><![CDATA[ array<non-empty-string, callable(string):void> ]]></code> List of autoloader
     * implementations.
     * @phpstan-return array<non-empty-string, callable(string):void>
     */
    public function list ():array {

        return $this->list;

    }

}