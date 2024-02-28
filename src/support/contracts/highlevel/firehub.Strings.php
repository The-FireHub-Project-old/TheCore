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
use FireHub\Core\Support\Contracts\HighLevel\Strings\ {
    StringHas, StringIs
};
use FireHub\Core\Support\Strings\Expression;

/**
 * ### Strings contract
 *
 * A string is a stream of character.
 * @since 1.0.0
 *
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
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
     * ### Check string has
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Contracts\HighLevel\Strings\StringHas String has checker.
     */
    public function has ():StringHas;

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
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string starts with value, false otherwise.
     */
    public function startsWith (string $value, bool $case_sensitive = true):bool;

    /**
     * ### Checks if a string ends with a given value
     *
     * Performs a case-sensitive check indicating if $string ends with $value.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string></code>
     * The value to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if string ends with value, false otherwise.
     */
    public function endsWith (string $value, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string contains value
     *
     * Performs a case-sensitive check indicating if $string is contained in $string.
     * @since 1.0.0
     *
     * @param string $value <p>
     * <code>non-empty-string</code>
     * The value to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string $value
     *
     * @return bool True if a string contains value, false otherwise.
     */
    public function contains (string $value, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string contains all values
     * @since 1.0.0
     *
     * @param array $values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string[] $values
     *
     * @return bool True if a string contains all values, false otherwise.
     */
    public function containsAll (array $values, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string contains any of the values
     * @since 1.0.0
     *
     * @param array $values <p>
     * <code>non-empty-string[]</code>
     * The list of values to search for.
     * </p>
     * @param bool $case_sensitive [optional] <p>
     * Comparison is case-sensitive or not.
     * </p>
     * @phpstan-param non-empty-string[] $values
     *
     * @return bool True if a string contains any of the values, false otherwise.
     */
    public function containsAny (array $values, bool $case_sensitive = true):bool;

    /**
     * ### Checks if string is equal to any of the values
     * @since 1.0.0
     *
     * @param array $values <p>
     * <code>non-empty-string[]</code>
     * The list of values to compare to.
     * </p>
     * @phpstan-param non-empty-string[] $values
     *
     * @return bool True if a string contains any of the values, false otherwise.
     */
    public function equalToAny (array $values):bool;

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