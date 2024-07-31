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

namespace FireHub\Core\Support\Collection\Helpers;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\LowLevel\DataIs;

/**
 * ### Slice range
 * @since 1.0.0
 */
final class SliceRange implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param non-negative-int $count <p>
     * Total number of sequence items.
     * </p>
     * @param int $offset <p>
     * If the offset is non-negative, the sequence will start at that offset in the array.
     * If the offset is negative, the sequence will start that far from the end of the array.
     * </p>
     * @param null|int $length [optional] <p>
     * If length is given and is positive, then the sequence will have that many elements in it.
     * If length is given and is negative, then the sequence will stop that many elements from the end of the array.
     * If it is omitted, then the sequence will have everything from offset up until the end of the array.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly int $count,
        private readonly int $offset,
        private readonly ?int $length = null
    ){}

    /**
     * ### Slice start position
     * @since 1.0.0
     *
     * @return non-negative-int Slice start position.
     */
    public function start ():int {

        return match (true) {
            $this->offset > $this->count => $this->count,
            $this->offset >= 0 => $this->offset,
            default => max($this->count + $this->offset, 0)
        };

    }

    /**
     * ### Slice end position
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::start() To get the start position for slice.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::null() To check if the $length argument has been passed.
     *
     * @return non-negative-int Slice end position.
     */
    public function end ():int {

        $start = $this->start();

        return match (true) {
            $this->count + $this->length < $start => $start,
            $this->length < 0 => $this->count + $this->length,
            DataIs::null($this->length) => $this->count,
            default => $start + $this->length
        };

    }

    /**
     * ### Count number of elements
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::start() To get the start position for slice.
     * @uses \FireHub\Core\Support\Collection\Helpers\SliceRange::end() To get the end position for slice.
     *
     * @return non-negative-int Number of elements.
     */
    public function count ():int {

        return ($result = $this->end() - $this->start()) < 0 ? 0 : $result;

    }

}