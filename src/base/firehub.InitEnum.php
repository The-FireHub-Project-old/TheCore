<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Base
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Base;

use UnitEnum;

/**
 * ### FireHub initial enum interface
 *
 * @since 1.0.0
 */
interface InitEnum extends Base, UnitEnum {

    /**
     * ### Generates a list of cases on an enum
     * @since 1.0.0
     *
     * @return array<static> Packed array of all cases in an enumeration, in order of declaration.
     */
    public static function cases ():array;

}