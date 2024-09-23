<title># Associative</title>

<code-block lang="php">
<![CDATA[class \FireHub\Core\Support\Collection\Type\Associative()]]>
</code-block>













### ### Associative array collection type

<p><format style="italic">Collections that use named keys that you assign to them.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Collection\Type\Associative
    </def><def title="Parent class:">
        <a href="Arr.md">\FireHub\Core\Support\Collection\Type\Arr</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L30">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php">
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
        <list><li><a href="Arr.md#countby()">\FireHub\Core\Support\Collection\Type\Arr::countBy()</a>  - <format style="italic">As return.</format></li><li><a href="Arr.md#countbyvalues()">\FireHub\Core\Support\Collection\Type\Arr::countByValues()</a>  - <format style="italic">As return.</format></li><li><a href="Collection.md#associative()">\FireHub\Core\Support\Collection::associative()</a>  - <format style="italic">As return.</format></li></list>
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
|protected|<a href="#$storage">storage</a>|### Array underlying data||

### Methods
| Type | Name | Title |
|:-----|:-----|:------|
|public|<a href="#__construct()">__construct</a>|### Constructor|
|public|<a href="#first()">first</a>|### Get first item from collection|
|public|<a href="#firstkey()">firstKey</a>|### Get first key from collection|
|public|<a href="#last()">last</a>|### Get last item from collection|
|public|<a href="#lastkey()">lastKey</a>|### Get last key from collection|
|public|<a href="#each()">each</a>|### Call user-generated function on each item in collection|
|public|<a href="#every()">every</a>|### Verify that all items of a collection pass a given truth test|
|public|<a href="#filter()">filter</a>|### Filter items from collection|
|public|<a href="#reject()">reject</a>|### Reject items from collection|
|public|<a href="#offsetset()">offsetSet</a>|### Assign a value to the specified offset|
|inherited public|<a href="#jsonserialize()">jsonSerialize</a>|### Specify data which should be serialized to JSON|
|inherited public|<a href="#__serialize()">__serialize</a>|### Construct and return an associative array of key/value pairs that represent the serialized form of the object|
|inherited public|<a href="#__unserialize()">__unserialize</a>|### Converts from serialized data back to the object|
|inherited public static |<a href="#fromarray()">fromArray</a>|### Create a collection from a provided array|
|inherited public|<a href="#all()">all</a>|### Get collection as an array|
|inherited public|<a href="#count()">count</a>|### Count elements of an object|
|inherited public|<a href="#countrecursively()">countRecursively</a>|### Recursively count elements|
|inherited public|<a href="#countmultidimensional()">countMultidimensional</a>|### Count elements in Collectables, counted recursively|
|inherited public|<a href="#countby()">countBy</a>|### Counts the occurrences of values with callback function|
|inherited public|<a href="#countbyvalues()">countByValues</a>|### Counts the occurrences of values in the collection|
|inherited public|<a href="#search()">search</a>|### Searches the collection for a given value and returns the first corresponding key if successful|
|inherited public|<a href="#isempty()">isEmpty</a>|### Check if a collection is empty|
|inherited public|<a href="#isnotempty()">isNotEmpty</a>|### Check if a collection is not empty|
|inherited public|<a href="#contains()">contains</a>|### Determines whether a collection contains a given item|
|inherited public|<a href="#doesntcontains()">doesntContains</a>|### Determines whether collection doesn't contain a given item|
|inherited public|<a href="#groupby()">groupBy</a>|### Group collection by user-defined function until a result is true|
|inherited public|<a href="#offsetexists()">offsetExists</a>|### Whether an offset exists|
|inherited public|<a href="#offsetget()">offsetGet</a>|### Offset to retrieve|
|inherited public|<a href="#offsetunset()">offsetUnset</a>|### Unset an offset|
|inherited public|<a href="#getiterator()">getIterator</a>|### Retrieve an external iterator|

## property: storage {id="$storage"}

<code-block lang="php">
    <![CDATA[protected array $storage]]>
</code-block>











### ### Array underlying data



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L42">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L42">
                    View blame
                </a>
            </def></deflist>
## method: __construct {id="__construct()"}

<code-block lang="php">
    <![CDATA[public Associative::__construct(array $storage)]]>
</code-block>













### ### Constructor



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L41">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L41">
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
        <list><li>array <format style="bold">$storage</format></li></list>
    </def>
