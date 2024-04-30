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

use function FireHub\Core\Support\Helpers\String\asBoolean;

/**
 * ### Word class
 *
 * Class allows you to manipulate words in various ways.
 * @since 1.0.0
 */
final class Word extends Str {

    /**
     * ### Boolean representation of the given logical string value
     *
     * True - 'true', '1', 'on', 'yes', positive-int
     * False - 'false', '0','off', 'no', only blanks, non-positive-int
     * For all other strings, the return value is a result of a boolean cast.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\String\asBoolean() To convert raw string to boolean.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Word;
     *
     * Word::from('Yes')->asBoolean();
     *
     * // true
     * ```
     *
     * @return bool True or false, based on boolean representation of the given logical string value.
     */
    public function asBoolean ():bool {

        return asBoolean($this->string);

    }

}