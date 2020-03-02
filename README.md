# VISUAL COMUNICACION
Simple website built in procedural PHP.

***
## Technologies:
* PHP
* HTML5
* CSS3
* Javascript

***
## How It Works
Each section of the website is contained within its own PHP file, all of which are located at the root.
At the top of each file, the $current variable is declared. Its value will be a string containing the name of the current section.
Then, the _tools.php_ file is called via _require_once_. This file is located inside the _includes_ folder at the root.

Example:
```php
$current = 'Dónde estamos';
require_once 'includes/tools.php';
```

***
### tools.php
This file contains the following set of constants and functions, which are used across the whole site.

##### Constants
* __SITENAME__: Contains a string with the name of the company.
* __TIMESTAMP__: Contains a string or a number with the current version of the website. This can be set to the PHP function 'time()' while developing, in order to avoid caching of CSS and Javascript files.

##### Functions
* __URLParse($str)__: Takes in a string and parses it in order to make it URL friendly by removing its special characters, replacing all spaces with '-' and returning it in all lower case. (Example- 'Impresión Directa' would be returned as 'impresion-directa').
* __printTitle()__: Function used to echo inside the 'title' tag in the head of the rendered HTML document. It will first echo the value of SITENAME followed by ' - ' and the value of $current. If the value of $current is 'Home', only SITENAME will be echoed.
* __printCurrentStylesheet()__: While all sections of the website share the same CSS files, each will also have its own unique one. This function takes the value of $current and prints a 'link' tag pointing to the required CSS file. (All CSS files are located inside the 'css' folder at the root).
* __printLogo()__: It will render the logo image inside an anchor tag pointing to the home page. If the home page is currently being displayed in the browser, only the image will be rendered (without the anchor tag).
* __printNavLinks__: This function contains an associative array containing the links in the navigation bar. The value of the key 'link' will point at the destination. The value of the key 'name' is what will be rendered in the navigation bar. If the value of the key 'button' is set to true, the link will be rendered with a 'button' class. If the value of 'name' is equal to the value of $current, the link will be rendered with a 'current' class and its link will be replaced with '#' in order to make it inactive.
* __printHeading()__: Echoes the value of $current as an all upper case string.

***
### Layout
After instantiating the $current variable and calling the 'tools.php' file, a DOCTYPE and 'html' tags will be required. Inside these, the following structure must be followed:

* __Head__: The file 'head.php' which is located inside the 'includes' folder can be called via 'require-once'.
* __Header__: The file 'header.php' which is located inside the 'includes' folder can be called via 'include-once'.
* __Main__: The content for each individual section must be inserted inside 'main' tags.
* __Footer__: The file 'footer.php' which is located inside the 'includes' folder can be called via 'include-once'.
* __Scripts__: The file 'scripts.php' which is located inside the 'includes' folder can be called via 'include-once'.

Example:

```php
<?php
	require_once 'includes/tools.php';
	$current = ''; // Name Of The Current Section
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php'; ?>
<body>
	<? include_once 'includes/header.php'; ?>
	<main>
		<!-- CONTENT GOES HERE -->
	</main>
	<? include_once 'includes/footer.php'; ?>
	<? include_once 'includes/scripts.php'; ?>
</body>
</html>
```


##### Scripts
Inside 'scripts.php' different Javascript files will be called, depending on which section of the website is currently being displayed in the browser. All Javascript files are located inside the 'js' folder at the root.

***
### send.php
This file is located inside the 'includes' folder, and it is called when submitting the contact form. It will call the Google reCaptcha API via curl (in order to differentiate between bots and real users), handle the data inputted by the user and send it via email to the owner of the company.