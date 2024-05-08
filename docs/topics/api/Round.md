<title># Round</title>

<code-block lang="php">
<![CDATA[enum Round]]>
</code-block>













### ### Enum for rounding number options



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\Number\Round
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#half_up">HALF_UP</a>|### Rounds number away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2||
|<a href="#half_down">HALF_DOWN</a>|### Rounds number towards zero when it is halfway there, making 1.5 into 1 and -1.5 into -1||
|<a href="#half_even">HALF_EVEN</a>|### Rounds towards the nearest even value when it is halfway there, making both 1.5 and 2.5 into 2||
|<a href="#half_odd">HALF_ODD</a>|### Rounds number towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3||

## case: HALF_UP {id="half_up"}

<code-block lang="php">
<![CDATA[
    HALF_UP    ]]>
</code-block>







### ### Rounds number away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L27">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L27">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Numbers.md#round()">\FireHub\Core\Support\Contracts\HighLevel\Numbers::round()</a>  - <format style="italic">As default rounding.</format></li><li><a href="Numbers.md#asint()">\FireHub\Core\Support\Contracts\HighLevel\Numbers::asInt()</a>  - <format style="italic">As default rounding.</format></li><li><a href="Number.md#round()">\FireHub\Core\Support\Number::round()</a>  - <format style="italic">As default rounding.</format></li><li><a href="Number.md#asint()">\FireHub\Core\Support\Number::asInt()</a>  - <format style="italic">As default rounding.</format></li><li><a href="Num.md#round()">\FireHub\Core\Support\LowLevel\Num::round()</a>  - <format style="italic">Round number enum.</format></li></list>
    </def>
</deflist>
## case: HALF_DOWN {id="half_down"}

<code-block lang="php">
<![CDATA[
    HALF_DOWN    ]]>
</code-block>







### ### Rounds number towards zero when it is halfway there, making 1.5 into 1 and -1.5 into -1



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L33">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Num.md#round()">\FireHub\Core\Support\LowLevel\Num::round()</a>  - <format style="italic">Round number enum.</format></li></list>
    </def>
</deflist>
## case: HALF_EVEN {id="half_even"}

<code-block lang="php">
<![CDATA[
    HALF_EVEN    ]]>
</code-block>







### ### Rounds towards the nearest even value when it is halfway there, making both 1.5 and 2.5 into 2



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L39">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Num.md#round()">\FireHub\Core\Support\LowLevel\Num::round()</a>  - <format style="italic">Round number enum.</format></li></list>
    </def>
</deflist>
## case: HALF_ODD {id="half_odd"}

<code-block lang="php">
<![CDATA[
    HALF_ODD    ]]>
</code-block>







### ### Rounds number towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L45">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L45">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This case is used by:">
        <list><li><a href="Num.md#round()">\FireHub\Core\Support\LowLevel\Num::round()</a>  - <format style="italic">Round number enum.</format></li></list>
    </def>
</deflist>