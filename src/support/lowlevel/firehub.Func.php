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
use Error;

use function function_exists;
use function call_user_func;
use function register_shutdown_function;
use function register_tick_function;
use function unregister_tick_function;

/**
 * ### Function low-level proxy class
 *
 * Class allows you to obtain information about functions.
 * @since 1.0.0
 */
final class Func implements InitStatic {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Checks if function name exists
     *
     * Checks the list of defined functions, both built-in (internal) and user-defined, for function.
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * The function name.
     * </p>
     *
     * @return bool True if the interface exists, false otherwise.
     *
     * @note This function will return false for constructs, such as include_once and echo.
     * @note A function name may exist even if the function itself is unusable due to configuration or compiling
     * options.
     */
    public static function isFunction (string $name):bool {

        return function_exists($name);

    }

    /**
     * ### Call the callback
     *
     * Calls the callback given by the first parameter and passes the remaining parameters as arguments.
     * @since 1.0.0
     *
     * @template TReturn
     *
     * @param callable():TReturn $callback <p>
     * <code>callable():TReturn</code>
     * The callable to be called.
     * </p>
     * @param mixed ...$arguments <p>
     * Zero or more parameters to be passed to the callback.
     * </p>
     *
     * @return TReturn The return value of the callback.
     *
     * @note Callbacks registered with this method will not be called if there is an uncaught exception thrown
     * in a previous callback.
     */
    public static function call (callable $callback, mixed ...$arguments):mixed {

        return call_user_func($callback, ...$arguments);

    }

    /**
     * ### Register a function for execution on shutdown
     *
     * Registers a callback to be executed after script execution finishes or exit() is called. Multiple calls to
     * [[Func#registerShutdown()]] can be made, and each will be called in the same order as they were registered.
     * If you call exit() within one registered shutdown function, processing will stop completely and no other
     * registered shutdown functions will be called. Shutdown functions may also call [[Func#registerShutdown()]]
     * themselves to add a shutdown function to the end of the queue.
     * @since 1.0.0
     *
     * @param callable $callback <p>
     * The shutdown callback to register.
     * The shutdown callbacks are executed as part of the request, so it's possible to send output from them and
     * access output buffers.
     * </p>
     * @param mixed ...$arguments <p>
     * It is possible to pass parameters to the shutdown function by passing additional parameters.
     * </p>
     *
     * @return void
     *
     * @note The working directory of the script can change inside the shutdown function under some web servers,
     * e.g. Apache.
     * @note Shutdown functions will not be executed if the process is killed with a SIGTERM or SIGKILL signal. While
     * you cannot intercept a SIGKILL, you can use pcntl_signal() to install a handler for a SIGTERM which uses exit()
     * to end cleanly.
     * @note Shutdown functions run separately from the time tracked by max_execution_time. That means even if a
     * process is terminated for running too long, shutdown functions will still be called. Additionally, if the
     * max_execution_time runs out while a shutdown function is running, it will not be terminated.
     */
    public static function registerShutdown (callable $callback, mixed ...$arguments):void {

        register_shutdown_function($callback, ...$arguments);

    }

    /**
     * ### Register a function for execution on each tick
     *
     * Registers the given callback to be executed when a tick is called.
     * @since 1.0.0
     *
     * @param callable $callback <p>
     * The function to register.
     * </p>
     * @param mixed ...$arguments <p>
     * Parameters for callback function.
     * </p>
     *
     * @throws Error If failed to register tick function.
     *
     * @return bool True on success.
     *
     * @phpstan-ignore-next-line PHPStan reports that the method could still return bool.
     */
    public static function registerTick (callable $callback, mixed ...$arguments):true {

        return register_tick_function($callback, ...$arguments)
            ?: throw new Error('Failed to register tick function.');

    }

    /**
     * ### De-register a function for execution on each tick
     *
     * De-registers the function, so it is no longer executed when a tick is called.
     * @since 1.0.0
     *
     * @param callable $callback <p>
     * The function to deregister.
     * </p>
     *
     * @return void
     */
    public static function unregisterTick (callable $callback):void {

        unregister_tick_function($callback);

    }

}