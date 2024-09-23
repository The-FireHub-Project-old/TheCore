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

/**
 * ### The International Standard for country codes and codes for their subdivisions
 *
 * ISO 3166 is a standard published by the International Organization for Standardization (ISO) that defines codes
 * for the names of countries, dependent territories, special areas of geographical interest,
 * and their principal subdivisions (for example, provinces or states).
 * @since 1.0.0
 */
interface ISO3166 extends UNM49 {

    /**
     * ### Get country from a provided alpha 2 code
     * @since 1.0.0
     *
     * @param non-empty-string $code <p>
     * Alpha 2 code.
     * </p>
     *
     * @return \FireHub\Core\Support\Enums\Geo\Country|false Country or false is not found one.
     */
    public static function fromAlpha2 (string $code):self|false;

    /**
     * ### Get country from a provided alpha 3 code
     * @since 1.0.0
     *
     * @param non-empty-string $code <p>
     * Alpha 3 code.
     * </p>
     *
     * @return \FireHub\Core\Support\Enums\Geo\Country|false Country or false is not found one.
     */
    public static function fromAlpha3 (string $code):self|false;

    /**
     * ### Alpha 2 code
     *
     * ISO 3166-1 alpha-2 codes are two-letter country codes defined in ISO 3166-1, part of the ISO 3166 standard[1]
     * published by the International Organization for Standardization (ISO), to represent countries,
     * dependent territories, and special areas of geographical interest.
     * @since 1.0.0
     *
     * @return non-empty-string Alpha 2 code.
     */
    public function alpha2 ():string;

    /**
     * ### Alpha 3 code
     *
     * ISO 3166-1 alpha-3 codes are three-letter country codes defined in ISO 3166-1, part of the ISO 3166 standard
     * published by the International Organization for Standardization (ISO), to represent countries,
     * dependent territories, and special areas of geographical interest.
     * @since 1.0.0
     *
     * @return non-empty-string Alpha 3 code.
     */
    public function alpha3 ():string;

}