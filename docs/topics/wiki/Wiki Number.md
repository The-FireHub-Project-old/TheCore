```php
class \FireHub\Core\Support\Number()
```











### ### Number high-level class

_Class allows you to manipulate numbers in various ways._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\Number**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L33)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Number.php)**</sub>


### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$number">number</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#from()">from</a>|### Create a new number from raw number|
|public|<a href="#ispositive()">isPositive</a>|### Check if number is positive|
|public|<a href="#isnegative()">isNegative</a>|### Check if number is negative|
|public|<a href="#isfinite()">isFinite</a>|### Finds whether a value is a legal finite number|
|public|<a href="#isinfinite()">isInfinite</a>|### Finds whether a value is infinite|
|public|<a href="#isnan()">isNan</a>|### Finds whether a value is not a number|
|public|<a href="#topositive()">toPositive</a>|### Make sure the number is positive|
|public|<a href="#tonegative()">toNegative</a>|### Make sure the number is negative|
|public|<a href="#absolute()">absolute</a>|### Absolute value|
|public|<a href="#ceil()">ceil</a>|### Round fractions up|
|public|<a href="#floor()">floor</a>|### Round fractions down|
|public|<a href="#round()">round</a>|### Rounds number|
|public|<a href="#asint()">asInt</a>|### Get number as raw integer|
|public|<a href="#asfloat()">asFloat</a>|### Get number as raw float|
|public|<a href="#parse()">parse</a>|### Parse number|
|public|<a href="#__tostring()">__toString</a>||

<h2><a name="$number"># property: number</a></h2>

```php
protected float $number
```













><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L46)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L46)**</sub>
<h2><a name="__construct()"># method: __construct</a></h2>

```php
public Number::__construct(float $number):void
```











### ### Constructor



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L45)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L45)**</sub>
#### Parameters

* float **$number** - _Number to use._
#### Returns

* void
<h2><a name="from()"># method: from</a></h2>

```php
public static Number::from(float $number):self
```











### ### Create a new number from raw number



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L66)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L66)**</sub>
#### Parameters

* float **$number** - _Number to use._
#### Returns

* self - _New number._
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(10);
```

<h2><a name="ispositive()"># method: isPositive</a></h2>

```php
public Number::isPositive()
```











### ### Check if number is positive



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L86)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L86)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(12)->isPositive();

// true
```

<h2><a name="isnegative()"># method: isNegative</a></h2>

```php
public Number::isNegative()
```











### ### Check if number is negative



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L108)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L108)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(12)->isNegative();

// false
```

<h2><a name="isfinite()"># method: isFinite</a></h2>

```php
public Number::isFinite()
```











### ### Finds whether a value is a legal finite number



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L130)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L130)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(1e308 * 2)->isFinite();

// false
```

<h2><a name="isinfinite()"># method: isInfinite</a></h2>

```php
public Number::isInfinite()
```











### ### Finds whether a value is infinite



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L152)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L152)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(1e308 * 2)->isInfinite();

// true
```

<h2><a name="isnan()"># method: isNan</a></h2>

```php
public Number::isNan()
```











### ### Finds whether a value is not a number



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L174)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L174)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(sqrt(-1))->isNan();

// true
```

<h2><a name="topositive()"># method: toPositive</a></h2>

```php
public Number::toPositive()
```











### ### Make sure the number is positive



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L196)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L196)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

$number = Number::from(-12)->toPositive();

// 12
```

<h2><a name="tonegative()"># method: toNegative</a></h2>

```php
public Number::toNegative()
```











### ### Make sure the number is negative



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L220)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L220)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

$number = Number::from(12)->toNegative();

// -12
```

<h2><a name="absolute()"># method: absolute</a></h2>

```php
public Number::absolute()
```











### ### Absolute value



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L244)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L244)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

$number = Number::from(-12)->absolute();

// 12
```

<h2><a name="ceil()"># method: ceil</a></h2>

```php
public Number::ceil()
```











### ### Round fractions up



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L268)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L268)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

$number = Number::from(12.5)->ceil();

// 12
```

<h2><a name="floor()"># method: floor</a></h2>

```php
public Number::floor()
```











### ### Round fractions down



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L292)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L292)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

$number = Number::from(12.5)->floor();

// 12
```

<h2><a name="round()"># method: round</a></h2>

```php
public Number::round(int $precision, \FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP)
```











### ### Rounds number



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L334)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L334)**</sub>
#### Parameters

* int **$precision** - _[optional] 
Number of decimal digits to round to. If the precision is positive, num is rounded to precision significant
digits after the decimal point. If the precision is negative, num is rounded to precision significant digits
before the decimal point, i.e., to the nearest multiple of pow(10, -$precision), e.g. for a precision of -1
num is rounded to tens, for a precision of -2 to hundreds, etc._
* [\FireHub\Core\Support\Enums\Number\Round](./Wiki-Round) **$round** = Round::HALF_UP - _[optional] 
Specify the mode in which rounding occurs._
#### Examples
```php
use FireHub\Core\Support\Number;

$number = Number::from(12.5)->round();

// 13
```
Using different round mode.
```php
use FireHub\Core\Support\Number;
use FireHub\Core\Support\Enums\Number\Round;

$number = Number::from(12.5)->round(round: Round::HALF_DOWN);

// 12
```
Using different precision.
```php
use FireHub\Core\Support\Number;

$number = Number::from(12.56)->round(1);

// 12.6
```

<h2><a name="asint()"># method: asInt</a></h2>

```php
public Number::asInt(\FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP)
```











### ### Get number as raw integer



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L370)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L370)**</sub>
#### Parameters

* [\FireHub\Core\Support\Enums\Number\Round](./Wiki-Round) **$round** = Round::HALF_UP - _[optional] 
Specify the mode in which rounding occurs._
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(10.5)->asInt();

// 11
```
```php
use FireHub\Core\Support\Number;
use \FireHub\Core\Support\Enums\Number\Round;

Number::from(10.5)->asInt(Round::HALF_DOWN);

// 10
```

<h2><a name="asfloat()"># method: asFloat</a></h2>

```php
public Number::asFloat()
```











### ### Get number as raw float



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L390)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L390)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

Number::from(10)->asInt();

// 10.0
```

<h2><a name="parse()"># method: parse</a></h2>

```php
public Number::parse(int $decimals, string $decimal_separator = &#039;.&#039;, string $thousands_separator = &#039;,&#039;)
```











### ### Parse number



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L410)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L410)**</sub>
#### Parameters

* int **$decimals**
* string **$decimal_separator** = '.' - _Sets the separator for the decimal point._
* string **$thousands_separator** = ',' - _Sets the separator for thousands._
#### Examples
```php
use FireHub\Core\Support\Number;

$number = Number::from(1000.54)->parse();

// 1,000.54
```

<h2><a name="__tostring()"># method: __toString</a></h2>

```php
public Number::__toString()
```















><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L435)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L435)**</sub>
#### Examples
```php
use FireHub\Core\Support\Number;

echo Number::from(12);

// 12
```
