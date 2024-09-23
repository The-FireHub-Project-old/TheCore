```php
final class \FireHub\Core\Support\Strings\Expression\Pattern\AtMost()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### At most occurrences



<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Strings\Expression\Pattern\AtMost**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/firehub.AtMost.php#L21)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/firehub.AtMost.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/expression/pattern/firehub.AtMost.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|inherited protected|<a href="#$function_family">function_family</a>|||
|inherited readonly protected|<a href="#$number">number</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#regex()">regex</a>||
|inherited public|<a href="#__construct()">__construct</a>|### Constructor|
|inherited public|<a href="#custom()">custom</a>|### Custom regex pattern|
|inherited public|<a href="#__call()">__call</a>|### Call predefined patterns|
|inherited magic public|<a href="#letters()">letters</a>||
|inherited magic public|<a href="#notletters()">notLetters</a>||
|inherited magic public|<a href="#modifierletters()">modifierLetters</a>||
|inherited magic public|<a href="#notmodifierletters()">notModifierLetters</a>||
|inherited magic public|<a href="#otherletters()">otherLetters</a>||
|inherited magic public|<a href="#nototherletters()">notOtherLetters</a>||
|inherited magic public|<a href="#lower()">lower</a>||
|inherited magic public|<a href="#upper()">upper</a>||
|inherited magic public|<a href="#titlecased()">titleCased</a>||
|inherited magic public|<a href="#nottitlecased()">notTitleCased</a>||
|inherited magic public|<a href="#numbers()">numbers</a>||
|inherited magic public|<a href="#notnumbers()">notNumbers</a>||
|inherited magic public|<a href="#letternumbers()">letterNumbers</a>||
|inherited magic public|<a href="#notletternumbers()">notLetterNumbers</a>||
|inherited magic public|<a href="#othernumbers()">otherNumbers</a>||
|inherited magic public|<a href="#notothernumbers()">notOtherNumbers</a>||
|inherited magic public|<a href="#digits()">digits</a>||
|inherited magic public|<a href="#notdigits()">notDigits</a>||
|inherited magic public|<a href="#lettersanddigits()">lettersAndDigits</a>||
|inherited magic public|<a href="#notlettersnordigits()">notLettersNorDigits</a>||
|inherited magic public|<a href="#ascii()">ascii</a>||
|inherited magic public|<a href="#notascii()">notAscii</a>||
|inherited magic public|<a href="#blanks()">blanks</a>||
|inherited magic public|<a href="#notblanks()">notBlanks</a>||
|inherited magic public|<a href="#control()">control</a>||
|inherited magic public|<a href="#notcontrol()">notControl</a>||
|inherited magic public|<a href="#whitespaces()">whitespaces</a>||
|inherited magic public|<a href="#notwhitespaces()">notWhitespaces</a>||
|inherited magic public|<a href="#printable()">printable</a>||
|inherited magic public|<a href="#notprintable()">notPrintable</a>||
|inherited magic public|<a href="#graphical()">graphical</a>||
|inherited magic public|<a href="#notgraphical()">notGraphical</a>||
|inherited magic public|<a href="#wordcharacters()">wordCharacters</a>||
|inherited magic public|<a href="#notwordcharacters()">notWordCharacters</a>||
|inherited magic public|<a href="#hexadecimals()">hexadecimals</a>||
|inherited magic public|<a href="#nothexadecimals()">notHexadecimals</a>||
|inherited magic public|<a href="#verticalwhitespaces()">verticalWhitespaces</a>||
|inherited magic public|<a href="#notverticalwhitespaces()">notVerticalWhitespaces</a>||
|inherited magic public|<a href="#horizontalwhitespaces()">horizontalWhitespaces</a>||
|inherited magic public|<a href="#nothorizontalwhitespaces()">notHorizontalWhitespaces</a>||
|inherited magic public|<a href="#wordboundaries()">wordBoundaries</a>||
|inherited magic public|<a href="#notwordboundaries()">notWordBoundaries</a>||
|inherited magic public|<a href="#format()">format</a>||
|inherited magic public|<a href="#notformat()">notFormat</a>||
|inherited magic public|<a href="#punctuation()">punctuation</a>||
|inherited magic public|<a href="#notpunctuation()">notPunctuation</a>||
|inherited magic public|<a href="#connectorpunctuation()">connectorPunctuation</a>||
|inherited magic public|<a href="#notconnectorpunctuation()">notConnectorPunctuation</a>||
|inherited magic public|<a href="#dashpunctuation()">dashPunctuation</a>||
|inherited magic public|<a href="#notdashpunctuation()">notDashPunctuation</a>||
|inherited magic public|<a href="#closepunctuation()">closePunctuation</a>||
|inherited magic public|<a href="#notclosepunctuation()">notClosePunctuation</a>||
|inherited magic public|<a href="#finalpunctuation()">finalPunctuation</a>||
|inherited magic public|<a href="#notfinalpunctuation()">notFinalPunctuation</a>||
|inherited magic public|<a href="#initialpunctuation()">initialPunctuation</a>||
|inherited magic public|<a href="#notinitialpunctuation()">notInitialPunctuation</a>||
|inherited magic public|<a href="#otherpunctuation()">otherPunctuation</a>||
|inherited magic public|<a href="#nototherpunctuation()">notOtherPunctuation</a>||
|inherited magic public|<a href="#openpunctuation()">openPunctuation</a>||
|inherited magic public|<a href="#notopenpunctuation()">notOpenPunctuation</a>||
|inherited magic public|<a href="#symbol()">symbol</a>||
|inherited magic public|<a href="#notsymbol()">notSymbol</a>||
|inherited magic public|<a href="#currency()">currency</a>||
|inherited magic public|<a href="#notcurrency()">notCurrency</a>||
|inherited magic public|<a href="#modifier()">modifier</a>||
|inherited magic public|<a href="#notmodifier()">notModifier</a>||
|inherited magic public|<a href="#mathematical()">mathematical</a>||
|inherited magic public|<a href="#notmathematical()">notMathematical</a>||
|inherited magic public|<a href="#othersymbol()">otherSymbol</a>||
|inherited magic public|<a href="#notothersymbol()">notOtherSymbol</a>||
|inherited magic public|<a href="#unassigned()">unassigned</a>||
|inherited magic public|<a href="#assigned()">assigned</a>||
|inherited magic public|<a href="#notnewline()">notNewLine</a>||
|inherited magic public|<a href="#mark()">mark</a>||
|inherited magic public|<a href="#notmark()">notMark</a>||
|inherited magic public|<a href="#spacingmark()">spacingMark</a>||
|inherited magic public|<a href="#nonspacingmark()">nonSpacingMark</a>||
|inherited magic public|<a href="#notspacingmark()">notSpacingMark</a>||
|inherited magic public|<a href="#notnonspacingmark()">notNonSpacingMark</a>||
|inherited magic public|<a href="#enclosingmark()">enclosingMark</a>||
|inherited magic public|<a href="#notenclosingmark()">notEnclosingMark</a>||
|inherited magic public|<a href="#separator()">separator</a>||
|inherited magic public|<a href="#notseparator()">notSeparator</a>||
|inherited magic public|<a href="#lineseparator()">lineSeparator</a>||
|inherited magic public|<a href="#notlineseparator()">notLineSeparator</a>||
|inherited magic public|<a href="#paragraphseparator()">paragraphSeparator</a>||
|inherited magic public|<a href="#notparagraphseparator()">notParagraphSeparator</a>||
|inherited magic public|<a href="#spaceseparator()">spaceSeparator</a>||
|inherited magic public|<a href="#notspaceseparator()">notSpaceSeparator</a>||
|inherited magic public|<a href="#chars()">chars</a>||
|inherited magic public|<a href="#notchars()">notChars</a>||
|inherited magic public|<a href="#inrange()">inRange</a>||
|inherited magic public|<a href="#notinrange()">notInRange</a>||

<h2><a name="$function_family"># property: function_family</a></h2>

```php
protected \FireHub\Core\Support\Strings\Expression\FunctionFamily $function_family
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L136)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L136)**</sub>
<h2><a name="$number"># property: number</a></h2>

