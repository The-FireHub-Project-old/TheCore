<title># NumInt</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\NumInt()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Integer number low-level proxy class

<p><format style="italic">An int is a number of the set Z = {..., -2, -1, 0, 1, 2, ...}.
Int can be specified in decimal (base 10), hexadecimal (base 16), octal (base 8) or binary (base 2) notation.
The negation operator can be used to denote a negative int.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\NumInt
    </def><def title="Parent class:">
        <a href="Num.md">\FireHub\Core\Support\LowLevel\Num</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php#L30">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


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
|inherited public static |<a href="#degreestoradian()">degreesToRadian</a>|### Converts the number in degrees to the radian equivalent|
|inherited public static |<a href="#radiantodegrees()">radianToDegrees</a>|### Converts the radian number to the equivalent number in degrees|
|inherited public static |<a href="#exponent()">exponent</a>|### Calculates the exponent of e|
|inherited public static |<a href="#exponent1()">exponent1</a>|### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero|
|inherited public static |<a href="#hypotenuselength()">hypotenuseLength</a>|### Calculate the length of the hypotenuse of a right-angle triangle|
|inherited public static |<a href="#squareroot()">squareRoot</a>|### Square root|

## method: divide {id="divide()"}

<code-block lang="php">
    <![CDATA[public static NumInt::divide(int $dividend, int $divisor):int]]>
</code-block>













### ### Integer division



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php#L48">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumInt.php#L48">
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
        <list><li>int <format style="bold">$dividend</format> - <format style="italic">
Number to be divided.
</format></li><li>int <format style="bold">$divisor</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="ArithmeticError.md">\ArithmeticError</a> - <format style="italic">If the $dividend is PHP_INT_MIN and the $divisor is -1.</format></li><li><a href="DivisionByZeroError.md">\DivisionByZeroError</a> - <format style="italic">If $divisor is 0.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The integer quotient of the division of $dividend by $divisor.</format></li></list>
    </def>
</deflist>
## method: absolute {id="absolute()"}

