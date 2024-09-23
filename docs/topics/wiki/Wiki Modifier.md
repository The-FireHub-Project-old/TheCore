```php
enum Modifier
```











### ### Expression pattern modifiers



<sub>_This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Enum Name:  **\FireHub\Core\Support\Enums\String\Expression\Modifier**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L21)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php)**</sub>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#caseless">CASELESS</a>|### Makes the expression match case-insensitive|&#039;i&#039;|
|<a href="#multiline">MULTILINE</a>|### Multiline characters|&#039;m&#039;|
|<a href="#dot_all">DOT_ALL</a>|### Dot metacharacter matches all characters|&#039;s&#039;|
|<a href="#extended">EXTENDED</a>|### Dot metacharacter matches all characters|&#039;x&#039;|
|<a href="#anchored">ANCHORED</a>|### Anchored|&#039;A&#039;|
|<a href="#dollar_end_only">DOLLAR_END_ONLY</a>|### Dollar metacharacter matches only at the end|&#039;D&#039;|
|<a href="#extra_analysis">EXTRA_ANALYSIS</a>|### Extra analysis is performed|&#039;S&#039;|
|<a href="#un_greedy">UN_GREEDY</a>|### Inverts the greediness|&#039;U&#039;|
|<a href="#extra">EXTRA</a>|### Backslash in a pattern that is followed by a letter that has no special meaning causes an error|&#039;X&#039;|
|<a href="#info_j_changed">INFO_J_CHANGED</a>|### Extra analysis is performed|&#039;J&#039;|
|<a href="#multibyte">MULTIBYTE</a>|### Pattern and subject strings are treated as UTF-8|&#039;u&#039;|
|<a href="#no_auto_capture">NO_AUTO_CAPTURE</a>|### Don't capture simple groups|&#039;n&#039;|

<h2><a name="caseless"># case: CASELESS</a></h2>

```php
CASELESS = &#039;i&#039;
```





### ### Makes the expression match case-insensitive

_If this modifier is set, letters in the pattern match both upper and lower case letters._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L29)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L29)**</sub>
<h2><a name="multiline"># case: MULTILINE</a></h2>

```php
MULTILINE = &#039;m&#039;
```





### ### Multiline characters

_By default, PCRE treats the subject string as consisting of a single "line" of characters (even if it actually
contains several newlines). The "start of line" metacharacter (^) matches only at the start of the string, while
the "end of line" metacharacter ($) matches only at the end of the string, or before a terminating newline
(unless D modifier is set). This is the same as Perl. When this modifier is set, the "start of line" and
"end of line" constructs match immediately following or immediately before any newline in the subject string,
respectively, as well as at the very start and end. This is equivalent to Perl's /m modifier.
If there are no "\n" characters in a subject string, or no occurrences of ^ or $ in a pattern, setting this
modifier has no effect._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L44)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L44)**</sub>
<h2><a name="dot_all"># case: DOT_ALL</a></h2>

```php
DOT_ALL = &#039;s&#039;
```





### ### Dot metacharacter matches all characters

_If this modifier is set, a dot metacharacter in the pattern matches all characters, including newlines.
Without it, newlines are excluded. This modifier is equivalent to Perl's /s modifier. A negative class such as
[^a] always matches a newline character, independent of the setting for this modifier._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L54)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L54)**</sub>
<h2><a name="extended"># case: EXTENDED</a></h2>

```php
EXTENDED = &#039;x&#039;
```





### ### Dot metacharacter matches all characters

_If this modifier is set, whitespace data characters in the pattern are totally ignored except when escaped
or inside a character class, and characters between an unescaped # outside a character class and the next
newline character, inclusive, are also ignored. This is equivalent to Perl's /x modifier, and makes it possible
to include commentary inside complicated patterns. Note, however, that this applies only to data characters.
Whitespace characters may never appear within special character sequences in a pattern, for example within
the sequence (?( which introduces a conditional subpattern._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L67)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L67)**</sub>
<h2><a name="anchored"># case: ANCHORED</a></h2>