```php
readonly protected int $number
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/firehub.Occurrences.php#L41)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/firehub.Occurrences.php#L41)**</sub>
<h2><a name="regex()"># method: regex</a></h2>

```php
public AtMost::regex(string $pattern)
```















><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/pattern/firehub.AtMost.php#L28)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/pattern/firehub.AtMost.php#L28)**</sub>
#### Parameters

* string **$pattern**
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Pattern::__construct(\FireHub\Core\Support\Strings\Expression\FunctionFamily $function_family):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L135)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L135)**</sub>
#### Parameters

* [\FireHub\Core\Support\Strings\Expression\FunctionFamily](./Wiki-FunctionFamily) **$function_family** - _Function to use._
#### Returns

* void
<h2><a name="custom()"># method: custom</a></h2>

```php
final public Pattern::custom(string $pattern):mixed
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Custom regex pattern



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L152)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L152)**</sub>
#### Parameters

* string **$pattern** - _The regular expression pattern._
#### Returns

* mixed - _Regex result._
<h2><a name="__call()"># method: __call</a></h2>

```php
public Pattern::__call(non-empty-string $method, array<array-key,mixed> $arguments):mixed
```











### ### Call predefined patterns



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L190)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L190)**</sub>
#### Parameters

* non-empty-string **$method** - _Method name._
* array&lt;array-key,mixed&gt; **$arguments** - _List of arguments._
#### Throws

