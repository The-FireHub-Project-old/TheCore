<title># Obj</title>

<code-block lang="php">
<![CDATA[final class \FireHub\Core\Support\LowLevel\Obj()]]>
</code-block>





<tip>
    <p>
        This class is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Object low-level proxy class

<p><format style="italic">Class allows you to obtain information about objects.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\Obj
    </def><def title="Parent class:">
        <a href="ClsObj.md">\FireHub\Core\Support\LowLevel\ClsObj</a>
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L29">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php">
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
|public static |<a href="#id()">id</a>|### Return the integer object handle for given object|
|public static |<a href="#hash()">hash</a>|### Return hash id for a given object|
|public static |<a href="#classname()">className</a>|### Returns the name of the class of an object|
|public static |<a href="#properties()">properties</a>|### Gets the properties of the given object|
|public static |<a href="#mangledproperties()">mangledProperties</a>|### Gets the class public property values|
|inherited public static |<a href="#methodexist()">methodExist</a>|### Checks if the class method exists|
|inherited public static |<a href="#propertyexist()">propertyExist</a>|### Checks if the object or class has a property|
|inherited public static |<a href="#ofclass()">ofClass</a>|### Checks whether the object or class is of a given type or subtype|
|inherited public static |<a href="#subclassof()">subClassOf</a>|### Checks if class has this class as one of its parents or implements it|
|inherited public static |<a href="#methods()">methods</a>|### Gets the class or object methods names|
|inherited public static |<a href="#parentclass()">parentClass</a>|### Retrieves the parent class name for an object or class|
|inherited public static |<a href="#parents()">parents</a>|### Return the parent classes of the given class|
|inherited public static |<a href="#implements()">implements</a>|### Return the interfaces which are implemented by the given class or interface|
|inherited public static |<a href="#uses()">uses</a>|### Return the traits used by the given class|

## method: id {id="id()"}

<code-block lang="php">
    <![CDATA[public static Obj::id(object $object):int]]>
</code-block>













### ### Return the integer object handle for given object

<p><format style="italic">This function returns a unique identifier for the object. The object id is unique for the lifetime of the object.
Once the object is destroyed, its id may be reused for other objects. This behavior is similar to [[Obj#hash()]].</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L47">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L47">
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
        <list><li>object <format style="bold">$object</format> - <format style="italic">
Any object.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>int - <format style="italic">An integer identifier that is unique for each currently existing object and
is always the same for each object.</format></li></list>
    </def>
</deflist>
## method: hash {id="hash()"}

<code-block lang="php">
    <![CDATA[public static Obj::hash(object $object):string]]>
</code-block>













### ### Return hash id for a given object

<p><format style="italic">This function returns a unique identifier for the object. This id can be used as a hash key for storing objects,
or for identifying an object, as long as the object is not destroyed. Once the object is destroyed, its hash
may be reused for other objects.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L71">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L71">
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
        <list><li>object <format style="bold">$object</format> - <format style="italic">
Any object.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic">A string that is unique for each currently existing object and is always the same for each object.</format></li></list>
    </def>
</deflist>
## method: className {id="classname()"}

<code-block lang="php">
    <![CDATA[public static Obj::className(object $object):string]]>
</code-block>













### ### Returns the name of the class of an object



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L88">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L88">
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
        <list><li>object <format style="bold">$object</format> - <format style="italic">
The tested object.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string - <format style="italic"><code>class-string</code> The name of the class of which object is an instance.</format></li></list>
    </def>
</deflist>
## method: properties {id="properties()"}

<code-block lang="php">
    <![CDATA[public static Obj::properties(object $object):array]]>
</code-block>













### ### Gets the properties of the given object

<p><format style="italic">Gets the accessible non-static properties of the given object according to scope.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L110">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L110">
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
        <list><li>object <format style="bold">$object</format> - <format style="italic">
An object instance.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<string, mixed> ]]></code> An associative array of defined object-accessible
non-static properties for a specified object in scope.</format></li></list>
    </def>
</deflist>
## method: mangledProperties {id="mangledproperties()"}

<code-block lang="php">
    <![CDATA[public static Obj::mangledProperties(object $object):array]]>
</code-block>













### ### Gets the class public property values

<p><format style="italic">Returns an array whose elements are the object's properties. The keys are the member variable names, with a
few notable exceptions: private variables have the class name prepended to the variable name, and protected
variables have a * prepended to the variable name. These prepended values have NUL bytes on either side.
Uninitialized typed properties are silently discarded.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L133">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.Obj.php#L133">
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
        <list><li>object <format style="bold">$object</format> - <format style="italic">
An object instance.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array-key, mixed> ]]></code> An array containing all properties, regardless
of visibility, of an object.</format></li></list>
    </def>
</deflist>
## method: methodExist {id="methodexist()"}

<code-block lang="php">
    <![CDATA[public static ClsObj::methodExist(string|object $object_or_class, string $method):bool]]>
</code-block>