<code-block lang="php">
    <![CDATA[final public static Num::absolute(float|int $number):mixed]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Absolute value

<p><format style="italic">Returns the absolute value of $number.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L57">
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
        <list><li>float or int <format style="bold">$number</format> - <format style="italic">
The numeric value to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">The absolute value of number.</format></li></list>
    </def>
</deflist>
## method: ceil {id="ceil()"}

<code-block lang="php">
    <![CDATA[final public static Num::ceil(float|int $number):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Round fractions up

<p><format style="italic">Returns the next highest integer value by rounding up $number if necessary.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L77">
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
        <list><li><a href="NumFloat.md#round()">\FireHub\Core\Support\LowLevel\NumFloat::round()</a>  - <format style="italic">To round $number parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>float or int <format style="bold">$number</format> - <format style="italic">
The value to round up.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">Rounded number up to the next highest integer.</format></li></list>
    </def>
</deflist>
## method: floor {id="floor()"}

<code-block lang="php">
    <![CDATA[final public static Num::floor(float|int $number):int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Round fractions down

<p><format style="italic">Returns the next lowest integer value (as float) by rounding down $number if necessary.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L97">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L97">
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
        <list><li><a href="NumFloat.md#round()">\FireHub\Core\Support\LowLevel\NumFloat::round()</a>  - <format style="italic">To round $number parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>float or int <format style="bold">$number</format> - <format style="italic">
The value to round down.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">Rounded number up to the next lowest integer.</format></li></list>
    </def>
</deflist>
## method: round {id="round()"}

<code-block lang="php">
    <![CDATA[final public static Num::round(float|int $number, int $precision, \FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP):mixed]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Rounds a float

<p><format style="italic">Returns the rounded value of $number to specified $precision (number of digits after the decimal point).
$precision can also be negative or zero (default).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L130">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L130">
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
        <list><li><a href="Round.md#half_up">\FireHub\Core\Support\Enums\Number\Round::HALF_UP</a>  - <format style="italic">Round number enum.</format></li><li><a href="Round.md#half_down">\FireHub\Core\Support\Enums\Number\Round::HALF_DOWN</a>  - <format style="italic">Round number enum.</format></li><li><a href="Round.md#half_even">\FireHub\Core\Support\Enums\Number\Round::HALF_EVEN</a>  - <format style="italic">Round number enum.</format></li><li><a href="Round.md#half_odd">\FireHub\Core\Support\Enums\Number\Round::HALF_ODD</a>  - <format style="italic">Round number enum.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>float or int <format style="bold">$number</format> - <format style="italic">
The value to round.
</format></li><li>int <format style="bold">$precision</format> - <format style="italic">[optional] 
Number of decimal digits to round to. If the precision is positive, num is rounded to precision significant
digits after the decimal point. If the precision is negative, num is rounded to precision significant digits
before the decimal point, i.e., to the nearest multiple of pow(10, -$precision), e.g. for a precision of -1
num is rounded to tens, for a precision of -2 to hundreds, etc.
</format></li><li><a href="Round.md">\FireHub\Core\Support\Enums\Number\Round</a> <format style="bold">$round</format> = Round::HALF_UP - <format style="italic">[optional] 
Specify the mode in which rounding occurs.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Rounded number float.</format></li></list>
    </def>
</deflist>
## method: log {id="log()"}

<code-block lang="php">
    <![CDATA[final public static Num::log(float|int $number, \FireHub\Core\Support\Enums\Number\LogBase|float $base = LogBase::E):float]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Natural logarithm



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L159">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L159">
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
        <list><li><a href="LogBase.md#e">\FireHub\Core\Support\Enums\Number\LogBase::E</a>  - <format style="italic">As default parameter.</format></li><li><a href="LogBase.md#value()">\FireHub\Core\Support\Enums\Number\LogBase::value()</a>  - <format style="italic">To get log value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>float or int <format style="bold">$number</format> - <format style="italic">
The value to calculate the logarithm for.
</format></li><li><a href="LogBase.md">\FireHub\Core\Support\Enums\Number\LogBase</a> or float <format style="bold">$base</format> = LogBase::E - <format style="italic">[optional] 
The optional logarithmic base to use (defaults to 'e' and so to the natural logarithm).
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The logarithm of $number to $base, if given, or the natural logarithm.</format></li></list>
    </def>
</deflist>
## method: log1p {id="log1p()"}

<code-block lang="php">
    <![CDATA[final public static Num::log1p(float|int $number):float]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L175">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L175">
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
        <list><li>float or int <format style="bold">$number</format> - <format style="italic">
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">log(1 + num).</format></li></list>
    </def>
</deflist>
## method: log10 {id="log10()"}

<code-block lang="php">
    <![CDATA[final public static Num::log10(float|int $number):float]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Base-10 logarithm



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L191">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L191">
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
        <list><li>float or int <format style="bold">$number</format> - <format style="italic">
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The base-10 logarithm of num.</format></li></list>
    </def>
</deflist>
## method: max {id="max()"}

<code-block lang="php">
    <![CDATA[final public static Num::max(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):\FireHub\Core\Support\LowLevel\TInt]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Find highest value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L214">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L214">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has templates:">
        <list><li>TInt of int|float</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="TInt.md">\FireHub\Core\Support\LowLevel\TInt</a> <format style="bold">$value</format> - <format style="italic">
<code>TInt</code>
Any comparable value.
</format></li><li>variadic <a href="TInt.md">\FireHub\Core\Support\LowLevel\TInt</a> <format style="bold">$values</format> - <format style="italic">
<code>TInt</code>
Any comparable values.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TInt.md">\FireHub\Core\Support\LowLevel\TInt</a> - <format style="italic">Value considered "highest" according to standard comparisons.</format></li></list>
    </def>
</deflist>
## method: min {id="min()"}

<code-block lang="php">
    <![CDATA[final public static Num::min(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):\FireHub\Core\Support\LowLevel\TInt]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Find lowest value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L237">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L237">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has templates:">
        <list><li>TInt of int|float</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="TInt.md">\FireHub\Core\Support\LowLevel\TInt</a> <format style="bold">$value</format> - <format style="italic">
<code>TInt</code>
Any comparable value.
</format></li><li>variadic <a href="TInt.md">\FireHub\Core\Support\LowLevel\TInt</a> <format style="bold">$values</format> - <format style="italic">
<code>TInt</code>
Any comparable values.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TInt.md">\FireHub\Core\Support\LowLevel\TInt</a> - <format style="italic">Value considered "lowest" according to standard comparisons.</format></li></list>
    </def>
</deflist>
## method: power {id="power()"}

<code-block lang="php">
    <![CDATA[final public static Num::power(float|int $base, float|int $exponent):float|int]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Exponential expression



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L260">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L260">
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
        <list><li>float or int <format style="bold">$base</format> - <format style="italic">
The base to use.
</format></li><li>float or int <format style="bold">$exponent</format> - <format style="italic">
The exponent.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float or int - <format style="italic">Base raised to the power of exponent. If both arguments are non-negative integers and the
result can be represented as an integer, the result will be returned with an int type, otherwise it will be
returned as a float.</format></li></list>
    </def>
</deflist>
## method: format {id="format()"}

<code-block lang="php">
    <![CDATA[final public static Num::format(int|float $number, int $decimals, string $decimal_separator = &#039;.&#039;, string $thousands_separator = &#039;,&#039;):string]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Format a number with grouped thousands

<p><format style="italic">Formats a number with grouped thousands and optionally decimal digits using the rounding half up rule.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L287">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L287">
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
        <list><li>int or float <format style="bold">$number</format> - <format style="italic">
The number being formatted.
</format></li><li>int <format style="bold">$decimals</format></li><li>string <format style="bold">$decimal_separator</format> = '.' - <format style="italic">
Sets the separator for the decimal point.
</format></li><li>string <format style="bold">$thousands_separator</format> = ',' - <format style="italic">
Sets the separator for thousands.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">A formatted version of number.</format></li></list>
    </def>
</deflist>
## method: degreesToRadian {id="degreestoradian()"}

<code-block lang="php">
    <![CDATA[public static Num::degreesToRadian(int|float $number):float]]>
</code-block>













### ### Converts the number in degrees to the radian equivalent



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L308">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L308">
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
        <list><li>int or float <format style="bold">$number</format> - <format style="italic">
Angular value in degrees.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Radian equivalent of number.</format></li></list>
    </def>
</deflist>
## method: radianToDegrees {id="radiantodegrees()"}

<code-block lang="php">
    <![CDATA[public static Num::radianToDegrees(int|float $number):float]]>
</code-block>













### ### Converts the radian number to the equivalent number in degrees



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L324">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L324">
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
        <list><li>int or float <format style="bold">$number</format> - <format style="italic">
Radian value.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Equivalent of number in degrees.</format></li></list>
    </def>
</deflist>
## method: exponent {id="exponent()"}

<code-block lang="php">
    <![CDATA[public static Num::exponent(int|float $number):float]]>
</code-block>













### ### Calculates the exponent of e



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L342">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L342">
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
        <list><li>int or float <format style="bold">$number</format> - <format style="italic">
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">'e' raised to the power of number.</format></li></list>
    </def>
</deflist>
## method: exponent1 {id="exponent1()"}

<code-block lang="php">
    <![CDATA[public static Num::exponent1(int|float $number):float]]>
</code-block>













### ### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero

<p><format style="italic">Method returns the equivalent to 'exp(num) - 1' computed in a way that is accurate even if the value of num is
near zero, a case where 'exp (num) - 1' would be inaccurate due to subtraction of two numbers that are nearly
equal.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L364">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L364">
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
        <list><li>int or float <format style="bold">$number</format> - <format style="italic">
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">'e' raised to the power of number.</format></li></list>
    </def>
</deflist>
## method: hypotenuseLength {id="hypotenuselength()"}

<code-block lang="php">
    <![CDATA[public static Num::hypotenuseLength(int|float $x, int|float $y):float]]>
</code-block>













### ### Calculate the length of the hypotenuse of a right-angle triangle

<p><format style="italic">Method returns the length of the hypotenuse of a right-angle triangle with sides of length x and y, or the
distance of the point (x, y) from the origin.
This is equivalent to sqrt($x*$x + $y*$y).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L387">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L387">
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
        <list><li>int or float <format style="bold">$x</format> - <format style="italic">
Length of the first side.
</format></li><li>int or float <format style="bold">$y</format> - <format style="italic">
Length of the second side.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Calculated length of the hypotenuse.</format></li></list>
    </def>
</deflist>
## method: squareRoot {id="squareroot()"}

<code-block lang="php">
    <![CDATA[public static Num::squareRoot(int|float $number):float]]>
</code-block>













### ### Square root



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L403">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L403">
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
        <list><li>int or float <format style="bold">$number</format> - <format style="italic">
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The square root of num or the special value NAN for negative numbers.</format></li></list>
    </def>
</deflist>