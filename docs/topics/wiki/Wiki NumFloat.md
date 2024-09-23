```php
final class \FireHub\Core\Support\LowLevel\NumFloat()
```





> [!IMPORTANT]
This class is marked as **final**.





### ### Float number low-level proxy class

_Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the
following syntax's: 1.234, 1.2e3, 7E-10, 1_234.567._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\NumFloat**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L43)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#isfinite()">isFinite</a>|### Finds whether a value is a legal finite number|
|public static |<a href="#isinfinite()">isInfinite</a>|### Finds whether a value is infinite|
|public static |<a href="#isnan()">isNan</a>|### Finds whether a value is not a number|
|public static |<a href="#divide()">divide</a>|### Divides two numbers, according to IEEE 754|
|public static |<a href="#remainder()">remainder</a>|### Get the floating point remainder (modulo) of the division of the arguments|
|public static |<a href="#cosine()">cosine</a>|### Cosine|
|public static |<a href="#cosinearc()">cosineArc</a>|### Arc cosine|
|public static |<a href="#cosinehyperbolic()">cosineHyperbolic</a>|### Hyperbolic cosine|
|public static |<a href="#cosineinversehyperbolic()">cosineInverseHyperbolic</a>|### Inverse hyperbolic cosine|
|public static |<a href="#sine()">sine</a>|### Sine|
|public static |<a href="#sinearc()">sineArc</a>|### Arc sine|
|public static |<a href="#sinehyperbolic()">sineHyperbolic</a>|### Hyperbolic sine|
|public static |<a href="#sinehyperbolicinverse()">sineHyperbolicInverse</a>|### Inverse hyperbolic tangent|
|public static |<a href="#tangent()">tangent</a>|### Tangent|
|public static |<a href="#tangentarc()">tangentArc</a>|### Arc tangent|
|public static |<a href="#tangentarc2()">tangentArc2</a>|### Arc tangent of two variables|
|public static |<a href="#tangenthyperbolic()">tangentHyperbolic</a>|### Hyperbolic tangent|
|public static |<a href="#tangentinversehyperbolic()">tangentInverseHyperbolic</a>|### Inverse hyperbolic tangent|
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
|inherited public static |<a href="#degreestoradian()">degreesToRadian</a>|### Converts the number in degrees to the radian equivalent|
|inherited public static |<a href="#radiantodegrees()">radianToDegrees</a>|### Converts the radian number to the equivalent number in degrees|
|inherited public static |<a href="#exponent()">exponent</a>|### Calculates the exponent of e|
|inherited public static |<a href="#exponent1()">exponent1</a>|### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero|
|inherited public static |<a href="#hypotenuselength()">hypotenuseLength</a>|### Calculate the length of the hypotenuse of a right-angle triangle|
|inherited public static |<a href="#squareroot()">squareRoot</a>|### Square root|

<h2><a name="isfinite()"># method: isFinite</a></h2>

```php
public static NumFloat::isFinite(float $number):bool
```











### ### Finds whether a value is a legal finite number

_Checks whether $number is legally finite on this platform._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L58)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L58)**</sub>
#### Parameters

* float **$number** - _The value to check._
#### Returns

* bool - _True if number is a legal finite number within the allowed range for a PHP float on this platform,
false otherwise._
<h2><a name="isinfinite()"># method: isInfinite</a></h2>

```php
public static NumFloat::isInfinite(float $number):bool
```











### ### Finds whether a value is infinite

_Returns true if num is infinite (positive or negative), like the result of log(0) or any value too big to fit
into a float on this platform._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L77)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L77)**</sub>
#### Parameters

* float **$number** - _The value to check._
#### Returns

* bool - _True if the number is infinite, false otherwise._
<h2><a name="isnan()"># method: isNan</a></h2>

```php
public static NumFloat::isNan(float $number):bool
```











### ### Finds whether a value is not a number

_Checks whether num is 'not a number', like the result of acos(1.01)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L95)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L95)**</sub>
#### Parameters

* float **$number** - _Value to check._
#### Returns

* bool - _True if number is 'not a number', false otherwise._
<h2><a name="divide()"># method: divide</a></h2>

```php
public static NumFloat::divide(float $dividend, float $divisor):float
```











### ### Divides two numbers, according to IEEE 754

_Returns the floating point result of dividing the num1 by the num2. If the num2 is zero, then one of INF,
-INF, or NAN will be returned._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L117)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L117)**</sub>
#### Parameters

* float **$dividend** - _Number to be divided._
* float **$divisor** - _Number which divides the $dividend._
#### Returns

* float - _The floating point result of the division of $dividend by $divisor._
<h2><a name="remainder()"># method: remainder</a></h2>

```php
public static NumFloat::remainder(float $dividend, float $divisor):float
```











### ### Get the floating point remainder (modulo) of the division of the arguments

