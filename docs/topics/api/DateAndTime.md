<title># DateAndTime</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\DateAndTime()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Date and time low-level proxy class

<p><format style="italic">Class allows you to represent date/time information.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\DateAndTime
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L42">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php">
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
|public static |<a href="#check()">check</a>|### Check for valid date|
|public static |<a href="#parse()">parse</a>|### Returns associative array with detailed info about given date/time|
|public static |<a href="#parsefromformat()">parseFromFormat</a>|### Get info about given date formatted according to the specified format|
|public static |<a href="#format()">format</a>|### Format a Unix timestamp|
|public static |<a href="#formatinteger()">formatInteger</a>|### Format a Unix timestamp as integer|
|public static |<a href="#get()">get</a>|### Get date/time information|
|public static |<a href="#suninfo()">sunInfo</a>|### Gets information about sunset/sunrise and twilight begin/end|
|public static |<a href="#stringtotimestamp()">stringToTimestamp</a>|### Parse about any English textual datetime description into a Unix timestamp|
|public static |<a href="#totimestamp()">toTimestamp</a>|### Format a Unix timestamp|
|public static |<a href="#time()">time</a>|### Return current Unix timestamp|
|public static |<a href="#microtime()">microtime</a>|### Get current Unix microseconds|

## method: check {id="check()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::check(int $year, int $month, int $day):bool]]>
</code-block>













### ### Check for valid date

<p><format style="italic">Checks the validity of the date formed by the arguments. A date is considered valid if each parameter is
properly defined.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L69">
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
        <list><li>int <format style="bold">$year</format> - <format style="italic">
<code>int<1, 32767></code>
The year is between 1 and 32767 inclusive
</format></li><li>int <format style="bold">$month</format> - <format style="italic">
<code>int<1, 12></code>
The month is between 1 and 12 inclusive.
</format></li><li>int <format style="bold">$day</format> - <format style="italic">
<code>int<1, 31></code>
The day is within the allowed number of days for the given month. Leap years are taken into consideration.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True, if the date given is valid, otherwise returns false.</format></li></list>
    </def>
</deflist>
## method: parse {id="parse()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::parse(string $datetime):array]]>
</code-block>













### ### Returns associative array with detailed info about given date/time

<p><format style="italic">Method parses the given datetime string according to the same rules as [[DateAndTime#stringToTimestamp()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L94">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L94">
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
        <list><li>string <format style="bold">$datetime</format> - <format style="italic">
<code>non-empty-string</code>
String representing the date/time.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<string, mixed> ]]></code> Associative array with detailed info about given
date/time.</format></li></list>
    </def>
</deflist>
## method: parseFromFormat {id="parsefromformat()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::parseFromFormat(string $format, string $datetime):array]]>
</code-block>













### ### Get info about given date formatted according to the specified format



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L124">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L124">
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
        <list><li>string <format style="bold">$format</format> - <format style="italic">
<code>non-empty-string</code>
Format accepted by date with some extras.
</format></li><li>string <format style="bold">$datetime</format> - <format style="italic">
<code>non-empty-string</code>
String representing the date/time.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="ValueError.md">\ValueError</a> - <format style="italic">If $datetime contains NULL-bytes.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<string, mixed> ]]></code> Associative array with detailed info about a
given date/time.</format></li></list>
    </def>
</deflist>
## method: format {id="format()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::format(string $format = &#039;Y-m-d H:i:s.u&#039;, null|int $timestamp = null, bool $gmt = false):string]]>
</code-block>













### ### Format a Unix timestamp

