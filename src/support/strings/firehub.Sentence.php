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

}