* [\Error](./Wiki-Error) - _If method doesn&#039;t exist._
#### Returns

* mixed - _Regex result._
<h2><a name="letters()"># method: letters</a></h2>

```php
public Pattern::letters():mixed
```













_() ### Letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notletters()"># method: notLetters</a></h2>

```php
public Pattern::notLetters():mixed
```













_() ### Not-letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="modifierletters()"># method: modifierLetters</a></h2>

```php
public Pattern::modifierLetters():mixed
```













_() ### Modifier letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notmodifierletters()"># method: notModifierLetters</a></h2>

```php
public Pattern::notModifierLetters():mixed
```













_() ### Not-modifier letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="otherletters()"># method: otherLetters</a></h2>

```php
public Pattern::otherLetters():mixed
```













_() ### Other letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="nototherletters()"># method: notOtherLetters</a></h2>

```php
public Pattern::notOtherLetters():mixed
```













_() ### Not-other letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="lower()"># method: lower</a></h2>

```php
public Pattern::lower():mixed
```













_() ### Lower case letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="upper()"># method: upper</a></h2>

```php
public Pattern::upper():mixed
```













_() ### Upper case letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="titlecased()"># method: titleCased</a></h2>

```php
public Pattern::titleCased():mixed
```













_() ### Title-cased letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="nottitlecased()"># method: notTitleCased</a></h2>

```php
public Pattern::notTitleCased():mixed
```













_() ### Not-title-cased letters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="numbers()"># method: numbers</a></h2>

```php
public Pattern::numbers():mixed
```













_() ### Numbers_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notnumbers()"># method: notNumbers</a></h2>

```php
public Pattern::notNumbers():mixed
```













_() ### Not-numbers_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="letternumbers()"># method: letterNumbers</a></h2>

```php
public Pattern::letterNumbers():mixed
```













_() ### Letter numbers_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notletternumbers()"># method: notLetterNumbers</a></h2>

```php
public Pattern::notLetterNumbers():mixed
```













_() ### Not-netter numbers_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="othernumbers()"># method: otherNumbers</a></h2>

