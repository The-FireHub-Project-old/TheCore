<title># Fix</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Collection\Type\Fix()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Fixed collection type

<p><format style="italic">Fixed collection allows only integers as keys, but it is faster and uses less memory than an array collection.
This collection type must be resized manually and allows only integers within the range as indexes.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Collection\Type\Fix
    </def><def title="Implements:">
        <list><li><a href="Init.md">\FireHub\Core\Base\Init</a></li><li><a href="Accessible.md">\FireHub\Core\Support\Collection\Contracts\Accessible</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="Concrete.md">\FireHub\Core\Base\Trait\Concrete</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L39">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php">
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
        <list><li><a href="Collection.md#fixed()">\FireHub\Core\Support\Collection::fixed()</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|private|<a href="#$storage">storage</a>|||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#jsonserialize()">jsonSerialize</a>|### Specify data which should be serialized to JSON|
|public|<a href="#__serialize()">__serialize</a>|### Construct and return an associative array of key/value pairs that represent the serialized form of the object|
|public|<a href="#__unserialize()">__unserialize</a>|### Converts from serialized data back to the object|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public static |<a href="#fromarray()">fromArray</a>|### Create a collection from a provided array|
|public|<a href="#all()">all</a>|### Get collection as an array|
|public|<a href="#count()">count</a>|### Count elements of an object|
|public|<a href="#countmultidimensional()">countMultidimensional</a>|### Count elements in Collectables, counted recursively|
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
|public|<a href="#filter()">filter</a>|### Filter items from collection|
|public|<a href="#reject()">reject</a>|### Reject items from collection|
|public|<a href="#offsetexists()">offsetExists</a>|### Whether an offset exists|
|public|<a href="#offsetget()">offsetGet</a>|### Offset to retrieve|
|public|<a href="#offsetset()">offsetSet</a>|### Assign a value to the specified offset|
|public|<a href="#offsetunset()">offsetUnset</a>|### Unset an offset|
|public|<a href="#getiterator()">getIterator</a>|### Retrieve an external iterator|

## property: storage {id="$storage"}

<code-block lang="php">
    <![CDATA[private \SplFixedArray $storage]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L58">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L58">
                    View blame
                </a>
            </def></deflist>
## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public Fix::jsonSerialize():array]]>
</code-block>













### ### Specify data which should be serialized to JSON



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L776">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L776">
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
        <list><li>array - <format style="italic">Data that can be serialized by json_encode().</format></li></list>
    </def>
</deflist>
## method: __serialize {id="__serialize()"}

<code-block lang="php">
    <![CDATA[public Fix::__serialize():array]]>
</code-block>













### ### Construct and return an associative array of key/value pairs that represent the serialized form of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L789">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L789">
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
        <list><li>array - <format style="italic">An associative array of key/value pairs that represent the serialized form of the object.</format></li></list>
    </def>
</deflist>
## method: __unserialize {id="__unserialize()"}

<code-block lang="php">
    <![CDATA[public Fix::__unserialize(array $data)]]>
</code-block>













### ### Converts from serialized data back to the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L802">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L802">
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
        <list><li><a href="Iterables.md#count()">\FireHub\Core\Support\LowLevel\Iterables::count()</a>  - <format style="italic">To count collection items.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$data</format> - <format style="italic">
Serialized data.
</format></li></list>
    </def>
</deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Fix::__construct(\SplFixedArray<mixed> $storage):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L57">
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
        <list><li><a href="SplFixedArray&lt;mixed&gt;.md">\SplFixedArray&lt;mixed&gt;</a> <format style="bold">$storage</format> - <format style="italic">
Fixed the array underlying data.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: fromArray {id="fromarray()"}

<code-block lang="php">
    <![CDATA[public static Fix::fromArray(array $array)]]>
</code-block>













### ### Create a collection from a provided array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L68">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L68">
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
        <list><li><a href="Arr.md#values()">\FireHub\Core\Support\LowLevel\Arr::values()</a>  - <format style="italic">To get values from array argument.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array <format style="bold">$array</format> - <format style="italic">
Array from which a new collection will be created.
</format></li></list>
    </def>
</deflist>
## method: all {id="all()"}

<code-block lang="php">
    <![CDATA[public Fix::all():array]]>
</code-block>













### ### Get collection as an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L96">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L96">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0 - * @example
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->all();

// ['one', 'two', 'three']
```</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic">Collection items as an array.</format></li></list>
    </def>
</deflist>
## method: count {id="count()"}

<code-block lang="php">
    <![CDATA[public Fix::count()]]>
</code-block>













### ### Count elements of an object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L124">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L124">
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
        <list><li><a href="Iterator.md#count()">\FireHub\Core\Support\LowLevel\Iterator::count()</a>  - <format style="italic">To count storage items.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Fix.md#last()">\FireHub\Core\Support\Collection\Type\Fix::last()</a>  - <format style="italic">To count elements in the iterator.</format></li><li><a href="Fix.md#isempty()">\FireHub\Core\Support\Collection\Type\Fix::isEmpty()</a>  - <format style="italic">To check if the number of collection items is 0.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->count();

// 3
```

## method: countMultidimensional {id="countmultidimensional()"}

<code-block lang="php">
    <![CDATA[public Fix::countMultidimensional()]]>
</code-block>













### ### Count elements in Collectables, counted recursively



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L159">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L159">
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
        <list><li><a href="CountCollectables.md">\FireHub\Core\Support\Collection\Helpers\CountCollectables</a>  - <format style="italic">To count elements in Collectables, counted recursively.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int Number of elements of an object.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;
use FireHub\Core\Support\Collection\Helpers\CountCollectables;

$collection = Collection::fixed(function (SplFixedArray $storage):void {
 $storage[0] = Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]);
 $storage[1] = 'one';
 $storage[2] = 'two';
 $storage[3] = Collection::fixed(function (SplFixedArray $sub_storage):void {
     $sub_storage[0] = Collection::list([1,2]);
     $sub_storage[1] = Collection::list([1,2]);
 }, 2);
}, 4);

