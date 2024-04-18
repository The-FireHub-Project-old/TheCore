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

namespace FireHub\Core\Support\Strings\Expression;

use FireHub\Core\Support\Contracts\HighLevel\ {
    Characters, Strings
};
use FireHub\Core\Support\LowLevel\ {
    Cls, StrSB
};
use FireHub\Core\Support\Enums\String\Expression\Modifier;
use Error;

/**
 * ### Regular expression function family
 * @since 1.0.0
 *
 * @method Pattern any () ### Any string is from the beginning until the end
 * @method Pattern is () ### If string is from the beginning until the end
 * @method Pattern has () ### Has string from the beginning until the end
 * @method Pattern beginsWith () ### If begins string is
 * @method Pattern endsWith () ### If ends string is
 * @method Pattern oneOrMore () ### One or more occurrences
 * @method Pattern zeroOrMore () ### Zero or more occurrences
 * @method Pattern zeroOrOne () ### Zero or one occurrences
 * @method Pattern exactly (int $number) ### Exactly occurrences
 * @method Pattern atLeast (int $number) ### At least occurrences
 * @method Pattern atMost (int $number) ### At most occurrences
 * @method Pattern between (int $from, int $to) ### Between occurrences
 */
abstract class FunctionFamily {

    /**
     * ### Pattern enclosure
     * @since 1.0.0
     *
     * @var string
     * @phpstan-var non-empty-string
     */
    protected string $delimiter = '/';

    /**
     * ### List of expression pattern modifiers
     * @since 1.0.0
     *
     * @var array
     * @phpstan-var \FireHub\Core\Support\Enums\String\Expression\Modifier[]
     */
    protected array $modifiers = [];

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters As parameter.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Strings As parameter.
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier As parameter.
     * @uses \FireHub\Core\Support\Strings\Expression\Pattern::get() To get pattern result.
     *
     * @param \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string_or_character <p>
     * Character or string to use.
     * </p>
     * @param \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers <p>
     * List of expression pattern modifiers.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected Characters|Strings $string_or_character,
        Modifier ...$modifiers
    ) {

        foreach ($modifiers as $modifier)
            $this->modifiers[] = $modifier;

    }

    /**
     * ### Custom regex pattern
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     *
     * @return mixed Regex result.
     */
    abstract public function custom (string $pattern):mixed;

    /**
     * ### Set patter enclosure delimiter
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters::string() To get raw value from character.
     * @uses \FireHub\Core\Support\Contracts\HighLevel\Characters::expression() To do regular expression on $character.
     *
     * @param Characters $character <p>
     * Patter enclosure delimiter to use.
     * </p>
     *
     * @throws Error If delimiter is alphanumeric, backslash, or whitespace.
     *
     * @return static Current function.
     */
    public function withDelimiter (Characters $character):static {

        if (
            $character->expression()->check(Modifier::MULTIBYTE)->is()->lettersAndDigits()
            || $character->expression()->check()->is()->whitespaces()
            || $character->expression()->check()->custom('\\\\')
        ) throw new Error('Delimiter must not be alphanumeric, backslash, or whitespace!');

        $this->delimiter = $character->string();

        return $this;

    }

    /**
     * ### Pattern builder
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     *
     * @return string Pattern string.
     */
    protected function patternBuilder (string $pattern):string {

        $raw_modifiers = '';
        foreach ($this->modifiers as $modifier) $raw_modifiers .= $modifier->value;

        return $this->delimiter.$pattern.$this->delimiter.$raw_modifiers;

    }

    /**
     * ### Call predefined patterns
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\Cls::ofClass() To check if method argument is pattern class.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::capitalize() To capitalize method argument name.
     * @uses \FireHub\Core\Support\Strings\Expression\Pattern As return.
     *
     * @param string $method <p>
     * <code>non-empty-string</code>
     * Method name.
     * </p>
     * @param array $arguments <p>
     * <code><![CDATA[ array<array-key, mixed> ]]></code>
     * List of arguments.
     * </p>
     * @phpstan-param non-empty-string $method
     * @phpstan-param array<array-key, mixed> $arguments
     *
     * @throws Error If method doesn't exist.
     *
     * @return \FireHub\Core\Support\Strings\Expression\Pattern This regex pattern.
     */
    public function __call (string $method, array $arguments):Pattern {

        /** @phpstan-ignore-next-line Regex exists at this point. */
        return Cls::ofClass(
            $class = "\FireHub\Core\Support\Strings\Expression\Pattern\\".StrSB::capitalize($method),
            Pattern::class
        ) ? new $class($this, ...$arguments)
            : throw new Error("Method $method doesn't exist.");

    }

}