```php
public Pattern::otherNumbers():mixed
```













_() ### Other numbers_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notothernumbers()"># method: notOtherNumbers</a></h2>

```php
public Pattern::notOtherNumbers():mixed
```













_() ### Not-other numbers_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="digits()"># method: digits</a></h2>

```php
public Pattern::digits():mixed
```













_() ### Digits_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notdigits()"># method: notDigits</a></h2>

```php
public Pattern::notDigits():mixed
```













_() ### Not-digits_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="lettersanddigits()"># method: lettersAndDigits</a></h2>

```php
public Pattern::lettersAndDigits():mixed
```













_() ### Letters and digits_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notlettersnordigits()"># method: notLettersNorDigits</a></h2>

```php
public Pattern::notLettersNorDigits():mixed
```













_() ### Not-letters nor digits_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="ascii()"># method: ascii</a></h2>

```php
public Pattern::ascii():mixed
```













_() ### Character codes 0-127_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notascii()"># method: notAscii</a></h2>

```php
public Pattern::notAscii():mixed
```













_() ### Character codes not from 0-127_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="blanks()"># method: blanks</a></h2>

```php
public Pattern::blanks():mixed
```













_() ### Space or tab only_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notblanks()"># method: notBlanks</a></h2>

```php
public Pattern::notBlanks():mixed
```













_() ### Not space nor tab only_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="control()"># method: control</a></h2>

```php
public Pattern::control():mixed
```













_() ### Control characters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notcontrol()"># method: notControl</a></h2>

```php
public Pattern::notControl():mixed
```













_() ### Not-control characters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="whitespaces()"># method: whitespaces</a></h2>

```php
public Pattern::whitespaces():mixed
```













_() ### Whitespaces_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notwhitespaces()"># method: notWhitespaces</a></h2>

```php
public Pattern::notWhitespaces():mixed
```













_() ### Not-whitespaces_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="printable()"># method: printable</a></h2>

```php
public Pattern::printable():mixed
```













_() ### Printing characters, including space_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notprintable()"># method: notPrintable</a></h2>

```php
public Pattern::notPrintable():mixed
```













_() ### Not-printing characters, including space_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="graphical()"># method: graphical</a></h2>

```php
public Pattern::graphical():mixed
```













_() ### Printing characters, excluding space_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notgraphical()"># method: notGraphical</a></h2>

```php
public Pattern::notGraphical():mixed
```













_() ### Not-printing characters, excluding space_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="wordcharacters()"># method: wordCharacters</a></h2>

```php
public Pattern::wordCharacters():mixed
```













_() ### Underscore or any character that is a letter or digit_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notwordcharacters()"># method: notWordCharacters</a></h2>

```php
public Pattern::notWordCharacters():mixed
```













_() ### Not-underscore or any character that is not letter nor digit_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="hexadecimals()"># method: hexadecimals</a></h2>

```php
public Pattern::hexadecimals():mixed
```













_() ### Hexadecimals_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="nothexadecimals()"># method: notHexadecimals</a></h2>

```php
public Pattern::notHexadecimals():mixed
```













_() ### Not-hexadecimals_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="verticalwhitespaces()"># method: verticalWhitespaces</a></h2>

```php
public Pattern::verticalWhitespaces():mixed
```













_() ### Vertical whitespaces_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notverticalwhitespaces()"># method: notVerticalWhitespaces</a></h2>

```php
public Pattern::notVerticalWhitespaces():mixed
```













_() ### Not-vertical whitespaces_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="horizontalwhitespaces()"># method: horizontalWhitespaces</a></h2>

```php
public Pattern::horizontalWhitespaces():mixed
```













_() ### Horizontal whitespaces_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="nothorizontalwhitespaces()"># method: notHorizontalWhitespaces</a></h2>

```php
public Pattern::notHorizontalWhitespaces():mixed
```













_() ### Not-horizontal whitespaces_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="wordboundaries()"># method: wordBoundaries</a></h2>

