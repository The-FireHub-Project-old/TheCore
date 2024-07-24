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
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L31">
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


### Used by
<deflist>
    <def title="This interface is used by:">
        <list><li><a href="CountCollectables.md#__invoke()">\FireHub\Core\Support\Collection\Helpers\CountCollectables::__invoke()</a>  - <format style="italic">As parameter.</format></li></list>
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
|public static |<a href="#fromarray()">fromArray</a>|### Create a collection from a provided array|
|public|<a href="#all()">all</a>|### Get collection as an array|
|public|<a href="#first()">first</a>|### Get first item from collection|
|public|<a href="#firstkey()">firstKey</a>|### Get first key from collection|
|public|<a href="#last()">last</a>|### Get last item from collection|
|public|<a href="#lastkey()">lastKey</a>|### Get last key from collection|
|public|<a href="#each()">each</a>|### Call user-generated function on each item in collection|
|public|<a href="#every()">every</a>|### Verify that all items of a collection pass a given truth test|
|public|<a href="#search()">search</a>|### Searches the collection for a given value and returns the first corresponding key if successful|
|public|<a href="#isempty()">isEmpty</a>|### Check if a collection is empty|
|public|<a href="#isnotempty()">isNotEmpty</a>|### Check if a collection is not empty|
|public|<a href="#contains()">contains</a>|### Determines whether a collection contains a given item|
|public|<a href="#doesntcontains()">doesntContains</a>|### Determines whether collection doesn't contain a given item|
|inherited public|<a href="#getiterator()">getIterator</a>|### Retrieve an external iterator|
|inherited public|<a href="#count()">count</a>|### Count elements of an object|

## method: fromArray {id="fromarray()"}

<code-block lang="php">
    <![CDATA[public static Collectable::fromArray(array<array-key,mixed> $array)]]>
</code-block>













### ### Create a collection from a provided array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L43">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L43">
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
        <list><li>array&lt;array-key,mixed&gt; <format style="bold">$array</format> - <format style="italic">
Array from which a new collection will be created.
</format></li></list>
    </def>
</deflist>
## method: all {id="all()"}

<code-block lang="php">
    <![CDATA[public Collectable::all():array<array-key,mixed>]]>
</code-block>













### ### Get collection as an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L51">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L51">
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
## method: first {id="first()"}

<code-block lang="php">
    <![CDATA[public Collectable::first(null|callable $callback = null):null|\FireHub\Core\Support\Contracts\HighLevel\TValue]]>
</code-block>













### ### Get first item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L63">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L63">
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
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
If callback is used, the method will return the first item that passes the truth test.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>null or <a href="TValue.md">\FireHub\Core\Support\Contracts\HighLevel\TValue</a> - <format style="italic">First item from a collection.</format></li></list>
    </def>
</deflist>
## method: firstKey {id="firstkey()"}

<code-block lang="php">
    <![CDATA[public Collectable::firstKey(null|callable $callback = null):null|\FireHub\Core\Support\Contracts\HighLevel\TKey]]>
</code-block>













### ### Get first key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L75">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L75">
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
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
If callback is used, the method will return the first key that passes the truth test.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>null or <a href="TKey.md">\FireHub\Core\Support\Contracts\HighLevel\TKey</a> - <format style="italic">First key from a collection.</format></li></list>
    </def>
</deflist>
## method: last {id="last()"}

<code-block lang="php">
    <![CDATA[public Collectable::last(null|callable $callback = null):null|\FireHub\Core\Support\Contracts\HighLevel\TValue]]>
</code-block>













### ### Get last item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L87">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L87">
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
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
If callback is used, the method will return the last item that passes the truth test.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>null or <a href="TValue.md">\FireHub\Core\Support\Contracts\HighLevel\TValue</a> - <format style="italic">Last item from a collection.</format></li></list>
    </def>
</deflist>
## method: lastKey {id="lastkey()"}

<code-block lang="php">
    <![CDATA[public Collectable::lastKey(null|callable $callback = null):null|\FireHub\Core\Support\Contracts\HighLevel\TKey]]>
</code-block>













