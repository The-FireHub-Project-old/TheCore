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

namespace FireHub\Core\Support\Enums\String;

use FireHub\Core\Support\Char;

/**
 * ### End of sentence punctuation
 * @since 1.0.0
 */
enum EndingPunctuation {

    /**
     * @since 1.0.0
     */
    case PERIOD;

    /**
     * @since 1.0.0
     */
    case QUESTION;

    /**
     * @since 1.0.0
     */
    case EXCLAMATION;

    /**
     * ### Get character from current ending punctuation
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::from() To create character from current ending punctuation.
     *
     * @return \FireHub\Core\Support\Char Character from ending punctuation.
     */
    public function character ():Char {

        return match ($this) {
            self::PERIOD => Char::from('.'),
            self::QUESTION => Char::from('?'),
            self::EXCLAMATION => Char::from('!')
        };

    }

}