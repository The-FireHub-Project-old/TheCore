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

namespace FireHub\Core\Support\Enums\HTTP;

use FireHub\Core\Base\Trait\ConcreteBackedEnum;
use FireHub\Core\Support\Enums\HTTP\Contracts\StatusCode as StatusCodeContract;

/**
 * ### WebDav response status code
 * @since 1.0.0
 */
enum WebDavStatusCode:string implements StatusCodeContract {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * ### 102 Processing
     *
     * This code indicates that the server has received and is processing the request, but no response is available yet.
     * @since 1.0.0
     */
    case PROCESSING = 'Processing';

    /**
     * ### 207 Multi-Status
     *
     * Conveys information about multiple resources for situations where multiple status codes might be appropriate.
     * @since 1.0.0
     */
    case MULTI_STATUS = 'Multi-Status';

    /**
     * ### 208 Already Reported
     *
     * Used inside a "<dav:propstat>" response element to avoid repeatedly listing the internal members of multiple
     * bindings to the same collection.
     * @since 1.0.0
     */
    case ALREADY_REPORTED = 'Already Reported';

    /**
     * ### 422 Unprocessable Content
     *
     * The request was well-formed but was unable to be followed due to semantic errors.
     * @since 1.0.0
     */
    case UNPROCESSABLE_CONTENT = 'Unprocessable Content';

    /**
     * ### 423 Locked
     *
     * The resource that is being accessed is locked.
     * @since 1.0.0
     */
    case LOCKED = 'Locked';

    /**
     * ### 424 Failed Dependency
     *
     * The request failed due to failure of a previous request.
     * @since 1.0.0
     */
    case FAILED_DEPENDENCY = 'Failed Dependency';

    /**
     * ### 507 Insufficient Storage
     *
     * The method couldn't be performed on the resource because the server is unable to store the representation
     * needed to successfully complete the request.
     * @since 1.0.0
     */
    case INSUFFICIENT_STORAGE = 'Insufficient Storage';

    /**
     * ### 508 Loop Detected
     *
     * The server detected an infinite loop while processing the request.
     * @since 1.0.0
     */
    case LOOP_DETECTED = 'Loop Detected';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public static function fromCode (int $code):self|false {

        foreach (self::cases() as $status) {
            if ($status->code() === $code) return $status;
        }

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():int {

        return match ($this) {
            self::PROCESSING => 102,
            self::MULTI_STATUS => 207,
            self::ALREADY_REPORTED => 208,
            self::UNPROCESSABLE_CONTENT => 422,
            self::LOCKED => 423,
            self::FAILED_DEPENDENCY => 424,
            self::INSUFFICIENT_STORAGE => 507,
            self::LOOP_DETECTED => 508
        };

    }

}