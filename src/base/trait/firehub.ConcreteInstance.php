<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Base
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Base\Trait;

/**
 * ### FireHub initial concrete instance trait
 * @since 1.0.0
 */
trait ConcreteInstance {

    /**
     * ### FireHub initial concrete static trait
     * @since 1.0.0
     */
    use ConcreteStatic;

    /**
     * ### Class instance
     * @since 1.0.0
     *
     * @var self
     */
    private static self $instance;

    /**
     * ### Gets current class instance
     * @since 1.0.0
     *
     * @return self Class instance.
     */
    public static function getInstance ():self {

        if (!isset(self::$instance)) self::$instance = new self;

        return self::$instance;

    }

}