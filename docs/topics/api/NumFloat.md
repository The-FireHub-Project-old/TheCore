<title># NumFloat</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\NumFloat()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Float number low-level proxy class

<p><format style="italic">Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the
following syntax's: 1.234, 1.2e3, 7E-10, 1_234.567.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\NumFloat
    </def><def title="Parent class:">
        <a href="Num.md">\FireHub\Core\Support\LowLevel\Num</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L50">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php">
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
|public static |<a href="#degreestoradian()">degreesToRadian</a>|### Converts the number in degrees to the radian equivalent|
|public static |<a href="#radiantodegrees()">radianToDegrees</a>|### Converts the radian number to the equivalent number in degrees|
|public static |<a href="#exponent()">exponent</a>|### Calculates the exponent of e|
|public static |<a href="#exponent1()">exponent1</a>|### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero|
|public static |<a href="#hypotenuselength()">hypotenuseLength</a>|### Calculate the length of the hypotenuse of a right-angle triangle|
|public static |<a href="#squareroot()">squareRoot</a>|### Square root|
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

## method: isFinite {id="isfinite()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::isFinite(float $number):bool]]>
</code-block>













### ### Finds whether a value is a legal finite number

<p><format style="italic">Checks whether $number is legally finite on this platform.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L65">
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
The value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if number is a legal finite number within the allowed range for a PHP float on this platform,
false otherwise.</format></li></list>
    </def>
</deflist>
## method: isInfinite {id="isinfinite()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::isInfinite(float $number):bool]]>
</code-block>













### ### Finds whether a value is infinite

