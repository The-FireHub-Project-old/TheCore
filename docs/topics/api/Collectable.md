<title># Collectable</title>

<code-block lang="php">
<![CDATA[interface Collectable]]>
</code-block>













### ### Collectable contract

<p><format style="italic">Efficient data structures, provided as an alternative to the array.</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\HighLevel\Collectable
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L30">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php">
            View history
        </a>
    </def></deflist>
### Changelog
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>


### Templates
<deflist>
    <def title="This interface has templates:">
        <list><li>TKey</li><li>TValue</li></list>
    </def>
</deflist>
### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#all()">all</a>|### Get collection as an array|
|inherited public|<a href="#getiterator()">getIterator</a>|### Retrieve an external iterator|

## method: all {id="all()"}

<code-block lang="php">
    <![CDATA[public Collectable::all():array<array-key,mixed>]]>
</code-block>













### ### Get collection as an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L38">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L38">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Str.md#fromlist()">\FireHub\Core\Support\Strings\Str::fromList()</a>  - <format style="italic">To get a list as an array.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array&lt;array-key,mixed&gt; - <format style="italic">Collection items as an array.</format></li></list>
    </def>
</deflist>
## method: getIterator {id="getiterator()"}

<code-block lang="php">
    <![CDATA[public IterablesAggregate::getIterator():\Traversable<\FireHub\Core\Support\Contracts\Iterator\TKey,\FireHub\Core\Support\Contracts\Iterator\TValue>]]>
</code-block>













### ### Retrieve an external iterator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.IterablesAggregate.php#L39">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.IterablesAggregate.php#L39">
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
        <list><li><a href="TValue&gt;.md">\Traversable&lt;\FireHub\Core\Support\Contracts\Iterator\TKey,\FireHub\Core\Support\Contracts\Iterator\TValue&gt;</a> - <format style="italic">An instance of an object implementing Iterator or Traversable.</format></li></list>
    </def>
</deflist>