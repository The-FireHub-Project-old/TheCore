```php
final class \FireHub\Core\Support\LowLevel\DateAndTime()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Date and time low-level proxy class

_Class allows you to represent date/time information._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\DateAndTime**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L42)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php)**</sub>


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

<h2><a name="check()"># method: check</a></h2>

```php
public static DateAndTime::check(int $year, int $month, int $day):bool
```













### ### Check for valid date

_Checks the validity of the date formed by the arguments. A date is considered valid if each parameter is
properly defined._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L69)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L69)**</sub>
#### Parameters

* int **$year** - _<code>int<1, 32767></code>
The year is between 1 and 32767 inclusive_
* int **$month** - _<code>int<1, 12></code>
The month is between 1 and 12 inclusive._
* int **$day** - _<code>int<1, 31></code>
The day is within the allowed number of days for the given month. Leap years are taken into consideration._
#### Returns

* bool - _True, if the date given is valid, otherwise returns false._
<h2><a name="parse()"># method: parse</a></h2>

```php
public static DateAndTime::parse(string $datetime):array
```











> [!WARNING]
            The number of array elements in the warnings and errors arrays might be less than warning_count or
error_count if they occurred at the same position.

### ### Returns associative array with detailed info about given date/time

_Method parses the given datetime string according to the same rules as [[DateAndTime#stringToTimestamp()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L94)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L94)**</sub>
#### Parameters

* string **$datetime** - _<code>non-empty-string</code>
String representing the date/time._
#### Returns

* array - _<code>array<string, mixed></code> Associative array with detailed info about given
date/time._
<h2><a name="parsefromformat()"># method: parseFromFormat</a></h2>

```php
public static DateAndTime::parseFromFormat(string $format, string $datetime):array
```











> [!WARNING]
            The number of array elements in the warnings and errors arrays might be less than warning_count or
error_count if they occurred at the same position.

### ### Get info about given date formatted according to the specified format



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L124)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L124)**</sub>
#### Parameters

* string **$format** - _<code>non-empty-string</code>
Format accepted by date with some extras._
* string **$datetime** - _<code>non-empty-string</code>
String representing the date/time._
#### Throws

* [\ValueError](./Wiki-ValueError) - _If $datetime contains NULL-bytes._
#### Returns

* array - _<code>array<string, mixed></code> Associative array with detailed info about a
given date/time._
<h2><a name="format()"># method: format</a></h2>

```php
public static DateAndTime::format(string $format = &#039;Y-m-d H:i:s.u&#039;, null|int $timestamp = null, bool $gmt = false):string
```













### ### Format a Unix timestamp

_Returns a string formatted according to the given format string using the given integer timestamp (Unix
timestamp) or the current time if no timestamp is given. In other words, timestamp is optional and defaults
to the value of [[DateAndTime#time()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L155)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L155)**</sub>
#### Parameters

* string **$format** = 'Y-m-d H:i:s.u' - _[optional] 
The format of the outputted date string._
* null or int **$timestamp** = null - _[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time
if a timestamp is not given._
* bool **$gmt** = false - _[optional] 
Format a GMT/UTC date/time._
#### Returns

* string - _String formatted according to the given format string using the given integer timestamp._
#### Links

* [https://www.php.net/manual/en/datetime.format.php](https://www.php.net/manual/en/datetime.format.php) - _To check valid $format formats._
<h2><a name="formatinteger()"># method: formatInteger</a></h2>

```php
public static DateAndTime::formatInteger(string $format, null|int $timestamp = null):int
```













### ### Format a Unix timestamp as integer

_Returns a formatted number, according to the given format string using the given integer timestamp or the current
local time, if no timestamp is given. In other words, timestamp is optional and defaults to the value of
[[DateAndTime#time()]]._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L186)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L186)**</sub>
#### Parameters

* string **$format** - _<code>'B'|'d'|'h'|'H'|'i'|'I'|'L'|'m'|'s'|'t'|'U'|'w'|'W'|'y'|'Y'|'z'|'Z'</code>
Single format character._
* null or int **$timestamp** = null - _[optional] 
The optional timestamp parameter is an integer Unix timestamp that defaults to the current local time
if a timestamp is not given._
#### Throws

* [\Error](./Wiki-Error) - _If failed to format a Unix timestamp as integer._
#### Returns

* int - _Formatted date as integer._
#### Links

* [https://www.php.net/manual/en/function.idate.phP](https://www.php.net/manual/en/function.idate.phP)
<h2><a name="get()"># method: get</a></h2>

```php
public static DateAndTime::get(null|int $timestamp = null):array
```













### ### Get date/time information



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L225)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L225)**</sub>
#### Parameters

* null or int **$timestamp** = null - _[optional] 
The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp
is omitted or null._
#### Returns

* array - _<code>array<seconds: int<0, 59>, minutes: int<0, 59>, hours: int<0, 23>, mday: int<1,
31>, wday: int<0, 6>, mon: int<1, 12>, year: int, yday: int<0, 365>, weekday:
'Friday'|'Monday'|'Saturday'|'Sunday'|'Thursday'|'Tuesday'|'Wednesday', month:
'April'|'August'|'December'|'February'|'January'|'July'|'June'|'March'|'May'|'November'|'October'|'September',
timestamp: int, dts: mixed></code>
Associative array of information related to the timestamp._
<h2><a name="suninfo()"># method: sunInfo</a></h2>

```php
public static DateAndTime::sunInfo(int $timestamp, float $latitude, float $longitude):array
```













### ### Gets information about sunset/sunrise and twilight begin/end



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L269)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L269)**</sub>
#### Parameters

* int **$timestamp** - _Unix timestamp._
* float **$latitude** - _Latitude in degrees._
* float **$longitude** - _Longitude in degrees._
#### Throws

* [\Error](./Wiki-Error) - _If we could not get information about sunset and twilight._
#### Returns

* array - _<code>array<sunrise: int|bool, sunset: int|bool, transit: int|bool,
civil_twilight_begin: int|bool, civil_twilight_end: int|bool, nautical_twilight_begin: int|bool,
nautical_twilight_end: int|bool, astronomical_twilight_begin: int|bool, astronomical_twilight_end: int|bool>
]]></code> Array with sunset and twilight details._
<h2><a name="stringtotimestamp()"># method: stringToTimestamp</a></h2>

```php
public static DateAndTime::stringToTimestamp(string $datetime, null|int $timestamp = null):int
```











> [!NOTE]
            If the number of the year is specified in a two-digit format, the values between 00-69 are mapped to
2000-2069 and 70-99 to 1970-1999. See the notes below for possible differences on 32bit systems (possible
dates might end on 2038-01-19 03:14:07).> [!NOTE]
            The valid range of a timestamp is typically from Fri, 13 Dec 1901 20:45:54 UTC to Tue, 19 Jan 2038
03:14:07 UTC. (These are the dates that correspond to the minimum and maximum values for a 32-bit signed
integer.). For 64-bit versions of PHP, the valid range of a timestamp is effectively infinite, as 64 bits can
represent approximately 293 billion years in either direction.

### ### Parse about any English textual datetime description into a Unix timestamp

_The method expects to be given a string containing an English date format and will try to parse that format
into a Unix timestamp (the number of seconds since January 1, 1970 00:00:00 UTC), relative to the timestamp
given in baseTimestamp, or the current time if baseTimestamp is not supplied._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L312)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L312)**</sub>
#### Parameters

* string **$datetime** - _<code>non-empty-string</code>
A date/time string._
* null or int **$timestamp** = null - _[optional] 
The timestamp which is used as a base for the calculation of relative dates._
#### Throws

* [\Error](./Wiki-Error) - _If we could not convert string to timestamp._
#### Returns

* int - _A timestamp._
#### Links

* [https://www.php.net/manual/en/datetime.formats.php](https://www.php.net/manual/en/datetime.formats.php) - _To check how to pass $datetime parameter._
<h2><a name="totimestamp()"># method: toTimestamp</a></h2>

```php
public static DateAndTime::toTimestamp(int $hour, null|int $minute = null, null|int $second = null, null|int $year = null, null|int $month = null, null|int $day = null, bool $gmt = false):int
```













### ### Format a Unix timestamp

_Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing
the number of seconds between the Unix Epoch (January, 1 1970 00:00:00 GMT) and the time specified._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L363)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L363)**</sub>
#### Parameters

* int **$hour** - _The number of hours relative to the start of the day is determined by month, day and year. Negative values
reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate
hour in the following day(s)._
* null or int **$minute** = null - _The number of the minute relative to the start of the hour. Negative values reference the minute in the
previous hour. Values greater than reference 59 the appropriate minute in the following hour(s)._
* null or int **$second** = null - _The number of seconds relative to the start of the minute. Negative values reference the second in the
previous minute. Values greater than 59 reference the appropriate second in the following minute(s)._
* null or int **$year** = null - _The year._
* null or int **$month** = null - _The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar
months of the year in question. Values less than 1 (including negative values) reference the months in the
previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the
appropriate month in the following year(s)._
* null or int **$day** = null - _The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon
the month) reference the normal days in the relevant month. Values less than 1 (including negative values)
reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before
that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the
following month(s)._
* bool **$gmt** = false - _[optional] 
Get a GMT/UTC timestamp._
#### Throws

* [\Error](./Wiki-Error) - _If timestamp doesn&#039;t fit in a PHP integer._
#### Returns

* int - _The Unix timestamp of the arguments given._
<h2><a name="time()"># method: time</a></h2>

```php
public static DateAndTime::time():int
```











> [!TIP]
            Timestamp of the start for the request is available in $_SERVER['REQUEST_TIME'].

### ### Return current Unix timestamp

_Returns the current time measured in the number of seconds since the Unix Epoch (January, 1 1970 00:00:00 GMT)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L383)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L383)**</sub>
#### Returns

* int - _The current timestamp._
<h2><a name="microtime()"># method: microtime</a></h2>

```php
public static DateAndTime::microtime():int
```











> [!TIP]
            For performance measurements, using hrtime() is recommended.

### ### Get current Unix microseconds

_Method returns the current Unix timestamp with microseconds. This function is only available on operating
systems that support the gettimeofday() system call._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L405)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTime.php#L405)**</sub>
#### Returns

* int - _Current microseconds._