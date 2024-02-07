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

namespace FireHub\Core\Support;

use FireHub\Core\Support\LowLevel\Folder;
use Error, Phar, Throwable;

use const FireHub\Core\Support\Constants\Path\DS;

/**
 * ### Path support class
 *
 * Give info about various paths inside the FireHub framework.
 * @since 1.0.0
 *
 * @api
 */
final class Path {

    /**
     * ### Get FireHub project path
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Path::phar() To get a current phar path.
     * @uses \FireHub\Core\Support\LowLevel\Folder::parent() To return a parent core phar folder.
     * @uses \FireHub\Core\Support\Constants\Path\DS As system definition for separating folders, platform specific.
     *
     * @throws Error If a system could not load your project phar.
     *
     * @return string <code>non-empty-string</code> FireHub project path.
     * @phpstan-return non-empty-string
     */
    public static function project ():string {

        try {

            return Folder::parent(self::phar(false)).DS.'..'.DS.'..'.DS.'..'.DS.'..';

        } catch (Throwable) {

            throw new Error('Could not load your project path.');

        }

    }

    /**
     * ### Get FireHub Core path
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Constants\Path\DS As system definition for separating folders, platform specific.
     *
     * @throws Error If a system could not load FireHub Core phar.
     *
     * @return string <code>non-empty-string</code> FireHub Core path.
     * @phpstan-return non-empty-string
     */
    public static function core ():string {

        try {

            return __DIR__.DS.'..';

        } catch (Throwable) {

            throw new Error('Could not load FireHub Core path.');

        }

    }

    /**
     * ### Get current phar path
     * @since 1.0.0
     *
     * @param bool $return_phar <p>
     * If true, a full phar URL is returned; otherwise the full path on disk to the phar archive is returned.
     * </p>
     *
     * @throws Error If a system could not get a current phar path.
     *
     * @return string <code>non-empty-string</code> Current phar path.
     * @phpstan-return non-empty-string
     */
    private static function phar (bool $return_phar):string {

        return !empty($phar = Phar::running($return_phar))
            ? $phar
            : throw new Error('Could not get a current phar path.');

    }

}