```php
public Pattern::wordBoundaries():mixed
```













_() ### Word boundaries_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notwordboundaries()"># method: notWordBoundaries</a></h2>

```php
public Pattern::notWordBoundaries():mixed
```













_() ### Not-word boundaries_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="format()"># method: format</a></h2>

```php
public Pattern::format():mixed
```













_() ### Format_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notformat()"># method: notFormat</a></h2>

```php
public Pattern::notFormat():mixed
```













_() ### Not-format_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="punctuation()"># method: punctuation</a></h2>

```php
public Pattern::punctuation():mixed
```













_() ### Punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notpunctuation()"># method: notPunctuation</a></h2>

```php
public Pattern::notPunctuation():mixed
```













_() ### Not punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="connectorpunctuation()"># method: connectorPunctuation</a></h2>

```php
public Pattern::connectorPunctuation():mixed
```













_() ### Connector punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notconnectorpunctuation()"># method: notConnectorPunctuation</a></h2>

```php
public Pattern::notConnectorPunctuation():mixed
```













_() ### Not-connector punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="dashpunctuation()"># method: dashPunctuation</a></h2>

```php
public Pattern::dashPunctuation():mixed
```













_() ### Dash punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notdashpunctuation()"># method: notDashPunctuation</a></h2>

```php
public Pattern::notDashPunctuation():mixed
```













_() ### Not-dash punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="closepunctuation()"># method: closePunctuation</a></h2>

```php
public Pattern::closePunctuation():mixed
```













_() ### Close punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notclosepunctuation()"># method: notClosePunctuation</a></h2>

```php
public Pattern::notClosePunctuation():mixed
```













_() ### Not-close punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="finalpunctuation()"># method: finalPunctuation</a></h2>

```php
public Pattern::finalPunctuation():mixed
```













_() ### Final punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notfinalpunctuation()"># method: notFinalPunctuation</a></h2>

```php
public Pattern::notFinalPunctuation():mixed
```













_() ### Not-final punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="initialpunctuation()"># method: initialPunctuation</a></h2>

```php
public Pattern::initialPunctuation():mixed
```













_() ### Initial punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notinitialpunctuation()"># method: notInitialPunctuation</a></h2>

```php
public Pattern::notInitialPunctuation():mixed
```













_() ### Not-initial punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="otherpunctuation()"># method: otherPunctuation</a></h2>

```php
public Pattern::otherPunctuation():mixed
```













_() ### Other punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="nototherpunctuation()"># method: notOtherPunctuation</a></h2>

```php
public Pattern::notOtherPunctuation():mixed
```













_() ### Not-other punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="openpunctuation()"># method: openPunctuation</a></h2>

```php
public Pattern::openPunctuation():mixed
```













_() ### Open punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notopenpunctuation()"># method: notOpenPunctuation</a></h2>

```php
public Pattern::notOpenPunctuation():mixed
```













_() ### Not-open punctuation_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="symbol()"># method: symbol</a></h2>

```php
public Pattern::symbol():mixed
```













_() ### Symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notsymbol()"># method: notSymbol</a></h2>

```php
public Pattern::notSymbol():mixed
```













_() ### Not-symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="currency()"># method: currency</a></h2>

```php
public Pattern::currency():mixed
```













_() ### Currency symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notcurrency()"># method: notCurrency</a></h2>

```php
public Pattern::notCurrency():mixed
```













_() ### Not-currency symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="modifier()"># method: modifier</a></h2>

```php
public Pattern::modifier():mixed
```













_() ### Modifier symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notmodifier()"># method: notModifier</a></h2>

```php
public Pattern::notModifier():mixed
```













_() ### Not-modifier symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="mathematical()"># method: mathematical</a></h2>

```php
public Pattern::mathematical():mixed
```













_() ### Mathematical symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notmathematical()"># method: notMathematical</a></h2>