### ### Get last key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L99">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L99">
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
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
If callback is used, the method will return the last key that passes the truth test.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>null or <a href="TKey.md">\FireHub\Core\Support\Contracts\HighLevel\TKey</a> - <format style="italic">Last key from a collection.</format></li></list>
    </def>
</deflist>
## method: each {id="each()"}

<code-block lang="php">
    <![CDATA[public Collectable::each(callable $callback, positive-int $limit = 1000000):bool]]>
</code-block>













### ### Call user-generated function on each item in collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L114">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L114">
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
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
Function to call on each item in a collection.
</format></li><li>positive-int <format style="bold">$limit</format> = 1000000 - <format style="italic">[optional] 
Maximum number of elements that is allowed to be iterated.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if each item in the collection has iterated, false otherwise.</format></li></list>
    </def>
</deflist>
## method: every {id="every()"}

<code-block lang="php">
    <![CDATA[public Collectable::every(callable $callback):bool]]>
</code-block>













### ### Verify that all items of a collection pass a given truth test



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L126">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L126">
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
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
Function to call on each item in a collection.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if each item in the collection passes a given truth test, false otherwise.</format></li></list>
    </def>
</deflist>
## method: search {id="search()"}

<code-block lang="php">
    <![CDATA[public Collectable::search(\FireHub\Core\Support\Contracts\HighLevel\TValue|callable $value):\FireHub\Core\Support\Contracts\HighLevel\TKey|false]]>
</code-block>













### ### Searches the collection for a given value and returns the first corresponding key if successful



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L140">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L140">
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
        <list><li><a href="TValue.md">\FireHub\Core\Support\Contracts\HighLevel\TValue</a> or callable <format style="bold">$value</format> - <format style="italic">
The searched value.
If the value is a string, the comparison is done in a case-sensitive manner.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TKey.md">\FireHub\Core\Support\Contracts\HighLevel\TKey</a> or false - <format style="italic">The key if it is found in the collection, false otherwise.
If a value is found in a collection more than once, the first matching key is returned.</format></li></list>
    </def>
</deflist>
## method: isEmpty {id="isempty()"}

<code-block lang="php">
    <![CDATA[public Collectable::isEmpty():bool]]>
</code-block>













### ### Check if a collection is empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L148">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L148">
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
        <list><li>bool - <format style="italic">True if a collection is empty, false otherwise.</format></li></list>
    </def>
</deflist>
## method: isNotEmpty {id="isnotempty()"}

<code-block lang="php">
    <![CDATA[public Collectable::isNotEmpty():bool]]>
</code-block>













### ### Check if a collection is not empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L156">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L156">
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
        <list><li>bool - <format style="italic">True, if a collection is not empty, false otherwise.</format></li></list>
    </def>
</deflist>
## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public Collectable::contains(\FireHub\Core\Support\Contracts\HighLevel\TValue|callable $value):bool]]>
</code-block>













### ### Determines whether a collection contains a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L168">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L168">
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
        <list><li><a href="TValue.md">\FireHub\Core\Support\Contracts\HighLevel\TValue</a> or callable <format style="bold">$value</format> - <format style="italic">
The value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a collection contains a checked item, false otherwise.</format></li></list>
    </def>
</deflist>
## method: doesntContains {id="doesntcontains()"}

<code-block lang="php">
    <![CDATA[public Collectable::doesntContains(\FireHub\Core\Support\Contracts\HighLevel\TValue|callable $value):bool]]>
</code-block>













### ### Determines whether collection doesn't contain a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L180">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/highlevel/firehub.Collectable.php#L180">
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
        <list><li><a href="TValue.md">\FireHub\Core\Support\Contracts\HighLevel\TValue</a> or callable <format style="bold">$value</format> - <format style="italic">
The value to check.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if a collection doesn't contain a checked item, false otherwise.</format></li></list>
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
## method: count {id="count()"}

<code-block lang="php">
    <![CDATA[public Countable::count()]]>
</code-block>













### ### Count elements of an object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/firehub.Countable.php#L33">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/firehub.Countable.php#L33">
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
        <list><li> - <format style="italic">non-negative-int Number of elements of an object.</format></li></list>
    </def>
</deflist>