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

namespace FireHub\Core\Support\Enums\DateTime\Names;

use FireHub\Core\Support\Str;

/**
 * ### Names name trait
 * @since 1.0.0
 */
trait Name {

    /**
     * ### Get week day name
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Str::toLower() To lowercase day name.
     * @uses \FireHub\Core\Support\Str::titleize() To uppercase the first letter of day name.
     *
     * @return \FireHub\Core\Support\Str Week day name.
     */
    public function name ():Str {

        return Str::from($this->name)->toLower()->titleize();

    }

    /**
     * ### Get a short week day name
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Names\Name::name() To get a week day name.
     * @uses \FireHub\Core\Support\Str::carry() To carry first three letters from week day name.
     *
     * @return \FireHub\Core\Support\Str Week day name.
     */
    public function shortName ():Str {

        return $this->name()->carry(0, 3);

    }

}