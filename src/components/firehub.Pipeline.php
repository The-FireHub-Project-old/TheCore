<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Components
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Components;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Components\DI\Container;
use FireHub\Core\Support\LowLevel\Arr;
use Closure;

/**
 * ### Pipeline class is implemented based on the Chain of Responsibility (aka CoR) design pattern
 * @since 1.0.0
 */
class Pipeline implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Pipeline object
     * @since 1.0.0
     *
     * @var object
     */
    private object $object;

    /**
     * ### List of pipes
     * @since 1.0.0
     *
     * @var class-string[]
     */
    private array $pipes = [];

    /**
     * ### Method to call on each pipe
     * @since 1.0.0
     *
     * @var non-empty-string
     */
    private string $method = 'handle';

    /**
     * ### Send through a pipeline
     * @since 1.0.0
     *
     * @param object $object <p>
     * Object to send through a pipeline.
     * </p>
     *
     * @return $this This pipeline.
     */
    public function send (object $object):self {

        $this->object = $object;

        return $this;

    }

    /**
     * ### Set the array of pipes
     * @since 1.0.0
     *
     * @param class-string[] $pipes <p>
     * Array of pipes.
     * </p>
     *
     * @return $this This pipeline.
     */
    public function through (array $pipes):self {

        $this->pipes = $pipes;

        return $this;

    }

    /**
     * ### Set the method to call on the pipes
     * @since 1.0.0
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     *
     * @return $this This pipeline.
     */
    public function via (string $method):self {

        $this->method = $method;

        return $this;

    }

    /**
     * ### Run the pipeline with a final destination callback
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\DI\Container::call() To call method on resolved binding.
     * @uses \FireHub\Core\Support\LowLevel\Arr::reduce() tO reduce the pipes to a single value using a callback
     * function.
     *
     * @param Closure(mixed):mixed $destination <p>
     * <code>Closure(mixed):mixed</code>
     * Destination callback.
     * </p>
     *
     * @return mixed Closure result.
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function then (Closure $destination):mixed {

        return Arr::reduce($this->pipes, function ($carry, $pipe) use ($destination) {

            return Container::getInstance()->call(
                $pipe, $this->method, ['current' => $this->object, 'carry' => $destination]
            );

        }, $destination($this->object));

    }

    /**
     * ### Run the pipeline and return the result
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Pipeline::then() To run the pipeline with a final destination callback.
     *
     * @return mixed Closure result.
     */
    public function return ():mixed {

        return $this->then(fn($object) => $object);

    }

}