<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Suppot
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Strings;

use FireHub\Core\Support\Enums\String\Encoding;
use FireHub\Core\Support\Str;

/**
 * ### Word class
 *
 * Class allows you to manipulate words in various ways.
 * @since 1.0.0
 */
final class Word extends Str {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function __construct (
        protected string $string,
        protected ?Encoding $encoding = null
    ) {

        parent::__construct($string, $this->encoding);

    }

}