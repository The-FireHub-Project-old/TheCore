<title># IterablesAggregate</title>

<code-block lang="php">
<![CDATA[interface IterablesAggregate]]>
</code-block>













### ### Base iterator aggregate contract

<p><format style="italic">Interface for external iterators or objects that can be iterated themselves internally.</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\Iterator\IterablesAggregate
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.IterablesAggregate.php#L31">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.IterablesAggregate.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.IterablesAggregate.php">
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
|public|<a href="#getiterator()">getIterator</a>|### Retrieve an external iterator|

## method: getIterator {id="getiterator()"}

<code-block lang="php">
    <![CDATA[public IterablesAggregate::getIterator():\Traversable]]>
</code-block>













### ### Retrieve an external iterator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.IterablesAggregate.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.IterablesAggregate.php#L41">
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
        <list><li><a href="Traversable.md">\Traversable</a> - <format style="italic"><code><![CDATA[ Traversable<TKey, TValue> ]]></code>
An instance of an object implementing Iterator or Traversable.</format></li></list>
    </def>
</deflist>