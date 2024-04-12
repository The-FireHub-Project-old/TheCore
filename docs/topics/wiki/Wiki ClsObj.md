```php
abstract class \FireHub\Core\Support\LowLevel\ClsObj()
```







> [!IMPORTANT]
This is an **abstract** class that cannot be instantiated directly.



### ### Class and object low-level proxy class

_Class allows you to obtain information about classes and objects._

<sub>_This class was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Class Name:  **\FireHub\Core\Support\LowLevel\ClsObj**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L37)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php)**</sub>


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

<h2><a name="methodexist()"># method: methodExist</a></h2>

```php
public static ClsObj::methodExist(string|object $object_or_class, string $method):bool
```











### ### Checks if the class method exists



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L58)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L58)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
An object instance or a class name._
* string **$method** - _<code>non-empty-string</code>
The method name._
#### Returns

* bool - _True if the method given by method has been defined for the given object_or_class, false otherwise._
<h2><a name="propertyexist()"># method: propertyExist</a></h2>

```php
final public static ClsObj::propertyExist(string|object $object_or_class, string $property):bool
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Checks if the object or class has a property

_This method checks if the given property exists in the specified class._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L87)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L87)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
The class name or an object of the class to test for._
* string **$property** - _<code>non-empty-string</code>
The name of the property._
#### Returns

* bool - _True if the property exists, false if it doesn't exist._
<h2><a name="ofclass()"># method: ofClass</a></h2>

```php
public static ClsObj::ofClass(string|object $object_or_class, string $class, bool $autoload = true):bool
```











### ### Checks whether the object or class is of a given type or subtype

_Checks if the given $object_or_class is of this object type or has this object type as one of its supertypes._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L112)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L112)**</sub>
#### Parameters

* string or object **$object_or_class** - _A class name or an object instance._
* string **$class** - _The class or interface name._
* bool **$autoload** = true - _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._
#### Returns

* bool - _True if the object is of this object type or has this object type as one of its supertypes,
false otherwise._
<h2><a name="subclassof()"># method: subClassOf</a></h2>

```php
public static ClsObj::subClassOf(string|object $object_or_class, string $class, bool $autoload = true):bool
```











### ### Checks if class has this class as one of its parents or implements it

_Checks if the given object_or_class has the class $class as one of its parents or implements it._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L140)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L140)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
The tested class. No error is generated if the class does not exist._
* string **$class** - _The class or interface name._
* bool **$autoload** = true - _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._
#### Returns

* bool - _True if the object is of this object or lass type or has this object type as one of its supertypes,
false otherwise._
<h2><a name="methods()"># method: methods</a></h2>

```php
final public static ClsObj::methods(string|object $object_or_class):array
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Gets the class or object methods names



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L165)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L165)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
The class name or an object instance._
#### Throws

* [\TypeError](./Wiki-TypeError) - _If $object_or_class is not an object or a valid class name._
#### Returns

* array - _<code>array<string></code> Returns an array of method names defined for the class._
<h2><a name="parentclass()"># method: parentClass</a></h2>

```php
final public static ClsObj::parentClass(string|object $object_or_class):string|false
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Retrieves the parent class name for an object or class



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L185)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L185)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
The tested object or class name. This parameter is optional if called from the object's method._
#### Returns

* string or false - _<code>class-string|false</code> The name of the parent class for the class that
$object_or_class is an instance or the name, or false if object_or_class doesn't have a parent._
<h2><a name="parents()"># method: parents</a></h2>

```php
final public static ClsObj::parents(string|object $object_or_class, bool $autoload = true):array
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Return the parent classes of the given class

_This function returns an array with the name of the parent classes of the given object_or_class._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L212)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L212)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
An object (class instance) or a string (class or interface name)._
* bool **$autoload** = true - _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._
#### Throws

* [\Error](./Wiki-Error) - _If $object_or_class does not exist and could not be loaded._
#### Returns

* array - _<code>array<string, class-string></code> An array on success._
<h2><a name="implements()"># method: implements</a></h2>

```php
final public static ClsObj::implements(string|object $object_or_class, bool $autoload = true):array
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Return the interfaces which are implemented by the given class or interface

_This function returns an array with the names of the interfaces that the given object_or_class
and its parents implement._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L241)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L241)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
An object (class instance) or a string (class or interface name)._
* bool **$autoload** = true - _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._
#### Throws

* [\Error](./Wiki-Error) - _If $object_or_class does not exist and could not be loaded._
#### Returns

* array - _<code>array<string, class-string></code> An array._
<h2><a name="uses()"># method: uses</a></h2>

```php
final public static ClsObj::uses(string|object $object_or_class, bool $autoload = true):array
```





> [!IMPORTANT]
This method is marked as **final**.





### ### Return the traits used by the given class

_This function returns an array with the names of the traits that the given object_or_class uses.
This does, however, not include any traits used by a parent class._

><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L270)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/lowlevel/firehub.ClsObj.php#L270)**</sub>
#### Parameters

* string or object **$object_or_class** - _<code>class-string|object</code>
An object (class instance) or a string (class or interface name)._
* bool **$autoload** = true - _[optional] 
Whether to allow this function to load the class automatically through the __autoload magic method._
#### Throws

* [\Error](./Wiki-Error) - _If $object_or_class does not exist and could not be loaded._
#### Returns

* array - _<code>array<string, class-string></code> An array._