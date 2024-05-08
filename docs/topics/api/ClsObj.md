<title># ClsObj</title>

<code-block lang="php">
<![CDATA[abstract class \FireHub\Core\Support\LowLevel\ClsObj()]]>
</code-block>







<tip>
    <p>
        This is an <format style="bold">abstract</format> class that cannot be instantiated directly.
    </p>
</tip>





### ### Class and object low-level proxy class

<p><format style="italic">Class allows you to obtain information about classes and objects.</format></p>

<deflist>
    <def title="Class basic info:">
        <list><li>This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;</li><li>Copyright: 2024 FireHub Web Application Framework</li><li>License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3</li><li>Version: GIT: $Id$ Blob checksum.</li></list>
    </def>
</deflist>

<deflist><def title="Fully Qualified Class Name:">
        \FireHub\Core\Support\LowLevel\ClsObj
    </def><def title="Source code:">
        <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L37">
            View source code
        </a>
    </def>
    <def title="Blame:">
        <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php">
            View blame
        </a>
    </def>
    <def title="History:">
        <a href="https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php">
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
|public static |<a href="#methodexist()">methodExist</a>|### Checks if the class method exists|
|public static |<a href="#propertyexist()">propertyExist</a>|### Checks if the object or class has a property|
|public static |<a href="#ofclass()">ofClass</a>|### Checks whether the object or class is of a given type or subtype|
|public static |<a href="#subclassof()">subClassOf</a>|### Checks if class has this class as one of its parents or implements it|
|public static |<a href="#methods()">methods</a>|### Gets the class or object methods names|
|public static |<a href="#parentclass()">parentClass</a>|### Retrieves the parent class name for an object or class|
|public static |<a href="#parents()">parents</a>|### Return the parent classes of the given class|
|public static |<a href="#implements()">implements</a>|### Return the interfaces which are implemented by the given class or interface|
|public static |<a href="#uses()">uses</a>|### Return the traits used by the given class|

## method: methodExist {id="methodexist()"}

<code-block lang="php">
    <![CDATA[public static ClsObj::methodExist(class-string|object $object_or_class, non-empty-string $method):bool]]>
</code-block>













### ### Checks if the class method exists



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L54">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L54">
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
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
An object instance or a class name.
</format></li><li>non-empty-string <format style="bold">$method</format> - <format style="italic">
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
    <![CDATA[final public static ClsObj::propertyExist(class-string|object $object_or_class, non-empty-string $property):bool]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Checks if the object or class has a property

<p><format style="italic">This method checks if the given property exists in the specified class.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L79">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L79">
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
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
The class name or an object of the class to test for.
</format></li><li>non-empty-string <format style="bold">$property</format> - <format style="italic">
The name of the property.
</format></li></list>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L104">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L104">
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
    <![CDATA[public static ClsObj::subClassOf(class-string|object $object_or_class, class-string $class, bool $autoload = true):bool]]>
</code-block>













### ### Checks if class has this class as one of its parents or implements it

<p><format style="italic">Checks if the given object_or_class has the class $class as one of its parents or implements it.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L129">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L129">
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
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
The tested class. No error is generated if the class does not exist.
</format></li><li>class-string <format style="bold">$class</format> - <format style="italic">
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
    <![CDATA[final public static ClsObj::methods(class-string|object $object_or_class):string[]]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Gets the class or object methods names



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
    <def title="This method uses:">
        <list><li><a href="Cls.md#isclass()">\FireHub\Core\Support\LowLevel\Cls::isClass()</a>  - <format style="italic">To check if $object_or_class parameter is class.</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method has parameters:">
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
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
        <list><li>string[] - <format style="italic">Returns an array of method names defined for the class.</format></li></list>
    </def>
</deflist>
## method: parentClass {id="parentclass()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::parentClass(class-string|object $object_or_class):class-string|false]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Retrieves the parent class name for an object or class



<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L168">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L168">
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
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
The tested object or class name. This parameter is optional if called from the object's method.
</format></li></list>
    </def>
</deflist>
<deflist>
    <def title="This method returns:">
        <list><li>class-string or false - <format style="italic">The name of the parent class for the class that $object_or_class is an instance or the name, or false if object_or_class
doesn't have a parent.</format></li></list>
    </def>
</deflist>
## method: parents {id="parents()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::parents(class-string|object $object_or_class, bool $autoload = true):array<string,class-string>]]>
</code-block>





<tip>
    <p>
        This method is marked as <format style="bold">final</format>.
    </p>
</tip>







### ### Return the parent classes of the given class

<p><format style="italic">This function returns an array with the name of the parent classes of the given object_or_class.</format></p>

<deflist><def title="Source code:">
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L192">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L192">
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
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
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
        <list><li>array&lt;string,class-string&gt; - <format style="italic">An array on success.</format></li></list>
    </def>
</deflist>
## method: implements {id="implements()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::implements(class-string|object $object_or_class, bool $autoload = true):array<string,class-string>]]>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L218">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L218">
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
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
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
        <list><li>array&lt;string,class-string&gt; - <format style="italic">An array.</format></li></list>
    </def>
</deflist>
## method: uses {id="uses()"}

<code-block lang="php">
    <![CDATA[final public static ClsObj::uses(class-string|object $object_or_class, bool $autoload = true):array<string,class-string>]]>
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
                <a href="https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L244">
                    View source code
                </a>
            </def>
            <def title="Blame:">
                <a href="https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L244">
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
        <list><li>class-string or object <format style="bold">$object_or_class</format> - <format style="italic">
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
        <list><li>array&lt;string,class-string&gt; - <format style="italic">An array.</format></li></list>
    </def>
</deflist>