$collection->countCollectables();

// 17
```

## method: first {id="first()"}

<code-block lang="php">
    <![CDATA[public Fix::first(?callable $callback = null)]]>
</code-block>













### ### Get first item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L201">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L201">
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
        <list><li><a href="Fix.md#contains()">\FireHub\Core\Support\Collection\Type\Fix::contains()</a>  - <format style="italic">Used to search string value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
If callback is used, the method will return the first item that passes the truth test.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->first();

// 'one'
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->first(function ($value) {
 return $value === 'two;
});

// 'two'
```

## method: firstKey {id="firstkey()"}

<code-block lang="php">
    <![CDATA[public Fix::firstKey(?callable $callback = null)]]>
</code-block>













### ### Get first key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L252">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L252">
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
        <list><li><a href="Fix.md#search()">\FireHub\Core\Support\Collection\Type\Fix::search()</a>  - <format style="italic">To get the first key from a collection.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
If callback is used, the method will return the first key that passes the truth test.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->firstKey();

// 0
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->firstKey(function ($value) {
 return $value === 'two';
});

// 1
```

## method: last {id="last()"}

<code-block lang="php">
    <![CDATA[public Fix::last(?callable $callback = null)]]>
</code-block>













### ### Get last item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L309">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L309">
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
        <list><li><a href="Fix.md#count()">\FireHub\Core\Support\Collection\Type\Fix::count()</a>  - <format style="italic">To count elements in the iterator.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or callable <format style="bold">$callback</format> = null - <format style="italic">[optional] 
If callback is used, the method will return the last item that passes the truth test.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->last();

// 'three'
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->last(function ($value) {
 return $value === 'two';
});

// 'two'
```

## method: lastKey {id="lastkey()"}

<code-block lang="php">
    <![CDATA[public Fix::lastKey(?callable $callback = null)]]>
</code-block>













### ### Get last key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L362">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L362">
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
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->lastKey();

// 2
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->lastKey(function ($value) {
 return $value === 'two';
});

// 1
```

## method: each {id="each()"}

<code-block lang="php">
    <![CDATA[public Fix::each(callable $callback, int $limit = 1000000)]]>
</code-block>













### ### Call user-generated function on each item in collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L401">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L401">
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
</format></li><li>int <format style="bold">$limit</format> = 1000000 - <format style="italic">[optional] 
Maximum number of elements that is allowed to be iterated.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->each(function ($value) {
 if ($value === 'four') return false;
});

// true
```

## method: every {id="every()"}

<code-block lang="php">
    <![CDATA[public Fix::every(callable $callback)]]>
</code-block>













### ### Verify that all items of a collection pass a given truth test



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L437">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L437">
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
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->every(function ($value) {
 return $value !== 'four';
});

// true
```

## method: search {id="search()"}

<code-block lang="php">
    <![CDATA[public Fix::search(mixed $value)]]>
</code-block>













### ### Searches the collection for a given value and returns the first corresponding key if successful



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L485">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L485">
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
        <list><li><a href="Fix.md#firstkey()">\FireHub\Core\Support\Collection\Type\Fix::firstKey()</a>  - <format style="italic">To get the first key from a collection.</format></li><li><a href="DataIs.md#callable()">\FireHub\Core\Support\LowLevel\DataIs::callable()</a>  - <format style="italic">To check if $value is callable.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Fix.md#contains()">\FireHub\Core\Support\Collection\Type\Fix::contains()</a>  - <format style="italic">Used to search for a callable value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
The searched value.
If the value is a string, the comparison is done in a case-sensitive manner.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->search('two');

// 1
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->search(function ($value) {
 return $value !== 'one';
});

// 1
```

## method: isEmpty {id="isempty()"}

<code-block lang="php">
    <![CDATA[public Fix::isEmpty()]]>
</code-block>













