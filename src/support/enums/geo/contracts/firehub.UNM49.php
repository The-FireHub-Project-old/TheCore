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

namespace FireHub\Core\Support\Enums\Geo\Contracts;

use FireHub\Core\Base\InitEnum;

/**
 * ### The Standard Country or Area Codes for Statistical Use
 *
 * UN M49 or the Standard Country or Area Codes for Statistical Use (Series M, No. 49) is a standard for area codes
 * used by the United Nations for statistical purposes, developed and maintained
 * by the United Nations Statistics Division. Each area code is a 3-digit number that can refer to a wide variety
 * of geographical and political regions, like a continent and a country.
 * Codes assigned in the system generally aren't changed when the country or area's name changes (unlike ISO 3166-1
 * alpha-2 or ISO 3166-1 alpha-3). But instead change when the territorial extent of the country or area changes
 * significantly, although there have been exceptions to this rule.
 * @since 1.0.0
 */
interface UNM49 extends InitEnum {

    /**
     * ### English short name lower case (title case)
     * @since 1.0.0
     *
     * @return non-empty-string Short name.
     */
    public function name ():string;

    /**
     * ### Three-digit country code
     *
     * Three-digit country codes which are identical to those developed and maintained by the United Nations
     * Statistics Division, with the advantage of script (writing system) independence, and hence useful for people
     * or systems using non-Latin scripts.
     * @since 1.0.0
     *
     * @return numeric-string Three-digit country code.
     */
    public function code ():string;

    /**
     * ### Get parent region
     * @since 1.0.0
     *
     * @return null|\FireHub\Core\Support\Enums\Geo\Contracts\UNM49 Parent.
     */
    public function region ():?UNM49;

}