### ### Checks if the class method exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L58">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L58">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
An object instance or a class name.
</format></li><li>string <format style="bold">$method</format> - <format style="italic">
<code>non-empty-string</code>
The method name.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the method given by method has been defined for the given object_or_class, false otherwise.</format></li></list>
    </def>
</deflist>
## method: propertyExist {id="propertyexist()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::propertyExist(string|object $object_or_class, string $property):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if the object or class has a property

<p><format style="italic">This method checks if the given property exists in the specified class.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L89">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L89">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
The class name or an object of the class to test for.
</format></li><li>string <format style="bold">$property</format> - <format style="italic">
<code>non-empty-string</code>
The name of the property.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If there was an error trying to get property.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the property exists, false if it doesn't exist.</format></li></list>
    </def>
</deflist>
## method: ofClass {id="ofclass()"}

<code-block lang="php">
    <![CDATA[public static ClsObj::ofClass(string|object $object_or_class, string $class, bool $autoload = true):bool]]>
</code-block>













### ### Checks whether the object or class is of a given type or subtype

<p><format style="italic">Checks if the given $object_or_class is of this object type or has this object type as one of its supertypes.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L123">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L123">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
A class name or an object instance.
</format></li><li>string <format style="bold">$class</format> - <format style="italic">
The class or interface name.
</format></li><li>bool <format style="bold">$autoload</format> = true - <format style="italic">[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the object is of this object type or has this object type as one of its supertypes,
false otherwise.</format></li></list>
    </def>
</deflist>
## method: subClassOf {id="subclassof()"}

<code-block lang="php">
    <![CDATA[public static ClsObj::subClassOf(string|object $object_or_class, string $class, bool $autoload = true):bool]]>
</code-block>













### ### Checks if class has this class as one of its parents or implements it

<p><format style="italic">Checks if the given object_or_class has the class $class as one of its parents or implements it.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L151">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L151">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
The tested class. No error is generated if the class does not exist.
</format></li><li>string <format style="bold">$class</format> - <format style="italic">
The class or interface name.
</format></li><li>bool <format style="bold">$autoload</format> = true - <format style="italic">[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>bool - <format style="italic">True if the object is of this object or lass type or has this object type as one of its supertypes,
false otherwise.</format></li></list>
    </def>
</deflist>
## method: methods {id="methods()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::methods(string|object $object_or_class):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets the class or object methods names



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L176">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L176">
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
        <list><li><a href="Cls.md#isclass()">\FireHub\Core\Support\LowLevel\Cls::isClass()</a>  - <format style="italic">To check if $object_or_class parameter is class.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
The class name or an object instance.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="TypeError.md">\TypeError</a> - <format style="italic">If $object_or_class is not an object or a valid class name.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<string> ]]></code> Returns an array of method names defined for the class.</format></li></list>
    </def>
</deflist>
## method: parentClass {id="parentclass()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::parentClass(string|object $object_or_class):string|false]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Retrieves the parent class name for an object or class



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L196">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L196">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
The tested object or class name. This parameter is optional if called from the object's method.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>string or false - <format style="italic"><code>class-string|false</code> The name of the parent class for the class that
$object_or_class is an instance or the name, or false if object_or_class doesn't have a parent.</format></li></list>
    </def>
</deflist>
## method: parents {id="parents()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::parents(string|object $object_or_class, bool $autoload = true):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Return the parent classes of the given class

<p><format style="italic">This function returns an array with the name of the parent classes of the given object_or_class.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L223">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L223">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
An object (class instance) or a string (class or interface name).
</format></li><li>bool <format style="bold">$autoload</format> = true - <format style="italic">[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $object_or_class does not exist and could not be loaded.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<string, class-string> ]]></code> An array on success.</format></li></list>
    </def>
</deflist>
## method: implements {id="implements()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::implements(string|object $object_or_class, bool $autoload = true):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Return the interfaces which are implemented by the given class or interface

<p><format style="italic">This function returns an array with the names of the interfaces that the given object_or_class
and its parents implement.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L252">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L252">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
An object (class instance) or a string (class or interface name).
</format></li><li>bool <format style="bold">$autoload</format> = true - <format style="italic">[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $object_or_class does not exist and could not be loaded.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<string, class-string> ]]></code> An array.</format></li></list>
    </def>
</deflist>
## method: uses {id="uses()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::uses(string|object $object_or_class, bool $autoload = true):array]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Return the traits used by the given class

<p><format style="italic">This function returns an array with the names of the traits that the given object_or_class uses.
This does, however, not include any traits used by a parent class.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L281">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L281">
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
        <list><li>string or object <format style="bold">$object_or_class</format> - <format style="italic">
<code>class-string|object</code>
An object (class instance) or a string (class or interface name).
</format></li><li>bool <format style="bold">$autoload</format> = true - <format style="italic">[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method throws:">
        <list><li><a href="Error.md">\Error</a> - <format style="italic">If $object_or_class does not exist and could not be loaded.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>array - <format style="italic"><code><![CDATA[ array<string, class-string> ]]></code> An array.</format></li></list>
    </def>
</deflist>