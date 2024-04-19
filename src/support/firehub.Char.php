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

use FireHub\Core\Support\Contracts\HighLevel\Characters;
use FireHub\Core\Support\Strings\Expression;
use FireHub\Core\Support\LowLevel\ {
    CharMB, DataIs, StrMB
};
use FireHub\Core\Support\Enums\String\ {
    CaseFolding, Encoding, Expression\Modifier
};
use Error, ValueError;

use function FireHub\Core\Support\Helpers\String\asBoolean;

/**
 * ### Character high-level class
 *
 * Class allows you to manipulate characters in various ways.
 * @since 1.0.0
 *
 * @api
 */
class Char implements Characters {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::length() To check the length of the provided character.
     *
     * @param string $character <p>
     * <code>non-empty-string</code>
     * Character to use.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     * @phpstan-param non-empty-string $character
     *
     * @throws Error If char is not a single character.
     *
     * @return void
     *
     * @link https://en.wikipedia.org/wiki/List_of_Unicode_characters List of codepoint values.
     */
    public function __construct (
        private string $character,
        private ?Encoding $encoding = null
    ) {

        StrMB::length($this->character) === 1
            ?: throw new Error('Char must be a single character.');

    }

    /**
     * ### Create a new character from raw string
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F');
     * ```
     * @example Creating new character with specific encoding.
     * ```php
     * use FireHub\Core\Support\Char;
     * use FireHub\Core\Support\Enums\String\Encoding;
     *
     * Char::from('F', Encoding::UTF_8);
     * ```
     *
     * @param string $character <p>
     * <code>non-empty-string</code>
     * Character to use.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     * @phpstan-param non-empty-string $character
     *
     * @throws Error If character si empty.
     *
     * @return self New character.
     */
    public static function from (string $character, ?Encoding $encoding = null):self {

        return new self($character, $encoding);

    }

    /**
     * ### Create a new character from raw string
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\CharMB::chr() To get character from codepoint parameter.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from(70);
     *
     * echo $char->string();
     *
     * // F
     * ```
     * @example Creating new character with specific encoding.
     * ```php
     * use FireHub\Core\Support\Char;
     * use FireHub\Core\Support\Enums\String\Encoding;
     *
     * $char = Char::from(269, Encoding::UTF_8);
     *
     * echo $char->string();
     *
     * // č
     *
     * $char = Char::from(196, Encoding::ISO_8859_1);
     *
     * echo $char->string();
     *
     * // č
     * ```
     *
     * @param int $codepoint <p>
     * Codepoint to use.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding [optional] <p>
     * Character encoding. If it is null, the internal character encoding value will be used.
     * </p>
     *
     * @throws Error If a character is empty or codepoint could not be converted to character, or codepoint could not be
     * converted to character.
     *
     * @return self New character.
     */
    public static function fromCodepoint (int $codepoint, ?Encoding $encoding = null):self {

        return new self(
            ($char = CharMB::chr($codepoint, $encoding)) !== ''
                ? $char
                : throw new Error('Character cannot be empty.'),
            $encoding
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Expression\Modifier::MULTIBYTE As default modifier.
     * @uses \FireHub\Core\Support\Strings\Expression As return.
     */
    public function expression (Modifier ...$modifiers):Expression {

        return new Expression($this, Modifier::MULTIBYTE, ...$modifiers);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Helpers\String\asBoolean() To convert raw string to boolean.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('1')->asBoolean();
     *
     * // true
     * ```
     */
    public function asBoolean ():bool {

        return asBoolean($this->character);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Encoding As parameter.
     * @uses \FireHub\Core\Support\LowLevel\StrMB::encoding() To get internal character encoding if default is not set.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     * use FireHub\Core\Support\Enums\String\Encoding;
     *
     * Char::from('F')->encoding(Encoding::UTF_8);
     * ```
     *
     * @throws Error If we could not get current encoding.
     * @throws ValueError If the value of encoding is an invalid encoding.
     */
    public function encoding (?Encoding $encoding = null):self|Encoding {

        if ($encoding) {

            $this->encoding = $encoding;

            return $this;

        }

        return $this->encoding ?? StrMB::encoding();

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::from To create a new character if $string argument is present.
     * @uses \FireHub\Core\Support\LowLevel\DataIs::null() To check if $string is null or not.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->string();
     *
     * // F
     * ```
     * @example Set the character.
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->string('X');
     *
     * // X
     * ```
     */
    public function string (string $string = null):Characters|string {

        return !DataIs::null($string) && !empty($string)
            ? self::from($string)
            : $this->character;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert character.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To lowercase character.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::fromString('F')->toLower();
     *
     * // f
     * ```
     */
    public function toLower ():self {

        $this->character = StrMB::convert($this->character, CaseFolding::LOWER, $this->encoding);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert character.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::UPPER To uppercase character.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::fromString('f')->toUpper();
     *
     * // F
     * ```
     */
    public function toUpper ():self {

        $this->character = StrMB::convert($this->character, CaseFolding::UPPER, $this->encoding);

        return $this;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\CharMB::ord To get codepoint value from character.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * $char = Char::fromString('F');
     *
     * echo $char->codepoint();
     *
     * // 70
     * ```
     *
     * @throws Error If character could not be converted to codepoint.
     */
    public function codepoint ():int {

        return CharMB::ord($this->character, $this->encoding);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * echo Char::from('F');
     *
     * // F
     * ```
     */
    public function __toString ():string {

        return $this->character;

    }

}