</deflist>
## method: first {id="first()"}

<code-block lang="php">
    <![CDATA[public Associative::first(?callable $callback = null)]]>
</code-block>













### ### Get first item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L75">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L75">
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
        <list><li><a href="Arr.md#first()">\FireHub\Core\Support\Collection\Type\Arr::first()</a>  - <format style="italic">As parent method if $callback doesn't exist.</format></li></list>
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->first();

// 'John'
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->first(function ($value, $key) {
 return $key <> 'firstname';
});

// 'Doe'
```

## method: firstKey {id="firstkey()"}

<code-block lang="php">
    <![CDATA[public Associative::firstKey(?callable $callback = null)]]>
</code-block>













### ### Get first key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L120">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L120">
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
        <list><li><a href="Arr.md#firstkey()">\FireHub\Core\Support\Collection\Type\Arr::firstKey()</a>  - <format style="italic">As parent method if $callback doesn't exist.</format></li></list>
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->firstKey();

// 'firstname'
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->firstKey(function ($value, $key) {
 return $key <> 'firstname';
});

// 'lastname'
```

## method: last {id="last()"}

<code-block lang="php">
    <![CDATA[public Associative::last(?callable $callback = null)]]>
</code-block>













### ### Get last item from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L165">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L165">
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
        <list><li><a href="Arr.md#last()">\FireHub\Core\Support\Collection\Type\Arr::last()</a>  - <format style="italic">As parent method if $callback doesn't exist.</format></li></list>
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->last();

// 2
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->last(function ($value, $key) {
 return $key <> 10;
});

// 25
```

## method: lastKey {id="lastkey()"}

<code-block lang="php">
    <![CDATA[public Associative::lastKey(?callable $callback = null)]]>
</code-block>













### ### Get last key from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L212">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L212">
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
        <list><li><a href="Arr.md#lastkey()">\FireHub\Core\Support\Collection\Type\Arr::lastKey()</a>  - <format style="italic">As parent method if $callback doesn't exist.</format></li></list>
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->lastKey();

// 10
```
With $callback parameter.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->lastKey(function ($value, $key) {
 return $key <> 2;
});

// 'age'
```

## method: each {id="each()"}

<code-block lang="php">
    <![CDATA[public Associative::each(callable $callback, int $limit = 1000000)]]>
</code-block>













### ### Call user-generated function on each item in collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L247">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L247">
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->each(function ($value, $key) {
 if ($value === 'Jack') return false;
});

// true
```

## method: every {id="every()"}

<code-block lang="php">
    <![CDATA[public Associative::every(callable $callback)]]>
</code-block>













### ### Verify that all items of a collection pass a given truth test



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L279">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L279">
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$collection->every(function ($value, $key) {
 return $key !== 'gender';
});

// true
```

## method: filter {id="filter()"}

<code-block lang="php">
    <![CDATA[public Associative::filter(callable $callback)]]>
</code-block>













### ### Filter items from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L308">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L308">
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
        <list><li><a href="Arr.md#filter()">\FireHub\Core\Support\LowLevel\Arr::filter()</a>  - <format style="italic">To filter elements in an array.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Associative.md#reject()">\FireHub\Core\Support\Collection\Type\Associative::reject()</a>  - <format style="italic">To filter elements in an array.</format></li></list>
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$filtered = $collection->filter(function ($value, $key) {
 return $key !== 'firstname' && $value !== 'Doe';
});

// ['age' => 25, 10 => 2]
```

## method: reject {id="reject()"}

<code-block lang="php">
    <![CDATA[public Associative::reject(callable $callback)]]>
</code-block>













### ### Reject items from collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L336">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L336">
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
        <list><li><a href="Associative.md#filter()">\FireHub\Core\Support\Collection\Type\Associative::filter()</a>  - <format style="italic">To filter elements in an array.</format></li></list>
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

$collection = Collection::associative(fn():array => ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2]);

$filtered = $collection->reject(function ($value, $key) {
 return $key === 'age' || $value === 2;
});

