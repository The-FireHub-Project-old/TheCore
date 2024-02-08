```php
enum Permission
```











### ### File permission enum



<sub>_This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Enum Name:  **\FireHub\Core\Support\Enums\FileSystem\Permission**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L21)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php)**</sub>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#nothing">NOTHING</a>|### User has no permissions|0|
|<a href="#execute">EXECUTE</a>|### User with execute permissions can run a file as a program|1|
|<a href="#write">WRITE</a>|### Grants the capability to modify, or remove the content of the file|2|
|<a href="#write_execute">WRITE_EXECUTE</a>|### Combination of write and execute permissions|3|
|<a href="#read">READ</a>|### Grants the capability to read, i.e., view the contents of the file|4|
|<a href="#read_execute">READ_EXECUTE</a>|### Combination of read and execute permissions|5|
|<a href="#read_write">READ_WRITE</a>|### Combination of read and write permissions|6|
|<a href="#all">ALL</a>|### User has all permissions: read, write and execute|7|

<h2><a name="nothing"># case: NOTHING</a></h2>

```php
NOTHING
```





### ### User has no permissions



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L27)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L27)**</sub>
<h2><a name="execute"># case: EXECUTE</a></h2>

```php
EXECUTE = 1
```





### ### User with execute permissions can run a file as a program



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L33)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L33)**</sub>
<h2><a name="write"># case: WRITE</a></h2>

```php
WRITE = 2
```





### ### Grants the capability to modify, or remove the content of the file



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L39)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L39)**</sub>
<h2><a name="write_execute"># case: WRITE_EXECUTE</a></h2>

```php
WRITE_EXECUTE = 3
```





### ### Combination of write and execute permissions



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L45)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L45)**</sub>
<h2><a name="read"># case: READ</a></h2>

```php
READ = 4
```





### ### Grants the capability to read, i.e., view the contents of the file



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L51)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L51)**</sub>
<h2><a name="read_execute"># case: READ_EXECUTE</a></h2>

```php
READ_EXECUTE = 5
```





### ### Combination of read and execute permissions



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L57)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L57)**</sub>
<h2><a name="read_write"># case: READ_WRITE</a></h2>

```php
READ_WRITE = 6
```





### ### Combination of read and write permissions



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L63)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L63)**</sub>
<h2><a name="all"># case: ALL</a></h2>

```php
ALL = 7
```





### ### User has all permissions: read, write and execute



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L69)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/filesystem/firehub.Permission.php#L69)**</sub>