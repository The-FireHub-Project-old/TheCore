<title># Sort</title>

<code-block lang="php">
<![CDATA[enum Sort]]>
</code-block>













### ### Sorting enum



<deflist>
    <def title="Enum basic info:">
        <list><li>This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Enum Name:">
        \FireHub\Core\Support\Enums\Sort
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L21">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php">
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
|<a href="#by_regular">BY_REGULAR</a>|### Compare items normally|0|
|<a href="#by_numeric">BY_NUMERIC</a>|### Compare items numerically|1|
|<a href="#by_string">BY_STRING</a>|### Compare items as strings|2|
|<a href="#by_locale_string">BY_LOCALE_STRING</a>|### Compare items as strings, based on the current locale|5|
|<a href="#by_natural">BY_NATURAL</a>|### Compare items as strings using "natural ordering" like natsort()|6|
|<a href="#by_string_flag_case">BY_STRING_FLAG_CASE</a>|### Sort strings case-insensitively|10|
|<a href="#by_natural_flag_case">BY_NATURAL_FLAG_CASE</a>|### Sort natural case-insensitively|14|

## case: BY_REGULAR {id="by_regular"}

<code-block lang="php">
<![CDATA[
    BY_REGULAR    ]]>
</code-block>







### ### Compare items normally



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L27">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L27">
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
        <list><li><a href="Arr.md#sort()">\FireHub\Core\Support\LowLevel\Arr::sort()</a>  - <format style="italic">As default parameter.</format></li><li><a href="Arr.md#sortbykey()">\FireHub\Core\Support\LowLevel\Arr::sortByKey()</a>  - <format style="italic">As default parameter.</format></li></list>
    </def>
</deflist>
## case: BY_NUMERIC {id="by_numeric"}

<code-block lang="php">
<![CDATA[
    BY_NUMERIC = 1    ]]>
</code-block>







### ### Compare items numerically



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L33">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BY_STRING {id="by_string"}

<code-block lang="php">
<![CDATA[
    BY_STRING = 2    ]]>
</code-block>







### ### Compare items as strings



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L39">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BY_LOCALE_STRING {id="by_locale_string"}

<code-block lang="php">
<![CDATA[
    BY_LOCALE_STRING = 5    ]]>
</code-block>







### ### Compare items as strings, based on the current locale



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L45">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L45">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BY_NATURAL {id="by_natural"}

<code-block lang="php">
<![CDATA[
    BY_NATURAL = 6    ]]>
</code-block>







### ### Compare items as strings using "natural ordering" like natsort()



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L51">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L51">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BY_STRING_FLAG_CASE {id="by_string_flag_case"}

<code-block lang="php">
<![CDATA[
    BY_STRING_FLAG_CASE = 10    ]]>
</code-block>







### ### Sort strings case-insensitively



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L57">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## case: BY_NATURAL_FLAG_CASE {id="by_natural_flag_case"}

<code-block lang="php">
<![CDATA[
    BY_NATURAL_FLAG_CASE = 14    ]]>
</code-block>







### ### Sort natural case-insensitively



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L63">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/firehub.Sort.php#L63">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>