// ['firstname' => 'John', 'lastname' => 'Doe']
```

## method: offsetSet {id="offsetset()"}

<code-block lang="php">
    <![CDATA[public Associative::offsetSet(?array-key $offset, \FireHub\Core\Support\Collection\Type\TValue $value)]]>
</code-block>













### ### Assign a value to the specified offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L355">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Associative.php#L355">
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
        <list><li>null or array-key <format style="bold">$offset</format> - <format style="italic">
Offset to assign the value to.
</format></li><li><a href="TValue.md">\FireHub\Core\Support\Collection\Type\TValue</a> <format style="bold">$value</format> - <format style="italic">
Value to set.
</format></li></list>
    </def>
</deflist>
## method: jsonSerialize {id="jsonserialize()"}

<code-block lang="php">
    <![CDATA[public Arr::jsonSerialize()]]>
</code-block>













### ### Specify data which should be serialized to JSON



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L915">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L915">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## method: __serialize {id="__serialize()"}

<code-block lang="php">
    <![CDATA[public Arr::__serialize()]]>
</code-block>













### ### Construct and return an associative array of key/value pairs that represent the serialized form of the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L928">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L928">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
## method: __unserialize {id="__unserialize()"}

<code-block lang="php">
    <![CDATA[public Arr::__unserialize(array $data)]]>
</code-block>













### ### Converts from serialized data back to the object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L943">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L943">
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
        <list><li>array <format style="bold">$data</format> - <format style="italic">
Serialized data.
</format></li></list>
    </def>
</deflist>
## method: fromArray {id="fromarray()"}

<code-block lang="php">
    <![CDATA[public static Arr::fromArray(array $array)]]>
</code-block>













### ### Create a collection from a provided array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L78">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L78">
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
    <![CDATA[public Arr::all()]]>
</code-block>













### ### Get collection as an array



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L102">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L102">
                    View blame
                </a>
            </def></deflist>
<deflist>
    <def title="Version history:">
        <list><li>1.0.0</li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->all();

// ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']
```

## method: count {id="count()"}

<code-block lang="php">
    <![CDATA[public Arr::count()]]>
</code-block>













### ### Count elements of an object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L126">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L126">
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
        <list><li><a href="Iterables.md#count()">\FireHub\Core\Support\LowLevel\Iterables::count()</a>  - <format style="italic">To count storage items.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->count();

// 6
```

## method: countRecursively {id="countrecursively()"}

<code-block lang="php">
    <![CDATA[public Arr::countRecursively()]]>
</code-block>













### ### Recursively count elements



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L155">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L155">
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
        <list><li><a href="Iterables.md#count()">\FireHub\Core\Support\LowLevel\Iterables::count()</a>  - <format style="italic">To count storage items.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li> - <format style="italic">non-negative-int The number of elements in an object counted recursively.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => [
 ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
 ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
 ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
]);

$collection->countRecursively();

// 14
```

## method: countMultidimensional {id="countmultidimensional()"}

<code-block lang="php">
    <![CDATA[public Arr::countMultidimensional()]]>
</code-block>













### ### Count elements in Collectables, counted recursively



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L186">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L186">
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

$collection = Collection::list(fn():array => [
 Collection::list([Collection::list([1,2,3]), Collection::list([1,2])]),
 'one',
 'two',
 Collection::list([Collection::list([1,2]),Collection::list([1,2])])
]);

$collection->countCollectables();

// 17
```

## method: countBy {id="countby()"}

<code-block lang="php">
    <![CDATA[public Arr::countBy(callable $callback):\FireHub\Core\Support\Collection\Type\Associative<array-key,positive-int>]]>
</code-block>













### ### Counts the occurrences of values with callback function



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L219">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L219">
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
        <list><li><a href="Associative.md">\FireHub\Core\Support\Collection\Type\Associative</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
Count all items by custom callable.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If counted values are neither string nor int.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Associative&lt;array-key,positive-int&gt;.md">\FireHub\Core\Support\Collection\Type\Associative&lt;array-key,positive-int&gt;</a> - <format style="italic">New collection with group items.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$count = $collection->countBy(function ($value, $key) {
 return substr($value, 0, 1);
});

// ['J' => 4, 'R' => 2]
```

## method: countByValues {id="countbyvalues()"}

<code-block lang="php">
    <![CDATA[public Arr::countByValues(null|int|string $column = null):\FireHub\Core\Support\Collection\Type\Associative<array-key,positive-int>]]>
</code-block>













