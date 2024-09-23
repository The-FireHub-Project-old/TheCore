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

namespace FireHub\Core\Support\Enums\DateTime;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### Epoch is a fixed date and time used as a reference from which a computer measures
 * @since 1.0.0
 */
enum Epoch:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### Unix Epoch
     *
     * Unix Epoch used in POSIX time, used by Unix and Unix-like systems (Linux, macOS, Android),
     * and programming languages: most C/C++ implementations, [32] Java, JavaScript, Perl, PHP, Python, Ruby, Tcl, ActionScript.
     * Also used by Precision Time Protocol.
     * @since 1.0.0
     */
    case UNIX = '1970-01-01 00:00:00';

    /**
     * ### Windows NT Epoch
     *
     * 1601 was the first year of the 400-year Gregorian calendar cycle at the time Windows NT was made.
     * @since 1.0.0
     */
    case WINDOWS_NT = '1601-01-01 00:00:00';

    /**
     * ### Windows Excel
     *
     * Technical internal value used by Microsoft Excel; for compatibility with Lotus 1-2-3.
     * @since 1.0.0
     */
    case EXCEL = '1988-12-30 00:00:00';

    /**
     * ### Start of century 20
     *
     * Network Time Protocol, Time Protocol, IBM CICS, Mathematica, RISC OS, VME, Common Lisp, Michigan Terminal System.
     * @since 1.0.0
     */
    case CENTURY_20 = '1900-01-01 00:00:00';

    /**
     * ### Y2K epoch
     *
     * This Y2K epoch is sometimes used to push the 2038 problem to the year 2068 if the processor doesn't support 64-bit.
     * @since 1.0.0
     */
    case Y2K = '2000-01-01 00:00:00';

    /**
     * ### Third millennium A.D
     *
     * First day of the third millennium A.D.
     * @since 1.0.0
     */
    case THIRD_MILLENNIUM = '2001-01-01 00:00:00';

    /**
     * ### Min ISO 8601 4-digit representation
     * @since 1.0.0
     */
    case MIN_ISO_8601_4_DIGIT = '0001-01-01 00:00:00';

    /**
     * ### Max ISO 8601 4-digit representation
     * @since 1.0.0
     */
    case MAX_ISO_8601_4_DIGIT = '9999-12-31 23:59:59';

}