<p><format style="italic">Returns a string formatted according to the given format string using the given integer timestamp (Unix
timestamp) or the current time if no timestamp is given. In other words, timestamp is optional and defaults
to the value of [[DateAndTime#time()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L155">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L155">
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
        <list><li>string <format style="bold">$format</format> = 'Y-m-d H:i:s.u' - <format style="italic">[optional] 
The format of the outputted date string.
</format></li><li>null or int <format style="bold">$timestamp</format> = null - <format style="italic">[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time
if a timestamp is not given.
</format></li><li>bool <format style="bold">$gmt</format> = false - <format style="italic">[optional] 
Format a GMT/UTC date/time.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">String formatted according to the given format string using the given integer timestamp.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="Useful links:">
        <list><li><a href="https://www.php.net/manual/en/datetime.format.php">https://www.php.net/manual/en/datetime.format.php</a> - <format style="italic">To check valid $format formats.</format></li></list>
    </def>
</deflist>
## method: formatInteger {id="formatinteger()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::formatInteger(string $format, null|int $timestamp = null):int]]>
</code-block>













### ### Format a Unix timestamp as integer

<p><format style="italic">Returns a formatted number, according to the given format string using the given integer timestamp or the current
local time, if no timestamp is given. In other words, timestamp is optional and defaults to the value of
[[DateAndTime#time()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L186">
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
        <list><li>string <format style="bold">$format</format> - <format style="italic">
<code>'B'|'d'|'h'|'H'|'i'|'I'|'L'|'m'|'s'|'t'|'U'|'w'|'W'|'y'|'Y'|'z'|'Z'</code>
Single format character.
</format></li><li>null or int <format style="bold">$timestamp</format> = null - <format style="italic">[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time
if a timestamp is not given.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If failed to format a Unix timestamp as integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">Formatted date as integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="Useful links:">
        <list><li><a href="https://www.php.net/manual/en/function.idate.phP">https://www.php.net/manual/en/function.idate.phP</a></li></list>
    </def>
</deflist>
## method: get {id="get()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::get(null|int $timestamp = null):array]]>
</code-block>













### ### Get date/time information



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L226">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L226">
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
        <list><li>null or int <format style="bold">$timestamp</format> = null - <format style="italic">[optional] 
The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp
is omitted or null.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<seconds: int<0, 59>, minutes: int<0, 59>, hours: int<0, 23>, mday: int<1,
31>, wday: int<0, 6>, mon: int<1, 12>, year: int, yday: int<0, 365>, weekday:
'Friday'|'Monday'|'Saturday'|'Sunday'|'Thursday'|'Tuesday'|'Wednesday', month:
'April'|'August'|'December'|'February'|'January'|'July'|'June'|'March'|'May'|'November'|'October'|'September',
timestamp: int, dts: mixed> ]]></code>
Associative array of information related to the timestamp.</format></li></list>
    </def>
</deflist>
## method: sunInfo {id="suninfo()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::sunInfo(int $timestamp, float $latitude, float $longitude):array]]>
</code-block>













### ### Gets information about sunset/sunrise and twilight begin/end



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L270">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L270">
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
        <list><li>int <format style="bold">$timestamp</format> - <format style="italic">
Unix timestamp.
</format></li><li>float <format style="bold">$latitude</format> - <format style="italic">
Latitude in degrees.
</format></li><li>float <format style="bold">$longitude</format> - <format style="italic">
Longitude in degrees.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not get information about sunset and twilight.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<sunrise: int|bool, sunset: int|bool, transit: int|bool,
civil_twilight_begin: int|bool, civil_twilight_end: int|bool, nautical_twilight_begin: int|bool,
nautical_twilight_end: int|bool, astronomical_twilight_begin: int|bool, astronomical_twilight_end: int|bool>
]]></code> Array with sunset and twilight details.</format></li></list>
    </def>
</deflist>
## method: stringToTimestamp {id="stringtotimestamp()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::stringToTimestamp(string $datetime, null|int $timestamp = null):int]]>
</code-block>













### ### Parse about any English textual datetime description into a Unix timestamp

<p><format style="italic">The method expects to be given a string containing an English date format and will try to parse that format
into a Unix timestamp (the number of seconds since January 1, 1970 00:00:00 UTC), relative to the timestamp
given in baseTimestamp, or the current time if baseTimestamp is not supplied.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L313">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L313">
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
        <list><li>string <format style="bold">$datetime</format> - <format style="italic">
<code>non-empty-string</code>
A date/time string.
</format></li><li>null or int <format style="bold">$timestamp</format> = null - <format style="italic">[optional] 
The timestamp which is used as a base for the calculation of relative dates.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If we could not convert string to timestamp.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">A timestamp.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="Useful links:">
        <list><li><a href="https://www.php.net/manual/en/datetime.formats.php">https://www.php.net/manual/en/datetime.formats.php</a> - <format style="italic">To check how to pass $datetime parameter.</format></li></list>
    </def>
</deflist>
## method: toTimestamp {id="totimestamp()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::toTimestamp(int $hour, null|int $minute = null, null|int $second = null, null|int $year = null, null|int $month = null, null|int $day = null, bool $gmt = false):int]]>
</code-block>













### ### Format a Unix timestamp

<p><format style="italic">Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing
the number of seconds between the Unix Epoch (January, 1 1970 00:00:00 GMT) and the time specified.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L364">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L364">
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
        <list><li>int <format style="bold">$hour</format> - <format style="italic">
The number of hours relative to the start of the day is determined by month, day and year. Negative values
reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate
hour in the following day(s).
</format></li><li>null or int <format style="bold">$minute</format> = null - <format style="italic">
The number of the minute relative to the start of the hour. Negative values reference the minute in the
previous hour. Values greater than reference 59 the appropriate minute in the following hour(s).
</format></li><li>null or int <format style="bold">$second</format> = null - <format style="italic">
The number of seconds relative to the start of the minute. Negative values reference the second in the
previous minute. Values greater than 59 reference the appropriate second in the following minute(s).
</format></li><li>null or int <format style="bold">$year</format> = null - <format style="italic">
The year.
</format></li><li>null or int <format style="bold">$month</format> = null - <format style="italic">
The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar
months of the year in question. Values less than 1 (including negative values) reference the months in the
previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the
appropriate month in the following year(s).
</format></li><li>null or int <format style="bold">$day</format> = null - <format style="italic">
The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon
the month) reference the normal days in the relevant month. Values less than 1 (including negative values)
reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before
that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the
following month(s).
</format></li><li>bool <format style="bold">$gmt</format> = false - <format style="italic">[optional] 
Get a GMT/UTC timestamp.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If timestamp doesn&#039;t fit in a PHP integer.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">The Unix timestamp of the arguments given.</format></li></list>
    </def>
</deflist>
## method: time {id="time()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::time():int]]>
</code-block>













### ### Return current Unix timestamp

<p><format style="italic">Returns the current time measured in the number of seconds since the Unix Epoch (January, 1 1970 00:00:00 GMT).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L384">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L384">
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
        <list><li>int - <format style="italic">The current timestamp.</format></li></list>
    </def>
</deflist>
## method: microtime {id="microtime()"}

<code-block lang="php">
    <![CDATA[public static DateAndTime::microtime():int]]>
</code-block>













### ### Get current Unix microseconds

<p><format style="italic">Method returns the current Unix timestamp with microseconds. This function is only available on operating
systems that support the gettimeofday() system call.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L406">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L406">
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
        <list><li><a href="StrSB.md#explode()">\FireHub\Core\Support\LowLevel\StrSB::explode()</a>  - <format style="italic">To split microtime function.</format></li><li><a href="Data.md#settype()">\FireHub\Core\Support\LowLevel\Data::setType()</a>  - <format style="italic">To set microtime to another type.</format></li><li><a href="Type.md#t_int">\FireHub\Core\Support\Enums\Data\Type::T_INT</a>  - <format style="italic">To set microtime as integer.</format></li><li><a href="StrSB.md#part()">\FireHub\Core\Support\LowLevel\StrSB::part()</a>  - <format style="italic">To get part of microtime.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">Current microseconds.</format></li></list>
    </def>
</deflist>