_Returns the floating point remainder of dividing the dividend ($dividend) by the divisor ($divisor). The
remainder (r) is defined as: $dividend = i * $divisor + r, for some integer i. If $divisor is non-zero, r has
the same sign as $dividend and a magnitude less than the magnitude of $divisor._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L140)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L140)**</sub>
#### Parameters

* float **$dividend** - _The dividend._
* float **$divisor** - _The divisor._
#### Returns

* float - _The floating point remainder (modulo) of the division for the arguments._
<h2><a name="cosine()"># method: cosine</a></h2>

```php
public static NumFloat::cosine(float $number):float
```











### ### Cosine

_Method returns the cosine of the $number parameter. The $number parameter is in radians._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L158)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L158)**</sub>
#### Parameters

* float **$number** - _An angle in radians._
#### Returns

* float - _The cosine of angle._
<h2><a name="cosinearc()"># method: cosineArc</a></h2>

```php
public static NumFloat::cosineArc(float $number):float
```











### ### Arc cosine

_Returns the arc cosine of num in radians. cosineArc() is the inverse function of cosine(), which means that
$number == cosine(cosineArc($number)) for every value of a that is within cosineArc() range._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L177)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L177)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _The arc cosine of number in radians._
<h2><a name="cosinehyperbolic()"># method: cosineHyperbolic</a></h2>

```php
public static NumFloat::cosineHyperbolic(float $number):float
```











### ### Hyperbolic cosine

_Returns the hyperbolic cosine of $number, defined as (exponent($number) + exponent(-$number))/2._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L195)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L195)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _Hyperbolic cosine of number._
<h2><a name="cosineinversehyperbolic()"># method: cosineInverseHyperbolic</a></h2>

```php
public static NumFloat::cosineInverseHyperbolic(float $number):float
```











### ### Inverse hyperbolic cosine

_Returns the inverse hyperbolic cosine of $number, i.e., the value whose hyperbolic cosine is $number._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L213)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L213)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _Inverse hyperbolic cosine of number._
<h2><a name="sine()"># method: sine</a></h2>

```php
public static NumFloat::sine(float $number):float
```











### ### Sine

_Method returns the sine of the num parameter. The num parameter is in radians._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L231)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L231)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _Sine of number._
<h2><a name="sinearc()"># method: sineArc</a></h2>

```php
public static NumFloat::sineArc(float $number):float
```











### ### Arc sine

_Returns the arc sine of $number in radians. sineArc() is the inverse function of sine(), which means that
$num == sine(sineArc($number)) for every value of a that is within sineArc()'s range._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L250)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L250)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _The arc sine of number in radians._
<h2><a name="sinehyperbolic()"># method: sineHyperbolic</a></h2>

```php
public static NumFloat::sineHyperbolic(float $number):float
```











### ### Hyperbolic sine

_Returns the hyperbolic sine of num, defined as (exponent($number) - exponent(-$number))/2._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L268)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L268)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _Hyperbolic sine of number._
<h2><a name="sinehyperbolicinverse()"># method: sineHyperbolicInverse</a></h2>

```php
public static NumFloat::sineHyperbolicInverse(float $number):float
```











### ### Inverse hyperbolic tangent

_Returns the inverse hyperbolic sine of $number, i.e., the value whose hyperbolic sine is $number._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L286)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L286)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _The inverse hyperbolic sine of number._
<h2><a name="tangent()"># method: tangent</a></h2>

```php
public static NumFloat::tangent(float $number):float
```











### ### Tangent

_Returns the tangent of the num parameter. The num parameter is in radians._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L304)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L304)**</sub>
#### Parameters

* float **$number** - _The argument to process in radians._
#### Returns

* float - _Tangent of number._
<h2><a name="tangentarc()"># method: tangentArc</a></h2>

```php
public static NumFloat::tangentArc(float $number):float
```











### ### Arc tangent

_Returns the arc tangent of num in radians. tangentArc() is the inverse function of tangent(), which means that
$num == tangent(tangentArc($number)) for every value of a that is within tangentArc()'s range._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L323)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L323)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _Arc tangent of num in radians._
<h2><a name="tangentarc2()"># method: tangentArc2</a></h2>

```php
public static NumFloat::tangentArc2(float $x, float $y):float
```











### ### Arc tangent of two variables

_This method calculates the arc tangent of the two variables x and y. It is similar to calculating the arc
tangent of y / x, except that the signs of both arguments are used to determine the quadrant of the result.
The function returns the result in radians, which is between -PI and PI (inclusive)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L346)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L346)**</sub>
#### Parameters

* float **$x** - _Divisor parameter._
* float **$y** - _Dividend parameter._
#### Returns

* float - _Arc tangent of y/x in radians._
<h2><a name="tangenthyperbolic()"># method: tangentHyperbolic</a></h2>

