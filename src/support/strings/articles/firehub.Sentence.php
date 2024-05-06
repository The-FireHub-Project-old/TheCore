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

namespace FireHub\Core\Support\Strings\Articles;

use FireHub\Core\Support\Str;
use FireHub\Core\Support\Enums\String\EndingPunctuation;

/**
 * ### Sentence class
 *
 * Class allows you to manipulate sentences in various ways.
 * @since 1.0.0
 */
final class Sentence extends Str {

    /**
     * ### Makes sure that the sentence string has dot at the end
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\EndingPunctuation As parameter.
     * @uses \FireHub\Core\Support\Strings\Articles\Sentence::ensureSuffix() To make sure that the current string is suffixed with the given text.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Articles\Sentence;
     * use FireHub\Core\Support\Enums\String\EndingPunctuation;
     *
     * Sentence::from('The FireHub')->ensureEndingPunctuation(EndingPunctuation::EXCLAMATION);
     *
     * // The FireHub!
     * ```
     *
     * @param \FireHub\Core\Support\Enums\String\EndingPunctuation $ending_punctuation [optional] <p>
     * Choose ending punctuation to ensure.
     * </p>
     *
     * @return $this This string.
     */
    public function ensureEndingPunctuation (EndingPunctuation $ending_punctuation = EndingPunctuation::PERIOD):self {

        return $this->ensureSuffix($ending_punctuation->value);

    }

    /**
     * ### Makes sure that the sentence string doesn't have a dot at the end
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Articles\Sentence::removeSuffix() To make sure that the current string doesn't end with the given text.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Strings\Articles\Sentence;
     * use FireHub\Core\Support\Enums\String\EndingPunctuation;
     *
     * Sentence::from('The FireHub.')->removeEndingPunctuation();
     *
     * // The FireHub
     * ```
     *
     * @return $this This string.
     */
    public function removeEndingPunctuation ():self {

        foreach (EndingPunctuation::cases() as $ending_punctuation)
            $this->removeSuffix($ending_punctuation->value);

        return $this;

    }

}