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

namespace FireHub\Core\Support\Enums\HTTP\Contracts;

use FireHub\Core\Base\InitBackedEnum;

/**
 * ### Response status code contract
 * @since 1.0.0
 */
interface StatusCode extends InitBackedEnum {

    /**
     * ### Get code from status
     * @since 1.0.0
     *
     * @param int $code <p>
     * Code to get status from.
     * </p>
     *
     * @return self|false Code from status or false if code doesn't exist.
     */
    public static function fromCode (int $code):self|false;

    /**
     * ### Get status code
     * @since 1.0.0
     *
     * @return int Status code.
     */
    public function code ():int;

    /**
     * ### Get status code with status
     * @since 1.0.0
     *
     * @return string Status code with status.
     */
    public function codeStatus ():string;

}