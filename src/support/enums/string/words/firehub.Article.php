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

namespace FireHub\Core\Support\Enums\String\Words;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### An article is a word that comes before a noun to show whether it's specific or general
 * @since 1.0.0
 */
enum Article:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case A = 'a';

    /**
     * @since 1.0.0
     */
    case AN = 'an';

    /**
     * @since 1.0.0
     */
    case THE = 'the';

}