```php
public Pattern::notMathematical():mixed
```













_() ### Not-mathematical symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="othersymbol()"># method: otherSymbol</a></h2>

```php
public Pattern::otherSymbol():mixed
```













_() ### An other symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notothersymbol()"># method: notOtherSymbol</a></h2>

```php
public Pattern::notOtherSymbol():mixed
```













_() ### Not other symbol_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="unassigned()"># method: unassigned</a></h2>

```php
public Pattern::unassigned():mixed
```













_() ### Unassigned - characters with code points greater than 0x10FFFF_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="assigned()"># method: assigned</a></h2>

```php
public Pattern::assigned():mixed
```













_() ### Assigned - characters with code points smaller than 0x10FFFF_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notnewline()"># method: notNewLine</a></h2>

```php
public Pattern::notNewLine():mixed
```













_() ### not-new line_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="mark()"># method: mark</a></h2>

```php
public Pattern::mark():mixed
```













_() ### Mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notmark()"># method: notMark</a></h2>

```php
public Pattern::notMark():mixed
```













_() ### Non-mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="spacingmark()"># method: spacingMark</a></h2>

```php
public Pattern::spacingMark():mixed
```













_() ### Spacing mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="nonspacingmark()"># method: nonSpacingMark</a></h2>

```php
public Pattern::nonSpacingMark():mixed
```













_() ### Non-spacing mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notspacingmark()"># method: notSpacingMark</a></h2>

```php
public Pattern::notSpacingMark():mixed
```













_() ### Not-spacing mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notnonspacingmark()"># method: notNonSpacingMark</a></h2>

```php
public Pattern::notNonSpacingMark():mixed
```













_() ### Not-non-spacing mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="enclosingmark()"># method: enclosingMark</a></h2>

```php
public Pattern::enclosingMark():mixed
```













_() ### Enclosing mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notenclosingmark()"># method: notEnclosingMark</a></h2>

```php
public Pattern::notEnclosingMark():mixed
```













_() ### Not-enclosing mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="separator()"># method: separator</a></h2>

```php
public Pattern::separator():mixed
```













_() ### Separator_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notseparator()"># method: notSeparator</a></h2>

```php
public Pattern::notSeparator():mixed
```













_() ### Not-separator mark_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="lineseparator()"># method: lineSeparator</a></h2>

```php
public Pattern::lineSeparator():mixed
```













_() ### Line separator_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notlineseparator()"># method: notLineSeparator</a></h2>

```php
public Pattern::notLineSeparator():mixed
```













_() ### Not-line separator_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="paragraphseparator()"># method: paragraphSeparator</a></h2>

```php
public Pattern::paragraphSeparator():mixed
```













_() ### Paragraph separator_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notparagraphseparator()"># method: notParagraphSeparator</a></h2>

```php
public Pattern::notParagraphSeparator():mixed
```













_() ### Not-paragraph separator_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="spaceseparator()"># method: spaceSeparator</a></h2>

```php
public Pattern::spaceSeparator():mixed
```













_() ### Space separator_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notspaceseparator()"># method: notSpaceSeparator</a></h2>

```php
public Pattern::notSpaceSeparator():mixed
```













_() ### Not-space separator_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="chars()"># method: chars</a></h2>

```php
public Pattern::chars():mixed
```













_(Characters[] $characters) ### Characters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notchars()"># method: notChars</a></h2>

```php
public Pattern::notChars():mixed
```













_(Characters[] $characters) ### Not-characters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="inrange()"># method: inRange</a></h2>

```php
public Pattern::inRange():mixed
```













_(Characters $from,Characters $until) In the range of characters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed
<h2><a name="notinrange()"># method: notInRange</a></h2>

```php
public Pattern::notInRange():mixed
```













_(Characters $from, Characters $until) Not in the range of characters_

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/expression/firehub.Pattern.php#L0)**</sub>
#### Returns

* mixed