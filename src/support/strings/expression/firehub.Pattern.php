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

use FireHub\Core\Base\ {
    Init, Trait\Concrete
};
use FireHub\Core\Support\Contracts\HighLevel\Characters;
use FireHub\Core\Support\Strings\Expression\Pattern\Predefined;
use FireHub\Core\Support\LowLevel\ {
    Cls, StrSB
};
use Error;

/**
 * ### Regular expression pattern
 *
 * @method mixed letters () ### Letters
 * @method mixed notLetters () ### Not-letters
 * @method mixed modifierLetters () ### Modifier letters
 * @method mixed notModifierLetters () ### Not-modifier letters
 * @method mixed otherLetters () ### Other letters
 * @method mixed notOtherLetters () ### Not-other letters
 * @method mixed lower () ### Lower case letters
 * @method mixed upper () ### Upper case letters
 * @method mixed titleCased () ### Title-cased letters
 * @method mixed notTitleCased () ### Not-title-cased letters
 * @method mixed numbers () ### Numbers
 * @method mixed notNumbers () ### Not-numbers
 * @method mixed letterNumbers () ### Letter numbers
 * @method mixed notLetterNumbers () ### Not-netter numbers
 * @method mixed otherNumbers () ### Other numbers
 * @method mixed notOtherNumbers () ### Not-other numbers
 * @method mixed digits () ### Digits
 * @method mixed notDigits () ### Not-digits
 * @method mixed lettersAndDigits () ### Letters and digits
 * @method mixed notLettersNorDigits () ### Not-letters nor digits
 * @method mixed ascii () ### Character codes 0-127
 * @method mixed notAscii () ### Character codes not from 0-127
 * @method mixed blanks () ### Space or tab only
 * @method mixed notBlanks () ### Not space nor tab only
 * @method mixed control () ### Control characters
 * @method mixed notControl () ### Not-control characters
 * @method mixed whitespaces () ### Whitespaces
 * @method mixed notWhitespaces () ### Not-whitespaces
 * @method mixed printable () ### Printing characters, including space
 * @method mixed notPrintable () ### Not-printing characters, including space
 * @method mixed graphical () ### Printing characters, excluding space
 * @method mixed notGraphical () ### Not-printing characters, excluding space
 * @method mixed wordCharacters () ### Underscore or any character that is a letter or digit
 * @method mixed notWordCharacters () ### Not-underscore or any character that is not letter nor digit
 * @method mixed hexadecimals () ### Hexadecimals
 * @method mixed notHexadecimals () ### Not-hexadecimals
 * @method mixed verticalWhitespaces () ### Vertical whitespaces
 * @method mixed notVerticalWhitespaces () ### Not-vertical whitespaces
 * @method mixed horizontalWhitespaces () ### Horizontal whitespaces
 * @method mixed notHorizontalWhitespaces () ### Not-horizontal whitespaces
 * @method mixed wordBoundaries () ### Word boundaries
 * @method mixed notWordBoundaries () ### Not-word boundaries
 * @method mixed format () ### Format
 * @method mixed notFormat () ### Not-format
 * @method mixed punctuation () ### Punctuation
 * @method mixed notPunctuation () ### Not punctuation
 * @method mixed connectorPunctuation () ### Connector punctuation
 * @method mixed notConnectorPunctuation () ### Not-connector punctuation
 * @method mixed dashPunctuation () ### Dash punctuation
 * @method mixed notDashPunctuation () ### Not-dash punctuation
 * @method mixed closePunctuation () ### Close punctuation
 * @method mixed notClosePunctuation () ### Not-close punctuation
 * @method mixed finalPunctuation () ### Final punctuation
 * @method mixed notFinalPunctuation () ### Not-final punctuation
 * @method mixed initialPunctuation () ### Initial punctuation
 * @method mixed notInitialPunctuation () ### Not-initial punctuation
 * @method mixed otherPunctuation () ### Other punctuation
 * @method mixed notOtherPunctuation () ### Not-other punctuation
 * @method mixed openPunctuation () ### Open punctuation
 * @method mixed notOpenPunctuation () ### Not-open punctuation
 * @method mixed symbol () ### Symbol
 * @method mixed notSymbol () ### Not-symbol
 * @method mixed currency () ### Currency symbol
 * @method mixed notCurrency () ### Not-currency symbol
 * @method mixed modifier () ### Modifier symbol
 * @method mixed notModifier () ### Not-modifier symbol
 * @method mixed mathematical () ### Mathematical symbol
 * @method mixed notMathematical () ### Not-mathematical symbol
 * @method mixed otherSymbol () ### An other symbol
 * @method mixed notOtherSymbol () ### Not other symbol
 * @method mixed unassigned () ### Unassigned - characters with code points greater than 0x10FFFF
 * @method mixed assigned () ### Assigned - characters with code points smaller than 0x10FFFF
 * @method mixed notNewLine () ### not-new line
 * @method mixed mark () ### Mark
 * @method mixed notMark () ### Non-mark
 * @method mixed spacingMark () ### Spacing mark
 * @method mixed nonSpacingMark () ### Non-spacing mark
 * @method mixed notSpacingMark () ### Not-spacing mark
 * @method mixed notNonSpacingMark () ### Not-non-spacing mark
 * @method mixed enclosingMark () ### Enclosing mark
 * @method mixed notEnclosingMark () ### Not-enclosing mark
 * @method mixed separator () ### Separator
 * @method mixed notSeparator () ### Not-separator mark
 * @method mixed lineSeparator () ### Line separator
 * @method mixed notLineSeparator () ### Not-line separator
 * @method mixed paragraphSeparator () ### Paragraph separator
 * @method mixed notParagraphSeparator () ### Not-paragraph separator
 * @method mixed spaceSeparator () ### Space separator
 * @method mixed notSpaceSeparator () ### Not-space separator
 * @method mixed chars (Characters[] $characters) ### Characters
 * @method mixed notChars (Characters[] $characters) ### Not-characters
 * @method mixed inRange (Characters $from,Characters $until) In the range of characters
 * @method mixed notInRange (Characters $from, Characters $until) Not in the range of characters
 *
 * @comment Temporary exclude on phpmd.md because match pattern is not read correctly on line 290.
 */
