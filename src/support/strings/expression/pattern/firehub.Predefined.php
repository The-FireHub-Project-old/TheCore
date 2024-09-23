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

namespace FireHub\Core\Support\Strings\Expression\Pattern;

/**
 * ### Predefined regular expression pattern
 * @since 1.0.0
 */
interface Predefined {

    /**
     * ### Get regex predefined pattern
     * @since 1.0.0
     *
     * @return string Regex predefined string.
     */
    public function regex ():string;

}