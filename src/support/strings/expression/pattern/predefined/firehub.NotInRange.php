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

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Strings\Expression\Pattern\Predefined;
use FireHub\Core\Support\Contracts\HighLevel\Characters;
use Error;

/**
 * ### Not in the range of characters
 * @since 1.0.0
 */
final class NotInRange implements Init, Predefined {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters $from <p>
     * From character.
     * </p>
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters $until <p>
     * Until character.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Characters $from,
        private readonly Characters $until
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters To test if $characters is of character interface.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters::string() To get a raw string from character.
     *
     * @throws Error If $characters is not an exclusive list of character interface.
     */
    public function regex ():string {

        return '[^'.$this->from->string().'-'.$this->until->string().']';

    }

}