```php
ANCHORED = &#039;A&#039;
```





### ### Anchored

_If this modifier is set, the pattern is forced to be "anchored"; that is, it is constrained to match only at
the start of the string which is being searched (the "subject string"). This effect can also be achieved by
appropriate constructs in the pattern itself, which is the only way to do it in Perl._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L77)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L77)**</sub>
<h2><a name="dollar_end_only"># case: DOLLAR_END_ONLY</a></h2>

```php
DOLLAR_END_ONLY = &#039;D&#039;
```





### ### Dollar metacharacter matches only at the end

_If this modifier is set, a dollar metacharacter in the pattern matches only at the end of the subject string.
Without this modifier, a dollar also matches immediately before the final character if it is a newline (but not
before any other newlines). This modifier is ignored if m modifier is set. There is no equivalent to this
modifier in Perl._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L88)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L88)**</sub>
<h2><a name="extra_analysis"># case: EXTRA_ANALYSIS</a></h2>

```php
EXTRA_ANALYSIS = &#039;S&#039;
```





### ### Extra analysis is performed

_When a pattern is going to be used several times, it is worth spending more time analyzing it to speed up
the time taken for matching. If this modifier is set, then this extra analysis is performed. At present,
studying a pattern is useful only for non-anchored patterns that do not have a single fixed starting character._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L98)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L98)**</sub>
<h2><a name="un_greedy"># case: UN_GREEDY</a></h2>

```php
UN_GREEDY = &#039;U&#039;
```





### ### Inverts the greediness

_This modifier inverts the "greediness" of the quantifiers so that they are not greedy by default, but become
greedy if followed by ?. It is not compatible with Perl. It can also be set by a (?U) modifier setting within
the pattern or by a question mark behind a quantifier (e.g. .*?)._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L113)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L113)**</sub>
#### See also

* [https://www.php.net/manual/en/pcre.configuration.php#ini.pcre.backtrack-limit](https://www.php.net/manual/en/pcre.configuration.php#ini.pcre.backtrack-limit) - _To see pcre.backtrack_limit
configuration._
<h2><a name="extra"># case: EXTRA</a></h2>

```php
EXTRA = &#039;X&#039;
```





### ### Backslash in a pattern that is followed by a letter that has no special meaning causes an error

_This modifier turns on additional functionality of PCRE that is incompatible with Perl. Any backslash in
a pattern that is followed by a letter that has no special meaning causes an error, thus reserving these
combinations for future expansion. By default, as in Perl, a backslash followed by a letter with no special
meaning is treated as a literal. There are at present no other features controlled by this modifier._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L124)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L124)**</sub>
<h2><a name="info_j_changed"># case: INFO_J_CHANGED</a></h2>

```php
INFO_J_CHANGED = &#039;J&#039;
```





### ### Extra analysis is performed

_The (?J) internal option setting changes the local PCRE_DUPNAMES option. Allow duplicate names for
sub-patterns. As of PHP 7.2.0, J is supported as modifier as well._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L133)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L133)**</sub>
<h2><a name="multibyte"># case: MULTIBYTE</a></h2>

```php
MULTIBYTE = &#039;u&#039;
```





### ### Pattern and subject strings are treated as UTF-8

_This modifier turns on additional functionality of PCRE that is incompatible with Perl. Pattern and subject
strings are treated as UTF-8. An invalid subject will cause the preg_* function to match nothing; an invalid
pattern will trigger an error of level E_WARNING. Five and six octet UTF-8 sequences are regarded as invalid._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L143)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L143)**</sub>
<h2><a name="no_auto_capture"># case: NO_AUTO_CAPTURE</a></h2>

```php
NO_AUTO_CAPTURE = &#039;n&#039;
```





### ### Don't capture simple groups

_This modifier makes simple (xyz) groups non-capturing. Only named groups like (?<name>xyz) are captured.
This only affects which groups are captured, it is still possible to use numbered subpattern references, and
the matches array will still contain numbered results._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L153)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/string/expression/firehub.Modifier.php#L153)**</sub>