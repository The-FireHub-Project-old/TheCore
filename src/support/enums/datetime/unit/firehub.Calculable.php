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

namespace FireHub\Core\Support\Enums\DateTime\Unit;

/**
 * ### Interface for calculable unit enums
 * @since 1.0.0
 */
interface Calculable extends Unit {

    /**
     * ### Get parent enum case
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\DateTime\Unit\Basic As return.
     *
     * @return \FireHub\Core\Support\Enums\DateTime\Unit\Basic Parent enum case.
     */
    public function parent ():Basic;

    /**
     * ### Calculate the number of units
     * @since 1.0.0
     *
     * @return positive-int Number of units.
     */
    public function calculate ():int;

}