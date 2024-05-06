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

use FireHub\Core\Support\ {
    Char, Str
};
use FireHub\Core\Support\LowLevel\ {
    Arr, DataIs
};
use FireHub\Core\Support\Enums\String\ {
    Encoding, EndingPunctuation
};

/**
 * ### Paragraph class
 *
 * A paragraph is a distinct section of writing covering one topic.
 * @since 1.0.0
 */
final class Paragraph extends Str {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\Core\Support\Str::__construct() As parent constructor.
     * @uses \FireHub\Core\Support\Strings\Str As parameter.
     *
     * @param string $string <p>
     * String to use.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding.
     * If it is null, the internal character encoding value will be used.
     * </p>
     * @param \FireHub\Core\Support\Str|false $title [optional] <p>
     * Introduce the main idea that the paragraph is about.
     * </p>
     */
    public function __construct (
        protected string $string,
        protected ?Encoding $encoding = null,
        private Str|false $title = false
    ) {

        parent::__construct($string, $this->encoding);

    }

    /**
     * ### Introduce the main idea that the paragraph is about
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\DataIs::null() To check if $text is null or not.
     * @uses \FireHub\Core\Support\Str::from() To create title from a text.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\String\Paragraph;
     *
     * Paragraph::from('FireHub Web App')->title('The FireHub');
     * ```
     *
     * @param null|string $text [optional] <p>
     * Paragraph title text.
     * </p>
     *
     * @return $this|\FireHub\Core\Support\Str|false This paragraph.
     * @phpstan-return ($text is null ? \FireHub\Core\Support\Str|false : $this)
     */
    public function title (string $text = null):self|Str|false {

        if (DataIs::null($text)) return $this->title;

        $this->title = Str::from($text, $this->encoding);

        return $this;

    }

    /**
     * ### Split paragraph into list of sentences
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\EndingPunctuation::cases() To get a list of ending punctuations.
     * @uses \FireHub\Core\Support\Char::from() To create a char from ending punctuations.
     * @uses \FireHub\Core\Support\Str::from() To create a string from every sentence.
     * @uses \FireHub\Core\Support\LowLevel\Arr::filter() To filter out empty sentences.
     * @uses \FireHub\Core\Support\LowLevel\Arr::walk() To convert every sentence to Str.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::null To check if the sentence is null.
     * @uses \FireHub\Core\Support\Strings\Paragraph::splitAfterAny() To split the string into sentences after ending punctuations.
     * @uses \FireHub\Core\Support\Strings\Paragraph::streamline() To streamline every sentence.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\String\Paragraph;
     *
     * Paragraph::from('FireHub Web App. Best App.')->sentences();
     *
     * // ['FireHub Web App.', 'Best App.']
     * ```
     *
     * @return \FireHub\Core\Support\Strings\Sentence[] List to sentences.
     */
    public function sentences ():array {

        $separators = [];
        foreach (EndingPunctuation::cases() as $ending_punctuation)
            $separators[] = Char::from($ending_punctuation->value);

        $sentences = Arr::filter(
            $this->splitAfterAny($separators),
            fn($value) => !DataIs::null($value) && $value !== '' // @phpstan-ignore-line
        );

        Arr::walk(
            $sentences,
            fn(&$value) => $value = Str::from($value)->streamline()
        );

        /** @phpstan-ignore-next-line */
        return $sentences;

    }

}