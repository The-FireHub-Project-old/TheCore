```php
abstract class \FireHub\Core\Support\LowLevel\Num()
```







> [!IMPORTANT]
This is an **abstract** class that cannot be instantiated directly.



### ### Number low-level proxy class

_Class contains methods that are used on all number types._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\Num**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L45)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#absolute()">absolute</a>|### Absolute value|
|public static |<a href="#ceil()">ceil</a>|### Round fractions up|
|public static |<a href="#floor()">floor</a>|### Round fractions down|
|public static |<a href="#round()">round</a>|### Rounds a float|
|public static |<a href="#log()">log</a>|### Natural logarithm|
|public static |<a href="#log1p()">log1p</a>|### Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero|
|public static |<a href="#log10()">log10</a>|### Base-10 logarithm|
|public static |<a href="#max()">max</a>|### Find highest value|
|public static |<a href="#min()">min</a>|### Find lowest value|
|public static |<a href="#power()">power</a>|### Exponential expression|
|public static |<a href="#format()">format</a>|### Format a number with grouped thousands|
|public static |<a href="#degreestoradian()">degreesToRadian</a>|### Converts the number in degrees to the radian equivalent|
|public static |<a href="#radiantodegrees()">radianToDegrees</a>|### Converts the radian number to the equivalent number in degrees|
|public static |<a href="#exponent()">exponent</a>|### Calculates the exponent of e|
|public static |<a href="#exponent1()">exponent1</a>|### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero|
|public static |<a href="#hypotenuselength()">hypotenuseLength</a>|### Calculate the length of the hypotenuse of a right-angle triangle|
|public static |<a href="#squareroot()">squareRoot</a>|### Square root|

<h2><a name="absolute()"># method: absolute</a></h2>

```php
final public static Num::absolute(float|int $number):int|float
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Absolute value

_Returns the absolute value of $number._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L60)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L60)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L80)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L80)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L100)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L100)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L134)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L134)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L163)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L163)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L179)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L179)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L195)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L195)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L219)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L219)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L243)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L243)**</sub>
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





### ### Exponential expression



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L266)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L266)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L295)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L295)**</sub>
#### Parameters

* int or float **$number** - _The number being formatted._
* int **$decimals** - _<code>non-negative-int</code>
Sets the number of decimal digits. If 0, the decimal_separator is omitted from the return value._
* string **$decimal_separator** = '.' - _Sets the separator for the decimal point._
* string **$thousands_separator** = ',' - _Sets the separator for thousands._
#### Returns

* string - _A formatted version of number._
<h2><a name="degreestoradian()"># method: degreesToRadian</a></h2>

```php
public static Num::degreesToRadian(int|float $number):float
```











### ### Converts the number in degrees to the radian equivalent



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L316)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L316)**</sub>
#### Parameters

* int or float **$number** - _Angular value in degrees._
#### Returns

* float - _Radian equivalent of number._
<h2><a name="radiantodegrees()"># method: radianToDegrees</a></h2>

```php
public static Num::radianToDegrees(int|float $number):float
```











### ### Converts the radian number to the equivalent number in degrees



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L332)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L332)**</sub>
#### Parameters

* int or float **$number** - _Radian value._
#### Returns

* float - _Equivalent of number in degrees._
<h2><a name="exponent()"># method: exponent</a></h2>

```php
public static Num::exponent(int|float $number):float
```











### ### Calculates the exponent of e



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L350)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L350)**</sub>
#### Parameters

* int or float **$number** - _The argument to process._
#### Returns

* float - _'e' raised to the power of number._
<h2><a name="exponent1()"># method: exponent1</a></h2>

```php
public static Num::exponent1(int|float $number):float
```











### ### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero

_Method returns the equivalent to 'exp(num) - 1' computed in a way that is accurate even if the value of num is
near zero, a case where 'exp (num) - 1' would be inaccurate due to subtraction of two numbers that are nearly
equal._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L372)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L372)**</sub>
#### Parameters

* int or float **$number** - _The argument to process._
#### Returns

* float - _'e' raised to the power of number._
<h2><a name="hypotenuselength()"># method: hypotenuseLength</a></h2>

```php
public static Num::hypotenuseLength(int|float $x, int|float $y):float
```











### ### Calculate the length of the hypotenuse of a right-angle triangle

_Method returns the length of the hypotenuse of a right-angle triangle with sides of length x and y, or the
distance of the point (x, y) from the origin.
This is equivalent to sqrt($x*$x + $y*$y)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L395)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L395)**</sub>
#### Parameters

* int or float **$x** - _Length of the first side._
* int or float **$y** - _Length of the second side._
#### Returns

* float - _Calculated length of the hypotenuse._
<h2><a name="squareroot()"># method: squareRoot</a></h2>

```php
public static Num::squareRoot(int|float $number):float
```











### ### Square root



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L411)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L411)**</sub>
#### Parameters

* int or float **$number** - _The argument to process._
#### Returns

* float - _The square root of num or the special value NAN for negative numbers._