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
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\Enums\String\Encoding;

/**
 * ### Strings contract
 *
 * A string is a stream of character.
 * @since 1.0.0
 */
interface Strings extends Stringable {

    /**
     * ### Regular expression
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Strings\Expression Regular expression.
     */
    public function expression ():Expression;

    /**
     * ### Checks if a string starts with a given value
     *
     * Performs a case-sensitive check indicating if $string begins with $value.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string starts with value, false otherwise.
     */
    public function startsWith (string $value):bool;

    /**
     * ### Checks if a string ends with a given value
     *
     * Performs a check indicating if $string ends with $value.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string ends with value, false otherwise.
     */
    public function endsWith (string $value):bool;

    /**
     * ### Checks if string contains value
     *
     * Performs a check indicating if $string is contained in $string.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if a string contains value, false otherwise.
     */
    public function contains (string $value):bool;

    /**
     * ### Checks if string contains all values
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if a string contains all values, false otherwise.
     */
    public function containsAll (...$values):bool;

    /**
     * ### Checks if string contains any of the values
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if a string contains any of the values, false otherwise.
     */
    public function containsAny (...$values):bool;

    /**
     * ### Checks if string equals value
     *
     * Performs a case-sensitive check indicating if $string is contained in $string.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * The value to search for.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if a string equals value, false otherwise.
     */
    public function equals (string $value):bool;

    /**
     * ### Checks if string equals to any of the values
     * @since 1.0.0
     *
     * @param string ...$values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @phpstan-param non-empty-string $values
     *
     * @return bool True if a string equals to any of the values, false otherwise.
     */
    public function equalsAny (...$values):bool;

    /**
     * ### Get or change string encoding
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     *
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding <p>
     * String encoding.
     * </p>
     *
     * @return $this|\FireHub\Core\Support\Enums\String\Encoding This character or current encoding.
     * @phpstan-return ($encoding is null ? \FireHub\Core\Support\Enums\String\Encoding : $this)
     */
    public function encoding (?Encoding $encoding = null):self|Encoding;

    /**
     * ### Get or set string as raw string
     * @since 1.0.0
     *
     * @param null|string $string [optional] <p>
     * String to set.
     * </p>
     *
     * @return $this|string String as raw string.
     * @phpstan-return ($string is null ? string : $this)
     */
    public function string (string $string = null):self|string;

}