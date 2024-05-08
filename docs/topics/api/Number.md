<title># Number</title>

<code-block lang="php">
<![CDATA[class \FireHub\Core\Support\Number()]]>
</code-block>













### ### Number high-level class

<p><format style="italic">Class allows you to manipulate numbers in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Number
    </def><def title="Implements:">
        <list><li><a href="Numbers.md">\FireHub\Core\Support\Contracts\HighLevel\Numbers</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L33">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Number.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


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

## property: number {id="$number"}

<code-block lang="php">
    <![CDATA[protected float $number]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L46">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L46">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Number::__construct(float $number):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L45">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L45">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>float <format style="bold">$number</format> - <format style="italic">
Number to use.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: from {id="from()"}

<code-block lang="php">
    <![CDATA[public static Number::from(float $number):self]]>
</code-block>













### ### Create a new number from raw number



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L66">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L66">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>float <format style="bold">$number</format> - <format style="italic">
Number to use.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>self - <format style="italic">New number.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

Number::from(10);
```

## method: isPositive {id="ispositive()"}

<code-block lang="php">
    <![CDATA[public Number::isPositive()]]>
</code-block>













### ### Check if number is positive



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L86">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L86">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Number.md#tonegative()">\FireHub\Core\Support\Number::toNegative()</a>  - <format style="italic">To check if the number is positive.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

Number::from(12)->isPositive();

// true
```

## method: isNegative {id="isnegative()"}

<code-block lang="php">
    <![CDATA[public Number::isNegative()]]>
</code-block>













### ### Check if number is negative



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L108">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L108">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Number.md#topositive()">\FireHub\Core\Support\Number::toPositive()</a>  - <format style="italic">To check if the number is negative.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

Number::from(12)->isNegative();

// false
```

## method: isFinite {id="isfinite()"}

<code-block lang="php">
    <![CDATA[public Number::isFinite()]]>
</code-block>













### ### Finds whether a value is a legal finite number



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L130">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L130">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="NumFloat.md#isfinite()">\FireHub\Core\Support\LowLevel\NumFloat::isFinite()</a>  - <format style="italic">To find whether a value is a legal finite number.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

Number::from(1e308 * 2)->isFinite();

// false
```

## method: isInfinite {id="isinfinite()"}

<code-block lang="php">
    <![CDATA[public Number::isInfinite()]]>
</code-block>













### ### Finds whether a value is infinite



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L152">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L152">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="NumFloat.md#isinfinite()">\FireHub\Core\Support\LowLevel\NumFloat::isInfinite()</a>  - <format style="italic">To find whether a value is infinite.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

Number::from(1e308 * 2)->isInfinite();

// true
```

## method: isNan {id="isnan()"}

<code-block lang="php">
    <![CDATA[public Number::isNan()]]>
</code-block>













### ### Finds whether a value is not a number



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L174">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L174">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="NumFloat.md#isinfinite()">\FireHub\Core\Support\LowLevel\NumFloat::isInfinite()</a>  - <format style="italic">To find whether a value is not a number.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

Number::from(sqrt(-1))->isNan();

// true
```

## method: toPositive {id="topositive()"}

<code-block lang="php">
    <![CDATA[public Number::toPositive()]]>
</code-block>













### ### Make sure the number is positive



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L196">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L196">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Number.md#isnegative()">\FireHub\Core\Support\Number::isNegative()</a>  - <format style="italic">To check if the number is negative.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

$number = Number::from(-12)->toPositive();

// 12
```

## method: toNegative {id="tonegative()"}

<code-block lang="php">
    <![CDATA[public Number::toNegative()]]>
</code-block>













### ### Make sure the number is negative



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L220">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L220">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Number.md#ispositive()">\FireHub\Core\Support\Number::isPositive()</a>  - <format style="italic">To check if the number is positive.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

$number = Number::from(12)->toNegative();

// -12
```

## method: absolute {id="absolute()"}

<code-block lang="php">
    <![CDATA[public Number::absolute()]]>
</code-block>













### ### Absolute value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L244">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L244">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="NumFloat.md#absolute()">\FireHub\Core\Support\LowLevel\NumFloat::absolute()</a>  - <format style="italic">To get absolute value.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

$number = Number::from(-12)->absolute();

// 12
```

## method: ceil {id="ceil()"}

<code-block lang="php">
    <![CDATA[public Number::ceil()]]>
</code-block>













### ### Round fractions up



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L268">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L268">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="NumFloat.md#ceil()">\FireHub\Core\Support\LowLevel\NumFloat::ceil()</a>  - <format style="italic">To round fractions up.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

$number = Number::from(12.5)->ceil();

// 12
```

## method: floor {id="floor()"}

<code-block lang="php">
    <![CDATA[public Number::floor()]]>
</code-block>













### ### Round fractions down



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L292">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L292">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="NumFloat.md#floor()">\FireHub\Core\Support\LowLevel\NumFloat::floor()</a>  - <format style="italic">To round fractions down.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

$number = Number::from(12.5)->floor();

// 12
```

## method: round {id="round()"}

<code-block lang="php">
    <![CDATA[public Number::round(int $precision, \FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP)]]>
</code-block>













### ### Rounds number



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L334">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L334">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Round.md#half_up">\FireHub\Core\Support\Enums\Number\Round::HALF_UP</a>  - <format style="italic">As default rounding.</format></li><li><a href="NumFloat.md#round()">\FireHub\Core\Support\LowLevel\NumFloat::round()</a>  - <format style="italic">To round the number.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Number.md#asint()">\FireHub\Core\Support\Number::asInt()</a>  - <format style="italic">To round a float.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$precision</format> - <format style="italic">[optional] 
Number of decimal digits to round to. If the precision is positive, num is rounded to precision significant
digits after the decimal point. If the precision is negative, num is rounded to precision significant digits
before the decimal point, i.e., to the nearest multiple of pow(10, -$precision), e.g. for a precision of -1
num is rounded to tens, for a precision of -2 to hundreds, etc.
</format></li><li><a href="Round.md">\FireHub\Core\Support\Enums\Number\Round</a> <format style="bold">$round</format> = Round::HALF_UP - <format style="italic">[optional] 
Specify the mode in which rounding occurs.
</format></li></list>
    </def>
</deflist>
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

## method: asInt {id="asint()"}

<code-block lang="php">
    <![CDATA[public Number::asInt(\FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP)]]>
</code-block>













### ### Get number as raw integer



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L370">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L370">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method uses:">
        <list><li><a href="Round.md#half_up">\FireHub\Core\Support\Enums\Number\Round::HALF_UP</a>  - <format style="italic">As default rounding.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">To set a data type.</format></li><li><a href="Number.md#round()">\FireHub\Core\Support\Number::round()</a>  - <format style="italic">To round a float.</format></li><li><a href="Type.md#t_int">\FireHub\Core\Support\Enums\Data\Type::T_INT</a>  - <format style="italic">As data type.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Round.md">\FireHub\Core\Support\Enums\Number\Round</a> <format style="bold">$round</format> = Round::HALF_UP - <format style="italic">[optional] 
Specify the mode in which rounding occurs.
</format></li></list>
    </def>
</deflist>
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

## method: asFloat {id="asfloat()"}

<code-block lang="php">
    <![CDATA[public Number::asFloat()]]>
</code-block>













### ### Get number as raw float



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L390">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L390">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

Number::from(10)->asInt();

// 10.0
```

## method: parse {id="parse()"}

<code-block lang="php">
    <![CDATA[public Number::parse(int $decimals, string $decimal_separator = &#039;.&#039;, string $thousands_separator = &#039;,&#039;)]]>
</code-block>













### ### Parse number



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L410">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L410">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$decimals</format></li><li>string <format style="bold">$decimal_separator</format> = '.' - <format style="italic">
Sets the separator for the decimal point.
</format></li><li>string <format style="bold">$thousands_separator</format> = ',' - <format style="italic">
Sets the separator for thousands.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

$number = Number::from(1000.54)->parse();

// 1,000.54
```

## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Number::__toString()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Number.php#L435">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Number.php#L435">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Number;

echo Number::from(12);

// 12
```
