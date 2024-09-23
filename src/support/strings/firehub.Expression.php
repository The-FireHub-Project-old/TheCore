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

namespace FireHub\Core\Support\Strings;

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Contracts\HighLevel\ {
    Characters, Strings
};
use FireHub\Core\Support\Strings\Expression\ {
    Check, Get, Replace, ReplaceFunc, Split
};
use FireHub\Core\Support\LowLevel\Arr;
use FireHub\Core\Support\Enums\String\Expression\Modifier;
use Closure;

/**
 * ### Regular expression
 * @since 1.0.0
 */
final class Expression implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### List of expression pattern modifiers
     * @since 1.0.0
     *
     * @var \FireHub\Core\Support\Enums\String\Expression\Modifier[]
     */
    protected array $modifiers = [];

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters As parameter.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings As parameter.
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string <p>
     * Character or string to use.
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return void
     */
    public function __construct (
        private readonly Characters|Strings $string,
        Modifier ...$modifiers
    ) {

        foreach ($modifiers as $modifier)
            $this->modifiers[] = $modifier;

        $this->modifiers = Arr::unique($this->modifiers);

    }

    /**
     * ### Perform a regular expression check
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Check As return.
     *
     * @return \FireHub\Core\Support\Strings\Expression\Check Regular expression check.
     */
    public function check ():Check {

        return new Check($this->string, ...$this->modifiers);

    }

    /**
     * ### Perform a regular expression check and get a result
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Part As return.
     *
     * @return \FireHub\Core\Support\Strings\Expression\Get Regular expression check and get a result.
     */
    public function get ():Get {

        return new Get($this->string, ...$this->modifiers);

    }

    /**
     * ### Perform a regular expression search and replace
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Replace As return.
     *
     * @param string $with <p>
     * The string to replace.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Replace Regular expression search and replace.
     */
    public function replace (string $with):Replace {

        return new Replace($this->string, $with, ...$this->modifiers);

    }

    /**
     * ### Perform a regular expression search and replace
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Replace As return.
     *
     * @param Closure(array<array-key, string> $matches):string $callback <p>
     * <code><![CDATA[ Closure(array<array-key, string> $matches):string ]]></code>
     * A callback that will be called and passed an array of matched elements in the subject string.
     * The callback should return the replacement string.
     * This is the callback signature.
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\ReplaceFunc Regular expression search and replace using a callback.
     */
    public function replaceFunc (Closure $callback):ReplaceFunc {

        return new ReplaceFunc($this->string, $callback, ...$this->modifiers);

    }

    /**
     * ### Perform a regular expression remove
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Replace As return.
     *
     * @return \FireHub\Core\Support\Strings\Expression\Replace Regular expression search and remove.
     */
    public function remove ():Replace {

        return new Replace($this->string, '', ...$this->modifiers);

    }

    /**
     * ### Perform a regular expression split
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Split As return.
     *
     * @param int $limit [optional] <p>
     * The maximum possible replacements for each pattern in each subject string.
     * Defaults to -1 (no limit).
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Split Regular expression split.
     */
    public function split (int $limit = -1):Split {

        return new Split($this->string, false, $limit, ...$this->modifiers);

    }

    /**
     * ### Perform a regular expression split
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Split As return.
     *
     * @param int $limit [optional] <p>
     * The maximum possible replacements for each pattern in each subject string.
     * Defaults to -1 (no limit).
     * </p>
     *
     * @return \FireHub\Core\Support\Strings\Expression\Split Regular expression split.
     */
    public function splitWithoutEmpty (int $limit = -1):Split {

        return new Split($this->string, true, $limit, ...$this->modifiers);

    }

}