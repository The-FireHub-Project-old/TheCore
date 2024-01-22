```php
final class \FireHub\Core\Support\LowLevel\DateAndTimeZone()
```





> [!IMPORTANT]
This class is marked as **final**.







### ### Timezone low-level proxy class

_A time zone is an area that observes a uniform standard time for legal, commercial and social purposes._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\DateAndTimeZone**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L30)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php)**</sub>


### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public static |<a href="#getdefaulttimezone()">getDefaultTimezone</a>|### Gets the default timezone used by all date/time functions in a script|
|public static |<a href="#setdefaulttimezone()">setDefaultTimezone</a>|### Sets the default timezone used by all date/time functions in a script|
|public static |<a href="#abbreviationlist()">abbreviationList</a>|### Get an associative array containing dst, offset and the timezone name alias|

<h2><a name="getdefaulttimezone()"># method: getDefaultTimezone</a></h2>

```php
public static DateAndTimeZone::getDefaultTimezone():\FireHub\Core\Support\Enums\DateTime\Zone
```













### ### Gets the default timezone used by all date/time functions in a script

_In order of preference, this function returns the default timezone by:
- reading the timezone set using the setDefaultTimezone() method (if any).
- reading the value of the 'date.timezone' ini option (if set).
If none of the above succeed, [[DateAndTimeZone#getDefaultTimezone()]] will return a default timezone of UTC._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L47)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L47)**</sub>
#### Throws

* [\Error](./Wiki-Error) - _If we cannot get the default timezone._
#### Returns

* [\FireHub\Core\Support\Enums\DateTime\Zone](./Wiki-Zone) - _Timezone enum._
<h2><a name="setdefaulttimezone()"># method: setDefaultTimezone</a></h2>

```php
public static DateAndTimeZone::setDefaultTimezone(\FireHub\Core\Support\Enums\DateTime\Zone $time_zone):bool
```













### ### Sets the default timezone used by all date/time functions in a script

_Method sets the default timezone used by all date/time functions. Instead of using this function to set the
default timezone in your script, you can also use the INI setting 'date.timezone' to set the default timezone._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L68)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L68)**</sub>
#### Parameters

* [\FireHub\Core\Support\Enums\DateTime\Zone](./Wiki-Zone) **$time_zone** - _The timezone identifier._
#### Returns

* bool - _False if the timezone_identifier isn't valid, or true otherwise._
<h2><a name="abbreviationlist()"># method: abbreviationList</a></h2>

```php
public static DateAndTimeZone::abbreviationList():array
```













### ### Get an associative array containing dst, offset and the timezone name alias



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L86)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.DateAndTimeZone.php#L86)**</sub>
#### Returns

* array - _<code>array<string, array<int, array{dst: bool, offset: int, timezone_id: string|null}></code>
List of timezone abbreviations._