### ### Counts the occurrences of values in the collection



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L284">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L284">
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
        <list><li><a href="Associative.md">\FireHub\Core\Support\Collection\Type\Associative</a>  - <format style="italic">As return.</format></li><li><a href="Arr.md#countvalues()">\FireHub\Core\Support\LowLevel\Arr::countValues()</a>  - <format style="italic">To count the occurrences of each distinct value in a collection.</format></li><li><a href="Arr.md#column()">\FireHub\Core\Support\LowLevel\Arr::column()</a>  - <format style="italic">To get the values from a single column in the collection.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>null or int or string <format style="bold">$column</format> = null - <format style="italic">[optional] 
Column to count by.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Associative&lt;array-key,positive-int&gt;.md">\FireHub\Core\Support\Collection\Type\Associative&lt;array-key,positive-int&gt;</a> - <format style="italic">New collection with counted values.</format></li></list>
    </def>
</deflist>
Using countBy method.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$count = $collection->countBy();

// ['John' => 1, 'Jane' => 3, 'Richard' => 2]
```
Counting a multidimensional collection.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list()->multidimensional(fn():array => [
 ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25, 10 => 2],
 ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21, 10 => 1],
 ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
]);

$count = $collection->countByValues('lastname');

// ['Doe' => 2, 'Roe' => 1]
```

## method: search {id="search()"}

<code-block lang="php">
    <![CDATA[public Arr::search(mixed $value)]]>
</code-block>













### ### Searches the collection for a given value and returns the first corresponding key if successful



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L573">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L573">
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
        <list><li><a href="Arr.md#firstkey()">\FireHub\Core\Support\Collection\Type\Arr::firstKey()</a>  - <format style="italic">To get the first key from a collection.</format></li><li><a href="DataIs.md#callable()">\FireHub\Core\Support\LowLevel\DataIs::callable()</a>  - <format style="italic">To check if $value is callable.</format></li><li><a href="Arr.md#search()">\FireHub\Core\Support\LowLevel\Arr::search()</a>  - <format style="italic">To search the array for a given value and returns the first corresponding key if successful.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Arr.md#contains()">\FireHub\Core\Support\Collection\Type\Arr::contains()</a>  - <format style="italic">Used to search for a callable value.</format></li></list>
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

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->search('Jane');

// 1
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->search(function ($value, $key) {
 return $value !== 'John';
});

// 1
```

## method: isEmpty {id="isempty()"}

<code-block lang="php">
    <![CDATA[public Arr::isEmpty()]]>
</code-block>













### ### Check if a collection is empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L599">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L599">
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
        <list><li><a href="is_empty.md">\FireHub\Core\Support\Helpers\Arr\is_empty()</a>  - <format style="italic">To check if an array is empty.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Arr.md#isnotempty()">\FireHub\Core\Support\Collection\Type\Arr::isNotEmpty()</a>  - <format style="italic">To check if a collection is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->isEmpty();

// false
```

## method: isNotEmpty {id="isnotempty()"}

<code-block lang="php">
    <![CDATA[public Arr::isNotEmpty()]]>
</code-block>













### ### Check if a collection is not empty



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L623">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L623">
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
        <list><li><a href="Arr.md#isempty()">\FireHub\Core\Support\Collection\Type\Arr::isEmpty()</a>  - <format style="italic">To check if a collection is empty.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->isNotEmpty();

// true
```

## method: contains {id="contains()"}

<code-block lang="php">
    <![CDATA[public Arr::contains(mixed $value)]]>
</code-block>













### ### Determines whether a collection contains a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L661">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L661">
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
        <list><li><a href="DataIs.md#callable()">\FireHub\Core\Support\LowLevel\DataIs::callable()</a>  - <format style="italic">To check if argument $value is callable.</format></li><li><a href="Arr.md#first()">\FireHub\Core\Support\Collection\Type\Arr::first()</a>  - <format style="italic">Used to search string value.</format></li><li><a href="Arr.md#search()">\FireHub\Core\Support\Collection\Type\Arr::search()</a>  - <format style="italic">Used to search for a callable value.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method is used by:">
        <list><li><a href="Arr.md#doesntcontains()">\FireHub\Core\Support\Collection\Type\Arr::doesntContains()</a>  - <format style="italic">To determine whether a collection contains a given item.</format></li></list>
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

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->contains('Jane');

// true
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->contains(function ($value) {
 return $value === 'Jane';
});

// true
```

## method: doesntContains {id="doesntcontains()"}

<code-block lang="php">
    <![CDATA[public Arr::doesntContains(mixed $value)]]>
