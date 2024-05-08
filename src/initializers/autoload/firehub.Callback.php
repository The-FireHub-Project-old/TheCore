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

use FireHub\Core\Support\LowLevel\{
    Arr, DataIs, File, StrSB
};
use Closure, Error, Throwable;

use const FireHub\Core\Support\Constants\Path\DS;

/**
 * ### The autoload function being registered
 * @since 1.0.0
 */
final class Callback {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string $path <p>
     * <code>Closure(string $namespace, string $classname):(non-empty-string|false)|non-empty-string</code>
     * Folder path where autoloader will try to find classes. All namespace components will be resolved as folders
     * inside a root path.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Closure|string $path
    ) {}

    /**
     * ### Get class components from class FQN
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSB::explode() To split class to components.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::implode() To join array elements to get namespace.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::toLower() To lowercase all namespaces.
     * @uses \FireHub\Core\Support\LowLevel\Arr::lastKey() To get classname.
     * @uses \FireHub\Core\Support\LowLevel\Arr::pop() To remove classname from namespace.
     * @uses \FireHub\Core\Support\Constants\Path\DS As system definition for separating folders, platform specific.
     *
     * @param string $class <p>
     * Class FQN to resolve.
     * </p>
     *
     * @throws Error If a system could not get class components.
     *
     * @return array{namespace: string, classname: string} Class components.
     */
    private function classComponents (string $class):array {

        try {

            $class_components = StrSB::explode($class, '\\');

            $classname = $class_components[Arr::lastKey($class_components)];
            Arr::pop($class_components);

            foreach ($class_components as $key => $value) $class_components[$key] = StrSB::toLower($value);
            $namespace = StrSB::implode($class_components, DS);

        } catch (Throwable) {

            throw new Error ('Could not get class components for: '.$class);

        }

        return [
            'namespace' => $namespace,
            'classname' => $classname
        ];

    }

    /**
     * ### Invoke autoload function being registered
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload\Callback::classComponents() To get class components from class FQN.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::callable() To check if $class is callable or string.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::string() To check if callable path return string.
     * @uses \FireHub\Core\Support\LowLevel\File::isFile() To check if $path is a valid path.
     * @uses \FireHub\Core\Support\Constants\Path\DS As system definition for separating folders, platform specific.
     *
     * @param string $class <p>
     * Fully qualified class name that is being loaded.
     * </p>
     *
     * @throws Error If a system could not get class components.
     * @error\exeption E_WARNING if a system cannot preload class.
     *
     * @return void
     */
    public function __invoke (string $class):void {

        $class_components = $this->classComponents($class);

        $path = DataIs::callable($this->path)
            ? (DataIs::string(($path_callable = ($this->path)($class_components['namespace'], $class_components['classname'])))
                ? $path_callable
                : false)
            : $this->path.DS.$class.'.php';

        if ($path && File::isFile($path)) include $path;

    }

}