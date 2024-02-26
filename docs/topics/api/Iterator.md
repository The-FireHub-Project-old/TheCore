<title># Iterator</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\Iterator()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Iterator low-level proxy class



<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\Iterator
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L29">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php">
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
|public static |<a href="#toarray()">toArray</a>|### Copy the iterator into an array|
|public static |<a href="#count()">count</a>|### Count the elements in an iterator|
|public static |<a href="#apply()">apply</a>|### Call a function for every element in an iterator|

## method: toArray {id="toarray()"}

<code-block lang="php">
    <![CDATA[public static Iterator::toArray(\Traversable $iterator, bool $preserve_keys = true):array]]>
</code-block>













### ### Copy the iterator into an array

<p><format style="italic">Copy the elements of an iterator into an array.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L60">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L60">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has templates:">
        <list><li>TKey of array-key</li><li>TValue</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Traversable.md">\Traversable</a> <format style="bold">$iterator</format> - <format style="italic">
<code><![CDATA[ Traversable<TKey, TValue> ]]></code>
The iterator being copied.
</format></li><li>bool <format style="bold">$preserve_keys</format> = true - <format style="italic">[optional] 
Whether to use the iterator element keys as index.
If a key is an array or object, a warning will be generated. Null keys will be converted to an empty string,
float keys will be truncated to their int counterpart, resource keys will generate a warning and be converted
to their resource ID, and bool keys will be converted to integers.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code>($preserve_keys is true ? array<TKey, TValue> : array<array-key, TValue>)</code> An array
containing items of the iterator.</format></li></list>
    </def>
</deflist>
## method: count {id="count()"}

<code-block lang="php">
    <![CDATA[public static Iterator::count(\Traversable $iterator):int]]>
</code-block>













### ### Count the elements in an iterator

<p><format style="italic">Count the elements in an iterator. Method is not guaranteed to retain the current position of the iterator.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L81">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L81">
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
        <list><li><a href="Traversable.md">\Traversable</a> <format style="bold">$iterator</format> - <format style="italic">
<code><![CDATA[ Traversable<mixed, mixed> ]]></code>
The iterator being counted.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic"><code>non-negative-int</code> Number of elements in iterator.</format></li></list>
    </def>
</deflist>
## method: apply {id="apply()"}

<code-block lang="php">
    <![CDATA[public static Iterator::apply(\Traversable $iterator, callable $callback, null|array $arguments = null):int]]>
</code-block>













### ### Call a function for every element in an iterator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L112">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L112">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has templates:">
        <list><li>TKey</li><li>TValue</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Traversable.md">\Traversable</a> <format style="bold">$iterator</format> - <format style="italic">
<code><![CDATA[ Traversable<TKey, TValue> ]]></code>
The iterator objects to iterate over.
</format></li><li>callable <format style="bold">$callback</format> - <format style="italic">
<code>callable (TValue $value=):bool</code>
The callback function to call on every element The function must return true to continue iterating over the
iterator.
</format></li><li>null or array <format style="bold">$arguments</format> = null - <format style="italic">
<code><![CDATA[ array<TValue> ]]></code>
An array of arguments; each element of args is passed to the callback as separate argument.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">Iteration count.</format></li></list>
    </def>
</deflist>