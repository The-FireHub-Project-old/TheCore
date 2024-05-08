<title># Iterables</title>

<code-block lang="php">
<![CDATA[interface Iterables]]>
</code-block>













### ### Base iterator contract

<p><format style="italic">Interface for external iterators or objects that can be iterated themselves internally.</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\Iterator\Iterables
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L31">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php">
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
|public|<a href="#valid()">valid</a>|### Checks if the current position is valid|
|public|<a href="#current()">current</a>|### Return the current element|
|public|<a href="#key()">key</a>|### Return the key of the current element|
|public|<a href="#next()">next</a>|### Move forward to next element|
|public|<a href="#rewind()">rewind</a>|### Rewind the iterator to the first element|

## method: valid {id="valid()"}

<code-block lang="php">
    <![CDATA[public Iterables::valid():bool]]>
</code-block>













### ### Checks if the current position is valid



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L41">
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
        <list><li>bool - <format style="italic">True on success or false on failure.</format></li></list>
    </def>
</deflist>
## method: current {id="current()"}

<code-block lang="php">
    <![CDATA[public Iterables::current():\FireHub\Core\Support\Contracts\Iterator\TValue]]>
</code-block>













### ### Return the current element



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L49">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L49">
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
        <list><li><a href="TValue.md">\FireHub\Core\Support\Contracts\Iterator\TValue</a> - <format style="italic">Current element.</format></li></list>
    </def>
</deflist>
## method: key {id="key()"}

<code-block lang="php">
    <![CDATA[public Iterables::key():null|\FireHub\Core\Support\Contracts\Iterator\TKey]]>
</code-block>













### ### Return the key of the current element



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L57">
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
        <list><li>null or <a href="TKey.md">\FireHub\Core\Support\Contracts\Iterator\TKey</a> - <format style="italic">Key of the current element.</format></li></list>
    </def>
</deflist>
## method: next {id="next()"}

<code-block lang="php">
    <![CDATA[public Iterables::next():void]]>
</code-block>













### ### Move forward to next element



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L67">
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
        <list><li>void</li></list>
    </def>
</deflist>
## method: rewind {id="rewind()"}

<code-block lang="php">
    <![CDATA[public Iterables::rewind():void]]>
</code-block>













### ### Rewind the iterator to the first element



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/iterator/firehub.Iterables.php#L77">
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
        <list><li>void</li></list>
    </def>
</deflist>