abstract class Pattern implements Init {

    /**
     * ### FireHub initial concrete trait
     * @since 1.0.0
     */
    use Concrete;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Support\Strings\Expression\FunctionFamily $function_family <p>
     * Function to use.
     * </p>
     *
     * @return void
     */
    public function __construct (
        protected FunctionFamily $function_family
    ) {}

    /**
     * ### Custom regex pattern
     * @since 1.0.0d
     *
     * @uses \FireHub\Core\Support\Strings\Expression\FunctionFamily::custom() As custom regex.
     * @uses static::regex() As regex.
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     *
     * @return mixed Regex result.
     */
    final public function custom (string $pattern):mixed {

        return $this->function_family->custom($this->regex($pattern));

    }

    /**
     * ### Custom regex
     * @since 1.0.0
     *
     * @param string $pattern <p>
     * The regular expression pattern.
     * </p>
     *
     * @return string Regex.
     */
    abstract public function regex (string $pattern):string;

    /**
     * ### Call predefined patterns
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Strings\Expression\Pattern::custom() To get custom regex pattern.
     * @uses \FireHub\Core\Support\LowLevel\Cls::ofClass() To check if method argument is pattern class.
     * @uses \FireHub\Core\Support\LowLevel\StrSB::capitalize() To capitalize method argument name.
     * @uses \FireHub\Core\Support\Strings\Expression\Pattern\Predefined::regex() To get regex predefined pattern.
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     * @param array<array-key, mixed> $arguments <p>
     * List of arguments.
     * </p>
     *
     * @throws Error If method doesn't exist.
     *
     * @return mixed Regex result.
     */
    public function __call (string $method, array $arguments):mixed {

        return match ($method) {
            'letters' => $this->custom('[[:alpha:]]'),
            'notLetters' => $this->custom('[[:^alpha:]]'),
            'digits' => $this->custom('[[:digit:]]'),
            'notDigits' => $this->custom('[[:^digit:]]'),
            'lettersAndDigits' => $this->custom('[[:alnum:]]'),
            'notLettersNorDigits' => $this->custom('[[:^alnum:]]'),
            'ascii' => $this->custom('[[:ascii:]]'),
            'notAscii' => $this->custom('[[:^ascii:]]'),
            'blanks' => $this->custom('[[:blank:]]'),
            'notBlanks' => $this->custom('[[:^blank:]]'),
            'control' => $this->custom('[[:cntrl:]]'),
            'notControl' => $this->custom('[[:^cntrl:]]'),
            'lower' => $this->custom('[[:lower:]]'),
            'upper' => $this->custom('[[:upper:]]'),
            'whitespaces' => $this->custom('[[:space:]]'),
            'notWhitespaces' => $this->custom('[[:^space:]]'),
            'printable' => $this->custom('[[:print:]]'),
            'notPrintable' => $this->custom('[[:^print:]]'),
            'graphical' => $this->custom('[[:graph:]]'),
            'notGraphical' => $this->custom('[[:^graph:]]'),
            'wordCharacters' => $this->custom('[[:word:]]'),
            'notWordCharacters' => $this->custom('[[:^word:]]'),
            'hexadecimals' => $this->custom('[[:xdigit:]]'),
            'notHexadecimals' => $this->custom('[[:^xdigit:]]'),
            'verticalWhitespaces' => $this->custom('\v'),
            'notVerticalWhitespaces' => $this->custom('\V'),
            'horizontalWhitespaces' => $this->custom('\h'),
            'notHorizontalWhitespaces' => $this->custom('\H'),
            'wordBoundaries' => $this->custom('\b'),
            'notWordBoundaries' => $this->custom('\B'),
            'notNewLine' => $this->custom('\N'),
            'format' => $this->custom('\p{Cf}'),
            'notFormat' => $this->custom('\P{Cf}'),
            'modifierLetters' => $this->custom('\p{Lm}'),
            'notModifierLetters' => $this->custom('\P{Lm}'),
            'otherLetters' => $this->custom('\p{Lo}'),
            'notOtherLetters' => $this->custom('\P{Lo}'),
            'titleCased' => $this->custom('\p{Lt}'),
            'notTitleCased' => $this->custom('\P{Lt}'),
            'numbers' => $this->custom('\p{N}'),
            'notNumbers' => $this->custom('\P{N}'),
            'letterNumbers' => $this->custom('\p{Nl}'),
            'notLetterNumbers' => $this->custom('\P{Nl}'),
            'otherNumbers' => $this->custom('\p{No}'),
            'notOtherNumbers' => $this->custom('\P{No}'),
            'punctuation' => $this->custom('\p{P}'),
            'notPunctuation' => $this->custom('\P{P}'),
            'connectorPunctuation' => $this->custom('\p{Pc}'),
            'notConnectorPunctuation' => $this->custom('\P{Pc}'),
            'dashPunctuation' => $this->custom('\p{Pd}'),
            'notDashPunctuation' => $this->custom('\P{Pd}'),
            'closePunctuation' => $this->custom('\p{Pe}'),
            'notClosePunctuation' => $this->custom('\P{Pe}'),
            'finalPunctuation' => $this->custom('\p{Pf}'),
            'notFinalPunctuation' => $this->custom('\P{Pf}'),
            'initialPunctuation' => $this->custom('\p{Pi}'),
            'notInitialPunctuation' => $this->custom('\P{Pi}'),
            'otherPunctuation' => $this->custom('\p{Po}'),
            'notOtherPunctuation' => $this->custom('\P{Po}'),
            'openPunctuation' => $this->custom('\p{Ps}'),
            'notOpenPunctuation' => $this->custom('\P{Ps}'),
            'symbol' => $this->custom('\p{S}'),
            'notSymbol' => $this->custom('\P{S}'),
            'currency' => $this->custom('\p{Sc}'),
            'notCurrency' => $this->custom('\P{Sc}'),
            'modifier' => $this->custom('\p{Sk}'),
            'notModifier' => $this->custom('\P{Sk}'),
            'mathematical' => $this->custom('\p{Sm}'),
            'notMathematical' => $this->custom('\P{Sm}'),
            'otherSymbol' => $this->custom('\p{So}'),
            'notOtherSymbol' => $this->custom('\P{So}'),
            'assigned' => $this->custom('\p{Cn}'),
            'unassigned' => $this->custom('\P{Cn}'),
            'mark' => $this->custom('\p{M}'),
            'notMark' => $this->custom('\P{M}'),
            'spacingMark' => $this->custom('\p{Mc}'),
            'nonSpacingMark' => $this->custom('\p{Mn}'),
            'notSpacingMark' => $this->custom('\P{Mc}'),
            'notNonSpacingMark' => $this->custom('\P{Mn}'),
            'enclosingMark' => $this->custom('\p{Me}'),
            'notEnclosingMark' => $this->custom('\P{Me}'),
            'separator' => $this->custom('\p{Z}'),
            'notSeparator' => $this->custom('\P{Z}'),
            'lineSeparator' => $this->custom('\p{Zl}'),
            'notLineSeparator' => $this->custom('\P{Zl}'),
            'paragraphSeparator' => $this->custom('\p{Zp}'),
            'notParagraphSeparatorSeparator' => $this->custom('\P{Zp}'),
            'spaceSeparator' => $this->custom('\p{Zs}'),
            'notSpaceSeparator' => $this->custom('\P{Zs}'),
            default => Cls::ofClass(
                $class = "\FireHub\Core\Support\Strings\Expression\Pattern\Predefined\\".StrSB::capitalize($method),
                Predefined::class
            ) ? $this->custom((new $class(...$arguments))->regex()) // @phpstan-ignore-line Regex exists at this point.
                : throw new Error("Method $method doesn't exist.")
        };

    }

}