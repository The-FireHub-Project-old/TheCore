<title># Gen</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\Collection\Type\Gen()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Lazy collection type

<p><format style="italic">Lazy collection allows you to work with huge datasets while keeping memory usage low.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Collection\Type\Gen
    </def><def title="Implements:">
        <list><li><a href="Init.md">\FireHub\Core\Base\Init</a></li><li><a href="Collectable.md">\FireHub\Core\Support\Contracts\HighLevel\Collectable</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="Concrete.md">\FireHub\Core\Base\Trait\Concrete</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L38">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php">
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
        <list><li><a href="Collection.md#lazy()">\FireHub\Core\Support\Collection::lazy()</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
### Templates
<deflist>
    <def title="This class has templates:">
        <list><li>TKey of array-key</li><li>TValue</li></list>
    </def>
</deflist>
### Properties
| Name | Title | Value | Default |
|:-----|:------|:------|:--------|
|private|<a href="#$callable">callable</a>|||

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
|public|<a href="#contains()">contains</a>|### Determines whether a collection contains a given item|
|public|<a href="#doesntcontains()">doesntContains</a>|### Determines whether collection doesn't contain a given item|
|public|<a href="#isempty()">isEmpty</a>|### Check if a collection is empty|
|public|<a href="#isnotempty()">isNotEmpty</a>|### Check if a collection is not empty|
|public|<a href="#getiterator()">getIterator</a>|### Retrieve an external iterator|
|private|<a href="#invoke()">invoke</a>|### Invoke storage|

## property: callable {id="$callable"}

<code-block lang="php">
    <![CDATA[private \Closure $callable]]>
</code-block>















<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L57">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L57">
                    View blame
                </a>
            </def></deflist>
## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public Gen::jsonSerialize()]]>
</code-block>













### ### Specify data which should be serialized to JSON



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L615">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L615">
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
        <list><li><a href="Gen.md#all()">\FireHub\Core\Support\Collection\Type\Gen::all()</a>  - <format style="italic">To get a collection as an array.</format></li></list>
    </def>
</deflist>
## method: __serialize {id="__serialize()"}

<code-block lang="php">
    <![CDATA[public Gen::__serialize()]]>
</code-block>













### ### Construct and return an associative array of key/value pairs that represent the serialized form of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L630">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L630">
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
        <list><li><a href="Gen.md#all()">\FireHub\Core\Support\Collection\Type\Gen::all()</a>  - <format style="italic">To get a collection as an array.</format></li></list>
    </def>
</deflist>
## method: __unserialize {id="__unserialize()"}

<code-block lang="php">
    <![CDATA[public Gen::__unserialize(array $data)]]>
</code-block>













