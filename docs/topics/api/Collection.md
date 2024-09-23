<title># Collection</title>

<code-block lang="php">
<![CDATA[class \FireHub\Core\Support\Collection()]]>
</code-block>













### ### Collection high-level class

<p><format style="italic">Class allows you to manipulate data maps in various ways.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\Collection
    </def><def title="Implements:">
        <list><li><a href="InitStatic.md">\FireHub\Core\Base\InitStatic</a></li></list>
    </def><def title="Uses:">
        <list><li><a href="ConcreteStatic.md">\FireHub\Core\Base\Trait\ConcreteStatic</a></li></list>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Collection.php#L33">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Collection.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/firehub.Collection.php">
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
|public static |<a href="#list()">list</a>|### Indexed array collection type|
|public static |<a href="#associative()">associative</a>|### Associative array collection type|
|public static |<a href="#fixed()">fixed</a>|### Fixed collection type|
|public static |<a href="#lazy()">lazy</a>|### Lazy collection type|
|public static |<a href="#object()">object</a>|### Object collection type|


## method: list {id="list()"}

<code-block lang="php">
    <![CDATA[public static Collection::list(\FireHub\Core\Support\TValue[]|callable $storage):\FireHub\Core\Support\Collection\Type\Indexed<\FireHub\Core\Support\TValue>]]>
</code-block>













### ### Indexed array collection type

<p><format style="italic">Collections which have numerical indexes in an ordered sequential manner (starting from 0 and ending with n-1).</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Collection.php#L64">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Collection.php#L64">
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
        <list><li><a href="Indexed.md">\FireHub\Core\Support\Collection\Type\Indexed</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has templates:">
        <list><li>TValue</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li><a href="TValue[].md">\FireHub\Core\Support\TValue[]</a> or callable <format style="bold">$storage</format> - <format style="italic">
Array underlying data.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TValue&gt;.md">\FireHub\Core\Support\Collection\Type\Indexed&lt;\FireHub\Core\Support\TValue&gt;</a> - <format style="italic">Indexed collection.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::list(fn ():array => ['one', 'two', 'three']);
```

## method: associative {id="associative()"}

<code-block lang="php">
    <![CDATA[public static Collection::associative(array|\Closure $storage):\FireHub\Core\Support\Collection\Type\Associative<\FireHub\Core\Support\TKey,\FireHub\Core\Support\TValue>]]>
</code-block>













### ### Associative array collection type

<p><format style="italic">Collections that use named keys that you assign to them.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Collection.php#L100">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Collection.php#L100">
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
    <def title="This method has templates:">
        <list><li>TKey of array-key</li><li>TValue</li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>array or <a href="Closure.md">\Closure</a> <format style="bold">$storage</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="TValue&gt;.md">\FireHub\Core\Support\Collection\Type\Associative&lt;\FireHub\Core\Support\TKey,\FireHub\Core\Support\TValue&gt;</a> - <format style="italic">Associative collection.</format></li></list>
    </def>
</deflist>
```php
use FireHub\Core\Support\Collection;

$collection = Collection::associative(fn ():array => [
 'firstname' => 'John',
 'lastname' => 'Doe',
 'age' => 25,
 'height' => '190cm',
 'gender' => 'male'
]);
```

## method: fixed {id="fixed()"}

<code-block lang="php">
    <![CDATA[public static Collection::fixed(callable $storage, int $size):\FireHub\Core\Support\Collection\Type\Fix<mixed>]]>
</code-block>













### ### Fixed collection type

<p><format style="italic">Fixed collection allows only integers as keys, but it is faster and uses less memory than an array collection.
This collection type must be resized manually and allows only integers within the range as indexes.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Collection.php#L135">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Collection.php#L135">
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
        <list><li><a href="Fix.md">\FireHub\Core\Support\Collection\Type\Fix</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>callable <format style="bold">$storage</format> - <format style="italic">
Data from a callable source.
</format></li><li>int <format style="bold">$size</format> - <format style="italic">[optional] 
Size of a collection.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li><a href="Fix&lt;mixed&gt;.md">\FireHub\Core\Support\Collection\Type\Fix&lt;mixed&gt;</a> - <format style="italic">Fixed collection.</format></li></list>
    </def>
</deflist>
Create a new fixed collection.
```php
use FireHub\Core\Support\Collections\Collection;

$collection = Collection::fixed(function ($storage):void {
 $storage[0] = 'one';
 $storage[1] = 'two';
 $storage[2] = 'three';
}, 3);
```

## method: lazy {id="lazy()"}

<code-block lang="php">
    <![CDATA[public static Collection::lazy(callable $callable):\FireHub\Core\Support\Collection\Type\Gen<\FireHub\Core\Support\TKey,\FireHub\Core\Support\TValue>]]>
</code-block>













### ### Lazy collection type

<p><format style="italic">Lazy collection allows you to work with huge datasets while keeping memory usage low.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Collection.php#L169">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Collection.php#L169">
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
        <list><li><a href="Gen.md">\FireHub\Core\Support\Collection\Type\Gen</a>  - <format style="italic">As return.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has templates:">
        <list><li>TKey of array-key</li><li>TValue</li></list>
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
        <list><li><a href="TValue&gt;.md">\FireHub\Core\Support\Collection\Type\Gen&lt;\FireHub\Core\Support\TKey,\FireHub\Core\Support\TValue&gt;</a> - <format style="italic">Lazy collection.</format></li></list>
    </def>
</deflist>
Create a new generator collection.
```php
use FireHub\Core\Support\Collections\Collection;

$collection = Collection::lazy(fn():Generator => yield from ['one', 'two', 'three']);
```

## method: object {id="object()"}

<code-block lang="php">
    <![CDATA[public static Collection::object(callable $callable):\FireHub\Core\Support\Collection\Type\Obj<object,mixed>]]>
</code-block>













### ### Object collection type

<p><format style="italic">Object collection provides a map from objects to data or, by ignoring data, an object set.
This dual purpose can be useful in many cases involving the need to uniquely identify objects.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/firehub.Collection.php#L203">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/firehub.Collection.php#L203">
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
        <list><li><a href="Obj.md">\FireHub\Core\Support\Collection\Type\Obj</a>  - <format style="italic">As return.</format></li></list>
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
        <list><li><a href="Obj&lt;object,mixed&gt;.md">\FireHub\Core\Support\Collection\Type\Obj&lt;object,mixed&gt;</a> - <format style="italic">Object collection.</format></li></list>
    </def>
</deflist>
Create a new object collection.
```php
use FireHub\Core\Support\Collections\Collection;

$cls1 = new stdClass();
$cls2 = new stdClass();

$collection = Collection::object(function ($storage) use ($cls1, $cls2):void {
 $storage[$cls1] = 'data for object 1';
 $storage[$cls2] = [1,2,3];
});
```