<p><format style="italic">Returns true if num is infinite (positive or negative), like the result of log(0) or any value too big to fit
into a float on this platform.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L84">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L84">
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
The value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the number is infinite, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isNan {id="isnan()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::isNan(float $number):bool]]>
</code-block>













### ### Finds whether a value is not a number

<p><format style="italic">Checks whether num is 'not a number', like the result of acos(1.01).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L102">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L102">
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
Value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if number is 'not a number', false otherwise.</format></li></list>
    </def>
</deflist>
## method: divide {id="divide()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::divide(float $dividend, float $divisor):float]]>
</code-block>













### ### Divides two numbers, according to IEEE 754

<p><format style="italic">Returns the floating point result of dividing the num1 by the num2. If the num2 is zero, then one of INF,
-INF, or NAN will be returned.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L124">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L124">
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
        <list><li>float <format style="bold">$dividend</format> - <format style="italic">
Number to be divided.
</format></li><li>float <format style="bold">$divisor</format> - <format style="italic">
Number which divides the $dividend.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The floating point result of the division of $dividend by $divisor.</format></li></list>
    </def>
</deflist>
## method: remainder {id="remainder()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::remainder(float $dividend, float $divisor):float]]>
</code-block>













### ### Get the floating point remainder (modulo) of the division of the arguments

<p><format style="italic">Returns the floating point remainder of dividing the dividend ($dividend) by the divisor ($divisor). The
remainder (r) is defined as: $dividend = i * $divisor + r, for some integer i. If $divisor is non-zero, r has
the same sign as $dividend and a magnitude less than the magnitude of $divisor.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L147">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L147">
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
        <list><li>float <format style="bold">$dividend</format> - <format style="italic">
The dividend.
</format></li><li>float <format style="bold">$divisor</format> - <format style="italic">
The divisor.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The floating point remainder (modulo) of the division for the arguments.</format></li></list>
    </def>
</deflist>
## method: cosine {id="cosine()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::cosine(float $number):float]]>
</code-block>













### ### Cosine

<p><format style="italic">Method returns the cosine of the $number parameter. The $number parameter is in radians.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L165">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L165">
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
An angle in radians.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The cosine of angle.</format></li></list>
    </def>
</deflist>
## method: cosineArc {id="cosinearc()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::cosineArc(float $number):float]]>
</code-block>













### ### Arc cosine

<p><format style="italic">Returns the arc cosine of num in radians. cosineArc() is the inverse function of cosine(), which means that
$number == cosine(cosineArc($number)) for every value of a that is within cosineArc() range.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L184">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L184">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The arc cosine of number in radians.</format></li></list>
    </def>
</deflist>
## method: cosineHyperbolic {id="cosinehyperbolic()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::cosineHyperbolic(float $number):float]]>
</code-block>













### ### Hyperbolic cosine

<p><format style="italic">Returns the hyperbolic cosine of $number, defined as (exponent($number) + exponent(-$number))/2.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L202">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L202">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Hyperbolic cosine of number.</format></li></list>
    </def>
</deflist>
## method: cosineInverseHyperbolic {id="cosineinversehyperbolic()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::cosineInverseHyperbolic(float $number):float]]>
</code-block>













### ### Inverse hyperbolic cosine

<p><format style="italic">Returns the inverse hyperbolic cosine of $number, i.e., the value whose hyperbolic cosine is $number.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L220">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L220">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Inverse hyperbolic cosine of number.</format></li></list>
    </def>
</deflist>
## method: sine {id="sine()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::sine(float $number):float]]>
</code-block>













### ### Sine

<p><format style="italic">Method returns the sine of the num parameter. The num parameter is in radians.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L238">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L238">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Sine of number.</format></li></list>
    </def>
</deflist>
## method: sineArc {id="sinearc()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::sineArc(float $number):float]]>
</code-block>













### ### Arc sine

<p><format style="italic">Returns the arc sine of $number in radians. sineArc() is the inverse function of sine(), which means that
$num == sine(sineArc($number)) for every value of a that is within sineArc()'s range.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L257">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L257">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The arc sine of number in radians.</format></li></list>
    </def>
</deflist>
## method: sineHyperbolic {id="sinehyperbolic()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::sineHyperbolic(float $number):float]]>
</code-block>













### ### Hyperbolic sine

<p><format style="italic">Returns the hyperbolic sine of num, defined as (exponent($number) - exponent(-$number))/2.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L275">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L275">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Hyperbolic sine of number.</format></li></list>
    </def>
</deflist>
## method: sineHyperbolicInverse {id="sinehyperbolicinverse()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::sineHyperbolicInverse(float $number):float]]>
</code-block>













### ### Inverse hyperbolic tangent

<p><format style="italic">Returns the inverse hyperbolic sine of $number, i.e., the value whose hyperbolic sine is $number.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L293">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L293">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The inverse hyperbolic sine of number.</format></li></list>
    </def>
</deflist>
## method: tangent {id="tangent()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::tangent(float $number):float]]>
</code-block>













### ### Tangent

<p><format style="italic">Returns the tangent of the num parameter. The num parameter is in radians.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L311">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L311">
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
The argument to process in radians.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Tangent of number.</format></li></list>
    </def>
</deflist>
## method: tangentArc {id="tangentarc()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::tangentArc(float $number):float]]>
</code-block>













### ### Arc tangent

<p><format style="italic">Returns the arc tangent of num in radians. tangentArc() is the inverse function of tangent(), which means that
$num == tangent(tangentArc($number)) for every value of a that is within tangentArc()'s range.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L330">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L330">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Arc tangent of num in radians.</format></li></list>
    </def>
</deflist>
## method: tangentArc2 {id="tangentarc2()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::tangentArc2(float $x, float $y):float]]>
</code-block>













### ### Arc tangent of two variables

<p><format style="italic">This method calculates the arc tangent of the two variables x and y. It is similar to calculating the arc
tangent of y / x, except that the signs of both arguments are used to determine the quadrant of the result.
The function returns the result in radians, which is between -PI and PI (inclusive).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L353">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L353">
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
        <list><li>float <format style="bold">$x</format> - <format style="italic">
Divisor parameter.
</format></li><li>float <format style="bold">$y</format> - <format style="italic">
Dividend parameter.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Arc tangent of y/x in radians.</format></li></list>
    </def>
</deflist>
## method: tangentHyperbolic {id="tangenthyperbolic()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::tangentHyperbolic(float $number):float]]>
</code-block>













### ### Hyperbolic tangent

<p><format style="italic">Returns the hyperbolic tangent of $number, defined as sineHyperbolic($number)/cosineHyperbolic($number).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L371">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L371">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Hyperbolic tangent of number.</format></li></list>
    </def>
</deflist>
## method: tangentInverseHyperbolic {id="tangentinversehyperbolic()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::tangentInverseHyperbolic(float $number):float]]>
</code-block>













### ### Inverse hyperbolic tangent

<p><format style="italic">Returns the inverse hyperbolic tangent of $number, i.e., the value whose hyperbolic tangent is $number.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L389">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L389">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Inverse hyperbolic tangent of $number.</format></li></list>
    </def>
</deflist>
## method: degreesToRadian {id="degreestoradian()"}

<code-block lang="php">
    <![CDATA[public static NumFloat::degreesToRadian(float $number):float]]>
</code-block>













### ### Converts the number in degrees to the radian equivalent



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L405">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L405">
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
    <![CDATA[public static NumFloat::radianToDegrees(float $number):float]]>
</code-block>













### ### Converts the radian number to the equivalent number in degrees



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L421">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L421">
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
    <![CDATA[public static NumFloat::exponent(float $number):float]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>'e' is the base of the natural system of logarithms, or approximately 2.718282.</p>
            </note>

### ### Calculates the exponent of e



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L439">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L439">
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
    <![CDATA[public static NumFloat::exponent1(float $number):float]]>
</code-block>











<note>
                <p><format style="bold">Note:</format></p>
                <p>'e' to the power of num minus one.</p>
            </note>

### ### Returns exp($number) - 1, computed in a way that is accurate even when the value of number is close to zero

<p><format style="italic">Method returns the equivalent to 'exp(num) - 1' computed in a way that is accurate even if the value of num is
near zero, a case where 'exp (num) - 1' would be inaccurate due to subtraction of two numbers that are nearly
equal.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L461">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L461">
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
    <![CDATA[public static NumFloat::hypotenuseLength(float $x, float $y):float]]>
</code-block>













### ### Calculate the length of the hypotenuse of a right-angle triangle

<p><format style="italic">Method returns the length of the hypotenuse of a right-angle triangle with sides of length x and y, or the
distance of the point (x, y) from the origin. This is equivalent to sqrt($x*$x + $y*$y).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L483">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L483">
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
        <list><li>float <format style="bold">$x</format> - <format style="italic">
Length of the first side.
</format></li><li>float <format style="bold">$y</format> - <format style="italic">
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
    <![CDATA[public static NumFloat::squareRoot(float $number):float]]>
</code-block>













### ### Square root



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L499">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.NumFloat.php#L499">
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
The argument to process.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">The square root of num or the special value NAN for negative numbers.</format></li></list>
    </def>
</deflist>
## method: absolute {id="absolute()"}

<code-block lang="php">
    <![CDATA[final public static Num::absolute(float|int $number):int|float]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Absolute value

<p><format style="italic">Returns the absolute value of $number.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L55">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L55">
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
        <list><li>int or float - <format style="italic"><code>($number is int ? int : float)</code> The absolute value of number.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L75">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L75">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L95">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L95">
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
    <![CDATA[final public static Num::round(float|int $number, int $precision, \FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP):float|int]]>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L129">
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
        <list><li>float or int - <format style="italic"><code>($precision is positive-int ? float : int)</code> Rounded number float.</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L158">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L158">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L174">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L174">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L190">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L190">
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
    <![CDATA[final public static Num::max(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):int|float]]>
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
        <list><li>int or float - <format style="italic"><code>TInt</code> Value considered "highest" according to standard comparisons.</format></li></list>
    </def>
</deflist>
## method: min {id="min()"}

<code-block lang="php">
    <![CDATA[final public static Num::min(\FireHub\Core\Support\LowLevel\TInt $value, \FireHub\Core\Support\LowLevel\TInt ...$values):int|float]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Find lowest value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L238">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L238">
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
        <list><li>int or float - <format style="italic"><code>TInt</code> Value considered "lowest" according to standard comparisons.</format></li></list>
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





<note>
                <p><format style="bold">Note:</format></p>
                <p>It is possible to use the ** operator instead.</p>
            </note>

### ### Exponential expression



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L261">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L261">
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L290">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Num.php#L290">
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
</format></li><li>int <format style="bold">$decimals</format> - <format style="italic">
<code>non-negative-int</code>
Sets the number of decimal digits. If 0, the decimal_separator is omitted from the return value.
</format></li><li>string <format style="bold">$decimal_separator</format> = '.' - <format style="italic">
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