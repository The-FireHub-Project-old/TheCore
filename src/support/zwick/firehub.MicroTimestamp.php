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

namespace FireHub\Core\Support\Zwick;

use FireHub\Core\Support\Zwick\Traits\TimestampEpoch;

/**
 *  ### Epoch micro timestamp
 *
 * Epoch timestamp is the number of seconds and microseconds passes from fixed date and time used as a reference from
 * which a computer measures system time.
 * @since 1.0.0
 *
 * @api
 */
class MicroTimestamp extends MicroUnixTimestamp {

    /**
     * ### This trait allows usage of epoch in timestamps
     * @since 1.0.0
     */
    use TimestampEpoch;

}