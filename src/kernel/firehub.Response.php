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
use FireHub\Core\Support\Contracts\Magic\Stringable;

/**
 * ### Response holds all the information that needs to be sent back to the client from a given request
 * @since 1.0.0
 */
abstract class Response implements Init, Stringable {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Response content
     * @since 1.0.0
     *
     * @var string
     */
    protected string $content = '';

    /**
     * ### Get response content
     * @since 1.0.0
     *
     * @return string
     */
    public function content ():string {

        return $this->content;

    }

    /**
     * @inheritDoc
     *
     * @uses \FireHub\Core\Kernel\Response::content() To get response content
     *
     * @since 1.0.0
     */
    public function __toString ():string {

        return $this->content();

    }

}