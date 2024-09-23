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
    </def><def title="Implements:">
        <list><li><a href="InitStatic.md">\FireHub\Core\Base\InitStatic</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="ConcreteStatic.md">\FireHub\Core\Base\Trait\ConcreteStatic</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L32">
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
    <![CDATA[public static Iterator::toArray(\Traversable<\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue> $iterator, bool $preserve_keys = true):mixed]]>
</code-block>













### ### Copy the iterator into an array

<p><format style="italic">Copy the elements of an iterator into an array.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L65">
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
        <list><li><a href="TValue&gt;.md">\Traversable&lt;\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue&gt;</a> <format style="bold">$iterator</format> - <format style="italic">
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
        <list><li>mixed - <format style="italic">An array containing items of the iterator.</format></li></list>
    </def>
</deflist>
## method: count {id="count()"}

<code-block lang="php">
    <![CDATA[public static Iterator::count(\Traversable<mixed,mixed> $iterator)]]>
</code-block>













### ### Count the elements in an iterator

<p><format style="italic">Count the elements in an iterator. Method is not guaranteed to retain the current position of the iterator.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L83">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L83">
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
        <list><li><a href="Fix.md#count()">\FireHub\Core\Support\Collection\Type\Fix::count()</a>  - <format style="italic">To count storage items.</format></li><li><a href="Gen.md#count()">\FireHub\Core\Support\Collection\Type\Gen::count()</a>  - <format style="italic">To count storage items.</format></li><li><a href="Obj.md#count()">\FireHub\Core\Support\Collection\Type\Obj::count()</a>  - <format style="italic">To count storage items.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="Traversable&lt;mixed,mixed&gt;.md">\Traversable&lt;mixed,mixed&gt;</a> <format style="bold">$iterator</format> - <format style="italic">
The iterator being counted.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int Number of elements in iterator.</format></li></list>
    </def>
</deflist>
## method: apply {id="apply()"}

<code-block lang="php">
    <![CDATA[public static Iterator::apply(\Traversable<\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue> $iterator, callable $callback, null|\FireHub\Core\Support\LowLevel\TValue[] $arguments = null):int]]>
</code-block>













### ### Call a function for every element in an iterator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L110">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Iterator.php#L110">
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
        <list><li><a href="TValue&gt;.md">\Traversable&lt;\FireHub\Core\Support\LowLevel\TKey,\FireHub\Core\Support\LowLevel\TValue&gt;</a> <format style="bold">$iterator</format> - <format style="italic">
The iterator objects to iterate over.
</format></li><li>callable <format style="bold">$callback</format> - <format style="italic">
<code>callable (TValue $value=):bool</code>
The callback function to call on every element The function must return true to continue iterating over the
iterator.
</format></li><li>null or <a href="TValue[].md">\FireHub\Core\Support\LowLevel\TValue[]</a> <format style="bold">$arguments</format> = null - <format style="italic">
An array of arguments; each element of args is passed to the callback as a separate argument.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">Iteration count.</format></li></list>
    </def>
</deflist>