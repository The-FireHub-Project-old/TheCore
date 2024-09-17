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
    InitInstance, Trait\ConcreteInstance
};
use FireHub\Core\Components\Registry\Register;
use FireHub\Core\Support\Collection\Type\Associative;
use FireHub\Core\Support\Str;
use Error;

/**
 * ### Static record list
 * @since 1.0.0
 *
 * @api
 */
final class Registry implements InitInstance {

    /**
     * ### FireHub initial concrete instance trait
     * @since 1.0.0
     */
    use ConcreteInstance;

    /**
     * ### List of registers
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Collection\Type\Associative<non-empty-lowercase-string,
     *     \FireHub\Core\Components\Registry\Register<non-empty-lowercase-string,
     *     \FireHub\Core\Support\Collection\Type\Associative<non-empty-lowercase-string, scalar>>>
     */
    private Associative $registers;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Type\Associative As empty list.
     */
    private function __construct () {

        $this->registers = new Associative([]);

    }

    /**
     * ### Gets register
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register As return.
     * @uses \FireHub\Core\Components\Registry\Register::exist() To check if item exists in register.
     * @uses \FireHub\Core\Components\Registry\Register::add() To add item to register.
     * @uses \FireHub\Core\Components\Registry\Register::get() To get item from register.
     * @uses \FireHub\Core\Support\Str::from() To create Str from $name argument.
     * @uses \FireHub\Core\Support\Str::toLower() To lowercase $name argument.
     * @uses \FireHub\Core\Support\Str::length() To check $name argument length.
     * @uses \FireHub\Core\Support\Str::string() To get raw string from the $name argument.
     * @uses \FireHub\Core\Support\Str::expression() As regular expression.
     *
     * @param non-empty-lowercase-string $name <p>
     * Register name.
     * </p>
     *
     * @throws Error If register name length is less than three, or register name contains non-ascii characters.
     *
     * @return \FireHub\Core\Components\Registry\Register<non-empty-lowercase-string,
     *     \FireHub\Core\Support\Collection\Type\Associative<non-empty-lowercase-string, scalar>> Register.
     *
     * @note If the register doesn't exist, the method will automatically create it.
     */
    public function register (string $name):Register {

        $name = Str::from($name)->toLower();

        if ($name->length() < 3)
            throw new Error('Register name must be at least three characters long.');

        if (!$name->expression()->check()->is()->ascii())
            throw new Error('Register name must contain only ascii characters.');

        if (!$this->registers->exist($name->string())) // @phpstan-ignore-line
            $this->registers->add($name->string(), new Register([])); // @phpstan-ignore-line

        return $this->registers->get($name->string()); // @phpstan-ignore-line

    }

    /**
     * ### Unregister register
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Components\Registry\Register::remove() To remove register item.
     *
     * @param non-empty-lowercase-string $name <p>
     * Register name.
     * </p>
     *
     * @thrown Error If the key doesn't exist in a collection
     *
     * @return true Always true.
     */
    public function unregister (string $name):true {

        $this->registers->remove($name);

        return true;

    }

}