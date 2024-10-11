<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Kernel
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Kernel;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Bags\RequestHeaders;
use FireHub\Core\Support\ {
    Zwick\DateTime, Zwick\Timestamp
};
use Error, Exception;

/**
 * ### Interact with the current request being handled by your application
 * @since 1.0.0
 */
abstract class Request implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Bags\RequestHeaders $headers <p>
     * Bag for request header variables.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected readonly RequestHeaders $headers
    ) {}

    /**
     * ### The timestamp for the start of the request, with microsecond precision
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Bags\RequestHeaders::$time_float
     * @uses \FireHub\Core\Support\Zwick\DateTime::fromTimestamp() To create datetime from timestamp.
     * @uses \FireHub\Core\Support\Zwick\Timestamp::fromFloat() To create a timestamp from float.
     *
     * @throws Exception Emits Exception in case of an error.
     * @throws Error If we couldn't convert string to timestamp.
     *
     * @return \FireHub\Core\Support\Zwick\DateTime Datetime of requested.
     */
    public function time ():DateTime {

        return DateTime::fromTimestamp(Timestamp::fromFloat($this->headers->time_float));

    }

}