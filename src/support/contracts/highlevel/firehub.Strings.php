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

namespace FireHub\Core\Support\Contracts\HighLevel;

use FireHub\Core\Support\Contracts\Stringable;
use FireHub\Core\Support\Contracts\HighLevel\Strings\StringIs;
use FireHub\Core\Support\Strings\Expression;

/**
 * ### Strings contract
 *
 * A string is a stream of character.
 * @since 1.0.0
 */
interface Strings extends Stringable {

    /**
     * ### Check string
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Strings\StringIs String checker.
     */
    public function is ():StringIs;

    /**
     * ### Regular expression
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Strings\Expression Regular expression.
     */
    public function expression ():Expression;

    /**
     * ### Get string as raw string
     * @since 1.0.0
     *
     * @return string String as raw string.
     */
    public function string ():string;

}