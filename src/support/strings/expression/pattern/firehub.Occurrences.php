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

use FireHub\Core\Support\Strings\Expression\Pattern;
use FireHub\Core\Support\Strings\Expression\FunctionFamily;

/**
 * ### Occurrences
 * @since 1.0.0
 */
abstract class Occurrences extends Pattern {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Strings\Expression\FunctionFamily $function_family <p>
     * Function to use.
     * </p>
     * @param non-negative-int $number <p>
     * Number of occurrences.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected FunctionFamily $function_family,
        protected readonly int $number
    ) {

        parent::__construct($function_family);

    }

}