### ### Converts from serialized data back to the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L647">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L647">
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
        <list><li><a href="Gen.md#invoke()">\FireHub\Core\Support\Collection\Type\Gen::invoke()</a>  - <format style="italic">To invoke storage.</format></li></list>
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
    <![CDATA[public Gen::__construct(callable $callable):void]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L56">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L56">
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
        <list><li>callable <format style="bold">$callable</format> - <format style="italic">
Data from a callable source.
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
    <![CDATA[public static Gen::fromArray(array $array)]]>
</code-block>













### ### Create a collection from a provided array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L67">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L67">
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
        <list><li>array <format style="bold">$array</format> - <format style="italic">
Array from which a new collection will be created.
</format></li></list>
    </def>
</deflist>
## method: all {id="all()"}

<code-block lang="php">
    <![CDATA[public Gen::all()]]>
</code-block>













### ### Get collection as an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L93">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L93">
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
        <list><li><a href="Gen.md#invoke()">\FireHub\Core\Support\Collection\Type\Gen::invoke()</a>  - <format style="italic">To invoke storage.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Gen.md#jsonserialize()">\FireHub\Core\Support\Collection\Type\Gen::jsonSerialize()</a>  - <format style="italic">To get a collection as an array.</format></li><li><a href="Gen.md#__serialize()">\FireHub\Core\Support\Collection\Type\Gen::__serialize()</a>  - <format style="italic">To get a collection as an array.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->all();

// ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]
```

## method: count {id="count()"}

<code-block lang="php">
    <![CDATA[public Gen::count()]]>
</code-block>













### ### Count elements of an object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L117">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L117">
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
        <list><li><a href="Gen.md#last()">\FireHub\Core\Support\Collection\Type\Gen::last()</a>  - <format style="italic">To count elements in the iterator.</format></li><li><a href="Gen.md#lastkey()">\FireHub\Core\Support\Collection\Type\Gen::lastKey()</a>  - <format style="italic">To count elements in the iterator.</format></li><li><a href="Gen.md#isempty()">\FireHub\Core\Support\Collection\Type\Gen::isEmpty()</a>  - <format style="italic">To check if the number of collection items is 0.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->count();

// 5
```

## method: countMultidimensional {id="countmultidimensional()"}

<code-block lang="php">
    <![CDATA[public Gen::countMultidimensional()]]>
</code-block>













### ### Count elements in Collectables, counted recursively



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L150">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L150">
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

$collection = Collection::lazy(function ():Generator {
 yield from [
     Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
     'one',
     'two',
     Collection::list([Collection::list([1,2]),Collection::list([1,2])])
 ];
});

$collection->countCollectables();

// 17
```

## method: first {id="first()"}

<code-block lang="php">
    <![CDATA[public Gen::first(?callable $callback = null)]]>
</code-block>













### ### Get first item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L186">
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
        <list><li><a href="Gen.md#invoke()">\FireHub\Core\Support\Collection\Type\Gen::invoke()</a>  - <format style="italic">To invoke storage.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Gen.md#contains()">\FireHub\Core\Support\Collection\Type\Gen::contains()</a>  - <format style="italic">Used to search string value.</format></li></list>
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

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->first();

// 'John'
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->first(function ($value, $key) {
 return $key <> 'firstname';
});

// 'Doe'
```

## method: firstKey {id="firstkey()"}

<code-block lang="php">
    <![CDATA[public Gen::firstKey(?callable $callback = null)]]>
</code-block>













### ### Get first key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L231">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L231">
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
        <list><li><a href="Gen.md#invoke()">\FireHub\Core\Support\Collection\Type\Gen::invoke()</a>  - <format style="italic">To invoke storage.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Gen.md#search()">\FireHub\Core\Support\Collection\Type\Gen::search()</a>  - <format style="italic">To get the first key from a collection.</format></li></list>
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

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->firstKey();

// 'firstname'
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->firstKey(function ($value, $key) {
 return $key <> 'firstname';
});

// 'lastname'
```

## method: last {id="last()"}

<code-block lang="php">
    <![CDATA[public Gen::last(?callable $callback = null)]]>
</code-block>













### ### Get last item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L276">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L276">
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
        <list><li><a href="Gen.md#count()">\FireHub\Core\Support\Collection\Type\Gen::count()</a>  - <format style="italic">To count elements in the iterator.</format></li></list>
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

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->last();

// 2
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => yield from ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->last(function ($value, $key) {
 return $key <> 10;
});

// 25
```

## method: lastKey {id="lastkey()"}

<code-block lang="php">
    <![CDATA[public Gen::lastKey(?callable $callback = null)]]>
</code-block>













### ### Get last key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L330">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L330">
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
        <list><li><a href="Gen.md#count()">\FireHub\Core\Support\Collection\Type\Gen::count()</a>  - <format style="italic">To count elements in the iterator.</format></li></list>
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

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->lastKey();

// 10
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->lastKey(function ($value, $key) {
 return $key <> 10;
});

// 'age'
```

## method: each {id="each()"}

<code-block lang="php">
    <![CDATA[public Gen::each(callable $callback, int $limit = 1000000)]]>
</code-block>













### ### Call user-generated function on each item in collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L372">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L372">
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

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->each(function ($value, $key) {
 if ($value === 'John') return false;
});

// false
```

## method: every {id="every()"}

<code-block lang="php">
    <![CDATA[public Gen::every(callable $callback)]]>
</code-block>













### ### Verify that all items of a collection pass a given truth test



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L404">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L404">
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

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->every(function ($value, $key) {
 return $key !== 'gender';
});

// true
```

## method: search {id="search()"}

<code-block lang="php">
    <![CDATA[public Gen::search(mixed $value)]]>
</code-block>













### ### Searches the collection for a given value and returns the first corresponding key if successful



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L444">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L444">
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
        <list><li><a href="Gen.md#firstkey()">\FireHub\Core\Support\Collection\Type\Gen::firstKey()</a>  - <format style="italic">To get the first key from a collection.</format></li><li><a href="DataIs.md#callable()">\FireHub\Core\Support\LowLevel\DataIs::callable()</a>  - <format style="italic">To check if $value is callable.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Gen.md#contains()">\FireHub\Core\Support\Collection\Type\Gen::contains()</a>  - <format style="italic">Used to search for a callable value.</format></li></list>
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

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->search('John');

// 'firstname'
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->search(function ($value, $key) {
 return $value !== 'John';
});

// 'lastname'
```

## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public Gen::contains(mixed $value)]]>
</code-block>













### ### Determines whether a collection contains a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L487">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L487">
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
        <list><li><a href="DataIs.md#callable()">\FireHub\Core\Support\LowLevel\DataIs::callable()</a>  - <format style="italic">To check if argument $value is callable.</format></li><li><a href="Gen.md#first()">\FireHub\Core\Support\Collection\Type\Gen::first()</a>  - <format style="italic">Used to search string value.</format></li><li><a href="Gen.md#search()">\FireHub\Core\Support\Collection\Type\Gen::search()</a>  - <format style="italic">Used to search for a callable value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Gen.md#doesntcontains()">\FireHub\Core\Support\Collection\Type\Gen::doesntContains()</a>  - <format style="italic">To determine whether a collection contains a given item.</format></li></list>
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

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->contains('John');

// true
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->contains(function ($value, $key) {
 return $value === 'John';
});

// true
```

## method: doesntContains {id="doesntcontains()"}

<code-block lang="php">
    <![CDATA[public Gen::doesntContains(mixed $value)]]>
</code-block>













### ### Determines whether collection doesn't contain a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L525">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L525">
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
        <list><li><a href="Gen.md#contains()">\FireHub\Core\Support\Collection\Type\Gen::contains()</a>  - <format style="italic">To determine whether a collection contains a given item.</format></li></list>
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

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->doesntContain('Jack');

// true
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->doesntContain(function ($value, $key) {
 return $value === 'Jack';
});

// true
```

## method: isEmpty {id="isempty()"}

<code-block lang="php">
    <![CDATA[public Gen::isEmpty()]]>
</code-block>













### ### Check if a collection is empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L549">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L549">
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
        <list><li><a href="Gen.md#count()">\FireHub\Core\Support\Collection\Type\Gen::count()</a>  - <format style="italic">To check if the number of collection items is 0.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Gen.md#isnotempty()">\FireHub\Core\Support\Collection\Type\Gen::isNotEmpty()</a>  - <format style="italic">To check if a collection is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->isEmpty();

// false
```

## method: isNotEmpty {id="isnotempty()"}

<code-block lang="php">
    <![CDATA[public Gen::isNotEmpty()]]>
</code-block>













### ### Check if a collection is not empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L573">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L573">
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
        <list><li><a href="Gen.md#isempty()">\FireHub\Core\Support\Collection\Type\Gen::isEmpty()</a>  - <format style="italic">To check if a collection is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::lazy(fn():Generator => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->isNotEmpty();

// true
```

## method: getIterator {id="getiterator()"}

<code-block lang="php">
    <![CDATA[public Gen::getIterator():\Traversable<\FireHub\Core\Support\Collection\Type\TKey,\FireHub\Core\Support\Collection\Type\TValue>]]>
</code-block>













### ### Retrieve an external iterator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L588">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L588">
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
        <list><li><a href="Gen.md#invoke()">\FireHub\Core\Support\Collection\Type\Gen::invoke()</a>  - <format style="italic">To invoke storage.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TValue&gt;.md">\Traversable&lt;\FireHub\Core\Support\Collection\Type\TKey,\FireHub\Core\Support\Collection\Type\TValue&gt;</a> - <format style="italic">Collection items as an array.</format></li></list>
    </def>
</deflist>
## method: invoke {id="invoke()"}

<code-block lang="php">
    <![CDATA[private Gen::invoke():\Generator<\FireHub\Core\Support\Collection\Type\TKey,\FireHub\Core\Support\Collection\Type\TValue>]]>
</code-block>













### ### Invoke storage



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L600">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Gen.php#L600">
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
        <list><li><a href="Gen.md#all()">\FireHub\Core\Support\Collection\Type\Gen::all()</a>  - <format style="italic">To invoke storage.</format></li><li><a href="Gen.md#first()">\FireHub\Core\Support\Collection\Type\Gen::first()</a>  - <format style="italic">To invoke storage.</format></li><li><a href="Gen.md#firstkey()">\FireHub\Core\Support\Collection\Type\Gen::firstKey()</a>  - <format style="italic">To invoke storage.</format></li><li><a href="Gen.md#getiterator()">\FireHub\Core\Support\Collection\Type\Gen::getIterator()</a>  - <format style="italic">To invoke storage.</format></li><li><a href="Gen.md#__unserialize()">\FireHub\Core\Support\Collection\Type\Gen::__unserialize()</a>  - <format style="italic">To invoke storage.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TValue&gt;.md">\Generator&lt;\FireHub\Core\Support\Collection\Type\TKey,\FireHub\Core\Support\Collection\Type\TValue&gt;</a> - <format style="italic">Storage data.</format></li></list>
    </def>
</deflist>