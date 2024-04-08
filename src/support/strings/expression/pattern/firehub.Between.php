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

use FireHub\Core\Support\Strings\Expression\FunctionFamily;

/**
 * ### Between occurrences
 * @since 1.0.0
 */
final class Between extends Occurrences {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Strings\Expression\FunctionFamily $function_family <p>
     * Function to use.
     * </p>
     * @param int $from <p>
     * Number of occurrences.
     * </p>
     * @param int $to <p>
     * Second number.
     * </p>
     * @phpstan-param non-negative-int $from
     * @phpstan-param non-negative-int $to
     *
     * @return void
     */
    public function __construct (
        protected FunctionFamily $function_family,
        protected readonly int $from,
        protected readonly int $to
    ) {

        parent::__construct($function_family, $this->from);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function regex (string $pattern):string {

        return $pattern.'{'.$this->from.','.$this->to.'}';

    }

}