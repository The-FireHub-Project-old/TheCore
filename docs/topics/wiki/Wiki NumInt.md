```php
final class \FireHub\Core\Support\LowLevel\NumInt()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Integer number low-level proxy class

_An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}.
Int can be specified in decimal (base 10), hexadecimal (base 16), octal (base 8) or binary (base 2) notation.
The negation operator can be used to denote a negative int._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\NumInt**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php#L30)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#divide()">divide</a>|### Integer division|
|inherited public static |<a href="#absolute()">absolute</a>|### Absolute value|
|inherited public static |<a href="#ceil()">ceil</a>|### Round fractions up|
|inherited public static |<a href="#floor()">floor</a>|### Round fractions down|
|inherited public static |<a href="#round()">round</a>|### Rounds a float|
|inherited public static |<a href="#log()">log</a>|### Natural logarithm|
|inherited public static |<a href="#log1p()">log1p</a>|### Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero|
|inherited public static |<a href="#log10()">log10</a>|### Base-10 logarithm|
|inherited public static |<a href="#max()">max</a>|### Find highest value|
|inherited public static |<a href="#min()">min</a>|### Find lowest value|
|inherited public static |<a href="#power()">power</a>|### Exponential expression|
|inherited public static |<a href="#format()">format</a>|### Format a number with grouped thousands|

<h2><a name="divide()"># method: divide</a></h2>

```php
public static NumInt::divide(int $dividend, int $divisor):int
```













### ### Integer division



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php#L50)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php#L50)**</sub>
#### Parameters

* int **$dividend** - _Number to be divided._
* int **$divisor** - _<code>non-zero-int</code>
Number which divides the $dividend._
#### Throws

* [\ArithmeticError](./Wiki-ArithmeticError) - _If the $dividend is PHP_INT_MIN and the $divisor is -1._
* [\DivisionByZeroError](./Wiki-DivisionByZeroError) - _If $divisor is 0._
#### Returns

* int - _The integer quotient of the division of $dividend by $divisor._
<h2><a name="absolute()"># method: absolute</a></h2>

```php
final public static Num::absolute(float|int $number):int|float
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Absolute value

_Returns the absolute value of $number._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L53)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L53)**</sub>
#### Parameters

* float or int **$number** - _The numeric value to process._
#### Returns

* int or float - _<code>($number is int ? int : float)</code> The absolute value of number._
<h2><a name="ceil()"># method: ceil</a></h2>

```php
final public static Num::ceil(float|int $number):int
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Round fractions up

_Returns the next highest integer value by rounding up $number if necessary._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L73)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L73)**</sub>
#### Parameters

* float or int **$number** - _The value to round up._
#### Returns

* int - _Rounded number up to the next highest integer._
<h2><a name="floor()"># method: floor</a></h2>

```php
final public static Num::floor(float|int $number):int
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Round fractions down

_Returns the next lowest integer value (as float) by rounding down $number if necessary._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L93)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L93)**</sub>
#### Parameters

* float or int **$number** - _The value to round down._
#### Returns

* int - _Rounded number up to the next lowest integer._
<h2><a name="round()"># method: round</a></h2>

```php
final public static Num::round(float|int $number, int $precision, \FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP):float|int
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Rounds a float

_Returns the rounded value of $number to specified $precision (number of digits after the decimal point).
$precision can also be negative or zero (default)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L127)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L127)**</sub>
#### Parameters

* float or int **$number** - _The value to round._
* int **$precision** - _[optional] 
Number of decimal digits to round to. If the precision is positive, num is rounded to precision significant
digits after the decimal point. If the precision is negative, num is rounded to precision significant digits
before the decimal point, i.e., to the nearest multiple of pow(10, -$precision), e.g. for a precision of -1
num is rounded to tens, for a precision of -2 to hundreds, etc._
* [\FireHub\Core\Support\Enums\Number\Round](./Wiki-Round) **$round** = Round::HALF_UP - _[optional] 
Specify the mode in which rounding occurs._
#### Returns

* float or int - _<code>($precision is positive-int ? float : int)</code> Rounded number float._
<h2><a name="log()"># method: log</a></h2>

```php
final public static Num::log(float|int $number, \FireHub\Core\Support\Enums\Number\LogBase|float $base = LogBase::E):float
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Natural logarithm



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L156)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L156)**</sub>
#### Parameters

* float or int **$number** - _The value to calculate the logarithm for._
* [\FireHub\Core\Support\Enums\Number\LogBase](./Wiki-LogBase) or float **$base** = LogBase::E - _[optional] 
The optional logarithmic base to use (defaults to 'e' and so to the natural logarithm)._
#### Returns

* float - _The logarithm of $number to $base, if given, or the natural logarithm._
<h2><a name="log1p()"># method: log1p</a></h2>

```php
final public static Num::log1p(float|int $number):float
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L172)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L172)**</sub>
#### Parameters

* float or int **$number** - _The argument to process._
#### Returns

* float - _log(1 + num)._
<h2><a name="log10()"># method: log10</a></h2>

```php
final public static Num::log10(float|int $number):float
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Base-10 logarithm



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L188)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L188)**</sub>
#### Parameters

* float or int **$number** - _The argument to process._
#### Returns

* float - _The base-10 logarithm of num._
<h2><a name="max()"># method: max</a></h2>

```php
final public static Num::max(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):int|float
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Find highest value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L212)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L212)**</sub>
#### Templates

* TInt of int|float
#### Parameters

* [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$value** - _<code>TInt</code>
Any comparable value._
* variadic [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$values** - _<code>TInt</code>
Any comparable values._
#### Returns

* int or float - _<code>TInt</code> Value considered "highest" according to standard comparisons._
<h2><a name="min()"># method: min</a></h2>

```php
final public static Num::min(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):int|float
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Find lowest value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L236)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L236)**</sub>
#### Templates

* TInt of int|float
#### Parameters

* [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$value** - _<code>TInt</code>
Any comparable value._
* variadic [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$values** - _<code>TInt</code>
Any comparable values._
#### Returns

* int or float - _<code>TInt</code> Value considered "lowest" according to standard comparisons._
<h2><a name="power()"># method: power</a></h2>

```php
final public static Num::power(float|int $base, float|int $exponent):float|int
```





> [!IMPORTANT]
This method is marked as **final**.





> [!NOTE]
            It is possible to use the ** operator instead.

### ### Exponential expression



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L259)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L259)**</sub>
#### Parameters

* float or int **$base** - _The base to use._
* float or int **$exponent** - _The exponent._
#### Returns

* float or int - _Base raised to the power of exponent. If both arguments are non-negative integers and the
result can be represented as an integer, the result will be returned with an int type, otherwise it will be
returned as a float._
<h2><a name="format()"># method: format</a></h2>

```php
final public static Num::format(int|float $number, int $decimals, string $decimal_separator = &#039;.&#039;, string $thousands_separator = &#039;,&#039;):string
```





> [!IMPORTANT]
This method is marked as **final**.







### ### Format a number with grouped thousands

_Formats a number with grouped thousands and optionally decimal digits using the rounding half up rule._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L288)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L288)**</sub>
#### Parameters

* int or float **$number** - _The number being formatted._
* int **$decimals** - _<code>non-negative-int</code>
Sets the number of decimal digits. If 0, the decimal_separator is omitted from the return value._
* string **$decimal_separator** = '.' - _Sets the separator for the decimal point._
* string **$thousands_separator** = ',' - _Sets the separator for thousands._
#### Returns

* string - _A formatted version of number._