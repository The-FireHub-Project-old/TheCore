<title># Overloadable</title>

<code-block lang="php">
<![CDATA[interface Overloadable]]>
</code-block>













### ### Overloadable contract

<p><format style="italic">Overloading provides the means to dynamically create properties and methods. These dynamic entities are processed via
magic methods one can establish in a class for various action types.
The overloading methods are invoked when interacting with properties or methods that haven't been declared
or are *n't visible in the current scope.</format></p>

<deflist>
    <def title="Interface basic info:">
        <list><li>This interface was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Interface Name:">
        \FireHub\Core\Support\Contracts\Magic\Overloadable
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L26">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php">
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
|public|<a href="#__get()">__get</a>|### Reading data from inaccessible (protected or private) or non-existing properties|
|public|<a href="#__set()">__set</a>|### Writing data from inaccessible (protected or private) or non-existing properties|
|public|<a href="#__isset()">__isset</a>|### Triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties|
|public|<a href="#__unset()">__unset</a>|### Triggered by calling unset() on inaccessible (protected or private) or non-existing properties|

## method: __get {id="__get()"}

<code-block lang="php">
    <![CDATA[public Overloadable::__get(non-empty-string $name):mixed]]>
</code-block>













### ### Reading data from inaccessible (protected or private) or non-existing properties



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L38">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L38">
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
        <list><li>non-empty-string <format style="bold">$name</format> - <format style="italic">
Property name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>mixed - <format style="italic">Property value.</format></li></list>
    </def>
</deflist>
## method: __set {id="__set()"}

<code-block lang="php">
    <![CDATA[public Overloadable::__set(non-empty-string $name, mixed $value):void]]>
</code-block>













### ### Writing data from inaccessible (protected or private) or non-existing properties



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L53">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L53">
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
        <list><li>non-empty-string <format style="bold">$name</format> - <format style="italic">
Property name.
</format></li><li>mixed <format style="bold">$value</format> - <format style="italic">
Property value.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>
## method: __isset {id="__isset()"}

<code-block lang="php">
    <![CDATA[public Overloadable::__isset(non-empty-string $name):bool]]>
</code-block>













### ### Triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L65">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L65">
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
        <list><li>non-empty-string <format style="bold">$name</format> - <format style="italic">
Property name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if property exists, false otherwise.</format></li></list>
    </def>
</deflist>
## method: __unset {id="__unset()"}

<code-block lang="php">
    <![CDATA[public Overloadable::__unset(non-empty-string $name):void]]>
</code-block>













### ### Triggered by calling unset() on inaccessible (protected or private) or non-existing properties



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L77">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/contracts/magic/firehub.Overloadable.php#L77">
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
        <list><li>non-empty-string <format style="bold">$name</format> - <format style="italic">
Property name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>void</li></list>
    </def>
</deflist>