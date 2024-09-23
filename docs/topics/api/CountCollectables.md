<title># CountCollectables</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Collection\Helpers\CountCollectables()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Count elements in Collectables, counted recursively



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Collection\Helpers\CountCollectables
    </def><def title="Implements:">
        <list><li><a href="Init.md">\FireHub\Core\Base\Init</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="Concrete.md">\FireHub\Core\Base\Trait\Concrete</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L29">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php">
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
        <list><li><a href="Arr.md#countmultidimensional()">\FireHub\Core\Support\Collection\Type\Arr::countMultidimensional()</a>  - <format style="italic">To count elements in Collectables, counted recursively.</format></li><li><a href="Fix.md#countmultidimensional()">\FireHub\Core\Support\Collection\Type\Fix::countMultidimensional()</a>  - <format style="italic">To count elements in Collectables, counted recursively.</format></li><li><a href="Gen.md#countmultidimensional()">\FireHub\Core\Support\Collection\Type\Gen::countMultidimensional()</a>  - <format style="italic">To count elements in Collectables, counted recursively.</format></li></list>
    </def>
</deflist>
### Templates
<deflist>
    <def title="This class has templates:">
        <list><li>TKey</li><li>TValue</li></list>
    </def>
</deflist>
### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|private|<a href="#$count">count</a>|### Counting a result|0|
|readonly private|<a href="#$collectable">collectable</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#__invoke()">__invoke</a>|### Call an object as a function|
|inherited public|<a href="#jsonserialize()">jsonSerialize</a>||
|inherited public|<a href="#__serialize()">__serialize</a>||
|inherited public|<a href="#__unserialize()">__unserialize</a>||

## property: count {id="$count"}

<code-block lang="php">
    <![CDATA[private  $count]]>
</code-block>











### ### Counting a result



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L43">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L43">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## property: collectable {id="$collectable"}

<code-block lang="php">
    <![CDATA[readonly private \FireHub\Core\Support\Contracts\HighLevel\Collectable $collectable]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L54">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public CountCollectables::__construct(\FireHub\Core\Support\Contracts\HighLevel\Collectable<\FireHub\Core\Support\Collection\Helpers\TKey,\FireHub\Core\Support\Collection\Helpers\TValue> $collectable)]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L53">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L53">
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
        <list><li><a href="TValue&gt;.md">\FireHub\Core\Support\Contracts\HighLevel\Collectable&lt;\FireHub\Core\Support\Collection\Helpers\TKey,\FireHub\Core\Support\Collection\Helpers\TValue&gt;</a> <format style="bold">$collectable</format> - <format style="italic">
Collectable instance to count.
</format></li></list>
    </def>
</deflist>
## method: __invoke {id="__invoke()"}

<code-block lang="php">
    <![CDATA[public CountCollectables::__invoke()]]>
</code-block>













### ### Call an object as a function



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/helpers/firehub.CountCollectables.php#L65">
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
        <list><li><a href="Collectable.md">\FireHub\Core\Support\Contracts\HighLevel\Collectable</a>  - <format style="italic">As parameter.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int Number of elements in Collectables, counted recursively.</format></li></list>
    </def>
</deflist>
## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::jsonSerialize()]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L39">
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
        <list><li><a href="Obj.md#properties()">\FireHub\Core\Support\LowLevel\Obj::properties()</a>  - <format style="italic">To get all public class properties.</format></li></list>
    </def>
</deflist>
## method: __serialize {id="__serialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::__serialize():never]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L54">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If you try to serialize an object.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>
## method: __unserialize {id="__unserialize()"}

<code-block lang="php">
    <![CDATA[public Concrete::__unserialize(array $data):never]]>
</code-block>

















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L69">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/base/trait/firehub.Concrete.php#L69">
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
        <list><li>array <format style="bold">$data</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If you try to unserialize an object.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>never</li></list>
    </def>
</deflist>