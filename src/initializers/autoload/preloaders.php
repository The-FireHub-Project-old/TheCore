<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * List of classes for preloading.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

return [
    \FireHub\Core\Support\Contracts\JsonSerializable::class,
    \FireHub\Core\Support\Contracts\Magic\Serializable::class,
    \FireHub\Core\Base\Base::class,
    \FireHub\Core\Base\Init::class,
    \FireHub\Core\Base\InitStatic::class,
    \FireHub\Core\Base\InitEnum::class,
    \FireHub\Core\Base\InitBackedEnum::class,
    \FireHub\Core\Base\Trait\Base::class,
    \FireHub\Core\Base\Trait\Concrete::class,
    \FireHub\Core\Base\Trait\ConcreteStatic::class,
    \FireHub\Core\Base\Trait\ConcreteEnum::class,
    \FireHub\Core\Base\Trait\ConcreteBackedEnum::class,
    \FireHub\Core\Support\LowLevel\Arr::class,
    \FireHub\Core\Support\LowLevel\CharMB::class,
    \FireHub\Core\Support\LowLevel\CharSB::class,
    \FireHub\Core\Support\LowLevel\ClsObj::class,
    \FireHub\Core\Support\LowLevel\Cls::class,
    \FireHub\Core\Support\LowLevel\Obj::class,
    \FireHub\Core\Support\LowLevel\Constant::class,
    \FireHub\Core\Support\LowLevel\Data::class,
    \FireHub\Core\Support\LowLevel\DataIs::class,
    \FireHub\Core\Support\LowLevel\DateAndTime::class,
    \FireHub\Core\Support\LowLevel\DateAndTimeZone::class,
    \FireHub\Core\Support\LowLevel\Declared::class,
    \FireHub\Core\Support\LowLevel\FileSystem::class,
    \FireHub\Core\Support\LowLevel\File::class,
    \FireHub\Core\Support\LowLevel\Folder::class,
    \FireHub\Core\Support\LowLevel\Func::class,
    \FireHub\Core\Support\LowLevel\Iterables::class,
    \FireHub\Core\Support\LowLevel\Iterator::class,
    \FireHub\Core\Support\LowLevel\Num::class,
    \FireHub\Core\Support\LowLevel\NumFloat::class,
    \FireHub\Core\Support\LowLevel\NumInt::class,
    \FireHub\Core\Support\LowLevel\RegexMB::class,
    \FireHub\Core\Support\LowLevel\Regex::class,
    \FireHub\Core\Support\LowLevel\SplAutoload::class,
    \FireHub\Core\Support\LowLevel\StrEncode::class,
    \FireHub\Core\Support\LowLevel\StrSafe::class,
    \FireHub\Core\Support\LowLevel\StrSB::class,
    \FireHub\Core\Support\LowLevel\StrMB::class,
    \FireHub\Core\Support\Path::class
];