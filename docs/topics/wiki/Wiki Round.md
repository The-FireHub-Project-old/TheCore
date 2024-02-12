```php
enum Round
```











### ### Round number enum



<sub>_This enum was created by Danijel Galić &lt;danijel.galic@outlook.com&gt;_</sub><br/><sub>_Copyright: 2024 FireHub Web Application Framework_</sub><br/><sub>_License: &lt;https://opensource.org/licenses/OSL-3.0&gt; OSL Open Source License version 3_</sub><br/><sub>_Version: GIT: $Id$ Blob checksum._</sub>

><sub>Fully Qualified Enum Name:  **\FireHub\Core\Support\Enums\Number\Round**</sub><br/>
    <sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L21)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php)**</sub><br/>
        <sub>History:  **[view history](https://github.com/The-FireHub-Project/Core/commits/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php)**</sub>


### Cases
| Name | Title | Value |
|:-----|:------|:------|
|<a href="#half_up">HALF_UP</a>|### Rounds number away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2||
|<a href="#half_down">HALF_DOWN</a>|### Rounds number towards zero when it is half way there, making 1.5 into 1 and -1.5 into -1||
|<a href="#half_even">HALF_EVEN</a>|### towards the nearest even value when it is half way there, making both 1.5 and 2.5 into 2||
|<a href="#half_odd">HALF_ODD</a>|### Rounds number towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3||

<h2><a name="half_up"># case: HALF_UP</a></h2>

```php
HALF_UP
```





### ### Rounds number away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L27)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L27)**</sub>
<h2><a name="half_down"># case: HALF_DOWN</a></h2>

```php
HALF_DOWN
```





### ### Rounds number towards zero when it is half way there, making 1.5 into 1 and -1.5 into -1



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L33)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L33)**</sub>
<h2><a name="half_even"># case: HALF_EVEN</a></h2>

```php
HALF_EVEN
```





### ### towards the nearest even value when it is half way there, making both 1.5 and 2.5 into 2



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L39)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L39)**</sub>
<h2><a name="half_odd"># case: HALF_ODD</a></h2>

```php
HALF_ODD
```





### ### Rounds number towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3



><sub>Source code:  **[view source code](https://github.com/The-FireHub-Project/Core/blob/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L45)**</sub><br/>
        <sub>Blame:  **[view blame](https://github.com/The-FireHub-Project/Core/blame/develop-pre-alpha-m1/src/support/enums/number/firehub.Round.php#L45)**</sub>