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
     * @var array<non-empty-string, callable(string):void>
     */
    private array $list = [];

    /**
     * ### Get loader callback
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Loader name.
     * </p>
     *
     * @throws Error If loader doesn't exist.
     *
     * @return callable(string $name):void Loader callback.
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
     * @param non-empty-string $name <p>
     * Loader name.
     * </p>
     * @param callable(string):void $callback <p>
     * <code>callable(string):void</code>
     * The autoload function being registered.
     * </p>
     *
     * @throws Error If the loader is empty, or the loader already exists.
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
     * @param non-empty-string $name <p>
     * Loader name.
     * </p>
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
     * @return array<non-empty-string, callable(string):void> <code><![CDATA[ array<non-empty-string, callable(string):void> ]]></code> List of autoloader
     * implementations.
     */
    public function list ():array {

        return $this->list;

    }

}