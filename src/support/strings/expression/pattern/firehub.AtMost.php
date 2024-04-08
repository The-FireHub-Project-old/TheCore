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
 * ### At most occurrences
 * @since 1.0.0
 */
final class AtMost extends Occurrences {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function regex (string $pattern):string {

        return $pattern.'{,'.$this->number.'}';

    }

}