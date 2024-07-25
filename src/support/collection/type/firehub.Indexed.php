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

namespace FireHub\Core\Support\Collection\Type;

/**
 * ### Indexed array collection type
 *
 * Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1).
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Support\Collection\Type\Arr<array-key, TValue>
 */
class Indexed extends Arr {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @param array<TValue> $storage <p>
     * Array underlying data.
     * </p>
     */
    public function __construct (
        protected array $storage
    ) {}

    public function group ():self {

        return new self(array_reduce(
            $this->storage,
            function (array $carry, mixed $value):array {
                $carry[$value][] = $value;
                return $carry;
            },
            []
        ));

    }

}