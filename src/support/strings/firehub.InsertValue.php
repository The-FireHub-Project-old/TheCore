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

namespace FireHub\Core\Support\Strings;

use FireHub\Core\Support\Contracts\HighLevel\Strings;
use FireHub\Core\Support\Strings\Expression\ReplaceFunc;

/**
 * ### Insert value on string
 * @since 1.0.0
 */
final class InsertValue {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings As parameter.
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Strings $string <p>
     * String to use.
     * </p>
     * @param string $value <p>
     * <code>non-empty-string</code>
     * String to insert.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return void
     */
    public function __construct (
        private readonly Strings $string,
        private readonly string $value
    ) {}

    /**
     * ### Insert value before pattern
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\ReplaceFunc As return.
     *
     * @return \FireHub\Core\Support\Strings\Expression\ReplaceFunc Regular expression search and replace using a callback.
     */
    public function before ():ReplaceFunc {

        return $this->string->expression()->replaceFunc(fn(array $matches) => $this->value.$matches[0]);

    }

    /**
     * ### Insert value before pattern
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\ReplaceFunc As return.
     *
     * @return \FireHub\Core\Support\Strings\Expression\ReplaceFunc Regular expression search and replace using a callback.
     */
    public function after ():ReplaceFunc {

        return $this->string->expression()->replaceFunc(fn(array $matches) => $matches[0].$this->value);

    }

}