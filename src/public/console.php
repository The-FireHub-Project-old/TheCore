<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This is a landing file if the PHAR archive is accessed through a command-line.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Public
 *
 * @version GIT: $Id$ Blob checksum.
 */

use FireHub\Core\FireHub;
use FireHub\Core\Initializers\Enums\Kernel;

/**
 * Let there be light
 */
require __DIR__.'/../firehub.FireHub.php';
require __DIR__.'/../initializers/enums/firehub.Kernel.php';

echo FireHub::boot(Kernel::CONSOLE);