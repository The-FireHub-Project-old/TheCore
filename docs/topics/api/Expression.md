<title># Expression</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Strings\Expression()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Regular expression



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Strings\Expression
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L31">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Used by
<deflist>
    <def title="This class is used by:">
        <list><li><a href="Char.md#expression()">\FireHub\Core\Support\Char::expression()</a>  - <format style="italic">As return.</format></li><li><a href="IStr.md#expression()">\FireHub\Core\Support\IStr::expression()</a>  - <format style="italic">As return.</format></li><li><a href="Str.md#expression()">\FireHub\Core\Support\Strings\Str::expression()</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|protected|<a href="#$modifiers">modifiers</a>|### List of expression pattern modifiers|[]|
|readonly private|<a href="#$string">string</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#check()">check</a>|### Perform a regular expression check|
|public|<a href="#get()">get</a>|### Perform a regular expression check and get a result|
|public|<a href="#replace()">replace</a>|### Perform a regular expression search and replace|
|public|<a href="#replacefunc()">replaceFunc</a>|### Perform a regular expression search and replace|
|public|<a href="#remove()">remove</a>|### Perform a regular expression remove|
|public|<a href="#split()">split</a>|### Perform a regular expression split|
|public|<a href="#splitwithoutempty()">splitWithoutEmpty</a>|### Perform a regular expression split|

## property: modifiers {id="$modifiers"}

<code-block lang="php">
    <![CDATA[protected \FireHub\Core\Support\Enums\String\Expression\Modifier[] $modifiers = []]]>
</code-block>











### ### List of expression pattern modifiers



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L39">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## property: string {id="$string"}

<code-block lang="php">
    <![CDATA[readonly private \FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L58">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L58">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Expression::__construct(\FireHub\Core\Support\Contracts\HighLevel\Characters|\FireHub\Core\Support\Contracts\HighLevel\Strings $string, \FireHub\Core\Support\Enums\String\Expression\Modifier ...$modifiers):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L57">
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
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a>  - <format style="italic">As parameter.</format></li><li><a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Characters.md">\FireHub\Core\Support\Contracts\HighLevel\Characters</a> or <a href="Strings.md">\FireHub\Core\Support\Contracts\HighLevel\Strings</a> <format style="bold">$string</format> - <format style="italic">
Character or string to use.
</format></li><li>variadic <a href="Modifier.md">\FireHub\Core\Support\Enums\String\Expression\Modifier</a> <format style="bold">$modifiers</format> - <format style="italic">
List of expression pattern modifiers.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: check {id="check()"}

<code-block lang="php">
    <![CDATA[public Expression::check():\FireHub\Core\Support\Strings\Expression\Check]]>
</code-block>













### ### Perform a regular expression check



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L77">
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
        <list><li><a href="Check.md">\FireHub\Core\Support\Strings\Expression\Check</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Check.md">\FireHub\Core\Support\Strings\Expression\Check</a> - <format style="italic">Regular expression check.</format></li></list>
    </def>
</deflist>
## method: get {id="get()"}

<code-block lang="php">
    <![CDATA[public Expression::get():\FireHub\Core\Support\Strings\Expression\Get]]>
</code-block>













### ### Perform a regular expression check and get a result



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L91">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L91">
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
        <list><li><a href="Part.md">\FireHub\Core\Support\Strings\Expression\Part</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Get.md">\FireHub\Core\Support\Strings\Expression\Get</a> - <format style="italic">Regular expression check and get a result.</format></li></list>
    </def>
</deflist>
## method: replace {id="replace()"}

<code-block lang="php">
    <![CDATA[public Expression::replace(string $with):\FireHub\Core\Support\Strings\Expression\Replace]]>
</code-block>













### ### Perform a regular expression search and replace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L109">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L109">
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
        <list><li><a href="Replace.md">\FireHub\Core\Support\Strings\Expression\Replace</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string <format style="bold">$with</format> - <format style="italic">
The string to replace.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Replace.md">\FireHub\Core\Support\Strings\Expression\Replace</a> - <format style="italic">Regular expression search and replace.</format></li></list>
    </def>
</deflist>
## method: replaceFunc {id="replacefunc()"}

<code-block lang="php">
    <![CDATA[public Expression::replaceFunc(callable $callback):\FireHub\Core\Support\Strings\Expression\ReplaceFunc]]>
</code-block>













### ### Perform a regular expression search and replace



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L130">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L130">
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
        <list><li><a href="Replace.md">\FireHub\Core\Support\Strings\Expression\Replace</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
<code><![CDATA[ Closure(array<array-key, string> $matches):string ]]></code>
A callback that will be called and passed an array of matched elements in the subject string.
The callback should return the replacement string.
This is the callback signature.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="ReplaceFunc.md">\FireHub\Core\Support\Strings\Expression\ReplaceFunc</a> - <format style="italic">Regular expression search and replace using a callback.</format></li></list>
    </def>
</deflist>
## method: remove {id="remove()"}

<code-block lang="php">
    <![CDATA[public Expression::remove():\FireHub\Core\Support\Strings\Expression\Replace]]>
</code-block>













### ### Perform a regular expression remove



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L144">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L144">
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
        <list><li><a href="Replace.md">\FireHub\Core\Support\Strings\Expression\Replace</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Replace.md">\FireHub\Core\Support\Strings\Expression\Replace</a> - <format style="italic">Regular expression search and remove.</format></li></list>
    </def>
</deflist>
## method: split {id="split()"}

<code-block lang="php">
    <![CDATA[public Expression::split(int $limit = -1):\FireHub\Core\Support\Strings\Expression\Split]]>
</code-block>













### ### Perform a regular expression split



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L163">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L163">
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
        <list><li><a href="Split.md">\FireHub\Core\Support\Strings\Expression\Split</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$limit</format> = -1 - <format style="italic">[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit).
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Split.md">\FireHub\Core\Support\Strings\Expression\Split</a> - <format style="italic">Regular expression split.</format></li></list>
    </def>
</deflist>
## method: splitWithoutEmpty {id="splitwithoutempty()"}

<code-block lang="php">
    <![CDATA[public Expression::splitWithoutEmpty(int $limit = -1):\FireHub\Core\Support\Strings\Expression\Split]]>
</code-block>













### ### Perform a regular expression split



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L182">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/strings/firehub.Expression.php#L182">
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
        <list><li><a href="Split.md">\FireHub\Core\Support\Strings\Expression\Split</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>int <format style="bold">$limit</format> = -1 - <format style="italic">[optional] 
The maximum possible replacements for each pattern in each subject string.
Defaults to -1 (no limit).
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Split.md">\FireHub\Core\Support\Strings\Expression\Split</a> - <format style="italic">Regular expression split.</format></li></list>
    </def>
</deflist>