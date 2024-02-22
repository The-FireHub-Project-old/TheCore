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

use FireHub\Core\Support\Contracts\Stringable;
use FireHub\Core\Support\LowLevel\ {
    CharMB, RegexMB, StrMB
};
use FireHub\Core\Support\Enums\String\ {
    CaseFolding, Encoding
};
use Error, ValueError;

/**
 * ### Character high-level class
 *
 * Class allows you to manipulate characters in various ways.
 * @since 1.0.0
 *
 * @api
 */
final class Char implements Stringable {

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
     * ### Checks if character is lowercase
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::match() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isLower();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is lowercase, false otherwise.
     */
    public function isLower ():bool {

        return $this->regexMatch('.*[[:lower:]]');

    }

    /**
     * ### Checks if character is uppercase
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isUpper();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is uppercase, false otherwise.
     */
    public function isUpper ():bool {

        return $this->regexMatch('.*[[:upper:]]');

    }

    /**
     * ### Checks if character is alphabetic
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isAlphabetic();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is alphabetic, false otherwise.
     */
    public function isAlphabetic ():bool {

        return $this->regexMatch('.*[[:alpha:]]');

    }

    /**
     * ### Checks if character is alphanumeric
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isAlphanumeric();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is alphanumeric, false otherwise.
     */
    public function isAlphanumeric ():bool {

        return $this->regexMatch('.*[[:alnum:]]');

    }

    /**
     * ### Checks if character is whitespace
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isBlank();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is whitespace, false otherwise.
     */
    public function isBlank ():bool {

        return $this->regexMatch('.*[[:space:]]');

    }

    /**
     * ### Checks if character is numeric
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isNumeric();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is numeric, false otherwise.
     */
    public function isNumeric ():bool {

        return $this->regexMatch('.*[[:digit:]]');

    }

    /**
     * ### Checks if character is hexadecimal
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isHexadecimal();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is hexadecimal, false otherwise.
     */
    public function isHexadecimal ():bool {

        return $this->regexMatch('.*[[:xdigit:]]');

    }

    /**
     * ### Checks if character is control code
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isControl();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is control code, false otherwise.
     */
    public function isControl ():bool {

        return $this->regexMatch('.*[[:cntrl:]]');

    }

    /**
     * ### Checks if character is printable
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isPrintable();
     *
     * // true
     * ```
     * @example Space is also printable.
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from(' ')->isPrintable();
     *
     * // true
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is printable, false otherwise.
     */
    public function isPrintable ():bool {

        return $this->regexMatch('.*[[:print:]]');

    }

    /**
     * ### Checks if character is graphical
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isGraphical();
     *
     * // true
     * ```
     * @example Space is not graphical.
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from(' ')->isGraphical();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is graphical, false otherwise.
     */
    public function isGraphical ():bool {

        return $this->regexMatch('.*[[:graph:]]');

    }

    /**
     * ### Checks if character is punctuation
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::regexMatch() To perform a regular expression match.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isPunctuation();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is punctuation, false otherwise.
     */
    public function isPunctuation ():bool {

        return $this->regexMatch('.*[[:punct:]]');

    }

    /**
     * ### Checks if character is a symbol
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Char::isAlphanumeric() To check if the character is alphanumeric.
     * @uses \FireHub\Core\Support\Char::isBlank() To check if the character is whitespace.
     * @uses \FireHub\Core\Support\Char::isControl() To check if the character is control code.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isSymbol();
     *
     * // false
     * ```
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if character is a symbol, false otherwise.
     */
    public function isSymbol ():bool {

        return !$this->isAlphanumeric() && !$this->isBlank() && !$this->isControl();

    }

    /**
     * ### Checks if character is ASCII
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::checkEncoding() To check if character is valid ASCII.
     * @uses \FireHub\Core\Support\Enums\String\Encoding::ASCII As string encoding.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->isASCII();
     *
     * // true
     * ```
     *
     * @return bool True if character is ASCII, false otherwise.
     */
    public function isASCII ():bool {

        return StrMB::checkEncoding($this->character, Encoding::ASCII);

    }

    /**
     * ### Change character encoding
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     * use FireHub\Core\Support\Enums\String\Encoding;
     *
     * Char::from('F')->encoding(Encoding::UTF_8);
     * ```
     *
     * @param null|\FireHub\Core\Support\Enums\String\Encoding $encoding <p>
     * Character encoding.
     * </p>
     *
     * @throws Error If we could not get current encoding.
     * @throws ValueError If the value of encoding is an invalid encoding.
     *
     * @return $this|\FireHub\Core\Support\Enums\String\Encoding This character or current encoding.
     * @phpstan-return ($encoding is null ? \FireHub\Core\Support\Enums\String\Encoding : $this)
     */
    public function encoding (?Encoding $encoding = null):self|Encoding {

        if ($encoding) {

            $this->encoding = $encoding;

            return $this;

        }

        return $this->encoding ?? StrMB::encoding();

    }

    /**
     * ### Make a character lowercase
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::LOWER To lowercase string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::fromString('F')->toLower();
     *
     * // f
     * ```
     *
     * @return $this This character.
     */
    public function toLower ():self {

        $this->character = StrMB::convert(
            $this->character,
            CaseFolding::LOWER,
            $this->encoding
        );

        return $this;

    }

    /**
     * ### Make a character uppercase
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrMB::convert() To convert string.
     * @uses \FireHub\Core\Support\Enums\String\CaseFolding::UPPER To uppercase string.
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::fromString('f')->toUpper();
     *
     * // F
     * ```
     *
     * @return $this This character.
     */
    public function toUpper ():self {

        $this->character = StrMB::convert(
            $this->character,
            CaseFolding::UPPER,
            $this->encoding
        );

        return $this;

    }

    /**
     * ### Get character as raw string
     * @since 1.0.0
     *
     * @example
     * ```php
     * use FireHub\Core\Support\Char;
     *
     * Char::from('F')->string();
     *
     * // F
     * ```
     *
     * @return string <code>non-empty-string</code> Character as string.
     * @return non-empty-string
     */
    public function string ():string {

        return $this->character;

    }

    /**
     * ### Get character as codepoint
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
     *
     * @return int Character as codepoint.
     */
    public function codepoint ():int {

        return CharMB::ord($this->character, $this->encoding);

    }

    /**
     * ### Perform a regular expression match
     *
     * Searches subject for a match to the regular expression given in a pattern.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::encoding() To set character encoding for multibyte regex.
     * @uses \FireHub\Core\Support\LowLevel\RegexMB::match() To perform a regular expression match.
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     *
     * @throws Error If we could not get current regex encoding.
     *
     * @return bool True if string matches the regular expression pattern, false if not.
     */
    private function regexMatch (string $pattern):bool {

        $regex_encoding = RegexMB::encoding();

        RegexMB::encoding($this->encoding);

        $match = RegexMB::match($pattern, $this->character);

        RegexMB::encoding($regex_encoding);

        return $match;

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