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

namespace FireHub\Core\Support\Enums;

/**
 * ### Ordering enum
 * @since 1.0.0
 */
enum Order:string {

    /**
     * ### Arranging in ascending order
     * @since 1.0.0
     */
    case ASC = 'ASC';

    /**
     * ### Arranging in descending order
     * @since 1.0.0
     */
    case DESC = 'DESC';

    /**
     * ### Get the reverse order
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Enums\Order The reversed order.
     */
    public function reverse ():Order {

        return match ($this) {
            self::ASC => self::DESC,
            self::DESC => self::ASC
        };

    }

}