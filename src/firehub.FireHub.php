<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core;

use FireHub\Core\Initializers\Autoload;
use FireHub\Core\Initializers\Bootloaders\Bootloader;
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Kernel\Server;
use FireHub\Core\Support\Path;
use FireHub\Core\Initializers\Enums\Kernel;
use FireHub\Core\Support\LowLevel\ {
    Arr, StrSB
};
use DirectoryIterator, Error, Throwable;

use const FireHub\Core\Support\Constants\Path\DS;

/**
 * ### Main FireHub class for bootstrapping
 *
 * This class contains all system definitions, constants, and dependant components for FireHub bootstrapping.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
final class FireHub {

    /**
     * ### List of bootloaders required for instantiating the FireHub framework
     * @since 1.0.0
     *
     * @var class-string[]
     */
    private array $bootloaders = [
        \FireHub\Core\Initializers\Bootloaders\RegisterKernel::class
    ];

    /**
     * ### Constructor
     *
     * Prevents instantiation of the main class.
     * @since 1.0.0
     *
     * @return void
     */
    private function __construct() {}

    /**
     * ### Light the torch
     *
     * This methode serves for instantiating the FireHub framework.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Enums\Kernel As parameter.
     * @uses \FireHub\Core\Firehub::bootloaders() To initialize bootloaders.
     * @uses \FireHub\Core\Firehub::kernel() To process Kernel.
     *
     * @param \FireHub\Core\Initializers\Enums\Kernel $kernel <p>
     * Pick Kernel from Kernel enum, process your request and return the appropriate response.
     * </p>
     *
     * @throws Error If a system can't load constant, helper, or autoload files, or a system can't load autoload files,
     * or failed to register autoloader.
     * @error\exeption E_WARNING if a system can't preload class for autoloader.
     *
     * @return string Response from Kernel.
     */
    public static function boot (Kernel $kernel):string {

        return (new self)
            ->bootloaders()
            ->kernel($kernel);

    }

    /**
     * ### Initialize bootloaders
     *
     * Load the series of bootloaders required to boot FireHub framework.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\FireHub::registerConstants() To register constants.
     * @uses \FireHub\Core\FireHub::registerHelpers() To register helpers.
     * @uses \FireHub\Core\FireHub::preload() To load preloader classes.
     * @uses \FireHub\Core\Firehub::autoload() To load autoloader.
     * @uses \FireHub\Core\FireHub::$bootloaders To load bootloaders required for instantiating the FireHub framework.
     *
     * @throws Error If a system can't load constant, helper, or autoload files, or a system can't load autoload files,
     * or failed to register autoloader.
     * @error\exeption E_WARNING if a system can't preload class for autoloader.
     *
     * @return $this This object.
     */
    private function bootloaders ():self {

        return $this
            ->registerConstants()
            ->registerHelpers()
            ->preload()
            ->autoload()
            ->loadBootloaders();

    }

    /**
     * ### Register constants
     *
     * This method will scan the Initializers\Constants folder and automatically include all PHP files.
     * @since 1.0.0
     *
     * @throws Error If a system can't load constant files.
     *
     * @return $this This object.
     */
    private function registerConstants ():self {

        try {

            foreach (new DirectoryIterator(
                __DIR__
                .DIRECTORY_SEPARATOR
                .implode(DIRECTORY_SEPARATOR, ['support', 'constants']))
                     as $file
            ) if ($file->isFile() && $file->getExtension() === 'php') include $file->getPathname();

        } catch (Throwable) {

            throw new Error('Cannot load constant files, please contact your administrator');

        }

        return $this;

    }

    /**
     * ### Register helper functions
     *
     * This method will scan the Initializers\Helpers folder and automatically include all PHP files.
     * @since 1.0.0
     *
     * @throws Error If a system can't load helper files.
     *
     * @return $this This object.
     */
    private function registerHelpers ():self {

        try {

            foreach (new DirectoryIterator(
                __DIR__
                .DIRECTORY_SEPARATOR
                .implode(DIRECTORY_SEPARATOR, ['support', 'helpers']))
                     as $file
            ) if ($file->isFile() && $file->getExtension() === 'php') include $file->getPathname();

        } catch (Throwable) {

            throw new Error('Cannot load helper files, please contact your administrator');

        }

        return $this;

    }

    /**
     * ### Load preloader classes
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload::include() To manually include a list of classes.
     * @uses \FireHub\Core\Support\Constants\Path\DS As system definition for separating folders, platform-specific.
     *
     * @throws Error If a system can't load autoload files.
     * @error\exeption E_WARNING if a system can't preload class for autoloader.
     *
     * @return $this This object.
     */
    private function preload ():self {

        if (!include(__DIR__.DS.'initializers'.DS.'firehub.Autoload.php'))
            throw new Error('Cannot load Autoload file, please contact your administrator.');
        if (!include(__DIR__.DS.'initializers'.DS.'autoload'.DS.'firehub.Callback.php'))
            throw new Error('Cannot load Autoload file, please contact your administrator.');
        if (!include(__DIR__.DS.'initializers'.DS.'autoload'.DS.'firehub.Loaders.php'))
            throw new Error('Cannot load Autoload file, please contact your administrator.');

        /** @var class-string[] $preloaders */
        $preloaders = include(__DIR__.DS.'initializers'.DS.'autoload'.DS.'preloaders.php');

        if (!is_array($preloaders))
            throw new Error('Cannot load Autoload preloaders file, please contact your administrator.');

        // register FireHub preloaders
        Autoload::include($preloaders, function (string $class):string {
            $class_components = explode('\\', $class);

            array_shift($class_components);
            array_shift($class_components);

            $classname = array_pop($class_components);
            $namespace = strtolower(implode(DS, $class_components));

            return __DIR__.DS.$namespace.DS.'firehub.'.$classname.'.php';
        });

        return $this;

    }

    /**
     * ### Load autoloader
     *
     * This method contains definitions and a series of functions needed for calling classes.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Autoload::prepend() To register FireHub main autoloader.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::explode() To create an array from namespace.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::implode() To join component into namespace.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::toLower() To lowercase all namespace components
     * @uses \FireHub\Core\Support\LowLevel\Arr::firstKey() To check if the first key is firehub and core.
     * @uses \FireHub\Core\Support\LowLevel\Arr::shift() To remove firehub and core form namespace.
     * @uses \FireHub\Core\Support\Path::core() To get FireHub Core path.
     * @uses \FireHub\Core\Support\Constants\Path\DS As system definition for separating folders, platform-specific.
     *
     * @throws Error If a system failed to register autoloader.
     * @error\exeption E_WARNING if a system can't preload class for autoloader.
     *
     * @return $this This object.
     */
    private function autoload ():self {

        // register FireHub main autoloader
        Autoload::prepend('FireHub', function (string $namespace, string $classname):string|false {
            $namespace = StrSB::explode($namespace, DS);

            if ($namespace[Arr::firstKey($namespace)] !== 'firehub') return false;
            Arr::shift($namespace);

            if ($namespace[Arr::firstKey($namespace)] !== 'core') return false;
            Arr::shift($namespace);

            $namespace = StrSB::implode($namespace, DS);

            $classname_component = StrSB::explode($classname, '_');
            $classname = Arr::shift($classname_component);
            $classname_component = StrSB::implode($classname_component, '_');
            $suffix = !empty($classname_component) ? StrSB::toLower('.'.$classname_component) : '';

            return Path::core().DS.$namespace.DS.'firehub.'.$classname.$suffix.'.php';
        });

        return $this;

    }

    /**
     * ### Load bootloaders required for instantiating the FireHub framework
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Initializers\Bootloaders\Bootloader::load() To load bootloader.
     *
     * @return $this This object.
     */
    private function loadBootloaders ():self {

        foreach ($this->bootloaders as $bootloader) {

            $bootloader = new $bootloader;

            if ($bootloader instanceof Bootloader) $bootloader->load();

        }

        return $this;

    }

    /**
     * ### Process Kernel
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Kernel\Server To add to container.
     * @uses \FireHub\Core\Initializers\Enums\Kernel::run() To run the selected Kernel.
     * @uses \FireHub\Core\Initializers\Enums\Kernel::request() To get Request for selected Kernel.
     * @uses \FireHub\Core\Initializers\Kernel::handle() To handle client request.
     * @uses \FireHub\Core\Components\DI\Container::getInstance() To get container instance.
     * @uses \FireHub\Core\Components\DI\Container::resolve() To resolve binding from the container.
     *
     * @param \FireHub\Core\Initializers\Enums\Kernel $kernel <p>
     * Pick Kernel from Kernel enum, process your request and return the appropriate response.
     * </p>
     *
     * @return string Response from Kernel.
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod) PHPMD has a bug where it reports unused method unless directory
     * called.
     */
    private function kernel (Kernel $kernel):string {

        $container = Container::getInstance();

        $kernel_instance = $kernel->run($container);

        return $kernel_instance->handle($kernel->request());

    }

}