```php
public static NumFloat::tangentHyperbolic(float $number):float
```











### ### Hyperbolic tangent

_Returns the hyperbolic tangent of $number, defined as sineHyperbolic($number)/cosineHyperbolic($number)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L364)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L364)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _Hyperbolic tangent of number._
<h2><a name="tangentinversehyperbolic()"># method: tangentInverseHyperbolic</a></h2>

```php
public static NumFloat::tangentInverseHyperbolic(float $number):float
```











### ### Inverse hyperbolic tangent

_Returns the inverse hyperbolic tangent of $number, i.e., the value whose hyperbolic tangent is $number._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L382)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L382)**</sub>
#### Parameters

* float **$number** - _The argument to process._
#### Returns

* float - _Inverse hyperbolic tangent of $number._
<h2><a name="absolute()"># method: absolute</a></h2>

```php
final public static Num::absolute(float|int $number):mixed
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Absolute value

_Returns the absolute value of $number._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L57)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L57)**</sub>
#### Parameters

* float or int **$number** - _The numeric value to process._
#### Returns

* mixed - _The absolute value of number._
<h2><a name="ceil()"># method: ceil</a></h2>

```php
final public static Num::ceil(float|int $number):int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Round fractions up

_Returns the next highest integer value by rounding up $number if necessary._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L77)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L77)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L97)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L97)**</sub>
#### Parameters

* float or int **$number** - _The value to round down._
#### Returns

* int - _Rounded number up to the next lowest integer._
<h2><a name="round()"># method: round</a></h2>

```php
final public static Num::round(float|int $number, int $precision, \FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP):mixed
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Rounds a float

_Returns the rounded value of $number to specified $precision (number of digits after the decimal point).
$precision can also be negative or zero (default)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L130)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L130)**</sub>
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

* mixed - _Rounded number float._
<h2><a name="log()"># method: log</a></h2>

```php
final public static Num::log(float|int $number, \FireHub\Core\Support\Enums\Number\LogBase|float $base = LogBase::E):float
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Natural logarithm



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L159)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L159)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L175)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L175)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L191)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L191)**</sub>
#### Parameters

* float or int **$number** - _The argument to process._
#### Returns

* float - _The base-10 logarithm of num._
<h2><a name="max()"># method: max</a></h2>

```php
final public static Num::max(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):\FireHub\Core\Support\LowLevel\TInt
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Find highest value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L214)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L214)**</sub>
#### Templates

* TInt of int|float
#### Parameters

* [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$value** - _<code>TInt</code>
Any comparable value._
* variadic [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$values** - _<code>TInt</code>
Any comparable values._
#### Returns

* [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) - _Value considered "highest" according to standard comparisons._
<h2><a name="min()"># method: min</a></h2>

```php
final public static Num::min(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):\FireHub\Core\Support\LowLevel\TInt
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Find lowest value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L237)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L237)**</sub>
#### Templates

* TInt of int|float
#### Parameters

* [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$value** - _<code>TInt</code>
Any comparable value._
* variadic [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) **$values** - _<code>TInt</code>
Any comparable values._
#### Returns

* [\FireHub\Core\Support\LowLevel\TInt](./Wiki-TInt) - _Value considered "lowest" according to standard comparisons._
<h2><a name="power()"># method: power</a></h2>

```php
final public static Num::power(float|int $base, float|int $exponent):float|int
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Exponential expression



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L260)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L260)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L287)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L287)**</sub>
#### Parameters

* int or float **$number** - _The number being formatted._
* int **$decimals**
* string **$decimal_separator** = '.' - _Sets the separator for the decimal point._
* string **$thousands_separator** = ',' - _Sets the separator for thousands._
#### Returns

* string - _A formatted version of number._
<h2><a name="degreestoradian()"># method: degreesToRadian</a></h2>

```php
public static Num::degreesToRadian(int|float $number):float
```











### ### Converts the number in degrees to the radian equivalent



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L308)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L308)**</sub>
#### Parameters

* int or float **$number** - _Angular value in degrees._
#### Returns

* float - _Radian equivalent of number._
<h2><a name="radiantodegrees()"># method: radianToDegrees</a></h2>

```php
public static Num::radianToDegrees(int|float $number):float
```











### ### Converts the radian number to the equivalent number in degrees



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L324)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L324)**</sub>
#### Parameters

* int or float **$number** - _Radian value._
#### Returns

* float - _Equivalent of number in degrees._
<h2><a name="exponent()"># method: exponent</a></h2>

```php
public static Num::exponent(int|float $number):float
```











### ### Calculates the exponent of e



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L342)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L342)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L364)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L364)**</sub>
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

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L387)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L387)**</sub>
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



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L403)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L403)**</sub>
#### Parameters

* int or float **$number** - _The argument to process._
#### Returns

* float - _The square root of num or the special value NAN for negative numbers._