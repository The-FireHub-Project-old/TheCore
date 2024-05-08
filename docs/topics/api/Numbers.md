<title># Numbers</title>

<code-block lang="php">
<![CDATA[interface Numbers]]>
</code-block>













### ### Numbers contract



<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\HighLevel\Numbers
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L24">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php">
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
|inherited public|<a href="#__tostring()">__toString</a>|### Gets a string representation of the object|

## method: isPositive {id="ispositive()"}

<code-block lang="php">
    <![CDATA[public Numbers::isPositive():bool]]>
</code-block>













### ### Check if number is positive



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L32">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L32">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the number is positive, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isNegative {id="isnegative()"}

<code-block lang="php">
    <![CDATA[public Numbers::isNegative():bool]]>
</code-block>













### ### Check if number is negative



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L40">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L40">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the number is negative, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isFinite {id="isfinite()"}

<code-block lang="php">
    <![CDATA[public Numbers::isFinite():bool]]>
</code-block>













### ### Finds whether a value is a legal finite number

<p><format style="italic">Checks whether $number is legally finite on this platform.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L50">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L50">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the number is a legal finite number, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isInfinite {id="isinfinite()"}

<code-block lang="php">
    <![CDATA[public Numbers::isInfinite():bool]]>
</code-block>













### ### Finds whether a value is infinite

<p><format style="italic">Returns true if num is infinite (positive or negative), like the result of log(0) or any value too big to fit
into a float on this platform.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L61">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L61">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the number is infinite, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isNan {id="isnan()"}

<code-block lang="php">
    <![CDATA[public Numbers::isNan():bool]]>
</code-block>













### ### Finds whether a value is not a number

<p><format style="italic">Checks whether num is 'not a number', like the result of acos(1.01).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L71">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L71">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the number is not a number, false otherwise.</format></li></list>
    </def>
</deflist>
## method: toPositive {id="topositive()"}

<code-block lang="php">
    <![CDATA[public Numbers::toPositive():$this]]>
</code-block>













### ### Make sure the number is positive



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L79">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L79">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This number.</format></li></list>
    </def>
</deflist>
## method: toNegative {id="tonegative()"}

<code-block lang="php">
    <![CDATA[public Numbers::toNegative():$this]]>
</code-block>













### ### Make sure the number is negative



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L87">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L87">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This number.</format></li></list>
    </def>
</deflist>
## method: absolute {id="absolute()"}

<code-block lang="php">
    <![CDATA[public Numbers::absolute():$this]]>
</code-block>













### ### Absolute value



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L95">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L95">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This number.</format></li></list>
    </def>
</deflist>
## method: ceil {id="ceil()"}

<code-block lang="php">
    <![CDATA[public Numbers::ceil():$this]]>
</code-block>













### ### Round fractions up

<p><format style="italic">Returns the next highest integer value by rounding up $number if necessary.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L105">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L105">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This number.</format></li></list>
    </def>
</deflist>
## method: floor {id="floor()"}

<code-block lang="php">
    <![CDATA[public Numbers::floor():$this]]>
</code-block>













### ### Round fractions down

<p><format style="italic">Returns the next lowest integer value (as float) by rounding down $number if necessary.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L115">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L115">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This number.</format></li></list>
    </def>
</deflist>
## method: round {id="round()"}

<code-block lang="php">
    <![CDATA[public Numbers::round(int $precision, \FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP):$this]]>
</code-block>













### ### Rounds number



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L135">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L135">
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
        <list><li><a href="Round.md#half_up">\FireHub\Core\Support\Enums\Number\Round::HALF_UP</a>  - <format style="italic">As default rounding.</format></li></list>
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
<deflist>
    <def title="This method returns:">
        <list><li>$this - <format style="italic">This number.</format></li></list>
    </def>
</deflist>
## method: asInt {id="asint()"}

<code-block lang="php">
    <![CDATA[public Numbers::asInt(\FireHub\Core\Support\Enums\Number\Round $round = Round::HALF_UP):int]]>
</code-block>













### ### Get number as raw integer



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L149">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L149">
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
        <list><li><a href="Round.md#half_up">\FireHub\Core\Support\Enums\Number\Round::HALF_UP</a>  - <format style="italic">As default rounding.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Round.md">\FireHub\Core\Support\Enums\Number\Round</a> <format style="bold">$round</format> = Round::HALF_UP - <format style="italic">[optional] 
Specify the mode in which rounding occurs.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">Number as raw integer.</format></li></list>
    </def>
</deflist>
## method: asFloat {id="asfloat()"}

<code-block lang="php">
    <![CDATA[public Numbers::asFloat():float]]>
</code-block>













### ### Get number as raw float



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L157">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L157">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>float - <format style="italic">Number as raw float.</format></li></list>
    </def>
</deflist>
## method: parse {id="parse()"}

<code-block lang="php">
    <![CDATA[public Numbers::parse(int $decimals, string $decimal_separator = &#039;.&#039;, string $thousands_separator = &#039;,&#039;):string]]>
</code-block>













### ### Parse number

<p><format style="italic">Parse a number with grouped thousands and optionally decimal digits using the rounding half up rule.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L178">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Numbers.php#L178">
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
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">A formatted version of number.</format></li></list>
    </def>
</deflist>
## method: __toString {id="__tostring()"}

<code-block lang="php">
    <![CDATA[public Stringable::__toString():string]]>
</code-block>













### ### Gets a string representation of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.Stringable.php#L36">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.Stringable.php#L36">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">The string representation of the object.</format></li></list>
    </def>
</deflist>