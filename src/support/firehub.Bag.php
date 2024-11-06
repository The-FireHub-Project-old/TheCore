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

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Contracts\HighLevel\ReadCollectable;
use FireHub\Core\Support\LowLevel\ {
    Arr, Cls
};

/**
 * ### Bag list
 * @since 1.0.0
 */
abstract class Bag implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Unlisted items
     * @since 1.0.0
     *
     * @var array<non-empty-string, null|scalar|array<array-key, mixed>>
     */
    public array $unlisted = [];

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\ReadCollectable::all() To get collectable as an array.
     * @uses \FireHub\Core\Support\Bag::fillContent() To fill bag properties.
     *
     * @param array<non-empty-string, null|scalar|array<array-key, mixed>>|\FireHub\Core\Support\Contracts\HighLevel\ReadCollectable<non-empty-string, null|scalar|array<array-key, mixed>> $content <p>
     * Bag content.
     * </p>
     *
     * @return void
     */
    final public function __construct (array|ReadCollectable $content) {

        /** @phpstan-ignore-next-line */
        $this->fillContent($content instanceof ReadCollectable ? $content->all() : $content);

    }

    /**
     * ### Adapt key names
     * @since 1.0.0
     *
     * @return array<non-empty-string, non-empty-string> List of adapted key names, with a list like ['new key name', 'old key name'].
     */
    protected function adapt ():array {

        return [];

    }

    /**
     * ### Fill bag properties
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Arr::search() Search adapt key.
     * @uses \FireHub\Core\Support\Bag::adapt() Adapt key names.
     * @uses \FireHub\Core\Support\Str::from() To create a new string from raw string.
     * @uses \FireHub\Core\Support\Str::toLower() To lowercase all bag content.
     * @uses \FireHub\Core\Support\Str::string() To print string.
     * @uses \FireHub\Core\Support\LowLevel\Cls::propertyExist() To check if bag content value exists.
     *
     * @param array<non-empty-string, null|scalar|array<array-key, mixed>> $array <p>
     * Bag content.
     * </p>
     *
     * @return void
     */
    private function fillContent (array $array):void {

        foreach ($array as $key => $value) {

            $adapt = Arr::search($key, $this->adapt());

            if ($adapt) $key = $adapt;

            $key = Str::from($key)->toLower()->string();

            if (Cls::propertyExist($this, $key)) $this->$key = $value; // @phpstan-ignore-line
            else $this->unlisted[$key] = $value; // @phpstan-ignore-line

        }

    }

}