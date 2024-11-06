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

namespace FireHub\Core\Support\Console;

use FireHub\Core\Support\Str;
use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Type\ {
    Indexed, Associative
};

/**
 * ### Input support class
 *
 * Give info about the provided arguments passed to the script when running from the command line.
 * @since 1.0.0
 *
 * @api
 */
class Input implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Input command
     * @since 1.0.0
     *
     * @var non-empty-string|null
     */
    private ?string $command;

    /**
     * ### List of input parameters
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Indexed<non-empty-string>
     */
    private Indexed $parameters;

    /**
     * ### List of input options
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Associative<non-empty-string, non-empty-string|null>
     */
    private Associative $options;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection::list() To create a collection from arguments.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::shift() To remove the first arguments.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::first() To get the first arguments as command.
     * @uses \FireHub\Core\Support\Collection\Type\Indexed::partition() To split arguments to parameters and options.
     * @uses \FireHub\Core\Support\Str::from() To create string from parameter or option.
     * @uses \FireHub\Core\Support\Str::startsWith() To check if the parameter or option starts with a character.
     * @uses \FireHub\Core\Support\Str::break() To split option.
     *
     * @param non-empty-string[] $arguments <p>
     * Arguments to build from.
     * </p>
     *
     * @return void
     */
    public function __construct (array $arguments) {

        $arguments = Collection::list($arguments)->shift();

        $this->command = $arguments->first();

        $arguments->shift();

        [$options, $parameters] = $arguments->partition(fn($value) => Str::from($value)->startsWith('-'));

        $this->parameters = Collection::list($parameters); // @phpstan-ignore-line

        $this->options = Collection::associative(function () use ($options) { // @phpstan-ignore-line
            $result = [];
            foreach ($options as $option) { // @phpstan-ignore-line
                $kv = Str::from($option)->break('='); // @phpstan-ignore-line
                $result[$kv[0]] = $kv[1] ?? null;
            }
            return $result;
        });

    }

    /**
     * ### Input command
     * @since 1.0.0
     *
     * @return non-empty-string|null Input command.
     */
    public function command ():?string {

        return $this->command;

    }

    /**
     * ### Input parameters
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Collection\Type\Indexed<non-empty-string> Input parameters list.
     */
    public function parameters ():Indexed {

        return $this->parameters;

    }

    /**
     * ### Input command
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Collection\Type\Associative<non-empty-string, non-empty-string|null> Input options list.
     */
    public function options ():Associative {

        return $this->options;

    }

}