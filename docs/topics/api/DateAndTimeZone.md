<title># DateAndTimeZone</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\DateAndTimeZone()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Timezone low-level proxy class

<p><format style="italic">A time zone is an area that observes a uniform standard time for legal, commercial, and social purposes.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\DateAndTimeZone
    </def><def title="Implements:">
        <list><li><a href="InitStatic.md">\FireHub\Core\Base\InitStatic</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="ConcreteStatic.md">\FireHub\Core\Base\Trait\ConcreteStatic</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L33">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php">
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
|public static |<a href="#getdefaulttimezone()">getDefaultTimezone</a>|### Gets the default timezone used by all date/time functions in a script|
|public static |<a href="#setdefaulttimezone()">setDefaultTimezone</a>|### Sets the default timezone used by all date/time functions in a script|
|public static |<a href="#abbreviationlist()">abbreviationList</a>|### Get an associative array containing dst, offset and the timezone name alias|


## method: getDefaultTimezone {id="getdefaulttimezone()"}

<code-block lang="php">
    <![CDATA[public static DateAndTimeZone::getDefaultTimezone():\FireHub\Core\Support\Enums\DateTime\Zone]]>
</code-block>













### ### Gets the default timezone used by all date/time functions in a script

<p><format style="italic">In order of preference, this function returns the default timezone by:
- reading the timezone set using the setDefaultTimezone() method (if any).
- reading the value of the 'date.timezone' ini option (if set).
If none of the above succeeds, [[DateAndTimeZone#getDefaultTimezone()]] will return a default timezone of UTC.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L56">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L56">
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
        <list><li><a href="Zone.md">\FireHub\Core\Support\Enums\DateTime\Zone</a>  - <format style="italic">To check for a valid timezone.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we can&#039;t get the default timezone.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Zone.md">\FireHub\Core\Support\Enums\DateTime\Zone</a> - <format style="italic">Timezone enum.</format></li></list>
    </def>
</deflist>
## method: setDefaultTimezone {id="setdefaulttimezone()"}

<code-block lang="php">
    <![CDATA[public static DateAndTimeZone::setDefaultTimezone(\FireHub\Core\Support\Enums\DateTime\Zone $time_zone):bool]]>
</code-block>













### ### Sets the default timezone used by all date/time functions in a script

<p><format style="italic">Method sets the default timezone used by all date/time functions. Instead of using this function to set the
default timezone in your script, you can also use the INI setting 'date.timezone' to set the default timezone.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L81">
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
        <list><li><a href="Zone.md">\FireHub\Core\Support\Enums\DateTime\Zone</a> <format style="bold">$time_zone</format> - <format style="italic">
The timezone identifier.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to set the default timezone.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">Always true.</format></li></list>
    </def>
</deflist>
## method: abbreviationList {id="abbreviationlist()"}

<code-block lang="php">
    <![CDATA[public static DateAndTimeZone::abbreviationList():array]]>
</code-block>













### ### Get an associative array containing dst, offset and the timezone name alias



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L100">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L100">
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
        <list><li>array - <format style="italic"><code><![CDATA[ array<string, array<int, array{dst: bool, offset: int, timezone_id: string|null}> ]]></code>
List of timezone abbreviations.</format></li></list>
    </def>
</deflist>