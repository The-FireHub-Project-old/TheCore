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

use FireHub\Core\Support\LowLevel\ {
    Arr, StrMB
};

/**
 * ### Sentence class
 *
 * Class allows you to manipulate sentences in various ways.
 * @since 1.0.0
 */
class Sentence extends Word {

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
    public function titleize (array $ignore = ['at', 'by', 'for', 'in', 'of', 'on', 'out', 'to', 'the']):self {

        $result = [];
        foreach ($this->streamline()->expression()->split()->any()->whitespaces() as $word) // @phpstan-ignore-line
            $result[] = Arr::inArray($word, $ignore)
                ? self::from($word) // @phpstan-ignore-line
                : self::from($word)->capitalize(); // @phpstan-ignore-line

        $this->string = '';

        return $this->append(StrMB::implode($result, ' '));

    }

}