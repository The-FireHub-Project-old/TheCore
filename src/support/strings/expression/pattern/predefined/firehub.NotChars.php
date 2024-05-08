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

namespace FireHub\Core\Support\Strings\Expression\Pattern\Predefined;

use FireHub\Core\Support\Strings\Expression\Pattern\Predefined;
use FireHub\Core\Support\Contracts\HighLevel\Characters;
use Error;

/**
 * ### Not-characters
 * @since 1.0.0
 */
final class NotChars implements Predefined {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters[] $characters <p>
     * List of characters.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly array $characters
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters To test if $characters is list of character interface.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters::string() To get a raw string from character.
     *
     * @throws Error If $characters is not exclusive list of character interface.
     */
    public function regex ():string {

        $chars = '';
        foreach ($this->characters as $character) {
            $character instanceof Characters
                ? $chars .= $character->string()
                : throw new Error('$characters must be exclusive list of character interface.');
        }

        return '[^'.$chars.']';

    }

}