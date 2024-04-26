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
use FireHub\Core\Support\LowLevel\ {
    Arr, StrMB
};

/**
 * ### Sentence class
 *
 * Class allows you to manipulate sentences in various ways.
 * @since 1.0.0
 */
class Sentence extends Str {

    /**
     * ### Makes sure that the sentence string has dot at the end
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Sentence::ensureSuffix() To make sure that the current string is suffixed with the given text.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('The FireHub')->ensureDot();
     *
     * // The FireHub.
     * ```
     *
     * @return $this This string.
     */
    public function ensureDot ():self {

        return $this->ensureSuffix('.');

    }

    /**
     * ### Makes sure that the sentence string doesn't have a dot at the end
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Sentence::removeSuffix() To make sure that the current string doesn't end with the given text.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('The FireHub.')->ensureDot();
     *
     * // The FireHub
     * ```
     *
     * @return $this This string.
     */
    public function removeDot ():self {

        return $this->removeSuffix('.');

    }

    /**
     * ### Remove spaces
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Sentence::expression() As regular expression.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('FireHub Web App')->spaceless();
     *
     * // FireHubWebApp
     * ```
     *
     * @return $this This string.
     */
    public function spaceless ():self {

        /** @phpstan-ignore-next-line */
        return $this->expression()->replace('')->any()->whitespaces();

    }

    /**
     * ### Remove spaces
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Str::streamline() To streamline string.
     * @uses \FireHub\Core\Support\Strings\Str::expression() As regular expression.
     * @uses \FireHub\Core\Support\Strings\Str::from() To create string from any word.
     * @uses \FireHub\Core\Support\Strings\Str::capitalize() To capitalize each word.
     * @uses \FireHub\Core\Support\Strings\Str::deCapitalize() To deCapitalize each word.
     * @uses \FireHub\Core\Support\Strings\Str::append() To append words.
     * @uses \FireHub\Core\Support\LowLevel\Arr::inArray() Check if word is inside an ignore list.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::implode() To join words with $with argument as new string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('FireHub web app')->titleize();
     *
     * // FireHub Web App
     * ```
     *
     * @param array $ignore [optional] <p>
     * List of words not to be capitalized.
     * </p>
     * @phpstan-param non-empty-string[] $ignore
     *
     * @return $this This string.
     */
    public function titleize (array $ignore = ['and', 'as', 'but', 'for', 'if', 'nor', 'or', 'so', 'yet', 'a', 'an', 'the', 'at', 'by', 'for', 'in', 'of', 'off', 'on', 'per', 'to', 'up', 'via']):self {

        $result = [];
        foreach ($this->streamline()->expression()->split()->any()->whitespaces() as $word) { // @phpstan-ignore-line

            $result[] = Arr::inArray($word, $ignore)
                ? self::from($word)->deCapitalize() // @phpstan-ignore-line
                : self::from($word)->capitalize(); // @phpstan-ignore-line

        }

        $this->string = '';

        return $this->append(StrMB::implode($result, ' '))->capitalize();

    }

    /**
     * ### Makes a PascalCase version of the string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Word::from() To create word from string.
     * @uses \FireHub\Core\Support\Strings\Sentence::titleize() Ti title-case all words.
     * @uses \FireHub\Core\Support\Strings\Sentence::spaceless() To remove spaces.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('FireHub web app')->pascalize();
     *
     * // FireHubWebApp
     * ```
     *
     * @return \FireHub\Core\Support\Strings\Word Word from this string.
     */
    public function pascalize ():Word {

        return Word::from($this->titleize([])->spaceless()->string);

    }

    /**
     * ### Format sting to kebab-case
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Sentence::dasherize() To lowercase and trimmed string separated by dash.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('FireHub')->kebabCase();
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
     * @uses \FireHub\Core\Support\Strings\Sentence::delimit() To lowercase and trimmed string separated by the given delimiter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('FireHub')->snakeCase();
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
     * @uses \FireHub\Core\Support\Strings\Sentence::streamline() To streamline string.
     * @uses \FireHub\Core\Support\Strings\Sentence::expression() As regular expression.
     * @uses \FireHub\Core\Support\Strings\Sentence::replace() To replace characters with delimiter.
     * @uses \FireHub\Core\Support\Strings\Sentence::toLower() To lowercase string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('FireHub')->delimit('-');
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
     * @uses \FireHub\Core\Support\Strings\Sentence::delimit() To lowercase and trimmed string separated by the given delimiter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Sentence;
     *
     * Sentence::from('FireHub')->dasherize();
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