### ### Check if a collection is empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L518">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L518">
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
        <list><li><a href="Fix.md#count()">\FireHub\Core\Support\Collection\Type\Fix::count()</a>  - <format style="italic">To check if the number of collection items is 0.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Fix.md#isnotempty()">\FireHub\Core\Support\Collection\Type\Fix::isNotEmpty()</a>  - <format style="italic">To check if a collection is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->isEmpty();

// false
```

## method: isNotEmpty {id="isnotempty()"}

<code-block lang="php">
    <![CDATA[public Fix::isNotEmpty()]]>
</code-block>













### ### Check if a collection is not empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L546">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L546">
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
        <list><li><a href="Fix.md#isempty()">\FireHub\Core\Support\Collection\Type\Fix::isEmpty()</a>  - <format style="italic">To check if a collection is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->isNotEmpty();

// true
```

## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public Fix::contains(mixed $value)]]>
</code-block>













### ### Determines whether a collection contains a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L592">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L592">
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
        <list><li><a href="DataIs.md#callable()">\FireHub\Core\Support\LowLevel\DataIs::callable()</a>  - <format style="italic">To check if argument $value is callable.</format></li><li><a href="Fix.md#first()">\FireHub\Core\Support\Collection\Type\Fix::first()</a>  - <format style="italic">Used to search string value.</format></li><li><a href="Fix.md#search()">\FireHub\Core\Support\Collection\Type\Fix::search()</a>  - <format style="italic">Used to search for a callable value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Fix.md#doesntcontains()">\FireHub\Core\Support\Collection\Type\Fix::doesntContains()</a>  - <format style="italic">To determine whether a collection contains a given item.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
The value to check.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->contains('one');

// true
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->contains(function ($value) {
 return $value === 'one';
});

// true
```

## method: doesntContains {id="doesntcontains()"}

<code-block lang="php">
    <![CDATA[public Fix::doesntContains(mixed $value)]]>
</code-block>













### ### Determines whether collection doesn't contain a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L638">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L638">
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
        <list><li><a href="Fix.md#contains()">\FireHub\Core\Support\Collection\Type\Fix::contains()</a>  - <format style="italic">To determine whether a collection contains a given item.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$value</format> - <format style="italic">
The value to check.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->doesntContain('four');

// true
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$collection->doesntContain(function ($value) {
 return $value === 'four';
});

// true
```

## method: filter {id="filter()"}

<code-block lang="php">
    <![CDATA[public Fix::filter(callable $callback)]]>
</code-block>













### ### Filter items from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L666">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L666">
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
        <list><li><a href="Fix.md#reject()">\FireHub\Core\Support\Collection\Type\Fix::reject()</a>  - <format style="italic">To filter elements in an array.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
Function to call on each item in a collection.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$filtered = $collection->filter(function ($value) {
 return $value !== 'one';
});

// ['two', 'three']
```

## method: reject {id="reject()"}

<code-block lang="php">
    <![CDATA[public Fix::reject(callable $callback)]]>
</code-block>













### ### Reject items from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L705">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L705">
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
        <list><li><a href="Fix.md#filter()">\FireHub\Core\Support\Collection\Type\Fix::filter()</a>  - <format style="italic">To filter elements in an array.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">$callback 
Function to call on each item in a collection.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);

$reject = $collection->reject(function ($value) {
 return $value === 'one';
});

// ['two', 'three']
```

## method: offsetExists {id="offsetexists()"}

<code-block lang="php">
    <![CDATA[public Fix::offsetExists(mixed $offset)]]>
</code-block>













### ### Whether an offset exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L717">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L717">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to check for.
</format></li></list>
    </def>
</deflist>
## method: offsetGet {id="offsetget()"}

<code-block lang="php">
    <![CDATA[public Fix::offsetGet(mixed $offset)]]>
</code-block>













### ### Offset to retrieve



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L728">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L728">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to retrieve.
</format></li></list>
    </def>
</deflist>
## method: offsetSet {id="offsetset()"}

<code-block lang="php">
    <![CDATA[public Fix::offsetSet(mixed $offset, mixed $value)]]>
</code-block>













### ### Assign a value to the specified offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L739">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L739">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to assign the value to.
</format></li><li>mixed <format style="bold">$value</format> - <format style="italic">
Value to set.
</format></li></list>
    </def>
</deflist>
## method: offsetUnset {id="offsetunset()"}

<code-block lang="php">
    <![CDATA[public Fix::offsetUnset(mixed $offset)]]>
</code-block>













### ### Unset an offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L750">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L750">
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
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to unset.
</format></li></list>
    </def>
</deflist>
## method: getIterator {id="getiterator()"}

<code-block lang="php">
    <![CDATA[public Fix::getIterator():\Traversable<int,mixed|null>]]>
</code-block>













### ### Retrieve an external iterator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L763">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Fix.php#L763">
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
        <list><li><a href="Traversable&lt;int,mixed.md">\Traversable&lt;int,mixed</a> or null&gt; - <format style="italic">Collection items as an array.</format></li></list>
    </def>
</deflist>