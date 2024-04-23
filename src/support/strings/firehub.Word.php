<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Suppot
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Strings;

use FireHub\Core\Support\Str;

/**
 * ### Word class
 *
 * Class allows you to manipulate words in various ways.
 * @since 1.0.0
 */
class Word extends Str {

    /**
     * ### Format sting to kebab-case
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::dasherize() To lowercase and trimmed string separated by dash.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Word;
     *
     * Word::from('FireHub')->kebabCase();
     *
     * // fire-hub
     * ```
     *
     * @return $this This string.
     */
    public function kebabCase ():self {

        return $this->dasherize();

    }

    /**
     * ### Format sting to snake-case
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::dasherize() To lowercase and trimmed string separated by dash.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Word;
     *
     * Word::from('FireHub')->snakeCase();
     *
     * // fire_hub
     * ```
     *
     * @return $this This string.
     */
    public function snakeCase ():self {

        return $this->delimit('_');

    }

    /**
     * ### Lowercased and trimmed string separated by the given delimiter
     *
     * Delimiters are inserted before uppercase characters (except the first character of the string), and in place of spaces, dashes, and underscores.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Word::streamline() To streamline string.
     * @uses \FireHub\Core\Support\Strings\Word::expression() As regular expression.
     * @uses \FireHub\Core\Support\Strings\Word::replace() To replace characters with delimiter.
     * @uses \FireHub\Core\Support\Strings\Word::toLower() To lowercase string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Word;
     *
     * Word::from('FireHub')->delimit('-');
     *
     * // fire-hub
     * ```
     *
     * @return $this This string.
     */
    public function delimit (string $delimiter):self {

        /** @phpstan-ignore-next-line */
        return $this->streamline()
            ->expression()->replace('-\1')->custom('\B([A-Z])')
            ->replace(' ', $delimiter)
            ->replace('-', $delimiter)
            ->replace('_', $delimiter)
            ->toLower();

    }

    /**
     * ### Lowercased and trimmed string separated by dash
     *
     * Dash is inserted before uppercase characters (except the first character of the string), and in place of spaces, dashes, and underscores.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Word::delimit() To lowercase and trimmed string separated by the given delimiter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Word;
     *
     * Word::from('FireHub')->dasherize();
     *
     * // fire-hub
     * ```
     *
     * @return $this This string.
     */
    public function dasherize ():self {

        return $this->delimit('-');

    }

}