</code-block>













### ### Determines whether collection doesn't contain a given item



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L699">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L699">
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
        <list><li><a href="Arr.md#contains()">\FireHub\Core\Support\Collection\Type\Arr::contains()</a>  - <format style="italic">To determine whether a collection contains a given item.</format></li></list>
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

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->doesntContain('Jack');

// true
```
With callable.
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn():array => ['John', 'Jane', 'Jane', 'Jane', 'Richard', 'Richard']);

$collection->doesntContain(function ($value) {
 return $value === 'Jack';
});

// true
```

## method: groupBy {id="groupby()"}

<code-block lang="php">
    <![CDATA[public Arr::groupBy(callable $callback)]]>
</code-block>













### ### Group collection by user-defined function until a result is true



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L814">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L814">
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
        <list><li><a href="Arr.md#reduce()">\FireHub\Core\Support\LowLevel\Arr::reduce()</a>  - <format style="italic">To iteratively reduce the array to a single value using a
callback function.</format></li><li><a href="Arr.md#keys()">\FireHub\Core\Support\LowLevel\Arr::keys()</a>  - <format style="italic">To return all the keys or a subset of the keys for an array.</format></li><li><a href="Arr.md#count()">\FireHub\Core\Support\LowLevel\Arr::count()</a>  - <format style="italic">To count all elements in the array.</format></li><li><a href="Arr.md#end()">\FireHub\Core\Support\LowLevel\Arr::end()</a>  - <format style="italic">To set the internal pointer of an array to its last element.</format></li><li><a href="Arr.md#key()">\FireHub\Core\Support\LowLevel\Arr::key()</a>  - <format style="italic">To fetch a key from an array.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$callback</format> - <format style="italic">
User-defined function.
</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::create()->indexed(fn():array => [1, 2, 3, 4, 13, 22, 27, 28, 29]);

$chunks = $collection->groupBy(function ($prev, $curr) {
 return ($curr – $prev) > 1;
});

// [[1, 2, 3, 4], [13], [22], [27, 28, 29]]
```
```php
use FireHub\Core\Support\Collections\Collection;

$collection = Collection::list(fn ():array => [
 ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
 ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21],
 ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
]);

$chunks = $collection->groupBy(function ($prev, $curr) {
 return $curr['lastname'] !== 'Doe';
});

// [
//   [
//       ['firstname' => 'John', 'lastname' => 'Doe', 'age' => 25],
//       ['firstname' => 'Jane', 'lastname' => 'Doe', 'age' => 21]
//   ],
//   [
//       ['firstname' => 'Richard', 'lastname' => 'Roe', 'age' => 27]
//   ]
// ]
```

## method: offsetExists {id="offsetexists()"}

<code-block lang="php">
    <![CDATA[public Arr::offsetExists(mixed $offset)]]>
</code-block>













### ### Whether an offset exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L847">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L847">
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
        <list><li><a href="Arr.md#offsetget()">\FireHub\Core\Support\Collection\Type\Arr::offsetGet()</a>  - <format style="italic">To check if an offset exists.</format></li></list>
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
    <![CDATA[public Arr::offsetGet(mixed $offset)]]>
</code-block>













### ### Offset to retrieve



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L860">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L860">
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
        <list><li><a href="Arr.md#offsetexists()">\FireHub\Core\Support\Collection\Type\Arr::offsetExists()</a>  - <format style="italic">To check if an offset exists.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>mixed <format style="bold">$offset</format> - <format style="italic">
Offset to retrieve.
</format></li></list>
    </def>
</deflist>
## method: offsetUnset {id="offsetunset()"}

<code-block lang="php">
    <![CDATA[public Arr::offsetUnset(mixed $offset)]]>
</code-block>













### ### Unset an offset



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L889">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L889">
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
    <![CDATA[public Arr::getIterator():\Traversable<\FireHub\Core\Support\Collection\Type\TKey,\FireHub\Core\Support\Collection\Type\TValue>]]>
</code-block>













### ### Retrieve an external iterator



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L902">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/collection/type/firehub.Arr.php#L902">
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
        <list><li><a href="TValue&gt;.md">\Traversable&lt;\FireHub\Core\Support\Collection\Type\TKey,\FireHub\Core\Support\Collection\Type\TValue&gt;</a> - <format style="italic">Collection items as an array.</format></li></list>
    </def>
</deflist>